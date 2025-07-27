#include <iostream>
using namespace std;

int main(){

    cout<<"\tWelcome to the bubble sort algorithm."<<endl;

    cout<<"\tPlease enter the number of elements you want to sort: ";

    int n;

    cin>>n;

    for(int j=0; j>=0; j++){
        if(n>0){
            break;
        }
        else{
            cout<<"\tEnter a positive number!"<<endl;
            cin>>n;
        }
    }

    cout<<"\tNow enter the numbers you want to sort:"<<endl;

    int a[n] = {};
    int x;

    for(int h=0; h<n; h++){
        cout<<"\t";
        cin>>a[h];
    }

    cout<<endl;
    
    cout<<"\tThe numbers you want to sort are: ";

    for(int i=0; i<n; i++){
        cout<<a[i]<<" ";
    }

    cout<<endl<<endl;

    for(int i = 0; i<n-1; i++){
        for(int k = i+1; k<n; k++){
            if(a[i]>a[k]){
                x = a[i];
                a[i] = a[k];
                a[k] = x;
            }
        }
    }

    cout<<"\tYour sorted numbers are: ";

    for(int i=0; i<n; i++){
        cout<<a[i]<<" ";
    }

    cout<<endl<<endl;

    system("PAUSE");
    system("cls");

    return 0;
}