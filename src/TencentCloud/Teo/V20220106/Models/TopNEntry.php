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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TopN entry
 *
 * @method string getKey() Obtain Entry key
 * @method void setKey(string $Key) Set Entry key
 * @method array getValue() Obtain Top N data
 * @method void setValue(array $Value) Set Top N data
 */
class TopNEntry extends AbstractModel
{
    /**
     * @var string Entry key
     */
    public $Key;

    /**
     * @var array Top N data
     */
    public $Value;

    /**
     * @param string $Key Entry key
     * @param array $Value Top N data
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
                $obj = new TopNEntryValue();
                $obj->deserialize($value);
                array_push($this->Value, $obj);
            }
        }
    }
}
