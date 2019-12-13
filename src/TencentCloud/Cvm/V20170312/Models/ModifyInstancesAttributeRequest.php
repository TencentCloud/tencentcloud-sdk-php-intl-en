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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceIds() 获取Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method void setInstanceIds(array $InstanceIds) 设置Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method string getInstanceName() 获取Instance name. You can specify any name you like, but its length cannot exceed 60 characters.
 * @method void setInstanceName(string $InstanceName) 设置Instance name. You can specify any name you like, but its length cannot exceed 60 characters.
 * @method array getSecurityGroups() 获取ID list of security groups of the instance. The instance will be associated with the specified security groups and will be disassociated from the original security groups.
 * @method void setSecurityGroups(array $SecurityGroups) 设置ID list of security groups of the instance. The instance will be associated with the specified security groups and will be disassociated from the original security groups.
 */

/**
 *ModifyInstancesAttribute request structure.
 */
class ModifyInstancesAttributeRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     */
    public $InstanceIds;

    /**
     * @var string Instance name. You can specify any name you like, but its length cannot exceed 60 characters.
     */
    public $InstanceName;

    /**
     * @var array ID list of security groups of the instance. The instance will be associated with the specified security groups and will be disassociated from the original security groups.
     */
    public $SecurityGroups;
    /**
     * @param array $InstanceIds Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     * @param string $InstanceName Instance name. You can specify any name you like, but its length cannot exceed 60 characters.
     * @param array $SecurityGroups ID list of security groups of the instance. The instance will be associated with the specified security groups and will be disassociated from the original security groups.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }
    }
}
