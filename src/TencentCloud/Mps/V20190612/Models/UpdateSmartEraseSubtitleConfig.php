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
When using automatic erasing, if AutoAreas is not specified, the default area (lower middle part of the image) will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasing:** If the subtitle position is relatively fixed, you are recommended to specify the erasing area directly to minimize missed erasing.
When you choose specified area erasing, specify at least one area for CustomAreas.
-auto erasing
- custom: specified area erasing.

 * @method void setSubtitleEraseMethod(string $SubtitleEraseMethod) Set Subtitle erasing method.
**Automatic erasing:** Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.
When using automatic erasing, if AutoAreas is not specified, the default area (lower middle part of the image) will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasing:** If the subtitle position is relatively fixed, you are recommended to specify the erasing area directly to minimize missed erasing.
When you choose specified area erasing, specify at least one area for CustomAreas.
-auto erasing
- custom: specified area erasing.

 * @method string getSubtitleModel() Obtain Subtitle erasing model.
**Standard edition (recommended):** For standard subtitle styles, it is usually recommended to select this version for better traceless effects in the details.
**Area edition:** If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.
- standard: standard edition.
- area: area edition.
 * @method void setSubtitleModel(string $SubtitleModel) Set Subtitle erasing model.
**Standard edition (recommended):** For standard subtitle styles, it is usually recommended to select this version for better traceless effects in the details.
**Area edition:** If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.
- standard: standard edition.
- area: area edition.
 * @method string getOcrSwitch() Obtain Whether to enable OCR subtitle extraction. The default value is OFF.
OCR subtitle extraction is supported only when SubtitleEraseMethod is set to auto. Once enabled, it identifies the text region that appears longest and most stably within the automated erasing area as the subtitle area. The text in the subtitle area is extracted and erased.
-ON
-OFF: disabled.
 * @method void setOcrSwitch(string $OcrSwitch) Set Whether to enable OCR subtitle extraction. The default value is OFF.
OCR subtitle extraction is supported only when SubtitleEraseMethod is set to auto. Once enabled, it identifies the text region that appears longest and most stably within the automated erasing area as the subtitle area. The text in the subtitle area is extracted and erased.
-ON
-OFF: disabled.
 * @method string getSubtitleLang() Obtain Subtitle language, used for guiding OCR recognition, default value zh_en; this parameter is valid only when OcrSwitch is "ON".
- zh_en: Chinese and English
- multi: others
The following are other languages supported for recognition:
Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, Indian Bengali, Indian Gujarati, Indian Kannada, Indian Malayalam, Indian Tamil, Indian Telugu, Slovenian, Polish, Catalonia, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan


 * @method void setSubtitleLang(string $SubtitleLang) Set Subtitle language, used for guiding OCR recognition, default value zh_en; this parameter is valid only when OcrSwitch is "ON".
- zh_en: Chinese and English
- multi: others
The following are other languages supported for recognition:
Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, Indian Bengali, Indian Gujarati, Indian Kannada, Indian Malayalam, Indian Tamil, Indian Telugu, Slovenian, Polish, Catalonia, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan


 * @method string getSubtitleFormat() Obtain Subtitle file format, default value vtt; this parameter is valid only when OcrSwitch is "ON".
- srt: SRT format
- vtt: WebVTT format.
 * @method void setSubtitleFormat(string $SubtitleFormat) Set Subtitle file format, default value vtt; this parameter is valid only when OcrSwitch is "ON".
- srt: SRT format
- vtt: WebVTT format.
 * @method string getTransSwitch() Obtain Whether to enable subtitle translation, default value is OFF. This parameter is valid only when OcrSwitch is "ON".
-ON
-OFF: disabled.
 * @method void setTransSwitch(string $TransSwitch) Set Whether to enable subtitle translation, default value is OFF. This parameter is valid only when OcrSwitch is "ON".
-ON
-OFF: disabled.
 * @method string getTransDstLang() Obtain Subtitle target language, default value en; this parameter is valid only when TransSwitch is "ON".
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
 * @method void setTransDstLang(string $TransDstLang) Set Subtitle target language, default value en; this parameter is valid only when TransSwitch is "ON".
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
 * @method array getAutoAreas() Obtain Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 * @method void setAutoAreas(array $AutoAreas) Set Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 * @method array getCustomAreas() Obtain Specify the custom region for erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 * @method void setCustomAreas(array $CustomAreas) Set Specify the custom region for erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
 */
