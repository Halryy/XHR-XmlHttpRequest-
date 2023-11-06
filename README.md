# XHR-XmlHttpRequest-
Código de exemplo para fazer requisições XHR.

É possível atribuir uma função para a maioria das propriedades do objeto XHR (XML HTTP Request).


[XML e XHR.pdf](https://github.com/Halryy/XHR-XmlHttpRequest-/files/13272173/XML.e.XHR.pdf)

---------------------------------------------------------------------------------------------------------------------

(*ESTADOS DAS REQUISIÇÕES XHR*)

0: Requisição não inicializada;

1: Estabeleceu requisição com o servidor;

2: Pedido recebido;

3: Processando pedido;

4: Solicitação concluída e resposta pronta;

----------------------------------------------------------------------------------------------------------------------
Para iniciar, imagine que duas pessoas estão conversando. Para estas pessoas se entenderem, elas tem que entender
a língua que estão falando, correto? Então é a mesma coisa entre computadores que precisam trocar dados/informações.
Então precisamos de uma maneira mais estruturada e formatada, e também precisamos trocar informações com sintáxe em
comúm.

Ajax foi desenvolvido pela Microsoft, nasceu no Internet Explorer na versão 5.0 em março de 1999, isso porque
ele veio junto com uma atualização de uma biblioteca, que era a biblioteca MSXML, ele trouxe um objeto novo que
era o ActiveXObject.

Esse ActiveXObject permitia você criar uma nova instância de um objeto que era basicamente pra fazer esse tipo de
requisições. E qual que é a dor que essa biblioteca veio a resolver nessa atualização? 

Antigamente, toda atualização que você fazia na tela, por exemplo, digitar alguma coisa num campo de pesquisar e
clicar em buscar, você precisava atualizar a tela como um todo, precisava dar um refresh na tela. Isso era muito
ruim porquê, alguns elementos em tela perdiam o seu estado e precisava fazer algumas artimanhas para colocar os
valores que estavam ali antes e também porque ele não era muito "performático". Imagina se toda vez que você
fizesse qualquer botão de buscar, atualizar a tela como um todo e tivesse que usar qualquer outra artimanha como
localStorage para ficar lembrando cada coisa que seu cliente escolheu na tela pra restaurar aquele estado. Foi 
para isso que nasceu o AJAX.

A ideia do AJAX é que ele consiga fazer uma requisição em segundo plano, ou seja, o cliente vai continuar visuali
zando seu documento e vai transferir dados em segundo plano e vai te devolver isso na forma de um documento. Na
época esse documento vinha em formato de XML que era o padrão que a internet se comunicava antigamente. E com o
javascript, você pode fazer o que quiser com essas informações. Podia ser tanto um texto, quanto um link para alguma
imagem ou até um arquivo do tipo BLOB que é um formato que você pode trazer uma imagem física em si.

Resumindo, a ideia aqui basicamente era que você não perdesse o estado dos elementos na tela. Depois de um tempo isso
evoluiu e criou-se um novo objeto chamado XmlHttpRequest. Ele virou o modelo padrão de objeto em todos os navegadores.
Então o ActiveXObject acabou ficando lá atrás só com o Internet Explorer 5.0 e posteriormente o 6.0, mas dali pra
frente, o objeto que se padronizou mesmo foi o XmlHttpRequest que eu vou chamar de XHR só para encurtar. Hoje em dia
ele é muito utilizado para trabalhar com requisições HTTP.
