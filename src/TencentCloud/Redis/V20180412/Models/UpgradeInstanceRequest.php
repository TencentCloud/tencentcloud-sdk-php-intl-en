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
 * UpgradeInstance request structure.
 *
 * @method string getInstanceId() Obtain ID of the instance whose configuration is to be modified. Log in to the [TencentDB for Redis® console](https://console.cloud.tencent.com/Redis/instance/list) and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance whose configuration is to be modified. Log in to the [TencentDB for Redis® console](https://console.cloud.tencent.com/Redis/instance/list) and copy the instance ID from the instance list.
 * @method integer getMemSize() Obtain Refers to the size of memory in each shard after the change.
-Unit: MB.
-You can only modify one of the parameters MemSize, RedisShardNum, and RedisReplicasNum each time, and cannot include both. When modifying one parameter, you need to manually input the original instance configuration specification for the other two parameters.
-When scaling down, the new specifications must be equal to or greater than 1.3 times the used capacity, otherwise execution will fail.
 * @method void setMemSize(integer $MemSize) Set Refers to the size of memory in each shard after the change.
-Unit: MB.
-You can only modify one of the parameters MemSize, RedisShardNum, and RedisReplicasNum each time, and cannot include both. When modifying one parameter, you need to manually input the original instance configuration specification for the other two parameters.
-When scaling down, the new specifications must be equal to or greater than 1.3 times the used capacity, otherwise execution will fail.
 * @method integer getRedisShardNum() Obtain Specifies the number of shards after the instance specification modification.
-Standard architecture does not require this parameter, while cluster architecture is mandatory.
-Cluster architecture. Every time, you can only modify one of the parameters RedisShardNum, MemSize, and RedisReplicasNum. You cannot modify them simultaneously. When modifying one parameter, you need to manually input the original instance configuration specification for the other two parameters.
 * @method void setRedisShardNum(integer $RedisShardNum) Set Specifies the number of shards after the instance specification modification.
-Standard architecture does not require this parameter, while cluster architecture is mandatory.
-Cluster architecture. Every time, you can only modify one of the parameters RedisShardNum, MemSize, and RedisReplicasNum. You cannot modify them simultaneously. When modifying one parameter, you need to manually input the original instance configuration specification for the other two parameters.
 * @method integer getRedisReplicasNum() Obtain Specifies the number of replicas after the instance specification modification.
-Only one of the parameters RedisReplicasNum, MemSize, and RedisShardNum can be modified each time. You cannot include both. When modifying one parameter, the other two parameters require the original instance configuration specification.
-When modifying a replica of a multi-AZ instance, you must input NodeSet.
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Specifies the number of replicas after the instance specification modification.
-Only one of the parameters RedisReplicasNum, MemSize, and RedisShardNum can be modified each time. You cannot include both. When modifying one parameter, the other two parameters require the original instance configuration specification.
-When modifying a replica of a multi-AZ instance, you must input NodeSet.
 * @method array getNodeSet() Obtain Node information set when you add a replica for multi-AZ instances, including the ID and AZ information of the replica. This parameter is not required for non-multi-AZ instances.
 * @method void setNodeSet(array $NodeSet) Set Node information set when you add a replica for multi-AZ instances, including the ID and AZ information of the replica. This parameter is not required for non-multi-AZ instances.
 * @method integer getSwitchOption() Obtain Switch time.
 - 1: Perform the operation within the maintenance window: Specification upgrade is executed within the set maintenance window. Use the API [DescribeMaintenanceWindow](https://intl.cloud.tencent.com/document/product/239/46336?from_cn_redirect=1) to query the time period of the set maintenance window. Replica addition/removal, shard addition/removal, and memory capacity expansion/shrinkage are supported within the maintenance window. Specification upgrade within the maintenance window is being gradually tested and published by region. It is already supported in some regions. For urgent integration in regions that do not support it, [submit a ticket](https://console.cloud.tencent.com/workorder/category) to apply for an allowlist.
 -2: Perform the operation immediately: The operation will be performed immediately, without the need to wait for the maintenance window. Operations will be performed immediately by default for the system.
 * @method void setSwitchOption(integer $SwitchOption) Set Switch time.
 - 1: Perform the operation within the maintenance window: Specification upgrade is executed within the set maintenance window. Use the API [DescribeMaintenanceWindow](https://intl.cloud.tencent.com/document/product/239/46336?from_cn_redirect=1) to query the time period of the set maintenance window. Replica addition/removal, shard addition/removal, and memory capacity expansion/shrinkage are supported within the maintenance window. Specification upgrade within the maintenance window is being gradually tested and published by region. It is already supported in some regions. For urgent integration in regions that do not support it, [submit a ticket](https://console.cloud.tencent.com/workorder/category) to apply for an allowlist.
 -2: Perform the operation immediately: The operation will be performed immediately, without the need to wait for the maintenance window. Operations will be performed immediately by default for the system.
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string ID of the instance whose configuration is to be modified. Log in to the [TencentDB for Redis® console](https://console.cloud.tencent.com/Redis/instance/list) and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Refers to the size of memory in each shard after the change.
-Unit: MB.
-You can only modify one of the parameters MemSize, RedisShardNum, and RedisReplicasNum each time, and cannot include both. When modifying one parameter, you need to manually input the original instance configuration specification for the other two parameters.
-When scaling down, the new specifications must be equal to or greater than 1.3 times the used capacity, otherwise execution will fail.
     */
    public $MemSize;

    /**
     * @var integer Specifies the number of shards after the instance specification modification.
-Standard architecture does not require this parameter, while cluster architecture is mandatory.
-Cluster architecture. Every time, you can only modify one of the parameters RedisShardNum, MemSize, and RedisReplicasNum. You cannot modify them simultaneously. When modifying one parameter, you need to manually input the original instance configuration specification for the other two parameters.
     */
    public $RedisShardNum;

    /**
     * @var integer Specifies the number of replicas after the instance specification modification.
-Only one of the parameters RedisReplicasNum, MemSize, and RedisShardNum can be modified each time. You cannot include both. When modifying one parameter, the other two parameters require the original instance configuration specification.
-When modifying a replica of a multi-AZ instance, you must input NodeSet.
     */
    public $RedisReplicasNum;

    /**
     * @var array Node information set when you add a replica for multi-AZ instances, including the ID and AZ information of the replica. This parameter is not required for non-multi-AZ instances.
     */
    public $NodeSet;

    /**
     * @var integer Switch time.
 - 1: Perform the operation within the maintenance window: Specification upgrade is executed within the set maintenance window. Use the API [DescribeMaintenanceWindow](https://intl.cloud.tencent.com/document/product/239/46336?from_cn_redirect=1) to query the time period of the set maintenance window. Replica addition/removal, shard addition/removal, and memory capacity expansion/shrinkage are supported within the maintenance window. Specification upgrade within the maintenance window is being gradually tested and published by region. It is already supported in some regions. For urgent integration in regions that do not support it, [submit a ticket](https://console.cloud.tencent.com/workorder/category) to apply for an allowlist.
 -2: Perform the operation immediately: The operation will be performed immediately, without the need to wait for the maintenance window. Operations will be performed immediately by default for the system.
     */
    public $SwitchOption;

    /**
     * @param string $InstanceId ID of the instance whose configuration is to be modified. Log in to the [TencentDB for Redis® console](https://console.cloud.tencent.com/Redis/instance/list) and copy the instance ID from the instance list.
     * @param integer $MemSize Refers to the size of memory in each shard after the change.
-Unit: MB.
-You can only modify one of the parameters MemSize, RedisShardNum, and RedisReplicasNum each time, and cannot include both. When modifying one parameter, you need to manually input the original instance configuration specification for the other two parameters.
-When scaling down, the new specifications must be equal to or greater than 1.3 times the used capacity, otherwise execution will fail.
     * @param integer $RedisShardNum Specifies the number of shards after the instance specification modification.
-Standard architecture does not require this parameter, while cluster architecture is mandatory.
-Cluster architecture. Every time, you can only modify one of the parameters RedisShardNum, MemSize, and RedisReplicasNum. You cannot modify them simultaneously. When modifying one parameter, you need to manually input the original instance configuration specification for the other two parameters.
     * @param integer $RedisReplicasNum Specifies the number of replicas after the instance specification modification.
-Only one of the parameters RedisReplicasNum, MemSize, and RedisShardNum can be modified each time. You cannot include both. When modifying one parameter, the other two parameters require the original instance configuration specification.
-When modifying a replica of a multi-AZ instance, you must input NodeSet.
     * @param array $NodeSet Node information set when you add a replica for multi-AZ instances, including the ID and AZ information of the replica. This parameter is not required for non-multi-AZ instances.
     * @param integer $SwitchOption Switch time.
 - 1: Perform the operation within the maintenance window: Specification upgrade is executed within the set maintenance window. Use the API [DescribeMaintenanceWindow](https://intl.cloud.tencent.com/document/product/239/46336?from_cn_redirect=1) to query the time period of the set maintenance window. Replica addition/removal, shard addition/removal, and memory capacity expansion/shrinkage are supported within the maintenance window. Specification upgrade within the maintenance window is being gradually tested and published by region. It is already supported in some regions. For urgent integration in regions that do not support it, [submit a ticket](https://console.cloud.tencent.com/workorder/category) to apply for an allowlist.
 -2: Perform the operation immediately: The operation will be performed immediately, without the need to wait for the maintenance window. Operations will be performed immediately by default for the system.
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

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }
    }
}
