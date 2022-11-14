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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityGroupItemRuleStatus request structure.
 *
 * @method integer getDirection() Obtain Direction. 0: outbound; 1: inbound. 1 by default
 * @method void setDirection(integer $Direction) Set Direction. 0: outbound; 1: inbound. 1 by default
 * @method integer getStatus() Obtain Toggle status. 0: off; 1: on
 * @method void setStatus(integer $Status) Set Toggle status. 0: off; 1: on
 * @method integer getRuleSequence() Obtain Modified priority of enterprise security group rules
 * @method void setRuleSequence(integer $RuleSequence) Set Modified priority of enterprise security group rules
 */
class ModifySecurityGroupItemRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer Direction. 0: outbound; 1: inbound. 1 by default
     */
    public $Direction;

    /**
     * @var integer Toggle status. 0: off; 1: on
     */
    public $Status;

    /**
     * @var integer Modified priority of enterprise security group rules
     */
    public $RuleSequence;

    /**
     * @param integer $Direction Direction. 0: outbound; 1: inbound. 1 by default
     * @param integer $Status Toggle status. 0: off; 1: on
     * @param integer $RuleSequence Modified priority of enterprise security group rules
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleSequence",$param) and $param["RuleSequence"] !== null) {
            $this->RuleSequence = $param["RuleSequence"];
        }
    }
}
