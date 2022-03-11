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
 * ModifySecurityGroupPolicies request structure.
 *
 * @method string getSecurityGroupId() Obtain Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
 * @method SecurityGroupPolicySet getSecurityGroupPolicySet() Obtain Security group policy set. You must specify both new egress and ingress policies for the `SecurityGroupPolicySet` object. You cannot customize the index (PolicyIndex) of the `SecurityGroupPolicy` object.
 * @method void setSecurityGroupPolicySet(SecurityGroupPolicySet $SecurityGroupPolicySet) Set Security group policy set. You must specify both new egress and ingress policies for the `SecurityGroupPolicySet` object. You cannot customize the index (PolicyIndex) of the `SecurityGroupPolicy` object.
 * @method boolean getSortPolicys() Obtain Whether security group sorting is supported. `True` indicates yes. If `SortPolicys` doesn't exist or is set to `False`, the security group policy can be modified.
 * @method void setSortPolicys(boolean $SortPolicys) Set Whether security group sorting is supported. `True` indicates yes. If `SortPolicys` doesn't exist or is set to `False`, the security group policy can be modified.
 */
class ModifySecurityGroupPoliciesRequest extends AbstractModel
{
    /**
     * @var string Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
     */
    public $SecurityGroupId;

    /**
     * @var SecurityGroupPolicySet Security group policy set. You must specify both new egress and ingress policies for the `SecurityGroupPolicySet` object. You cannot customize the index (PolicyIndex) of the `SecurityGroupPolicy` object.
     */
    public $SecurityGroupPolicySet;

    /**
     * @var boolean Whether security group sorting is supported. `True` indicates yes. If `SortPolicys` doesn't exist or is set to `False`, the security group policy can be modified.
     */
    public $SortPolicys;

    /**
     * @param string $SecurityGroupId Security group instance ID, such as `esg-33ocnj9n`, which can be obtained through the `DescribeSecurityGroups` API.
     * @param SecurityGroupPolicySet $SecurityGroupPolicySet Security group policy set. You must specify both new egress and ingress policies for the `SecurityGroupPolicySet` object. You cannot customize the index (PolicyIndex) of the `SecurityGroupPolicy` object.
     * @param boolean $SortPolicys Whether security group sorting is supported. `True` indicates yes. If `SortPolicys` doesn't exist or is set to `False`, the security group policy can be modified.
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

        if (array_key_exists("SortPolicys",$param) and $param["SortPolicys"] !== null) {
            $this->SortPolicys = $param["SortPolicys"];
        }
    }
}
