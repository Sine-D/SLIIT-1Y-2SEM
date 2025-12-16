#pragma once

class Taxi
{
private: 
	int taxiID;
	char driver[30];
	float ratePerKM;
	float distanceTravelled;

public :
	void setTaxiDetails(int tID, const char d[], float rPerKM, float dTravelled);
	void displayTaxiDetails();
	float calculateBill();
};

