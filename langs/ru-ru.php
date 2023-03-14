<?php
/*
UUP dump translation file.

Translation information:
English language name: Russian
Localized language name: Русский
Language code: ru-RU
Authors: vanja-san
*/

//Language information
$s['code'] = 'ru-RU';
$s['timeZone'] = 'Europe/Moscow'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = 'Сборка';
$s['arch'] = 'Архитектура';
$s['ring'] = 'Канал';
$s['updateid'] = 'ID обновления';
$s['update'] = 'Обновление';
$s['lang'] = 'Язык';
$s['edition'] = 'Издание';
$s['seachForBuilds'] = 'Искать сборки...';
$s['no'] = 'Нет';
$s['yes'] = 'Да';
$s['yesRecommended'] = 'Да (рекомендуется)';
$s['next'] = 'Далее';
$s['ok'] = 'ОК';
$s['cancel'] = 'Отмена';
$s['information'] = 'Информация';
$s['totalDlSize'] = 'Общий размер скачивания';
$s['file'] = 'Файл';
$s['expires'] = 'Истекает';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Размер';
$s['additionalEdition'] = 'Дополнительное издание';
$s['requiredEdition'] = 'Требует издание';
$s['unknown'] = 'Неизвестно';

//global
$s['home'] = 'Главная';
$s['downloads'] = 'Загрузки';
$s['lightMode'] = 'Светлый режим';
$s['faq'] = 'ЧаВо';
$s['darkMode'] = 'Тёмный режим';
$s['sourceCode'] = 'Исходный код';
$s['menu'] = 'Меню';
$s['websiteDesc'] = 'Легко скачивайте файлы UUP с серверов центра обновления Windows. Этот проект не связан с корпорацией Microsoft.';
$s['notAffiliated'] = 'Этот проект не связан с корпорацией Microsoft. Windows является зарегистрированной торговой маркой корпорации Microsoft.';
$s['copyright'] = '© %d %s и соавторы.'; //© 2019 whatever127 and contributors.
$s['copyrightNew'] = '© %d авторы и соавторы UUP dump.';
$s['selectLanguage'] = 'Выберите желаемый язык';
$s['uupDumpDesc'] = 'UUP dump позволяет скачивать файлы платформы унифицированных обновлений, например обновления Windows Insider, непосредственно из Центра обновления Windows.';
$s['uupDumpDescSub'] = '%s на UUP dump. UUP dump позволяет скачивать файлы платформы унифицированных обновлений, например обновления Windows Insider, непосредственно из Центра обновления Windows.'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.

//index.php
$s['slogan'] = 'С лёгкостью скачивайте UUP-файлы с серверов обновления Windows.';
$s['quickOptions'] = 'Быстрые параметры';
$s['tHeadReleaseType'] = 'Тип выпуска';
$s['tHeadDescription'] = 'Описание';
$s['tHeadArchitectures'] = 'Архитектуры';
$s['latestPublicRelease'] = 'Последняя сборка публичного выпуска';
$s['latestPublicReleaseSub'] = 'Последняя обновлённая сборка для обычных пользователей.';
$s['latestDevRelease'] = 'Последняя сборка канала разработчика';
$s['latestDevReleaseSub'] = 'Несколько ненадёжные сборки с новейшими функциями.<br>Идеально подходит для высокотехничных пользователей.';
$s['latestBetaRelease'] = 'Последняя сборка бета-канала';
$s['latestBetaReleaseSub'] = 'Надёжные сборки с большинством новых функций.<br>Идеально подходит для ранних последователей.';
$s['latestRPRelease'] = 'Последняя сборка предварительного выпуска';
$s['latestRPReleaseSub'] = 'Надёжные сборки для предпросмотра следующего выпуска.<br>Идеально подходит для опробования предстоящих релизов.';
$s['advOptions'] = 'Дополнительные параметры';
$s['browseBuilds'] = 'Посмотреть известные сбороки';
$s['browseBuildsSub'] = 'Выберите уже обнаруженную сборку и скачайте её.';
$s['fetchLatest'] = 'Получить последнюю сборку';
$s['fetchLatestSub'] = 'Получение последней информации о сборке с серверов обновления Windows.';
$s['newlyAdded'] = 'Недавно добавленные сборки';
$s['dateAdded'] = 'Дата добавления';

