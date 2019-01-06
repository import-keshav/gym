from faker import Faker
import random
import hashlib

fake = Faker()



def getSalt():
    string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}[]:;<>,.?'
    chars = []
    for i in range(16):
        chars.append(random.choice(string))
    string = "".join(chars)
    return string

salt = getSalt()

def getPassword(dynamic_salt):
    primary_password = fake.password()
    secoundary_password = primary_password + dynamic_salt + salt
    password = hashlib.sha256(secoundary_password.encode()).hexdigest()
    return password

def getMobileNum():
    str = "+91"
    

for i in range(1000):
    primary_name = fake.name() 
    
    name =  '"name" : "' + primary_name + '",'
    email = '"email" : "' + fake.email() + '",'
    bmi = random.randint(150,250)/10	

    mobile_num = getMobileNum()
    address = '"address" : "' + fake.address() + '",'
    username = '"username": "' + str(primary_name).replace(' ','_') + '",'
    
    dynamic_salt = getSalt()
    store_dynamic_salt = '"dynamicSalt" : "' + dynamic_salt + '",'
    
    password = getPassword(dynamic_salt)
    store_password = '"password" : "' + password + '",'

print(password)
