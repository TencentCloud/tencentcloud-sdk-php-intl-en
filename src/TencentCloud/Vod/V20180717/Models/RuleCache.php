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
 * 
 *
 * @method string getRuleType() Obtain 
 * @method void setRuleType(string $RuleType) Set 
 * @method array getRulePaths() Obtain 
 * @method void setRulePaths(array $RulePaths) Set 
 * @method RuleCacheConfig getCacheConfig() Obtain Cache configuration
 * @method void setCacheConfig(RuleCacheConfig $CacheConfig) Set Cache configuration
 */
class RuleCache extends AbstractModel
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
     * @var RuleCacheConfig Cache configuration
     */
    public $CacheConfig;

    /**
     * @param string $RuleType 
     * @param array $RulePaths 
     * @param RuleCacheConfig $CacheConfig Cache configuration
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

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new RuleCacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }
    }
}
