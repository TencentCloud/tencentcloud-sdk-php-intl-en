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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstance response structure.
 *
 * @method string getInstanceType() Obtain Instance type.
Specifies the EXPERIMENT trial version.
BASIC version.
PRO edition.
PLATINUM. platinum version.
 * @method void setInstanceType(string $InstanceType) Set Instance type.
Specifies the EXPERIMENT trial version.
BASIC version.
PRO edition.
PLATINUM. platinum version.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getTopicNum() Obtain Number of topics
 * @method void setTopicNum(integer $TopicNum) Set Number of topics
 * @method integer getTopicNumLimit() Obtain Maximum number of topics per instance
 * @method void setTopicNumLimit(integer $TopicNumLimit) Set Maximum number of topics per instance
 * @method integer getGroupNum() Obtain Number of consumer groups
 * @method void setGroupNum(integer $GroupNum) Set Number of consumer groups
 * @method integer getGroupNumLimit() Obtain Maximum number of consumer groups per instance
 * @method void setGroupNumLimit(integer $GroupNumLimit) Set Maximum number of consumer groups per instance
 * @method integer getMessageRetention() Obtain Message retention time, in hours
 * @method void setMessageRetention(integer $MessageRetention) Set Message retention time, in hours
 * @method integer getRetentionUpperLimit() Obtain Maximum adjustable message retention time, in hours
 * @method void setRetentionUpperLimit(integer $RetentionUpperLimit) Set Maximum adjustable message retention time, in hours
 * @method integer getRetentionLowerLimit() Obtain Minimum adjustable message retention time, in hours
 * @method void setRetentionLowerLimit(integer $RetentionLowerLimit) Set Minimum adjustable message retention time, in hours
 * @method integer getTpsLimit() Obtain TPS throttle value
 * @method void setTpsLimit(integer $TpsLimit) Set TPS throttle value
 * @method integer getScaledTpsLimit() Obtain Elastic TPS throttle value
 * @method void setScaledTpsLimit(integer $ScaledTpsLimit) Set Elastic TPS throttle value
 * @method integer getMaxMessageDelay() Obtain Maximum delayed message time, in hours
 * @method void setMaxMessageDelay(integer $MaxMessageDelay) Set Maximum delayed message time, in hours
 * @method integer getCreatedTime() Obtain Creation time. **It is a Unix timestamp (ms).**
 * @method void setCreatedTime(integer $CreatedTime) Set Creation time. **It is a Unix timestamp (ms).**
 * @method float getSendReceiveRatio() Obtain Message sending and receiving ratio
 * @method void setSendReceiveRatio(float $SendReceiveRatio) Set Message sending and receiving ratio
 * @method array getTagList() Obtain Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagList(array $TagList) Set Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEndpointList() Obtain Access point list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndpointList(array $EndpointList) Set Access point list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicQueueNumUpperLimit() Obtain Maximum number of topic queues
 * @method void setTopicQueueNumUpperLimit(integer $TopicQueueNumUpperLimit) Set Maximum number of topic queues
 * @method integer getTopicQueueNumLowerLimit() Obtain Minimum queue count for topic
 * @method void setTopicQueueNumLowerLimit(integer $TopicQueueNumLowerLimit) Set Minimum queue count for topic
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getInstanceStatus() Obtain Instance status. valid values are as follows:.

- RUNNING: RUNNING.
-ABNORMAL: indicates an abnormal status.
-OVERDUE: isolated.
-DESTROYED: specifies the terminated status.
-CREATING: creating.
-MODIFYING.
-CREATE_FAILURE: creation failed.
-MODIFY_FAILURE: configuration adjustment failure.
-DELETING: deleting.
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status. valid values are as follows:.

- RUNNING: RUNNING.
-ABNORMAL: indicates an abnormal status.
-OVERDUE: isolated.
-DESTROYED: specifies the terminated status.
-CREATING: creating.
-MODIFYING.
-CREATE_FAILURE: creation failed.
-MODIFY_FAILURE: configuration adjustment failure.
-DELETING: deleting.
 * @method string getSkuCode() Obtain Instance specification.
 * @method void setSkuCode(string $SkuCode) Set Instance specification.
 * @method string getPayMode() Obtain Billing mode. valid enumeration values are as follows:.

