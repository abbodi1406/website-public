<?php
/*
UUP dump translation file.

Translation information:
English language name: Spanish (Argentina)
Localized language name: Español (Argentina)
Language code: es-AR
Authors: Makinenn
*/

//Language information
$s['code'] = 'es-AR';
$s['timeZone'] = 'UTC'; //Zonas horarias admitidas: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Examinar las compilaciones conocidas - UUP dump
$s['build'] = 'Compilaciones';
$s['arch'] = 'Arquitectura';
$s['ring'] = 'Canal';
$s['updateid'] = 'ID de actualización';
$s['update'] = 'Actualización';
$s['lang'] = 'Idioma';
$s['edition'] = 'Edición';
$s['seachForBuilds'] = 'Buscar una compilación...';
$s['no'] = 'No';
$s['yes'] = 'Sí';
$s['yesRecommended'] = 'Sí (recomendado)';
$s['next'] = 'Siguiente';
$s['ok'] = 'Aceptar';
$s['cancel'] = 'Cancelar';
$s['information'] = 'Información';
$s['totalDlSize'] = 'Tamaño total de la descarga';
$s['file'] = 'Archivo';
$s['expires'] = 'Caduca';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Tamaño';
$s['additionalEdition'] = 'Edición adicional';
$s['requiredEdition'] = 'Edición requerida';
$s['unknown'] = 'Desconocido';

//global
$s['home'] = 'Inicio';
$s['downloads'] = 'Descargas';
$s['lightMode'] = 'Modo claro';
$s['faq'] = 'FAQ';
$s['darkMode'] = 'Modo oscuro';
$s['sourceCode'] = 'Código fuente';
$s['menu'] = 'Menú';
$s['websiteDesc'] = 'Descarga con facilidad archivos UUP desde los servidores de Windows Update. Este proyecto no está afiliado a Microsoft Corporation.';
$s['notAffiliated'] = 'Este proyecto no está afiliado a Microsoft Corporation. Windows es una marca registrada de Microsoft Corporation.';
$s['copyright'] = '© %d %s y colaboradores.'; //© 2019 whatever127 y colaboradores.
$s['copyrightNew'] = '© %d Autores y colaboradores de UUP.';
$s['selectLanguage'] = 'Por favor, elige el idioma';
$s['uupDumpDesc'] = 'UUP dump te permite descargar archivos Unified Update Platform, como las actualizaciones de Windows Insider, directamente desde Windows Update.';
$s['uupDumpDescSub'] = '%s en UUP dump. UUP dump te permite descargar archivos Unified Update Platform, como las actualizaciones de Windows Insider, directamente desde Windows Update.'; //Elige el idioma para Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 en UUP dump. UUP dump te permite descargar archivos Unified Update Platform, como las actualizaciones de Windows Insider, directamente desde Windows Update.

//index.php
$s['slogan'] = 'Descarga con facilidad archivos UUP desde los servidores de Windows Update.';
$s['quickOptions'] = 'Atajos';
$s['tHeadReleaseType'] = 'Tipo de versión';
$s['tHeadDescription'] = 'Descripción';
$s['tHeadArchitectures'] = 'Arquitecturas';
$s['latestPublicRelease'] = 'Compilación más reciente de la versión pública';
$s['latestPublicReleaseSub'] = 'Compilación actualizada más reciente para usuarios comunes.';
$s['latestDevRelease'] = 'Compilación más reciente del canal Dev';
$s['latestDevReleaseSub'] = 'Compilaciones poco confiables con ideas nuevas y funcionalidades a largo plazo.<br>Ideal para usuarios entusiastas.';
$s['latestBetaRelease'] = 'Compilación más reciente del canal Beta';
$s['latestBetaReleaseSub'] = 'Compilaciones confiables con la mayoría de las próximas funcionalidades disponibles.<br>Ideal para usuarios pioneros.';
$s['latestRPRelease'] = 'Compilación más reciente del canal Release Preview';
$s['latestRPReleaseSub'] = 'Compilaciones confiables para previsualizar la próxima versión.<br>Ideal para probar próximas versiones.';
$s['advOptions'] = 'Opciones avanzadas';
$s['browseBuilds'] = 'Examinar compilaciones conocidas';
$s['browseBuildsSub'] = 'Elige y descarga una compilación ya conocida.';
$s['fetchLatest'] = 'Buscar la compilación más reciente';
$s['fetchLatestSub'] = 'Obtén la información de la compilación más reciente desde los servidores de Windows Update.';
$s['newlyAdded'] = 'Compilaciones agregadas recientemente';
$s['dateAdded'] = 'Agregada';
$s['latestCanaryRelease'] = 'Compilación más reciente del canal Canary';
$s['latestCanaryReleaseSub'] = 'Compilaciones poco estables con los cambios más recientes en la plataforma y funcionalidades novedosas.<br>Ideal para usuarios sumamente técnicos.';

