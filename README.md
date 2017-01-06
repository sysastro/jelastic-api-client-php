# Jelastic API Client PHP

PHP client library for the Jelastic API v1.0 (Reference : http://apidoc.devapps.jelastic.com/4.7-private/)

### Installing

Just copy the project on your local machine and run it.

Change Jelastic API Credentials

Change file jelastic.php on __construct with the real value
```
$this->apiUrl = 'https://xxxxxxxxxxxxxx';
$this->apiUsername = 'xxxxxxxxxxxxxxxxxxxxx';
$this->apiPassword = 'xxxxxxxxxxxxxxxxxxxxx';
$this->signUpAppId = 'xxxxxxxxxxxxxxxxxxxxx';
$this->JcaAppId = 'xxxxxxxxxxxxxxxxxxxxx';
$this->dashboardAppId = 'xxxxxxxxxxxxxxxxxxxxx';
$this->cookiesFile = 'cookies/jelastic.txt';
$this->group = 'beta';
$this->dashboardUrl = 'https://xxxxxxxxxxxxxx/';
```

## Versioning

1.0

## Authors

* **Siswanto** - [sysastro](http://sysastro.com)


## License

This project is licensed under the MIT License