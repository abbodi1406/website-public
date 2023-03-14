<?php
/*
Arquivo de tradução du UUP dump.

Informações da tradução:
Nome do idioma em inglês: Portuguese (Portugal)
Nome do idioma localizado: Português (Portugal)
Código do idioma: pt-PT
Author: Cag (https://forums.mydigitallife.net/members/cag.71714/)
*/

//Language information
$s['code'] = 'pt-PT';
$s['timeZone'] = 'Europe/Lisbon'; //Fusos horários suportados: https://www.php.net/manual/pt_BR/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Procurar compilações - UUP dump
$s['build'] = 'Compilação';
$s['arch'] = 'Arquitetura';
$s['ring'] = 'Círculo "RING"';
$s['updateid'] = 'ID da atualização';
$s['update'] = 'Atualização';
$s['lang'] = 'Idioma';
$s['edition'] = 'Edição';
$s['seachForBuilds'] = 'Procurar compilações...';
$s['no'] = 'Não';
$s['yes'] = 'Sim';
$s['yesRecommended'] = 'Sim (recomendado)';
$s['next'] = 'Avançar';
$s['ok'] = 'OK';
$s['cancel'] = 'Cancelar';
$s['information'] = 'Informação';
$s['totalDlSize'] = 'Tamanho total do download';
$s['file'] = 'Arquivo';
$s['expires'] = 'Expira em';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Tamanho';
$s['additionalEdition'] = 'Edição Adicional';
$s['requiredEdition'] = 'Edição Exigida';
$s['unknown'] = 'Desconhecido(a)';

//global
$s['home'] = 'Página Principal';
$s['downloads'] = 'Descarregar';
$s['lightMode'] = 'Modo Claro';
$s['faq'] = 'Perguntas Frequentes "FAQ"';
$s['darkMode'] = 'Modo Escuro';
$s['sourceCode'] = 'Código Fonte';
$s['menu'] = 'Menu';
$s['websiteDesc'] = 'Faça o download de arquivos UUP a partir dos servidores do Windows Update com facilidade. Este projeto não é afiliado à Microsoft Corporation.';
$s['notAffiliated'] = 'Este projeto não é afiliado à Microsoft Corporation. Windows é uma marca registada da Microsoft Corporation.';
$s['copyright'] = '© %d %s e colaboradores.'; //© 2019 whatever127 e colaboradores.
$s['copyrightNew'] = 'Autores e colaboradores do © %d UUP dump.';
$s['selectLanguage'] = 'Por favor, selecione seu idioma';
$s['uupDumpDesc'] = 'O UUP dump permite que você baixe arquivos por meio da "Unified Update Platform (Plataforma de Atualizações Unificada)", como atualizações do Windows Insider, diretamente do Windows Update.';
$s['uupDumpDescSub'] = '%s no UUP dump. O UUP dump permite que você baixe arquivos por meio da "Unified Update Platform (Plataforma de Atualizações Unificada)", como atualizações do Windows Insider, diretamente do Windows Update.'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.

//index.php
$s['slogan'] = 'Faça o download de arquivos UUP dos servidores do Windows Update com facilidade.';
$s['quickOptions'] = 'Opções rápidas';
$s['tHeadReleaseType'] = 'Tipo de Release';
$s['tHeadDescription'] = 'Descrição';
$s['tHeadArchitectures'] = 'Arquitetura';
$s['latestPublicRelease'] = 'Recente Compilação de Lançamento Público';
$s['latestPublicReleaseSub'] = 'Última Compilação Atualizada para usuários regulares.';
$s['latestDevRelease'] = 'Recente Compilação do Canal de Desenvolvimento';
$s['latestDevReleaseSub'] = 'Compilações pouco confiáveis com os recursos mais recentes.<br>Ideal para usuários altamente técnicos.';
$s['latestBetaRelease'] = 'Recente Compilação do Canal Beta';
$s['latestBetaReleaseSub'] = 'Compilações confiáveis com a maioria dos recursos futuros disponíveis.<br>Ideal para os usuários iniciantes.';
$s['latestRPRelease'] = 'Recente Compilação de Prévias de Lançamento';
$s['latestRPReleaseSub'] = 'Compilações confiáveis para ter um vislumbre do próximo lançamento.<br>Ideal para experimentar os próximos lançamentos.';
$s['advOptions'] = 'Opções Avançadas';
$s['browseBuilds'] = 'Pesquisar na lista completa de compilações conhecidas';
$s['browseBuildsSub'] = 'Escolha uma compilação que já seja conhecida no banco de dados local e transfira-a.';
$s['fetchLatest'] = 'Buscar a compilação mais recente';
$s['fetchLatestSub'] = 'Recupere a informação da compilação mais recente dos servidores do Windows Update.';
$s['newlyAdded'] = 'Novas compilações adicionadas';
$s['dateAdded'] = 'Adicionada em';

