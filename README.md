# DTATT
## php Insecure deserialization

docker pull ndtoandn/dtattt:v3



kỹ thuật Phar Deserialize, vì ta có thể gói nhiều tập code, thư viện, hình ảnh, ... vào một tệp và nếu một filesystem function đọc đến một phar file thì tất cả các metadata sẽ tự động unserialize. Tất nhiên, function md5_file() là một trong các filesystem function.


Phar Deserialize technique, because we can bundle multiple sets of code, libraries, images, ... into one file and if a filesystem function reads to a phar file then all metadata will automatically unserialize. Of course, the md5_file() function is one of the filesystem functions.
