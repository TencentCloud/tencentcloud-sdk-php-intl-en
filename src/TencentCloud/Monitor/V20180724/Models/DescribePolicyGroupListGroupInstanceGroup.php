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
 * Instance group that is bound to a policy group of the DescribePolicyGroupList API
 *
 * @method integer getInstanceGroupId() Obtain Instance group name ID.
 * @method void setInstanceGroupId(integer $InstanceGroupId) Set Instance group name ID.
 * @method string getViewName() Obtain Policy type view name.
 * @method void setViewName(string $ViewName) Set Policy type view name.
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
 */
class DescribePolicyGroupListGroupInstanceGroup extends AbstractModel
{
    /**
     * @var integer Instance group name ID.
     */
    public $InstanceGroupId;

    /**
     * @var string Policy type view name.
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
     * @param integer $InstanceGroupId Instance group name ID.
     * @param string $ViewName Policy type view name.
     * @param string $LastEditUin Uin that was last edited.
     * @param string $GroupName Instance group name.
     * @param integer $InstanceSum Number of instances.
     * @param integer $UpdateTime Update time.
     * @param integer $InsertTime Creation time.
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
    }
}
