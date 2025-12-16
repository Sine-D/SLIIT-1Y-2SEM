#include <iostream>
#include "Child.h"

using namespace std;

int main()
{
    Child c1, c2, c3;

    float n1, n2, n3;

    c1.setChildDetails(1, "Oliver", "Bryan");
    c1.setContactNo(1111111);

    c2.setChildDetails(2, "Cody", "Joal");
    c2.setContactNo(2222222);

    c3.setChildDetails(3, "Kaden", "Jessica");
    c3.setContactNo(3333333);


    cout << "Input new contact number of child 1 : ";
    cin >> n1;

    cout << "Input new contact number of child 2 : ";
    cin >> n2;

    cout << "Input new contact number of child 3 : ";
    cin >> n3;


    c1.setContactNo(n1);
    c2.setContactNo(n2);
    c3.setContactNo(n3);

    c1.displayChilddetails();
    c2.displayChilddetails();
    c3.displayChilddetails();
    

    return 0;
}