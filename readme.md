# File Based CMS
### A CMS with a minimal configuration

#### Setup
- run `npm install` to install the dependencies
- content to be displayed in the page should be located inside `data` folder.

#### How content are displayed
- content is extracted from the markdown files inside the data folder
- order of the files will be in the ascending order of the numbering.
- for links the part of the filename after `_` will be used
- the link names with multiple words, use camel case (e.g.: `sectionTitle` will be displayed as `Section Title`) 
- it is preferred to have sections with different names