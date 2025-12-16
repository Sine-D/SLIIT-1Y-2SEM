#include <iostream>
#include "Salesman.h"

using namespace std;

int main()
{
    Salesman s1, s2, s3;

    float c1, c2, c3;

    s1.setSalesmanDetails(1, "John", 30000);
    s1.setSalesmanContactNo(772358375);
    
    s2.setSalesmanDetails(2, "Ann", 40000);
    s2.setSalesmanContactNo(773029452);

    s3.setSalesmanDetails(3, "Leema", 35000);
    s3.setSalesmanContactNo(778294526);

    cout << "Input new contact number of salesman 1 : ";
    cin >> c1;
    cout << "Input new contact number of salesman 2 : ";
    cin >> c2;
    cout << "Input new contact number of salesman 3 : ";
    cin >> c3;

    s1.setSalesmanContactNo(c1);
    s2.setSalesmanContactNo(c2);
    s3.setSalesmanContactNo(c3);

    s1.displaySalesmanDetails();
    s2.displaySalesmanDetails();
    s3.displaySalesmanDetails();


    return 0;
}