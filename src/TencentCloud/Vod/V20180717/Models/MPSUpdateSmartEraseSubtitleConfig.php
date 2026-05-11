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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subtitle removal configuration for the smart erasing template.
 *
 * @method string getSubtitleEraseMethod() Obtain <p>Subtitle erasure method.<br><strong>Automatic erasing:</strong> Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.<br>When using automatic erasing, if you do not specify AutoAreas, the default region (lower middle part of the frame) will be erased automatically. If AutoAreas is specified, the designated region will be erased instead.<br><strong>Specified area erasure:</strong> If your subtitle position is fixed, it is recommended to directly specify the erasure area to minimize missed erasures.<br>When choosing specified area erasure, please input at least one designated region in CustomAreas.</p><ul><li>auto: Automatic erasing</li><li>custom: Specified area erasure</li></ul>
 * @method void setSubtitleEraseMethod(string $SubtitleEraseMethod) Set <p>Subtitle erasure method.<br><strong>Automatic erasing:</strong> Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.<br>When using automatic erasing, if you do not specify AutoAreas, the default region (lower middle part of the frame) will be erased automatically. If AutoAreas is specified, the designated region will be erased instead.<br><strong>Specified area erasure:</strong> If your subtitle position is fixed, it is recommended to directly specify the erasure area to minimize missed erasures.<br>When choosing specified area erasure, please input at least one designated region in CustomAreas.</p><ul><li>auto: Automatic erasing</li><li>custom: Specified area erasure</li></ul>
 * @method string getSubtitleModel() Obtain <p>Subtitle erasure model. <strong>Standard version (recommended):</strong> If your subtitles have a standard style, it is usually recommended to select this version for better effectiveness in seamless detail removal. <strong>Area edition:</strong> If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition. - standard Standard model - area Regional model</p>
 * @method void setSubtitleModel(string $SubtitleModel) Set <p>Subtitle erasure model. <strong>Standard version (recommended):</strong> If your subtitles have a standard style, it is usually recommended to select this version for better effectiveness in seamless detail removal. <strong>Area edition:</strong> If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition. - standard Standard model - area Regional model</p>
 * @method string getOcrSwitch() Obtain <p>Whether OCR subtitle extraction is enabled. The default value is OFF.<br>OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.</p><ul><li>ON Enable</li><li>OFF Disable</li></ul>
 * @method void setOcrSwitch(string $OcrSwitch) Set <p>Whether OCR subtitle extraction is enabled. The default value is OFF.<br>OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.</p><ul><li>ON Enable</li><li>OFF Disable</li></ul>
 * @method string getSubtitleLang() Obtain <p>Subtitle language, used to guide OCR recognition, default value is zh_en.<br>This parameter is valid only when OcrSwitch is "ON".</p><ul><li>zh_en Chinese and English</li><li>multi Other. Specifically support the following languages: Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, India-Bengali, India-Gujarati, India-Kannada, India-Malayalam, India-Tamil, India-Telugu, Slovenian, Polish, Catalonia, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan</li></ul>
 * @method void setSubtitleLang(string $SubtitleLang) Set <p>Subtitle language, used to guide OCR recognition, default value is zh_en.<br>This parameter is valid only when OcrSwitch is "ON".</p><ul><li>zh_en Chinese and English</li><li>multi Other. Specifically support the following languages: Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, India-Bengali, India-Gujarati, India-Kannada, India-Malayalam, India-Tamil, India-Telugu, Slovenian, Polish, Catalonia, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan</li></ul>
 * @method string getSubtitleFormat() Obtain <p>Subtitle file format. Default value: vtt. This parameter is valid only when OcrSwitch is "ON".</p><ul><li>srt srt format</li><li>vtt WebVTT format</li></ul>
 * @method void setSubtitleFormat(string $SubtitleFormat) Set <p>Subtitle file format. Default value: vtt. This parameter is valid only when OcrSwitch is "ON".</p><ul><li>srt srt format</li><li>vtt WebVTT format</li></ul>
 * @method string getTransSwitch() Obtain <p>Whether to enable subtitle translation. Default value: OFF. This parameter is valid only when OcrSwitch is set to "ON".</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
 * @method void setTransSwitch(string $TransSwitch) Set <p>Whether to enable subtitle translation. Default value: OFF. This parameter is valid only when OcrSwitch is set to "ON".</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
 * @method string getTransDstLang() Obtain <p>The target language for subtitle translation defaults to en. This parameter is valid only when TransSwitch is set to "ON". Currently support the following languages:<br>zh: Simplified Chinese<br>en: English<br>ja: Japanese<br>ko: Korean<br>fr: French<br>es: Spanish<br>it: Italian<br>de: German<br>tr: Turkish<br>ru: Russian<br>pt: Portuguese<br>vi: Vietnamese<br>id: Indonesian<br>ms: Malay<br>th: Thai<br>ar: Arabic<br>hi: Hindi</p>
 * @method void setTransDstLang(string $TransDstLang) Set <p>The target language for subtitle translation defaults to en. This parameter is valid only when TransSwitch is set to "ON". Currently support the following languages:<br>zh: Simplified Chinese<br>en: English<br>ja: Japanese<br>ko: Korean<br>fr: French<br>es: Spanish<br>it: Italian<br>de: German<br>tr: Turkish<br>ru: Russian<br>pt: Portuguese<br>vi: Vietnamese<br>id: Indonesian<br>ms: Malay<br>th: Thai<br>ar: Arabic<br>hi: Hindi</p>
 * @method array getAutoAreas() Obtain <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets.<br>Note: When the erase method is set to custom, this parameter will not take effect. To modify the template, input [] for region cleanup. The template region information remains unchanged if not provided.</p>
 * @method void setAutoAreas(array $AutoAreas) Set <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets.<br>Note: When the erase method is set to custom, this parameter will not take effect. To modify the template, input [] for region cleanup. The template region information remains unchanged if not provided.</p>
 * @method array getCustomAreas() Obtain <p>Specify the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: When modifying the template, import [] to clear regions. The template region information remains unchanged if not imported.</p>
 * @method void setCustomAreas(array $CustomAreas) Set <p>Specify the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: When modifying the template, import [] to clear regions. The template region information remains unchanged if not imported.</p>
 */
