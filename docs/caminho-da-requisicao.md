# Caminho da Requisição - Modulo 01

## Caminho
### O caminho que é executado ao acessar um link no navegador é:
    * URL
    * DNS
    * TCP
    * HTTTP
    * RENDER

## O que é URL?
    Podemos dizer que o link que utilizamos para acessar qualquer site na internet, ao invés de termos que digitar o IP diretamente é criado um domínio para dar uma espécie de título para o IP que vamos acessar com um nome mais fácil e bonitinho de se decorar ou pesquisar, como youtube.com ou google.com.

## O que é DNS?
    O DNS é a ferramenta que traduz a URL para o IP público no qual queremos acessar, por exemplo, ao acessar google.com o DNS realizar a tradução desse link para o IP dos servidores do Google.

## O que é TTL?
    TTL é o tempo máximo que uma informação de um requisição fica armazenada no cache ante de precisar ser atualizada, esse número é utilizado em segudos. Ele serve basicamente para reduzir o excesso de consultas ao DNS e também melhora o desempenho da página, pois consultar algo em cache é mais rápido. 

## O que é TCP?
    É a ferramenta que realiza a conexão do meu endereço na internet para o endereço que quero acessar, ele verifica se é possível realizar a conexão verificando em algumas etapas de envio de mensagens. Temos a SYN que significa que queremos estabelecer uma conexão, a SYN-ACK que é a resposta do servidor dizendo que está conseguindo ouvir nossa "requisição" e que também está pronto para receber conexão e por último a ACK que é a confirmação que está tudo OK para a conexão ser estabelecida.

## O que é o HTTP?
    É a forma como o navegador se comunica com o servidor, solicitando informações por meio de requisições (Request) e recebendo informações por meio de repostas (Responses). Também possui vários métodos para serem aplicados numa requisição, como GET, POST, PUT, PATCH e DELETE.

## O que é Render?
    É o processo que o navegador faz de transformar o conteúdo recebido do servidor em algumas coisa visual, na qual conseguimos verou interagir em tela.

## O que é o comando dig?
    É uma ferramenta de terminal utilizada para adquirir mais informações sobre servidores DNS e buscar mais detalhes sobre domínios e registros.

### Exemplo (dig google.com):
```
    ; <<>> DiG 9.18.39-0ubuntu0.24.04.7-Ubuntu <<>> google.com
    ;; global options: +cmd
    ;; Got answer:
    ;; ->>HEADER<<- opcode: QUERY, status: NOERROR, id: 59056
    ;; flags: qr rd ra; QUERY: 1, ANSWER: 1, AUTHORITY: 0, ADDITIONAL: 1

    ;; OPT PSEUDOSECTION:
    ; EDNS: version: 0, flags:; udp: 65494
    ;; QUESTION SECTION:
    ;google.com.			IN	A

    ;; ANSWER SECTION:
    google.com.		2215	IN	A	142.250.78.142

    ;; Query time: 7 msec
    ;; SERVER: 127.0.0.53#53(127.0.0.53) (UDP)
    ;; WHEN: Fri Nov 27 15:36:58 -03 2026
    ;; MSG SIZE  rcvd: 55
```

A numeração 2215 no trecho abaixo é o TTL que foi determinado para o dominio google.com:
```
    ;; ANSWER SECTION:
    google.com.		2215	IN	A	142.250.78.142
```

## O que é o comando openssl s_client?
    Esse comando permite estabelecer uma conexão TLS com um servidor e possibilita visualizar inforrmações sobre o certificado digital.

