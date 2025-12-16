#pragma once

class Lecturer
{
private:
	char lectureName[50];
	char subject[50];
	char availableDay[50];

public:
	void setLecturerDetails(const char lName[], const char s[]);
	void displayLecturerDetails();
	void setAvailableDay(const char aDay[]);
};

