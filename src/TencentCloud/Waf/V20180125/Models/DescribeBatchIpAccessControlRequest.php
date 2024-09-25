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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBatchIpAccessControl request structure.
 *
 * @method array getFilters() Obtain Filter criteria: supports ActionType 40/42, IP: IP address, Domain: Three types of domains
 * @method void setFilters(array $Filters) Set Filter criteria: supports ActionType 40/42, IP: IP address, Domain: Three types of domains
 * @method integer getOffSet() Obtain Offset
 * @method void setOffSet(integer $OffSet) Set Offset
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method string getSort() Obtain Sort parameters
 * @method void setSort(string $Sort) Set Sort parameters
 */
class DescribeBatchIpAccessControlRequest extends AbstractModel
{
    /**
     * @var array Filter criteria: supports ActionType 40/42, IP: IP address, Domain: Three types of domains
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $OffSet;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var string Sort parameters
     */
    public $Sort;

    /**
     * @param array $Filters Filter criteria: supports ActionType 40/42, IP: IP address, Domain: Three types of domains
     * @param integer $OffSet Offset
     * @param integer $Limit Limit
     * @param string $Sort Sort parameters
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
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OffSet",$param) and $param["OffSet"] !== null) {
            $this->OffSet = $param["OffSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
