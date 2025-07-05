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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenSecurityPolicy request structure.
 *
 * @method string getProxyId() Obtain ID of the connections requiring enabled security policies.
 * @method void setProxyId(string $ProxyId) Set ID of the connections requiring enabled security policies.
 * @method string getPolicyId() Obtain Security policy ID
 * @method void setPolicyId(string $PolicyId) Set Security policy ID
 */
class OpenSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string ID of the connections requiring enabled security policies.
     */
    public $ProxyId;

    /**
     * @var string Security policy ID
     */
    public $PolicyId;

    /**
     * @param string $ProxyId ID of the connections requiring enabled security policies.
     * @param string $PolicyId Security policy ID
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
