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
 * UpsertCCRule request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method string getAdvance() Obtain Advanced mode (whether to use session detection). 0: disabled; 1: enabled
 * @method void setAdvance(string $Advance) Set Advanced mode (whether to use session detection). 0: disabled; 1: enabled
 * @method string getLimit() Obtain CC detection threshold
 * @method void setLimit(string $Limit) Set CC detection threshold
 * @method string getInterval() Obtain CC detection cycle
 * @method void setInterval(string $Interval) Set CC detection cycle
 * @method string getUrl() Obtain Detection URL
 * @method void setUrl(string $Url) Set Detection URL
 * @method integer getMatchFunc() Obtain Matching method. 0: equal to; 1: prefix matching; 2: included
 * @method void setMatchFunc(integer $MatchFunc) Set Matching method. 0: equal to; 1: prefix matching; 2: included
 * @method string getActionType() Obtain Action. 20: observation; 21: CAPTCHA; 22: interception; 23: precise interception
 * @method void setActionType(string $ActionType) Set Action. 20: observation; 21: CAPTCHA; 22: interception; 23: precise interception
 * @method integer getPriority() Obtain Priority
 * @method void setPriority(integer $Priority) Set Priority
 * @method integer getValidTime() Obtain Valid time for action
 * @method void setValidTime(integer $ValidTime) Set Valid time for action
 * @method string getOptionsArr() Obtain Additional Parameters
 * @method void setOptionsArr(string $OptionsArr) Set Additional Parameters
 * @method string getEdition() Obtain WAF version. The value can be sparta-waf or clb-waf.
 * @method void setEdition(string $Edition) Set WAF version. The value can be sparta-waf or clb-waf.
 * @method integer getType() Obtain Operation type
 * @method void setType(integer $Type) Set Operation type
 * @method string getEventId() Obtain Source event ID for adding rules
 * @method void setEventId(string $EventId) Set Source event ID for adding rules
 * @method array getSessionApplied() Obtain Session ID that needs to be enabled for the rule
 * @method void setSessionApplied(array $SessionApplied) Set Session ID that needs to be enabled for the rule
 * @method integer getRuleId() Obtain Rule ID: fill in 0 when adding
 * @method void setRuleId(integer $RuleId) Set Rule ID: fill in 0 when adding
 * @method integer getCreateTime() Obtain Rule creation time
 * @method void setCreateTime(integer $CreateTime) Set Rule creation time
 * @method integer getLength() Obtain URL length
 * @method void setLength(integer $Length) Set URL length
 */
class UpsertCCRuleRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var string Advanced mode (whether to use session detection). 0: disabled; 1: enabled
     */
    public $Advance;

    /**
     * @var string CC detection threshold
     */
    public $Limit;

    /**
     * @var string CC detection cycle
     */
    public $Interval;

    /**
     * @var string Detection URL
     */
    public $Url;

    /**
     * @var integer Matching method. 0: equal to; 1: prefix matching; 2: included
     */
    public $MatchFunc;

    /**
     * @var string Action. 20: observation; 21: CAPTCHA; 22: interception; 23: precise interception
     */
    public $ActionType;

    /**
     * @var integer Priority
     */
    public $Priority;

    /**
     * @var integer Valid time for action
     */
    public $ValidTime;

    /**
     * @var string Additional Parameters
     */
    public $OptionsArr;

    /**
     * @var string WAF version. The value can be sparta-waf or clb-waf.
     */
    public $Edition;

    /**
     * @var integer Operation type
     */
    public $Type;

    /**
     * @var string Source event ID for adding rules
     */
    public $EventId;

    /**
     * @var array Session ID that needs to be enabled for the rule
     */
    public $SessionApplied;

    /**
     * @var integer Rule ID: fill in 0 when adding
     */
    public $RuleId;

    /**
     * @var integer Rule creation time
     */
    public $CreateTime;

    /**
     * @var integer URL length
     */
    public $Length;

    /**
     * @param string $Domain Domain name
     * @param string $Name Name
     * @param integer $Status Status
     * @param string $Advance Advanced mode (whether to use session detection). 0: disabled; 1: enabled
     * @param string $Limit CC detection threshold
     * @param string $Interval CC detection cycle
     * @param string $Url Detection URL
     * @param integer $MatchFunc Matching method. 0: equal to; 1: prefix matching; 2: included
     * @param string $ActionType Action. 20: observation; 21: CAPTCHA; 22: interception; 23: precise interception
     * @param integer $Priority Priority
     * @param integer $ValidTime Valid time for action
     * @param string $OptionsArr Additional Parameters
     * @param string $Edition WAF version. The value can be sparta-waf or clb-waf.
     * @param integer $Type Operation type
     * @param string $EventId Source event ID for adding rules
     * @param array $SessionApplied Session ID that needs to be enabled for the rule
     * @param integer $RuleId Rule ID: fill in 0 when adding
     * @param integer $CreateTime Rule creation time
     * @param integer $Length URL length
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
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

        if (array_key_exists("OptionsArr",$param) and $param["OptionsArr"] !== null) {
            $this->OptionsArr = $param["OptionsArr"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("SessionApplied",$param) and $param["SessionApplied"] !== null) {
            $this->SessionApplied = $param["SessionApplied"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }
    }
}
