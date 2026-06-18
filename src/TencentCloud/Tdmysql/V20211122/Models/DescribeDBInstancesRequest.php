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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances request structure.
 *
 * @method array getFilters() Obtain <p>Filter parameters</p>
 * @method void setFilters(array $Filters) Set <p>Filter parameters</p>
 * @method integer getLimit() Obtain <p>Maximum return count, defaults to 20, maximum 100</p>
 * @method void setLimit(integer $Limit) Set <p>Maximum return count, defaults to 20, maximum 100</p>
 * @method integer getOffset() Obtain <p>Offset, which is an integer multiple of Limit.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset, which is an integer multiple of Limit.</p>
 * @method string getEngineType() Obtain <p>Specified query engine type</p><p>Enumeration value:</p><ul><li>libra: Column storage engine</li></ul>
 * @method void setEngineType(string $EngineType) Set <p>Specified query engine type</p><p>Enumeration value:</p><ul><li>libra: Column storage engine</li></ul>
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>Filter parameters</p>
     */
    public $Filters;

    /**
     * @var integer <p>Maximum return count, defaults to 20, maximum 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset, which is an integer multiple of Limit.</p>
     */
    public $Offset;

    /**
     * @var string <p>Specified query engine type</p><p>Enumeration value:</p><ul><li>libra: Column storage engine</li></ul>
     */
    public $EngineType;

    /**
     * @param array $Filters <p>Filter parameters</p>
     * @param integer $Limit <p>Maximum return count, defaults to 20, maximum 100</p>
     * @param integer $Offset <p>Offset, which is an integer multiple of Limit.</p>
     * @param string $EngineType <p>Specified query engine type</p><p>Enumeration value:</p><ul><li>libra: Column storage engine</li></ul>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new InstanceFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}
