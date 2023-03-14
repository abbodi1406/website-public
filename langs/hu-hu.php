<?php
/*
UUP dump fordítási fájl.

Fordítási információk:
A nyelv angol neve: Hungarian (Hungary)
A nyelv helyi neve: Magyar (Magyarország)
A nyelv kódja: hu-HU
Authors: Fowler https://forums.mydigitallife.net/members/fowler.355408/
*/

//Language information
$s['code'] = 'hu-HU';
$s['timeZone'] = 'Europe/Budapest'; //Támogatott időzónák: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Keresse meg az ismert építményeket - UUP dump
$s['build'] = 'Építmény';
$s['arch'] = 'Architektúra';
$s['ring'] = 'Gyűrű';
$s['updateid'] = 'Frissítési azonosító (ID)';
$s['update'] = 'Frissítés';
$s['lang'] = 'Nyelv';
$s['edition'] = 'Kiadás';
$s['seachForBuilds'] = 'Keressen építményeket...';
$s['no'] = 'Nem';
$s['yes'] = 'Igen';
$s['yesRecommended'] = 'Igen (ajánlott)';
$s['next'] = 'Tovább';
$s['ok'] = 'OK';
$s['cancel'] = 'Mégse';
$s['information'] = 'Információ';
$s['totalDlSize'] = 'Teljes letöltési méret';
$s['file'] = 'Fájl';
$s['expires'] = 'Lejárat ideje';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Méret';
$s['additionalEdition'] = 'További kiadás';
$s['requiredEdition'] = 'Kívánt kiadás';
$s['unknown'] = 'Ismeretlen';

//global
$s['home'] = 'Kezdőlap';
$s['downloads'] = 'Letöltések';
$s['lightMode'] = 'Világos mód';
$s['faq'] = 'GyIK';
$s['darkMode'] = 'Sötét mód';
$s['sourceCode'] = 'Forrás kód';
$s['menu'] = 'Menü';
$s['websiteDesc'] = 'Töltse le UUP fájlokat a Windows Update kiszolgálókról könnyedén. Ez a projekt nem áll kapcsolatban a Microsoft Corporation céggel.';
$s['notAffiliated'] = 'Ez a projekt nem áll kapcsolatban a Microsoft Corporation céggel. A Windows a Microsoft Corporation bejegyzett védjegye.';
$s['copyright'] = '© %d %s és közreműködők.'; //© 2019 whatever127 és közreműködők.
$s['copyrightNew'] = '© %d UUP dump szerzők és közreműködők.';
$s['selectLanguage'] = 'Kérjük, válassza ki a nyelvet';
$s['uupDumpDesc'] = 'Az "UUP dump lehetővé teszi az Unified Update Platform fájlok, például a Windows Insider frissítések letöltését közvetlenül a Windows Update-ről.';
$s['uupDumpDescSub'] = '%s az UUP dumpon. Az UUP dump segítségével közvetlenül a Windows Update-ről tölthet le Unified Update Platform fájlokat, például Windows Insider frissítéseket.'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. Az UUP dump segítségével közvetlenül a Windows Update-ről tölthet le Unified Update Platform fájlokat, például Windows Insider frissítéseket..

//index.php
$s['slogan'] = 'Töltse le UUP fájlokat a Windows Update kiszolgálókról könnyedén.';
$s['quickOptions'] = 'Gyors választási lehetőségek';
$s['tHeadReleaseType'] = 'Kiadás típusa';
$s['tHeadDescription'] = 'Leírás';
$s['tHeadArchitectures'] = 'Architektúrák';
$s['latestPublicRelease'] = 'Legújabb nyilvános kiadás';
$s['latestPublicReleaseSub'] = 'Legfrissebb frissített kiadás a rendszeres felhasználók számára.';
$s['latestDevRelease'] = 'A fejlesztői csatorna legújabb verziója';
$s['latestDevReleaseSub'] = 'Kissé megbízhatatlanul kiadások a legújabb funkciókkal.<br>Ideális a magas technikai felkészültségű felhasználók számára.';
$s['latestBetaRelease'] = 'A béta-csatorna legújabb kiadása';
$s['latestBetaReleaseSub'] = 'Megbízható buildek a legtöbb hamarosan elérhető funkcióval.<br>Ideális a korai alkalmazók számára.';
$s['latestRPRelease'] = 'Legújabb előnézeti kiadás';
$s['latestRPReleaseSub'] = 'Megbízható buildek a következő kiadás előzetes megtekintéséhez.<br>Ideális a közelgő kiadások kipróbálásához.';
$s['advOptions'] = 'Haladó beállítások';
$s['browseBuilds'] = 'Keressen az ismert építmények listájából';
$s['browseBuildsSub'] = 'Válasszon egy már ismert kiadást, és töltse le.';
$s['fetchLatest'] = 'Töltse le a legújabb kiadást';
$s['fetchLatestSub'] = 'A legfrissebb összeállítási információk lekérése a Windows Update kiszolgálókról.';
$s['newlyAdded'] = 'Nemrég hozzáadott összeállítások';
$s['dateAdded'] = 'Hozzáadás dátuma';
$s['latestCanaryRelease'] = 'Legújabb Canary Channel build';
$s['latestCanaryReleaseSub'] = 'Kissé instabil buildek a legújabb platformváltozásokkal és korai funkciókkal.<br>Ideális a magasan képzett felhasználók számára.';

