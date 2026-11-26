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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin-pull URL rewrite configuration parameters.
 *
 * @method string getType() Obtain Origin-pull URL rewrite type. Only Path is supported.
 * @method void setType(string $Type) Set Origin-pull URL rewrite type. Only Path is supported.
 * @method string getAction() Obtain Origin-pull URL rewrite action. Valid values:
<li><b>replace</b>: Replaces the full Path. It is used to replace the complete request URL Path with the specified Path.</li>
</li>
<li><b>addPrefix</b>: Add a path prefix. It is used to add the specified path prefix to the request URL Path.</li>
</li>
<li><b>rmvPrefix</b>: removes the path prefix. It is used to remove the specified path prefix from the request URL Path.</li>
</li>
<li><b>regexReplace</b>: regular replacement full path. Used to match and replace the full path through Google RE2 regular expressions.</li>
</li>
 * @method void setAction(string $Action) Set Origin-pull URL rewrite action. Valid values:
<li><b>replace</b>: Replaces the full Path. It is used to replace the complete request URL Path with the specified Path.</li>
</li>
<li><b>addPrefix</b>: Add a path prefix. It is used to add the specified path prefix to the request URL Path.</li>
</li>
<li><b>rmvPrefix</b>: removes the path prefix. It is used to remove the specified path prefix from the request URL Path.</li>
</li>
<li><b>regexReplace</b>: regular replacement full path. Used to match and replace the full path through Google RE2 regular expressions.</li>
</li>
 * @method string getValue() Obtain Origin-pull URL rewrite value. It should meet the URL Path specification and ensure the rewritten Path starts with / to prevent the Host of the origin-pull URL from being modified. Length range: 1–1024. When Action is addPrefix, it cannot end with /. When Action is rmvPrefix, * cannot exist. When Action is regexReplace, $NUM can be used to refer to a regular expression capture group, where NUM represents the group number, for example $1, with support up to $9.
 * @method void setValue(string $Value) Set Origin-pull URL rewrite value. It should meet the URL Path specification and ensure the rewritten Path starts with / to prevent the Host of the origin-pull URL from being modified. Length range: 1–1024. When Action is addPrefix, it cannot end with /. When Action is rmvPrefix, * cannot exist. When Action is regexReplace, $NUM can be used to refer to a regular expression capture group, where NUM represents the group number, for example $1, with support up to $9.
 * @method string getRegex() Obtain Origin-pull URL rewrite uses a regex replacement to match the regular expression of the full path. It should meet the Google RE2 specification with a length range of 1–1024. This field is required when Action is regexReplace. Otherwise, no need to specify this field.
 * @method void setRegex(string $Regex) Set Origin-pull URL rewrite uses a regex replacement to match the regular expression of the full path. It should meet the Google RE2 specification with a length range of 1–1024. This field is required when Action is regexReplace. Otherwise, no need to specify this field.
 */
class UpstreamURLRewriteParameters extends AbstractModel
{
    /**
     * @var string Origin-pull URL rewrite type. Only Path is supported.
     */
    public $Type;

    /**
     * @var string Origin-pull URL rewrite action. Valid values:
<li><b>replace</b>: Replaces the full Path. It is used to replace the complete request URL Path with the specified Path.</li>
</li>
<li><b>addPrefix</b>: Add a path prefix. It is used to add the specified path prefix to the request URL Path.</li>
</li>
<li><b>rmvPrefix</b>: removes the path prefix. It is used to remove the specified path prefix from the request URL Path.</li>
</li>
<li><b>regexReplace</b>: regular replacement full path. Used to match and replace the full path through Google RE2 regular expressions.</li>
</li>
     */
    public $Action;

    /**
     * @var string Origin-pull URL rewrite value. It should meet the URL Path specification and ensure the rewritten Path starts with / to prevent the Host of the origin-pull URL from being modified. Length range: 1–1024. When Action is addPrefix, it cannot end with /. When Action is rmvPrefix, * cannot exist. When Action is regexReplace, $NUM can be used to refer to a regular expression capture group, where NUM represents the group number, for example $1, with support up to $9.
     */
    public $Value;

    /**
     * @var string Origin-pull URL rewrite uses a regex replacement to match the regular expression of the full path. It should meet the Google RE2 specification with a length range of 1–1024. This field is required when Action is regexReplace. Otherwise, no need to specify this field.
     */
    public $Regex;

    /**
     * @param string $Type Origin-pull URL rewrite type. Only Path is supported.
     * @param string $Action Origin-pull URL rewrite action. Valid values:
<li><b>replace</b>: Replaces the full Path. It is used to replace the complete request URL Path with the specified Path.</li>
</li>
<li><b>addPrefix</b>: Add a path prefix. It is used to add the specified path prefix to the request URL Path.</li>
</li>
<li><b>rmvPrefix</b>: removes the path prefix. It is used to remove the specified path prefix from the request URL Path.</li>
</li>
<li><b>regexReplace</b>: regular replacement full path. Used to match and replace the full path through Google RE2 regular expressions.</li>
</li>
     * @param string $Value Origin-pull URL rewrite value. It should meet the URL Path specification and ensure the rewritten Path starts with / to prevent the Host of the origin-pull URL from being modified. Length range: 1–1024. When Action is addPrefix, it cannot end with /. When Action is rmvPrefix, * cannot exist. When Action is regexReplace, $NUM can be used to refer to a regular expression capture group, where NUM represents the group number, for example $1, with support up to $9.
     * @param string $Regex Origin-pull URL rewrite uses a regex replacement to match the regular expression of the full path. It should meet the Google RE2 specification with a length range of 1–1024. This field is required when Action is regexReplace. Otherwise, no need to specify this field.
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }
    }
}
