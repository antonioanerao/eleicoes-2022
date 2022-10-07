### Aplicação em Laravel para consumir o JSON das Eleições 2022 do TSE

##### [Veja um Demo](https://eleicoes.anerao.dev.br)

#### Requerimentos
- PHP 8.1.x

#### Informações adicionais do .env
- APP_TEST: Se for true, a partir do segundo curl os dados vem de um arquivo .json que está na pasta public. Uso esse recurso para testar se a atualização das informações está funcionando corretamente
- APP_REPO: Link para este repositório
- APP_TEMPLATE: Link para o repositório do template
- TSE_API: Link para o JSON do TSE
- APP_GTAG: Tag do Google Analytics. Exemplo: G-XXXXX99999
- APP_TIME_TO_UPDATE_INFO: Tempo para atualizar as informações da votação. Exemplo: 5000 (5 segundos)
- APP_META_*: S

##### JSON do TSE

        https://resultados.tse.jus.br/oficial/ele2022/544/dados-simplificados/br/br-c0001-e000544-r.json
        