//newbuild.php
$s['newBuild'] = 'Új build';
$s['addNewBuild'] = 'Új build hozzáadása';
$s['selectOptions'] = 'Opciók kijelölése';
$s['newBuildNextText'] = 'Kattintson a <i>Következő</i> gombra a keresés megkezdéséhez a megadott beállításokkal.';
$s['newBuildUsing'] = 'Az oldal használatával';
$s['newBuildUsingText'] = 'Ezt az oldalt a haladó felhasználóknak szánjuk, akik olyan buildeket szeretnének hozzáadni, amely nem található meg a weboldalon. Amennyiben a leggyakrabban használt paraméterek valamelyikét szeretné használni, kérjük, használja a kezdőlapon található <i>Gyors lehetőségek</i> egyikét.';
$s['optionsNotice'] = 'Lehetőségek szóló értesítés';
$s['optionsNoticeText'] = 'Az itt található beállítások azt konfigurálják, hogy az alapul szolgáló Windows Update ügyfél hogyan jelentse magát a Microsoft-kiszolgálóknak. Nagyon fontos, hogy ezeket megfelelően állítsa be, különben hibaüzenetet kap.';

//known.php
$s['browseKnown'] = 'Keresse meg az ismert építményeket';
$s['chooseBuild'] = 'Válassza ki a összeállítást';
$s['weFoundBuilds'] = 'A lekérdezés során <b>%d</b> építményeket találtuk.'; //A lekérdezés során <b>692</b> építményeket találtuk.
$s['sortByDate'] = 'Az eredmények rendezése a hozzáadás dátuma szerint';
$s['nextPage'] = 'Következő';
$s['prevPage'] = 'Előző';
$s['pageOf'] = '%d oldal %d-ből %d'; //1. oldal a 48-ból

//fetchupd.php
$s['responseFromServer'] = 'Kiszolgáló válasza';
$s['foundUpdates'] = 'Talált %d frissítés(ek)'; //Talált 1 frissítés(ek)
$s['foundTheseUpdates'] = 'A következő frissítéseket találtuk. A folytatáshoz kattintson a kívánt frissítés nevére.';
$s['buildNumber'] = 'Build száma: %s'; //Build száma: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Válasszon a nyelvek közül %s'; //Válasszon a nyelvek közül Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Válasszon nyelvet';
$s['chooseLangDesc'] = 'Válassza ki a kívánt nyelvet';
$s['allLangs'] = 'Minden nyelv';
$s['selLangFiles'] = 'Fájlok';
$s['allFiles'] = 'Minden fájl';
$s['wubOnly'] = 'Csak a "WindowsUpdateBox"-ban lévők';
$s['updateOnly'] = 'Csak frissítés';
$s['selectLangInfoText1'] = 'Kattintson a <i>Következő</i> gombra a letölthető kiadás kiválasztásához.';
$s['selectLangInfoText2'] = 'A WindowsUpdateBox.exe és a kumulatív frissítések a(z) <i>Minden nyelv</i> nyelvben találhatók.';
$s['allLangsWarn'] = 'A <i>Minden nyelv</i> opció nem támogatja a kiadás kiválasztását.';
$s['clickNextToOpenFindFiles'] = 'Kattintson a <i>Következő</i> gombra az oldal megnyitásához, amely lehetővé teszi a fájlok keresését.';
$s['noLangsAvailable'] = 'Ehhez a buildhez nem állnak rendelkezésre nyelvek.<br>Ezt a buildet nem lehet ISO-képre konvertálni.<br>A részletekért lásd a GYIK-et.';
$s['browseFiles'] = 'Böngészés a fájlok között';
$s['browseFilesDesc'] = 'Gyorsan keresheti a fájlokat a kiválasztott építményben';
$s['searchFiles'] = 'Fájlok keresése';
$s['toSearchForCUUseQuery'] = 'Összesítő frissítések kereséséhez használja a <i>%s</i> keresési lekérdezést.'; //Összesítő frissítések kereséséhez használja a <i>Windows10 KB</i> keresési lekérdezést.
$s['updateNotProcessed'] = 'Az UUP dump még nem dolgozta fel az update\ metaadatait - ez automatikusan megtörténik %d percenként egyszer. Addig csak az update\ fájllistáját böngészheti.'; //UUP dump még nem dolgozta fel a frissítés metaadatait - ez automatikusan 30 percenként egyszer történik. Addig csak a frissítés fájllistáját böngészheti.
$s['updateIsBlocked'] = 'Ez a frissítés ismert problémákat okoz, amelyek megakadályozzák a működő ISO létrehozását. Emiatt csak manuálisan böngészheti a fájlokat.';

