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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLLMWafProtectRule request structure.
 *
 * @method string getServiceId() Obtain <p>Service ID.</p>
 * @method void setServiceId(string $ServiceId) Set <p>Service ID.</p>
 * @method array getRuleIds() Obtain <p>List of rule IDs to modify.</p>
 * @method void setRuleIds(array $RuleIds) Set <p>List of rule IDs to modify.</p>
 * @method string getRuleAction() Obtain <p>Rule action.</p>
 * @method void setRuleAction(string $RuleAction) Set <p>Rule action.</p>
 * @method integer getStatus() Obtain <p>Switch.</p>
 * @method void setStatus(integer $Status) Set <p>Switch.</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method integer getDirection() Obtain <p>Detection direction: 1 indicates inbound, 2 indicates outbound, and 3 indicates both inbound and outbound.</p>
 * @method void setDirection(integer $Direction) Set <p>Detection direction: 1 indicates inbound, 2 indicates outbound, and 3 indicates both inbound and outbound.</p>
 */
class ModifyLLMWafProtectRuleRequest extends AbstractModel
{
    /**
     * @var string <p>Service ID.</p>
     */
    public $ServiceId;

    /**
     * @var array <p>List of rule IDs to modify.</p>
     */
    public $RuleIds;

    /**
     * @var string <p>Rule action.</p>
     */
    public $RuleAction;

    /**
     * @var integer <p>Switch.</p>
     */
    public $Status;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Detection direction: 1 indicates inbound, 2 indicates outbound, and 3 indicates both inbound and outbound.</p>
     */
    public $Direction;

    /**
     * @param string $ServiceId <p>Service ID.</p>
     * @param array $RuleIds <p>List of rule IDs to modify.</p>
     * @param string $RuleAction <p>Rule action.</p>
     * @param integer $Status <p>Switch.</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param integer $Direction <p>Detection direction: 1 indicates inbound, 2 indicates outbound, and 3 indicates both inbound and outbound.</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
