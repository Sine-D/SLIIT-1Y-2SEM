#include "Course.h"
#include <iostream>
#include <cstring>

using namespace std;

void Course::setCourseDetails(int cID, const char cName[]) {
	courseID = cID;
	strcpy_s(courseName, cName);
	
};
void Course::displayCourseDetails() {
	cout << "\nCourseID = " << courseID << endl;
	cout << "CourseName = " << courseName << endl;
	cout << "CreditPoints = " << creaditPoints << "\n" << endl;

};
void Course::setCreaditPoints(int cPoints) {
	creaditPoints = cPoints;
};