//newbuild.php
$s['newBuild'] = 'Nova compilação';
$s['addNewBuild'] = 'Adicionar nova compilação';
$s['selectOptions'] = 'Selecione uma opção';
$s['newBuildNextText'] = 'Clique no botão <i>Avançar</i> para começar a pesquisar com as opções especificadas.';
$s['newBuildUsing'] = 'Usando esta página';
$s['newBuildUsingText'] = 'Esta página deve ser usada por usuários avançados, que gostariam de adicionar uma compilação não encontrada no site. Caso você queira usar um dos parâmetros mais usados, por favor, use uma das <i>opções rápidas</i> encontradas na página inicial.';
$s['optionsNotice'] = 'Aviso de opções';
$s['optionsNoticeText'] = 'As opções encontradas aqui configuram como o cliente subjacente do Windows Update se reporta aos servidores da Microsoft. É crucial configurá-los corretamente, caso contrário, você receberá um erro.';

//known.php
$s['browseKnown'] = 'Pesquisar compilações conhecidas';
$s['chooseBuild'] = 'Selecione a compilação';
$s['weFoundBuilds'] = 'Encontrámos <b>%d</b> compilações para a sua consulta'; //We have found <b>692</b> builds for your query.
$s['sortByDate'] = 'Ordenar resultados por data de adição';
$s['nextPage'] = 'Avançar';
$s['prevPage'] = 'Retornar';
$s['pageOf'] = 'Página %d de %d'; //Página 1 de 48

//fetchupd.php
$s['responseFromServer'] = 'Resposta do servidor';
$s['foundUpdates'] = 'Encontrada(s) %d Atualização(ões)'; //Encontrada(s) 1 Atualização(ões)$s['foundTheseUpdates'] = 'As seguintes atualizações foram encontradas. Clique no nome da atualização desejada para continuar';
$s['foundTheseUpdates'] = 'A(s) seguinte(s) atualização(ões) foi/foram encontrada(s). Clique no nome da atualização desejada para continuar.';
$s['buildNumber'] = 'Número da compilação: %s'; //Número da compilação: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Selecionar idioma para %s'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Selecione o idioma';
$s['chooseLangDesc'] = 'Escolha o seu idioma desejado';
$s['allLangs'] = 'Todos os idiomas';
$s['selLangFiles'] = 'Ficheiros';
$s['allFiles'] = 'Todos os ficheiros';
$s['wubOnly'] = 'Apenas WindowsUpdateBox';
$s['updateOnly'] = 'Atualizar apenas';
$s['selectLangInfoText1'] = 'Clique no botão <i>Avançar</i> para selecionar a edição que deseja transferir.';
$s['selectLangInfoText2'] = 'O WindowsUpdateBox.exe e a Atualização Cumulativa podem ser encontrados no idioma <i>Todos os idiomas</i>.';
$s['allLangsWarn'] = 'A opção <i>Todos os idiomas</i> não suporta a seleção de edição.';
$s['clickNextToOpenFindFiles'] = 'Clique no botão <i>Avançar</i> para abrir a página que permite localizar ficheiros.';
//$s['noLangsAvailable'] = 'Não há idiomas disponíveis para esta compilação.<br>Esta compilação não pode ser convertida em uma imagem ISO.<br>Consulte <a target=_blank href="https://github. com/uup-dump-dev/website-public/blob/master/FAQ.md">FAQ</a> para detalhes.';
$s['noLangsAvailable'] = 'Não há idiomas disponíveis para esta compilação.<br>Esta compilação não pode ser convertida em uma imagem ISO.<br>Consulte o Perguntas Frequntes "FAQ" para obter detalhes.';
$s['browseFiles'] = 'Procurar ficheiros';
$s['browseFilesDesc'] = 'Navegue rapidamente pelos ficheiros na versão selecionada';
$s['searchFiles'] = 'Procurar ficheiros';
$s['toSearchForCUUseQuery'] = 'Para procurar atualizações cumulativas use <i>% s</i> na pesquisa.'; //Para procurar atualizações cumulativas use <i>Windows 10 KB</i> na pesquisa.
$s['updateNotProcessed'] = 'UUP dump ainda não processou os metadados desta atualização - isso acontece automaticamente uma vez a cada %d minutos. Por enquanto, você pode navegar pela lista de arquivos de atualização.'; //UUP dump ainda não processou os metadados desta atualização - isso acontece automaticamente uma vez a cada 30 minutos. Por enquanto, você pode navegar pela lista de arquivos de atualização.
$s['updateIsBlocked'] = 'Esta atualização tem problemas conhecidos que impedem a criação de um ISO funcional. Por causa disso, você pode navegar somente manualmente por seus arquivos.';

