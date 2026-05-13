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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQTopicV2 request structure.
 *
 * @method string getTopic() Obtain Topic name
 * @method void setTopic(string $Topic) Set Topic name
 * @method string getType() Obtain Topic type. Valid values: Normal, GlobalOrder, PartitionedOrder, Transaction, and DelayScheduled. Transaction is only supported in the Exclusive Edition.
 * @method void setType(string $Type) Set Topic type. Valid values: Normal, GlobalOrder, PartitionedOrder, Transaction, and DelayScheduled. Transaction is only supported in the Exclusive Edition.
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNamespace() Obtain Namespace of the topic. For 4.x common clusters, the Cluster Namespace is fixed as: tdmq_default
 * @method void setNamespace(string $Namespace) Set Namespace of the topic. For 4.x common clusters, the Cluster Namespace is fixed as: tdmq_default
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getPartitionNum() Obtain Number of partitions, invalid for global order
 * @method void setPartitionNum(integer $PartitionNum) Set Number of partitions, invalid for global order
 * @method array getTagList() Obtain Tag list
 * @method void setTagList(array $TagList) Set Tag list
 */
class CreateRocketMQTopicV2Request extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $Topic;

    /**
     * @var string Topic type. Valid values: Normal, GlobalOrder, PartitionedOrder, Transaction, and DelayScheduled. Transaction is only supported in the Exclusive Edition.
     */
    public $Type;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace of the topic. For 4.x common clusters, the Cluster Namespace is fixed as: tdmq_default
     */
    public $Namespace;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Number of partitions, invalid for global order
     */
    public $PartitionNum;

    /**
     * @var array Tag list
     */
    public $TagList;

    /**
     * @param string $Topic Topic name
     * @param string $Type Topic type. Valid values: Normal, GlobalOrder, PartitionedOrder, Transaction, and DelayScheduled. Transaction is only supported in the Exclusive Edition.
     * @param string $ClusterId Cluster ID
     * @param string $Namespace Namespace of the topic. For 4.x common clusters, the Cluster Namespace is fixed as: tdmq_default
     * @param string $Remark Remarks
     * @param integer $PartitionNum Number of partitions, invalid for global order
     * @param array $TagList Tag list
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
