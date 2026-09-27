# FCM-Desk

## O que é o FCM?
O FCM(FC Career Manager) é um gerenciador de modo carreira do Fifa/Ea FC, que visa tornar mais prático anotar os dados de cada temporada do seu modo carreira e aumentar a imersão ao jogar uma carreira, anotando quem foi o Artilehiro, Destaque, Garçom do time, e demais estatísticas da temporada que por padrão o jogo descarta sempre que uma temporada nova se inicia.

## 1 - Motivação do Projeto:
 O FCM (FC Career Manager) surgiu originalmente como uma aplicação mobile desenvolvida para facilitar o registro e acompanhamento de informações de modos carreira em jogos da série FIFA/EA FC.

Durante uma carreira, diversas informações relevantes são reiniciadas ou deixam de estar disponíveis quando uma nova temporada é iniciada, como estatísticas individuais dos jogadores, artilharia, assistências, títulos conquistados e histórico de transferências. Dessa forma, o jogador precisa recorrer a anotações externas ou outras ferramentas para preservar o histórico de sua carreira.

A partir da experiência com a versão mobile, surgiu a proposta de desenvolver o FCM-Desk, uma versão web voltada principalmente para utilização em computadores. A aplicação busca oferecer uma interface mais adequada para o gerenciamento de uma quantidade maior de informações, permitindo registrar, organizar e consultar o histórico das temporadas de forma centralizada.

Embora o projeto tenha como principal referência os modos carreira dos jogos FIFA/EA FC, sua proposta também pode ser utilizada para outros jogos de futebol que possuam sistemas semelhantes de carreira, como a série PES/eFootball.

## 2 - Objetivos:
### Objetivo Geral
 - Desenvolver o FCM-Desk, uma aplicação web para gerenciamento e registro do histórico de modos carreira de jogos de futebol, permitindo ao usuário preservar e consultar informações de suas temporadas, jogadores, transferências, títulos e estatísticas que não são mantidas pelo jogo ao iniciar uma nova temporada.

### Objetivos Específicos
 - Permitir o cadastro e gerenciamento de diferentes modos carreira.
 - Registrar as temporadas disputadas em cada modo carreira.
 - Armazenar informações sobre jogadores, clubes e elencos utilizados.
 - Registrar estatísticas individuais dos jogadores, como gols, assistências e participações em partidas.
 - Registrar títulos e demais conquistas obtidas durante cada temporada.
 - Manter um histórico de transferências realizadas ao longo da carreira.
 - Permitir a consulta do histórico das temporadas e das principais estatísticas da carreira.
 - Disponibilizar uma interface web adaptada para utilização em computadores.
 - Facilitar a organização e preservação das informações que são descartadas ou reiniciadas pelo jogo ao iniciar uma nova temporada.

## 3 - Principais funcionalidades planejadas:
 - Gerenciamento de carreiras: criação, edição e exclusão de modos carreira.
 - Gerenciamento de temporadas: registro das temporadas pertencentes a cada carreira, incluindo informações gerais e resultados.
 - Gerenciamento de jogadores: cadastro e gerenciamento dos jogadores presentes no elenco.
 - Estatísticas da temporada: registro de gols, assistências, partidas e outros dados relevantes dos jogadores.
 - Destaques da temporada: identificação dos principais jogadores, como artilheiro, líder de assistências e jogador de destaque.
 - Títulos e conquistas: registro das competições vencidas durante cada temporada.
 - Transferências: histórico de jogadores contratados, vendidos ou emprestados.
 - Histórico da carreira: visualização consolidada das informações acumuladas ao longo das temporadas.
 - Consulta e navegação: acesso às informações de diferentes temporadas e jogadores de forma organizada.

## 4 - Artefatos de engenharia
 - Design das Telas:
   A modelagem das telas se encontra no seguinte link:
   https://www.figma.com/site/AWRhqrBIHWWeiFfDVZj3g7/FCM-DESK?node-id=0-1&t=dB8C8coOD6zf7DpI-1
 - Modelo do Banco de Dados:
   A modelagem do banco de dados se encontra no seguinte link:
   https://app.brmodeloweb.com/publicview/6805ab4534ce7610b017e20b
   
## Sprints do planejamento
- [ ] Semana 1 - Estrutura Inicial - Criar projeto laravel, configurar banco de dados e estrutura inicial
- [ ] Semana 2 - Usuários e carreiras - Autenticação e CRUD de carreiras
- [ ] Semana 3 - Temporadas e jogadores - CRUD de temporadas, jogadores e associação com carreiras
- [ ] Semana 4 - Estatísticas e transferências - Implementar estatísticas, destaques e histórico de transferências
- [ ] Semana 5 - Títulos e histórico - Implementar registro de títulos e visualização do histórico da carreira
- [ ] Semana 6 - Interface e refinamento - Finalizar telas, validações, navegação e responsividade
- [ ] Semana 7 - Testes e entrega - Testes, correções, ajustes visuais e documentação

## 5 - Tecnologias
 - Laravel
 - PHP
 - MYSQL
 - Blade
