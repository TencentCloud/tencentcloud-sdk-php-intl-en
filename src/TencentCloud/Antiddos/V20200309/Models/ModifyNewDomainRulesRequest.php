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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNewDomainRules request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced).
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced).
 * @method string getId() Obtain Anti-DDoS instance ID.
 * @method void setId(string $Id) Set Anti-DDoS instance ID.
 * @method NewL7RuleEntry getRule() Obtain Domain name forwarding rule.
 * @method void setRule(NewL7RuleEntry $Rule) Set Domain name forwarding rule.
 */
class ModifyNewDomainRulesRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced).
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID.
     */
    public $Id;

    /**
     * @var NewL7RuleEntry Domain name forwarding rule.
     */
    public $Rule;

    /**
     * @param string $Business Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced).
     * @param string $Id Anti-DDoS instance ID.
     * @param NewL7RuleEntry $Rule Domain name forwarding rule.
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new NewL7RuleEntry();
            $this->Rule->deserialize($param["Rule"]);
        }
    }
}
