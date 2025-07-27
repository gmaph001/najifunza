#include <iostream>
using namespace std;

class clients{
    private:
    int size,cap;
    string *name;
    string *region;
    string *number;
    string *zip;

    public:
    clients(){
        size = 0;
        cap = 100;
        name = new string[cap];
        region = new string[cap];
        number = new string[cap];
        zip = new string[cap];
    }

    
    bool isempty(){
        if(size == 0){
            return true;
        }
        else{
            return false;
        }
    }

    void regclient(){
        system("cls");
        system("PAUSE");

        cout<<"You are welcome to the registration platform!"<<endl;
        cout<<"Please enter your information as per instructions!"<<endl;
        cout<<endl;

        for(int i=0; i>=0; i++){
            cout<<"Name: ";
            cin>>name[size];
            cout<<endl;

            cout<<"Region: ";
            cin>>region[size];
            cout<<endl;

            for(int j=0; j>=0; j++){
                cout<<"Phone number (Enter correct number)"<<endl;
                cin>>number[size];
                int s = number[size].size();
                if(s = 10){
                    break;
                }
            }
            cout<<endl;

            cout<<"Zip: ";
            cin>>zip[size];

            size++;
            cap++;

            cout<<"Congratulations! You have finished your "<<i+1<<" registration. Do you want to register another client?"<<endl;
            cout<<"Enter 'y' or 'Y' for yes or 'n' or 'N' for no: ";
            char chagua;
            cin>>chagua;
            if(chagua == 'y' || chagua == 'Y'){
                continue;
            }
            else{
                break;
            }
        }
    }

    bool login(string username){
        for(int i=0; i<size; i++){
            if(username == name[i]){
                break;
            }
            else{
                return false;
            }
        }
        return true;
    }
    void print(){
        system("cls");
        system("PAUSE");

        for(int i=0; i<size; i++){
            cout<<"The information for client "<<i+1<<" are as follows: \n";
            cout<<"Name: "<<name[i]<<endl;
            cout<<"Region: "<<region[i]<<endl;
            cout<<"Phone number: "<<number[i]<<endl;
            cout<<"Zip Code: "<<zip[i]<<endl;
            cout<<endl<<endl;
        }
        system("PAUSE");
        system("cls");
    }
};

class serverpro{
    
    private:

    int size, cap;
    string *name;
    string *category;
    string *course;
    string *faculty;
    string *method;
    int *accnumber;

    public:

    clients c;

    serverpro(){
        size = 0;
        cap = 100;
        name = new string[cap];
        category = new string[cap];
        course = new string[cap];
        faculty = new string[cap];
        method = new string[cap];
        accnumber = new int[cap];
    }



    bool isempty(){
        if(size == 0){
            return true;
        }
        else{
            return false;
        }
    }

    void vyuo(string kiwango){
        system("cls");
        system("PAUSE");

        int kiasi = 100;
        string zilizopo[kiasi];
        string malipo[kiasi];
        string michepuo[kiasi];
        int namba[kiasi];
        for(int i=0; i<cap; i++){
            if(course[i] == kiwango){
                zilizopo[kiasi] = name[i];
                michepuo[kiasi] = faculty[i];
                malipo[kiasi] = method[i];
                namba[kiasi] = accnumber[i];
                kiasi++;
            }
        }
        if(kiasi = 1){
            cout<<"Sorry! There is no available service provider for this category!"<<endl;
        }
        else{
            for(int i=0; i<kiasi-1; i++){
                cout<<i+1<<". "<<zilizopo[i]<<endl;
                cout<<"\tPayable through "<<malipo[i]<<" via "<<namba[i]<<endl;
                // c.request(zilizopo[i]);

                cout<<endl;
            }
            cout<<endl;
        }
    }

    void majina(string kiwango){
        system("cls");
        system("PAUSE");
        

        int kiasi = 100;
        int n = 0;
        string zilizopo[kiasi];
        string malipo[kiasi];
        int namba[kiasi];
        for(int i=0; i<size; i++){
            if(course[i] == kiwango){
                zilizopo[n] = name[i];
                malipo[n] = method[i];
                namba[n] = accnumber[i];
                n++;
                kiasi++;
            }
        }
        if(kiasi == 1){
            cout<<"Sorry! There is no available service provider for this category!"<<endl;
        }
        else{
            for(int i=0; i<n; i++){
                cout<<i+1<<". "<<zilizopo[i]<<endl;
                cout<<"\tPayable through "<<malipo[i]<<" via "<<namba[i]<<endl;
                cout<<endl;
            }
            cout<<endl;
        }
        system("PAUSE");
        system("cls");
    }

    

