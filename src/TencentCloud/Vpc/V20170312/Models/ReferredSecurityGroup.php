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
 * Referred security groups
 *
 * @method string getSecurityGroupId() Obtain Security group instance ID.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group instance ID.
 * @method array getReferredSecurityGroupIds() Obtain IDs of all referred security group instances.
 * @method void setReferredSecurityGroupIds(array $ReferredSecurityGroupIds) Set IDs of all referred security group instances.
 */
class ReferredSecurityGroup extends AbstractModel
{
    /**
     * @var string Security group instance ID.
     */
    public $SecurityGroupId;

    /**
     * @var array IDs of all referred security group instances.
     */
    public $ReferredSecurityGroupIds;

    /**
     * @param string $SecurityGroupId Security group instance ID.
     * @param array $ReferredSecurityGroupIds IDs of all referred security group instances.
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

        if (array_key_exists("ReferredSecurityGroupIds",$param) and $param["ReferredSecurityGroupIds"] !== null) {
            $this->ReferredSecurityGroupIds = $param["ReferredSecurityGroupIds"];
        }
    }
}
