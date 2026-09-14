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
 * DescribeGlobalAcceleratorAclRules request structure.
 *
 * @method string getGlobalAcceleratorAclPolicyId() Obtain <p>Access control policy ID.</p>
 * @method void setGlobalAcceleratorAclPolicyId(string $GlobalAcceleratorAclPolicyId) Set <p>Access control policy ID.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned results.</p><p>Value range: [1, 200]</p><p>Default value: 20</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results.</p><p>Value range: [1, 200]</p><p>Default value: 20</p>
 */
class DescribeGlobalAcceleratorAclRulesRequest extends AbstractModel
{
    /**
     * @var string <p>Access control policy ID.</p>
     */
    public $GlobalAcceleratorAclPolicyId;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned results.</p><p>Value range: [1, 200]</p><p>Default value: 20</p>
     */
    public $Limit;

    /**
     * @param string $GlobalAcceleratorAclPolicyId <p>Access control policy ID.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned results.</p><p>Value range: [1, 200]</p><p>Default value: 20</p>
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
        if (array_key_exists("GlobalAcceleratorAclPolicyId",$param) and $param["GlobalAcceleratorAclPolicyId"] !== null) {
            $this->GlobalAcceleratorAclPolicyId = $param["GlobalAcceleratorAclPolicyId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
