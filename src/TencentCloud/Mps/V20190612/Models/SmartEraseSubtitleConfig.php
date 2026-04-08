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
 * @method string getSubtitleEraseMethod() Obtain <p>Subtitle erasure method.<br><strong>Automatic erasing:</strong> Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.<br>When using automatic erasing, if you do not specify AutoAreas, the default region (lower middle part of the frame) will be erased automatically. If AutoAreas is specified, the designated region will be erased instead.<br><strong>Specified area erasure:</strong> If your subtitle position is fixed, it is recommended to directly specify the erasure area to minimize missed erasures.<br>When choosing specified area erasure, please input at least one designated region in CustomAreas.</p><ul><li>auto: Automatic erasing</li><li>custom: Specified area erasure</li></ul>
 * @method void setSubtitleEraseMethod(string $SubtitleEraseMethod) Set <p>Subtitle erasure method.<br><strong>Automatic erasing:</strong> Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.<br>When using automatic erasing, if you do not specify AutoAreas, the default region (lower middle part of the frame) will be erased automatically. If AutoAreas is specified, the designated region will be erased instead.<br><strong>Specified area erasure:</strong> If your subtitle position is fixed, it is recommended to directly specify the erasure area to minimize missed erasures.<br>When choosing specified area erasure, please input at least one designated region in CustomAreas.</p><ul><li>auto: Automatic erasing</li><li>custom: Specified area erasure</li></ul>
 * @method string getSubtitleModel() Obtain <p>Subtitle erasure model.<br><strong>Standard version (recommended):</strong> If your subtitles have a standard style, it is usually recommended to select this version for better effectiveness in seamless detail removal.<br><strong>Area edition:</strong> If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.</p><ul><li>standard Standard model</li><li>area Regional model</li></ul>
 * @method void setSubtitleModel(string $SubtitleModel) Set <p>Subtitle erasure model.<br><strong>Standard version (recommended):</strong> If your subtitles have a standard style, it is usually recommended to select this version for better effectiveness in seamless detail removal.<br><strong>Area edition:</strong> If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.</p><ul><li>standard Standard model</li><li>area Regional model</li></ul>
 * @method string getOcrSwitch() Obtain <p>Whether OCR subtitle extraction is enabled. The default value is OFF.<br>OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.</p><ul><li>ON Enable</li><li>OFF Disable</li></ul>
 * @method void setOcrSwitch(string $OcrSwitch) Set <p>Whether OCR subtitle extraction is enabled. The default value is OFF.<br>OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.</p><ul><li>ON Enable</li><li>OFF Disable</li></ul>
 * @method string getSubtitleLang() Obtain <p>Subtitle language, used to guide OCR recognition, default value is zh_en. This parameter is valid only when OcrSwitch is "ON".</p><ul><li>zh_en Chinese and English</li><li>multi other<br>The following languages are supported for recognition:<br>Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, Bengali, Gujarati, Kannada, Malayalam, Tamil, Telugu, Slovenian, Polish, Catalan, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan</li></ul>
 * @method void setSubtitleLang(string $SubtitleLang) Set <p>Subtitle language, used to guide OCR recognition, default value is zh_en. This parameter is valid only when OcrSwitch is "ON".</p><ul><li>zh_en Chinese and English</li><li>multi other<br>The following languages are supported for recognition:<br>Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, Bengali, Gujarati, Kannada, Malayalam, Tamil, Telugu, Slovenian, Polish, Catalan, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan</li></ul>
 * @method string getSubtitleFormat() Obtain <p>Subtitle file format. Default value is vtt. This parameter is valid only when OcrSwitch takes value "ON".</p><ul><li>srt srt format</li><li>vtt WebVTT format</li><li>When SubtitleEmbedId is filled, it can take value empty string, which means no subtitle file is output.</li></ul>
 * @method void setSubtitleFormat(string $SubtitleFormat) Set <p>Subtitle file format. Default value is vtt. This parameter is valid only when OcrSwitch takes value "ON".</p><ul><li>srt srt format</li><li>vtt WebVTT format</li><li>When SubtitleEmbedId is filled, it can take value empty string, which means no subtitle file is output.</li></ul>
 * @method string getTransSwitch() Obtain <p>Whether to enable subtitle translation. The default value is OFF. This parameter is valid only when OcrSwitch is set to "ON".</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
 * @method void setTransSwitch(string $TransSwitch) Set <p>Whether to enable subtitle translation. The default value is OFF. This parameter is valid only when OcrSwitch is set to "ON".</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
 * @method string getTransDstLang() Obtain <p>The target language for subtitle translation defaults to en. This parameter is valid only when TransSwitch is set to "ON".<br>The following languages are currently supported:<br>zh: Simplified Chinese<br>en: English<br>ja: Japanese<br>ko: Korean<br>fr: French<br>es: Spanish<br>it: Italian<br>de: German<br>tr: Turkish<br>ru: Russian<br>pt: Portuguese<br>vi: Vietnamese<br>id: Indonesian<br>ms: Malay<br>th: Thai<br>ar: Arabic<br>hi: Hindi</p>
 * @method void setTransDstLang(string $TransDstLang) Set <p>The target language for subtitle translation defaults to en. This parameter is valid only when TransSwitch is set to "ON".<br>The following languages are currently supported:<br>zh: Simplified Chinese<br>en: English<br>ja: Japanese<br>ko: Korean<br>fr: French<br>es: Spanish<br>it: Italian<br>de: German<br>tr: Turkish<br>ru: Russian<br>pt: Portuguese<br>vi: Vietnamese<br>id: Indonesian<br>ms: Malay<br>th: Thai<br>ar: Arabic<br>hi: Hindi</p>
 * @method array getAutoAreas() Obtain <p>Automatically erase custom regions.<br>For selected regions, use the AI model to automatically detect and erase existing targets.<br>Note: When the erase method is set to custom, this parameter will not take effect. To modify the template, input [] for region cleanup. If not provided, the template region information remains unchanged.</p>
 * @method void setAutoAreas(array $AutoAreas) Set <p>Automatically erase custom regions.<br>For selected regions, use the AI model to automatically detect and erase existing targets.<br>Note: When the erase method is set to custom, this parameter will not take effect. To modify the template, input [] for region cleanup. If not provided, the template region information remains unchanged.</p>
 * @method array getCustomAreas() Obtain <p>Designate the removal of custom regions.<br>For specified regions, directly perform erasure without detection and recognition within a selected time range.<br>Note: When modifying the template, import [] to clear regions. The template region information remains unchanged if not imported.</p>
 * @method void setCustomAreas(array $CustomAreas) Set <p>Designate the removal of custom regions.<br>For specified regions, directly perform erasure without detection and recognition within a selected time range.<br>Note: When modifying the template, import [] to clear regions. The template region information remains unchanged if not imported.</p>
 * @method integer getSubtitleEmbedId() Obtain <p>Subtitle suppression template id. Only allowed to fill in when OCR translation is enabled.</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set <p>Subtitle suppression template id. Only allowed to fill in when OCR translation is enabled.</p>
 * @method integer getUseOriginalPos() Obtain <p>Suppression configuration, enabled by default, compresses subtitles back to their original position. It can be filled only when OCR translation is turned on. A value of 0 indicates disabled suppression.</p>
 * @method void setUseOriginalPos(integer $UseOriginalPos) Set <p>Suppression configuration, enabled by default, compresses subtitles back to their original position. It can be filled only when OCR translation is turned on. A value of 0 indicates disabled suppression.</p>
 * @method integer getUseOriginalSize() Obtain <p>Suppression configuration, enabled by default. After being turned on, the original subtitle font size is used. It can only be filled when OCR translation is enabled. Setting it to 0 means non-use of the original font size.</p>
 * @method void setUseOriginalSize(integer $UseOriginalSize) Set <p>Suppression configuration, enabled by default. After being turned on, the original subtitle font size is used. It can only be filled when OCR translation is enabled. Setting it to 0 means non-use of the original font size.</p>
 */