    void regserver(){
        cout<<"Welcome! Please, enter your information here!"<<endl;
        cout<<endl;

        for(int i=0; i>=0; i++){
            cout<<"Enter your information and when done, press 0 to exit"<<endl;
            cout<<endl;

            cout<<"Name: ";
            cin>>name[size];
            cout<<endl;

            cout<<"Category: "<<endl;
            for(int j=0; j>=0; j++){
                cout<<"The available categories are: \n\t1. Secondary Schools.\n\t2. Universities. \n\n";
                cout<<"Please enter your choice[1/2]: ";
                int chaguo;
                cin>>chaguo;
                if(chaguo == 1){
                    category[size] = "Secondary";
                    break;
                }
                else if(chaguo == 2){
                    category[size] = "University";
                    break;
                }
                else{
                    cout<<"Wrong choice! Please repeat!";
                    continue;
                }
            }
            cout<<endl;

            cout<<"Course: \n";
            if(category[i] == "Secondary"){
                for(int j=0; j>=0; j++){
                    cout<<"The available courses for Secondary schools are \n\t1. O-Level \n\t2. A-Level. \nPlease enter your choice [1/2]: ";
                    int chaguo;
                    cin>>chaguo;
                    if(chaguo == 1){
                        course[size] = "O-Level";
                        break;
                    }
                    else if(chaguo == 2){
                        course[size] = "A-Level";
                        break;
                    }
                    else{
                        cout<<"Wrong choice! Please repeat!"<<endl;
                        cout<<endl;
                    }
                }
            }
            else{
                for(int j=0; j>=0; j++){
                    cout<<"The available courses for Universities are \n\t1. Degree \n\t2. Masters. \n\t3. PhD. \nPlease enter your choice [1/2/3]: ";
                    int chaguo;
                    cin>>chaguo;
                    if(chaguo == 1){
                        course[size] = "Degree";
                        break;
                    }
                    else if(chaguo == 2){
                        course[size] = "Masters";
                        break;
                    }
                    else if(chaguo == 3){
                        course[size] = "PhD";
                    }
                    else{
                        cout<<"Wrong choice! Please repeat!"<<endl;
                        cout<<endl;
                    }
                }
            }
            cout<<endl;

            if(category[size] == "Secondary"){
                faculty[size] = "ALL";
            }
            else{
                cin>>faculty[size];
            }
            cout<<endl;

            cout<<"Method of payment: ";
            for(int j=0; j>=0; j++){
                cout<<"\t1. M-Pesa \n\t2. TigoPesa \n\t3. Halopesa \n\t4. AirtelMoney \n\t5. T-Pesa\n\t6. Bank. \n";
                cout<<"Choose the method of payment [1/2/3/4/5]: ";
                int chaguo;
                cin>>chaguo;

                if(chaguo == 1){
                    method[size] = "M-Pesa";
                    break;
                }
                else if(chaguo == 2){
                    method[size] = "TigoPesa";
                    break;
                }
                else if(chaguo == 3){
                    method[size] = "HaloPesa";
                    break;
                }
                else if(chaguo == 4){
                    method[size] = "AirtelMoney";
                    break;
                }
                else if(chaguo == 5){
                    method[size] = "T-Pesa";
                    break;
                }
                else if(chaguo == 6){
                    method[size] = "Bank";
                }
                else{
                    cout<<"Wrong choice! Please repeat!"<<endl;
                    cout<<endl;
                }
            }

            cout<<"Please enter your account number: ";
            cin>>accnumber[size];

            size++;
            cap++;

            cout<<"You have sucessfully registered "<<i+1<<"members!"<<endl;

            cout<<"If you have finished registering members, please press 0, if not press 1";
            int out;
            cin>>out;

            if(out == 0){
                break;
            }
            else{
                continue;
            }
        }
    }

    bool login2(string username){
        for(int i=0; i<size; i++){
            if(username == name[i]){
                break;
            }
            else{
                return false;
            }
        }
        return true;
    }
};

