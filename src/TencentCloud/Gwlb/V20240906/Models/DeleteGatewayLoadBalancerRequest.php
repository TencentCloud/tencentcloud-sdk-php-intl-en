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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteGatewayLoadBalancer request structure.
 *
 * @method array getLoadBalancerIds() Obtain Array of GWLB instance IDs to be deleted, with the array size up to 20.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set Array of GWLB instance IDs to be deleted, with the array size up to 20.
 */
class DeleteGatewayLoadBalancerRequest extends AbstractModel
{
    /**
     * @var array Array of GWLB instance IDs to be deleted, with the array size up to 20.
     */
    public $LoadBalancerIds;

    /**
     * @param array $LoadBalancerIds Array of GWLB instance IDs to be deleted, with the array size up to 20.
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
