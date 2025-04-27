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
 * @method array getFileIds() Obtain Media file unique identifier list, maximum length: 100.
 * @method void setFileIds(array $FileIds) Set Media file unique identifier list, maximum length: 100.
 * @method integer getRestoreDay() Obtain The accessible duration of the unfrozen temporary media files must be greater than 0, and the unit is "days".
 * @method void setRestoreDay(integer $RestoreDay) Set The accessible duration of the unfrozen temporary media files must be greater than 0, and the unit is "days".
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
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
 */
class RestoreMediaRequest extends AbstractModel
{
    /**
     * @var array Media file unique identifier list, maximum length: 100.
     */
    public $FileIds;

    /**
     * @var integer The accessible duration of the unfrozen temporary media files must be greater than 0, and the unit is "days".
     */
    public $RestoreDay;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

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
     * @param array $FileIds Media file unique identifier list, maximum length: 100.
     * @param integer $RestoreDay The accessible duration of the unfrozen temporary media files must be greater than 0, and the unit is "days".
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $RestoreTier The retrieval mode. If the current storage class is ARCHIVE, the valid values for this parameter are as follows:
<li>Expedited: The files are made available in five minutes.</li>
<li>Standard: The files are made available in five hours.</li>
<li>Bulk: The files are made available in 12 hours.</li>
If the current storage class is DEEP ARCHIVE, the valid values for this parameter are as follows:
<li>Standard: The files are made available in 24 hours.</li>
<li>Bulk: The files are made available in 48 hours.</li>
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
