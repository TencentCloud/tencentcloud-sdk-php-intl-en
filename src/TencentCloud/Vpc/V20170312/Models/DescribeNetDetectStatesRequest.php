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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getNetDetectIds() 获取The array of network detection instance `IDs`, such as [`netd-12345678`].
 * @method void setNetDetectIds(array $NetDetectIds) 设置The array of network detection instance `IDs`, such as [`netd-12345678`].
 * @method array getFilters() 获取Filter conditions. `NetDetectIds` and `Filters` cannot be specified at the same time.
<li>net-detect-id - String - (Filter condition) The network detection instance ID, such as netd-12345678.</li>
 * @method void setFilters(array $Filters) 设置Filter conditions. `NetDetectIds` and `Filters` cannot be specified at the same time.
<li>net-detect-id - String - (Filter condition) The network detection instance ID, such as netd-12345678.</li>
 * @method integer getOffset() 获取The offset. Default: 0.
 * @method void setOffset(integer $Offset) 设置The offset. Default: 0.
 * @method integer getLimit() 获取The number of returned values. Default: 20. Maximum: 100.
 * @method void setLimit(integer $Limit) 设置The number of returned values. Default: 20. Maximum: 100.
 */

/**
 *DescribeNetDetectStates request structure.
 */
class DescribeNetDetectStatesRequest extends AbstractModel
{
    /**
     * @var array The array of network detection instance `IDs`, such as [`netd-12345678`].
     */
    public $NetDetectIds;

    /**
     * @var array Filter conditions. `NetDetectIds` and `Filters` cannot be specified at the same time.
<li>net-detect-id - String - (Filter condition) The network detection instance ID, such as netd-12345678.</li>
     */
    public $Filters;

    /**
     * @var integer The offset. Default: 0.
     */
    public $Offset;

    /**
     * @var integer The number of returned values. Default: 20. Maximum: 100.
     */
    public $Limit;
    /**
     * @param array $NetDetectIds The array of network detection instance `IDs`, such as [`netd-12345678`].
     * @param array $Filters Filter conditions. `NetDetectIds` and `Filters` cannot be specified at the same time.
<li>net-detect-id - String - (Filter condition) The network detection instance ID, such as netd-12345678.</li>
     * @param integer $Offset The offset. Default: 0.
     * @param integer $Limit The number of returned values. Default: 20. Maximum: 100.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NetDetectIds",$param) and $param["NetDetectIds"] !== null) {
            $this->NetDetectIds = $param["NetDetectIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
