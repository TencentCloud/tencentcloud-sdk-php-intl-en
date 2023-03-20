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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key-Value index configuration
 *
 * @method boolean getCaseSensitive() Obtain Case sensitivity
 * @method void setCaseSensitive(boolean $CaseSensitive) Set Case sensitivity
 * @method array getKeyValues() Obtain Key-value pair information of the index to be created
 * @method void setKeyValues(array $KeyValues) Set Key-value pair information of the index to be created
 */
class RuleKeyValueInfo extends AbstractModel
{
    /**
     * @var boolean Case sensitivity
     */
    public $CaseSensitive;

    /**
     * @var array Key-value pair information of the index to be created
     */
    public $KeyValues;

    /**
     * @param boolean $CaseSensitive Case sensitivity
     * @param array $KeyValues Key-value pair information of the index to be created
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
        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("KeyValues",$param) and $param["KeyValues"] !== null) {
            $this->KeyValues = [];
            foreach ($param["KeyValues"] as $key => $value){
                $obj = new KeyValueInfo();
                $obj->deserialize($value);
                array_push($this->KeyValues, $obj);
            }
        }
    }
}
