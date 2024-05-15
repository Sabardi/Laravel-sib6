## cara menggunakan seeder dan factoris

1. php artisan make:model Staff -m

2. php artisan make:seeder StaffSeeder

3. php artisan make:factory StaffFactory 

atau menggunakan ini
 
php artisan make:factory StaffFactory 
 --model=Staff

4. php artisan db:seed
untuk kelas yang specific
php artisan db:seed --class=StaffSeeder

