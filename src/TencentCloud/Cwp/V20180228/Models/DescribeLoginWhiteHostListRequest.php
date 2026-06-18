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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoginWhiteHostList request structure.
 *
 * @method integer getId() Obtain <p>Allowlist ID</p>
 * @method void setId(integer $Id) Set <p>Allowlist ID</p>
 * @method integer getLimit() Obtain <p>Number of items to return. Maximum value: 1000.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items to return. Maximum value: 1000.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method array getFilters() Obtain <p>Filter criteria<li>IpOrAlias - String - Required: No - Host IP or alias filter</li></p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria<li>IpOrAlias - String - Required: No - Host IP or alias filter</li></p>
 */
class DescribeLoginWhiteHostListRequest extends AbstractModel
{
    /**
     * @var integer <p>Allowlist ID</p>
     */
    public $Id;

    /**
     * @var integer <p>Number of items to return. Maximum value: 1000.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var array <p>Filter criteria<li>IpOrAlias - String - Required: No - Host IP or alias filter</li></p>
     */
    public $Filters;

    /**
     * @param integer $Id <p>Allowlist ID</p>
     * @param integer $Limit <p>Number of items to return. Maximum value: 1000.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param array $Filters <p>Filter criteria<li>IpOrAlias - String - Required: No - Host IP or alias filter</li></p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
