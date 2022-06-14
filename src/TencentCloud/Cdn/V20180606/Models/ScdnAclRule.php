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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Precise access control match rule
 *
 * @method string getMatchKey() Obtain Keyword
 * @method void setMatchKey(string $MatchKey) Set Keyword
 * @method string getLogiOperator() Obtain Logical operator. Valid values:
 * @method void setLogiOperator(string $LogiOperator) Set Logical operator. Valid values:
 * @method string getMatchValue() Obtain Matched value
 * @method void setMatchValue(string $MatchValue) Set Matched value
 */
class ScdnAclRule extends AbstractModel
{
    /**
     * @var string Keyword
     */
    public $MatchKey;

    /**
     * @var string Logical operator. Valid values:
     */
    public $LogiOperator;

    /**
     * @var string Matched value
     */
    public $MatchValue;

    /**
     * @param string $MatchKey Keyword
     * @param string $LogiOperator Logical operator. Valid values:
     * @param string $MatchValue Matched value
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
        if (array_key_exists("MatchKey",$param) and $param["MatchKey"] !== null) {
            $this->MatchKey = $param["MatchKey"];
        }

        if (array_key_exists("LogiOperator",$param) and $param["LogiOperator"] !== null) {
            $this->LogiOperator = $param["LogiOperator"];
        }

        if (array_key_exists("MatchValue",$param) and $param["MatchValue"] !== null) {
            $this->MatchValue = $param["MatchValue"];
        }
    }
}
