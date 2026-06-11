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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multilingual information
 *
 * @method string getLang() Obtain <p>Language.</p>
 * @method void setLang(string $Lang) Set <p>Language.</p>
 * @method string getValue() Obtain <p>Value in the corresponding language.</p>
 * @method void setValue(string $Value) Set <p>Value in the corresponding language.</p>
 */
class I18nItem extends AbstractModel
{
    /**
     * @var string <p>Language.</p>
     */
    public $Lang;

    /**
     * @var string <p>Value in the corresponding language.</p>
     */
    public $Value;

    /**
     * @param string $Lang <p>Language.</p>
     * @param string $Value <p>Value in the corresponding language.</p>
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
        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
