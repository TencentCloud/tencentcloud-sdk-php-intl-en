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
 * Configuration of the output media file of the AIGC image generation task.
 *
 * @method string getStorageMode() Obtain <p>Storage mode</p><p>Enumeration values:</p><ul><li>Temporary: temporary storage. The generated video file will not be stored in VOD. You can obtain a temporary access URL from the event notification, with a valid period of 7 days.</li><li>Permanent: permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from the event notification.</li></ul><p>Default value: Temporary</p>
 * @method void setStorageMode(string $StorageMode) Set <p>Storage mode</p><p>Enumeration values:</p><ul><li>Temporary: temporary storage. The generated video file will not be stored in VOD. You can obtain a temporary access URL from the event notification, with a valid period of 7 days.</li><li>Permanent: permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from the event notification.</li></ul><p>Default value: Temporary</p>
 * @method string getMediaName() Obtain <p>Output filename, up to 64 characters. By default, the system assigns the generated filename.</p>
 * @method void setMediaName(string $MediaName) Set <p>Output filename, up to 64 characters. By default, the system assigns the generated filename.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category via the <a href="/document/product/266/7812">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category via the <a href="/document/product/266/7812">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
 * @method string getExpireTime() Obtain <p>Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format is according to the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format is according to the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method string getResolution() Obtain <p>Resolution of the generated image. Available values for each model:</p><ul><li>OG: 1K, 2K, 4K. Default: 1K.</li><li>GG 2.5: 1K, 2K, 4K. Default: 1K.</li><li>GG 3.0: 1K, 2K, 4K. Default: 1K.</li><li>GG 3.1: 720P, 1K, 2K, 4K. Default: 1K.</li><li>Kling 2.1: 1k, 2k. Default: 1k.</li><li>Kling 3.0: 1k, 2k. Default: 1k.</li><li>Kling 3.0-Omni: 1k, 2k, 4k. Default: 1k.</li><li>Kling O1: 1k, 2k, 4k. Default: 1k.</li><li>SI 4.0: 1K, 2K, 4K. Default: 1K.</li><li>SI 4.5: 2K, 4K. Default: 2K.</li><li>SI 5.0-lite: 2K, 3K. Default: 2K.</li><li>Vidu q2: 1080p, 2K, 4K. Default: 1080p.</li><li>Hunyuan 3.0: This field is not currently supported. You can set the resolution via the <code>ExtInfo</code> field.</li><li>Qwen 0925: This field is not currently supported. You can set the resolution via the <code>ExtInfo</code> field.</li></ul>
 * @method void setResolution(string $Resolution) Set <p>Resolution of the generated image. Available values for each model:</p><ul><li>OG: 1K, 2K, 4K. Default: 1K.</li><li>GG 2.5: 1K, 2K, 4K. Default: 1K.</li><li>GG 3.0: 1K, 2K, 4K. Default: 1K.</li><li>GG 3.1: 720P, 1K, 2K, 4K. Default: 1K.</li><li>Kling 2.1: 1k, 2k. Default: 1k.</li><li>Kling 3.0: 1k, 2k. Default: 1k.</li><li>Kling 3.0-Omni: 1k, 2k, 4k. Default: 1k.</li><li>Kling O1: 1k, 2k, 4k. Default: 1k.</li><li>SI 4.0: 1K, 2K, 4K. Default: 1K.</li><li>SI 4.5: 2K, 4K. Default: 2K.</li><li>SI 5.0-lite: 2K, 3K. Default: 2K.</li><li>Vidu q2: 1080p, 2K, 4K. Default: 1080p.</li><li>Hunyuan 3.0: This field is not currently supported. You can set the resolution via the <code>ExtInfo</code> field.</li><li>Qwen 0925: This field is not currently supported. You can set the resolution via the <code>ExtInfo</code> field.</li></ul>
 * @method string getAspectRatio() Obtain <p>Specify the aspect ratio of the generated image.</p><ul><li>OG: 1:1, 3:2, 2:3, 3:4, 4:3, 16:9, 9:16, 21:9, 9:21;</li><li>GG 2.5: 1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9;</li><li>GG 3.0: 1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9;</li><li>GG 3.1: 1:1, 1:4, 1:8, 2:3, 3:2, 3:4, 4:1, 4:3, 4:5, 5:4, 8:1, 9:16, 16:9, 21:9;</li><li>Kling 2.1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9;</li><li>Kling 3.0: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9;</li><li>Kling 3.0-Omni: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9, auto;</li><li>Kling O1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9, auto;</li><li>Vidu q2: 16:9, 9:16, 1:1, 3:4, 4:3, 21:9, 2:3, 3:2;</li><li>SI 4.0: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>SI 4.5: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>SI 5.0-lite: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>Hunyuan 3.0: not supported;</li><li>Qwen 2.0: not supported;</li><li>Qwen 0925: not supported;</li></ul>
 * @method void setAspectRatio(string $AspectRatio) Set <p>Specify the aspect ratio of the generated image.</p><ul><li>OG: 1:1, 3:2, 2:3, 3:4, 4:3, 16:9, 9:16, 21:9, 9:21;</li><li>GG 2.5: 1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9;</li><li>GG 3.0: 1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9;</li><li>GG 3.1: 1:1, 1:4, 1:8, 2:3, 3:2, 3:4, 4:1, 4:3, 4:5, 5:4, 8:1, 9:16, 16:9, 21:9;</li><li>Kling 2.1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9;</li><li>Kling 3.0: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9;</li><li>Kling 3.0-Omni: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9, auto;</li><li>Kling O1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9, auto;</li><li>Vidu q2: 16:9, 9:16, 1:1, 3:4, 4:3, 21:9, 2:3, 3:2;</li><li>SI 4.0: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>SI 4.5: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>SI 5.0-lite: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>Hunyuan 3.0: not supported;</li><li>Qwen 2.0: not supported;</li><li>Qwen 0925: not supported;</li></ul>
 * @method string getPersonGeneration() Obtain <p>Whether to allow generation of people or human faces. Valid values: <li>AllowAdult: allow generation of adults;</li> <li>Disallowed: forbid people or human faces in images;</li></p>
 * @method void setPersonGeneration(string $PersonGeneration) Set <p>Whether to allow generation of people or human faces. Valid values: <li>AllowAdult: allow generation of adults;</li> <li>Disallowed: forbid people or human faces in images;</li></p>
 * @method string getInputComplianceCheck() Obtain <p>Whether to enable compliance check on the input content. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method void setInputComplianceCheck(string $InputComplianceCheck) Set <p>Whether to enable compliance check on the input content. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method string getOutputComplianceCheck() Obtain <p>Whether to enable compliance check on output content. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method void setOutputComplianceCheck(string $OutputComplianceCheck) Set <p>Whether to enable compliance check on output content. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method integer getOutputImageCount() Obtain <p>Number of images generated. Available values for each model:</p><ul><li>Kling: available value 1-9;</li><li>OG: available value 1-8;</li></ul><p><strong>Not effective for other models.</strong></p>
 * @method void setOutputImageCount(integer $OutputImageCount) Set <p>Number of images generated. Available values for each model:</p><ul><li>Kling: available value 1-9;</li><li>OG: available value 1-8;</li></ul><p><strong>Not effective for other models.</strong></p>
 * @method string getOutputFormat() Obtain <p>Specify the image file format for model output. If not specified, the model default value is followed. Available values:</p><ul><li>jpeg</li><li>png</li></ul>
 * @method void setOutputFormat(string $OutputFormat) Set <p>Specify the image file format for model output. If not specified, the model default value is followed. Available values:</p><ul><li>jpeg</li><li>png</li></ul>
 * @method string getLogoAdd() Obtain <p>Indicates whether to enable a logo watermark. Disabled by default. Valid values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable;</li></ul>
 * @method void setLogoAdd(string $LogoAdd) Set <p>Indicates whether to enable a logo watermark. Disabled by default. Valid values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable;</li></ul>
 */
