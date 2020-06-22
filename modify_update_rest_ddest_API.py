#!C:/Users/danie/AppData/Local/Programs/Python/Python38-32/python.exe
import json
import sys

import mysql.connector
from mysql.connector import errorcode

from local_config import config


def mysql_connection():
    global pk_table, required_timestamp, req_json

    try:
        cnx = mysql.connector.connect(**config)

        try:
            for key, value in req_json.items():
                cursor = cnx.cursor()

                query = "UPDATE attendance.{pk_table} SET `{required_timestamp}` = {value} WHERE register_no = {key}".format(
                    pk_table=pk_table, required_timestamp=required_timestamp, value=value, key=key)

                cursor.execute(query)
                cursor.close()

            cnx.commit()
            print('\"update-success\"')
            return

        except:
            cnx.rollback()
            print("\"update-failed\"")

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

req_json = json.loads(sys.argv[3].replace("'", '"'))

mysql_connection()
