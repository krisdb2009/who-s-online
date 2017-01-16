 Below Average #
################
v4.3 - Fixed weird skin issue where the temp file was not updating.

v4.2 - Added KIWI, Removed old iframe method replaced with Jquery alternative. API now can be iframed!

v4.1 - Added new analytic engine

v4.0 - Changed floater position, Added ability to toggle the title and horizontal line, Added ablility to change headsource, Added the head api to the webserver.

v3.2 - Added setting that allows hiding the username and showing it on hover.

v3.1 - Big Whoopsies! My ssl certificate authority has removed dot.tk tld's from their lists due to "Abuse" So we have a fresh new Domain and were not going to make the same mistake by forwarding to https first, this time the server will be able to chouse weather to use http or https depending on the situation.

v3.0 - Added features, Including custom font size, custom head size, on off boolean for the font in the heads.

v2.9 - Recoded to minimize cache and remove temporary values from ram to attempt to speed up the script!

v2.8 - Switched from Minotaur's API to Below Average's New SKIN Head API https://belowaverage.ga/API/SKINHEAD/?player=Notch
Also fixed a bug resulting in no skinned players to show up with a black skin instead of the desired Steve skin.

v2.7 - Fixed Phone Home Domains

v2.6 - Added a blur effect

v2.5 - Fixed the 3d skins on cap sensitive servers. and fixed a variable issue

v2.4 - Updated the api to an encrypted ssl connection Update required to utilize the api correctly

v2.3 - Added 3D skin viewer

v2.2 - Allows option to use my api or the built in api =P

v2.1 - Created an API on my web-servers, to help those who are having troubles getting their web-servers able to ping the Minecraft servers...

v1.6 - Skin Fix, Added themes, Updater, Faster Phone Home, Fixed styling, Added api, # of players now displays on the footer.

v1.5 - Fixed Phone Home Scripts

v1.4 - Added mobile browser support

v1.3 - Added skin head support


--------------------------------------------
SETUP
--------------------------------------------

1. Place files on webserver.

2. Set up the config file.

3. You need to have enable-query=true in your server.properties, and second you need to have query.port=(your port number) set up too... That should not be a problem for people who run their servers without a host, but you folk using hosts need to be aware of the complex configurations they have set up to routing domains to different ports... (**I hate hosts**). Such a waste of money. Just remember, My API will not pierce the thick layer of re-directions they have set up on the host's network, *in most cases*... You must provide the settings.ini with the true ip address and the true port of your minecraft server, or else this will not work!!!

--------------------------------------------
HELP!!!
--------------------------------------------
Error:               | Resolution:
-------	             |-------------
Failed to recieve    | Webserver/Script is working fine
challenge...         | But the minecraft server is not responding... Follow the steps on the error page to resolve.
-------              |-------------
Failed to write on   |In the settings.ini file, change the setting
socket...            |BelowAverageAPI to 'true'  (BelowAverageAPI='true')
-------              |-------------

