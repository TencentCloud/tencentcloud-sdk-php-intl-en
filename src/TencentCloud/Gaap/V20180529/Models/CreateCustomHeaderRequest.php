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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustomHeader request structure.
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method array getHeaders() Obtain Custom header name and content list. `‘’$remote_addr‘’` will be resolved and replaced with the client IP. Other values will be directly passed to the origin server.
 * @method void setHeaders(array $Headers) Set Custom header name and content list. `‘’$remote_addr‘’` will be resolved and replaced with the client IP. Other values will be directly passed to the origin server.
 */
class CreateCustomHeaderRequest extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var array Custom header name and content list. `‘’$remote_addr‘’` will be resolved and replaced with the client IP. Other values will be directly passed to the origin server.
     */
    public $Headers;

    /**
     * @param string $RuleId Rule ID
     * @param array $Headers Custom header name and content list. `‘’$remote_addr‘’` will be resolved and replaced with the client IP. Other values will be directly passed to the origin server.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new HttpHeaderParam();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
