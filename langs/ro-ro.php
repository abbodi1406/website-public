<?php
/*
UUP dump translation file.

Translation information:
English language name: Romanian (Romania)
Localized language name: Română (România)
Language code: ro-RO
Authors: ianymaty
*/

//Language information
$s['code'] = 'ro-RO';
$s['timeZone'] = 'EET'; //Fusuri orare suportate: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Răsfoiți compilările cunoscute - UUP dump
$s['build'] = 'Compilarea';
$s['arch'] = 'Arhitectură';
$s['ring'] = 'Inel';
$s['updateid'] = 'ID Actualizare';
$s['update'] = 'Actualizare';
$s['lang'] = 'Limbă';
$s['edition'] = 'Ediție';
$s['seachForBuilds'] = 'Caută după compilări...';
$s['no'] = 'Nu';
$s['yes'] = 'Da';
$s['yesRecommended'] = 'Da (recomandat)';
$s['next'] = 'Înainte';
$s['ok'] = 'OK';
$s['cancel'] = 'Anulare';
$s['information'] = 'Informații';
$s['totalDlSize'] = 'Mărimea totală a descărcării';
$s['file'] = 'Fișier';
$s['expires'] = 'Expiră';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Mărime';
$s['additionalEdition'] = 'Ediții suplimentare';
$s['requiredEdition'] = 'Ediția solicitată';
$s['unknown'] = 'Necunoscut';

//global
$s['home'] = 'Acasă';
$s['downloads'] = 'Descărcări';
$s['lightMode'] = 'Mod luminos';
$s['darkMode'] = 'Mod întunecat';
$s['sourceCode'] = 'Cod sursă';
$s['menu'] = 'Meniu';
$s['websiteDesc'] = 'Descărcați fișiere UUP cu ușurință de la serverele Windows Update. Acest proiect nu este afiliat cu Microsoft Corporation.';
$s['notAffiliated'] = 'Acest proiect nu este afiliat cu Microsoft Corporation. Windows este marcă înregistrată a Microsoft Corporation.';
$s['copyright'] = '© %d %s și contribuitorii.'; //© 2019 whatever127 și contribuitorii.
$s['selectLanguage'] = 'Alegeți limba dorită';

//index.php
$s['slogan'] = 'Descărcați fișiere UUP cu ușurință de la serverele Windows Update.';
$s['quickOptions'] = 'Opțiuni rapide';
$s['tHeadReleaseType'] = 'Categorie de lansare';
$s['tHeadDescription'] = 'Descriere';
$s['tHeadArchitectures'] = 'Arhitectură';
$s['latestPublicRelease'] = 'Ultima compilare lansată public';
$s['latestPublicReleaseSub'] = 'Compilare actualizată recent pentru utilizatori obișnuiți.';
$s['latestDevRelease'] = 'Ultima compilare Dev Channel';
$s['latestDevReleaseSub'] = 'Compilări oarecum nesigure cu caracteristici recente.<br>Ideal pentru utilizatori foarte tehnici.';
$s['latestBetaRelease'] = 'Ultima compilare Beta Channel';
$s['latestBetaReleaseSub'] = 'Compilări de încredere cu mai multe caracteristici disponibile în curând.<br>Ideal pentru adoptatori timpurii.';
$s['latestRPRelease'] = 'Ultima compilare Release Preview';
$s['latestRPReleaseSub'] = 'Compilări de încredere pentru previzualizarea următoarei lansări.<br>Ideal pentru a încerca lansările ce vor fi disponibile în curând.';
$s['advOptions'] = 'Opțiuni avansate';
$s['browseBuilds'] = 'Răsfoiți compilările cunoscute';
$s['browseBuildsSub'] = 'Alegeți o compilare deja descoperită și descărcați.';
$s['fetchLatest'] = 'Obțineți ultima compilare';
$s['fetchLatestSub'] = 'Obțineți ultimele informații de la serverele Windows Update.';
$s['newlyAdded'] = 'Compilări recent adăugate';
$s['dateAdded'] = 'Data adăugării';

//known.php
$s['browseKnown'] = 'Răsfoiți compilările cunoscute';
$s['chooseBuild'] = 'Alegeți compilarea';
$s['weFoundBuilds'] = '<b>%d</b> compilări găsite pentru cererea dvs.'; //<b>692</b> compilări găsite pentru cererea dvs.