class SmartEraseSubtitleConfig extends AbstractModel
{
    /**
     * @var string <p>Subtitle erasure method.<br><strong>Automatic erasing:</strong> Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.<br>When using automatic erasing, if you do not specify AutoAreas, the default region (lower middle part of the frame) will be erased automatically. If AutoAreas is specified, the designated region will be erased instead.<br><strong>Specified area erasure:</strong> If your subtitle position is fixed, it is recommended to directly specify the erasure area to minimize missed erasures.<br>When choosing specified area erasure, please input at least one designated region in CustomAreas.</p><ul><li>auto: Automatic erasing</li><li>custom: Specified area erasure</li></ul>
     */
    public $SubtitleEraseMethod;

    /**
     * @var string <p>Subtitle erasure model.<br><strong>Standard version (recommended):</strong> If your subtitles have a standard style, it is usually recommended to select this version for better effectiveness in seamless detail removal.<br><strong>Area edition:</strong> If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.</p><ul><li>standard Standard model</li><li>area Regional model</li></ul>
     */
    public $SubtitleModel;

    /**
     * @var string <p>Whether OCR subtitle extraction is enabled. The default value is OFF.<br>OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.</p><ul><li>ON Enable</li><li>OFF Disable</li></ul>
     */
    public $OcrSwitch;

