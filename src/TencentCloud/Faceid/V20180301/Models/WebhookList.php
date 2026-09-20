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
 * Webhook configuration list
 *
 * @method integer getWebhookId() Obtain <p>Callback unique ID</p>
 * @method void setWebhookId(integer $WebhookId) Set <p>Callback unique ID</p>
 * @method string getWebhookName() Obtain <p>Callback URL name</p>
 * @method void setWebhookName(string $WebhookName) Set <p>Callback URL name</p>
 * @method string getScene() Obtain <p>Callback enumeration scenario.</p>
 * @method void setScene(string $Scene) Set <p>Callback enumeration scenario.</p>
 * @method string getWebhookURL() Obtain <p>Callback URL, must use HTTPS</p>
 * @method void setWebhookURL(string $WebhookURL) Set <p>Callback URL, must use HTTPS</p>
 * @method string getAddTime() Obtain <p>Addition Time</p><p>Parameter format: Format example: 2026-09-09 14:33:41</p>
 * @method void setAddTime(string $AddTime) Set <p>Addition Time</p><p>Parameter format: Format example: 2026-09-09 14:33:41</p>
 * @method string getModTime() Obtain <p>Update time</p><p>Parameter format: Format example: 2026-09-09 14:33:41</p>
 * @method void setModTime(string $ModTime) Set <p>Update time</p><p>Parameter format: Format example: 2026-09-09 14:33:41</p>
 * @method string getSignatureKey() Obtain <p>Callback request key</p>
 * @method void setSignatureKey(string $SignatureKey) Set <p>Callback request key</p>
 * @method boolean getHasSignatureKey() Obtain <p>Existence of callback API key</p>
 * @method void setHasSignatureKey(boolean $HasSignatureKey) Set <p>Existence of callback API key</p>
 */
class WebhookList extends AbstractModel
{
    /**
     * @var integer <p>Callback unique ID</p>
     */
    public $WebhookId;

    /**
     * @var string <p>Callback URL name</p>
     */
    public $WebhookName;

    /**
     * @var string <p>Callback enumeration scenario.</p>
     */
    public $Scene;

    /**
     * @var string <p>Callback URL, must use HTTPS</p>
     */
    public $WebhookURL;

    /**
     * @var string <p>Addition Time</p><p>Parameter format: Format example: 2026-09-09 14:33:41</p>
     */
    public $AddTime;

    /**
     * @var string <p>Update time</p><p>Parameter format: Format example: 2026-09-09 14:33:41</p>
     */
    public $ModTime;

    /**
     * @var string <p>Callback request key</p>
     */
    public $SignatureKey;

    /**
     * @var boolean <p>Existence of callback API key</p>
     */
    public $HasSignatureKey;

    /**
     * @param integer $WebhookId <p>Callback unique ID</p>
     * @param string $WebhookName <p>Callback URL name</p>
     * @param string $Scene <p>Callback enumeration scenario.</p>
     * @param string $WebhookURL <p>Callback URL, must use HTTPS</p>
     * @param string $AddTime <p>Addition Time</p><p>Parameter format: Format example: 2026-09-09 14:33:41</p>
     * @param string $ModTime <p>Update time</p><p>Parameter format: Format example: 2026-09-09 14:33:41</p>
     * @param string $SignatureKey <p>Callback request key</p>
     * @param boolean $HasSignatureKey <p>Existence of callback API key</p>
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

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("WebhookURL",$param) and $param["WebhookURL"] !== null) {
            $this->WebhookURL = $param["WebhookURL"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("SignatureKey",$param) and $param["SignatureKey"] !== null) {
            $this->SignatureKey = $param["SignatureKey"];
        }

        if (array_key_exists("HasSignatureKey",$param) and $param["HasSignatureKey"] !== null) {
            $this->HasSignatureKey = $param["HasSignatureKey"];
        }
    }
}