class MPSUpdateSmartEraseSubtitleConfig extends AbstractModel
{
    /**
     * @var string <p>Subtitle erasure method.<br><strong>Automatic erasing:</strong> Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.<br>When using automatic erasing, if you do not specify AutoAreas, the default region (lower middle part of the frame) will be erased automatically. If AutoAreas is specified, the designated region will be erased instead.<br><strong>Specified area erasure:</strong> If your subtitle position is fixed, it is recommended to directly specify the erasure area to minimize missed erasures.<br>When choosing specified area erasure, please input at least one designated region in CustomAreas.</p><ul><li>auto: Automatic erasing</li><li>custom: Specified area erasure</li></ul>
     */
    public $SubtitleEraseMethod;

    /**
     * @var string <p>Subtitle erasure model. <strong>Standard version (recommended):</strong> If your subtitles have a standard style, it is usually recommended to select this version for better effectiveness in seamless detail removal. <strong>Area edition:</strong> If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition. - standard Standard model - area Regional model</p>
     */
    public $SubtitleModel;

    /**
     * @var string <p>Whether OCR subtitle extraction is enabled. The default value is OFF.<br>OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.</p><ul><li>ON Enable</li><li>OFF Disable</li></ul>
     */
    public $OcrSwitch;

    /**
     * @var string <p>Subtitle language, used to guide OCR recognition, default value is zh_en.<br>This parameter is valid only when OcrSwitch is "ON".</p><ul><li>zh_en Chinese and English</li><li>multi Other. Specifically support the following languages: Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, India-Bengali, India-Gujarati, India-Kannada, India-Malayalam, India-Tamil, India-Telugu, Slovenian, Polish, Catalonia, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan</li></ul>
     */
    public $SubtitleLang;

    /**
     * @var string <p>Subtitle file format. Default value: vtt. This parameter is valid only when OcrSwitch is "ON".</p><ul><li>srt srt format</li><li>vtt WebVTT format</li></ul>
     */
    public $SubtitleFormat;

    /**
     * @var string <p>Whether to enable subtitle translation. Default value: OFF. This parameter is valid only when OcrSwitch is set to "ON".</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
     */
    public $TransSwitch;

