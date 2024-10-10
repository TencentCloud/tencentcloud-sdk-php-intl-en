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
 * ModifyCustomWhiteRule request structure.
 *
 * @method string getDomain() Obtain Edited domain
 * @method void setDomain(string $Domain) Set Edited domain
 * @method integer getRuleId() Obtain Edited rule ID
 * @method void setRuleId(integer $RuleId) Set Edited rule ID
 * @method string getRuleName() Obtain Edited rule name
 * @method void setRuleName(string $RuleName) Set Edited rule name
 * @method string getBypass() Obtain Whether to continue executing other check logics when bypassing, continue executing regional ban protection - geoip; continue executing CC policy protection - cc; continue executing WEB application protection: owasp; continue executing AI engine protection - ai; continue executing information leakage protection - antileakage. If multiple items are selected, concatenate with commas (,).
 * @method void setBypass(string $Bypass) Set Whether to continue executing other check logics when bypassing, continue executing regional ban protection - geoip; continue executing CC policy protection - cc; continue executing WEB application protection: owasp; continue executing AI engine protection - ai; continue executing information leakage protection - antileakage. If multiple items are selected, concatenate with commas (,).
 * @method integer getSortId() Obtain Priority, an integer from 1 to 100. The smaller the number, the higher the execution priority of this rule.
 * @method void setSortId(integer $SortId) Set Priority, an integer from 1 to 100. The smaller the number, the higher the execution priority of this rule.
 * @method integer getExpireTime() Obtain Rule expiration deadline: 0 - permanently effective; other values correspond to the timestamp of the specified time.
 * @method void setExpireTime(integer $ExpireTime) Set Rule expiration deadline: 0 - permanently effective; other values correspond to the timestamp of the specified time.
 * @method array getStrategies() Obtain Matching condition array
 * @method void setStrategies(array $Strategies) Set Matching condition array
 * @method string getJobType() Obtain Scheduled task type
 * @method void setJobType(string $JobType) Set Scheduled task type
 * @method JobDateTime getJobDateTime() Obtain Scheduled task configuration
 * @method void setJobDateTime(JobDateTime $JobDateTime) Set Scheduled task configuration
 */
class ModifyCustomWhiteRuleRequest extends AbstractModel
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
     * @var string Whether to continue executing other check logics when bypassing, continue executing regional ban protection - geoip; continue executing CC policy protection - cc; continue executing WEB application protection: owasp; continue executing AI engine protection - ai; continue executing information leakage protection - antileakage. If multiple items are selected, concatenate with commas (,).
     */
    public $Bypass;

    /**
     * @var integer Priority, an integer from 1 to 100. The smaller the number, the higher the execution priority of this rule.
     */
    public $SortId;

    /**
     * @var integer Rule expiration deadline: 0 - permanently effective; other values correspond to the timestamp of the specified time.
     */
    public $ExpireTime;

    /**
     * @var array Matching condition array
     */
    public $Strategies;

    /**
     * @var string Scheduled task type
     */
    public $JobType;

    /**
     * @var JobDateTime Scheduled task configuration
     */
    public $JobDateTime;

    /**
     * @param string $Domain Edited domain
     * @param integer $RuleId Edited rule ID
     * @param string $RuleName Edited rule name
     * @param string $Bypass Whether to continue executing other check logics when bypassing, continue executing regional ban protection - geoip; continue executing CC policy protection - cc; continue executing WEB application protection: owasp; continue executing AI engine protection - ai; continue executing information leakage protection - antileakage. If multiple items are selected, concatenate with commas (,).
     * @param integer $SortId Priority, an integer from 1 to 100. The smaller the number, the higher the execution priority of this rule.
     * @param integer $ExpireTime Rule expiration deadline: 0 - permanently effective; other values correspond to the timestamp of the specified time.
     * @param array $Strategies Matching condition array
     * @param string $JobType Scheduled task type
     * @param JobDateTime $JobDateTime Scheduled task configuration
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

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }
    }
}
