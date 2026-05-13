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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT instance information.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getVersion() Obtain Instance version
 * @method void setVersion(string $Version) Set Instance version
 * @method string getInstanceType() Obtain Instance type
BASIC, basic version
PRO, Professional Edition
PLATINUM, platinum version
 * @method void setInstanceType(string $InstanceType) Set Instance type
BASIC, basic version
PRO, Professional Edition
PLATINUM, platinum version
 * @method string getInstanceStatus() Obtain Instance status
RUNNING: running.
MAINTAINING
ABNORMAL
OVERDUE, arrears
CREATING
MODIFYING, Modifying configuration in progress
Creation failed
MODIFY_FAILURE, configuration change failed
DELETING: Deleting
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status
RUNNING: running.
MAINTAINING
ABNORMAL
OVERDUE, arrears
CREATING
MODIFYING, Modifying configuration in progress
Creation failed
MODIFY_FAILURE, configuration change failed
DELETING: Deleting
 * @method integer getTopicNumLimit() Obtain Maximum number of instance topics
 * @method void setTopicNumLimit(integer $TopicNumLimit) Set Maximum number of instance topics
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getTopicNum() Obtain Number of topics
 * @method void setTopicNum(integer $TopicNum) Set Number of topics
 * @method string getSkuCode() Obtain Product specification
 * @method void setSkuCode(string $SkuCode) Set Product specification
 * @method integer getTpsLimit() Obtain Elastic TPS throttle value
 * @method void setTpsLimit(integer $TpsLimit) Set Elastic TPS throttle value
 * @method integer getCreateTime() Obtain Creation time, with a millisecond-level timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Creation time, with a millisecond-level timestamp.
 * @method integer getMaxSubscriptionPerClient() Obtain Maximum number of subscriptions for a single client
 * @method void setMaxSubscriptionPerClient(integer $MaxSubscriptionPerClient) Set Maximum number of subscriptions for a single client
 * @method integer getClientNumLimit() Obtain Maximum number of client connections.
 * @method void setClientNumLimit(integer $ClientNumLimit) Set Maximum number of client connections.
 * @method integer getRenewFlag() Obtain Whether it is automatically renewed. Only applicable to monthly subscription clusters.
1: Automatic renewal
Non-automatic renewal
 * @method void setRenewFlag(integer $RenewFlag) Set Whether it is automatically renewed. Only applicable to monthly subscription clusters.
1: Automatic renewal
Non-automatic renewal
 * @method string getPayMode() Obtain Billing mode, POSTPAID, pay-as-you-go PREPAID, annual/monthly subscription
 * @method void setPayMode(string $PayMode) Set Billing mode, POSTPAID, pay-as-you-go PREPAID, annual/monthly subscription
 * @method integer getExpiryTime() Obtain Expiry time, millisecond-level timestamp
 * @method void setExpiryTime(integer $ExpiryTime) Set Expiry time, millisecond-level timestamp
 * @method integer getDestroyTime() Obtain Predestruction time, millisecond-level timestamp
 * @method void setDestroyTime(integer $DestroyTime) Set Predestruction time, millisecond-level timestamp
 * @method integer getAuthorizationPolicyLimit() Obtain Number of authorization rule entries limit
 * @method void setAuthorizationPolicyLimit(integer $AuthorizationPolicyLimit) Set Number of authorization rule entries limit
 * @method integer getMaxCaNum() Obtain Maximum ca quota
 * @method void setMaxCaNum(integer $MaxCaNum) Set Maximum ca quota
 * @method integer getMaxSubscription() Obtain Maximum number of subscriptions
 * @method void setMaxSubscription(integer $MaxSubscription) Set Maximum number of subscriptions
 * @method integer getSharedSubscriptionGroupLimit() Obtain Maximum limit of shared subscription groups
 * @method void setSharedSubscriptionGroupLimit(integer $SharedSubscriptionGroupLimit) Set Maximum limit of shared subscription groups
 * @method integer getMaxTopicFilterPerSharedSubscriptionGroup() Obtain Number limit of TopicFilter in one shared subscription group
 * @method void setMaxTopicFilterPerSharedSubscriptionGroup(integer $MaxTopicFilterPerSharedSubscriptionGroup) Set Number limit of TopicFilter in one shared subscription group
 * @method integer getAutoSubscriptionPolicyLimit() Obtain Limit on number of auto subscription rules
 * @method void setAutoSubscriptionPolicyLimit(integer $AutoSubscriptionPolicyLimit) Set Limit on number of auto subscription rules
 * @method integer getMaxTopicFilterPerAutoSubscriptionPolicy() Obtain Number limit of TopicFilter in a single auto subscription rule
 * @method void setMaxTopicFilterPerAutoSubscriptionPolicy(integer $MaxTopicFilterPerAutoSubscriptionPolicy) Set Number limit of TopicFilter in a single auto subscription rule
 */
