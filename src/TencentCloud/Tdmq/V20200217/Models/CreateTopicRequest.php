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
 * CreateTopic request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method string getTopicName() Obtain Topic name, which can contain up to 64 letters, digits, hyphens, and underscores.
 * @method void setTopicName(string $TopicName) Set Topic name, which can contain up to 64 letters, digits, hyphens, and underscores.
 * @method integer getPartitions() Obtain 0: non-partitioned topic; other values: number of partitions in the partitioned topic (up to 128).
 * @method void setPartitions(integer $Partitions) Set 0: non-partitioned topic; other values: number of partitions in the partitioned topic (up to 128).
 * @method string getRemark() Obtain Remarks (up to 128 characters).
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
 * @method integer getTopicType() Obtain 0: general message;
1: globally sequential message;
2: partitionally sequential message;
3: retry letter queue;
4: dead letter queue.
 * @method void setTopicType(integer $TopicType) Set 0: general message;
1: globally sequential message;
2: partitionally sequential message;
3: retry letter queue;
4: dead letter queue.
 * @method string getClusterId() Obtain Pulsar cluster ID
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID
 * @method integer getPulsarTopicType() Obtain Pulsar topic type.
`0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
 * @method void setPulsarTopicType(integer $PulsarTopicType) Set Pulsar topic type.
`0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var string Topic name, which can contain up to 64 letters, digits, hyphens, and underscores.
     */
    public $TopicName;

    /**
     * @var integer 0: non-partitioned topic; other values: number of partitions in the partitioned topic (up to 128).
     */
    public $Partitions;

    /**
     * @var string Remarks (up to 128 characters).
     */
    public $Remark;

    /**
     * @var integer 0: general message;
1: globally sequential message;
2: partitionally sequential message;
3: retry letter queue;
4: dead letter queue.
     */
    public $TopicType;

    /**
     * @var string Pulsar cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Pulsar topic type.
`0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
     */
    public $PulsarTopicType;

    /**
     * @param string $EnvironmentId Environment (namespace) name.
     * @param string $TopicName Topic name, which can contain up to 64 letters, digits, hyphens, and underscores.
     * @param integer $Partitions 0: non-partitioned topic; other values: number of partitions in the partitioned topic (up to 128).
     * @param string $Remark Remarks (up to 128 characters).
     * @param integer $TopicType 0: general message;
1: globally sequential message;
2: partitionally sequential message;
3: retry letter queue;
4: dead letter queue.
     * @param string $ClusterId Pulsar cluster ID
     * @param integer $PulsarTopicType Pulsar topic type.
`0`: Non-persistent and non-partitioned
`1`: Non-persistent and partitioned
`2`: Persistent and non-partitioned
`3`: Persistent and partitioned
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("PulsarTopicType",$param) and $param["PulsarTopicType"] !== null) {
            $this->PulsarTopicType = $param["PulsarTopicType"];
        }
    }
}
