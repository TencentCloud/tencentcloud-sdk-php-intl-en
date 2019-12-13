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
 * @method string getSecurityGroup() 获取Security group ID, such as sg-12345678
 * @method void setSecurityGroup(string $SecurityGroup) 设置Security group ID, such as sg-12345678
 * @method string getOperationType() 获取ADD: bind a security group;
DEL: unbind a security group
 * @method void setOperationType(string $OperationType) 设置ADD: bind a security group;
DEL: unbind a security group
 * @method array getLoadBalancerIds() 获取Array of CLB instance IDs
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置Array of CLB instance IDs
 */

/**
 *SetSecurityGroupForLoadbalancers request structure.
 */
class SetSecurityGroupForLoadbalancersRequest extends AbstractModel
{
    /**
     * @var string Security group ID, such as sg-12345678
     */
    public $SecurityGroup;

    /**
     * @var string ADD: bind a security group;
DEL: unbind a security group
     */
    public $OperationType;

    /**
     * @var array Array of CLB instance IDs
     */
    public $LoadBalancerIds;
    /**
     * @param string $SecurityGroup Security group ID, such as sg-12345678
     * @param string $OperationType ADD: bind a security group;
DEL: unbind a security group
     * @param array $LoadBalancerIds Array of CLB instance IDs
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
        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }
    }
}
