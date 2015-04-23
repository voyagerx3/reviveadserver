<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

// Main strings
$GLOBALS['strChooseSection']			= "Выберите раздел";


// Priority
$GLOBALS['strRecalculatePriority']		= "Пересчитать приоритеты";
$GLOBALS['strHighPriorityCampaigns']		= "Кампании с высоким приоритетом";
$GLOBALS['strAdViewsAssigned']			= "Выделено просмотров";
$GLOBALS['strLowPriorityCampaigns']		= "Кампании с низким приоритетом";
$GLOBALS['strPredictedAdViews']			= "Предсказано просмотров";
$GLOBALS['strPriorityDaysRunning']		= "Сейчас доступно {days} дней статистики, на которой ".MAX_PRODUCT_NAME." может основывать свои предсказания. ";
$GLOBALS['strPriorityBasedLastWeek']		= "Предсказания основаны на данных по этой и прошлой неделе. ";
$GLOBALS['strPriorityBasedYesterday']		= "Предсказание основано на данных за вчера. ";
$GLOBALS['strPriorityNoData']			= "Недостаточно данных для надёжного предсказания количества показов, которые данный сервер сгенерирует сегодня. Назначение проритетов будет основываться на статистике, собираемой в реальном времени. ";
$GLOBALS['strPriorityEnoughAdViews']		= "Должно быть достаточно показов для удовлетворения требований всех высокоприоритетных кампаний. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "Неочевидно, будет ли сегодня сгенерировано достаточно показов для удовлетворения требований всех высокопроритетных кампаний. ";


// Banner cache
$GLOBALS['strRebuildBannerCache']		= "Построить кэш баннеров заново";
$GLOBALS['strBannerCacheExplaination']		= "\n	Кэш баннеров содержит копию HTML-кода, используемого для показа баннера. Использование кэша позволяет ускорить\n	доставку баннеров, поскольку HTML-код не нужно генерировать для каждого показа баннера. Поскольку\n	кэш содержит жёстко закодированные ссылки на расположение и самих баннеров, кэш нужно перестраивать\n	при каждом перемещении на веб-сервере.\n";


// Zone cache
$GLOBALS['strAge']				= "Срок";
$GLOBALS['strCache']                    = "Кэш доставки";
$GLOBALS['strRebuildDeliveryCache']                     = "Обновить кэш баннеров";
$GLOBALS['strDeliveryCacheExplaination']                = "\n        Кэш доставки используется для ускорения доставки баннеров. Кэш содержит копию всех баннеров,\n        привязанных к зоне/ Это экономит несколько запросов к базе данных в момент фактического показа баннера пользователю. Кэш\n        обычно обновляется после каждого изменения в зоне или одном из привязанных к ней баннеров, но, возможно, он может устаревать. Поэтому\n        кэш также обновл\ется автоматически каждый час, или может быть обновлён вручную.\n";
$GLOBALS['strDeliveryCacheSharedMem']           = "\n        Для хранения кэша доставки используется разделяема\ память.\n";
$GLOBALS['strDeliveryCacheDatabase']            = "\n        Для хранения кэша доставки используется база данных.\n";


// Storage
$GLOBALS['strStorage']				= "Хранение";
$GLOBALS['strMoveToDirectory']			= "Переместить картинки из БД в каталог";
$GLOBALS['strStorageExplaination']		= "\n	Картинки, используемые локальными баннерами, хранятся в базе данных или в каталоге. Если вы будете хранить картинки \n	в каталоге на диске, нагрузка на базу данных уменьшится, и это приведёт к ускорению.\n";


// Storage
$GLOBALS['strStatisticsExplaination']		= "Вы включили режим <i>компактной статистики</i>, но ваши старые данные остаются в подробном формате. Хотите ли вы конвертировать ваши данные в компактный формат?";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Производится поиск обновлений. Пожалуйста, подождите...";
$GLOBALS['strAvailableUpdates']			= "Доступные обновления";
$GLOBALS['strDownloadZip']			= "Скачать (.zip)";
$GLOBALS['strDownloadGZip']			= "Скачать (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "Доступна новас версия ". MAX_PRODUCT_NAME ."                              \n\nХотите узнать больше \nоб этом обновлении?";
$GLOBALS['strUpdateAlertSecurity']		= "Доступна новас версия ". MAX_PRODUCT_NAME ."                                \n\nРекомендуется произвести обновление \nкак можно скорее, так как ста \nверсия содержит одно или несколько исправлений, относящихся к безопасности.";

$GLOBALS['strUpdateServerDown']			= "\n    По неизвестной причине невозможно получить информацию <br />\n	о возможных обновлениях. Пожалуйста, попытайтесь позднее.\n";

$GLOBALS['strNoNewVersionAvailable']		= "\n	Ваша версия ". MAX_PRODUCT_NAME ." не требует обновления. Никаких обновлений в настоящее время нет.\n";

