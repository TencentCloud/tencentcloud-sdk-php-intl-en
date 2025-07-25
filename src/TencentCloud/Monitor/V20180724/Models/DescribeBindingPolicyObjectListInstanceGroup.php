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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance group information returned by the DescribeBindingPolicyObjectList API
 *
 * @method integer getInstanceGroupId() Obtain Instance group ID.
 * @method void setInstanceGroupId(integer $InstanceGroupId) Set Instance group ID.
 * @method string getViewName() Obtain Alarm policy type name.
 * @method void setViewName(string $ViewName) Set Alarm policy type name.
 * @method string getLastEditUin() Obtain Uin that was last edited.
 * @method void setLastEditUin(string $LastEditUin) Set Uin that was last edited.
 * @method string getGroupName() Obtain Instance group name.
 * @method void setGroupName(string $GroupName) Set Instance group name.
 * @method integer getInstanceSum() Obtain Number of instances.
 * @method void setInstanceSum(integer $InstanceSum) Set Number of instances.
 * @method integer getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time.
 * @method integer getInsertTime() Obtain Creation time.
 * @method void setInsertTime(integer $InsertTime) Set Creation time.
 * @method array getRegions() Obtain Regions where the instances reside.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRegions(array $Regions) Set Regions where the instances reside.
Note: This field may return null, indicating that no valid value was found.
 */
class DescribeBindingPolicyObjectListInstanceGroup extends AbstractModel
{
    /**
     * @var integer Instance group ID.
     */
    public $InstanceGroupId;

    /**
     * @var string Alarm policy type name.
     */
    public $ViewName;

    /**
     * @var string Uin that was last edited.
     */
    public $LastEditUin;

    /**
     * @var string Instance group name.
     */
    public $GroupName;

    /**
     * @var integer Number of instances.
     */
    public $InstanceSum;

    /**
     * @var integer Update time.
     */
    public $UpdateTime;

    /**
     * @var integer Creation time.
     */
    public $InsertTime;

    /**
     * @var array Regions where the instances reside.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Regions;

    /**
     * @param integer $InstanceGroupId Instance group ID.
     * @param string $ViewName Alarm policy type name.
     * @param string $LastEditUin Uin that was last edited.
     * @param string $GroupName Instance group name.
     * @param integer $InstanceSum Number of instances.
     * @param integer $UpdateTime Update time.
     * @param integer $InsertTime Creation time.
     * @param array $Regions Regions where the instances reside.
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InstanceSum",$param) and $param["InstanceSum"] !== null) {
            $this->InstanceSum = $param["InstanceSum"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}
