#pragma once

class Vehicle
{
private:
	int vehicleID;
	char vehicleBrand[30];
	char vehicleType[30];
	double vehiclePrice;

public: 
	void setVehicleDetails(const char vBrand[], const char vType[]);
	void displayVehicleDetails();
	void setVehiclePrice(double vPrice);

};

