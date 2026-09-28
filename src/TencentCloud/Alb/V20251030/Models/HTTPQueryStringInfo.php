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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP query string information
 *
 * @method string getKey() Obtain Key of the query string. Length: 1–16 characters. Supports printable characters. Does not support spaces or #[]{}\|<>&.
Supports * as a multi-character wildcard and ? as a single-character wildcard.


 * @method void setKey(string $Key) Set Key of the query string. Length: 1–16 characters. Supports printable characters. Does not support spaces or #[]{}\|<>&.
Supports * as a multi-character wildcard and ? as a single-character wildcard.


 * @method string getValue() Obtain Value of the query string. Length: 1–128 characters. Supports printable characters. Does not support spaces or #[]{}\|<>&.
Supports * as a multi-character wildcard and ? as a single-character wildcard.
 * @method void setValue(string $Value) Set Value of the query string. Length: 1–128 characters. Supports printable characters. Does not support spaces or #[]{}\|<>&.
Supports * as a multi-character wildcard and ? as a single-character wildcard.
 */
class HTTPQueryStringInfo extends AbstractModel
{
    /**
     * @var string Key of the query string. Length: 1–16 characters. Supports printable characters. Does not support spaces or #[]{}\|<>&.
Supports * as a multi-character wildcard and ? as a single-character wildcard.


     */
    public $Key;

    /**
     * @var string Value of the query string. Length: 1–128 characters. Supports printable characters. Does not support spaces or #[]{}\|<>&.
Supports * as a multi-character wildcard and ? as a single-character wildcard.
     */
    public $Value;

    /**
     * @param string $Key Key of the query string. Length: 1–16 characters. Supports printable characters. Does not support spaces or #[]{}\|<>&.
Supports * as a multi-character wildcard and ? as a single-character wildcard.


     * @param string $Value Value of the query string. Length: 1–128 characters. Supports printable characters. Does not support spaces or #[]{}\|<>&.
Supports * as a multi-character wildcard and ? as a single-character wildcard.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