class AigcImageOutputConfig extends AbstractModel
{
    /**
     * @var string <p>Storage mode</p><p>Enumeration values:</p><ul><li>Temporary: temporary storage. The generated video file will not be stored in VOD. You can obtain a temporary access URL from the event notification, with a valid period of 7 days.</li><li>Permanent: permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from the event notification.</li></ul><p>Default value: Temporary</p>
     */
    public $StorageMode;

    /**
     * @var string <p>Output filename, up to 64 characters. By default, the system assigns the generated filename.</p>
     */
    public $MediaName;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can create a category via the <a href="/document/product/266/7812">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
     */
    public $ClassId;

    /**
     * @var string <p>Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format is according to the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>Resolution of the generated image. Available values for each model:</p><ul><li>OG: 1K, 2K, 4K. Default: 1K.</li><li>GG 2.5: 1K, 2K, 4K. Default: 1K.</li><li>GG 3.0: 1K, 2K, 4K. Default: 1K.</li><li>GG 3.1: 720P, 1K, 2K, 4K. Default: 1K.</li><li>Kling 2.1: 1k, 2k. Default: 1k.</li><li>Kling 3.0: 1k, 2k. Default: 1k.</li><li>Kling 3.0-Omni: 1k, 2k, 4k. Default: 1k.</li><li>Kling O1: 1k, 2k, 4k. Default: 1k.</li><li>SI 4.0: 1K, 2K, 4K. Default: 1K.</li><li>SI 4.5: 2K, 4K. Default: 2K.</li><li>SI 5.0-lite: 2K, 3K. Default: 2K.</li><li>Vidu q2: 1080p, 2K, 4K. Default: 1080p.</li><li>Hunyuan 3.0: This field is not currently supported. You can set the resolution via the <code>ExtInfo</code> field.</li><li>Qwen 0925: This field is not currently supported. You can set the resolution via the <code>ExtInfo</code> field.</li></ul>
     */
    public $Resolution;

