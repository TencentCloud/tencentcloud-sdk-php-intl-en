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
 * Metadata Pod label structure.
 *
 * @method integer getType() Obtain Specify the tag type.

-0: ALL Pod labels, invalid field Keys
-Specify the Pod label. The Keys field cannot be empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(integer $Type) Set Specify the tag type.

-0: ALL Pod labels, invalid field Keys
-Specify the Pod label. The Keys field cannot be empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getKeys() Obtain The key of the metadata Pod tag. A valid tag key has two parts: an optional prefix and a name, separated by a slash (/). The name part is necessary and must be no more than 63 characters, starting and ending with alphanumeric characters ([a-z0-9A-Z]), with hyphens (-), underscores (_), dots (.), and alphanumerics in the middle. The prefix is optional. If specified, the prefix must be a DNS subdomain: a series of DNS labels separated by dots (.), with a total length not exceeding 253 characters, followed by a slash (/).

-Format of prefix: `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-name format `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
-key must be unique
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeys(array $Keys) Set The key of the metadata Pod tag. A valid tag key has two parts: an optional prefix and a name, separated by a slash (/). The name part is necessary and must be no more than 63 characters, starting and ending with alphanumeric characters ([a-z0-9A-Z]), with hyphens (-), underscores (_), dots (.), and alphanumerics in the middle. The prefix is optional. If specified, the prefix must be a DNS subdomain: a series of DNS labels separated by dots (.), with a total length not exceeding 253 characters, followed by a slash (/).

-Format of prefix: `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-name format `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
-key must be unique
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AppointLabel extends AbstractModel
{
    /**
     * @var integer Specify the tag type.

-0: ALL Pod labels, invalid field Keys
-Specify the Pod label. The Keys field cannot be empty.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var array The key of the metadata Pod tag. A valid tag key has two parts: an optional prefix and a name, separated by a slash (/). The name part is necessary and must be no more than 63 characters, starting and ending with alphanumeric characters ([a-z0-9A-Z]), with hyphens (-), underscores (_), dots (.), and alphanumerics in the middle. The prefix is optional. If specified, the prefix must be a DNS subdomain: a series of DNS labels separated by dots (.), with a total length not exceeding 253 characters, followed by a slash (/).

-Format of prefix: `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-name format `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
-key must be unique
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Keys;

    /**
     * @param integer $Type Specify the tag type.

-0: ALL Pod labels, invalid field Keys
-Specify the Pod label. The Keys field cannot be empty.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Keys The key of the metadata Pod tag. A valid tag key has two parts: an optional prefix and a name, separated by a slash (/). The name part is necessary and must be no more than 63 characters, starting and ending with alphanumeric characters ([a-z0-9A-Z]), with hyphens (-), underscores (_), dots (.), and alphanumerics in the middle. The prefix is optional. If specified, the prefix must be a DNS subdomain: a series of DNS labels separated by dots (.), with a total length not exceeding 253 characters, followed by a slash (/).

-Format of prefix: `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-name format `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
-key must be unique
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }
    }
}
