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
 * @method array getFilters() Obtain Filter parameters.
 * @method void setFilters(array $Filters) Set Filter parameters.
 * @method integer getLimit() Obtain Maximum return count, defaults to 20, maximum 100
 * @method void setLimit(integer $Limit) Set Maximum return count, defaults to 20, maximum 100
 * @method integer getOffset() Obtain Offset, which is an integer multiple of Limit.
 * @method void setOffset(integer $Offset) Set Offset, which is an integer multiple of Limit.
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Filter parameters.
     */
    public $Filters;

    /**
     * @var integer Maximum return count, defaults to 20, maximum 100
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integer multiple of Limit.
     */
    public $Offset;

    /**
     * @param array $Filters Filter parameters.
     * @param integer $Limit Maximum return count, defaults to 20, maximum 100
     * @param integer $Offset Offset, which is an integer multiple of Limit.
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
    }
}
