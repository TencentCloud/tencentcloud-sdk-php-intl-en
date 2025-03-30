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
 * Smart subtitle template details.
 *
 * @method integer getDefinition() Obtain Unique identifier of the smart subtitle template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the smart subtitle template.
 * @method string getName() Obtain Smart subtitle template name.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Smart subtitle template name.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getComment() Obtain Smart subtitle template description.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setComment(string $Comment) Set Smart subtitle template description.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain Template type. Valid values:
* Preset: system preset template
* Custom: user-defined template
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Template type. Valid values:
* Preset: system preset template
* Custom: user-defined template
Note: This field may return null, indicating that no valid value can be obtained.
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() Obtain ASR hotword lexicon parameter.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) Set ASR hotword lexicon parameter.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAsrHotWordsLibraryName() Obtain Name of the hotword lexicon associated with the template.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAsrHotWordsLibraryName(string $AsrHotWordsLibraryName) Set Name of the hotword lexicon associated with the template.
Note: This field may return null, indicating that no valid value can be obtained.
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
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Smart subtitle file format.
vtt: WebVTT format
If this field is left blank, no subtitle file will be generated.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSubtitleType() Obtain Smart subtitle language type.
0: source language1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF.The value can only be 1 or 2 when TranslateSwitch is set to ON.
 * @method void setSubtitleType(integer $SubtitleType) Set Smart subtitle language type.
0: source language1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF.The value can only be 1 or 2 when TranslateSwitch is set to ON.
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
 * @method string getCreateTime() Obtain Template creation time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getUpdateTime() Obtain Last modification time of the template in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time of the template in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getAliasName() Obtain Alias of the preset smart subtitle template.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAliasName(string $AliasName) Set Alias of the preset smart subtitle template.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SmartSubtitleTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique identifier of the smart subtitle template.
     */
    public $Definition;

    /**
     * @var string Smart subtitle template name.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var string Smart subtitle template description.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Comment;

    /**
     * @var string Template type. Valid values:
* Preset: system preset template
* Custom: user-defined template
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var AsrHotWordsConfigure ASR hotword lexicon parameter.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string Name of the hotword lexicon associated with the template.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AsrHotWordsLibraryName;

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
Note: This field may return null, indicating that no valid value can be obtained.
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
     * @var string Template creation time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $CreateTime;

    /**
     * @var string Last modification time of the template in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $UpdateTime;

    /**
     * @var string Alias of the preset smart subtitle template.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AliasName;

    /**
     * @param integer $Definition Unique identifier of the smart subtitle template.
     * @param string $Name Smart subtitle template name.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Comment Smart subtitle template description.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type Template type. Valid values:
* Preset: system preset template
* Custom: user-defined template
Note: This field may return null, indicating that no valid value can be obtained.
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure ASR hotword lexicon parameter.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AsrHotWordsLibraryName Name of the hotword lexicon associated with the template.
Note: This field may return null, indicating that no valid value can be obtained.
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
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SubtitleType Smart subtitle language type.
0: source language1: target language
2: source language + target language
The value can only be 0 when TranslateSwitch is set to OFF.The value can only be 1 or 2 when TranslateSwitch is set to ON.
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
     * @param string $CreateTime Template creation time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $UpdateTime Last modification time of the template in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $AliasName Alias of the preset smart subtitle template.
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AsrHotWordsConfigure",$param) and $param["AsrHotWordsConfigure"] !== null) {
            $this->AsrHotWordsConfigure = new AsrHotWordsConfigure();
            $this->AsrHotWordsConfigure->deserialize($param["AsrHotWordsConfigure"]);
        }

        if (array_key_exists("AsrHotWordsLibraryName",$param) and $param["AsrHotWordsLibraryName"] !== null) {
            $this->AsrHotWordsLibraryName = $param["AsrHotWordsLibraryName"];
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

        if (array_key_exists("TranslateSwitch",$param) and $param["TranslateSwitch"] !== null) {
            $this->TranslateSwitch = $param["TranslateSwitch"];
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }
    }
}
