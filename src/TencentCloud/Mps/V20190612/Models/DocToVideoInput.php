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
 * AIGC document‑to‑video input
 *
 * @method array getFileUrl() Obtain <p>Document link for video generation.</p><p>Supported document types: pdf, pptx, docx, png, jpg<br>Document count limit: 3<br>Document size limit: 10MB<br>Document page limit: 100</p>
 * @method void setFileUrl(array $FileUrl) Set <p>Document link for video generation.</p><p>Supported document types: pdf, pptx, docx, png, jpg<br>Document count limit: 3<br>Document size limit: 10MB<br>Document page limit: 100</p>
 * @method string getPrompt() Obtain <p>Prompt information for video generation.</p><p>Prompt length limit: 2,000 characters.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt information for video generation.</p><p>Prompt length limit: 2,000 characters.</p>
 * @method string getModelName() Obtain <p>Document-to-video model name</p><p>Default value: Wand</p>
 * @method void setModelName(string $ModelName) Set <p>Document-to-video model name</p><p>Default value: Wand</p>
 * @method string getModelVersion() Obtain <p>Document-to-video model version number</p><p>Default value: 1.0</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Document-to-video model version number</p><p>Default value: 1.0</p>
 * @method string getRatio() Obtain <p>Aspect ratio of the generated video.</p><p>Enumeration values: </p><ul><li>16:9: 16:9</li><li>9:16: 9:16</li><li>1:1: 1:1</li></ul><p>Default value: 16:9</p>
 * @method void setRatio(string $Ratio) Set <p>Aspect ratio of the generated video.</p><p>Enumeration values: </p><ul><li>16:9: 16:9</li><li>9:16: 9:16</li><li>1:1: 1:1</li></ul><p>Default value: 16:9</p>
 * @method string getLanguage() Obtain <p>Language of the generated video.</p><p>Enumeration values: </p><ul><li>zh: Chinese</li><li>en: English</li><li>ja: Japanese</li><li>ko: Korean</li><li>ru: Russian</li><li>fr: French</li><li>es: Spanish</li><li>de: German</li></ul><p>Default value: zh</p>
 * @method void setLanguage(string $Language) Set <p>Language of the generated video.</p><p>Enumeration values: </p><ul><li>zh: Chinese</li><li>en: English</li><li>ja: Japanese</li><li>ko: Korean</li><li>ru: Russian</li><li>fr: French</li><li>es: Spanish</li><li>de: German</li></ul><p>Default value: zh</p>
 * @method integer getReferenceDuration() Obtain <p>Video duration for reference.</p><p>This is not an exact duration; it serves as a reference for the LLM only.</p><p>Range: [15, 1200]</p><p>Unit: second</p>
 * @method void setReferenceDuration(integer $ReferenceDuration) Set <p>Video duration for reference.</p><p>This is not an exact duration; it serves as a reference for the LLM only.</p><p>Range: [15, 1200]</p><p>Unit: second</p>
 * @method boolean getEnableTTS() Obtain <p>Whether the AI dubbing feature is enabled.</p><p>Default value: false</p>
 * @method void setEnableTTS(boolean $EnableTTS) Set <p>Whether the AI dubbing feature is enabled.</p><p>Default value: false</p>
 * @method string getVoiceId() Obtain <p>Voice ID. Valid only when AI dubbing feature is enabled.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID. Valid only when AI dubbing feature is enabled.</p>
 */
class DocToVideoInput extends AbstractModel
{
    /**
     * @var array <p>Document link for video generation.</p><p>Supported document types: pdf, pptx, docx, png, jpg<br>Document count limit: 3<br>Document size limit: 10MB<br>Document page limit: 100</p>
     */
    public $FileUrl;

    /**
     * @var string <p>Prompt information for video generation.</p><p>Prompt length limit: 2,000 characters.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Document-to-video model name</p><p>Default value: Wand</p>
     */
    public $ModelName;

    /**
     * @var string <p>Document-to-video model version number</p><p>Default value: 1.0</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>Aspect ratio of the generated video.</p><p>Enumeration values: </p><ul><li>16:9: 16:9</li><li>9:16: 9:16</li><li>1:1: 1:1</li></ul><p>Default value: 16:9</p>
     */
    public $Ratio;

    /**
     * @var string <p>Language of the generated video.</p><p>Enumeration values: </p><ul><li>zh: Chinese</li><li>en: English</li><li>ja: Japanese</li><li>ko: Korean</li><li>ru: Russian</li><li>fr: French</li><li>es: Spanish</li><li>de: German</li></ul><p>Default value: zh</p>
     */
    public $Language;

    /**
     * @var integer <p>Video duration for reference.</p><p>This is not an exact duration; it serves as a reference for the LLM only.</p><p>Range: [15, 1200]</p><p>Unit: second</p>
     */
    public $ReferenceDuration;

    /**
     * @var boolean <p>Whether the AI dubbing feature is enabled.</p><p>Default value: false</p>
     */
    public $EnableTTS;

    /**
     * @var string <p>Voice ID. Valid only when AI dubbing feature is enabled.</p>
     */
    public $VoiceId;

    /**
     * @param array $FileUrl <p>Document link for video generation.</p><p>Supported document types: pdf, pptx, docx, png, jpg<br>Document count limit: 3<br>Document size limit: 10MB<br>Document page limit: 100</p>
     * @param string $Prompt <p>Prompt information for video generation.</p><p>Prompt length limit: 2,000 characters.</p>
     * @param string $ModelName <p>Document-to-video model name</p><p>Default value: Wand</p>
     * @param string $ModelVersion <p>Document-to-video model version number</p><p>Default value: 1.0</p>
     * @param string $Ratio <p>Aspect ratio of the generated video.</p><p>Enumeration values: </p><ul><li>16:9: 16:9</li><li>9:16: 9:16</li><li>1:1: 1:1</li></ul><p>Default value: 16:9</p>
     * @param string $Language <p>Language of the generated video.</p><p>Enumeration values: </p><ul><li>zh: Chinese</li><li>en: English</li><li>ja: Japanese</li><li>ko: Korean</li><li>ru: Russian</li><li>fr: French</li><li>es: Spanish</li><li>de: German</li></ul><p>Default value: zh</p>
     * @param integer $ReferenceDuration <p>Video duration for reference.</p><p>This is not an exact duration; it serves as a reference for the LLM only.</p><p>Range: [15, 1200]</p><p>Unit: second</p>
     * @param boolean $EnableTTS <p>Whether the AI dubbing feature is enabled.</p><p>Default value: false</p>
     * @param string $VoiceId <p>Voice ID. Valid only when AI dubbing feature is enabled.</p>
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
        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("ReferenceDuration",$param) and $param["ReferenceDuration"] !== null) {
            $this->ReferenceDuration = $param["ReferenceDuration"];
        }

        if (array_key_exists("EnableTTS",$param) and $param["EnableTTS"] !== null) {
            $this->EnableTTS = $param["EnableTTS"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }
    }
}
