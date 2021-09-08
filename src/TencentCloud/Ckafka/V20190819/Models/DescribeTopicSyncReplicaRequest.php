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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopicSyncReplica request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method integer getOffset() Obtain Offset. If this parameter is left empty, 0 will be used by default.
 * @method void setOffset(integer $Offset) Set Offset. If this parameter is left empty, 0 will be used by default.
 * @method integer getLimit() Obtain Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 20.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 20.
 * @method boolean getOutOfSyncReplicaOnly() Obtain Filters unsynced replicas only
 * @method void setOutOfSyncReplicaOnly(boolean $OutOfSyncReplicaOnly) Set Filters unsynced replicas only
 */
class DescribeTopicSyncReplicaRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var integer Offset. If this parameter is left empty, 0 will be used by default.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 20.
     */
    public $Limit;

    /**
     * @var boolean Filters unsynced replicas only
     */
    public $OutOfSyncReplicaOnly;

    /**
     * @param string $InstanceId Instance ID
     * @param string $TopicName Topic name
     * @param integer $Offset Offset. If this parameter is left empty, 0 will be used by default.
     * @param integer $Limit Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 20.
     * @param boolean $OutOfSyncReplicaOnly Filters unsynced replicas only
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OutOfSyncReplicaOnly",$param) and $param["OutOfSyncReplicaOnly"] !== null) {
            $this->OutOfSyncReplicaOnly = $param["OutOfSyncReplicaOnly"];
        }
    }
}
