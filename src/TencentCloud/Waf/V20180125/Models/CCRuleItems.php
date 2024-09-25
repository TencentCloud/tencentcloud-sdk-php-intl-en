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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CC rule details
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method integer getAdvance() Obtain Mode
 * @method void setAdvance(integer $Advance) Set Mode
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method integer getInterval() Obtain Detection interval
 * @method void setInterval(integer $Interval) Set Detection interval
 * @method string getUrl() Obtain URL
 * @method void setUrl(string $Url) Set URL
 * @method integer getMatchFunc() Obtain Type to match
 * @method void setMatchFunc(integer $MatchFunc) Set Type to match
 * @method integer getActionType() Obtain Action
 * @method void setActionType(integer $ActionType) Set Action
 * @method integer getPriority() Obtain Priority
 * @method void setPriority(integer $Priority) Set Priority
 * @method integer getValidTime() Obtain Expiration time
 * @method void setValidTime(integer $ValidTime) Set Expiration time
 * @method integer getTsVersion() Obtain Version
 * @method void setTsVersion(integer $TsVersion) Set Version
 * @method string getOptions() Obtain Rule details
 * @method void setOptions(string $Options) Set Rule details
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getEventId() Obtain Event ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventId(string $EventId) Set Event ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSessionApplied() Obtain Associated session rules

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionApplied(array $SessionApplied) Set Associated session rules

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 */
class CCRuleItems extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var integer Mode
     */
    public $Advance;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var integer Detection interval
     */
    public $Interval;

    /**
     * @var string URL
     */
    public $Url;

    /**
     * @var integer Type to match
     */
    public $MatchFunc;

    /**
     * @var integer Action
     */
    public $ActionType;

    /**
     * @var integer Priority
     */
    public $Priority;

    /**
     * @var integer Expiration time
     */
    public $ValidTime;

    /**
     * @var integer Version
     */
    public $TsVersion;

    /**
     * @var string Rule details
     */
    public $Options;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Event ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventId;

    /**
     * @var array Associated session rules

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionApplied;

    /**
     * @var integer Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $Name Name
     * @param integer $Status Status
     * @param integer $Advance Mode
     * @param integer $Limit Limit
     * @param integer $Interval Detection interval
     * @param string $Url URL
     * @param integer $MatchFunc Type to match
     * @param integer $ActionType Action
     * @param integer $Priority Priority
     * @param integer $ValidTime Expiration time
     * @param integer $TsVersion Version
     * @param string $Options Rule details
     * @param integer $RuleId Rule ID
     * @param string $EventId Event ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SessionApplied Associated session rules

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time

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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Advance",$param) and $param["Advance"] !== null) {
            $this->Advance = $param["Advance"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("MatchFunc",$param) and $param["MatchFunc"] !== null) {
            $this->MatchFunc = $param["MatchFunc"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = $param["Options"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("SessionApplied",$param) and $param["SessionApplied"] !== null) {
            $this->SessionApplied = $param["SessionApplied"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
