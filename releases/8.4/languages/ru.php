<?php

return [
    'common_header' => 'PHP 8.4 — большое обновление языка PHP. Оно содержит множество новых возможностей, таких как хуки свойств, асимметричная область видимости свойств, обновление DOM API, улучшена производительность, исправлены ошибки и многое другое.',
    'documentation' => 'Документация',
    'main_title' => 'выпущен!',
    'main_subtitle' => 'PHP 8.4 — большое обновление языка PHP.<br class="display-none-md"> Оно содержит множество новых возможностей, таких как хуки свойств, асимметричная область видимости свойств, обновление DOM API, улучшена производительность, исправлены ошибки и многое другое.',
    'upgrade_now' => 'Переходите на PHP 8.4!',

    'property_hooks_title' => 'Хуки свойств',
    'property_hooks_description' => 'Хуки свойств обеспечивают поддержку вычисляемых свойств, которые могут быть понятны IDE и инструментам статического анализа, без необходимости писать DocBlock-комментарии, которые могут не совпадать. Кроме того, они позволяют выполнять надёжную предварительную или последующую обработку значений, без необходимости проверять, существует ли в классе соответствующий геттер или сеттер.',
    'asymmetric_visibility_title' => 'Асимметричная область видимости свойств',
    'asymmetric_visibility_description' => 'Область видимости записи свойства теперь может контролироваться независимо от области видимости чтения свойства, что уменьшает необходимость использования шаблонных методов-геттеров для раскрытия значения свойства без возможности его изменения извне класса.',
    'deprecated_attribute_title' => 'Атрибут <code>#[\Deprecated]</code>',
    'deprecated_attribute_description' => 'Новый атрибут <code>#[\Deprecated]</code> расширяет существующий механизм объявления сущности устаревшей для пользовательских функций, методов и констант классов.',
    'dom_additions_html5_title' => 'Новые возможности ext-dom и поддержка HTML5',
    'dom_additions_html5_description' => '<p>В PHP 8.4 добавлен новый DOM API, который поддерживает разбор HTML5-документов в соответствии со стандартами, исправляет несколько давних ошибок в поведении DOM и добавляет несколько функций, делающих работу с документами более удобной.</p><p>Новый DOM API доступен в пространстве имён <code>Dom</code>. Документы, использующие новый DOM API, могут быть созданы с помощью классов <code>Dom\HTMLDocument</code> и <code>Dom\XMLDocument</code>.</p>',
    'new_array_find_title' => 'Новые функции <code>array_*()</code>',
    'new_array_find_description' => 'Добавлены функции <a href="/manual/ru/function.array-find.php"><code>array_find()</code></a>, <a href="/manual/ru/function.array-find-key.php"><code>array_find_key()</code></a>, <a href="/manual/ru/function.array-any.php"><code>array_any()</code></a> и <a href="/manual/ru/function.array-all.php"><code>array_all()</code></a>.',
    'pdo_driver_specific_parsers_title' => 'SQL-парсеры, специфичные для драйверов PDO',
    'pdo_driver_specific_parsers_description' => 'Добавлены дочерние классы <code>Pdo\Dblib</code>, <code>Pdo\Firebird</code>, <code>Pdo\MySql</code>, <code>Pdo\Odbc</code>, <code>Pdo\Sqlite</code> драйверов, наследующие <code>PDO</code>.',
    'new_without_parentheses_title' => '<code>new MyClass()->method()</code> без скобок',
    'new_without_parentheses_description' => 'К свойствам и методам только что инициализированного объекта теперь можно обращаться, не оборачивая выражение <code>new</code> в круглые скобки.',

    'new_classes_title' => 'Новые классы, интерфейсы и функции',
    'new_jit_implementation' => 'Новая реализация JIT на основе IR Framework',
    'new_core_functions' => 'Добавлена функция <code>request_parse_body()</code>.',
    'new_bcmath_functions' => 'Добавлены функции <code>bcceil()</code>, <code>bcdivmod()</code>, <code>bcfloor()</code> и <code>bcround()</code>.',
    'new_round_modes' => 'Добавлено перечисление <code>RoundingMode</code> для функции <code>round()</code> с 4 режимами: <code>TowardsZero</code>, <code>AwayFromZero</code>, <code>NegativeInfinity</code> и <code>PositiveInfinity</code>.',
    'new_date_functions' => 'Добавлены методы <code>DateTime::createFromTimestamp()</code>, <code>DateTime::getMicrosecond()</code>, <code>DateTime::setMicrosecond()</code>, <code>DateTimeImmutable::createFromTimestamp()</code>, <code>DateTimeImmutable::getMicrosecond()</code> и <code>DateTimeImmutable::setMicrosecond()</code>.',
    'new_mb_functions' => 'Добавлены функции <code>mb_trim()</code>, <code>mb_ltrim()</code>, <code>mb_rtrim()</code>, <code>mb_ucfirst()</code> и <code>mb_lcfirst()</code>.',
    'new_pcntl_functions' => 'Добавлены функции <code>pcntl_getcpu()</code>, <code>pcntl_getcpuaffinity()</code>, <code>pcntl_getqos_class()</code>, <code>pcntl_setns()</code> и <code>pcntl_waitid()</code>.',
    'new_reflection_functions' => 'Добавлены методы <code>ReflectionClassConstant::isDeprecated()</code>, <code>ReflectionGenerator::isClosed()</code> и <code>ReflectionProperty::isDynamic()</code>.',
    'new_standard_functions' => 'Добавлены функции <code>http_get_last_response_headers()</code>, <code>http_clear_last_response_headers()</code>, <code>fpow()</code>.',
    'new_xml_functions' => 'Добавлены методы <code>XMLReader::fromStream()</code>, <code>XMLReader::fromUri()</code>, <code>XMLReader::fromString()</code>, <code>XMLWriter::toStream()</code>, <code>XMLWriter::toUri()</code> и <code>XMLWriter::toMemory()</code>.',
    'new_grapheme_function' => 'Добавлена функция <code>grapheme_str_split()</code>.',

    'bc_title' => 'Устаревшая функциональность и изменения в обратной совместимости',
    'bc_pecl' => 'Модули IMAP, OCI8, PDO_OCI и pspell перенесены из ядра в PECL.',
    'bc_nullable_parameter_types' => 'Типы параметров, неявно допускающие значение <code>null</code> объявлены устаревшими.',
    'bc_classname' => 'Использование <code>_</code> в качестве имени класса объявлено устаревшим.',
    'bc_zero_raised_to_negative_number' => 'Возведение нуля в степень отрицательного числа объявлено устаревшим.',
    'bc_gmp' => 'Класс <code>GMP</code> теперь является окончательным.',
    'bc_round' => 'Передача некорректного режима в функцию <code>round()</code> выбрасывает ошибку <code>ValueError</code>.',
    'bc_typed_constants' => 'Константы классов модулей <code>date</code>, <code>intl</code>, <code>pdo</code>, <code>reflection</code>, <code>spl</code>, <code>sqlite</code> и <code>xmlreader</code> типизированы.',
    'bc_mysqli_constants' => 'Удалены константы <code>MYSQLI_SET_CHARSET_DIR</code>, <code>MYSQLI_STMT_ATTR_PREFETCH_ROWS</code>, <code>MYSQLI_CURSOR_TYPE_FOR_UPDATE</code>, <code>MYSQLI_CURSOR_TYPE_SCROLLABLE</code> и <code>MYSQLI_TYPE_INTERVAL</code>.',
    'bc_mysqli_functions' => 'Функции <code>mysqli_ping()</code>, <code>mysqli_kill()</code>, <code>mysqli_refresh()</code>, методы <code>mysqli::ping()</code>, <code>mysqli::kill()</code>, <code>mysqli::refresh()</code> и константы <code>MYSQLI_REFRESH_*</code> объявлены устаревшими.',
    'bc_standard' => 'Функции <code>stream_bucket_make_writeable()</code> и <code>stream_bucket_new()</code> теперь возвращают экземпляр класса <code>StreamBucket</code> вместо <code>stdClass</code>.',
    'bc_core' => '<a href="/manual/ru/migration84.incompatible.php#migration84.incompatible.core.exit">Изменение поведения языковой конструкции <code>exit()</code></a>.',
    'bc_warnings' => 'Константа <code>E_STRICT</code> объявлена устаревшей.',

    'footer_title' => 'Выше производительность, лучше синтаксис, надёжнее система типов.',
    'footer_description' => '<p>Для загрузки исходного кода PHP 8.3 посетите страницу <a href="/downloads">Downloads</a>. Бинарные файлы Windows находятся на сайте <a href="https://windows.php.net/download">PHP for Windows</a>. Список изменений перечислен на странице <a href="/ChangeLog-8.php#PHP_8_4">ChangeLog</a>.</p>
        <p><a href="/manual/ru/migration84.php">Руководство по миграции</a> доступно в разделе документации. Ознакомьтесь с ним, чтобы узнать обо всех новых возможностях и изменениях, затрагивающих обратную совместимость.</p>',
];
