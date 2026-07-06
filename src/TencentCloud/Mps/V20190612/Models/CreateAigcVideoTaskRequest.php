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
 * @method string getModelName() Obtain <p>Model name.<br>Supported models:<br>Hunyuan.<br>Hailuo.<br>Kling.<br>Vidu.<br>PixVerse.<br>Mingmou.<br>H2.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name.<br>Supported models:<br>Hunyuan.<br>Hailuo.<br>Kling.<br>Vidu.<br>PixVerse.<br>Mingmou.<br>H2.</p>
 * @method string getModelVersion() Obtain <p>Specific version number of the model. By default, the system uses the supported stable version of the model.</p><ol><li>Hunyuan: [1.5].</li><li>Hailuo: [02, 2.3, and 2.3-fast].</li><li>Kling: [1.6, 2.0, 2.1, 2.5, O1, 2.6, 3.0, and 3.0-Omni].</li><li>Vidu: [q2, q2-pro, q2-turbo, q3-pro, q3-turbo, q3, and q3-mix].</li><li>PixVerse: [v5.6, v6, and c1].</li><li>H2: [1.0].</li></ol>
 * @method void setModelVersion(string $ModelVersion) Set <p>Specific version number of the model. By default, the system uses the supported stable version of the model.</p><ol><li>Hunyuan: [1.5].</li><li>Hailuo: [02, 2.3, and 2.3-fast].</li><li>Kling: [1.6, 2.0, 2.1, 2.5, O1, 2.6, 3.0, and 3.0-Omni].</li><li>Vidu: [q2, q2-pro, q2-turbo, q3-pro, q3-turbo, q3, and q3-mix].</li><li>PixVerse: [v5.6, v6, and c1].</li><li>H2: [1.0].</li></ol>
 * @method string getSceneType() Obtain <p>Scenario for the generated video.<br>Note: Not all models support scenarios.</p><ol><li>Kling supports: motion control (motion_control), digital human (avatar_i2v), and lip sync (lip_sync).</li><li>Mingmou supports: landscape-to-portrait conversion (land2port).</li><li>Vidu supports: effect templates (template_effect).</li><li>Hunyuan supports: 3D world model (3d_scene). The returned file is not a video.</li></ol>
 * @method void setSceneType(string $SceneType) Set <p>Scenario for the generated video.<br>Note: Not all models support scenarios.</p><ol><li>Kling supports: motion control (motion_control), digital human (avatar_i2v), and lip sync (lip_sync).</li><li>Mingmou supports: landscape-to-portrait conversion (land2port).</li><li>Vidu supports: effect templates (template_effect).</li><li>Hunyuan supports: 3D world model (3d_scene). The returned file is not a video.</li></ol>
 * @method string getPrompt() Obtain <p>Description of the generated video. This parameter is required when no image is specified.</p>
 * @method void setPrompt(string $Prompt) Set <p>Description of the generated video. This parameter is required when no image is specified.</p>
 * @method string getNegativePrompt() Obtain <p>Specifies the content you want to prevent the model from generating.<br>Note: Not all models support this.<br>For example:<br>Top lighting and bright colors.<br>People and animals.<br>Multiple vehicles and wind.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>Specifies the content you want to prevent the model from generating.<br>Note: Not all models support this.<br>For example:<br>Top lighting and bright colors.<br>People and animals.<br>Multiple vehicles and wind.</p>
 * @method boolean getEnhancePrompt() Obtain <p>The default value is False, meaning the model follows instructions strictly.<br>For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.</p>
 * @method void setEnhancePrompt(boolean $EnhancePrompt) Set <p>The default value is False, meaning the model follows instructions strictly.<br>For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.</p>
 * @method string getImageUrl() Obtain <p>Image URL used for video generation. The URL must be accessible from the public network.<br>Note:</p><ol><li>The recommended image size is no more than 10 MB. Different models have different size limits. See the model website for a more complete description.</li><li>Supported image formats: JPEG and PNG.</li></ol>
 * @method void setImageUrl(string $ImageUrl) Set <p>Image URL used for video generation. The URL must be accessible from the public network.<br>Note:</p><ol><li>The recommended image size is no more than 10 MB. Different models have different size limits. See the model website for a more complete description.</li><li>Supported image formats: JPEG and PNG.</li></ol>
 * @method string getLastImageUrl() Obtain <p>The model will generate a video using the image of this parameter as the ending frame.<br>Models that support this parameter:</p><ol><li>Kling 2.0, O1, 3.0, and 3.0-Omni support starting and ending frames.</li><li>Kling 1.6, 2.1, 2.5, and 2.6 support starting and ending frames with Resolution:1080p.</li><li>Vidu q2-pro, q2-turbo, q3-pro, and q3-turbo support starting and ending frames.</li><li>PixVerse v5.6, v6, and c1 support starting and ending frames.</li><li>Hailuo 02 supports starting and ending frames.</li></ol><p>Note:</p><ol><li>The recommended image size is no more than 10 MB. Different models have different limits.</li><li>Supported image formats: JPEG and PNG.</li></ol>
 * @method void setLastImageUrl(string $LastImageUrl) Set <p>The model will generate a video using the image of this parameter as the ending frame.<br>Models that support this parameter:</p><ol><li>Kling 2.0, O1, 3.0, and 3.0-Omni support starting and ending frames.</li><li>Kling 1.6, 2.1, 2.5, and 2.6 support starting and ending frames with Resolution:1080p.</li><li>Vidu q2-pro, q2-turbo, q3-pro, and q3-turbo support starting and ending frames.</li><li>PixVerse v5.6, v6, and c1 support starting and ending frames.</li><li>Hailuo 02 supports starting and ending frames.</li></ol><p>Note:</p><ol><li>The recommended image size is no more than 10 MB. Different models have different limits.</li><li>Supported image formats: JPEG and PNG.</li></ol>
 * @method array getImageInfos() Obtain <p>List of multiple asset resource images used to describe the resource images used by the model for video generation.</p><p>Models that support multiple images:</p><ol><li>Vidu q2, q2-pro, q3-turbo, q3, and q3-mix support video generation with multiple reference images. One to 7 images can be uploaded. The ReferenceType in ImageInfos can be used to specify the subject ID for the input.</li><li>Kling O1, 3.0-Omni, and 1.6 support video generation with multiple reference images.<ol><li>Kling 1.6 allows uploading 1 to 4 images.</li><li>Kling O1 and 3.0-Omni allow uploading 1 to 7 images. If a reference video is present, 0 to 4 images can be uploaded.</li></ol></li><li>PixVerse, v5.6, v6, and c1 support video generation with multiple reference images. One to 7 images can be uploaded, and image names need to be specified via the Text field in ImageInfos.</li><li>H2 1.0 supports video generation with multiple image parameters. One to 9 images can be uploaded. If a reference video is present, 0 to 5 images can be uploaded.</li></ol><p>Note:</p><ol><li>The image size cannot exceed 10 MB.</li><li>Supported image formats: JPEG and PNG.</li></ol>
 * @method void setImageInfos(array $ImageInfos) Set <p>List of multiple asset resource images used to describe the resource images used by the model for video generation.</p><p>Models that support multiple images:</p><ol><li>Vidu q2, q2-pro, q3-turbo, q3, and q3-mix support video generation with multiple reference images. One to 7 images can be uploaded. The ReferenceType in ImageInfos can be used to specify the subject ID for the input.</li><li>Kling O1, 3.0-Omni, and 1.6 support video generation with multiple reference images.<ol><li>Kling 1.6 allows uploading 1 to 4 images.</li><li>Kling O1 and 3.0-Omni allow uploading 1 to 7 images. If a reference video is present, 0 to 4 images can be uploaded.</li></ol></li><li>PixVerse, v5.6, v6, and c1 support video generation with multiple reference images. One to 7 images can be uploaded, and image names need to be specified via the Text field in ImageInfos.</li><li>H2 1.0 supports video generation with multiple image parameters. One to 9 images can be uploaded. If a reference video is present, 0 to 5 images can be uploaded.</li></ol><p>Note:</p><ol><li>The image size cannot exceed 10 MB.</li><li>Supported image formats: JPEG and PNG.</li></ol>
 * @method array getVideoInfos() Obtain <p>Only Kling O1, Kling 3.0-Omni, Vidu q2-pro, and H2 1.0 support reference video information.</p><ol><li>For Kling O1 and 3.0-Omni, the reference video can be used as a feature reference video or a video for editing. The default type is video for editing. You can choose to keep the original sound of the video.</li><li>Vidu q2-pro supports video reference.</li><li>H2 1.0 supports video reference.</li></ol>
 * @method void setVideoInfos(array $VideoInfos) Set <p>Only Kling O1, Kling 3.0-Omni, Vidu q2-pro, and H2 1.0 support reference video information.</p><ol><li>For Kling O1 and 3.0-Omni, the reference video can be used as a feature reference video or a video for editing. The default type is video for editing. You can choose to keep the original sound of the video.</li><li>Vidu q2-pro supports video reference.</li><li>H2 1.0 supports video reference.</li></ol>
 * @method integer getDuration() Obtain <p>Duration of the generated video.<br>Note:</p><ol><li>Kling: default value: 5 seconds.<ul><li>O1 supports 3 to 10 seconds.</li><li>3.0-Omni supports 3 to 15 seconds, or 3 to 10 seconds when a video reference is used.</li><li>3.0 supports 3 to 15 seconds.</li><li>Other versions support 5 and 10 seconds.</li></ul></li><li>The std mode of Hailuo supports 6 and 10 seconds, and other modes support 6 seconds. Default value: 6 seconds.</li><li>Vidu: default value: 5 seconds.<ul><li>q3-pro, q3-turbo, q3, and q3-mix support 3 to 16 seconds.</li><li>q2-pro, q2-turbo, and q2 support 1 to 10 seconds.</li></ul></li><li>PixVerse: default value: 5 seconds.<ul><li>v5.6 supports 5, 8, and 10 seconds.</li><li>v6 and c1 support 1 to 15 seconds.</li></ul></li><li>H2 supports 3 to 15 seconds. Default value: 5 seconds.</li></ol>
 * @method void setDuration(integer $Duration) Set <p>Duration of the generated video.<br>Note:</p><ol><li>Kling: default value: 5 seconds.<ul><li>O1 supports 3 to 10 seconds.</li><li>3.0-Omni supports 3 to 15 seconds, or 3 to 10 seconds when a video reference is used.</li><li>3.0 supports 3 to 15 seconds.</li><li>Other versions support 5 and 10 seconds.</li></ul></li><li>The std mode of Hailuo supports 6 and 10 seconds, and other modes support 6 seconds. Default value: 6 seconds.</li><li>Vidu: default value: 5 seconds.<ul><li>q3-pro, q3-turbo, q3, and q3-mix support 3 to 16 seconds.</li><li>q2-pro, q2-turbo, and q2 support 1 to 10 seconds.</li></ul></li><li>PixVerse: default value: 5 seconds.<ul><li>v5.6 supports 5, 8, and 10 seconds.</li><li>v6 and c1 support 1 to 15 seconds.</li></ul></li><li>H2 supports 3 to 15 seconds. Default value: 5 seconds.</li></ol>
 * @method AigcVideoExtraParam getExtraParameters() Obtain <p>Additional parameters required.</p>
 * @method void setExtraParameters(AigcVideoExtraParam $ExtraParameters) Set <p>Additional parameters required.</p>
 * @method AigcStoreCosParam getStoreCosParam() Obtain <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
 * @method string getAdditionalParameters() Obtain <p>Special scenario parameters or storyboard prompts required by the model, formatted as a JSON serialized string.<br>Example:<br>{"camera_control":{"type":"simple"}}.</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) Set <p>Special scenario parameters or storyboard prompts required by the model, formatted as a JSON serialized string.<br>Example:<br>{"camera_control":{"type":"simple"}}.</p>
 * @method string getOperator() Obtain <p>API operator name.</p>
 * @method void setOperator(string $Operator) Set <p>API operator name.</p>
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Model name.<br>Supported models:<br>Hunyuan.<br>Hailuo.<br>Kling.<br>Vidu.<br>PixVerse.<br>Mingmou.<br>H2.</p>
     */
    public $ModelName;

    /**
     * @var string <p>Specific version number of the model. By default, the system uses the supported stable version of the model.</p><ol><li>Hunyuan: [1.5].</li><li>Hailuo: [02, 2.3, and 2.3-fast].</li><li>Kling: [1.6, 2.0, 2.1, 2.5, O1, 2.6, 3.0, and 3.0-Omni].</li><li>Vidu: [q2, q2-pro, q2-turbo, q3-pro, q3-turbo, q3, and q3-mix].</li><li>PixVerse: [v5.6, v6, and c1].</li><li>H2: [1.0].</li></ol>
     */
    public $ModelVersion;

    /**
     * @var string <p>Scenario for the generated video.<br>Note: Not all models support scenarios.</p><ol><li>Kling supports: motion control (motion_control), digital human (avatar_i2v), and lip sync (lip_sync).</li><li>Mingmou supports: landscape-to-portrait conversion (land2port).</li><li>Vidu supports: effect templates (template_effect).</li><li>Hunyuan supports: 3D world model (3d_scene). The returned file is not a video.</li></ol>
     */
    public $SceneType;

    /**
     * @var string <p>Description of the generated video. This parameter is required when no image is specified.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Specifies the content you want to prevent the model from generating.<br>Note: Not all models support this.<br>For example:<br>Top lighting and bright colors.<br>People and animals.<br>Multiple vehicles and wind.</p>
     */
    public $NegativePrompt;

    /**
     * @var boolean <p>The default value is False, meaning the model follows instructions strictly.<br>For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.</p>
     */
    public $EnhancePrompt;

    /**
     * @var string <p>Image URL used for video generation. The URL must be accessible from the public network.<br>Note:</p><ol><li>The recommended image size is no more than 10 MB. Different models have different size limits. See the model website for a more complete description.</li><li>Supported image formats: JPEG and PNG.</li></ol>
     */
    public $ImageUrl;

    /**
     * @var string <p>The model will generate a video using the image of this parameter as the ending frame.<br>Models that support this parameter:</p><ol><li>Kling 2.0, O1, 3.0, and 3.0-Omni support starting and ending frames.</li><li>Kling 1.6, 2.1, 2.5, and 2.6 support starting and ending frames with Resolution:1080p.</li><li>Vidu q2-pro, q2-turbo, q3-pro, and q3-turbo support starting and ending frames.</li><li>PixVerse v5.6, v6, and c1 support starting and ending frames.</li><li>Hailuo 02 supports starting and ending frames.</li></ol><p>Note:</p><ol><li>The recommended image size is no more than 10 MB. Different models have different limits.</li><li>Supported image formats: JPEG and PNG.</li></ol>
     */
    public $LastImageUrl;

    /**
     * @var array <p>List of multiple asset resource images used to describe the resource images used by the model for video generation.</p><p>Models that support multiple images:</p><ol><li>Vidu q2, q2-pro, q3-turbo, q3, and q3-mix support video generation with multiple reference images. One to 7 images can be uploaded. The ReferenceType in ImageInfos can be used to specify the subject ID for the input.</li><li>Kling O1, 3.0-Omni, and 1.6 support video generation with multiple reference images.<ol><li>Kling 1.6 allows uploading 1 to 4 images.</li><li>Kling O1 and 3.0-Omni allow uploading 1 to 7 images. If a reference video is present, 0 to 4 images can be uploaded.</li></ol></li><li>PixVerse, v5.6, v6, and c1 support video generation with multiple reference images. One to 7 images can be uploaded, and image names need to be specified via the Text field in ImageInfos.</li><li>H2 1.0 supports video generation with multiple image parameters. One to 9 images can be uploaded. If a reference video is present, 0 to 5 images can be uploaded.</li></ol><p>Note:</p><ol><li>The image size cannot exceed 10 MB.</li><li>Supported image formats: JPEG and PNG.</li></ol>
     */
    public $ImageInfos;

    /**
     * @var array <p>Only Kling O1, Kling 3.0-Omni, Vidu q2-pro, and H2 1.0 support reference video information.</p><ol><li>For Kling O1 and 3.0-Omni, the reference video can be used as a feature reference video or a video for editing. The default type is video for editing. You can choose to keep the original sound of the video.</li><li>Vidu q2-pro supports video reference.</li><li>H2 1.0 supports video reference.</li></ol>
     */
    public $VideoInfos;

    /**
     * @var integer <p>Duration of the generated video.<br>Note:</p><ol><li>Kling: default value: 5 seconds.<ul><li>O1 supports 3 to 10 seconds.</li><li>3.0-Omni supports 3 to 15 seconds, or 3 to 10 seconds when a video reference is used.</li><li>3.0 supports 3 to 15 seconds.</li><li>Other versions support 5 and 10 seconds.</li></ul></li><li>The std mode of Hailuo supports 6 and 10 seconds, and other modes support 6 seconds. Default value: 6 seconds.</li><li>Vidu: default value: 5 seconds.<ul><li>q3-pro, q3-turbo, q3, and q3-mix support 3 to 16 seconds.</li><li>q2-pro, q2-turbo, and q2 support 1 to 10 seconds.</li></ul></li><li>PixVerse: default value: 5 seconds.<ul><li>v5.6 supports 5, 8, and 10 seconds.</li><li>v6 and c1 support 1 to 15 seconds.</li></ul></li><li>H2 supports 3 to 15 seconds. Default value: 5 seconds.</li></ol>
     */
    public $Duration;

    /**
     * @var AigcVideoExtraParam <p>Additional parameters required.</p>
     */
    public $ExtraParameters;

    /**
     * @var AigcStoreCosParam <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
     */
    public $StoreCosParam;

    /**
     * @var string <p>Special scenario parameters or storyboard prompts required by the model, formatted as a JSON serialized string.<br>Example:<br>{"camera_control":{"type":"simple"}}.</p>
     */
    public $AdditionalParameters;

    /**
     * @var string <p>API operator name.</p>
     */
    public $Operator;

    /**
     * @param string $ModelName <p>Model name.<br>Supported models:<br>Hunyuan.<br>Hailuo.<br>Kling.<br>Vidu.<br>PixVerse.<br>Mingmou.<br>H2.</p>
     * @param string $ModelVersion <p>Specific version number of the model. By default, the system uses the supported stable version of the model.</p><ol><li>Hunyuan: [1.5].</li><li>Hailuo: [02, 2.3, and 2.3-fast].</li><li>Kling: [1.6, 2.0, 2.1, 2.5, O1, 2.6, 3.0, and 3.0-Omni].</li><li>Vidu: [q2, q2-pro, q2-turbo, q3-pro, q3-turbo, q3, and q3-mix].</li><li>PixVerse: [v5.6, v6, and c1].</li><li>H2: [1.0].</li></ol>
     * @param string $SceneType <p>Scenario for the generated video.<br>Note: Not all models support scenarios.</p><ol><li>Kling supports: motion control (motion_control), digital human (avatar_i2v), and lip sync (lip_sync).</li><li>Mingmou supports: landscape-to-portrait conversion (land2port).</li><li>Vidu supports: effect templates (template_effect).</li><li>Hunyuan supports: 3D world model (3d_scene). The returned file is not a video.</li></ol>
     * @param string $Prompt <p>Description of the generated video. This parameter is required when no image is specified.</p>
     * @param string $NegativePrompt <p>Specifies the content you want to prevent the model from generating.<br>Note: Not all models support this.<br>For example:<br>Top lighting and bright colors.<br>People and animals.<br>Multiple vehicles and wind.</p>
     * @param boolean $EnhancePrompt <p>The default value is False, meaning the model follows instructions strictly.<br>For better results with more nuanced prompts, set this parameter to True to automatically optimize the input prompt and improve generation quality.</p>
     * @param string $ImageUrl <p>Image URL used for video generation. The URL must be accessible from the public network.<br>Note:</p><ol><li>The recommended image size is no more than 10 MB. Different models have different size limits. See the model website for a more complete description.</li><li>Supported image formats: JPEG and PNG.</li></ol>
     * @param string $LastImageUrl <p>The model will generate a video using the image of this parameter as the ending frame.<br>Models that support this parameter:</p><ol><li>Kling 2.0, O1, 3.0, and 3.0-Omni support starting and ending frames.</li><li>Kling 1.6, 2.1, 2.5, and 2.6 support starting and ending frames with Resolution:1080p.</li><li>Vidu q2-pro, q2-turbo, q3-pro, and q3-turbo support starting and ending frames.</li><li>PixVerse v5.6, v6, and c1 support starting and ending frames.</li><li>Hailuo 02 supports starting and ending frames.</li></ol><p>Note:</p><ol><li>The recommended image size is no more than 10 MB. Different models have different limits.</li><li>Supported image formats: JPEG and PNG.</li></ol>
     * @param array $ImageInfos <p>List of multiple asset resource images used to describe the resource images used by the model for video generation.</p><p>Models that support multiple images:</p><ol><li>Vidu q2, q2-pro, q3-turbo, q3, and q3-mix support video generation with multiple reference images. One to 7 images can be uploaded. The ReferenceType in ImageInfos can be used to specify the subject ID for the input.</li><li>Kling O1, 3.0-Omni, and 1.6 support video generation with multiple reference images.<ol><li>Kling 1.6 allows uploading 1 to 4 images.</li><li>Kling O1 and 3.0-Omni allow uploading 1 to 7 images. If a reference video is present, 0 to 4 images can be uploaded.</li></ol></li><li>PixVerse, v5.6, v6, and c1 support video generation with multiple reference images. One to 7 images can be uploaded, and image names need to be specified via the Text field in ImageInfos.</li><li>H2 1.0 supports video generation with multiple image parameters. One to 9 images can be uploaded. If a reference video is present, 0 to 5 images can be uploaded.</li></ol><p>Note:</p><ol><li>The image size cannot exceed 10 MB.</li><li>Supported image formats: JPEG and PNG.</li></ol>
     * @param array $VideoInfos <p>Only Kling O1, Kling 3.0-Omni, Vidu q2-pro, and H2 1.0 support reference video information.</p><ol><li>For Kling O1 and 3.0-Omni, the reference video can be used as a feature reference video or a video for editing. The default type is video for editing. You can choose to keep the original sound of the video.</li><li>Vidu q2-pro supports video reference.</li><li>H2 1.0 supports video reference.</li></ol>
     * @param integer $Duration <p>Duration of the generated video.<br>Note:</p><ol><li>Kling: default value: 5 seconds.<ul><li>O1 supports 3 to 10 seconds.</li><li>3.0-Omni supports 3 to 15 seconds, or 3 to 10 seconds when a video reference is used.</li><li>3.0 supports 3 to 15 seconds.</li><li>Other versions support 5 and 10 seconds.</li></ul></li><li>The std mode of Hailuo supports 6 and 10 seconds, and other modes support 6 seconds. Default value: 6 seconds.</li><li>Vidu: default value: 5 seconds.<ul><li>q3-pro, q3-turbo, q3, and q3-mix support 3 to 16 seconds.</li><li>q2-pro, q2-turbo, and q2 support 1 to 10 seconds.</li></ul></li><li>PixVerse: default value: 5 seconds.<ul><li>v5.6 supports 5, 8, and 10 seconds.</li><li>v6 and c1 support 1 to 15 seconds.</li></ul></li><li>H2 supports 3 to 15 seconds. Default value: 5 seconds.</li></ol>
     * @param AigcVideoExtraParam $ExtraParameters <p>Additional parameters required.</p>
     * @param AigcStoreCosParam $StoreCosParam <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
     * @param string $AdditionalParameters <p>Special scenario parameters or storyboard prompts required by the model, formatted as a JSON serialized string.<br>Example:<br>{"camera_control":{"type":"simple"}}.</p>
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

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new AigcVideoReferenceVideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
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