    /**
     * @var string <p>Subtitle language, used to guide OCR recognition, default value is zh_en. This parameter is valid only when OcrSwitch is "ON".</p><ul><li>zh_en Chinese and English</li><li>multi other<br>The following languages are supported for recognition:<br>Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, Bengali, Gujarati, Kannada, Malayalam, Tamil, Telugu, Slovenian, Polish, Catalan, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan</li></ul>
     */
    public $SubtitleLang;

    /**
     * @var string <p>Subtitle file format. Default value is vtt. This parameter is valid only when OcrSwitch takes value "ON".</p><ul><li>srt srt format</li><li>vtt WebVTT format</li><li>When SubtitleEmbedId is filled, it can take value empty string, which means no subtitle file is output.</li></ul>
     */
    public $SubtitleFormat;

    /**
     * @var string <p>Whether to enable subtitle translation. The default value is OFF. This parameter is valid only when OcrSwitch is set to "ON".</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
     */
    public $TransSwitch;

    /**
     * @var string <p>The target language for subtitle translation defaults to en. This parameter is valid only when TransSwitch is set to "ON".<br>The following languages are currently supported:<br>zh: Simplified Chinese<br>en: English<br>ja: Japanese<br>ko: Korean<br>fr: French<br>es: Spanish<br>it: Italian<br>de: German<br>tr: Turkish<br>ru: Russian<br>pt: Portuguese<br>vi: Vietnamese<br>id: Indonesian<br>ms: Malay<br>th: Thai<br>ar: Arabic<br>hi: Hindi</p>
     */
    public $TransDstLang;

    /**
     * @var array <p>Automatically erase custom regions.<br>For selected regions, use the AI model to automatically detect and erase existing targets.<br>Note: When the erase method is set to custom, this parameter will not take effect. To modify the template, input [] for region cleanup. If not provided, the template region information remains unchanged.</p>
     */
    public $AutoAreas;

    /**
     * @var array <p>Designate the removal of custom regions.<br>For specified regions, directly perform erasure without detection and recognition within a selected time range.<br>Note: When modifying the template, import [] to clear regions. The template region information remains unchanged if not imported.</p>
     */
    public $CustomAreas;

    /**
     * @var integer <p>Subtitle suppression template id. Only allowed to fill in when OCR translation is enabled.</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>Suppression configuration, enabled by default, compresses subtitles back to their original position. It can be filled only when OCR translation is turned on. A value of 0 indicates disabled suppression.</p>
     */
    public $UseOriginalPos;

    /**
     * @var integer <p>Suppression configuration, enabled by default. After being turned on, the original subtitle font size is used. It can only be filled when OCR translation is enabled. Setting it to 0 means non-use of the original font size.</p>
     */
    public $UseOriginalSize;

