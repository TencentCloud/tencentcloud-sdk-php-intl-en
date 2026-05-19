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
 * @method string getModelName() Obtain <p>Model name.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name.</p>
 * @method string getModelVersion() Obtain <p>Model version.</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version.</p>
 * @method array getFileInfos() Obtain <p>File information for AIGC image generation task input.</p>
 * @method void setFileInfos(array $FileInfos) Set <p>File information for AIGC image generation task input.</p>
 * @method string getPrompt() Obtain <p>Prompt for image generation. Supports up to 1000 characters. This parameter is required when FileInfos is empty.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for image generation. Supports up to 1000 characters. This parameter is required when FileInfos is empty.</p>
 * @method string getNegativePrompt() Obtain <p>To prevent the model from generating images, set a prompt. Supports a maximum of 1000 characters.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>To prevent the model from generating images, set a prompt. Supports a maximum of 1000 characters.</p>
 * @method string getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method string getGenerationMode() Obtain <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
 * @method void setGenerationMode(string $GenerationMode) Set <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
 * @method AigcImageOutputConfig getOutputConfig() Obtain <p>Output result file for AIGC image generation.</p>
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) Set <p>Output result file for AIGC image generation.</p>
 * @method integer getSeed() Obtain <p>Random seed of the model.</p>
 * @method void setSeed(integer $Seed) Set <p>Random seed of the model.</p>
 * @method string getSceneType() Obtain <p>Scenario type. Values as follows: <li>When ModelName is Hunyuan: 3d_panorama means Panoramic View;</li> <li>Other ModelName is not currently supported.</li></p>
 * @method void setSceneType(string $SceneType) Set <p>Scenario type. Values as follows: <li>When ModelName is Hunyuan: 3d_panorama means Panoramic View;</li> <li>Other ModelName is not currently supported.</li></p>
 */
class AigcImageTaskInput extends AbstractModel
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
     * @var array <p>File information for AIGC image generation task input.</p>
     */
    public $FileInfos;

    /**
     * @var string <p>Prompt for image generation. Supports up to 1000 characters. This parameter is required when FileInfos is empty.</p>
     */
    public $Prompt;

    /**
     * @var string <p>To prevent the model from generating images, set a prompt. Supports a maximum of 1000 characters.</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var string <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
     */
    public $GenerationMode;

    /**
     * @var AigcImageOutputConfig <p>Output result file for AIGC image generation.</p>
     */
    public $OutputConfig;

    /**
     * @var integer <p>Random seed of the model.</p>
     */
    public $Seed;

    /**
     * @var string <p>Scenario type. Values as follows: <li>When ModelName is Hunyuan: 3d_panorama means Panoramic View;</li> <li>Other ModelName is not currently supported.</li></p>
     */
    public $SceneType;

    /**
     * @param string $ModelName <p>Model name.</p>
     * @param string $ModelVersion <p>Model version.</p>
     * @param array $FileInfos <p>File information for AIGC image generation task input.</p>
     * @param string $Prompt <p>Prompt for image generation. Supports up to 1000 characters. This parameter is required when FileInfos is empty.</p>
     * @param string $NegativePrompt <p>To prevent the model from generating images, set a prompt. Supports a maximum of 1000 characters.</p>
     * @param string $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param string $GenerationMode <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
     * @param AigcImageOutputConfig $OutputConfig <p>Output result file for AIGC image generation.</p>
     * @param integer $Seed <p>Random seed of the model.</p>
     * @param string $SceneType <p>Scenario type. Values as follows: <li>When ModelName is Hunyuan: 3d_panorama means Panoramic View;</li> <li>Other ModelName is not currently supported.</li></p>
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

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }
    }
}
