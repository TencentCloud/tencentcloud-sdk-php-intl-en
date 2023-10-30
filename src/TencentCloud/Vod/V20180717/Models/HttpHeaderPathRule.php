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
 * HTTP header setting rules. Up to 100 entries can be set.
 *
 * @method string getHeaderMode() Obtain 
 * @method void setHeaderMode(string $HeaderMode) Set 
 * @method string getHeaderName() Obtain HTTP header name. Up to 100 characters can be set.
 * @method void setHeaderName(string $HeaderName) Set HTTP header name. Up to 100 characters can be set.
 * @method string getHeaderValue() Obtain 
 * @method void setHeaderValue(string $HeaderValue) Set 
 * @method string getRuleType() Obtain 
 * @method void setRuleType(string $RuleType) Set 
 * @method array getRulePaths() Obtain 
 * @method void setRulePaths(array $RulePaths) Set 
 */
class HttpHeaderPathRule extends AbstractModel
{
    /**
     * @var string 
     */
    public $HeaderMode;

    /**
     * @var string HTTP header name. Up to 100 characters can be set.
     */
    public $HeaderName;

    /**
     * @var string 
     */
    public $HeaderValue;

    /**
     * @var string 
     */
    public $RuleType;

    /**
     * @var array 
     */
    public $RulePaths;

    /**
     * @param string $HeaderMode 
     * @param string $HeaderName HTTP header name. Up to 100 characters can be set.
     * @param string $HeaderValue 
     * @param string $RuleType 
     * @param array $RulePaths 
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
        if (array_key_exists("HeaderMode",$param) and $param["HeaderMode"] !== null) {
            $this->HeaderMode = $param["HeaderMode"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            $this->HeaderValue = $param["HeaderValue"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }
    }
}
