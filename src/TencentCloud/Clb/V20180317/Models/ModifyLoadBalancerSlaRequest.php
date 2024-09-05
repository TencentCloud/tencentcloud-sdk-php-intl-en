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
 * ModifyLoadBalancerSla request structure.
 *
 * @method array getLoadBalancerSla() Obtain CLB instance information.
 * @method void setLoadBalancerSla(array $LoadBalancerSla) Set CLB instance information.
 * @method boolean getForce() Obtain Whether to force upgrade. The default is no.
 * @method void setForce(boolean $Force) Set Whether to force upgrade. The default is no.
 */
class ModifyLoadBalancerSlaRequest extends AbstractModel
{
    /**
     * @var array CLB instance information.
     */
    public $LoadBalancerSla;

    /**
     * @var boolean Whether to force upgrade. The default is no.
     */
    public $Force;

    /**
     * @param array $LoadBalancerSla CLB instance information.
     * @param boolean $Force Whether to force upgrade. The default is no.
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
        if (array_key_exists("LoadBalancerSla",$param) and $param["LoadBalancerSla"] !== null) {
            $this->LoadBalancerSla = [];
            foreach ($param["LoadBalancerSla"] as $key => $value){
                $obj = new SlaUpdateParam();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSla, $obj);
            }
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
