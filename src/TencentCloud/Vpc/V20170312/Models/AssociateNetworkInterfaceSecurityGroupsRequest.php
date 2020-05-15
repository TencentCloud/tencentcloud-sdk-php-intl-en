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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateNetworkInterfaceSecurityGroups request structure.
 *
 * @method array getNetworkInterfaceIds() Obtain ENI instance ID, e.g. eni-pxir56ns. You can enter up to 100 instances for each request.
 * @method void setNetworkInterfaceIds(array $NetworkInterfaceIds) Set ENI instance ID, e.g. eni-pxir56ns. You can enter up to 100 instances for each request.
 * @method array getSecurityGroupIds() Obtain The security group instance ID, such as `sg-33ocnj9n`. It can be obtained through DescribeSecurityGroups. You can enter up to 100 instances for each request.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The security group instance ID, such as `sg-33ocnj9n`. It can be obtained through DescribeSecurityGroups. You can enter up to 100 instances for each request.
 */
class AssociateNetworkInterfaceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array ENI instance ID, e.g. eni-pxir56ns. You can enter up to 100 instances for each request.
     */
    public $NetworkInterfaceIds;

    /**
     * @var array The security group instance ID, such as `sg-33ocnj9n`. It can be obtained through DescribeSecurityGroups. You can enter up to 100 instances for each request.
     */
    public $SecurityGroupIds;

    /**
     * @param array $NetworkInterfaceIds ENI instance ID, e.g. eni-pxir56ns. You can enter up to 100 instances for each request.
     * @param array $SecurityGroupIds The security group instance ID, such as `sg-33ocnj9n`. It can be obtained through DescribeSecurityGroups. You can enter up to 100 instances for each request.
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
        if (array_key_exists("NetworkInterfaceIds",$param) and $param["NetworkInterfaceIds"] !== null) {
            $this->NetworkInterfaceIds = $param["NetworkInterfaceIds"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
