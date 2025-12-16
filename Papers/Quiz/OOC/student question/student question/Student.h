#pragma once

class Student
{
private:
	int studentID;
	char studentName[20];
	float marksOOC;
	float marksSPM;
	float marksISDM;

public:
	void setStudentDetails(int sID, const char sName[]);
	void setMarksOOC(float mOOC);
	float getMarksOOC();
	void setMarksSPM(float mSPM);
	float getMarksSPM();
	void setMarksISDM(float mISDM);
	float getMarksISDM();



};

