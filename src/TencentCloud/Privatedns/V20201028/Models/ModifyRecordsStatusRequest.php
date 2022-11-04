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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRecordsStatus request structure.
 *
 * @method string getZoneId() Obtain The private domain ID
 * @method void setZoneId(string $ZoneId) Set The private domain ID
 * @method array getRecordIds() Obtain The DNS record IDs.
 * @method void setRecordIds(array $RecordIds) Set The DNS record IDs.
 * @method string getStatus() Obtain `enabled`: Enable; `disabled`: Disable.
 * @method void setStatus(string $Status) Set `enabled`: Enable; `disabled`: Disable.
 */
class ModifyRecordsStatusRequest extends AbstractModel
{
    /**
     * @var string The private domain ID
     */
    public $ZoneId;

    /**
     * @var array The DNS record IDs.
     */
    public $RecordIds;

    /**
     * @var string `enabled`: Enable; `disabled`: Disable.
     */
    public $Status;

    /**
     * @param string $ZoneId The private domain ID
     * @param array $RecordIds The DNS record IDs.
     * @param string $Status `enabled`: Enable; `disabled`: Disable.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
