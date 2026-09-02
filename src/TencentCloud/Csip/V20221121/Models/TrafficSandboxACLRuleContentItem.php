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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ACL rule content. The sub-rule ID is managed internally by the server and not exposed to the public.
 *
 * @method TrafficSandboxACLDstRule getDstRule() Obtain Target (IP/port) match rule
 * @method void setDstRule(TrafficSandboxACLDstRule $DstRule) Set Target (IP/port) match rule
 * @method TrafficSandboxACLURLRule getURLRule() Obtain URL, protocol, and method match rules
 * @method void setURLRule(TrafficSandboxACLURLRule $URLRule) Set URL, protocol, and method match rules
 */
class TrafficSandboxACLRuleContentItem extends AbstractModel
{
    /**
     * @var TrafficSandboxACLDstRule Target (IP/port) match rule
     */
    public $DstRule;

    /**
     * @var TrafficSandboxACLURLRule URL, protocol, and method match rules
     */
    public $URLRule;

    /**
     * @param TrafficSandboxACLDstRule $DstRule Target (IP/port) match rule
     * @param TrafficSandboxACLURLRule $URLRule URL, protocol, and method match rules
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
        if (array_key_exists("DstRule",$param) and $param["DstRule"] !== null) {
            $this->DstRule = new TrafficSandboxACLDstRule();
            $this->DstRule->deserialize($param["DstRule"]);
        }

        if (array_key_exists("URLRule",$param) and $param["URLRule"] !== null) {
            $this->URLRule = new TrafficSandboxACLURLRule();
            $this->URLRule->deserialize($param["URLRule"]);
        }
    }
}
