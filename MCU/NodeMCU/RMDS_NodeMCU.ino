#include<ESP8266WiFi.h>
#include<SoftwareSerial.h>
#include<ESP8266HTTPClient.h>

int softTX = D1;
int softRX = D2;
const char *password = "ubuntu11";
const char *ssid = "EMBEDDEDFAHIM";
SoftwareSerial softwareSerial(softRX, softTX);

void setup()
{
  Serial.begin(9600);
  WiFi.mode(WIFI_STA);
  pinMode(16, OUTPUT);
  softwareSerial.begin(9600);
  WiFi.begin(ssid, password);
  WiFi.hostname("Fahims-NodeMCU");
  Serial.println("Starting NodeMCU v1.0 (ESP-12E)..");
  Serial.print("Waiting for Wi-Fi connection");

  while(WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.print("Connected to Wi-Fi network: ");
  Serial.println(ssid);
  Serial.print("Assigned IP address: ");
  Serial.println(WiFi.localIP());
  Serial.print("Hostname: ");
  Serial.println(WiFi.hostname());
  Serial.println("");
  delay(1000);
}

void loop()
{
  while(softwareSerial.available())
  {
    HTTPClient http;

    digitalWrite(16, LOW);
    String bpmText  = softwareSerial.readStringUntil('\t');
    softwareSerial.read();
    String tempText  = softwareSerial.readStringUntil('\n');
    int bpm = bpmText.toInt();
    float temp = tempText.toFloat();
    if(bpm > 30 && temp > 15)
    {
      Serial.print("BPM: ");
      Serial.print(bpm);
      Serial.print("\t");
      Serial.print("Temperature: ");
      Serial.print(temp);
      Serial.println(" °C");
      String link =  String("http://rmds.embeddedfahim.com/add_data.php?bpm=") + bpm + "&temp=" + temp;
      http.begin(link);
      int httpCode = http.GET();
      Serial.println(httpCode);

      if(httpCode == 200)
      {
        Serial.println("Successfully uploaded data to the web server..");
        digitalWrite(16, HIGH);
      }
      else
      {
        Serial.println("Error uploading data to the web server!!");
      }

      http.end();
    }
  }
}
