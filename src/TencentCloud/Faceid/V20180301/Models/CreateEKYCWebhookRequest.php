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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEKYCWebhook request structure.
 *
 * @method string getWebhookName() Obtain <p>Webhook name, used for console display</p>
 * @method void setWebhookName(string $WebhookName) Set <p>Webhook name, used for console display</p>
 * @method string getWebhookURL() Obtain <p>Callback URL, which must use the HTTPS protocol</p>
 * @method void setWebhookURL(string $WebhookURL) Set <p>Callback URL, which must use the HTTPS protocol</p>
 */
class CreateEKYCWebhookRequest extends AbstractModel
{
    /**
     * @var string <p>Webhook name, used for console display</p>
     */
    public $WebhookName;

    /**
     * @var string <p>Callback URL, which must use the HTTPS protocol</p>
     */
    public $WebhookURL;

    /**
     * @param string $WebhookName <p>Webhook name, used for console display</p>
     * @param string $WebhookURL <p>Callback URL, which must use the HTTPS protocol</p>
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
        if (array_key_exists("WebhookName",$param) and $param["WebhookName"] !== null) {
            $this->WebhookName = $param["WebhookName"];
        }

        if (array_key_exists("WebhookURL",$param) and $param["WebhookURL"] !== null) {
            $this->WebhookURL = $param["WebhookURL"];
        }
    }
}
