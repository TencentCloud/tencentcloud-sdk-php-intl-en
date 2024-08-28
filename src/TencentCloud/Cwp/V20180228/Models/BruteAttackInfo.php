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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Password cracking list entity
 *
 * @method integer getId() Obtain Unique ID
 * @method void setId(integer $Id) Set Unique ID
 * @method string getUuid() Obtain CWPP client UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set CWPP client UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineIp() Obtain Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineIp(string $MachineIp) Set Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineName(string $MachineName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcIp() Obtain Source IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcIp(string $SrcIp) Set Source IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain SUCCESS: cracking successful; FAILED: cracking failed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set SUCCESS: cracking successful; FAILED: cracking failed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCountry() Obtain Country/Region ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCountry(integer $Country) Set Country/Region ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCity() Obtain City ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCity(integer $City) Set City ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProvince() Obtain Province ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProvince(integer $Province) Set Province ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBanStatus() Obtain 0: no blocking (not supported for the client version)1: blocked
2: blocking failed (program exception)
3: no blocking (do not block for the private network)
4: availability zone does not support blocking
10: blocking
81: no blocking (blocking disabled)
82: no blocking (non-Pro Edition)
83: no blocking (added to the allowlist)
86: no blocking (system allowlist)
87: no blocking (client offline)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBanStatus(integer $BanStatus) Set 0: no blocking (not supported for the client version)1: blocked
2: blocking failed (program exception)
3: no blocking (do not block for the private network)
4: availability zone does not support blocking
10: blocking
81: no blocking (blocking disabled)
82: no blocking (non-Pro Edition)
83: no blocking (added to the allowlist)
86: no blocking (system allowlist)
87: no blocking (client offline)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEventType() Obtain Event type. 200: brute force cracking event; 300: event of successful brute force cracking (page display); 400: event of brute force cracking on a non-existent account.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventType(integer $EventType) Set Event type. 200: brute force cracking event; 300: event of successful brute force cracking (page display); 400: event of brute force cracking on a non-existent account.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Occurrence count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Occurrence count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuuid() Obtain Machine UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Machine UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsProVersion() Obtain Whether it is of the Pro Edition (true/false)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsProVersion(boolean $IsProVersion) Set Whether it is of the Pro Edition (true/false)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Username of the attacked service
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Username of the attacked service
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Last attack time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Last attack time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDataStatus() Obtain 0: pending; 1: ignored; 5: fixed; 6: added to allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataStatus(integer $DataStatus) Set 0: pending; 1: ignored; 5: fixed; 6: added to allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocation() Obtain Geo-location in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(string $Location) Set Geo-location in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskLevel() Obtain Threat level. 0: low-risk; 1: medium-risk; 2: high-risk.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(integer $RiskLevel) Set Threat level. 0: low-risk; 1: medium-risk; 2: high-risk.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDataFrom() Obtain Event source. 0: blocking rule; 1: threat intelligence.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataFrom(integer $DataFrom) Set Event source. 0: blocking rule; 1: threat intelligence.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackStatusDesc() Obtain Description of the brute force cracking status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackStatusDesc(string $AttackStatusDesc) Set Description of the brute force cracking status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBanExpiredTime() Obtain Blocking expiration time (valid only for events in blocking status)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBanExpiredTime(string $BanExpiredTime) Set Blocking expiration time (valid only for events in blocking status)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BruteAttackInfo extends AbstractModel
{
    /**
     * @var integer Unique ID
     */
    public $Id;

    /**
     * @var string CWPP client UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var string Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineIp;

    /**
     * @var string Host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineName;

    /**
     * @var string Username
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Source IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcIp;

    /**
     * @var string SUCCESS: cracking successful; FAILED: cracking failed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Country/Region ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Country;

    /**
     * @var integer City ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $City;

    /**
     * @var integer Province ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Province;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer 0: no blocking (not supported for the client version)1: blocked
2: blocking failed (program exception)
3: no blocking (do not block for the private network)
4: availability zone does not support blocking
10: blocking
81: no blocking (blocking disabled)
82: no blocking (non-Pro Edition)
83: no blocking (added to the allowlist)
86: no blocking (system allowlist)
87: no blocking (client offline)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BanStatus;

    /**
     * @var integer Event type. 200: brute force cracking event; 300: event of successful brute force cracking (page display); 400: event of brute force cracking on a non-existent account.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventType;

    /**
     * @var integer Occurrence count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @var string Machine UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var boolean Whether it is of the Pro Edition (true/false)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsProVersion;

    /**
     * @var string Username of the attacked service
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var integer Port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Last attack time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer 0: pending; 1: ignored; 5: fixed; 6: added to allowlist
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataStatus;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var string Geo-location in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var integer Threat level. 0: low-risk; 1: medium-risk; 2: high-risk.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var integer Event source. 0: blocking rule; 1: threat intelligence.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataFrom;

    /**
     * @var string Description of the brute force cracking status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackStatusDesc;

    /**
     * @var string Blocking expiration time (valid only for events in blocking status)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BanExpiredTime;

    /**
     * @param integer $Id Unique ID
     * @param string $Uuid CWPP client UUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineIp Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineName Host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcIp Source IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status SUCCESS: cracking successful; FAILED: cracking failed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Country Country/Region ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $City City ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Province Province ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BanStatus 0: no blocking (not supported for the client version)1: blocked
2: blocking failed (program exception)
3: no blocking (do not block for the private network)
4: availability zone does not support blocking
10: blocking
81: no blocking (blocking disabled)
82: no blocking (non-Pro Edition)
83: no blocking (added to the allowlist)
86: no blocking (system allowlist)
87: no blocking (client offline)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EventType Event type. 200: brute force cracking event; 300: event of successful brute force cracking (page display); 400: event of brute force cracking on a non-existent account.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Occurrence count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quuid Machine UUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsProVersion Whether it is of the Pro Edition (true/false)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Username of the attacked service
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Last attack time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DataStatus 0: pending; 1: ignored; 5: fixed; 6: added to allowlist
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachineExtraInfo $MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Location Geo-location in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskLevel Threat level. 0: low-risk; 1: medium-risk; 2: high-risk.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DataFrom Event source. 0: blocking rule; 1: threat intelligence.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackStatusDesc Description of the brute force cracking status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BanExpiredTime Blocking expiration time (valid only for events in blocking status)
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
