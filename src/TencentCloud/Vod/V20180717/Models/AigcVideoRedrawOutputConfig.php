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
 * Output media file configuration for an AIGC video conversion task.
 *
 * @method string getStorageMode() Obtain <p>Storage mode. Valid values: <li>Permanent: The generated video file will be stored in VOD, and the FileId can be obtained in the event notification;</li> <li>Temporary: The generated video file will not be stored in VOD, and a temporary access URL can be obtained in the event notification;</li>Default value: Temporary</p>
 * @method void setStorageMode(string $StorageMode) Set <p>Storage mode. Valid values: <li>Permanent: The generated video file will be stored in VOD, and the FileId can be obtained in the event notification;</li> <li>Temporary: The generated video file will not be stored in VOD, and a temporary access URL can be obtained in the event notification;</li>Default value: Temporary</p>
 * @method string getMediaName() Obtain <p>Output media file name, up to 64 characters. By default, the system specifies the generated file name.</p>
 * @method void setMediaName(string $MediaName) Set <p>Output media file name, up to 64 characters. By default, the system specifies the generated file name.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can call the <a href="https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1">Create Category</a> API to create a category and obtain the category ID.<li>Default value: 0, indicating other categories.</li></p>
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can call the <a href="https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1">Create Category</a> API to create a category and obtain the category ID.<li>Default value: 0, indicating other categories.</li></p>
 * @method string getExpireTime() Obtain <p>Expiry date of the output file. Files will be deleted after this time. By default, files never expire. Format according to the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p><p>Parameter format: 2025-12-28T00:35:00Z.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Expiry date of the output file. Files will be deleted after this time. By default, files never expire. Format according to the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p><p>Parameter format: 2025-12-28T00:35:00Z.</p>
 */
class AigcVideoRedrawOutputConfig extends AbstractModel
{
    /**
     * @var string <p>Storage mode. Valid values: <li>Permanent: The generated video file will be stored in VOD, and the FileId can be obtained in the event notification;</li> <li>Temporary: The generated video file will not be stored in VOD, and a temporary access URL can be obtained in the event notification;</li>Default value: Temporary</p>
     */
    public $StorageMode;

    /**
     * @var string <p>Output media file name, up to 64 characters. By default, the system specifies the generated file name.</p>
     */
    public $MediaName;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can call the <a href="https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1">Create Category</a> API to create a category and obtain the category ID.<li>Default value: 0, indicating other categories.</li></p>
     */
    public $ClassId;

    /**
     * @var string <p>Expiry date of the output file. Files will be deleted after this time. By default, files never expire. Format according to the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p><p>Parameter format: 2025-12-28T00:35:00Z.</p>
     */
    public $ExpireTime;

    /**
     * @param string $StorageMode <p>Storage mode. Valid values: <li>Permanent: The generated video file will be stored in VOD, and the FileId can be obtained in the event notification;</li> <li>Temporary: The generated video file will not be stored in VOD, and a temporary access URL can be obtained in the event notification;</li>Default value: Temporary</p>
     * @param string $MediaName <p>Output media file name, up to 64 characters. By default, the system specifies the generated file name.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can call the <a href="https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1">Create Category</a> API to create a category and obtain the category ID.<li>Default value: 0, indicating other categories.</li></p>
     * @param string $ExpireTime <p>Expiry date of the output file. Files will be deleted after this time. By default, files never expire. Format according to the ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p><p>Parameter format: 2025-12-28T00:35:00Z.</p>
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
    }
}
