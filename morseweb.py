#!/usr/bin/env python3
#from gpiozero import LED
import time
import sys
import RPi.GPIO as GPIO
from locking import lock,unlock,getlockstatus

morse=21
#led = LED(21)
letters = {
"a": [1,3],
"b": [3,1,1,1],
"c": [3,1,3,1],
"d": [3,1,1],
"e": [1],
"f": [1,1,3,1],
"g": [3,3,1],
"h": [1,1,1,1],
"i": [1,1],
"j": [1,3,3,3],
"k": [3,1,3],
"l": [1,3,1,1],
"m": [3,3],
"n": [3,1],
"o": [3,3,3],
"p": [1,3,3,1],
"q": [3,3,1,3],
"r": [1,3,1],
"s": [1,1,1],
"t": [3],
"u": [1,1,3],
"v": [1,1,1,3],
"w": [1,3,3],
"x": [3,1,1,3],
"y": [3,1,3,3],
"z": [3,3,1,1],
",": [3,3,1,1,3,3],
".": [1,3,1,3,1,3],
"!": [1,1,3,3,1],
"?": [1,1,3,3,1,1],
"1":[3,1,1,1,1],
"2":[3,3,1,1,1],
"3":[3,3,3,1,1],
"4":[3,3,3,3,1],
"5":[3,3,3,3,3],
"6":[1,3,3,3,3],
"7":[1,1,3,3,3],
"8":[1,1,1,3,3],
"9":[1,1,1,1,3],
"0":[1,1,1,1,1]
}



GPIO.setmode(GPIO.BCM)    

def initialize():
  morse=21


  for pin in [morse]:

      GPIO.setup(pin,GPIO.OUT)
      GPIO.output(pin, False)




def clean(morse):
    GPIO.cleanup((morse))

def doemorse(tijd,textsplode):

    for woord in textsplode:
        for letter in woord:
            try:
                code=letters[letter]
            except:
                print(letter,'ken ik niet')
                code=[]
            print(letter,code)
            for x in code:
                GPIO.output(morse,True)
                time.sleep(x*tijd)
                GPIO.output(morse,False)
                time.sleep(tijd)
            time.sleep(2*tijd)
            
        time.sleep(4*tijd)



def main(text):
    textsplode = str(text).lower().split()
    tijd=0.12
    print(textsplode)
   
    if not (getlockstatus()):
        lock()
        initialize()
        print("ik doe het!")
        try:
            doemorse(tijd,textsplode)
        except:
            unlock()
            clean(21)
        clean(21)
        unlock()
    else:
        print("ik ben bezig")
    
        
    
    
if __name__=='__main__':
    main(sys.argv[1])

