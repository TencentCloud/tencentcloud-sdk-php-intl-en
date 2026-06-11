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
 * Alarm channel callback configuration information.
 *
 * @method string getWebCallbackId() Obtain Alarm channel callback configuration ID.
 * @method void setWebCallbackId(string $WebCallbackId) Set Alarm channel callback configuration ID.
 * @method string getName() Obtain Alarm channel callback configuration name.
 * @method void setName(string $Name) Set Alarm channel callback configuration name.
 * @method string getType() Obtain Channel type

WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback;
 * @method void setType(string $Type) Set Channel type

WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback;
 * @method string getWebhook() Obtain Callback URL.
 * @method void setWebhook(string $Webhook) Set Callback URL.
 * @method string getMethod() Obtain Request method.
 * @method void setMethod(string $Method) Set Request method.
 * @method string getKey() Obtain Key information.
 * @method void setKey(string $Key) Set Key information.
 * @method integer getUin() Obtain Root account.
 * @method void setUin(integer $Uin) Set Root account.
 * @method integer getSubUin() Obtain Sub-account.
 * @method void setSubUin(integer $SubUin) Set Sub-account.
 * @method integer getCreateTime() Obtain Creation time. A timestamp in seconds.
 * @method void setCreateTime(integer $CreateTime) Set Creation time. A timestamp in seconds.
 * @method integer getUpdateTime() Obtain Update time. A timestamp in seconds.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time. A timestamp in seconds.
 */
class WebCallbackInfo extends AbstractModel
{
    /**
     * @var string Alarm channel callback configuration ID.
     */
    public $WebCallbackId;

    /**
     * @var string Alarm channel callback configuration name.
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
     */
    public $Method;

    /**
     * @var string Key information.
     */
    public $Key;

    /**
     * @var integer Root account.
     */
    public $Uin;

    /**
     * @var integer Sub-account.
     */
    public $SubUin;

    /**
     * @var integer Creation time. A timestamp in seconds.
     */
    public $CreateTime;

    /**
     * @var integer Update time. A timestamp in seconds.
     */
    public $UpdateTime;

    /**
     * @param string $WebCallbackId Alarm channel callback configuration ID.
     * @param string $Name Alarm channel callback configuration name.
     * @param string $Type Channel type

WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback;
     * @param string $Webhook Callback URL.
     * @param string $Method Request method.
     * @param string $Key Key information.
     * @param integer $Uin Root account.
     * @param integer $SubUin Sub-account.
     * @param integer $CreateTime Creation time. A timestamp in seconds.
     * @param integer $UpdateTime Update time. A timestamp in seconds.
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

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
