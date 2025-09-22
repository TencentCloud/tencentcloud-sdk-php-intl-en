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
 * Intelligent erasure template subtitle configuration.
 *
 * @method string getSubtitleEraseMethod() Obtain Specifies the subtitle erasure method.
**Automatic erasing:** automatically identifies subtitle text content in videos through AI models and performs seamless erasure to generate new videos. frame interference and unique subtitle styles may cause certain missed or incorrect erasures, which can be handled through specified area erasure.
When using automatic erasure, if AutoAreas is not specified, the default region (lower middle of the frame) will be erased automatically. if AutoAreas is specified, it will change to erase the designated area.
**Specified area erasing:** if your subtitle position is fixed, directly specify the erasure area to decrease the chance of removal omission to the maximum extent.
When your choice is specified area erasure, please import at least one designated region in CustomAreas.
-Automated removal.
- specifies the custom specified area erasure.

 * @method void setSubtitleEraseMethod(string $SubtitleEraseMethod) Set Specifies the subtitle erasure method.
**Automatic erasing:** automatically identifies subtitle text content in videos through AI models and performs seamless erasure to generate new videos. frame interference and unique subtitle styles may cause certain missed or incorrect erasures, which can be handled through specified area erasure.
When using automatic erasure, if AutoAreas is not specified, the default region (lower middle of the frame) will be erased automatically. if AutoAreas is specified, it will change to erase the designated area.
**Specified area erasing:** if your subtitle position is fixed, directly specify the erasure area to decrease the chance of removal omission to the maximum extent.
When your choice is specified area erasure, please import at least one designated region in CustomAreas.
-Automated removal.
- specifies the custom specified area erasure.

 * @method string getSubtitleModel() Obtain Subtitle erasure model.
**Standard version (recommend):** if your subtitle style is standard, normally recommend choose this version for better effectiveness with seamless detail.
**Regional version:** if your subtitles have special styles such as italics, shadows, or motion effects, we recommend choosing the regional version for larger removal area, though the detail effect is not as good as the standard version.
-Specifies the standard model.
-area. specifies the regional model.
 * @method void setSubtitleModel(string $SubtitleModel) Set Subtitle erasure model.
**Standard version (recommend):** if your subtitle style is standard, normally recommend choose this version for better effectiveness with seamless detail.
**Regional version:** if your subtitles have special styles such as italics, shadows, or motion effects, we recommend choosing the regional version for larger removal area, though the detail effect is not as good as the standard version.
-Specifies the standard model.
-area. specifies the regional model.
 * @method string getOcrSwitch() Obtain Whether OCR subtitle extraction is enabled. default value: OFF.
Supports enabling OCR subtitle extraction only when SubtitleEraseMethod is set to auto. when enabled, it identifies the longest and most stable text area within the region as the subtitle area, then performs text extraction and removal.
-ON: enable.
-OFF. specifies the disabled state.
 * @method void setOcrSwitch(string $OcrSwitch) Set Whether OCR subtitle extraction is enabled. default value: OFF.
Supports enabling OCR subtitle extraction only when SubtitleEraseMethod is set to auto. when enabled, it identifies the longest and most stable text area within the region as the subtitle area, then performs text extraction and removal.
-ON: enable.
-OFF. specifies the disabled state.
 * @method string getSubtitleLang() Obtain Subtitle language, for OCR guidance, default value zh_en. this parameter is valid only when OcrSwitch is ON.
-Chinese and english.
-multi other.
Other supported languages:.
Chinese, english, japanese, korean, spanish, french, german, portuguese, vietnamese, malay, russian, italian, dutch, swedish, finnish, danish, norwegian, hungarian, thai, hindi, arabic, indian-bengali, indian-gujarati, indian-kannada, indian-malayalam, indian-tamil, indian-telugu, slovenian, polish, catalan, bosnian, czech, estonian, croatian, punjabi, marathi, azerbaijani, indonesian, luxembourgish, lithuanian, latvian, maltese, slovak, turkish, kazakh, greek, irish, belarusian, khmer, tagalog, pashto, persian, tajik.


 * @method void setSubtitleLang(string $SubtitleLang) Set Subtitle language, for OCR guidance, default value zh_en. this parameter is valid only when OcrSwitch is ON.
