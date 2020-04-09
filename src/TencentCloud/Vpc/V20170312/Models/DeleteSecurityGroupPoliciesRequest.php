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
 * DeleteSecurityGroupPolicies request structure.
 *
 * @method string getSecurityGroupId() Obtain The security group instance ID, such as `sg-33ocnj9n`. This can be obtained through DescribeSecurityGroups.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set The security group instance ID, such as `sg-33ocnj9n`. This can be obtained through DescribeSecurityGroups.
 * @method SecurityGroupPolicySet getSecurityGroupPolicySet() Obtain The policy set of the security group. One request can only delete one or more policies in one direction. Both PolicyIndex-matching deletion and security group policy-matching deletion methods are supported. Each request can use only one matching method.
 * @method void setSecurityGroupPolicySet(SecurityGroupPolicySet $SecurityGroupPolicySet) Set The policy set of the security group. One request can only delete one or more policies in one direction. Both PolicyIndex-matching deletion and security group policy-matching deletion methods are supported. Each request can use only one matching method.
 */
class DeleteSecurityGroupPoliciesRequest extends AbstractModel
{
    /**
     * @var string The security group instance ID, such as `sg-33ocnj9n`. This can be obtained through DescribeSecurityGroups.
     */
    public $SecurityGroupId;

    /**
     * @var SecurityGroupPolicySet The policy set of the security group. One request can only delete one or more policies in one direction. Both PolicyIndex-matching deletion and security group policy-matching deletion methods are supported. Each request can use only one matching method.
     */
    public $SecurityGroupPolicySet;

    /**
     * @param string $SecurityGroupId The security group instance ID, such as `sg-33ocnj9n`. This can be obtained through DescribeSecurityGroups.
     * @param SecurityGroupPolicySet $SecurityGroupPolicySet The policy set of the security group. One request can only delete one or more policies in one direction. Both PolicyIndex-matching deletion and security group policy-matching deletion methods are supported. Each request can use only one matching method.
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

        if (array_key_exists("SecurityGroupPolicySet",$param) and $param["SecurityGroupPolicySet"] !== null) {
            $this->SecurityGroupPolicySet = new SecurityGroupPolicySet();
            $this->SecurityGroupPolicySet->deserialize($param["SecurityGroupPolicySet"]);
        }
    }
}
