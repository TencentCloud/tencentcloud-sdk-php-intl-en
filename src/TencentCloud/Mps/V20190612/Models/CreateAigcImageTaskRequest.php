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
 * @method string getModelName() Obtain <p>Model name.<br>Supported models:<br>Hunyuan.<br>GEM.<br>Qwen.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name.<br>Supported models:<br>Hunyuan.<br>GEM.<br>Qwen.</p>
 * @method string getModelVersion() Obtain <p>Specify the model version number. By default, the system uses the supported stable version of the model.</p><ol><li>GEM: [2.5 and 3.0].</li></ol>
 * @method void setModelVersion(string $ModelVersion) Set <p>Specify the model version number. By default, the system uses the supported stable version of the model.</p><ol><li>GEM: [2.5 and 3.0].</li></ol>
 * @method string getPrompt() Obtain <p>Description of the generated image. (Note: Supports up to 1000 characters.) This parameter is required when no reference image is passed in.</p>
 * @method void setPrompt(string $Prompt) Set <p>Description of the generated image. (Note: Supports up to 1000 characters.) This parameter is required when no reference image is passed in.</p>
 * @method string getNegativePrompt() Obtain <p>Specifies the content you want to prevent the model from generating. Note: Not all models support this. For example: top lighting, bright colors, people, animals, multiple vehicles, and wind.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>Specifies the content you want to prevent the model from generating. Note: Not all models support this. For example: top lighting, bright colors, people, animals, multiple vehicles, and wind.</p>
 * @method boolean getEnhancePrompt() Obtain <p>The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.</p>
 * @method void setEnhancePrompt(boolean $EnhancePrompt) Set <p>The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.</p>
 * @method array getImageInfos() Obtain <p>Used for inputting image information as a resource for reference. Default support for inputting an image.</p><p>Models supporting multi-image input:</p><ol><li>GEM, supporting up to 3 images as resource input.</li></ol><p>Note:</p><ol><li>Recommended image less than 7M. Limits vary by model.</li><li>Format support: jpeg, png, webp.</li></ol>
 * @method void setImageInfos(array $ImageInfos) Set <p>Used for inputting image information as a resource for reference. Default support for inputting an image.</p><p>Models supporting multi-image input:</p><ol><li>GEM, supporting up to 3 images as resource input.</li></ol><p>Note:</p><ol><li>Recommended image less than 7M. Limits vary by model.</li><li>Format support: jpeg, png, webp.</li></ol>
 * @method AigcImageExtraParam getExtraParameters() Obtain <p>Additional parameters required for the model.</p>
 * @method void setExtraParameters(AigcImageExtraParam $ExtraParameters) Set <p>Additional parameters required for the model.</p>
 * @method string getAdditionalParameters() Obtain <p>Used to input some special scene parameters required by the model, serialized into a string in Json format. Example: {"size":"2048x2048"}</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) Set <p>Used to input some special scene parameters required by the model, serialized into a string in Json format. Example: {"size":"2048x2048"}</p>
 * @method AigcStoreCosParam getStoreCosParam() Obtain <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
 * @method string getOperator() Obtain <p>API operator name.</p>
 * @method void setOperator(string $Operator) Set <p>API operator name.</p>
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Model name.<br>Supported models:<br>Hunyuan.<br>GEM.<br>Qwen.</p>
     */
    public $ModelName;

    /**
     * @var string <p>Specify the model version number. By default, the system uses the supported stable version of the model.</p><ol><li>GEM: [2.5 and 3.0].</li></ol>
     */
    public $ModelVersion;

    /**
     * @var string <p>Description of the generated image. (Note: Supports up to 1000 characters.) This parameter is required when no reference image is passed in.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Specifies the content you want to prevent the model from generating. Note: Not all models support this. For example: top lighting, bright colors, people, animals, multiple vehicles, and wind.</p>
     */
    public $NegativePrompt;

    /**
     * @var boolean <p>The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.</p>
     */
    public $EnhancePrompt;

    /**
     * @var array <p>Used for inputting image information as a resource for reference. Default support for inputting an image.</p><p>Models supporting multi-image input:</p><ol><li>GEM, supporting up to 3 images as resource input.</li></ol><p>Note:</p><ol><li>Recommended image less than 7M. Limits vary by model.</li><li>Format support: jpeg, png, webp.</li></ol>
     */
    public $ImageInfos;

    /**
     * @var AigcImageExtraParam <p>Additional parameters required for the model.</p>
     */
    public $ExtraParameters;

    /**
     * @var string <p>Used to input some special scene parameters required by the model, serialized into a string in Json format. Example: {"size":"2048x2048"}</p>
     */
    public $AdditionalParameters;

    /**
     * @var AigcStoreCosParam <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
     */
    public $StoreCosParam;

    /**
     * @var string <p>API operator name.</p>
     */
    public $Operator;

    /**
     * @param string $ModelName <p>Model name.<br>Supported models:<br>Hunyuan.<br>GEM.<br>Qwen.</p>
     * @param string $ModelVersion <p>Specify the model version number. By default, the system uses the supported stable version of the model.</p><ol><li>GEM: [2.5 and 3.0].</li></ol>
     * @param string $Prompt <p>Description of the generated image. (Note: Supports up to 1000 characters.) This parameter is required when no reference image is passed in.</p>
     * @param string $NegativePrompt <p>Specifies the content you want to prevent the model from generating. Note: Not all models support this. For example: top lighting, bright colors, people, animals, multiple vehicles, and wind.</p>
     * @param boolean $EnhancePrompt <p>The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.</p>
     * @param array $ImageInfos <p>Used for inputting image information as a resource for reference. Default support for inputting an image.</p><p>Models supporting multi-image input:</p><ol><li>GEM, supporting up to 3 images as resource input.</li></ol><p>Note:</p><ol><li>Recommended image less than 7M. Limits vary by model.</li><li>Format support: jpeg, png, webp.</li></ol>
     * @param AigcImageExtraParam $ExtraParameters <p>Additional parameters required for the model.</p>
     * @param string $AdditionalParameters <p>Used to input some special scene parameters required by the model, serialized into a string in Json format. Example: {"size":"2048x2048"}</p>
     * @param AigcStoreCosParam $StoreCosParam <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
     * @param string $Operator <p>API operator name.</p>
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

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
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
