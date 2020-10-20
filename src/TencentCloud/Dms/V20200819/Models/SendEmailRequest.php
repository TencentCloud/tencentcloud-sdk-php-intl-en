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
 * SendEmail request structure.
 *
 * @method string getFromAddress() Obtain Sender
 * @method void setFromAddress(string $FromAddress) Set Sender
 * @method string getToAddress() Obtain Recipient
 * @method void setToAddress(string $ToAddress) Set Recipient
 * @method string getSubject() Obtain Email summary
 * @method void setSubject(string $Subject) Set Email summary
 * @method string getFromName() Obtain Sender name
 * @method void setFromName(string $FromName) Set Sender name
 * @method string getReplyAddress() Obtain Reply-to address
 * @method void setReplyAddress(string $ReplyAddress) Set Reply-to address
 * @method string getHtmlContent() Obtain The body of an HTML email
 * @method void setHtmlContent(string $HtmlContent) Set The body of an HTML email
 * @method string getTextContent() Obtain The body of a plain-text email
 * @method void setTextContent(string $TextContent) Set The body of a plain-text email
 */
class SendEmailRequest extends AbstractModel
{
    /**
     * @var string Sender
     */
    public $FromAddress;

    /**
     * @var string Recipient
     */
    public $ToAddress;

    /**
     * @var string Email summary
     */
    public $Subject;

    /**
     * @var string Sender name
     */
    public $FromName;

    /**
     * @var string Reply-to address
     */
    public $ReplyAddress;

    /**
     * @var string The body of an HTML email
     */
    public $HtmlContent;

    /**
     * @var string The body of a plain-text email
     */
    public $TextContent;

    /**
     * @param string $FromAddress Sender
     * @param string $ToAddress Recipient
     * @param string $Subject Email summary
     * @param string $FromName Sender name
     * @param string $ReplyAddress Reply-to address
     * @param string $HtmlContent The body of an HTML email
     * @param string $TextContent The body of a plain-text email
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

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("FromName",$param) and $param["FromName"] !== null) {
            $this->FromName = $param["FromName"];
        }

        if (array_key_exists("ReplyAddress",$param) and $param["ReplyAddress"] !== null) {
            $this->ReplyAddress = $param["ReplyAddress"];
        }

        if (array_key_exists("HtmlContent",$param) and $param["HtmlContent"] !== null) {
            $this->HtmlContent = $param["HtmlContent"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }
    }
}
