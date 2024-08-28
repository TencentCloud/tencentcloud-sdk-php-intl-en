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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBruteAttackRules request structure.
 *
 * @method array getRules() Obtain Rule of determining brute force cracking
 * @method void setRules(array $Rules) Set Rule of determining brute force cracking
 */
class ModifyBruteAttackRulesRequest extends AbstractModel
{
    /**
     * @var array Rule of determining brute force cracking
     */
    public $Rules;

    /**
     * @param array $Rules Rule of determining brute force cracking
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
                $obj = new BruteAttackRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
