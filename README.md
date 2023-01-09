# PHP Substitution Encrypt/Decrypt

Encrypt/Decrypt a string in PHP with Substitution Algorithm + SALT + Private Key.

## Deployment

To deploy this project run

```bash
  git clone https://github.com/priv4cy/php-substitution-encrypt-decrypt.git
```
## Usage/Examples

```php
$encrypted_string = encrypt_decrypt('encrypt', 'Hola mundo', 'nX2b1F', 'sEcReTkEy');
$decrypted_string = encrypt_decrypt('decrypt', $encrypted_string, 'nX2b1F', 'sEcReTkEy');
```


## License

[MIT](https://choosealicense.com/licenses/mit/)

