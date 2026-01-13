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
 * Instance information on the instance list page
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getVersion() Obtain Instance version.
 * @method void setVersion(string $Version) Set Instance version.
 * @method string getInstanceType() Obtain Instance type.
Trial version.
BASIC version.
PRO, professional edition.
PLATINUM edition.
 * @method void setInstanceType(string $InstanceType) Set Instance type.
Trial version.
BASIC version.
PRO, professional edition.
PLATINUM edition.
 * @method string getInstanceStatus() Obtain Instance status.
RUNNING. specifies the running status.
MAINTAINING.
ABNORMAL.
OVERDUE. specifies the state of arrears.
`DESTROYED`: `deleted`.
CREATING.
MODIFYING.
CREATE_FAILURE. specifies that the creation failed.
MODIFY_FAILURE. indicates a configuration adjustment failure.
Valid values: DELETING. indicates that the resource is being deleted.
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status.
RUNNING. specifies the running status.
MAINTAINING.
ABNORMAL.
OVERDUE. specifies the state of arrears.
`DESTROYED`: `deleted`.
CREATING.
MODIFYING.
CREATE_FAILURE. specifies that the creation failed.
MODIFY_FAILURE. indicates a configuration adjustment failure.
Valid values: DELETING. indicates that the resource is being deleted.
 * @method integer getTopicNumLimit() Obtain Maximum number of instance topics
 * @method void setTopicNumLimit(integer $TopicNumLimit) Set Maximum number of instance topics
 * @method integer getGroupNumLimit() Obtain Maximum number of instance consumer groups
 * @method void setGroupNumLimit(integer $GroupNumLimit) Set Maximum number of instance consumer groups
 * @method string getPayMode() Obtain Billing mode. valid enumeration values are as follows:.

-POSTPAID: pay-as-you-go.

- PREPAID: monthly subscription.
 * @method void setPayMode(string $PayMode) Set Billing mode. valid enumeration values are as follows:.

-POSTPAID: pay-as-you-go.

- PREPAID: monthly subscription.
 * @method integer getExpiryTime() Obtain Expiration time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpiryTime(integer $ExpiryTime) Set Expiration time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicNum() Obtain Number of topics
 * @method void setTopicNum(integer $TopicNum) Set Number of topics
 * @method integer getGroupNum() Obtain Number of consumer groups
 * @method void setGroupNum(integer $GroupNum) Set Number of consumer groups
 * @method array getTagList() Obtain Tag list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagList(array $TagList) Set Tag list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSkuCode() Obtain Specifies the product specification.
 * @method void setSkuCode(string $SkuCode) Set Specifies the product specification.
 * @method integer getTpsLimit() Obtain TPS throttle value

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTpsLimit(integer $TpsLimit) Set TPS throttle value

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScaledTpsLimit() Obtain Elastic TPS throttle value
 * @method void setScaledTpsLimit(integer $ScaledTpsLimit) Set Elastic TPS throttle value
 * @method integer getMessageRetention() Obtain Message retention time, in hours
 * @method void setMessageRetention(integer $MessageRetention) Set Message retention time, in hours
 * @method integer getMaxMessageDelay() Obtain Maximum delayed message duration, in hours
 * @method void setMaxMessageDelay(integer $MaxMessageDelay) Set Maximum delayed message duration, in hours
 * @method integer getRenewFlag() Obtain Specifies whether the prepaid cluster is automatically renewed. valid values are as follows:.

- 0: no automatic renewal.
- 1: specifies automatic renewal.
 * @method void setRenewFlag(integer $RenewFlag) Set Specifies whether the prepaid cluster is automatically renewed. valid values are as follows:.

