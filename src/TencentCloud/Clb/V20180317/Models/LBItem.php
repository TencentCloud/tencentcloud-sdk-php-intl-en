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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Querying the binding relation of the CLB instance
 *
 * @method string getLoadBalancerId() Obtain String ID of the CLB instance.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set String ID of the CLB instance.
 * @method string getVip() Obtain VIP of the CLB instance.
 * @method void setVip(string $Vip) Set VIP of the CLB instance.
 * @method array getListeners() Obtain Listener rule.
 * @method void setListeners(array $Listeners) Set Listener rule.
 * @method string getRegion() Obtain Region of the CLB instance
 * @method void setRegion(string $Region) Set Region of the CLB instance
 */
class LBItem extends AbstractModel
{
    /**
     * @var string String ID of the CLB instance.
     */
    public $LoadBalancerId;

    /**
     * @var string VIP of the CLB instance.
     */
    public $Vip;

    /**
     * @var array Listener rule.
     */
    public $Listeners;

    /**
     * @var string Region of the CLB instance
     */
    public $Region;

    /**
     * @param string $LoadBalancerId String ID of the CLB instance.
     * @param string $Vip VIP of the CLB instance.
     * @param array $Listeners Listener rule.
     * @param string $Region Region of the CLB instance
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Listeners",$param) and $param["Listeners"] !== null) {
            $this->Listeners = [];
            foreach ($param["Listeners"] as $key => $value){
                $obj = new ListenerItem();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
