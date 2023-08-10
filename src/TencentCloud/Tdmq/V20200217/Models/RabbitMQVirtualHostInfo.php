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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ for RabbitMQ vhost details
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method string getVirtualHost() Obtain Vhost name
 * @method void setVirtualHost(string $VirtualHost) Set Vhost name
 * @method string getDescription() Obtain Vhost description
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Vhost description
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Vhost tag
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Vhost tag
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Modification time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method RabbitMQVirtualHostStatistics getVirtualHostStatistics() Obtain Statistics of vhost overview
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setVirtualHostStatistics(RabbitMQVirtualHostStatistics $VirtualHostStatistics) Set Statistics of vhost overview
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method integer getMessageHeapCount() Obtain 
 * @method void setMessageHeapCount(integer $MessageHeapCount) Set 
 * @method float getMessageRateIn() Obtain 
 * @method void setMessageRateIn(float $MessageRateIn) Set 
 * @method float getMessageRateOut() Obtain 
 * @method void setMessageRateOut(float $MessageRateOut) Set 
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
     * @var string Vhost description
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var array Vhost tag
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Creation time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Modification time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var RabbitMQVirtualHostStatistics Statistics of vhost overview
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $VirtualHostStatistics;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var integer 
     */
    public $MessageHeapCount;

    /**
     * @var float 
     */
    public $MessageRateIn;

    /**
     * @var float 
     */
    public $MessageRateOut;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param string $VirtualHost Vhost name
     * @param string $Description Vhost description
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Vhost tag
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Modification time
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param RabbitMQVirtualHostStatistics $VirtualHostStatistics Statistics of vhost overview
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $Status 
     * @param integer $MessageHeapCount 
     * @param float $MessageRateIn 
     * @param float $MessageRateOut 
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
    }
}