class UpdateSmartEraseSubtitleConfig extends AbstractModel
{
    /**
     * @var string Subtitle erasing method.
**Automatic erasing:** Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.
When using automatic erasing, if AutoAreas is not specified, the default area (lower middle part of the image) will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasing:** If the subtitle position is relatively fixed, you are recommended to specify the erasing area directly to minimize missed erasing.
When you choose specified area erasing, specify at least one area for CustomAreas.
-auto erasing
- custom: specified area erasing.

     */
    public $SubtitleEraseMethod;

    /**
     * @var string Subtitle erasing model.
**Standard edition (recommended):** For standard subtitle styles, it is usually recommended to select this version for better traceless effects in the details.
**Area edition:** If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.
- standard: standard edition.
- area: area edition.
     */
    public $SubtitleModel;

    /**
     * @var string Whether to enable OCR subtitle extraction. The default value is OFF.
OCR subtitle extraction is supported only when SubtitleEraseMethod is set to auto. Once enabled, it identifies the text region that appears longest and most stably within the automated erasing area as the subtitle area. The text in the subtitle area is extracted and erased.
-ON
-OFF: disabled.
     */
    public $OcrSwitch;

    /**
     * @var string Subtitle language, used for guiding OCR recognition, default value zh_en; this parameter is valid only when OcrSwitch is "ON".
- zh_en: Chinese and English
- multi: others
The following are other languages supported for recognition:
Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, Indian Bengali, Indian Gujarati, Indian Kannada, Indian Malayalam, Indian Tamil, Indian Telugu, Slovenian, Polish, Catalonia, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan


     */
    public $SubtitleLang;

    /**
     * @var string Subtitle file format, default value vtt; this parameter is valid only when OcrSwitch is "ON".
- srt: SRT format
- vtt: WebVTT format.
     */
    public $SubtitleFormat;

    /**
     * @var string Whether to enable subtitle translation, default value is OFF. This parameter is valid only when OcrSwitch is "ON".
-ON
-OFF: disabled.
     */
    public $TransSwitch;

    /**
     * @var string Subtitle target language, default value en; this parameter is valid only when TransSwitch is "ON".
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
    public $TransDstLang;

    /**
     * @var array Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
     */
    public $AutoAreas;

    /**
     * @var array Specify the custom region for erasing.
For the specified area, erase the target objects directly without detection and recognition within a selected time period.
Note: When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
     */
    public $CustomAreas;

    /**
     * @param string $SubtitleEraseMethod Subtitle erasing method.
**Automatic erasing:** Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.
When using automatic erasing, if AutoAreas is not specified, the default area (lower middle part of the image) will be erased automatically. If AutoAreas is specified, the specified area will be erased automatically.
**Specified area erasing:** If the subtitle position is relatively fixed, you are recommended to specify the erasing area directly to minimize missed erasing.
When you choose specified area erasing, specify at least one area for CustomAreas.
-auto erasing
- custom: specified area erasing.

     * @param string $SubtitleModel Subtitle erasing model.
**Standard edition (recommended):** For standard subtitle styles, it is usually recommended to select this version for better traceless effects in the details.
**Area edition:** If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.
- standard: standard edition.
- area: area edition.
     * @param string $OcrSwitch Whether to enable OCR subtitle extraction. The default value is OFF.
OCR subtitle extraction is supported only when SubtitleEraseMethod is set to auto. Once enabled, it identifies the text region that appears longest and most stably within the automated erasing area as the subtitle area. The text in the subtitle area is extracted and erased.
-ON
-OFF: disabled.
     * @param string $SubtitleLang Subtitle language, used for guiding OCR recognition, default value zh_en; this parameter is valid only when OcrSwitch is "ON".
- zh_en: Chinese and English
- multi: others
The following are other languages supported for recognition:
Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, Indian Bengali, Indian Gujarati, Indian Kannada, Indian Malayalam, Indian Tamil, Indian Telugu, Slovenian, Polish, Catalonia, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan


     * @param string $SubtitleFormat Subtitle file format, default value vtt; this parameter is valid only when OcrSwitch is "ON".
- srt: SRT format
- vtt: WebVTT format.
     * @param string $TransSwitch Whether to enable subtitle translation, default value is OFF. This parameter is valid only when OcrSwitch is "ON".
-ON
-OFF: disabled.
     * @param string $TransDstLang Subtitle target language, default value en; this parameter is valid only when TransSwitch is "ON".
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
     * @param array $AutoAreas Custom area for automatic erasing.
For the specified area, AI models are used to automatically detect and erase the target objects.
Note: When the erasing method is set to custom, this parameter is invalid. When a template is modified, input [] for the erasing area; if this parameter is unspecified, the template area information will remain unchanged.
     * @param array $CustomAreas Specify the custom region for erasing.
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
