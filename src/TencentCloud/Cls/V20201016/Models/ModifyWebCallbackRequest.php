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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebCallback request structure.
 *
 * @method string getWebCallbackId() Obtain Alarm channel callback configuration ID. Obtain the alarm channel callback configuration ID by searching the alarm channel callback configuration list (https://www.tencentcloud.com/document/api/614/115229?from_cn_redirect=1).
 * @method void setWebCallbackId(string $WebCallbackId) Set Alarm channel callback configuration ID. Obtain the alarm channel callback configuration ID by searching the alarm channel callback configuration list (https://www.tencentcloud.com/document/api/614/115229?from_cn_redirect=1).
 * @method string getName() Obtain Alarm channel callback configuration name. Supports a maximum of 255 bytes.
 * @method void setName(string $Name) Set Alarm channel callback configuration name. Supports a maximum of 255 bytes.
 * @method string getType() Obtain Channel type

WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback;
 * @method void setType(string $Type) Set Channel type

WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback;
 * @method string getWebhook() Obtain Callback URL.
 * @method void setWebhook(string $Webhook) Set Callback URL.
 * @method string getMethod() Obtain Request method.

Support POST, PUT.

Note: This parameter is required when Type is set to Http.
 * @method void setMethod(string $Method) Set Request method.

Support POST, PUT.

Note: This parameter is required when Type is set to Http.
 * @method string getKey() Obtain Secret key information. Supports a maximum of 1024 bytes.
 * @method void setKey(string $Key) Set Secret key information. Supports a maximum of 1024 bytes.
 */
class ModifyWebCallbackRequest extends AbstractModel
{
    /**
     * @var string Alarm channel callback configuration ID. Obtain the alarm channel callback configuration ID by searching the alarm channel callback configuration list (https://www.tencentcloud.com/document/api/614/115229?from_cn_redirect=1).
     */
    public $WebCallbackId;

    /**
     * @var string Alarm channel callback configuration name. Supports a maximum of 255 bytes.
     */
    public $Name;

    /**
     * @var string Channel type

WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback;
     */
    public $Type;

    /**
     * @var string Callback URL.
     */
    public $Webhook;

    /**
     * @var string Request method.

Support POST, PUT.

Note: This parameter is required when Type is set to Http.
     */
    public $Method;

    /**
     * @var string Secret key information. Supports a maximum of 1024 bytes.
     */
    public $Key;

    /**
     * @param string $WebCallbackId Alarm channel callback configuration ID. Obtain the alarm channel callback configuration ID by searching the alarm channel callback configuration list (https://www.tencentcloud.com/document/api/614/115229?from_cn_redirect=1).
     * @param string $Name Alarm channel callback configuration name. Supports a maximum of 255 bytes.
     * @param string $Type Channel type

WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback;
     * @param string $Webhook Callback URL.
     * @param string $Method Request method.

Support POST, PUT.

Note: This parameter is required when Type is set to Http.
     * @param string $Key Secret key information. Supports a maximum of 1024 bytes.
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
        if (array_key_exists("WebCallbackId",$param) and $param["WebCallbackId"] !== null) {
            $this->WebCallbackId = $param["WebCallbackId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Webhook",$param) and $param["Webhook"] !== null) {
            $this->Webhook = $param["Webhook"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
