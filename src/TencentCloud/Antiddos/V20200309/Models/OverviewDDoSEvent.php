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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS events recorded
 *
 * @method string getId() Obtain Event ID
 * @method void setId(string $Id) Set Event ID
 * @method string getVip() Obtain IP
 * @method void setVip(string $Vip) Set IP
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getAttackType() Obtain Attack type
 * @method void setAttackType(string $AttackType) Set Attack type
 * @method integer getAttackStatus() Obtain Attack status. `0`: The attack is ongoing; `1`: The attack ends.
 * @method void setAttackStatus(integer $AttackStatus) Set Attack status. `0`: The attack is ongoing; `1`: The attack ends.
 * @method integer getMbps() Obtain Attack traffic, in Mbps
 * @method void setMbps(integer $Mbps) Set Attack traffic, in Mbps
 * @method integer getPps() Obtain Attack packets, in PPS
 * @method void setPps(integer $Pps) Set Attack packets, in PPS
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgp-multip`: Anti-DDoS Pro; `bgpip`: Anti-DDoS Advanced; `basic`: Anti-DDoS Basic.
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgp-multip`: Anti-DDoS Pro; `bgpip`: Anti-DDoS Advanced; `basic`: Anti-DDoS Basic.
 * @method string getInstanceId() Obtain Anti-DDoS instance ID
 * @method void setInstanceId(string $InstanceId) Set Anti-DDoS instance ID
 * @method string getInstanceName() Obtain Anti-DDoS instance name
 * @method void setInstanceName(string $InstanceName) Set Anti-DDoS instance name
 */
class OverviewDDoSEvent extends AbstractModel
{
    /**
     * @var string Event ID
     */
    public $Id;

    /**
     * @var string IP
     */
    public $Vip;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Attack type
     */
    public $AttackType;

    /**
     * @var integer Attack status. `0`: The attack is ongoing; `1`: The attack ends.
     */
    public $AttackStatus;

    /**
     * @var integer Attack traffic, in Mbps
     */
    public $Mbps;

    /**
     * @var integer Attack packets, in PPS
     */
    public $Pps;

    /**
     * @var string Anti-DDoS service type. `bgp-multip`: Anti-DDoS Pro; `bgpip`: Anti-DDoS Advanced; `basic`: Anti-DDoS Basic.
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $InstanceId;

    /**
     * @var string Anti-DDoS instance name
     */
    public $InstanceName;

    /**
     * @param string $Id Event ID
     * @param string $Vip IP
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $AttackType Attack type
     * @param integer $AttackStatus Attack status. `0`: The attack is ongoing; `1`: The attack ends.
     * @param integer $Mbps Attack traffic, in Mbps
     * @param integer $Pps Attack packets, in PPS
     * @param string $Business Anti-DDoS service type. `bgp-multip`: Anti-DDoS Pro; `bgpip`: Anti-DDoS Advanced; `basic`: Anti-DDoS Basic.
     * @param string $InstanceId Anti-DDoS instance ID
     * @param string $InstanceName Anti-DDoS instance name
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

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("Mbps",$param) and $param["Mbps"] !== null) {
            $this->Mbps = $param["Mbps"];
        }

        if (array_key_exists("Pps",$param) and $param["Pps"] !== null) {
            $this->Pps = $param["Pps"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
