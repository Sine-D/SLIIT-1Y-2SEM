#include "Event.h"
#include <iostream>
#include <cstring>

using namespace std;

void Event::setEventDetails(int eId, const char eType[], const char tColor[]) {
	eventId = eId;
	strcpy_s(eventType, eType);
	strcpy_s(themeColor, tColor);
};
void Event::displayEventDetails() {
	cout << "\nEventId = " << eventId << endl;
	cout << "EventType = " << eventType << endl;
	cout << "ThemeColor = " << themeColor << endl;
	cout << "Location = " << location << endl;

};
void Event::setEventLocation(const char l[]) {
	strcpy_s(location, l);
};

Event::Event() {
	eventId = 0;
	strcpy_s(eventType, "");
	strcpy_s(themeColor, "");
	strcpy_s(location, "");
};