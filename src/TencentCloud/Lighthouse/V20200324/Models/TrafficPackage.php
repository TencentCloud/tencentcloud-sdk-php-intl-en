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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Traffic package details.
 *
 * @method string getTrafficPackageId() Obtain Traffic package ID.
 * @method void setTrafficPackageId(string $TrafficPackageId) Set Traffic package ID.
 * @method integer getTrafficUsed() Obtain Used traffic in bytes during traffic package validity period.
 * @method void setTrafficUsed(integer $TrafficUsed) Set Used traffic in bytes during traffic package validity period.
 * @method integer getTrafficPackageTotal() Obtain Total traffic in bytes during traffic package validity period.
 * @method void setTrafficPackageTotal(integer $TrafficPackageTotal) Set Total traffic in bytes during traffic package validity period.
 * @method integer getTrafficPackageRemaining() Obtain Remaining traffic in bytes during traffic package validity period.
 * @method void setTrafficPackageRemaining(integer $TrafficPackageRemaining) Set Remaining traffic in bytes during traffic package validity period.
 * @method integer getTrafficOverflow() Obtain Traffic exceeding package amount in bytes during traffic package validity period.
 * @method void setTrafficOverflow(integer $TrafficOverflow) Set Traffic exceeding package amount in bytes during traffic package validity period.
 * @method string getStartTime() Obtain Start time of traffic package validity period according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time of traffic package validity period according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time of traffic package validity period according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time of traffic package validity period according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDeadline() Obtain Traffic package expiration time according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeadline(string $Deadline) Set Traffic package expiration time according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Traffic package status:
<li>NETWORK_NORMAL: normal</li>
<li>OVERDUE_NETWORK_DISABLED: the network is disconnected due to overdue payments</li>
 * @method void setStatus(string $Status) Set Traffic package status:
<li>NETWORK_NORMAL: normal</li>
<li>OVERDUE_NETWORK_DISABLED: the network is disconnected due to overdue payments</li>
 */
class TrafficPackage extends AbstractModel
{
    /**
     * @var string Traffic package ID.
     */
    public $TrafficPackageId;

    /**
     * @var integer Used traffic in bytes during traffic package validity period.
     */
    public $TrafficUsed;

    /**
     * @var integer Total traffic in bytes during traffic package validity period.
     */
    public $TrafficPackageTotal;

    /**
     * @var integer Remaining traffic in bytes during traffic package validity period.
     */
    public $TrafficPackageRemaining;

    /**
     * @var integer Traffic exceeding package amount in bytes during traffic package validity period.
     */
    public $TrafficOverflow;

    /**
     * @var string Start time of traffic package validity period according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string End time of traffic package validity period according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Traffic package expiration time according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Deadline;

    /**
     * @var string Traffic package status:
<li>NETWORK_NORMAL: normal</li>
<li>OVERDUE_NETWORK_DISABLED: the network is disconnected due to overdue payments</li>
     */
    public $Status;

    /**
     * @param string $TrafficPackageId Traffic package ID.
     * @param integer $TrafficUsed Used traffic in bytes during traffic package validity period.
     * @param integer $TrafficPackageTotal Total traffic in bytes during traffic package validity period.
     * @param integer $TrafficPackageRemaining Remaining traffic in bytes during traffic package validity period.
     * @param integer $TrafficOverflow Traffic exceeding package amount in bytes during traffic package validity period.
     * @param string $StartTime Start time of traffic package validity period according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time of traffic package validity period according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Deadline Traffic package expiration time according to ISO 8601 standard. UTC time is used. 
Format: YYYY-MM-DDThh:mm:ssZ.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status Traffic package status:
<li>NETWORK_NORMAL: normal</li>
<li>OVERDUE_NETWORK_DISABLED: the network is disconnected due to overdue payments</li>
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
        if (array_key_exists("TrafficPackageId",$param) and $param["TrafficPackageId"] !== null) {
            $this->TrafficPackageId = $param["TrafficPackageId"];
        }

        if (array_key_exists("TrafficUsed",$param) and $param["TrafficUsed"] !== null) {
            $this->TrafficUsed = $param["TrafficUsed"];
        }

        if (array_key_exists("TrafficPackageTotal",$param) and $param["TrafficPackageTotal"] !== null) {
            $this->TrafficPackageTotal = $param["TrafficPackageTotal"];
        }

        if (array_key_exists("TrafficPackageRemaining",$param) and $param["TrafficPackageRemaining"] !== null) {
            $this->TrafficPackageRemaining = $param["TrafficPackageRemaining"];
        }

        if (array_key_exists("TrafficOverflow",$param) and $param["TrafficOverflow"] !== null) {
            $this->TrafficOverflow = $param["TrafficOverflow"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
