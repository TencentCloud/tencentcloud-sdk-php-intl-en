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
 * Smart subtitle template details.
 *
 * @method integer getDefinition() Obtain <p>Unique identifier of the smart subtitle template.</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of the smart subtitle template.</p>
 * @method string getName() Obtain <p>Smart subtitle template name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set <p>Smart subtitle template name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComment() Obtain <p>Smart subtitle template description.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComment(string $Comment) Set <p>Smart subtitle template description.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain <p>Template type. Valid values:</p><ul><li>Preset: preset template.</li><li>Custom: custom template.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set <p>Template type. Valid values:</p><ul><li>Preset: preset template.</li><li>Custom: custom template.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() Obtain <p>ASR hotword lexicon parameters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) Set <p>ASR hotword lexicon parameters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAsrHotWordsLibraryName() Obtain <p>Name of the hotword lexicon associated with the template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrHotWordsLibraryName(string $AsrHotWordsLibraryName) Set <p>Name of the hotword lexicon associated with the template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVideoSrcLanguage() Obtain <p>Video source language list for smart subtitle:</p><p><code>zh</code>: Simplified Chinese<br><code>yue</code>: Cantonese<br><code>zh-PY</code>: Chinese, English, and Cantonese<br><code>zh_medical</code>: Chinese healthcare<br><code>zh_dialect</code>: Chinese dialect<br><code>prime_zh</code>: Chinese and English dialects<br><code>zh_en</code>: Chinese and English<br><code>en</code>: English<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>fr</code>: French<br><code>es</code>: Spanish<br><code>it</code>: Italian<br><code>de</code>: German<br><code>tr</code>: Turkish<br><code>ru</code>: Russian<br><code>pt</code>: Portuguese (Brazil)<br><code>pt-PT</code>: Portuguese (Portugal)<br><code>vi</code>: Vietnamese<br><code>id</code>: Indonesian<br><code>ms</code>: Malay<br><code>th</code>: Thai<br><code>ar</code>: Arabic<br><code>hi</code>: Hindi<br><code>fil</code>: Filipino<br><code>auto</code>: Automatic identification (only supported for subtitle translation)</p>
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) Set <p>Video source language list for smart subtitle:</p><p><code>zh</code>: Simplified Chinese<br><code>yue</code>: Cantonese<br><code>zh-PY</code>: Chinese, English, and Cantonese<br><code>zh_medical</code>: Chinese healthcare<br><code>zh_dialect</code>: Chinese dialect<br><code>prime_zh</code>: Chinese and English dialects<br><code>zh_en</code>: Chinese and English<br><code>en</code>: English<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>fr</code>: French<br><code>es</code>: Spanish<br><code>it</code>: Italian<br><code>de</code>: German<br><code>tr</code>: Turkish<br><code>ru</code>: Russian<br><code>pt</code>: Portuguese (Brazil)<br><code>pt-PT</code>: Portuguese (Portugal)<br><code>vi</code>: Vietnamese<br><code>id</code>: Indonesian<br><code>ms</code>: Malay<br><code>th</code>: Thai<br><code>ar</code>: Arabic<br><code>hi</code>: Hindi<br><code>fil</code>: Filipino<br><code>auto</code>: Automatic identification (only supported for subtitle translation)</p>
 * @method string getSubtitleFormat() Obtain <p>Smart subtitle file format.</p><ul><li>vtt: WebVTT.</li><li>srt: SRT.</li><li>original: same as the source subtitle file (for subtitle translation templates).</li><li>Not specified or empty: no subtitle file generated.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubtitleFormat(string $SubtitleFormat) Set <p>Smart subtitle file format.</p><ul><li>vtt: WebVTT.</li><li>srt: SRT.</li><li>original: same as the source subtitle file (for subtitle translation templates).</li><li>Not specified or empty: no subtitle file generated.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubtitleType() Obtain <p>Smart subtitle language type.<br>0: source language.<br>1: target language.<br>2: source language and target language.<br>Only 0 is supported when TranslateSwitch is OFF.<br>Only 1 or 2 is supported when TranslateSwitch is ON.</p>
 * @method void setSubtitleType(integer $SubtitleType) Set <p>Smart subtitle language type.<br>0: source language.<br>1: target language.<br>2: source language and target language.<br>Only 0 is supported when TranslateSwitch is OFF.<br>Only 1 or 2 is supported when TranslateSwitch is ON.</p>
 * @method string getTranslateSwitch() Obtain <p>Subtitle translation switch.<br>ON: enables translation.<br>OFF: disables translation.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranslateSwitch(string $TranslateSwitch) Set <p>Subtitle translation switch.<br>ON: enables translation.<br>OFF: disables translation.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTranslateDstLanguage() Obtain <p>Target language for subtitle translation.<br>This parameter takes effect when TranslateSwitch is ON.<br><code>zh</code>: Simplified Chinese<br><code>zh-TW</code>: Traditional Chinese<br><code>en</code>: English<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>fr</code>: French<br><code>es</code>: Spanish<br><code>it</code>: Italian<br><code>de</code>: German<br><code>tr</code>: Turkish<br><code>ru</code>: Russian<br><code>pt</code>: Portuguese (Brazil)<br><code>pt-PT</code>: Portuguese (Portugal)<br><code>vi</code>: Vietnamese<br><code>id</code>: Indonesian<br><code>ms</code>: Malay<br><code>th</code>: Thai<br><code>ar</code>: Arabic<br><code>hi</code>: Hindi<br><code>fil</code>: Filipino</p><p><strong>Note</strong>: Use <code>/</code> to separate multiple languages, such as <code>en/ja</code>, which indicates English and Japanese.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) Set <p>Target language for subtitle translation.<br>This parameter takes effect when TranslateSwitch is ON.<br><code>zh</code>: Simplified Chinese<br><code>zh-TW</code>: Traditional Chinese<br><code>en</code>: English<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>fr</code>: French<br><code>es</code>: Spanish<br><code>it</code>: Italian<br><code>de</code>: German<br><code>tr</code>: Turkish<br><code>ru</code>: Russian<br><code>pt</code>: Portuguese (Brazil)<br><code>pt-PT</code>: Portuguese (Portugal)<br><code>vi</code>: Vietnamese<br><code>id</code>: Indonesian<br><code>ms</code>: Malay<br><code>th</code>: Thai<br><code>ar</code>: Arabic<br><code>hi</code>: Hindi<br><code>fil</code>: Filipino</p><p><strong>Note</strong>: Use <code>/</code> to separate multiple languages, such as <code>en/ja</code>, which indicates English and Japanese.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p>
 * @method string getUpdateTime() Obtain <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p>
 * @method string getAliasName() Obtain <p>Preset template alias for smart subtitle.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAliasName(string $AliasName) Set <p>Preset template alias for smart subtitle.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProcessType() Obtain <p>Subtitle processing type:</p><ul><li>0: ASR.</li><li>1: subtitle translation.</li><li>2: OCR.</li></ul>
 * @method void setProcessType(integer $ProcessType) Set <p>Subtitle processing type:</p><ul><li>0: ASR.</li><li>1: subtitle translation.</li><li>2: OCR.</li></ul>
 * @method SelectingSubtitleAreasConfig getSelectingSubtitleAreasConfig() Obtain <p>Area configurations for the subtitle OCR extraction box.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSelectingSubtitleAreasConfig(SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig) Set <p>Area configurations for the subtitle OCR extraction box.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubtitleEmbedId() Obtain <p>Subtitle burn-in template ID.</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set <p>Subtitle burn-in template ID.</p>
 * @method integer getSpeakerMode() Obtain <p>Speaker identification mode. Valid values:<br>0: Speaker identification is disabled.<br>1: Speaker identification is enabled.<br>Default value: 0.</p>
 * @method void setSpeakerMode(integer $SpeakerMode) Set <p>Speaker identification mode. Valid values:<br>0: Speaker identification is disabled.<br>1: Speaker identification is enabled.<br>Default value: 0.</p>
 * @method integer getSpeakerLabel() Obtain <p>Indicates whether to output the identified speaker to the subtitle file. Valid values:<br>0: The speaker is not output to the subtitle file.<br>1: The speaker is output to the VTT subtitle file.<br>Note: To use this parameter, the value of SpeakerMode cannot be 0.<br>Default value: 0.</p>
 * @method void setSpeakerLabel(integer $SpeakerLabel) Set <p>Indicates whether to output the identified speaker to the subtitle file. Valid values:<br>0: The speaker is not output to the subtitle file.<br>1: The speaker is output to the VTT subtitle file.<br>Note: To use this parameter, the value of SpeakerMode cannot be 0.<br>Default value: 0.</p>
 */
