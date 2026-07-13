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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ cluster basic information.
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getRegion() Obtain <p>Regional information</p>
 * @method void setRegion(string $Region) Set <p>Regional information</p>
 * @method integer getCreateTime() Obtain <p>Creation time in milliseconds</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time in milliseconds</p>
 * @method string getRemark() Obtain <p>Cluster description information</p>
 * @method void setRemark(string $Remark) Set <p>Cluster description information</p>
 * @method array getVpcs() Obtain <p>VPC and network info</p>
 * @method void setVpcs(array $Vpcs) Set <p>VPC and network info</p>
 * @method array getZoneIds() Obtain <p>AZ information</p>
 * @method void setZoneIds(array $ZoneIds) Set <p>AZ information</p>
 * @method integer getVirtualHostNumber() Obtain <p>Number of virtual hosts</p>
 * @method void setVirtualHostNumber(integer $VirtualHostNumber) Set <p>Number of virtual hosts</p>
 * @method integer getQueueNumber() Obtain <p>Number of queues</p>
 * @method void setQueueNumber(integer $QueueNumber) Set <p>Number of queues</p>
 * @method float getMessagePublishRate() Obtain <p>Number of messages produced per second Unit: messages/second</p>
 * @method void setMessagePublishRate(float $MessagePublishRate) Set <p>Number of messages produced per second Unit: messages/second</p>
 * @method integer getMessageStackNumber() Obtain <p>Number of accumulated messages Unit: unit</p>
 * @method void setMessageStackNumber(integer $MessageStackNumber) Set <p>Number of accumulated messages Unit: unit</p>
 * @method integer getExpireTime() Obtain <p>Expiration time</p>
 * @method void setExpireTime(integer $ExpireTime) Set <p>Expiration time</p>
 * @method integer getChannelNumber() Obtain <p>Number of channels</p>
 * @method void setChannelNumber(integer $ChannelNumber) Set <p>Number of channels</p>
 * @method integer getConnectionNumber() Obtain <p>Number of connections</p>
 * @method void setConnectionNumber(integer $ConnectionNumber) Set <p>Number of connections</p>
 * @method integer getConsumerNumber() Obtain <p>Number of consumers</p>
 * @method void setConsumerNumber(integer $ConsumerNumber) Set <p>Number of consumers</p>
 * @method integer getExchangeNumber() Obtain <p>Number of Exchanges</p>
 * @method void setExchangeNumber(integer $ExchangeNumber) Set <p>Number of Exchanges</p>
 * @method string getExceptionInformation() Obtain <p>Cluster exception information</p>
 * @method void setExceptionInformation(string $ExceptionInformation) Set <p>Cluster exception information</p>
 * @method integer getClusterStatus() Obtain <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed</p>
 * @method void setClusterStatus(integer $ClusterStatus) Set <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed</p>
 * @method integer getAutoRenewFlag() Obtain <p>Automatic renewal flag. 0: default status (initial status (that is manual renewal) if no status is set by the user); 1: automatic renewal; 2: no automatic renewal (set by the user).</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Automatic renewal flag. 0: default status (initial status (that is manual renewal) if no status is set by the user); 1: automatic renewal; 2: no automatic renewal (set by the user).</p>
 * @method integer getMirrorQueuePolicyFlag() Obtain <p>Whether to enable the mirror queue policy. 1 means enabled, 0 means disabled.</p>
 * @method void setMirrorQueuePolicyFlag(integer $MirrorQueuePolicyFlag) Set <p>Whether to enable the mirror queue policy. 1 means enabled, 0 means disabled.</p>
 * @method float getMessageConsumeRate() Obtain <p>Number of messages consumed per second Unit: messages/second</p>
 * @method void setMessageConsumeRate(float $MessageConsumeRate) Set <p>Number of messages consumed per second Unit: messages/second</p>
 * @method string getClusterVersion() Obtain <p>Cluster version information</p>
 * @method void setClusterVersion(string $ClusterVersion) Set <p>Cluster version information</p>
 * @method integer getPayMode() Obtain <p>Billing mode. 0 - Postpaid, 1 - Prepaid</p>
 * @method void setPayMode(integer $PayMode) Set <p>Billing mode. 0 - Postpaid, 1 - Prepaid</p>
 * @method integer getInstanceType() Obtain <p>Cluster type.</p>
 * @method void setInstanceType(integer $InstanceType) Set <p>Cluster type.</p>
 * @method integer getMessageRetainTime() Obtain <p>Message retention period Unit: hour</p>
 * @method void setMessageRetainTime(integer $MessageRetainTime) Set <p>Message retention period Unit: hour</p>
 * @method float getSendReceiveRatio() Obtain <p>Traffic ratio of sending messages</p>
 * @method void setSendReceiveRatio(float $SendReceiveRatio) Set <p>Traffic ratio of sending messages</p>
 * @method integer getTraceTime() Obtain <p>Message trace retention time in hours</p>
 * @method void setTraceTime(integer $TraceTime) Set <p>Message trace retention time in hours</p>
 * @method array getTags() Obtain <p>Instance tag list</p>
 * @method void setTags(array $Tags) Set <p>Instance tag list</p>
 * @method boolean getElasticTpsFlag() Obtain <p>Elastic scaling enabled tps</p>
 * @method void setElasticTpsFlag(boolean $ElasticTpsFlag) Set <p>Elastic scaling enabled tps</p>
 * @method float getElasticTpsRatio() Obtain <p>Elastic tps multiple, default is 1x</p>
 * @method void setElasticTpsRatio(float $ElasticTpsRatio) Set <p>Elastic tps multiple, default is 1x</p>
 * @method integer getMaxRedeliverCount() Obtain <p>Maximum retry count</p>
 * @method void setMaxRedeliverCount(integer $MaxRedeliverCount) Set <p>Maximum retry count</p>
 * @method integer getConsumerTimeout() Obtain <p>Consumption timeout period Unit: min</p>
 * @method void setConsumerTimeout(integer $ConsumerTimeout) Set <p>Consumption timeout period Unit: min</p>
 */
