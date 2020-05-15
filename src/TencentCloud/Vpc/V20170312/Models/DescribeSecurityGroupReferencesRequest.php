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
 * DescribeSecurityGroupReferences request structure.
 *
 * @method array getSecurityGroupIds() Obtain A set of security group instance IDs, e.g. ['sg-12345678']
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set A set of security group instance IDs, e.g. ['sg-12345678']
 */
class DescribeSecurityGroupReferencesRequest extends AbstractModel
{
    /**
     * @var array A set of security group instance IDs, e.g. ['sg-12345678']
     */
    public $SecurityGroupIds;

    /**
     * @param array $SecurityGroupIds A set of security group instance IDs, e.g. ['sg-12345678']
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
    }
}
