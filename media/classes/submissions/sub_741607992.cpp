#include <iostream>
#include <string>
using namespace std;
class Client
{
    public:
    int size, cap;
    string *uname;
    string *region;
    string *phone_num;
    string *zip_code;

    Client()
    {
        size = 0;
        cap = 100;
        uname = new string[cap];
        region = new string[cap];
        phone_num = new string[cap];
        zip_code = new string[cap];
    }

    void Registration()
    {
        cout << "Please enter your details " << endl;
        cout << "Enter username: ";
        cin >> uname[size];
        cout << endl;

        
        cout << "Enter region: ";
        cin >> region[size];
        cout << endl;

        cout << "Enter phone number (Tanzania based - 9 digits): ";
        cin>>phone_num[size];
        cout << endl;

        cout << "Enter zip code: ";
        cin >> zip_code[size];
        cout << endl;

        size++;

        system("PAUSE");
        system("cls");
    }
    
    void Service_provider()
    {
        cout << "Choose a service provider: " << endl;
        cout << "1. Secondary Schools\n2. Universities\n";
        int input;
        cin >> input;
        if (input == 1)
        {
            Secondary_Sch();
        }
        else if (input == 2)
        {
            University();
        }
        else
        {
            cout << "Invalid option!" << endl;
        }
    }

    void Secondary_Sch()
    {
        cout << "Choose a service:\n1.O-level\n2.A-level\n";
        int level;
        cin >> level;
        if (level == 1)
        {
            cout << "\nSchools for O-level:\nChoose a school for O-level:\n1. Shaaban Robert Secondary School\n2. Aga Khan Mzizima Secondary School\n3. Al Muntazir Islamic International Seminary\n4. International School of Tanganyika\n";
            int school;
            cin >> school;
            cout<<endl;
            if (school == 1 || school == 2 || school == 3 || school == 4)
            {
                string Science[5]={"Physics","Chemistry", "Biology", "Mathematics", "ICS"};
                string Arts[2]={"Book-keeping", "Commerce"};
                string Language[2]={"English","Kiswahili"}; 

                string subject;
                cout<<"Enter a subject: ";
                cin>>subject;
                bool found = false;

                // Check in Science subjects
                for (int i = 0; i < 5; i++)
                {
                    if (Science[i] == subject)
                    {
                        found = true;
                        cout << "Package available:\n";
                        for (int j = 0; j < 5; j++)
                        {
                            cout << Science[j] << endl;
                        }
                        cout << endl;
                        cout << "Per month Tsh 500000";
                        cout<<endl;
                        system("PAUSE");
                        system("cls");
                        Payment();
                        break;
                    }
                }
                // Check in Arts subjects if not found in Science
                if (!found)
                {
                    for (int i = 0; i < 2; i++)
                    {
                        if (Arts[i] == subject)
                        {
                            found = true;
                            cout << "Package available:\n";
                            for (int j = 0; j < 2; j++)
                            {
                                cout << Arts[j] << endl;
                            }
                            cout << "Per month Tsh 200000";
                            cout << endl;
                            system("PAUSE");
                            system("cls");
                            Payment();
                            break;
                        }
                    }
                }
                // Check in Language subjects if not found in Arts
                if (!found)
                {
                    for (int i = 0; i < 2; i++)
                    {
                        if (Language[i] == subject)
                        {
                            found = true;
                            cout << "Package available:\n";
                            for (int j = 0; j < 2; j++)
                            {
                                cout << Language[j] << endl;
                            }
                            cout << "Per month Tsh 200000";
                            cout << endl;
                            system("PAUSE");
                            system("cls");
                            Payment();
                            break;
                        }
                    }
                }
                // If subject was not found in any category
                if (!found)
                {
                    cout << "Subject not available in any package." << endl;
                }
            }
        }
        else if(level == 2)
        {
            cout << "\nSchools for A-level:\nChoose a school for A-level:\n1. Shaaban Robert Secondary School\n2. Aga Khan Mzizima Secondary School\n3. Al Muntazir Islamic International Seminary\n4. International School of Tanganyika\n";
            int school;
            cin >> school;
            if (school == 1 || school == 2 || school == 3 || school == 4)
            {
                cout<<endl;
                cout<<"Choose a combination: ";
                string comb;
                cin>>comb;
                string combs[10]={"PMC","PCM","PGM","PCB","CBG","EGM","ECA","HGL","HGE","HKL"};
                
                bool flag = false;
                for(int i=0; i<10; i++)
                {
                    if(combs[i] == comb)
                    {
                        flag = true;
                    }
                }
                if(flag == true)
                {
                    cout<<"Combination available!\n-Per month Tsh 500000/="<<endl;
                }
                else
                {
                    cout<<"Combination not found!";
                }
                cout<<endl;
                system("PAUSE");
                system("cls");
                Payment();
            }
        }
    }
    void University()
    {
        cout << "\nChoose a level you want to pursue:\n1. Bachelors Degree\n2. Masters\n3. PHD\n";
        int level;
        cin >> level;
        switch (level)
        {
        case 1:
            UniversityBachelors();
            break;
        case 2:
            UniversityMasters();
            break;
        case 3:
            UniversityPhD();
            break;
        default:
            cout << "Invalid option!" << endl;
            break;
        }
    }
    void UniversityBachelors()
    {
        cout << "\nChoose a University:\n1. UDSM\n2. IFM\n3. NIT\n4. Unique Academy\n ";
        int uni;
        cin >> uni;
        switch (uni)
        {
        case 1:
            cout << "Welcome to University of Dar es Salaam" << endl;
            bachelors();
            break;
        case 2:
            cout << "Welcome to Institute Of Finance Management University" << endl;
            bachelors();
            break;
        case 3:
            cout << "Welcome to National Institute Of Technology University" << endl;
            bachelors();
            break;
        case 4:
            cout << "Welcome to Unique Academy University" << endl;
            bachelors();
            break;
        default:
            cout << "Invalid option!" << endl;
            break;
        }
    }

