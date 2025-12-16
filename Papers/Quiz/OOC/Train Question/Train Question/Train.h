#pragma once

class Train
{
private:
	int trainID;
	int capacity;
	char startTime[30];
	char destination[20];

public:
	void setTrainDetails(int tID, int c, const char d[]);
	void displayTrainDetails();
	void setStartTime(const char sTime[]);

};