-Chinese and english.
-multi other.
Other supported languages:.
Chinese, english, japanese, korean, spanish, french, german, portuguese, vietnamese, malay, russian, italian, dutch, swedish, finnish, danish, norwegian, hungarian, thai, hindi, arabic, indian-bengali, indian-gujarati, indian-kannada, indian-malayalam, indian-tamil, indian-telugu, slovenian, polish, catalan, bosnian, czech, estonian, croatian, punjabi, marathi, azerbaijani, indonesian, luxembourgish, lithuanian, latvian, maltese, slovak, turkish, kazakh, greek, irish, belarusian, khmer, tagalog, pashto, persian, tajik.


 * @method string getSubtitleFormat() Obtain Specifies the subtitle file format. default value: vtt. this parameter is valid only when OcrSwitch is set to ON.
-srt format.
-vtt: WebVTT format.
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Specifies the subtitle file format. default value: vtt. this parameter is valid only when OcrSwitch is set to ON.
-srt format.
-vtt: WebVTT format.
 * @method string getTransSwitch() Obtain Specifies whether to enable subtitle translation. default value: OFF. this parameter is valid only when OcrSwitch is set to ON.
-ON: enable.
-OFF. specifies the disabled state.
 * @method void setTransSwitch(string $TransSwitch) Set Specifies whether to enable subtitle translation. default value: OFF. this parameter is valid only when OcrSwitch is set to ON.
-ON: enable.
-OFF. specifies the disabled state.
 * @method string getTransDstLang() Obtain Subtitle target language. default value: en. this parameter is valid only when TransSwitch is set to ON.
Supported languages:.
Simplified chinese.
Specifies the language. valid values: en (english).
Ja: japanese.
Ko: korean.
Fr: french.
es: spanish.
It: italian.
de: german.
tr: turkish.
Ru: russian.
pt: portuguese.
Vi: vietnamese.
id: indonesian.
ms: malay.
Th: thai.
Ar: arabic.
hi: Hindi
 * @method void setTransDstLang(string $TransDstLang) Set Subtitle target language. default value: en. this parameter is valid only when TransSwitch is set to ON.
Supported languages:.
Simplified chinese.
Specifies the language. valid values: en (english).
Ja: japanese.
Ko: korean.
Fr: french.
es: spanish.
It: italian.
de: german.
tr: turkish.
Ru: russian.
pt: portuguese.
Vi: vietnamese.
id: indonesian.
ms: malay.
Th: thai.
Ar: arabic.
hi: Hindi
 * @method array getAutoAreas() Obtain Specifies automatic removal of a custom region.
Specifies the use of an AI model to automatically detect and erase existing targets in the specified region.
Note that this parameter will not take effect when the removal method is custom. for template modification, input [] to clean up the region. the template region information remains unchanged if not imported.
 * @method void setAutoAreas(array $AutoAreas) Set Specifies automatic removal of a custom region.
Specifies the use of an AI model to automatically detect and erase existing targets in the specified region.
Note that this parameter will not take effect when the removal method is custom. for template modification, input [] to clean up the region. the template region information remains unchanged if not imported.
 * @method array getCustomAreas() Obtain Specifies erasure of a custom region.
Detects and directly performs removal within a specified time range for the selected region.
Note: when modifying the template, pass [] to clear the region. the template region information remains unchanged if not passed.
 * @method void setCustomAreas(array $CustomAreas) Set Specifies erasure of a custom region.
Detects and directly performs removal within a specified time range for the selected region.
Note: when modifying the template, pass [] to clear the region. the template region information remains unchanged if not passed.
 */
class SmartEraseSubtitleConfig extends AbstractModel
{
    /**
     * @var string Specifies the subtitle erasure method.
**Automatic erasing:** automatically identifies subtitle text content in videos through AI models and performs seamless erasure to generate new videos. frame interference and unique subtitle styles may cause certain missed or incorrect erasures, which can be handled through specified area erasure.
When using automatic erasure, if AutoAreas is not specified, the default region (lower middle of the frame) will be erased automatically. if AutoAreas is specified, it will change to erase the designated area.
**Specified area erasing:** if your subtitle position is fixed, directly specify the erasure area to decrease the chance of removal omission to the maximum extent.
When your choice is specified area erasure, please import at least one designated region in CustomAreas.
-Automated removal.
- specifies the custom specified area erasure.

     */
    public $SubtitleEraseMethod;

