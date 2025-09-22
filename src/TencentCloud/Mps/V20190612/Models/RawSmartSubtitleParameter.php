<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom smart subtitle parameter.
 *
 * @method integer getSubtitleType() Obtain Smart subtitle language type.
0: source language
1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF. The value can only be 1 or 2 when TranslateSwitch is set to ON.
 * @method void setSubtitleType(integer $SubtitleType) Set Smart subtitle language type.
0: source language
1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF. The value can only be 1 or 2 when TranslateSwitch is set to ON.
 * @method string getVideoSrcLanguage() Obtain Video source language for intelligent caption.
Valid values: 
zh: Simplified Chinese.
en: Eenglish.
Ja: Japanese.
Ko: Korean.
zh-PY: Simplified Chinese, English and Cantonese.
zh-medical: Medical Chinese.
yue: Cantonese.
Vi: Vietnamese.
ms: Malay.
id: Indonesian.
fil: Filipino.
th: Thai.
pt: Portuguese.
tr: Turkish.
ar: Arabic.
es: Spanish.
hi: Hindi
Fr: French.
de: German.
zh-dialect: Chinese dialect
zh_en: Simplified Chinese and English
prime_zh: Simplified Chinese, Chinese Dialect and English.
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) Set Video source language for intelligent caption.
Valid values: 
zh: Simplified Chinese.
en: Eenglish.
Ja: Japanese.
Ko: Korean.
zh-PY: Simplified Chinese, English and Cantonese.
zh-medical: Medical Chinese.
yue: Cantonese.
Vi: Vietnamese.
ms: Malay.
id: Indonesian.
fil: Filipino.
th: Thai.
pt: Portuguese.
tr: Turkish.
ar: Arabic.
es: Spanish.
hi: Hindi
Fr: French.
de: German.
zh-dialect: Chinese dialect
zh_en: Simplified Chinese and English
prime_zh: Simplified Chinese, Chinese Dialect and English.
 * @method string getSubtitleFormat() Obtain Intelligent subtitle file format.
vtt: WebVTT format.
srt: SRT format.
If this field is left blank, no subtitle file will be generated.
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Intelligent subtitle file format.
vtt: WebVTT format.
srt: SRT format.
If this field is left blank, no subtitle file will be generated.
 * @method string getTranslateSwitch() Obtain Subtitle translation switch.
ON: enable translation
OFF: disable translation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTranslateSwitch(string $TranslateSwitch) Set Subtitle translation switch.
ON: enable translation
OFF: disable translation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTranslateDstLanguage() Obtain Target language for subtitle translation.
This field takes effect when TranslateSwitch is set to ON.
Supported languages:
zh: Simplified Chinese
en: English
ja: Japanese
ko: Korean
fr: French
es: Spanish
it: Italian
de: German
tr: Turkish
ru: Russian
pt: Portuguese
vi: Vietnamese
id: Indonesian
ms: Malay
th: Thai
ar: Arabic
hi: Hindi
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) Set Target language for subtitle translation.
This field takes effect when TranslateSwitch is set to ON.
Supported languages:
zh: Simplified Chinese
en: English
ja: Japanese
ko: Korean
fr: French
es: Spanish
it: Italian
de: German
tr: Turkish
ru: Russian
pt: Portuguese
vi: Vietnamese
id: Indonesian
ms: Malay
th: Thai
ar: Arabic
hi: Hindi
Note: This field may return null, indicating that no valid value can be obtained.
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() Obtain ASR hotword lexicon parameter.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) Set ASR hotword lexicon parameter.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExtInfo() Obtain Custom parameter.
 * @method void setExtInfo(string $ExtInfo) Set Custom parameter.
 */
class RawSmartSubtitleParameter extends AbstractModel
{
    /**
     * @var integer Smart subtitle language type.
0: source language
1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF. The value can only be 1 or 2 when TranslateSwitch is set to ON.
     */
    public $SubtitleType;

