#include<iostream>

using namespace std;

int main()
{
    long long  n,sum;
    cout << "Enter your number: "; cin >> n;
    for ( int number = 1;number  <= n;number++)
    {
        sum =0;
        for (int i = 1 ; i <= number;i++)
            if (number%i==0)
                sum+=i;
        if (sum/2.0 == number)
            cout << number << endl;
    }
    return 0;
}
