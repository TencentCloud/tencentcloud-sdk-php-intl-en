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
 * Template list
 *
 * @method array getConditions() Obtain Metric alarm rules.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setConditions(array $Conditions) Set Metric alarm rules.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getEventConditions() Obtain Event alarm rules.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEventConditions(array $EventConditions) Set Event alarm rules.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getPolicyGroups() Obtain The associated alarm policy groups.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPolicyGroups(array $PolicyGroups) Set The associated alarm policy groups.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getGroupID() Obtain Template-based policy group ID.
 * @method void setGroupID(integer $GroupID) Set Template-based policy group ID.
 * @method string getGroupName() Obtain Template-based policy group name.
 * @method void setGroupName(string $GroupName) Set Template-based policy group name.
 * @method integer getInsertTime() Obtain Creation time.
 * @method void setInsertTime(integer $InsertTime) Set Creation time.
 * @method integer getLastEditUin() Obtain UIN of the last modifier.
 * @method void setLastEditUin(integer $LastEditUin) Set UIN of the last modifier.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method integer getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time.
 * @method string getViewName() Obtain View.
 * @method void setViewName(string $ViewName) Set View.
 * @method integer getIsUnionRule() Obtain Whether the logical relationship between rules is AND.
 * @method void setIsUnionRule(integer $IsUnionRule) Set Whether the logical relationship between rules is AND.
 */
class TemplateGroup extends AbstractModel
{
    /**
     * @var array Metric alarm rules.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Conditions;

    /**
     * @var array Event alarm rules.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EventConditions;

    /**
     * @var array The associated alarm policy groups.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PolicyGroups;

    /**
     * @var integer Template-based policy group ID.
     */
    public $GroupID;

    /**
     * @var string Template-based policy group name.
     */
    public $GroupName;

    /**
     * @var integer Creation time.
     */
    public $InsertTime;

    /**
     * @var integer UIN of the last modifier.
     */
    public $LastEditUin;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var integer Update time.
     */
    public $UpdateTime;

    /**
     * @var string View.
     */
    public $ViewName;

    /**
     * @var integer Whether the logical relationship between rules is AND.
     */
    public $IsUnionRule;

    /**
     * @param array $Conditions Metric alarm rules.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $EventConditions Event alarm rules.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $PolicyGroups The associated alarm policy groups.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $GroupID Template-based policy group ID.
     * @param string $GroupName Template-based policy group name.
     * @param integer $InsertTime Creation time.
     * @param integer $LastEditUin UIN of the last modifier.
     * @param string $Remark Remarks.
     * @param integer $UpdateTime Update time.
     * @param string $ViewName View.
     * @param integer $IsUnionRule Whether the logical relationship between rules is AND.
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
        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new Condition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new EventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("PolicyGroups",$param) and $param["PolicyGroups"] !== null) {
            $this->PolicyGroups = [];
            foreach ($param["PolicyGroups"] as $key => $value){
                $obj = new PolicyGroup();
                $obj->deserialize($value);
                array_push($this->PolicyGroups, $obj);
            }
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