    /**
     * @var string Video source language for intelligent caption.
Valid values: 
zh: Simplified Chinese.
en: Eenglish.
Ja: Japanese.
Ko: Korean.
zh-PY: Simplified Chinese, English and Cantonese.
zh-medical: Medical Chinese.
yue: Cantonese.
Vi: Vietnamese.
ms: Malay.
id: Indonesian.
fil: Filipino.
th: Thai.
pt: Portuguese.
tr: Turkish.
ar: Arabic.
es: Spanish.
hi: Hindi
Fr: French.
de: German.
zh-dialect: Chinese dialect
zh_en: Simplified Chinese and English
prime_zh: Simplified Chinese, Chinese Dialect and English.
     */
    public $VideoSrcLanguage;

    /**
     * @var string Intelligent subtitle file format.
vtt: WebVTT format.
srt: SRT format.
If this field is left blank, no subtitle file will be generated.
     */
    public $SubtitleFormat;

    /**
     * @var string Subtitle translation switch.
ON: enable translation
OFF: disable translation
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TranslateSwitch;

    /**
     * @var string Target language for subtitle translation.
This field takes effect when TranslateSwitch is set to ON.
Supported languages:
zh: Simplified Chinese
en: English
ja: Japanese
ko: Korean
fr: French
es: Spanish
it: Italian
de: German
tr: Turkish
ru: Russian
pt: Portuguese
vi: Vietnamese
id: Indonesian
ms: Malay
th: Thai
ar: Arabic
hi: Hindi
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TranslateDstLanguage;

    /**
     * @var AsrHotWordsConfigure ASR hotword lexicon parameter.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string Custom parameter.
     */
    public $ExtInfo;

    /**
     * @param integer $SubtitleType Smart subtitle language type.
0: source language
1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF. The value can only be 1 or 2 when TranslateSwitch is set to ON.
     * @param string $VideoSrcLanguage Video source language for intelligent caption.
Valid values: 
zh: Simplified Chinese.
en: Eenglish.
Ja: Japanese.
Ko: Korean.
zh-PY: Simplified Chinese, English and Cantonese.
zh-medical: Medical Chinese.
yue: Cantonese.
Vi: Vietnamese.
ms: Malay.
id: Indonesian.
fil: Filipino.
th: Thai.
pt: Portuguese.
tr: Turkish.
ar: Arabic.
es: Spanish.
hi: Hindi
Fr: French.
de: German.
zh-dialect: Chinese dialect
zh_en: Simplified Chinese and English
prime_zh: Simplified Chinese, Chinese Dialect and English.
     * @param string $SubtitleFormat Intelligent subtitle file format.
vtt: WebVTT format.
srt: SRT format.
If this field is left blank, no subtitle file will be generated.
     * @param string $TranslateSwitch Subtitle translation switch.
ON: enable translation
OFF: disable translation
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TranslateDstLanguage Target language for subtitle translation.
This field takes effect when TranslateSwitch is set to ON.
Supported languages:
zh: Simplified Chinese
en: English
ja: Japanese
ko: Korean
fr: French
es: Spanish
it: Italian
de: German
tr: Turkish
ru: Russian
pt: Portuguese
vi: Vietnamese
id: Indonesian
ms: Malay
th: Thai
ar: Arabic
hi: Hindi
Note: This field may return null, indicating that no valid value can be obtained.
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure ASR hotword lexicon parameter.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExtInfo Custom parameter.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SubtitleType",$param) and $param["SubtitleType"] !== null) {
            $this->SubtitleType = $param["SubtitleType"];
        }

        if (array_key_exists("VideoSrcLanguage",$param) and $param["VideoSrcLanguage"] !== null) {
            $this->VideoSrcLanguage = $param["VideoSrcLanguage"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("TranslateSwitch",$param) and $param["TranslateSwitch"] !== null) {
            $this->TranslateSwitch = $param["TranslateSwitch"];
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }

        if (array_key_exists("AsrHotWordsConfigure",$param) and $param["AsrHotWordsConfigure"] !== null) {
            $this->AsrHotWordsConfigure = new AsrHotWordsConfigure();
            $this->AsrHotWordsConfigure->deserialize($param["AsrHotWordsConfigure"]);
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
