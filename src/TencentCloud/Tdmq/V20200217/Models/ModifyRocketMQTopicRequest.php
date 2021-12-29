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
 * ModifyRocketMQTopic request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNamespaceId() Obtain Namespace name
 * @method void setNamespaceId(string $NamespaceId) Set Namespace name
 * @method string getTopic() Obtain Topic name
 * @method void setTopic(string $Topic) Set Topic name
 * @method string getRemark() Obtain Remarks (up to 128 characters)
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters)
 * @method integer getPartitionNum() Obtain Number of partitions, which is invalid for globally sequential messages and cannot be less than the current number of partitions.
 * @method void setPartitionNum(integer $PartitionNum) Set Number of partitions, which is invalid for globally sequential messages and cannot be less than the current number of partitions.
 */
class ModifyRocketMQTopicRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace name
     */
    public $NamespaceId;

    /**
     * @var string Topic name
     */
    public $Topic;

    /**
     * @var string Remarks (up to 128 characters)
     */
    public $Remark;

    /**
     * @var integer Number of partitions, which is invalid for globally sequential messages and cannot be less than the current number of partitions.
     */
    public $PartitionNum;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NamespaceId Namespace name
     * @param string $Topic Topic name
     * @param string $Remark Remarks (up to 128 characters)
     * @param integer $PartitionNum Number of partitions, which is invalid for globally sequential messages and cannot be less than the current number of partitions.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }
    }
}
