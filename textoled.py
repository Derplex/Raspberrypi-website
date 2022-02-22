import board
import digitalio
from PIL import Image, ImageDraw, ImageFont
import adafruit_ssd1306

import sys

oled_reset = digitalio.DigitalInOut(board.D4)

WIDTH = 128
HEIGHT = 64


i2c = board.I2C()
oled = adafruit_ssd1306.SSD1306_I2C(WIDTH, HEIGHT, i2c, addr=0x3C, reset=oled_reset)



def tekentext(text):
    
    image = Image.new("1", (oled.width, oled.height))

    draw = ImageDraw.Draw(image)
    font = ImageFont.load_default()
    (font_width, font_height) = font.getsize(text)
    draw.text(
        ( (oled.width // 2 - font_width // 2) , (oled.height // 2 - font_height // 2) ),
        text,
        font=font,
        fill=255,
    )
    
    # Display image
    oled.image(image)
    oled.show()
    
if __name__== '__main__':
    tekentext(str(sys.argv[1]))



