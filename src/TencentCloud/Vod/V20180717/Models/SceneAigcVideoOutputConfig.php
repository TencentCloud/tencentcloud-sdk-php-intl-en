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
 * Scenario-based output media file configuration for the AIGC video generation task.
 *
 * @method string getStorageMode() Obtain Storage mode. Valid values: <li>Permanent: Permanent storage. The generated image file will be stored in VOD, and the FileId can be obtained in the event notification.</li> <li>Temporary: Temporary storage. The generated image file will not be stored in VOD, and the URL for temporary access can be obtained in the event notification.</li>
Default value: Temporary
 * @method void setStorageMode(string $StorageMode) Set Storage mode. Valid values: <li>Permanent: Permanent storage. The generated image file will be stored in VOD, and the FileId can be obtained in the event notification.</li> <li>Temporary: Temporary storage. The generated image file will not be stored in VOD, and the URL for temporary access can be obtained in the event notification.</li>
Default value: Temporary
 * @method string getMediaName() Obtain Output filename, up to 64 characters. Default filename is specified generation by system.
 * @method void setMediaName(string $MediaName) Set Output filename, up to 64 characters. Default filename is specified generation by system.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
 * @method string getExpireTime() Obtain Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getAspectRatio() Obtain Specify the aspect ratio of the generated video. Input format is W:H. Valid only for product image scenarios. Options: 16:9, 9:16.
 * @method void setAspectRatio(string $AspectRatio) Set Specify the aspect ratio of the generated video. Input format is W:H. Valid only for product image scenarios. Options: 16:9, 9:16.
 * @method float getDuration() Obtain Generate video duration. Available values: 4, 6, 8 seconds.
 * @method void setDuration(float $Duration) Set Generate video duration. Available values: 4, 6, 8 seconds.
 */
class SceneAigcVideoOutputConfig extends AbstractModel
{
    /**
     * @var string Storage mode. Valid values: <li>Permanent: Permanent storage. The generated image file will be stored in VOD, and the FileId can be obtained in the event notification.</li> <li>Temporary: Temporary storage. The generated image file will not be stored in VOD, and the URL for temporary access can be obtained in the event notification.</li>
Default value: Temporary
     */
    public $StorageMode;

    /**
     * @var string Output filename, up to 64 characters. Default filename is specified generation by system.
     */
    public $MediaName;

    /**
     * @var integer Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
     */
    public $ClassId;

    /**
     * @var string Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @var string Specify the aspect ratio of the generated video. Input format is W:H. Valid only for product image scenarios. Options: 16:9, 9:16.
     */
    public $AspectRatio;

    /**
     * @var float Generate video duration. Available values: 4, 6, 8 seconds.
     */
    public $Duration;

    /**
     * @param string $StorageMode Storage mode. Valid values: <li>Permanent: Permanent storage. The generated image file will be stored in VOD, and the FileId can be obtained in the event notification.</li> <li>Temporary: Temporary storage. The generated image file will not be stored in VOD, and the URL for temporary access can be obtained in the event notification.</li>
Default value: Temporary
     * @param string $MediaName Output filename, up to 64 characters. Default filename is specified generation by system.
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
     * @param string $ExpireTime Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $AspectRatio Specify the aspect ratio of the generated video. Input format is W:H. Valid only for product image scenarios. Options: 16:9, 9:16.
     * @param float $Duration Generate video duration. Available values: 4, 6, 8 seconds.
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
