# PHP Substitution Encrypt/Decrypt

Encrypt/Decrypt a string in PHP with Substitution Algorithm + SALT + Private Key.

## Deployment

To deploy this project run

```bash
  git clone https://github.com/priv4cy/php-substitution-encrypt-decrypt.git
```
## Usage/Examples

```php
include('substitution.php');
$ed = new substitution();

$encrypted = $ed->encrypt('my string', 'nX2b1F', 'sEcReTkEy');
$decrypted = $ed->decrypt($encrypted, 'nX2b1F', 'sEcReTkEy');
```


## License

[MIT](https://choosealicense.com/licenses/mit/)

