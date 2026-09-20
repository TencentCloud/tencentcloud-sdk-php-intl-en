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
 * Configuration of the output media file for an AIGC scenario-based image generation task.
 *
 * @method string getStorageMode() Obtain <p>Storage mode</p><p>Enumeration values:</p><ul><li>Temporary: temporary storage. The generated video file will not be stored in VOD. You can obtain a temporary access URL in the event notification, valid for 7 days.</li><li>Permanent: retained permanently. The generated video file will be stored in VOD. You can obtain the FileId in the event notification.</li></ul><p>Default value: Temporary</p>
 * @method void setStorageMode(string $StorageMode) Set <p>Storage mode</p><p>Enumeration values:</p><ul><li>Temporary: temporary storage. The generated video file will not be stored in VOD. You can obtain a temporary access URL in the event notification, valid for 7 days.</li><li>Permanent: retained permanently. The generated video file will be stored in VOD. You can obtain the FileId in the event notification.</li></ul><p>Default value: Temporary</p>
 * @method string getMediaName() Obtain <p>Output filename, up to 64 characters. By default, the system assigns the generated filename.</p>
 * @method void setMediaName(string $MediaName) Set <p>Output filename, up to 64 characters. By default, the system assigns the generated filename.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category through the <a href="/document/product/266/7812">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category through the <a href="/document/product/266/7812">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
 * @method string getExpireTime() Obtain <p>Expiry date of the output file. The file will be deleted after this time. It never expires by default. Format according to the ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Expiry date of the output file. The file will be deleted after this time. It never expires by default. Format according to the ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method string getAspectRatio() Obtain <p>Specify the aspect ratio of the generated image. Input format: W:H.<br>This field is valid in the following scenarios:</p><ul><li>Product image generation. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 16:9, 9:16, 21:9</li><li>AI image expansion. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9. It can be used in conjunction with ImageWidth and ImageHeight. The rules are as follows: <ol><li>If only AspectRatio is specified, it is adaptively adjusted based on the original image.</li><li>If AspectRatio and ImageWidth are specified, ImageHeight is calculated from both, and vice versa.</li><li>If AspectRatio, ImageWidth, and ImageHeight are specified simultaneously, ImageWidth and ImageHeight are prioritized.</li></ol></li></ul>
 * @method void setAspectRatio(string $AspectRatio) Set <p>Specify the aspect ratio of the generated image. Input format: W:H.<br>This field is valid in the following scenarios:</p><ul><li>Product image generation. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 16:9, 9:16, 21:9</li><li>AI image expansion. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9. It can be used in conjunction with ImageWidth and ImageHeight. The rules are as follows: <ol><li>If only AspectRatio is specified, it is adaptively adjusted based on the original image.</li><li>If AspectRatio and ImageWidth are specified, ImageHeight is calculated from both, and vice versa.</li><li>If AspectRatio, ImageWidth, and ImageHeight are specified simultaneously, ImageWidth and ImageHeight are prioritized.</li></ol></li></ul>
 * @method ImageSceneAigcEncodeConfig getEncodeConfig() Obtain <p>Output image encoding format parameters.</p>
 * @method void setEncodeConfig(ImageSceneAigcEncodeConfig $EncodeConfig) Set <p>Output image encoding format parameters.</p>
 * @method integer getImageWidth() Obtain <p>Output image width. <strong>Only valid for AI image expansion scenarios</strong>.</p>
 * @method void setImageWidth(integer $ImageWidth) Set <p>Output image width. <strong>Only valid for AI image expansion scenarios</strong>.</p>
 * @method integer getImageHeight() Obtain <p>Output image height. <strong>Valid only in AI expansion scenarios</strong>.</p>
 * @method void setImageHeight(integer $ImageHeight) Set <p>Output image height. <strong>Valid only in AI expansion scenarios</strong>.</p>
 * @method string getResolution() Obtain <p>Output resolution. Only valid for the <code>ai_try_on</code> scenario. Available values: 1K, 2K, 4K.</p>
 * @method void setResolution(string $Resolution) Set <p>Output resolution. Only valid for the <code>ai_try_on</code> scenario. Available values: 1K, 2K, 4K.</p>
 */
