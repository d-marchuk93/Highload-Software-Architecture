Для siege додав файл **urls.txt** де вказано 10 різних параметрів **utm_campaign**

При кожному запиті створюється користувач з переданим в query параметром. 

concurrent = 10

| title                   | value            |
|-------------------------|------------------|
| Transactions            | 2743 hits        |
| Availability            | 100.00 %         |
| Elapsed time            | 15.94 secs       |
| Data transferred        | 0.07 MB          |
| Response time           | 0.05 secs        |
| Transaction rate        | 172.08 trans/sec |
| Throughput              | 0.00 MB/sec      |
| Concurrency             | 9.13             |
| Successful transactions | 2743             |
| Failed transactions     | 0                |
| Longest transaction     | 1.00             |
| Shortest transaction    | 00.1             |

concurrent = 25

| title                   | value            |
|-------------------------|------------------|
| Transactions            | 3605 hits        |
| Availability            | 100.00 %         |
| Elapsed time            | 15.20 secs       |
| Data transferred        | 0.09 MB          |
| Response time           | 0.10 secs        |
| Transaction rate        | 237.17 trans/sec |
| Throughput              | 0.01 MB/sec      |
| Concurrency             | 24.74            |
| Successful transactions | 3605             |
| Failed transactions     | 0                |
| Longest transaction     | 0.34             |
| Shortest transaction    | 0.02             |

concurrent = 50

| title                   | value            |
|-------------------------|------------------|
| Transactions            | 3646 hits        |
| Availability            | 100.00 %         |
| Elapsed time            | 15.53 secs       |
| Data transferred        | 0.09 MB          |
| Response time           | 0.21 secs        |
| Transaction rate        | 234.77 trans/sec |
| Throughput              | 0.01 MB/sec      |
| Concurrency             | 49.03            |
| Successful transactions | 3646             |
| Failed transactions     | 0                |
| Longest transaction     | 0.57             |
| Shortest transaction    | 0.07             |

concurrent = 100

| title                   | value            |
|-------------------------|------------------|
| Transactions            | 3939 hits        |
| Availability            | 100.00 %         |
| Elapsed time            | 15.97 secs       |
| Data transferred        | 0.10 MB          |
| Response time           | 0.40 secs        |
| Transaction rate        | 246.65 trans/sec |
| Throughput              | 0.01 MB/sec      |
| Concurrency             | 98.41            |
| Successful transactions | 3993             |
| Failed transactions     | 0                |
| Longest transaction     | 0.97             |
| Shortest transaction    | 0.10             |

concurrent = 200

| title                   | value |
|-------------------------|-------|
| Transactions            | 3505 hits      |
| Availability            | 98.40 %      |
| Elapsed time            | 15.16 secs      |
| Data transferred        | 0.08 MB      |
| Response time           | 0.84 secs      |
| Transaction rate        | 231.20 trans/sec      |
| Throughput              | 0.01 MB/sec      |
| Concurrency             | 194.32      |
| Successful transactions | 3505      |
| Failed transactions     | 57      |
| Longest transaction     | 1.72      |
| Shortest transaction    | 0.16      |

По запускам siege з різною кількістю **concurrent**, то найшвидше працює для **concurrent - 100** з **Availability - 100%**. 

10, 25, 50, 200 працюють повільніше, до того ж у 200 **Availability - 98.40 %** 
