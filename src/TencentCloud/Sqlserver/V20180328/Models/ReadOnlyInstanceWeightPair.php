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
 * Read-Only Instance to Weight Mapping
 *
 * @method string getReadOnlyInstanceId() Obtain Read-Only Instance ID, in the format of: mssqlro-3l3fgqn7
 * @method void setReadOnlyInstanceId(string $ReadOnlyInstanceId) Set Read-Only Instance ID, in the format of: mssqlro-3l3fgqn7
 * @method integer getReadOnlyWeight() Obtain Read-Only Instance Weight, in the range of 0-100
 * @method void setReadOnlyWeight(integer $ReadOnlyWeight) Set Read-Only Instance Weight, in the range of 0-100
 */
class ReadOnlyInstanceWeightPair extends AbstractModel
{
    /**
     * @var string Read-Only Instance ID, in the format of: mssqlro-3l3fgqn7
     */
    public $ReadOnlyInstanceId;

    /**
     * @var integer Read-Only Instance Weight, in the range of 0-100
     */
    public $ReadOnlyWeight;

    /**
     * @param string $ReadOnlyInstanceId Read-Only Instance ID, in the format of: mssqlro-3l3fgqn7
     * @param integer $ReadOnlyWeight Read-Only Instance Weight, in the range of 0-100
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
