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
 * DescribeRocketMQMsg response structure.
 *
 * @method string getBody() Obtain Message body
 * @method void setBody(string $Body) Set Message body
 * @method string getProperties() Obtain Details parameter
 * @method void setProperties(string $Properties) Set Details parameter
 * @method string getProduceTime() Obtain Production time
 * @method void setProduceTime(string $ProduceTime) Set Production time
 * @method string getMsgId() Obtain Message ID
 * @method void setMsgId(string $MsgId) Set Message ID
 * @method string getProducerAddr() Obtain Producer address
 * @method void setProducerAddr(string $ProducerAddr) Set Producer address
 * @method array getMessageTracks() Obtain Consumption details of a consumer group
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setMessageTracks(array $MessageTracks) Set Consumption details of a consumer group
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getShowTopicName() Obtain Topic name displayed on the details page
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setShowTopicName(string $ShowTopicName) Set Topic name displayed on the details page
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRocketMQMsgResponse extends AbstractModel
{
    /**
     * @var string Message body
     */
    public $Body;

    /**
     * @var string Details parameter
     */
    public $Properties;

    /**
     * @var string Production time
     */
    public $ProduceTime;

    /**
     * @var string Message ID
     */
    public $MsgId;

    /**
     * @var string Producer address
     */
    public $ProducerAddr;

    /**
     * @var array Consumption details of a consumer group
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $MessageTracks;

    /**
     * @var string Topic name displayed on the details page
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $ShowTopicName;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Body Message body
     * @param string $Properties Details parameter
     * @param string $ProduceTime Production time
     * @param string $MsgId Message ID
     * @param string $ProducerAddr Producer address
     * @param array $MessageTracks Consumption details of a consumer group
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $ShowTopicName Topic name displayed on the details page
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("ProducerAddr",$param) and $param["ProducerAddr"] !== null) {
            $this->ProducerAddr = $param["ProducerAddr"];
        }

        if (array_key_exists("MessageTracks",$param) and $param["MessageTracks"] !== null) {
            $this->MessageTracks = [];
            foreach ($param["MessageTracks"] as $key => $value){
                $obj = new RocketMQMessageTrack();
                $obj->deserialize($value);
                array_push($this->MessageTracks, $obj);
            }
        }

        if (array_key_exists("ShowTopicName",$param) and $param["ShowTopicName"] !== null) {
            $this->ShowTopicName = $param["ShowTopicName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
