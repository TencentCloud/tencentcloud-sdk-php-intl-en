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
 * ModifyCustomRuleStatus request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method integer getStatus() Obtain Status of the switch: 1 is On, 0 is Off
 * @method void setStatus(integer $Status) Set Status of the switch: 1 is On, 0 is Off
 * @method string getEdition() Obtain Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 * @method void setEdition(string $Edition) Set Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
 * @method array getDomainRuleIdList() Obtain Rule ID
 * @method void setDomainRuleIdList(array $DomainRuleIdList) Set Rule ID
 */
class ModifyCustomRuleStatusRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var integer Status of the switch: 1 is On, 0 is Off
     */
    public $Status;

    /**
     * @var string Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
     */
    public $Edition;

    /**
     * @var array Rule ID
     */
    public $DomainRuleIdList;

    /**
     * @param string $Domain Domain name
     * @param integer $RuleId Rule ID
     * @param integer $Status Status of the switch: 1 is On, 0 is Off
     * @param string $Edition Version of WAF. clb-waf indicates CLB WAF; sparta-waf indicates SaaS WAF. sparta-waf by default.
     * @param array $DomainRuleIdList Rule ID
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