    /**
     * @var string <p>Specify the aspect ratio of the generated image.</p><ul><li>OG: 1:1, 3:2, 2:3, 3:4, 4:3, 16:9, 9:16, 21:9, 9:21;</li><li>GG 2.5: 1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9;</li><li>GG 3.0: 1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9;</li><li>GG 3.1: 1:1, 1:4, 1:8, 2:3, 3:2, 3:4, 4:1, 4:3, 4:5, 5:4, 8:1, 9:16, 16:9, 21:9;</li><li>Kling 2.1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9;</li><li>Kling 3.0: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9;</li><li>Kling 3.0-Omni: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9, auto;</li><li>Kling O1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9, auto;</li><li>Vidu q2: 16:9, 9:16, 1:1, 3:4, 4:3, 21:9, 2:3, 3:2;</li><li>SI 4.0: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>SI 4.5: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>SI 5.0-lite: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>Hunyuan 3.0: not supported;</li><li>Qwen 2.0: not supported;</li><li>Qwen 0925: not supported;</li></ul>
     */
    public $AspectRatio;

    /**
     * @var string <p>Whether to allow generation of people or human faces. Valid values: <li>AllowAdult: allow generation of adults;</li> <li>Disallowed: forbid people or human faces in images;</li></p>
     */
    public $PersonGeneration;

    /**
     * @var string <p>Whether to enable compliance check on the input content. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     */
    public $InputComplianceCheck;

    /**
     * @var string <p>Whether to enable compliance check on output content. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     */
    public $OutputComplianceCheck;

    /**
     * @var integer <p>Number of images generated. Available values for each model:</p><ul><li>Kling: available value 1-9;</li><li>OG: available value 1-8;</li></ul><p><strong>Not effective for other models.</strong></p>
     */
    public $OutputImageCount;

    /**
     * @var string <p>Specify the image file format for model output. If not specified, the model default value is followed. Available values:</p><ul><li>jpeg</li><li>png</li></ul>
     */
    public $OutputFormat;

    /**
     * @var string <p>Indicates whether to enable a logo watermark. Disabled by default. Valid values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable;</li></ul>
     */
    public $LogoAdd;

