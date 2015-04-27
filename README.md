<<<<<<< HEAD
# Trilhando caminho com PHP

## Design Patterns

### Projeto Fase 2

Funcionalidades

Agora que você criou um formulário que é montado dinâmicamente, vamos adicionar mais funcionalidades nele:

- Para cada campo adicionado ao formulário, deve ser possível renderiza-lo separadamente. Você deve criar um método “createField()” e este deve receber parâmetros para a criação do campo (poderemos ter vários tipos de campos).

- Todos os nossos forms agora deverão depender de uma classe chamada “Validator”, que será responsável pela validação dos dados do formulário. Esta classe dependerá de outra classe chamada de “Request”, que representará uma requisição do usuário.

- Crie 4 instancias deste form com os campos que você quiser e renderize. Implementaremos as classes “Validator” e “Request” em exemplos posteriores.

Restrições & dicas

- Toda a implementação deve ser feita usando OO (sem uso de funções)
- Não é permitido usar métodos e atributos estáticos
- Não é permitido usar os patterns Singleton e/ou Registry
- Procure fazer classes pequenas.
- Classes com +300 linhas não serão permitidas
- Procure fazer métodos pequenos. Métodos com +100 linhas não serão permitidos
- Use muitas interfaces para confiar na comuniçação/contrato dos seus objetos.
- Separe as classes em namespaces.

-----------

Para executar o projeto:

Depois de clonado, instale usando o composer

> composer install

Execute o servidor embutido do php apontando para a pasta *public/*

> php -S [servidor]:[porta] -t public/
=======
# patterns2
>>>>>>> f1a6fe5660014545a6d22b932b445f963274f944
