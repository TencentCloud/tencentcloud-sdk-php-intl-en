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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones request structure.
 *
 * @method string getOrderField() Obtain Sorting field. Valid values:
<li>`ZONE`: Sort by the availability zone.
<li>`INSTANCE_DISPLAY_LABEL`: Sort by visibility labels (`HIDDEN`, `NORMAL` and `SELECTED`). Default: ['HIDDEN', 'NORMAL', 'SELECTED'].
The default value is `ZONE`.
 * @method void setOrderField(string $OrderField) Set Sorting field. Valid values:
<li>`ZONE`: Sort by the availability zone.
<li>`INSTANCE_DISPLAY_LABEL`: Sort by visibility labels (`HIDDEN`, `NORMAL` and `SELECTED`). Default: ['HIDDEN', 'NORMAL', 'SELECTED'].
The default value is `ZONE`.
 * @method string getOrder() Obtain Specifies how availability zones are listed. Valid values:
<li>ASC: Ascending sort. 
<li>DESC: Descending sort.
The default value is `ASC`.
 * @method void setOrder(string $Order) Set Specifies how availability zones are listed. Valid values:
<li>ASC: Ascending sort. 
<li>DESC: Descending sort.
The default value is `ASC`.
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var string Sorting field. Valid values:
<li>`ZONE`: Sort by the availability zone.
<li>`INSTANCE_DISPLAY_LABEL`: Sort by visibility labels (`HIDDEN`, `NORMAL` and `SELECTED`). Default: ['HIDDEN', 'NORMAL', 'SELECTED'].
The default value is `ZONE`.
     */
    public $OrderField;

    /**
     * @var string Specifies how availability zones are listed. Valid values:
<li>ASC: Ascending sort. 
<li>DESC: Descending sort.
The default value is `ASC`.
     */
    public $Order;

    /**
     * @param string $OrderField Sorting field. Valid values:
<li>`ZONE`: Sort by the availability zone.
<li>`INSTANCE_DISPLAY_LABEL`: Sort by visibility labels (`HIDDEN`, `NORMAL` and `SELECTED`). Default: ['HIDDEN', 'NORMAL', 'SELECTED'].
The default value is `ZONE`.
     * @param string $Order Specifies how availability zones are listed. Valid values:
<li>ASC: Ascending sort. 
<li>DESC: Descending sort.
The default value is `ASC`.
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
        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
