#pragma once
class Event
{
private:
	int eventId;
	char eventType[50];
	char themeColor[50];
	char location[50];

public:
	Event();
	void setEventDetails(int eId, const char eType[], const char tColor[]);
	void displayEventDetails();
	void setEventLocation(const char l[]);
};

