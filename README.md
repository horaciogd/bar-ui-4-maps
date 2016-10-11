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

Create a map using Umap and, as each marker's content, add an iframe to the audio player using the following shortcut.

*{{{FULL_URL}}}*


**4) Player's URL scheme**

Conform the URL of each player so it can play a different list of recordings according to the following scheme

*PLAYER_URL + ?file= +  RECORDINGS_LIST*


**5) Recording list scheme**

You can add as many recordings as you want to the list, but it is essential that all information after "? File =" follows strictly the next scheme and is encoded, not written using regular characters.

*URL_DEL_AUDIO + :: +  NOMBRE_DEL_AUDIO + , +   URL_DEL_AUDIO + :: + NOMBRE_DEL_AUDIO*


**6) Encode your list data**

Once you have a recording list ready, you can use this form - http://meyerweb.com/eric/tools/dencoder/ - to encode it, you just need to copy it in the text box and press encode.

For example, to play this audio – *https://ia601503.us.archive.org/2/items/AveMaria_201610/Ave_Maria.mp3* – under the following title – Ave María –  and this audio – *https://cgeomap.eu/IMG/mp3/audio_ammonite-3.mp3* – under the following title – Ammonoidea –, write *https://ia601503.us.archive.org/2/items/AveMaria_201610/Ave_Maria.mp3::Ave María,https://cgeomap.eu/IMG/mp3/audio_ammonite-3.mp3::Ammonoidea* in the text area to get the following encoded result *https%3A%2F%2Fia601503.us.archive.org%2F2%2Fitems%2FAveMaria_201610%2FAve_Maria.mp3%3A%3AAve%20Mar%C3%ADa%2Chttps%3A%2F%2Fcgeomap.eu%2FIMG%2Fmp3%2Faudio_ammonite-3.mp3%3A%3AAmmonoidea*


**7) Conform the Player's URL**

Add your encoded recording list to the player's URL as indicated before (step 4).

*PLAYER_URL + ?file= +  RECORDINGS_LIST*

For the previous example player's URL would be:

*http://www.vhplab.net/code/bar-ui/index.php?file=https%3A%2F%2Fia601503.us.archive.org%2F2%2Fitems%2FAveMaria_201610%2FAve_Maria.mp3%3A%3AAve%20Mar%C3%ADa%2Chttps%3A%2F%2Fcgeomap.eu%2FIMG%2Fmp3%2Faudio_ammonite-3.mp3%3A%3AAmmonoidea*


**8) Share your Sound Map**

Finally, share your map or embed it in your web.

*http://u.osmfr.org/m/106280/*