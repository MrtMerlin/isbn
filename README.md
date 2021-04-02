# Example task - ISBN

This task is to create a simple application to find & display book information by ISBN, using the OpenLibrary.org API.

Users should be able to

- type in an ISBN
- view the related book’s title, description and author.

In order to do this you’ll need to use the following API endpoints:

- book endpoint e.g. https://openlibrary.org/api/books?bibkeys=ISBN:0451526538&format=json
- works endpoint e.g. https://openlibrary.org/books/OL1017798M.json
- author endpoint e.g. https://openlibrary.org/authors/OL18319A.json

You may want to consider some of the following:

- validation
- improving speed by storing models / caching results
- handling errors
- testing
  
    - Unfortunately I was unable to add testing to the project, but I would carry out unit testing on the application, if any errors occur they would be able to dealt with. 
    
    - With this I would also create feature tests as well making sure the outcomes are correct.

- how would you handle bulk fetching of hundreds of ISBNs?
    
    - I would handle bulk fetching of hundreds of ISBNS, by chunking the results to a more managable size.   

- if you were creating the OpenLibrary API, what design changes would you make?

    Understanding the endpoints are very different throughout the api, I would make them a little easier to access, as I had some fun getting to the correct information needed.

There’s no need to attempt or finish all these items; we’d prefer you to focus on writing code (even pseudocode) that demonstrates how you’d approach the task rather than having a fully-working app.

***

This app is built using a sail image. Either clone the repo to your local machine or download the zip file to your machine.

Build and run the application
To run in terminal cd in to the working directory, type ./vendor/bin/sail up this will then build and run the application on the first sail up.

Open the bash for the application
Once the application is running, type ./vendor/bin/sail shell this will open the bash for the application. When open run npm install, this will install the dependancies that are used within the application. Once complete run npm run dev or npm run watch.

Get That Database Going
Within the bash/shell run the following command php artisan migrate, this will create the database. Database login details are simple using the laravel database log in.

> Server Host : localhost
> 
> port : 3306 
> 
> database : isbn 
> 
> username : sail 
> 
> password : password

Seeing the application
Open browser, Chromes always a good one. open localhost.

The app is a little bare at the moment, maybe log in and check some books.

There will be further updates.
