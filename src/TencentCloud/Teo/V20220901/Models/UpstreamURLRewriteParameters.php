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
 * Origin URL rewrite configuration parameters.
 *
 * @method string getType() Obtain Origin-Pull URL rewrite type. valid values: Path.
 * @method void setType(string $Type) Set Origin-Pull URL rewrite type. valid values: Path.
 * @method string getAction() Obtain Origin-Pull URL rewrite action. valid values:.
<li><b>replace</b>: replace the full Path. used to replace the complete request URL Path with the specified Path.
</li>
<li><b>addPrefix</b>: add Path prefix. used to add specified Path prefix to request URL Path.</li>.
</li>
<li><b>rmvPrefix</b>: specifies the removal of Path prefix. used to remove the specified Path prefix from the request URL Path.
</li>
<li><b>regexReplace</b>: refers to regular expression replacement of the full path. used for matching and replacing the full path via Google RE2 regular expressions.
</li>
 * @method void setAction(string $Action) Set Origin-Pull URL rewrite action. valid values:.
<li><b>replace</b>: replace the full Path. used to replace the complete request URL Path with the specified Path.
</li>
<li><b>addPrefix</b>: add Path prefix. used to add specified Path prefix to request URL Path.</li>.
</li>
<li><b>rmvPrefix</b>: specifies the removal of Path prefix. used to remove the specified Path prefix from the request URL Path.
</li>
<li><b>regexReplace</b>: refers to regular expression replacement of the full path. used for matching and replacing the full path via Google RE2 regular expressions.
</li>
 * @method string getValue() Obtain Origin-Pull URL rewrite value. should meet URL Path standard and ensure the rewritten Path starts with / to prevent the Host of the origin-pull URL from being modified, with a length range of 1–1024. when Action is addPrefix, it cannot end with /. when Action is rmvPrefix, * cannot exist. when Action is regexReplace, $NUM can be used to refer to regular expression capture groups, where NUM represents the group number, such as $1, and supports up to $9.
 * @method void setValue(string $Value) Set Origin-Pull URL rewrite value. should meet URL Path standard and ensure the rewritten Path starts with / to prevent the Host of the origin-pull URL from being modified, with a length range of 1–1024. when Action is addPrefix, it cannot end with /. when Action is rmvPrefix, * cannot exist. when Action is regexReplace, $NUM can be used to refer to regular expression capture groups, where NUM represents the group number, such as $1, and supports up to $9.
 * @method string getRegex() Obtain Origin-Pull URL rewrite used for regex replacement to match the full path regular expression. should meet Google RE2 standard with length range 1–1024. this field is required when Action is regexReplace, otherwise not required.
 * @method void setRegex(string $Regex) Set Origin-Pull URL rewrite used for regex replacement to match the full path regular expression. should meet Google RE2 standard with length range 1–1024. this field is required when Action is regexReplace, otherwise not required.
 */
class UpstreamURLRewriteParameters extends AbstractModel
{
    /**
     * @var string Origin-Pull URL rewrite type. valid values: Path.
     */
    public $Type;

    /**
     * @var string Origin-Pull URL rewrite action. valid values:.
<li><b>replace</b>: replace the full Path. used to replace the complete request URL Path with the specified Path.
</li>
<li><b>addPrefix</b>: add Path prefix. used to add specified Path prefix to request URL Path.</li>.
</li>
<li><b>rmvPrefix</b>: specifies the removal of Path prefix. used to remove the specified Path prefix from the request URL Path.
</li>
<li><b>regexReplace</b>: refers to regular expression replacement of the full path. used for matching and replacing the full path via Google RE2 regular expressions.
</li>
     */
    public $Action;

    /**
     * @var string Origin-Pull URL rewrite value. should meet URL Path standard and ensure the rewritten Path starts with / to prevent the Host of the origin-pull URL from being modified, with a length range of 1–1024. when Action is addPrefix, it cannot end with /. when Action is rmvPrefix, * cannot exist. when Action is regexReplace, $NUM can be used to refer to regular expression capture groups, where NUM represents the group number, such as $1, and supports up to $9.
     */
    public $Value;

    /**
     * @var string Origin-Pull URL rewrite used for regex replacement to match the full path regular expression. should meet Google RE2 standard with length range 1–1024. this field is required when Action is regexReplace, otherwise not required.
     */
    public $Regex;

    /**
     * @param string $Type Origin-Pull URL rewrite type. valid values: Path.
     * @param string $Action Origin-Pull URL rewrite action. valid values:.
<li><b>replace</b>: replace the full Path. used to replace the complete request URL Path with the specified Path.
</li>
<li><b>addPrefix</b>: add Path prefix. used to add specified Path prefix to request URL Path.</li>.
</li>
<li><b>rmvPrefix</b>: specifies the removal of Path prefix. used to remove the specified Path prefix from the request URL Path.
</li>
<li><b>regexReplace</b>: refers to regular expression replacement of the full path. used for matching and replacing the full path via Google RE2 regular expressions.
</li>
     * @param string $Value Origin-Pull URL rewrite value. should meet URL Path standard and ensure the rewritten Path starts with / to prevent the Host of the origin-pull URL from being modified, with a length range of 1–1024. when Action is addPrefix, it cannot end with /. when Action is rmvPrefix, * cannot exist. when Action is regexReplace, $NUM can be used to refer to regular expression capture groups, where NUM represents the group number, such as $1, and supports up to $9.
     * @param string $Regex Origin-Pull URL rewrite used for regex replacement to match the full path regular expression. should meet Google RE2 standard with length range 1–1024. this field is required when Action is regexReplace, otherwise not required.
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
