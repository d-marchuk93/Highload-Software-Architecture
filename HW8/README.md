## Отримання статики з кеша і без за допомогою **nginx**

### Для проекту використовується 2 nginx:

**hsa-8-nginx** - виступає як веб-сервер з кешуванням \
**hsa-8-app** - виступає як застосунок який повертає картинку

### Для запуску:

```
docker-compose up -d
```

Після першого і другого запиту повертає **X-Cache: MISS**

```
curl -I 127.0.0.1/car1.png
```
Response:

    HTTP/1.1 200 OK
    Server: nginx/1.25.3
    Date: Thu, 25 Jan 2024 15:39:35 GMT
    Content-Type: text/plain
    Content-Length: 4814310
    Connection: keep-alive
    Last-Modified: Thu, 25 Jan 2024 14:22:24 GMT
    ETag: "65b26ea0-4975e6"
    Expires: Thu, 25 Jan 2024 16:39:35 GMT
    Cache-Control: max-age=3600
    X-Cache: MISS
    Accept-Ranges: bytes

Для третього запиту створюється cache, який знаходиться в _/etc/nginx/nginx.conf_ і в заголовках повертається  **X-Cache: HIT**

Response:

    Server: nginx/1.25.3
    Date: Thu, 25 Jan 2024 15:53:45 GMT
    Content-Type: text/plain
    Content-Length: 4814310
    Connection: keep-alive
    Last-Modified: Thu, 25 Jan 2024 14:22:24 GMT
    ETag: "65b26ea0-4975e6"
    Expires: Thu, 25 Jan 2024 16:53:45 GMT
    Cache-Control: max-age=3600
    X-Cache: HIT
    Accept-Ranges: bytes

Коли картинка закешувалась і зробити запит, то отримаємо **X-Cache: BYPASS**
```
curl -I "http://localhost/car1.png?nocache=true"
```

    HTTP/1.1 200 OK
    Server: nginx/1.25.3
    Date: Thu, 25 Jan 2024 15:58:12 GMT
    Content-Type: text/plain
    Content-Length: 4814310
    Connection: keep-alive
    Last-Modified: Thu, 25 Jan 2024 14:22:24 GMT
    ETag: "65b26ea0-4975e6"
    Expires: Thu, 25 Jan 2024 16:58:12 GMT
    Cache-Control: max-age=3600
    X-Cache: BYPASS
    X-Point: true
    Accept-Ranges: bytes
