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
 * Output media file configuration of the AIGC sound effect task.
 *
 * @method string getStorageMode() Obtain <p>Storage mode</p><p>Enumeration value:</p><ul><li>Temporary: Temporary storage. The generated video file will not be stored in VOD. You can obtain the temporary access URL from the event notification, with a valid period of 7 days.</li><li>Permanent: Permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from the event notification.</li></ul><p>Default value: Temporary</p>
 * @method void setStorageMode(string $StorageMode) Set <p>Storage mode</p><p>Enumeration value:</p><ul><li>Temporary: Temporary storage. The generated video file will not be stored in VOD. You can obtain the temporary access URL from the event notification, with a valid period of 7 days.</li><li>Permanent: Permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from the event notification.</li></ul><p>Default value: Temporary</p>
 * @method string getMediaName() Obtain <p>Output filename, up to 64 characters. Default filename is specified by the system.</p>
 * @method void setMediaName(string $MediaName) Set <p>Output filename, up to 64 characters. Default filename is specified by the system.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>
 * @method string getExpireTime() Obtain <p>The expiry date of the output file. Files will be deleted longer than this time. Default is never expire, format according to ISO 8601. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>The expiry date of the output file. Files will be deleted longer than this time. Default is never expire, format according to ISO 8601. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method integer getDuration() Obtain <p>Audio duration. Not filled in by default.</p><p>Value ranges from 0 to 60.</p>
 * @method void setDuration(integer $Duration) Set <p>Audio duration. Not filled in by default.</p><p>Value ranges from 0 to 60.</p>
 * @method string getOutputAudioFormat() Obtain <p>Output audio format, not filled in by default</p>
 * @method void setOutputAudioFormat(string $OutputAudioFormat) Set <p>Output audio format, not filled in by default</p>
 */
class AigcAudioOutputConfig extends AbstractModel
{
    /**
     * @var string <p>Storage mode</p><p>Enumeration value:</p><ul><li>Temporary: Temporary storage. The generated video file will not be stored in VOD. You can obtain the temporary access URL from the event notification, with a valid period of 7 days.</li><li>Permanent: Permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from the event notification.</li></ul><p>Default value: Temporary</p>
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
     * @var string <p>The expiry date of the output file. Files will be deleted longer than this time. Default is never expire, format according to ISO 8601. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>Audio duration. Not filled in by default.</p><p>Value ranges from 0 to 60.</p>
     */
    public $Duration;

    /**
     * @var string <p>Output audio format, not filled in by default</p>
     */
    public $OutputAudioFormat;

    /**
     * @param string $StorageMode <p>Storage mode</p><p>Enumeration value:</p><ul><li>Temporary: Temporary storage. The generated video file will not be stored in VOD. You can obtain the temporary access URL from the event notification, with a valid period of 7 days.</li><li>Permanent: Permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from the event notification.</li></ul><p>Default value: Temporary</p>
     * @param string $MediaName <p>Output filename, up to 64 characters. Default filename is specified by the system.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>
     * @param string $ExpireTime <p>The expiry date of the output file. Files will be deleted longer than this time. Default is never expire, format according to ISO 8601. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param integer $Duration <p>Audio duration. Not filled in by default.</p><p>Value ranges from 0 to 60.</p>
     * @param string $OutputAudioFormat <p>Output audio format, not filled in by default</p>
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("OutputAudioFormat",$param) and $param["OutputAudioFormat"] !== null) {
            $this->OutputAudioFormat = $param["OutputAudioFormat"];
        }
    }
}
