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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Matchmaking information
 *
 * @method string getMatchCode() Obtain MatchCode
 * @method void setMatchCode(string $MatchCode) Set MatchCode
 * @method string getMatchName() Obtain Match name
 * @method void setMatchName(string $MatchName) Set Match name
 * @method string getMatchDesc() Obtain Matchmaking description
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setMatchDesc(string $MatchDesc) Set Matchmaking description
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRuleCode() Obtain RuleCode
 * @method void setRuleCode(string $RuleCode) Set RuleCode
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getTimeout() Obtain Timeout period
 * @method void setTimeout(integer $Timeout) Set Timeout period
 * @method string getNotifyUrl() Obtain Receiving notification address
 * @method void setNotifyUrl(string $NotifyUrl) Set Receiving notification address
 * @method integer getServerType() Obtain Whether to request server resources for the match results. 0: no, 1: request GSE resources
 * @method void setServerType(integer $ServerType) Set Whether to request server resources for the match results. 0: no, 1: request GSE resources
 * @method string getServerRegion() Obtain Region of the server queue
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setServerRegion(string $ServerRegion) Set Region of the server queue
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getServerQueue() Obtain Server queue
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setServerQueue(string $ServerQueue) Set Server queue
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getCustomPushData() Obtain Custom push data
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setCustomPushData(string $CustomPushData) Set Custom push data
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getServerSessionData() Obtain Game server session data
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setServerSessionData(string $ServerSessionData) Set Game server session data
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getGameProperties() Obtain Game attributes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setGameProperties(array $GameProperties) Set Game attributes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getLogSwitch() Obtain Enable or disable the log. 0: disable, 1: enable
 * @method void setLogSwitch(integer $LogSwitch) Set Enable or disable the log. 0: disable, 1: enable
 * @method string getLogsetId() Obtain Logset ID
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLogsetId(string $LogsetId) Set Logset ID
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getLogsetName() Obtain Logset name
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLogsetName(string $LogsetName) Set Logset name
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getLogTopicId() Obtain Log topic ID
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLogTopicId(string $LogTopicId) Set Log topic ID
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getLogTopicName() Obtain Log topic name
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLogTopicName(string $LogTopicName) Set Log topic name
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getTags() Obtain Tag
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setTags(array $Tags) Set Tag
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRegion() Obtain Region
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRegion(string $Region) Set Region
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getAppId() Obtain User AppId
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setAppId(string $AppId) Set User AppId
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getUin() Obtain User root account UIN
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setUin(string $Uin) Set User root account UIN
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getCreateUin() Obtain Create user account UIN
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setCreateUin(string $CreateUin) Set Create user account UIN
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRuleName() Obtain Rule Name
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRuleName(string $RuleName) Set Rule Name
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getLogStatus() Obtain Log status. 0: normal, 1: the log set does not exist, 2: the log topic does not exist, 3: neither the log set nor the log topic exists.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLogStatus(integer $LogStatus) Set Log status. 0: normal, 1: the log set does not exist, 2: the log topic does not exist, 3: neither the log set nor the log topic exists.
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class MatchInfo extends AbstractModel
{
    /**
     * @var string MatchCode
     */
    public $MatchCode;

    /**
     * @var string Match name
     */
    public $MatchName;

    /**
     * @var string Matchmaking description
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $MatchDesc;

    /**
     * @var string RuleCode
     */
    public $RuleCode;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Timeout period
     */
    public $Timeout;

    /**
     * @var string Receiving notification address
     */
    public $NotifyUrl;

    /**
     * @var integer Whether to request server resources for the match results. 0: no, 1: request GSE resources
     */
    public $ServerType;

    /**
     * @var string Region of the server queue
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ServerRegion;

    /**
     * @var string Server queue
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ServerQueue;

    /**
     * @var string Custom push data
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $CustomPushData;

    /**
     * @var string Game server session data
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ServerSessionData;

    /**
     * @var array Game attributes
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $GameProperties;

    /**
     * @var integer Enable or disable the log. 0: disable, 1: enable
     */
    public $LogSwitch;

    /**
     * @var string Logset ID
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LogsetId;

    /**
     * @var string Logset name
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LogsetName;

    /**
     * @var string Log topic ID
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LogTopicId;

    /**
     * @var string Log topic name
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LogTopicName;

    /**
     * @var array Tag
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Tags;

    /**
     * @var string Region
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Region;

    /**
     * @var string User AppId
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $AppId;

    /**
     * @var string User root account UIN
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Uin;

    /**
     * @var string Create user account UIN
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $CreateUin;

    /**
     * @var string Rule Name
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $RuleName;

    /**
     * @var integer Log status. 0: normal, 1: the log set does not exist, 2: the log topic does not exist, 3: neither the log set nor the log topic exists.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LogStatus;

    /**
     * @param string $MatchCode MatchCode
     * @param string $MatchName Match name
     * @param string $MatchDesc Matchmaking description
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $RuleCode RuleCode
     * @param string $CreateTime Creation time
     * @param integer $Timeout Timeout period
     * @param string $NotifyUrl Receiving notification address
     * @param integer $ServerType Whether to request server resources for the match results. 0: no, 1: request GSE resources
     * @param string $ServerRegion Region of the server queue
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $ServerQueue Server queue
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $CustomPushData Custom push data
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $ServerSessionData Game server session data
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $GameProperties Game attributes
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $LogSwitch Enable or disable the log. 0: disable, 1: enable
     * @param string $LogsetId Logset ID
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $LogsetName Logset name
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $LogTopicId Log topic ID
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $LogTopicName Log topic name
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $Tags Tag
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $Region Region
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $AppId User AppId
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $Uin User root account UIN
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $CreateUin Create user account UIN
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $RuleName Rule Name
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $LogStatus Log status. 0: normal, 1: the log set does not exist, 2: the log topic does not exist, 3: neither the log set nor the log topic exists.
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }

        if (array_key_exists("MatchName",$param) and $param["MatchName"] !== null) {
            $this->MatchName = $param["MatchName"];
        }

        if (array_key_exists("MatchDesc",$param) and $param["MatchDesc"] !== null) {
            $this->MatchDesc = $param["MatchDesc"];
        }

        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("ServerRegion",$param) and $param["ServerRegion"] !== null) {
            $this->ServerRegion = $param["ServerRegion"];
        }

        if (array_key_exists("ServerQueue",$param) and $param["ServerQueue"] !== null) {
            $this->ServerQueue = $param["ServerQueue"];
        }

        if (array_key_exists("CustomPushData",$param) and $param["CustomPushData"] !== null) {
            $this->CustomPushData = $param["CustomPushData"];
        }

        if (array_key_exists("ServerSessionData",$param) and $param["ServerSessionData"] !== null) {
            $this->ServerSessionData = $param["ServerSessionData"];
        }

        if (array_key_exists("GameProperties",$param) and $param["GameProperties"] !== null) {
            $this->GameProperties = [];
            foreach ($param["GameProperties"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->GameProperties, $obj);
            }
        }

        if (array_key_exists("LogSwitch",$param) and $param["LogSwitch"] !== null) {
            $this->LogSwitch = $param["LogSwitch"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("LogTopicName",$param) and $param["LogTopicName"] !== null) {
            $this->LogTopicName = $param["LogTopicName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("LogStatus",$param) and $param["LogStatus"] !== null) {
            $this->LogStatus = $param["LogStatus"];
        }
    }
}
