import requests
import json


url="https://thatcopy.pw/catapi/rest/"

response = requests.get(url)

data=response.json()
json_format= json.dumps(data,indent=4)


print(json_format)
