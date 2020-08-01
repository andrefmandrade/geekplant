# Geekplant

Geekplant é a solução para o desafio proposto para o processo de seletivo da [Checkplant](https://www.checkplant.com.br/), o desafio é composto de um quiz para definir  a série que melhor te representa.

# Instruções

Para executar o desafio, só é necessário um servidor Apache rodando (WAMP/XAMP e afins), e a aplicação deve estar na document_root do mesmo.
Não é necessário instalar nenhuma biblioteca e nem executar composer install.

# Descrição

O desafio consiste de cinco perguntas, e para cada pegunta existe um total de cinco alternativas (randomizadas a cada execução), o algoritmo deve decidir baseado nas respostas qual a série corresponde melhor as respostas. O critério de escolha é por ocorrência das respostas, e caso ocorra um empate a ultima ocorrência das empatadas é a escolhida.
Cada resposta representa uma série pré-definida, ao final uma frase deve ser apresentada de acordo com o resultado.
O desafio foi executado utilizando PHP (HTML, CSS) nativos, sem a adição de nenhuma biblioteca externa.

![Geekplant](demo/geekplant.gif)
