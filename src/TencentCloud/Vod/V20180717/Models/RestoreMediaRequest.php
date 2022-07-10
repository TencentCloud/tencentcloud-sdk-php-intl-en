<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * RestoreMedia request structure.
 *
 * @method array getFileIds() Obtain The IDs of media files.
 * @method void setFileIds(array $FileIds) Set The IDs of media files.
 * @method integer getRestoreDay() Obtain The number of days during which the restored files will remain available.
 * @method void setRestoreDay(integer $RestoreDay) Set The number of days during which the restored files will remain available.
 * @method string getRestoreTier() Obtain The retrieval mode. If the current storage class is ARCHIVE, the valid values for this parameter are as follows:
<li>Expedited: The files are made available in five minutes.</li>
<li>Standard: The files are made available in five hours.</li>
<li>Bulk: The files are made available in 12 hours.</li>
If the current storage class is DEEP ARCHIVE, the valid values for this parameter are as follows:
<li>Standard: The files are made available in 24 hours.</li>
<li>Bulk: The files are made available in 48 hours.</li>
 * @method void setRestoreTier(string $RestoreTier) Set The retrieval mode. If the current storage class is ARCHIVE, the valid values for this parameter are as follows:
<li>Expedited: The files are made available in five minutes.</li>
<li>Standard: The files are made available in five hours.</li>
<li>Bulk: The files are made available in 12 hours.</li>
If the current storage class is DEEP ARCHIVE, the valid values for this parameter are as follows:
<li>Standard: The files are made available in 24 hours.</li>
<li>Bulk: The files are made available in 48 hours.</li>
 * @method integer getSubAppId() Obtain The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 */
class RestoreMediaRequest extends AbstractModel
{
    /**
     * @var array The IDs of media files.
     */
    public $FileIds;

    /**
     * @var integer The number of days during which the restored files will remain available.
     */
    public $RestoreDay;

    /**
     * @var string The retrieval mode. If the current storage class is ARCHIVE, the valid values for this parameter are as follows:
<li>Expedited: The files are made available in five minutes.</li>
<li>Standard: The files are made available in five hours.</li>
<li>Bulk: The files are made available in 12 hours.</li>
If the current storage class is DEEP ARCHIVE, the valid values for this parameter are as follows:
<li>Standard: The files are made available in 24 hours.</li>
<li>Bulk: The files are made available in 48 hours.</li>
     */
    public $RestoreTier;

    /**
     * @var integer The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param array $FileIds The IDs of media files.
     * @param integer $RestoreDay The number of days during which the restored files will remain available.
     * @param string $RestoreTier The retrieval mode. If the current storage class is ARCHIVE, the valid values for this parameter are as follows:
<li>Expedited: The files are made available in five minutes.</li>
<li>Standard: The files are made available in five hours.</li>
<li>Bulk: The files are made available in 12 hours.</li>
If the current storage class is DEEP ARCHIVE, the valid values for this parameter are as follows:
<li>Standard: The files are made available in 24 hours.</li>
<li>Bulk: The files are made available in 48 hours.</li>
     * @param integer $SubAppId The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
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

        if (array_key_exists("RestoreDay",$param) and $param["RestoreDay"] !== null) {
            $this->RestoreDay = $param["RestoreDay"];
        }

        if (array_key_exists("RestoreTier",$param) and $param["RestoreTier"] !== null) {
            $this->RestoreTier = $param["RestoreTier"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
