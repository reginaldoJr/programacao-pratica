// Printe os numeros em colunas de 10, até 100 linhas
#include <stdio.h>

int main() {

    for(int linha= 1; linha < 100; linha+=10){
        for (int coluna = linha; coluna < linha + 10;coluna++){
            printf("%d,",coluna);
        }
        printf("\n");
    }
    return 0;
}
