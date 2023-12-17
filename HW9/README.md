
```
1) SELECT id, name, date_of_birth
FROM users
WHERE date_of_birth BETWEEN '1970-01-01' AND '1970-12-31';
```
```
2) SELECT id, name, date_of_birth
FROM users
WHERE MONTH(date_of_birth) = 7
  AND YEAR(date_of_birth) = 1970;
```

```
3) SELECT id, name, date_of_birth
FROM users
WHERE date_of_birth > '1975-01-01';
```
```
4) SELECT id, name, date_of_birth
FROM users
WHERE date_of_birth < '1980-01-01';
```
```
5) SELECT id, name, date_of_birth
FROM users
WHERE date_of_birth > NOW() - INTERVAL 30 DAY;
```

```
6) SELECT id, name, date_of_birth,
       YEAR(date_of_birth) AS year_of_birth,
       MONTH(date_of_birth) AS month_of_birth,
       DAY(date_of_birth) AS day_of_birth
```

```
7) SELECT id, name, date_of_birth
FROM users
WHERE DATEDIFF(CURDATE(), date_of_birth) >= 18 * 365;
```

```
8) SELECT COUNT(*)
FROM users
WHERE date_of_birth BETWEEN '1970-01-01' AND '1999-01-01';
```

```
9) SELECT id, name, date_of_birth
FROM users
WHERE MONTH(date_of_birth) = MONTH(NOW());
```

```
10) SELECT id, name, date_of_birth
FROM users
WHERE date_of_birth BETWEEN '1970-01-01' AND '1999-01-01'
ORDER BY date_of_birth;
```

|          | Without index |       btree | hash | 
|----------|:-------------:|------------:|------|
| Query 1  |     60ms      |        76ms |      |
| Query 2  |     90ms      |        60ms |      |
| Query 3  |     18ms      |        64ms |      |
| Query 4  |     44ms      |        65ms |      |
| Query 5  |    12940ms    |        37ms |      |
| Query 6  |     25ms      |       150ms |      |
| Query 7  |     112ms     |        28ms |      |
| Query 8  |    14815ms    |     16675ms |      |
| Query 9  |     54ms      |        20ms |      |
| Query 10 |    22483ms    |        39ms |      |

