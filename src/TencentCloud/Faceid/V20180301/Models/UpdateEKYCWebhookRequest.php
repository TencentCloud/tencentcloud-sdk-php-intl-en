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
 * @method string getWebhookURL() Obtain <p>New callback URL, must be HTTPS protocol</p>
 * @method void setWebhookURL(string $WebhookURL) Set <p>New callback URL, must be HTTPS protocol</p>
 * @method string getSignatureKey() Obtain <p>Callback signature key, up to 128 characters. Used for HMAC-SHA256 signature verification of subsequent callback messages. If not provided, signature is not enabled. We recommend using OpenSSL random bytes to generate the key. Recommended command: openssl rand -base64 32    </p><blockquote><p>Our side uses your configured <code>SignatureKey</code> to calculate the HMAC-SHA256 signature over "timestamp (<code>X-Webhook-Timestamp</code>) + <code>.</code> + request body", and puts the hexadecimal result in the request header <code>X-Webhook-Signature</code>. The message itself is unencrypted and transmitted over HTTPS. Use the same key to recalculate and compare the signature following the same rule to confirm that the notification source is trustworthy and the content has not been tampered with.</p></blockquote>
 * @method void setSignatureKey(string $SignatureKey) Set <p>Callback signature key, up to 128 characters. Used for HMAC-SHA256 signature verification of subsequent callback messages. If not provided, signature is not enabled. We recommend using OpenSSL random bytes to generate the key. Recommended command: openssl rand -base64 32    </p><blockquote><p>Our side uses your configured <code>SignatureKey</code> to calculate the HMAC-SHA256 signature over "timestamp (<code>X-Webhook-Timestamp</code>) + <code>.</code> + request body", and puts the hexadecimal result in the request header <code>X-Webhook-Signature</code>. The message itself is unencrypted and transmitted over HTTPS. Use the same key to recalculate and compare the signature following the same rule to confirm that the notification source is trustworthy and the content has not been tampered with.</p></blockquote>
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
     * @var string <p>New callback URL, must be HTTPS protocol</p>
     */
    public $WebhookURL;

    /**
     * @var string <p>Callback signature key, up to 128 characters. Used for HMAC-SHA256 signature verification of subsequent callback messages. If not provided, signature is not enabled. We recommend using OpenSSL random bytes to generate the key. Recommended command: openssl rand -base64 32    </p><blockquote><p>Our side uses your configured <code>SignatureKey</code> to calculate the HMAC-SHA256 signature over "timestamp (<code>X-Webhook-Timestamp</code>) + <code>.</code> + request body", and puts the hexadecimal result in the request header <code>X-Webhook-Signature</code>. The message itself is unencrypted and transmitted over HTTPS. Use the same key to recalculate and compare the signature following the same rule to confirm that the notification source is trustworthy and the content has not been tampered with.</p></blockquote>
     */
    public $SignatureKey;

    /**
     * @param integer $WebhookId <p>ID of the Webhook configuration to be updated</p>
     * @param string $WebhookName <p>New Webhook name</p>
     * @param string $WebhookURL <p>New callback URL, must be HTTPS protocol</p>
     * @param string $SignatureKey <p>Callback signature key, up to 128 characters. Used for HMAC-SHA256 signature verification of subsequent callback messages. If not provided, signature is not enabled. We recommend using OpenSSL random bytes to generate the key. Recommended command: openssl rand -base64 32    </p><blockquote><p>Our side uses your configured <code>SignatureKey</code> to calculate the HMAC-SHA256 signature over "timestamp (<code>X-Webhook-Timestamp</code>) + <code>.</code> + request body", and puts the hexadecimal result in the request header <code>X-Webhook-Signature</code>. The message itself is unencrypted and transmitted over HTTPS. Use the same key to recalculate and compare the signature following the same rule to confirm that the notification source is trustworthy and the content has not been tampered with.</p></blockquote>
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

        if (array_key_exists("SignatureKey",$param) and $param["SignatureKey"] !== null) {
            $this->SignatureKey = $param["SignatureKey"];
        }
    }
}
