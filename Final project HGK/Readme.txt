Code documentation, additions and emendments for Digital Orlando

Added:
Work viewer class, to display and output work, similarly to book. Particularly important for the Textual studies nature of this project, as group_id is expanded to include facsimile images and OCR transcriptions, neither of which classify as a “book”. 

Option in view/content.php to output a second field/div of type text if no image is associated with content row in DB. This is to facilitate parallel view of the two texts, while giving priority to parallel text/image output. 

Toggler plugin has been written and included, to turn on and off highlight of variant readings (specifically, <lem> and <rdg> elements in TEI) between editions, in a parallel text/image or text/text view. 

Menu function to frame.js to create interactive menu, reducing static text amount in left sidebar. Changes in view.php made to make menu function only apply to vertical menu, not horizontal menu. 

New theme.css added
Includes, among other things, setting the div to a set height and overflow:scroll so that the two parallel texts can be aligned by the user. This is particularly important due to the difference in the linebreaks between the two editions. 

Biographical information is embedded in a timeline.js for ease of access. Links to maps, and images form the start of a surrounding critical apparatus. 

Emended:
several amendments made in view.php, including a direct link to corresponding parallel text/image from text or image view, as well as minor display changes and abstraction changes. 

Small amendments in view/search.php and view/taxonomy.php to change texts in search table headers and cells.  