    void bachelors()
    {
        cout << "Choose a course:\n1. Bsc. in Computer Science\n2. Bsc Electrical Engineering \n3. Bsc Civil Engineering \n4. Bsc Arts and Music\n";
        int course;
        cin >> course;
        switch (course)
        {
        case 1:
            cout << "\nThe selected course takes 3 years to complete a bachelors degree and costs 1.5M Tzs per year";
            Payment();
            break;
        case 2:
            cout << "\nThe selected course takes 4 years to complete a bachelors degree and costs 3M Tzs per year";
            Payment();
            break;
        case 3:
            cout << "\nThe selected course takes 5 years to complete a bachelors degree and costs 4M Tzs per year";
            Payment();
            break;
        case 4:
            cout << "\nThe selected course takes 2 years to complete a bachelors degree and costs 1M Tzs per year";
            Payment();
            break;
        default:
            cout << "Invalid option!" << endl;
            break;
        }
    }
    void UniversityMasters()
    {
        cout << "\nChoose a University:\n1. UDSM\n2. IFM\n3. NIT\n4. Unique Academy\n ";
        int uni;
        cin >> uni;
        switch (uni)
        {
        case 1:
            cout << "Welcome to University of Dar es Salaam" << endl;
            masters();
            break;
        case 2:
            cout << "Welcome to Institute Of Finance Management University" << endl;
            masters();
            break;
        case 3:
            cout << "Welcome to National Institute Of Technology University" << endl;
            masters();
            break;
        case 4:
            cout << "Welcome to Unique Academy University" << endl;
            masters();
            break;
        default:
            cout << "Invalid option!" << endl;
            break;
        }
    }
    void masters()
    {
        cout << "Choose a course:\n1. M.A. in Computer Science\n2. M.A. Electrical Engineering \n3. M.A. Civil Engineering \n4. M.A. Arts and Music\n";
        int course;
        cin >> course;
        switch (course)
        {
        case 1:
            cout << "\nThe selected course takes 5 years to complete a Masters degree and costs 3M Tzs per year";
            Payment();
            break;
        case 2:
            cout << "\nThe selected course takes 6 years to complete a Masters degree and costs 6M Tzs per year";
            Payment();
            break;
        case 3:
            cout << "\nThe selected course takes 8 years to complete a Masters degree and costs 8M Tzs per year";
            Payment();
            break;
        case 4:
            cout << "\nThe selected course takes 4 years to complete a Masters degree and costs 2M Tzs per year";
            Payment();
            break;
        default:
            cout << "Invalid option!" << endl;
            break;
        }
    }
    void UniversityPhD()
    {
        cout << "\nChoose a University:\n1. UDSM\n2. IFM\n3. NIT\n4. Unique Academy\n ";
        int uni;
        cin >> uni;
        switch (uni)
        {
        case 1:
            cout << "Welcome to University of Dar es Salaam" << endl;
            PhD();
            break;
        case 2:
            cout << "Welcome to Institute Of Finance Management University" << endl;
            PhD();
            break;
        case 3:
            cout << "Welcome to National Institute Of Technology University" << endl;
            PhD();
            break;
        case 4:
            cout << "Welcome to Unique Academy University" << endl;
            PhD();
            break;
        default:
            cout << "Invalid option!" << endl;
            break;
        }
    }
    void PhD()
    {
        cout << "Choose a course:\n1. PHD in Computer Science\n2. PHD Electrical Engineering \n3. PHD Civil Engineering \n4. PHD Arts and Music\n";
        int course;
        cin >> course;
        switch (course)
        {
        case 1:
            cout << "\nThe selected course takes 8 years to complete a PHD degree and costs 3M Tzs per year";
            Payment();
            break;
        case 2:
            cout << "\nThe selected course takes 10 years to complete a PHD degree and costs 6M Tzs per year";
            Payment();
            break;
        case 3:
            cout << "\nThe selected course takes 10 years to complete a PHD degree and costs 8M Tzs per year";
            Payment();
            break;
        case 4:
            cout << "\nThe selected course takes 6 years to complete a PHD degree and costs 2M Tzs per year";
            Payment();
            break;
        default:
            cout << "Invalid option!" << endl;
            break;
        }
    }
    void Payment()
    {
        cout << "\nChoose a method of payment:\n1. M Pesa\n2. Tigo Pesa\n3. Halo Pesa\n4. Airtel Money\n";
        int payment;
        cin >> payment;
        cout << "Enter Pin: ";
        int pin;
        cin >> pin;
        system("PAUSE");
        system("cls");
        cout << "Dear customer, your payment has been made successfully, Thank you!" << endl;
    }
    void portfolio()
    {
        for(int i=0; i<size; i++){
            cout<<"The information for client "<<i+1<<" are as follows: \n";
            cout<<"Name: "<<uname[i]<<endl;
            cout<<"Region: "<<region[i]<<endl;
            cout<<"Phone number: "<<phone_num[i]<<endl;
            cout<<"Zip Code: "<<zip_code[i]<<endl;
            cout<<endl<<endl;
        }
    }
};

