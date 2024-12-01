Skip to main content
Google Classroom
Classroom
Web Application Development CSC3132 2024
Level 3
Home
Calendar
Enrolled
To do
W
Web Application Development CSC3132 2024
Level 3
Archived classes
Settings
Stream
Classwork
People
Web Application Development CSC3132 2024
Level 3
Upcoming
Woohoo, no work due in soon!

Announce something to your class

Announcement: 'Day 14 - insert data'
Gopinath Sittampalam
Created 29 Nov29 Nov
Day 14 - insert data

addData.php
HTML

dbconf.php
PHP

Add class comment…


Announcement: 'Day 13 - Fetch data from the table'
Gopinath Sittampalam
Created 29 Nov29 Nov
Day 13 - Fetch data from the table

dbconf.php
PHP

getTabel.php
PHP

Add class comment…


Announcement: 'Day 12 - Database connection'
Gopinath Sittampalam
Created 29 Nov29 Nov
Day 12 - Database connection

dbconf.php
PHP

getTabel.php
PHP

Add class comment…


Announcement: 'Please update your GitHub repositories…'
Gopinath Sittampalam
Created 27 Nov27 Nov
Please update your GitHub repositories for your weekly laboratory practicals and provide the link to your GitHub repo in the designated Google Sheets.https://docs.google.com/spreadsheets/d/14IFgmAXm6PKWRf_RoKu7aMhvMXa2lTwLvmYqJghzfAE/edit?usp=sharing

Add class comment…


Announcement: 'GitHub for projects'
Gopinath Sittampalam
Created 27 Nov27 Nov
GitHub for projects

Github Codesspaces part 1.mp4
Video

Github Codesspaces part 2.mp4
Video

Add class comment…


Announcement: 'Please remember to fill out the survey…'
Gopinath Sittampalam
Created 14 Nov14 Nov
Please remember to fill out the survey form.
This survey aims to understand your experience with the   Web Application Development course so far, assess your JavaScript and PHP knowledge, and identify areas where additional support might be needed. Your honest feedback will help improve the course and enhance your learning experience. The information collected will be used solely for academic purposes.  https://forms.gle/YzFyPAeCjL8Ak9Pf6

Add class comment…


Announcement: 'ICAE 01 Results Please contact me If…'
Gopinath Sittampalam
Created 14 Nov14 Nov (Edited 14 Nov)
ICAE 01 Results
Please contact me If you need any clarification on your result.

CSC3132 Result.pdf
PDF

Add class comment…


Announcement: 'Day 11- past ICAE paper'
Gopinath Sittampalam
Created 7 Nov7 Nov
Day 11- past ICAE paper

CSC3132-ICAE01.pdf
PDF

Q2.php
HTML

java script.txt
Text

Add class comment…


Announcement: 'Day 10 - Class'
Gopinath Sittampalam
Created 6 Nov6 Nov
Day 10 - Class

myclasses.php
PHP

Add class comment…


Announcement: 'JavaScript Essentials 1 exams are…'
Gopinath Sittampalam
Created 6 Nov6 Nov
JavaScript Essentials 1 exams are enabled

Add class comment…


Announcement: 'ICAE 01 Will be held on 8/11/2024'
Gopinath Sittampalam
Created 5 Nov5 Nov
ICAE 01 Will be held on 8/11/2024

Add class comment…


Announcement: 'Day 09 Exercise'
Gopinath Sittampalam
Created 25 Oct25 Oct
Day 09 Exercise

CSC3132-ICAE01.pdf
PDF

multable.php
HTML

Q1.html
HTML

Add class comment…


Announcement: 'Day 08 Function'
Gopinath Sittampalam
Created 25 Oct25 Oct
Day 08 Function

functionop.php
HTML

Add class comment…


Announcement: 'Day 07 Array'
Gopinath Sittampalam
Created 23 Oct23 Oct
Day 07 Array

arrayop.php
HTML

Add class comment…


Announcement: 'Day 06 Loops'
Gopinath Sittampalam
Created 23 Oct23 Oct
Day 06 Loops

loop.php
HTML

s_large.php
PHP

Add class comment…


Announcement: 'Day 05 PhP introduction'
Gopinath Sittampalam
Created 16 Oct16 Oct
Day 05 PhP introduction

firstpro.php
HTML

ifcon.php
HTML

logicalop.php
HTML

mathop.php
HTML

Add class comment…


Announcement: 'Day 04 Sass…'
Gopinath Sittampalam
Created 11 Oct11 Oct (Edited 16 Oct)
Day 04 Sass
https://sass-lang.com/guide/
https://sass-lang.com/playground/

sass style.scss
Binary File

Add class comment…


Announcement: 'Day 03 Bootstrap'
Gopinath Sittampalam
Created 9 Oct9 Oct
Day 03 Bootstrap

index.html
HTML

Add class comment…


Announcement: 'Day 02'
Gopinath Sittampalam
Created 4 Oct4 Oct
Day 02

home.html
HTML

layoutpage.html
HTML

layoutstyle.css
Style Sheet

Add class comment…


Announcement: 'Day 01'
Gopinath Sittampalam
Created 4 Oct4 Oct
Day 01

page1.html
HTML

students tag.html
HTML

Add class comment…

Stream
<?php
//get the db connection file
require_once 'dbconf.php';

try {

	//Query
	$sql = "SELECT * FROM STUDENTS";

	//excute the quey
	$result = mysqli_query($connect,$sql);
	//check if data exists in the table
	if (mysqli_num_rows($result)>0) {
		// fetch the data from rows
		while ($row = mysqli_fetch_assoc($result)) {
			print_r($row);
		}
	} else {
		echo "No results";
	}
	
} catch (Exception $e) {
	die($e->getMessage());
}


?>
