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
 * ModifyGatewayLoadBalancerAttribute request structure.
 *
 * @method string getLoadBalancerId() Obtain Unique GWLB ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Unique GWLB ID.
 * @method string getLoadBalancerName() Obtain GWLB instance name. It supports input of 1 to 60 characters.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set GWLB instance name. It supports input of 1 to 60 characters.
 */
class ModifyGatewayLoadBalancerAttributeRequest extends AbstractModel
{
    /**
     * @var string Unique GWLB ID.
     */
    public $LoadBalancerId;

    /**
     * @var string GWLB instance name. It supports input of 1 to 60 characters.
     */
    public $LoadBalancerName;

    /**
     * @param string $LoadBalancerId Unique GWLB ID.
     * @param string $LoadBalancerName GWLB instance name. It supports input of 1 to 60 characters.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }
    }
}