//selectedition.php
$s['selectEditionFor'] = 'Selecione a edição para %s'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Selecione a edição';
$s['chooseEditionDesc'] = 'Escolha a sua edição desejada';
$s['allEditions'] = 'Todas as edições';
$s['selectEditionInfoText'] = 'Clique no botão <i>Avançar</i> para abrir a página de resumo da sua seleção.';
$s['additionalEditionsInfo'] = 'Se precisar de uma edição adicional, que pode ser encontrada na tabela à direita, selecione a edição necessária e clique em <i>Avançar</i>. Na página de resumo, poderá selecionar as edições adicionais desejadas sob a opção de download apropriada. ';
$s['showHiddenEditions'] = 'Mostrar edições ocultas (não recomendado)';

//download.php
$s['summary'] = 'Resumo';
$s['summaryDesc'] = 'Reveja a sua seleção e escolha o método de download';
$s['summaryFor'] = 'Resumo para %s'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Resumo da sua seleção';
$s['browseList'] = 'Procure uma lista de ficheiros';
$s['browseListDesc'] = 'Abre uma página com a lista de arquivos no conjunto UUP para download manual.';
$s['aria2Opt1'] = 'Faça o download usando aria2';
$s['aria2Opt1Desc'] = 'Transfira facilmente o conjunto UUP selecionado usando aria2.';
$s['aria2Opt2'] = 'Transfira usando aria2 e converta';
$s['aria2Opt2Desc'] = 'Transfira facilmente o conjunto UUP selecionado usando aria2 e converta-o para ISO.';
$s['aria2Opt3'] = 'Faça o download usando aria2, converta e crie edições adicionais';
$s['aria2Opt3Desc'] = 'Transfira facilmente o conjunto UUP selecionado usando aria2, converta, crie edições adicionais e finalmente crie uma imagem ISO.';
$s['jsRequiredToConf'] = 'O JavaScript é necessário para configurar e usar essa opção.';
$s['selAdditionalEditions'] = 'Selecione edições adicionais';
$s['noAdditionalEditions'] = 'Nenhuma edição adicional está disponível para esta seleção.';
$s['learnMore'] = 'Saber mais';
$s['learnMoreAdditionalEditions1'] = 'Esta opção permite a criação automática de edições adicionais selecionadas.';
$s['learnMoreAdditionalEditions2'] = 'A lista de edições adicionais é determinada pelas edições-base selecionadas. Abaixo, pode conferir uma lista de edições-base que são necessárias para criar edições adicionais desejadas:';
$s['learnMoreUpdates1'] = 'As atualizações serão integradas à imagem convertida somente quando o script de conversão for executado nos seguintes sistemas:';
$s['learnMoreUpdates2'] = 'Se executar o script de conversão em qualquer outro sistema, as atualizações não serão integradas à imagem resultante.';
$s['systemWithAdk'] = '%s com o Windows 10 ADK instalado'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = 'Atualizações adicionais';
$s['additionalUpdatesDesc'] = 'Este conjunto UUP contém atualizações adicionais que serão integradas durante o processo de conversão, aumentando significativamente o tempo de criação.';
$s['browseUpdatesList'] = 'Pesquise na lista de atualizações';
$s['selectDownloadOptions'] = 'Selecione as suas opções de download';
$s['selectDownloadOptionsSub'] = 'Configure como gostaria de transferir a sua seleção';
$s['downloadMethod'] = 'Método de download';
$s['conversionOptions'] = 'Opções de conversão';
$s['convOpt1'] = 'Criar ISO com install.esd em vez de install.wim';
$s['convOpt2'] = 'Integrar atualizações quando disponíveis (apenas no conversor Windows)';
$s['convOpt3'] = 'Execute a limpeza após a integração das atualizações (apenas no conversor do Windows)';
$s['convOpt4'] = 'Integrar .NET Framework 3.5 (apenas no conversor Windows)';
$s['startDownload'] = 'Criar pacote de download';
$s['legalCopeHarder'] = 'Ao clicar no botão <i>Criar pacote de download</i>, você concorda com o seguinte:';
$s['legalCope1'] = 'As imagens de instalação criadas usando os scripts fornecidos pelo UUP dump destinam-se apenas para <b>fins de avaliação</b>';
$s['legalCope2'] = 'As imagens e suas implantações <b>não são suportadas</b> de forma alguma pela Microsoft Corporation';
$s['legalCope3v2'] = '<b>Os autores não são responsáveis por quaisquer danos</b> causados pelo uso indevido do site';
$s['win1122h2OrLater'] = 'Windows 11, versão 22H2 ou posterior';
$s['requiresWindows102004'] = 'Esta compilação requer o uso do Windows 10, versão 2004 ou posterior para que o ISO seja criado corretamente. Scripts para outras plataformas produzirão um ISO corrompido.';