### Exemplo (openssl s_client -connect www.google.com:443):
```
CONNECTED(00000003)
depth=2 C = US, O = Google Trust Services LLC, CN = GTS Root R4
verify return:1
depth=1 C = US, O = Google Trust Services, CN = WE2
verify return:1
depth=0 CN = www.google.com
verify return:1
---
Certificate chain
 0 s:CN = www.google.com
   i:C = US, O = Google Trust Services, CN = WE2
   a:PKEY: id-ecPublicKey, 256 (bit); sigalg: ecdsa-with-SHA256
   v:NotBefore: Nov  3 08:29:37 2026 GMT; NotAfter: Jan 26 08:29:36 2027 GMT
 1 s:C = US, O = Google Trust Services, CN = WE2
   i:C = US, O = Google Trust Services LLC, CN = GTS Root R4
   a:PKEY: id-ecPublicKey, 256 (bit); sigalg: ecdsa-with-SHA384
   v:NotBefore: Dec 13 09:00:00 2023 GMT; NotAfter: Feb 20 14:00:00 2029 GMT
 2 s:C = US, O = Google Trust Services LLC, CN = GTS Root R4
   i:C = BE, O = GlobalSign nv-sa, OU = Root CA, CN = GlobalSign Root CA
   a:PKEY: id-ecPublicKey, 384 (bit); sigalg: RSA-SHA256
   v:NotBefore: Nov 15 03:43:21 2023 GMT; NotAfter: Jan 28 00:00:42 2028 GMT
---
Server certificate
-----BEGIN CERTIFICATE-----
MIIDezCCAyGgAwIBAgIRAMM1JZXfH0XRCTm7UQT/YP4wCgYIKoZIzj0EAwIwOzEL
MAkGA1UEBhMCVVMxHjAcBgNVBAoTFUdvb2dsZSBUcnVzdCBTZXJ2aWNlczEMMAoG
A1UEAxMDV0UyMB4XDTI2MTEwMzA4MjkzN1oXDTI3MDEyNjA4MjkzNlowGTEXMBUG
A1UEAxMOd3d3Lmdvb2dsZS5jb20wWTATBgcqhkjOPQIBBggqhkjOPQMBBwNCAASb
meTIfMbVkkOsMfL0el+9Jf1af9JzW4bRaU1bIhwlPEMJAIGztGNRWX+iBw0rUPfS
2pvGXY8cRMiTVXAnKqj6o4ICJjCCAiIwDgYDVR0PAQH/BAQDAgeAMBMGA1UdJQQM
MAoGCCsGAQUFBwMBMAwGA1UdEwEB/wQCMAAwHQYDVR0OBBYEFAoeBUasF1II4/cY
8WoXOg0IFXo5MB8GA1UdIwQYMBaAFHW+xHeuifZEN33PsWgfHRrr3DRZMDUGCCsG
AQUFBwEBBCkwJzAlBggrBgEFBQcwAoYZaHR0cDovL2kucGtpLmdvb2cvd2UyLmNy
dDAZBgNVHREEEjAQgg53d3cuZ29vZ2xlLmNvbTATBgNVHSAEDDAKMAgGBmeBDAEC
ATA2BgNVHR8ELzAtMCugKaAnhiVodHRwOi8vYy5wa2kuZ29vZy93ZTIvNjRPVUlW
enBaVjQuY3JsMIIBDAYKKwYBBAHWeQIEAgSB/QSB+gD4AHUAABpdGhwtk3W2SFV4
+C9xoa5u7zl9KXyK4xV7yt7hoB4AAAGhoL4j0QAABAMARjBEAiB6kH7xJagqp9pP
tgNFAQIk4kL8oD4nNvLH67sGSCAFlQIgWKLFAR9t3dOftzYMviLYZXr/7CDeekZb
2wh8BF2i7v0AfwCigQAYc04Xbh1H4JVA84G6VGaXzWOoQ1BxbrgJTtrxDQAAAaGg
via+AAgAAAUANkr8lQQDAEgwRgIhAKzIupFAMrVS04pJblix0b++Z5lUisb+vAg5
YgDIKd0vAiEAuv85L+UCQvDGWJM2dfQo5PSpwdJ+KOoU++8MESVLkR0wCgYIKoZI
zj0EAwIDSAAwRQIhANgB/HZu2OAqI8HV4YXjX/866VzvdZL+eB0T+nxUv9s4AiAr
CAkdIf/+mZPOajPqYjYs/UzhWrnAMKfxIFDcO30/3Q==
-----END CERTIFICATE-----
subject=CN = www.google.com
issuer=C = US, O = Google Trust Services, CN = WE2
---
No client certificate CA names sent
Peer signing digest: SHA256
Peer signature type: ECDSA
Server Temp Key: X25519, 253 bits
---
SSL handshake has read 2777 bytes and written 396 bytes
Verification: OK
---
New, TLSv1.3, Cipher is TLS_AES_256_GCM_SHA384
Server public key is 256 bit
Secure Renegotiation IS NOT supported
Compression: NONE
Expansion: NONE
No ALPN negotiated
Early data was not sent
Verify return code: 0 (ok)
---
^C
```

O trecho abaixo é a cadeia de certificados:
```
---
Certificate chain
 0 s:CN = www.google.com
   i:C = US, O = Google Trust Services, CN = WE2
   a:PKEY: id-ecPublicKey, 256 (bit); sigalg: ecdsa-with-SHA256
   v:NotBefore: Nov  3 08:29:37 2026 GMT; NotAfter: Jan 26 08:29:36 2027 GMT
 1 s:C = US, O = Google Trust Services, CN = WE2
   i:C = US, O = Google Trust Services LLC, CN = GTS Root R4
   a:PKEY: id-ecPublicKey, 256 (bit); sigalg: ecdsa-with-SHA384
   v:NotBefore: Dec 13 09:00:00 2023 GMT; NotAfter: Feb 20 14:00:00 2029 GMT
 2 s:C = US, O = Google Trust Services LLC, CN = GTS Root R4
   i:C = BE, O = GlobalSign nv-sa, OU = Root CA, CN = GlobalSign Root CA
   a:PKEY: id-ecPublicKey, 384 (bit); sigalg: RSA-SHA256
   v:NotBefore: Nov 15 03:43:21 2023 GMT; NotAfter: Jan 28 00:00:42 2028 GMT
---
```

