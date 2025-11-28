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
 * @method string getClusterName() Obtain 
 * @method void setClusterName(string $ClusterName) Set 
 * @method string getRegion() Obtain 
 * @method void setRegion(string $Region) Set 
 * @method integer getCreateTime() Obtain Creation time in milliseconds. unix timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Creation time in milliseconds. unix timestamp.
 * @method string getRemark() Obtain Cluster description information
 * @method void setRemark(string $Remark) Set Cluster description information
 * @method array getVpcs() Obtain 
 * @method void setVpcs(array $Vpcs) Set 
 * @method array getZoneIds() Obtain AZ information
 * @method void setZoneIds(array $ZoneIds) Set AZ information
 * @method integer getVirtualHostNumber() Obtain 
 * @method void setVirtualHostNumber(integer $VirtualHostNumber) Set 
 * @method integer getQueueNumber() Obtain 
 * @method void setQueueNumber(integer $QueueNumber) Set 
 * @method float getMessagePublishRate() Obtain 
 * @method void setMessagePublishRate(float $MessagePublishRate) Set 
 * @method integer getMessageStackNumber() Obtain 
 * @method void setMessageStackNumber(integer $MessageStackNumber) Set 
 * @method integer getExpireTime() Obtain Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
 * @method void setExpireTime(integer $ExpireTime) Set Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
 * @method integer getChannelNumber() Obtain 
 * @method void setChannelNumber(integer $ChannelNumber) Set 
 * @method integer getConnectionNumber() Obtain 
 * @method void setConnectionNumber(integer $ConnectionNumber) Set 
 * @method integer getConsumerNumber() Obtain 
 * @method void setConsumerNumber(integer $ConsumerNumber) Set 
 * @method integer getExchangeNumber() Obtain 
 * @method void setExchangeNumber(integer $ExchangeNumber) Set 
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
     * @var string 
     */
    public $ClusterName;

    /**
     * @var string 
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
     * @var array 
     */
    public $Vpcs;

    /**
     * @var array AZ information
     */
    public $ZoneIds;

    /**
     * @var integer 
     */
    public $VirtualHostNumber;

    /**
     * @var integer 
     */
    public $QueueNumber;

    /**
     * @var float 
     */
    public $MessagePublishRate;

    /**
     * @var integer 
     */
    public $MessageStackNumber;

    /**
     * @var integer Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
     */
    public $ExpireTime;

    /**
     * @var integer 
     */
    public $ChannelNumber;

    /**
     * @var integer 
     */
    public $ConnectionNumber;

    /**
     * @var integer 
     */
    public $ConsumerNumber;

    /**
     * @var integer 
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
     * @param string $ClusterName 
     * @param string $Region 
     * @param integer $CreateTime Creation time in milliseconds. unix timestamp.
     * @param string $Remark Cluster description information
     * @param array $Vpcs 
     * @param array $ZoneIds AZ information
     * @param integer $VirtualHostNumber 
     * @param integer $QueueNumber 
     * @param float $MessagePublishRate 
     * @param integer $MessageStackNumber 
     * @param integer $ExpireTime Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
     * @param integer $ChannelNumber 
     * @param integer $ConnectionNumber 
     * @param integer $ConsumerNumber 
     * @param integer $ExchangeNumber 
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