class SmartSubtitleTemplateItem extends AbstractModel
{
    /**
     * @var integer <p>Unique identifier of the smart subtitle template.</p>
     */
    public $Definition;

    /**
     * @var string <p>Smart subtitle template name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string <p>Smart subtitle template description.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @var string <p>Template type. Valid values:</p><ul><li>Preset: preset template.</li><li>Custom: custom template.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var AsrHotWordsConfigure <p>ASR hotword lexicon parameters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string <p>Name of the hotword lexicon associated with the template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrHotWordsLibraryName;

    /**
     * @var string <p>Video source language list for smart subtitle:</p><p><code>zh</code>: Simplified Chinese<br><code>yue</code>: Cantonese<br><code>zh-PY</code>: Chinese, English, and Cantonese<br><code>zh_medical</code>: Chinese healthcare<br><code>zh_dialect</code>: Chinese dialect<br><code>prime_zh</code>: Chinese and English dialects<br><code>zh_en</code>: Chinese and English<br><code>en</code>: English<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>fr</code>: French<br><code>es</code>: Spanish<br><code>it</code>: Italian<br><code>de</code>: German<br><code>tr</code>: Turkish<br><code>ru</code>: Russian<br><code>pt</code>: Portuguese (Brazil)<br><code>pt-PT</code>: Portuguese (Portugal)<br><code>vi</code>: Vietnamese<br><code>id</code>: Indonesian<br><code>ms</code>: Malay<br><code>th</code>: Thai<br><code>ar</code>: Arabic<br><code>hi</code>: Hindi<br><code>fil</code>: Filipino<br><code>auto</code>: Automatic identification (only supported for subtitle translation)</p>
     */
    public $VideoSrcLanguage;