//newbuild.php
$s['newBuild'] = 'Новая сборка';
$s['addNewBuild'] = 'Добавить новую сборку';
$s['selectOptions'] = 'Выбрать параметры';
$s['newBuildNextText'] = 'Нажмите кнопку <i>Далее</i>, чтобы начать поиск с указанными параметрами.';
$s['newBuildUsing'] = 'Использование этой страницы';
$s['newBuildUsingText'] = 'Эта страница предназначена для опытных пользователей, которые хотят добавить сборку, не найденную на сайте. Если вы хотите использовать один из наиболее часто используемых параметров, воспользуйтесь одним из <i>быстрых параметров</i>, расположенных на главной странице.';
$s['optionsNotice'] = 'Уведомление параметров';
$s['optionsNoticeText'] = 'Параметры приведённые здесь, настраивают то, как базовый клиент центра обновления Windows сообщает о себе серверам Microsoft. Очень важно установить их правильно, иначе будет ошибка.';

//known.php
$s['browseKnown'] = 'Просмотр извеcтных сборок';
$s['chooseBuild'] = 'Выбрать сборку';
$s['weFoundBuilds'] = 'Найдено сборок: <b>%d</b>'; //Найдено сборок: <b>692</b>
$s['sortByDate'] = 'Сортировать результаты по дате добавления';
$s['nextPage'] = 'Следующая';
$s['prevPage'] = 'Предыдущая';
$s['pageOf'] = 'Страница %d из %d'; //Page 1 of 48

//fetchupd.php
$s['responseFromServer'] = 'Ответ сервера';
$s['foundUpdates'] = 'Найдено обновлений: %d'; //Найдено обновлений: 1
$s['foundTheseUpdates'] = 'Были найдены следующие обновления. Нажмите на название нужного обновления, чтобы продолжить.';
$s['buildNumber'] = 'Номер сборки: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Выберите язык для %s'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Выбор языка';
$s['chooseLangDesc'] = 'Выберите желаемый язык';
$s['allLangs'] = 'Все языки';
$s['selLangFiles'] = 'Файлы';
$s['allFiles'] = 'Все файлы';
$s['wubOnly'] = 'Только WindowsUpdateBox';
$s['updateOnly'] = 'Только обновление';
$s['selectLangInfoText1'] = 'Нажмите на кнопку <i>Далее</i>, чтобы выбрать нужное издание.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe и Кумулятивные обновления можно найти в <i>Все языки</i>.';
$s['allLangsWarn'] = 'Параметр <i>Все языки</i> не поддерживает выбор издания.';
$s['clickNextToOpenFindFiles'] = 'Нажмите на кнопку <i>Далее</i>, чтобы открыть страницу, позволяющую искать файлы.';
$s['noLangsAvailable'] = 'Для этой сборки нет доступных языков.<br>Эта сборка не может быть преобразована в ISO-образ.<br>Загляните в <a href="https://github.com/uup-dump/website/blob/master/FAQ.md">ЧаВо</a> для подробностей.';
$s['browseFiles'] = 'Обзор файлов';
$s['browseFilesDesc'] = 'Быстрый просмотр файлов в выбранной сборке';
$s['searchFiles'] = 'Поиск фалов';
$s['toSearchForCUUseQuery'] = 'Для поиска кумулятивных обновлений используйте поисковый запрос <i>%s</i>.'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.
$s['updateNotProcessed'] = 'UUP dump еще не обработал метаданные этого обновления - это происходит автоматически раз в %d мин. До тех пор вы можете просматривать только список файлов обновления.'; //UUP dump hasn't processed this update's metadata yet - this happens automatically once every 30 minutes. You can only browse the update's file list until then.
$s['updateIsBlocked'] = 'Это обновление имеет известные проблемы, препятствующие созданию рабочего ISO. Из-за этого возможно просматривать эти файлы только вручную.';

//selectedition.php
$s['selectEditionFor'] = 'Выберите издание для %s'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Выбор издания';
$s['chooseEditionDesc'] = 'Выберите желаемое издание';
$s['allEditions'] = 'Все издания';
$s['selectEditionInfoText'] = 'Нажмите на кнопку <i>Далее</i>, чтобы открыть страницу сводки вашего выбора.';
$s['additionalEditionsInfo'] = 'Если вам нужны <b>дополнительные издания</b> из таблицы справа, выберите <b>Требуемое издание</b> выше и продолжите, нажав <i>Далее</i>.<br>На странице сводки выберите параметр <b>Создать дополнительные издания</b>.';
$s['showHiddenEditions'] = 'Показать скрытые издания (не рекомендуется)';

