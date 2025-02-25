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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Queries filter parameters.
 *
 * @method string getType() Obtain Filtering method (=, !=, in).
 * @method void setType(string $Type) Set Filtering method (=, !=, in).
 * @method string getKey() Obtain Filter dimension name.
 * @method void setKey(string $Key) Set Filter dimension name.
 * @method string getValue() Obtain Filter value. uses commas to separate multiple values in in filtering method.
 * @method void setValue(string $Value) Set Filter value. uses commas to separate multiple values in in filtering method.
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filtering method (=, !=, in).
     */
    public $Type;

    /**
     * @var string Filter dimension name.
     */
    public $Key;

    /**
     * @var string Filter value. uses commas to separate multiple values in in filtering method.
     */
    public $Value;

    /**
     * @param string $Type Filtering method (=, !=, in).
     * @param string $Key Filter dimension name.
     * @param string $Value Filter value. uses commas to separate multiple values in in filtering method.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
