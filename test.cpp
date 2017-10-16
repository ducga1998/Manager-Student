#include<iostream>
#include<math.h>
#define For(index,length) for(index = 0;index < length;index++)
using namespace std;
class NhanSu{
private:
    char ma[15];
    char ten[30];
    float HSL;
public:
    void nhap();
    void Xuat();
    int docHSL(){

        return HSL;
    }
    float operator<(Nhansu &m2){
        if(HSL<m2.HSL)
        {
            return 1
        }
      return 0;

    }
 float operator<(Nhansu &m2)
 {
     if(HSL<m2.HSL)
     {
         return 1;
     }
 }
    Nhansu Wrap(Nhansu &nv){
        Nhansu flag;
        flag=nv;
        nv=*this;
        *this=flag;
    }
}
class ListNhanSu{
private: 
    int n;
    Nhansu *ns;
public:
    void nhap();
    void xuat();
    void sort();
}
void NhanSu::nhap(){
    cout<<"Nhap ten nhan su"<<endl;
    fflush(stdin);
    cin.get(ten,30);
    cout<<"nhap ma nhan su"<<endl;
    fflush(stdin);
    cin.get(ma,15);
    cout<<"nhap he so luong"<<endl;
    cin>>HSL;


}
void Nhansu::Xuat(){
   cout<<ten<<"\t\t"<<ma<<"\t\t"<<HSL<<endl;
}
void DSNS::nhap(){
    cout<<"nhap so phan tu"<<endl;
    cin>>n;
    ds=new Nhansu[n+5];
    For(i,1,n){
        cout <<"nhap thong tin cho nhan su thu "<<i<<endl;
        ds[i].nhap();
    }
}
void DSNS:xuat(){
    cout<<"info nhan su theo thu tu giam dan"<<endl;
    For(i,1,n)
    {
        cout<<" "<<i<<"\t";
        ds[i].Xuat();cout<<endl;
    }
}
void DSNS::Sapxep(){
    For(i,1,n-1)
     For(j,i+1,n)
     {
         if(ds[i]><ds[j])
         ds[i].Wrap(ds[j]);
     }
}
int main(){
    DSNS x;
    x.nhap();
    x.Sapxep();
    x.xuat();
    getch();
} 