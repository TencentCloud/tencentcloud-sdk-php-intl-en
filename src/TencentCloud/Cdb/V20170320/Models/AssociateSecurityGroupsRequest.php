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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateSecurityGroups request structure.
 *
 * @method string getSecurityGroupId() Obtain Security group ID.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID.
 * @method array getInstanceIds() Obtain List of instance IDs, which is an array of one or more instance IDs.
 * @method void setInstanceIds(array $InstanceIds) Set List of instance IDs, which is an array of one or more instance IDs.
 * @method boolean getForReadonlyInstance() Obtain This parameter takes effect only when the IDs of read-only replicas are passed in. If this parameter is set to `False` or left empty, the security group will be bound to the RO groups of these read-only replicas. If this parameter is set to `True`, the security group will be bound to the read-only replicas themselves.
 * @method void setForReadonlyInstance(boolean $ForReadonlyInstance) Set This parameter takes effect only when the IDs of read-only replicas are passed in. If this parameter is set to `False` or left empty, the security group will be bound to the RO groups of these read-only replicas. If this parameter is set to `True`, the security group will be bound to the read-only replicas themselves.
 */
class AssociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Security group ID.
     */
    public $SecurityGroupId;

    /**
     * @var array List of instance IDs, which is an array of one or more instance IDs.
     */
    public $InstanceIds;

    /**
     * @var boolean This parameter takes effect only when the IDs of read-only replicas are passed in. If this parameter is set to `False` or left empty, the security group will be bound to the RO groups of these read-only replicas. If this parameter is set to `True`, the security group will be bound to the read-only replicas themselves.
     */
    public $ForReadonlyInstance;

    /**
     * @param string $SecurityGroupId Security group ID.
     * @param array $InstanceIds List of instance IDs, which is an array of one or more instance IDs.
     * @param boolean $ForReadonlyInstance This parameter takes effect only when the IDs of read-only replicas are passed in. If this parameter is set to `False` or left empty, the security group will be bound to the RO groups of these read-only replicas. If this parameter is set to `True`, the security group will be bound to the read-only replicas themselves.
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ForReadonlyInstance",$param) and $param["ForReadonlyInstance"] !== null) {
            $this->ForReadonlyInstance = $param["ForReadonlyInstance"];
        }
    }
}
