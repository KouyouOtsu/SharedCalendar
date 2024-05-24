## SharedCalendar
A framework for creating simple and easy-to-use shared calendars.

- [Japanese Readme(日本語での説明)](README-JA.md)

Google and Outlook calendars have user-friendly UIs, but sharing them among multiple people can be challenging. There didn't seem to be many options for creating an internal calendar for a university lab or company with minimal setup on an internal server, so I decided to create one.

## Function
- Display events
- Add events (all-day events only)
- Add events with two different types
- Delete already added events

It includes only the bare minimum functionalities. Please consider extending the features as per your needs. The `index.html` file integrates CSS and JS, making it somewhat bulky.

## Requirements
- A web server
- PHP running on the server
- A database (MySQL) available on the server

In other words, if you have a server environment where WordPress can run, this will work. Therefore, it can also be deployed on inexpensive rental servers with functional constraints.

## Usage
- Download the resources and place them on your server
- Run MySQL on the server
```
mysql -u your_username -p
```
- Create a database: You can use a different name for the database.
```
CREATE DATABASE db_calendar;
```
- Create a table
```
USE db_calendar;
```
```
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    start DATE NOT NULL,
    end DATE,
    color VARCHAR(7),
    allDay BOOLEAN
);
```
- Configure DB information in `config.php`
    - Since the password is written in plain text, consider the placement of `config.php` as needed.
    - If you change the location of `config.php`, you will need to update the path to `config.php` at the beginning of each PHP file.
- Access `index.html`

## License
- MIT License
- Creator:Kouyou Otsu
- This software is based on [FullCalendar](https://fullcalendar.io/).
