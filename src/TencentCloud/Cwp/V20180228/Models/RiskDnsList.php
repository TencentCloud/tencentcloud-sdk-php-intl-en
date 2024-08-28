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
 * Malicious request list
 *
 * @method string getUrl() Obtain External access domain name
 * @method void setUrl(string $Url) Set External access domain name
 * @method integer getAccessCount() Obtain Access count
 * @method void setAccessCount(integer $AccessCount) Set Access count
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getProcessMd5() Obtain Process MD5
 * @method void setProcessMd5(string $ProcessMd5) Set Process MD5
 * @method integer getGlobalRuleId() Obtain Whether the rule is global. 0: no; 1: yes.
 * @method void setGlobalRuleId(integer $GlobalRuleId) Set Whether the rule is global. 0: no; 1: yes.
 * @method integer getUserRuleId() Obtain User rule ID
 * @method void setUserRuleId(integer $UserRuleId) Set User rule ID
 * @method integer getStatus() Obtain Status. 0: pending; 2: added to allowlist; 3: untrusted; 4: processed; 5: ignored.
 * @method void setStatus(integer $Status) Set Status. 0: pending; 2: added to allowlist; 3: untrusted; 4: processed; 5: ignored.
 * @method string getCreateTime() Obtain First access time
 * @method void setCreateTime(string $CreateTime) Set First access time
 * @method string getMergeTime() Obtain Last access Time
 * @method void setMergeTime(string $MergeTime) Set Last access Time
 * @method string getQuuid() Obtain Unique QUUID
 * @method void setQuuid(string $Quuid) Set Unique QUUID
 * @method string getHostIp() Obtain Host IP
 * @method void setHostIp(string $HostIp) Set Host IP
 * @method string getAlias() Obtain Alias
 * @method void setAlias(string $Alias) Set Alias
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method integer getId() Obtain Unique ID
 * @method void setId(integer $Id) Set Unique ID
 * @method string getReference() Obtain Reference
 * @method void setReference(string $Reference) Set Reference
 * @method string getCmdLine() Obtain Command line
 * @method void setCmdLine(string $CmdLine) Set Command line
 * @method integer getPid() Obtain Process ID
 * @method void setPid(integer $Pid) Set Process ID
 * @method string getUuid() Obtain UUID
 * @method void setUuid(string $Uuid) Set UUID
 * @method string getSuggestScheme() Obtain Recommended solution
 * @method void setSuggestScheme(string $SuggestScheme) Set Recommended solution
 * @method array getTags() Obtain Tag Features
 * @method void setTags(array $Tags) Set Tag Features
 * @method string getMachineWanIp() Obtain Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineStatus() Obtain Host online status. OFFLINE: offline; ONLINE: online; UNKNOWN: unknown.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineStatus(string $MachineStatus) Set Host online status. OFFLINE: offline; ONLINE: online; UNKNOWN: unknown.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RiskDnsList extends AbstractModel
{
    /**
     * @var string External access domain name
     */
    public $Url;

    /**
     * @var integer Access count
     */
    public $AccessCount;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Process MD5
     */
    public $ProcessMd5;

    /**
     * @var integer Whether the rule is global. 0: no; 1: yes.
     */
    public $GlobalRuleId;

    /**
     * @var integer User rule ID
     */
    public $UserRuleId;

    /**
     * @var integer Status. 0: pending; 2: added to allowlist; 3: untrusted; 4: processed; 5: ignored.
     */
    public $Status;

    /**
     * @var string First access time
     */
    public $CreateTime;

    /**
     * @var string Last access Time
     */
    public $MergeTime;

    /**
     * @var string Unique QUUID
     */
    public $Quuid;

    /**
     * @var string Host IP
     */
    public $HostIp;

    /**
     * @var string Alias
     */
    public $Alias;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var integer Unique ID
     */
    public $Id;

    /**
     * @var string Reference
     */
    public $Reference;

    /**
     * @var string Command line
     */
    public $CmdLine;

    /**
     * @var integer Process ID
     */
    public $Pid;

    /**
     * @var string UUID
     */
    public $Uuid;

    /**
     * @var string Recommended solution
     */
    public $SuggestScheme;

    /**
     * @var array Tag Features
     */
    public $Tags;

    /**
     * @var string Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineWanIp;

    /**
     * @var string Host online status. OFFLINE: offline; ONLINE: online; UNKNOWN: unknown.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineStatus;

    /**
     * @param string $Url External access domain name
     * @param integer $AccessCount Access count
     * @param string $ProcessName Process name
     * @param string $ProcessMd5 Process MD5
     * @param integer $GlobalRuleId Whether the rule is global. 0: no; 1: yes.
     * @param integer $UserRuleId User rule ID
     * @param integer $Status Status. 0: pending; 2: added to allowlist; 3: untrusted; 4: processed; 5: ignored.
     * @param string $CreateTime First access time
     * @param string $MergeTime Last access Time
     * @param string $Quuid Unique QUUID
     * @param string $HostIp Host IP
     * @param string $Alias Alias
     * @param string $Description Description
     * @param integer $Id Unique ID
     * @param string $Reference Reference
     * @param string $CmdLine Command line
     * @param integer $Pid Process ID
     * @param string $Uuid UUID
     * @param string $SuggestScheme Recommended solution
     * @param array $Tags Tag Features
     * @param string $MachineWanIp Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineStatus Host online status. OFFLINE: offline; ONLINE: online; UNKNOWN: unknown.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AccessCount",$param) and $param["AccessCount"] !== null) {
            $this->AccessCount = $param["AccessCount"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("GlobalRuleId",$param) and $param["GlobalRuleId"] !== null) {
            $this->GlobalRuleId = $param["GlobalRuleId"];
        }

        if (array_key_exists("UserRuleId",$param) and $param["UserRuleId"] !== null) {
            $this->UserRuleId = $param["UserRuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }
    }
}