//latest.php
$s['latestFetchLatest'] = 'Obțineți ultima compilare';
$s['latestTestingOnly'] = 'Doar în scop de testare';
$s['latestTestingOnlyWarn'] = '<b>Această pagină este furnizată doar în scop de testare.</b> Compilările obținute prin această pagină care nu au fost procesate de serverul de bază vor fi furnizate folosind pachetele de rezervă, ceea ce ar putea furniza rezultate incomplete. Dacă doriți descărcarea unei compilări deja cunoscute, folosiți in schimb pagina compilărilor cunoscute.';
$s['latestDoYouWantKnown'] = 'Doriți să continuați cu răsfoirea compilărilor cunoscute?';
$s['chooseOptions'] = 'Selectare parametrii';
$s['buildOfPretendedClient'] = 'Numărul de compilare al clientului de Windows Update simulat';
$s['editionOfPretendedClient'] = 'Ediția sistemului simulat';
$s['skipAheadLabel'] = 'Salt înainte';
$s['skipAheadOption'] = 'Folosește Salt înainte (Doar Insider Fast)';
$s['fetchUpdates'] = 'Obținere actualizări';
$s['fetchUpdatesInfo'] = 'Apăsați pe butonul <i>Obținere actualizări</i> pentru a trimite o solicitare la severele Windows Update.';

//fetchupd.php
$s['responseFromServer'] = 'Răspunsul serverului';
$s['foundUpdates'] = 'Găsit %d actualizări'; //Găsit 1 actualizări
$s['foundTheseUpdates'] = 'Au fost găsite următoarele actualizări. Apăsați pe numele actualizării dorite pentru a continua.';
$s['buildNumber'] = 'Numărul compilării: %s'; //Numărul compilării: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Alegeți limba pentru %s'; //Alegeți limba pentru Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Alegeți limba';
$s['chooseLangDesc'] = 'Alegeți limba dorită';
$s['allLangs'] = 'Toate limbile';
$s['selLangFiles'] = 'Fișiere';
$s['allFiles'] = 'Toate fișierele';
$s['wubOnly'] = 'Doar WindowsUpdateBox';
$s['updateOnly'] = 'Doar Actualizare';
$s['selectLangInfoText1'] = 'Apăsați pe butonul <i>Înainte</i> pentru a selecta ediția de descărcat.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe și Actualizări cumulative pot fi găsite în <i>Toate limbile</i>.';
$s['allLangsWarn'] = 'Opțiunea <i>Toate limbile</i> nu are suport pentru selectarea ediției.';
$s['clickNextToOpenFindFiles'] = 'Apăsați pe butonul <i>Înainte</i> pentru a deschide pagina unde puteți găsi fișierele.';
$s['noLangsAvailable'] = 'Nu sunt limbi disponibile pentru această compilare.<br> Această compilare nu poate fi convertită într-o imagine ISO. <br> Consultați <a target=_blank href="https://github.com/uup-dump-dev/website-public/blob/master/FAQ.md"> Întrebări frecvente </a> pentru detalii.';
$s['browseFiles'] = 'Răsfoiți fișierele';
$s['browseFilesDesc'] = 'Răsfoiți rapid fișierele în compilarea selectată';
$s['searchFiles'] = 'Caută fișiere';
$s['toSearchForCUUseQuery'] = 'Pentru a căuta după Actualizări cumulative folosiți solicitare căutare <i>%s</i>.'; //Pentru a căuta după Actualizări cumulative folosiți solicitare căutare <i>Windows10 KB</i>.

//selectedition.php
$s['selectEditionFor'] = 'Selectați ediția pentru %s'; //Selectați ediția pentru Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, Engleză (Statele Unite)
$s['chooseEdition'] = 'Alegeți ediția';
$s['chooseEditionDesc'] = 'Alegeți ediția dorită';
$s['allEditions'] = 'Toate edițiile';
$s['selectEditionInfoText'] = 'Apăsați pe butonul <i>Înainte</i> pentru a deschide pagina rezumat a selecției dvs.';
$s['additionalEditionsInfo'] = 'Dacă aveți nevoie de <b>ediții suplimentare</b> din tabelul din dreapta, selectați <b>ediția necesară</b> de deasupra și continuați dând click pe <i>Înainte</i>. <br>Pe pagina cu rezumat selectați opțiunea <b>Creați ediții suplimentare.</b>';

