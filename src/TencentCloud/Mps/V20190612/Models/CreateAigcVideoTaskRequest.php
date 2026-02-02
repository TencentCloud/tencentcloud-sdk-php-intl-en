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
 * @method string getModelName() Obtain Model name.
Supported models:Hunyuan,
Hailuo,
Kling,
Vidu,
OS,
GV.
 * @method void setModelName(string $ModelName) Set Model name.
Supported models:Hunyuan,
Hailuo,
Kling,
Vidu,
OS,
GV.
 * @method string getModelVersion() Obtain Specific version number of the model. By default, the system uses the supported stable version of the model.1. Hailuo: [02 and 2.3].2. Kling: [2.0, 2.1, 2.5, O1, and 2.6].3. Vidu: [q2, q2-pro, and q2-turbo].4. GV: [3.1].5. OS: [2.0].
 * @method void setModelVersion(string $ModelVersion) Set Specific version number of the model. By default, the system uses the supported stable version of the model.1. Hailuo: [02 and 2.3].2. Kling: [2.0, 2.1, 2.5, O1, and 2.6].3. Vidu: [q2, q2-pro, and q2-turbo].4. GV: [3.1].5. OS: [2.0].
 * @method string getSceneType() Obtain Scenario for the generated video.Note: Not all models support scenarios.1. Kling supports motion control (motion_control).2. Mingmou supports landscape-to-portrait conversion (land2port).3. Vidu supports special effect templates (template_effect).
 * @method void setSceneType(string $SceneType) Set Scenario for the generated video.Note: Not all models support scenarios.1. Kling supports motion control (motion_control).2. Mingmou supports landscape-to-portrait conversion (land2port).3. Vidu supports special effect templates (template_effect).
 * @method string getPrompt() Obtain Description of the generated video. (Note: A maximum of 2000 characters is supported.) This parameter is required when no reference image is specified.
 * @method void setPrompt(string $Prompt) Set Description of the generated video. (Note: A maximum of 2000 characters is supported.) This parameter is required when no reference image is specified.
 * @method string getNegativePrompt() Obtain Content you want to prevent the model from generating.Note: Not all models support this.For example:Top lighting and bright color.People and animals.Multiple vehicles and wind.
 * @method void setNegativePrompt(string $NegativePrompt) Set Content you want to prevent the model from generating.Note: Not all models support this.For example:Top lighting and bright color.People and animals.Multiple vehicles and wind.
 * @method boolean getEnhancePrompt() Obtain The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.
 * @method void setEnhancePrompt(boolean $EnhancePrompt) Set The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.
 * @method string getImageUrl() Obtain Image URL for video generation. The URL must be accessible from the public network.Note:1. The recommended image size is no more than 10 MB. Different models have different size limits.2. Supported image formats: JPEG and PNG.3. If the OS model is used, the input image dimension should be 1280x720 or 720x1280.
 * @method void setImageUrl(string $ImageUrl) Set Image URL for video generation. The URL must be accessible from the public network.Note:1. The recommended image size is no more than 10 MB. Different models have different size limits.2. Supported image formats: JPEG and PNG.3. If the OS model is used, the input image dimension should be 1280x720 or 720x1280.
 * @method string getLastImageUrl() Obtain The model will generate a video using the image of this parameter as the ending frame.Models that support this parameter:1. GV. If the ending frame image is specified, ImageUrl is required as the starting frame.2. Kling. Version 2.1 supports starting and ending frames with a resolution of 1080P.3. Vidu. q2-pro and q2-turbo support starting and ending frames.Note:1. The recommended image size is no more than 10 MB. Different models have different limits.2. Supported image formats: JPEG and PNG.
 * @method void setLastImageUrl(string $LastImageUrl) Set The model will generate a video using the image of this parameter as the ending frame.Models that support this parameter:1. GV. If the ending frame image is specified, ImageUrl is required as the starting frame.2. Kling. Version 2.1 supports starting and ending frames with a resolution of 1080P.3. Vidu. q2-pro and q2-turbo support starting and ending frames.Note:1. The recommended image size is no more than 10 MB. Different models have different limits.2. Supported image formats: JPEG and PNG.
 * @method array getImageInfos() Obtain List of up to 3 asset images, used to describe the images the model should use for video generation.Model that supports multiple images:1. GV. If multiple images are specified, ImageUrl and LastImageUrl are unavailable.2. Vidu supports video generation with multiple reference images. The q2 model accepts 1 to 7 images. The ReferenceType in ImageInfos can be used to specify the subject ID for the input.Note:1. The image size cannot exceed 10 MB.2. Supported image formats: JPEG and PNG.
 * @method void setImageInfos(array $ImageInfos) Set List of up to 3 asset images, used to describe the images the model should use for video generation.Model that supports multiple images:1. GV. If multiple images are specified, ImageUrl and LastImageUrl are unavailable.2. Vidu supports video generation with multiple reference images. The q2 model accepts 1 to 7 images. The ReferenceType in ImageInfos can be used to specify the subject ID for the input.Note:1. The image size cannot exceed 10 MB.2. Supported image formats: JPEG and PNG.
 * @method integer getDuration() Obtain Duration of the generated video.Note:1. Kling supports 5 and 10 seconds. Default value: 5 seconds.2. The std mode of Hailuo supports 6 and 10 seconds, and other modes support 6 seconds. Default value: 6 seconds.3. Vidu supports 1 to 10 seconds.4. GV supports 8 seconds. Default value: 8 seconds.5. OS supports 4, 8, and 12 seconds. Default value: 8 seconds.
 * @method void setDuration(integer $Duration) Set Duration of the generated video.Note:1. Kling supports 5 and 10 seconds. Default value: 5 seconds.2. The std mode of Hailuo supports 6 and 10 seconds, and other modes support 6 seconds. Default value: 6 seconds.3. Vidu supports 1 to 10 seconds.4. GV supports 8 seconds. Default value: 8 seconds.5. OS supports 4, 8, and 12 seconds. Default value: 8 seconds.
 * @method AigcVideoExtraParam getExtraParameters() Obtain Additional parameters required.
 * @method void setExtraParameters(AigcVideoExtraParam $ExtraParameters) Set Additional parameters required.
 * @method AigcStoreCosParam getStoreCosParam() Obtain COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
 * @method string getAdditionalParameters() Obtain Special scenario parameters required by the model, formatted as a JSON serialized string.Example:{\"camera_control\":{\"type\":\"simple\"}}
 * @method void setAdditionalParameters(string $AdditionalParameters) Set Special scenario parameters required by the model, formatted as a JSON serialized string.Example:{\"camera_control\":{\"type\":\"simple\"}}
 * @method string getOperator() Obtain API operator name.
 * @method void setOperator(string $Operator) Set API operator name.
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var string Model name.
Supported models:Hunyuan,
Hailuo,
Kling,
Vidu,
OS,
GV.
     */
    public $ModelName;

    /**
     * @var string Specific version number of the model. By default, the system uses the supported stable version of the model.1. Hailuo: [02 and 2.3].2. Kling: [2.0, 2.1, 2.5, O1, and 2.6].3. Vidu: [q2, q2-pro, and q2-turbo].4. GV: [3.1].5. OS: [2.0].
     */
    public $ModelVersion;

    /**
     * @var string Scenario for the generated video.Note: Not all models support scenarios.1. Kling supports motion control (motion_control).2. Mingmou supports landscape-to-portrait conversion (land2port).3. Vidu supports special effect templates (template_effect).
     */
    public $SceneType;

    /**
     * @var string Description of the generated video. (Note: A maximum of 2000 characters is supported.) This parameter is required when no reference image is specified.
     */
    public $Prompt;

    /**
     * @var string Content you want to prevent the model from generating.Note: Not all models support this.For example:Top lighting and bright color.People and animals.Multiple vehicles and wind.
     */
    public $NegativePrompt;

    /**
     * @var boolean The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.
     */
    public $EnhancePrompt;

    /**
     * @var string Image URL for video generation. The URL must be accessible from the public network.Note:1. The recommended image size is no more than 10 MB. Different models have different size limits.2. Supported image formats: JPEG and PNG.3. If the OS model is used, the input image dimension should be 1280x720 or 720x1280.
     */
    public $ImageUrl;

    /**
     * @var string The model will generate a video using the image of this parameter as the ending frame.Models that support this parameter:1. GV. If the ending frame image is specified, ImageUrl is required as the starting frame.2. Kling. Version 2.1 supports starting and ending frames with a resolution of 1080P.3. Vidu. q2-pro and q2-turbo support starting and ending frames.Note:1. The recommended image size is no more than 10 MB. Different models have different limits.2. Supported image formats: JPEG and PNG.
     */
    public $LastImageUrl;

    /**
     * @var array List of up to 3 asset images, used to describe the images the model should use for video generation.Model that supports multiple images:1. GV. If multiple images are specified, ImageUrl and LastImageUrl are unavailable.2. Vidu supports video generation with multiple reference images. The q2 model accepts 1 to 7 images. The ReferenceType in ImageInfos can be used to specify the subject ID for the input.Note:1. The image size cannot exceed 10 MB.2. Supported image formats: JPEG and PNG.
     */
    public $ImageInfos;

    /**
     * @var integer Duration of the generated video.Note:1. Kling supports 5 and 10 seconds. Default value: 5 seconds.2. The std mode of Hailuo supports 6 and 10 seconds, and other modes support 6 seconds. Default value: 6 seconds.3. Vidu supports 1 to 10 seconds.4. GV supports 8 seconds. Default value: 8 seconds.5. OS supports 4, 8, and 12 seconds. Default value: 8 seconds.
     */
    public $Duration;

    /**
     * @var AigcVideoExtraParam Additional parameters required.
     */
    public $ExtraParameters;

    /**
     * @var AigcStoreCosParam COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
     */
    public $StoreCosParam;

    /**
     * @var string Special scenario parameters required by the model, formatted as a JSON serialized string.Example:{\"camera_control\":{\"type\":\"simple\"}}
     */
    public $AdditionalParameters;

    /**
     * @var string API operator name.
     */
    public $Operator;

    /**
     * @param string $ModelName Model name.
Supported models:Hunyuan,
Hailuo,
Kling,
Vidu,
OS,
GV.
     * @param string $ModelVersion Specific version number of the model. By default, the system uses the supported stable version of the model.1. Hailuo: [02 and 2.3].2. Kling: [2.0, 2.1, 2.5, O1, and 2.6].3. Vidu: [q2, q2-pro, and q2-turbo].4. GV: [3.1].5. OS: [2.0].
     * @param string $SceneType Scenario for the generated video.Note: Not all models support scenarios.1. Kling supports motion control (motion_control).2. Mingmou supports landscape-to-portrait conversion (land2port).3. Vidu supports special effect templates (template_effect).
     * @param string $Prompt Description of the generated video. (Note: A maximum of 2000 characters is supported.) This parameter is required when no reference image is specified.
     * @param string $NegativePrompt Content you want to prevent the model from generating.Note: Not all models support this.For example:Top lighting and bright color.People and animals.Multiple vehicles and wind.
     * @param boolean $EnhancePrompt The default value is False, meaning the model follows instructions strictly. For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.
     * @param string $ImageUrl Image URL for video generation. The URL must be accessible from the public network.Note:1. The recommended image size is no more than 10 MB. Different models have different size limits.2. Supported image formats: JPEG and PNG.3. If the OS model is used, the input image dimension should be 1280x720 or 720x1280.
     * @param string $LastImageUrl The model will generate a video using the image of this parameter as the ending frame.Models that support this parameter:1. GV. If the ending frame image is specified, ImageUrl is required as the starting frame.2. Kling. Version 2.1 supports starting and ending frames with a resolution of 1080P.3. Vidu. q2-pro and q2-turbo support starting and ending frames.Note:1. The recommended image size is no more than 10 MB. Different models have different limits.2. Supported image formats: JPEG and PNG.
     * @param array $ImageInfos List of up to 3 asset images, used to describe the images the model should use for video generation.Model that supports multiple images:1. GV. If multiple images are specified, ImageUrl and LastImageUrl are unavailable.2. Vidu supports video generation with multiple reference images. The q2 model accepts 1 to 7 images. The ReferenceType in ImageInfos can be used to specify the subject ID for the input.Note:1. The image size cannot exceed 10 MB.2. Supported image formats: JPEG and PNG.
     * @param integer $Duration Duration of the generated video.Note:1. Kling supports 5 and 10 seconds. Default value: 5 seconds.2. The std mode of Hailuo supports 6 and 10 seconds, and other modes support 6 seconds. Default value: 6 seconds.3. Vidu supports 1 to 10 seconds.4. GV supports 8 seconds. Default value: 8 seconds.5. OS supports 4, 8, and 12 seconds. Default value: 8 seconds.
     * @param AigcVideoExtraParam $ExtraParameters Additional parameters required.
     * @param AigcStoreCosParam $StoreCosParam COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
     * @param string $AdditionalParameters Special scenario parameters required by the model, formatted as a JSON serialized string.Example:{\"camera_control\":{\"type\":\"simple\"}}
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
