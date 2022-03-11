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
 * AssociateSecurityGroups request structure.
 *
 * @method array getSecurityGroupIds() Obtain ID of the security group to be bound, such as `esg-efil73jd`. You can bind only one security group.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set ID of the security group to be bound, such as `esg-efil73jd`. You can bind only one security group.
 * @method array getInstanceIds() Obtain ID of the bound instance, such as `ein-lesecurk`. You can specify multiple instances and request up to 100 instances at a time.
 * @method void setInstanceIds(array $InstanceIds) Set ID of the bound instance, such as `ein-lesecurk`. You can specify multiple instances and request up to 100 instances at a time.
 */
class AssociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array ID of the security group to be bound, such as `esg-efil73jd`. You can bind only one security group.
     */
    public $SecurityGroupIds;

    /**
     * @var array ID of the bound instance, such as `ein-lesecurk`. You can specify multiple instances and request up to 100 instances at a time.
     */
    public $InstanceIds;

    /**
     * @param array $SecurityGroupIds ID of the security group to be bound, such as `esg-efil73jd`. You can bind only one security group.
     * @param array $InstanceIds ID of the bound instance, such as `ein-lesecurk`. You can specify multiple instances and request up to 100 instances at a time.
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
