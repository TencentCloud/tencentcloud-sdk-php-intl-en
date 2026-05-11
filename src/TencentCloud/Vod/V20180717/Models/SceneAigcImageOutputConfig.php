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
 * Output media file configuration for the scenario-based AIGC image generation task.
 *
 * @method string getStorageMode() Obtain <p>Storage mode. Valid values: <li>Permanent: Permanent storage. Generated image files will be stored in VOD and the FileId can be obtained in event notification;</li> <li>Temporary: Temporary storage. Generated image files will not be stored in VOD, and a temporary access URL can be obtained in event notification;</li><br>Default value: Temporary</p>
 * @method void setStorageMode(string $StorageMode) Set <p>Storage mode. Valid values: <li>Permanent: Permanent storage. Generated image files will be stored in VOD and the FileId can be obtained in event notification;</li> <li>Temporary: Temporary storage. Generated image files will not be stored in VOD, and a temporary access URL can be obtained in event notification;</li><br>Default value: Temporary</p>
 * @method string getMediaName() Obtain <p>Output filename, up to 64 characters. Default filename is specified by the system.</p>
 * @method void setMediaName(string $MediaName) Set <p>Output filename, up to 64 characters. Default filename is specified by the system.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>
 * @method string getExpireTime() Obtain <p>Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method string getAspectRatio() Obtain <p>Specify the aspect ratio of the generated image. The input format is W:H.<br>This field is valid in the following scenarios:</p><ul><li>Product image generation scenario. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 16:9, 9:16, 21:9.</li><li>AI image expansion scenario. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9. It can be used in conjunction with ImageWidth and ImageHeight. The rules are as follows: <ol><li>When only AspectRatio is specified, adaptively adjust based on the original image input.</li><li>When AspectRatio and ImageWidth are specified, ImageHeight is calculated based on both, and vice versa.</li><li>When AspectRatio, ImageWidth, and ImageHeight are specified simultaneously, prioritize using ImageWidth and ImageHeight.</li></ol></li></ul>
 * @method void setAspectRatio(string $AspectRatio) Set <p>Specify the aspect ratio of the generated image. The input format is W:H.<br>This field is valid in the following scenarios:</p><ul><li>Product image generation scenario. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 16:9, 9:16, 21:9.</li><li>AI image expansion scenario. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9. It can be used in conjunction with ImageWidth and ImageHeight. The rules are as follows: <ol><li>When only AspectRatio is specified, adaptively adjust based on the original image input.</li><li>When AspectRatio and ImageWidth are specified, ImageHeight is calculated based on both, and vice versa.</li><li>When AspectRatio, ImageWidth, and ImageHeight are specified simultaneously, prioritize using ImageWidth and ImageHeight.</li></ol></li></ul>
 * @method ImageSceneAigcEncodeConfig getEncodeConfig() Obtain <p>Output image encoding format parameters. <strong>Valid only for AI clothing change scenarios.</strong></p>
 * @method void setEncodeConfig(ImageSceneAigcEncodeConfig $EncodeConfig) Set <p>Output image encoding format parameters. <strong>Valid only for AI clothing change scenarios.</strong></p>
 * @method integer getImageWidth() Obtain <p>Output image width. <strong>Valid only for AI image expansion scenarios.</strong></p>
 * @method void setImageWidth(integer $ImageWidth) Set <p>Output image width. <strong>Valid only for AI image expansion scenarios.</strong></p>
 * @method integer getImageHeight() Obtain <p>Output image height, <strong>valid only for AI image expansion scenarios</strong>.</p>
 * @method void setImageHeight(integer $ImageHeight) Set <p>Output image height, <strong>valid only for AI image expansion scenarios</strong>.</p>
 * @method string getResolution() Obtain <p>Output resolution. Only valid for change_clothes and change_clothes_under scenarios. Available values: 1K, 2K, 4K.</p>
 * @method void setResolution(string $Resolution) Set <p>Output resolution. Only valid for change_clothes and change_clothes_under scenarios. Available values: 1K, 2K, 4K.</p>
 */
