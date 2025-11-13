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
 * Subtitle removal configuration for the smart erasing template.
 *
 * @method string getSubtitleEraseMethod() Obtain Subtitle erasing method.
**Automatic erasing:** Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.
When automatic erasing is used, if AutoAreas is not specified, the default area (lower middle part of the image) will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasing:** If the subtitle position is relatively fixed, you are recommended to specify the erasing area directly to minimize missed erasing.
When you choose specified area erasing, specify at least one area for CustomAreas.
- auto: automatic erasing.
- custom: specified area erasing.

 * @method void setSubtitleEraseMethod(string $SubtitleEraseMethod) Set Subtitle erasing method.
**Automatic erasing:** Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.
When automatic erasing is used, if AutoAreas is not specified, the default area (lower middle part of the image) will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasing:** If the subtitle position is relatively fixed, you are recommended to specify the erasing area directly to minimize missed erasing.
When you choose specified area erasing, specify at least one area for CustomAreas.
- auto: automatic erasing.
- custom: specified area erasing.

 * @method string getSubtitleModel() Obtain Subtitle erasing model.
**Standard edition (recommended):** For standard subtitle styles, you are recommended to select this edition to ensure better traceless effects in the details.
**Area edition:** If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.
- standard: standard edition.
- area: area edition.
 * @method void setSubtitleModel(string $SubtitleModel) Set Subtitle erasing model.
**Standard edition (recommended):** For standard subtitle styles, you are recommended to select this edition to ensure better traceless effects in the details.
**Area edition:** If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.
- standard: standard edition.
- area: area edition.
 * @method string getOcrSwitch() Obtain Whether to enable OCR subtitle extraction. The default value is OFF.
OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When OCR subtitle extraction is enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.
- ON: enabled.
-OFF: disabled.
 * @method void setOcrSwitch(string $OcrSwitch) Set Whether to enable OCR subtitle extraction. The default value is OFF.
OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When OCR subtitle extraction is enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.
- ON: enabled.
-OFF: disabled.
 * @method string getSubtitleLang() Obtain Subtitle language, which is used to guide OCR recognition. The default value is zh_en. This parameter is valid only when OcrSwitch is set to ON.
- zh_en: Chinese and English.
- multi: others.
The following are other languages supported for recognition:
Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, India-Bengali, India-Gujarati, India-Kannada, India-Malayalam, India-Tamil, India-Telugu, Slovenian, Polish, Catalan, Bosnian, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijani, Indonesian, Luxembourgish, Lithuanian, Latvian, Maltese, Slovak, Turkish, Kazakh, Greek, Irish, Belarusian, Khmer, Tagalog, Pashto, Persian, and Tajik.

 * @method void setSubtitleLang(string $SubtitleLang) Set Subtitle language, which is used to guide OCR recognition. The default value is zh_en. This parameter is valid only when OcrSwitch is set to ON.
- zh_en: Chinese and English.
- multi: others.
The following are other languages supported for recognition:
Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, India-Bengali, India-Gujarati, India-Kannada, India-Malayalam, India-Tamil, India-Telugu, Slovenian, Polish, Catalan, Bosnian, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijani, Indonesian, Luxembourgish, Lithuanian, Latvian, Maltese, Slovak, Turkish, Kazakh, Greek, Irish, Belarusian, Khmer, Tagalog, Pashto, Persian, and Tajik.

 * @method string getSubtitleFormat() Obtain Subtitle file format. The default value is vtt. This parameter is valid only when OcrSwitch is set to ON.
- srt: SRT format.
- vtt: WebVTT format.
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Subtitle file format. The default value is vtt. This parameter is valid only when OcrSwitch is set to ON.
- srt: SRT format.
- vtt: WebVTT format.
 * @method string getTransSwitch() Obtain Whether to enable subtitle translation. The default value is OFF. This parameter is valid only when OcrSwitch is set to ON.
- ON: enabled.
- OFF: disabled.
 * @method void setTransSwitch(string $TransSwitch) Set Whether to enable subtitle translation. The default value is OFF. This parameter is valid only when OcrSwitch is set to ON.
- ON: enabled.
- OFF: disabled.
 * @method string getTransDstLang() Obtain Target language for Subtitle translation. The default value is en. This parameter is valid only when TransSwitch is set to ON.
Currently, the following languages are supported:
zh: Simplified Chinese.
en: English.
ja: Japanese.
ko: Korean.
fr: French.
es: Spanish.
it: Italian.
de: German.
tr: Turkish.
ru: Russian.
pt: Portuguese.
vi: Vietnamese.
id: Indonesian.
ms: Malay.
th: Thai.
ar: Arabic.
hi: Hindi.
 * @method void setTransDstLang(string $TransDstLang) Set Target language for Subtitle translation. The default value is en. This parameter is valid only when TransSwitch is set to ON.
Currently, the following languages are supported:
zh: Simplified Chinese.
en: English.
ja: Japanese.
ko: Korean.
fr: French.
es: Spanish.
it: Italian.
de: German.
tr: Turkish.
ru: Russian.
pt: Portuguese.
vi: Vietnamese.
id: Indonesian.
ms: Malay.
th: Thai.
ar: Arabic.
hi: Hindi.
 * @method array getAutoAreas() Obtain Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 * @method void setAutoAreas(array $AutoAreas) Set Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 * @method array getCustomAreas() Obtain Custom area for specified area erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 * @method void setCustomAreas(array $CustomAreas) Set Custom area for specified area erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 */
