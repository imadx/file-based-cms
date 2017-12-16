# File Based CMS
### A CMS with a minimal configuration

#### Setup
- run `npm install` to install the dependencies
- content to be displayed in the page should be located inside `data` folder.

#### How content are displayed
- Content is extracted from the markdown files inside the data folder
- Order of the files will be in the ascending order of the numbering.
- For links the part of the filename after `_` will be used
- The link names with multiple words, use camel case (e.g.: `sectionTitle` will be displayed as `Section Title`) 
- It is preferred to have sections with different names

#### Starting the server
- Any PHP server can be used to run the CMS
- To start with a local PHP server, try `php -S localhost:8080`, with PHP installed on your system
