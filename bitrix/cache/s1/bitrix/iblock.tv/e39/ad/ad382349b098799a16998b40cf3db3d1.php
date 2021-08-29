<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001627621859';
$dateexpire = '001627625459';
$ser_content = 'a:2:{s:7:"CONTENT";s:3247:"	<div id="bx_tv_block_0" style="width: 400px;">
				<video id="bitrix_tv_videojs_0" class="video-js vjs-default-skin vjs-big-play-centered" width="400" height="300">
		</video><noscript>В вашем браузере отключен JavaScript</noscript>
	<script>
		BX.ready(function()
		{
			BX.message({\'ENABLE_JAVASCRIPT\':\'В вашем браузере отключен JavaScript\',\'JS_PLAYLISTERROR\':\'Произошла ошибка при загрузке списка воспроизведения\',\'JS_CLICKTOPLAY\':\'Нажмите для просмотра\',\'JS_LINK\':\'Скачать...\',\'PLAYER_LOADING\':\'Загрузка плеера\',\'PLAYER_FLASH_REQUIRED\':\'Плеер не может проиграть видео. Скорее всего у вас не установлен или отключен Adobe Flash Player\',\'PLAYER_FLASH_CHECK\':\'Возможно, у вас не установлен или отключен Adobe Flash Player\'});			var init_player_bitrix_tv_videojs_0 = function()
			{
				var player = new BX.Fileman.Player(\'bitrix_tv_videojs_0\', {\'autoplay\':false,\'preload\':false,\'controls\':true,\'height\':\'300\',\'width\':\'400\',\'techOrder\':[\'html5\',\'flash\'],\'fluid\':false,\'notSupportedMessage\':\'Не найдено подходящего способа для воспроизведения\',\'errorMessages\':{\'4\':\'\'},\'sources\':[{\'title\':\'Адаптивный интерфейс\',\'src\':\'http://www.1c-bitrix.ru/video/03_interface.flv\',\'thumbnail\':\'\',\'type\':\'video/x-flv\'},{\'title\':\'Типовые операции\',\'src\':\'http://www.1c-bitrix.ru/video/02_typ.flv\',\'thumbnail\':\'\',\'type\':\'video/x-flv\'},{\'title\':\'Вступление\',\'src\':\'/upload/intro.flv\',\'thumbnail\':\'\',\'type\':\'video/x-flv\'}],\'skin\':\'vjs-default-skin\',\'hasFlash\':true,\'flash\':{\'swf\':\'/bitrix/js/fileman/player/videojs/video-js.swf\'},\'playlistParams\':{\'videos\':[{\'title\':\'Адаптивный интерфейс\',\'src\':\'http://www.1c-bitrix.ru/video/03_interface.flv\',\'thumbnail\':\'\',\'type\':\'video/x-flv\'},{\'title\':\'Типовые операции\',\'src\':\'http://www.1c-bitrix.ru/video/02_typ.flv\',\'thumbnail\':\'\',\'type\':\'video/x-flv\'},{\'title\':\'Вступление\',\'src\':\'/upload/intro.flv\',\'thumbnail\':\'\',\'type\':\'video/x-flv\'}],\'playlist\':{\'hideSidebar\':false,\'upNext\':false,\'hideIcons\':false,\'thumbnailSize\':\'150\',\'items\':\'3\'}}});
				if(!player.lazyload)
				{
					player.init();
				}
			};
			if(typeof videojs == \'undefined\')
			{
				window.videojs_player_timout = true;
								BX.loadCSS([\'/bitrix/js/fileman/player/videojs/video-js.css?162736686146745\',\'/bitrix/js/fileman/player/videojs/videojs-playlist.css?16273668611209\']);
								BX.loadScript([\'/bitrix/js/fileman/player/fileman_player.js?162736686114184\',\'/bitrix/js/fileman/player/videojs/video.js?1627366861879402\',\'/bitrix/js/fileman/player/videojs/videojs-playlist-dev.js?162736686112856\'], function()
				{
					setTimeout(function()
					{
						init_player_bitrix_tv_videojs_0();
					}, 100);
				});
							}
			else
			{
				if(window.videojs_player_timout === true)
				{
					setTimeout(function() {
						init_player_bitrix_tv_videojs_0();
					}, 100);
				}
				else
				{
					init_player_bitrix_tv_videojs_0();
				}
			}
		});
	</script>
	</div>
<br clear="all"/>";s:4:"VARS";a:2:{s:8:"arResult";a:4:{s:8:"CAN_EDIT";s:1:"N";s:14:"IBLOCK_TYPE_ID";s:8:"services";s:9:"RAW_FILES";a:3:{s:46:"http://www.1c-bitrix.ru/video/03_interface.flv";a:2:{s:2:"ID";s:2:"17";s:4:"NAME";s:39:"Адаптивный интерфейс";}s:40:"http://www.1c-bitrix.ru/video/02_typ.flv";a:2:{s:2:"ID";s:2:"16";s:4:"NAME";s:31:"Типовые операции";}s:17:"/upload/intro.flv";a:2:{s:2:"ID";s:2:"15";s:4:"NAME";s:20:"Вступление";}}s:9:"IBLOCK_ID";s:1:"4";}s:18:"templateCachedData";a:4:{s:9:"frameMode";b:1;s:17:"__currentCounters";a:1:{s:13:"bitrix:player";i:1;}s:14:"__children_css";a:1:{i:0;s:61:"/bitrix/components/bitrix/player/templates/.default/style.css";}s:18:"__children_epilogs";a:1:{i:0;a:5:{s:10:"epilogFile";s:72:"/bitrix/components/bitrix/player/templates/.default/component_epilog.php";s:12:"templateName";s:8:".default";s:12:"templateFile";s:64:"/bitrix/components/bitrix/player/templates/.default/template.php";s:14:"templateFolder";s:51:"/bitrix/components/bitrix/player/templates/.default";s:12:"templateData";b:0;}}}}}';
return true;
?>