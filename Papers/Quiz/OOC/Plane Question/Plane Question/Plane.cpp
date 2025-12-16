#include "Plane.h"
#include <iostream>
#include <cstring>

using namespace std;

void Plane::setPlaneDetails(int pID, const char p[], const char d[]) {
	planeID = pID;
	strcpy_s(piolet, p);
	strcpy_s(destination, d);
};
void Plane::displayPlaneDetails() {
	cout << "\nPlaneID = " << planeID << endl;
	cout << "Piolet = " << piolet << endl;
	cout << "destination = " << getDestination() << endl;
};
char* Plane::getDestination() {
	return destination;
};