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
 * @method string getRuleType() Obtain 
 * @method void setRuleType(string $RuleType) Set 
 * @method array getRulePaths() Obtain 
 * @method void setRulePaths(array $RulePaths) Set 
 * @method string getRefererType() Obtain 
 * @method void setRefererType(string $RefererType) Set 
 * @method array getReferers() Obtain Referer content list
 * @method void setReferers(array $Referers) Set Referer content list
 * @method boolean getAllowEmpty() Obtain 
 * @method void setAllowEmpty(boolean $AllowEmpty) Set 
 */
class RefererRule extends AbstractModel
{
    /**
     * @var string 
     */
    public $RuleType;

    /**
     * @var array 
     */
    public $RulePaths;

    /**
     * @var string 
     */
    public $RefererType;

    /**
     * @var array Referer content list
     */
    public $Referers;

    /**
     * @var boolean 
     */
    public $AllowEmpty;

    /**
     * @param string $RuleType 
     * @param array $RulePaths 
     * @param string $RefererType 
     * @param array $Referers Referer content list
     * @param boolean $AllowEmpty 
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
