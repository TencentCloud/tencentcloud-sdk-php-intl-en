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
 * Current operation on the TencentDB for MongoDB instance.
 *
 * @method integer getOpId() Obtain Operation number.
 * @method void setOpId(integer $OpId) Set Operation number.
 * @method string getNs() Obtain Namespace where the operation is located, in the format of db.collection.
 * @method void setNs(string $Ns) Set Namespace where the operation is located, in the format of db.collection.
 * @method string getQuery() Obtain Execution statement of the operation.
 * @method void setQuery(string $Query) Set Execution statement of the operation.
 * @method string getOp() Obtain Operation type.
- none: special status; idle connections or internal tasks.
- update: update data.
- insert: insertion operation.
- query: query operation.
- command: command operation.
- getmore: obtain more data.
- remove: deletion operation.
- killcursors: operation of releasing the query cursor.
 * @method void setOp(string $Op) Set Operation type.
- none: special status; idle connections or internal tasks.
- update: update data.
- insert: insertion operation.
- query: query operation.
- command: command operation.
- getmore: obtain more data.
- remove: deletion operation.
- killcursors: operation of releasing the query cursor.
 * @method string getReplicaSetName() Obtain Name of the shard where the operation is performed.
 * @method void setReplicaSetName(string $ReplicaSetName) Set Name of the shard where the operation is performed.
 * @method string getNodeName() Obtain Name of the node where the operation is performed.
 * @method void setNodeName(string $NodeName) Set Name of the node where the operation is performed.
 * @method string getOperation() Obtain Detailed information about the operation.
 * @method void setOperation(string $Operation) Set Detailed information about the operation.
 * @method string getState() Obtain Node role.
- primary: primary node.
- secondary: secondary node.
 * @method void setState(string $State) Set Node role.
- primary: primary node.
- secondary: secondary node.
 * @method integer getMicrosecsRunning() Obtain Execution time of the operation, in ms.
 * @method void setMicrosecsRunning(integer $MicrosecsRunning) Set Execution time of the operation, in ms.
 * @method string getExecNode() Obtain Information about the node where the current operation is performed.
 * @method void setExecNode(string $ExecNode) Set Information about the node where the current operation is performed.
 */
class CurrentOp extends AbstractModel
{
    /**
     * @var integer Operation number.
     */
    public $OpId;

    /**
     * @var string Namespace where the operation is located, in the format of db.collection.
     */
    public $Ns;

    /**
     * @var string Execution statement of the operation.
     */
    public $Query;

    /**
     * @var string Operation type.
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
     * @var string Name of the shard where the operation is performed.
     */
    public $ReplicaSetName;

    /**
     * @var string Name of the node where the operation is performed.
     */
    public $NodeName;

    /**
     * @var string Detailed information about the operation.
     */
    public $Operation;

    /**
     * @var string Node role.
- primary: primary node.
- secondary: secondary node.
     */
    public $State;

    /**
     * @var integer Execution time of the operation, in ms.
     */
    public $MicrosecsRunning;

    /**
     * @var string Information about the node where the current operation is performed.
     */
    public $ExecNode;

    /**
     * @param integer $OpId Operation number.
     * @param string $Ns Namespace where the operation is located, in the format of db.collection.
     * @param string $Query Execution statement of the operation.
     * @param string $Op Operation type.
- none: special status; idle connections or internal tasks.
- update: update data.
- insert: insertion operation.
- query: query operation.
- command: command operation.
- getmore: obtain more data.
- remove: deletion operation.
- killcursors: operation of releasing the query cursor.
     * @param string $ReplicaSetName Name of the shard where the operation is performed.
     * @param string $NodeName Name of the node where the operation is performed.
     * @param string $Operation Detailed information about the operation.
     * @param string $State Node role.
- primary: primary node.
- secondary: secondary node.
     * @param integer $MicrosecsRunning Execution time of the operation, in ms.
     * @param string $ExecNode Information about the node where the current operation is performed.
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
        if (array_key_exists("OpId",$param) and $param["OpId"] !== null) {
            $this->OpId = $param["OpId"];
        }

        if (array_key_exists("Ns",$param) and $param["Ns"] !== null) {
            $this->Ns = $param["Ns"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("ReplicaSetName",$param) and $param["ReplicaSetName"] !== null) {
            $this->ReplicaSetName = $param["ReplicaSetName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("MicrosecsRunning",$param) and $param["MicrosecsRunning"] !== null) {
            $this->MicrosecsRunning = $param["MicrosecsRunning"];
        }

        if (array_key_exists("ExecNode",$param) and $param["ExecNode"] !== null) {
            $this->ExecNode = $param["ExecNode"];
        }
    }
}
