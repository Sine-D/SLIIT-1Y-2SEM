#pragma once
class Plane
{
private:
	int planeID;
	char piolet[50];
	char destination[50];

public:
	void setPlaneDetails(int pID, const char p[], const char d[]);
	void displayPlaneDetails();
	char* getDestination();

};