//selectedition.php
$s['selectEditionFor'] = '%s kiadás kiválasztása'; //Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States) kiadás kiválasztása
$s['chooseEdition'] = 'Válassza ki a kiadást';
$s['chooseEditionDesc'] = 'Válasszon a kiadások közül';
$s['allEditions'] = 'Minden kiadás';
$s['selectEditionInfoText'] = 'Kattintson a <i>Következő</i> gombra a kiválasztott összegző oldal megnyitásához.';
$s['additionalEditionsInfo'] = 'Ha szüksége van egy további kiadásra, amely megtalálható a jobb oldali táblázatban, válassza ki a szükséges kiadást, majd kattintson a <i>Következő</i> gombra. Az összefoglaló oldalon kiválaszthatja a kívánt kiadásokat a megfelelő letöltési lehetőség alatt.';
$s['showHiddenEditions'] = 'Rejtett kiadások megjelenítése (nem ajánlott)';

//download.php
$s['summary'] = 'Összegzés';
$s['summaryDesc'] = 'Nézze át választását, és válassza ki a letöltési módot';
$s['summaryFor'] = '%s összegzése'; //Összegzés: Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'A választás összefoglalása';
$s['browseList'] = 'Keressen fájlokat a listából';
$s['browseListDesc'] = 'Megnyitja az UUP készletben található fájlok listáját tartalmazó oldalt a kézi letöltéshez.';
$s['aria2Opt1'] = 'Az UUP csomag letöltése';
$s['aria2Opt1Desc'] = 'Könnyen letöltheti a kiválasztott UUP csomagot az aria2 használatával.';
$s['aria2Opt2'] = 'Letöltés az "aria2" használatával és konvertálás';
$s['aria2Opt2Desc'] = 'Könnyen letöltheti a kiválasztott UUP csomagot az aria2 használatával, és konvertálhatja ISO fájlba.';
$s['aria2Opt3'] = 'Töltse le az aria2 használatával, konvertálja és adjon hozzá további kiadásokat';
$s['aria2Opt3Desc'] = 'Könnyen letöltheti a kiválasztott UUP csomagot az aria2 használatával, konvertálhat, adhat hozzá további kiadásokat és végül létrehozhat ISO lemezkép-fájlt.';
$s['jsRequiredToConf'] = 'Ennek az opciónak a konfigurálásához és használatához JavaScript szükséges.';
$s['selAdditionalEditions'] = 'Válasszon további kiadásokat';
$s['noAdditionalEditions'] = 'Ehhez a kiválasztáshoz nem állnak rendelkezésre további kiadások.';
$s['learnMore'] = 'Tudj meg többet';
$s['learnMoreAdditionalEditions1'] = 'Ez az opció lehetővé teszi a kiválasztott további kiadások automatikus létrehozását.';
$s['learnMoreAdditionalEditions2'] = 'A kiegészítő kiadások listáját a kiválasztott alapkiadások határozzák meg. Az alábbiakban ellenőrizheti az alapkiadások listáját, amelyekre szükség van a kívánt további kiadások létrehozásához:';
$s['learnMoreUpdates1'] = 'A frissítéseket csak akkor integrálják a konvertált képbe, ha a konverziós szkript fut a következő rendszereken:';
$s['learnMoreUpdates2'] = 'Ha a konverziós szkriptet bármely más rendszeren futtatja, a frissítéseket nem integrálja a kapott képbe.';
$s['systemWithAdk'] = '%s Windows 10 ADK telepítve van'; //Windows 7, Windows 10 ADK telepítve
$s['additionalUpdates'] = 'További frissítések';
$s['additionalUpdatesDesc'] = 'Ez az UUP készlet további frissítéseket tartalmaz, amelyeket az átalakítási folyamat során integrálnak, jelentősen megnövelve a létrehozási időt.';
$s['browseUpdatesList'] = 'Böngésszen a frissítések listájában';
$s['selectDownloadOptions'] = 'Válasszon a letöltési lehetőségek közül';
$s['selectDownloadOptionsSub'] = 'Konfigurálja, hogyan szeretné letölteni a kiválasztását';
$s['downloadMethod'] = 'Letöltési módszer';
$s['conversionOptions'] = 'Konvertálási lehetőségeket';
$s['convOpt1'] = 'Hozzon létre ISO-t az install.esd fájllal az install.wim helyett';
$s['convOpt2'] = 'Integrálja a frissítéseket, ha elérhető (csak Windows konverter esetén)';
$s['convOpt3'] = 'Futtassa a tisztítást a frissítések integrációja után (csak Windows konverter esetén)';
$s['convOpt4'] = '.NET-keretrendszer 3.5 integrálása (csak Windows konverter esetén)';
$s['startDownload'] = 'Hozzon létre letöltési csomagot';
$s['legalCopeHarder'] = 'A <i>Letöltési csomag létrehozása</i> gombra kattintva Ön elfogadja a következőket:';
$s['legalCope1'] = 'Az UUP dump által biztosított szkriptek segítségével létrehozott telepítési lemezképek csak <b>értékelési célokra</b> szolgálnak.';
$s['legalCope2'] = 'A lemezképeket és azok telepítését a Microsoft Corporation semmilyen módon nem támogatja.';
$s['legalCope3v2'] = '<b>A szerzők nem vállalnak felelősséget a weboldal helytelen használatából eredő károkért</b>.';
$s['win1122h2OrLater'] = 'Windows 11, 22H2 vagy újabb verzió';
$s['requiresWindows102004'] = 'Ehhez a buildhez a Windows 10 2004-es vagy újabb verziója szükséges az ISO megfelelő létrehozásához. A más platformokhoz készült szkriptek hibás ISO-t fognak kiadni.';