//newbuild.php
$s['newBuild'] = 'Compilación nueva';
$s['addNewBuild'] = 'Agregar una compilación nueva';
$s['selectOptions'] = 'Elegir opciones';
$s['newBuildNextText'] = 'Cliquee <i>Siguiente</i> para comenzar a buscar usando las opciones elegidas.';
$s['newBuildUsing'] = 'Usar esta página';
$s['newBuildUsingText'] = 'Esta página está pensada para que la usen los usuarios avanzados que quieran agregar una compilación que no esté en el sitio web. Si quieres usar alguno de los parámetros que más comúnmente se utilizan, por favor, usa algunos de los <i>Atajos</i> de la página de inicio.';
$s['optionsNotice'] = 'Aviso de opciones';
$s['optionsNoticeText'] = 'Las opciones que hay aquí configuran cómo el cliente subyacente de Windows Update se comunica con los servidores de Microsoft. Es fundamental configurarlas bien, si no, aparecerá un error.';

//known.php
$s['browseKnown'] = 'Examinar compilaciones conocidas';
$s['chooseBuild'] = 'Elegir una compilación';
$s['weFoundBuilds'] = 'Se encontraron <b>%d</b> compilaciones para la búsqueda.'; //Se encontraron <b>692</b> compilaciones para la búsqueda.
$s['sortByDate'] = 'Ordernar resultados por la fecha en la que se agregó';
$s['nextPage'] = 'Siguiente';
$s['prevPage'] = 'Anterior';
$s['pageOf'] = 'Página %d de %d'; //Página 1 de 48

//fetchupd.php
$s['responseFromServer'] = 'Respuesta del servidor';
$s['foundUpdates'] = 'Se encontraron %d actualización(es)'; //Se encontraron 1 actualización(es)
$s['foundTheseUpdates'] = 'Se encontraron las siguientes actualizaciones. Para continuar, cliquea el nombre de la actualización que quieres.';
$s['buildNumber'] = 'Número de la compilación: %s'; //Número de la compilación: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Elige el idioma para %s'; //Elige el idioma para Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Elegir el idioma';
$s['chooseLangDesc'] = 'Elige el idioma que quieres';
$s['allLangs'] = 'Todos los idiomas';
$s['selLangFiles'] = 'Archivos';
$s['allFiles'] = 'Todos los archivos';
$s['wubOnly'] = 'Solo WindowsUpdateBox';
$s['updateOnly'] = 'Solo actualización';
$s['selectLangInfoText1'] = 'Cliquea <i>Siguiente</i> para elegir la edición que quieres.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe y las actualizaciones acumulativas están en la opción <i>Todos los idiomas</i>.';
$s['allLangsWarn'] = 'La opción <i>Todos los idiomas</i> no admite elegir una edición.';
$s['clickNextToOpenFindFiles'] = 'Cliquea <i>Siguiente</i> para abrir la página que te permitirá buscar los archivos.';
$s['noLangsAvailable'] = 'No hay idiomas disponibles para esta compilación.<br>No se puede crear una ISO con esta compilación.<br>Revisa las FAQ para obtener más detalles.';
$s['browseFiles'] = 'Examinar archivos';
$s['browseFilesDesc'] = 'Examina rápidamente los archivos en la compilación elegida';
$s['searchFiles'] = 'Buscar archivos';
$s['toSearchForCUUseQuery'] = 'Para buscar actualizaciones acumulativas, busca la <i>%s</i>.'; //Para buscar actualizaciones acumulativas, busca la <i>Windows10 KB</i>.
$s['updateNotProcessed'] = 'UUP dump aún no ha procesado los metadatos de esta actualización. Esto ocurre automáticamente una vez cada %d minutos. Recién después de esto podrás explorar la lista con la actualización.'; //UUP dump aún no ha procesado los metadatos de esta actualización. Esto ocurre automáticamente una vez cada 30 minutos. Recién después de esto podrás explorar la lista con la actualización.
$s['updateIsBlocked'] = 'Esta actualización contiene problemas conocidos que impiden la creación de una ISO funcional. Debido a esto, solo puedes explorar manualmente los archivos.';