    /**
     * @var string Subtitle erasure model.
**Standard version (recommend):** if your subtitle style is standard, normally recommend choose this version for better effectiveness with seamless detail.
**Regional version:** if your subtitles have special styles such as italics, shadows, or motion effects, we recommend choosing the regional version for larger removal area, though the detail effect is not as good as the standard version.
-Specifies the standard model.
-area. specifies the regional model.
     */
    public $SubtitleModel;

    /**
     * @var string Whether OCR subtitle extraction is enabled. default value: OFF.
Supports enabling OCR subtitle extraction only when SubtitleEraseMethod is set to auto. when enabled, it identifies the longest and most stable text area within the region as the subtitle area, then performs text extraction and removal.
-ON: enable.
-OFF. specifies the disabled state.
     */
    public $OcrSwitch;

    /**
     * @var string Subtitle language, for OCR guidance, default value zh_en. this parameter is valid only when OcrSwitch is ON.
-Chinese and english.
-multi other.
Other supported languages:.
Chinese, english, japanese, korean, spanish, french, german, portuguese, vietnamese, malay, russian, italian, dutch, swedish, finnish, danish, norwegian, hungarian, thai, hindi, arabic, indian-bengali, indian-gujarati, indian-kannada, indian-malayalam, indian-tamil, indian-telugu, slovenian, polish, catalan, bosnian, czech, estonian, croatian, punjabi, marathi, azerbaijani, indonesian, luxembourgish, lithuanian, latvian, maltese, slovak, turkish, kazakh, greek, irish, belarusian, khmer, tagalog, pashto, persian, tajik.


     */
    public $SubtitleLang;

    /**
     * @var string Specifies the subtitle file format. default value: vtt. this parameter is valid only when OcrSwitch is set to ON.
-srt format.
-vtt: WebVTT format.
     */
    public $SubtitleFormat;

    /**
     * @var string Specifies whether to enable subtitle translation. default value: OFF. this parameter is valid only when OcrSwitch is set to ON.
-ON: enable.
-OFF. specifies the disabled state.
     */
    public $TransSwitch;

    /**
     * @var string Subtitle target language. default value: en. this parameter is valid only when TransSwitch is set to ON.
Supported languages:.
Simplified chinese.
Specifies the language. valid values: en (english).
Ja: japanese.
Ko: korean.
Fr: french.
es: spanish.
It: italian.
de: german.
tr: turkish.
Ru: russian.
pt: portuguese.
Vi: vietnamese.
id: indonesian.
ms: malay.
Th: thai.
Ar: arabic.
hi: Hindi
     */
    public $TransDstLang;

    /**
     * @var array Specifies automatic removal of a custom region.
Specifies the use of an AI model to automatically detect and erase existing targets in the specified region.
Note that this parameter will not take effect when the removal method is custom. for template modification, input [] to clean up the region. the template region information remains unchanged if not imported.
     */
    public $AutoAreas;

    /**
     * @var array Specifies erasure of a custom region.
Detects and directly performs removal within a specified time range for the selected region.
Note: when modifying the template, pass [] to clear the region. the template region information remains unchanged if not passed.
     */
    public $CustomAreas;

