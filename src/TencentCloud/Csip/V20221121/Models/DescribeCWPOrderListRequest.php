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
 * DescribeCWPOrderList request structure.
 *
 * @method array getFilters() Obtain <p>Take the intersection when filtering with multiple conditions</p><li>ProductCode: product code, starting with p_</li><li>SubProductCode: subproduct code, starting with sp_</li><li>InquireKey: billing item, starting with sv_</li><li>Status: resource status. 1: normal, 2: isolated, 3: terminated</li><li>PayMode: payment mode. 0: pay-as-you-go billing, 1: monthly subscription</li><li>ResourceId: resource ID</li><li>RenewFlag: auto-renewal label. 0: not needed by default (major customers have the auto-renewal ability), 1: auto-renewal, 2: manually set not to automatically renew</li><li>DealNames: sub-order number</li>
 * @method void setFilters(array $Filters) Set <p>Take the intersection when filtering with multiple conditions</p><li>ProductCode: product code, starting with p_</li><li>SubProductCode: subproduct code, starting with sp_</li><li>InquireKey: billing item, starting with sv_</li><li>Status: resource status. 1: normal, 2: isolated, 3: terminated</li><li>PayMode: payment mode. 0: pay-as-you-go billing, 1: monthly subscription</li><li>ResourceId: resource ID</li><li>RenewFlag: auto-renewal label. 0: not needed by default (major customers have the auto-renewal ability), 1: auto-renewal, 2: manually set not to automatically renew</li><li>DealNames: sub-order number</li>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0</p>
 * @method integer getLimit() Obtain <p>Limit entries. Default: 10. Maximum: 100</p>
 * @method void setLimit(integer $Limit) Set <p>Limit entries. Default: 10. Maximum: 100</p>
 */
class DescribeCWPOrderListRequest extends AbstractModel
{
    /**
     * @var array <p>Take the intersection when filtering with multiple conditions</p><li>ProductCode: product code, starting with p_</li><li>SubProductCode: subproduct code, starting with sp_</li><li>InquireKey: billing item, starting with sv_</li><li>Status: resource status. 1: normal, 2: isolated, 3: terminated</li><li>PayMode: payment mode. 0: pay-as-you-go billing, 1: monthly subscription</li><li>ResourceId: resource ID</li><li>RenewFlag: auto-renewal label. 0: not needed by default (major customers have the auto-renewal ability), 1: auto-renewal, 2: manually set not to automatically renew</li><li>DealNames: sub-order number</li>
     */
    public $Filters;

    /**
     * @var integer <p>Offset. Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Limit entries. Default: 10. Maximum: 100</p>
     */
    public $Limit;

    /**
     * @param array $Filters <p>Take the intersection when filtering with multiple conditions</p><li>ProductCode: product code, starting with p_</li><li>SubProductCode: subproduct code, starting with sp_</li><li>InquireKey: billing item, starting with sv_</li><li>Status: resource status. 1: normal, 2: isolated, 3: terminated</li><li>PayMode: payment mode. 0: pay-as-you-go billing, 1: monthly subscription</li><li>ResourceId: resource ID</li><li>RenewFlag: auto-renewal label. 0: not needed by default (major customers have the auto-renewal ability), 1: auto-renewal, 2: manually set not to automatically renew</li><li>DealNames: sub-order number</li>
     * @param integer $Offset <p>Offset. Default value: 0</p>
     * @param integer $Limit <p>Limit entries. Default: 10. Maximum: 100</p>
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
                $obj = new Filters();
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
