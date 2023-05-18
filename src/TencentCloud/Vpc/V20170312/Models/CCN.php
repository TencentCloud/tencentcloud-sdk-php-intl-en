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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The CCN object
 *
 * @method string getCcnId() Obtain The unique ID of the CCN
 * @method void setCcnId(string $CcnId) Set The unique ID of the CCN
 * @method string getCcnName() Obtain The name of the CCN
 * @method void setCcnName(string $CcnName) Set The name of the CCN
 * @method string getCcnDescription() Obtain The detailed information of the CCN
 * @method void setCcnDescription(string $CcnDescription) Set The detailed information of the CCN
 * @method integer getInstanceCount() Obtain The number of associated instances
 * @method void setInstanceCount(integer $InstanceCount) Set The number of associated instances
 * @method string getCreateTime() Obtain The creation time
 * @method void setCreateTime(string $CreateTime) Set The creation time
 * @method string getState() Obtain The instance status. 'ISOLATED': Being isolated (instance is in arrears and service is suspended). 'AVAILABLE': Operating.
 * @method void setState(string $State) Set The instance status. 'ISOLATED': Being isolated (instance is in arrears and service is suspended). 'AVAILABLE': Operating.
 * @method string getQosLevel() Obtain The instance service quality. ’PT’: Platinum , 'AU': Gold, 'AG': Silver.
 * @method void setQosLevel(string $QosLevel) Set The instance service quality. ’PT’: Platinum , 'AU': Gold, 'AG': Silver.
 * @method string getInstanceChargeType() Obtain The billing method. POSTPAID indicates postpaid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set The billing method. POSTPAID indicates postpaid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBandwidthLimitType() Obtain The limit type. INTER_REGION_LIMIT is the limit between regions. OUTER_REGION_LIMIT is a region egress limit.
Note: This field may return null, indicating no valid value.
 * @method void setBandwidthLimitType(string $BandwidthLimitType) Set The limit type. INTER_REGION_LIMIT is the limit between regions. OUTER_REGION_LIMIT is a region egress limit.
