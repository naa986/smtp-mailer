# SMTP Mailer for WordPress

## Description

[SMTP Mailer](https://wphowto.net/smtp-mailer-plugin-for-wordpress-1482) plugin allows you to configure a mail server which handles all outgoing email from your website. It takes control of the **wp_mail** function and uses SMTP instead. The plugin was developed by [wphowto](https://wphowto.net/) and is currently being used on over 30,000 websites.

## SMTP Mailer Settings

* **SMTP Host**: Your outgoing mail server (e.g. smtp.gmail.com).
* **SMTP Authentication**: Whether to use SMTP authentication when sending an email (True/False). If you choose to authenticate you will also need to provide your username and password.
* **SMTP Username**: The username to connect to your SMTP server.
* **SMTP Password**: The password to connect to your SMTP server.
* **Type of Encryption**: The encryption to be used when sending an email (TLS/SSL/No Encryption. TLS is recommended).
* **SMTP Port**: The port to be used when sending an email (587/465/25). If you choose TLS the port should be set to 587. For SSL use port 465 instead.
* **SMTP Client Domain**: The fully-qualified domain name of the SMTP client, sent in the SMTP EHLO/HELO command. If left blank, the domain part of the From Address will be used.
* **From Email Address**: The email address to be used as the From Address when sending an email.
* **From Name**: The name to be used as the From Name when sending an email.

## SMTP Mailer Test Email

Once you have configured the settings you can send a test email to check the functionality of the plugin.
 
* **To**: Email address of the recipient.
* **Subject**: Subject of the email.
* **Message**: Email body.

## Known Compatibility

SMTP Mailer should work with any plugin that uses the WordPress Mail function **wp_mail**. However, It has been tested with the following form and contact form plugins:

* Contact Form 7
* Jetpack Contact Form
* Visual Form Builder
* Fast Secure Contact Form
* Formidable Forms
* Contact Form by BestWebSoft

## Documentation

For detailed setup instructions please visit the [WordPress SMTP Plugin](https://wphowto.net/smtp-mailer-plugin-for-wordpress-1482) page.