class MQTTInstanceItem extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Instance version
     */
    public $Version;

    /**
     * @var string Instance type
BASIC, basic version
PRO, Professional Edition
PLATINUM, platinum version
     */
    public $InstanceType;

    /**
     * @var string Instance status
RUNNING: running.
MAINTAINING
ABNORMAL
OVERDUE, arrears
CREATING
MODIFYING, Modifying configuration in progress
Creation failed
MODIFY_FAILURE, configuration change failed
DELETING: Deleting
     */
    public $InstanceStatus;

    /**
     * @var integer Maximum number of instance topics
     */
    public $TopicNumLimit;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Number of topics
     */
    public $TopicNum;

    /**
     * @var string Product specification
     */
    public $SkuCode;

    /**
     * @var integer Elastic TPS throttle value
     */
    public $TpsLimit;

    /**
     * @var integer Creation time, with a millisecond-level timestamp.
     */
    public $CreateTime;

    /**
     * @var integer Maximum number of subscriptions for a single client
     */
    public $MaxSubscriptionPerClient;

    /**
     * @var integer Maximum number of client connections.
     */
    public $ClientNumLimit;

    /**
     * @var integer Whether it is automatically renewed. Only applicable to monthly subscription clusters.
1: Automatic renewal
Non-automatic renewal
     */
    public $RenewFlag;

    /**
     * @var string Billing mode, POSTPAID, pay-as-you-go PREPAID, annual/monthly subscription
     */
    public $PayMode;

    /**
     * @var integer Expiry time, millisecond-level timestamp
     */
    public $ExpiryTime;

    /**
     * @var integer Predestruction time, millisecond-level timestamp
     */
    public $DestroyTime;

    /**
     * @var integer Number of authorization rule entries limit
     */
    public $AuthorizationPolicyLimit;

    /**
     * @var integer Maximum ca quota
     */
    public $MaxCaNum;

    /**
     * @var integer Maximum number of subscriptions
     */
    public $MaxSubscription;

    /**
     * @var integer Maximum limit of shared subscription groups
     */
    public $SharedSubscriptionGroupLimit;

    /**
     * @var integer Number limit of TopicFilter in one shared subscription group
     */
    public $MaxTopicFilterPerSharedSubscriptionGroup;

    /**
     * @var integer Limit on number of auto subscription rules
     */
    public $AutoSubscriptionPolicyLimit;

    /**
     * @var integer Number limit of TopicFilter in a single auto subscription rule
     */
    public $MaxTopicFilterPerAutoSubscriptionPolicy;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $Version Instance version
     * @param string $InstanceType Instance type
BASIC, basic version
PRO, Professional Edition
PLATINUM, platinum version
     * @param string $InstanceStatus Instance status
