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
 * Label structure.
 *
 * @method string getKey() Obtain The key of the tag. A valid tag key has two parts: an optional prefix and a name, separated by a slash (/). The name part is necessary and must be no more than 63 characters, starting and ending with alphanumeric characters ([a-z0-9A-Z]), with hyphens (-), underscores (_), dots (.), and alphanumerics in the middle. The prefix is optional. If specified, the prefix must be a DNS subdomain: a series of DNS labels separated by dots (.), with a total length not exceeding 253 characters, followed by a slash (/).

-Format of prefix `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-Format of `name`: `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
-key must be unique
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set The key of the tag. A valid tag key has two parts: an optional prefix and a name, separated by a slash (/). The name part is necessary and must be no more than 63 characters, starting and ending with alphanumeric characters ([a-z0-9A-Z]), with hyphens (-), underscores (_), dots (.), and alphanumerics in the middle. The prefix is optional. If specified, the prefix must be a DNS subdomain: a series of DNS labels separated by dots (.), with a total length not exceeding 253 characters, followed by a slash (/).

-Format of prefix `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-Format of `name`: `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
-key must be unique
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperate() Obtain The comparison operator between tag key values. Different business scenarios support different comparison operators. See the API business description for supported ones.
such as `in`, `notin`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperate(string $Operate) Set The comparison operator between tag key values. Different business scenarios support different comparison operators. See the API business description for supported ones.
such as `in`, `notin`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getValues() Obtain Tag value.
-Supports up to 63 characters.
-Format: `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValues(array $Values) Set Tag value.
-Supports up to 63 characters.
-Format: `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Label extends AbstractModel
{
    /**
     * @var string The key of the tag. A valid tag key has two parts: an optional prefix and a name, separated by a slash (/). The name part is necessary and must be no more than 63 characters, starting and ending with alphanumeric characters ([a-z0-9A-Z]), with hyphens (-), underscores (_), dots (.), and alphanumerics in the middle. The prefix is optional. If specified, the prefix must be a DNS subdomain: a series of DNS labels separated by dots (.), with a total length not exceeding 253 characters, followed by a slash (/).

-Format of prefix `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-Format of `name`: `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
-key must be unique
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var string The comparison operator between tag key values. Different business scenarios support different comparison operators. See the API business description for supported ones.
such as `in`, `notin`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Operate;

    /**
     * @var array Tag value.
-Supports up to 63 characters.
-Format: `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Values;

    /**
     * @param string $Key The key of the tag. A valid tag key has two parts: an optional prefix and a name, separated by a slash (/). The name part is necessary and must be no more than 63 characters, starting and ending with alphanumeric characters ([a-z0-9A-Z]), with hyphens (-), underscores (_), dots (.), and alphanumerics in the middle. The prefix is optional. If specified, the prefix must be a DNS subdomain: a series of DNS labels separated by dots (.), with a total length not exceeding 253 characters, followed by a slash (/).

-Format of prefix `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-Format of `name`: `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
-key must be unique
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Operate The comparison operator between tag key values. Different business scenarios support different comparison operators. See the API business description for supported ones.
such as `in`, `notin`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Values Tag value.
-Supports up to 63 characters.
-Format: `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
