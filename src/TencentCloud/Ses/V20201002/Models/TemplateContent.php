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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Template content, which must include at least one of TEXT and HTML. A combination of TEXT and HTML is recommended.
 *
 * @method string getHtml() Obtain HTML code after base64 encoding.
 * @method void setHtml(string $Html) Set HTML code after base64 encoding.
 * @method string getText() Obtain Text content after base64 encoding.
 * @method void setText(string $Text) Set Text content after base64 encoding.
 */
class TemplateContent extends AbstractModel
{
    /**
     * @var string HTML code after base64 encoding.
     */
    public $Html;

    /**
     * @var string Text content after base64 encoding.
     */
    public $Text;

    /**
     * @param string $Html HTML code after base64 encoding.
     * @param string $Text Text content after base64 encoding.
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
