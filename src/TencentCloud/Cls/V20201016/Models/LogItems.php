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
 * `LogItem` array
 *
 * @method array getData() Obtain Key-Value pair returned in analysis result
 * @method void setData(array $Data) Set Key-Value pair returned in analysis result
 */
class LogItems extends AbstractModel
{
    /**
     * @var array Key-Value pair returned in analysis result
     */
    public $Data;

    /**
     * @param array $Data Key-Value pair returned in analysis result
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new LogItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
