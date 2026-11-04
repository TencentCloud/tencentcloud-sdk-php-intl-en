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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TimerPushConfig
 *
 * @method integer getPushChannel() Obtain <p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 |  |<br>| 1 | Do not push |<br>| 2 | WeChat official account |<br>| 3 | WeCom AI chatbot |</p>
 * @method void setPushChannel(integer $PushChannel) Set <p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 |  |<br>| 1 | Do not push |<br>| 2 | WeChat official account |<br>| 3 | WeCom AI chatbot |</p>
 * @method string getPushTargetId() Obtain <p>Push session ID</p>
 * @method void setPushTargetId(string $PushTargetId) Set <p>Push session ID</p>
 * @method integer getPushTargetType() Obtain <p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 |  |<br>| 1 | User (WeChat official account openid) |<br>| 2 | Group chat (WeCom chatbot chat_id) |</p>
 * @method void setPushTargetType(integer $PushTargetType) Set <p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 |  |<br>| 1 | User (WeChat official account openid) |<br>| 2 | Group chat (WeCom chatbot chat_id) |</p>
 * @method string getPushWebhookUrl() Obtain <p>url for pushing webhook</p>
 * @method void setPushWebhookUrl(string $PushWebhookUrl) Set <p>url for pushing webhook</p>
 */
class TimerPushConfig extends AbstractModel
{
    /**
     * @var integer <p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 |  |<br>| 1 | Do not push |<br>| 2 | WeChat official account |<br>| 3 | WeCom AI chatbot |</p>
     */
    public $PushChannel;

    /**
     * @var string <p>Push session ID</p>
     */
    public $PushTargetId;

    /**
     * @var integer <p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 |  |<br>| 1 | User (WeChat official account openid) |<br>| 2 | Group chat (WeCom chatbot chat_id) |</p>
     */
    public $PushTargetType;

    /**
     * @var string <p>url for pushing webhook</p>
     */
    public $PushWebhookUrl;

    /**
     * @param integer $PushChannel <p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 |  |<br>| 1 | Do not push |<br>| 2 | WeChat official account |<br>| 3 | WeCom AI chatbot |</p>
     * @param string $PushTargetId <p>Push session ID</p>
     * @param integer $PushTargetType <p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 |  |<br>| 1 | User (WeChat official account openid) |<br>| 2 | Group chat (WeCom chatbot chat_id) |</p>
     * @param string $PushWebhookUrl <p>url for pushing webhook</p>
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
        if (array_key_exists("PushChannel",$param) and $param["PushChannel"] !== null) {
            $this->PushChannel = $param["PushChannel"];
        }

        if (array_key_exists("PushTargetId",$param) and $param["PushTargetId"] !== null) {
            $this->PushTargetId = $param["PushTargetId"];
        }

        if (array_key_exists("PushTargetType",$param) and $param["PushTargetType"] !== null) {
            $this->PushTargetType = $param["PushTargetType"];
        }

        if (array_key_exists("PushWebhookUrl",$param) and $param["PushWebhookUrl"] !== null) {
            $this->PushWebhookUrl = $param["PushWebhookUrl"];
        }
    }
}
