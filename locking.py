def lock():
    f=open("/home/pi/morsebezig.txt","w")
    f.write("bezig")
    f.close()

def unlock():
    f=open("/home/pi/morsebezig.txt","w")
    f.write("klaar")
    f.close()


def getlockstatus():
    with open("/home/pi/morsebezig.txt","r") as f:
        if f.readlines()[0]=="klaar":
            return(False)
        return(True)