//selectedition.php
$s['selectEditionFor'] = 'Elige la edición para %s'; //Elige la edición para Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Elegir la edición';
$s['chooseEditionDesc'] = 'Elige qué edición quieres';
$s['allEditions'] = 'Todas las ediciones';
$s['selectEditionInfoText'] = 'Cliquea <i>Siguiente</i> para abrir la página con el resumen de lo que hayas elegido.';
$s['additionalEditionsInfo'] = 'Si necesitas <b>ediciones adicionales</b> de la tabla de la derecha, por favor, elige la <b>edición requerida</b> arriba y cliquea <i>Siguiente</i>.<br>En la página con el resumen, elige la opción <b>Crear ediciones adicionales</b>.';
$s['showHiddenEditions'] = 'Mostrar ediciones ocultas (no recomendado)';

//download.php
$s['summary'] = 'Resumen';
$s['summaryDesc'] = 'Revisa lo que elegiste y elige cómo descargar';
$s['summaryFor'] = 'Resumen para %s'; //Resumen para Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Resumen de lo que elegiste';
$s['browseList'] = 'Examinar la lista de archivos';
$s['browseListDesc'] = 'Esto abre una página con una lista de los archivos UUP para descargarlos manualmente.';
$s['aria2Opt1'] = 'Descargar usando el paquete UUP';
$s['aria2Opt1Desc'] = 'Descarga con facilidad el paquete UUP elegido usando aria2.';
$s['aria2Opt2'] = 'Descargar y convertir a ISO';
$s['aria2Opt2Desc'] = 'Descarga con facilidad el paquete UUP elegido usando aria2 y conviértelo a una ISO.';
$s['aria2Opt3'] = 'Descargar, agregar ediciones adicionales y convertir a una ISO';
$s['aria2Opt3Desc'] = 'Descarga con facilidad el paquete UUP elegido usando aria2, conviértelo, crea ediciones adicionales y, por último, crea una ISO.';
$s['jsRequiredToConf'] = 'Se requiere JavaScript para configurar y usar esta opción.';
$s['selAdditionalEditions'] = 'Elegir opciones adicionales';
$s['noAdditionalEditions'] = 'No hay ediciones adicionales disponibles para las ediciones elegidas.';
$s['learnMore'] = 'Más información';
$s['learnMoreAdditionalEditions1'] = 'Esta opción permite crear las ediciones adicionales elegidas.';
$s['learnMoreAdditionalEditions2'] = 'La lista de las ediciones adicionales está determinada por las ediciones base elegidas. Puedes revisar abajo la lista de las ediciones base necesarias para crear las ediciones adicionales que quieres:';
$s['learnMoreUpdates1'] = 'Las actualizaciones se integrarán a la imagen convertida solo si se ejecuta el <i>script</i> de coversión en los siguientes sistemas:';
$s['learnMoreUpdates2'] = 'Si ejecutas el <i>script</i> de conversión en cualquier otro sistema, las actualizaciones no se integrarán en la imagen final.';
$s['systemWithAdk'] = '%s con Windows 10 ADK instalado'; //Windows 7 con Windows 10 ADK instalado
$s['additionalUpdates'] = 'Actualizaciones adicionales';
$s['additionalUpdatesDesc'] = 'Este paquete UUP contiene actualizaciones adicionales que se integrarán durante el proceso de conversión, y esto aumentará mucho el tiempo de creación.';
$s['browseUpdatesList'] = 'Examinar la lista de actualizaciones';
$s['selectDownloadOptions'] = 'Elige las opciones de descarga';
$s['selectDownloadOptionsSub'] = 'Configura cómo quisieras descargar lo que elegiste';
$s['downloadMethod'] = 'Método de descarga';
$s['conversionOptions'] = 'Opciones de conversión';
$s['convOpt1'] = 'Usar compresión (ESD) sólida';
$s['convOpt2'] = 'Incluir las actualizaciones (solo con el <i>script</i> de conversión de Windows)';
$s['convOpt3'] = 'Ejecutar una limpieza (solo con el <i>script</i> de conversión de Windows)';
$s['convOpt4'] = 'Integrar .NET Framework 3.5 (solo con el <i>script</i> de conversión de Windows)';
$s['startDownload'] = 'Crear paquete de descarga';
$s['legalCopeHarder'] = 'Cuando cliquees <i>Crear paquete de descarga</i>, aceptarás lo siguiente:';
$s['legalCope1'] = 'Las imágenes de instalación creadas usando los <i>scripts</i> brindados por UUP dump son solo para <b>fines de prueba</b>';
$s['legalCope2'] = 'Microsoft Corporation <b>no le da absolutamente ningún soporte</b> a las imágenes creadas ni a su implementación';
$s['legalCope3v2'] = '<b>Los autores no se responsabilizan por ningún daño</b> causado por el mal uso del sitio web';
$s['win1122h2OrLater'] = 'Windows 11 versión 22H2 o superior';
$s['requiresWindows102004'] = 'Esta compilación requiere usar Windows 10 versión 2004 o superior para que la ISO se pueda crear correctamente. Los <i>scripts</i> para otras plataformas generarán una ISO rota.';

