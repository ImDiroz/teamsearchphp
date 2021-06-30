import sqlite3

connection = sqlite3.connect("database.db")
cursor = connection.cursor()

cursor.execute("""CREATE TABLE user (
    id integer primary key,
    login text,
    password text,
    email text,
    token text,
    description text DEFAULT \"Пока здесь нет описания...\",
    vip int,
    dev int,
    registration_time integer
);""")