$GLOBALS['strNewVersionAvailable']		= "\n	<b>Доступна новас версия </b><br /> Рекомендуется установить это обновление,\n	поскольку оно может исправить некоторые существующие проблемы и добавить новую функциональность. За дополнительной\n	информацией об обновлении обратитесь к документации, включенной в указанные ниже файлы.\n";

$GLOBALS['strSecurityUpdate']			= "\n	<b>Настоятельно рекомендуется установить это обновление как можно скорее, поскольку оно содержит несколько\n	исправлений, связанных с безопасностью.</b> Версия , которую вы сейчас используете, может быть \n	подвержена определённым атакам, и, вероятно, небезопасна. За дополнительной\n	информацией об обновлении обратитесь к документации, включённой в указанные ниже файлы.\n";

$GLOBALS['strNotAbleToCheck']                   = "\n        <b>Поскольку модуль поддержки XML не установлен на вашем сервере,  ". MAX_PRODUCT_NAME ." не может\n    проверить наличие более свежей версии.</b>\n";

$GLOBALS['strForUpdatesLookOnWebsite']  = "\n        Если вы хотите узнать, нет ли более новой версии, посетите наш веб-сайт.\n";

$GLOBALS['strClickToVisitWebsite']              = "\n        Щёлкните здесь, чтобы посетить наш веб-сайт\n";


// Stats conversion
$GLOBALS['strConverting']			= "Преобразование";
$GLOBALS['strConvertingStats']			= "Преобразовываем статистики...";
$GLOBALS['strConvertStats']			= "Преобразовать статистику";
$GLOBALS['strConvertAdViews']			= "Показы преобразованы,";
$GLOBALS['strConvertAdClicks']			= "Клики преобразованы...";
$GLOBALS['strConvertNothing']			= "Нечего преобразовывать...";
$GLOBALS['strConvertFinished']			= "Закончено...";

$GLOBALS['strConvertExplaination']		= "\n	Вы сейчас используете компактный формат хранения вашей статистики, но у вас всё еще есть <br />\n	некоторые данные в расширенном формате. До тех пор пока расширенная статистика не будет  <br />\n	преобразована в компактный формат, она не будет использоваться при просмотре этих страниц.  <br />\n	Перед преобразованием статистики, сделайте резервную копию базы данных!  <br />\n	Вы хотите преобразовать вашу расширенную статистику в новый компактный формат? <br />\n";

$GLOBALS['strConvertingExplaination']		= "\n	Вся оставшаяся расширенная статистика сейчас преобразуется в компактный формат. <br />\n	В зависимости от того, сколько показов сохранено в расширенном формате, это может занять  <br />\n	несколько минут. Пожалуйста, подождите окончания преобразования, прежде чем вы перейдёте на другие <br />\n	страницыpages. Ниже вы увидите журнал всех изменений, произвёденных в базе данных. <br />\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\n	Преобразование остававшейся расширенной статистики было успешным и все данные <br />\n	должны быть теперь доступны. Ниже вы можете увидеть журнал всех изменений, <br />\n	произведённых в базе данных.<br />\n";




// Note: new translatiosn not found in original lang files but found in CSV
$GLOBALS['strCheckBannerCache'] = "Проверить кэш баннеров";
$GLOBALS['strBannerCacheErrorsFound'] = "В процессе проверки кэша баннеров были обнаружены ошибки. До ручного исправления этих ошибок баннеры показываться не будут.";
$GLOBALS['strBannerCacheOK'] = "В процессе проверки кэша баннеров ошибок не обнаружено.";
$GLOBALS['strBannerCacheDifferencesFound'] = "В процессе проверки кэша баннеров обнаружено устаревание кэша. Нажмите на ссылку для автоматического обновления кэша.";
$GLOBALS['strBannerCacheRebuildButton'] = "Обновить";
$GLOBALS['strDeliveryCacheFiles'] = "\n        Для хранения кэша доставки используются файлы на сервере.\n";
$GLOBALS['strCurrentlyUsing'] = "В настоящее время вы используете";
$GLOBALS['strRunningOn'] = "запущенную на";
$GLOBALS['strAndPlain'] = "и";
$GLOBALS['strBannerCacheFixed'] = "Автоматическое обновление кеша произведено успешно. Кеш баннеров работает нормально.";


