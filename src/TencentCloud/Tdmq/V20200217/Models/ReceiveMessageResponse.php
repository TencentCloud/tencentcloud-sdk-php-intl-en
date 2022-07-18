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
 * ReceiveMessage response structure.
 *
 * @method string getMessageID() Obtain Unique primary key used to identify the message
 * @method void setMessageID(string $MessageID) Set Unique primary key used to identify the message
 * @method string getMessagePayload() Obtain Content of the received message
 * @method void setMessagePayload(string $MessagePayload) Set Content of the received message
 * @method string getAckTopic() Obtain Provided to the `Ack` API and used to acknowledge messages in the topic
 * @method void setAckTopic(string $AckTopic) Set Provided to the `Ack` API and used to acknowledge messages in the topic
 * @method string getErrorMsg() Obtain Returned error message. If it is an empty string, no error occurred.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMsg(string $ErrorMsg) Set Returned error message. If it is an empty string, no error occurred.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSubName() Obtain Returned subscriber name, which will be used when an acknowledgment consumer is created.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubName(string $SubName) Set Returned subscriber name, which will be used when an acknowledgment consumer is created.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMessageIDList() Obtain MessageIDs returned by `BatchReceivePolicy` at a time, which are separated by “###”.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessageIDList(string $MessageIDList) Set MessageIDs returned by `BatchReceivePolicy` at a time, which are separated by “###”.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessagesPayload() Obtain Message contents returned by `BatchReceivePolicy` at a time, which are separated by “###”.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessagesPayload(string $MessagesPayload) Set Message contents returned by `BatchReceivePolicy` at a time, which are separated by “###”.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ReceiveMessageResponse extends AbstractModel
{
    /**
     * @var string Unique primary key used to identify the message
     */
    public $MessageID;

    /**
     * @var string Content of the received message
     */
    public $MessagePayload;

    /**
     * @var string Provided to the `Ack` API and used to acknowledge messages in the topic
     */
    public $AckTopic;

    /**
     * @var string Returned error message. If it is an empty string, no error occurred.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMsg;

    /**
     * @var string Returned subscriber name, which will be used when an acknowledgment consumer is created.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubName;

    /**
     * @var string MessageIDs returned by `BatchReceivePolicy` at a time, which are separated by “###”.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MessageIDList;

    /**
     * @var string Message contents returned by `BatchReceivePolicy` at a time, which are separated by “###”.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MessagesPayload;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $MessageID Unique primary key used to identify the message
     * @param string $MessagePayload Content of the received message
     * @param string $AckTopic Provided to the `Ack` API and used to acknowledge messages in the topic
     * @param string $ErrorMsg Returned error message. If it is an empty string, no error occurred.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SubName Returned subscriber name, which will be used when an acknowledgment consumer is created.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MessageIDList MessageIDs returned by `BatchReceivePolicy` at a time, which are separated by “###”.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MessagesPayload Message contents returned by `BatchReceivePolicy` at a time, which are separated by “###”.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MessageID",$param) and $param["MessageID"] !== null) {
            $this->MessageID = $param["MessageID"];
        }

        if (array_key_exists("MessagePayload",$param) and $param["MessagePayload"] !== null) {
            $this->MessagePayload = $param["MessagePayload"];
        }

        if (array_key_exists("AckTopic",$param) and $param["AckTopic"] !== null) {
            $this->AckTopic = $param["AckTopic"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("SubName",$param) and $param["SubName"] !== null) {
            $this->SubName = $param["SubName"];
        }

        if (array_key_exists("MessageIDList",$param) and $param["MessageIDList"] !== null) {
            $this->MessageIDList = $param["MessageIDList"];
        }

        if (array_key_exists("MessagesPayload",$param) and $param["MessagesPayload"] !== null) {
            $this->MessagesPayload = $param["MessagesPayload"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
