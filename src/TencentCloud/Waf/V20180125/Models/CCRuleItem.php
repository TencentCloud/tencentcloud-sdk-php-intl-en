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
 * CC rules
 *
 * @method integer getActionType() Obtain Action
 * @method void setActionType(integer $ActionType) Set Action
 * @method integer getAdvance() Obtain Advanced mode
 * @method void setAdvance(integer $Advance) Set Advanced mode
 * @method integer getInterval() Obtain Time period
 * @method void setInterval(integer $Interval) Set Time period
 * @method integer getLimit() Obtain Limit Attempts
 * @method void setLimit(integer $Limit) Set Limit Attempts
 * @method integer getMatchFunc() Obtain Matching Method
 * @method void setMatchFunc(integer $MatchFunc) Set Matching Method
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getPriority() Obtain Priority
 * @method void setPriority(integer $Priority) Set Priority
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method integer getTsVersion() Obtain Update Timestamp
 * @method void setTsVersion(integer $TsVersion) Set Update Timestamp
 * @method string getUrl() Obtain Matching URL
 * @method void setUrl(string $Url) Set Matching URL
 * @method integer getValidTime() Obtain Policy Action Validity Period
 * @method void setValidTime(integer $ValidTime) Set Policy Action Validity Period
 * @method string getOptionsArr() Obtain Advanced Parameters

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOptionsArr(string $OptionsArr) Set Advanced Parameters

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLength() Obtain URL length
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLength(integer $Length) Set URL length
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleId() Obtain Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
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
class CCRuleItem extends AbstractModel
{
    /**
     * @var integer Action
     */
    public $ActionType;

    /**
     * @var integer Advanced mode
     */
    public $Advance;

    /**
     * @var integer Time period
     */
    public $Interval;

    /**
     * @var integer Limit Attempts
     */
    public $Limit;

    /**
     * @var integer Matching Method
     */
    public $MatchFunc;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Priority
     */
    public $Priority;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var integer Update Timestamp
     */
    public $TsVersion;

    /**
     * @var string Matching URL
     */
    public $Url;

    /**
     * @var integer Policy Action Validity Period
     */
    public $ValidTime;

    /**
     * @var string Advanced Parameters

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OptionsArr;

    /**
     * @var integer URL length
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Length;

    /**
     * @var integer Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
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
     * @param integer $ActionType Action
     * @param integer $Advance Advanced mode
     * @param integer $Interval Time period
     * @param integer $Limit Limit Attempts
     * @param integer $MatchFunc Matching Method
     * @param string $Name Name
     * @param integer $Priority Priority
     * @param integer $Status Status
     * @param integer $TsVersion Update Timestamp
     * @param string $Url Matching URL
     * @param integer $ValidTime Policy Action Validity Period
     * @param string $OptionsArr Advanced Parameters

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Length URL length
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Advance",$param) and $param["Advance"] !== null) {
            $this->Advance = $param["Advance"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MatchFunc",$param) and $param["MatchFunc"] !== null) {
            $this->MatchFunc = $param["MatchFunc"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("OptionsArr",$param) and $param["OptionsArr"] !== null) {
            $this->OptionsArr = $param["OptionsArr"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
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
