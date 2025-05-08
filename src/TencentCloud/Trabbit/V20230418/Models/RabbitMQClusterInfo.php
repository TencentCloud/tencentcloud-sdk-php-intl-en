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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ cluster basic information.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method integer getCreateTime() Obtain Creation time, in milliseconds
 * @method void setCreateTime(integer $CreateTime) Set Creation time, in milliseconds
 * @method string getRemark() Obtain Cluster description remark information
 * @method void setRemark(string $Remark) Set Cluster description remark information
 * @method array getVpcs() Obtain VPC and network information.
 * @method void setVpcs(array $Vpcs) Set VPC and network information.
 * @method array getZoneIds() Obtain Availability zone information
 * @method void setZoneIds(array $ZoneIds) Set Availability zone information
 * @method integer getVirtualHostNumber() Obtain number of virtual hosts.
 * @method void setVirtualHostNumber(integer $VirtualHostNumber) Set number of virtual hosts.
 * @method integer getQueueNumber() Obtain Number of queues
 * @method void setQueueNumber(integer $QueueNumber) Set Number of queues
 * @method float getMessagePublishRate() Obtain Number of messages produced per second (measurement unit: messages/second).
 * @method void setMessagePublishRate(float $MessagePublishRate) Set Number of messages produced per second (measurement unit: messages/second).
 * @method integer getMessageStackNumber() Obtain Number of accumulated messages. valid values: pieces.
 * @method void setMessageStackNumber(integer $MessageStackNumber) Set Number of accumulated messages. valid values: pieces.
 * @method integer getExpireTime() Obtain Expiration time
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time
 * @method integer getChannelNumber() Obtain number of channels.
 * @method void setChannelNumber(integer $ChannelNumber) Set number of channels.
 * @method integer getConnectionNumber() Obtain number of connections.
 * @method void setConnectionNumber(integer $ConnectionNumber) Set number of connections.
 * @method integer getConsumerNumber() Obtain Number of consumers.
 * @method void setConsumerNumber(integer $ConsumerNumber) Set Number of consumers.
 * @method integer getExchangeNumber() Obtain Number of Exchanges.
 * @method void setExchangeNumber(integer $ExchangeNumber) Set Number of Exchanges.
 * @method string getExceptionInformation() Obtain Cluster exception information.
 * @method void setExceptionInformation(string $ExceptionInformation) Set Cluster exception information.
 * @method integer getClusterStatus() Obtain Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.
 * @method void setClusterStatus(integer $ClusterStatus) Set Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
 * @method integer getMirrorQueuePolicyFlag() Obtain Whether the mirrored queue strategy is enabled. 1 indicates enabled, and 0 indicates not enabled.
 * @method void setMirrorQueuePolicyFlag(integer $MirrorQueuePolicyFlag) Set Whether the mirrored queue strategy is enabled. 1 indicates enabled, and 0 indicates not enabled.
 * @method float getMessageConsumeRate() Obtain Number of messages consumed per second (measurement unit: messages/second).
 * @method void setMessageConsumeRate(float $MessageConsumeRate) Set Number of messages consumed per second (measurement unit: messages/second).
 * @method string getClusterVersion() Obtain Specifies the cluster version information.
 * @method void setClusterVersion(string $ClusterVersion) Set Specifies the cluster version information.
 * @method integer getPayMode() Obtain Billing mode. valid values: 0 (postpaid), 1 (prepaid).
 * @method void setPayMode(integer $PayMode) Set Billing mode. valid values: 0 (postpaid), 1 (prepaid).
 * @method integer getInstanceType() Obtain Specifies the cluster type.
 * @method void setInstanceType(integer $InstanceType) Set Specifies the cluster type.
 * @method integer getMessageRetainTime() Obtain Specifies the message retention time, in hours.
 * @method void setMessageRetainTime(integer $MessageRetainTime) Set Specifies the message retention time, in hours.
 */
class RabbitMQClusterInfo extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var integer Creation time, in milliseconds
     */
    public $CreateTime;

    /**
     * @var string Cluster description remark information
     */
    public $Remark;

    /**
     * @var array VPC and network information.
     */
    public $Vpcs;

    /**
     * @var array Availability zone information
     */
    public $ZoneIds;

    /**
     * @var integer number of virtual hosts.
     */
    public $VirtualHostNumber;

    /**
     * @var integer Number of queues
     */
    public $QueueNumber;

    /**
     * @var float Number of messages produced per second (measurement unit: messages/second).
     */
    public $MessagePublishRate;

    /**
     * @var integer Number of accumulated messages. valid values: pieces.
     */
    public $MessageStackNumber;

    /**
     * @var integer Expiration time
     */
    public $ExpireTime;

    /**
     * @var integer number of channels.
     */
    public $ChannelNumber;

    /**
     * @var integer number of connections.
     */
    public $ConnectionNumber;

    /**
     * @var integer Number of consumers.
     */
    public $ConsumerNumber;

    /**
     * @var integer Number of Exchanges.
     */
    public $ExchangeNumber;

    /**
     * @var string Cluster exception information.
     */
    public $ExceptionInformation;

    /**
     * @var integer Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.
     */
    public $ClusterStatus;

    /**
     * @var integer Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether the mirrored queue strategy is enabled. 1 indicates enabled, and 0 indicates not enabled.
     */
    public $MirrorQueuePolicyFlag;

    /**
     * @var float Number of messages consumed per second (measurement unit: messages/second).
     */
    public $MessageConsumeRate;

    /**
     * @var string Specifies the cluster version information.
     */
    public $ClusterVersion;

    /**
     * @var integer Billing mode. valid values: 0 (postpaid), 1 (prepaid).
     */
    public $PayMode;

    /**
     * @var integer Specifies the cluster type.
     */
    public $InstanceType;

    /**
     * @var integer Specifies the message retention time, in hours.
     */
    public $MessageRetainTime;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name.
     * @param string $Region Region information
     * @param integer $CreateTime Creation time, in milliseconds
     * @param string $Remark Cluster description remark information
     * @param array $Vpcs VPC and network information.
     * @param array $ZoneIds Availability zone information
     * @param integer $VirtualHostNumber number of virtual hosts.
     * @param integer $QueueNumber Number of queues
     * @param float $MessagePublishRate Number of messages produced per second (measurement unit: messages/second).
     * @param integer $MessageStackNumber Number of accumulated messages. valid values: pieces.
     * @param integer $ExpireTime Expiration time
     * @param integer $ChannelNumber number of channels.
     * @param integer $ConnectionNumber number of connections.
     * @param integer $ConsumerNumber Number of consumers.
     * @param integer $ExchangeNumber Number of Exchanges.
     * @param string $ExceptionInformation Cluster exception information.
     * @param integer $ClusterStatus Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.
     * @param integer $AutoRenewFlag Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
     * @param integer $MirrorQueuePolicyFlag Whether the mirrored queue strategy is enabled. 1 indicates enabled, and 0 indicates not enabled.
     * @param float $MessageConsumeRate Number of messages consumed per second (measurement unit: messages/second).
     * @param string $ClusterVersion Specifies the cluster version information.
     * @param integer $PayMode Billing mode. valid values: 0 (postpaid), 1 (prepaid).
     * @param integer $InstanceType Specifies the cluster type.
     * @param integer $MessageRetainTime Specifies the message retention time, in hours.
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

        if (array_key_exists("MessageRetainTime",$param) and $param["MessageRetainTime"] !== null) {
            $this->MessageRetainTime = $param["MessageRetainTime"];
        }
    }
}
