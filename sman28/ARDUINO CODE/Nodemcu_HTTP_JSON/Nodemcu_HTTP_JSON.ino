#include <ESP8266WiFi.h> //2.7.4
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h> //6.17.3

char* ssid            = "www.interactiverobotics.club"; //isi dengan SSID WIFI
char* pass            = "cilibur2019"; //isi dengan PASSWORD WIFI
String HOST_NAME      = "192.168.1.3"; // change to your PC's IP address
//String HOST_NAME    = "toledp.000webhostapp.com"; // change to web addrress
String PATH_NAME      = "/sman28/data-api.php";
String getData;

int RELAY1=D5;
int RELAY2=D6;

void setup()
{
  Serial.begin(9600);
  pinMode(RELAY1,OUTPUT);
  pinMode(RELAY2,OUTPUT);
  WiFi.begin(ssid, pass);
  while (WiFi.status() != WL_CONNECTED) {
    Serial.println("Connecting..");
    delay(100);
  }

  if(WiFi.status() == WL_CONNECTED){
    Serial.println("Connected!!!");
    delay(1000);
  }
  else{
    Serial.println("Connected Failed!!!");
  }
  Serial.println("Terhubung ke jaringan!");
}

void loop()
{
  //Baca data
  String namadevice="iwancilibur";
  float sensor1=random(27,50);
  float sensor2=random(27,50);
  
    // make a HTTP request:
    // send HTTP header
    HTTPClient http;  
    http.begin("http://" + String(HOST_NAME) + String(PATH_NAME) + 
                           "?namadevice=" + String(namadevice) + 
                           "&sensor1="    + String(sensor1) + 
                           "&sensor2="    + String(sensor2)); 
    int httpCode = http.GET();

    if (httpCode > 0) {
        //AMBIL DATA JSON
        String payload = http.getString();
        payload.trim();
        Serial.println(payload);
        const size_t capacity = JSON_OBJECT_SIZE(9) + 180; //cari dulu nilainya pakai Arduino Json 5 Asisten
        DynamicJsonDocument doc(capacity);
        //StaticJsonDocument<192> doc;
        DeserializationError error = deserializeJson(doc, payload);
        
        const char* waktu_dibaca      = doc["waktu"]; // "2021-10-12 09:18:55"
        const char* namadevice_dibaca = doc["namadevice"]; // "iwancilibur"
        const char* sensor1_dibaca    = doc["sensor1"]; // "44"
        const char* sensor2_dibaca    = doc["sensor2"]; // "40"
        const char* control1_dibaca   = doc["control1"]; // "0"
        const char* control2_dibaca   = doc["control2"]; // "0"
        
       //POST TO SERIAL
       Serial.print("Waktu      = ");Serial.println(waktu_dibaca);
       Serial.print("Nama Device= ");Serial.println(namadevice_dibaca);
       Serial.print("Sensor 1   = ");Serial.println(sensor1_dibaca);
       Serial.print("Sensor 2   = ");Serial.println(sensor2_dibaca);
       Serial.print("Control 1  = ");Serial.println(control1_dibaca);
       Serial.print("Control 2  = ");Serial.println(control2_dibaca);
       Serial.println();
      
       //LOGIKA
       if(String(control1_dibaca)=="1"){
        Serial.println("CONTROL 1 ON");
        digitalWrite(RELAY1,HIGH);
       }else{
        Serial.println("CONTROL 1 OFF");
        digitalWrite(RELAY1,LOW);
       }

       if(String(control2_dibaca)=="1"){
        Serial.println("CONTROL 2 ON");
        digitalWrite(RELAY2,HIGH);
       }else{
        Serial.println("CONTROL 2 OFF");
        digitalWrite(RELAY2,LOW);
       }
      }
      http.end();
      delay(1000);
}