class UpdateSmartEraseSubtitleConfig extends AbstractModel
{
    /**
     * @var string Subtitle erasing method.
**Automatic erasing:** Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.
When automatic erasing is used, if AutoAreas is not specified, the default area (lower middle part of the image) will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasing:** If the subtitle position is relatively fixed, you are recommended to specify the erasing area directly to minimize missed erasing.
When you choose specified area erasing, specify at least one area for CustomAreas.
- auto: automatic erasing.
- custom: specified area erasing.

     */
    public $SubtitleEraseMethod;

    /**
     * @var string Subtitle erasing model.
**Standard edition (recommended):** For standard subtitle styles, you are recommended to select this edition to ensure better traceless effects in the details.
**Area edition:** If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.
- standard: standard edition.
- area: area edition.
     */
    public $SubtitleModel;

    /**
     * @var string Whether to enable OCR subtitle extraction. The default value is OFF.
OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When OCR subtitle extraction is enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.
- ON: enabled.
-OFF: disabled.
     */
    public $OcrSwitch;

    /**
     * @var string Subtitle language, which is used to guide OCR recognition. The default value is zh_en. This parameter is valid only when OcrSwitch is set to ON.
- zh_en: Chinese and English.
- multi: others.
The following are other languages supported for recognition:
Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, India-Bengali, India-Gujarati, India-Kannada, India-Malayalam, India-Tamil, India-Telugu, Slovenian, Polish, Catalan, Bosnian, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijani, Indonesian, Luxembourgish, Lithuanian, Latvian, Maltese, Slovak, Turkish, Kazakh, Greek, Irish, Belarusian, Khmer, Tagalog, Pashto, Persian, and Tajik.

     */
    public $SubtitleLang;

    /**
     * @var string Subtitle file format. The default value is vtt. This parameter is valid only when OcrSwitch is set to ON.
- srt: SRT format.
- vtt: WebVTT format.
     */
    public $SubtitleFormat;

    /**
     * @var string Whether to enable subtitle translation. The default value is OFF. This parameter is valid only when OcrSwitch is set to ON.
- ON: enabled.
- OFF: disabled.
     */
    public $TransSwitch;

    /**
     * @var string Target language for Subtitle translation. The default value is en. This parameter is valid only when TransSwitch is set to ON.
Currently, the following languages are supported:
zh: Simplified Chinese.
en: English.
ja: Japanese.
ko: Korean.
fr: French.
es: Spanish.
it: Italian.
de: German.
tr: Turkish.
ru: Russian.
pt: Portuguese.
vi: Vietnamese.
id: Indonesian.
ms: Malay.
th: Thai.
ar: Arabic.
hi: Hindi.
     */
    public $TransDstLang;

    /**
     * @var array Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
     */
    public $AutoAreas;

    /**
     * @var array Custom area for specified area erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
     */
    public $CustomAreas;

    /**
     * @param string $SubtitleEraseMethod Subtitle erasing method.
**Automatic erasing:** Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.
When automatic erasing is used, if AutoAreas is not specified, the default area (lower middle part of the image) will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasing:** If the subtitle position is relatively fixed, you are recommended to specify the erasing area directly to minimize missed erasing.
When you choose specified area erasing, specify at least one area for CustomAreas.
- auto: automatic erasing.
- custom: specified area erasing.

     * @param string $SubtitleModel Subtitle erasing model.
**Standard edition (recommended):** For standard subtitle styles, you are recommended to select this edition to ensure better traceless effects in the details.
**Area edition:** If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.
- standard: standard edition.
- area: area edition.
     * @param string $OcrSwitch Whether to enable OCR subtitle extraction. The default value is OFF.
OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When OCR subtitle extraction is enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.
- ON: enabled.
-OFF: disabled.
     * @param string $SubtitleLang Subtitle language, which is used to guide OCR recognition. The default value is zh_en. This parameter is valid only when OcrSwitch is set to ON.
- zh_en: Chinese and English.
- multi: others.
The following are other languages supported for recognition:
Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, India-Bengali, India-Gujarati, India-Kannada, India-Malayalam, India-Tamil, India-Telugu, Slovenian, Polish, Catalan, Bosnian, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijani, Indonesian, Luxembourgish, Lithuanian, Latvian, Maltese, Slovak, Turkish, Kazakh, Greek, Irish, Belarusian, Khmer, Tagalog, Pashto, Persian, and Tajik.

     * @param string $SubtitleFormat Subtitle file format. The default value is vtt. This parameter is valid only when OcrSwitch is set to ON.
- srt: SRT format.
- vtt: WebVTT format.
     * @param string $TransSwitch Whether to enable subtitle translation. The default value is OFF. This parameter is valid only when OcrSwitch is set to ON.
- ON: enabled.
- OFF: disabled.
     * @param string $TransDstLang Target language for Subtitle translation. The default value is en. This parameter is valid only when TransSwitch is set to ON.
Currently, the following languages are supported:
zh: Simplified Chinese.
en: English.
ja: Japanese.
ko: Korean.
fr: French.
es: Spanish.
it: Italian.
de: German.
tr: Turkish.
ru: Russian.
pt: Portuguese.
vi: Vietnamese.
id: Indonesian.
ms: Malay.
th: Thai.
ar: Arabic.
hi: Hindi.
     * @param array $AutoAreas Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
     * @param array $CustomAreas Custom area for specified area erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
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
