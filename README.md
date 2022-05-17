Projeyi indirdikten sonra anadizini terminalde açıp 'composer install' yazarak paketleri kurun.
Kurulum bittikten sonra php artisan serve ile projeyi başlatın.

Migrationlar oluşturulmuş fakat veritabanı hazır verilmiştir.Verit tabanında sqllite kullanılmaktadır.
Todo listi görmek için database todo datalarını kaydedilmesi lazım.
Terminalı açın ve projenin ana dizinine giderek ' php artisan provider:todo {endpoint} ' komutunu çalıştırın.
( php artisan provider:todo http://www.mocky.io/v2/5d47f24c330000623fa3ebfa )
( php artisan provider:todo http://www.mocky.io/v2/5d47f235330000623fa3ebf7 )