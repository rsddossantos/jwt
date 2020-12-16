#Validador JWT

Gerador e validador de chave JWT (JSON Web Token)

- Acessar o arquivo index.php para gerar uma chave no padrão JWT<br><br>

- Endpoint para validação:<br>
/validar<br>
parâmetro: jwt = (valor do hash gerado no index.php)

- Código secreto está definido no construtor de jwt.php

EXEMPLO:
http://127.0.0.1:8081/jwt/validar?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF91c2VyIjoxMjMsIm5vbWUiOiJSb2RyaWdvIFNpbHZlaXJhIn0.fYRDQ2WY_GGjbgMGdeNdHPnbdd8rcKWKrhibZPavM2U