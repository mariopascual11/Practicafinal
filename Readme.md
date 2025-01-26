Creacion:

Para la creacion de supuesto he hecho uso de IA para que me de una idea de algo realista y necesario , mi imaginacion no corre para crearlo. Una vez me lo dio organize las relaciones intentado cumplir las 4 dadas en clase, una vez el modelo E-R , se lo pase a gpt para que verificara si es valido y todo funciona correctamente y el me dijo que creia que no era correcto uno de las relaciones la cual yo puse 1:N y el decia que seria mas correcto crear una tabla de enlace , la cosa que yo force la relacion de esta manera por que necesitaba esa relacion para la practica y era correcto de esa manera.



Instalacion:

1. Primero crearemos un repositorio en Github, una vez creado realizamos un clon en nuestra maquina con el comando git clone (link). Se que este repositorio esta vacio pero yo he decidido hacerlo asi lo cual es como me funciona de manera correcta para subir sus actualizaciones. 
2. Una vez creado el repositorio , vamos a instalar las cosas necesarias, primero el entorno (php) con sus extensiones , son las recomendadas por gpt. 
comando --> sudo apt install php php-mbstring php-xml php-bcmath php-curl php-mysql unzip -y
3. Instalaremos el composer , el cual es el gestor de dependencias de php 
comando --> curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
(verificar) composer --version
4. Ahora necesitamos la base de datos la cual usaremos mariadb
comando --> sudo apt install mariadb-server mariadb-client -y
(verificar) sudo systemctl start mariadb
5. Configurar la base de datos.
comando --> sudo mysql -u root -p
CREATE DATABASE eventmaster;
CREATE USER 'usuario'@'localhost' IDENTIFIED BY 'contraseña_segura';
GRANT ALL PRIVILEGES ON eventmaster.* TO 'usuario'@'localhost';
FLUSH PRIVILEGES;
EXIT;

6. Ahora ya podemos crear el proyecto laravel con el siguiente comando 
comando --> composer create-project --prefer-dist laravel/laravel nombre-del-proyecto
cd nombre-del-proyecto
code .
Ahora lo haremos todo desde el terminal de visual studio.

7. Deberemos de primero configurar el archivo .env  por ejemplo:
----------------------------
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eventmaster
DB_USERNAME=mario
DB_PASSWORD=m1_s3cr3t
----------------------------
y generaremos la clave de la app
comando --> php artisan key:generate
iniciamos el server para probar
comando --> php artisan serve

8. Ahora deberemos de crear 3 cosas migraciones , seeders y models. Migraciones es por lo que tengo entendido para la creacion y actualizacion de una base de datos , sus tables de manera que no tengamos que hacerlo en sql escribiendolas. Los seeders son los datos que meteremos por defecto para probar nuestra base de datos. Y model son los que representan las tablas, donde podemos hacer consultas , eliminar y crear, de manera facil sin usar consultas sql. Y lo mas importante definir las relaciones aqui dentro lo cual es algo que me ha gustado(ahora que no entiendo xD, antes no). Los controllers estos son los encargados de la logica entre rutas y models.

9. Para crear una migracion seria con el siguiente comando (database/migrations)
comando --> php artisan make:migration create_salas_table
y para migrarlo y subirlo
comando --> php artisan migrate
Eliminarlas y volver a ejecutarlas
comando --> php artisan migrate:fresh
(codigo dentro)

10. Para crear los seeders (database/seeders)
comando -->php artisan make:seeder SalaSeeder
Para ejecutarlos
comando --> php artisan db:seed
(codigo dentro)

11. Para crear el model (app/Models)
php artisan make:model Sala
y ya lo tendriamos creado
(codigo dentro)

12. Los controllers (app/Http)
php artisan make:controller SalaController

13. Ahora faltarian las rutas
Nos iremos a routes y a api.php , si no lo tenemos por que no se nos genero por nuestro tipo de instalacion , es simple hacerlo
comando --> php artisan install:api
Una vez creado toca definir las rutas.

14. Falta ejecutar el server como enseñamos al principio y probarlo desde el postman. Si antes de probarlo en postamn quereis hacer prueba de las relaciones que habeis creado para aseguraros de que todo funciona correctamente deberemos usar el siguiente comando.
comando --> php artisan tinker
Esto es algo complicado para probarlo al principio mi recomendacion pasarle a gpt las estructara y que te diga como probarlas.
Una vez probemos y todo va bien pasamos a postman y con esto estaria todo. 

Conclusion:
He tenido que reniciar el proyecto unas 3 veces , pero eso me ha hecho hacer que cuando lo haga sea sin errores y entiendo todo lo que pasa , que falla que falta , al principio fui guiado al 100% por gpt pero ahora mismo sabria hacerlo por mi mismo , haciendo uso de gpt para no picar codigo como un mono.