//download.php
$s['summary'] = 'Rezumat';
$s['summaryDesc'] = 'Revizuiți selecția dvs. și alegeți metoda de descărcare';
$s['summaryFor'] = 'Rezumat pentru %s'; //Rezumat pentru Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, Engleză (Statele Unite), Windows 10 Pro
$s['summaryOfSelection'] = 'Rezumat al selecției dvs.';
$s['browseList'] = 'Răsfoiți lista de fișiere';
$s['browseListDesc'] = 'Deschide pagina cu lista de fișiere UUP configurată pentru descărcare manuală.';
$s['aria2Opt1'] = 'Descărcați setul UUP';
$s['aria2Opt1Desc'] = 'Descărcați cu ușurință setul ales de UUP folosind aria2.';
$s['aria2Opt2'] = 'Descărcați și transformați în ISO';
$s['aria2Opt2Desc'] = 'Descărcați cu ușurință setul ales de UUP folosind aria2 și transformați în imagine ISO.';
$s['aria2Opt3'] = 'Descărcați, adăugați ediții suplimentare și transformați în ISO';
$s['aria2Opt3Desc'] = 'Descărcați cu ușurință setul ales de UUP folosind aria2, transformați, creați ediții suplimentare și la final creați o imagine ISO.';
$s['jsRequiredToConf'] = 'JavaScript este necesar pentru a configura și folosi această opțiune.';
$s['selAdditionalEditions'] = 'Selectați edițiile suplimentare';
$s['noAdditionalEditions'] = 'Nici o ediție suplimentară disponibilă pentru selecția dvs.';
$s['learnMore'] = 'Află mai multe';
$s['learnMoreAdditionalEditions1'] = 'Această opțiune permite crearea automată a edițiilor suplimentare selectate.';
$s['learnMoreAdditionalEditions2'] = 'Lista edițiilor suplimentare este determinată de selecția ediției de bază. Dedesubt puteți verifica lista edițiilor de bază care sunt necesare pentru a crea edițiile suplimentare dorite:';
$s['learnMoreUpdates1'] = 'Actualizările vor fi integrate în imaginea convertită doar atunci când scriptul de conversie este rulat pe următoarele sisteme:';
$s['learnMoreUpdates2'] = 'Dacă rulați scriptul de conversie pe orice alt sistem, actualizările nu vor fi integrate în imaginea rezultată.';
$s['systemWithAdk'] = '%s cu Windows 10 ADK instalat'; //Windows 7 cu Windows 10 ADK instalat
$s['additionalUpdates'] = 'Actualizări suplimentare';
$s['additionalUpdatesDesc'] = 'Acest set UUP conține actualizări suplimentare care vor fi integrate în timpul procesului de conversie, crescând semnificativ durata creării.';
$s['browseUpdatesList'] = 'Răsfoiți lista de actualizări';
$s['selectDownloadOptions'] = 'Alegeți opțiunile dvs. de descărcare';
$s['selectDownloadOptionsSub'] = 'Configurați cum ați dori să descărcați selecția dvs. ';
$s['downloadMethod'] = 'Metoda de descărcare';
$s['conversionOptions'] = 'Opțiuni pentru conversie';
$s['convOpt1'] = 'Creează ISO cu install.esd în loc de install.wim';
$s['convOpt2'] = 'Integrează actualizările când sunt disponibile (Doar cu Windows converter)';
$s['convOpt3'] = 'Rulează curățenia temeinică (cleanup) după integrarea actualizărilor (Doar cu Windows converter)';
$s['convOpt4'] = 'Integrează .NET Framework 3.5 (Doar cu Windows converter)';
$s['startDownload'] = 'Creează pachetul de descărcare';

