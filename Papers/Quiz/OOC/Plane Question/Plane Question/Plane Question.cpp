#include <iostream>
#include "Plane.h"

using namespace std;

int main()
{
    Plane p1, p2, p3, p4;

    char pi1[50], pi2[50], pi3[50], pi4[50];

    p1.setPlaneDetails(1, "John", "USA");
    p2.setPlaneDetails(2, "George", "UK");
    p3.setPlaneDetails(3, "Henry", "USA");
    p4.setPlaneDetails(4, "Ronald", "UAE");

    cout << "Input new pilot of plane 1 : ";
    cin >> pi1;

    cout << "Input new pilot of plane 2 : ";
    cin >> pi2;

    cout << "Input new pilot of plane 3 : ";
    cin >> pi3;

    cout << "Input new pilot of plane 4 : ";
    cin >> pi4;

    p1.setPlaneDetails(1, pi1, "USA");
    p2.setPlaneDetails(2, pi2, "UK");
    p3.setPlaneDetails(3, pi3, "USA");
    p4.setPlaneDetails(4, pi4, "UAE");

    p1.displayPlaneDetails();
    p2.displayPlaneDetails();
    p3.displayPlaneDetails();
    p4.displayPlaneDetails();



    return 0;
}