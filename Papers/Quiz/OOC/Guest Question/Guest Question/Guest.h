#pragma once
class Guest
{
private:
	int guestID;
	char guestName[20];
	float ratePerDay;
	int numberOfDays;

public:
	void setGuestDetails(int gID, const char gName[], float rPerDay, int nOfdays);
	void displayGuestDetails();
	float calculateGuestBill();
};

