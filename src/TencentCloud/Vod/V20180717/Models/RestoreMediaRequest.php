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
 * @method integer getRestoreDay() Obtain Accessible duration of thawed temporary media files. Must be greater than 0. Unit: day.
 * @method void setRestoreDay(integer $RestoreDay) Set Accessible duration of thawed temporary media files. Must be greater than 0. Unit: day.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 * @method string getRestoreTier() Obtain Thawing mode. If the current storage type of the media file is archive storage, the following values can be taken:
<li>Speed mode: Expedited. The unfreeze task is completed in 5 minutes.</li>
<li>Standard mode: Standard. The unfreeze task is completed after 5 hours.</li>
<li>Batch mode: Bulk. The unfreeze task is completed after 12 hours.</li>
When the storage type of a media file is DEEP_ARCHIVE, the parameter values are as follows:
<li>Standard mode: Standard. The unfreeze task is completed after 24 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed after 48 hours.</li>
 * @method void setRestoreTier(string $RestoreTier) Set Thawing mode. If the current storage type of the media file is archive storage, the following values can be taken:
<li>Speed mode: Expedited. The unfreeze task is completed in 5 minutes.</li>
<li>Standard mode: Standard. The unfreeze task is completed after 5 hours.</li>
<li>Batch mode: Bulk. The unfreeze task is completed after 12 hours.</li>
When the storage type of a media file is DEEP_ARCHIVE, the parameter values are as follows:
<li>Standard mode: Standard. The unfreeze task is completed after 24 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed after 48 hours.</li>
 */
class RestoreMediaRequest extends AbstractModel
{
    /**
     * @var array Unique identifier list of media files. Maximum length: 100.
     */
    public $FileIds;

    /**
     * @var integer Accessible duration of thawed temporary media files. Must be greater than 0. Unit: day.
     */
    public $RestoreDay;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
     */
    public $SubAppId;

    /**
     * @var string Thawing mode. If the current storage type of the media file is archive storage, the following values can be taken:
<li>Speed mode: Expedited. The unfreeze task is completed in 5 minutes.</li>
<li>Standard mode: Standard. The unfreeze task is completed after 5 hours.</li>
<li>Batch mode: Bulk. The unfreeze task is completed after 12 hours.</li>
When the storage type of a media file is DEEP_ARCHIVE, the parameter values are as follows:
<li>Standard mode: Standard. The unfreeze task is completed after 24 hours.</li>
<li>Batch mode: Bulk. The unfreeze task will be completed after 48 hours.</li>
     */
    public $RestoreTier;

    /**
     * @param array $FileIds Unique identifier list of media files. Maximum length: 100.
     * @param integer $RestoreDay Accessible duration of thawed temporary media files. Must be greater than 0. Unit: day.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
     * @param string $RestoreTier Thawing mode. If the current storage type of the media file is archive storage, the following values can be taken:
<li>Speed mode: Expedited. The unfreeze task is completed in 5 minutes.</li>
<li>Standard mode: Standard. The unfreeze task is completed after 5 hours.</li>
<li>Batch mode: Bulk. The unfreeze task is completed after 12 hours.</li>
When the storage type of a media file is DEEP_ARCHIVE, the parameter values are as follows:
<li>Standard mode: Standard. The unfreeze task is completed after 24 hours.</li>
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
