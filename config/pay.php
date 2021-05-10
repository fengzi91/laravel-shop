<?php

return [
    'alipay' => [
        'app_id'         => '2016102200741264',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAj8UBvHkNjq+cpcJvQnxaPbsrvIuqwDYZx45PuZp/8Ci8j0f0CZcwF/3HEEb4wmfMMwrG44EOsTng+2KUznjcY37qhRLncYma7mLc2ZtNnkk/Vl+7kmA/DiyuL/zgtw1ECmTrir2uKrKD/9b0VVNUTxhY2FMp1nxXLfDzPyyvjX+bb1dFUEcvsWwu0X9uZm7q46AggoCTF+CFoHakaxr1fBN72aGFNOLTTxf5kGMXqfp3hH1YLCy8mUZHWqIlcTjLejNAwUoYCfgoCjc7/LdciPtNAh8klRWTUXMUitHuHgsMfBCK0pBPAvA8y8c3EgVwagarhlY3g/vOFkXadkd1wwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAwUwxjv/A5wW0hFdKzK4Ixp2/uj4SAxvKtSNJ34wAUQYgVrJLZa70BoiGdt+2yzWODEIfRf2YT6rj5GuoXRH03eo3znrBLQeW1be+K9L/8i8Zvb7AvyGKEBNxlPi/r3vIywFAWZd0/6Ql6yDpijxT4Bru933oh3rUh8+0tzV+WzbEY7+qJQW34eCHDHEOfotISEFmxwwMmXadV7YC8h9xoMHEoZl539vn/IM9vHhUDCDdz17TE1ptx4CA7DWOPGG2GUKn0Sashuy5ASliEnRGJ2fXoSGVJUr4dLqUwe0Wchq6nUV/pFfsdpTFNtBOQQ/iI1XnRnhq9W4td4ee4jnH3QIDAQABAoIBAEOW5O1fuJAPiqOL8nfHkwIAPv5cnefAXA0inb4xMhsizUQDbCHOHz35lysR5tT/kP/wTwcmOZAB7VX93w1MLhc6wvDMM6gPM0rfyPuB+EUy+wlCHhu3GpOseNbidARkgD2b3mh1cU/Ckg+5nm/b0GhYgp6/xAM7i/1BP6ugZOJ3kvVVSVi2Z2KowJNwoKWpw8fDxLp/L6+6QhKDJxNWrJi1Vz8VWIt6NMlwbtbktC4TiiqE/YCdx3pO08Oi9gPLv6nOFUZq4j1/aE8pj03ukSZYm/zE3bju2LmU4qJS7hqjmdJ1uI/5AhoE59aiEYAtpRnWsZgGCMraaFXtqMUs8IECgYEA/8+9jMPSBJaGRv90DBLgmtjLZliTahxpWwdWp1W18Xa5vJ+IENkB2C9/NzaycIqUjsJu/WRs7vNPV4xXuQQi3rEjdsODMdnAv5bAiHpiSduoNoVvgK8Grzil4THJ1RL5tDN9REMizfK0USVd/r9PabqHPh5KU9rRkMjRsqkTgOkCgYEAwXCo5MlGpUvMQAD/0tmncayvMWGDeAFXmDwG9AxUDXcAeuNoU50NRIh0lW64flpczlW88DVNqAcEivvJWUcPqQGjyDeBsKbO4BhkTypv7Gwrj+ObQ0WNxjazYA5EDKA3ReMyPEyXFxBJtdl6zJl9NInrzTtmEkSf4hMM+8lfltUCgYBWrU8uqRM6Vr58xAXQKX1NOnQA47ZfV+0i2OO1o0cY3/+jN/LksoL7e2yBitj/ZRVdIeh1l1eJx4t0wKrgl9Qw3JiFn02O0JeM00m9dKplGDZw8tmLIsMDEBC0sygOOHW/Z0rknFLosXoDnMOyk6QW0QsOMzlAHH6xrjnPbZacMQKBgA1pgkxaqEtNthu59gLolHONRZhm6nanoSss/k5tjGZimeXrXpBtkz3tOCgkRSZ9nXGxACiniXrdAbOhQZSvGKbfNjvrnVJiPnXLOylCCACcf2i6n0lKyUm1ATrnwlAdy7dMyW7k4JT4zCOPsLP+8G90IKVaOPmLSIqkR4IttDMBAoGAANYWKmsI7y+8WejFDOG/KuBzGyz1HZp8VA+FqELmtZa9n7zUN/Xum/q26CdKWn1jQMyZyVCx0nUyAfsD0L+JopTMt9dAXHZLoCuFRkkAMeI8I0+yEpxQ0tfJCJlgfd8xu2rppRRyvXoT+du45dvWnUk18sb8Oh705L+UJX1Ym50=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
