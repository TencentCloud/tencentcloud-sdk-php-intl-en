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
 * DescribeWindowsPatchList request structure.
 *
 * @method integer getLimit() Obtain Pagination parameter
 * @method void setLimit(integer $Limit) Set Pagination parameter
 * @method string getOrder() Obtain Sorting order: desc. Default value: asc.
 * @method void setOrder(string $Order) Set Sorting order: desc. Default value: asc.
 * @method string getBy() Obtain Selectable sorting field
<li>PublishTime</li>
<li>LastScanTime</li>
<li>HostCount</li>
 * @method void setBy(string $By) Set Selectable sorting field
<li>PublishTime</li>
<li>LastScanTime</li>
<li>HostCount</li>
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter criteria. <li>Status: string type optional processing status 0-pending, 1-ignored, 3-fixed</li><li>ShowNew: int type optional show latest version 1-enable 0-disable</li><li>Name: string type optional patch name</li><li>KbNo: string type optional Patch Number</li><li>VulName: string type optional vulnerability name</li><li>CVEId: string type optional CVE number</li><li>Uuid: string type optional host uuid</li>
 * @method void setFilters(array $Filters) Set Filter criteria. <li>Status: string type optional processing status 0-pending, 1-ignored, 3-fixed</li><li>ShowNew: int type optional show latest version 1-enable 0-disable</li><li>Name: string type optional patch name</li><li>KbNo: string type optional Patch Number</li><li>VulName: string type optional vulnerability name</li><li>CVEId: string type optional CVE number</li><li>Uuid: string type optional host uuid</li>
 */
class DescribeWindowsPatchListRequest extends AbstractModel
{
    /**
     * @var integer Pagination parameter
     */
    public $Limit;

    /**
     * @var string Sorting order: desc. Default value: asc.
     */
    public $Order;

    /**
     * @var string Selectable sorting field
<li>PublishTime</li>
<li>LastScanTime</li>
<li>HostCount</li>
     */
    public $By;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter criteria. <li>Status: string type optional processing status 0-pending, 1-ignored, 3-fixed</li><li>ShowNew: int type optional show latest version 1-enable 0-disable</li><li>Name: string type optional patch name</li><li>KbNo: string type optional Patch Number</li><li>VulName: string type optional vulnerability name</li><li>CVEId: string type optional CVE number</li><li>Uuid: string type optional host uuid</li>
     */
    public $Filters;

    /**
     * @param integer $Limit Pagination parameter
     * @param string $Order Sorting order: desc. Default value: asc.
     * @param string $By Selectable sorting field
<li>PublishTime</li>
<li>LastScanTime</li>
<li>HostCount</li>
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter criteria. <li>Status: string type optional processing status 0-pending, 1-ignored, 3-fixed</li><li>ShowNew: int type optional show latest version 1-enable 0-disable</li><li>Name: string type optional patch name</li><li>KbNo: string type optional Patch Number</li><li>VulName: string type optional vulnerability name</li><li>CVEId: string type optional CVE number</li><li>Uuid: string type optional host uuid</li>
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
