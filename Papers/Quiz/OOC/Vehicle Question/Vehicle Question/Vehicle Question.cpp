#include <iostream>
#include "Vehicle.h"

using namespace std;

int main()
{
    Vehicle v1, v2, v3;
    double vp1, vp2, vp3;

    v1.setVehicleDetails("Toyota", "SUV");
    v1.setVehiclePrice(8500000);

    v2.setVehicleDetails("Nissan", "Saloon");
    v2.setVehiclePrice(6000000);

    v3.setVehicleDetails("Honda", "Convertible");
    v3.setVehiclePrice(7200000);

    cout << "Enter v1 price : ";
    cin >> vp1;
    v1.setVehiclePrice(vp1);

    cout << "Enter v2 price : ";
    cin >> vp2;
    v2.setVehiclePrice(vp2);

    cout << "Enter v3 price : ";
    cin >> vp3;
    v3.setVehiclePrice(vp3);


    v1.displayVehicleDetails();
    v2.displayVehicleDetails();
    v3.displayVehicleDetails();




    return 0;
}
