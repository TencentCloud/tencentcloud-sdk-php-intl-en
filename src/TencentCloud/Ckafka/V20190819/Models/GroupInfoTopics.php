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
 * Internal topic object of `GroupInfo`
 *
 * @method string getTopic() Obtain Name of assigned topics
 * @method void setTopic(string $Topic) Set Name of assigned topics
 * @method array getPartitions() Obtain Information of assigned partition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPartitions(array $Partitions) Set Information of assigned partition
Note: this field may return null, indicating that no valid values can be obtained.
 */
class GroupInfoTopics extends AbstractModel
{
    /**
     * @var string Name of assigned topics
     */
    public $Topic;

    /**
     * @var array Information of assigned partition
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Partitions;

    /**
     * @param string $Topic Name of assigned topics
     * @param array $Partitions Information of assigned partition
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }
    }
}