class Service_Provider
{
    public:

};

int main()
{
    Client clients;
    Service_Provider service_prov;

    for(int i=0; i>-1; i++)
    {
        system("cls");
        cout<<"Welcome to Ketox Application System"<<endl;
        cout<<"Enter as a:\n1. Client\n2. Service provider\n";
        int input;
        cin>>input;
        if(input == 1)//client
        {
            clients.Registration();
            clients.Service_provider();
            cout<<"Do you want to continue(Enter 'y' if yes or 'n' if no): ";
            char user_choice;
            cin>>user_choice;
            for(int i=0; i<=0; i++)
            {
                if(user_choice == 'Y' || user_choice == 'y')
                {
                    continue;
                }
                else if(user_choice == 'N' || user_choice == 'n')
                {
                    cout<<"Comment on our service provider: "<<endl;
                    string comment;
                    cin.ignore();
                    getline(cin, comment);
                    cout<<endl;
                    cout << "Rate our service provider out of 5: ";
                    int rate;
                    cin >> rate;
                    for (int i = 0; i < rate; i++)
                    {
                        cout << "* ";
                    }
                    cout << endl;
                    cout << rate << " / 5" << endl;
                    cout << endl<< "Thank you for your response! ";
                    return 0;
                }
                else
                {
                    cout<<"Invalid option";
                }
        }    
        }
        else if(input == 2)//service provider
        {
            clients.portfolio();
            cout<<endl;
            cout<<"Comment on clients: "<<endl;
            string comment;
            cin.ignore();
            getline(cin, comment);
            cout<<endl;
            cout << "Rate clients out of 5: ";
            int rate;
            cin >> rate;
            for (int i = 0; i < rate; i++)
            {
                cout << "* ";
            }
            cout << endl;
            cout << rate << " / 5" << endl;
            system("PAUSE");
            return 0;
        }
        else
        {
            cout<<"Invalid option";
        }
    }
    return 0;
}