Nesse caso, acredito que o WE2 assinou o dominio www.google.com e o GTS Root R4 assinou o WE2.

## O que é comando curl -v?
    O comando curl é utilizado para testar comunicações com aplicações e servidores, utilizando requisições HTTP e HTTPS.

### Exemplo (curl -v www.google.com):
```
* Host www.google.com:80 was resolved.
* IPv6: 2001:4860:482d:7700::, 2001:4860:482c:7700::, 2001:4860:482b:7700::, 2001:4860:4828:7700::, 2001:4860:4826:7700::, 2001:4860:4827:7700::, 2001:4860:4829:7700::, 2001:4860:482a:7700::
* IPv4: 142.251.157.119, 142.251.155.119, 142.251.154.119, 142.251.152.119, 142.251.156.119, 142.251.153.119, 142.251.151.119, 142.251.150.119
*   Trying [2001:4860:482d:7700::]:80...
* Connected to www.google.com (2001:4860:482d:7700::) port 80
> GET / HTTP/1.1
> Host: www.google.com
> User-Agent: curl/8.5.0
> Accept: */*
> 
< HTTP/1.1 200 OK
< Content-Type: text/html; charset=ISO-8859-1
< Date: Fri, 27 Nov 2026 18:46:14 GMT
< Expires: -1
< Cache-Control: private, max-age=0
< Content-Security-Policy-Report-Only: object-src 'none';base-uri 'self';script-src 'nonce-ir-Njn2Tbh1f3V7Ycqs-yA' 'strict-dynamic' 'report-sample' 'unsafe-eval' 'unsafe-inline' https: http:;report-uri https://csp.withgoogle.com/csp/gws/other-hp
< P3P: CP="This is not a P3P policy! See g.co/p3phelp for more info."
< Server: gws
< X-XSS-Protection: 0
< X-Frame-Options: SAMEORIGIN
< Set-Cookie: __Secure-STRP=ABNhA6jlEVUjPmu7cKdIm5GK7K5zCwrgYlfYRxKmIRXNojFHVu6fudx4vOIyw_Oi5gRK04m7ziicCpmzQlXpxrHLQzLzk0O2w32-; expires=Fri, 27-Nov-2026 18:51:14 GMT; path=/; domain=.google.com; Secure; SameSite=strict
< Set-Cookie: AEC=Aaa9EJp9koS49N4__EuEm76PdqETu_Z78Ir0mqd3zHwaRaFQMDrTwF3td58; expires=Wed, 26-May-2027 18:46:14 GMT; path=/; domain=.google.com; Secure; HttpOnly; SameSite=lax
< Set-Cookie: NID=CvIBCAESpAEBM9Agl9qlVmIskV-7VoE3aPp_7wj_UGE7HpwNyaWQadhjJb1Xwy_zmK0gphT26CkENJBbnsAELV0WeO-Qo_PsrVhDuZpW8gpOPbOghKLFU9Xvyq_vyGPN3YKSDBp4WPh7nFg82hr6Xq7NyIbm0ctRl2Pcjt8y6Kb2Oi-9OA1ODfmWoE-IJmno6hqmVQV-C_XwoasKL9372zQ49BNrjGhr6TlDxSgBMkUBcEpCz5ZH_jEzAhYiWWOQ88C5Zy9WHZlOA1I3PQjnmkua3XQYITDr2i1vgtpTlTz_XFxIqv20vqLDcywzS8XdDl2HGgo; expires=Sat, 29-May-2027 18:46:14 GMT; path=/; domain=.google.com; HttpOnly
< Accept-Ranges: none
< Vary: Accept-Encoding
< Transfer-Encoding: chunked
< 
<(HTML GIGANTE)>
```

### Exemplo (curl -v http://localhost:8080/):
```
* Host localhost:8080 was resolved.
* IPv6: ::1
* IPv4: 127.0.0.1
*   Trying [::1]:8080...
* Connected to localhost (::1) port 8080
> GET / HTTP/1.1
> Host: localhost:8080
> User-Agent: curl/8.5.0
> Accept: */*
> 
< HTTP/1.1 200 OK
< Server: nginx/1.29.3
< Date: Fri, 27 Nov 2026 18:49:00 GMT
< Content-Type: text/plain;charset=UTF-8
< Transfer-Encoding: chunked
< Connection: keep-alive
< X-Powered-By: PHP/8.4.27
< 
* Connection #0 to host localhost left intact
Fala fi!%
```
