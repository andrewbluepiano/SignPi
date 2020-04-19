

# SignPi
For an old iPod store sign.

Runs a verrrrrrryyyyyyy simple web app on the RasPi (just type the Pi's IP into your browser). Nothing else at this point.

### The Sign
<img src="https://i.imgur.com/yJKfxQL.jpg" width="500" /> 

## Setup
Intended to be run on a raspberry pi running raspbian buster with networking already setup. This might be done by running the 'sudo raspi-config' command, going to networking, then setting up your wifi. 

Then do a quick "wget https://raw.githubusercontent.com/andrewbluepiano/SignPi/master/lightPiSetup.sh"

Then a "chmod +x lightPiSetup.sh"

"./lightPiSetup.sh"

Sit back, relax, its gonna be done in a bit!


### The Wires
I use an amplifier for power management because I'm not an electrical engineer, and just dont wanna deal with that xD. The resistor is because I had residual light still being generated even when the power level control pin was set to 0. 
<img src="https://i.imgur.com/76YU2V7.jpg" width="500" />

### The (Current) UI
Very simple. But that was kind of the point, simple but functional. 
I did this in like 3 hours split over two days... very late at night.....  lots of remote schoolwork. This was a fun break.
<img src="https://i.imgur.com/ivacW0d.png" width="500" />


