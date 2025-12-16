#include "Train.h"
#include <iostream>
#include <cstring>

using namespace std;

void Train::setTrainDetails(int tID, int c, const char d[]) {
	trainID = tID;
	capacity = c;
	strcpy_s(destination, d);
};
void Train::displayTrainDetails() {
	cout << "\nTrain ID = " << trainID << endl;
	cout << "Capacity = " << capacity << endl;
	cout << "StartTime = " << startTime << endl;
	cout << "Destination = " << destination << endl;


};
void Train::setStartTime(const char sTime[]) {
	strcpy_s(startTime, sTime);
};