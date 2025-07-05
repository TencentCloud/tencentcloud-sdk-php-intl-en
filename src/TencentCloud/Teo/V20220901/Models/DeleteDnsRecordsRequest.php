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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDnsRecords request structure.
 *
 * @method string getZoneId() Obtain Zone id.
 * @method void setZoneId(string $ZoneId) Set Zone id.
 * @method array getRecordIds() Obtain List of dns record ids to be deleted, upper limit: 1000.
 * @method void setRecordIds(array $RecordIds) Set List of dns record ids to be deleted, upper limit: 1000.
 */
class DeleteDnsRecordsRequest extends AbstractModel
{
    /**
     * @var string Zone id.
     */
    public $ZoneId;

    /**
     * @var array List of dns record ids to be deleted, upper limit: 1000.
     */
    public $RecordIds;

    /**
     * @param string $ZoneId Zone id.
     * @param array $RecordIds List of dns record ids to be deleted, upper limit: 1000.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RecordIds",$param) and $param["RecordIds"] !== null) {
            $this->RecordIds = $param["RecordIds"];
        }
    }
}
