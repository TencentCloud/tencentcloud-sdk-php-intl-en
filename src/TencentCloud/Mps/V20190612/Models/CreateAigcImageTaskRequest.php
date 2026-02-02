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
 * CreateAigcImageTask request structure.
 *
 * @method string getModelName() Obtain Model name.
Supported models:Hunyuan,
GEM,
Qwen.
 * @method void setModelName(string $ModelName) Set Model name.
Supported models:Hunyuan,
GEM,
Qwen.
 * @method string getModelVersion() Obtain Specific version number of the model. By default, the system uses the supported stable version of the model.1. GEM: [2.5 and 3.0].
 * @method void setModelVersion(string $ModelVersion) Set Specific version number of the model. By default, the system uses the supported stable version of the model.1. GEM: [2.5 and 3.0].
 * @method string getPrompt() Obtain Description of the generated image. (Note: A maximum of 1000 characters is supported.) This parameter is required when no reference image is specified.
 * @method void setPrompt(string $Prompt) Set Description of the generated image. (Note: A maximum of 1000 characters is supported.) This parameter is required when no reference image is specified.
 * @method string getNegativePrompt() Obtain Specifies the content you want to prevent the model from generating. Note: Not all models support this. For example: top lighting, bright colors, people, animals, multiple vehicles, and wind.
 * @method void setNegativePrompt(string $NegativePrompt) Set Specifies the content you want to prevent the model from generating. Note: Not all models support this. For example: top lighting, bright colors, people, animals, multiple vehicles, and wind.
 * @method boolean getEnhancePrompt() Obtain The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.
 * @method void setEnhancePrompt(boolean $EnhancePrompt) Set The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.
 * @method array getImageInfos() Obtain Reference resource images. By default, one image can be specified.Model that supports multiple images:1. GEM supports up to 3 resource images.Note:1. The recommended image size is less than 7 MB. Different models have different limits.2. Supported image format: JPEG, PNG, and WebP.
 * @method void setImageInfos(array $ImageInfos) Set Reference resource images. By default, one image can be specified.Model that supports multiple images:1. GEM supports up to 3 resource images.Note:1. The recommended image size is less than 7 MB. Different models have different limits.2. Supported image format: JPEG, PNG, and WebP.
 * @method AigcImageExtraParam getExtraParameters() Obtain Additional parameters required for the model.
 * @method void setExtraParameters(AigcImageExtraParam $ExtraParameters) Set Additional parameters required for the model.
 * @method AigcStoreCosParam getStoreCosParam() Obtain COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
 * @method string getOperator() Obtain API operator name.
 * @method void setOperator(string $Operator) Set API operator name.
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var string Model name.
Supported models:Hunyuan,
GEM,
Qwen.
     */
    public $ModelName;

    /**
     * @var string Specific version number of the model. By default, the system uses the supported stable version of the model.1. GEM: [2.5 and 3.0].
     */
    public $ModelVersion;

    /**
     * @var string Description of the generated image. (Note: A maximum of 1000 characters is supported.) This parameter is required when no reference image is specified.
     */
    public $Prompt;

    /**
     * @var string Specifies the content you want to prevent the model from generating. Note: Not all models support this. For example: top lighting, bright colors, people, animals, multiple vehicles, and wind.
     */
    public $NegativePrompt;

    /**
     * @var boolean The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.
     */
    public $EnhancePrompt;

    /**
     * @var array Reference resource images. By default, one image can be specified.Model that supports multiple images:1. GEM supports up to 3 resource images.Note:1. The recommended image size is less than 7 MB. Different models have different limits.2. Supported image format: JPEG, PNG, and WebP.
     */
    public $ImageInfos;

    /**
     * @var AigcImageExtraParam Additional parameters required for the model.
     */
    public $ExtraParameters;

    /**
     * @var AigcStoreCosParam COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
     */
    public $StoreCosParam;

    /**
     * @var string API operator name.
     */
    public $Operator;

    /**
     * @param string $ModelName Model name.
Supported models:Hunyuan,
GEM,
Qwen.
     * @param string $ModelVersion Specific version number of the model. By default, the system uses the supported stable version of the model.1. GEM: [2.5 and 3.0].
     * @param string $Prompt Description of the generated image. (Note: A maximum of 1000 characters is supported.) This parameter is required when no reference image is specified.
     * @param string $NegativePrompt Specifies the content you want to prevent the model from generating. Note: Not all models support this. For example: top lighting, bright colors, people, animals, multiple vehicles, and wind.
     * @param boolean $EnhancePrompt The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.
     * @param array $ImageInfos Reference resource images. By default, one image can be specified.Model that supports multiple images:1. GEM supports up to 3 resource images.Note:1. The recommended image size is less than 7 MB. Different models have different limits.2. Supported image format: JPEG, PNG, and WebP.
     * @param AigcImageExtraParam $ExtraParameters Additional parameters required for the model.
     * @param AigcStoreCosParam $StoreCosParam COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
     * @param string $Operator API operator name.
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

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("EnhancePrompt",$param) and $param["EnhancePrompt"] !== null) {
            $this->EnhancePrompt = $param["EnhancePrompt"];
        }

        if (array_key_exists("ImageInfos",$param) and $param["ImageInfos"] !== null) {
            $this->ImageInfos = [];
            foreach ($param["ImageInfos"] as $key => $value){
                $obj = new AigcImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfos, $obj);
            }
        }

        if (array_key_exists("ExtraParameters",$param) and $param["ExtraParameters"] !== null) {
            $this->ExtraParameters = new AigcImageExtraParam();
            $this->ExtraParameters->deserialize($param["ExtraParameters"]);
        }

        if (array_key_exists("StoreCosParam",$param) and $param["StoreCosParam"] !== null) {
            $this->StoreCosParam = new AigcStoreCosParam();
            $this->StoreCosParam->deserialize($param["StoreCosParam"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
