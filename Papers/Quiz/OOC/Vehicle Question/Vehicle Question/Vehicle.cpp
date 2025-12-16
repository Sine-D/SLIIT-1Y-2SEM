#include "Vehicle.h"
#include <iostream>
#include <cstring>
#include <iomanip>

using namespace std;

void Vehicle::setVehicleDetails(const char vBrand[], const char vType[]) {
	strcpy_s(vehicleBrand, vBrand);
	strcpy_s(vehicleType, vType);
};
void Vehicle::displayVehicleDetails() {
	
	cout << "Input new priceof vehicle : " << setiosflags(ios::fixed)<< setprecision(2) << vehiclePrice << endl;
	
};
void Vehicle::setVehiclePrice(double vPrice) {
	
		vehiclePrice = vPrice;
	
};