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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ cluster basic information.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster Name
 * @method void setClusterName(string $ClusterName) Set Cluster Name
 * @method string getRegion() Obtain Region Information
 * @method void setRegion(string $Region) Set Region Information
 * @method integer getCreateTime() Obtain Creation time in milliseconds. unix timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Creation time in milliseconds. unix timestamp.
 * @method string getRemark() Obtain Cluster description information
 * @method void setRemark(string $Remark) Set Cluster description information
 * @method array getVpcs() Obtain VPC and network information
 * @method void setVpcs(array $Vpcs) Set VPC and network information
 * @method array getZoneIds() Obtain AZ information
 * @method void setZoneIds(array $ZoneIds) Set AZ information
 * @method integer getVirtualHostNumber() Obtain Virtual Host Quantity
 * @method void setVirtualHostNumber(integer $VirtualHostNumber) Set Virtual Host Quantity
 * @method integer getQueueNumber() Obtain Number of Queues
 * @method void setQueueNumber(integer $QueueNumber) Set Number of Queues
 * @method float getMessagePublishRate() Obtain Number of messages produced per second Unit: messages/second
 * @method void setMessagePublishRate(float $MessagePublishRate) Set Number of messages produced per second Unit: messages/second
 * @method integer getMessageStackNumber() Obtain Number of backlogged messages Unit: messages
 * @method void setMessageStackNumber(integer $MessageStackNumber) Set Number of backlogged messages Unit: messages
 * @method integer getExpireTime() Obtain Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
 * @method void setExpireTime(integer $ExpireTime) Set Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
 * @method integer getChannelNumber() Obtain Channel Count
 * @method void setChannelNumber(integer $ChannelNumber) Set Channel Count
 * @method integer getConnectionNumber() Obtain Connection Count
 * @method void setConnectionNumber(integer $ConnectionNumber) Set Connection Count
 * @method integer getConsumerNumber() Obtain Consumer Count
 * @method void setConsumerNumber(integer $ConsumerNumber) Set Consumer Count
 * @method integer getExchangeNumber() Obtain Exchange Count
 * @method void setExchangeNumber(integer $ExchangeNumber) Set Exchange Count
 * @method string getExceptionInformation() Obtain Cluster exception information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExceptionInformation(string $ExceptionInformation) Set Cluster exception information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClusterStatus() Obtain Instance status. 0: creating; 1: normal; 2: isolating; 3: terminated; 4: abnormal; 5: delivery failed.
 * @method void setClusterStatus(integer $ClusterStatus) Set Instance status. 0: creating; 1: normal; 2: isolating; 3: terminated; 4: abnormal; 5: delivery failed.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
 * @method integer getMirrorQueuePolicyFlag() Obtain Whether the image queue policy is enabled. 1: enabled; 0: disabled.
 * @method void setMirrorQueuePolicyFlag(integer $MirrorQueuePolicyFlag) Set Whether the image queue policy is enabled. 1: enabled; 0: disabled.
 * @method float getMessageConsumeRate() Obtain Number of messages consumed per second. Unit: messages/second.
 * @method void setMessageConsumeRate(float $MessageConsumeRate) Set Number of messages consumed per second. Unit: messages/second.
 * @method string getClusterVersion() Obtain Cluster version information.
 * @method void setClusterVersion(string $ClusterVersion) Set Cluster version information.
 * @method integer getPayMode() Obtain Billing mode. 0: postpaid; 1: prepaid.
 * @method void setPayMode(integer $PayMode) Set Billing mode. 0: postpaid; 1: prepaid.
 * @method integer getInstanceType() Obtain Instance type. 0: Exclusive Edition; 1: Serverless Edition.
 * @method void setInstanceType(integer $InstanceType) Set Instance type. 0: Exclusive Edition; 1: Serverless Edition.
 * @method integer getIsolatedTime() Obtain Specifies the isolation time started. unix timestamp.
 * @method void setIsolatedTime(integer $IsolatedTime) Set Specifies the isolation time started. unix timestamp.
 * @method boolean getContainer() Obtain Whether it is a container instance. default true.
 * @method void setContainer(boolean $Container) Set Whether it is a container instance. default true.
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 * @method boolean getEnableDeletionProtection() Obtain Whether deletion protection is enabled.
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) Set Whether deletion protection is enabled.
 */