//get.php
$s['listOfFilesFor'] = 'Lista de fișiere pentru %s'; //Lista de fișiere pentru Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Mărimea totală a fișierelor: %s'; //Mărimea totală a fișierelor: 2.86 GiB
$s['fileRenamingScript'] = 'Script pentru redenumirea fișierelor';
$s['fileRenamingScriptDesc1'] = 'Scriptul aflat dedesubt poate fi folosit pentru redenumirea rapidă a fișierelor descărcate.';
$s['fileRenamingScriptDesc2'] = 'Pur și simplu copiați conținutul de dedesubt într-un fișier nou cu extensia <code>cmd</code> , puneți-l în dosarul cu fișierele descărcate și rulați-l.';
$s['sha1File'] = 'Fișier cu sume de control SHA-1';
$s['sha1FileDesc'] = 'Puteți folosi acest fișier pentru a verifica rapid dacă fișierele au fost descărcate corect.';
$s['aria2NoticeTitle'] = 'Observații privind opțiunile de descărcare folosind aria2';
$s['aria2NoticeText1'] = 'Opțiunile de descărcare folosind aria2 creează o arhivă care va trebui descărcată. Arhiva descărcată conține toate fișierele necesare pentru a realiza sarcina aleasă.';
$s['aria2NoticeText2'] = 'Pentru pornirea procesului de descărcare folosiți un script pentru platforma dvs.:';
$s['aria2NoticeText3'] = 'Aria2 este un proiect open source. Îl puteți găsi aici: %s.'; //Aria2 este un proiect open source. Îl puteți găsi aici: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'Scriptul de conversie UUP (versiunea Windows) a fost creat de %s.'; //UUP Scriptul de conversie (versiunea Windows) a fost creat de abbodi1406.
$s['aria2NoticeText5'] = 'Scriptul de conversie UUP (versiunea Linux, versiunea macOS) este open source. Îl puteți găsi aici: %s.'; //Scriptul de conversie UUP (versiunea Linux, versiunea macOS) este open source. Îl puteți găsi aici: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Găsește fișiere în %s'; //Găsește fișiere în Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Dacă vreți să redenumiți rapid fișierele descărcate din această pagină, puteți genera un script de redenumire, care va face automat asta pentru dvs.';
$s['fileRenamingScriptGenW'] = 'Generează script de redenumire (Windows)';
$s['fileRenamingScriptGenL'] = 'Generează script de redenumire (Linux, macOS)';
$s['searchForFiles'] = 'Caută după fișiere...';
$s['weFoundFiles'] = 'Am găsit <b>%d</b> fișiere potrivite interogării dvs.'; //Am găsit <b>692</b> fișiere potrivite interogării dvs.

//Error pages
$s['error'] = 'Eroare';
$s['requestNotSuccessful'] = 'Solicitare fără succes';
$s['anErrorHasOccurred'] = 'A apărut o eroare în încercarea de a procesa solicitarea dvs.';
$s['generatedPackNotAvailable'] = 'Pachetul generat nu este disponibil';
$s['generatedPackNotAvailableDesc'] = 'Această actualizare nu dispune de un pachet care să furnizeze informații complete despre limbile disponibile, ediții și fișiere. Se va folosi pachetul de rezervă, asta poate să nu furnizeze informațiile corecte. Dacă descărcarea eșuează din această cauză, vă rugăm așteptați până când pachetul va fi disponibil.';
$s['arm64Warning'] = 'Aceasta este o compilare <b>ARM64</b> care <b>nu este compatibilă cu procesoarele PC Intel sau AMD obișnuite.</b> Dacă sunteți siguri că dispozitivul dvs. de destinație are un procesor <b>ARM64</b> și nu îl confundați cu <b>AMD64</b>, puteți continua în siguranță.';

