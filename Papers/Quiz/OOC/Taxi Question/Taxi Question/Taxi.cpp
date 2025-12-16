#include "Taxi.h"
#include <iostream>
#include <cstring>
#include <iomanip>

using namespace std;

void Taxi::setTaxiDetails(int tID, const char d[], float rPerKM, float dTravelled) {
	taxiID = tID;
	strcpy_s(driver, d);
	ratePerKM = rPerKM;
	distanceTravelled =dTravelled ;
};
void Taxi::displayTaxiDetails() {
	cout << "Taxi ID = " << taxiID << endl;
	cout << "Driver Name = " << driver << endl;
	cout << "BillAmount = "<< setiosflags(ios::fixed) << setprecision(2) << calculateBill() << "\n" << endl;
};
float Taxi::calculateBill() {
	return ratePerKM * distanceTravelled;
};