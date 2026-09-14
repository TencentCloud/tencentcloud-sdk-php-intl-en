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
 * DescribeForwardingRule request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain Global acceleration instance ID.
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set Global acceleration instance ID.
 * @method string getListenerId() Obtain Listener ID.
 * @method void setListenerId(string $ListenerId) Set Listener ID.
 * @method string getForwardingPolicyId() Obtain Layer 7 forwarding rule ID.
 * @method void setForwardingPolicyId(string $ForwardingPolicyId) Set Layer 7 forwarding rule ID.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returns. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returns. Default value: 20. Maximum value: 100.
 */
class DescribeForwardingRuleRequest extends AbstractModel
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
     * @var string Layer 7 forwarding rule ID.
     */
    public $ForwardingPolicyId;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returns. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $GlobalAcceleratorId Global acceleration instance ID.
     * @param string $ListenerId Listener ID.
     * @param string $ForwardingPolicyId Layer 7 forwarding rule ID.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returns. Default value: 20. Maximum value: 100.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
