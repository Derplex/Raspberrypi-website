import sys
import time
import RPi.GPIO as GPIO

def lampje(status):
    print(status)
    pin=21
    try:
        GPIO.setmode(GPIO.BCM) 
        GPIO.setup(pin,GPIO.OUT)
        print("gelukt")
    except:
        print("werkt niet")
        return("werkt niet")
    
    
    if status=="aan":
        print("hier gekomen")
        GPIO.output(pin,True)
    elif status=="uit":
        print("hier gekomen 2")
        GPIO.output(pin,False)
    else:
        print("ik snap het niet")
        return("verkeerde var")


if __name__== '__main__':
    lampje(sys.argv[1])

