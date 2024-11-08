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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateForwardRule request structure.
 *
 * @method string getRuleName() Obtain Forwarding rule name.
 * @method void setRuleName(string $RuleName) Set Forwarding rule name.
 * @method string getRuleType() Obtain Forwarding rule type. DOWN: From cloud to off-cloud; UP: From off-cloud to cloud.
 * @method void setRuleType(string $RuleType) Set Forwarding rule type. DOWN: From cloud to off-cloud; UP: From off-cloud to cloud.
 * @method string getZoneId() Obtain Private domain ID, which can be viewed on the private domain list page.
 * @method void setZoneId(string $ZoneId) Set Private domain ID, which can be viewed on the private domain list page.
 * @method string getEndPointId() Obtain Endpoint ID.
 * @method void setEndPointId(string $EndPointId) Set Endpoint ID.
 */
class CreateForwardRuleRequest extends AbstractModel
{
    /**
     * @var string Forwarding rule name.
     */
    public $RuleName;

    /**
     * @var string Forwarding rule type. DOWN: From cloud to off-cloud; UP: From off-cloud to cloud.
     */
    public $RuleType;

    /**
     * @var string Private domain ID, which can be viewed on the private domain list page.
     */
    public $ZoneId;

    /**
     * @var string Endpoint ID.
     */
    public $EndPointId;

    /**
     * @param string $RuleName Forwarding rule name.
     * @param string $RuleType Forwarding rule type. DOWN: From cloud to off-cloud; UP: From off-cloud to cloud.
     * @param string $ZoneId Private domain ID, which can be viewed on the private domain list page.
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }
    }
}
