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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteForwardingRule request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain Global acceleration instance ID.
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set Global acceleration instance ID.
 * @method string getListenerId() Obtain Listener ID.
 * @method void setListenerId(string $ListenerId) Set Listener ID.
 * @method string getForwardingPolicyId() Obtain Policy ID.
 * @method void setForwardingPolicyId(string $ForwardingPolicyId) Set Policy ID.
 * @method string getForwardingRuleId() Obtain Layer 7 forwarding rule ID.
 * @method void setForwardingRuleId(string $ForwardingRuleId) Set Layer 7 forwarding rule ID.
 */
class DeleteForwardingRuleRequest extends AbstractModel
{
    /**
     * @var string Global acceleration instance ID.
     */
    public $GlobalAcceleratorId;

    /**
     * @var string Listener ID.
     */
    public $ListenerId;

    /**
     * @var string Policy ID.
     */
    public $ForwardingPolicyId;

    /**
     * @var string Layer 7 forwarding rule ID.
     */
    public $ForwardingRuleId;

    /**
     * @param string $GlobalAcceleratorId Global acceleration instance ID.
     * @param string $ListenerId Listener ID.
     * @param string $ForwardingPolicyId Policy ID.
     * @param string $ForwardingRuleId Layer 7 forwarding rule ID.
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ForwardingPolicyId",$param) and $param["ForwardingPolicyId"] !== null) {
            $this->ForwardingPolicyId = $param["ForwardingPolicyId"];
        }

        if (array_key_exists("ForwardingRuleId",$param) and $param["ForwardingRuleId"] !== null) {
            $this->ForwardingRuleId = $param["ForwardingRuleId"];
        }
    }
}
