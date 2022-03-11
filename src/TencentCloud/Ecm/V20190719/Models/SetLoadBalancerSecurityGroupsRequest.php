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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetLoadBalancerSecurityGroups request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method array getSecurityGroups() Obtain Array of security group IDs. You can bind up to 5 security groups to a CLB instance. If you want to unbind all security groups, leave this parameter empty or pass in an empty array
 * @method void setSecurityGroups(array $SecurityGroups) Set Array of security group IDs. You can bind up to 5 security groups to a CLB instance. If you want to unbind all security groups, leave this parameter empty or pass in an empty array
 */
class SetLoadBalancerSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var array Array of security group IDs. You can bind up to 5 security groups to a CLB instance. If you want to unbind all security groups, leave this parameter empty or pass in an empty array
     */
    public $SecurityGroups;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param array $SecurityGroups Array of security group IDs. You can bind up to 5 security groups to a CLB instance. If you want to unbind all security groups, leave this parameter empty or pass in an empty array
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

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }
    }
}
