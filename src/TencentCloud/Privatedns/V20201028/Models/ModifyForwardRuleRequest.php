<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyForwardRule request structure.
 *
 * @method string getRuleId() Obtain Forwarding rule ID.
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID.
 * @method string getRuleName() Obtain Forwarding rule name.
 * @method void setRuleName(string $RuleName) Set Forwarding rule name.
 * @method string getEndPointId() Obtain Endpoint ID.
 * @method void setEndPointId(string $EndPointId) Set Endpoint ID.
 */
class ModifyForwardRuleRequest extends AbstractModel
{
    /**
     * @var string Forwarding rule ID.
     */
    public $RuleId;

    /**
     * @var string Forwarding rule name.
     */
    public $RuleName;

    /**
     * @var string Endpoint ID.
     */
    public $EndPointId;

    /**
     * @param string $RuleId Forwarding rule ID.
     * @param string $RuleName Forwarding rule name.
     * @param string $EndPointId Endpoint ID.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }
    }
}
