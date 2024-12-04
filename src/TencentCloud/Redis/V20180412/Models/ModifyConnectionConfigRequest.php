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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyConnectionConfig request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method integer getBandwidth() Obtain Additional bandwidth in MB, which should be greater than 0.
 * @method void setBandwidth(integer $Bandwidth) Set Additional bandwidth in MB, which should be greater than 0.
 * @method integer getClientLimit() Obtain Total number of connections per shard.
- When read-only replicas are not enabled, the lower limit is 10,000 and the upper limit is 40,000.
- When read-only replicas are enabled, the lower limit is 10,000, and the upper limit is calculated as follows: 10,000 x (Number of read-only replicas + 3).
 * @method void setClientLimit(integer $ClientLimit) Set Total number of connections per shard.
- When read-only replicas are not enabled, the lower limit is 10,000 and the upper limit is 40,000.
- When read-only replicas are enabled, the lower limit is 10,000, and the upper limit is calculated as follows: 10,000 x (Number of read-only replicas + 3).
 */
class ModifyConnectionConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Additional bandwidth in MB, which should be greater than 0.
     */
    public $Bandwidth;

    /**
     * @var integer Total number of connections per shard.
- When read-only replicas are not enabled, the lower limit is 10,000 and the upper limit is 40,000.
- When read-only replicas are enabled, the lower limit is 10,000, and the upper limit is calculated as follows: 10,000 x (Number of read-only replicas + 3).
     */
    public $ClientLimit;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param integer $Bandwidth Additional bandwidth in MB, which should be greater than 0.
     * @param integer $ClientLimit Total number of connections per shard.
- When read-only replicas are not enabled, the lower limit is 10,000 and the upper limit is 40,000.
- When read-only replicas are enabled, the lower limit is 10,000, and the upper limit is calculated as follows: 10,000 x (Number of read-only replicas + 3).
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

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ClientLimit",$param) and $param["ClientLimit"] !== null) {
            $this->ClientLimit = $param["ClientLimit"];
        }
    }
}
