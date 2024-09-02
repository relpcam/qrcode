# Gerador de QR Code

Uma aplicação PHP para gerar QR Codes, construída com a biblioteca [Endroid QR Code](https://github.com/endroid/qr-code).

## Índice

- [Sobre](#sobre)
- [Instalação](#instalação)
- [Como Usar](#como-usar)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Contribuição](#contribuição)
- [Licença](#licença)
- [Contato](#contato)

## Sobre

Este projeto é uma aplicação web simples que permite gerar QR Codes a partir de um texto fornecido pelo usuário. A aplicação foi construída utilizando PHP, JavaScript e Bootstrap para a interface. O QR Code gerado pode ser visualizado na própria página e baixado como uma imagem PNG.

## Instalação

### Requisitos

- PHP 8.2+
- Composer
- Docker (opcional, mas recomendado)

### Passos

1. Clone o repositório:

    ```bash
    git clone https://github.com/relpcam/qrcode.git
    cd qrcode
    ```

2. Instale as dependências usando o Composer:

    ```bash
    composer install
    ```

3. Suba a aplicação usando Docker (opcional):

    ```bash
    docker-compose up --build
    ```

4. Acesse a aplicação no navegador:

    ```
    http://localhost:4500
    ```

## Como Usar

1. Acesse a aplicação no seu navegador.
2. Insira o texto que deseja converter em QR Code no campo apropriado.
3. Clique no botão "Gerar QR Code".
4. O QR Code será exibido abaixo com a opção de download.

## Estrutura do Projeto

```plaintext

├── css/
│   └── docs.css               # Estilos personalizados
├── js/
│   └── docs.min.js            # Scripts customizados
├── vendor/                    # Dependências gerenciadas pelo Composer
├── docker-compose.yml         # Arquivo de configuração do Docker Compose
├── generate.php               # Script PHP para gerar o QR Code
├── index.html                 # Página principal da aplicação
├── composer.json              # Dependências do projeto e metadados
└── README.md                  # Documentação do projeto
```

## Contribuições
Contribuições são bem-vindas! Para contribuir, siga as seguintes etapas:

Fork o repositório.
Crie um novo branch para sua feature.
Faça suas alterações e commit.
Envie um pull request.

## Licença
Este projeto está licenciado sob a licença MIT. Isso significa que você pode usar, modificar e distribuir este software livremente, mesmo para fins comerciais.

## Contato
Felipe Ribeiro
relpcam@gmail.com
