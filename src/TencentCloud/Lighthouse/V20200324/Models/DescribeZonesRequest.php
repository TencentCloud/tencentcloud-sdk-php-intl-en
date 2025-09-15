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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones request structure.
 *
 * @method string getOrderField() Obtain Field on which the AZ list is sorted. value range:.
<Li>ZONE: sorted based on availability zone.</li>.
INSTANCE_DISPLAY_LABEL: specifies the Tag DISPLAY sorting order based on availability zone. valid values: HIDDEN (hide), NORMAL (ordinary), SELECTED (chosen by default). defaults to ascending order: ['HIDDEN', 'NORMAL', 'SELECTED'].
Specifies the default sorting order by availability zone.
 * @method void setOrderField(string $OrderField) Set Field on which the AZ list is sorted. value range:.
<Li>ZONE: sorted based on availability zone.</li>.
INSTANCE_DISPLAY_LABEL: specifies the Tag DISPLAY sorting order based on availability zone. valid values: HIDDEN (hide), NORMAL (ordinary), SELECTED (chosen by default). defaults to ascending order: ['HIDDEN', 'NORMAL', 'SELECTED'].
Specifies the default sorting order by availability zone.
 * @method string getOrder() Obtain Outputs the sorting order of the availability zone list. value range:.
<Li>ASC: ascending order.</li>.
<Li>DESC: sort in descending order.</li>.
Specifies the default ascending order.
 * @method void setOrder(string $Order) Set Outputs the sorting order of the availability zone list. value range:.
<Li>ASC: ascending order.</li>.
<Li>DESC: sort in descending order.</li>.
Specifies the default ascending order.
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var string Field on which the AZ list is sorted. value range:.
<Li>ZONE: sorted based on availability zone.</li>.
INSTANCE_DISPLAY_LABEL: specifies the Tag DISPLAY sorting order based on availability zone. valid values: HIDDEN (hide), NORMAL (ordinary), SELECTED (chosen by default). defaults to ascending order: ['HIDDEN', 'NORMAL', 'SELECTED'].
Specifies the default sorting order by availability zone.
     */
    public $OrderField;

    /**
     * @var string Outputs the sorting order of the availability zone list. value range:.
<Li>ASC: ascending order.</li>.
<Li>DESC: sort in descending order.</li>.
Specifies the default ascending order.
     */
    public $Order;

    /**
     * @param string $OrderField Field on which the AZ list is sorted. value range:.
<Li>ZONE: sorted based on availability zone.</li>.
INSTANCE_DISPLAY_LABEL: specifies the Tag DISPLAY sorting order based on availability zone. valid values: HIDDEN (hide), NORMAL (ordinary), SELECTED (chosen by default). defaults to ascending order: ['HIDDEN', 'NORMAL', 'SELECTED'].
Specifies the default sorting order by availability zone.
     * @param string $Order Outputs the sorting order of the availability zone list. value range:.
<Li>ASC: ascending order.</li>.
<Li>DESC: sort in descending order.</li>.
Specifies the default ascending order.
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
