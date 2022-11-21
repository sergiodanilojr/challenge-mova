# Challenge Mova

Desafio proposto pela Mova.vc a fim de trabalhar com o padrão strategy.

| > Desenvolva um programa que exiba uma mensagem diferente para cada dia da semana, usando o padrão Strategy. Pense que em datas especiais, podemos ter alguma variação.


## Setup

### 1. Copie o arquivo `.env.example` para um `.env` e defina as suas configurações para subir o projeto.

```bash
cp .env.example .env
```

### 2. Após definidas as configurações, suba os serviços listados no `docker-compose.yml` na raiz do projeto.


```bash
docker-compose up -d --build
```

### 3. para executar qualquer comando php, execute o seguinte comando.

```bash
docker-compose exec php bash
```

> Et voilà! Os serviços do PHP, Banco de dados e PHPMyAdmin subirão para prover um ambiente de desenvolvimento favorável ao desafio.

# Ressalvas

O volume do banco de dados MySQL definido no container ficará na raiz do projeto quando baixado para a sua máquina. 


# Suporte

Caso algo dê errado no processo de build da aplicação, envie um e-mail para `sergiodanilojr@hotmail.com` e/ou abra uma issue aqui neste repositório. Assim que possível estarei responderei para que possamos propor uma melhoria ou identificar/resolver o infortúnio.