    /**
     * @var string <p>The target language for subtitle translation defaults to en. This parameter is valid only when TransSwitch is set to "ON". Currently support the following languages:<br>zh: Simplified Chinese<br>en: English<br>ja: Japanese<br>ko: Korean<br>fr: French<br>es: Spanish<br>it: Italian<br>de: German<br>tr: Turkish<br>ru: Russian<br>pt: Portuguese<br>vi: Vietnamese<br>id: Indonesian<br>ms: Malay<br>th: Thai<br>ar: Arabic<br>hi: Hindi</p>
     */
    public $TransDstLang;

    /**
     * @var array <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets.<br>Note: When the erase method is set to custom, this parameter will not take effect. To modify the template, input [] for region cleanup. The template region information remains unchanged if not provided.</p>
     */
    public $AutoAreas;

    /**
     * @var array <p>Specify the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: When modifying the template, import [] to clear regions. The template region information remains unchanged if not imported.</p>
     */
    public $CustomAreas;

    /**
     * @param string $SubtitleEraseMethod <p>Subtitle erasure method.<br><strong>Automatic erasing:</strong> Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.<br>When using automatic erasing, if you do not specify AutoAreas, the default region (lower middle part of the frame) will be erased automatically. If AutoAreas is specified, the designated region will be erased instead.<br><strong>Specified area erasure:</strong> If your subtitle position is fixed, it is recommended to directly specify the erasure area to minimize missed erasures.<br>When choosing specified area erasure, please input at least one designated region in CustomAreas.</p><ul><li>auto: Automatic erasing</li><li>custom: Specified area erasure</li></ul>
     * @param string $SubtitleModel <p>Subtitle erasure model. <strong>Standard version (recommended):</strong> If your subtitles have a standard style, it is usually recommended to select this version for better effectiveness in seamless detail removal. <strong>Area edition:</strong> If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition. - standard Standard model - area Regional model</p>
     * @param string $OcrSwitch <p>Whether OCR subtitle extraction is enabled. The default value is OFF.<br>OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.</p><ul><li>ON Enable</li><li>OFF Disable</li></ul>
     * @param string $SubtitleLang <p>Subtitle language, used to guide OCR recognition, default value is zh_en.<br>This parameter is valid only when OcrSwitch is "ON".</p><ul><li>zh_en Chinese and English</li><li>multi Other. Specifically support the following languages: Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, India-Bengali, India-Gujarati, India-Kannada, India-Malayalam, India-Tamil, India-Telugu, Slovenian, Polish, Catalonia, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan</li></ul>
     * @param string $SubtitleFormat <p>Subtitle file format. Default value: vtt. This parameter is valid only when OcrSwitch is "ON".</p><ul><li>srt srt format</li><li>vtt WebVTT format</li></ul>
     * @param string $TransSwitch <p>Whether to enable subtitle translation. Default value: OFF. This parameter is valid only when OcrSwitch is set to "ON".</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
     * @param string $TransDstLang <p>The target language for subtitle translation defaults to en. This parameter is valid only when TransSwitch is set to "ON". Currently support the following languages:<br>zh: Simplified Chinese<br>en: English<br>ja: Japanese<br>ko: Korean<br>fr: French<br>es: Spanish<br>it: Italian<br>de: German<br>tr: Turkish<br>ru: Russian<br>pt: Portuguese<br>vi: Vietnamese<br>id: Indonesian<br>ms: Malay<br>th: Thai<br>ar: Arabic<br>hi: Hindi</p>
     * @param array $AutoAreas <p>Automatically erase custom regions. For selected regions, use the AI model to automatically detect and erase existing targets.<br>Note: When the erase method is set to custom, this parameter will not take effect. To modify the template, input [] for region cleanup. The template region information remains unchanged if not provided.</p>
     * @param array $CustomAreas <p>Specify the removal of custom regions. For specified regions, directly perform erasure without detection and recognition within a selected time range. Note: When modifying the template, import [] to clear regions. The template region information remains unchanged if not imported.</p>
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
                $obj = new MPSEraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("CustomAreas",$param) and $param["CustomAreas"] !== null) {
            $this->CustomAreas = [];
            foreach ($param["CustomAreas"] as $key => $value){
                $obj = new MPSEraseTimeArea();
                $obj->deserialize($value);
                array_push($this->CustomAreas, $obj);
            }
        }
    }
}
