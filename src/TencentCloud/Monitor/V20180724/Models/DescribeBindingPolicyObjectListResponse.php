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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBindingPolicyObjectList response structure.
 *
 * @method array getList() Obtain List of bound object instances.
Note: This field may return null, indicating that no valid value was found.
 * @method void setList(array $List) Set List of bound object instances.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getTotal() Obtain Total number of bound object instances.
 * @method void setTotal(integer $Total) Set Total number of bound object instances.
 * @method integer getNoShieldedSum() Obtain Number of object instances that are not shielded.
 * @method void setNoShieldedSum(integer $NoShieldedSum) Set Number of object instances that are not shielded.
 * @method DescribeBindingPolicyObjectListInstanceGroup getInstanceGroup() Obtain Bound instance group information. This parameter is not configured if no instance group is bound.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceGroup(DescribeBindingPolicyObjectListInstanceGroup $InstanceGroup) Set Bound instance group information. This parameter is not configured if no instance group is bound.
Note: This field may return null, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBindingPolicyObjectListResponse extends AbstractModel
{
    /**
     * @var array List of bound object instances.
Note: This field may return null, indicating that no valid value was found.
     */
    public $List;

    /**
     * @var integer Total number of bound object instances.
     */
    public $Total;

    /**
     * @var integer Number of object instances that are not shielded.
     */
    public $NoShieldedSum;

    /**
     * @var DescribeBindingPolicyObjectListInstanceGroup Bound instance group information. This parameter is not configured if no instance group is bound.
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceGroup;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $List List of bound object instances.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Total Total number of bound object instances.
     * @param integer $NoShieldedSum Number of object instances that are not shielded.
     * @param DescribeBindingPolicyObjectListInstanceGroup $InstanceGroup Bound instance group information. This parameter is not configured if no instance group is bound.
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new DescribeBindingPolicyObjectListInstance();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("NoShieldedSum",$param) and $param["NoShieldedSum"] !== null) {
            $this->NoShieldedSum = $param["NoShieldedSum"];
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = new DescribeBindingPolicyObjectListInstanceGroup();
            $this->InstanceGroup->deserialize($param["InstanceGroup"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