//get.php
$s['listOfFilesFor'] = 'Lista de ficheiros para %s'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Tamanho total dos ficheiros: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'Script de renomeação de arquivos';
$s['fileRenamingScriptDesc1'] = 'O script que pode ser encontrado abaixo pode ser usado para renomear rapidamente arquivos transferidos.';
$s['fileRenamingScriptDesc2'] = 'Basta copiar o conteúdo do formulário abaixo para o novo arquivo com a extensão <code>cmd</code>, colocá-lo na pasta com os arquivos transferidos e executar.';
$s['sha1File'] = 'Ficheiro de checksums SHA-1';
$s['sha1FileDesc'] = 'Pode usar esse ficheiro para verificar rapidamente se os arquivos foram transferidos corretamente.';
$s['aria2NoticeTitle'] = 'Fazer o download usando o aviso de opções aria2';
$s['aria2NoticeText1'] = 'Fazer o download usando as opções aria2 cria um ficheiro que precisa de ser transferido. O ficheiro trnsferido contém todos os arquivos necessários para realizar a tarefa selecionada.';
$s['aria2NoticeText2'] = 'Para iniciar o processo de download, use um script para a sua plataforma:';
$s['aria2NoticeText3'] = 'Aria2 é um projeto de código aberto. Pode encontrá-lo aqui: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'O script de conversão UUP (versão Windows) foi criado por %s.'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'O script de conversão UUP (versão Linux, versão macOS) é de código aberto. Pode encontrá-lo aqui: %s.'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Encontre ficheiros em %s'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Se quiser renomear rapidamente os ficheiros transferidos desta página, pode gerar um script de renomeação, que fará isso automaticamente.';
$s['fileRenamingScriptGenW'] = 'Gerar script de renomeação (Windows)';
$s['fileRenamingScriptGenL'] = 'Gerar script de renomeação (Linux, macOS)';
$s['searchForFiles'] = 'Procurar ficheiros ...';
$s['weFoundFiles'] = 'Encontrámos ficheiros <b>%d</b> para a sua consulta.'; //We have found <b>692</b> files for your query.
$s['sizeOfShownFiles'] = 'Tamanho dos arquivos mostrados: %s'; //Tamanho dos arquivos mostrados: 2,86 GiB

