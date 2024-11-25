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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Virtual node pool information.
 *
 * @method array getSubnetIds() Obtain Subnet list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSubnetIds(array $SubnetIds) Set Subnet list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getSecurityGroupIds() Obtain Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class SuperNodePoolInfo extends AbstractModel
{
    /**
     * @var array Subnet list
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $SubnetIds;

    /**
     * @var array Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $SecurityGroupIds;

    /**
     * @param array $SubnetIds Subnet list
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $SecurityGroupIds Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
