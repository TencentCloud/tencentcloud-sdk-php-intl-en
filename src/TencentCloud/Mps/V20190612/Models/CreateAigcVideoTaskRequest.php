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
 * CreateAigcVideoTask request structure.
 *
 * @method string getModelName() Obtain Model Name. Currently supported models include: Hunyuan, Hailuo, Kling, Vidu, OS, GV
 * @method void setModelName(string $ModelName) Set Model Name. Currently supported models include: Hunyuan, Hailuo, Kling, Vidu, OS, GV
 * @method string getModelVersion() Obtain Specify the version number of a particular model. By default, the system uses the currently supported stable version of the model.  
1. Hailuo: Available options [02, 2.3].  
2. Kling: Available options [2.0, 2.1, 2.5, O1, 2.6].  
3. Vidu: Available options [q2, q2-pro, q2-turbo].  
4. GV: Available option [3.1].  
5. OS: Available option [2.0].
 * @method void setModelVersion(string $ModelVersion) Set Specify the version number of a particular model. By default, the system uses the currently supported stable version of the model.  
1. Hailuo: Available options [02, 2.3].  
2. Kling: Available options [2.0, 2.1, 2.5, O1, 2.6].  
3. Vidu: Available options [q2, q2-pro, q2-turbo].  
4. GV: Available option [3.1].  
5. OS: Available option [2.0].
 * @method string getPrompt() Obtain Generate video description. (Note: Maximum 2000 characters supported). This parameter is mandatory when no images are provided.
 * @method void setPrompt(string $Prompt) Set Generate video description. (Note: Maximum 2000 characters supported). This parameter is mandatory when no images are provided.
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
 * @method string getImageUrl() Obtain The URL of the image used to guide video generation, which must be publicly accessible via the internet.  
Notes:  
1. The recommended image size should not exceed 10MB, though size limitations may vary across different models.  
2. Supported image formats: JPEG, PNG.  
3. When using the OS model, the input image dimensions must be either 1280x720 or 720x1280.
 * @method void setImageUrl(string $ImageUrl) Set The URL of the image used to guide video generation, which must be publicly accessible via the internet.  
Notes:  
1. The recommended image size should not exceed 10MB, though size limitations may vary across different models.  
2. Supported image formats: JPEG, PNG.  
3. When using the OS model, the input image dimensions must be either 1280x720 or 720x1280.
 * @method string getLastImageUrl() Obtain The model will utilize the image provided via this parameter as the ending frame for video generation.  
Supported models for this parameter:  
1. GV: When an ending frame image is provided, the ImageUrl parameter must also be specified as the starting frame.  
2. Kling: Under Resolution: 1080P, version 2.1 supports both start&end frames.  
3. Vidu, q2-pro, q2-turbo: Support start&end frames. 
Notes:  
1. It is recommended that the image size does not exceed 10MB, though specific model limitations may vary.  
2. Supported image formats: JPEG, PNG.
 * @method void setLastImageUrl(string $LastImageUrl) Set The model will utilize the image provided via this parameter as the ending frame for video generation.  
Supported models for this parameter:  
1. GV: When an ending frame image is provided, the ImageUrl parameter must also be specified as the starting frame.  
2. Kling: Under Resolution: 1080P, version 2.1 supports both start&end frames.  
3. Vidu, q2-pro, q2-turbo: Support start&end frames. 
Notes:  
1. It is recommended that the image size does not exceed 10MB, though specific model limitations may vary.  
2. Supported image formats: JPEG, PNG.
 * @method array getImageInfos() Obtain A list comprising up to three material resource images, utilized to depict the reference images the model will employ for video generation.  
Models supporting multi-image input:  
1. GV: When utilizing multi-image input, neither ImageUrl nor LastImageUrl should be used.  
2. Vidu: Supports video generation with multiple reference images. For model q2, 1-7 images can be provided, with the subject ID specified via ReferenceType within ImageInfos.
Notes:  
1. Each image must not exceed 10MB in size.  
2. Supported image formats: JPEG, PNG.
 * @method void setImageInfos(array $ImageInfos) Set A list comprising up to three material resource images, utilized to depict the reference images the model will employ for video generation.  
Models supporting multi-image input:  
1. GV: When utilizing multi-image input, neither ImageUrl nor LastImageUrl should be used.  
2. Vidu: Supports video generation with multiple reference images. For model q2, 1-7 images can be provided, with the subject ID specified via ReferenceType within ImageInfos.
Notes:  
1. Each image must not exceed 10MB in size.  
2. Supported image formats: JPEG, PNG.
 * @method integer getDuration() Obtain Duration of generated videos.  