class RabbitMQClusterInfo extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Regional information</p>
     */
    public $Region;

    /**
     * @var integer <p>Creation time in milliseconds</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Cluster description information</p>
     */
    public $Remark;

    /**
     * @var array <p>VPC and network info</p>
     */
    public $Vpcs;

    /**
     * @var array <p>AZ information</p>
     */
    public $ZoneIds;

    /**
     * @var integer <p>Number of virtual hosts</p>
     */
    public $VirtualHostNumber;

    /**
     * @var integer <p>Number of queues</p>
     */
    public $QueueNumber;

    /**
     * @var float <p>Number of messages produced per second Unit: messages/second</p>
     */
    public $MessagePublishRate;

    /**
     * @var integer <p>Number of accumulated messages Unit: unit</p>
     */
    public $MessageStackNumber;

    /**
     * @var integer <p>Expiration time</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>Number of channels</p>
     */
    public $ChannelNumber;

    /**
     * @var integer <p>Number of connections</p>
     */
    public $ConnectionNumber;

    /**
     * @var integer <p>Number of consumers</p>
     */
    public $ConsumerNumber;

    /**
     * @var integer <p>Number of Exchanges</p>
     */
    public $ExchangeNumber;

    /**
     * @var string <p>Cluster exception information</p>
     */
    public $ExceptionInformation;

    /**
     * @var integer <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed</p>
     */
    public $ClusterStatus;

    /**
     * @var integer <p>Automatic renewal flag. 0: default status (initial status (that is manual renewal) if no status is set by the user); 1: automatic renewal; 2: no automatic renewal (set by the user).</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>Whether to enable the mirror queue policy. 1 means enabled, 0 means disabled.</p>
     */
    public $MirrorQueuePolicyFlag;

    /**
     * @var float <p>Number of messages consumed per second Unit: messages/second</p>
     */
    public $MessageConsumeRate;

    /**
     * @var string <p>Cluster version information</p>
     */
    public $ClusterVersion;

    /**
     * @var integer <p>Billing mode. 0 - Postpaid, 1 - Prepaid</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Cluster type.</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>Message retention period Unit: hour</p>
     */
    public $MessageRetainTime;

    /**
     * @var float <p>Traffic ratio of sending messages</p>
     */
    public $SendReceiveRatio;

    /**
     * @var integer <p>Message trace retention time in hours</p>
     */
    public $TraceTime;

    /**
     * @var array <p>Instance tag list</p>
     */
    public $Tags;

    /**
     * @var boolean <p>Elastic scaling enabled tps</p>
     */
    public $ElasticTpsFlag;

    /**
     * @var float <p>Elastic tps multiple, default is 1x</p>
     */
    public $ElasticTpsRatio;

    /**
     * @var integer <p>Maximum retry count</p>
     */
    public $MaxRedeliverCount;

    /**
     * @var integer <p>Consumption timeout period Unit: min</p>
     */
    public $ConsumerTimeout;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $Region <p>Regional information</p>
     * @param integer $CreateTime <p>Creation time in milliseconds</p>
     * @param string $Remark <p>Cluster description information</p>
     * @param array $Vpcs <p>VPC and network info</p>
     * @param array $ZoneIds <p>AZ information</p>
     * @param integer $VirtualHostNumber <p>Number of virtual hosts</p>
     * @param integer $QueueNumber <p>Number of queues</p>
     * @param float $MessagePublishRate <p>Number of messages produced per second Unit: messages/second</p>
     * @param integer $MessageStackNumber <p>Number of accumulated messages Unit: unit</p>
     * @param integer $ExpireTime <p>Expiration time</p>
     * @param integer $ChannelNumber <p>Number of channels</p>
     * @param integer $ConnectionNumber <p>Number of connections</p>
     * @param integer $ConsumerNumber <p>Number of consumers</p>
     * @param integer $ExchangeNumber <p>Number of Exchanges</p>
     * @param string $ExceptionInformation <p>Cluster exception information</p>
     * @param integer $ClusterStatus <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed</p>
     * @param integer $AutoRenewFlag <p>Automatic renewal flag. 0: default status (initial status (that is manual renewal) if no status is set by the user); 1: automatic renewal; 2: no automatic renewal (set by the user).</p>
     * @param integer $MirrorQueuePolicyFlag <p>Whether to enable the mirror queue policy. 1 means enabled, 0 means disabled.</p>
     * @param float $MessageConsumeRate <p>Number of messages consumed per second Unit: messages/second</p>
     * @param string $ClusterVersion <p>Cluster version information</p>
     * @param integer $PayMode <p>Billing mode. 0 - Postpaid, 1 - Prepaid</p>
     * @param integer $InstanceType <p>Cluster type.</p>
     * @param integer $MessageRetainTime <p>Message retention period Unit: hour</p>
     * @param float $SendReceiveRatio <p>Traffic ratio of sending messages</p>
     * @param integer $TraceTime <p>Message trace retention time in hours</p>
     * @param array $Tags <p>Instance tag list</p>
     * @param boolean $ElasticTpsFlag <p>Elastic scaling enabled tps</p>
     * @param float $ElasticTpsRatio <p>Elastic tps multiple, default is 1x</p>
     * @param integer $MaxRedeliverCount <p>Maximum retry count</p>
     * @param integer $ConsumerTimeout <p>Consumption timeout period Unit: min</p>
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

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }

        if (array_key_exists("TraceTime",$param) and $param["TraceTime"] !== null) {
            $this->TraceTime = $param["TraceTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RabbitMQServerlessTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ElasticTpsFlag",$param) and $param["ElasticTpsFlag"] !== null) {
            $this->ElasticTpsFlag = $param["ElasticTpsFlag"];
        }

        if (array_key_exists("ElasticTpsRatio",$param) and $param["ElasticTpsRatio"] !== null) {
            $this->ElasticTpsRatio = $param["ElasticTpsRatio"];
        }

        if (array_key_exists("MaxRedeliverCount",$param) and $param["MaxRedeliverCount"] !== null) {
            $this->MaxRedeliverCount = $param["MaxRedeliverCount"];
        }

        if (array_key_exists("ConsumerTimeout",$param) and $param["ConsumerTimeout"] !== null) {
            $this->ConsumerTimeout = $param["ConsumerTimeout"];
        }
    }
}
