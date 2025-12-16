#include <iostream>
#include "Medicine.h"

using namespace std;

int main()
{
    Medicine m1, m2, m3;

    float d1, d2, d3;

    m1.setMedicineDetails(1, "Panadol", "Headache");
    m2.setMedicineDetails(2, "Vitamin C", "Cold");
    m3.setMedicineDetails(3, "Vicks", "Cough");

    m1.setDose(10.0);
    m2.setDose(10.0);
    m3.setDose(10.0);

    cout << "Input new dose of medicine 1 = ";
    cin >> d1;

    cout << "Input new dose of medicine 2 = ";
    cin >> d2;

    cout << "Input new dose of medicine 3 = ";
    cin >> d3;

    m1.setDose(d1);
    m2.setDose(d2);
    m3.setDose(d3);

    m1.displayMedicineDetails();
    m2.displayMedicineDetails();
    m3.displayMedicineDetails();



    return 0;
}
