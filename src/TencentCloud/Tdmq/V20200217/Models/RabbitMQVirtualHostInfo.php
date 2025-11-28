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
 * TDMQ for RabbitMQ vhost details
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method string getVirtualHost() Obtain Vhost name
 * @method void setVirtualHost(string $VirtualHost) Set Vhost name
 * @method string getDescription() Obtain Vhost description information.
 * @method void setDescription(string $Description) Set Vhost description information.
 * @method array getTags() Obtain Vhost tags.
 * @method void setTags(array $Tags) Set Vhost tags.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getModifyTime() Obtain Modification time.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
 * @method RabbitMQVirtualHostStatistics getVirtualHostStatistics() Obtain Vhost overview statistics information.
 * @method void setVirtualHostStatistics(RabbitMQVirtualHostStatistics $VirtualHostStatistics) Set Vhost overview statistics information.
 * @method boolean getTraceFlag() Obtain Message trace enabling status. true: enabled; false: disabled.
 * @method void setTraceFlag(boolean $TraceFlag) Set Message trace enabling status. true: enabled; false: disabled.
 * @method string getStatus() Obtain Vhost status, which corresponds to status in the native product console. Valid values: running, partial, stopped, and unknown.
 * @method void setStatus(string $Status) Set Vhost status, which corresponds to status in the native product console. Valid values: running, partial, stopped, and unknown.
 * @method integer getMessageHeapCount() Obtain Message backlog count.
 * @method void setMessageHeapCount(integer $MessageHeapCount) Set Message backlog count.
 * @method float getMessageRateIn() Obtain Message input rate.
 * @method void setMessageRateIn(float $MessageRateIn) Set Message input rate.
 * @method float getMessageRateOut() Obtain Message output rate.
 * @method void setMessageRateOut(float $MessageRateOut) Set Message output rate.
 * @method boolean getMirrorQueuePolicyFlag() Obtain Whether an image queue policy exists. true: Exists; false: Does not exist.
 * @method void setMirrorQueuePolicyFlag(boolean $MirrorQueuePolicyFlag) Set Whether an image queue policy exists. true: Exists; false: Does not exist.
 * @method integer getCreateTs() Obtain Creation timestamp.
 * @method void setCreateTs(integer $CreateTs) Set Creation timestamp.
 * @method integer getModifyTs() Obtain Modification timestamp.
 * @method void setModifyTs(integer $ModifyTs) Set Modification timestamp.
 */
class RabbitMQVirtualHostInfo extends AbstractModel
{
    /**
     * @var string Cluster instance ID
     */
    public $InstanceId;

    /**
     * @var string Vhost name
     */
    public $VirtualHost;

    /**
     * @var string Vhost description information.
     */
    public $Description;

    /**
     * @var array Vhost tags.
     */
    public $Tags;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
     */
    public $ModifyTime;

    /**
     * @var RabbitMQVirtualHostStatistics Vhost overview statistics information.
     */
    public $VirtualHostStatistics;

    /**
     * @var boolean Message trace enabling status. true: enabled; false: disabled.
     */
    public $TraceFlag;

    /**
     * @var string Vhost status, which corresponds to status in the native product console. Valid values: running, partial, stopped, and unknown.
     */
    public $Status;

    /**
     * @var integer Message backlog count.
     */
    public $MessageHeapCount;

    /**
     * @var float Message input rate.
     */
    public $MessageRateIn;

    /**
     * @var float Message output rate.
     */
    public $MessageRateOut;

    /**
     * @var boolean Whether an image queue policy exists. true: Exists; false: Does not exist.
     */
    public $MirrorQueuePolicyFlag;

    /**
     * @var integer Creation timestamp.
     */
    public $CreateTs;

    /**
     * @var integer Modification timestamp.
     */
    public $ModifyTs;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param string $VirtualHost Vhost name
     * @param string $Description Vhost description information.
     * @param array $Tags Vhost tags.
     * @param string $CreateTime Creation time.
     * @param string $ModifyTime Modification time.
     * @param RabbitMQVirtualHostStatistics $VirtualHostStatistics Vhost overview statistics information.
     * @param boolean $TraceFlag Message trace enabling status. true: enabled; false: disabled.
     * @param string $Status Vhost status, which corresponds to status in the native product console. Valid values: running, partial, stopped, and unknown.
     * @param integer $MessageHeapCount Message backlog count.
     * @param float $MessageRateIn Message input rate.
     * @param float $MessageRateOut Message output rate.
     * @param boolean $MirrorQueuePolicyFlag Whether an image queue policy exists. true: Exists; false: Does not exist.
     * @param integer $CreateTs Creation timestamp.
     * @param integer $ModifyTs Modification timestamp.
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("VirtualHostStatistics",$param) and $param["VirtualHostStatistics"] !== null) {
            $this->VirtualHostStatistics = new RabbitMQVirtualHostStatistics();
            $this->VirtualHostStatistics->deserialize($param["VirtualHostStatistics"]);
        }

        if (array_key_exists("TraceFlag",$param) and $param["TraceFlag"] !== null) {
            $this->TraceFlag = $param["TraceFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MessageHeapCount",$param) and $param["MessageHeapCount"] !== null) {
            $this->MessageHeapCount = $param["MessageHeapCount"];
        }

        if (array_key_exists("MessageRateIn",$param) and $param["MessageRateIn"] !== null) {
            $this->MessageRateIn = $param["MessageRateIn"];
        }

        if (array_key_exists("MessageRateOut",$param) and $param["MessageRateOut"] !== null) {
            $this->MessageRateOut = $param["MessageRateOut"];
        }

        if (array_key_exists("MirrorQueuePolicyFlag",$param) and $param["MirrorQueuePolicyFlag"] !== null) {
            $this->MirrorQueuePolicyFlag = $param["MirrorQueuePolicyFlag"];
        }

        if (array_key_exists("CreateTs",$param) and $param["CreateTs"] !== null) {
            $this->CreateTs = $param["CreateTs"];
        }

        if (array_key_exists("ModifyTs",$param) and $param["ModifyTs"] !== null) {
            $this->ModifyTs = $param["ModifyTs"];
        }
    }
}
