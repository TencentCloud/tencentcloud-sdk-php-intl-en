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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataMaskStrategies request structure.
 *
 * @method integer getLimit() Obtain The pagination parameter, specifies the amount of data returned per page. it is 10 by default.
 * @method void setLimit(integer $Limit) Set The pagination parameter, specifies the amount of data returned per page. it is 10 by default.
 * @method integer getOffset() Obtain Pagination parameters. data offset. default: 0.
 * @method void setOffset(integer $Offset) Set Pagination parameters. data offset. default: 0.
 * @method array getFilters() Obtain Filter field. strategy-name: search by policy name.
 * @method void setFilters(array $Filters) Set Filter field. strategy-name: search by policy name.
 */
class DescribeDataMaskStrategiesRequest extends AbstractModel
{
    /**
     * @var integer The pagination parameter, specifies the amount of data returned per page. it is 10 by default.
     */
    public $Limit;

    /**
     * @var integer Pagination parameters. data offset. default: 0.
     */
    public $Offset;

    /**
     * @var array Filter field. strategy-name: search by policy name.
     */
    public $Filters;

    /**
     * @param integer $Limit The pagination parameter, specifies the amount of data returned per page. it is 10 by default.
     * @param integer $Offset Pagination parameters. data offset. default: 0.
     * @param array $Filters Filter field. strategy-name: search by policy name.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
