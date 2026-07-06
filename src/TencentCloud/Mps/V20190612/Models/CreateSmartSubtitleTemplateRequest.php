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
 * CreateSmartSubtitleTemplate request structure.
 *
 * @method string getName() Obtain <p>Intelligent subtitle template name<br>Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Intelligent subtitle template name<br>Length limit: 64 characters.</p>
 * @method string getVideoSrcLanguage() Obtain <p>Smart subtitling video source language.</p><p>For ASR and subtitle translation parameter values, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#ASRlanguages">ASR Languages</a>.</p><p>The following lists some commonly used values:</p><p><code>auto</code>: automatic identification. <code>zh</code>: Simplified Chinese. <code>en</code>: English. <code>ja</code>: Japanese. <code>ko</code>: Korean. <code>zh-PY</code>: Chinese, English, and Cantonese. <code>zh_medical</code>: Chinese health care. <code>vi</code>: Vietnamese. <code>ms</code>: Malay. <code>id</code>: Indonesian. <code>fil</code>: Filipino. <code>th</code>: Thai. <code>pt</code>: Portuguese. <code>tr</code>: Turkish. <code>ar</code>: Arabic. <code>es</code>: Spanish. <code>hi</code>: Hindi. <code>fr</code>: French. <code>de</code>: German. <code>it</code>: Italian. <code>zh_dialect</code>: Chinese dialect. <code>zh_en</code>: Chinese and English. <code>yue</code>: Cantonese. <code>ru</code>: Russian. <code>prime_zh</code>: Chinese and English dialects.</p><p>OCR only supports the following values:</p><p><code>zh_en</code>: Chinese and English<br><code>multi</code>: others</p><p>For languages supported by different values, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#OCRlanguages">OCR Languages</a></p>
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) Set <p>Smart subtitling video source language.</p><p>For ASR and subtitle translation parameter values, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#ASRlanguages">ASR Languages</a>.</p><p>The following lists some commonly used values:</p><p><code>auto</code>: automatic identification. <code>zh</code>: Simplified Chinese. <code>en</code>: English. <code>ja</code>: Japanese. <code>ko</code>: Korean. <code>zh-PY</code>: Chinese, English, and Cantonese. <code>zh_medical</code>: Chinese health care. <code>vi</code>: Vietnamese. <code>ms</code>: Malay. <code>id</code>: Indonesian. <code>fil</code>: Filipino. <code>th</code>: Thai. <code>pt</code>: Portuguese. <code>tr</code>: Turkish. <code>ar</code>: Arabic. <code>es</code>: Spanish. <code>hi</code>: Hindi. <code>fr</code>: French. <code>de</code>: German. <code>it</code>: Italian. <code>zh_dialect</code>: Chinese dialect. <code>zh_en</code>: Chinese and English. <code>yue</code>: Cantonese. <code>ru</code>: Russian. <code>prime_zh</code>: Chinese and English dialects.</p><p>OCR only supports the following values:</p><p><code>zh_en</code>: Chinese and English<br><code>multi</code>: others</p><p>For languages supported by different values, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#OCRlanguages">OCR Languages</a></p>
 * @method integer getSubtitleType() Obtain <p>Intelligent caption subtitle language type<br>0: Source language<br>1: Target language<br>2: Source language + target language<br>Only 0 is supported when TranslateSwitch is OFF<br>Only 1 or 2 is supported when TranslateSwitch is ON</p>
 * @method void setSubtitleType(integer $SubtitleType) Set <p>Intelligent caption subtitle language type<br>0: Source language<br>1: Target language<br>2: Source language + target language<br>Only 0 is supported when TranslateSwitch is OFF<br>Only 1 or 2 is supported when TranslateSwitch is ON</p>
 * @method string getComment() Obtain <p>Intelligent caption template description information<br>Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Intelligent caption template description information<br>Length limit: 256 characters.</p>
 * @method string getSubtitleFormat() Obtain <p>Intelligent subtitle file format:</p><ul><li>For ASR recognition translation processing type:<ul><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li><li>Leave blank or fill in the blank: no subtitle file generated</li></ul></li><li>For pure subtitle translation processing type:<ul><li>original: consistent with the source file</li><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li></ul></li><li>For OCR recognition translation processing type:<ul><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li></ul></li></ul><p><strong>Note</strong>:</p><ul><li>For ASR recognition method, do not leave blank or not pass when translating 2 or more languages.</li><li>For pure subtitle translation method, do not leave blank or not pass.</li><li>For OCR tasks, it is allowed to leave blank or not pass when suppression is enabled.</li></ul>
 * @method void setSubtitleFormat(string $SubtitleFormat) Set <p>Intelligent subtitle file format:</p><ul><li>For ASR recognition translation processing type:<ul><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li><li>Leave blank or fill in the blank: no subtitle file generated</li></ul></li><li>For pure subtitle translation processing type:<ul><li>original: consistent with the source file</li><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li></ul></li><li>For OCR recognition translation processing type:<ul><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li></ul></li></ul><p><strong>Note</strong>:</p><ul><li>For ASR recognition method, do not leave blank or not pass when translating 2 or more languages.</li><li>For pure subtitle translation method, do not leave blank or not pass.</li><li>For OCR tasks, it is allowed to leave blank or not pass when suppression is enabled.</li></ul>
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() Obtain <p>ASR hot word lexicon parameter</p>
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) Set <p>ASR hot word lexicon parameter</p>
 * @method string getTranslateSwitch() Obtain <p>Subtitle translation switch<br><code>ON</code>: Enable translation<br><code>OFF</code>: Disable translation</p><p><strong>Note</strong>: For pure subtitle translation mode, the default value is enabled if the field is unspecified. The field cannot be left blank or set to <code>OFF</code>.</p>
 * @method void setTranslateSwitch(string $TranslateSwitch) Set <p>Subtitle translation switch<br><code>ON</code>: Enable translation<br><code>OFF</code>: Disable translation</p><p><strong>Note</strong>: For pure subtitle translation mode, the default value is enabled if the field is unspecified. The field cannot be left blank or set to <code>OFF</code>.</p>
 * @method string getTranslateDstLanguage() Obtain <p>This parameter takes effect when the value of TranslateSwitch is ON. Valid translation languages:</p><p>For ASR extraction and translation, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#ASRlanguages">ASR Translation Languages</a>.<br>For OCR extraction and translation, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#OCRlanguages">OCR Translation Languages</a>.</p><p><strong>Note</strong>: Use <code>/</code> to separate multiple languages, such as <code>en/ja</code>, which indicates English and Japanese.</p><p>Examples of some commonly used languages:</p><p><code>ar</code>: Arabic<br><code>en</code>: English<br><code>fr</code>: French<br><code>it</code>: Italian<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>ru</code>: Russian<br><code>th</code>: Thai<br><code>tr</code>: Turkish<br><code>vi</code>: Vietnamese<br><code>yue</code>: Cantonese<br><code>zh</code>: Simplified Chinese<br><code>zh-TW</code>: Traditional Chinese</p>
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) Set <p>This parameter takes effect when the value of TranslateSwitch is ON. Valid translation languages:</p><p>For ASR extraction and translation, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#ASRlanguages">ASR Translation Languages</a>.<br>For OCR extraction and translation, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#OCRlanguages">OCR Translation Languages</a>.</p><p><strong>Note</strong>: Use <code>/</code> to separate multiple languages, such as <code>en/ja</code>, which indicates English and Japanese.</p><p>Examples of some commonly used languages:</p><p><code>ar</code>: Arabic<br><code>en</code>: English<br><code>fr</code>: French<br><code>it</code>: Italian<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>ru</code>: Russian<br><code>th</code>: Thai<br><code>tr</code>: Turkish<br><code>vi</code>: Vietnamese<br><code>yue</code>: Cantonese<br><code>zh</code>: Simplified Chinese<br><code>zh-TW</code>: Traditional Chinese</p>
 * @method integer getProcessType() Obtain <p>Subtitle processing type:</p><ul><li>0: ASR recognition subtitle</li><li>1: Pure caption translation</li><li>2: OCR recognition subtitle</li></ul><p><strong>Note</strong>: The default type is ASR recognition subtitle if the field is unspecified.</p>
 * @method void setProcessType(integer $ProcessType) Set <p>Subtitle processing type:</p><ul><li>0: ASR recognition subtitle</li><li>1: Pure caption translation</li><li>2: OCR recognition subtitle</li></ul><p><strong>Note</strong>: The default type is ASR recognition subtitle if the field is unspecified.</p>
 * @method SelectingSubtitleAreasConfig getSelectingSubtitleAreasConfig() Obtain <p>Area configurations for the subtitle OCR extraction box</p>
 * @method void setSelectingSubtitleAreasConfig(SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig) Set <p>Area configurations for the subtitle OCR extraction box</p>
 * @method integer getSubtitleEmbedId() Obtain <p>Suppression Template id. Only allowed to fill in when ProcessType is 0 or 2 (task type is ASR or OCR). Cannot fill in when multiple target languages are enabled.</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set <p>Suppression Template id. Only allowed to fill in when ProcessType is 0 or 2 (task type is ASR or OCR). Cannot fill in when multiple target languages are enabled.</p>
 * @method integer getSpeakerMode() Obtain <p>Speaker identification switch. Valid values:<br>0: Speaker identification is disabled.<br>1: Speaker identification is enabled.<br>By default, speaker identification is disabled.</p>
 * @method void setSpeakerMode(integer $SpeakerMode) Set <p>Speaker identification switch. Valid values:<br>0: Speaker identification is disabled.<br>1: Speaker identification is enabled.<br>By default, speaker identification is disabled.</p>
 * @method integer getSpeakerLabel() Obtain <p>Indicates whether to output the identified speaker to the subtitle file. Valid values:<br>0: The speaker is not output to the subtitle file.<br>1: The speaker is output to the VTT subtitle file.<br>Note: To use this parameter, the value of SpeakerMode cannot be 0.<br>By default, the speaker is not output to the subtitle file.</p>
 * @method void setSpeakerLabel(integer $SpeakerLabel) Set <p>Indicates whether to output the identified speaker to the subtitle file. Valid values:<br>0: The speaker is not output to the subtitle file.<br>1: The speaker is output to the VTT subtitle file.<br>Note: To use this parameter, the value of SpeakerMode cannot be 0.<br>By default, the speaker is not output to the subtitle file.</p>
 */
class CreateSmartSubtitleTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>Intelligent subtitle template name<br>Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Smart subtitling video source language.</p><p>For ASR and subtitle translation parameter values, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#ASRlanguages">ASR Languages</a>.</p><p>The following lists some commonly used values:</p><p><code>auto</code>: automatic identification. <code>zh</code>: Simplified Chinese. <code>en</code>: English. <code>ja</code>: Japanese. <code>ko</code>: Korean. <code>zh-PY</code>: Chinese, English, and Cantonese. <code>zh_medical</code>: Chinese health care. <code>vi</code>: Vietnamese. <code>ms</code>: Malay. <code>id</code>: Indonesian. <code>fil</code>: Filipino. <code>th</code>: Thai. <code>pt</code>: Portuguese. <code>tr</code>: Turkish. <code>ar</code>: Arabic. <code>es</code>: Spanish. <code>hi</code>: Hindi. <code>fr</code>: French. <code>de</code>: German. <code>it</code>: Italian. <code>zh_dialect</code>: Chinese dialect. <code>zh_en</code>: Chinese and English. <code>yue</code>: Cantonese. <code>ru</code>: Russian. <code>prime_zh</code>: Chinese and English dialects.</p><p>OCR only supports the following values:</p><p><code>zh_en</code>: Chinese and English<br><code>multi</code>: others</p><p>For languages supported by different values, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#OCRlanguages">OCR Languages</a></p>
     */
    public $VideoSrcLanguage;

    /**
     * @var integer <p>Intelligent caption subtitle language type<br>0: Source language<br>1: Target language<br>2: Source language + target language<br>Only 0 is supported when TranslateSwitch is OFF<br>Only 1 or 2 is supported when TranslateSwitch is ON</p>
     */
    public $SubtitleType;

    /**
     * @var string <p>Intelligent caption template description information<br>Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var string <p>Intelligent subtitle file format:</p><ul><li>For ASR recognition translation processing type:<ul><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li><li>Leave blank or fill in the blank: no subtitle file generated</li></ul></li><li>For pure subtitle translation processing type:<ul><li>original: consistent with the source file</li><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li></ul></li><li>For OCR recognition translation processing type:<ul><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li></ul></li></ul><p><strong>Note</strong>:</p><ul><li>For ASR recognition method, do not leave blank or not pass when translating 2 or more languages.</li><li>For pure subtitle translation method, do not leave blank or not pass.</li><li>For OCR tasks, it is allowed to leave blank or not pass when suppression is enabled.</li></ul>
     */
    public $SubtitleFormat;

    /**
     * @var AsrHotWordsConfigure <p>ASR hot word lexicon parameter</p>
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string <p>Subtitle translation switch<br><code>ON</code>: Enable translation<br><code>OFF</code>: Disable translation</p><p><strong>Note</strong>: For pure subtitle translation mode, the default value is enabled if the field is unspecified. The field cannot be left blank or set to <code>OFF</code>.</p>
     */
    public $TranslateSwitch;

    /**
     * @var string <p>This parameter takes effect when the value of TranslateSwitch is ON. Valid translation languages:</p><p>For ASR extraction and translation, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#ASRlanguages">ASR Translation Languages</a>.<br>For OCR extraction and translation, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#OCRlanguages">OCR Translation Languages</a>.</p><p><strong>Note</strong>: Use <code>/</code> to separate multiple languages, such as <code>en/ja</code>, which indicates English and Japanese.</p><p>Examples of some commonly used languages:</p><p><code>ar</code>: Arabic<br><code>en</code>: English<br><code>fr</code>: French<br><code>it</code>: Italian<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>ru</code>: Russian<br><code>th</code>: Thai<br><code>tr</code>: Turkish<br><code>vi</code>: Vietnamese<br><code>yue</code>: Cantonese<br><code>zh</code>: Simplified Chinese<br><code>zh-TW</code>: Traditional Chinese</p>
     */
    public $TranslateDstLanguage;

    /**
     * @var integer <p>Subtitle processing type:</p><ul><li>0: ASR recognition subtitle</li><li>1: Pure caption translation</li><li>2: OCR recognition subtitle</li></ul><p><strong>Note</strong>: The default type is ASR recognition subtitle if the field is unspecified.</p>
     */
    public $ProcessType;

    /**
     * @var SelectingSubtitleAreasConfig <p>Area configurations for the subtitle OCR extraction box</p>
     */
    public $SelectingSubtitleAreasConfig;

    /**
     * @var integer <p>Suppression Template id. Only allowed to fill in when ProcessType is 0 or 2 (task type is ASR or OCR). Cannot fill in when multiple target languages are enabled.</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>Speaker identification switch. Valid values:<br>0: Speaker identification is disabled.<br>1: Speaker identification is enabled.<br>By default, speaker identification is disabled.</p>
     */
    public $SpeakerMode;

    /**
     * @var integer <p>Indicates whether to output the identified speaker to the subtitle file. Valid values:<br>0: The speaker is not output to the subtitle file.<br>1: The speaker is output to the VTT subtitle file.<br>Note: To use this parameter, the value of SpeakerMode cannot be 0.<br>By default, the speaker is not output to the subtitle file.</p>
     */
    public $SpeakerLabel;

    /**
     * @param string $Name <p>Intelligent subtitle template name<br>Length limit: 64 characters.</p>
     * @param string $VideoSrcLanguage <p>Smart subtitling video source language.</p><p>For ASR and subtitle translation parameter values, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#ASRlanguages">ASR Languages</a>.</p><p>The following lists some commonly used values:</p><p><code>auto</code>: automatic identification. <code>zh</code>: Simplified Chinese. <code>en</code>: English. <code>ja</code>: Japanese. <code>ko</code>: Korean. <code>zh-PY</code>: Chinese, English, and Cantonese. <code>zh_medical</code>: Chinese health care. <code>vi</code>: Vietnamese. <code>ms</code>: Malay. <code>id</code>: Indonesian. <code>fil</code>: Filipino. <code>th</code>: Thai. <code>pt</code>: Portuguese. <code>tr</code>: Turkish. <code>ar</code>: Arabic. <code>es</code>: Spanish. <code>hi</code>: Hindi. <code>fr</code>: French. <code>de</code>: German. <code>it</code>: Italian. <code>zh_dialect</code>: Chinese dialect. <code>zh_en</code>: Chinese and English. <code>yue</code>: Cantonese. <code>ru</code>: Russian. <code>prime_zh</code>: Chinese and English dialects.</p><p>OCR only supports the following values:</p><p><code>zh_en</code>: Chinese and English<br><code>multi</code>: others</p><p>For languages supported by different values, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#OCRlanguages">OCR Languages</a></p>
     * @param integer $SubtitleType <p>Intelligent caption subtitle language type<br>0: Source language<br>1: Target language<br>2: Source language + target language<br>Only 0 is supported when TranslateSwitch is OFF<br>Only 1 or 2 is supported when TranslateSwitch is ON</p>
     * @param string $Comment <p>Intelligent caption template description information<br>Length limit: 256 characters.</p>
     * @param string $SubtitleFormat <p>Intelligent subtitle file format:</p><ul><li>For ASR recognition translation processing type:<ul><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li><li>Leave blank or fill in the blank: no subtitle file generated</li></ul></li><li>For pure subtitle translation processing type:<ul><li>original: consistent with the source file</li><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li></ul></li><li>For OCR recognition translation processing type:<ul><li>vtt: WebVTT format subtitle</li><li>srt: SRT format subtitle</li></ul></li></ul><p><strong>Note</strong>:</p><ul><li>For ASR recognition method, do not leave blank or not pass when translating 2 or more languages.</li><li>For pure subtitle translation method, do not leave blank or not pass.</li><li>For OCR tasks, it is allowed to leave blank or not pass when suppression is enabled.</li></ul>
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure <p>ASR hot word lexicon parameter</p>
     * @param string $TranslateSwitch <p>Subtitle translation switch<br><code>ON</code>: Enable translation<br><code>OFF</code>: Disable translation</p><p><strong>Note</strong>: For pure subtitle translation mode, the default value is enabled if the field is unspecified. The field cannot be left blank or set to <code>OFF</code>.</p>
     * @param string $TranslateDstLanguage <p>This parameter takes effect when the value of TranslateSwitch is ON. Valid translation languages:</p><p>For ASR extraction and translation, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#ASRlanguages">ASR Translation Languages</a>.<br>For OCR extraction and translation, see <a href="https://www.tencentcloud.com/document/product/862/116243?from_cn_redirect=1#OCRlanguages">OCR Translation Languages</a>.</p><p><strong>Note</strong>: Use <code>/</code> to separate multiple languages, such as <code>en/ja</code>, which indicates English and Japanese.</p><p>Examples of some commonly used languages:</p><p><code>ar</code>: Arabic<br><code>en</code>: English<br><code>fr</code>: French<br><code>it</code>: Italian<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>ru</code>: Russian<br><code>th</code>: Thai<br><code>tr</code>: Turkish<br><code>vi</code>: Vietnamese<br><code>yue</code>: Cantonese<br><code>zh</code>: Simplified Chinese<br><code>zh-TW</code>: Traditional Chinese</p>
     * @param integer $ProcessType <p>Subtitle processing type:</p><ul><li>0: ASR recognition subtitle</li><li>1: Pure caption translation</li><li>2: OCR recognition subtitle</li></ul><p><strong>Note</strong>: The default type is ASR recognition subtitle if the field is unspecified.</p>
     * @param SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig <p>Area configurations for the subtitle OCR extraction box</p>
     * @param integer $SubtitleEmbedId <p>Suppression Template id. Only allowed to fill in when ProcessType is 0 or 2 (task type is ASR or OCR). Cannot fill in when multiple target languages are enabled.</p>
     * @param integer $SpeakerMode <p>Speaker identification switch. Valid values:<br>0: Speaker identification is disabled.<br>1: Speaker identification is enabled.<br>By default, speaker identification is disabled.</p>
     * @param integer $SpeakerLabel <p>Indicates whether to output the identified speaker to the subtitle file. Valid values:<br>0: The speaker is not output to the subtitle file.<br>1: The speaker is output to the VTT subtitle file.<br>Note: To use this parameter, the value of SpeakerMode cannot be 0.<br>By default, the speaker is not output to the subtitle file.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VideoSrcLanguage",$param) and $param["VideoSrcLanguage"] !== null) {
            $this->VideoSrcLanguage = $param["VideoSrcLanguage"];
        }

        if (array_key_exists("SubtitleType",$param) and $param["SubtitleType"] !== null) {
            $this->SubtitleType = $param["SubtitleType"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("AsrHotWordsConfigure",$param) and $param["AsrHotWordsConfigure"] !== null) {
            $this->AsrHotWordsConfigure = new AsrHotWordsConfigure();
            $this->AsrHotWordsConfigure->deserialize($param["AsrHotWordsConfigure"]);
        }

        if (array_key_exists("TranslateSwitch",$param) and $param["TranslateSwitch"] !== null) {
            $this->TranslateSwitch = $param["TranslateSwitch"];
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("SelectingSubtitleAreasConfig",$param) and $param["SelectingSubtitleAreasConfig"] !== null) {
            $this->SelectingSubtitleAreasConfig = new SelectingSubtitleAreasConfig();
            $this->SelectingSubtitleAreasConfig->deserialize($param["SelectingSubtitleAreasConfig"]);
        }

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("SpeakerMode",$param) and $param["SpeakerMode"] !== null) {
            $this->SpeakerMode = $param["SpeakerMode"];
        }

        if (array_key_exists("SpeakerLabel",$param) and $param["SpeakerLabel"] !== null) {
            $this->SpeakerLabel = $param["SpeakerLabel"];
        }
    }
}
