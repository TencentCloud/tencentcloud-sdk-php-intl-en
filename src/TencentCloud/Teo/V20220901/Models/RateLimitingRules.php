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
 * Precision rate limiting configuration.
 *
 * @method array getRules() Obtain Definition list of precise rate limiting. when using ModifySecurityPolicy to modify the Web protection configuration: <br> <li> if the Rules parameter is not specified or its length is zero: clear all precision rate limiting configurations.</li> <li> if the RateLimitingRules parameter value is unspecified in the SecurityPolicy parameter: retain the existing custom rule configuration without modification.</li>.
 * @method void setRules(array $Rules) Set Definition list of precise rate limiting. when using ModifySecurityPolicy to modify the Web protection configuration: <br> <li> if the Rules parameter is not specified or its length is zero: clear all precision rate limiting configurations.</li> <li> if the RateLimitingRules parameter value is unspecified in the SecurityPolicy parameter: retain the existing custom rule configuration without modification.</li>.
 */
class RateLimitingRules extends AbstractModel
{
    /**
     * @var array Definition list of precise rate limiting. when using ModifySecurityPolicy to modify the Web protection configuration: <br> <li> if the Rules parameter is not specified or its length is zero: clear all precision rate limiting configurations.</li> <li> if the RateLimitingRules parameter value is unspecified in the SecurityPolicy parameter: retain the existing custom rule configuration without modification.</li>.
     */
    public $Rules;

    /**
     * @param array $Rules Definition list of precise rate limiting. when using ModifySecurityPolicy to modify the Web protection configuration: <br> <li> if the Rules parameter is not specified or its length is zero: clear all precision rate limiting configurations.</li> <li> if the RateLimitingRules parameter value is unspecified in the SecurityPolicy parameter: retain the existing custom rule configuration without modification.</li>.
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RateLimitingRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