//Error pages
$s['error'] = 'Erro';
$s['requestNotSuccessful'] = 'Solicitação sem sucesso';
$s['anErrorHasOccurred'] = 'Ocorreu um erro ao tentar processar a sua solicitação.';
$s['generatedPackNotAvailable'] = 'Pacote gerado não está disponível';
$s['generatedPackNotAvailableDesc'] = 'A atualização que está a tentar trnsferir não possui um pacote gerado que forneça informações completas sobre idiomas, edições e ficheiros disponíveis. O pacote de fallback será usado e pode não fornecer as informações corretas. Se o download falhar por causa disso, aguarde que o pacote gerado automaticamente fique disponível.';
$s['arm64Warning2022h'] = 'Selecionou uma compilação ARM64 que é <b> compatível somente com dispositivos baseados em ARM64 </b> e não funcionará com PCs baseados em Intel ou AMD. Para PCs com <b>64bits</b>, use as compilações <b>amd64</b>. Para computadores com <b>32 bits</b>, use as compilações <b>x86</b>. Se tiver a certeza absoluta de que o dispositivo de destino é baseado em ARM64, pode ignorar com segurança esta mensagem.';
$s['arm64Warning2022b'] = '<p>Esta versão é compatível apenas com:</p><ul><li>Surface Pro X</li><li>Raspberry Pi</li><li>Apple Mac M1</li><li>outros telefones celulares glorificados</li></ul><p>Os autores de dump UUP <i>não possuem desses dispositivos</i> e, portanto, <b>absolutamente nenhum suporte será fornecido</b>.</p>';

//Error messages
$s['error_ERROR'] = 'Erro genérico.';
$s['error_UNSUPPORTED_API'] = 'A versão da API instalada não é compatível com esta versão do dump UUP.';
$s['error_NO_FILEINFO_DIR'] = 'O diretório (fileinfo) não existe.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'O banco de dados (fileinfo) não contém nenhuma compilação.';
$s['error_SEARCH_NO_RESULTS'] = 'Nenhum item pode ser encontrado para a consulta especificada.';
$s['error_UNKNOWN_ARCH'] = 'Arquitetura do processador desconhecida.';
$s['error_UNKNOWN_RING'] = 'Ring desconhecido.';
$s['error_UNKNOWN_FLIGHT'] = 'Flight desconhecido.';
$s['error_UNKNOWN_COMBINATION'] = 'A combinação de flight e ring não está correta. Skip ahead só é suportado para Insider Fast ring.';
$s['error_ILLEGAL_BUILD'] = 'O número da compilação especificado é menor que %d ou maior que %d.'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = 'A compilação secundária especificada está incorreta';
$s['error_NO_UPDATE_FOUND'] = 'O servidor não devolveu nenhuma atualização.';
$s['error_XML_PARSE_ERROR'] = 'A análise do XML de resposta falhou. Isto pode indicar um problema temporário com servidores da Microsoft. Tente novamente mais tarde.';
$s['error_EMPTY_FILELIST'] = 'O servidor retornou uma lista vazia de ficheiros.';
$s['error_NO_FILES'] = 'Não há ficheiros disponíveis para sua seleção.';
$s['error_NOT_FOUND'] = 'A seleção especificada não pode ser encontrada.';
$s['error_MISSING_FILES'] = 'O conjunto UUP selecionado tem alguns ficheiros ausentes.';
$s['error_NO_METADATA_ESD'] = 'Não há ficheiros ESD de metadados disponíveis para a sua seleção.';
$s['error_UNSUPPORTED_LANG'] = 'O idioma especificado não é suportado.';
$s['error_UNSPECIFIED_LANG'] = 'O idioma não foi especificado.';
$s['error_UNSUPPORTED_EDITION'] = 'A edição especificada não é suportada.';
$s['error_UNSUPPORTED_COMBINATION'] = 'A combinação de idioma e edição não está correta.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'A atualização selecionada não contém Atualizações Cumulativas.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Informações sobre a atualização especificada não existem no banco de dados.';
$s['error_KEY_NOT_EXISTS'] = 'A chave especificada não existe nas informações de atualização.';
$s['error_UNSPECIFIED_UPDATE'] = 'O ID de atualização não foi especificado.';
$s['error_INCORRECT_ID'] = 'O ID de atualização especificado não está correto. Certifique-se de que o ID de atualização especificado está correto.';
$s['error_RATE_LIMITED'] = 'É tarifa limitada. Por favor, tente novamente dentro de alguns segundos.';
$s['error_UNSPECIFIED_VE'] = 'Você não selecionou nenhuma edição adicional. Caso não deseje criar edições adicionais, por favor, use a opção (Download usando aria2 e converter).';
$s['error_VE_UNAVAILABLE'] = 'Edições adicionais não são suportadas para esta seleção.';
$s['error_INVALID_PAGE'] = 'A página especificada é inválida';
$s['errorNoMessage'] = 'Mensagem de erro não disponível.';