//get.php
$s['listOfFilesFor'] = 'Lista de archivos para %s'; //Lista de archivos para Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Tamaño total de la descarga: %s'; //Tamaño total de la descarga: 2.86 GiB
$s['fileRenamingScript'] = '<i>Script</i> para renombrar el archivo';
$s['fileRenamingScriptDesc1'] = 'Puedes usar el <i>script</i> de abajo para renombrar rápidamente los archivos descargados.';
$s['fileRenamingScriptDesc2'] = 'Simplemente copia el contenido del formulario de abajo en un archivo de texto nuevo, guárdalo con la extensión <code>cmd</code>, colócalo en la carpeta con los archivos descargados y ejecútalo.';
$s['sha1File'] = 'Archivo de sumas de verificación SHA-1';
$s['sha1FileDesc'] = 'Puedes usar este archivo para verificar rápidamente si los archivos se descargaron correctamente.';
$s['aria2NoticeTitle'] = 'Descargar usando las opciones aria2';
$s['aria2NoticeText1'] = 'Al descargar usando las opciones aria2, se crea un contenedor que debe ser descargado. El contenedor descargado contiene todos los archivos necesarios para lograr la tarea elegida.';
$s['aria2NoticeText2'] = 'Para comenzar el proceso de descarga, usa un <i>script</i> para tu plataforma:';
$s['aria2NoticeText3'] = 'Aria2 es un proyecto de código abierto. Puedes encontrarlo en %s.'; //Aria2 es un proyecto de código abierto. Puedes encontrarlo en https://aria2.github.io/.
$s['aria2NoticeText4'] = 'El <i>script</i> de conversión de UUP (versión Windows) lo creó %s.'; //El <i>script</i> de conversión de UUP (versión Windows) lo creó abbodi1406.
$s['aria2NoticeText5'] = 'El <i>script</i> de conversión de UUP (versiones Linux y macOS) es de código abierto. Puedes encontrarlo en %s.'; //El <i>script</i> de conversión de UUP (versiones Linux y macOS) es de código abierto. Puedes encontrarlo en https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Buscar archivos en %s'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Si quieres renombrar rápidamente los archivos descargados de esta página, puedes generar un <i>script</i> que los renombrará automáticamente por ti.';
$s['fileRenamingScriptGenW'] = 'Generar un <i>script</i> para renombrar (Windows)';
$s['fileRenamingScriptGenL'] = 'Generar un <i>script</i> para renombrar (Linux, macOS)';
$s['searchForFiles'] = 'Buscar archivos...';
$s['weFoundFiles'] = 'Se encontraron <b>%d</b> archivos para la consulta.'; //Se encontraron <b>692</b> archivos para la consulta.
$s['sizeOfShownFiles'] = 'Tamaño de los archivos exhibidos: %s'; //Tamaño de los archivos exhibidos: 2.86 GiB

