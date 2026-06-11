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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Password cracking list entity
 *
 * @method integer getId() Obtain Unique ID
 * @method void setId(integer $Id) Set Unique ID
 * @method string getUuid() Obtain CWP client UUID.
 * @method void setUuid(string $Uuid) Set CWP client UUID.
 * @method string getMachineIp() Obtain Host IP address
 * @method void setMachineIp(string $MachineIp) Set Host IP address
 * @method string getMachineName() Obtain host name
 * @method void setMachineName(string $MachineName) Set host name
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getSrcIp() Obtain Source IP
 * @method void setSrcIp(string $SrcIp) Set Source IP
 * @method string getStatus() Obtain SUCCESS: cracking successful; FAILED: cracking failed
 * @method void setStatus(string $Status) Set SUCCESS: cracking successful; FAILED: cracking failed
 * @method integer getCountry() Obtain Country/Region ID
 * @method void setCountry(integer $Country) Set Country/Region ID
 * @method integer getCity() Obtain City ID
 * @method void setCity(integer $City) Set City ID
 * @method integer getProvince() Obtain Province id
 * @method void setProvince(integer $Province) Set Province id
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getBanStatus() Obtain 0 - No blocking (not supported by the client version)
1: blocked
2: Blocking failed (program exception)
3: No blocking (No blocking for the private network)
4: Availability zone does not support blocking
10: blocking
81: no blocking (blocking disabled)
82-No Blocking (Non-Pro Edition)
83: no blocking (added to the allowlist)
86: no blocking (system allowlist)
87: No blocking (client offline)
88-No blocking (Source Ip belongs to the same customer)
89: no blocking (blocking is not supported for ipv6)
 * @method void setBanStatus(integer $BanStatus) Set 0 - No blocking (not supported by the client version)
1: blocked
2: Blocking failed (program exception)
3: No blocking (No blocking for the private network)
4: Availability zone does not support blocking
10: blocking
81: no blocking (blocking disabled)
82-No Blocking (Non-Pro Edition)
83: no blocking (added to the allowlist)
86: no blocking (system allowlist)
87: No blocking (client offline)
88-No blocking (Source Ip belongs to the same customer)
89: no blocking (blocking is not supported for ipv6)
 * @method integer getEventType() Obtain Event type: 200 - brute force cracking event; 300 - successful brute force cracking event (the status is displayed on the page); 400 - brute force cracking event for non-existent accounts.
 * @method void setEventType(integer $EventType) Set Event type: 200 - brute force cracking event; 300 - successful brute force cracking event (the status is displayed on the page); 400 - brute force cracking event for non-existent accounts.
 * @method integer getCount() Obtain Occurrence count
 * @method void setCount(integer $Count) Set Occurrence count
 * @method string getQuuid() Obtain CVM instance UUID.
 * @method void setQuuid(string $Quuid) Set CVM instance UUID.
 * @method boolean getIsProVersion() Obtain Whether it is the Pro Edition (true/false)
 * @method void setIsProVersion(boolean $IsProVersion) Set Whether it is the Pro Edition (true/false)
 * @method string getProtocol() Obtain Username of the attacked service
 * @method void setProtocol(string $Protocol) Set Username of the attacked service
 * @method integer getPort() Obtain Port
 * @method void setPort(integer $Port) Set Port
 * @method string getModifyTime() Obtain Last attack time
 * @method void setModifyTime(string $ModifyTime) Set Last attack time
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getDataStatus() Obtain 0: pending; 1: ignored; 5: fixed; 6: added to allowlist
 * @method void setDataStatus(integer $DataStatus) Set 0: pending; 1: ignored; 5: fixed; 6: added to allowlist
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
 * @method string getLocation() Obtain Chinese name of a geo location.
 * @method void setLocation(string $Location) Set Chinese name of a geo location.
 * @method integer getRiskLevel() Obtain Threat level. 0: low risk, 1: medium risk, 2: high risk.
 * @method void setRiskLevel(integer $RiskLevel) Set Threat level. 0: low risk, 1: medium risk, 2: high risk.
 * @method integer getDataFrom() Obtain Event source. 0: blocking rule, 1: threat intelligence.
 * @method void setDataFrom(integer $DataFrom) Set Event source. 0: blocking rule, 1: threat intelligence.
 * @method string getAttackStatusDesc() Obtain Cracking status description.
 * @method void setAttackStatusDesc(string $AttackStatusDesc) Set Cracking status description.
 * @method string getBanExpiredTime() Obtain Block expiration time (only valid for blocked events).
 * @method void setBanExpiredTime(string $BanExpiredTime) Set Block expiration time (only valid for blocked events).
 * @method IPAnalyse getIPAnalyse() Obtain IP analysis
 * @method void setIPAnalyse(IPAnalyse $IPAnalyse) Set IP analysis
 */
class BruteAttackInfo extends AbstractModel
{
    /**
     * @var integer Unique ID
     */
    public $Id;

    /**
     * @var string CWP client UUID.
     */
    public $Uuid;

    /**
     * @var string Host IP address
     */
    public $MachineIp;

    /**
     * @var string host name
     */
    public $MachineName;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var string Source IP
     */
    public $SrcIp;

