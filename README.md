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
- how would you handle bulk fetching of hundreds of ISBNs?
- if you were creating the OpenLibrary API, what design changes would you make?

There’s no need to attempt or finish all these items; we’d prefer you to focus on writing code (even pseudocode) that demonstrates how you’d approach the task rather than having a fully-working app.