//Languages
$s['lang_ar-sa'] = 'Árabe (Arábia Saudita)';
$s['lang_bg-bg'] = 'Búlgaro';
$s['lang_cs-cz'] = 'Checo';
$s['lang_da-dk'] = 'Dinamarquês';
$s['lang_de-de'] = 'Alemão';
$s['lang_el-gr'] = 'Grego';
$s['lang_en-gb'] = 'Inglês (Reino Unido)';
$s['lang_en-us'] = 'Inglês (Estados Unidos)';
$s['lang_es-es'] = 'Espanhol (Espanha)';
$s['lang_es-mx'] = 'Espanhol (México)';
$s['lang_et-ee'] = 'Estoniano';
$s['lang_fi-fi'] = 'Estoniano';
$s['lang_fr-ca'] = 'Francês (Canadá)';
$s['lang_fr-fr'] = 'Francês (França)';
$s['lang_he-il'] = 'Hebraico';
$s['lang_hr-hr'] = 'Croata';
$s['lang_hu-hu'] = 'Croata';
$s['lang_it-it'] = 'Italiano';
$s['lang_ja-jp'] = 'Japonês';
$s['lang_ko-kr'] = 'Coreano';
$s['lang_lt-lt'] = 'Lituano';
$s['lang_lv-lv'] = 'Letão';
$s['lang_nb-no'] = 'Norueguês (Bokmal)';
$s['lang_nl-nl'] = 'Holandês';
$s['lang_pl-pl'] = 'Polaco';
$s['lang_pt-br'] = 'Português (Brasil)';
$s['lang_pt-pt'] = 'Português (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Romeno';
$s['lang_ru-ru'] = 'Russo';
$s['lang_sk-sk'] = 'Eslovaco';
$s['lang_sl-si'] = 'Esloveno';
$s['lang_sr-latn-rs'] = 'Sérvio (Latino)';
$s['lang_sv-se'] = 'Sueco';
$s['lang_th-th'] = 'Tailandês';
$s['lang_tr-tr'] = 'Tailandês';
$s['lang_uk-ua'] = 'Ucraniano';
$s['lang_zh-cn'] = 'Chinês (Simplificado)';
$s['lang_zh-hk'] = 'Chinês (Hong Kong)';
$s['lang_zh-tw'] = 'Chinês (Tradicional)';

//Channels
$s['channel_skipAhead'] = 'Seguindo em frente - "Skip Ahead"';
$s['channel_dev'] = 'Canal Dev';
$s['channel_beta'] = 'Canal Beta';
$s['channel_releasepreview'] = 'Canal Prévia de Lançamentos "Release Preview"';
$s['channel_retail'] = 'Retail';

//latest.php
$s['latestFetchLatest'] = 'Pesquisar a compilação mais recente';
$s['latestTestingOnly'] = 'Somente para teste';
$s['latestTestingOnlyWarn'] = '<b> Esta página é fornecida apenas para testes. </ b> As compilações recuperadas por esta página que não foram processadas pelo servidor de back-end serão fornecidas usando os pacotes de fallback, que podem fornecer resultados incompletos. Se quiser fazer o download de uma compilação já conhecida, para obter a melhor experiência, use a página de compilações conhecidas.';
$s['latestDoYouWantKnown'] = 'Gostaria de continuar a pesquisar na lista de compilações conhecidas?';
$s['chooseOptions'] = 'Selecionar opções';
$s['buildOfPretendedClient'] = 'Número da compilação do cliente pretendido do Windows Update';
$s['editionOfPretendedClient'] = 'Edição do sistema pretendido';
$s['skipAheadLabel'] = 'Skip ahead flight';
$s['skipAheadOption'] = 'Use o flightl ahead flighting (apenas no Insider Fast)';
$s['fetchUpdates'] = 'Pesquisar atualizações';
$s['fetchUpdatesInfo'] = 'Clique no botão <i>Pesquisar atualizações</i> para enviar a sua solicitação para os servidores do Windows Update.';