    /**
     * @var string SUCCESS: cracking successful; FAILED: cracking failed
     */
    public $Status;

    /**
     * @var integer Country/Region ID
     */
    public $Country;

    /**
     * @var integer City ID
     */
    public $City;

    /**
     * @var integer Province id
     */
    public $Province;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer 0 - No blocking (not supported by the client version)
1: blocked
2: Blocking failed (program exception)
3: No blocking (No blocking for the private network)
4: Availability zone does not support blocking
10: blocking
81: no blocking (blocking disabled)
82-No Blocking (Non-Pro Edition)
83: no blocking (added to the allowlist)
86: no blocking (system allowlist)
87: No blocking (client offline)
88-No blocking (Source Ip belongs to the same customer)
89: no blocking (blocking is not supported for ipv6)
     */
    public $BanStatus;

    /**
     * @var integer Event type: 200 - brute force cracking event; 300 - successful brute force cracking event (the status is displayed on the page); 400 - brute force cracking event for non-existent accounts.
     */
    public $EventType;

    /**
     * @var integer Occurrence count
     */
    public $Count;

    /**
     * @var string CVM instance UUID.
     */
    public $Quuid;

    /**
     * @var boolean Whether it is the Pro Edition (true/false)
     */
    public $IsProVersion;

    /**
     * @var string Username of the attacked service
     */
    public $Protocol;

    /**
     * @var integer Port
     */
    public $Port;

    /**
     * @var string Last attack time
     */
    public $ModifyTime;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer 0: pending; 1: ignored; 5: fixed; 6: added to allowlist
     */
    public $DataStatus;

    /**
     * @var MachineExtraInfo Additional information
     */
    public $MachineExtraInfo;

    /**
     * @var string Chinese name of a geo location.
     */
    public $Location;

    /**
     * @var integer Threat level. 0: low risk, 1: medium risk, 2: high risk.
     */
    public $RiskLevel;

    /**
     * @var integer Event source. 0: blocking rule, 1: threat intelligence.
     */
    public $DataFrom;

    /**
     * @var string Cracking status description.
     */
    public $AttackStatusDesc;

    /**
     * @var string Block expiration time (only valid for blocked events).
     */
    public $BanExpiredTime;

    /**
     * @var IPAnalyse IP analysis
     */
    public $IPAnalyse;

    /**
     * @param integer $Id Unique ID
     * @param string $Uuid CWP client UUID.
     * @param string $MachineIp Host IP address
     * @param string $MachineName host name
     * @param string $UserName Username.
     * @param string $SrcIp Source IP
     * @param string $Status SUCCESS: cracking successful; FAILED: cracking failed
     * @param integer $Country Country/Region ID
     * @param integer $City City ID
     * @param integer $Province Province id
     * @param string $CreateTime Creation time
     * @param integer $BanStatus 0 - No blocking (not supported by the client version)
1: blocked
2: Blocking failed (program exception)
3: No blocking (No blocking for the private network)
4: Availability zone does not support blocking
10: blocking
81: no blocking (blocking disabled)
82-No Blocking (Non-Pro Edition)
83: no blocking (added to the allowlist)
86: no blocking (system allowlist)
87: No blocking (client offline)
88-No blocking (Source Ip belongs to the same customer)
89: no blocking (blocking is not supported for ipv6)
     * @param integer $EventType Event type: 200 - brute force cracking event; 300 - successful brute force cracking event (the status is displayed on the page); 400 - brute force cracking event for non-existent accounts.
     * @param integer $Count Occurrence count
     * @param string $Quuid CVM instance UUID.
     * @param boolean $IsProVersion Whether it is the Pro Edition (true/false)
     * @param string $Protocol Username of the attacked service
     * @param integer $Port Port
     * @param string $ModifyTime Last attack time
     * @param string $InstanceId Instance ID
     * @param integer $DataStatus 0: pending; 1: ignored; 5: fixed; 6: added to allowlist
     * @param MachineExtraInfo $MachineExtraInfo Additional information
     * @param string $Location Chinese name of a geo location.
     * @param integer $RiskLevel Threat level. 0: low risk, 1: medium risk, 2: high risk.
     * @param integer $DataFrom Event source. 0: blocking rule, 1: threat intelligence.
     * @param string $AttackStatusDesc Cracking status description.
     * @param string $BanExpiredTime Block expiration time (only valid for blocked events).
     * @param IPAnalyse $IPAnalyse IP analysis
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DataStatus",$param) and $param["DataStatus"] !== null) {
            $this->DataStatus = $param["DataStatus"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("DataFrom",$param) and $param["DataFrom"] !== null) {
            $this->DataFrom = $param["DataFrom"];
        }

        if (array_key_exists("AttackStatusDesc",$param) and $param["AttackStatusDesc"] !== null) {
            $this->AttackStatusDesc = $param["AttackStatusDesc"];
        }

        if (array_key_exists("BanExpiredTime",$param) and $param["BanExpiredTime"] !== null) {
            $this->BanExpiredTime = $param["BanExpiredTime"];
        }

        if (array_key_exists("IPAnalyse",$param) and $param["IPAnalyse"] !== null) {
            $this->IPAnalyse = new IPAnalyse();
            $this->IPAnalyse->deserialize($param["IPAnalyse"]);
        }
    }
}