//Error messages
$s['error_ERROR'] = 'Eroare generică.';
$s['error_UNSUPPORTED_API'] = 'Versiunea de API instalată nu este compatibilă cu această versiune a UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'Lipsește dosarul <i>fileinfo</i>.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'Baza de date <i>fileinfo</i> nu conține nici o compilare.';
$s['error_SEARCH_NO_RESULTS'] = 'Nici un element găsit pentru interogarea efectuată.';
$s['error_UNKNOWN_ARCH'] = 'Arhitectură procesor necunoscută.';
$s['error_UNKNOWN_RING'] = 'Inel necunoscut.';
$s['error_UNKNOWN_FLIGHT'] = 'Salt înainte necunoscut.';
$s['error_UNKNOWN_COMBINATION'] = 'Combinația de Salt înainte și Inel nu este corectă. Salt înainte este suportat doar în inelul Insider Fast.';
$s['error_ILLEGAL_BUILD'] = 'Numărul compilării specificat este mai mic %d sau mai mare %d.'; //Numărul compilării specificat este mai mic de 9841 sau mai mare de 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Minorul compilării specificate nu este corect.';
$s['error_NO_UPDATE_FOUND'] = 'Serverul nu a returnat actualizări.';
$s['error_XML_PARSE_ERROR'] = 'Analiza fișierului XML de răspuns a eșuat. Este o posibilă problemă cu serverele Microsoft. Încercați din nou mai târziu.';
$s['error_EMPTY_FILELIST'] = 'Serverul a returnat un fișier cu o listă goală.';
$s['error_NO_FILES'] = 'Nu sunt fișiere disponibile pentru alegerea dvs.';
$s['error_NOT_FOUND'] = 'Alegerea specificată nu poate fi găsită.';
$s['error_MISSING_FILES'] = 'Setul UUP ales are fișiere lipsă.';
$s['error_NO_METADATA_ESD'] = 'Nu există fișiere metadata ESD disponibile pentru alegerea dvs.';
$s['error_UNSUPPORTED_LANG'] = 'Limba specificată nu este suportată.';
$s['error_UNSPECIFIED_LANG'] = 'Limba nu a fost specificată.';
$s['error_UNSUPPORTED_EDITION'] = 'Ediția specificată nu este suportată.';
$s['error_UNSUPPORTED_COMBINATION'] = 'Combinația de limbă și ediție nu este corectă.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Actualizarea selectată nu conține o Actualizare Cumulativă.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Nu există informații în baza de date despre actualizarea specificată.';
$s['error_KEY_NOT_EXISTS'] = 'Cheia specificată nu există în informațiile actualizării.';
$s['error_UNSPECIFIED_UPDATE'] = 'ID-ul actualizării nu a fost specificat.';
$s['error_INCORRECT_ID'] = 'ID-ul actualizării specificate nu este corect. Vă rugăm asigurați-vă că ID-ul actualizării specificate este corect.';
$s['error_RATE_LIMITED'] = 'Aveți viteza limitată. Vă rugăm să încercați din nou în câteva minute.';
$s['error_UNSPECIFIED_VE'] = 'Nu ați selectat nici o altă ediție suplimentară. Dacă doriți să nu creați ediții suplimentare, vă rugăm folosiți opțiunea <i>Descărcați folosind aria2 și transformați</i>.';
$s['errorNoMessage'] = 'Mesaj de eroare indisponibil.';

//Languages
$s['lang_ar-sa'] = 'Arabă (Arabia Saudită)';
$s['lang_bg-bg'] = 'Bulgară';
$s['lang_cs-cz'] = 'Cehă';
$s['lang_da-dk'] = 'Daneză';
$s['lang_de-de'] = 'Germană';
$s['lang_el-gr'] = 'Greacă';
$s['lang_en-gb'] = 'Engleză (Regatul Unit)';
$s['lang_en-us'] = 'Engleză (Statele Unite)';
$s['lang_es-es'] = 'Spaniolă (Spania)';
$s['lang_es-mx'] = 'Spaniolă (Mexic)';
$s['lang_et-ee'] = 'Estonă';
$s['lang_fi-fi'] = 'Finlandeză';
$s['lang_fr-ca'] = 'Franceză (Canada)';
$s['lang_fr-fr'] = 'Franceză (Franța)';
$s['lang_he-il'] = 'Ebraică';
$s['lang_hr-hr'] = 'Croată';
$s['lang_hu-hu'] = 'Maghiară';
$s['lang_it-it'] = 'Italiană';
$s['lang_ja-jp'] = 'Japoneză';
$s['lang_ko-kr'] = 'Coreeană';
$s['lang_lt-lt'] = 'Lituaniană';
$s['lang_lv-lv'] = 'Letonă';
$s['lang_nb-no'] = 'Norvegiană (Bokmal)';
$s['lang_nl-nl'] = 'Olandeză';
$s['lang_pl-pl'] = 'Poloneză';
$s['lang_pt-br'] = 'Portugheză (Brazilia)';
$s['lang_pt-pt'] = 'Portugheză (Portugalia)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Română';
$s['lang_ru-ru'] = 'Rusă';
$s['lang_sk-sk'] = 'Slovacă';
$s['lang_sl-si'] = 'Slovenă';
$s['lang_sr-latn-rs'] = 'Sârbă (Latin)';
$s['lang_sv-se'] = 'Suedeză';
$s['lang_th-th'] = 'Thailandeză';
$s['lang_tr-tr'] = 'Turcă';
$s['lang_uk-ua'] = 'Ucraineană';
$s['lang_zh-cn'] = 'Chineză (Simplificată)';
$s['lang_zh-hk'] = 'Chineză (Hong Kong)';
$s['lang_zh-tw'] = 'Chineză (Tradițională)';
