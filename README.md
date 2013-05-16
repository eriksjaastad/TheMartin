TheMartin
=========

website for The Martin 

This site was first done in Wordpress but it had issues, no comments and a short deadline. 
Using fuzzy logic I removed it from Wordpress, added a graphic interface which pulls from the property management API. 
The floor plans page is run off of the data received from the API.

Steps so far:

-- data driven floor plans page
- Connect to the API using JSON #Thank you Thomas! 
- Get data from API and convert it to PHP so we can work with it #Thanks Bill! 
- Make floors of the building and rooms per floor highlight and get room details if they are available. Used ImageMapster by James Treworgy
- Get all of this to work on the page. Uses were to keep thing highlighted. Used PHP includes. Future plans are to incorporate everything in to one page instead of including other pages.

-- full page slider site with separate full page sliders on two of the pages and home page build with an active background and sliding navigation.
- Tried to work with slider that was previously installed. Issue was that it wasn't stable. Often pages would fly off of the screen including navigation and first slide wasn't available when page loaded (it was behind the home page).
- I was unfamiliar with the slider and found limited information on it.
- Site was also not responsive. Fixing bugs and making it responsive lead me to rebuild it based on a new slider. Initially I thought I could use RoyalSlider to do the entire site but found out that including a slider inside a slider was not an option.
- Re-coding the hard coded site using ResponsiveSlides.js
- Starting with a mobile first design and building out to the original design.
- Plugging Wordpress (with RoyalSlider plug-in) in to the hard coded site so that the two slider pages and text can be edited by the client. Also keeping the Wordpress admin very simple.

As of 5/16/2013 there has been 24 days of work on this site.
