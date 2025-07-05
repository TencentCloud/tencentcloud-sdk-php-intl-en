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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a CLB instance
 *
 * @method string getLoadBalancerId() Obtain The CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set The CLB instance ID.
 * @method string getLoadBalancerName() Obtain The CLB instance name.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set The CLB instance name.
 * @method array getListeners() Obtain CLB listener list.
 * @method void setListeners(array $Listeners) Set CLB listener list.
 */
class ClbInstanceDetail extends AbstractModel
{
    /**
     * @var string The CLB instance ID.
     */
    public $LoadBalancerId;

    /**
     * @var string The CLB instance name.
     */
    public $LoadBalancerName;

    /**
     * @var array CLB listener list.
     */
    public $Listeners;

    /**
     * @param string $LoadBalancerId The CLB instance ID.
     * @param string $LoadBalancerName The CLB instance name.
     * @param array $Listeners CLB listener list.
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

        if (array_key_exists("Listeners",$param) and $param["Listeners"] !== null) {
            $this->Listeners = [];
            foreach ($param["Listeners"] as $key => $value){
                $obj = new ClbListener();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }
    }
}
