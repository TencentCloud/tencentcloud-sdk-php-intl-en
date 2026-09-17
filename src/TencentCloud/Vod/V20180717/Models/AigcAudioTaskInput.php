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
 * 
 *
 * @method string getModelName() Obtain 
 * @method void setModelName(string $ModelName) Set 
 * @method string getModelVersion() Obtain 
 * @method void setModelVersion(string $ModelVersion) Set 
 * @method string getSceneType() Obtain 
 * @method void setSceneType(string $SceneType) Set 
 * @method string getPrompt() Obtain 
 * @method void setPrompt(string $Prompt) Set 
 * @method string getNegativePrompt() Obtain 
 * @method void setNegativePrompt(string $NegativePrompt) Set 
 * @method array getAudioInfos() Obtain 
 * @method void setAudioInfos(array $AudioInfos) Set 
 * @method array getVideoInfos() Obtain 
 * @method void setVideoInfos(array $VideoInfos) Set 
 * @method boolean getEnhancePrompt() Obtain 
 * @method void setEnhancePrompt(boolean $EnhancePrompt) Set 
 * @method AigcAudioOutputConfig getOutputConfig() Obtain 
 * @method void setOutputConfig(AigcAudioOutputConfig $OutputConfig) Set 
 * @method string getAdditionalParameters() Obtain 
 * @method void setAdditionalParameters(string $AdditionalParameters) Set 
 */
class AigcAudioTaskInput extends AbstractModel
{
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
    public $SceneType;

    /**
     * @var string 
     */
    public $Prompt;

    /**
     * @var string 
     */
    public $NegativePrompt;

    /**
     * @var array 
     */
    public $AudioInfos;

    /**
     * @var array 
     */
    public $VideoInfos;

    /**
     * @var boolean 
     */
    public $EnhancePrompt;

    /**
     * @var AigcAudioOutputConfig 
     */
    public $OutputConfig;

    /**
     * @var string 
     */
    public $AdditionalParameters;

    /**
     * @param string $ModelName 
     * @param string $ModelVersion 
     * @param string $SceneType 
     * @param string $Prompt 
     * @param string $NegativePrompt 
     * @param array $AudioInfos 
     * @param array $VideoInfos 
     * @param boolean $EnhancePrompt 
     * @param AigcAudioOutputConfig $OutputConfig 
     * @param string $AdditionalParameters 
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("AudioInfos",$param) and $param["AudioInfos"] !== null) {
            $this->AudioInfos = [];
            foreach ($param["AudioInfos"] as $key => $value){
                $obj = new AigcAudioReferenceAudioInfo();
                $obj->deserialize($value);
                array_push($this->AudioInfos, $obj);
            }
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new AigcAudioReferenceVideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("EnhancePrompt",$param) and $param["EnhancePrompt"] !== null) {
            $this->EnhancePrompt = $param["EnhancePrompt"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcAudioOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
        }
    }
}