    /**
     * @var string <p>Smart subtitle file format.</p><ul><li>vtt: WebVTT.</li><li>srt: SRT.</li><li>original: same as the source subtitle file (for subtitle translation templates).</li><li>Not specified or empty: no subtitle file generated.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubtitleFormat;

    /**
     * @var integer <p>Smart subtitle language type.<br>0: source language.<br>1: target language.<br>2: source language and target language.<br>Only 0 is supported when TranslateSwitch is OFF.<br>Only 1 or 2 is supported when TranslateSwitch is ON.</p>
     */
    public $SubtitleType;

    /**
     * @var string <p>Subtitle translation switch.<br>ON: enables translation.<br>OFF: disables translation.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranslateSwitch;

    /**
     * @var string <p>Target language for subtitle translation.<br>This parameter takes effect when TranslateSwitch is ON.<br><code>zh</code>: Simplified Chinese<br><code>zh-TW</code>: Traditional Chinese<br><code>en</code>: English<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>fr</code>: French<br><code>es</code>: Spanish<br><code>it</code>: Italian<br><code>de</code>: German<br><code>tr</code>: Turkish<br><code>ru</code>: Russian<br><code>pt</code>: Portuguese (Brazil)<br><code>pt-PT</code>: Portuguese (Portugal)<br><code>vi</code>: Vietnamese<br><code>id</code>: Indonesian<br><code>ms</code>: Malay<br><code>th</code>: Thai<br><code>ar</code>: Arabic<br><code>hi</code>: Hindi<br><code>fil</code>: Filipino</p><p><strong>Note</strong>: Use <code>/</code> to separate multiple languages, such as <code>en/ja</code>, which indicates English and Japanese.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranslateDstLanguage;

    /**
     * @var string <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Preset template alias for smart subtitle.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AliasName;

    /**
     * @var integer <p>Subtitle processing type:</p><ul><li>0: ASR.</li><li>1: subtitle translation.</li><li>2: OCR.</li></ul>
     */
    public $ProcessType;

    /**
     * @var SelectingSubtitleAreasConfig <p>Area configurations for the subtitle OCR extraction box.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SelectingSubtitleAreasConfig;

    /**
     * @var integer <p>Subtitle burn-in template ID.</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>Speaker identification mode. Valid values:<br>0: Speaker identification is disabled.<br>1: Speaker identification is enabled.<br>Default value: 0.</p>
     */
    public $SpeakerMode;

    /**
     * @var integer <p>Indicates whether to output the identified speaker to the subtitle file. Valid values:<br>0: The speaker is not output to the subtitle file.<br>1: The speaker is output to the VTT subtitle file.<br>Note: To use this parameter, the value of SpeakerMode cannot be 0.<br>Default value: 0.</p>
     */
    public $SpeakerLabel;