Notes:  
1. Kling supports 5 and 10 seconds. Default: 5 seconds.  
2. Hailuo's standard mode supports 6 and 10 seconds, while other modes only support 6 seconds. Default: 6 seconds.  
3. Vidu supports 1 to 10 seconds.  
4. GV supports 8 seconds. Default: 8 seconds.  
5. OS supports 4, 8, and 12 seconds. Default: 8 seconds.
 * @method void setDuration(integer $Duration) Set Duration of generated videos.  
Notes:  
1. Kling supports 5 and 10 seconds. Default: 5 seconds.  
2. Hailuo's standard mode supports 6 and 10 seconds, while other modes only support 6 seconds. Default: 6 seconds.  
3. Vidu supports 1 to 10 seconds.  
4. GV supports 8 seconds. Default: 8 seconds.  
5. OS supports 4, 8, and 12 seconds. Default: 8 seconds.
 * @method AigcVideoExtraParam getExtraParameters() Obtain Used to pass additional parameters.
 * @method void setExtraParameters(AigcVideoExtraParam $ExtraParameters) Set Used to pass additional parameters.
 * @method AigcStoreCosParam getStoreCosParam() Obtain The output files will be stored in the specified COS bucket. Note: COS service must be activated, and the MPS_QcsRole needs to be created and properly authorized.
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set The output files will be stored in the specified COS bucket. Note: COS service must be activated, and the MPS_QcsRole needs to be created and properly authorized.
 * @method string getAdditionalParameters() Obtain 
Used to pass specific scenario parameters required by the model, serialized into a JSON format string. Example: {"camera_control":{"type":"simple"}}
 * @method void setAdditionalParameters(string $AdditionalParameters) Set 
