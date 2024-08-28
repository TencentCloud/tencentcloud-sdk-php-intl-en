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
 * Malicious request event
 *
 * @method integer getId() Obtain Event ID
 * @method void setId(integer $Id) Set Event ID
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method integer getPolicyType() Obtain Type of hit policy [-1: unknown|0: system|1: user]
 * @method void setPolicyType(integer $PolicyType) Set Type of hit policy [-1: unknown|0: system|1: user]
 * @method string getPolicyName() Obtain Name of hit policy
 * @method void setPolicyName(string $PolicyName) Set Name of hit policy
 * @method integer getProtectLevel() Obtain Protection level [0: basic edition|1: professional edition|2: ultimate edition]
 * @method void setProtectLevel(integer $ProtectLevel) Set Protection level [0: basic edition|1: professional edition|2: ultimate edition]
 * @method string getHostId() Obtain Server ID
 * @method void setHostId(string $HostId) Set Server ID
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method string getHostIp() Obtain Host IP
 * @method void setHostIp(string $HostIp) Set Host IP
 * @method string getWanIp() Obtain Public IP address
 * @method void setWanIp(string $WanIp) Set Public IP address
 * @method string getAgentId() Obtain Client ID
 * @method void setAgentId(string $AgentId) Set Client ID
 * @method string getDomain() Obtain Access domain name
 * @method void setDomain(string $Domain) Set Access domain name
 * @method array getTags() Obtain Tag Features
 * @method void setTags(array $Tags) Set Tag Features
 * @method integer getAccessCount() Obtain Access count
 * @method void setAccessCount(integer $AccessCount) Set Access count
 * @method string getThreatDesc() Obtain Threat description
 * @method void setThreatDesc(string $ThreatDesc) Set Threat description
 * @method string getSuggestSolution() Obtain Fixing solution
 * @method void setSuggestSolution(string $SuggestSolution) Set Fixing solution
 * @method string getReferenceLink() Obtain Reference link
 * @method void setReferenceLink(string $ReferenceLink) Set Reference link
 * @method integer getHandleStatus() Obtain Processing status [0: pending|2: allowlisted|3: untrusted status|4: processed|5: ignored]
 * @method void setHandleStatus(integer $HandleStatus) Set Processing status [0: pending|2: allowlisted|3: untrusted status|4: processed|5: ignored]
 * @method integer getPid() Obtain Process ID
 * @method void setPid(integer $Pid) Set Process ID
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getProcessMd5() Obtain Process MD5
 * @method void setProcessMd5(string $ProcessMd5) Set Process MD5
 * @method string getCmdLine() Obtain Command line
 * @method void setCmdLine(string $CmdLine) Set Command line
 * @method string getFirstTime() Obtain First access time
 * @method void setFirstTime(string $FirstTime) Set First access time
 * @method string getLastTime() Obtain Last access Time
 * @method void setLastTime(string $LastTime) Set Last access Time
 * @method string getHostStatus() Obtain Host online status [OFFLINE: offline|ONLINE: online|UNKNOWN: unknown]
 * @method void setHostStatus(string $HostStatus) Set Host online status [OFFLINE: offline|ONLINE: online|UNKNOWN: unknown]
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOsType() Obtain [1:CentOS|2:Debian|3:Gentoo|4:Redhat|5:Ubuntu|6:Windows|7:TencentOS|8:CoreOS|9:FreeBSD|10:SUSE]
 * @method void setOsType(integer $OsType) Set [1:CentOS|2:Debian|3:Gentoo|4:Redhat|5:Ubuntu|6:Windows|7:TencentOS|8:CoreOS|9:FreeBSD|10:SUSE]
 */
