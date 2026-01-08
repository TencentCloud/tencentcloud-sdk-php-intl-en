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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageByTopic request structure.
 *
 * @method string getInstanceId() Obtain tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method void setInstanceId(string $InstanceId) Set tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method string getTopic() Obtain home/room
 * @method void setTopic(string $Topic) Set home/room
 * @method integer getStartTime() Obtain Start time. millisecond-level timestamp.
 * @method void setStartTime(integer $StartTime) Set Start time. millisecond-level timestamp.
 * @method integer getMaxNumber() Obtain Specifies the number of query messages. value range: 1-1024. default: 100.
 * @method void setMaxNumber(integer $MaxNumber) Set Specifies the number of query messages. value range: 1-1024. default: 100.
 */
class DescribeMessageByTopicRequest extends AbstractModel
{
    /**
     * @var string tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
     */
    public $InstanceId;

    /**
     * @var string home/room
     */
    public $Topic;

    /**
     * @var integer Start time. millisecond-level timestamp.
     */
    public $StartTime;

    /**
     * @var integer Specifies the number of query messages. value range: 1-1024. default: 100.
     */
    public $MaxNumber;

    /**
     * @param string $InstanceId tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
     * @param string $Topic home/room
     * @param integer $StartTime Start time. millisecond-level timestamp.
     * @param integer $MaxNumber Specifies the number of query messages. value range: 1-1024. default: 100.
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("MaxNumber",$param) and $param["MaxNumber"] !== null) {
            $this->MaxNumber = $param["MaxNumber"];
        }
    }
}
