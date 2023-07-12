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
 * DescribeNetDetectStates request structure.
 *
 * @method array getNetDetectIds() Obtain The array of network probe IDs, such as [`netd-12345678`].
 * @method void setNetDetectIds(array $NetDetectIds) Set The array of network probe IDs, such as [`netd-12345678`].
 * @method array getFilters() Obtain Filter conditions. `NetDetectIds` and `Filters` cannot be specified at the same time.
<li>`net-detect-id` - String - The network probe ID, such as `netd-12345678`.</li>
 * @method void setFilters(array $Filters) Set Filter conditions. `NetDetectIds` and `Filters` cannot be specified at the same time.
<li>`net-detect-id` - String - The network probe ID, such as `netd-12345678`.</li>
 * @method integer getOffset() Obtain The offset. Default: 0.
 * @method void setOffset(integer $Offset) Set The offset. Default: 0.
 * @method integer getLimit() Obtain The number of returned values. Default: 20. Maximum: 100.
 * @method void setLimit(integer $Limit) Set The number of returned values. Default: 20. Maximum: 100.
 */
class DescribeNetDetectStatesRequest extends AbstractModel
{
    /**
     * @var array The array of network probe IDs, such as [`netd-12345678`].
     */
    public $NetDetectIds;

    /**
     * @var array Filter conditions. `NetDetectIds` and `Filters` cannot be specified at the same time.
<li>`net-detect-id` - String - The network probe ID, such as `netd-12345678`.</li>
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
     * @param array $NetDetectIds The array of network probe IDs, such as [`netd-12345678`].
     * @param array $Filters Filter conditions. `NetDetectIds` and `Filters` cannot be specified at the same time.
<li>`net-detect-id` - String - The network probe ID, such as `netd-12345678`.</li>
     * @param integer $Offset The offset. Default: 0.
     * @param integer $Limit The number of returned values. Default: 20. Maximum: 100.
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
