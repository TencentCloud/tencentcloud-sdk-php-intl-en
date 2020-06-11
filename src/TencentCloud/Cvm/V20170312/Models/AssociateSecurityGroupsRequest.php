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
 * AssociateSecurityGroups request structure.
 *
 * @method array getSecurityGroupIds() Obtain ID of the security group to be associated, such as `sg-efil73jd`. Only one security group can be associated.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set ID of the security group to be associated, such as `sg-efil73jd`. Only one security group can be associated.
 * @method array getInstanceIds() Obtain ID of the instance bound in the format of ins-lesecurk. You can specify up to 100 instances in each request.
 * @method void setInstanceIds(array $InstanceIds) Set ID of the instance bound in the format of ins-lesecurk. You can specify up to 100 instances in each request.
 */
class AssociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array ID of the security group to be associated, such as `sg-efil73jd`. Only one security group can be associated.
     */
    public $SecurityGroupIds;

    /**
     * @var array ID of the instance bound in the format of ins-lesecurk. You can specify up to 100 instances in each request.
     */
    public $InstanceIds;

    /**
     * @param array $SecurityGroupIds ID of the security group to be associated, such as `sg-efil73jd`. Only one security group can be associated.
     * @param array $InstanceIds ID of the instance bound in the format of ins-lesecurk. You can specify up to 100 instances in each request.
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
        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
