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
 * @method string getSceneType() Obtain <p>Scenario type. Values as follows: <li>When ModelName is Kling, value motion_control means action control;</li> <li>Other ModelName not currently supported.</li></p>
 * @method void setSceneType(string $SceneType) Set <p>Scenario type. Values as follows: <li>When ModelName is Kling, value motion_control means action control;</li> <li>Other ModelName not currently supported.</li></p>
 * @method string getPrompt() Obtain <p>Prompt for video generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for video generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.</p>
 * @method string getNegativePrompt() Obtain <p>To prevent the model from generating video prompt content. Supports a maximum of 1000 characters.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>To prevent the model from generating video prompt content. Supports a maximum of 1000 characters.</p>
 * @method boolean getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li></p>
 * @method void setEnhancePrompt(boolean $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li></p>
 * @method AigcAudioOutputConfig getOutputConfig() Obtain <p>Output file of the AIGC image generation result.</p>
 * @method void setOutputConfig(AigcAudioOutputConfig $OutputConfig) Set <p>Output file of the AIGC image generation result.</p>
 * @method string getAdditionalParameters() Obtain <p>Additional parameter</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) Set <p>Additional parameter</p>
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
     * @var string <p>Scenario type. Values as follows: <li>When ModelName is Kling, value motion_control means action control;</li> <li>Other ModelName not currently supported.</li></p>
     */
    public $SceneType;

    /**
     * @var string <p>Prompt for video generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.</p>
     */
    public $Prompt;

    /**
     * @var string <p>To prevent the model from generating video prompt content. Supports a maximum of 1000 characters.</p>
     */
    public $NegativePrompt;

    /**
     * @var boolean <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcAudioOutputConfig <p>Output file of the AIGC image generation result.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Additional parameter</p>
     */
    public $AdditionalParameters;

    /**
     * @param string $ModelName <p>Model name.</p>
     * @param string $ModelVersion <p>Model version.</p>
     * @param string $SceneType <p>Scenario type. Values as follows: <li>When ModelName is Kling, value motion_control means action control;</li> <li>Other ModelName not currently supported.</li></p>
     * @param string $Prompt <p>Prompt for video generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.</p>
     * @param string $NegativePrompt <p>To prevent the model from generating video prompt content. Supports a maximum of 1000 characters.</p>
     * @param boolean $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li></p>
     * @param AigcAudioOutputConfig $OutputConfig <p>Output file of the AIGC image generation result.</p>
     * @param string $AdditionalParameters <p>Additional parameter</p>
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