RUNNING: running.
MAINTAINING
ABNORMAL
OVERDUE, arrears
CREATING
MODIFYING, Modifying configuration in progress
Creation failed
MODIFY_FAILURE, configuration change failed
DELETING: Deleting
     * @param integer $TopicNumLimit Maximum number of instance topics
     * @param string $Remark Remarks
     * @param integer $TopicNum Number of topics
     * @param string $SkuCode Product specification
     * @param integer $TpsLimit Elastic TPS throttle value
     * @param integer $CreateTime Creation time, with a millisecond-level timestamp.
     * @param integer $MaxSubscriptionPerClient Maximum number of subscriptions for a single client
     * @param integer $ClientNumLimit Maximum number of client connections.
     * @param integer $RenewFlag Whether it is automatically renewed. Only applicable to monthly subscription clusters.
1: Automatic renewal
Non-automatic renewal
     * @param string $PayMode Billing mode, POSTPAID, pay-as-you-go PREPAID, annual/monthly subscription
     * @param integer $ExpiryTime Expiry time, millisecond-level timestamp
     * @param integer $DestroyTime Predestruction time, millisecond-level timestamp
     * @param integer $AuthorizationPolicyLimit Number of authorization rule entries limit
     * @param integer $MaxCaNum Maximum ca quota
     * @param integer $MaxSubscription Maximum number of subscriptions
     * @param integer $SharedSubscriptionGroupLimit Maximum limit of shared subscription groups
     * @param integer $MaxTopicFilterPerSharedSubscriptionGroup Number limit of TopicFilter in one shared subscription group
     * @param integer $AutoSubscriptionPolicyLimit Limit on number of auto subscription rules
     * @param integer $MaxTopicFilterPerAutoSubscriptionPolicy Number limit of TopicFilter in a single auto subscription rule
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MaxSubscriptionPerClient",$param) and $param["MaxSubscriptionPerClient"] !== null) {
            $this->MaxSubscriptionPerClient = $param["MaxSubscriptionPerClient"];
        }

        if (array_key_exists("ClientNumLimit",$param) and $param["ClientNumLimit"] !== null) {
            $this->ClientNumLimit = $param["ClientNumLimit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExpiryTime",$param) and $param["ExpiryTime"] !== null) {
            $this->ExpiryTime = $param["ExpiryTime"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("AuthorizationPolicyLimit",$param) and $param["AuthorizationPolicyLimit"] !== null) {
            $this->AuthorizationPolicyLimit = $param["AuthorizationPolicyLimit"];
        }

        if (array_key_exists("MaxCaNum",$param) and $param["MaxCaNum"] !== null) {
            $this->MaxCaNum = $param["MaxCaNum"];
        }

        if (array_key_exists("MaxSubscription",$param) and $param["MaxSubscription"] !== null) {
            $this->MaxSubscription = $param["MaxSubscription"];
        }

        if (array_key_exists("SharedSubscriptionGroupLimit",$param) and $param["SharedSubscriptionGroupLimit"] !== null) {
            $this->SharedSubscriptionGroupLimit = $param["SharedSubscriptionGroupLimit"];
        }

        if (array_key_exists("MaxTopicFilterPerSharedSubscriptionGroup",$param) and $param["MaxTopicFilterPerSharedSubscriptionGroup"] !== null) {
            $this->MaxTopicFilterPerSharedSubscriptionGroup = $param["MaxTopicFilterPerSharedSubscriptionGroup"];
        }

        if (array_key_exists("AutoSubscriptionPolicyLimit",$param) and $param["AutoSubscriptionPolicyLimit"] !== null) {
            $this->AutoSubscriptionPolicyLimit = $param["AutoSubscriptionPolicyLimit"];
        }

        if (array_key_exists("MaxTopicFilterPerAutoSubscriptionPolicy",$param) and $param["MaxTopicFilterPerAutoSubscriptionPolicy"] !== null) {
            $this->MaxTopicFilterPerAutoSubscriptionPolicy = $param["MaxTopicFilterPerAutoSubscriptionPolicy"];
        }
    }
}
