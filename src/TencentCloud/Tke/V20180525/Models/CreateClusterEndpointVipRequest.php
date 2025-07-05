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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterEndpointVip request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getSecurityPolicies() Obtain Security policy opens single IP or CIDR to the Internet (for example: '192.168.1.0/24', with 'reject all' as the default).
 * @method void setSecurityPolicies(array $SecurityPolicies) Set Security policy opens single IP or CIDR to the Internet (for example: '192.168.1.0/24', with 'reject all' as the default).
 */
class CreateClusterEndpointVipRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Security policy opens single IP or CIDR to the Internet (for example: '192.168.1.0/24', with 'reject all' as the default).
     */
    public $SecurityPolicies;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $SecurityPolicies Security policy opens single IP or CIDR to the Internet (for example: '192.168.1.0/24', with 'reject all' as the default).
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SecurityPolicies",$param) and $param["SecurityPolicies"] !== null) {
            $this->SecurityPolicies = $param["SecurityPolicies"];
        }
    }
}
