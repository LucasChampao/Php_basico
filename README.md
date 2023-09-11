# Php_basico
// Drivers do PDO no Php, e o uso do PDO;

PDO (Php Data Objetc), é uma extensão do PHP, como se fosse um módulo ou uma API, para acessar os SGBDS( Sistema de gerenciamento de bancos de dados), junto aos drivers do PDO, não é possível executar nenhuma função de bancos de dados somente com a extensão PDO, um driver PDO de banco de dados deve ser usado para acessar o servidor de banco de dados, Um driver é um tipo de extensão que instalamos dentro do PHP, que indica como ele se comunica com bancos de dados específicos( MySQL, Oracle, SQLite.), vantagem do PDO em relação a outras extensões de banco de dados para PHP é a possibilidade de através das mesmas classes e métodos executar queries em diferentes SGBDS, isso é muito importante, pois o desenvolvedor não precisa conhecer os recursos de várias extensões diferentes para trabalhar com diferentes SGBD na linguagem, Outra vantagem principal de usar o PDO é a abstração do banco de dados, trocar para um diferente sem alterar seu código existente.

// Site Estático;

Site Estático: Não é inteligente, onde precisa a cada nova ideia ou atualização, fazer um novo código ou arquivo, e assim fazendo copias com conteúdo novo, não possui ferramentas de gerenciamento, não possui banco de dados, é necessário usar ferramentas externas e conhecimento de programação para conseguir alterar o conteúdo.

// Site Dinâmico;

Site Dinâmico: é inteligente, pois utiliza  poucos arquivos com extensões, e puxa informações e dados quando for requerido, do banco de dados relacional ou não relacional, permite colocar códigos ou conteúdos novos no mesmo arquivos, e assim se torna mais dinâmico, a principal característica de um site dinâmico é que é muito fácil atualizá-lo, para isso, usa um sistema de gerenciamento de conteúdo, como os populares acessíveis WordPress, assim, não é preciso saber programar ou contratar alguém para fazer alterações e postar novos conteúdos.

