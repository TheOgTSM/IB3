from influxdb import *
import time

client = InfluxDBClient(host='localhost', port=8086)

# Query server for new results every 2 minutes to limit load on database
while 1:

    #temperature
    query_temp = client.query('SELECT * FROM temperature ORDER BY time DESC LIMIT 100')
    results_temp = query_temp.raw

    with open("temperatureResults.json", "w") as file:
        file.write(results_temp)

    #quality
    query_qual = client.query('SELECT * FROM airquality ORDER BY time DESC LIMIT 100')
    results_qual = query_qual.raw

    with open("airQualityResults.json", "w") as file:
        file.write(results_qual)

    #light
    query_light = client.query('SELECT * FROM light ORDER BY time DESC LIMIT 100')
    results_light = query_light.raw

    with open("LightResults.json", "w") as file:
        file.write(results_light)

    #wait 2 minutes
    time.sleep(120)
