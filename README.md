### предложенный функционал на фреймворк Laravel в связке с MySQL. Схему БД реализовать через миграции. Заполнить таблицы тестовыми данными
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



