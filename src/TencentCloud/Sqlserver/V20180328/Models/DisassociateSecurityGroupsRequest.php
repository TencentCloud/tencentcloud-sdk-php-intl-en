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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateSecurityGroups request structure.
 *
 * @method string getSecurityGroupId() Obtain Security group ID.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID.
 * @method array getInstanceIdSet() Obtain Instance ID list, which is an array of one or more instance IDs. Multiple instances should be in the same region, AZ, and project.
 * @method void setInstanceIdSet(array $InstanceIdSet) Set Instance ID list, which is an array of one or more instance IDs. Multiple instances should be in the same region, AZ, and project.
 */
class DisassociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Security group ID.
     */
    public $SecurityGroupId;

    /**
     * @var array Instance ID list, which is an array of one or more instance IDs. Multiple instances should be in the same region, AZ, and project.
     */
    public $InstanceIdSet;

    /**
     * @param string $SecurityGroupId Security group ID.
     * @param array $InstanceIdSet Instance ID list, which is an array of one or more instance IDs. Multiple instances should be in the same region, AZ, and project.
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

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }
    }
}
