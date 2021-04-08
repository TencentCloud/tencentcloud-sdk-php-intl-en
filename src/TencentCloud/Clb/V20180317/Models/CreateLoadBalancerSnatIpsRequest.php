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
 * CreateLoadBalancerSnatIps request structure.
 *
 * @method string getLoadBalancerId() Obtain Unique ID of a CLB instance, e.g., lb-12345678.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Unique ID of a CLB instance, e.g., lb-12345678.
 * @method array getSnatIps() Obtain Information of the SNAT IP to be added. You can apply for a specified IP or apply for an automatically assigned IP by specifying a subnet.
 * @method void setSnatIps(array $SnatIps) Set Information of the SNAT IP to be added. You can apply for a specified IP or apply for an automatically assigned IP by specifying a subnet.
 */
class CreateLoadBalancerSnatIpsRequest extends AbstractModel
{
    /**
     * @var string Unique ID of a CLB instance, e.g., lb-12345678.
     */
    public $LoadBalancerId;

    /**
     * @var array Information of the SNAT IP to be added. You can apply for a specified IP or apply for an automatically assigned IP by specifying a subnet.
     */
    public $SnatIps;

    /**
     * @param string $LoadBalancerId Unique ID of a CLB instance, e.g., lb-12345678.
     * @param array $SnatIps Information of the SNAT IP to be added. You can apply for a specified IP or apply for an automatically assigned IP by specifying a subnet.
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

        if (array_key_exists("SnatIps",$param) and $param["SnatIps"] !== null) {
            $this->SnatIps = [];
            foreach ($param["SnatIps"] as $key => $value){
                $obj = new SnatIp();
                $obj->deserialize($value);
                array_push($this->SnatIps, $obj);
            }
        }
    }
}
