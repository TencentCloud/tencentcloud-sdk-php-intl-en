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
 * Output file information of the AIGC sound effect task.
 *
 * @method string getStorageMode() Obtain <p>Storage mode. Valid values: <li>Permanent: permanent storage;</li> <li>Temporary: temporary storage;</li><br>Default value: Temporary</p>
 * @method void setStorageMode(string $StorageMode) Set <p>Storage mode. Valid values: <li>Permanent: permanent storage;</li> <li>Temporary: temporary storage;</li><br>Default value: Temporary</p>
 * @method string getMediaName() Obtain <p>Output filename, up to 64 characters. Default filename is specified by the system. Valid when StorageMode is Permanent.</p>
 * @method void setMediaName(string $MediaName) Set <p>Output filename, up to 64 characters. Default filename is specified by the system. Valid when StorageMode is Permanent.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API. Valid when StorageMode is Permanent.</p>
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API. Valid when StorageMode is Permanent.</p>
 * @method string getExpireTime() Obtain <p>The expiry date of the output file. Files will be deleted longer than this time. Default is never expire, format according to ISO 8601. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>The expiry date of the output file. Files will be deleted longer than this time. Default is never expire, format according to ISO 8601. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method string getFileType() Obtain <p>File type, such as mp4 or flv.</p>
 * @method void setFileType(string $FileType) Set <p>File type, such as mp4 or flv.</p>
 * @method string getFileUrl() Obtain <p>Media file playback address.</p>
 * @method void setFileUrl(string $FileUrl) Set <p>Media file playback address.</p>
 * @method string getFileId() Obtain <p>Media file ID. Valid when StorageMode is Permanent.</p>
 * @method void setFileId(string $FileId) Set <p>Media file ID. Valid when StorageMode is Permanent.</p>
 * @method MediaMetaData getMetaData() Obtain <p>Output video meta information. Valid when StorageMode is Permanent.</p>
 * @method void setMetaData(MediaMetaData $MetaData) Set <p>Output video meta information. Valid when StorageMode is Permanent.</p>
 * @method float getDuration() Obtain <p>Duration</p><p>Unit: second</p>
 * @method void setDuration(float $Duration) Set <p>Duration</p><p>Unit: second</p>
 */
class AigcAudioTaskOutputFileInfo extends AbstractModel
{
    /**
     * @var string <p>Storage mode. Valid values: <li>Permanent: permanent storage;</li> <li>Temporary: temporary storage;</li><br>Default value: Temporary</p>
     */
    public $StorageMode;

    /**
     * @var string <p>Output filename, up to 64 characters. Default filename is specified by the system. Valid when StorageMode is Permanent.</p>
     */
    public $MediaName;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API. Valid when StorageMode is Permanent.</p>
     */
    public $ClassId;

    /**
     * @var string <p>The expiry date of the output file. Files will be deleted longer than this time. Default is never expire, format according to ISO 8601. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>File type, such as mp4 or flv.</p>
     */
    public $FileType;

    /**
     * @var string <p>Media file playback address.</p>
     */
    public $FileUrl;

    /**
     * @var string <p>Media file ID. Valid when StorageMode is Permanent.</p>
     */
    public $FileId;

    /**
     * @var MediaMetaData <p>Output video meta information. Valid when StorageMode is Permanent.</p>
     */
    public $MetaData;

    /**
     * @var float <p>Duration</p><p>Unit: second</p>
     */
    public $Duration;

    /**
     * @param string $StorageMode <p>Storage mode. Valid values: <li>Permanent: permanent storage;</li> <li>Temporary: temporary storage;</li><br>Default value: Temporary</p>
     * @param string $MediaName <p>Output filename, up to 64 characters. Default filename is specified by the system. Valid when StorageMode is Permanent.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API. Valid when StorageMode is Permanent.</p>
     * @param string $ExpireTime <p>The expiry date of the output file. Files will be deleted longer than this time. Default is never expire, format according to ISO 8601. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param string $FileType <p>File type, such as mp4 or flv.</p>
     * @param string $FileUrl <p>Media file playback address.</p>
     * @param string $FileId <p>Media file ID. Valid when StorageMode is Permanent.</p>
     * @param MediaMetaData $MetaData <p>Output video meta information. Valid when StorageMode is Permanent.</p>
     * @param float $Duration <p>Duration</p><p>Unit: second</p>
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
