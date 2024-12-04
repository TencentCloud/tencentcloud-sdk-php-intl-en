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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Checkpoint information in Kafka partition for data subscription.
 *
 * @method integer getPartitionNo() Obtain Kafka partition numberNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionNo(integer $PartitionNo) Set Kafka partition numberNote: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOffset() Obtain Kafka offsetNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setOffset(integer $Offset) Set Kafka offsetNote: This field may return null, indicating that no valid values can be obtained.
 */
class OffsetTimeMap extends AbstractModel
{
    /**
     * @var integer Kafka partition numberNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionNo;

    /**
     * @var integer Kafka offsetNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Offset;

    /**
     * @param integer $PartitionNo Kafka partition numberNote: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Offset Kafka offsetNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PartitionNo",$param) and $param["PartitionNo"] !== null) {
            $this->PartitionNo = $param["PartitionNo"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