Note: This field may return null, indicating no valid value.
 * @method array getTagSet() Obtain Tag key-value pairs.
 * @method void setTagSet(array $TagSet) Set Tag key-value pairs.
 * @method boolean getRoutePriorityFlag() Obtain Whether the CCN route priority feature is supported. Valid values: False: do not support; True: support.
 * @method void setRoutePriorityFlag(boolean $RoutePriorityFlag) Set Whether the CCN route priority feature is supported. Valid values: False: do not support; True: support.
 * @method integer getRouteTableCount() Obtain Number of route tables associated with the instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRouteTableCount(integer $RouteTableCount) Set Number of route tables associated with the instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getRouteTableFlag() Obtain Whether the multiple route tables feature is enabled for the CCN instance. Valid values: `False`: no; `True`: yes. Default value: `False`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRouteTableFlag(boolean $RouteTableFlag) Set Whether the multiple route tables feature is enabled for the CCN instance. Valid values: `False`: no; `True`: yes. Default value: `False`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getIsSecurityLock() Obtain 
 * @method void setIsSecurityLock(boolean $IsSecurityLock) Set 
 * @method boolean getRouteBroadcastPolicyFlag() Obtain Status of CCN route broadcasting policy. Values: `False` (Disabled), `True` (Enabled)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRouteBroadcastPolicyFlag(boolean $RouteBroadcastPolicyFlag) Set Status of CCN route broadcasting policy. Values: `False` (Disabled), `True` (Enabled)
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class CCN extends AbstractModel
{
    /**
     * @var string The unique ID of the CCN
     */
    public $CcnId;

    /**
     * @var string The name of the CCN
     */
    public $CcnName;

    /**
     * @var string The detailed information of the CCN
     */
    public $CcnDescription;

    /**
     * @var integer The number of associated instances
     */
    public $InstanceCount;

    /**
     * @var string The creation time
     */
    public $CreateTime;

    /**
     * @var string The instance status. 'ISOLATED': Being isolated (instance is in arrears and service is suspended). 'AVAILABLE': Operating.
     */
    public $State;

    /**
     * @var string The instance service quality. ’PT’: Platinum , 'AU': Gold, 'AG': Silver.
     */
    public $QosLevel;

    /**
     * @var string The billing method. POSTPAID indicates postpaid.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceChargeType;

    /**
     * @var string The limit type. INTER_REGION_LIMIT is the limit between regions. OUTER_REGION_LIMIT is a region egress limit.
Note: This field may return null, indicating no valid value.
     */
    public $BandwidthLimitType;

    /**
     * @var array Tag key-value pairs.
     */
    public $TagSet;

    /**
     * @var boolean Whether the CCN route priority feature is supported. Valid values: False: do not support; True: support.
     */
    public $RoutePriorityFlag;

    /**
     * @var integer Number of route tables associated with the instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RouteTableCount;

    /**
     * @var boolean Whether the multiple route tables feature is enabled for the CCN instance. Valid values: `False`: no; `True`: yes. Default value: `False`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RouteTableFlag;

    /**
     * @var boolean 
     */
    public $IsSecurityLock;

    /**
     * @var boolean Status of CCN route broadcasting policy. Values: `False` (Disabled), `True` (Enabled)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RouteBroadcastPolicyFlag;

    /**
     * @param string $CcnId The unique ID of the CCN
     * @param string $CcnName The name of the CCN
     * @param string $CcnDescription The detailed information of the CCN
     * @param integer $InstanceCount The number of associated instances
     * @param string $CreateTime The creation time
     * @param string $State The instance status. 'ISOLATED': Being isolated (instance is in arrears and service is suspended). 'AVAILABLE': Operating.
     * @param string $QosLevel The instance service quality. ’PT’: Platinum , 'AU': Gold, 'AG': Silver.
     * @param string $InstanceChargeType The billing method. POSTPAID indicates postpaid.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BandwidthLimitType The limit type. INTER_REGION_LIMIT is the limit between regions. OUTER_REGION_LIMIT is a region egress limit.
Note: This field may return null, indicating no valid value.
     * @param array $TagSet Tag key-value pairs.
     * @param boolean $RoutePriorityFlag Whether the CCN route priority feature is supported. Valid values: False: do not support; True: support.
     * @param integer $RouteTableCount Number of route tables associated with the instance.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $RouteTableFlag Whether the multiple route tables feature is enabled for the CCN instance. Valid values: `False`: no; `True`: yes. Default value: `False`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $IsSecurityLock 
     * @param boolean $RouteBroadcastPolicyFlag Status of CCN route broadcasting policy. Values: `False` (Disabled), `True` (Enabled)
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnName",$param) and $param["CcnName"] !== null) {
            $this->CcnName = $param["CcnName"];
        }

        if (array_key_exists("CcnDescription",$param) and $param["CcnDescription"] !== null) {
            $this->CcnDescription = $param["CcnDescription"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("BandwidthLimitType",$param) and $param["BandwidthLimitType"] !== null) {
            $this->BandwidthLimitType = $param["BandwidthLimitType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("RoutePriorityFlag",$param) and $param["RoutePriorityFlag"] !== null) {
            $this->RoutePriorityFlag = $param["RoutePriorityFlag"];
        }

        if (array_key_exists("RouteTableCount",$param) and $param["RouteTableCount"] !== null) {
            $this->RouteTableCount = $param["RouteTableCount"];
        }

        if (array_key_exists("RouteTableFlag",$param) and $param["RouteTableFlag"] !== null) {
            $this->RouteTableFlag = $param["RouteTableFlag"];
        }

        if (array_key_exists("IsSecurityLock",$param) and $param["IsSecurityLock"] !== null) {
            $this->IsSecurityLock = $param["IsSecurityLock"];
        }

        if (array_key_exists("RouteBroadcastPolicyFlag",$param) and $param["RouteBroadcastPolicyFlag"] !== null) {
            $this->RouteBroadcastPolicyFlag = $param["RouteBroadcastPolicyFlag"];
        }
    }
}
