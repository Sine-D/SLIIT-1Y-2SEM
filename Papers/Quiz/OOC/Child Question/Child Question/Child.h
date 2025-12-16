#pragma once
class Child
{
private:
	int childID;
	char childName[20];
	char parentName[20];
	float contactNo;

public:
	void setChildDetails(int cID, const char cName[], const char pName[]);
	void displayChilddetails();
	void setContactNo(float cNo);
};