    /**
     * @param string $SubtitleEraseMethod Specifies the subtitle erasure method.
**Automatic erasing:** automatically identifies subtitle text content in videos through AI models and performs seamless erasure to generate new videos. frame interference and unique subtitle styles may cause certain missed or incorrect erasures, which can be handled through specified area erasure.
When using automatic erasure, if AutoAreas is not specified, the default region (lower middle of the frame) will be erased automatically. if AutoAreas is specified, it will change to erase the designated area.
**Specified area erasing:** if your subtitle position is fixed, directly specify the erasure area to decrease the chance of removal omission to the maximum extent.
When your choice is specified area erasure, please import at least one designated region in CustomAreas.
-Automated removal.
- specifies the custom specified area erasure.

     * @param string $SubtitleModel Subtitle erasure model.
**Standard version (recommend):** if your subtitle style is standard, normally recommend choose this version for better effectiveness with seamless detail.
**Regional version:** if your subtitles have special styles such as italics, shadows, or motion effects, we recommend choosing the regional version for larger removal area, though the detail effect is not as good as the standard version.
-Specifies the standard model.
-area. specifies the regional model.
     * @param string $OcrSwitch Whether OCR subtitle extraction is enabled. default value: OFF.
Supports enabling OCR subtitle extraction only when SubtitleEraseMethod is set to auto. when enabled, it identifies the longest and most stable text area within the region as the subtitle area, then performs text extraction and removal.
-ON: enable.
-OFF. specifies the disabled state.
     * @param string $SubtitleLang Subtitle language, for OCR guidance, default value zh_en. this parameter is valid only when OcrSwitch is ON.
-Chinese and english.
-multi other.
Other supported languages:.
Chinese, english, japanese, korean, spanish, french, german, portuguese, vietnamese, malay, russian, italian, dutch, swedish, finnish, danish, norwegian, hungarian, thai, hindi, arabic, indian-bengali, indian-gujarati, indian-kannada, indian-malayalam, indian-tamil, indian-telugu, slovenian, polish, catalan, bosnian, czech, estonian, croatian, punjabi, marathi, azerbaijani, indonesian, luxembourgish, lithuanian, latvian, maltese, slovak, turkish, kazakh, greek, irish, belarusian, khmer, tagalog, pashto, persian, tajik.


     * @param string $SubtitleFormat Specifies the subtitle file format. default value: vtt. this parameter is valid only when OcrSwitch is set to ON.
-srt format.
-vtt: WebVTT format.
     * @param string $TransSwitch Specifies whether to enable subtitle translation. default value: OFF. this parameter is valid only when OcrSwitch is set to ON.
-ON: enable.
-OFF. specifies the disabled state.
     * @param string $TransDstLang Subtitle target language. default value: en. this parameter is valid only when TransSwitch is set to ON.
Supported languages:.
Simplified chinese.
Specifies the language. valid values: en (english).
Ja: japanese.
Ko: korean.
Fr: french.
es: spanish.
It: italian.
de: german.
tr: turkish.
Ru: russian.
pt: portuguese.
Vi: vietnamese.
id: indonesian.
ms: malay.
Th: thai.
Ar: arabic.
hi: Hindi
     * @param array $AutoAreas Specifies automatic removal of a custom region.
Specifies the use of an AI model to automatically detect and erase existing targets in the specified region.
Note that this parameter will not take effect when the removal method is custom. for template modification, input [] to clean up the region. the template region information remains unchanged if not imported.
     * @param array $CustomAreas Specifies erasure of a custom region.
Detects and directly performs removal within a specified time range for the selected region.
Note: when modifying the template, pass [] to clear the region. the template region information remains unchanged if not passed.
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
        if (array_key_exists("SubtitleEraseMethod",$param) and $param["SubtitleEraseMethod"] !== null) {
            $this->SubtitleEraseMethod = $param["SubtitleEraseMethod"];
        }

        if (array_key_exists("SubtitleModel",$param) and $param["SubtitleModel"] !== null) {
            $this->SubtitleModel = $param["SubtitleModel"];
        }

        if (array_key_exists("OcrSwitch",$param) and $param["OcrSwitch"] !== null) {
            $this->OcrSwitch = $param["OcrSwitch"];
        }

        if (array_key_exists("SubtitleLang",$param) and $param["SubtitleLang"] !== null) {
            $this->SubtitleLang = $param["SubtitleLang"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("TransSwitch",$param) and $param["TransSwitch"] !== null) {
            $this->TransSwitch = $param["TransSwitch"];
        }

        if (array_key_exists("TransDstLang",$param) and $param["TransDstLang"] !== null) {
            $this->TransDstLang = $param["TransDstLang"];
        }

        if (array_key_exists("AutoAreas",$param) and $param["AutoAreas"] !== null) {
            $this->AutoAreas = [];
            foreach ($param["AutoAreas"] as $key => $value){
                $obj = new EraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("CustomAreas",$param) and $param["CustomAreas"] !== null) {
            $this->CustomAreas = [];
            foreach ($param["CustomAreas"] as $key => $value){
                $obj = new EraseTimeArea();
                $obj->deserialize($value);
                array_push($this->CustomAreas, $obj);
            }
        }
    }
}