//get.php
$s['listOfFilesFor'] = 'Fájlok listája a(z) %s fájlhoz'; //Fájlok listája: Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'A fájlok teljes mérete: %s'; //A fájlok teljes mérete: 2.86 GiB
$s['fileRenamingScript'] = 'Fájl átnevező szkript';
$s['fileRenamingScriptDesc1'] = 'Az alább található szkript felhasználható a letöltött fájlok gyors átnevezésére.';
$s['fileRenamingScriptDesc2'] = 'Egyszerűen másolja az alábbi űrlap tartalmát egy új fájlba, <code>cmd</code> kiterjesztéssel mentse el, majd tegye a letöltött fájlok mappájába, és futtassa.';
$s['sha1File'] = 'SHA-1 ellenőrző összeg fájl';
$s['sha1FileDesc'] = 'A fájl segítségével gyorsan ellenőrizheti, hogy a fájlok megfelelően lettek-e letöltve.';
$s['aria2NoticeTitle'] = 'Töltse le az aria2 segítségével';
$s['aria2NoticeText1'] = 'Letöltés az aria2 opciókkal létrehoz egy archívumot, amelyet le kell tölteni. A letöltött archívum tartalmazza a kiválasztott feladat végrehajtásához szükséges fájlokat.';
$s['aria2NoticeText2'] = 'A letöltési folyamat elindításához használja parancsfájlt a saját platformján (Windows, Linux, macOS):';
$s['aria2NoticeText3'] = 'Az Aria2 nyílt forráskódú projekt. Itt található: %s.'; //Az Aria2 egy nyílt forráskódú projekt. Itt található: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'Az UUP konverziós szkriptet (Windows verzió) %s hozta létre.'; //Az UUP konverziós szkriptet (Windows verzió) abbodi1406 hozta létre.
$s['aria2NoticeText5'] = 'Az UUP konverziós szkript (Linux verzió, macOS verzió) nyílt forrású. Itt található: %s.'; //Az UUP konverziós szkript (Linux verzió, macOS verzió) nyílt forrású. Itt található: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Fájlok keresése a(z) %s fájlban'; //Fájlok keresése a Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64 fájlban
$s['fileRenamingScriptDescFindFiles'] = 'Ha gyorsan át szeretné nevezni az ezen az oldalon letöltött fájlokat, létrehozhat egy átnevező szkriptet, amely automatikusan ezt megteszi az Ön számára.';
$s['fileRenamingScriptGenW'] = 'Átnevező szkript létrehozása (Windows)';
$s['fileRenamingScriptGenL'] = 'Átnevező szkript létrehozása (Linux, macOS)';
$s['searchForFiles'] = 'Fájlok keresése...';
$s['weFoundFiles'] = '<b>%d</b> fájlokat találtunk a lekérdezéshez.'; //<b>692</b> fájlokat találtunk a lekérdezéséhez.
$s['sizeOfShownFiles'] = 'A megjelenített fájlok mérete: %s'; //Megjelenített fájlok mérete: 2.86 GiB

