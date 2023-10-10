### Функционал на фреймворке Laravel
```
Сущности:
Student (добавить атрибут "photo", атрибут не обязательный).
StudentGroupe.
Course.
Teacher.
StudentGroupeCourseWithTeacher.

Необходимо реализовать CRUD для каждой сущности и связи один ко многим и многие ко многим. Также не забыть про валидацию.
StudentGroupeCourseWithTeacher - необходимо реализовать назначение курса с конкретным преподавателем. По необходимости использовать AJAX.
Для сущности "StudentGroupeCourseWithTeacher" ввести атрибут "status".
 
Статусы: На согласовании. Согласовано. Отклонено.
Реализовать возможность смены статуса.

Дополнительно, но не обязательно:
Реализовать логирование создания и удаления студентов в БД.
```

### 0.1 - включить-добавить-сбилдить админку AdminLTE
https://larainfo.com/blogs/laravel-9-integrating-adminlte-3-example
```
npm install 
npm run dev
npm run build
```

### 0.2 - добавить-изменить шаблоны
```
/resources/views/
/resources/views/admin/
```

### 0.3 - Model User
```
php artisan make:migration add_column_role_to_users_table
php artisan migrate
php artisan storage:link
```
### 0.3.5 - Model
```
php artisan make:model StudentGroupe -m
php artisan make:model Course -m
php artisan make:model Status -m
php artisan make:model SGCWT -m
```
