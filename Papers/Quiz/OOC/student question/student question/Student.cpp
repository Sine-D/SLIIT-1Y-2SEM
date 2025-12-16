#include "Student.h"
#include <iostream>
#include <cstring>

void Student::setStudentDetails(int sID,const char sName[]) {
	strcpy_s(studentName, sName);
	studentID = sID;

};
void Student::setMarksOOC(float mOOC) {
	marksOOC = mOOC;
};
float Student::getMarksOOC() {
	return marksOOC;
};
void Student::setMarksSPM(float mSPM) {
	marksSPM = mSPM;
};
float Student::getMarksSPM() {
	return marksSPM;
};
void Student::setMarksISDM(float mISDM) {
	marksISDM = mISDM;
};
float Student::getMarksISDM() {
	return marksISDM;
};
