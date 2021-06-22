#include "DHT.h"
#include <LiquidCrystal.h>
LiquidCrystal lcd(13,12,11,10,9,8);
#define DHTPIN A1    
#define DHTTYPE DHT11
const int sensor_pin = A0;  /* Soil moisture sensor O/P pin */
pir_pin =A2;
buzzer = 5;
int relay_pin = 8;
DHT dht(DHTPIN, DHTTYPE);

void setup() {
  Serial.begin(9600); /* Define baud rate for serial communication */
  lcd.begin(16,2);
  pinMode(relay_pin,OUTPUT);
  pinMode(pir_pin,OUTPUT);
  pinMode(sensor_pin,OUTPUT);
  pinMode(buzzer,OUTPUT);
    dht.begin();
    lcd.print("AGRICULTURE MONITORING SYSTEM");
}

void loop() {
 
  float moisture_percentage;
  int sensor_analog;
  sensor_analog = analogRead(sensor_pin);
  moisture_percentage = ( 100 - ( (sensor_analog/1023.00) * 100 ) );
  Serial.print("Moisture Percentage = ");
   lcd.print("M:");
  Serial.print(moisture_percentage);
  Serial.print("%\n\n");
  digitalWrite(relay_pin,HIGH);
  delay(5000);
  digitalWrite(relay_pin,LOW);
  delay(5000);

  pir = analogRead(pir_pin);

  if(pir>250)
  {
    digitalWrite(buzzer,HIGH);
    Serial.print("PIR:");
     lcd.print("P:");
      lcd.print(pir);
    delay(3000);
    digitalWrite(buzzer,LOW);
  }

  if( moisture_percentage>0.40)
  {
      digitalWrite(relay_pin,HIGH);
    }
    else{
      digitalWrite(relay_pin,LOW);
    }
      delay(500);
  float h = dht.readHumidity();
  float t = dht.readTemperature();
   float f = dht.readTemperature(true);
    if (isnan(h) || isnan(t) || isnan(f)) {
    Serial.println("Failed to read from DHT sensor!");
    return;
  }
     float hi = dht.computeHeatIndex(f, h);
     
  Serial.print("Humidity: ");
  lcd.print("H:");
  Serial.print(h);
  Serial.print(" %\t");
   lcd.print("T:");
  Serial.print("Temperature: ");
  Serial.print(t);
  Serial.print(" *C ");
  Serial.print(f);
  Serial.print(" *F\t");
  Serial.print("Heat index: ");
  Serial.print(hi);
  Serial.println(" *F");
  delay(1000);
}
