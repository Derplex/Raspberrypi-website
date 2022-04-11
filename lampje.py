#!/usr/bin/env python3
import sys
import time
import RPi.GPIO as GPIO


def initialize():
    pin=21
    try:
        GPIO.setmode(GPIO.BCM) 
        GPIO.setup(pin,GPIO.OUT)
        print("gelukt")
        return(True)
    except:
        print("werkt niet")
        return(False)
    




def lampje(status):
    print(status)

    pin=21
    
    initialize()
    
    if status=="aan":

        GPIO.output(pin,True)
    elif status=="uit":

        GPIO.output(pin,False)
    else:
        print("ik snap het niet")
        return("verkeerde var")


if __name__== '__main__':
    lampje(sys.argv[1])