//download.php
$s['summary'] = 'Сводка';
$s['summaryDesc'] = 'Просмотрите свой выбор и выберите способ скачивания';
$s['summaryFor'] = 'Сводка для %s'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Сводка для вашего выбора';
$s['browseList'] = 'Посмотреть список файлов';
$s['browseListDesc'] = 'Открывает страницу со списком файлов в наборе UUP для ручной загрузки.';
$s['aria2Opt1'] = 'Скачать набор UUP';
$s['aria2Opt1Desc'] = 'С лёгкостью скачайте выбранный набор UUP с помощью aria2.';
$s['aria2Opt2'] = 'Скачать и преобразовать в ISO';
$s['aria2Opt2Desc'] = 'С лёгкостью скачайте выбранный набор UUP с помощью aria2 и преобразуйте его в ISO.';
$s['aria2Opt3'] = 'Скачать, добавить дополнительные издания и преобразовать в ISO';
$s['aria2Opt3Desc'] = 'С лёгкостью скачатйе выбранный набор UUP с помощью aria2, преобразуйте, создайте дополнительные издания и, наконец, создайте ISO-образ.';
$s['jsRequiredToConf'] = 'Для настройки и использования этого параметра требуется JavaScript.';
$s['selAdditionalEditions'] = 'Выберите дополнительные издания';
$s['noAdditionalEditions'] = 'Для выбранных вами изданий дополнительных изданий нет.';
$s['learnMore'] = 'Узнать больше';
$s['learnMoreAdditionalEditions1'] = 'Этот параметр позволяет автоматически создавать выбранные дополнительные издания.';
$s['learnMoreAdditionalEditions2'] = 'Список дополнительных изданий определяется выбранными базовыми изданиями. Ниже вы можете ознакомиться со списком базовых изданий, которые необходимы для создания желаемых дополнительных изданий:';
$s['learnMoreUpdates1'] = 'Обновления будут интегрированы в преобразованный образ только при запуске сценария преобразования на следующих системах:';
$s['learnMoreUpdates2'] = 'Если вы запустите сценарий преобразования на любой другой системе, обновления не будут интегрированы в полученный образ.';
$s['systemWithAdk'] = '%s с установленной Windows 10 ADK'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = 'Дополнительные обновления';
$s['additionalUpdatesDesc'] = 'Этот набор UUP содержит дополнительные обновления, которые будут интегрированы в процессе преобразования, что значительно увеличит время создания.';
$s['browseUpdatesList'] = 'Посмотреть список обновлений';
$s['selectDownloadOptions'] = 'Выберите параметры скачивания';
$s['selectDownloadOptionsSub'] = 'Настройте, как вы хотите скачать свой выбор';
$s['downloadMethod'] = 'Метод скачивания';
$s['conversionOptions'] = 'Параметры преобразования';
$s['convOpt1'] = 'Использовать сплошное (ESD) сжатие';
$s['convOpt2'] = 'Включить обновления (Только с преобразованием Windows)';
$s['convOpt3'] = 'Выполнить очистку компонентов (Только с преобразованием Windows)';
$s['convOpt4'] = 'Интегрировать .NET Framework 3.5 (Только с преобразованием Windows)';
$s['startDownload'] = 'Создать пакет для скачивания';
$s['legalCopeHarder'] = 'Нажимая на кнопку <i>Создать пакет для скачивания</i>, вы соглашаетесь со следующим:';
$s['legalCope1'] = 'Установочные образы, созданные с использованием скриптов, предоставляемых UUP dump, предназначены только для <b>ознакомительных целей</b>';
$s['legalCope2'] = 'Образы и их развертывания <b> никоим образом не поддерживаются</b> корпорацией Microsoft';
$s['legalCope3'] = '<b>Авторы не несут ответственности за какой-либо ущерб</b> в соответствии с условиями лицензии проекта';
$s['win1122h2OrLater'] = 'Windows 11, версия 22H2 или более поздняя';
$s['requiresWindows102004'] = 'Для правильного создания ISO для этой сборки требуется использование Windows 10 версии 2004 или более поздней. Скрипты для других платформ будут выводить неработающий ISO.';

