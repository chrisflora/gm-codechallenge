![Guild_Logo_RGB_Full](/Users/ddickson/Google Drive/Guild/Standards/assets/Guild_Logo_RGB_Full.png)

# Developer Test

## Given

- You have a loan application
  - The loan application has 2 borrowers
    - One borrower has a job
    - The other borrower has a job and a bank account

## Requirements

- Install a fresh copy of Laravel
- Create some simple database tables to represent the above scenario
  - By simple I mean just the basics of what's really needed for this exercise
  - For example, the borrower should have a name, but we don't need date of birth, social security number or contact information for this exercise
  - Though I would like to see the standard date fields as part of the design (ie. created, updated, deleted)
- Write a query (or queries) that shows the total annual income and bank account values for the application
- Expose an API end point to show the results of the query (or queries)
  - All output should be in JSON format
- Write a unit test on at least one method in the project
  - I'm deliberatly keeping this requirement vague to give you freedom to decide what to test and how
- Update this README file with any installation instructions needed so we can clone and run your code

## What I'm looking for

- Your general skill-set with PHP and MySQL
- Your general architecture skills
- How well you know your way around Laravel
- Your ability to write unit tests
- Coding style
- How well you adhere to the PSR standards
- Usage of design patterns in your code

## Finally...

Don't be afraid to get creative and have some fun!

## Installation instructions

 - Clone this repository to your local directory to be served from
 - Run "composer update" to make sure your installation is up to date.
 - Copy the .env.develop file to a new file called ".env", within the "my-loan-app" root directory
 - Modifiy the .env file to contain your mysql connection information (host/username/pass/database-name/etc...)
 - Run "php artisan migrate" command to create the necessary tables
 - Load site

## Site information

 - The site's home page will be an extremely simple "loan application page", with a very small form to fill out that allows for 2 borrowers.  This could be modified to allow for more than 2 borrowrs, but for the purposes of this assignement, you can only have a maximum of 2.
 - Once you have entered a "Loan Application", you will be taken to a list of applications.   If the application has two borrowers, you will see 2 records, if there is only one borrower, you will see only one record.
 - On the left of this table is a field for "ID", which is clickable.  THis will take you to an exposed API enpoint that will yield the application information, the total income for the application (adding all borrower's information together), and the bank accounts for those borrowers.

## Unit Testing

 - Several PHPUnit tests have been written.  To run them, you just need to go to the command line root directory of "my-loan-app" and run 
"phpunit".  It will run several tests and give you the result.   There are both model tests and api tests.