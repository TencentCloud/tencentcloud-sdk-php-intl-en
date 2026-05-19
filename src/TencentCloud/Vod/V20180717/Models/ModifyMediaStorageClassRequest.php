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
 * @method string getStorageClass() Obtain Target storage type. Valid values:
<li> STANDARD: Standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li>ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: Deep archive storage.</li>
 * @method void setStorageClass(string $StorageClass) Set Target storage type. Valid values:
<li> STANDARD: Standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li>ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: Deep archive storage.</li>
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getRestoreTier() Obtain Retrieval mode. When converting the file storage type from archive or deep archive to standard storage, you need to specify the mode for the retrieval (also known as unfreeze) operation. For details, refer to [Data retrieval and retrieval mode](https://www.tencentcloud.com/document/product/266/56196?from_cn_redirect=1#retake).
When the current storage type of a media file is archive storage, the following values are available:
<li>Expedited: Speed mode.</li>
<li>Standard: Standard mode.</li>
<li>Bulk: batch mode.</li>
When the current storage type of the media file is DEEP_ARCHIVE, the following values are available:
<li>Standard: Standard mode.</li>
<li>Bulk: Batch mode.</li>
 * @method void setRestoreTier(string $RestoreTier) Set Retrieval mode. When converting the file storage type from archive or deep archive to standard storage, you need to specify the mode for the retrieval (also known as unfreeze) operation. For details, refer to [Data retrieval and retrieval mode](https://www.tencentcloud.com/document/product/266/56196?from_cn_redirect=1#retake).
When the current storage type of a media file is archive storage, the following values are available:
<li>Expedited: Speed mode.</li>
<li>Standard: Standard mode.</li>
<li>Bulk: batch mode.</li>
When the current storage type of the media file is DEEP_ARCHIVE, the following values are available:
<li>Standard: Standard mode.</li>
<li>Bulk: Batch mode.</li>
 */
class ModifyMediaStorageClassRequest extends AbstractModel
{
    /**
     * @var array Unique identifier list of media files. Maximum length: 100.
     */
    public $FileIds;

    /**
     * @var string Target storage type. Valid values:
<li> STANDARD: Standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li>ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: Deep archive storage.</li>
     */
    public $StorageClass;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Retrieval mode. When converting the file storage type from archive or deep archive to standard storage, you need to specify the mode for the retrieval (also known as unfreeze) operation. For details, refer to [Data retrieval and retrieval mode](https://www.tencentcloud.com/document/product/266/56196?from_cn_redirect=1#retake).
When the current storage type of a media file is archive storage, the following values are available:
<li>Expedited: Speed mode.</li>
<li>Standard: Standard mode.</li>
<li>Bulk: batch mode.</li>
When the current storage type of the media file is DEEP_ARCHIVE, the following values are available:
<li>Standard: Standard mode.</li>
<li>Bulk: Batch mode.</li>
     */
    public $RestoreTier;

    /**
     * @param array $FileIds Unique identifier list of media files. Maximum length: 100.
     * @param string $StorageClass Target storage type. Valid values:
<li> STANDARD: Standard storage.</li>
<li> STANDARD_IA: Infrequent storage.</li>
<li>ARCHIVE: Archive storage.</li>
<li> DEEP_ARCHIVE: Deep archive storage.</li>
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $RestoreTier Retrieval mode. When converting the file storage type from archive or deep archive to standard storage, you need to specify the mode for the retrieval (also known as unfreeze) operation. For details, refer to [Data retrieval and retrieval mode](https://www.tencentcloud.com/document/product/266/56196?from_cn_redirect=1#retake).
When the current storage type of a media file is archive storage, the following values are available:
<li>Expedited: Speed mode.</li>
<li>Standard: Standard mode.</li>
<li>Bulk: batch mode.</li>
When the current storage type of the media file is DEEP_ARCHIVE, the following values are available:
<li>Standard: Standard mode.</li>
<li>Bulk: Batch mode.</li>
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
