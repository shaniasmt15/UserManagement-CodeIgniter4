
## CI 4 - CRUD Manajemen Pengguna

Didalam project ini terdapat dua role pengguna yaitu admin dan karyawan, dimana setiap role memiliki batasan hak akses:



Role | Login | Lihat | Tambah | Edit | Hapus
| :--- | ---:  | ---: | :---:  | :---: | :---:
```admin```  | ✅ | ✅  | ✅ | ✅ | ✅
```karyawan```  | ✅ | ✅ | ❌ | ✅ | ❌

## Panduan Setup

#1. Buat Database Kosong

#2. Konfigurasi koneksi database di file config 
```bash 
app/Config/Database.php
```

#3. Jalankan perintah migrasi database via terminal
```bash 
php spark migrate
```

#4. Jalankan perintah seeder via terminal untuk mengisi table dengan data dummy
```bash 
php spark db:seed
```

#5. Jalankan aplikasi
```bash
php spark serve
```

## Akun untuk Login
Dengan mengikuti panduan setup, anda dapat login menggunakan informasi akun berikut:


Role | Email | Password 
| :--- | ---: | ---: | 
```admin```  | ```johndoe@example.com``` | ```password```  
```karyawan```  | ```janedoe@example.com``` | ```password```  