class SceneAigcImageOutputConfig extends AbstractModel
{
    /**
     * @var string <p>Storage mode</p><p>Enumeration values:</p><ul><li>Temporary: temporary storage. The generated video file will not be stored in VOD. You can obtain a temporary access URL in the event notification, valid for 7 days.</li><li>Permanent: retained permanently. The generated video file will be stored in VOD. You can obtain the FileId in the event notification.</li></ul><p>Default value: Temporary</p>
     */
    public $StorageMode;

    /**
     * @var string <p>Output filename, up to 64 characters. By default, the system assigns the generated filename.</p>
     */
    public $MediaName;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can create a category through the <a href="/document/product/266/7812">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
     */
    public $ClassId;

    /**
     * @var string <p>Expiry date of the output file. The file will be deleted after this time. It never expires by default. Format according to the ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>Specify the aspect ratio of the generated image. Input format: W:H.<br>This field is valid in the following scenarios:</p><ul><li>Product image generation. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 16:9, 9:16, 21:9</li><li>AI image expansion. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9. It can be used in conjunction with ImageWidth and ImageHeight. The rules are as follows: <ol><li>If only AspectRatio is specified, it is adaptively adjusted based on the original image.</li><li>If AspectRatio and ImageWidth are specified, ImageHeight is calculated from both, and vice versa.</li><li>If AspectRatio, ImageWidth, and ImageHeight are specified simultaneously, ImageWidth and ImageHeight are prioritized.</li></ol></li></ul>
     */
    public $AspectRatio;

    /**
     * @var ImageSceneAigcEncodeConfig <p>Output image encoding format parameters.</p>
     */
    public $EncodeConfig;

    /**
     * @var integer <p>Output image width. <strong>Only valid for AI image expansion scenarios</strong>.</p>
     */
    public $ImageWidth;

    /**
     * @var integer <p>Output image height. <strong>Valid only in AI expansion scenarios</strong>.</p>
     */
    public $ImageHeight;

    /**
     * @var string <p>Output resolution. Only valid for the <code>ai_try_on</code> scenario. Available values: 1K, 2K, 4K.</p>
     */
    public $Resolution;

    /**
     * @param string $StorageMode <p>Storage mode</p><p>Enumeration values:</p><ul><li>Temporary: temporary storage. The generated video file will not be stored in VOD. You can obtain a temporary access URL in the event notification, valid for 7 days.</li><li>Permanent: retained permanently. The generated video file will be stored in VOD. You can obtain the FileId in the event notification.</li></ul><p>Default value: Temporary</p>
     * @param string $MediaName <p>Output filename, up to 64 characters. By default, the system assigns the generated filename.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category through the <a href="/document/product/266/7812">Create Category</a> API to obtain the category ID.</p><li>Default value: 0, indicating other categories.</li>
     * @param string $ExpireTime <p>Expiry date of the output file. The file will be deleted after this time. It never expires by default. Format according to the ISO 8601 standard representation. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param string $AspectRatio <p>Specify the aspect ratio of the generated image. Input format: W:H.<br>This field is valid in the following scenarios:</p><ul><li>Product image generation. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 16:9, 9:16, 21:9</li><li>AI image expansion. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9. It can be used in conjunction with ImageWidth and ImageHeight. The rules are as follows: <ol><li>If only AspectRatio is specified, it is adaptively adjusted based on the original image.</li><li>If AspectRatio and ImageWidth are specified, ImageHeight is calculated from both, and vice versa.</li><li>If AspectRatio, ImageWidth, and ImageHeight are specified simultaneously, ImageWidth and ImageHeight are prioritized.</li></ol></li></ul>
     * @param ImageSceneAigcEncodeConfig $EncodeConfig <p>Output image encoding format parameters.</p>
     * @param integer $ImageWidth <p>Output image width. <strong>Only valid for AI image expansion scenarios</strong>.</p>
     * @param integer $ImageHeight <p>Output image height. <strong>Valid only in AI expansion scenarios</strong>.</p>
     * @param string $Resolution <p>Output resolution. Only valid for the <code>ai_try_on</code> scenario. Available values: 1K, 2K, 4K.</p>
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

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("EncodeConfig",$param) and $param["EncodeConfig"] !== null) {
            $this->EncodeConfig = new ImageSceneAigcEncodeConfig();
            $this->EncodeConfig->deserialize($param["EncodeConfig"]);
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
