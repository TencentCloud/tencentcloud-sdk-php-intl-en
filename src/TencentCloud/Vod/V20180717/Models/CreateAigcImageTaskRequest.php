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
 * CreateAigcImageTask request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b></p>
 * @method string getModelName() Obtain <p>Model name. Value:</p><li>OG</li><li>GG</li><li>SI</li><li>Qwen</li><li>Hunyuan</li><li>Vidu</li><li>Kling</li>
 * @method void setModelName(string $ModelName) Set <p>Model name. Value:</p><li>OG</li><li>GG</li><li>SI</li><li>Qwen</li><li>Hunyuan</li><li>Vidu</li><li>Kling</li>
 * @method string getModelVersion() Obtain <p>Model version. Parameter:</p><li>When ModelName is OG, available values are image2_low, image2_medium, image2_high;</li><li>When ModelName is GG, available values are 2.5, 3.0, 3.1;</li><li>When ModelName is Jimeng, available values are 4.0;</li><li>When ModelName is SI, available values are 4.0, 4.5, 5.0-lite;</li><li>When ModelName is Qwen, available values are 0925;</li><li>When ModelName is Hunyuan, available values are 3.0;</li><li>When ModelName is Vidu, available values are q2;</li><li>When ModelName is Kling, available values are 2.1, 3.0, 3.0-Omni, O1, scene;</li>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version. Parameter:</p><li>When ModelName is OG, available values are image2_low, image2_medium, image2_high;</li><li>When ModelName is GG, available values are 2.5, 3.0, 3.1;</li><li>When ModelName is Jimeng, available values are 4.0;</li><li>When ModelName is SI, available values are 4.0, 4.5, 5.0-lite;</li><li>When ModelName is Qwen, available values are 0925;</li><li>When ModelName is Hunyuan, available values are 3.0;</li><li>When ModelName is Vidu, available values are q2;</li><li>When ModelName is Kling, available values are 2.1, 3.0, 3.0-Omni, O1, scene;</li>
 * @method array getFileInfos() Obtain <p>File information of the input image for the AIGC image generation task. Maximum number of reference images supported by each model:</p><ul><li>GG 2.5: 3;</li><li>GG 3.0: 14;</li><li>GG 3.1: 14;</li><li>Kling 2.1: 4;</li><li>Kling 3.0: 1;</li><li>Kling 3.0-Omni: 10;</li><li>Kling O1: 10;</li><li>SI 4.0: 14;</li><li>SI 4.5: 14;</li><li>SI 5.0-lite: 14;</li><li>Vidu q2: 7;</li><li>Hunyuan 3.0: 3;</li><li>Qwen 0925: 1;</li><li>MJ v7: 3.</li></ul>
 * @method void setFileInfos(array $FileInfos) Set <p>File information of the input image for the AIGC image generation task. Maximum number of reference images supported by each model:</p><ul><li>GG 2.5: 3;</li><li>GG 3.0: 14;</li><li>GG 3.1: 14;</li><li>Kling 2.1: 4;</li><li>Kling 3.0: 1;</li><li>Kling 3.0-Omni: 10;</li><li>Kling O1: 10;</li><li>SI 4.0: 14;</li><li>SI 4.5: 14;</li><li>SI 5.0-lite: 14;</li><li>Vidu q2: 7;</li><li>Hunyuan 3.0: 3;</li><li>Qwen 0925: 1;</li><li>MJ v7: 3.</li></ul>
 * @method string getPrompt() Obtain <p>Prompt for image generation. This parameter is required when FileInfos is empty.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for image generation. This parameter is required when FileInfos is empty.</p>
 * @method string getNegativePrompt() Obtain <p>To prevent the model from generating image prompts.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>To prevent the model from generating image prompts.</p>
 * @method string getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method AigcImageOutputConfig getOutputConfig() Obtain <p>Output media file configuration for the image generation task.</p>
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) Set <p>Output media file configuration for the image generation task.</p>
 * @method string getInputRegion() Obtain <p>Input region information. Available values:</p><ul><li>Mainland: Chinese mainland;</li><li>Oversea: overseas;</li><li>OverseaUSWest: overseas - western United States;</li></ul>
 * @method void setInputRegion(string $InputRegion) Set <p>Input region information. Available values:</p><ul><li>Mainland: Chinese mainland;</li><li>Oversea: overseas;</li><li>OverseaUSWest: overseas - western United States;</li></ul>
 * @method string getSceneType() Obtain <p>Scenario type. Values are as follows:</p><li>When ModelName is Hunyuan: 3d_panorama means panoramic view;</li><li>When ModelName is Kling: image_expand means image expansion;</li><li>Other ModelNames are not currently supported.</li>
 * @method void setSceneType(string $SceneType) Set <p>Scenario type. Values are as follows:</p><li>When ModelName is Hunyuan: 3d_panorama means panoramic view;</li><li>When ModelName is Kling: image_expand means image expansion;</li><li>Other ModelNames are not currently supported.</li>
 * @method integer getSeed() Obtain <p>Random seed of the model.</p>
 * @method void setSeed(integer $Seed) Set <p>Random seed of the model.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used for special purpose.</p><ul><li><p>Hunyuan 3.0</p><ul><li>Supports freely setting resolution width and height, both within [512, 2048] pixels, with the product of width and height ≤ 1024x1024 pixels. Example: <code>{"AdditionalParameters": "{\"size\":\"728x1024\"}"}</code></li></ul></li><li><p>SI series</p><ul><li>Supports freely setting resolution width and height:<ul><li>SI 4.0: Valid total pixel range [1280x720=921600, 4096x4096=16777216]. Example: <code>{"AdditionalParameters": "{\"size\":\"728x1356\"}"}</code></li><li>SI 4.5: Valid total pixel range [2560x1440=3686400, 4096x4096=16777216]. Example: <code>{"AdditionalParameters": "{\"size\":\"2560x1440\"}"}</code></li><li>SI 5.0-lite: Valid total pixel range [2560x1440=3686400, 3072x3072x1.1025=10404496]. Example: <code>{"AdditionalParameters": "{\"size\":\"2560x1440\"}"}</code></li></ul></li><li>Can be used to enable output of multiple images. Example: <code>{"AdditionalParameters": "{\"sequential_image_generation\":\"auto\"}"}</code>. Besides, the number of images to output must be specified in the <code>Prompt</code>, such as "output 3 images".</li></ul></li><li><p>Qwen 0925</p><ul><li>Supports freely setting resolution width and height, with valid total pixel range [512x512=261632, 2048x2048=4194304]. Example: <code>{"AdditionalParameters": "{\"size\":\"728*1024\"}"}</code></li></ul></li><li><p>OG</p><ul><li>Supports freely setting resolution width and height:<ul><li>Pixel size must be divisible by 16.</li><li>Total pixels must be at least 655,360 and should not exceed 8,294,400.</li><li>Example: <code>{"AdditionalParameters": "{\"size\":\"728*1024\"}"}</code></li></ul></li><li>Supports setting transparent layer:<ul><li>Example: <code>{"AdditionalParameters": "{\"background\":\"transparent\"}"}</code></li></ul></li></ul></li><li><p>Kling</p><ul><li>Supports setting image expansion parameters. Example: <code>{AdditionalParameters":"{\"down_expansion_ratio\":0.2,\"left_expansion_ratio\":0.3,\"right_expansion_ratio\":0.4,\"up_expansion_ratio\":0.1}}</code><ul><li>Common constraints:<ul><li>Value range: [0, 2].</li><li>The overall area of the new image should not exceed 3 times that of the original image.</li><li>Forward prompts can be input through the <code>Prompt</code> field.</li><li>Example description:<ul><li>up_expansion_ratio: Upward expansion range, calculated based on a multiple of the original image height. If the original image height is 20 and the parameter value is 0.1, the distance from the top edge of the original image to the top edge of the new image is 20 × 0.1 = 2, which is the expansion range.</li><li>down_expansion_ratio: Downward expansion range, calculated based on a multiple of the original image height. If the original image height is 20 and the parameter value is 0.2, the distance from the bottom edge of the original image to the bottom edge of the new image is 20 × 0.2 = 4, which is the expansion range.</li><li>left_expansion_ratio: Leftward expansion range, calculated based on a multiple of the original image width. If the original image width is 30 and the parameter value is 0.3, the distance from the left edge of the original image to the left edge of the new image is 30 × 0.3 = 9, which is the expansion range.</li><li>right_expansion_ratio: Rightward expansion range, calculated based on a multiple of the original image width. If the original image width is 30 and the parameter value is 0.4, the distance from the right edge of the original image to the right edge of the new image is 30 × 0.4 = 12, which is the expansion range.</li></ul></li></ul></li></ul></li></ul></li></ul>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used for special purpose.</p><ul><li><p>Hunyuan 3.0</p><ul><li>Supports freely setting resolution width and height, both within [512, 2048] pixels, with the product of width and height ≤ 1024x1024 pixels. Example: <code>{"AdditionalParameters": "{\"size\":\"728x1024\"}"}</code></li></ul></li><li><p>SI series</p><ul><li>Supports freely setting resolution width and height:<ul><li>SI 4.0: Valid total pixel range [1280x720=921600, 4096x4096=16777216]. Example: <code>{"AdditionalParameters": "{\"size\":\"728x1356\"}"}</code></li><li>SI 4.5: Valid total pixel range [2560x1440=3686400, 4096x4096=16777216]. Example: <code>{"AdditionalParameters": "{\"size\":\"2560x1440\"}"}</code></li><li>SI 5.0-lite: Valid total pixel range [2560x1440=3686400, 3072x3072x1.1025=10404496]. Example: <code>{"AdditionalParameters": "{\"size\":\"2560x1440\"}"}</code></li></ul></li><li>Can be used to enable output of multiple images. Example: <code>{"AdditionalParameters": "{\"sequential_image_generation\":\"auto\"}"}</code>. Besides, the number of images to output must be specified in the <code>Prompt</code>, such as "output 3 images".</li></ul></li><li><p>Qwen 0925</p><ul><li>Supports freely setting resolution width and height, with valid total pixel range [512x512=261632, 2048x2048=4194304]. Example: <code>{"AdditionalParameters": "{\"size\":\"728*1024\"}"}</code></li></ul></li><li><p>OG</p><ul><li>Supports freely setting resolution width and height:<ul><li>Pixel size must be divisible by 16.</li><li>Total pixels must be at least 655,360 and should not exceed 8,294,400.</li><li>Example: <code>{"AdditionalParameters": "{\"size\":\"728*1024\"}"}</code></li></ul></li><li>Supports setting transparent layer:<ul><li>Example: <code>{"AdditionalParameters": "{\"background\":\"transparent\"}"}</code></li></ul></li></ul></li><li><p>Kling</p><ul><li>Supports setting image expansion parameters. Example: <code>{AdditionalParameters":"{\"down_expansion_ratio\":0.2,\"left_expansion_ratio\":0.3,\"right_expansion_ratio\":0.4,\"up_expansion_ratio\":0.1}}</code><ul><li>Common constraints:<ul><li>Value range: [0, 2].</li><li>The overall area of the new image should not exceed 3 times that of the original image.</li><li>Forward prompts can be input through the <code>Prompt</code> field.</li><li>Example description:<ul><li>up_expansion_ratio: Upward expansion range, calculated based on a multiple of the original image height. If the original image height is 20 and the parameter value is 0.1, the distance from the top edge of the original image to the top edge of the new image is 20 × 0.1 = 2, which is the expansion range.</li><li>down_expansion_ratio: Downward expansion range, calculated based on a multiple of the original image height. If the original image height is 20 and the parameter value is 0.2, the distance from the bottom edge of the original image to the bottom edge of the new image is 20 × 0.2 = 4, which is the expansion range.</li><li>left_expansion_ratio: Leftward expansion range, calculated based on a multiple of the original image width. If the original image width is 30 and the parameter value is 0.3, the distance from the left edge of the original image to the left edge of the new image is 30 × 0.3 = 9, which is the expansion range.</li><li>right_expansion_ratio: Rightward expansion range, calculated based on a multiple of the original image width. If the original image width is 30 and the parameter value is 0.4, the distance from the right edge of the original image to the right edge of the new image is 30 × 0.4 = 12, which is the expansion range.</li></ul></li></ul></li></ul></li></ul></li></ul>
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Model name. Value:</p><li>OG</li><li>GG</li><li>SI</li><li>Qwen</li><li>Hunyuan</li><li>Vidu</li><li>Kling</li>
     */
    public $ModelName;

    /**
     * @var string <p>Model version. Parameter:</p><li>When ModelName is OG, available values are image2_low, image2_medium, image2_high;</li><li>When ModelName is GG, available values are 2.5, 3.0, 3.1;</li><li>When ModelName is Jimeng, available values are 4.0;</li><li>When ModelName is SI, available values are 4.0, 4.5, 5.0-lite;</li><li>When ModelName is Qwen, available values are 0925;</li><li>When ModelName is Hunyuan, available values are 3.0;</li><li>When ModelName is Vidu, available values are q2;</li><li>When ModelName is Kling, available values are 2.1, 3.0, 3.0-Omni, O1, scene;</li>
     */
    public $ModelVersion;

    /**
     * @var array <p>File information of the input image for the AIGC image generation task. Maximum number of reference images supported by each model:</p><ul><li>GG 2.5: 3;</li><li>GG 3.0: 14;</li><li>GG 3.1: 14;</li><li>Kling 2.1: 4;</li><li>Kling 3.0: 1;</li><li>Kling 3.0-Omni: 10;</li><li>Kling O1: 10;</li><li>SI 4.0: 14;</li><li>SI 4.5: 14;</li><li>SI 5.0-lite: 14;</li><li>Vidu q2: 7;</li><li>Hunyuan 3.0: 3;</li><li>Qwen 0925: 1;</li><li>MJ v7: 3.</li></ul>
     */
    public $FileInfos;

    /**
     * @var string <p>Prompt for image generation. This parameter is required when FileInfos is empty.</p>
     */
    public $Prompt;

    /**
     * @var string <p>To prevent the model from generating image prompts.</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcImageOutputConfig <p>Output media file configuration for the image generation task.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Input region information. Available values:</p><ul><li>Mainland: Chinese mainland;</li><li>Oversea: overseas;</li><li>OverseaUSWest: overseas - western United States;</li></ul>
     */
    public $InputRegion;

    /**
     * @var string <p>Scenario type. Values are as follows:</p><li>When ModelName is Hunyuan: 3d_panorama means panoramic view;</li><li>When ModelName is Kling: image_expand means image expansion;</li><li>Other ModelNames are not currently supported.</li>
     */
    public $SceneType;

    /**
     * @var integer <p>Random seed of the model.</p>
     */
    public $Seed;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>Reserved field, used for special purpose.</p><ul><li><p>Hunyuan 3.0</p><ul><li>Supports freely setting resolution width and height, both within [512, 2048] pixels, with the product of width and height ≤ 1024x1024 pixels. Example: <code>{"AdditionalParameters": "{\"size\":\"728x1024\"}"}</code></li></ul></li><li><p>SI series</p><ul><li>Supports freely setting resolution width and height:<ul><li>SI 4.0: Valid total pixel range [1280x720=921600, 4096x4096=16777216]. Example: <code>{"AdditionalParameters": "{\"size\":\"728x1356\"}"}</code></li><li>SI 4.5: Valid total pixel range [2560x1440=3686400, 4096x4096=16777216]. Example: <code>{"AdditionalParameters": "{\"size\":\"2560x1440\"}"}</code></li><li>SI 5.0-lite: Valid total pixel range [2560x1440=3686400, 3072x3072x1.1025=10404496]. Example: <code>{"AdditionalParameters": "{\"size\":\"2560x1440\"}"}</code></li></ul></li><li>Can be used to enable output of multiple images. Example: <code>{"AdditionalParameters": "{\"sequential_image_generation\":\"auto\"}"}</code>. Besides, the number of images to output must be specified in the <code>Prompt</code>, such as "output 3 images".</li></ul></li><li><p>Qwen 0925</p><ul><li>Supports freely setting resolution width and height, with valid total pixel range [512x512=261632, 2048x2048=4194304]. Example: <code>{"AdditionalParameters": "{\"size\":\"728*1024\"}"}</code></li></ul></li><li><p>OG</p><ul><li>Supports freely setting resolution width and height:<ul><li>Pixel size must be divisible by 16.</li><li>Total pixels must be at least 655,360 and should not exceed 8,294,400.</li><li>Example: <code>{"AdditionalParameters": "{\"size\":\"728*1024\"}"}</code></li></ul></li><li>Supports setting transparent layer:<ul><li>Example: <code>{"AdditionalParameters": "{\"background\":\"transparent\"}"}</code></li></ul></li></ul></li><li><p>Kling</p><ul><li>Supports setting image expansion parameters. Example: <code>{AdditionalParameters":"{\"down_expansion_ratio\":0.2,\"left_expansion_ratio\":0.3,\"right_expansion_ratio\":0.4,\"up_expansion_ratio\":0.1}}</code><ul><li>Common constraints:<ul><li>Value range: [0, 2].</li><li>The overall area of the new image should not exceed 3 times that of the original image.</li><li>Forward prompts can be input through the <code>Prompt</code> field.</li><li>Example description:<ul><li>up_expansion_ratio: Upward expansion range, calculated based on a multiple of the original image height. If the original image height is 20 and the parameter value is 0.1, the distance from the top edge of the original image to the top edge of the new image is 20 × 0.1 = 2, which is the expansion range.</li><li>down_expansion_ratio: Downward expansion range, calculated based on a multiple of the original image height. If the original image height is 20 and the parameter value is 0.2, the distance from the bottom edge of the original image to the bottom edge of the new image is 20 × 0.2 = 4, which is the expansion range.</li><li>left_expansion_ratio: Leftward expansion range, calculated based on a multiple of the original image width. If the original image width is 30 and the parameter value is 0.3, the distance from the left edge of the original image to the left edge of the new image is 30 × 0.3 = 9, which is the expansion range.</li><li>right_expansion_ratio: Rightward expansion range, calculated based on a multiple of the original image width. If the original image width is 30 and the parameter value is 0.4, the distance from the right edge of the original image to the right edge of the new image is 30 × 0.4 = 12, which is the expansion range.</li></ul></li></ul></li></ul></li></ul></li></ul>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b></p>
     * @param string $ModelName <p>Model name. Value:</p><li>OG</li><li>GG</li><li>SI</li><li>Qwen</li><li>Hunyuan</li><li>Vidu</li><li>Kling</li>
     * @param string $ModelVersion <p>Model version. Parameter:</p><li>When ModelName is OG, available values are image2_low, image2_medium, image2_high;</li><li>When ModelName is GG, available values are 2.5, 3.0, 3.1;</li><li>When ModelName is Jimeng, available values are 4.0;</li><li>When ModelName is SI, available values are 4.0, 4.5, 5.0-lite;</li><li>When ModelName is Qwen, available values are 0925;</li><li>When ModelName is Hunyuan, available values are 3.0;</li><li>When ModelName is Vidu, available values are q2;</li><li>When ModelName is Kling, available values are 2.1, 3.0, 3.0-Omni, O1, scene;</li>
     * @param array $FileInfos <p>File information of the input image for the AIGC image generation task. Maximum number of reference images supported by each model:</p><ul><li>GG 2.5: 3;</li><li>GG 3.0: 14;</li><li>GG 3.1: 14;</li><li>Kling 2.1: 4;</li><li>Kling 3.0: 1;</li><li>Kling 3.0-Omni: 10;</li><li>Kling O1: 10;</li><li>SI 4.0: 14;</li><li>SI 4.5: 14;</li><li>SI 5.0-lite: 14;</li><li>Vidu q2: 7;</li><li>Hunyuan 3.0: 3;</li><li>Qwen 0925: 1;</li><li>MJ v7: 3.</li></ul>
     * @param string $Prompt <p>Prompt for image generation. This parameter is required when FileInfos is empty.</p>
     * @param string $NegativePrompt <p>To prevent the model from generating image prompts.</p>
     * @param string $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param AigcImageOutputConfig $OutputConfig <p>Output media file configuration for the image generation task.</p>
     * @param string $InputRegion <p>Input region information. Available values:</p><ul><li>Mainland: Chinese mainland;</li><li>Oversea: overseas;</li><li>OverseaUSWest: overseas - western United States;</li></ul>
     * @param string $SceneType <p>Scenario type. Values are as follows:</p><li>When ModelName is Hunyuan: 3d_panorama means panoramic view;</li><li>When ModelName is Kling: image_expand means image expansion;</li><li>Other ModelNames are not currently supported.</li>
     * @param integer $Seed <p>Random seed of the model.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     * @param string $ExtInfo <p>Reserved field, used for special purpose.</p><ul><li><p>Hunyuan 3.0</p><ul><li>Supports freely setting resolution width and height, both within [512, 2048] pixels, with the product of width and height ≤ 1024x1024 pixels. Example: <code>{"AdditionalParameters": "{\"size\":\"728x1024\"}"}</code></li></ul></li><li><p>SI series</p><ul><li>Supports freely setting resolution width and height:<ul><li>SI 4.0: Valid total pixel range [1280x720=921600, 4096x4096=16777216]. Example: <code>{"AdditionalParameters": "{\"size\":\"728x1356\"}"}</code></li><li>SI 4.5: Valid total pixel range [2560x1440=3686400, 4096x4096=16777216]. Example: <code>{"AdditionalParameters": "{\"size\":\"2560x1440\"}"}</code></li><li>SI 5.0-lite: Valid total pixel range [2560x1440=3686400, 3072x3072x1.1025=10404496]. Example: <code>{"AdditionalParameters": "{\"size\":\"2560x1440\"}"}</code></li></ul></li><li>Can be used to enable output of multiple images. Example: <code>{"AdditionalParameters": "{\"sequential_image_generation\":\"auto\"}"}</code>. Besides, the number of images to output must be specified in the <code>Prompt</code>, such as "output 3 images".</li></ul></li><li><p>Qwen 0925</p><ul><li>Supports freely setting resolution width and height, with valid total pixel range [512x512=261632, 2048x2048=4194304]. Example: <code>{"AdditionalParameters": "{\"size\":\"728*1024\"}"}</code></li></ul></li><li><p>OG</p><ul><li>Supports freely setting resolution width and height:<ul><li>Pixel size must be divisible by 16.</li><li>Total pixels must be at least 655,360 and should not exceed 8,294,400.</li><li>Example: <code>{"AdditionalParameters": "{\"size\":\"728*1024\"}"}</code></li></ul></li><li>Supports setting transparent layer:<ul><li>Example: <code>{"AdditionalParameters": "{\"background\":\"transparent\"}"}</code></li></ul></li></ul></li><li><p>Kling</p><ul><li>Supports setting image expansion parameters. Example: <code>{AdditionalParameters":"{\"down_expansion_ratio\":0.2,\"left_expansion_ratio\":0.3,\"right_expansion_ratio\":0.4,\"up_expansion_ratio\":0.1}}</code><ul><li>Common constraints:<ul><li>Value range: [0, 2].</li><li>The overall area of the new image should not exceed 3 times that of the original image.</li><li>Forward prompts can be input through the <code>Prompt</code> field.</li><li>Example description:<ul><li>up_expansion_ratio: Upward expansion range, calculated based on a multiple of the original image height. If the original image height is 20 and the parameter value is 0.1, the distance from the top edge of the original image to the top edge of the new image is 20 × 0.1 = 2, which is the expansion range.</li><li>down_expansion_ratio: Downward expansion range, calculated based on a multiple of the original image height. If the original image height is 20 and the parameter value is 0.2, the distance from the bottom edge of the original image to the bottom edge of the new image is 20 × 0.2 = 4, which is the expansion range.</li><li>left_expansion_ratio: Leftward expansion range, calculated based on a multiple of the original image width. If the original image width is 30 and the parameter value is 0.3, the distance from the left edge of the original image to the left edge of the new image is 30 × 0.3 = 9, which is the expansion range.</li><li>right_expansion_ratio: Rightward expansion range, calculated based on a multiple of the original image width. If the original image width is 30 and the parameter value is 0.4, the distance from the right edge of the original image to the right edge of the new image is 30 × 0.4 = 12, which is the expansion range.</li></ul></li></ul></li></ul></li></ul></li></ul>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcImageOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("InputRegion",$param) and $param["InputRegion"] !== null) {
            $this->InputRegion = $param["InputRegion"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