class RiskDnsEvent extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $Id;

    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var integer Type of hit policy [-1: unknown|0: system|1: user]
     */
    public $PolicyType;

    /**
     * @var string Name of hit policy
     */
    public $PolicyName;

    /**
     * @var integer Protection level [0: basic edition|1: professional edition|2: ultimate edition]
     */
    public $ProtectLevel;

    /**
     * @var string Server ID
     */
    public $HostId;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var string Host IP
     */
    public $HostIp;

    /**
     * @var string Public IP address
     */
    public $WanIp;

    /**
     * @var string Client ID
     */
    public $AgentId;

    /**
     * @var string Access domain name
     */
    public $Domain;

    /**
     * @var array Tag Features
     */
    public $Tags;

    /**
     * @var integer Access count
     */
    public $AccessCount;

    /**
     * @var string Threat description
     */
    public $ThreatDesc;

    /**
     * @var string Fixing solution
     */
    public $SuggestSolution;

    /**
     * @var string Reference link
     */
    public $ReferenceLink;

    /**
     * @var integer Processing status [0: pending|2: allowlisted|3: untrusted status|4: processed|5: ignored]
     */
    public $HandleStatus;

    /**
     * @var integer Process ID
     */
    public $Pid;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Process MD5
     */
    public $ProcessMd5;

    /**
     * @var string Command line
     */
    public $CmdLine;

    /**
     * @var string First access time
     */
    public $FirstTime;

    /**
     * @var string Last access Time
     */
    public $LastTime;

    /**
     * @var string Host online status [OFFLINE: offline|ONLINE: online|UNKNOWN: unknown]
     */
    public $HostStatus;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var integer [1:CentOS|2:Debian|3:Gentoo|4:Redhat|5:Ubuntu|6:Windows|7:TencentOS|8:CoreOS|9:FreeBSD|10:SUSE]
     */
    public $OsType;

    /**
     * @param integer $Id Event ID
     * @param integer $PolicyId Policy ID
     * @param integer $PolicyType Type of hit policy [-1: unknown|0: system|1: user]
     * @param string $PolicyName Name of hit policy
     * @param integer $ProtectLevel Protection level [0: basic edition|1: professional edition|2: ultimate edition]
     * @param string $HostId Server ID
     * @param string $HostName Host name
     * @param string $HostIp Host IP
     * @param string $WanIp Public IP address
     * @param string $AgentId Client ID
     * @param string $Domain Access domain name
     * @param array $Tags Tag Features
     * @param integer $AccessCount Access count
     * @param string $ThreatDesc Threat description
     * @param string $SuggestSolution Fixing solution
     * @param string $ReferenceLink Reference link
     * @param integer $HandleStatus Processing status [0: pending|2: allowlisted|3: untrusted status|4: processed|5: ignored]
     * @param integer $Pid Process ID
     * @param string $ProcessName Process name
     * @param string $ProcessMd5 Process MD5
     * @param string $CmdLine Command line
     * @param string $FirstTime First access time
     * @param string $LastTime Last access Time
     * @param string $HostStatus Host online status [OFFLINE: offline|ONLINE: online|UNKNOWN: unknown]
     * @param MachineExtraInfo $MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OsType [1:CentOS|2:Debian|3:Gentoo|4:Redhat|5:Ubuntu|6:Windows|7:TencentOS|8:CoreOS|9:FreeBSD|10:SUSE]
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("ProtectLevel",$param) and $param["ProtectLevel"] !== null) {
            $this->ProtectLevel = $param["ProtectLevel"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("AccessCount",$param) and $param["AccessCount"] !== null) {
            $this->AccessCount = $param["AccessCount"];
        }

        if (array_key_exists("ThreatDesc",$param) and $param["ThreatDesc"] !== null) {
            $this->ThreatDesc = $param["ThreatDesc"];
        }

        if (array_key_exists("SuggestSolution",$param) and $param["SuggestSolution"] !== null) {
            $this->SuggestSolution = $param["SuggestSolution"];
        }

        if (array_key_exists("ReferenceLink",$param) and $param["ReferenceLink"] !== null) {
            $this->ReferenceLink = $param["ReferenceLink"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("HostStatus",$param) and $param["HostStatus"] !== null) {
            $this->HostStatus = $param["HostStatus"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }
    }
}