    /**
     * @param string $SubtitleEraseMethod <p>Subtitle erasure method.<br><strong>Automatic erasing:</strong> Video subtitles are automatically recognized using an AI model and are erased without traces to generate a new video. However, missed or incorrect erasing may occur due to image interference and special subtitle styles. In this case, you can specify the erasing area.<br>When using automatic erasing, if you do not specify AutoAreas, the default region (lower middle part of the frame) will be erased automatically. If AutoAreas is specified, the designated region will be erased instead.<br><strong>Specified area erasure:</strong> If your subtitle position is fixed, it is recommended to directly specify the erasure area to minimize missed erasures.<br>When choosing specified area erasure, please input at least one designated region in CustomAreas.</p><ul><li>auto: Automatic erasing</li><li>custom: Specified area erasure</li></ul>
     * @param string $SubtitleModel <p>Subtitle erasure model.<br><strong>Standard version (recommended):</strong> If your subtitles have a standard style, it is usually recommended to select this version for better effectiveness in seamless detail removal.<br><strong>Area edition:</strong> If the subtitles have special styles, such as calligraphy, shadow, or motion effects, you are recommended to select this edition to ensure a larger erasing area. However, the erasing effect in the details is not as good as the standard edition.</p><ul><li>standard Standard model</li><li>area Regional model</li></ul>
     * @param string $OcrSwitch <p>Whether OCR subtitle extraction is enabled. The default value is OFF.<br>OCR subtitle extraction is supported if and only if SubtitleEraseMethod is set to auto. When enabled, it identifies the text region that appears most persistently and stably within the automatic erasing area as the subtitle area. The text within the subtitle area is extracted and erased.</p><ul><li>ON Enable</li><li>OFF Disable</li></ul>
     * @param string $SubtitleLang <p>Subtitle language, used to guide OCR recognition, default value is zh_en. This parameter is valid only when OcrSwitch is "ON".</p><ul><li>zh_en Chinese and English</li><li>multi other<br>The following languages are supported for recognition:<br>Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, Hindi, Arabic, Bengali, Gujarati, Kannada, Malayalam, Tamil, Telugu, Slovenian, Polish, Catalan, Bosnia, Czech, Estonian, Croatian, Punjabi, Marathi, Azerbaijan, Indonesian, Luxembourg, Lithuanian, Latvian, Malta, Slovak, Turkish, Kazakh, Greek, Irish, Belarus, Khmer, Tagalog, Pashto, Persian, Tajikistan</li></ul>
     * @param string $SubtitleFormat <p>Subtitle file format. Default value is vtt. This parameter is valid only when OcrSwitch takes value "ON".</p><ul><li>srt srt format</li><li>vtt WebVTT format</li><li>When SubtitleEmbedId is filled, it can take value empty string, which means no subtitle file is output.</li></ul>
     * @param string $TransSwitch <p>Whether to enable subtitle translation. The default value is OFF. This parameter is valid only when OcrSwitch is set to "ON".</p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
     * @param string $TransDstLang <p>The target language for subtitle translation defaults to en. This parameter is valid only when TransSwitch is set to "ON".<br>The following languages are currently supported:<br>zh: Simplified Chinese<br>en: English<br>ja: Japanese<br>ko: Korean<br>fr: French<br>es: Spanish<br>it: Italian<br>de: German<br>tr: Turkish<br>ru: Russian<br>pt: Portuguese<br>vi: Vietnamese<br>id: Indonesian<br>ms: Malay<br>th: Thai<br>ar: Arabic<br>hi: Hindi</p>
     * @param array $AutoAreas <p>Automatically erase custom regions.<br>For selected regions, use the AI model to automatically detect and erase existing targets.<br>Note: When the erase method is set to custom, this parameter will not take effect. To modify the template, input [] for region cleanup. If not provided, the template region information remains unchanged.</p>
     * @param array $CustomAreas <p>Designate the removal of custom regions.<br>For specified regions, directly perform erasure without detection and recognition within a selected time range.<br>Note: When modifying the template, import [] to clear regions. The template region information remains unchanged if not imported.</p>
     * @param integer $SubtitleEmbedId <p>Subtitle suppression template id. Only allowed to fill in when OCR translation is enabled.</p>
     * @param integer $UseOriginalPos <p>Suppression configuration, enabled by default, compresses subtitles back to their original position. It can be filled only when OCR translation is turned on. A value of 0 indicates disabled suppression.</p>
     * @param integer $UseOriginalSize <p>Suppression configuration, enabled by default. After being turned on, the original subtitle font size is used. It can only be filled when OCR translation is enabled. Setting it to 0 means non-use of the original font size.</p>
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

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("UseOriginalPos",$param) and $param["UseOriginalPos"] !== null) {
            $this->UseOriginalPos = $param["UseOriginalPos"];
        }

        if (array_key_exists("UseOriginalSize",$param) and $param["UseOriginalSize"] !== null) {
            $this->UseOriginalSize = $param["UseOriginalSize"];
        }
    }
}
