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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Referer blocklist/allowlist rule configuration
 *
 * @method string getRuleType() Obtain Rule type:
<li>all: take effect for all files;</li>
<li>file: The specified file suffix takes effect;</li>
<li>directory: The specified path takes effect;</li>
<li>path: The absolute path takes effect.</li>
 * @method void setRuleType(string $RuleType) Set Rule type:
<li>all: take effect for all files;</li>
<li>file: The specified file suffix takes effect;</li>
<li>directory: The specified path takes effect;</li>
<li>path: The absolute path takes effect.</li>
 * @method array getRulePaths() Obtain Matching content under the corresponding type of RuleType:
<li>Fill with * when set to all;</li>
<li>For file, fill in the extension, such as jpg or txt;</li>
<li>For directory, fill in the path, such as /xxx/test/;</li>
<li>For path, fill in the absolute path, such as /xxx/test.html.</li>
 * @method void setRulePaths(array $RulePaths) Set Matching content under the corresponding type of RuleType:
<li>Fill with * when set to all;</li>
<li>For file, fill in the extension, such as jpg or txt;</li>
<li>For directory, fill in the path, such as /xxx/test/;</li>
<li>For path, fill in the absolute path, such as /xxx/test.html.</li>
 * @method string getRefererType() Obtain referer configuration type. Value:
<li>whitelist: allowlist;</li>
<li>blacklist: blocklist.</li>
 * @method void setRefererType(string $RefererType) Set referer configuration type. Value:
<li>whitelist: allowlist;</li>
<li>blacklist: blocklist.</li>
 * @method array getReferers() Obtain referer list.
 * @method void setReferers(array $Referers) Set referer list.
 * @method boolean getAllowEmpty() Obtain Whether to allow empty referer:
When the anti-hotlinking type is allowlist, true indicates that empty referer is allowed, and false indicates that empty referer is not allowed;
If the anti-hotlinking type is blocklist, true indicates to deny empty referers, and false indicates not to deny empty referers.
 * @method void setAllowEmpty(boolean $AllowEmpty) Set Whether to allow empty referer:
When the anti-hotlinking type is allowlist, true indicates that empty referer is allowed, and false indicates that empty referer is not allowed;
If the anti-hotlinking type is blocklist, true indicates to deny empty referers, and false indicates not to deny empty referers.
 */
class RefererRule extends AbstractModel
{
    /**
     * @var string Rule type:
<li>all: take effect for all files;</li>
<li>file: The specified file suffix takes effect;</li>
<li>directory: The specified path takes effect;</li>
<li>path: The absolute path takes effect.</li>
     */
    public $RuleType;

    /**
     * @var array Matching content under the corresponding type of RuleType:
<li>Fill with * when set to all;</li>
<li>For file, fill in the extension, such as jpg or txt;</li>
<li>For directory, fill in the path, such as /xxx/test/;</li>
<li>For path, fill in the absolute path, such as /xxx/test.html.</li>
     */
    public $RulePaths;

    /**
     * @var string referer configuration type. Value:
<li>whitelist: allowlist;</li>
<li>blacklist: blocklist.</li>
     */
    public $RefererType;

    /**
     * @var array referer list.
     */
    public $Referers;

    /**
     * @var boolean Whether to allow empty referer:
When the anti-hotlinking type is allowlist, true indicates that empty referer is allowed, and false indicates that empty referer is not allowed;
If the anti-hotlinking type is blocklist, true indicates to deny empty referers, and false indicates not to deny empty referers.
     */
    public $AllowEmpty;

    /**
     * @param string $RuleType Rule type:
<li>all: take effect for all files;</li>
<li>file: The specified file suffix takes effect;</li>
<li>directory: The specified path takes effect;</li>
<li>path: The absolute path takes effect.</li>
     * @param array $RulePaths Matching content under the corresponding type of RuleType:
<li>Fill with * when set to all;</li>
<li>For file, fill in the extension, such as jpg or txt;</li>
<li>For directory, fill in the path, such as /xxx/test/;</li>
<li>For path, fill in the absolute path, such as /xxx/test.html.</li>
     * @param string $RefererType referer configuration type. Value:
<li>whitelist: allowlist;</li>
<li>blacklist: blocklist.</li>
     * @param array $Referers referer list.
     * @param boolean $AllowEmpty Whether to allow empty referer:
When the anti-hotlinking type is allowlist, true indicates that empty referer is allowed, and false indicates that empty referer is not allowed;
If the anti-hotlinking type is blocklist, true indicates to deny empty referers, and false indicates not to deny empty referers.
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("RefererType",$param) and $param["RefererType"] !== null) {
            $this->RefererType = $param["RefererType"];
        }

        if (array_key_exists("Referers",$param) and $param["Referers"] !== null) {
            $this->Referers = $param["Referers"];
        }

        if (array_key_exists("AllowEmpty",$param) and $param["AllowEmpty"] !== null) {
            $this->AllowEmpty = $param["AllowEmpty"];
        }
    }
}
