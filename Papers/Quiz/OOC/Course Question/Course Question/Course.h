#pragma once
class Course
{
private:
	int courseID;
	char courseName[20];
	int creaditPoints;

public:
	void setCourseDetails(int cID,const char cName[]);
	void displayCourseDetails();
	void setCreaditPoints( int cPoints);
};

