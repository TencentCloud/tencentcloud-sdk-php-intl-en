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
 * ReplaceSecurityGroupPolicies request structure.
 *
 * @method string getSecurityGroupId() Obtain The security group instance ID, such as `sg-33ocnj9n`. This can be obtained through the `DescribeSecurityGroups` API.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set The security group instance ID, such as `sg-33ocnj9n`. This can be obtained through the `DescribeSecurityGroups` API.
 * @method SecurityGroupPolicySet getSecurityGroupPolicySet() Obtain Security group policy set object.
 * @method void setSecurityGroupPolicySet(SecurityGroupPolicySet $SecurityGroupPolicySet) Set Security group policy set object.
 * @method SecurityGroupPolicySet getOriginalSecurityGroupPolicySet() Obtain (Optional) The old policy set of the security group, which is used for log records.
 * @method void setOriginalSecurityGroupPolicySet(SecurityGroupPolicySet $OriginalSecurityGroupPolicySet) Set (Optional) The old policy set of the security group, which is used for log records.
 */
class ReplaceSecurityGroupPoliciesRequest extends AbstractModel
{
    /**
     * @var string The security group instance ID, such as `sg-33ocnj9n`. This can be obtained through the `DescribeSecurityGroups` API.
     */
    public $SecurityGroupId;

    /**
     * @var SecurityGroupPolicySet Security group policy set object.
     */
    public $SecurityGroupPolicySet;

    /**
     * @var SecurityGroupPolicySet (Optional) The old policy set of the security group, which is used for log records.
     */
    public $OriginalSecurityGroupPolicySet;

    /**
     * @param string $SecurityGroupId The security group instance ID, such as `sg-33ocnj9n`. This can be obtained through the `DescribeSecurityGroups` API.
     * @param SecurityGroupPolicySet $SecurityGroupPolicySet Security group policy set object.
     * @param SecurityGroupPolicySet $OriginalSecurityGroupPolicySet (Optional) The old policy set of the security group, which is used for log records.
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

        if (array_key_exists("OriginalSecurityGroupPolicySet",$param) and $param["OriginalSecurityGroupPolicySet"] !== null) {
            $this->OriginalSecurityGroupPolicySet = new SecurityGroupPolicySet();
            $this->OriginalSecurityGroupPolicySet->deserialize($param["OriginalSecurityGroupPolicySet"]);
        }
    }
}
