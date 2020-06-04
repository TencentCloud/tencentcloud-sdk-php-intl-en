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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCCFrequencyRulesStatus request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method string getRuleId() Obtain Layer-7 forwarding rule ID, which can be obtained through the `DescribleL7Rules` API
 * @method void setRuleId(string $RuleId) Set Layer-7 forwarding rule ID, which can be obtained through the `DescribleL7Rules` API
 * @method string getMethod() Obtain Enables or disable. Valid values: ["on", "off"]
 * @method void setMethod(string $Method) Set Enables or disable. Valid values: ["on", "off"]
 */
class ModifyCCFrequencyRulesStatusRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $Id;

    /**
     * @var string Layer-7 forwarding rule ID, which can be obtained through the `DescribleL7Rules` API
     */
    public $RuleId;

    /**
     * @var string Enables or disable. Valid values: ["on", "off"]
     */
    public $Method;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
     * @param string $Id Anti-DDoS instance ID
     * @param string $RuleId Layer-7 forwarding rule ID, which can be obtained through the `DescribleL7Rules` API
     * @param string $Method Enables or disable. Valid values: ["on", "off"]
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
