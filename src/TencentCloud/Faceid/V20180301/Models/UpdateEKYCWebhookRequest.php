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
 * UpdateEKYCWebhook request structure.
 *
 * @method integer getWebhookId() Obtain <p>ID of the Webhook configuration to be updated</p>
 * @method void setWebhookId(integer $WebhookId) Set <p>ID of the Webhook configuration to be updated</p>
 * @method string getWebhookName() Obtain <p>New Webhook name</p>
 * @method void setWebhookName(string $WebhookName) Set <p>New Webhook name</p>
 * @method string getWebhookURL() Obtain New callback URL, which must use the HTTPS protocol.
 * @method void setWebhookURL(string $WebhookURL) Set New callback URL, which must use the HTTPS protocol.
 */
class UpdateEKYCWebhookRequest extends AbstractModel
{
    /**
     * @var integer <p>ID of the Webhook configuration to be updated</p>
     */
    public $WebhookId;

    /**
     * @var string <p>New Webhook name</p>
     */
    public $WebhookName;

    /**
     * @var string New callback URL, which must use the HTTPS protocol.
     */
    public $WebhookURL;

    /**
     * @param integer $WebhookId <p>ID of the Webhook configuration to be updated</p>
     * @param string $WebhookName <p>New Webhook name</p>
     * @param string $WebhookURL New callback URL, which must use the HTTPS protocol.
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
        if (array_key_exists("WebhookId",$param) and $param["WebhookId"] !== null) {
            $this->WebhookId = $param["WebhookId"];
        }

        if (array_key_exists("WebhookName",$param) and $param["WebhookName"] !== null) {
            $this->WebhookName = $param["WebhookName"];
        }

        if (array_key_exists("WebhookURL",$param) and $param["WebhookURL"] !== null) {
            $this->WebhookURL = $param["WebhookURL"];
        }
    }
}
