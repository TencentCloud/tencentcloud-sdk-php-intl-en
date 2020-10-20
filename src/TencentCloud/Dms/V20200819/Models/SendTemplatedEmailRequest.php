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
namespace TencentCloud\Dms\V20200819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendTemplatedEmail request structure.
 *
 * @method string getFromAddress() Obtain Sender address.
 * @method void setFromAddress(string $FromAddress) Set Sender address.
 * @method string getToAddress() Obtain Recipient address. Up to 100 recipient addresses are supported. Multiple addresses should be separated by semicolons (;).
 * @method void setToAddress(string $ToAddress) Set Recipient address. Up to 100 recipient addresses are supported. Multiple addresses should be separated by semicolons (;).
 * @method string getTemplateName() Obtain The name of the template created in advance.
 * @method void setTemplateName(string $TemplateName) Set The name of the template created in advance.
 * @method string getTemplateValue() Obtain Template variable value, which is a JSON string.
 * @method void setTemplateValue(string $TemplateValue) Set Template variable value, which is a JSON string.
 * @method string getFromName() Obtain Sender name.
 * @method void setFromName(string $FromName) Set Sender name.
 * @method string getReplyAddress() Obtain Reply-to address.
 * @method void setReplyAddress(string $ReplyAddress) Set Reply-to address.
 */
class SendTemplatedEmailRequest extends AbstractModel
{
    /**
     * @var string Sender address.
     */
    public $FromAddress;

    /**
     * @var string Recipient address. Up to 100 recipient addresses are supported. Multiple addresses should be separated by semicolons (;).
     */
    public $ToAddress;

    /**
     * @var string The name of the template created in advance.
     */
    public $TemplateName;

    /**
     * @var string Template variable value, which is a JSON string.
     */
    public $TemplateValue;

    /**
     * @var string Sender name.
     */
    public $FromName;

    /**
     * @var string Reply-to address.
     */
    public $ReplyAddress;

    /**
     * @param string $FromAddress Sender address.
     * @param string $ToAddress Recipient address. Up to 100 recipient addresses are supported. Multiple addresses should be separated by semicolons (;).
     * @param string $TemplateName The name of the template created in advance.
     * @param string $TemplateValue Template variable value, which is a JSON string.
     * @param string $FromName Sender name.
     * @param string $ReplyAddress Reply-to address.
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
        if (array_key_exists("FromAddress",$param) and $param["FromAddress"] !== null) {
            $this->FromAddress = $param["FromAddress"];
        }

        if (array_key_exists("ToAddress",$param) and $param["ToAddress"] !== null) {
            $this->ToAddress = $param["ToAddress"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateValue",$param) and $param["TemplateValue"] !== null) {
            $this->TemplateValue = $param["TemplateValue"];
        }

        if (array_key_exists("FromName",$param) and $param["FromName"] !== null) {
            $this->FromName = $param["FromName"];
        }

        if (array_key_exists("ReplyAddress",$param) and $param["ReplyAddress"] !== null) {
            $this->ReplyAddress = $param["ReplyAddress"];
        }
    }
}
