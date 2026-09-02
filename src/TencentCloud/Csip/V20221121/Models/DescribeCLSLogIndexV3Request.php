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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCLSLogIndexV3 request structure.
 *
 * @method array getFilters() Obtain <p>Filter conditions.</p>
 * @method void setFilters(array $Filters) Set <p>Filter conditions.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getLimit() Obtain <p>limit</p>
 * @method void setLimit(integer $Limit) Set <p>limit</p>
 * @method integer getOffset() Obtain <p>offset</p>
 * @method void setOffset(integer $Offset) Set <p>offset</p>
 */
class DescribeCLSLogIndexV3Request extends AbstractModel
{
    /**
     * @var array <p>Filter conditions.</p>
     */
    public $Filters;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>limit</p>
     */
    public $Limit;

    /**
     * @var integer <p>offset</p>
     */
    public $Offset;

    /**
     * @param array $Filters <p>Filter conditions.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $Limit <p>limit</p>
     * @param integer $Offset <p>offset</p>
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
                $obj = new LogCLSFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
