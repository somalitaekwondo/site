***********************************
***********************************
**** SIMPLE NEWSLETTER SYSTEM *****
***********************************
***********************************


Author: David Baker
Email: themeforest@blueteddy.com.au
Version: 1.8
Thank you for purchasing my script through ThemeForest!


********** INSTRUCTIONS ************

Step 1)

Upload all these files to your web server (eg: yoursite.com/newsletter/)


Step 2)

Visit the website (eg: yoursite.com/newsletter/) to begin the installer.


Step 3)

Create a MySQL database and enter the connection details into the installer.


Step 4)

Send out Newsletters! 


********* CREATING THE THANKYOU / UNSUBSCRIBE PAGES ****************

Open the file pages/unsub.php and pages/subscribe.php
Put your own HTML / CSS / javascript / anything on these pages.
These pages will be displayed whenever a user unsubscribes or subscribes to your newsletters.



******** CREATING YOUR OWN TEMPLATES *********

Templates are easy to make, have a look in the "templates" folder. 
You can make a copy of one of the default templates and name it something like "my_template" (dont use spaces in the folder name).
Inside there is a template.html file, and an inside.html, and a preview.jpg.

The preview.jpg is the thumbnail that displays in the newsletter console.
The template.html file controls the outer design of the newsletter.
The inside.html is the default content to appear in the WYSIWYG editor.

Once you have created your template, go to the Settings tab and make it your default template.

More instructions available here: http://tf.dtbaker.com.au/php-newsletter-script/how-to-use-themeforest-email-templates.html


******** SETTING UP CRON JOB FOR SCHEDULED EMAILS *********

If you would like to "Schedule emails for later date" then you need a cron job.
It's also handy to have to cron job if you set a limit on the number of emails to sent.
The cron job will continue sending your newsletter when it can based on your limit.

For instructions on setting up cron, please visit the link once you upload the file:

http://www.yourwebsite.com/newsletter_system/cron.php?t

You can make this cron job run every hour. Consult your hosting provider (or Google) for how to set up a cron job. 
I cannot provide support for this because there are so many different ways to do it, your hosting provider will be able to tell you, or even set it up for you if you send them these instructions.


************ UPGRADING FROM VERSION 1.7 to VERSION 1.8 *******************
Make a copy of your config.php and backup the rest of the system incase something breaks.
Re-upload version 1.8 over the top of the old vesion 1.7, and put your old config.php file back.
Run the below SQL queries:

ALTER TABLE  `member_field` ADD  `required` INT NOT NULL ;
ALTER TABLE  `ns_send` ADD  `full_html` TEXT NOT NULL ;
ALTER TABLE  `ns_send` CHANGE  `template_html`  `template_html` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;
ALTER TABLE  `ns_send` CHANGE  `full_html`  `full_html` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;
ALTER TABLE  `group` ADD  `public` INT NOT NULL ;


******** TROUBLESHOOTING **********

If emails are not getting sent, please make sure you have the correct SMTP settings (copy them from your Outlook settings if you want).

Please send me an email or contact me through my ThemeForest/CodeCanyon profile page so I can help you further.

If you leave a comment on the item asking for help I might not see it for 4 or 5 days.
