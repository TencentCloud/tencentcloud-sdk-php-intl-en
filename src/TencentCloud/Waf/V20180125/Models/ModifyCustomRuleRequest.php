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
 * ModifyCustomRule request structure.
 *
 * @method string getDomain() Obtain Edited domain
 * @method void setDomain(string $Domain) Set Edited domain
 * @method integer getRuleId() Obtain Edited rule ID
 * @method void setRuleId(integer $RuleId) Set Edited rule ID
 * @method string getRuleName() Obtain Edited rule name
 * @method void setRuleName(string $RuleName) Set Edited rule name
 * @method string getRuleAction() Obtain Executed actions: 0-allow, 1-block, 2-CAPTCHA, 3-observe, 4-redirect
 * @method void setRuleAction(string $RuleAction) Set Executed actions: 0-allow, 1-block, 2-CAPTCHA, 3-observe, 4-redirect
 * @method array getStrategies() Obtain Matching condition array
 * @method void setStrategies(array $Strategies) Set Matching condition array
 * @method string getEdition() Obtain Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 * @method void setEdition(string $Edition) Set Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 * @method string getRedirect() Obtain Redirected URL when action is set to redirect, / by default
 * @method void setRedirect(string $Redirect) Set Redirected URL when action is set to redirect, / by default
 * @method string getBypass() Obtain Whether to continue executing other check logic upon allowing. geoip: continue region blocking protection; cc: continue CC policy protection; owasp: continue web application protection; ai: continue AI engine protection; antileakage: continue information leakage prevention. If multiple values are entered, separate them with commas (,).
The default value is "geoip,cc,owasp,ai,antileakage".
 * @method void setBypass(string $Bypass) Set Whether to continue executing other check logic upon allowing. geoip: continue region blocking protection; cc: continue CC policy protection; owasp: continue web application protection; ai: continue AI engine protection; antileakage: continue information leakage prevention. If multiple values are entered, separate them with commas (,).
The default value is "geoip,cc,owasp,ai,antileakage".
 * @method integer getSortId() Obtain Priority, an integer from 1 to 100. The smaller the number, the higher the execution priority of this rule.

The default value is 100.
 * @method void setSortId(integer $SortId) Set Priority, an integer from 1 to 100. The smaller the number, the higher the execution priority of this rule.

The default value is 100.
 * @method integer getExpireTime() Obtain Rule expiration deadline: 0 - permanently effective; other values correspond to the timestamp of the specified time.

The default value is 0.
 * @method void setExpireTime(integer $ExpireTime) Set Rule expiration deadline: 0 - permanently effective; other values correspond to the timestamp of the specified time.

The default value is 0.
 * @method string getJobType() Obtain Scheduled task type
 * @method void setJobType(string $JobType) Set Scheduled task type
 * @method JobDateTime getJobDateTime() Obtain Scheduled task configuration
 * @method void setJobDateTime(JobDateTime $JobDateTime) Set Scheduled task configuration
 * @method string getSource() Obtain Rule source. This parameter checks whether the rule source is mini program.
 * @method void setSource(string $Source) Set Rule source. This parameter checks whether the rule source is mini program.
 * @method integer getStatus() Obtain Enabling status. Pass the value for rules of mini program risk control.
 * @method void setStatus(integer $Status) Set Enabling status. Pass the value for rules of mini program risk control.
 * @method string getPageId() Obtain ID of the blocked page
 * @method void setPageId(string $PageId) Set ID of the blocked page
 */
class ModifyCustomRuleRequest extends AbstractModel
{
    /**
     * @var string Edited domain
     */
    public $Domain;

    /**
     * @var integer Edited rule ID
     */
    public $RuleId;

    /**
     * @var string Edited rule name
     */
    public $RuleName;

    /**
     * @var string Executed actions: 0-allow, 1-block, 2-CAPTCHA, 3-observe, 4-redirect
     */
    public $RuleAction;

    /**
     * @var array Matching condition array
     */
    public $Strategies;

    /**
     * @var string Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
     */
    public $Edition;

    /**
     * @var string Redirected URL when action is set to redirect, / by default
     */
    public $Redirect;

    /**
     * @var string Whether to continue executing other check logic upon allowing. geoip: continue region blocking protection; cc: continue CC policy protection; owasp: continue web application protection; ai: continue AI engine protection; antileakage: continue information leakage prevention. If multiple values are entered, separate them with commas (,).
The default value is "geoip,cc,owasp,ai,antileakage".
     */
    public $Bypass;

    /**
     * @var integer Priority, an integer from 1 to 100. The smaller the number, the higher the execution priority of this rule.

The default value is 100.
     */
    public $SortId;

    /**
     * @var integer Rule expiration deadline: 0 - permanently effective; other values correspond to the timestamp of the specified time.

The default value is 0.
     */
    public $ExpireTime;

    /**
     * @var string Scheduled task type
     */
    public $JobType;

    /**
     * @var JobDateTime Scheduled task configuration
     */
    public $JobDateTime;

    /**
     * @var string Rule source. This parameter checks whether the rule source is mini program.
     */
    public $Source;

    /**
     * @var integer Enabling status. Pass the value for rules of mini program risk control.
     */
    public $Status;

    /**
     * @var string ID of the blocked page
     */
    public $PageId;

    /**
     * @param string $Domain Edited domain
     * @param integer $RuleId Edited rule ID
     * @param string $RuleName Edited rule name
     * @param string $RuleAction Executed actions: 0-allow, 1-block, 2-CAPTCHA, 3-observe, 4-redirect
     * @param array $Strategies Matching condition array
     * @param string $Edition Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
     * @param string $Redirect Redirected URL when action is set to redirect, / by default
     * @param string $Bypass Whether to continue executing other check logic upon allowing. geoip: continue region blocking protection; cc: continue CC policy protection; owasp: continue web application protection; ai: continue AI engine protection; antileakage: continue information leakage prevention. If multiple values are entered, separate them with commas (,).
The default value is "geoip,cc,owasp,ai,antileakage".
     * @param integer $SortId Priority, an integer from 1 to 100. The smaller the number, the higher the execution priority of this rule.

The default value is 100.
     * @param integer $ExpireTime Rule expiration deadline: 0 - permanently effective; other values correspond to the timestamp of the specified time.

The default value is 0.
     * @param string $JobType Scheduled task type
     * @param JobDateTime $JobDateTime Scheduled task configuration
     * @param string $Source Rule source. This parameter checks whether the rule source is mini program.
     * @param integer $Status Enabling status. Pass the value for rules of mini program risk control.
     * @param string $PageId ID of the blocked page
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }
    }
}
