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
 * Group offset partition object
 *
 * @method integer getPartition() Obtain Topic `partitionId`
 * @method void setPartition(integer $Partition) Set Topic `partitionId`
 * @method integer getOffset() Obtain Offset position submitted by consumer
 * @method void setOffset(integer $Offset) Set Offset position submitted by consumer
 * @method string getMetadata() Obtain Metadata can be passed in for other purposes when the consumer submits messages. Currently, this parameter is usually an empty string
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMetadata(string $Metadata) Set Metadata can be passed in for other purposes when the consumer submits messages. Currently, this parameter is usually an empty string
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getErrorCode() Obtain Error code
 * @method void setErrorCode(integer $ErrorCode) Set Error code
 * @method integer getLogEndOffset() Obtain Latest offset of current partition
 * @method void setLogEndOffset(integer $LogEndOffset) Set Latest offset of current partition
 * @method integer getLag() Obtain Number of unconsumed messages
 * @method void setLag(integer $Lag) Set Number of unconsumed messages
 */
class GroupOffsetPartition extends AbstractModel
{
    /**
     * @var integer Topic `partitionId`
     */
    public $Partition;

    /**
     * @var integer Offset position submitted by consumer
     */
    public $Offset;

    /**
     * @var string Metadata can be passed in for other purposes when the consumer submits messages. Currently, this parameter is usually an empty string
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Metadata;

    /**
     * @var integer Error code
     */
    public $ErrorCode;

    /**
     * @var integer Latest offset of current partition
     */
    public $LogEndOffset;

    /**
     * @var integer Number of unconsumed messages
     */
    public $Lag;

    /**
     * @param integer $Partition Topic `partitionId`
     * @param integer $Offset Offset position submitted by consumer
     * @param string $Metadata Metadata can be passed in for other purposes when the consumer submits messages. Currently, this parameter is usually an empty string
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ErrorCode Error code
     * @param integer $LogEndOffset Latest offset of current partition
     * @param integer $Lag Number of unconsumed messages
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
        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("LogEndOffset",$param) and $param["LogEndOffset"] !== null) {
            $this->LogEndOffset = $param["LogEndOffset"];
        }

        if (array_key_exists("Lag",$param) and $param["Lag"] !== null) {
            $this->Lag = $param["Lag"];
        }
    }
}
