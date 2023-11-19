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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Referer blacklist/whitelist configuration rules, which is effective for specific resources.
 *
 * @method string getRuleType() Obtain Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
 * @method void setRuleType(string $RuleType) Set Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
 * @method array getRulePaths() Obtain Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
 * @method void setRulePaths(array $RulePaths) Set Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
 * @method string getRefererType() Obtain rferer configuration type, value: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
 * @method void setRefererType(string $RefererType) Set rferer configuration type, value: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
 * @method array getReferers() Obtain Referer content list
 * @method void setReferers(array $Referers) Set Referer content list
 * @method boolean getAllowEmpty() Obtain Whether to allow empty referers: When the anti-hotlinking type is whitelist, true means that empty referers are allowed, false means that empty referers are not allowed; when the anti-hotlinking type is blacklist, true means that empty referers are rejected, and false means that empty referers are not rejected.
 * @method void setAllowEmpty(boolean $AllowEmpty) Set Whether to allow empty referers: When the anti-hotlinking type is whitelist, true means that empty referers are allowed, false means that empty referers are not allowed; when the anti-hotlinking type is blacklist, true means that empty referers are rejected, and false means that empty referers are not rejected.
 */
class RefererRule extends AbstractModel
{
    /**
     * @var string Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
     */
    public $RuleType;

    /**
     * @var array Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
     */
    public $RulePaths;

    /**
     * @var string rferer configuration type, value: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
     */
    public $RefererType;

    /**
     * @var array Referer content list
     */
    public $Referers;

    /**
     * @var boolean Whether to allow empty referers: When the anti-hotlinking type is whitelist, true means that empty referers are allowed, false means that empty referers are not allowed; when the anti-hotlinking type is blacklist, true means that empty referers are rejected, and false means that empty referers are not rejected.
     */
    public $AllowEmpty;

    /**
     * @param string $RuleType Rule type: <li>all: valid for all files;</li> <li>file: valid for specified file suffix;</li> <li>directory: valid for specified path;</li> <li>path: specified absolute The path takes effect. </li>
     * @param array $RulePaths Matching content under the corresponding type of RuleType: <li>Fill in * when all is used;</li> <li>Fill in suffix name when file is used, such as jpg, txt;</li> <li>Fill in path when directory is used, such as /xxx/ test/;</li> <li>Fill in the absolute path when path is specified, such as /xxx/test.html. </li>
     * @param string $RefererType rferer configuration type, value: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
     * @param array $Referers Referer content list
     * @param boolean $AllowEmpty Whether to allow empty referers: When the anti-hotlinking type is whitelist, true means that empty referers are allowed, false means that empty referers are not allowed; when the anti-hotlinking type is blacklist, true means that empty referers are rejected, and false means that empty referers are not rejected.
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
