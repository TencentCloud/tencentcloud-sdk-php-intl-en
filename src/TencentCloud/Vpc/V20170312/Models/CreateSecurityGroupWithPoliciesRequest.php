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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityGroupWithPolicies request structure.
 *
 * @method string getGroupName() Obtain Security group can be named freely, but cannot exceed 60 characters.
 * @method void setGroupName(string $GroupName) Set Security group can be named freely, but cannot exceed 60 characters.
 * @method string getGroupDescription() Obtain The remarks for the security group. The maximum length is 100 characters.
 * @method void setGroupDescription(string $GroupDescription) Set The remarks for the security group. The maximum length is 100 characters.
 * @method string getProjectId() Obtain Project ID. Default value: 0. You can query it on the <a href="https://console.cloud.tencent.com/project">project management page</a> of the Tencent Cloud console.
 * @method void setProjectId(string $ProjectId) Set Project ID. Default value: 0. You can query it on the <a href="https://console.cloud.tencent.com/project">project management page</a> of the Tencent Cloud console.
 * @method SecurityGroupPolicySet getSecurityGroupPolicySet() Obtain Security group policy set.
 * @method void setSecurityGroupPolicySet(SecurityGroupPolicySet $SecurityGroupPolicySet) Set Security group policy set.
 */
class CreateSecurityGroupWithPoliciesRequest extends AbstractModel
{
    /**
     * @var string Security group can be named freely, but cannot exceed 60 characters.
     */
    public $GroupName;

    /**
     * @var string The remarks for the security group. The maximum length is 100 characters.
     */
    public $GroupDescription;

    /**
     * @var string Project ID. Default value: 0. You can query it on the <a href="https://console.cloud.tencent.com/project">project management page</a> of the Tencent Cloud console.
     */
    public $ProjectId;

    /**
     * @var SecurityGroupPolicySet Security group policy set.
     */
    public $SecurityGroupPolicySet;

    /**
     * @param string $GroupName Security group can be named freely, but cannot exceed 60 characters.
     * @param string $GroupDescription The remarks for the security group. The maximum length is 100 characters.
     * @param string $ProjectId Project ID. Default value: 0. You can query it on the <a href="https://console.cloud.tencent.com/project">project management page</a> of the Tencent Cloud console.
     * @param SecurityGroupPolicySet $SecurityGroupPolicySet Security group policy set.
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupDescription",$param) and $param["GroupDescription"] !== null) {
            $this->GroupDescription = $param["GroupDescription"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecurityGroupPolicySet",$param) and $param["SecurityGroupPolicySet"] !== null) {
            $this->SecurityGroupPolicySet = new SecurityGroupPolicySet();
            $this->SecurityGroupPolicySet->deserialize($param["SecurityGroupPolicySet"]);
        }
    }
}
