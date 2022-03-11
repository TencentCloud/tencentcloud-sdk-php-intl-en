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
 * DeleteSecurityGroupPolicies request structure.
 *
 * @method string getSecurityGroupId() Obtain Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
 * @method SecurityGroupPolicySet getSecurityGroupPolicySet() Obtain Security group policy set. You can only delete one or more policies in one direction in one request. Both PolicyIndex-matching deletion and security group policy-matching deletion methods are supported. You can use only one matching method in one request.
 * @method void setSecurityGroupPolicySet(SecurityGroupPolicySet $SecurityGroupPolicySet) Set Security group policy set. You can only delete one or more policies in one direction in one request. Both PolicyIndex-matching deletion and security group policy-matching deletion methods are supported. You can use only one matching method in one request.
 */
class DeleteSecurityGroupPoliciesRequest extends AbstractModel
{
    /**
     * @var string Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
     */
    public $SecurityGroupId;

    /**
     * @var SecurityGroupPolicySet Security group policy set. You can only delete one or more policies in one direction in one request. Both PolicyIndex-matching deletion and security group policy-matching deletion methods are supported. You can use only one matching method in one request.
     */
    public $SecurityGroupPolicySet;

    /**
     * @param string $SecurityGroupId Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
     * @param SecurityGroupPolicySet $SecurityGroupPolicySet Security group policy set. You can only delete one or more policies in one direction in one request. Both PolicyIndex-matching deletion and security group policy-matching deletion methods are supported. You can use only one matching method in one request.
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
