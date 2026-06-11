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
 * Log-in audit list entity
 *
 * @method integer getId() Obtain Record ID
 * @method void setId(integer $Id) Set Record ID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getMachineIp() Obtain Host IP address
 * @method void setMachineIp(string $MachineIp) Set Host IP address
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getSrcIp() Obtain Source IP
 * @method void setSrcIp(string $SrcIp) Set Source IP
 * @method integer getStatus() Obtain 1: normal log-in; 2: cross-region log-in; 5: allowlisted; 14: processed; 15: ignored
 * @method void setStatus(integer $Status) Set 1: normal log-in; 2: cross-region log-in; 5: allowlisted; 14: processed; 15: ignored
 * @method integer getCountry() Obtain Country/Region ID
 * @method void setCountry(integer $Country) Set Country/Region ID
 * @method integer getCity() Obtain City ID
 * @method void setCity(integer $City) Set City ID
 * @method integer getProvince() Obtain Province id
 * @method void setProvince(integer $Province) Set Province id
 * @method string getLoginTime() Obtain Log-in time
 * @method void setLoginTime(string $LoginTime) Set Log-in time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method integer getIsRiskArea() Obtain Whether hit the exception of cross-region log-in: 1 means hit the exception, 0 means not hit
 * @method void setIsRiskArea(integer $IsRiskArea) Set Whether hit the exception of cross-region log-in: 1 means hit the exception, 0 means not hit
 * @method integer getIsRiskUser() Obtain Whether hit the exception of abnormal user: 1: yes; 0: no
 * @method void setIsRiskUser(integer $IsRiskUser) Set Whether hit the exception of abnormal user: 1: yes; 0: no
 * @method integer getIsRiskTime() Obtain Whether hit the exception of abnormal time: 1: yes; 0: no
 * @method void setIsRiskTime(integer $IsRiskTime) Set Whether hit the exception of abnormal time: 1: yes; 0: no
 * @method integer getIsRiskSrcIp() Obtain Whether hit the exception of abnormal IP: 1: yes; 0: no
 * @method void setIsRiskSrcIp(integer $IsRiskSrcIp) Set Whether hit the exception of abnormal IP: 1: yes; 0: no
 * @method integer getRiskLevel() Obtain Risk level:
0: high risk
1: Suspicious
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level:
0: high risk
1: Suspicious
 * @method string getLocation() Obtain Location name
 * @method void setLocation(string $Location) Set Location name
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getDesc() Obtain High-risk information description:
ABROAD - IP outside Chinese mainland
XTI - Threat Intelligence
 * @method void setDesc(string $Desc) Set High-risk information description:
ABROAD - IP outside Chinese mainland
XTI - Threat Intelligence
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
 * @method integer getPort() Obtain Request destination port.
 * @method void setPort(integer $Port) Set Request destination port.
 * @method IPAnalyse getIPAnalyse() Obtain ip analysis
 * @method void setIPAnalyse(IPAnalyse $IPAnalyse) Set ip analysis
 */
class HostLoginList extends AbstractModel
{
    /**
     * @var integer Record ID
     */
    public $Id;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Host IP address
     */
    public $MachineIp;

    /**
     * @var string Host name
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
     * @var integer 1: normal log-in; 2: cross-region log-in; 5: allowlisted; 14: processed; 15: ignored
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
     * @var string Log-in time
     */
    public $LoginTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var integer Whether hit the exception of cross-region log-in: 1 means hit the exception, 0 means not hit
     */
    public $IsRiskArea;

    /**
     * @var integer Whether hit the exception of abnormal user: 1: yes; 0: no
     */
    public $IsRiskUser;

    /**
     * @var integer Whether hit the exception of abnormal time: 1: yes; 0: no
     */
    public $IsRiskTime;

    /**
     * @var integer Whether hit the exception of abnormal IP: 1: yes; 0: no
     */
    public $IsRiskSrcIp;

    /**
     * @var integer Risk level:
0: high risk
1: Suspicious
     */
    public $RiskLevel;

    /**
     * @var string Location name
     */
    public $Location;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string High-risk information description:
ABROAD - IP outside Chinese mainland
XTI - Threat Intelligence
     */
    public $Desc;

    /**
     * @var MachineExtraInfo Additional information
     */
    public $MachineExtraInfo;

    /**
     * @var integer Request destination port.
     */
    public $Port;

    /**
     * @var IPAnalyse ip analysis
     */
    public $IPAnalyse;

    /**
     * @param integer $Id Record ID
     * @param string $Uuid Host UUID
     * @param string $MachineIp Host IP address
     * @param string $MachineName Host name
     * @param string $UserName Username.
     * @param string $SrcIp Source IP
     * @param integer $Status 1: normal log-in; 2: cross-region log-in; 5: allowlisted; 14: processed; 15: ignored
     * @param integer $Country Country/Region ID
     * @param integer $City City ID
     * @param integer $Province Province id
     * @param string $LoginTime Log-in time
     * @param string $ModifyTime Modification time
     * @param integer $IsRiskArea Whether hit the exception of cross-region log-in: 1 means hit the exception, 0 means not hit
     * @param integer $IsRiskUser Whether hit the exception of abnormal user: 1: yes; 0: no
     * @param integer $IsRiskTime Whether hit the exception of abnormal time: 1: yes; 0: no
     * @param integer $IsRiskSrcIp Whether hit the exception of abnormal IP: 1: yes; 0: no
     * @param integer $RiskLevel Risk level:
0: high risk
1: Suspicious
     * @param string $Location Location name
     * @param string $Quuid Host QUUID
     * @param string $Desc High-risk information description:
ABROAD - IP outside Chinese mainland
XTI - Threat Intelligence
     * @param MachineExtraInfo $MachineExtraInfo Additional information
     * @param integer $Port Request destination port.
     * @param IPAnalyse $IPAnalyse ip analysis
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

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IsRiskArea",$param) and $param["IsRiskArea"] !== null) {
            $this->IsRiskArea = $param["IsRiskArea"];
        }

        if (array_key_exists("IsRiskUser",$param) and $param["IsRiskUser"] !== null) {
            $this->IsRiskUser = $param["IsRiskUser"];
        }

        if (array_key_exists("IsRiskTime",$param) and $param["IsRiskTime"] !== null) {
            $this->IsRiskTime = $param["IsRiskTime"];
        }

        if (array_key_exists("IsRiskSrcIp",$param) and $param["IsRiskSrcIp"] !== null) {
            $this->IsRiskSrcIp = $param["IsRiskSrcIp"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("IPAnalyse",$param) and $param["IPAnalyse"] !== null) {
            $this->IPAnalyse = new IPAnalyse();
            $this->IPAnalyse->deserialize($param["IPAnalyse"]);
        }
    }
}
