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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Call forwarding configuration.
 *
 * @method boolean getEnabled() Obtain Whether to enable.
 * @method void setEnabled(boolean $Enabled) Set Whether to enable.
 * @method integer getCondition() Obtain 1 unconditional call forwarding 2 conditional call forwarding.
 * @method void setCondition(integer $Condition) Set 1 unconditional call forwarding 2 conditional call forwarding.
 * @method ForwardingTarget getTarget() Obtain Call forwarding destination.
 * @method void setTarget(ForwardingTarget $Target) Set Call forwarding destination.
 */
class ForwardingConfig extends AbstractModel
{
    /**
     * @var boolean Whether to enable.
     */
    public $Enabled;

    /**
     * @var integer 1 unconditional call forwarding 2 conditional call forwarding.
     */
    public $Condition;

    /**
     * @var ForwardingTarget Call forwarding destination.
     */
    public $Target;

    /**
     * @param boolean $Enabled Whether to enable.
     * @param integer $Condition 1 unconditional call forwarding 2 conditional call forwarding.
     * @param ForwardingTarget $Target Call forwarding destination.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new ForwardingTarget();
            $this->Target->deserialize($param["Target"]);
        }
    }
}
