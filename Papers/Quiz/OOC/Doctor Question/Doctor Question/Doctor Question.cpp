#include <iostream>
#include "Doctor.h"

using namespace std;

int main()
{
    Doctor d1, d2, d3;

    char h1[20], h2[20], h3[20];

    d1.setDoctorDetails(1, "Dr. Sunil", "Neurologist", "no");
    d2.setDoctorDetails(2, "Dr. Yasantha", "Oncologist", "no");
    d3.setDoctorDetails(3, "Dr. Godvin", "Cardiologist", "no");


    cout << "Input new hospital 1 : ";
    cin >> h1;

    cout << "Input new hospital 2 : ";
    cin >> h2;

    cout << "Input new hospital 3 : ";
    cin >> h3;

    d1.setDoctorDetails(1, "Dr. Sunil", "Neurologist", h1);
    d2.setDoctorDetails(2, "Dr. Yasantha", "Oncologist", h2);
    d3.setDoctorDetails(3, "Dr. Godvin", "Cardiologist", h3);

    d1.displayDoctorDetails();
    d2.displayDoctorDetails();
    d3.displayDoctorDetails();


    return 0;
}