    /**
     * @param integer $Definition <p>Unique identifier of the smart subtitle template.</p>
     * @param string $Name <p>Smart subtitle template name.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Comment <p>Smart subtitle template description.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type <p>Template type. Valid values:</p><ul><li>Preset: preset template.</li><li>Custom: custom template.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure <p>ASR hotword lexicon parameters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AsrHotWordsLibraryName <p>Name of the hotword lexicon associated with the template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VideoSrcLanguage <p>Video source language list for smart subtitle:</p><p><code>zh</code>: Simplified Chinese<br><code>yue</code>: Cantonese<br><code>zh-PY</code>: Chinese, English, and Cantonese<br><code>zh_medical</code>: Chinese healthcare<br><code>zh_dialect</code>: Chinese dialect<br><code>prime_zh</code>: Chinese and English dialects<br><code>zh_en</code>: Chinese and English<br><code>en</code>: English<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>fr</code>: French<br><code>es</code>: Spanish<br><code>it</code>: Italian<br><code>de</code>: German<br><code>tr</code>: Turkish<br><code>ru</code>: Russian<br><code>pt</code>: Portuguese (Brazil)<br><code>pt-PT</code>: Portuguese (Portugal)<br><code>vi</code>: Vietnamese<br><code>id</code>: Indonesian<br><code>ms</code>: Malay<br><code>th</code>: Thai<br><code>ar</code>: Arabic<br><code>hi</code>: Hindi<br><code>fil</code>: Filipino<br><code>auto</code>: Automatic identification (only supported for subtitle translation)</p>
     * @param string $SubtitleFormat <p>Smart subtitle file format.</p><ul><li>vtt: WebVTT.</li><li>srt: SRT.</li><li>original: same as the source subtitle file (for subtitle translation templates).</li><li>Not specified or empty: no subtitle file generated.</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubtitleType <p>Smart subtitle language type.<br>0: source language.<br>1: target language.<br>2: source language and target language.<br>Only 0 is supported when TranslateSwitch is OFF.<br>Only 1 or 2 is supported when TranslateSwitch is ON.</p>
     * @param string $TranslateSwitch <p>Subtitle translation switch.<br>ON: enables translation.<br>OFF: disables translation.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TranslateDstLanguage <p>Target language for subtitle translation.<br>This parameter takes effect when TranslateSwitch is ON.<br><code>zh</code>: Simplified Chinese<br><code>zh-TW</code>: Traditional Chinese<br><code>en</code>: English<br><code>ja</code>: Japanese<br><code>ko</code>: Korean<br><code>fr</code>: French<br><code>es</code>: Spanish<br><code>it</code>: Italian<br><code>de</code>: German<br><code>tr</code>: Turkish<br><code>ru</code>: Russian<br><code>pt</code>: Portuguese (Brazil)<br><code>pt-PT</code>: Portuguese (Portugal)<br><code>vi</code>: Vietnamese<br><code>id</code>: Indonesian<br><code>ms</code>: Malay<br><code>th</code>: Thai<br><code>ar</code>: Arabic<br><code>hi</code>: Hindi<br><code>fil</code>: Filipino</p><p><strong>Note</strong>: Use <code>/</code> to separate multiple languages, such as <code>en/ja</code>, which indicates English and Japanese.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p>
     * @param string $UpdateTime <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p>
     * @param string $AliasName <p>Preset template alias for smart subtitle.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProcessType <p>Subtitle processing type:</p><ul><li>0: ASR.</li><li>1: subtitle translation.</li><li>2: OCR.</li></ul>
     * @param SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig <p>Area configurations for the subtitle OCR extraction box.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubtitleEmbedId <p>Subtitle burn-in template ID.</p>
     * @param integer $SpeakerMode <p>Speaker identification mode. Valid values:<br>0: Speaker identification is disabled.<br>1: Speaker identification is enabled.<br>Default value: 0.</p>
     * @param integer $SpeakerLabel <p>Indicates whether to output the identified speaker to the subtitle file. Valid values:<br>0: The speaker is not output to the subtitle file.<br>1: The speaker is output to the VTT subtitle file.<br>Note: To use this parameter, the value of SpeakerMode cannot be 0.<br>Default value: 0.</p>
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
