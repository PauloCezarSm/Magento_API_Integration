# Integração Magento com API

Este projeto configura uma página de confirmação para vinculação de contas com Magento e realiza chamadas à API do Magento para recuperar dados de produtos.

## Descrição

A página PHP fornecida realiza as seguintes ações:

1. **Mensagem de Confirmação**:
   - Exibe uma mensagem simples de confirmação de que a conta foi vinculada com sucesso à integração.

2. **Chamada à API do Magento**:
   - Recebe um token de acesso via URL.
   - Utiliza esse token para fazer chamadas à API REST do Magento e recuperar dados de produtos.
   - Exibe a resposta da API.

## Arquivos

- `index.php`: Arquivo PHP que contém a lógica de confirmação e chamada à API.

## Como Usar

1. **Configuração do Ambiente**:
   - Certifique-se de ter um servidor PHP configurado para executar o script.

2. **Configuração da API**:
   - Substitua `'https://www.seudominio.com.br/rest/V1/products'` pela URL real da API do Magento.

3. **Token de Acesso**:
   - O token de acesso deve ser enviado como um parâmetro GET na URL. Exemplo: `index.php?07r3vvrv2mjl62qe9ayvdgm7zm7jmnav=<token_aqui>`

4. **Execução**:
   - Acesse a página PHP através do navegador para ver a mensagem de confirmação e a resposta da API.

## Exemplo de URL
http://seusite.com/index.php?07r3vvrv2mjl62qe9ayvdgm7zm7jmnav=SEU_TOKEN


## Dependências

- PHP (versão 7.0 ou superior)
- Extensão cURL para PHP

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

## Contribuição

Sinta-se à vontade para abrir issues ou pull requests para melhorar este projeto!

---

Para mais informações, entre em contato com [Paulo Cezar](mailto:seuemail@dominio.com).
