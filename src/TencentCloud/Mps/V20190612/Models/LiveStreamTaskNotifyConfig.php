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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event notification configuration of a task.
 *
 * @method string getNotifyType() Obtain Notification type:
TDMQ-CMQ: message queue.
"URL": When a URL is specified, HTTP callbacks are pushed to the address specified by NotifyUrl. The callback protocol is HTTP+JSON. The content of the packet body is the same as the output parameters of [ParseLiveStreamProcessNotification](https://www.tencentcloud.com/document/product/862/39229?from_cn_redirect=1).
<Font color="red"> Note: if it is unspecified or left blank, no callback will be sent. To send a callback, fill in the corresponding type value. </font>
 * @method void setNotifyType(string $NotifyType) Set Notification type:
TDMQ-CMQ: message queue.
"URL": When a URL is specified, HTTP callbacks are pushed to the address specified by NotifyUrl. The callback protocol is HTTP+JSON. The content of the packet body is the same as the output parameters of [ParseLiveStreamProcessNotification](https://www.tencentcloud.com/document/product/862/39229?from_cn_redirect=1).
<Font color="red"> Note: if it is unspecified or left blank, no callback will be sent. To send a callback, fill in the corresponding type value. </font>
 * @method string getNotifyUrl() Obtain HTTP callback URL, required if `NotifyType` is set to `URL`
 * @method void setNotifyUrl(string $NotifyUrl) Set HTTP callback URL, required if `NotifyType` is set to `URL`
 * @method string getCmqModel() Obtain Queue and Topic models are provided.
 * @method void setCmqModel(string $CmqModel) Set Queue and Topic models are provided.
 * @method string getCmqRegion() Obtain Region when NotifyType is set to TDMQ-CMQ. For example, sh or bj.
 * @method void setCmqRegion(string $CmqRegion) Set Region when NotifyType is set to TDMQ-CMQ. For example, sh or bj.
 * @method string getQueueName() Obtain This field is valid when the model is Queue. It indicates the name of the TDMQ for CMQ queue for receiving event notifications.
 * @method void setQueueName(string $QueueName) Set This field is valid when the model is Queue. It indicates the name of the TDMQ for CMQ queue for receiving event notifications.
 * @method string getTopicName() Obtain This field is valid when the model is Topic. It indicates the name of the TDMQ for CMQ topic for receiving event notifications.
 * @method void setTopicName(string $TopicName) Set This field is valid when the model is Topic. It indicates the name of the TDMQ for CMQ topic for receiving event notifications.
 * @method string getNotifyKey() Obtain Key used to generate a callback signature.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNotifyKey(string $NotifyKey) Set Key used to generate a callback signature.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveStreamTaskNotifyConfig extends AbstractModel
{
    /**
     * @var string Notification type:
TDMQ-CMQ: message queue.
"URL": When a URL is specified, HTTP callbacks are pushed to the address specified by NotifyUrl. The callback protocol is HTTP+JSON. The content of the packet body is the same as the output parameters of [ParseLiveStreamProcessNotification](https://www.tencentcloud.com/document/product/862/39229?from_cn_redirect=1).
<Font color="red"> Note: if it is unspecified or left blank, no callback will be sent. To send a callback, fill in the corresponding type value. </font>
     */
    public $NotifyType;

    /**
     * @var string HTTP callback URL, required if `NotifyType` is set to `URL`
     */
    public $NotifyUrl;

    /**
     * @var string Queue and Topic models are provided.
     */
    public $CmqModel;

    /**
     * @var string Region when NotifyType is set to TDMQ-CMQ. For example, sh or bj.
     */
    public $CmqRegion;

    /**
     * @var string This field is valid when the model is Queue. It indicates the name of the TDMQ for CMQ queue for receiving event notifications.
     */
    public $QueueName;

    /**
     * @var string This field is valid when the model is Topic. It indicates the name of the TDMQ for CMQ topic for receiving event notifications.
     */
    public $TopicName;

    /**
     * @var string Key used to generate a callback signature.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NotifyKey;

    /**
     * @param string $NotifyType Notification type:
TDMQ-CMQ: message queue.
"URL": When a URL is specified, HTTP callbacks are pushed to the address specified by NotifyUrl. The callback protocol is HTTP+JSON. The content of the packet body is the same as the output parameters of [ParseLiveStreamProcessNotification](https://www.tencentcloud.com/document/product/862/39229?from_cn_redirect=1).
<Font color="red"> Note: if it is unspecified or left blank, no callback will be sent. To send a callback, fill in the corresponding type value. </font>
     * @param string $NotifyUrl HTTP callback URL, required if `NotifyType` is set to `URL`
     * @param string $CmqModel Queue and Topic models are provided.
     * @param string $CmqRegion Region when NotifyType is set to TDMQ-CMQ. For example, sh or bj.
     * @param string $QueueName This field is valid when the model is Queue. It indicates the name of the TDMQ for CMQ queue for receiving event notifications.
     * @param string $TopicName This field is valid when the model is Topic. It indicates the name of the TDMQ for CMQ topic for receiving event notifications.
     * @param string $NotifyKey Key used to generate a callback signature.
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
        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("CmqModel",$param) and $param["CmqModel"] !== null) {
            $this->CmqModel = $param["CmqModel"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("NotifyKey",$param) and $param["NotifyKey"] !== null) {
            $this->NotifyKey = $param["NotifyKey"];
        }
    }
}
