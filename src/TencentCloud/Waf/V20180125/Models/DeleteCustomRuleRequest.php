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
 * DeleteCustomRule request structure.
 *
 * @method string getDomain() Obtain Deleted domain
 * @method void setDomain(string $Domain) Set Deleted domain
 * @method string getRuleId() Obtain Deleted rule ID
 * @method void setRuleId(string $RuleId) Set Deleted rule ID
 * @method string getEdition() Obtain Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 * @method void setEdition(string $Edition) Set Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 * @method array getDomainRuleIdList() Obtain List of rules to be deleted in batches
 * @method void setDomainRuleIdList(array $DomainRuleIdList) Set List of rules to be deleted in batches
 */
class DeleteCustomRuleRequest extends AbstractModel
{
    /**
     * @var string Deleted domain
     */
    public $Domain;

    /**
     * @var string Deleted rule ID
     */
    public $RuleId;

    /**
     * @var string Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
     */
    public $Edition;

    /**
     * @var array List of rules to be deleted in batches
     */
    public $DomainRuleIdList;

    /**
     * @param string $Domain Deleted domain
     * @param string $RuleId Deleted rule ID
     * @param string $Edition Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
     * @param array $DomainRuleIdList List of rules to be deleted in batches
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

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("DomainRuleIdList",$param) and $param["DomainRuleIdList"] !== null) {
            $this->DomainRuleIdList = [];
            foreach ($param["DomainRuleIdList"] as $key => $value){
                $obj = new DomainRuleId();
                $obj->deserialize($value);
                array_push($this->DomainRuleIdList, $obj);
            }
        }
    }
}
