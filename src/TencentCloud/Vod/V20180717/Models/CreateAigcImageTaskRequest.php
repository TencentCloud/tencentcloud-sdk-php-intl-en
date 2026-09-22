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
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
 * @method string getModelName() Obtain <p>Model name. Parameter values:</p><li>OG</li><li>GG</li><li>Hunyuan</li><li>Vidu</li><li>Kling</li>
 * @method void setModelName(string $ModelName) Set <p>Model name. Parameter values:</p><li>OG</li><li>GG</li><li>Hunyuan</li><li>Vidu</li><li>Kling</li>
 * @method string getModelVersion() Obtain <p>Model version. Value:</p><li>When ModelName is OG, optional values: image2_low, image2_medium, image2_high;</li><li>When ModelName is GG, optional values: 2.5, 3.0, 3.1, 3.1-lite;</li><li>When ModelName is Hunyuan, optional values: 3.0, 3d_2.0, 3.5-preview;</li><li>When ModelName is Vidu, optional values: q2;</li><li>When ModelName is Kling, optional values: 2.1, 3.0, 3.0-Omni, O1, scene;</li><li>When ModelName is Mingmou, optional values: 1.0;</li>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version. Value:</p><li>When ModelName is OG, optional values: image2_low, image2_medium, image2_high;</li><li>When ModelName is GG, optional values: 2.5, 3.0, 3.1, 3.1-lite;</li><li>When ModelName is Hunyuan, optional values: 3.0, 3d_2.0, 3.5-preview;</li><li>When ModelName is Vidu, optional values: q2;</li><li>When ModelName is Kling, optional values: 2.1, 3.0, 3.0-Omni, O1, scene;</li><li>When ModelName is Mingmou, optional values: 1.0;</li>
 * @method array getFileInfos() Obtain <p>File information of the input image for the AIGC image generation task. Maximum number of reference images supported by each model:</p><ul><li>GG 2.5: 3</li><li>GG 3.0: 14</li><li>GG 3.1: 14</li><li>Kling 2.1: 4</li><li>Kling 3.0: 1</li><li>Kling 3.0-Omni: 10</li><li>Kling O1: 10</li><li>Vidu q2: 7</li><li>Hunyuan 3.0: 3</li></ul>
 * @method void setFileInfos(array $FileInfos) Set <p>File information of the input image for the AIGC image generation task. Maximum number of reference images supported by each model:</p><ul><li>GG 2.5: 3</li><li>GG 3.0: 14</li><li>GG 3.1: 14</li><li>Kling 2.1: 4</li><li>Kling 3.0: 1</li><li>Kling 3.0-Omni: 10</li><li>Kling O1: 10</li><li>Vidu q2: 7</li><li>Hunyuan 3.0: 3</li></ul>
 * @method string getPrompt() Obtain <p>Prompt for image generation. When FileInfos is empty, this parameter is required.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for image generation. When FileInfos is empty, this parameter is required.</p>
 * @method string getNegativePrompt() Obtain <p>Prompt to prevent the model from image generation.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>Prompt to prevent the model from image generation.</p>
 * @method string getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt content will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt content will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method AigcImageOutputConfig getOutputConfig() Obtain <p>Configuration of the output media file of the image generation task.</p>
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) Set <p>Configuration of the output media file of the image generation task.</p>
 * @method string getInputRegion() Obtain <p>Input region information. Available values:</p><ul><li>Mainland: Chinese mainland;</li><li>Oversea: overseas;</li><li>OverseaUSWest: overseas - western United States;</li></ul>
 * @method void setInputRegion(string $InputRegion) Set <p>Input region information. Available values:</p><ul><li>Mainland: Chinese mainland;</li><li>Oversea: overseas;</li><li>OverseaUSWest: overseas - western United States;</li></ul>
 * @method string getSceneType() Obtain <p>Scenario type. Values are as follows:</p><li>When ModelName is Hunyuan: 3d_panorama refers to panoramic view;</li><li>When ModelName is Kling: image_expand refers to image expansion;</li><li>Other ModelName values are not currently supported.</li>
 * @method void setSceneType(string $SceneType) Set <p>Scenario type. Values are as follows:</p><li>When ModelName is Hunyuan: 3d_panorama refers to panoramic view;</li><li>When ModelName is Kling: image_expand refers to image expansion;</li><li>Other ModelName values are not currently supported.</li>
 * @method integer getSeed() Obtain <p>Random seed of the model.</p>
 * @method void setSeed(integer $Seed) Set <p>Random seed of the model.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method string getExtInfo() Obtain <p>Reserved field for special usage.</p><ul><li><p>Hunyuan 3.0</p><ul><li>Supports free resolution width and height settings. Both width and height are within the pixel range of [512, 2048], and the product of width and height must be ≤ 1024x1024 pixels. Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;size\&quot;:\&quot;728x1024\&quot;}&quot;}</code></li></ul></li><li><p>OG</p><ul><li>Supports free resolution width and height settings:<ul><li>The calculated pixel size must be divisible by 16.</li><li>The total pixel count must be at least 655,360 and should not exceed 8,294,400.</li><li>Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;size\&quot;:\&quot;728x1024\&quot;}&quot;}</code></li></ul></li><li>Supports setting a transparent layer:<ul><li>Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;background\&quot;:\&quot;transparent\&quot;}&quot;}</code></li></ul></li></ul></li><li><p>Kling</p><ul><li>Supports setting image expansion parameters. Example: <code>{&quot;AdditionalParameters&quot;:&quot;{\&quot;down_expansion_ratio\&quot;:0.2,\&quot;left_expansion_ratio\&quot;:0.3,\&quot;right_expansion_ratio\&quot;:0.4,\&quot;up_expansion_ratio\&quot;:0.1}}</code><ul><li>Common constraints:<ul><li>Value range: [0, 2];</li><li>The overall area of the new image should not exceed 3 times that of the original image;</li><li>Forward prompt content can be imported through the <code>Prompt</code> field.</li><li>Example description:<ul><li>up_expansion_ratio: The upward expansion range, calculated as a multiple of the original image height. If the original image height is 20 and the parameter value is 0.1, the distance from the top edge of the original image to the top edge of the new image is 20 × 0.1 = 2. This region is the expansion range.</li><li>down_expansion_ratio: The downward expansion range, calculated as a multiple of the original image height. If the original image height is 20 and the parameter value is 0.2, the distance from the bottom edge of the original image to the bottom edge of the new image is 20 × 0.2 = 4. This region is the expansion range.</li><li>left_expansion_ratio: The leftward expansion range, calculated as a multiple of the original image width. If the original image width is 30 and the parameter value is 0.3, the distance from the left edge of the original image to the left edge of the new image is 30 × 0.3 = 9. This region is the expansion range.</li><li>right_expansion_ratio: The rightward expansion range, calculated as a multiple of the original image width. If the original image width is 30 and the parameter value is 0.4, the distance from the right edge of the original image to the right edge of the new image is 30 × 0.4 = 12. This region is the expansion range.</li></ul></li></ul></li></ul></li></ul></li></ul>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field for special usage.</p><ul><li><p>Hunyuan 3.0</p><ul><li>Supports free resolution width and height settings. Both width and height are within the pixel range of [512, 2048], and the product of width and height must be ≤ 1024x1024 pixels. Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;size\&quot;:\&quot;728x1024\&quot;}&quot;}</code></li></ul></li><li><p>OG</p><ul><li>Supports free resolution width and height settings:<ul><li>The calculated pixel size must be divisible by 16.</li><li>The total pixel count must be at least 655,360 and should not exceed 8,294,400.</li><li>Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;size\&quot;:\&quot;728x1024\&quot;}&quot;}</code></li></ul></li><li>Supports setting a transparent layer:<ul><li>Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;background\&quot;:\&quot;transparent\&quot;}&quot;}</code></li></ul></li></ul></li><li><p>Kling</p><ul><li>Supports setting image expansion parameters. Example: <code>{&quot;AdditionalParameters&quot;:&quot;{\&quot;down_expansion_ratio\&quot;:0.2,\&quot;left_expansion_ratio\&quot;:0.3,\&quot;right_expansion_ratio\&quot;:0.4,\&quot;up_expansion_ratio\&quot;:0.1}}</code><ul><li>Common constraints:<ul><li>Value range: [0, 2];</li><li>The overall area of the new image should not exceed 3 times that of the original image;</li><li>Forward prompt content can be imported through the <code>Prompt</code> field.</li><li>Example description:<ul><li>up_expansion_ratio: The upward expansion range, calculated as a multiple of the original image height. If the original image height is 20 and the parameter value is 0.1, the distance from the top edge of the original image to the top edge of the new image is 20 × 0.1 = 2. This region is the expansion range.</li><li>down_expansion_ratio: The downward expansion range, calculated as a multiple of the original image height. If the original image height is 20 and the parameter value is 0.2, the distance from the bottom edge of the original image to the bottom edge of the new image is 20 × 0.2 = 4. This region is the expansion range.</li><li>left_expansion_ratio: The leftward expansion range, calculated as a multiple of the original image width. If the original image width is 30 and the parameter value is 0.3, the distance from the left edge of the original image to the left edge of the new image is 30 × 0.3 = 9. This region is the expansion range.</li><li>right_expansion_ratio: The rightward expansion range, calculated as a multiple of the original image width. If the original image width is 30 and the parameter value is 0.4, the distance from the right edge of the original image to the right edge of the new image is 30 × 0.4 = 12. This region is the expansion range.</li></ul></li></ul></li></ul></li></ul></li></ul>
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Model name. Parameter values:</p><li>OG</li><li>GG</li><li>Hunyuan</li><li>Vidu</li><li>Kling</li>
     */
    public $ModelName;

    /**
     * @var string <p>Model version. Value:</p><li>When ModelName is OG, optional values: image2_low, image2_medium, image2_high;</li><li>When ModelName is GG, optional values: 2.5, 3.0, 3.1, 3.1-lite;</li><li>When ModelName is Hunyuan, optional values: 3.0, 3d_2.0, 3.5-preview;</li><li>When ModelName is Vidu, optional values: q2;</li><li>When ModelName is Kling, optional values: 2.1, 3.0, 3.0-Omni, O1, scene;</li><li>When ModelName is Mingmou, optional values: 1.0;</li>
     */
    public $ModelVersion;

    /**
     * @var array <p>File information of the input image for the AIGC image generation task. Maximum number of reference images supported by each model:</p><ul><li>GG 2.5: 3</li><li>GG 3.0: 14</li><li>GG 3.1: 14</li><li>Kling 2.1: 4</li><li>Kling 3.0: 1</li><li>Kling 3.0-Omni: 10</li><li>Kling O1: 10</li><li>Vidu q2: 7</li><li>Hunyuan 3.0: 3</li></ul>
     */
    public $FileInfos;

    /**
     * @var string <p>Prompt for image generation. When FileInfos is empty, this parameter is required.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Prompt to prevent the model from image generation.</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt content will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcImageOutputConfig <p>Configuration of the output media file of the image generation task.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Input region information. Available values:</p><ul><li>Mainland: Chinese mainland;</li><li>Oversea: overseas;</li><li>OverseaUSWest: overseas - western United States;</li></ul>
     */
    public $InputRegion;

    /**
     * @var string <p>Scenario type. Values are as follows:</p><li>When ModelName is Hunyuan: 3d_panorama refers to panoramic view;</li><li>When ModelName is Kling: image_expand refers to image expansion;</li><li>Other ModelName values are not currently supported.</li>
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
     * @var string <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>Reserved field for special usage.</p><ul><li><p>Hunyuan 3.0</p><ul><li>Supports free resolution width and height settings. Both width and height are within the pixel range of [512, 2048], and the product of width and height must be ≤ 1024x1024 pixels. Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;size\&quot;:\&quot;728x1024\&quot;}&quot;}</code></li></ul></li><li><p>OG</p><ul><li>Supports free resolution width and height settings:<ul><li>The calculated pixel size must be divisible by 16.</li><li>The total pixel count must be at least 655,360 and should not exceed 8,294,400.</li><li>Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;size\&quot;:\&quot;728x1024\&quot;}&quot;}</code></li></ul></li><li>Supports setting a transparent layer:<ul><li>Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;background\&quot;:\&quot;transparent\&quot;}&quot;}</code></li></ul></li></ul></li><li><p>Kling</p><ul><li>Supports setting image expansion parameters. Example: <code>{&quot;AdditionalParameters&quot;:&quot;{\&quot;down_expansion_ratio\&quot;:0.2,\&quot;left_expansion_ratio\&quot;:0.3,\&quot;right_expansion_ratio\&quot;:0.4,\&quot;up_expansion_ratio\&quot;:0.1}}</code><ul><li>Common constraints:<ul><li>Value range: [0, 2];</li><li>The overall area of the new image should not exceed 3 times that of the original image;</li><li>Forward prompt content can be imported through the <code>Prompt</code> field.</li><li>Example description:<ul><li>up_expansion_ratio: The upward expansion range, calculated as a multiple of the original image height. If the original image height is 20 and the parameter value is 0.1, the distance from the top edge of the original image to the top edge of the new image is 20 × 0.1 = 2. This region is the expansion range.</li><li>down_expansion_ratio: The downward expansion range, calculated as a multiple of the original image height. If the original image height is 20 and the parameter value is 0.2, the distance from the bottom edge of the original image to the bottom edge of the new image is 20 × 0.2 = 4. This region is the expansion range.</li><li>left_expansion_ratio: The leftward expansion range, calculated as a multiple of the original image width. If the original image width is 30 and the parameter value is 0.3, the distance from the left edge of the original image to the left edge of the new image is 30 × 0.3 = 9. This region is the expansion range.</li><li>right_expansion_ratio: The rightward expansion range, calculated as a multiple of the original image width. If the original image width is 30 and the parameter value is 0.4, the distance from the right edge of the original image to the right edge of the new image is 30 × 0.4 = 12. This region is the expansion range.</li></ul></li></ul></li></ul></li></ul></li></ul>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
     * @param string $ModelName <p>Model name. Parameter values:</p><li>OG</li><li>GG</li><li>Hunyuan</li><li>Vidu</li><li>Kling</li>
     * @param string $ModelVersion <p>Model version. Value:</p><li>When ModelName is OG, optional values: image2_low, image2_medium, image2_high;</li><li>When ModelName is GG, optional values: 2.5, 3.0, 3.1, 3.1-lite;</li><li>When ModelName is Hunyuan, optional values: 3.0, 3d_2.0, 3.5-preview;</li><li>When ModelName is Vidu, optional values: q2;</li><li>When ModelName is Kling, optional values: 2.1, 3.0, 3.0-Omni, O1, scene;</li><li>When ModelName is Mingmou, optional values: 1.0;</li>
     * @param array $FileInfos <p>File information of the input image for the AIGC image generation task. Maximum number of reference images supported by each model:</p><ul><li>GG 2.5: 3</li><li>GG 3.0: 14</li><li>GG 3.1: 14</li><li>Kling 2.1: 4</li><li>Kling 3.0: 1</li><li>Kling 3.0-Omni: 10</li><li>Kling O1: 10</li><li>Vidu q2: 7</li><li>Hunyuan 3.0: 3</li></ul>
     * @param string $Prompt <p>Prompt for image generation. When FileInfos is empty, this parameter is required.</p>
     * @param string $NegativePrompt <p>Prompt to prevent the model from image generation.</p>
     * @param string $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt content will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     * @param AigcImageOutputConfig $OutputConfig <p>Configuration of the output media file of the image generation task.</p>
     * @param string $InputRegion <p>Input region information. Available values:</p><ul><li>Mainland: Chinese mainland;</li><li>Oversea: overseas;</li><li>OverseaUSWest: overseas - western United States;</li></ul>
     * @param string $SceneType <p>Scenario type. Values are as follows:</p><li>When ModelName is Hunyuan: 3d_panorama refers to panoramic view;</li><li>When ModelName is Kling: image_expand refers to image expansion;</li><li>Other ModelName values are not currently supported.</li>
     * @param integer $Seed <p>Random seed of the model.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     * @param string $ExtInfo <p>Reserved field for special usage.</p><ul><li><p>Hunyuan 3.0</p><ul><li>Supports free resolution width and height settings. Both width and height are within the pixel range of [512, 2048], and the product of width and height must be ≤ 1024x1024 pixels. Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;size\&quot;:\&quot;728x1024\&quot;}&quot;}</code></li></ul></li><li><p>OG</p><ul><li>Supports free resolution width and height settings:<ul><li>The calculated pixel size must be divisible by 16.</li><li>The total pixel count must be at least 655,360 and should not exceed 8,294,400.</li><li>Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;size\&quot;:\&quot;728x1024\&quot;}&quot;}</code></li></ul></li><li>Supports setting a transparent layer:<ul><li>Example: <code>{&quot;AdditionalParameters&quot;: &quot;{\&quot;background\&quot;:\&quot;transparent\&quot;}&quot;}</code></li></ul></li></ul></li><li><p>Kling</p><ul><li>Supports setting image expansion parameters. Example: <code>{&quot;AdditionalParameters&quot;:&quot;{\&quot;down_expansion_ratio\&quot;:0.2,\&quot;left_expansion_ratio\&quot;:0.3,\&quot;right_expansion_ratio\&quot;:0.4,\&quot;up_expansion_ratio\&quot;:0.1}}</code><ul><li>Common constraints:<ul><li>Value range: [0, 2];</li><li>The overall area of the new image should not exceed 3 times that of the original image;</li><li>Forward prompt content can be imported through the <code>Prompt</code> field.</li><li>Example description:<ul><li>up_expansion_ratio: The upward expansion range, calculated as a multiple of the original image height. If the original image height is 20 and the parameter value is 0.1, the distance from the top edge of the original image to the top edge of the new image is 20 × 0.1 = 2. This region is the expansion range.</li><li>down_expansion_ratio: The downward expansion range, calculated as a multiple of the original image height. If the original image height is 20 and the parameter value is 0.2, the distance from the bottom edge of the original image to the bottom edge of the new image is 20 × 0.2 = 4. This region is the expansion range.</li><li>left_expansion_ratio: The leftward expansion range, calculated as a multiple of the original image width. If the original image width is 30 and the parameter value is 0.3, the distance from the left edge of the original image to the left edge of the new image is 30 × 0.3 = 9. This region is the expansion range.</li><li>right_expansion_ratio: The rightward expansion range, calculated as a multiple of the original image width. If the original image width is 30 and the parameter value is 0.4, the distance from the right edge of the original image to the right edge of the new image is 30 × 0.4 = 12. This region is the expansion range.</li></ul></li></ul></li></ul></li></ul></li></ul>
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
