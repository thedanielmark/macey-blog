#!C:/Users/danie/AppData/Local/Programs/Python/Python38-32/python.exe
import sys

import mysql.connector
from mysql.connector import errorcode

from local_config import config


def mysql_connection():
    global pk_table, required_timestamp

    try:
        json_list = []
        cnx = mysql.connector.connect(**config)
        response = "\"db-fetch-error\""

        cursor = cnx.cursor()
        query = "SELECT register_no, `{required_timestamp}` FROM attendance.{pk_table}".format(
            required_timestamp=required_timestamp, pk_table=pk_table)
        cursor.execute(query)
        json = {}
        for row in cursor:
            json = {}
            json['register_no'] = str(row[0])
            json['status'] = str(row[1])
            json_list.append(json)
        cursor.close()

        response_list = []
        for json in json_list:
            looped_cursor = cnx.cursor()
            looped_query = "SELECT full_name, semester, department, picture_url FROM attendance.users WHERE register_no = {register_no}".format(register_no=json['register_no'])
            looped_cursor.execute(looped_query)
            for row in looped_cursor:
                json['full_name'] = row[0]
                json['semester'] = str(row[1])
                json['department'] = row[2]
                json['picture_url'] = row[3]
                response_list.append(json)
            looped_cursor.close()

        response = str(response_list)

        print(response.replace("'", '"'))

        cnx.close()

    except mysql.connector.Error as err:
        if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
            print("\"db-fetch-error\"")
        elif err.errno == errorcode.ER_BAD_DB_ERROR:
            print("\"db-fetch-error\"")
        else:
            print(err)


pk_table = str(sys.argv[1]).lower()
required_timestamp = sys.argv[2]
mysql_connection()
