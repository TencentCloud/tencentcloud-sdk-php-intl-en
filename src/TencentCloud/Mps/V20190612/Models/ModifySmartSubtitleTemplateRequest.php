<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ModifySmartSubtitleTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of the smart subtitle template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the smart subtitle template.
 * @method string getTranslateSwitch() Obtain Subtitle translation switch.
ON: enable translation
OFF: disable translation
 * @method void setTranslateSwitch(string $TranslateSwitch) Set Subtitle translation switch.
ON: enable translation
OFF: disable translation
 * @method string getName() Obtain Smart subtitle template name.
Length limit: 64 characters.
 * @method void setName(string $Name) Set Smart subtitle template name.
Length limit: 64 characters.
 * @method string getComment() Obtain Smart subtitle template description.
Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Smart subtitle template description.
Length limit: 256 characters.
 * @method string getVideoSrcLanguage() Obtain Source language of the video with smart subtitles.
Supported languages:
zh: Simplified Chinese
en: English
ja: Japanese
ko: Korean
zh-PY: Chinese-English-Cantonese
zh-medical: Medical Chinese
yue: Cantonese
vi: Vietnamese
ms: Malay
id: Indonesian
fli: Filipino
th: Thai
pt: Portuguese
tr: Turkish
ar: Arabic
es: Spanish
hi: Hindi
fr: French
de: German
zh-dialect: Chinese dialect
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) Set Source language of the video with smart subtitles.
Supported languages:
zh: Simplified Chinese
en: English
ja: Japanese
ko: Korean
zh-PY: Chinese-English-Cantonese
zh-medical: Medical Chinese
yue: Cantonese
vi: Vietnamese
ms: Malay
id: Indonesian
fli: Filipino
th: Thai
pt: Portuguese
tr: Turkish
ar: Arabic
es: Spanish
hi: Hindi
fr: French
de: German
zh-dialect: Chinese dialect
 * @method string getSubtitleFormat() Obtain Smart subtitle file format.
vtt: WebVTT format
If this field is left blank, no subtitle file will be generated.
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Smart subtitle file format.
vtt: WebVTT format
If this field is left blank, no subtitle file will be generated.
 * @method integer getSubtitleType() Obtain Smart subtitle language type.
0: source language1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF.The value can only be 1 or 2 when TranslateSwitch is set to ON.
 * @method void setSubtitleType(integer $SubtitleType) Set Smart subtitle language type.
0: source language1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF.The value can only be 1 or 2 when TranslateSwitch is set to ON.
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() Obtain ASR hotword lexicon parameter.
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) Set ASR hotword lexicon parameter.
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
 */
class ModifySmartSubtitleTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the smart subtitle template.
     */
    public $Definition;

    /**
     * @var string Subtitle translation switch.
ON: enable translation
OFF: disable translation
     */
    public $TranslateSwitch;

    /**
     * @var string Smart subtitle template name.
Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Smart subtitle template description.
Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var string Source language of the video with smart subtitles.
Supported languages:
zh: Simplified Chinese
en: English
ja: Japanese
ko: Korean
zh-PY: Chinese-English-Cantonese
zh-medical: Medical Chinese
yue: Cantonese
vi: Vietnamese
ms: Malay
id: Indonesian
fli: Filipino
th: Thai
pt: Portuguese
tr: Turkish
ar: Arabic
es: Spanish
hi: Hindi
fr: French
de: German
zh-dialect: Chinese dialect
     */
    public $VideoSrcLanguage;

    /**
     * @var string Smart subtitle file format.
vtt: WebVTT format
If this field is left blank, no subtitle file will be generated.
     */
    public $SubtitleFormat;

    /**
     * @var integer Smart subtitle language type.
0: source language1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF.The value can only be 1 or 2 when TranslateSwitch is set to ON.
     */
    public $SubtitleType;

    /**
     * @var AsrHotWordsConfigure ASR hotword lexicon parameter.
     */
    public $AsrHotWordsConfigure;

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
     */
    public $TranslateDstLanguage;

    /**
     * @param integer $Definition Unique identifier of the smart subtitle template.
     * @param string $TranslateSwitch Subtitle translation switch.
ON: enable translation
OFF: disable translation
     * @param string $Name Smart subtitle template name.
Length limit: 64 characters.
     * @param string $Comment Smart subtitle template description.
Length limit: 256 characters.
     * @param string $VideoSrcLanguage Source language of the video with smart subtitles.
Supported languages:
zh: Simplified Chinese
en: English
ja: Japanese
ko: Korean
zh-PY: Chinese-English-Cantonese
zh-medical: Medical Chinese
yue: Cantonese
vi: Vietnamese
ms: Malay
id: Indonesian
fli: Filipino
th: Thai
pt: Portuguese
tr: Turkish
ar: Arabic
es: Spanish
hi: Hindi
fr: French
de: German
zh-dialect: Chinese dialect
     * @param string $SubtitleFormat Smart subtitle file format.
vtt: WebVTT format
If this field is left blank, no subtitle file will be generated.
     * @param integer $SubtitleType Smart subtitle language type.
0: source language1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF.The value can only be 1 or 2 when TranslateSwitch is set to ON.
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure ASR hotword lexicon parameter.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("TranslateSwitch",$param) and $param["TranslateSwitch"] !== null) {
            $this->TranslateSwitch = $param["TranslateSwitch"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("VideoSrcLanguage",$param) and $param["VideoSrcLanguage"] !== null) {
            $this->VideoSrcLanguage = $param["VideoSrcLanguage"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("SubtitleType",$param) and $param["SubtitleType"] !== null) {
            $this->SubtitleType = $param["SubtitleType"];
        }

        if (array_key_exists("AsrHotWordsConfigure",$param) and $param["AsrHotWordsConfigure"] !== null) {
            $this->AsrHotWordsConfigure = new AsrHotWordsConfigure();
            $this->AsrHotWordsConfigure->deserialize($param["AsrHotWordsConfigure"]);
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }
    }
}
