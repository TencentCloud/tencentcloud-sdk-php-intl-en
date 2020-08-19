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
 * Template-based policy group information output by the policy query
 *
 * @method integer getGroupId() Obtain Policy group ID.
 * @method void setGroupId(integer $GroupId) Set Policy group ID.
 * @method string getGroupName() Obtain Policy group name.
 * @method void setGroupName(string $GroupName) Set Policy group name.
 * @method string getViewName() Obtain Policy type.
 * @method void setViewName(string $ViewName) Set Policy type.
 * @method string getRemark() Obtain Policy group remarks.
 * @method void setRemark(string $Remark) Set Policy group remarks.
 * @method string getLastEditUin() Obtain Uin that was last edited.
 * @method void setLastEditUin(string $LastEditUin) Set Uin that was last edited.
 * @method integer getUpdateTime() Obtain Update time.
Note: This field may return null, indicating that no valid value was found.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getInsertTime() Obtain Creation time.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInsertTime(integer $InsertTime) Set Creation time.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getIsUnionRule() Obtain Whether the 'AND' rule is used.
Note: This field may return null, indicating that no valid value was found.
 * @method void setIsUnionRule(integer $IsUnionRule) Set Whether the 'AND' rule is used.
Note: This field may return null, indicating that no valid value was found.
 */
class DescribePolicyGroupInfoConditionTpl extends AbstractModel
{
    /**
     * @var integer Policy group ID.
     */
    public $GroupId;

    /**
     * @var string Policy group name.
     */
    public $GroupName;

    /**
     * @var string Policy type.
     */
    public $ViewName;

    /**
     * @var string Policy group remarks.
     */
    public $Remark;

    /**
     * @var string Uin that was last edited.
     */
    public $LastEditUin;

    /**
     * @var integer Update time.
Note: This field may return null, indicating that no valid value was found.
     */
    public $UpdateTime;

    /**
     * @var integer Creation time.
Note: This field may return null, indicating that no valid value was found.
     */
    public $InsertTime;

    /**
     * @var integer Whether the 'AND' rule is used.
Note: This field may return null, indicating that no valid value was found.
     */
    public $IsUnionRule;

    /**
     * @param integer $GroupId Policy group ID.
     * @param string $GroupName Policy group name.
     * @param string $ViewName Policy type.
     * @param string $Remark Policy group remarks.
     * @param string $LastEditUin Uin that was last edited.
     * @param integer $UpdateTime Update time.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $InsertTime Creation time.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $IsUnionRule Whether the 'AND' rule is used.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
