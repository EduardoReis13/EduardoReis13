#include<stdio.h>
#include<conio.h>
main()
{
    int x,cubo,quadrado;//Declaração de variaveis

    printf("entre com um numero inteiro");
    scanf("%d",&x);

    cubo= pow(x,3);
    quadrado= x*x;
    printf("\n O valor do cubo:%d",cubo);
    printf("\n O valor do quadrado:%d",quadrado);

    getch();
}
