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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query filter
 *
 * @method string getKey() Obtain Name of the sorting field
 * @method void setKey(string $Key) Set Name of the sorting field
 * @method integer getType() Obtain `0`: Ascending; `1`: Descending 
 * @method void setType(integer $Type) Set `0`: Ascending; `1`: Descending 
 */
class SortType extends AbstractModel
{
    /**
     * @var string Name of the sorting field
     */
    public $Key;

    /**
     * @var integer `0`: Ascending; `1`: Descending 
     */
    public $Type;

    /**
     * @param string $Key Name of the sorting field
     * @param integer $Type `0`: Ascending; `1`: Descending 
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
