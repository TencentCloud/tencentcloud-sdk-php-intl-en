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
 * FetchMessageListByOffset request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getTopic() Obtain Topic name
 * @method void setTopic(string $Topic) Set Topic name
 * @method integer getPartition() Obtain Partition ID
 * @method void setPartition(integer $Partition) Set Partition ID
 * @method integer getOffset() Obtain Offset information
 * @method void setOffset(integer $Offset) Set Offset information
 * @method integer getSinglePartitionRecordNumber() Obtain The maximum number of messages that can be queried. Default value: 20. Maximum value: 20.
 * @method void setSinglePartitionRecordNumber(integer $SinglePartitionRecordNumber) Set The maximum number of messages that can be queried. Default value: 20. Maximum value: 20.
 */
class FetchMessageListByOffsetRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Topic name
     */
    public $Topic;

    /**
     * @var integer Partition ID
     */
    public $Partition;

    /**
     * @var integer Offset information
     */
    public $Offset;

    /**
     * @var integer The maximum number of messages that can be queried. Default value: 20. Maximum value: 20.
     */
    public $SinglePartitionRecordNumber;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Topic Topic name
     * @param integer $Partition Partition ID
     * @param integer $Offset Offset information
     * @param integer $SinglePartitionRecordNumber The maximum number of messages that can be queried. Default value: 20. Maximum value: 20.
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SinglePartitionRecordNumber",$param) and $param["SinglePartitionRecordNumber"] !== null) {
            $this->SinglePartitionRecordNumber = $param["SinglePartitionRecordNumber"];
        }
    }
}