class SceneAigcImageOutputConfig extends AbstractModel
{
    /**
     * @var string <p>Storage mode. Valid values: <li>Permanent: Permanent storage. Generated image files will be stored in VOD and the FileId can be obtained in event notification;</li> <li>Temporary: Temporary storage. Generated image files will not be stored in VOD, and a temporary access URL can be obtained in event notification;</li><br>Default value: Temporary</p>
     */
    public $StorageMode;

    /**
     * @var string <p>Output filename, up to 64 characters. Default filename is specified by the system.</p>
     */
    public $MediaName;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>
     */
    public $ClassId;

    /**
     * @var string <p>Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>Specify the aspect ratio of the generated image. The input format is W:H.<br>This field is valid in the following scenarios:</p><ul><li>Product image generation scenario. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 16:9, 9:16, 21:9.</li><li>AI image expansion scenario. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9. It can be used in conjunction with ImageWidth and ImageHeight. The rules are as follows: <ol><li>When only AspectRatio is specified, adaptively adjust based on the original image input.</li><li>When AspectRatio and ImageWidth are specified, ImageHeight is calculated based on both, and vice versa.</li><li>When AspectRatio, ImageWidth, and ImageHeight are specified simultaneously, prioritize using ImageWidth and ImageHeight.</li></ol></li></ul>
     */
    public $AspectRatio;

    /**
     * @var ImageSceneAigcEncodeConfig <p>Output image encoding format parameters. <strong>Valid only for AI clothing change scenarios.</strong></p>
     */
    public $EncodeConfig;

    /**
     * @var integer <p>Output image width. <strong>Valid only for AI image expansion scenarios.</strong></p>
     */
    public $ImageWidth;

    /**
     * @var integer <p>Output image height, <strong>valid only for AI image expansion scenarios</strong>.</p>
     */
    public $ImageHeight;

    /**
     * @var string <p>Output resolution. Only valid for change_clothes and change_clothes_under scenarios. Available values: 1K, 2K, 4K.</p>
     */
    public $Resolution;

    /**
     * @param string $StorageMode <p>Storage mode. Valid values: <li>Permanent: Permanent storage. Generated image files will be stored in VOD and the FileId can be obtained in event notification;</li> <li>Temporary: Temporary storage. Generated image files will not be stored in VOD, and a temporary access URL can be obtained in event notification;</li><br>Default value: Temporary</p>
     * @param string $MediaName <p>Output filename, up to 64 characters. Default filename is specified by the system.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>
     * @param string $ExpireTime <p>Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param string $AspectRatio <p>Specify the aspect ratio of the generated image. The input format is W:H.<br>This field is valid in the following scenarios:</p><ul><li>Product image generation scenario. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 16:9, 9:16, 21:9.</li><li>AI image expansion scenario. Available values are: 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9. It can be used in conjunction with ImageWidth and ImageHeight. The rules are as follows: <ol><li>When only AspectRatio is specified, adaptively adjust based on the original image input.</li><li>When AspectRatio and ImageWidth are specified, ImageHeight is calculated based on both, and vice versa.</li><li>When AspectRatio, ImageWidth, and ImageHeight are specified simultaneously, prioritize using ImageWidth and ImageHeight.</li></ol></li></ul>
     * @param ImageSceneAigcEncodeConfig $EncodeConfig <p>Output image encoding format parameters. <strong>Valid only for AI clothing change scenarios.</strong></p>
     * @param integer $ImageWidth <p>Output image width. <strong>Valid only for AI image expansion scenarios.</strong></p>
     * @param integer $ImageHeight <p>Output image height, <strong>valid only for AI image expansion scenarios</strong>.</p>
     * @param string $Resolution <p>Output resolution. Only valid for change_clothes and change_clothes_under scenarios. Available values: 1K, 2K, 4K.</p>
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
