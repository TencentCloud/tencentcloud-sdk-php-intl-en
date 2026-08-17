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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceSpecBandwidth request structure.
 *
 * @method string getInstanceId() Obtain <p>Specify the instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list. Meanwhile, InstanceId and specification parameters cannot be empty at the same time. Provide at least one.</p><ul><li>If only InstanceId is specified: Query the bandwidth of the current instance.</li><li>If InstanceId and at least one specification parameter (ShardSize, ShardNum, or ReplicateNum) are specified: Calculate the bandwidth after specification modification.</li><li>If partial or all specification parameters (ShardSize, ShardNum, ReplicateNum, and Type) are specified without InstanceId: Query the theoretical bandwidth based on the combined query of specifications.</li></ul>
 * @method void setInstanceId(string $InstanceId) Set <p>Specify the instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list. Meanwhile, InstanceId and specification parameters cannot be empty at the same time. Provide at least one.</p><ul><li>If only InstanceId is specified: Query the bandwidth of the current instance.</li><li>If InstanceId and at least one specification parameter (ShardSize, ShardNum, or ReplicateNum) are specified: Calculate the bandwidth after specification modification.</li><li>If partial or all specification parameters (ShardSize, ShardNum, ReplicateNum, and Type) are specified without InstanceId: Query the theoretical bandwidth based on the combined query of specifications.</li></ul>
 * @method integer getShardSize() Obtain <p>Shard size. Unit: MB.</p>
 * @method void setShardSize(integer $ShardSize) Set <p>Shard size. Unit: MB.</p>
 * @method integer getShardNum() Obtain <p>Number of shards.</p>
 * @method void setShardNum(integer $ShardNum) Set <p>Number of shards.</p>
 * @method integer getReplicateNum() Obtain <p>Number of replication groups.</p>
 * @method void setReplicateNum(integer $ReplicateNum) Set <p>Number of replication groups.</p>
 * @method integer getReadOnlyWeight() Obtain <p>Read-only weight. - 100: Enable read-only slave. - 0: Disable read-only slave.</p>
 * @method void setReadOnlyWeight(integer $ReadOnlyWeight) Set <p>Read-only weight. - 100: Enable read-only slave. - 0: Disable read-only slave.</p>
 * @method integer getType() Obtain <p>Instance type, same as Type in <a href="https://www.tencentcloud.com/document/api/239/20026?from_cn_redirect=1">CreateInstances</a>.</p>
 * @method void setType(integer $Type) Set <p>Instance type, same as Type in <a href="https://www.tencentcloud.com/document/api/239/20026?from_cn_redirect=1">CreateInstances</a>.</p>
 */
class DescribeInstanceSpecBandwidthRequest extends AbstractModel
{
    /**
     * @var string <p>Specify the instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list. Meanwhile, InstanceId and specification parameters cannot be empty at the same time. Provide at least one.</p><ul><li>If only InstanceId is specified: Query the bandwidth of the current instance.</li><li>If InstanceId and at least one specification parameter (ShardSize, ShardNum, or ReplicateNum) are specified: Calculate the bandwidth after specification modification.</li><li>If partial or all specification parameters (ShardSize, ShardNum, ReplicateNum, and Type) are specified without InstanceId: Query the theoretical bandwidth based on the combined query of specifications.</li></ul>
     */
    public $InstanceId;

    /**
     * @var integer <p>Shard size. Unit: MB.</p>
     */
    public $ShardSize;

    /**
     * @var integer <p>Number of shards.</p>
     */
    public $ShardNum;

    /**
     * @var integer <p>Number of replication groups.</p>
     */
    public $ReplicateNum;

    /**
     * @var integer <p>Read-only weight. - 100: Enable read-only slave. - 0: Disable read-only slave.</p>
     */
    public $ReadOnlyWeight;

    /**
     * @var integer <p>Instance type, same as Type in <a href="https://www.tencentcloud.com/document/api/239/20026?from_cn_redirect=1">CreateInstances</a>.</p>
     */
    public $Type;

    /**
     * @param string $InstanceId <p>Specify the instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list. Meanwhile, InstanceId and specification parameters cannot be empty at the same time. Provide at least one.</p><ul><li>If only InstanceId is specified: Query the bandwidth of the current instance.</li><li>If InstanceId and at least one specification parameter (ShardSize, ShardNum, or ReplicateNum) are specified: Calculate the bandwidth after specification modification.</li><li>If partial or all specification parameters (ShardSize, ShardNum, ReplicateNum, and Type) are specified without InstanceId: Query the theoretical bandwidth based on the combined query of specifications.</li></ul>
     * @param integer $ShardSize <p>Shard size. Unit: MB.</p>
     * @param integer $ShardNum <p>Number of shards.</p>
     * @param integer $ReplicateNum <p>Number of replication groups.</p>
     * @param integer $ReadOnlyWeight <p>Read-only weight. - 100: Enable read-only slave. - 0: Disable read-only slave.</p>
     * @param integer $Type <p>Instance type, same as Type in <a href="https://www.tencentcloud.com/document/api/239/20026?from_cn_redirect=1">CreateInstances</a>.</p>
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

        if (array_key_exists("ShardSize",$param) and $param["ShardSize"] !== null) {
            $this->ShardSize = $param["ShardSize"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("ReplicateNum",$param) and $param["ReplicateNum"] !== null) {
            $this->ReplicateNum = $param["ReplicateNum"];
        }

        if (array_key_exists("ReadOnlyWeight",$param) and $param["ReadOnlyWeight"] !== null) {
            $this->ReadOnlyWeight = $param["ReadOnlyWeight"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
