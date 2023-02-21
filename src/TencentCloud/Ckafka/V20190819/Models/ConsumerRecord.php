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
 * Message record
 *
 * @method string getTopic() Obtain Topic name
 * @method void setTopic(string $Topic) Set Topic name
 * @method integer getPartition() Obtain Partition ID
 * @method void setPartition(integer $Partition) Set Partition ID
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method string getKey() Obtain Message key
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set Message key
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Message value
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Message value
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTimestamp() Obtain Message timestamp
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimestamp(integer $Timestamp) Set Message timestamp
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getHeaders() Obtain Message headers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeaders(string $Headers) Set Message headers
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConsumerRecord extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $Topic;

    /**
     * @var integer Partition ID
     */
    public $Partition;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var string Message key
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var string Message value
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var integer Message timestamp
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Timestamp;

    /**
     * @var string Message headers
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Headers;

    /**
     * @param string $Topic Topic name
     * @param integer $Partition Partition ID
     * @param integer $Offset Offset
     * @param string $Key Message key
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Value Message value
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Timestamp Message timestamp
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Headers Message headers
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }
    }
}
