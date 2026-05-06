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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Grayscale rule
 *
 * @method integer getPriority() Obtain Priority, with a range of 0 to 100. A larger value indicates a higher priority. Priorities must be unique across different rules.
 * @method void setPriority(integer $Priority) Set Priority, with a range of 0 to 100. A larger value indicates a higher priority. Priorities must be unique across different rules.
 * @method boolean getEnabled() Obtain Whether the rule is enabled.
 * @method void setEnabled(boolean $Enabled) Set Whether the rule is enabled.
 * @method array getConditionList() Obtain Match condition parameter
 * @method void setConditionList(array $ConditionList) Set Match condition parameter
 * @method array getBalancedServiceList() Obtain Traffic percentage configuration of the service
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBalancedServiceList(array $BalancedServiceList) Set Traffic percentage configuration of the service
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServiceId() Obtain service ID
 * @method void setServiceId(string $ServiceId) Set service ID
 * @method string getServiceName() Obtain Service name
 * @method void setServiceName(string $ServiceName) Set Service name
 * @method string getRuleType() Obtain Grayscale rule type
Standard｜Lane
 * @method void setRuleType(string $RuleType) Set Grayscale rule type
Standard｜Lane
 * @method string getMatchType() Obtain Full-link grayscale policy match mode between multiple conditions: AND, OR
 * @method void setMatchType(string $MatchType) Set Full-link grayscale policy match mode between multiple conditions: AND, OR
 * @method string getGroupId() Obtain Lane group ID
 * @method void setGroupId(string $GroupId) Set Lane group ID
 * @method string getGroupName() Obtain Lane group name
 * @method void setGroupName(string $GroupName) Set Lane group name
 * @method string getLaneId() Obtain Lane ID
 * @method void setLaneId(string $LaneId) Set Lane ID
 * @method string getLaneName() Obtain swimlane name
 * @method void setLaneName(string $LaneName) Set swimlane name
 * @method string getMatchMode() Obtain Lane match rule: STRICT | PERMISSIVE
 * @method void setMatchMode(string $MatchMode) Set Lane match rule: STRICT | PERMISSIVE
 * @method string getLaneTag() Obtain Lane tag
 * @method void setLaneTag(string $LaneTag) Set Lane tag
 */
class CloudNativeAPIGatewayCanaryRule extends AbstractModel
{
    /**
     * @var integer Priority, with a range of 0 to 100. A larger value indicates a higher priority. Priorities must be unique across different rules.
     */
    public $Priority;

    /**
     * @var boolean Whether the rule is enabled.
     */
    public $Enabled;

    /**
     * @var array Match condition parameter
     */
    public $ConditionList;

    /**
     * @var array Traffic percentage configuration of the service
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BalancedServiceList;

    /**
     * @var string service ID
     */
    public $ServiceId;

    /**
     * @var string Service name
     */
    public $ServiceName;

    /**
     * @var string Grayscale rule type
Standard｜Lane
     */
    public $RuleType;

    /**
     * @var string Full-link grayscale policy match mode between multiple conditions: AND, OR
     */
    public $MatchType;

    /**
     * @var string Lane group ID
     */
    public $GroupId;

    /**
     * @var string Lane group name
     */
    public $GroupName;

    /**
     * @var string Lane ID
     */
    public $LaneId;

    /**
     * @var string swimlane name
     */
    public $LaneName;

    /**
     * @var string Lane match rule: STRICT | PERMISSIVE
     */
    public $MatchMode;

    /**
     * @var string Lane tag
     */
    public $LaneTag;

    /**
     * @param integer $Priority Priority, with a range of 0 to 100. A larger value indicates a higher priority. Priorities must be unique across different rules.
     * @param boolean $Enabled Whether the rule is enabled.
     * @param array $ConditionList Match condition parameter
     * @param array $BalancedServiceList Traffic percentage configuration of the service
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceId service ID
     * @param string $ServiceName Service name
     * @param string $RuleType Grayscale rule type
Standard｜Lane
     * @param string $MatchType Full-link grayscale policy match mode between multiple conditions: AND, OR
     * @param string $GroupId Lane group ID
     * @param string $GroupName Lane group name
     * @param string $LaneId Lane ID
     * @param string $LaneName swimlane name
     * @param string $MatchMode Lane match rule: STRICT | PERMISSIVE
     * @param string $LaneTag Lane tag
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
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ConditionList",$param) and $param["ConditionList"] !== null) {
            $this->ConditionList = [];
            foreach ($param["ConditionList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayCanaryRuleCondition();
                $obj->deserialize($value);
                array_push($this->ConditionList, $obj);
            }
        }

        if (array_key_exists("BalancedServiceList",$param) and $param["BalancedServiceList"] !== null) {
            $this->BalancedServiceList = [];
            foreach ($param["BalancedServiceList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayBalancedService();
                $obj->deserialize($value);
                array_push($this->BalancedServiceList, $obj);
            }
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("LaneId",$param) and $param["LaneId"] !== null) {
            $this->LaneId = $param["LaneId"];
        }

        if (array_key_exists("LaneName",$param) and $param["LaneName"] !== null) {
            $this->LaneName = $param["LaneName"];
        }

        if (array_key_exists("MatchMode",$param) and $param["MatchMode"] !== null) {
            $this->MatchMode = $param["MatchMode"];
        }

        if (array_key_exists("LaneTag",$param) and $param["LaneTag"] !== null) {
            $this->LaneTag = $param["LaneTag"];
        }
    }
}