int main(){

    serverpro s;
    clients m;

    system("cls");
    system("PAUSE");

    cout<<"Welcome to the school's management system!"<<endl;

    system("PAUSE");
    

    for(int i=0; i>-1; i++){
        system("cls");
        system("PAUSE");
        cout<<"Do you want to enter as the client or service provider?"<<endl;

        cout<<"Choose 1 for client or 2 for Service provider"<<endl;

        int choice;
        cin>>choice;

            if(choice == 1){
                cout<<"Have you registered yet?"<<endl;
                cout<<endl;

                cout<<"Enter 'y' or 'Y' if yes, or 'n' or 'N' if no: ";
                char option;
                cin>>option;

                if(option == 'y' || option == 'Y'){
                    if(m.isempty()){
                        cout<<"You have not registered yet!"<<endl;
                        cout<<endl;
                        cout<<"Please register!"<<endl;
                        m.regclient();
                    }
                    else{
                        system("clear");
                        cin.get();

                        string username;
                        for(int i=0; i>=0; i++){
                            cout<<"Please enter your username: ";
                            cin>>username;

                            if(!m.login(username)){
                                cout<<"Username not found!"<<endl;
                            }
                            else{
                                break;
                            }
                        }

                        system("clear");
                        cin.get();
                        
                        cout<<"Welcome dear client!"<<endl;
                        cout<<"We provide the following levels of education: \n\t1. Secondary Level \n\t2. University Level \n";
                        cout<<"Please choose the category you want your child to go[1/2]: ";
                        int chaguo;
                        for(int j=0; j>=0; j++){
                            cin>>chaguo;
                            if(chaguo == 1){
                                system("cls");
                                system("PAUSE");

                                cout<<"Choose the Secondary level: \n\t1. O-Level \n\t2. A-Level \n";
                                int choice;
                                for(int k=0; k>=0; k++){
                                    cin>>choice;
                                    if(choice == 1){
                                        string level = "O-Level";
                                        s.majina(level);
                                        break;
                                    }
                                    else if(choice == 2){
                                        string level = "A-Level";
                                        s.majina(level);
                                        break;
                                    }
                                    else{
                                        cout<<"Wrong choice! Please repeat!"<<endl;
                                        cout<<endl;
                                    }
                                }
                                cout << "Rate our service provider out of 5: ";
                                int rate;
                                cin >> rate;
                                for (int i = 0; i < rate; i++)
                                {
                                    cout << "* ";
                                }
                                cout << endl;
                                cout << rate << " / 5" << endl;
                                cout << endl
                                << "Thank you for your response! ";
                                break;
                            }
                            else if(chaguo == 2){
                                system("cls");
                                system("PAUSE");

                                cout<<"Choose the University level: \n\t1. Degree \n\t2. Masters \n\t3. PhD \n";
                                int choice;
                                for(int k=0; k>=0; k++){
                                    cin>>choice;
                                    if(choice == 1){
                                        string level = "Degree";
                                        s.vyuo(level);
                                        break;
                                    }
                                    else if(choice == 2){
                                        string level = "Masters";
                                        s.vyuo(level);
                                        break;
                                    }
                                    else if(choice == 3){
                                        string level = "PhD";
                                        s.vyuo(level);
                                        break;
                                    }
                                    else{
                                        cout<<"Wrong choice! Please repeat!"<<endl;
                                        cout<<endl;
                                    }
                                }
                                cout << "Rate our service provider out of 5: ";
                                int rate;
                                cin >> rate;
                                for (int i = 0; i < rate; i++)
                                {
                                    cout << "* ";
                                }
                                cout << endl;
                                cout << rate << " / 5" << endl;
                                cout << endl
                                << "Thank you for your response! ";
                               
                               cin.get();
                                break;
                            }
                            else{
                                cout<<"Wrong choice! Please repeat!"<<endl;
                                cout<<endl;
                            }
                            break;
                        }
                    }
                }
                else{
                    m.regclient();
                }
            }
            else if(choice == 2){
                        cout<<"Have you registered yet?"<<endl;
                        cout<<endl;

                        cout<<"Enter 'y' or 'Y' if yes, or 'n' or 'N' if no: ";
                        char option;
                        cin>>option;

                        if(option == 'y' || option == 'Y'){
                            if(s.isempty()){
                                cout<<"You have not registered yet!"<<endl;
                                cout<<endl;
                                cout<<"Please register!"<<endl;
                                s.regserver();
                            }
                            else{
                                system("cls");
                                system("PAUSE");

                                string username2;
                                for(int i=0; i>=0; i++){
                                    cout<<"Please enter your username: ";
                                    cin>>username2;

                                    if(!s.login2(username2)){
                                        cout<<"Username not found!"<<endl;
                                    }
                                    else{
                                        cout<<"Here is the list of your orders!"<<endl;
                                        m.print();
                                        break;
                                    }
                                }
                            }
                        }
                        else{
                            s.regserver();
                        }
                    }
                }


    system("PAUSE");
    system("cls");


    return 0;
}