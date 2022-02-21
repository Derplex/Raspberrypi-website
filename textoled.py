import board
import digitalio
from PIL import Image, ImageDraw, ImageFont
import PIL
import adafruit_ssd1306
import xmlrpc.server
from xmlrpc.server import SimpleXMLRPCServer
from xmlrpc.server import SimpleXMLRPCRequestHandler
import sys

oled_reset = digitalio.DigitalInOut(board.D4)

WIDTH = 128
HEIGHT = 64


i2c = board.I2C()
oled = adafruit_ssd1306.SSD1306_I2C(WIDTH, HEIGHT, i2c, addr=0x3C, reset=oled_reset)



def tekentext(text):
    plaatje=Image.new("1",(oled.width,oled.height))
    textplt=ImageDraw.Draw(plaatje)
    textplt.text((0,0),text,fill=255)
    
    
    
if __name__== '__main__':
    tekentext(sys.argv[1])



