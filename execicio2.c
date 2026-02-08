// O programa deve pedir um novo input
// Enquanto o usuario não entrar com a plavra sim
// ele deve continuar pedindo o input do usuário

#include <stdio.h>
#include <string.h>

int main() {
    char valor_digitado[256];
    do{
        printf("Digite sim para sair:\n");
        scanf("%s", valor_digitado);
    }while(strcmp(valor_digitado, "SIM") != 0)
    return 0;
}
