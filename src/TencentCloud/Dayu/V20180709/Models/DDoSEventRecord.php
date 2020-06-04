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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS attack event record
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method string getVip() Obtain Resource IP
 * @method void setVip(string $Vip) Set Resource IP
 * @method string getStartTime() Obtain Attack start time
 * @method void setStartTime(string $StartTime) Set Attack start time
 * @method string getEndTime() Obtain Attack end time
 * @method void setEndTime(string $EndTime) Set Attack end time
 * @method integer getMbps() Obtain Maximum attack bandwidth
 * @method void setMbps(integer $Mbps) Set Maximum attack bandwidth
 * @method integer getPps() Obtain Maximum attack packet rate
 * @method void setPps(integer $Pps) Set Maximum attack packet rate
 * @method string getAttackType() Obtain Attack type
 * @method void setAttackType(string $AttackType) Set Attack type
 * @method integer getBlockFlag() Obtain Whether the IP is blocked. Valid values: [1 (yes), 0 (no), 2 (invalid value)]
 * @method void setBlockFlag(integer $BlockFlag) Set Whether the IP is blocked. Valid values: [1 (yes), 0 (no), 2 (invalid value)]
 * @method string getOverLoad() Obtain Whether the elastic protection bandwidth is exceeded. Valid values: [yes (yes), no (no), empty string (unknown value)]
 * @method void setOverLoad(string $OverLoad) Set Whether the elastic protection bandwidth is exceeded. Valid values: [yes (yes), no (no), empty string (unknown value)]
 * @method integer getAttackStatus() Obtain Attack status. Valid values: [0 (ongoing), 1 (ended)]
 * @method void setAttackStatus(integer $AttackStatus) Set Attack status. Valid values: [0 (ongoing), 1 (ended)]
 * @method string getResourceName() Obtain Resource name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceName(string $ResourceName) Set Resource name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEventId() Obtain Attack event ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEventId(string $EventId) Set Attack event ID
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DDoSEventRecord extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $Id;

    /**
     * @var string Resource IP
     */
    public $Vip;

    /**
     * @var string Attack start time
     */
    public $StartTime;

    /**
     * @var string Attack end time
     */
    public $EndTime;

    /**
     * @var integer Maximum attack bandwidth
     */
    public $Mbps;

    /**
     * @var integer Maximum attack packet rate
     */
    public $Pps;

    /**
     * @var string Attack type
     */
    public $AttackType;

    /**
     * @var integer Whether the IP is blocked. Valid values: [1 (yes), 0 (no), 2 (invalid value)]
     */
    public $BlockFlag;

    /**
     * @var string Whether the elastic protection bandwidth is exceeded. Valid values: [yes (yes), no (no), empty string (unknown value)]
     */
    public $OverLoad;

    /**
     * @var integer Attack status. Valid values: [0 (ongoing), 1 (ended)]
     */
    public $AttackStatus;

    /**
     * @var string Resource name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceName;

    /**
     * @var string Attack event ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EventId;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
     * @param string $Id Anti-DDoS instance ID
     * @param string $Vip Resource IP
     * @param string $StartTime Attack start time
     * @param string $EndTime Attack end time
     * @param integer $Mbps Maximum attack bandwidth
     * @param integer $Pps Maximum attack packet rate
     * @param string $AttackType Attack type
     * @param integer $BlockFlag Whether the IP is blocked. Valid values: [1 (yes), 0 (no), 2 (invalid value)]
     * @param string $OverLoad Whether the elastic protection bandwidth is exceeded. Valid values: [yes (yes), no (no), empty string (unknown value)]
     * @param integer $AttackStatus Attack status. Valid values: [0 (ongoing), 1 (ended)]
     * @param string $ResourceName Resource name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EventId Attack event ID
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Mbps",$param) and $param["Mbps"] !== null) {
            $this->Mbps = $param["Mbps"];
        }

        if (array_key_exists("Pps",$param) and $param["Pps"] !== null) {
            $this->Pps = $param["Pps"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("BlockFlag",$param) and $param["BlockFlag"] !== null) {
            $this->BlockFlag = $param["BlockFlag"];
        }

        if (array_key_exists("OverLoad",$param) and $param["OverLoad"] !== null) {
            $this->OverLoad = $param["OverLoad"];
        }

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
