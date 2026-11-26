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
 * ModifyDnsRecordsStatus request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method array getRecordsToEnable() Obtain List of DNS record IDs to be enabled. Capacity limit: 200.<br>Note: The same DNS record ID cannot exist in RecordsToEnable and RecordsToDisable at the same time.
 * @method void setRecordsToEnable(array $RecordsToEnable) Set List of DNS record IDs to be enabled. Capacity limit: 200.<br>Note: The same DNS record ID cannot exist in RecordsToEnable and RecordsToDisable at the same time.
 * @method array getRecordsToDisable() Obtain List of DNS record IDs to be disabled. Capacity limit: 200.<br>Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable at the same time.
 * @method void setRecordsToDisable(array $RecordsToDisable) Set List of DNS record IDs to be disabled. Capacity limit: 200.<br>Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable at the same time.
 */
class ModifyDnsRecordsStatusRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var array List of DNS record IDs to be enabled. Capacity limit: 200.<br>Note: The same DNS record ID cannot exist in RecordsToEnable and RecordsToDisable at the same time.
     */
    public $RecordsToEnable;

    /**
     * @var array List of DNS record IDs to be disabled. Capacity limit: 200.<br>Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable at the same time.
     */
    public $RecordsToDisable;

    /**
     * @param string $ZoneId Zone ID.
     * @param array $RecordsToEnable List of DNS record IDs to be enabled. Capacity limit: 200.<br>Note: The same DNS record ID cannot exist in RecordsToEnable and RecordsToDisable at the same time.
     * @param array $RecordsToDisable List of DNS record IDs to be disabled. Capacity limit: 200.<br>Note: The same DNS record ID cannot exist in both RecordsToEnable and RecordsToDisable at the same time.
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

        if (array_key_exists("RecordsToEnable",$param) and $param["RecordsToEnable"] !== null) {
            $this->RecordsToEnable = $param["RecordsToEnable"];
        }

        if (array_key_exists("RecordsToDisable",$param) and $param["RecordsToDisable"] !== null) {
            $this->RecordsToDisable = $param["RecordsToDisable"];
        }
    }
}
