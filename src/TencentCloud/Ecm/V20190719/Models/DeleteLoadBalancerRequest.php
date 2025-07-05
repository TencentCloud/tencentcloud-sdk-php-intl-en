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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLoadBalancer request structure.
 *
 * @method array getLoadBalancerIds() Obtain Array of IDs of the CLB instances to be deleted. Array length limit: 20
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set Array of IDs of the CLB instances to be deleted. Array length limit: 20
 */
class DeleteLoadBalancerRequest extends AbstractModel
{
    /**
     * @var array Array of IDs of the CLB instances to be deleted. Array length limit: 20
     */
    public $LoadBalancerIds;

    /**
     * @param array $LoadBalancerIds Array of IDs of the CLB instances to be deleted. Array length limit: 20
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }
    }
}
