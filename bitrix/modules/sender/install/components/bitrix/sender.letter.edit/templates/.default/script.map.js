{"version":3,"sources":["script.js"],"names":["window","BX","namespace","Sender","Letter","Page","Helper","this","context","prototype","init","params","containerId","actionUri","isFrame","prettyDateFormat","isSaved","isOutside","mess","letterTile","templateChangeButton","selectorNode","getNode","editorNode","titleNode","buttonsNode","templateNameNode","templateTypeNode","templateIdNode","Template","Selector","selector","addCustomEvent","events","templateSelect","onTemplateSelect","bind","selectorClose","closeTemplateSelector","showTemplateSelector","titleEditor","dataNode","disabled","isTemplateShowed","defaultTitle","getPatternTitle","name","onPopupClose","initButtons","top","onCustomEvent","slider","close","UI","Notification","Center","notify","content","outsideSaveSuccess","autoHideDelay","isMSBrowser","classList","add","event","getSlider","_this","self","popupWindow","PopupWindowManager","create","applyClose","titleBar","applyCloseTitle","width","height","padding","closeByEsc","contentColor","angle","buttons","PopupWindowButton","text","applyYes","className","click","removeCustomEvent","allowAction","setTimeout","destroy","applyCancel","show","data","denyAction","navigator","userAgent","match","replace","patternTitle","date","format","template","textContent","value","type","code","dispatch","getNodes","forEach","node","getAttribute","fireEvent","scrollTo","changeDisplayingTemplateSelector","isShow","classShow","classHide","changeClass","changeDisplay","disable","enable","applyChanges","form","getElementsByTagName","appendChild","attrs"],"mappings":"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","file":"script.map.js"}