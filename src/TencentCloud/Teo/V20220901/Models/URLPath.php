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
 * Path configuration parameter for access URL redirection.
 *
 * @method string getAction() Obtain Execution action. Valid values:
<li>follow: follow request;</li>
<li>custom: Custom;</li>
<li>regex: regular expression matching.</li>
 * @method void setAction(string $Action) Set Execution action. Valid values:
<li>follow: follow request;</li>
<li>custom: Custom;</li>
<li>regex: regular expression matching.</li>
 * @method string getRegex() Obtain Regular expression for matching, with a length range of 1–1024.<br>Note: This field is required when Action is regex. When Action is follow or custom, no need to specify this field, and it does not take effect if specified.
 * @method void setRegex(string $Regex) Set Regular expression for matching, with a length range of 1–1024.<br>Note: This field is required when Action is regex. When Action is follow or custom, no need to specify this field, and it does not take effect if specified.
 * @method string getValue() Obtain Target URL for redirection. Length range: 1–1024.<br>Note: This field is required when Action is regex or custom. When Action is follow, no need to specify this field, and it does not take effect if specified.
 * @method void setValue(string $Value) Set Target URL for redirection. Length range: 1–1024.<br>Note: This field is required when Action is regex or custom. When Action is follow, no need to specify this field, and it does not take effect if specified.
 */
class URLPath extends AbstractModel
{
    /**
     * @var string Execution action. Valid values:
<li>follow: follow request;</li>
<li>custom: Custom;</li>
<li>regex: regular expression matching.</li>
     */
    public $Action;

    /**
     * @var string Regular expression for matching, with a length range of 1–1024.<br>Note: This field is required when Action is regex. When Action is follow or custom, no need to specify this field, and it does not take effect if specified.
     */
    public $Regex;

    /**
     * @var string Target URL for redirection. Length range: 1–1024.<br>Note: This field is required when Action is regex or custom. When Action is follow, no need to specify this field, and it does not take effect if specified.
     */
    public $Value;

    /**
     * @param string $Action Execution action. Valid values:
<li>follow: follow request;</li>
<li>custom: Custom;</li>
<li>regex: regular expression matching.</li>
     * @param string $Regex Regular expression for matching, with a length range of 1–1024.<br>Note: This field is required when Action is regex. When Action is follow or custom, no need to specify this field, and it does not take effect if specified.
     * @param string $Value Target URL for redirection. Length range: 1–1024.<br>Note: This field is required when Action is regex or custom. When Action is follow, no need to specify this field, and it does not take effect if specified.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
