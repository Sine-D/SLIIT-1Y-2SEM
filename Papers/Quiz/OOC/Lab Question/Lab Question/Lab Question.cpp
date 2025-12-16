#include <iostream>
#include "Lab.h"

using namespace std;

int main()
{
    Lab l1;

    int c;

    cout << "Insert capacity : ";
    cin >> c;


    l1.setLabDetails(c);

    cout << "Lab : " << l1.getLab();




    return 0;
}