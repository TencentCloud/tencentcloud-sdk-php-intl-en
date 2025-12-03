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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCurrentOp request structure.
 *
 * @method string getInstanceId() Obtain Specifies the instance ID to be queried. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID to be queried. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method string getNs() Obtain Namespace where the operation belongs, in the format of db.collection.
 * @method void setNs(string $Ns) Set Namespace where the operation belongs, in the format of db.collection.
 * @method integer getMillisecondRunning() Obtain Sets the query and filtering condition to the execution time of the operation task.
- The default value is 0, and the value range is [0, 3600000], in milliseconds.
- The result will return the operation whose execution time exceeds the set time.
 * @method void setMillisecondRunning(integer $MillisecondRunning) Set Sets the query and filtering condition to the execution time of the operation task.
- The default value is 0, and the value range is [0, 3600000], in milliseconds.
- The result will return the operation whose execution time exceeds the set time.
 * @method string getOp() Obtain Sets the query and filtering condition to the type of the operation task. Valid values:
- none: special status; idle connections or internal tasks.
- update: update data.
- insert: insertion operation.
- query: query operation.
- command: command operation.
- getmore: obtain more data.
- remove: deletion operation.
- killcursors: operation of releasing the query cursor.
 * @method void setOp(string $Op) Set Sets the query and filtering condition to the type of the operation task. Valid values:
- none: special status; idle connections or internal tasks.
- update: update data.
- insert: insertion operation.
- query: query operation.
- command: command operation.
- getmore: obtain more data.
- remove: deletion operation.
- killcursors: operation of releasing the query cursor.
 * @method string getReplicaSetName() Obtain Filtering condition, such as the shard name.
 * @method void setReplicaSetName(string $ReplicaSetName) Set Filtering condition, such as the shard name.
 * @method string getState() Obtain Sets the query and filtering condition to the node role.
- primary: primary node.
- secondary: secondary node.
 * @method void setState(string $State) Set Sets the query and filtering condition to the node role.
- primary: primary node.
- secondary: secondary node.
 * @method integer getLimit() Obtain Number of entries returned per request. The default value is 100, and the value range is [0, 100].
 * @method void setLimit(integer $Limit) Set Number of entries returned per request. The default value is 100, and the value range is [0, 100].
 * @method integer getOffset() Obtain Offset. The default value is 0, and the value range is [0, 10000].
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0, and the value range is [0, 10000].
 * @method string getOrderBy() Obtain Sorting field of the returned result set. Currently, sorting by MicrosecsRunning (execution time of the operation task) is supported.
 * @method void setOrderBy(string $OrderBy) Set Sorting field of the returned result set. Currently, sorting by MicrosecsRunning (execution time of the operation task) is supported.
 * @method string getOrderByType() Obtain Sorting method of the returned result set.
- ASC: ascending order. The default value is ASC, which indicates sorting in ascending order.
- DESC: descending order.
 * @method void setOrderByType(string $OrderByType) Set Sorting method of the returned result set.
- ASC: ascending order. The default value is ASC, which indicates sorting in ascending order.
- DESC: descending order.
 */
class DescribeCurrentOpRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID to be queried. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var string Namespace where the operation belongs, in the format of db.collection.
     */
    public $Ns;

    /**
     * @var integer Sets the query and filtering condition to the execution time of the operation task.
- The default value is 0, and the value range is [0, 3600000], in milliseconds.
- The result will return the operation whose execution time exceeds the set time.
     */
    public $MillisecondRunning;

    /**
     * @var string Sets the query and filtering condition to the type of the operation task. Valid values:
- none: special status; idle connections or internal tasks.
- update: update data.
- insert: insertion operation.
- query: query operation.
- command: command operation.
- getmore: obtain more data.
- remove: deletion operation.
- killcursors: operation of releasing the query cursor.
     */
    public $Op;

    /**
     * @var string Filtering condition, such as the shard name.
     */
    public $ReplicaSetName;

    /**
     * @var string Sets the query and filtering condition to the node role.
- primary: primary node.
- secondary: secondary node.
     */
    public $State;

    /**
     * @var integer Number of entries returned per request. The default value is 100, and the value range is [0, 100].
     */
    public $Limit;

    /**
     * @var integer Offset. The default value is 0, and the value range is [0, 10000].
     */
    public $Offset;

    /**
     * @var string Sorting field of the returned result set. Currently, sorting by MicrosecsRunning (execution time of the operation task) is supported.
     */
    public $OrderBy;

    /**
     * @var string Sorting method of the returned result set.
- ASC: ascending order. The default value is ASC, which indicates sorting in ascending order.
- DESC: descending order.
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Specifies the instance ID to be queried. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     * @param string $Ns Namespace where the operation belongs, in the format of db.collection.
     * @param integer $MillisecondRunning Sets the query and filtering condition to the execution time of the operation task.
- The default value is 0, and the value range is [0, 3600000], in milliseconds.
- The result will return the operation whose execution time exceeds the set time.
     * @param string $Op Sets the query and filtering condition to the type of the operation task. Valid values:
- none: special status; idle connections or internal tasks.
- update: update data.
- insert: insertion operation.
- query: query operation.
- command: command operation.
- getmore: obtain more data.
- remove: deletion operation.
- killcursors: operation of releasing the query cursor.
     * @param string $ReplicaSetName Filtering condition, such as the shard name.
     * @param string $State Sets the query and filtering condition to the node role.
- primary: primary node.
- secondary: secondary node.
     * @param integer $Limit Number of entries returned per request. The default value is 100, and the value range is [0, 100].
     * @param integer $Offset Offset. The default value is 0, and the value range is [0, 10000].
     * @param string $OrderBy Sorting field of the returned result set. Currently, sorting by MicrosecsRunning (execution time of the operation task) is supported.
     * @param string $OrderByType Sorting method of the returned result set.
- ASC: ascending order. The default value is ASC, which indicates sorting in ascending order.
- DESC: descending order.
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

        if (array_key_exists("Ns",$param) and $param["Ns"] !== null) {
            $this->Ns = $param["Ns"];
        }

        if (array_key_exists("MillisecondRunning",$param) and $param["MillisecondRunning"] !== null) {
            $this->MillisecondRunning = $param["MillisecondRunning"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("ReplicaSetName",$param) and $param["ReplicaSetName"] !== null) {
            $this->ReplicaSetName = $param["ReplicaSetName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
