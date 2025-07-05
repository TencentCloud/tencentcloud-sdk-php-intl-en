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
 * ModifyDnsRecords request structure.
 *
 * @method string getZoneId() Obtain Zone id.
 * @method void setZoneId(string $ZoneId) Set Zone id.
 * @method array getDnsRecords() Obtain DNS record modification data list, up to 100 entries can be modified at a time.
 * @method void setDnsRecords(array $DnsRecords) Set DNS record modification data list, up to 100 entries can be modified at a time.
 */
class ModifyDnsRecordsRequest extends AbstractModel
{
    /**
     * @var string Zone id.
     */
    public $ZoneId;

    /**
     * @var array DNS record modification data list, up to 100 entries can be modified at a time.
     */
    public $DnsRecords;

    /**
     * @param string $ZoneId Zone id.
     * @param array $DnsRecords DNS record modification data list, up to 100 entries can be modified at a time.
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

        if (array_key_exists("DnsRecords",$param) and $param["DnsRecords"] !== null) {
            $this->DnsRecords = [];
            foreach ($param["DnsRecords"] as $key => $value){
                $obj = new DnsRecord();
                $obj->deserialize($value);
                array_push($this->DnsRecords, $obj);
            }
        }
    }
}
