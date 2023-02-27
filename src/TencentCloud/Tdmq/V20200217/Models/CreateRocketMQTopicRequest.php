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
 * CreateRocketMQTopic request structure.
 *
 * @method string getTopic() Obtain Topic name, which can contain 3–64 letters, digits, hyphens, and underscores
 * @method void setTopic(string $Topic) Set Topic name, which can contain 3–64 letters, digits, hyphens, and underscores
 * @method array getNamespaces() Obtain Topic namespace. Currently, you can create topics only in one single namespace.
 * @method void setNamespaces(array $Namespaces) Set Topic namespace. Currently, you can create topics only in one single namespace.
 * @method string getType() Obtain Topic type. Valid values: `Normal`, `PartitionedOrder`, `Transaction`, `DelayScheduled`.
 * @method void setType(string $Type) Set Topic type. Valid values: `Normal`, `PartitionedOrder`, `Transaction`, `DelayScheduled`.
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getRemark() Obtain Topic remarks (up to 128 characters)
 * @method void setRemark(string $Remark) Set Topic remarks (up to 128 characters)
 * @method integer getPartitionNum() Obtain Number of partitions, which doesn't take effect for globally sequential messages
 * @method void setPartitionNum(integer $PartitionNum) Set Number of partitions, which doesn't take effect for globally sequential messages
 */
class CreateRocketMQTopicRequest extends AbstractModel
{
    /**
     * @var string Topic name, which can contain 3–64 letters, digits, hyphens, and underscores
     */
    public $Topic;

    /**
     * @var array Topic namespace. Currently, you can create topics only in one single namespace.
     */
    public $Namespaces;

    /**
     * @var string Topic type. Valid values: `Normal`, `PartitionedOrder`, `Transaction`, `DelayScheduled`.
     */
    public $Type;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Topic remarks (up to 128 characters)
     */
    public $Remark;

    /**
     * @var integer Number of partitions, which doesn't take effect for globally sequential messages
     */
    public $PartitionNum;

    /**
     * @param string $Topic Topic name, which can contain 3–64 letters, digits, hyphens, and underscores
     * @param array $Namespaces Topic namespace. Currently, you can create topics only in one single namespace.
     * @param string $Type Topic type. Valid values: `Normal`, `PartitionedOrder`, `Transaction`, `DelayScheduled`.
     * @param string $ClusterId Cluster ID
     * @param string $Remark Topic remarks (up to 128 characters)
     * @param integer $PartitionNum Number of partitions, which doesn't take effect for globally sequential messages
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

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }
    }
}
