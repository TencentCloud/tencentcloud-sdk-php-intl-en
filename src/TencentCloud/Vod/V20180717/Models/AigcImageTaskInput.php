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
 * Input of AIGC image task.
 *
 * @method string getModelName() Obtain Model name. 
 * @method void setModelName(string $ModelName) Set Model name. 
 * @method string getModelVersion() Obtain Model version. 
 * @method void setModelVersion(string $ModelVersion) Set Model version. 
 * @method array getFileInfos() Obtain File information of the input image for the AIGC image generation task.
 * @method void setFileInfos(array $FileInfos) Set File information of the input image for the AIGC image generation task.
 * @method string getPrompt() Obtain The prompt content for image generation.
 * @method void setPrompt(string $Prompt) Set The prompt content for image generation.
 * @method string getNegativePrompt() Obtain Prevent the model from generating image generation prompts.
 * @method void setNegativePrompt(string $NegativePrompt) Set Prevent the model from generating image generation prompts.
 * @method string getEnhancePrompt() Obtain Whether to optimize Prompt content automatically. when Enabled, it will optimize the passed in Prompt automatically to enhance generation quality. valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set Whether to optimize Prompt content automatically. when Enabled, it will optimize the passed in Prompt automatically to enhance generation quality. valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li>
 * @method string getGenerationMode() Obtain 
 * @method void setGenerationMode(string $GenerationMode) Set 
 * @method AigcImageOutputConfig getOutputConfig() Obtain Output media file configuration for the task.
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) Set Output media file configuration for the task.
 */
class AigcImageTaskInput extends AbstractModel
{
    /**
     * @var string Model name. 
     */
    public $ModelName;

    /**
     * @var string Model version. 
     */
    public $ModelVersion;

    /**
     * @var array File information of the input image for the AIGC image generation task.
     */
    public $FileInfos;

    /**
     * @var string The prompt content for image generation.
     */
    public $Prompt;

    /**
     * @var string Prevent the model from generating image generation prompts.
     */
    public $NegativePrompt;

    /**
     * @var string Whether to optimize Prompt content automatically. when Enabled, it will optimize the passed in Prompt automatically to enhance generation quality. valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li>
     */
    public $EnhancePrompt;

    /**
     * @var string 
     */
    public $GenerationMode;

    /**
     * @var AigcImageOutputConfig Output media file configuration for the task.
     */
    public $OutputConfig;

    /**
     * @param string $ModelName Model name. 
     * @param string $ModelVersion Model version. 
     * @param array $FileInfos File information of the input image for the AIGC image generation task.
     * @param string $Prompt The prompt content for image generation.
     * @param string $NegativePrompt Prevent the model from generating image generation prompts.
     * @param string $EnhancePrompt Whether to optimize Prompt content automatically. when Enabled, it will optimize the passed in Prompt automatically to enhance generation quality. valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li>
     * @param string $GenerationMode 
     * @param AigcImageOutputConfig $OutputConfig Output media file configuration for the task.
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

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new AigcImageTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
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

        if (array_key_exists("GenerationMode",$param) and $param["GenerationMode"] !== null) {
            $this->GenerationMode = $param["GenerationMode"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcImageOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
