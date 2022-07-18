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
 * @method integer getPartitions() Obtain The value “1” indicates a non-partitioned topic (a topic with no partitions) will be created. A value between 1 (exclusive) and 128 (inclusive) indicates the partition count of a partitioned topic.
 * @method void setPartitions(integer $Partitions) Set The value “1” indicates a non-partitioned topic (a topic with no partitions) will be created. A value between 1 (exclusive) and 128 (inclusive) indicates the partition count of a partitioned topic.
 * @method string getRemark() Obtain Remarks (up to 128 characters).
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
 * @method integer getTopicType() Obtain This input parameter will be disused soon. You can use `PulsarTopicType` instead.
0: General message;
1: Globally sequential message;
2: Partitionally sequential message;
3: Retry letter topic;
4: Dead letter topic.
 * @method void setTopicType(integer $TopicType) Set This input parameter will be disused soon. You can use `PulsarTopicType` instead.
0: General message;
1: Globally sequential message;
2: Partitionally sequential message;
3: Retry letter topic;
4: Dead letter topic.
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
     * @var integer The value “1” indicates a non-partitioned topic (a topic with no partitions) will be created. A value between 1 (exclusive) and 128 (inclusive) indicates the partition count of a partitioned topic.
     */
    public $Partitions;

    /**
     * @var string Remarks (up to 128 characters).
     */
    public $Remark;

    /**
     * @var integer This input parameter will be disused soon. You can use `PulsarTopicType` instead.
0: General message;
1: Globally sequential message;
2: Partitionally sequential message;
3: Retry letter topic;
4: Dead letter topic.
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
     * @param integer $Partitions The value “1” indicates a non-partitioned topic (a topic with no partitions) will be created. A value between 1 (exclusive) and 128 (inclusive) indicates the partition count of a partitioned topic.
     * @param string $Remark Remarks (up to 128 characters).
     * @param integer $TopicType This input parameter will be disused soon. You can use `PulsarTopicType` instead.
0: General message;
1: Globally sequential message;
2: Partitionally sequential message;
3: Retry letter topic;
4: Dead letter topic.
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
