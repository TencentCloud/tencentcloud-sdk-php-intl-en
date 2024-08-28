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
 * Log-in audit list entity
 *
 * @method integer getId() Obtain Record ID
 * @method void setId(integer $Id) Set Record ID
 * @method string getUuid() Obtain UUID string
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set UUID string
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineIp() Obtain Host IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineIp(string $MachineIp) Set Host IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineName(string $MachineName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcIp() Obtain Source IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcIp(string $SrcIp) Set Source IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain 1: normal log-in; 2: cross-region log-in; 5: allowlisted; 14: processed; 15: ignored
 * @method void setStatus(integer $Status) Set 1: normal log-in; 2: cross-region log-in; 5: allowlisted; 14: processed; 15: ignored
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
 * @method string getLoginTime() Obtain Log-in time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoginTime(string $LoginTime) Set Log-in time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsRiskArea() Obtain Whether hit the exception of cross-region log-in: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsRiskArea(integer $IsRiskArea) Set Whether hit the exception of cross-region log-in: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsRiskUser() Obtain Whether hit the exception of abnormal user: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsRiskUser(integer $IsRiskUser) Set Whether hit the exception of abnormal user: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsRiskTime() Obtain Whether hit the exception of abnormal time: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsRiskTime(integer $IsRiskTime) Set Whether hit the exception of abnormal time: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsRiskSrcIp() Obtain Whether hit the exception of abnormal IP: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsRiskSrcIp(integer $IsRiskSrcIp) Set Whether hit the exception of abnormal IP: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskLevel() Obtain Risk level:
0: high
1: suspicious
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level:
0: high
1: suspicious
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocation() Obtain Location name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(string $Location) Set Location name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuuid() Obtain Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDesc() Obtain High-risk information description:
ABROAD - overseas IP
XTI - threat intelligence
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDesc(string $Desc) Set High-risk information description:
ABROAD - overseas IP
XTI - threat intelligence
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Request destination port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Request destination port
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HostLoginList extends AbstractModel
{
    /**
     * @var integer Record ID
     */
    public $Id;

    /**
     * @var string UUID string
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var string Host IP
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
     * @var string Source IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcIp;

    /**
     * @var integer 1: normal log-in; 2: cross-region log-in; 5: allowlisted; 14: processed; 15: ignored
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
     * @var string Log-in time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoginTime;

    /**
     * @var string Modification time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var integer Whether hit the exception of cross-region log-in: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsRiskArea;

    /**
     * @var integer Whether hit the exception of abnormal user: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsRiskUser;

    /**
     * @var integer Whether hit the exception of abnormal time: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsRiskTime;

    /**
     * @var integer Whether hit the exception of abnormal IP: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsRiskSrcIp;

    /**
     * @var integer Risk level:
0: high
1: suspicious
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var string Location name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var string Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var string High-risk information description:
ABROAD - overseas IP
XTI - threat intelligence
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Desc;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var integer Request destination port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @param integer $Id Record ID
     * @param string $Uuid UUID string
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineIp Host IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineName Host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcIp Source IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status 1: normal log-in; 2: cross-region log-in; 5: allowlisted; 14: processed; 15: ignored
     * @param integer $Country Country/Region ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $City City ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Province Province ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoginTime Log-in time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Modification time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsRiskArea Whether hit the exception of cross-region log-in: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsRiskUser Whether hit the exception of abnormal user: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsRiskTime Whether hit the exception of abnormal time: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsRiskSrcIp Whether hit the exception of abnormal IP: 1: yes; 0: no
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskLevel Risk level:
0: high
1: suspicious
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Location Location name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quuid Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Desc High-risk information description:
ABROAD - overseas IP
XTI - threat intelligence
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachineExtraInfo $MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Request destination port
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
    }
}
