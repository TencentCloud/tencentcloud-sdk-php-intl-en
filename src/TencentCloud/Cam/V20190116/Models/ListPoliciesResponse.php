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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListPolicies response structure.
 *
 * @method integer getTotalNum() Obtain Total number of policies
 * @method void setTotalNum(integer $TotalNum) Set Total number of policies
 * @method array getList() Obtain Policy array. Each array contains fields including `policyId`, `policyName`, `addTime`, `type`, `description`, and `createMode`. 
policyId: policy ID 
policyName: policy name
addTime: policy creation time
type: 1: custom policy, 2: preset policy 
description: policy description 
createMode: 1 indicates a policy created based on business permissions, while other values indicate that the policy syntax can be viewed and the policy can be updated using the policy syntax
Attachments: number of associated users
ServiceType: the product the policy is associated with
IsAttached: this value should not be null when querying if a marked entity has been associated with a policy. 0 indicates that no policy has been associated, and 1 indicates that a policy has been associated
 * @method void setList(array $List) Set Policy array. Each array contains fields including `policyId`, `policyName`, `addTime`, `type`, `description`, and `createMode`. 
policyId: policy ID 
policyName: policy name
addTime: policy creation time
type: 1: custom policy, 2: preset policy 
description: policy description 
createMode: 1 indicates a policy created based on business permissions, while other values indicate that the policy syntax can be viewed and the policy can be updated using the policy syntax
Attachments: number of associated users
ServiceType: the product the policy is associated with
IsAttached: this value should not be null when querying if a marked entity has been associated with a policy. 0 indicates that no policy has been associated, and 1 indicates that a policy has been associated
 * @method array getServiceTypeList() Obtain Reserved field
Note: This field may return null, indicating that no valid value was found.
 * @method void setServiceTypeList(array $ServiceTypeList) Set Reserved field
Note: This field may return null, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListPoliciesResponse extends AbstractModel
{
    /**
     * @var integer Total number of policies
     */
    public $TotalNum;

    /**
     * @var array Policy array. Each array contains fields including `policyId`, `policyName`, `addTime`, `type`, `description`, and `createMode`. 
policyId: policy ID 
policyName: policy name
addTime: policy creation time
type: 1: custom policy, 2: preset policy 
description: policy description 
createMode: 1 indicates a policy created based on business permissions, while other values indicate that the policy syntax can be viewed and the policy can be updated using the policy syntax
Attachments: number of associated users
ServiceType: the product the policy is associated with
IsAttached: this value should not be null when querying if a marked entity has been associated with a policy. 0 indicates that no policy has been associated, and 1 indicates that a policy has been associated
     */
    public $List;

    /**
     * @var array Reserved field
Note: This field may return null, indicating that no valid value was found.
     */
    public $ServiceTypeList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalNum Total number of policies
     * @param array $List Policy array. Each array contains fields including `policyId`, `policyName`, `addTime`, `type`, `description`, and `createMode`. 
policyId: policy ID 
policyName: policy name
addTime: policy creation time
type: 1: custom policy, 2: preset policy 
description: policy description 
createMode: 1 indicates a policy created based on business permissions, while other values indicate that the policy syntax can be viewed and the policy can be updated using the policy syntax
Attachments: number of associated users
ServiceType: the product the policy is associated with
IsAttached: this value should not be null when querying if a marked entity has been associated with a policy. 0 indicates that no policy has been associated, and 1 indicates that a policy has been associated
     * @param array $ServiceTypeList Reserved field
Note: This field may return null, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new StrategyInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("ServiceTypeList",$param) and $param["ServiceTypeList"] !== null) {
            $this->ServiceTypeList = $param["ServiceTypeList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
