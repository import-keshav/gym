import requests
from bs4 import BeautifulSoup

url = "https://www.flipkart.com/search?q=gym+supplements&sid=dep%2C2kh%2C7z0&as=on&as-show=on&otracker=AS_QueryStore_OrganicAutoSuggest_0_10&otracker1=AS_QueryStore_OrganicAutoSuggest_0_10&as-pos=0&as-type=RECENT&as-backfill=on"

url_response = requests.get(url)
url_html_code = BeautifulSoup(url_response.text,'html.parser')
title = url_html_code.find_all('a' , {'class' : '_2cLu-l' })
images = url_html_code.find_all('div' , {'class' : '_3BTv9X' })
given_price = url_html_code.find_all('div' , {'class' : '_1vC4OE' })
original_price = url_html_code.find_all('div' , {'class' : '_3auQ3N' })
percentage_off = url_html_code.find_all('div' , {'class' : 'VGWI6T' })

individual_info = [] 
all_data_info = []

print(images)
for i in range(len(title)):
  individual_info.append(title[i].text)
  #image_link_text = BeautifulSoup(images[i],'html.parser')
  #image_src = image_link_text.a.img['src']
  #individual_info.append(image_src)
  individual_info.append(given_price[i].text)
  individual_info.append(original_price[i].text)
  individual_info.append(percentage_off[i].text)
  all_data_info.append(individual_info)
  individual_info = []
  print(all_data_info[i])
