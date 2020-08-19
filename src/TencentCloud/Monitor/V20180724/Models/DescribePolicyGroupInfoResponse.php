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
 * DescribePolicyGroupInfo response structure.
 *
 * @method string getGroupName() Obtain Policy group name.
 * @method void setGroupName(string $GroupName) Set Policy group name.
 * @method integer getProjectId() Obtain ID of the project to which the policy group belongs.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the policy group belongs.
 * @method integer getIsDefault() Obtain Whether it is the default policy. The value 0 indicates that it is not the default policy. The value 1 indicates that it is the default policy.
 * @method void setIsDefault(integer $IsDefault) Set Whether it is the default policy. The value 0 indicates that it is not the default policy. The value 1 indicates that it is the default policy.
 * @method string getViewName() Obtain Policy type.
 * @method void setViewName(string $ViewName) Set Policy type.
 * @method string getRemark() Obtain Policy description
 * @method void setRemark(string $Remark) Set Policy description
 * @method string getShowName() Obtain Policy type name.
 * @method void setShowName(string $ShowName) Set Policy type name.
 * @method string getLastEditUin() Obtain Uin that was last edited.
 * @method void setLastEditUin(string $LastEditUin) Set Uin that was last edited.
 * @method string getUpdateTime() Obtain Last edited time.
 * @method void setUpdateTime(string $UpdateTime) Set Last edited time.
 * @method array getRegion() Obtain Regions supported by this policy.
 * @method void setRegion(array $Region) Set Regions supported by this policy.
 * @method array getDimensionGroup() Obtain List of policy type dimensions.
 * @method void setDimensionGroup(array $DimensionGroup) Set List of policy type dimensions.
 * @method array getConditionsConfig() Obtain Threshold rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method void setConditionsConfig(array $ConditionsConfig) Set Threshold rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method array getEventConfig() Obtain Product event rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEventConfig(array $EventConfig) Set Product event rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method array getReceiverInfos() Obtain Recipient list.
Note: This field may return null, indicating that no valid value was found.
 * @method void setReceiverInfos(array $ReceiverInfos) Set Recipient list.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyGroupInfoCallback getCallback() Obtain User callback information.
Note: This field may return null, indicating that no valid value was found.
 * @method void setCallback(DescribePolicyGroupInfoCallback $Callback) Set User callback information.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyGroupInfoConditionTpl getConditionsTemp() Obtain Template-based policy group.
Note: This field may return null, indicating that no valid value was found.
 * @method void setConditionsTemp(DescribePolicyGroupInfoConditionTpl $ConditionsTemp) Set Template-based policy group.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getCanSetDefault() Obtain Whether the policy can be configured as the default policy.
 * @method void setCanSetDefault(boolean $CanSetDefault) Set Whether the policy can be configured as the default policy.
 * @method integer getIsUnionRule() Obtain Whether the 'AND' rule is used.
Note: This field may return null, indicating that no valid value was found.
 * @method void setIsUnionRule(integer $IsUnionRule) Set Whether the 'AND' rule is used.
Note: This field may return null, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePolicyGroupInfoResponse extends AbstractModel
{
    /**
     * @var string Policy group name.
     */
    public $GroupName;

    /**
     * @var integer ID of the project to which the policy group belongs.
     */
    public $ProjectId;

    /**
     * @var integer Whether it is the default policy. The value 0 indicates that it is not the default policy. The value 1 indicates that it is the default policy.
     */
    public $IsDefault;

    /**
     * @var string Policy type.
     */
    public $ViewName;

    /**
     * @var string Policy description
     */
    public $Remark;

    /**
     * @var string Policy type name.
     */
    public $ShowName;

    /**
     * @var string Uin that was last edited.
     */
    public $LastEditUin;

    /**
     * @var string Last edited time.
     */
    public $UpdateTime;

    /**
     * @var array Regions supported by this policy.
     */
    public $Region;

    /**
     * @var array List of policy type dimensions.
     */
    public $DimensionGroup;

    /**
     * @var array Threshold rule list.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ConditionsConfig;

    /**
     * @var array Product event rule list.
Note: This field may return null, indicating that no valid value was found.
     */
    public $EventConfig;

    /**
     * @var array Recipient list.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ReceiverInfos;

    /**
     * @var DescribePolicyGroupInfoCallback User callback information.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Callback;

    /**
     * @var DescribePolicyGroupInfoConditionTpl Template-based policy group.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ConditionsTemp;

    /**
     * @var boolean Whether the policy can be configured as the default policy.
     */
    public $CanSetDefault;

    /**
     * @var integer Whether the 'AND' rule is used.
Note: This field may return null, indicating that no valid value was found.
     */
    public $IsUnionRule;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $GroupName Policy group name.
     * @param integer $ProjectId ID of the project to which the policy group belongs.
     * @param integer $IsDefault Whether it is the default policy. The value 0 indicates that it is not the default policy. The value 1 indicates that it is the default policy.
     * @param string $ViewName Policy type.
     * @param string $Remark Policy description
     * @param string $ShowName Policy type name.
     * @param string $LastEditUin Uin that was last edited.
     * @param string $UpdateTime Last edited time.
     * @param array $Region Regions supported by this policy.
     * @param array $DimensionGroup List of policy type dimensions.
     * @param array $ConditionsConfig Threshold rule list.
Note: This field may return null, indicating that no valid value was found.
     * @param array $EventConfig Product event rule list.
Note: This field may return null, indicating that no valid value was found.
     * @param array $ReceiverInfos Recipient list.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyGroupInfoCallback $Callback User callback information.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyGroupInfoConditionTpl $ConditionsTemp Template-based policy group.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $CanSetDefault Whether the policy can be configured as the default policy.
     * @param integer $IsUnionRule Whether the 'AND' rule is used.
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ShowName",$param) and $param["ShowName"] !== null) {
            $this->ShowName = $param["ShowName"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DimensionGroup",$param) and $param["DimensionGroup"] !== null) {
            $this->DimensionGroup = $param["DimensionGroup"];
        }

        if (array_key_exists("ConditionsConfig",$param) and $param["ConditionsConfig"] !== null) {
            $this->ConditionsConfig = [];
            foreach ($param["ConditionsConfig"] as $key => $value){
                $obj = new DescribePolicyGroupInfoCondition();
                $obj->deserialize($value);
                array_push($this->ConditionsConfig, $obj);
            }
        }

        if (array_key_exists("EventConfig",$param) and $param["EventConfig"] !== null) {
            $this->EventConfig = [];
            foreach ($param["EventConfig"] as $key => $value){
                $obj = new DescribePolicyGroupInfoEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConfig, $obj);
            }
        }

        if (array_key_exists("ReceiverInfos",$param) and $param["ReceiverInfos"] !== null) {
            $this->ReceiverInfos = [];
            foreach ($param["ReceiverInfos"] as $key => $value){
                $obj = new DescribePolicyGroupInfoReceiverInfo();
                $obj->deserialize($value);
                array_push($this->ReceiverInfos, $obj);
            }
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new DescribePolicyGroupInfoCallback();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("ConditionsTemp",$param) and $param["ConditionsTemp"] !== null) {
            $this->ConditionsTemp = new DescribePolicyGroupInfoConditionTpl();
            $this->ConditionsTemp->deserialize($param["ConditionsTemp"]);
        }

        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
