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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getLoadBalancerId() 获取Load balancer ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置Load balancer ID
 * @method string getListenerId() 获取Application load balancer listener ID
 * @method void setListenerId(string $ListenerId) 设置Application load balancer listener ID
 * @method array getTargetAttributes() 获取List of target rule attributes
 * @method void setTargetAttributes(array $TargetAttributes) 设置List of target rule attributes
 * @method string getLocationId() 获取ID of a forwarding rule. This parameter is required for layer-7 listeners.
 * @method void setLocationId(string $LocationId) 设置ID of a forwarding rule. This parameter is required for layer-7 listeners.
 */

/**
 *Application load balancer
 */
class ForwardLoadBalancer extends AbstractModel
{
    /**
     * @var string Load balancer ID
     */
    public $LoadBalancerId;

    /**
     * @var string Application load balancer listener ID
     */
    public $ListenerId;

    /**
     * @var array List of target rule attributes
     */
    public $TargetAttributes;

    /**
     * @var string ID of a forwarding rule. This parameter is required for layer-7 listeners.
     */
    public $LocationId;
    /**
     * @param string $LoadBalancerId Load balancer ID
     * @param string $ListenerId Application load balancer listener ID
     * @param array $TargetAttributes List of target rule attributes
     * @param string $LocationId ID of a forwarding rule. This parameter is required for layer-7 listeners.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("TargetAttributes",$param) and $param["TargetAttributes"] !== null) {
            $this->TargetAttributes = [];
            foreach ($param["TargetAttributes"] as $key => $value){
                $obj = new TargetAttribute();
                $obj->deserialize($value);
                array_push($this->TargetAttributes, $obj);
            }
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }
    }
}
