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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getReadOnlyInstanceId() Obtain 
 * @method void setReadOnlyInstanceId(string $ReadOnlyInstanceId) Set 
 * @method integer getReadOnlyWeight() Obtain 
 * @method void setReadOnlyWeight(integer $ReadOnlyWeight) Set 
 */
class ReadOnlyInstanceWeightPair extends AbstractModel
{
    /**
     * @var string 
     */
    public $ReadOnlyInstanceId;

    /**
     * @var integer 
     */
    public $ReadOnlyWeight;

    /**
     * @param string $ReadOnlyInstanceId 
     * @param integer $ReadOnlyWeight 
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
        if (array_key_exists("ReadOnlyInstanceId",$param) and $param["ReadOnlyInstanceId"] !== null) {
            $this->ReadOnlyInstanceId = $param["ReadOnlyInstanceId"];
        }

        if (array_key_exists("ReadOnlyWeight",$param) and $param["ReadOnlyWeight"] !== null) {
            $this->ReadOnlyWeight = $param["ReadOnlyWeight"];
        }
    }
}
