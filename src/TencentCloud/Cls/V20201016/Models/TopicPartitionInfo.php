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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Partitions
 *
 * @method string getTopicID() Obtain Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicID(string $TopicID) Set Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPartitions() Obtain Partition ID list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitions(array $Partitions) Set Partition ID list.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TopicPartitionInfo extends AbstractModel
{
    /**
     * @var string Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicID;

    /**
     * @var array Partition ID list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Partitions;

    /**
     * @param string $TopicID Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Partitions Partition ID list.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TopicID",$param) and $param["TopicID"] !== null) {
            $this->TopicID = $param["TopicID"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }
    }
}
