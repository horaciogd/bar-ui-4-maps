bar-ui-4-maps
=============

Simple player for soundmaps on Umap

Third Part components: SoundManager 2 V2.97a.20150601 - *Scott Schiller*

**+ Info:** http://www.vhplab.net/spip.php?article342

How to
------


**1) Requirements**

You will need a server that can run PHP, because the player dynamically collects the URL and the name of the track from a list of audio that is sent as an $_GET variable.


**2) Upload it to your server**

Download bar-ui-4-maps on GitHub and upload it to your server.


**3) Create your map using Umap**

![alt tag](http://www.vhplab.net/IMG/png/umap.png)
Create a map using Umap.


**4) Use iframes for the players**

As each marker's content, add an iframe to the audio player using the following shortcut.

*{{{FULL_URL}}}*


**5) Player's URL scheme**

Conform the URL of each player so it can play a different list of recordings according to the following scheme

*PLAYER_URL + ?file= +  RECORDINGS_LIST*


**6) Recording list scheme**

You can add as many recordings as you want to the list, but it is essential that all information after "? File =" follows strictly the next scheme and is encoded, not written using regular characters.

*URL_DEL_AUDIO + :: +  NOMBRE_DEL_AUDIO + , +   URL_DEL_AUDIO + :: + NOMBRE_DEL_AUDIO*


**7) Encode your list data**

Once you have a recording list ready, you can use this form - http://meyerweb.com/eric/tools/dencoder/ - to encode it, you just need to copy it in the text box and press encode.

For example, to play this audio – *https://archive.org/download/AveMaria_201610/Carraca.mp3* – under the following title – *Campás e Campaneiros 2016 - Carraca de mondoñedo* –  and this audio – *https://archive.org/download/AveMaria_201610/Roda_de_campanillas.mp3* – under the following title – *Campás e Campaneiros 2016 - Roda de campanillas* –, write *https://archive.org/download/AveMaria_201610/Carraca.mp3::Campás e Campaneiros 2016 - Carraca de mondoñedo,https://archive.org/download/AveMaria_201610/Roda_de_campanillas.mp3::Campás e Campaneiros 2016 - Roda de campanillas* in the text area to get the following encoded result *https%3A%2F%2Farchive.org%2Fdownload%2FAveMaria_201610%2FCarraca.mp3%3A%3ACamp%C3%A1s%20e%20Campaneiros%202016%20-%20Carraca%20de%20mondo%C3%B1edo%2Chttps%3A%2F%2Farchive.org%2Fdownload%2FAveMaria_201610%2FRoda_de_campanillas.mp3%3A%3ACamp%C3%A1s%20e%20Campaneiros%202016%20-%20Roda%20de%20campanillas*

![alt tag](http://www.vhplab.net/IMG/png/url_decoded.png)


**8) Conform the Player's URL**

Add your encoded recording list to the player's URL as indicated before (step 4).

*PLAYER_URL + ?file= +  RECORDINGS_LIST*

For the previous example player's URL would be:

*https://debug.cgeomap.eu/bar-ui/index.php?file=https%3A%2F%2Farchive.org%2Fdownload%2FAveMaria_201610%2FCarraca.mp3%3A%3ACamp%C3%A1s%20e%20Campaneiros%202016%20-%20Carraca%20de%20mondo%C3%B1edo%2Chttps%3A%2F%2Farchive.org%2Fdownload%2FAveMaria_201610%2FRoda_de_campanillas.mp3%3A%3ACamp%C3%A1s%20e%20Campaneiros%202016%20-%20Roda%20de%20campanillas*

![alt tag](http://www.vhplab.net/IMG/png/umap-marker-edition-full.png)


**9) Share your Sound Map**

Finally, share your map or embed it in your web.

*http://u.osmfr.org/m/107315/*

![alt tag](http://www.vhplab.net/IMG/png/bar_ui_4_maps_-_umap_-_2016-10-16_11.37.30.png)


Important Note
--------------

Many platforms such as IOS or Android are changing their policy regarding the required permissions on web map applications so by default all content must be served throught https. If you don't have a security certificate your player may not be displayed in some browsers. If that's the case you can use directly our player: *https://debug.cgeomap.eu/bar-ui/index.php*