//Error pages
$s['error'] = 'Error';
$s['requestNotSuccessful'] = 'No hubo éxito con la solicitud';
$s['anErrorHasOccurred'] = 'Ocurrió un error al intentar procesar la solicitud.';
$s['arm64Warning2022h'] = 'Esta es una compilación ARM64';
$s['arm64Warning2022b'] = '<p>Esta compilación solo es compatible con:</p><ul><li>Surface Pro X</li><li>Raspberry Pi</li><li>Apple Mac M1</li><li>otros celulares ensalzados</li></ul><p>Los autores de UUP dump <i>no tienen nada de esto</i> y, por lo tanto, <b>no le darán absolutamente ningún soporte</b>.</p>';

//Error messages
$s['error_ERROR'] = 'Error genérico.';
$s['error_UNSUPPORTED_API'] = 'La versión de la API instalada no es compatible con esta versión de UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'El directorio (fileinfo) no existe.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'La base de datos (fileinfo) no contiene ninguna compilación.';
$s['error_SEARCH_NO_RESULTS'] = 'No se encontraron elementos para la consulta realizada.';
$s['error_UNKNOWN_ARCH'] = 'Arquitectura del procesador desconocida.';
$s['error_UNKNOWN_RING'] = 'Anillo desconocido.';
$s['error_UNKNOWN_FLIGHT'] = 'Piloto desconocido';
$s['error_UNKNOWN_COMBINATION'] = 'La combinación de piloto y anillo no es correcta. Skip Ahead solo admite el anillo rápido de Insider.';
$s['error_ILLEGAL_BUILD'] = 'El número especificado de la compilación es menor a %d o mayor a %d.'; //El número especificado de la compilación es menor a 9841 o mayor a 2147483646.
$s['error_ILLEGAL_MINOR'] = 'La compilación menor especificada no es correcta.';
$s['error_NO_UPDATE_FOUND'] = 'El servidor no devolvió actualizaciones.';
$s['error_XML_PARSE_ERROR'] = 'El análisis de la respuesta XML falló. Podría haber un problema con los servidores de Microsoft. Reinténtalo más tarde.';
$s['error_EMPTY_FILELIST'] = 'El servidor devolvió un lista vacía de archivos.';
$s['error_NO_FILES'] = 'No hay archivos disponibles para la elección.';
$s['error_NOT_FOUND'] = 'No se puede encontrar la elección especificada.';
$s['error_MISSING_FILES'] = 'Faltan archivos en el paquete UUP.';
$s['error_NO_METADATA_ESD'] = 'No hay metadatos disponibles de los archivos ESD para la elección.';
$s['error_UNSUPPORTED_LANG'] = 'El idioma especificado no está admitido.';
$s['error_UNSPECIFIED_LANG'] = 'No se especificó el idioma.';
$s['error_UNSUPPORTED_EDITION'] = 'No se admite la edición especificada.';
$s['error_UNSUPPORTED_COMBINATION'] = 'La combinación de idioma y edición no es correcta.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'La actualización elegida no contiene una actualización acumulativa.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'No hay información en la base de datos sobre la actualización especificada.';
$s['error_KEY_NOT_EXISTS'] = 'La clave especificada no existe en la información de la actualización.';
$s['error_UNSPECIFIED_UPDATE'] = 'No se especificó el ID de la actualización.';
$s['error_INCORRECT_ID'] = 'El ID de la actualización especificada no es correcto. Por favor, asegúrate de que el ID de la actualización especificada sea correcto.';
$s['error_RATE_LIMITED'] = 'Tu velocidad está limitada. Por favor, reinténtalo dentro de unos segundos.';
$s['error_UNSPECIFIED_VE'] = 'No has elegido ediciones adicionales. Si no quieres crear ediciones adicionales, por favor, usa la opción <i>Descargar usando aria2 y convertir</i>.';
$s['error_VE_UNAVAILABLE'] = 'No se admiten las ediciones adicionales para esta elección.';
$s['error_INVALID_PAGE'] = 'La página espeficada no es válida';
$s['errorNoMessage'] = 'Mensaje de error no disponible.';

