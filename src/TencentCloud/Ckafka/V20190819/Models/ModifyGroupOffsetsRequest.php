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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGroupOffsets request structure.
 *
 * @method string getInstanceId() Obtain ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
 * @method void setInstanceId(string $InstanceId) Set ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
 * @method string getGroup() Obtain Consumer group name. obtain through the API [DescribeConsumerGroup](https://www.tencentcloud.comom/document/product/597/40841?from_cn_redirect=1).
 * @method void setGroup(string $Group) Set Consumer group name. obtain through the API [DescribeConsumerGroup](https://www.tencentcloud.comom/document/product/597/40841?from_cn_redirect=1).
 * @method integer getStrategy() Obtain Reset offset strategy. parameter meaning: 0. align with the shift-by parameter, move the offset forward or backward by shift entries. 1. alignment reference (by-duration, to-datetime, to-earliest, to-latest), move the offset to the specified timestamp position. 2. alignment reference (to-offset), move the offset to the specified offset position.
 * @method void setStrategy(integer $Strategy) Set Reset offset strategy. parameter meaning: 0. align with the shift-by parameter, move the offset forward or backward by shift entries. 1. alignment reference (by-duration, to-datetime, to-earliest, to-latest), move the offset to the specified timestamp position. 2. alignment reference (to-offset), move the offset to the specified offset position.
 * @method array getTopics() Obtain Specifies the topic name list that needs to reset.
 * @method void setTopics(array $Topics) Set Specifies the topic name list that needs to reset.
 * @method integer getShift() Obtain When `strategy` is 0, this field is required. If it is above zero, the offset will be shifted backward by the value of the `shift`. If it is below zero, the offset will be shifted forward by the value of the `shift`. After a correct reset, the new offset should be (old_offset + shift). Note that if the new offset is smaller than the `earliest` parameter of the partition, it will be set to `earliest`, and if it is greater than the `latest` parameter of the partition, it will be set to `latest`
 * @method void setShift(integer $Shift) Set When `strategy` is 0, this field is required. If it is above zero, the offset will be shifted backward by the value of the `shift`. If it is below zero, the offset will be shifted forward by the value of the `shift`. After a correct reset, the new offset should be (old_offset + shift). Note that if the new offset is smaller than the `earliest` parameter of the partition, it will be set to `earliest`, and if it is greater than the `latest` parameter of the partition, it will be set to `latest`
 * @method integer getShiftTimestamp() Obtain In milliseconds. when strategy is 1, must include this field. among them, -2 means reset offset to the start position, -1 means reset to the latest position (equivalent to clearing), other values represent the specified time. obtain the offset at the specified time in the topic and reset. notably, if no message exists at the specified time, get the last offset.
 * @method void setShiftTimestamp(integer $ShiftTimestamp) Set In milliseconds. when strategy is 1, must include this field. among them, -2 means reset offset to the start position, -1 means reset to the latest position (equivalent to clearing), other values represent the specified time. obtain the offset at the specified time in the topic and reset. notably, if no message exists at the specified time, get the last offset.
 * @method integer getOffset() Obtain Position of the offset that needs to be reset. When `strategy` is 2, this field is required
 * @method void setOffset(integer $Offset) Set Position of the offset that needs to be reset. When `strategy` is 2, this field is required
 * @method array getPartitions() Obtain List of partitions that need to be reset. If the topics parameter is not specified, reset partitions in the corresponding partition list of all topics. If the topics parameter is specified, reset partitions of the corresponding partition list of the specified topic list.
 * @method void setPartitions(array $Partitions) Set List of partitions that need to be reset. If the topics parameter is not specified, reset partitions in the corresponding partition list of all topics. If the topics parameter is specified, reset partitions of the corresponding partition list of the specified topic list.
 */
class ModifyGroupOffsetsRequest extends AbstractModel
{
    /**
     * @var string ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
     */
    public $InstanceId;

    /**
     * @var string Consumer group name. obtain through the API [DescribeConsumerGroup](https://www.tencentcloud.comom/document/product/597/40841?from_cn_redirect=1).
     */
    public $Group;

    /**
     * @var integer Reset offset strategy. parameter meaning: 0. align with the shift-by parameter, move the offset forward or backward by shift entries. 1. alignment reference (by-duration, to-datetime, to-earliest, to-latest), move the offset to the specified timestamp position. 2. alignment reference (to-offset), move the offset to the specified offset position.
     */
    public $Strategy;

    /**
     * @var array Specifies the topic name list that needs to reset.
     */
    public $Topics;

    /**
     * @var integer When `strategy` is 0, this field is required. If it is above zero, the offset will be shifted backward by the value of the `shift`. If it is below zero, the offset will be shifted forward by the value of the `shift`. After a correct reset, the new offset should be (old_offset + shift). Note that if the new offset is smaller than the `earliest` parameter of the partition, it will be set to `earliest`, and if it is greater than the `latest` parameter of the partition, it will be set to `latest`
     */
    public $Shift;

    /**
     * @var integer In milliseconds. when strategy is 1, must include this field. among them, -2 means reset offset to the start position, -1 means reset to the latest position (equivalent to clearing), other values represent the specified time. obtain the offset at the specified time in the topic and reset. notably, if no message exists at the specified time, get the last offset.
     */
    public $ShiftTimestamp;

    /**
     * @var integer Position of the offset that needs to be reset. When `strategy` is 2, this field is required
     */
    public $Offset;

    /**
     * @var array List of partitions that need to be reset. If the topics parameter is not specified, reset partitions in the corresponding partition list of all topics. If the topics parameter is specified, reset partitions of the corresponding partition list of the specified topic list.
     */
    public $Partitions;

    /**
     * @param string $InstanceId ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
     * @param string $Group Consumer group name. obtain through the API [DescribeConsumerGroup](https://www.tencentcloud.comom/document/product/597/40841?from_cn_redirect=1).
     * @param integer $Strategy Reset offset strategy. parameter meaning: 0. align with the shift-by parameter, move the offset forward or backward by shift entries. 1. alignment reference (by-duration, to-datetime, to-earliest, to-latest), move the offset to the specified timestamp position. 2. alignment reference (to-offset), move the offset to the specified offset position.
     * @param array $Topics Specifies the topic name list that needs to reset.
     * @param integer $Shift When `strategy` is 0, this field is required. If it is above zero, the offset will be shifted backward by the value of the `shift`. If it is below zero, the offset will be shifted forward by the value of the `shift`. After a correct reset, the new offset should be (old_offset + shift). Note that if the new offset is smaller than the `earliest` parameter of the partition, it will be set to `earliest`, and if it is greater than the `latest` parameter of the partition, it will be set to `latest`
     * @param integer $ShiftTimestamp In milliseconds. when strategy is 1, must include this field. among them, -2 means reset offset to the start position, -1 means reset to the latest position (equivalent to clearing), other values represent the specified time. obtain the offset at the specified time in the topic and reset. notably, if no message exists at the specified time, get the last offset.
     * @param integer $Offset Position of the offset that needs to be reset. When `strategy` is 2, this field is required
     * @param array $Partitions List of partitions that need to be reset. If the topics parameter is not specified, reset partitions in the corresponding partition list of all topics. If the topics parameter is specified, reset partitions of the corresponding partition list of the specified topic list.
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

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = $param["Topics"];
        }

        if (array_key_exists("Shift",$param) and $param["Shift"] !== null) {
            $this->Shift = $param["Shift"];
        }

        if (array_key_exists("ShiftTimestamp",$param) and $param["ShiftTimestamp"] !== null) {
            $this->ShiftTimestamp = $param["ShiftTimestamp"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }
    }
}
