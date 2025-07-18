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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method array getOperations() Obtain 
 * @method void setOperations(array $Operations) Set 
 * @method array getConditions() Obtain 
 * @method void setConditions(array $Conditions) Set 
 */
class AnonymousInfo extends AbstractModel
{
    /**
     * @var array 
     */
    public $Operations;

    /**
     * @var array 
     */
    public $Conditions;

    /**
     * @param array $Operations 
     * @param array $Conditions 
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
        if (array_key_exists("Operations",$param) and $param["Operations"] !== null) {
            $this->Operations = $param["Operations"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ConditionInfo();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
