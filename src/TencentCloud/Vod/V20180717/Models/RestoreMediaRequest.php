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
 * RestoreMedia request structure.
 *
 * @method array getFileIds() Obtain Unique identifier list of media files. Maximum length: 100.
 * @method void setFileIds(array $FileIds) Set Unique identifier list of media files. Maximum length: 100.
 * @method integer getRestoreDay() Obtain Accessible duration of thawed temporary media files must be greater than 0. Unit: day.
 * @method void setRestoreDay(integer $RestoreDay) Set Accessible duration of thawed temporary media files must be greater than 0. Unit: day.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getRestoreTier() Obtain Thawing mode. When the current storage type of a media file is archive storage, it takes the following values:
<li>Speed mode: Expedited. The unfreeze task will be completed in 5 minutes.</li>
<li>Standard mode: Standard. The unfreeze task will be completed in 5 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed in 12 hours.</li>
When the file storage type of the media file is DEEP_ARCHIVE, the following values are available:
<li>Standard mode: Standard. The unfreeze task will be completed in 24 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed after 48 hours.</li>
 * @method void setRestoreTier(string $RestoreTier) Set Thawing mode. When the current storage type of a media file is archive storage, it takes the following values:
<li>Speed mode: Expedited. The unfreeze task will be completed in 5 minutes.</li>
<li>Standard mode: Standard. The unfreeze task will be completed in 5 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed in 12 hours.</li>
When the file storage type of the media file is DEEP_ARCHIVE, the following values are available:
<li>Standard mode: Standard. The unfreeze task will be completed in 24 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed after 48 hours.</li>
 */
class RestoreMediaRequest extends AbstractModel
{
    /**
     * @var array Unique identifier list of media files. Maximum length: 100.
     */
    public $FileIds;

    /**
     * @var integer Accessible duration of thawed temporary media files must be greater than 0. Unit: day.
     */
    public $RestoreDay;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Thawing mode. When the current storage type of a media file is archive storage, it takes the following values:
<li>Speed mode: Expedited. The unfreeze task will be completed in 5 minutes.</li>
<li>Standard mode: Standard. The unfreeze task will be completed in 5 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed in 12 hours.</li>
When the file storage type of the media file is DEEP_ARCHIVE, the following values are available:
<li>Standard mode: Standard. The unfreeze task will be completed in 24 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed after 48 hours.</li>
     */
    public $RestoreTier;

    /**
     * @param array $FileIds Unique identifier list of media files. Maximum length: 100.
     * @param integer $RestoreDay Accessible duration of thawed temporary media files must be greater than 0. Unit: day.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $RestoreTier Thawing mode. When the current storage type of a media file is archive storage, it takes the following values:
<li>Speed mode: Expedited. The unfreeze task will be completed in 5 minutes.</li>
<li>Standard mode: Standard. The unfreeze task will be completed in 5 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed in 12 hours.</li>
When the file storage type of the media file is DEEP_ARCHIVE, the following values are available:
<li>Standard mode: Standard. The unfreeze task will be completed in 24 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed after 48 hours.</li>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RestoreTier",$param) and $param["RestoreTier"] !== null) {
            $this->RestoreTier = $param["RestoreTier"];
        }
    }
}