- 0: no automatic renewal.
- 1: specifies automatic renewal.
 * @method InstanceItemExtraInfo getInstanceItemExtraInfo() Obtain Data unique to version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceItemExtraInfo(InstanceItemExtraInfo $InstanceItemExtraInfo) Set Data unique to version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDestroyTime() Obtain Expected termination time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDestroyTime(integer $DestroyTime) Set Expected termination time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZoneIds() Obtain AZ list. See [ZoneInfo](https://www.tencentcloud.com/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) returned by the API [DescribeZones](https://www.tencentcloud.com/document/product/1596/77929?from_cn_redirect=1) in Data Type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneIds(array $ZoneIds) Set AZ list. See [ZoneInfo](https://www.tencentcloud.com/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) returned by the API [DescribeZones](https://www.tencentcloud.com/document/product/1596/77929?from_cn_redirect=1) in Data Type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableDeletionProtection() Obtain Whether to enable deletion protection
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) Set Whether to enable deletion protection
 * @method integer getCreateTime() Obtain Instance creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Instance creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getScaledTpsEnabled() Obtain Elastic TPS switch.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScaledTpsEnabled(boolean $ScaledTpsEnabled) Set Elastic TPS switch.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FusionInstanceItem extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance version.
     */
    public $Version;

    /**
     * @var string Instance type.
Trial version.
BASIC version.
PRO, professional edition.
PLATINUM edition.
     */
    public $InstanceType;

    /**
     * @var string Instance status.
RUNNING. specifies the running status.
MAINTAINING.
ABNORMAL.
OVERDUE. specifies the state of arrears.
`DESTROYED`: `deleted`.
CREATING.
MODIFYING.
CREATE_FAILURE. specifies that the creation failed.
MODIFY_FAILURE. indicates a configuration adjustment failure.
Valid values: DELETING. indicates that the resource is being deleted.
     */
    public $InstanceStatus;

    /**
     * @var integer Maximum number of instance topics
     */
    public $TopicNumLimit;

    /**
     * @var integer Maximum number of instance consumer groups
     */
    public $GroupNumLimit;

    /**
     * @var string Billing mode. valid enumeration values are as follows:.

-POSTPAID: pay-as-you-go.

- PREPAID: monthly subscription.
     */
    public $PayMode;

    /**
     * @var integer Expiration time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpiryTime;

    /**
     * @var string Remarks

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var integer Number of topics
     */
    public $TopicNum;

    /**
     * @var integer Number of consumer groups
     */
    public $GroupNum;

    /**
     * @var array Tag list

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagList;

    /**
     * @var string Specifies the product specification.
     */
    public $SkuCode;

    /**
     * @var integer TPS throttle value

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TpsLimit;

    /**
     * @var integer Elastic TPS throttle value
     */
    public $ScaledTpsLimit;

    /**
     * @var integer Message retention time, in hours
     */
    public $MessageRetention;

    /**
     * @var integer Maximum delayed message duration, in hours
     */
    public $MaxMessageDelay;

    /**
     * @var integer Specifies whether the prepaid cluster is automatically renewed. valid values are as follows:.

- 0: no automatic renewal.
- 1: specifies automatic renewal.
     */
    public $RenewFlag;

    /**
     * @var InstanceItemExtraInfo Data unique to version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceItemExtraInfo;

    /**
     * @var integer Expected termination time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DestroyTime;

    /**
     * @var array AZ list. See [ZoneInfo](https://www.tencentcloud.com/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) returned by the API [DescribeZones](https://www.tencentcloud.com/document/product/1596/77929?from_cn_redirect=1) in Data Type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneIds;

    /**
     * @var boolean Whether to enable deletion protection
     */
    public $EnableDeletionProtection;

    /**
     * @var integer Instance creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var boolean Elastic TPS switch.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScaledTpsEnabled;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Version Instance version.
     * @param string $InstanceType Instance type.
Trial version.
BASIC version.
PRO, professional edition.
PLATINUM edition.
     * @param string $InstanceStatus Instance status.
RUNNING. specifies the running status.
MAINTAINING.
ABNORMAL.
OVERDUE. specifies the state of arrears.
`DESTROYED`: `deleted`.
CREATING.
MODIFYING.
CREATE_FAILURE. specifies that the creation failed.
MODIFY_FAILURE. indicates a configuration adjustment failure.
Valid values: DELETING. indicates that the resource is being deleted.
     * @param integer $TopicNumLimit Maximum number of instance topics
     * @param integer $GroupNumLimit Maximum number of instance consumer groups
     * @param string $PayMode Billing mode. valid enumeration values are as follows:.

-POSTPAID: pay-as-you-go.

- PREPAID: monthly subscription.
     * @param integer $ExpiryTime Expiration time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicNum Number of topics
     * @param integer $GroupNum Number of consumer groups
     * @param array $TagList Tag list

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SkuCode Specifies the product specification.
     * @param integer $TpsLimit TPS throttle value

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScaledTpsLimit Elastic TPS throttle value
     * @param integer $MessageRetention Message retention time, in hours
     * @param integer $MaxMessageDelay Maximum delayed message duration, in hours
     * @param integer $RenewFlag Specifies whether the prepaid cluster is automatically renewed. valid values are as follows:.

- 0: no automatic renewal.
- 1: specifies automatic renewal.
     * @param InstanceItemExtraInfo $InstanceItemExtraInfo Data unique to version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DestroyTime Expected termination time. **It is a Unix timestamp (ms).**
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneIds AZ list. See [ZoneInfo](https://www.tencentcloud.com/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) returned by the API [DescribeZones](https://www.tencentcloud.com/document/product/1596/77929?from_cn_redirect=1) in Data Type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableDeletionProtection Whether to enable deletion protection
     * @param integer $CreateTime Instance creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ScaledTpsEnabled Elastic TPS switch.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("GroupNumLimit",$param) and $param["GroupNumLimit"] !== null) {
            $this->GroupNumLimit = $param["GroupNumLimit"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExpiryTime",$param) and $param["ExpiryTime"] !== null) {
            $this->ExpiryTime = $param["ExpiryTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("ScaledTpsLimit",$param) and $param["ScaledTpsLimit"] !== null) {
            $this->ScaledTpsLimit = $param["ScaledTpsLimit"];
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("MaxMessageDelay",$param) and $param["MaxMessageDelay"] !== null) {
            $this->MaxMessageDelay = $param["MaxMessageDelay"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("InstanceItemExtraInfo",$param) and $param["InstanceItemExtraInfo"] !== null) {
            $this->InstanceItemExtraInfo = new InstanceItemExtraInfo();
            $this->InstanceItemExtraInfo->deserialize($param["InstanceItemExtraInfo"]);
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ScaledTpsEnabled",$param) and $param["ScaledTpsEnabled"] !== null) {
            $this->ScaledTpsEnabled = $param["ScaledTpsEnabled"];
        }
    }
}
