#include<stdio.h>
#include<conio.h>

main()
{
    float F,C;//Declaração de variaveis

    printf("Qual a temperatura atual de sua cidade?");
    scanf("%f",&C);

    F=1.8*C+32;

    printf("\n A temperatura em Fahrenheit e:%f",F);

    getch();
}
