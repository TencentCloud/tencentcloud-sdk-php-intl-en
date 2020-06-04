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
 * CC attack event record
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
 * @method integer getReqQps() Obtain Total requests peak (QPS)
 * @method void setReqQps(integer $ReqQps) Set Total requests peak (QPS)
 * @method integer getDropQps() Obtain Attack peak (QPS)
 * @method void setDropQps(integer $DropQps) Set Attack peak (QPS)
 * @method integer getAttackStatus() Obtain Attack status. Valid values: [0 (ongoing), 1 (ended)]
 * @method void setAttackStatus(integer $AttackStatus) Set Attack status. Valid values: [0 (ongoing), 1 (ended)]
 * @method string getResourceName() Obtain Resource name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceName(string $ResourceName) Set Resource name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDomainList() Obtain Domain name list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomainList(string $DomainList) Set Domain name list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUriList() Obtain URI list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUriList(string $UriList) Set URI list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAttackipList() Obtain Attack source list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAttackipList(string $AttackipList) Set Attack source list
Note: this field may return null, indicating that no valid values can be obtained.
 */
class CCEventRecord extends AbstractModel
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
     * @var integer Total requests peak (QPS)
     */
    public $ReqQps;

    /**
     * @var integer Attack peak (QPS)
     */
    public $DropQps;

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
     * @var string Domain name list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DomainList;

    /**
     * @var string URI list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UriList;

    /**
     * @var string Attack source list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AttackipList;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (Single IP); `bgp-multip`: Anti-DDoS Pro (Multi-IP); `net`: Anti-DDoS Ultimate; `basic`: Anti-DDoS Basic
     * @param string $Id Anti-DDoS instance ID
     * @param string $Vip Resource IP
     * @param string $StartTime Attack start time
     * @param string $EndTime Attack end time
     * @param integer $ReqQps Total requests peak (QPS)
     * @param integer $DropQps Attack peak (QPS)
     * @param integer $AttackStatus Attack status. Valid values: [0 (ongoing), 1 (ended)]
     * @param string $ResourceName Resource name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DomainList Domain name list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UriList URI list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AttackipList Attack source list
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

        if (array_key_exists("ReqQps",$param) and $param["ReqQps"] !== null) {
            $this->ReqQps = $param["ReqQps"];
        }

        if (array_key_exists("DropQps",$param) and $param["DropQps"] !== null) {
            $this->DropQps = $param["DropQps"];
        }

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("UriList",$param) and $param["UriList"] !== null) {
            $this->UriList = $param["UriList"];
        }

        if (array_key_exists("AttackipList",$param) and $param["AttackipList"] !== null) {
            $this->AttackipList = $param["AttackipList"];
        }
    }
}
