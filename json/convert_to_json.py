from influxdb import *
import time

client = InfluxDBClient(host='localhost', port=8086)
#look for all unique module values, this will return a list of all connected sensors
module_query = 'SELECT distinct(module) FROM data'
modules = client.query(module_query)

# Query server for new results every 2 minutes to limit load on database
while 1:

    module_list = []
    for i in range(len(modules)):
        current_module = mudules[i]

        #temperature
        query_temp = client.query('SELECT temperature WHERE module = \'' + current_module + '\'data ORDER BY time DESC LIMIT 100')
        results_temp = query_temp.raw

        temp_file = '/temperatureResults' + current_module + '.json'
        with open(temp_file, "w") as file:
            file.write(results_temp)

        #quality
        query_qual = client.query('SELECT airquality WHERE module = \'' + current_module + '\'data ORDER BY time DESC LIMIT 100')
        results_qual = query_qual.raw

        qual_file = '/airQualityResults' + current_module + '.json'
        with open(qual_file, "w") as file:
            file.write(results_qual)

        #light
        query_light = client.query('SELECT light WHERE module = \'' + current_module + '\'data ORDER BY time DESC LIMIT 100')
        results_light = query_light.raw

        light_file = '/LightResults' + current_module + '.json'
        with open(light_file, "w") as file:
            file.write(results_light)

        module_list.append(current_module)
        module_file = 'modules.json'
        with open(module_file, "w") as file:
            file.write(module_list)

    #wait 2 minutes
    time.sleep(120)
