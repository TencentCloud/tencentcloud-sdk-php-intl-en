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
 * ModifyMediaStorageClass request structure.
 *
 * @method array getFileIds() Obtain Unique identifier list of media files. Maximum length: 100.
 * @method void setFileIds(array $FileIds) Set Unique identifier list of media files. Maximum length: 100.
 * @method string getStorageClass() Obtain Destination storage class. Optional values:
<li> STANDARD: standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li> ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: deep archive storage.</li>
 * @method void setStorageClass(string $StorageClass) Set Destination storage class. Optional values:
<li> STANDARD: standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li> ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: deep archive storage.</li>
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be set to the app ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be set to the app ID.</b>
 * @method string getRestoreTier() Obtain Retrieval mode. When converting the file storage type from archive or deep archive to standard storage, you need to specify the retrieval (also known as unfreeze) operation mode. For details, see [Data Retrieval and Retrieval Mode](https://www.tencentcloud.com/document/product/266/56196?from_cn_redirect=1#retake).
When the current storage type of the media file is archive storage, the parameter values are as follows:
<li>Expedited: speed mode.</li>
<li>Standard: standard mode.</li>
<li>Bulk: batch mode.</li>
When the current storage type of a media file is DEEP_ARCHIVE, the following values are available:
<li>Standard: standard mode.</li>
<li>Bulk: batch mode.</li>
 * @method void setRestoreTier(string $RestoreTier) Set Retrieval mode. When converting the file storage type from archive or deep archive to standard storage, you need to specify the retrieval (also known as unfreeze) operation mode. For details, see [Data Retrieval and Retrieval Mode](https://www.tencentcloud.com/document/product/266/56196?from_cn_redirect=1#retake).
When the current storage type of the media file is archive storage, the parameter values are as follows:
<li>Expedited: speed mode.</li>
<li>Standard: standard mode.</li>
<li>Bulk: batch mode.</li>
When the current storage type of a media file is DEEP_ARCHIVE, the following values are available:
<li>Standard: standard mode.</li>
<li>Bulk: batch mode.</li>
 */
class ModifyMediaStorageClassRequest extends AbstractModel
{
    /**
     * @var array Unique identifier list of media files. Maximum length: 100.
     */
    public $FileIds;

    /**
     * @var string Destination storage class. Optional values:
<li> STANDARD: standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li> ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: deep archive storage.</li>
     */
    public $StorageClass;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be set to the app ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Retrieval mode. When converting the file storage type from archive or deep archive to standard storage, you need to specify the retrieval (also known as unfreeze) operation mode. For details, see [Data Retrieval and Retrieval Mode](https://www.tencentcloud.com/document/product/266/56196?from_cn_redirect=1#retake).
When the current storage type of the media file is archive storage, the parameter values are as follows:
<li>Expedited: speed mode.</li>
<li>Standard: standard mode.</li>
<li>Bulk: batch mode.</li>
When the current storage type of a media file is DEEP_ARCHIVE, the following values are available:
<li>Standard: standard mode.</li>
<li>Bulk: batch mode.</li>
     */
    public $RestoreTier;

    /**
     * @param array $FileIds Unique identifier list of media files. Maximum length: 100.
     * @param string $StorageClass Destination storage class. Optional values:
<li> STANDARD: standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li> ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: deep archive storage.</li>
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be set to the app ID.</b>
     * @param string $RestoreTier Retrieval mode. When converting the file storage type from archive or deep archive to standard storage, you need to specify the retrieval (also known as unfreeze) operation mode. For details, see [Data Retrieval and Retrieval Mode](https://www.tencentcloud.com/document/product/266/56196?from_cn_redirect=1#retake).
When the current storage type of the media file is archive storage, the parameter values are as follows:
<li>Expedited: speed mode.</li>
<li>Standard: standard mode.</li>
<li>Bulk: batch mode.</li>
When the current storage type of a media file is DEEP_ARCHIVE, the following values are available:
<li>Standard: standard mode.</li>
<li>Bulk: batch mode.</li>
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RestoreTier",$param) and $param["RestoreTier"] !== null) {
            $this->RestoreTier = $param["RestoreTier"];
        }
    }
}
