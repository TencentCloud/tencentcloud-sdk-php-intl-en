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
 * Input of the AIGC image generation task.
 *
 * @method string getModelName() Obtain Model name.
 * @method void setModelName(string $ModelName) Set Model name.
 * @method string getModelVersion() Obtain Model version.
 * @method void setModelVersion(string $ModelVersion) Set Model version.
 * @method array getFileInfos() Obtain Input file of the AIGC image generation task.
 * @method void setFileInfos(array $FileInfos) Set Input file of the AIGC image generation task.
 * @method string getPrompt() Obtain Prompt for image generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.
 * @method void setPrompt(string $Prompt) Set Prompt for image generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.
 * @method string getNegativePrompt() Obtain To prevent the model from generating image prompts. Supports a maximum of 1000 characters.
 * @method void setNegativePrompt(string $NegativePrompt) Set To prevent the model from generating image prompts. Supports a maximum of 1000 characters.
 * @method string getEnhancePrompt() Obtain Whether to optimize prompt content automatically. When enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set Whether to optimize prompt content automatically. When enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li>
 * @method string getGenerationMode() Obtain Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li>
 * @method void setGenerationMode(string $GenerationMode) Set Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li>
 * @method AigcImageOutputConfig getOutputConfig() Obtain Output the result file of the AIGC image generation.
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) Set Output the result file of the AIGC image generation.
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
     * @var array Input file of the AIGC image generation task.
     */
    public $FileInfos;

    /**
     * @var string Prompt for image generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.
     */
    public $Prompt;

    /**
     * @var string To prevent the model from generating image prompts. Supports a maximum of 1000 characters.
     */
    public $NegativePrompt;

    /**
     * @var string Whether to optimize prompt content automatically. When enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li>
     */
    public $EnhancePrompt;

    /**
     * @var string Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li>
     */
    public $GenerationMode;

    /**
     * @var AigcImageOutputConfig Output the result file of the AIGC image generation.
     */
    public $OutputConfig;

    /**
     * @param string $ModelName Model name.
     * @param string $ModelVersion Model version.
     * @param array $FileInfos Input file of the AIGC image generation task.
     * @param string $Prompt Prompt for image generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.
     * @param string $NegativePrompt To prevent the model from generating image prompts. Supports a maximum of 1000 characters.
     * @param string $EnhancePrompt Whether to optimize prompt content automatically. When enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li>
     * @param string $GenerationMode Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li>
     * @param AigcImageOutputConfig $OutputConfig Output the result file of the AIGC image generation.
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