Used to pass specific scenario parameters required by the model, serialized into a JSON format string. Example: {"camera_control":{"type":"simple"}}
 * @method string getOperator() Obtain Interface operator name.
 * @method void setOperator(string $Operator) Set Interface operator name.
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var string Model Name. Currently supported models include: Hunyuan, Hailuo, Kling, Vidu, OS, GV
     */
    public $ModelName;

    /**
     * @var string Specify the version number of a particular model. By default, the system uses the currently supported stable version of the model.  
1. Hailuo: Available options [02, 2.3].  
2. Kling: Available options [2.0, 2.1, 2.5, O1, 2.6].  
3. Vidu: Available options [q2, q2-pro, q2-turbo].  
4. GV: Available option [3.1].  
5. OS: Available option [2.0].
     */
    public $ModelVersion;

    /**
     * @var string Generate video description. (Note: Maximum 2000 characters supported). This parameter is mandatory when no images are provided.
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
     * @var string The URL of the image used to guide video generation, which must be publicly accessible via the internet.  
Notes:  
1. The recommended image size should not exceed 10MB, though size limitations may vary across different models.  
2. Supported image formats: JPEG, PNG.  
3. When using the OS model, the input image dimensions must be either 1280x720 or 720x1280.
     */
    public $ImageUrl;

    /**
     * @var string The model will utilize the image provided via this parameter as the ending frame for video generation.  
Supported models for this parameter:  
1. GV: When an ending frame image is provided, the ImageUrl parameter must also be specified as the starting frame.  
2. Kling: Under Resolution: 1080P, version 2.1 supports both start&end frames.  
3. Vidu, q2-pro, q2-turbo: Support start&end frames. 
Notes:  
1. It is recommended that the image size does not exceed 10MB, though specific model limitations may vary.  
2. Supported image formats: JPEG, PNG.
     */
    public $LastImageUrl;

    /**
     * @var array A list comprising up to three material resource images, utilized to depict the reference images the model will employ for video generation.  
Models supporting multi-image input:  
1. GV: When utilizing multi-image input, neither ImageUrl nor LastImageUrl should be used.  
2. Vidu: Supports video generation with multiple reference images. For model q2, 1-7 images can be provided, with the subject ID specified via ReferenceType within ImageInfos.
Notes:  
1. Each image must not exceed 10MB in size.  
2. Supported image formats: JPEG, PNG.
     */
    public $ImageInfos;

    /**
     * @var integer Duration of generated videos.  
Notes:  
1. Kling supports 5 and 10 seconds. Default: 5 seconds.  
2. Hailuo's standard mode supports 6 and 10 seconds, while other modes only support 6 seconds. Default: 6 seconds.  
3. Vidu supports 1 to 10 seconds.  
4. GV supports 8 seconds. Default: 8 seconds.  
5. OS supports 4, 8, and 12 seconds. Default: 8 seconds.
     */
    public $Duration;

    /**
     * @var AigcVideoExtraParam Used to pass additional parameters.
     */
    public $ExtraParameters;

    /**
     * @var AigcStoreCosParam The output files will be stored in the specified COS bucket. Note: COS service must be activated, and the MPS_QcsRole needs to be created and properly authorized.
     */
    public $StoreCosParam;

    /**
     * @var string 
Used to pass specific scenario parameters required by the model, serialized into a JSON format string. Example: {"camera_control":{"type":"simple"}}
     */
    public $AdditionalParameters;

    /**
     * @var string Interface operator name.
     */
    public $Operator;

    /**
     * @param string $ModelName Model Name. Currently supported models include: Hunyuan, Hailuo, Kling, Vidu, OS, GV
     * @param string $ModelVersion Specify the version number of a particular model. By default, the system uses the currently supported stable version of the model.  
1. Hailuo: Available options [02, 2.3].  
2. Kling: Available options [2.0, 2.1, 2.5, O1, 2.6].  
3. Vidu: Available options [q2, q2-pro, q2-turbo].  
4. GV: Available option [3.1].  
5. OS: Available option [2.0].
     * @param string $Prompt Generate video description. (Note: Maximum 2000 characters supported). This parameter is mandatory when no images are provided.
     * @param string $NegativePrompt Used to specify the content you wish to prevent the model from generating.Note: Supported by select models.Examples:  
Overhead lighting, vibrant colors  
Human figures, animals  
Multiple vehicles, wind
     * @param boolean $EnhancePrompt The default value is False, where the model strictly adheres to instructions. For optimal results with more refined prompts, setting this parameter to True will automatically optimize the input prompt to enhance generation quality.
     * @param string $ImageUrl The URL of the image used to guide video generation, which must be publicly accessible via the internet.  
Notes:  
1. The recommended image size should not exceed 10MB, though size limitations may vary across different models.  
2. Supported image formats: JPEG, PNG.  
3. When using the OS model, the input image dimensions must be either 1280x720 or 720x1280.
     * @param string $LastImageUrl The model will utilize the image provided via this parameter as the ending frame for video generation.  
Supported models for this parameter:  
1. GV: When an ending frame image is provided, the ImageUrl parameter must also be specified as the starting frame.  
2. Kling: Under Resolution: 1080P, version 2.1 supports both start&end frames.  
3. Vidu, q2-pro, q2-turbo: Support start&end frames. 
Notes:  
1. It is recommended that the image size does not exceed 10MB, though specific model limitations may vary.  
2. Supported image formats: JPEG, PNG.
     * @param array $ImageInfos A list comprising up to three material resource images, utilized to depict the reference images the model will employ for video generation.  
Models supporting multi-image input:  
1. GV: When utilizing multi-image input, neither ImageUrl nor LastImageUrl should be used.  
2. Vidu: Supports video generation with multiple reference images. For model q2, 1-7 images can be provided, with the subject ID specified via ReferenceType within ImageInfos.
Notes:  
1. Each image must not exceed 10MB in size.  
2. Supported image formats: JPEG, PNG.
     * @param integer $Duration Duration of generated videos.  
Notes:  
1. Kling supports 5 and 10 seconds. Default: 5 seconds.  
2. Hailuo's standard mode supports 6 and 10 seconds, while other modes only support 6 seconds. Default: 6 seconds.  
3. Vidu supports 1 to 10 seconds.  
4. GV supports 8 seconds. Default: 8 seconds.  
5. OS supports 4, 8, and 12 seconds. Default: 8 seconds.
     * @param AigcVideoExtraParam $ExtraParameters Used to pass additional parameters.
     * @param AigcStoreCosParam $StoreCosParam The output files will be stored in the specified COS bucket. Note: COS service must be activated, and the MPS_QcsRole needs to be created and properly authorized.
     * @param string $AdditionalParameters 
Used to pass specific scenario parameters required by the model, serialized into a JSON format string. Example: {"camera_control":{"type":"simple"}}
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

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("LastImageUrl",$param) and $param["LastImageUrl"] !== null) {
            $this->LastImageUrl = $param["LastImageUrl"];
        }

        if (array_key_exists("ImageInfos",$param) and $param["ImageInfos"] !== null) {
            $this->ImageInfos = [];
            foreach ($param["ImageInfos"] as $key => $value){
                $obj = new AigcVideoReferenceImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfos, $obj);
            }
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ExtraParameters",$param) and $param["ExtraParameters"] !== null) {
            $this->ExtraParameters = new AigcVideoExtraParam();
            $this->ExtraParameters->deserialize($param["ExtraParameters"]);
        }

        if (array_key_exists("StoreCosParam",$param) and $param["StoreCosParam"] !== null) {
            $this->StoreCosParam = new AigcStoreCosParam();
            $this->StoreCosParam->deserialize($param["StoreCosParam"]);
        }

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
