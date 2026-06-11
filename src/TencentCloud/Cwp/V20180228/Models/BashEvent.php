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
 * High-risk command data
 *
 * @method integer getId() Obtain Data ID
 * @method void setId(integer $Id) Set Data ID
 * @method string getUuid() Obtain CWPP ID
 * @method void setUuid(string $Uuid) Set CWPP ID
 * @method string getQuuid() Obtain Server ID
 * @method void setQuuid(string $Quuid) Set Server ID
 * @method string getHostip() Obtain Host private IP address
 * @method void setHostip(string $Hostip) Set Host private IP address
 * @method string getUser() Obtain Username for execution
 * @method void setUser(string $User) Set Username for execution
 * @method integer getPlatform() Obtain Platform type
 * @method void setPlatform(integer $Platform) Set Platform type
 * @method string getBashCmd() Obtain Executed commands
 * @method void setBashCmd(string $BashCmd) Set Executed commands
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method integer getRuleLevel() Obtain Rule level: 1 - high-risk 2 - medium-risk; 3 - low-risk
 * @method void setRuleLevel(integer $RuleLevel) Set Rule level: 1 - high-risk 2 - medium-risk; 3 - low-risk
 * @method integer getStatus() Obtain Processing status: 0 - pending; 1 - processed; 2 - allowlisted; 3 - ignored
 * @method void setStatus(integer $Status) Set Processing status: 0 - pending; 1 - processed; 2 - allowlisted; 3 - ignored
 * @method string getCreateTime() Obtain Occurrence time
 * @method void setCreateTime(string $CreateTime) Set Occurrence time
 * @method string getMachineName() Obtain Server name
 * @method void setMachineName(string $MachineName) Set Server name
 * @method integer getDetectBy() Obtain 0: bash log; 1: real-time monitoring (Thunder Edition)
 * @method void setDetectBy(integer $DetectBy) Set 0: bash log; 1: real-time monitoring (Thunder Edition)
 * @method string getPid() Obtain Process id
 * @method void setPid(string $Pid) Set Process id
 * @method string getExe() Obtain Process name
 * @method void setExe(string $Exe) Set Process name
 * @method string getModifyTime() Obtain Processing time
 * @method void setModifyTime(string $ModifyTime) Set Processing time
 * @method integer getRuleCategory() Obtain Rule category. 0: system rule; 1: user rule
 * @method void setRuleCategory(integer $RuleCategory) Set Rule category. 0: system rule; 1: user rule
 * @method string getRegexBashCmd() Obtain Automatically generated regular expression
 * @method void setRegexBashCmd(string $RegexBashCmd) Set Automatically generated regular expression
 * @method string getHostName() Obtain Host name.
 * @method void setHostName(string $HostName) Set Host name.
 */
class BashEvent extends AbstractModel
{
    /**
     * @var integer Data ID
     */
    public $Id;

    /**
     * @var string CWPP ID
     */
    public $Uuid;

    /**
     * @var string Server ID
     */
    public $Quuid;

    /**
     * @var string Host private IP address
     */
    public $Hostip;

    /**
     * @var string Username for execution
     */
    public $User;

    /**
     * @var integer Platform type
     */
    public $Platform;

    /**
     * @var string Executed commands
     */
    public $BashCmd;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var integer Rule level: 1 - high-risk 2 - medium-risk; 3 - low-risk
     */
    public $RuleLevel;

    /**
     * @var integer Processing status: 0 - pending; 1 - processed; 2 - allowlisted; 3 - ignored
     */
    public $Status;

    /**
     * @var string Occurrence time
     */
    public $CreateTime;

    /**
     * @var string Server name
     */
    public $MachineName;

    /**
     * @var integer 0: bash log; 1: real-time monitoring (Thunder Edition)
     */
    public $DetectBy;

    /**
     * @var string Process id
     */
    public $Pid;

    /**
     * @var string Process name
     */
    public $Exe;

    /**
     * @var string Processing time
     */
    public $ModifyTime;

    /**
     * @var integer Rule category. 0: system rule; 1: user rule
     */
    public $RuleCategory;

    /**
     * @var string Automatically generated regular expression
     */
    public $RegexBashCmd;

    /**
     * @var string Host name.
     */
    public $HostName;

    /**
     * @param integer $Id Data ID
     * @param string $Uuid CWPP ID
     * @param string $Quuid Server ID
     * @param string $Hostip Host private IP address
     * @param string $User Username for execution
     * @param integer $Platform Platform type
     * @param string $BashCmd Executed commands
     * @param integer $RuleId Rule ID
     * @param string $RuleName Rule name
     * @param integer $RuleLevel Rule level: 1 - high-risk 2 - medium-risk; 3 - low-risk
     * @param integer $Status Processing status: 0 - pending; 1 - processed; 2 - allowlisted; 3 - ignored
     * @param string $CreateTime Occurrence time
     * @param string $MachineName Server name
     * @param integer $DetectBy 0: bash log; 1: real-time monitoring (Thunder Edition)
     * @param string $Pid Process id
     * @param string $Exe Process name
     * @param string $ModifyTime Processing time
     * @param integer $RuleCategory Rule category. 0: system rule; 1: user rule
     * @param string $RegexBashCmd Automatically generated regular expression
     * @param string $HostName Host name.
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

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("BashCmd",$param) and $param["BashCmd"] !== null) {
            $this->BashCmd = $param["BashCmd"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("DetectBy",$param) and $param["DetectBy"] !== null) {
            $this->DetectBy = $param["DetectBy"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }

        if (array_key_exists("RegexBashCmd",$param) and $param["RegexBashCmd"] !== null) {
            $this->RegexBashCmd = $param["RegexBashCmd"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }
    }
}