class RabbitMQClusterInfo extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster Name
     */
    public $ClusterName;

    /**
     * @var string Region Information
     */
    public $Region;

    /**
     * @var integer Creation time in milliseconds. unix timestamp.
     */
    public $CreateTime;

    /**
     * @var string Cluster description information
     */
    public $Remark;

    /**
     * @var array VPC and network information
     */
    public $Vpcs;

    /**
     * @var array AZ information
     */
    public $ZoneIds;

    /**
     * @var integer Virtual Host Quantity
     */
    public $VirtualHostNumber;

    /**
     * @var integer Number of Queues
     */
    public $QueueNumber;

    /**
     * @var float Number of messages produced per second Unit: messages/second
     */
    public $MessagePublishRate;

    /**
     * @var integer Number of backlogged messages Unit: messages
     */
    public $MessageStackNumber;

    /**
     * @var integer Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
     */
    public $ExpireTime;

    /**
     * @var integer Channel Count
     */
    public $ChannelNumber;

    /**
     * @var integer Connection Count
     */
    public $ConnectionNumber;

    /**
     * @var integer Consumer Count
     */
    public $ConsumerNumber;

    /**
     * @var integer Exchange Count
     */
    public $ExchangeNumber;

    /**
     * @var string Cluster exception information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExceptionInformation;

    /**
     * @var integer Instance status. 0: creating; 1: normal; 2: isolating; 3: terminated; 4: abnormal; 5: delivery failed.
     */
    public $ClusterStatus;

    /**
     * @var integer Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether the image queue policy is enabled. 1: enabled; 0: disabled.
     */
    public $MirrorQueuePolicyFlag;

    /**
     * @var float Number of messages consumed per second. Unit: messages/second.
     */
    public $MessageConsumeRate;

    /**
     * @var string Cluster version information.
     */
    public $ClusterVersion;

    /**
     * @var integer Billing mode. 0: postpaid; 1: prepaid.
     */
    public $PayMode;

    /**
     * @var integer Instance type. 0: Exclusive Edition; 1: Serverless Edition.
     */
    public $InstanceType;

    /**
     * @var integer Specifies the isolation time started. unix timestamp.
     */
    public $IsolatedTime;

    /**
     * @var boolean Whether it is a container instance. default true.
     */
    public $Container;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @var boolean Whether deletion protection is enabled.
     */
    public $EnableDeletionProtection;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster Name
     * @param string $Region Region Information
     * @param integer $CreateTime Creation time in milliseconds. unix timestamp.
     * @param string $Remark Cluster description information
     * @param array $Vpcs VPC and network information
     * @param array $ZoneIds AZ information
     * @param integer $VirtualHostNumber Virtual Host Quantity
     * @param integer $QueueNumber Number of Queues
     * @param float $MessagePublishRate Number of messages produced per second Unit: messages/second
     * @param integer $MessageStackNumber Number of backlogged messages Unit: messages
     * @param integer $ExpireTime Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
     * @param integer $ChannelNumber Channel Count
     * @param integer $ConnectionNumber Connection Count
     * @param integer $ConsumerNumber Consumer Count
     * @param integer $ExchangeNumber Exchange Count
     * @param string $ExceptionInformation Cluster exception information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClusterStatus Instance status. 0: creating; 1: normal; 2: isolating; 3: terminated; 4: abnormal; 5: delivery failed.
     * @param integer $AutoRenewFlag Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
     * @param integer $MirrorQueuePolicyFlag Whether the image queue policy is enabled. 1: enabled; 0: disabled.
     * @param float $MessageConsumeRate Number of messages consumed per second. Unit: messages/second.
     * @param string $ClusterVersion Cluster version information.
     * @param integer $PayMode Billing mode. 0: postpaid; 1: prepaid.
     * @param integer $InstanceType Instance type. 0: Exclusive Edition; 1: Serverless Edition.
     * @param integer $IsolatedTime Specifies the isolation time started. unix timestamp.
     * @param boolean $Container Whether it is a container instance. default true.
     * @param array $Tags Tag list
     * @param boolean $EnableDeletionProtection Whether deletion protection is enabled.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcEndpointInfo();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("VirtualHostNumber",$param) and $param["VirtualHostNumber"] !== null) {
            $this->VirtualHostNumber = $param["VirtualHostNumber"];
        }

        if (array_key_exists("QueueNumber",$param) and $param["QueueNumber"] !== null) {
            $this->QueueNumber = $param["QueueNumber"];
        }

        if (array_key_exists("MessagePublishRate",$param) and $param["MessagePublishRate"] !== null) {
            $this->MessagePublishRate = $param["MessagePublishRate"];
        }

        if (array_key_exists("MessageStackNumber",$param) and $param["MessageStackNumber"] !== null) {
            $this->MessageStackNumber = $param["MessageStackNumber"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChannelNumber",$param) and $param["ChannelNumber"] !== null) {
            $this->ChannelNumber = $param["ChannelNumber"];
        }

        if (array_key_exists("ConnectionNumber",$param) and $param["ConnectionNumber"] !== null) {
            $this->ConnectionNumber = $param["ConnectionNumber"];
        }

        if (array_key_exists("ConsumerNumber",$param) and $param["ConsumerNumber"] !== null) {
            $this->ConsumerNumber = $param["ConsumerNumber"];
        }

        if (array_key_exists("ExchangeNumber",$param) and $param["ExchangeNumber"] !== null) {
            $this->ExchangeNumber = $param["ExchangeNumber"];
        }

        if (array_key_exists("ExceptionInformation",$param) and $param["ExceptionInformation"] !== null) {
            $this->ExceptionInformation = $param["ExceptionInformation"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("MirrorQueuePolicyFlag",$param) and $param["MirrorQueuePolicyFlag"] !== null) {
            $this->MirrorQueuePolicyFlag = $param["MirrorQueuePolicyFlag"];
        }

        if (array_key_exists("MessageConsumeRate",$param) and $param["MessageConsumeRate"] !== null) {
            $this->MessageConsumeRate = $param["MessageConsumeRate"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }
    }
}