    /**
     * @param string $StorageMode <p>Storage mode</p><p>Enumeration values:</p><ul><li>Temporary: temporary storage. The generated video file will not be stored in VOD. You can obtain a temporary access URL from the event notification, with a valid period of 7 days.</li><li>Permanent: permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from the event notification.</li></ul><p>Default value: Temporary</p>
     * @param string $MediaName <p>Output filename, up to 64 characters. By default, the system assigns the generated filename.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category via the <a href="/document/product/266/7812">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
     * @param string $ExpireTime <p>Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format is according to the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param string $Resolution <p>Resolution of the generated image. Available values for each model:</p><ul><li>OG: 1K, 2K, 4K. Default: 1K.</li><li>GG 2.5: 1K, 2K, 4K. Default: 1K.</li><li>GG 3.0: 1K, 2K, 4K. Default: 1K.</li><li>GG 3.1: 720P, 1K, 2K, 4K. Default: 1K.</li><li>Kling 2.1: 1k, 2k. Default: 1k.</li><li>Kling 3.0: 1k, 2k. Default: 1k.</li><li>Kling 3.0-Omni: 1k, 2k, 4k. Default: 1k.</li><li>Kling O1: 1k, 2k, 4k. Default: 1k.</li><li>SI 4.0: 1K, 2K, 4K. Default: 1K.</li><li>SI 4.5: 2K, 4K. Default: 2K.</li><li>SI 5.0-lite: 2K, 3K. Default: 2K.</li><li>Vidu q2: 1080p, 2K, 4K. Default: 1080p.</li><li>Hunyuan 3.0: This field is not currently supported. You can set the resolution via the <code>ExtInfo</code> field.</li><li>Qwen 0925: This field is not currently supported. You can set the resolution via the <code>ExtInfo</code> field.</li></ul>
     * @param string $AspectRatio <p>Specify the aspect ratio of the generated image.</p><ul><li>OG: 1:1, 3:2, 2:3, 3:4, 4:3, 16:9, 9:16, 21:9, 9:21;</li><li>GG 2.5: 1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9;</li><li>GG 3.0: 1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9;</li><li>GG 3.1: 1:1, 1:4, 1:8, 2:3, 3:2, 3:4, 4:1, 4:3, 4:5, 5:4, 8:1, 9:16, 16:9, 21:9;</li><li>Kling 2.1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9;</li><li>Kling 3.0: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9;</li><li>Kling 3.0-Omni: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9, auto;</li><li>Kling O1: 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9, auto;</li><li>Vidu q2: 16:9, 9:16, 1:1, 3:4, 4:3, 21:9, 2:3, 3:2;</li><li>SI 4.0: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>SI 4.5: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>SI 5.0-lite: <strong>does not support</strong> this parameter. You can specify 16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9 via prompt;</li><li>Hunyuan 3.0: not supported;</li><li>Qwen 2.0: not supported;</li><li>Qwen 0925: not supported;</li></ul>
     * @param string $PersonGeneration <p>Whether to allow generation of people or human faces. Valid values: <li>AllowAdult: allow generation of adults;</li> <li>Disallowed: forbid people or human faces in images;</li></p>
     * @param string $InputComplianceCheck <p>Whether to enable compliance check on the input content. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     * @param string $OutputComplianceCheck <p>Whether to enable compliance check on output content. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     * @param integer $OutputImageCount <p>Number of images generated. Available values for each model:</p><ul><li>Kling: available value 1-9;</li><li>OG: available value 1-8;</li></ul><p><strong>Not effective for other models.</strong></p>
     * @param string $OutputFormat <p>Specify the image file format for model output. If not specified, the model default value is followed. Available values:</p><ul><li>jpeg</li><li>png</li></ul>
     * @param string $LogoAdd <p>Indicates whether to enable a logo watermark. Disabled by default. Valid values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable;</li></ul>
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("PersonGeneration",$param) and $param["PersonGeneration"] !== null) {
            $this->PersonGeneration = $param["PersonGeneration"];
        }

        if (array_key_exists("InputComplianceCheck",$param) and $param["InputComplianceCheck"] !== null) {
            $this->InputComplianceCheck = $param["InputComplianceCheck"];
        }

        if (array_key_exists("OutputComplianceCheck",$param) and $param["OutputComplianceCheck"] !== null) {
            $this->OutputComplianceCheck = $param["OutputComplianceCheck"];
        }

        if (array_key_exists("OutputImageCount",$param) and $param["OutputImageCount"] !== null) {
            $this->OutputImageCount = $param["OutputImageCount"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }
    }
}
