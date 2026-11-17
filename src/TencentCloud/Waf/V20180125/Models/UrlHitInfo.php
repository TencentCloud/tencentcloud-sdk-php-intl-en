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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Malicious URL hit information
 *
 * @method string getUrl() Obtain <p>Hit URL</p>
 * @method void setUrl(string $Url) Set <p>Hit URL</p>
 * @method string getRuleId() Obtain <p>Hit rule ID</p>
 * @method void setRuleId(string $RuleId) Set <p>Hit rule ID</p>
 * @method string getRuleName() Obtain <p>Hit rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>Hit rule name</p>
 */
class UrlHitInfo extends AbstractModel
{
    /**
     * @var string <p>Hit URL</p>
     */
    public $Url;

    /**
     * @var string <p>Hit rule ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>Hit rule name</p>
     */
    public $RuleName;

    /**
     * @param string $Url <p>Hit URL</p>
     * @param string $RuleId <p>Hit rule ID</p>
     * @param string $RuleName <p>Hit rule name</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
