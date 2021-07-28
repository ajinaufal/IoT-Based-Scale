#include <ESP8266WiFi.h>

#define triggerPin  D8
#define echoPin     D7

#define STASSID "CALLISTA"
#define STAPSK  "semangatbaru"

const char* ssid = STASSID;
const char* password = STAPSK;

long duration, jarak;

void setup() {
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
  Serial.begin (9600);
}

void loop() {

}

void ultrasonic(){
  digitalWrite(triggerPin, LOW);
  delayMicroseconds(2); 
  digitalWrite(triggerPin, HIGH);
  delayMicroseconds(10); 
  digitalWrite(triggerPin, LOW);
  duration = pulseIn(echoPin, HIGH);
  jarak = (duration/2) / 29.1;
  Serial.println("jarak :");
  Serial.print(jarak);
  Serial.println(" cm");
  delay(1000);
}
