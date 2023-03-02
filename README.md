## API

Endpoint | Description
------|------------
Show all blogs | `/api/blog` 
Detail blog | `/api/blog/{1}` 
Show all sacode weekends | `/api/sacodeweekend` 
Detail sacode weekends | `/api/sacodeweekend/{1}` 
Show all contributors | `/api/contributor` 
Detail contributor | `/api/contributor/{1}` 

## Git Commands
Daftar perintah-perintah git yang diperlukan.

### Create new branch
Gunakan perintah berikut untuk membuat branch baru. Penting melakukang pengembangan pada branch terpisah untuk mengantisipasi kesalahan fatal diantara tim pengembang.
```
git checkout -b branchname
```

### Push new branch to remote
Gunakan perintah berikut untuk mendorong branch baru dari git local repository ke remote repository.
```
git push --set-upstream origin branchname
```

### Merge 
Gunakan perintah ini untuk menggabungkan perubahan.
```p
git merge branchname
```

### Show all branch from remote git repo
Gunakan perintah ini untuk menampilkan daftar semua remote branch .
```
git branch -r
```

### To open new branch from other people
Gunakan perintah ini untuk berpindah dari satu branch ke branch yang lain.
```
git checkout branchname
```

## Laravel Artisan Commands
Daftar perintah-perintah Laravel Artisan yang diperlukan

### Update Composer
Gunakan perintah ini untuk membuat file composer.lock pada folder project laravel.
```
composer update
```

### Storage Link
Gunakan perintah ini untuk menghubungkan folder storage pada struktur folder framework laravel. Jika ada gambar yang tidak tampil, mungkin karena perintah ini belum dijalankan.
```
php artisan storage:link
```

### Running Server
Gunakan perintah ini untuk menjalankan server laravel.
```
php artisan serve
```

### Generate Key
Gunakan perintah ini untuk mengatur isi dari APP_KEY pada file .env
```
php artisan key:generate
```

To open new branch from other people
``` git checkout branchname```
```
git checkout branchname
```

### Create a new controller
Gunakan perintah ini untuk membuat file controller baru
```
php artisan make:controller NameController
```
Membuat controller disertai ```--resource```
```
php artisan make:controller NameController --resource
```

### Create a new model
Gunakan perintah ini untuk membuat file model baru
```
php artisan make:model Name
```

Cara lain membuat model baru
```
# Generate a model and a NameFactory class...
php artisan make:model Name --factory
php artisan make:model Name -f
 
# Generate a model and a NameSeeder class...
php artisan make:model Name --seed
php artisan make:model Name -s
 
# Generate a model and a NameController class...
php artisan make:model Name --controller
php artisan make:model Name -c
```

### Create a new migration
Gunakan perintah ini untuk membuat file migrasi baru
```
php artisan make:migration create_namemigration_table
```

### Running db migration
Gunakan perintah ini untuk jalankan migration database beserta dengan database seed, dan menghapus isi database yang sudah ada sebelumnya.
```
php artisan migrate:refresh --seed
```

### Running db migration on specific seeder file
Gunakan perintah ini untuk melakukan ```db:seed``` pada file seeder tertentu.
```
php artisan db:seed --class=NamaSeeder
```

### Create a new factory
Gunakan perintah ini untuk membuat file factory baru
```
php artisan make:factory NameFactory
```

### To clear laravel application cache
Gunakan perintah-perintah berikut ini untuk membersihkan cache aplikasi laravel
```
php artisan cache:clear
php artisan config:clear
php artisan cache:clear
```
