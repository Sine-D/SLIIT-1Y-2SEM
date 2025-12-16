#include "Lecturer.h"
#include <iostream>
#include <cstring>

using namespace std;

void Lecturer::setLecturerDetails(const char lName[], const char s[]) {
	strcpy_s(lectureName, lName);
	strcpy_s(subject, s);
};
void Lecturer::displayLecturerDetails() {
	cout << "\nLecturerName = " << lectureName << endl;
	cout << "Subject = " << subject << endl;
	cout << "Available = " << availableDay << endl;

};
void Lecturer::setAvailableDay(const char aDay[]) {
	strcpy_s(availableDay, aDay);
};