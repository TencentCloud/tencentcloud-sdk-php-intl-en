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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Email content, which can be plain text (TEXT), pure code (HTML), or a combination of TEXT and HTML (recommended).
 *
 * @method string getHtml() Obtain HTML code after base64 encoding. To ensure correct display, this parameter should include all code information and cannot contain external CSS.
 * @method void setHtml(string $Html) Set HTML code after base64 encoding. To ensure correct display, this parameter should include all code information and cannot contain external CSS.
 * @method string getText() Obtain Plain text content after base64 encoding. If HTML is not involved, the plain text will be displayed in the email. Otherwise, this parameter represents the plain text style of the email.
 * @method void setText(string $Text) Set Plain text content after base64 encoding. If HTML is not involved, the plain text will be displayed in the email. Otherwise, this parameter represents the plain text style of the email.
 */
class Simple extends AbstractModel
{
    /**
     * @var string HTML code after base64 encoding. To ensure correct display, this parameter should include all code information and cannot contain external CSS.
     */
    public $Html;

    /**
     * @var string Plain text content after base64 encoding. If HTML is not involved, the plain text will be displayed in the email. Otherwise, this parameter represents the plain text style of the email.
     */
    public $Text;

    /**
     * @param string $Html HTML code after base64 encoding. To ensure correct display, this parameter should include all code information and cannot contain external CSS.
     * @param string $Text Plain text content after base64 encoding. If HTML is not involved, the plain text will be displayed in the email. Otherwise, this parameter represents the plain text style of the email.
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
        if (array_key_exists("Html",$param) and $param["Html"] !== null) {
            $this->Html = $param["Html"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
