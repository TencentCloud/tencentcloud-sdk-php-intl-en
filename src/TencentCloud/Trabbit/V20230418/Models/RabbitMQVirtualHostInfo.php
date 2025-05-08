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
 * RabbitMQ vhost detail.
 *
 * @method string getInstanceId() Obtain instance ID
 * @method void setInstanceId(string $InstanceId) Set instance ID
 * @method string getVirtualHost() Obtain Vhost name.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost name.
 * @method string getDescription() Obtain Specifies the description information of the vhost.
 * @method void setDescription(string $Description) Set Specifies the description information of the vhost.
 * @method array getTags() Obtain Specifies the Tag of the vhost.
 * @method void setTags(array $Tags) Set Specifies the Tag of the vhost.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method RabbitMQVirtualHostStatistics getVirtualHostStatistics() Obtain Specifies the overview statistics information of the vhost.
 * @method void setVirtualHostStatistics(RabbitMQVirtualHostStatistics $VirtualHostStatistics) Set Specifies the overview statistics information of the vhost.
 * @method string getStatus() Obtain vhost status. specifies the status that corresponds to the native console and can be running, partial, stopped, or unknown.
 * @method void setStatus(string $Status) Set vhost status. specifies the status that corresponds to the native console and can be running, partial, stopped, or unknown.
 * @method integer getMessageHeapCount() Obtain Specifies the number of message backlogs.
 * @method void setMessageHeapCount(integer $MessageHeapCount) Set Specifies the number of message backlogs.
 * @method float getMessageRateIn() Obtain Input message rate.
 * @method void setMessageRateIn(float $MessageRateIn) Set Input message rate.
 * @method float getMessageRateOut() Obtain Output message rate.
 * @method void setMessageRateOut(float $MessageRateOut) Set Output message rate.
 * @method boolean getMirrorQueuePolicyFlag() Obtain Specifies whether a mirrored queue policy exists. true indicates existence, and false indicates non-existence.
 * @method void setMirrorQueuePolicyFlag(boolean $MirrorQueuePolicyFlag) Set Specifies whether a mirrored queue policy exists. true indicates existence, and false indicates non-existence.
 */
class RabbitMQVirtualHostInfo extends AbstractModel
{
    /**
     * @var string instance ID
     */
    public $InstanceId;

    /**
     * @var string Vhost name.
     */
    public $VirtualHost;

    /**
     * @var string Specifies the description information of the vhost.
     */
    public $Description;

    /**
     * @var array Specifies the Tag of the vhost.
     */
    public $Tags;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var RabbitMQVirtualHostStatistics Specifies the overview statistics information of the vhost.
     */
    public $VirtualHostStatistics;

    /**
     * @var string vhost status. specifies the status that corresponds to the native console and can be running, partial, stopped, or unknown.
     */
    public $Status;

    /**
     * @var integer Specifies the number of message backlogs.
     */
    public $MessageHeapCount;

    /**
     * @var float Input message rate.
     */
    public $MessageRateIn;

    /**
     * @var float Output message rate.
     */
    public $MessageRateOut;

    /**
     * @var boolean Specifies whether a mirrored queue policy exists. true indicates existence, and false indicates non-existence.
     */
    public $MirrorQueuePolicyFlag;

    /**
     * @param string $InstanceId instance ID
     * @param string $VirtualHost Vhost name.
     * @param string $Description Specifies the description information of the vhost.
     * @param array $Tags Specifies the Tag of the vhost.
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
     * @param RabbitMQVirtualHostStatistics $VirtualHostStatistics Specifies the overview statistics information of the vhost.
     * @param string $Status vhost status. specifies the status that corresponds to the native console and can be running, partial, stopped, or unknown.
     * @param integer $MessageHeapCount Specifies the number of message backlogs.
     * @param float $MessageRateIn Input message rate.
     * @param float $MessageRateOut Output message rate.
     * @param boolean $MirrorQueuePolicyFlag Specifies whether a mirrored queue policy exists. true indicates existence, and false indicates non-existence.
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
    }
}
