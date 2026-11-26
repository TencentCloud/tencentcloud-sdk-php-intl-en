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
 * Security data Entry return value
 *
 * @method string getKey() Obtain Query the dimension value.
 * @method void setKey(string $Key) Set Query the dimension value.
 * @method array getValue() Obtain Detailed data under the query dimension.
 * @method void setValue(array $Value) Set Detailed data under the query dimension.
 */
class SecEntry extends AbstractModel
{
    /**
     * @var string Query the dimension value.
     */
    public $Key;

    /**
     * @var array Detailed data under the query dimension.
     */
    public $Value;

    /**
     * @param string $Key Query the dimension value.
     * @param array $Value Detailed data under the query dimension.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = [];
            foreach ($param["Value"] as $key => $value){
                $obj = new SecEntryValue();
                $obj->deserialize($value);
                array_push($this->Value, $obj);
            }
        }
    }
}
