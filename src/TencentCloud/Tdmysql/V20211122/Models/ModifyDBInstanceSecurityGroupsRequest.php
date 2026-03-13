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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSecurityGroups request structure.
 *
 * @method string getInstanceId() Obtain Instance id.
 * @method void setInstanceId(string $InstanceId) Set Instance id.
 * @method array getSecurityGroupIds() Obtain Security group ID list to modify. an array of one or more security group ids.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID list to modify. an array of one or more security group ids.
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Instance id.
     */
    public $InstanceId;

    /**
     * @var array Security group ID list to modify. an array of one or more security group ids.
     */
    public $SecurityGroupIds;

    /**
     * @param string $InstanceId Instance id.
     * @param array $SecurityGroupIds Security group ID list to modify. an array of one or more security group ids.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