//get.php
$s['listOfFilesFor'] = 'Список файлов для %s'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Общий размер файлов: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'Сценарий переименования файлов';
$s['fileRenamingScriptDesc1'] = 'Сценарий (скрипт), приведённый ниже, можно использовать для быстрого переименования загруженных файлов.';
$s['fileRenamingScriptDesc2'] = 'Просто скопируйте содержимое приведённой ниже формы в новый файл с расширением <code>cmd</code>, поместите его в папку с загруженными файлами и запустите.';
$s['sha1File'] = 'Контрольные суммы файла SHA-1';
$s['sha1FileDesc'] = 'Вы можете использовать этот файл для быстрой проверки правильности загрузки файлов.';
$s['aria2NoticeTitle'] = 'Примечание: Скачивание с использованием параметров aria2';
$s['aria2NoticeText1'] = 'Скачивание с помощью параметров aria2 создаёт архив, который необходимо скачать. Скачанный архив содержит все необходимые файлы для выполнения выбранной задачи.';
$s['aria2NoticeText2'] = 'Чтобы начать процесс скачивания, используйте сценарий для своей платформы:';
$s['aria2NoticeText3'] = 'Aria2 - это проект с открытым исходным кодом. Вы можете найти его здесь: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'Сценарий преобразования UUP (версия для Windows) был создан %s.'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'Сценарий преобразования UUP (версия для Linux, версия для macOS) с открытым исходным кодом. Вы можете найти его здесь: %s.'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Поиск файлов в %s'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Если вы хотите быстро переименовать файлы, скачанные с этой страницы, вы можете создать сценарий переименования, который автоматически сделает это за вас.';
$s['fileRenamingScriptGenW'] = 'Сгенерировать сценарий переименования (Windows)';
$s['fileRenamingScriptGenL'] = 'Сгенерировать сценарий переименования (Linux, macOS)';
$s['searchForFiles'] = 'Поиск файлов...';
$s['weFoundFiles'] = 'Файлов по вашему запросу найдено: <b>%d</b>.'; //We have found <b>692</b> files for your query.
$s['sizeOfShownFiles'] = 'Размер показанных файлов: %s'; //Size of shown files: 2.86 GiB

//Error pages
$s['error'] = 'Ошибка';
$s['requestNotSuccessful'] = 'Запрос не удался';
$s['anErrorHasOccurred'] = 'При попытке обработать ваш запрос произошла ошибка.';
$s['arm64Warning2022h'] = 'Это сборка для ARM64';
$s['arm64Warning'] = 'Эта сборка <b>ARM64</b>, которая <b>не совместима с распространёнными процессорами Intel/AMD</b>.<br>Если вы уверены, что ваше целевое устройство имеет процессор <b>ARM64</b> и вы не спутали его с <b>AMD64</b>, то можете смело продолжать.';

