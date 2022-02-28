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
 * RocketMQ topic information
 *
 * @method string getName() Obtain Topic name
 * @method void setName(string $Name) Set Topic name
 * @method string getRemark() Obtain Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPartitionNum() Obtain Number of read/write partitions
 * @method void setPartitionNum(integer $PartitionNum) Set Number of read/write partitions
 * @method integer getCreateTime() Obtain Creation time in milliseconds
 * @method void setCreateTime(integer $CreateTime) Set Creation time in milliseconds
 * @method integer getUpdateTime() Obtain Creation time in milliseconds
 * @method void setUpdateTime(integer $UpdateTime) Set Creation time in milliseconds
 */
class RocketMQTopic extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $Name;

    /**
     * @var string Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var integer Number of read/write partitions
     */
    public $PartitionNum;

    /**
     * @var integer Creation time in milliseconds
     */
    public $CreateTime;

    /**
     * @var integer Creation time in milliseconds
     */
    public $UpdateTime;

    /**
     * @param string $Name Topic name
     * @param string $Remark Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PartitionNum Number of read/write partitions
     * @param integer $CreateTime Creation time in milliseconds
     * @param integer $UpdateTime Creation time in milliseconds
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}