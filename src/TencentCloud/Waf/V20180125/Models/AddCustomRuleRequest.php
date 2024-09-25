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
 * AddCustomRule request structure.
 *
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method string getSortId() Obtain Priority
 * @method void setSortId(string $SortId) Set Priority
 * @method array getStrategies() Obtain Policy details
 * @method void setStrategies(array $Strategies) Set Policy details
 * @method string getDomain() Obtain Domain name for adding policy
 * @method void setDomain(string $Domain) Set Domain name for adding policy
 * @method string getActionType() Obtain Action type: 1 for Block, 2 captcha, 3 for Observe, 4 for Redirect
 * @method void setActionType(string $ActionType) Set Action type: 1 for Block, 2 captcha, 3 for Observe, 4 for Redirect
 * @method string getRedirect() Obtain If the action is redirect, it indicates the redirect address; otherwise, it can be left blank.
 * @method void setRedirect(string $Redirect) Set If the action is redirect, it indicates the redirect address; otherwise, it can be left blank.
 * @method string getExpireTime() Obtain Expiration time: in second-level timestamp, for example, 1677254399 indicates the expiration time is 2023-02-24 23:59:59; 0 indicates it will never expire.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time: in second-level timestamp, for example, 1677254399 indicates the expiration time is 2023-02-24 23:59:59; 0 indicates it will never expire.
 * @method string getEdition() Obtain WAF instance type: sparta-waf for SaaS WAF, clb-waf for CLB WAF.
 * @method void setEdition(string $Edition) Set WAF instance type: sparta-waf for SaaS WAF, clb-waf for CLB WAF.
 * @method string getBypass() Obtain Details of release
 * @method void setBypass(string $Bypass) Set Details of release
 * @method string getEventId() Obtain Source of the rule addition, default is empty
 * @method void setEventId(string $EventId) Set Source of the rule addition, default is empty
 * @method string getJobType() Obtain Rule execution mode: TimedJob indicates scheduled execution. CronJob indicates periodic execution.
 * @method void setJobType(string $JobType) Set Rule execution mode: TimedJob indicates scheduled execution. CronJob indicates periodic execution.
 * @method JobDateTime getJobDateTime() Obtain Rule execution time
 * @method void setJobDateTime(JobDateTime $JobDateTime) Set Rule execution time
 * @method string getSource() Obtain Rule source. You can determine whether a rule comes from a mini program.
 * @method void setSource(string $Source) Set Rule source. You can determine whether a rule comes from a mini program.
 * @method string getLabel() Obtain Rule tag. It is used for mini program rules and identifies whether a rule is a built-in rule or a custom rule.
 * @method void setLabel(string $Label) Set Rule tag. It is used for mini program rules and identifies whether a rule is a built-in rule or a custom rule.
 * @method integer getStatus() Obtain Switch status. This value is passed when mini program risk control rules are used.
 * @method void setStatus(integer $Status) Set Switch status. This value is passed when mini program risk control rules are used.
 * @method string getPageId() Obtain Interception page ID
 * @method void setPageId(string $PageId) Set Interception page ID
 */
class AddCustomRuleRequest extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var string Priority
     */
    public $SortId;

    /**
     * @var array Policy details
     */
    public $Strategies;

    /**
     * @var string Domain name for adding policy
     */
    public $Domain;

    /**
     * @var string Action type: 1 for Block, 2 captcha, 3 for Observe, 4 for Redirect
     */
    public $ActionType;

    /**
     * @var string If the action is redirect, it indicates the redirect address; otherwise, it can be left blank.
     */
    public $Redirect;

    /**
     * @var string Expiration time: in second-level timestamp, for example, 1677254399 indicates the expiration time is 2023-02-24 23:59:59; 0 indicates it will never expire.
     */
    public $ExpireTime;

    /**
     * @var string WAF instance type: sparta-waf for SaaS WAF, clb-waf for CLB WAF.
     */
    public $Edition;

    /**
     * @var string Details of release
     */
    public $Bypass;

    /**
     * @var string Source of the rule addition, default is empty
     */
    public $EventId;

    /**
     * @var string Rule execution mode: TimedJob indicates scheduled execution. CronJob indicates periodic execution.
     */
    public $JobType;

    /**
     * @var JobDateTime Rule execution time
     */
    public $JobDateTime;

    /**
     * @var string Rule source. You can determine whether a rule comes from a mini program.
     */
    public $Source;

    /**
     * @var string Rule tag. It is used for mini program rules and identifies whether a rule is a built-in rule or a custom rule.
     */
    public $Label;

    /**
     * @var integer Switch status. This value is passed when mini program risk control rules are used.
     */
    public $Status;

    /**
     * @var string Interception page ID
     */
    public $PageId;

    /**
     * @param string $Name Rule name
     * @param string $SortId Priority
     * @param array $Strategies Policy details
     * @param string $Domain Domain name for adding policy
     * @param string $ActionType Action type: 1 for Block, 2 captcha, 3 for Observe, 4 for Redirect
     * @param string $Redirect If the action is redirect, it indicates the redirect address; otherwise, it can be left blank.
     * @param string $ExpireTime Expiration time: in second-level timestamp, for example, 1677254399 indicates the expiration time is 2023-02-24 23:59:59; 0 indicates it will never expire.
     * @param string $Edition WAF instance type: sparta-waf for SaaS WAF, clb-waf for CLB WAF.
     * @param string $Bypass Details of release
     * @param string $EventId Source of the rule addition, default is empty
     * @param string $JobType Rule execution mode: TimedJob indicates scheduled execution. CronJob indicates periodic execution.
     * @param JobDateTime $JobDateTime Rule execution time
     * @param string $Source Rule source. You can determine whether a rule comes from a mini program.
     * @param string $Label Rule tag. It is used for mini program rules and identifies whether a rule is a built-in rule or a custom rule.
     * @param integer $Status Switch status. This value is passed when mini program risk control rules are used.
     * @param string $PageId Interception page ID
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

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }
    }
}
