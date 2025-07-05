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
 * CLB health status
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerName() Obtain CLB instance name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getListeners() Obtain List of listeners
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setListeners(array $Listeners) Set List of listeners
Note: this field may return null, indicating that no valid values can be obtained.
 */
class LoadBalancerHealth extends AbstractModel
{
    /**
     * @var string CLB instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerId;

    /**
     * @var string CLB instance name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerName;

    /**
     * @var array List of listeners
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Listeners;

    /**
     * @param string $LoadBalancerId CLB instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerName CLB instance name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Listeners List of listeners
Note: this field may return null, indicating that no valid values can be obtained.
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
                $obj = new ListenerHealth();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }
    }
}