//Error pages
$s['error'] = 'Hiba';
$s['requestNotSuccessful'] = 'A kérelem nem sikerült';
$s['anErrorHasOccurred'] = 'Hiba történt a kérés feldolgozása közben.';
$s['arm64Warning2022h'] = 'Ez egy ARM64 build';
$s['arm64Warning2022b'] = '<p>Ez a build csak a következőkkel kompatibilis:</p><ul><li>Surface Pro X</li><li>Raspberry Pi</li><li>Apple Mac M1</li><li>más dicsőített mobiltelefonok</li></ul><p>UUP dump szerzők <i>nem rendelkeznek ezek közül egyikkel sem</i> és ezért <b>nem nyújtanak semmiféle támogatást.</b>.</p>';

//Error messages
$s['error_ERROR'] = 'Általános hiba.';
$s['error_UNSUPPORTED_API'] = 'A telepített API verziója nem kompatibilis az UUP dump ezen verziójával.';
$s['error_NO_FILEINFO_DIR'] = 'A <i>fileinfo</i> könyvtár nem létezik.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'A <i>fileinfo</i> adatbázis nem tartalmaz építményt.';
$s['error_SEARCH_NO_RESULTS'] = 'Nem található elem a végrehajtott lekérdezéshez.';
$s['error_UNKNOWN_ARCH'] = 'Ismeretlen processzor-architektúra.';
$s['error_UNKNOWN_RING'] = 'Ismeretlen gyűrű.';
$s['error_UNKNOWN_FLIGHT'] = 'Ismeretlen Insider gyűrű.';
$s['error_UNKNOWN_COMBINATION'] = 'A gyűrű kombinációja nem megfelelő. Az átugrást csak az Insider Fast gyűrű támogatja.';
$s['error_ILLEGAL_BUILD'] = 'A megadott építmény száma kisebb, mint %d vagy nagyobb, mint %d.'; //A megadott építmény száma 9841-nél nagyobb vagy 2147483646-nál kisebb.
$s['error_ILLEGAL_MINOR'] = 'A megadott alépítmény helytelen.';
$s['error_NO_UPDATE_FOUND'] = 'A szerver nem adott vissza frissítéseket.';
$s['error_XML_PARSE_ERROR'] = 'A válasz XML elemzése nem sikerült. Probléma lehet a Microsoft szerverekkel. Próbáld újra később.';
$s['error_EMPTY_FILELIST'] = 'A szerver egy üres fájllistát adott vissza.';
$s['error_NO_FILES'] = 'Nincsenek elérhető fájlok az adott kijelölésekkel.';
$s['error_NOT_FOUND'] = 'A megadott választás nem található.';
$s['error_MISSING_FILES'] = 'A kiválasztott UUP készlethez hiányoznak a fájlok.';
$s['error_NO_METADATA_ESD'] = 'Nincs választható metaadat-ESD-fájl.';
$s['error_UNSUPPORTED_LANG'] = 'A megadott nyelv nem támogatott.';
$s['error_UNSPECIFIED_LANG'] = 'A nyelv nem volt megadva.';
$s['error_UNSUPPORTED_EDITION'] = 'A megadott kiadás nem támogatott.';
$s['error_UNSUPPORTED_COMBINATION'] = 'A nyelv és a kiadás kombinációja nem megfelelő.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'A kiválasztott frissítés nem tartalmaz összesített frissítést.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'A megadott frissítéssel kapcsolatos információk nem léteznek az adatbázisban.';
$s['error_KEY_NOT_EXISTS'] = 'A megadott kulcs nem létezik a frissítési információkban.';
$s['error_UNSPECIFIED_UPDATE'] = 'A frissítési azonosítót (ID) nem adták meg.';
$s['error_INCORRECT_ID'] = 'A megadott frissítési azonosító helytelen. Ellenőrizze, hogy a megadott frissítési azonosító helyes-e.';
$s['error_RATE_LIMITED'] = 'Ön elérte a letöltési határt, ezért korlátozva van. Kérjük, próbálja meg később.';
$s['error_UNSPECIFIED_VE'] = 'You have not selected any additional editions. If do not wish to create additional editions, please use the <i>Download using aria2 and convert</i> option.';
$s['error_VE_UNAVAILABLE'] = 'További kiadások nem támogatottak ennél a kiválasztásnál.';
$s['error_INVALID_PAGE'] = 'A megadott oldal érvénytelen';
$s['errorNoMessage'] = 'Hibaüzenet nem elérhető.';