//Languages
$s['lang_ar-sa'] = 'Árabe (Arabia Saudita)';
$s['lang_bg-bg'] = 'Búlgar';
$s['lang_cs-cz'] = 'Checo';
$s['lang_da-dk'] = 'Danés';
$s['lang_de-de'] = 'Alemán';
$s['lang_el-gr'] = 'Griego';
$s['lang_en-gb'] = 'Inglés (Reino Unido)';
$s['lang_en-us'] = 'Inglés (Estados Unidos)';
$s['lang_es-ar'] = 'Español (Argentina)';
$s['lang_es-es'] = 'Español (España)';
$s['lang_es-mx'] = 'Español (México)';
$s['lang_et-ee'] = 'Estonio';
$s['lang_fi-fi'] = 'Finés';
$s['lang_fr-ca'] = 'Francés (Canadá)';
$s['lang_fr-fr'] = 'Francés (Francia)';
$s['lang_he-il'] = 'Hebreo';
$s['lang_hr-hr'] = 'Croata';
$s['lang_hu-hu'] = 'Húngaro';
$s['lang_it-it'] = 'Italiano';
$s['lang_ja-jp'] = 'Japonés';
$s['lang_ko-kr'] = 'Coreano';
$s['lang_lt-lt'] = 'Lituano';
$s['lang_lv-lv'] = 'Letón';
$s['lang_nb-no'] = 'Noruego (Bokmal)';
$s['lang_nl-nl'] = 'Neerlandés';
$s['lang_pl-pl'] = 'Polaco';
$s['lang_pt-br'] = 'Portugués (Brasil)';
$s['lang_pt-pt'] = 'Portugués (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Rumano';
$s['lang_ru-ru'] = 'Ruso';
$s['lang_sk-sk'] = 'Eslovaco';
$s['lang_sl-si'] = 'Esloveno';
$s['lang_sr-latn-rs'] = 'Serbio (latino)';
$s['lang_sv-se'] = 'Sueco';
$s['lang_th-th'] = 'Tailandés';
$s['lang_tr-tr'] = 'Turco';
$s['lang_uk-ua'] = 'Ucraniano';
$s['lang_zh-cn'] = 'Chino (simplificado)';
$s['lang_zh-hk'] = 'Chino (Hong Kong)';
$s['lang_zh-tw'] = 'Chino (tradicional)';

//Channels
$s['channel_msit'] = 'MSIT';
$s['channel_canary'] = 'Canal Canary';
$s['channel_skipAhead'] = 'Skip Ahead';
$s['channel_dev'] = 'Canal Dev';
$s['channel_beta'] = 'Canal Beta';
$s['channel_releasepreview'] = 'Canal Release Preview';
$s['channel_retail'] = 'Retail';
