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
 * Scene AIGC image task output file information.
 *
 * @method string getStorageMode() Obtain Storage mode. valid values: <li>Permanent: Permanent storage. the generated image file will be stored in VOD (video on demand).</li> <li>Temporary: Temporary storage. the generated image file will not be stored in vod.</li>.
Default value: Temporary.
 * @method void setStorageMode(string $StorageMode) Set Storage mode. valid values: <li>Permanent: Permanent storage. the generated image file will be stored in VOD (video on demand).</li> <li>Temporary: Temporary storage. the generated image file will not be stored in vod.</li>.
Default value: Temporary.
 * @method string getMediaName() Obtain Output filename, up to 64 characters. default filename is assigned by the system.
 * @method void setMediaName(string $MediaName) Set Output filename, up to 64 characters. default filename is assigned by the system.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create classification](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicating other categories.</li>.
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create classification](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicating other categories.</li>.
 * @method string getExpireTime() Obtain The expiry date of the output file. files will be deleted longer than this time. default is no expiration. format according to ISO 8601 standard. for details, see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set The expiry date of the output file. files will be deleted longer than this time. default is no expiration. format according to ISO 8601 standard. for details, see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getFileType() Obtain File Type.
 * @method void setFileType(string $FileType) Set File Type.
 * @method string getFileUrl() Obtain File Url.
 * @method void setFileUrl(string $FileUrl) Set File Url.
 * @method string getFileId() Obtain File ID.
 * @method void setFileId(string $FileId) Set File ID.
 * @method MediaMetaData getMetaData() Obtain Meta Data.
 * @method void setMetaData(MediaMetaData $MetaData) Set Meta Data.
 */
class SceneAigcImageTaskOutputFileInfo extends AbstractModel
{
    /**
     * @var string Storage mode. valid values: <li>Permanent: Permanent storage. the generated image file will be stored in VOD (video on demand).</li> <li>Temporary: Temporary storage. the generated image file will not be stored in vod.</li>.
Default value: Temporary.
     */
    public $StorageMode;

    /**
     * @var string Output filename, up to 64 characters. default filename is assigned by the system.
     */
    public $MediaName;

    /**
     * @var integer Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create classification](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicating other categories.</li>.
     */
    public $ClassId;

    /**
     * @var string The expiry date of the output file. files will be deleted longer than this time. default is no expiration. format according to ISO 8601 standard. for details, see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @var string File Type.
     */
    public $FileType;

    /**
     * @var string File Url.
     */
    public $FileUrl;

    /**
     * @var string File ID.
     */
    public $FileId;

    /**
     * @var MediaMetaData Meta Data.
     */
    public $MetaData;

    /**
     * @param string $StorageMode Storage mode. valid values: <li>Permanent: Permanent storage. the generated image file will be stored in VOD (video on demand).</li> <li>Temporary: Temporary storage. the generated image file will not be stored in vod.</li>.
Default value: Temporary.
     * @param string $MediaName Output filename, up to 64 characters. default filename is assigned by the system.
     * @param integer $ClassId Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create classification](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicating other categories.</li>.
     * @param string $ExpireTime The expiry date of the output file. files will be deleted longer than this time. default is no expiration. format according to ISO 8601 standard. for details, see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $FileType File Type.
     * @param string $FileUrl File Url.
     * @param string $FileId File ID.
     * @param MediaMetaData $MetaData Meta Data.
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
