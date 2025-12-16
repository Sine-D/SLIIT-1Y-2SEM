#include "Guest.h"
#include <iostream>
#include <cstring>

using namespace std;

void Guest::setGuestDetails(int gID, const char gName[], float rPerDay, int nOfdays) {
	guestID = gID;
	strcpy_s(guestName, gName);
	ratePerDay = rPerDay;
	numberOfDays = nOfdays;

};
void Guest::displayGuestDetails() {
	cout << "Guest ID = " << guestID << endl;
	cout << "Guest Name = " << guestName << endl;
	cout << "Bill Amount = " << calculateGuestBill() << "\n" << endl;
};
float Guest::calculateGuestBill() {
	return ratePerDay * numberOfDays;
};