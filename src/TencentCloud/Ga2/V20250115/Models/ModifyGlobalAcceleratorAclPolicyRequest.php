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
 * ModifyGlobalAcceleratorAclPolicy request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getGlobalAcceleratorAclPolicyId() Obtain <p>Access control policy ID.</p>
 * @method void setGlobalAcceleratorAclPolicyId(string $GlobalAcceleratorAclPolicyId) Set <p>Access control policy ID.</p>
 * @method string getStatus() Obtain <p>Access control policy status.</p><p>Enumeration values:</p><ul><li>OPEN: On.</li><li>CLOSE: Off.</li></ul>
 * @method void setStatus(string $Status) Set <p>Access control policy status.</p><p>Enumeration values:</p><ul><li>OPEN: On.</li><li>CLOSE: Off.</li></ul>
 */
class ModifyGlobalAcceleratorAclPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Access control policy ID.</p>
     */
    public $GlobalAcceleratorAclPolicyId;

    /**
     * @var string <p>Access control policy status.</p><p>Enumeration values:</p><ul><li>OPEN: On.</li><li>CLOSE: Off.</li></ul>
     */
    public $Status;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $GlobalAcceleratorAclPolicyId <p>Access control policy ID.</p>
     * @param string $Status <p>Access control policy status.</p><p>Enumeration values:</p><ul><li>OPEN: On.</li><li>CLOSE: Off.</li></ul>
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

        if (array_key_exists("GlobalAcceleratorAclPolicyId",$param) and $param["GlobalAcceleratorAclPolicyId"] !== null) {
            $this->GlobalAcceleratorAclPolicyId = $param["GlobalAcceleratorAclPolicyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