// Note: New translations not found in original lang files but found in CSV
$GLOBALS['strEncoding'] = "Кодировка";
$GLOBALS['strEncodingExplaination'] = "". MAX_PRODUCT_NAME ." сохраняет данные в кодировке UTF-8 format.<br />Мы попытаемся конвертировать ваши данные автоматически.<br />Если после обновления вы обнаружите поврежденные данные, и вы знаете исходную кодировку этих данных, вы можете использовать этот инструмент для конвертации ваших данных в UTF-8";
$GLOBALS['strEncodingConvertFrom'] = "Исходная кодировка:";
$GLOBALS['strEncodingConvert'] = "Преобразовать";
$GLOBALS['strEncodingConvertTest'] = "Тестировать преобразование";
$GLOBALS['strConvertThese'] = "Если вы продолжите, следующие данные будут изменены";
$GLOBALS['strAppendCodes'] = "Добавить коды";
$GLOBALS['strScheduledMaintenanceHasntRun'] = "<b>Запланированное обслуживание не запускалось в последний час. Возможно, обслуживание не настроено или настроено некорректно.</b>";
$GLOBALS['strAutoMantenaceEnabledAndHasntRun'] = "Автоматическое обслуживание разрешено, но ни разу не запускалось. для лучшей производительности рекомендуется настроить <a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>запланированное обслуживание</a>.";
$GLOBALS['strAutoMantenaceDisabledAndHasntRun'] = "Автоматическое обслуживание запрещено. для лучшей производительности рекомендуется настроить <a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>запланированное обслуживание</a>.";
$GLOBALS['strAutoMantenaceEnabledAndRunning'] = "Автоматическое обслуживание разрешено, и работает. для лучшей производительности рекомендуется настроить <a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>запланированное обслуживание</a>.";
$GLOBALS['strAutoMantenaceDisabledAndRunning'] = "Автоматическое обслуживание было отключено. для лучшей производительности рекомендуется настроить <a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>запланированное обслуживание</a>.";
$GLOBALS['strScheduledMantenaceRunning'] = "<b>Запланированное обслуживание работает корректно.</b>";
$GLOBALS['strAutomaticMaintenanceHasRun'] = "<b>Автоматическое обслуживание работает корректно.</b>";
$GLOBALS['strAutoMantenaceEnabled'] = "Автоматическое обслуживание было включено. для лучшей производительности рекомендуется настроить <a href='account-settings-maintenance.php'>запланированное обслуживание</a>.";
$GLOBALS['strAutoMaintenanceDisabled'] = "Автоматическое обслуживание было отключено.";
$GLOBALS['strAutoMaintenanceEnabled'] = "Автоматическое обслуживание было включено. для лучшей производительности рекомендуется настроить <a href='http://". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>запланированное обслуживание</a>.";
$GLOBALS['strCheckACLs'] = "Проверить права доступа";
$GLOBALS['strScheduledMaintenance'] = "Запланированное обслуживание работает корректно.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered'] = "Автоматическое обслуживание настроено, но не запускалось. Автоматическое обслуживание запускается только когда ". MAX_PRODUCT_NAME ." показывает баннеры.";
$GLOBALS['strAutoMaintenanceBestPerformance'] = "для лучшей производительности рекомендуется настроить <a href='". OX_PRODUCT_DOCSURL ."/maintenance.html' target='_blank'>Запланированное обслуживание</a>";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger'] = "Автоматическое обслуживание включено и будет запускаться каждый час";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "для корректной работы ". MAX_PRODUCT_NAME ." необходимо настроить Автоматическое обслуживание или Запланированное обслуживание.";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "для корректной работы ". MAX_PRODUCT_NAME ." необходимо настроить Автоматическое обслуживание или Запланированное обслуживание.";
$GLOBALS['strAllBannerChannelCompiled'] = "Все ограничения каналов и баннеров были пересчитаны";
$GLOBALS['strBannerChannelResult'] = "Ниже приведены результаты проверки ограничений баннеров и каналов";
$GLOBALS['strChannelCompiledLimitationsValid'] = "Все ограничения канала корректны";
$GLOBALS['strBannerCompiledLimitationsValid'] = "Все ограничения баннера корректны";
$GLOBALS['strErrorsFound'] = "Найдены ошибки";
$GLOBALS['strRepairCompiledLimitations'] = "Были найдены несоответствия, которые вы можете исправить нажав кнопку ниже.<br />";
$GLOBALS['strRecompile'] = "Пересчитать";
$GLOBALS['strAppendCodesDesc'] = "При некоторых обстоятельствах механизм доставки может некорректно добавлять коды трекеров, используйте следующие ссылки для проверки кодов в БД.";
$GLOBALS['strCheckAppendCodes'] = "Проверить коды";
$GLOBALS['strAppendCodesRecompiled'] = "Все коды были пересчитаны";
$GLOBALS['strAppendCodesResult'] = "Результаты пересчета кодов";
$GLOBALS['strAppendCodesValid'] = "Все коды корректны";
$GLOBALS['strRepairAppenedCodes'] = "Были найдены некоторые несовпадения. для их коррекции нажмите пожалуйста кнопку ниже.";
$GLOBALS['strScheduledMaintenanceNotRun'] = "Запланированное обслуживание не запускалось в течение последнего часа. Возможно, оно настроено некорректно.";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "При некоторых обстоятельствах механизм доставки может некорректно работать с правами доступа к баннерам и каналам, используйте следующие ссылки для проверки прав доступа в БД.";
$GLOBALS['strServerCommunicationError'] = "<b>Связи с сервером обновлений нет, поэтому ".MAX_PRODUCT_NAME." не в состоянии проверить, доступна ли новас версия в данный момент. Пожалуйста, повторите попытку позже.</b>";
?>