- POSTPAID: POSTPAID pay-as-you-go billing.
- PREPAID: PREPAID annual and monthly.
 * @method void setPayMode(string $PayMode) Set Billing mode. valid enumeration values are as follows:.

- POSTPAID: POSTPAID pay-as-you-go billing.
- PREPAID: PREPAID annual and monthly.
 * @method boolean getScaledTpsEnabled() Obtain Whether to enable elastic TPS.
 * @method void setScaledTpsEnabled(boolean $ScaledTpsEnabled) Set Whether to enable elastic TPS.
 * @method integer getRenewFlag() Obtain Specifies whether the prepaid cluster is automatically renewed. valid values are as follows:.

- 0: no automatic renewal.
- 1: specifies automatic renewal.
 * @method void setRenewFlag(integer $RenewFlag) Set Specifies whether the prepaid cluster is automatically renewed. valid values are as follows:.

- 0: no automatic renewal.
- 1: specifies automatic renewal.
 * @method integer getExpiryTime() Obtain Expiration time. **It is a Unix timestamp (ms).**
 * @method void setExpiryTime(integer $ExpiryTime) Set Expiration time. **It is a Unix timestamp (ms).**
 * @method integer getRoleNumLimit() Obtain Specifies the limit on the number of roles.
 * @method void setRoleNumLimit(integer $RoleNumLimit) Set Specifies the limit on the number of roles.
 * @method boolean getAclEnabled() Obtain Whether ACL is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAclEnabled(boolean $AclEnabled) Set Whether ACL is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicNumLowerLimit() Obtain Number of topics within the free quota.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicNumLowerLimit(integer $TopicNumLowerLimit) Set Number of topics within the free quota.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicNumUpperLimit() Obtain Maximum settable number of topics.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicNumUpperLimit(integer $TopicNumUpperLimit) Set Maximum settable number of topics.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZoneIds() Obtain AZ list. See [ZoneInfo](https://www.tencentcloud.comom/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) returned by the API [DescribeZones](https://www.tencentcloud.comom/document/product/1596/77929?from_cn_redirect=1) in Data Type.
 * @method void setZoneIds(array $ZoneIds) Set AZ list. See [ZoneInfo](https://www.tencentcloud.comom/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) returned by the API [DescribeZones](https://www.tencentcloud.comom/document/product/1596/77929?from_cn_redirect=1) in Data Type.
 * @method integer getNodeCount() Obtain Number of proxy nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeCount(integer $NodeCount) Set Number of proxy nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZoneScheduledList() Obtain Proxy scheduling details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneScheduledList(array $ZoneScheduledList) Set Proxy scheduling details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeInstanceResponse extends AbstractModel
{
    /**
     * @var string Instance type.
Specifies the EXPERIMENT trial version.
BASIC version.
PRO edition.
PLATINUM. platinum version.
     */
    public $InstanceType;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Number of topics
     */
    public $TopicNum;

    /**
     * @var integer Maximum number of topics per instance
     */
    public $TopicNumLimit;

    /**
     * @var integer Number of consumer groups
     */
    public $GroupNum;

    /**
     * @var integer Maximum number of consumer groups per instance
     */
    public $GroupNumLimit;

    /**
     * @var integer Message retention time, in hours
     */
    public $MessageRetention;

    /**
     * @var integer Maximum adjustable message retention time, in hours
     */
    public $RetentionUpperLimit;

    /**
     * @var integer Minimum adjustable message retention time, in hours
     */
    public $RetentionLowerLimit;

    /**
     * @var integer TPS throttle value
     */
    public $TpsLimit;

    /**
     * @var integer Elastic TPS throttle value
     */
    public $ScaledTpsLimit;

    /**
     * @var integer Maximum delayed message time, in hours
     */
    public $MaxMessageDelay;

    /**
     * @var integer Creation time. **It is a Unix timestamp (ms).**
     */
    public $CreatedTime;

    /**
     * @var float Message sending and receiving ratio
     */
    public $SendReceiveRatio;

    /**
     * @var array Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagList;

    /**
     * @var array Access point list

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndpointList;

    /**
     * @var integer Maximum number of topic queues
     */
    public $TopicQueueNumUpperLimit;

    /**
     * @var integer Minimum queue count for topic
     */
    public $TopicQueueNumLowerLimit;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Instance status. valid values are as follows:.

- RUNNING: RUNNING.
-ABNORMAL: indicates an abnormal status.
-OVERDUE: isolated.
-DESTROYED: specifies the terminated status.
-CREATING: creating.
-MODIFYING.
-CREATE_FAILURE: creation failed.
-MODIFY_FAILURE: configuration adjustment failure.
-DELETING: deleting.
     */
    public $InstanceStatus;

    /**
     * @var string Instance specification.
     */
    public $SkuCode;

    /**
     * @var string Billing mode. valid enumeration values are as follows:.

- POSTPAID: POSTPAID pay-as-you-go billing.
- PREPAID: PREPAID annual and monthly.
     */
    public $PayMode;

    /**
     * @var boolean Whether to enable elastic TPS.
     */
    public $ScaledTpsEnabled;

    /**
     * @var integer Specifies whether the prepaid cluster is automatically renewed. valid values are as follows:.

- 0: no automatic renewal.
- 1: specifies automatic renewal.
     */
    public $RenewFlag;

    /**
     * @var integer Expiration time. **It is a Unix timestamp (ms).**
     */
    public $ExpiryTime;

    /**
     * @var integer Specifies the limit on the number of roles.
     */
    public $RoleNumLimit;

    /**
     * @var boolean Whether ACL is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AclEnabled;

    /**
     * @var integer Number of topics within the free quota.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicNumLowerLimit;

    /**
     * @var integer Maximum settable number of topics.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicNumUpperLimit;

    /**
     * @var array AZ list. See [ZoneInfo](https://www.tencentcloud.comom/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) returned by the API [DescribeZones](https://www.tencentcloud.comom/document/product/1596/77929?from_cn_redirect=1) in Data Type.
     */
    public $ZoneIds;

    /**
     * @var integer Number of proxy nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeCount;

    /**
     * @var array Proxy scheduling details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneScheduledList;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceType Instance type.
Specifies the EXPERIMENT trial version.
BASIC version.
PRO edition.
PLATINUM. platinum version.
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param integer $TopicNum Number of topics
     * @param integer $TopicNumLimit Maximum number of topics per instance
     * @param integer $GroupNum Number of consumer groups
     * @param integer $GroupNumLimit Maximum number of consumer groups per instance
     * @param integer $MessageRetention Message retention time, in hours
     * @param integer $RetentionUpperLimit Maximum adjustable message retention time, in hours
     * @param integer $RetentionLowerLimit Minimum adjustable message retention time, in hours
     * @param integer $TpsLimit TPS throttle value
     * @param integer $ScaledTpsLimit Elastic TPS throttle value
     * @param integer $MaxMessageDelay Maximum delayed message time, in hours
     * @param integer $CreatedTime Creation time. **It is a Unix timestamp (ms).**
     * @param float $SendReceiveRatio Message sending and receiving ratio
     * @param array $TagList Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $EndpointList Access point list

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicQueueNumUpperLimit Maximum number of topic queues
     * @param integer $TopicQueueNumLowerLimit Minimum queue count for topic
     * @param string $Remark Remarks
     * @param string $InstanceStatus Instance status. valid values are as follows:.

- RUNNING: RUNNING.
-ABNORMAL: indicates an abnormal status.
-OVERDUE: isolated.
-DESTROYED: specifies the terminated status.
-CREATING: creating.
-MODIFYING.
-CREATE_FAILURE: creation failed.
-MODIFY_FAILURE: configuration adjustment failure.
-DELETING: deleting.
     * @param string $SkuCode Instance specification.
     * @param string $PayMode Billing mode. valid enumeration values are as follows:.

- POSTPAID: POSTPAID pay-as-you-go billing.
- PREPAID: PREPAID annual and monthly.
     * @param boolean $ScaledTpsEnabled Whether to enable elastic TPS.
     * @param integer $RenewFlag Specifies whether the prepaid cluster is automatically renewed. valid values are as follows:.

- 0: no automatic renewal.
- 1: specifies automatic renewal.
     * @param integer $ExpiryTime Expiration time. **It is a Unix timestamp (ms).**
     * @param integer $RoleNumLimit Specifies the limit on the number of roles.
     * @param boolean $AclEnabled Whether ACL is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicNumLowerLimit Number of topics within the free quota.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicNumUpperLimit Maximum settable number of topics.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneIds AZ list. See [ZoneInfo](https://www.tencentcloud.comom/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) returned by the API [DescribeZones](https://www.tencentcloud.comom/document/product/1596/77929?from_cn_redirect=1) in Data Type.
     * @param integer $NodeCount Number of proxy nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneScheduledList Proxy scheduling details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("GroupNumLimit",$param) and $param["GroupNumLimit"] !== null) {
            $this->GroupNumLimit = $param["GroupNumLimit"];
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("RetentionUpperLimit",$param) and $param["RetentionUpperLimit"] !== null) {
            $this->RetentionUpperLimit = $param["RetentionUpperLimit"];
        }

        if (array_key_exists("RetentionLowerLimit",$param) and $param["RetentionLowerLimit"] !== null) {
            $this->RetentionLowerLimit = $param["RetentionLowerLimit"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("ScaledTpsLimit",$param) and $param["ScaledTpsLimit"] !== null) {
            $this->ScaledTpsLimit = $param["ScaledTpsLimit"];
        }

        if (array_key_exists("MaxMessageDelay",$param) and $param["MaxMessageDelay"] !== null) {
            $this->MaxMessageDelay = $param["MaxMessageDelay"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("EndpointList",$param) and $param["EndpointList"] !== null) {
            $this->EndpointList = [];
            foreach ($param["EndpointList"] as $key => $value){
                $obj = new Endpoint();
                $obj->deserialize($value);
                array_push($this->EndpointList, $obj);
            }
        }

        if (array_key_exists("TopicQueueNumUpperLimit",$param) and $param["TopicQueueNumUpperLimit"] !== null) {
            $this->TopicQueueNumUpperLimit = $param["TopicQueueNumUpperLimit"];
        }

        if (array_key_exists("TopicQueueNumLowerLimit",$param) and $param["TopicQueueNumLowerLimit"] !== null) {
            $this->TopicQueueNumLowerLimit = $param["TopicQueueNumLowerLimit"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ScaledTpsEnabled",$param) and $param["ScaledTpsEnabled"] !== null) {
            $this->ScaledTpsEnabled = $param["ScaledTpsEnabled"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ExpiryTime",$param) and $param["ExpiryTime"] !== null) {
            $this->ExpiryTime = $param["ExpiryTime"];
        }

        if (array_key_exists("RoleNumLimit",$param) and $param["RoleNumLimit"] !== null) {
            $this->RoleNumLimit = $param["RoleNumLimit"];
        }

        if (array_key_exists("AclEnabled",$param) and $param["AclEnabled"] !== null) {
            $this->AclEnabled = $param["AclEnabled"];
        }

        if (array_key_exists("TopicNumLowerLimit",$param) and $param["TopicNumLowerLimit"] !== null) {
            $this->TopicNumLowerLimit = $param["TopicNumLowerLimit"];
        }

        if (array_key_exists("TopicNumUpperLimit",$param) and $param["TopicNumUpperLimit"] !== null) {
            $this->TopicNumUpperLimit = $param["TopicNumUpperLimit"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("ZoneScheduledList",$param) and $param["ZoneScheduledList"] !== null) {
            $this->ZoneScheduledList = [];
            foreach ($param["ZoneScheduledList"] as $key => $value){
                $obj = new ZoneScheduledItem();
                $obj->deserialize($value);
                array_push($this->ZoneScheduledList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
