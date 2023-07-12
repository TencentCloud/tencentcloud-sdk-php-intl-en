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
 * GetCcnRegionBandwidthLimits request structure.
 *
 * @method string getCcnId() Obtain The CCN instance ID, such as `ccn-f49l6u0z`.
 * @method void setCcnId(string $CcnId) Set The CCN instance ID, such as `ccn-f49l6u0z`.
 * @method array getFilters() Obtain The filter condition.
<li>sregion - String - (Filter condition) Filter by the source region, such as 'ap-guangzhou'.</li>
<li>dregion - String - (Filter condition) Filter by the destination region, such as 'ap-shanghai-bm'.</li>
 * @method void setFilters(array $Filters) Set The filter condition.
<li>sregion - String - (Filter condition) Filter by the source region, such as 'ap-guangzhou'.</li>
<li>dregion - String - (Filter condition) Filter by the destination region, such as 'ap-shanghai-bm'.</li>
 * @method string getSortedBy() Obtain The sorting condition. Valid values: `BandwidthLimit` and `ExpireTime`.
 * @method void setSortedBy(string $SortedBy) Set The sorting condition. Valid values: `BandwidthLimit` and `ExpireTime`.
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Quantity of returned items
 * @method void setLimit(integer $Limit) Set Quantity of returned items
 * @method string getOrderBy() Obtain In ascending or descending order. Valid values: 'ASC' and 'DESC'.
 * @method void setOrderBy(string $OrderBy) Set In ascending or descending order. Valid values: 'ASC' and 'DESC'.
 */
class GetCcnRegionBandwidthLimitsRequest extends AbstractModel
{
    /**
     * @var string The CCN instance ID, such as `ccn-f49l6u0z`.
     */
    public $CcnId;

    /**
     * @var array The filter condition.
<li>sregion - String - (Filter condition) Filter by the source region, such as 'ap-guangzhou'.</li>
<li>dregion - String - (Filter condition) Filter by the destination region, such as 'ap-shanghai-bm'.</li>
     */
    public $Filters;

    /**
     * @var string The sorting condition. Valid values: `BandwidthLimit` and `ExpireTime`.
     */
    public $SortedBy;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Quantity of returned items
     */
    public $Limit;

    /**
     * @var string In ascending or descending order. Valid values: 'ASC' and 'DESC'.
     */
    public $OrderBy;

    /**
     * @param string $CcnId The CCN instance ID, such as `ccn-f49l6u0z`.
     * @param array $Filters The filter condition.
<li>sregion - String - (Filter condition) Filter by the source region, such as 'ap-guangzhou'.</li>
<li>dregion - String - (Filter condition) Filter by the destination region, such as 'ap-shanghai-bm'.</li>
     * @param string $SortedBy The sorting condition. Valid values: `BandwidthLimit` and `ExpireTime`.
     * @param integer $Offset Offset
     * @param integer $Limit Quantity of returned items
     * @param string $OrderBy In ascending or descending order. Valid values: 'ASC' and 'DESC'.
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortedBy",$param) and $param["SortedBy"] !== null) {
            $this->SortedBy = $param["SortedBy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
