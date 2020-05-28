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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Function version with match rule
 *
 * @method string getVersion() Obtain Function version name
 * @method void setVersion(string $Version) Set Function version name
 * @method string getKey() Obtain Matching rule key. When the API is called, pass in the `key` to route the request to the specified version based on the matching rule
Header method:
Enter "invoke.headers.User" for `key` and pass in `RoutingKey:{"User":"value"}` when invoking a function through `invoke` for invocation based on rule matching
 * @method void setKey(string $Key) Set Matching rule key. When the API is called, pass in the `key` to route the request to the specified version based on the matching rule
Header method:
Enter "invoke.headers.User" for `key` and pass in `RoutingKey:{"User":"value"}` when invoking a function through `invoke` for invocation based on rule matching
 * @method string getMethod() Obtain Match method. Valid values:
range: range match
exact: exact string match
 * @method void setMethod(string $Method) Set Match method. Valid values:
range: range match
exact: exact string match
 * @method string getExpression() Obtain Rule requirements for range match:
It should be described in an open or closed range, i.e., `(a,b)` or `[a,b]`, where both a and b are integers
Rule requirements for exact match:
Exact string match
 * @method void setExpression(string $Expression) Set Rule requirements for range match:
It should be described in an open or closed range, i.e., `(a,b)` or `[a,b]`, where both a and b are integers
Rule requirements for exact match:
Exact string match
 */
class VersionMatch extends AbstractModel
{
    /**
     * @var string Function version name
     */
    public $Version;

    /**
     * @var string Matching rule key. When the API is called, pass in the `key` to route the request to the specified version based on the matching rule
Header method:
Enter "invoke.headers.User" for `key` and pass in `RoutingKey:{"User":"value"}` when invoking a function through `invoke` for invocation based on rule matching
     */
    public $Key;

    /**
     * @var string Match method. Valid values:
range: range match
exact: exact string match
     */
    public $Method;

    /**
     * @var string Rule requirements for range match:
It should be described in an open or closed range, i.e., `(a,b)` or `[a,b]`, where both a and b are integers
Rule requirements for exact match:
Exact string match
     */
    public $Expression;

    /**
     * @param string $Version Function version name
     * @param string $Key Matching rule key. When the API is called, pass in the `key` to route the request to the specified version based on the matching rule
Header method:
Enter "invoke.headers.User" for `key` and pass in `RoutingKey:{"User":"value"}` when invoking a function through `invoke` for invocation based on rule matching
     * @param string $Method Match method. Valid values:
range: range match
exact: exact string match
     * @param string $Expression Rule requirements for range match:
It should be described in an open or closed range, i.e., `(a,b)` or `[a,b]`, where both a and b are integers
Rule requirements for exact match:
Exact string match
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Expression",$param) and $param["Expression"] !== null) {
            $this->Expression = $param["Expression"];
        }
    }
}
