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
 * Input of the AIGC sound effect generation task.
 *
 * @method string getModelName() Obtain <p>Model name.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name.</p>
 * @method string getModelVersion() Obtain <p>Model version.</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version.</p>
 * @method string getSceneType() Obtain <p>Scenario type. Values are as follows: <li>When ModelName is Kling, the value motion_control means action control;</li><li>Not currently supported for other ModelName.</li></p>
 * @method void setSceneType(string $SceneType) Set <p>Scenario type. Values are as follows: <li>When ModelName is Kling, the value motion_control means action control;</li><li>Not currently supported for other ModelName.</li></p>
 * @method string getPrompt() Obtain <p>Prompt content for video generation. Supports up to 1,000 characters. This parameter is required when FileInfos is empty.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt content for video generation. Supports up to 1,000 characters. This parameter is required when FileInfos is empty.</p>
 * @method string getNegativePrompt() Obtain <p>Prompt content to prevent the model from generating video. Supports up to 1000 characters.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>Prompt content to prevent the model from generating video. Supports up to 1000 characters.</p>
 * @method array getAudioInfos() Obtain <p>Reference audio content</p>
 * @method void setAudioInfos(array $AudioInfos) Set <p>Reference audio content</p>
 * @method array getVideoInfos() Obtain <p>Reference video info</p>
 * @method void setVideoInfos(array $VideoInfos) Set <p>Reference video info</p>
 * @method boolean getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method void setEnhancePrompt(boolean $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method AigcAudioOutputConfig getOutputConfig() Obtain <p>Output result file output of AIGC image generation.</p>
 * @method void setOutputConfig(AigcAudioOutputConfig $OutputConfig) Set <p>Output result file output of AIGC image generation.</p>
 * @method string getAdditionalParameters() Obtain <p>Additional parameter.</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) Set <p>Additional parameter.</p>
 */
class AigcAudioTaskInput extends AbstractModel
{
    /**
     * @var string <p>Model name.</p>
     */
    public $ModelName;

    /**
     * @var string <p>Model version.</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>Scenario type. Values are as follows: <li>When ModelName is Kling, the value motion_control means action control;</li><li>Not currently supported for other ModelName.</li></p>
     */
    public $SceneType;

    /**
     * @var string <p>Prompt content for video generation. Supports up to 1,000 characters. This parameter is required when FileInfos is empty.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Prompt content to prevent the model from generating video. Supports up to 1000 characters.</p>
     */
    public $NegativePrompt;

    /**
     * @var array <p>Reference audio content</p>
     */
    public $AudioInfos;

    /**
     * @var array <p>Reference video info</p>
     */
    public $VideoInfos;

    /**
     * @var boolean <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcAudioOutputConfig <p>Output result file output of AIGC image generation.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Additional parameter.</p>
     */
    public $AdditionalParameters;

    /**
     * @param string $ModelName <p>Model name.</p>
     * @param string $ModelVersion <p>Model version.</p>
     * @param string $SceneType <p>Scenario type. Values are as follows: <li>When ModelName is Kling, the value motion_control means action control;</li><li>Not currently supported for other ModelName.</li></p>
     * @param string $Prompt <p>Prompt content for video generation. Supports up to 1,000 characters. This parameter is required when FileInfos is empty.</p>
     * @param string $NegativePrompt <p>Prompt content to prevent the model from generating video. Supports up to 1000 characters.</p>
     * @param array $AudioInfos <p>Reference audio content</p>
     * @param array $VideoInfos <p>Reference video info</p>
     * @param boolean $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     * @param AigcAudioOutputConfig $OutputConfig <p>Output result file output of AIGC image generation.</p>
     * @param string $AdditionalParameters <p>Additional parameter.</p>
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
