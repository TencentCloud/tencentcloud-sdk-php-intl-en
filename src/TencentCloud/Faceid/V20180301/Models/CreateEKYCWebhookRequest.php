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
 * @method string getScene() Obtain <p>Business scenario. Default if not passed: AML_SCREENING_RESULT_CHANGE. For parameter values, see the enumeration below.</p><p>Enumeration values:</p><ul><li>AML_SCREENING_RESULT_CHANGE: AML anti-money laundering screening result change notification (default value)    </li><li>NONDOC_VERIFICATION_RESULT: Non-document (NonDoc) verification result notification</li></ul>
 * @method void setScene(string $Scene) Set <p>Business scenario. Default if not passed: AML_SCREENING_RESULT_CHANGE. For parameter values, see the enumeration below.</p><p>Enumeration values:</p><ul><li>AML_SCREENING_RESULT_CHANGE: AML anti-money laundering screening result change notification (default value)    </li><li>NONDOC_VERIFICATION_RESULT: Non-document (NonDoc) verification result notification</li></ul>
 * @method string getSignatureKey() Obtain <p>Callback signature key, up to 128 characters. Used for HMAC-SHA256 signature verification of subsequent callback messages. If not passed, signature is not enabled. We recommend using OpenSSL random bytes to generate the key. Recommended command: openssl rand -base64 32</p><blockquote><p>Our side uses your configured <code>SignatureKey</code> to calculate an HMAC-SHA256 signature over "timestamp (<code>X-Webhook-Timestamp</code>) + <code>.</code> + request body", and puts the hexadecimal result in the request header <code>X-Webhook-Signature</code>. The message itself is unencrypted and transmitted over HTTPS. Use the same key to recalculate and compare the signature by the same rule to confirm that the notification source is trustworthy and the content has not been tampered with.</p></blockquote>
 * @method void setSignatureKey(string $SignatureKey) Set <p>Callback signature key, up to 128 characters. Used for HMAC-SHA256 signature verification of subsequent callback messages. If not passed, signature is not enabled. We recommend using OpenSSL random bytes to generate the key. Recommended command: openssl rand -base64 32</p><blockquote><p>Our side uses your configured <code>SignatureKey</code> to calculate an HMAC-SHA256 signature over "timestamp (<code>X-Webhook-Timestamp</code>) + <code>.</code> + request body", and puts the hexadecimal result in the request header <code>X-Webhook-Signature</code>. The message itself is unencrypted and transmitted over HTTPS. Use the same key to recalculate and compare the signature by the same rule to confirm that the notification source is trustworthy and the content has not been tampered with.</p></blockquote>
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
     * @var string <p>Business scenario. Default if not passed: AML_SCREENING_RESULT_CHANGE. For parameter values, see the enumeration below.</p><p>Enumeration values:</p><ul><li>AML_SCREENING_RESULT_CHANGE: AML anti-money laundering screening result change notification (default value)    </li><li>NONDOC_VERIFICATION_RESULT: Non-document (NonDoc) verification result notification</li></ul>
     */
    public $Scene;

    /**
     * @var string <p>Callback signature key, up to 128 characters. Used for HMAC-SHA256 signature verification of subsequent callback messages. If not passed, signature is not enabled. We recommend using OpenSSL random bytes to generate the key. Recommended command: openssl rand -base64 32</p><blockquote><p>Our side uses your configured <code>SignatureKey</code> to calculate an HMAC-SHA256 signature over "timestamp (<code>X-Webhook-Timestamp</code>) + <code>.</code> + request body", and puts the hexadecimal result in the request header <code>X-Webhook-Signature</code>. The message itself is unencrypted and transmitted over HTTPS. Use the same key to recalculate and compare the signature by the same rule to confirm that the notification source is trustworthy and the content has not been tampered with.</p></blockquote>
     */
    public $SignatureKey;

    /**
     * @param string $WebhookName <p>Webhook name, used for console display</p>
     * @param string $WebhookURL <p>Callback URL, which must use the HTTPS protocol</p>
     * @param string $Scene <p>Business scenario. Default if not passed: AML_SCREENING_RESULT_CHANGE. For parameter values, see the enumeration below.</p><p>Enumeration values:</p><ul><li>AML_SCREENING_RESULT_CHANGE: AML anti-money laundering screening result change notification (default value)    </li><li>NONDOC_VERIFICATION_RESULT: Non-document (NonDoc) verification result notification</li></ul>
     * @param string $SignatureKey <p>Callback signature key, up to 128 characters. Used for HMAC-SHA256 signature verification of subsequent callback messages. If not passed, signature is not enabled. We recommend using OpenSSL random bytes to generate the key. Recommended command: openssl rand -base64 32</p><blockquote><p>Our side uses your configured <code>SignatureKey</code> to calculate an HMAC-SHA256 signature over "timestamp (<code>X-Webhook-Timestamp</code>) + <code>.</code> + request body", and puts the hexadecimal result in the request header <code>X-Webhook-Signature</code>. The message itself is unencrypted and transmitted over HTTPS. Use the same key to recalculate and compare the signature by the same rule to confirm that the notification source is trustworthy and the content has not been tampered with.</p></blockquote>
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

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("SignatureKey",$param) and $param["SignatureKey"] !== null) {
            $this->SignatureKey = $param["SignatureKey"];
        }
    }
}
