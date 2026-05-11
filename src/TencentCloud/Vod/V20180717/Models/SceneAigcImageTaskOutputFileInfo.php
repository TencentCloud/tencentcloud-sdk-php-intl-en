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
 * Scenario-based output file info of the AIGC image generation task.
 *
 * @method string getStorageMode() Obtain Storage mode. Valid values: <li>Permanent: retained permanently;</li> <li>Temporary: temporary storage;</li>

 * @method void setStorageMode(string $StorageMode) Set Storage mode. Valid values: <li>Permanent: retained permanently;</li> <li>Temporary: temporary storage;</li>

 * @method string getMediaName() Obtain Output filename, up to 64 characters. Default filename is specified generation by system. Valid when StorageMode is Permanent.
 * @method void setMediaName(string $MediaName) Set Output filename, up to 64 characters. Default filename is specified generation by system. Valid when StorageMode is Permanent.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API. Valid when StorageMode is Permanent.

 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API. Valid when StorageMode is Permanent.

 * @method string getExpireTime() Obtain Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getFileType() Obtain File type, such as mp4, flv.
 * @method void setFileType(string $FileType) Set File type, such as mp4, flv.
 * @method string getFileUrl() Obtain Media file playback address.
 * @method void setFileUrl(string $FileUrl) Set Media file playback address.
 * @method string getFileId() Obtain Media file ID. Valid when StorageMode is Permanent.
 * @method void setFileId(string $FileId) Set Media file ID. Valid when StorageMode is Permanent.
 * @method MediaMetaData getMetaData() Obtain Output video meta information. Valid when StorageMode is Permanent.
 * @method void setMetaData(MediaMetaData $MetaData) Set Output video meta information. Valid when StorageMode is Permanent.
 */
class SceneAigcImageTaskOutputFileInfo extends AbstractModel
{
    /**
     * @var string Storage mode. Valid values: <li>Permanent: retained permanently;</li> <li>Temporary: temporary storage;</li>

     */
    public $StorageMode;

    /**
     * @var string Output filename, up to 64 characters. Default filename is specified generation by system. Valid when StorageMode is Permanent.
     */
    public $MediaName;

    /**
     * @var integer Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API. Valid when StorageMode is Permanent.

     */
    public $ClassId;

    /**
     * @var string Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @var string File type, such as mp4, flv.
     */
    public $FileType;

    /**
     * @var string Media file playback address.
     */
    public $FileUrl;

    /**
     * @var string Media file ID. Valid when StorageMode is Permanent.
     */
    public $FileId;

    /**
     * @var MediaMetaData Output video meta information. Valid when StorageMode is Permanent.
     */
    public $MetaData;

    /**
     * @param string $StorageMode Storage mode. Valid values: <li>Permanent: retained permanently;</li> <li>Temporary: temporary storage;</li>

     * @param string $MediaName Output filename, up to 64 characters. Default filename is specified generation by system. Valid when StorageMode is Permanent.
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API. Valid when StorageMode is Permanent.

     * @param string $ExpireTime Expiry date of the output file. Files will be deleted longer than this time. Default is no expiration. Format according to ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $FileType File type, such as mp4, flv.
     * @param string $FileUrl Media file playback address.
     * @param string $FileId Media file ID. Valid when StorageMode is Permanent.
     * @param MediaMetaData $MetaData Output video meta information. Valid when StorageMode is Permanent.
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
    }
}
