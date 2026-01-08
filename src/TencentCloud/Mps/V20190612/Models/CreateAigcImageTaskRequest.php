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
 * @method string getModelName() Obtain Model Name. Currently supported models include: Hunyuan,GEM,Qwen.
 * @method void setModelName(string $ModelName) Set Model Name. Currently supported models include: Hunyuan,GEM,Qwen.
 * @method string getModelVersion() Obtain Specify the version number of a particular model. By default, the system utilizes the currently supported stable version of the model.  
1. GEM, available options [2.5, 3.0].

 * @method void setModelVersion(string $ModelVersion) Set Specify the version number of a particular model. By default, the system utilizes the currently supported stable version of the model.  
1. GEM, available options [2.5, 3.0].

 * @method string getPrompt() Obtain 
Generate a description of the image. (Note: The maximum supported length is 1000 characters.) This parameter is mandatory when no reference image is provided.

 * @method void setPrompt(string $Prompt) Set 
Generate a description of the image. (Note: The maximum supported length is 1000 characters.) This parameter is mandatory when no reference image is provided.

 * @method string getNegativePrompt() Obtain Used to specify the content you wish to prevent the model from generating.Note: Supported by select models.Examples:  
Overhead lighting, vibrant colors  
Human figures, animals  
Multiple vehicles, wind
 * @method void setNegativePrompt(string $NegativePrompt) Set Used to specify the content you wish to prevent the model from generating.Note: Supported by select models.Examples:  
Overhead lighting, vibrant colors  
Human figures, animals  
Multiple vehicles, wind
 * @method boolean getEnhancePrompt() Obtain The default value is False, where the model strictly adheres to instructions. For optimal results with more refined prompts, setting this parameter to True will automatically optimize the input prompt to enhance generation quality.

 * @method void setEnhancePrompt(boolean $EnhancePrompt) Set The default value is False, where the model strictly adheres to instructions. For optimal results with more refined prompts, setting this parameter to True will automatically optimize the input prompt to enhance generation quality.

 * @method array getImageInfos() Obtain 
Supports single image input by default. Models supporting multi-image input include GEM (up to 3 images).  
Recommended image size should be under 7MB, with support for JPEG, PNG, and WebP formats.

 * @method void setImageInfos(array $ImageInfos) Set 
Supports single image input by default. Models supporting multi-image input include GEM (up to 3 images).  
Recommended image size should be under 7MB, with support for JPEG, PNG, and WebP formats.

 * @method AigcImageExtraParam getExtraParameters() Obtain Used to pass additional parameters.
 * @method void setExtraParameters(AigcImageExtraParam $ExtraParameters) Set Used to pass additional parameters.
 * @method AigcStoreCosParam getStoreCosParam() Obtain The output files will be stored in the specified COS bucket. Note: COS service must be activated, and the MPS_QcsRole needs to be created and properly authorized.
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set The output files will be stored in the specified COS bucket. Note: COS service must be activated, and the MPS_QcsRole needs to be created and properly authorized.
 * @method string getOperator() Obtain Interface operator name.
 * @method void setOperator(string $Operator) Set Interface operator name.
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var string Model Name. Currently supported models include: Hunyuan,GEM,Qwen.
     */
    public $ModelName;

    /**
     * @var string Specify the version number of a particular model. By default, the system utilizes the currently supported stable version of the model.  
1. GEM, available options [2.5, 3.0].

     */
    public $ModelVersion;

    /**
     * @var string 
Generate a description of the image. (Note: The maximum supported length is 1000 characters.) This parameter is mandatory when no reference image is provided.

     */
    public $Prompt;

    /**
     * @var string Used to specify the content you wish to prevent the model from generating.Note: Supported by select models.Examples:  
Overhead lighting, vibrant colors  
Human figures, animals  
Multiple vehicles, wind
     */
    public $NegativePrompt;

    /**
     * @var boolean The default value is False, where the model strictly adheres to instructions. For optimal results with more refined prompts, setting this parameter to True will automatically optimize the input prompt to enhance generation quality.

     */
    public $EnhancePrompt;

    /**
     * @var array 
Supports single image input by default. Models supporting multi-image input include GEM (up to 3 images).  
Recommended image size should be under 7MB, with support for JPEG, PNG, and WebP formats.

     */
    public $ImageInfos;

    /**
     * @var AigcImageExtraParam Used to pass additional parameters.
     */
    public $ExtraParameters;

    /**
     * @var AigcStoreCosParam The output files will be stored in the specified COS bucket. Note: COS service must be activated, and the MPS_QcsRole needs to be created and properly authorized.
     */
    public $StoreCosParam;

    /**
     * @var string Interface operator name.
     */
    public $Operator;

    /**
     * @param string $ModelName Model Name. Currently supported models include: Hunyuan,GEM,Qwen.
     * @param string $ModelVersion Specify the version number of a particular model. By default, the system utilizes the currently supported stable version of the model.  
1. GEM, available options [2.5, 3.0].

     * @param string $Prompt 
Generate a description of the image. (Note: The maximum supported length is 1000 characters.) This parameter is mandatory when no reference image is provided.

     * @param string $NegativePrompt Used to specify the content you wish to prevent the model from generating.Note: Supported by select models.Examples:  
Overhead lighting, vibrant colors  
Human figures, animals  
Multiple vehicles, wind
     * @param boolean $EnhancePrompt The default value is False, where the model strictly adheres to instructions. For optimal results with more refined prompts, setting this parameter to True will automatically optimize the input prompt to enhance generation quality.

     * @param array $ImageInfos 
Supports single image input by default. Models supporting multi-image input include GEM (up to 3 images).  
Recommended image size should be under 7MB, with support for JPEG, PNG, and WebP formats.

     * @param AigcImageExtraParam $ExtraParameters Used to pass additional parameters.
     * @param AigcStoreCosParam $StoreCosParam The output files will be stored in the specified COS bucket. Note: COS service must be activated, and the MPS_QcsRole needs to be created and properly authorized.
     * @param string $Operator Interface operator name.
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
