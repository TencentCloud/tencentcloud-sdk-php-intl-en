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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log key-value indexing rule information
 *
 * @method boolean getCaseSensitive() Obtain <p>Case-sensitive</p>
 * @method void setCaseSensitive(boolean $CaseSensitive) Set <p>Case-sensitive</p>
 * @method array getKeyValues() Obtain <p>Key-value index information</p>
 * @method void setKeyValues(array $KeyValues) Set <p>Key-value index information</p>
 */
class LogRuleKeyValueInfo extends AbstractModel
{
    /**
     * @var boolean <p>Case-sensitive</p>
     */
    public $CaseSensitive;

    /**
     * @var array <p>Key-value index information</p>
     */
    public $KeyValues;

    /**
     * @param boolean $CaseSensitive <p>Case-sensitive</p>
     * @param array $KeyValues <p>Key-value index information</p>
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
                $obj = new LogKeyValueInfo();
                $obj->deserialize($value);
                array_push($this->KeyValues, $obj);
            }
        }
    }
}
