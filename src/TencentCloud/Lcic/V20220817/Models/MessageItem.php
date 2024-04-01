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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a message.
 *
 * @method integer getMessageType() Obtain The message type. `0`: Text; `1`: Image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessageType(integer $MessageType) Set The message type. `0`: Text; `1`: Image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTextMessage() Obtain The text. This parameter is valid if `MessageType` is `0`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTextMessage(string $TextMessage) Set The text. This parameter is valid if `MessageType` is `0`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageMessage() Obtain The image URL. This parameter is valid if `MessageType` is `1`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageMessage(string $ImageMessage) Set The image URL. This parameter is valid if `MessageType` is `1`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CustomMsgContent getCustomMessage() Obtain Customize the message content. Vaild when message type=2.
 * @method void setCustomMessage(CustomMsgContent $CustomMessage) Set Customize the message content. Vaild when message type=2.
 */
class MessageItem extends AbstractModel
{
    /**
     * @var integer The message type. `0`: Text; `1`: Image.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MessageType;

    /**
     * @var string The text. This parameter is valid if `MessageType` is `0`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TextMessage;

    /**
     * @var string The image URL. This parameter is valid if `MessageType` is `1`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageMessage;

    /**
     * @var CustomMsgContent Customize the message content. Vaild when message type=2.
     */
    public $CustomMessage;

    /**
     * @param integer $MessageType The message type. `0`: Text; `1`: Image.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TextMessage The text. This parameter is valid if `MessageType` is `0`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageMessage The image URL. This parameter is valid if `MessageType` is `1`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CustomMsgContent $CustomMessage Customize the message content. Vaild when message type=2.
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
        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }

        if (array_key_exists("TextMessage",$param) and $param["TextMessage"] !== null) {
            $this->TextMessage = $param["TextMessage"];
        }

        if (array_key_exists("ImageMessage",$param) and $param["ImageMessage"] !== null) {
            $this->ImageMessage = $param["ImageMessage"];
        }

        if (array_key_exists("CustomMessage",$param) and $param["CustomMessage"] !== null) {
            $this->CustomMessage = new CustomMsgContent();
            $this->CustomMessage->deserialize($param["CustomMessage"]);
        }
    }
}
