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
 * 
 *
 * @method array getFileUrl() Obtain 
 * @method void setFileUrl(array $FileUrl) Set 
 * @method string getPrompt() Obtain 
 * @method void setPrompt(string $Prompt) Set 
 * @method string getModelName() Obtain 
 * @method void setModelName(string $ModelName) Set 
 * @method string getModelVersion() Obtain 
 * @method void setModelVersion(string $ModelVersion) Set 
 * @method string getRatio() Obtain 
 * @method void setRatio(string $Ratio) Set 
 * @method string getLanguage() Obtain 
 * @method void setLanguage(string $Language) Set 
 * @method integer getReferenceDuration() Obtain 
 * @method void setReferenceDuration(integer $ReferenceDuration) Set 
 * @method boolean getEnableTTS() Obtain 
 * @method void setEnableTTS(boolean $EnableTTS) Set 
 * @method string getVoiceId() Obtain 
 * @method void setVoiceId(string $VoiceId) Set 
 */
class DocToVideoInput extends AbstractModel
{
    /**
     * @var array 
     */
    public $FileUrl;

    /**
     * @var string 
     */
    public $Prompt;

    /**
     * @var string 
     */
    public $ModelName;

    /**
     * @var string 
     */
    public $ModelVersion;

    /**
     * @var string 
     */
    public $Ratio;

    /**
     * @var string 
     */
    public $Language;

    /**
     * @var integer 
     */
    public $ReferenceDuration;

    /**
     * @var boolean 
     */
    public $EnableTTS;

    /**
     * @var string 
     */
    public $VoiceId;

    /**
     * @param array $FileUrl 
     * @param string $Prompt 
     * @param string $ModelName 
     * @param string $ModelVersion 
     * @param string $Ratio 
     * @param string $Language 
     * @param integer $ReferenceDuration 
     * @param boolean $EnableTTS 
     * @param string $VoiceId 
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
