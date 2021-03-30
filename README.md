# DTATT
## php Insecure deserialization

docker pull ndtoandn/dtattt:v3



kỹ thuật Phar Deserialize, vì ta có thể gói nhiều tập code, thư viện, hình ảnh, ... vào một tệp và nếu một filesystem function đến một phar file thì tất cả các metadata sẽ tự động unserialize. Tất nhiên, function md5_file() là một trong các filesystem function.
