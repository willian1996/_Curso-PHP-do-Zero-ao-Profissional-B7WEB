Comandos
É importante conhecer os principais comandos da ferramenta para tirar melhor proveito dela. Veja:

init: cria um novo repositório;
clone: permite clonar um repositório;
add: usado para adicionar alterações. É o primeiro passo no fluxo de trabalho do Git;
status: mostra em qual branch o usuário está e se existem itens modificados;
diff: exibe linhas que foram adicionadas ou removidas;
commit: usado para confirmar as modificações e enviar uma mensagem descrevendo-as;
reset: permite desfazer modificações;
rm: remove o arquivo da lista de monitorados e faz o commit;
mv: move, renomeia e faz o commit de arquivos;
branch: usado para desenvolver funcionalidades isoladas umas das outras;
checkout: permite mudar de branch;
merge: usado para mesclar branches;
mergetool: permite visualizar os conflitos;
log: mostra o histórico de commits;
stash: armazena alterações em uma pilha para serem confirmadas (commit) depois;
tag: serve para fazer marcações em pontos específicos;
fetch: dá acesso a dados de projetos remotos;
pull: incorpora alterações de um repositório remoto no branch atual;
push: transfere commits do repositório local a um remoto.
Fluxo de trabalho centralizado
O fluxo de trabalho centralizado apresenta um único servidor enquanto várias pessoas trabalham em seus repositórios locais. No final, todos enviam seus documentos para o repositório principal. Passo a passo, seria assim:

um repositório novo é criado para o projeto;
cada integrante da equipe o clona em sua máquina local;
a cada tarefa concluída, o programador cria uma nova branch em seu repositório local e faz o checkout para ela;
sempre que desejar, o profissional faz commit das alterações, para que o histórico seja guardado no repositório local;
depois que a tarefa for concluída e o commit for feito, é preciso fazer checkout para a branch principal e usar o pull para atualizar o repositório local com os documentos mais recentes;
após o pull, é necessário fazer o merge da branch criada com a branch master para juntar os documentos no repositório local;
já no fim, com o comando push é possível enviar as alterações ao repositório central;
em seguida, pode-se apagar a branch criada (se desejar) e passar para a próxima tarefa da lista;
e assim sucessivamente até que o projeto seja finalizado.
Quando mais de uma pessoa altera um mesmo arquivo ao mesmo tempo, ocorrem conflitos. Se o fluxo for seguido dessa forma, eles dificilmente aparecerão, pois depois que uma das versões for enviada ao servidor, a ferramenta não a aceita novamente obrigando o segundo desenvolvedor a realizar um merge.

Versionamento é importante?

Só quem já precisou lidar com um código em que não era o único desenvolvedor sabe como isso é difícil: as pessoas pensam de formas diferentes e o que é lógico para um pode ser confuso para outro. Esse é um dos problemas que podem ser solucionados a partir do versionamento de projetos.

Um bom controle de versão evita, ainda, que arquivos ou documentos sejam alterados por duas pessoas ao mesmo tempo, que uma alteração seja sobrescrita, que se percam arquivos funcionais que apresentaram problema após serem alterados e outros.

Além disso, permite que várias pessoas trabalhem no mesmo projeto ao mesmo tempo, possibilita que a equipe trabalhe paralelamente em duas versões distintas e ajuda a manter a qualidade do produto final.

Em resumo, o versionamento de software é parte integrante do desenvolvimento. Deve, portanto, ser tratado com o mesmo cuidado e atenção dados a padrões de projeto e metodologias adotados.

E então, já sabe como fazer versionamento de software? Siga a gente nas redes sociais para ficar por dentro das nossas novidades. Estamos no Facebook, no Twitter e no LinkedIn.