//Languages
$s['lang_ar-sa'] = 'Arabic (Saudi Arabia)';
$s['lang_bg-bg'] = 'Bulgarian';
$s['lang_cs-cz'] = 'Czech';
$s['lang_da-dk'] = 'Danish';
$s['lang_de-de'] = 'German';
$s['lang_el-gr'] = 'Greek';
$s['lang_en-gb'] = 'English (United Kingdom)';
$s['lang_en-us'] = 'English (United States)';
$s['lang_es-es'] = 'Spanish (Spain)';
$s['lang_es-mx'] = 'Spanish (Mexico)';
$s['lang_et-ee'] = 'Estonian';
$s['lang_fi-fi'] = 'Finnish';
$s['lang_fr-ca'] = 'French (Canada)';
$s['lang_fr-fr'] = 'French (France)';
$s['lang_he-il'] = 'Hebrew';
$s['lang_hr-hr'] = 'Croatian';
$s['lang_hu-hu'] = 'Hungarian';
$s['lang_it-it'] = 'Italian';
$s['lang_ja-jp'] = 'Japanese';
$s['lang_ko-kr'] = 'Korean';
$s['lang_lt-lt'] = 'Lithuanian';
$s['lang_lv-lv'] = 'Latvian';
$s['lang_nb-no'] = 'Norwegian (Bokmal)';
$s['lang_nl-nl'] = 'Dutch';
$s['lang_pl-pl'] = 'Polish';
$s['lang_pt-br'] = 'Portuguese (Brazil)';
$s['lang_pt-pt'] = 'Portuguese (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Romanian';
$s['lang_ru-ru'] = 'Russian';
$s['lang_sk-sk'] = 'Slovak';
$s['lang_sl-si'] = 'Slovenian';
$s['lang_sr-latn-rs'] = 'Serbian (Latin)';
$s['lang_sv-se'] = 'Swedish';
$s['lang_th-th'] = 'Thai';
$s['lang_tr-tr'] = 'Turkish';
$s['lang_uk-ua'] = 'Ukrainian';
$s['lang_zh-cn'] = 'Chinese (Simplified)';
$s['lang_zh-hk'] = 'Chinese (Hong Kong)';
$s['lang_zh-tw'] = 'Chinese (Traditional)';

//Channels
$s['channel_canary'] = 'Canary Csatorna';
$s['channel_skipAhead'] = 'Skip Ahead';
$s['channel_dev'] = 'Dev Csatorna';
$s['channel_beta'] = 'Beta Csatorna';
$s['channel_releasepreview'] = 'Release Preview Csatorna';
$s['channel_retail'] = 'Kiskereskedelmi';
