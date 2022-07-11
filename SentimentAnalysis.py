from textblob import TextBlob
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="bangles"
)
print(mydb)

try:
    sql_select_Query = "select * from feedback"
    cursor = mydb.cursor()
    cursor.execute(sql_select_Query)
    # get all records
    records= cursor.fetchall()
    for row in records:
        print("\nFeedback  = ", row[5], "\n")

        text = str(row[5])
        blob = TextBlob(text)

        if (blob.sentiment.polarity<0):
            print(blob)
            print(blob.sentiment)
            print("Negative")
        elif (blob.sentiment.polarity == 0):
            print(blob)
            print(blob.sentiment)
            print("Neutral")
        else:
            print(blob)
            print(blob.sentiment)
            print("Positive")

        print("___________________________________________________________________________________________________")


except mysql.connector.Error as e:
    print("Error reading data from MySQL table", e)
finally:
    if mydb.is_connected():
        mydb.close()
        cursor.close()
#Textblob is an open-source python library for processing textual data. 


'''
Textblob is an open-source python library for processing textual data. 
It performs different operations on textual data such as noun phrase extraction, sentiment analysis, classification, translation, etc.

The sentiment function of textblob returns two properties, polarity, and subjectivity.
Polarity lies between [-1,1], -1 defines a negative sentiment and 1 defines a positive sentiment.

Subjectivity lies between [0,1].Subjectivity quantifies the amount of personal opinion and factual information contained in the text. 
The higher subjectivity means that the text contains personal opinion rather than factual information.
'''




