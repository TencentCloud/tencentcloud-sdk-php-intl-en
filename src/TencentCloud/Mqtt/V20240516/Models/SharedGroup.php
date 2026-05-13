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
 * Shared subscription group
 *
 * @method string getInstanceId() Obtain Tencent Cloud MQTT instance ID
 * @method void setInstanceId(string $InstanceId) Set Tencent Cloud MQTT instance ID
 * @method string getSharedName() Obtain Shared subscription group name
 * @method void setSharedName(string $SharedName) Set Shared subscription group name
 * @method integer getLbStrategy() Obtain Shared group load balancing strategy 1.RANDOM 2.HASH_PARTITION
 * @method void setLbStrategy(integer $LbStrategy) Set Shared group load balancing strategy 1.RANDOM 2.HASH_PARTITION
 * @method integer getExpiryInterval() Obtain Takes effect under the HASH_PARTITION policy. It indicates the delay time when a Client disconnects or a new Client comes online to join the subscription group for consumption.
Range: 0–600 seconds
 * @method void setExpiryInterval(integer $ExpiryInterval) Set Takes effect under the HASH_PARTITION policy. It indicates the delay time when a Client disconnects or a new Client comes online to join the subscription group for consumption.
Range: 0–600 seconds
 * @method string getRemark() Obtain Remark, length not exceeding 128 characters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remark, length not exceeding 128 characters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain createTime, millisecond-level timestamp.
 * @method void setCreateTime(integer $CreateTime) Set createTime, millisecond-level timestamp.
 * @method integer getUpdateTime() Obtain Last update time, millisecond-level timestamp.
 * @method void setUpdateTime(integer $UpdateTime) Set Last update time, millisecond-level timestamp.
 */
class SharedGroup extends AbstractModel
{
    /**
     * @var string Tencent Cloud MQTT instance ID
     */
    public $InstanceId;

    /**
     * @var string Shared subscription group name
     */
    public $SharedName;

    /**
     * @var integer Shared group load balancing strategy 1.RANDOM 2.HASH_PARTITION
     */
    public $LbStrategy;

    /**
     * @var integer Takes effect under the HASH_PARTITION policy. It indicates the delay time when a Client disconnects or a new Client comes online to join the subscription group for consumption.
Range: 0–600 seconds
     */
    public $ExpiryInterval;

    /**
     * @var string Remark, length not exceeding 128 characters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var integer createTime, millisecond-level timestamp.
     */
    public $CreateTime;

    /**
     * @var integer Last update time, millisecond-level timestamp.
     */
    public $UpdateTime;

    /**
     * @param string $InstanceId Tencent Cloud MQTT instance ID
     * @param string $SharedName Shared subscription group name
     * @param integer $LbStrategy Shared group load balancing strategy 1.RANDOM 2.HASH_PARTITION
     * @param integer $ExpiryInterval Takes effect under the HASH_PARTITION policy. It indicates the delay time when a Client disconnects or a new Client comes online to join the subscription group for consumption.
Range: 0–600 seconds
     * @param string $Remark Remark, length not exceeding 128 characters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime createTime, millisecond-level timestamp.
     * @param integer $UpdateTime Last update time, millisecond-level timestamp.
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

        if (array_key_exists("SharedName",$param) and $param["SharedName"] !== null) {
            $this->SharedName = $param["SharedName"];
        }

        if (array_key_exists("LbStrategy",$param) and $param["LbStrategy"] !== null) {
            $this->LbStrategy = $param["LbStrategy"];
        }

        if (array_key_exists("ExpiryInterval",$param) and $param["ExpiryInterval"] !== null) {
            $this->ExpiryInterval = $param["ExpiryInterval"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
