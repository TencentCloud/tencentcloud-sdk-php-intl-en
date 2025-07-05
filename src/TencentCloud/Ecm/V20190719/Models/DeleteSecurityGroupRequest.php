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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSecurityGroup request structure.
 *
 * @method string getSecurityGroupId() Obtain Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
 */
class DeleteSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
     */
    public $SecurityGroupId;

    /**
     * @param string $SecurityGroupId Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
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
    }
}
