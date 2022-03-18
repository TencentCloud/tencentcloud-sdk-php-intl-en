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
 * Policy group information
 *
 * @method boolean getCanSetDefault() Obtain Whether the alarm policy can be set to default.
 * @method void setCanSetDefault(boolean $CanSetDefault) Set Whether the alarm policy can be set to default.
 * @method integer getGroupID() Obtain Alarm policy group ID.
 * @method void setGroupID(integer $GroupID) Set Alarm policy group ID.
 * @method string getGroupName() Obtain Alarm policy group name.
 * @method void setGroupName(string $GroupName) Set Alarm policy group name.
 * @method integer getInsertTime() Obtain Creation time.
 * @method void setInsertTime(integer $InsertTime) Set Creation time.
 * @method integer getIsDefault() Obtain Whether the alarm policy is set to default.
 * @method void setIsDefault(integer $IsDefault) Set Whether the alarm policy is set to default.
 * @method boolean getEnable() Obtain Whether the alarm policy is enabled.
 * @method void setEnable(boolean $Enable) Set Whether the alarm policy is enabled.
 * @method integer getLastEditUin() Obtain UIN of the last modifier.
 * @method void setLastEditUin(integer $LastEditUin) Set UIN of the last modifier.
 * @method integer getNoShieldedInstanceCount() Obtain Number of unshielded instances.
 * @method void setNoShieldedInstanceCount(integer $NoShieldedInstanceCount) Set Number of unshielded instances.
 * @method integer getParentGroupID() Obtain Parent policy group ID.
 * @method void setParentGroupID(integer $ParentGroupID) Set Parent policy group ID.
 * @method integer getProjectID() Obtain Project ID.
 * @method void setProjectID(integer $ProjectID) Set Project ID.
 * @method array getReceiverInfos() Obtain Alarm recipient information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setReceiverInfos(array $ReceiverInfos) Set Alarm recipient information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method integer getUpdateTime() Obtain Modification time.
 * @method void setUpdateTime(integer $UpdateTime) Set Modification time.
 * @method integer getTotalInstanceCount() Obtain The total number of associated instances.
 * @method void setTotalInstanceCount(integer $TotalInstanceCount) Set The total number of associated instances.
 * @method string getViewName() Obtain View.
 * @method void setViewName(string $ViewName) Set View.
 * @method integer getIsUnionRule() Obtain Whether the logical relationship between rules is AND.
 * @method void setIsUnionRule(integer $IsUnionRule) Set Whether the logical relationship between rules is AND.
 */
class PolicyGroup extends AbstractModel
{
    /**
     * @var boolean Whether the alarm policy can be set to default.
     */
    public $CanSetDefault;

    /**
     * @var integer Alarm policy group ID.
     */
    public $GroupID;

    /**
     * @var string Alarm policy group name.
     */
    public $GroupName;

    /**
     * @var integer Creation time.
     */
    public $InsertTime;

    /**
     * @var integer Whether the alarm policy is set to default.
     */
    public $IsDefault;

    /**
     * @var boolean Whether the alarm policy is enabled.
     */
    public $Enable;

    /**
     * @var integer UIN of the last modifier.
     */
    public $LastEditUin;

    /**
     * @var integer Number of unshielded instances.
     */
    public $NoShieldedInstanceCount;

    /**
     * @var integer Parent policy group ID.
     */
    public $ParentGroupID;

    /**
     * @var integer Project ID.
     */
    public $ProjectID;

    /**
     * @var array Alarm recipient information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReceiverInfos;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var integer Modification time.
     */
    public $UpdateTime;

    /**
     * @var integer The total number of associated instances.
     */
    public $TotalInstanceCount;

    /**
     * @var string View.
     */
    public $ViewName;

    /**
     * @var integer Whether the logical relationship between rules is AND.
     */
    public $IsUnionRule;

    /**
     * @param boolean $CanSetDefault Whether the alarm policy can be set to default.
     * @param integer $GroupID Alarm policy group ID.
     * @param string $GroupName Alarm policy group name.
     * @param integer $InsertTime Creation time.
     * @param integer $IsDefault Whether the alarm policy is set to default.
     * @param boolean $Enable Whether the alarm policy is enabled.
     * @param integer $LastEditUin UIN of the last modifier.
     * @param integer $NoShieldedInstanceCount Number of unshielded instances.
     * @param integer $ParentGroupID Parent policy group ID.
     * @param integer $ProjectID Project ID.
     * @param array $ReceiverInfos Alarm recipient information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Remark Remarks.
     * @param integer $UpdateTime Modification time.
     * @param integer $TotalInstanceCount The total number of associated instances.
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
        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
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

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("NoShieldedInstanceCount",$param) and $param["NoShieldedInstanceCount"] !== null) {
            $this->NoShieldedInstanceCount = $param["NoShieldedInstanceCount"];
        }

        if (array_key_exists("ParentGroupID",$param) and $param["ParentGroupID"] !== null) {
            $this->ParentGroupID = $param["ParentGroupID"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("ReceiverInfos",$param) and $param["ReceiverInfos"] !== null) {
            $this->ReceiverInfos = [];
            foreach ($param["ReceiverInfos"] as $key => $value){
                $obj = new PolicyGroupReceiverInfo();
                $obj->deserialize($value);
                array_push($this->ReceiverInfos, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TotalInstanceCount",$param) and $param["TotalInstanceCount"] !== null) {
            $this->TotalInstanceCount = $param["TotalInstanceCount"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