//Error messages
$s['error_ERROR'] = 'Общая ошибка.';
$s['error_UNSUPPORTED_API'] = 'Установленная версия API не совместима с данной версией UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'Каталога <i>fileinfo</i> не существует.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'База данных <i>fileinfo</i> не содержит ни одной сборки.';
$s['error_SEARCH_NO_RESULTS'] = 'По заданному запросу ничего не найдено.';
$s['error_UNKNOWN_ARCH'] = 'Неизвестная архитектура процессора.';
$s['error_UNKNOWN_RING'] = 'Неизвестный канал.';
$s['error_UNKNOWN_FLIGHT'] = 'Неизвестный flight.';
$s['error_UNKNOWN_COMBINATION'] = 'Комбинация flight и кольца неправильная. Skip ahead поддерживается только для кольца Insider Fast.';
$s['error_ILLEGAL_BUILD'] = 'Указанный номер сборки меньше %d или больше чем %d.'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Указанный минор сборки неверен.';
$s['error_NO_UPDATE_FOUND'] = 'Сервер не вернул никаких обновлений.';
$s['error_XML_PARSE_ERROR'] = 'Не удалось выполнить синтаксический анализ XML ответа. Возможно, возникла проблема с серверами Microsoft. Повторите попытку позже.';
$s['error_EMPTY_FILELIST'] = 'Сервер вернул пустой список файлов.';
$s['error_NO_FILES'] = 'Для вашего выбора нет доступных файлов.';
$s['error_NOT_FOUND'] = 'Указанный выбор не может быть найден.';
$s['error_MISSING_FILES'] = 'В выбранном наборе UUP отсутствуют файлы.';
$s['error_NO_METADATA_ESD'] = 'Для вашего выбора нет доступных ESD-файлов метаданных.';
$s['error_UNSUPPORTED_LANG'] = 'Указанный язык не поддерживается.';
$s['error_UNSPECIFIED_LANG'] = 'Язык не был указан.';
$s['error_UNSUPPORTED_EDITION'] = 'Указанное издание не поддерживается.';
$s['error_UNSUPPORTED_COMBINATION'] = 'Сочетание языка и издания неверно.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Выбранное обновление не содержит кумулятивного обновления.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Информация об указанном обновлении не существует в базе данных.';
$s['error_KEY_NOT_EXISTS'] = 'Указанный ключ не существует в информации об обновлении.';
$s['error_UNSPECIFIED_UPDATE'] = 'ID обновления не был указан.';
$s['error_INCORRECT_ID'] = 'Указанный ID обновления неверен. Убедитесь, что указанный ID обновления правильный.';
$s['error_RATE_LIMITED'] = 'У вас ограничение скорости. Повторите попытку через несколько секунд.';
$s['error_UNSPECIFIED_VE'] = 'Вы не выбрали никаких дополнительных изданий. Если вы не хотите создавать дополнительные издания, воспользуйтесь опцией <i>Скачать и преобразовать</i>.';
$s['error_VE_UNAVAILABLE'] = 'Дополнительные издания для этого выбора не поддерживаются.';
$s['error_INVALID_PAGE'] = 'Указанная страница недействительна';
$s['errorNoMessage'] = 'Сообщение об ошибке недоступно.';

//Languages
$s['lang_ar-sa'] = 'Арабский (Саудовская Аравия)';
$s['lang_bg-bg'] = 'Болгарский';
$s['lang_cs-cz'] = 'Чешский';
$s['lang_da-dk'] = 'Датский';
$s['lang_de-de'] = 'Немецкий';
$s['lang_el-gr'] = 'Греческий';
$s['lang_en-gb'] = 'Английский (Великобритания)';
$s['lang_en-us'] = 'Английский (Соединённые Штаты)';
$s['lang_es-es'] = 'Испанский (Испания)';
$s['lang_es-mx'] = 'Испанский (Мексика)';
$s['lang_et-ee'] = 'Эстонский';
$s['lang_fi-fi'] = 'Финский';
$s['lang_fr-ca'] = 'Французский (Канада)';
$s['lang_fr-fr'] = 'Французский (Франция)';
$s['lang_he-il'] = 'Еврейский';
$s['lang_hr-hr'] = 'Хорватский';
$s['lang_hu-hu'] = 'Венгерский';
$s['lang_it-it'] = 'Итальянский';
$s['lang_ja-jp'] = 'Японский';
$s['lang_ko-kr'] = 'Корейский';
$s['lang_lt-lt'] = 'Литовский';
$s['lang_lv-lv'] = 'Латышский';
$s['lang_nb-no'] = 'Норвежский (Бокмаль)';
$s['lang_nl-nl'] = 'Голландский';
$s['lang_pl-pl'] = 'Польский';
$s['lang_pt-br'] = 'Португальский (Бразилия)';
$s['lang_pt-pt'] = 'Португальский (Португалия)';
$s['lang_qps-ploc'] = 'Псевдо';
$s['lang_ro-ro'] = 'Румынский';
$s['lang_ru-ru'] = 'Русский';
$s['lang_sk-sk'] = 'Словацкий';
$s['lang_sl-si'] = 'Словенский';
$s['lang_sr-latn-rs'] = 'Сербский (Латынь)';
$s['lang_sv-se'] = 'Шведский';
$s['lang_th-th'] = 'Тайский';
$s['lang_tr-tr'] = 'Турецкий';
$s['lang_uk-ua'] = 'Украинский';
$s['lang_zh-cn'] = 'Китайский (Упрощённый)';
$s['lang_zh-hk'] = 'Китайский (Гонконг)';
$s['lang_zh-tw'] = 'Китайский (Традиционный)';

//Channels
$s['channel_skipAhead'] = 'Перейти';
$s['channel_dev'] = 'Канал разработчиков';
$s['channel_beta'] = 'Бета-канал';
$s['channel_releasepreview'] = 'Канал предварительного выпуска';
$s['channel_retail'] = 'Релиз';
