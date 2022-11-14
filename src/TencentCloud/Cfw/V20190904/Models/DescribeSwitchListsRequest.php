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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSwitchLists request structure.
 *
 * @method integer getStatus() Obtain Firewall status. 0: disabled; 1: enabled
 * @method void setStatus(integer $Status) Set Firewall status. 0: disabled; 1: enabled
 * @method string getType() Obtain Asset type, e.g. CVM/NAT/VPN/CLB/others
 * @method void setType(string $Type) Set Asset type, e.g. CVM/NAT/VPN/CLB/others
 * @method string getArea() Obtain Region, e.g. Shanghai, Chongqing, Guangzhou, etc.
 * @method void setArea(string $Area) Set Region, e.g. Shanghai, Chongqing, Guangzhou, etc.
 * @method string getSearchValue() Obtain Search value, e.g. "{"common":"106.54.189.45"}"
 * @method void setSearchValue(string $SearchValue) Set Search value, e.g. "{"common":"106.54.189.45"}"
 * @method integer getLimit() Obtain Number of entries. Default: 10
 * @method void setLimit(integer $Limit) Set Number of entries. Default: 10
 * @method integer getOffset() Obtain Offset. Default: 0
 * @method void setOffset(integer $Offset) Set Offset. Default: 0
 * @method string getOrder() Obtain Sort order. desc: descending; asc: ascending
 * @method void setOrder(string $Order) Set Sort order. desc: descending; asc: ascending
 * @method string getBy() Obtain Sorting field. PortTimes (number of risky ports)
 * @method void setBy(string $By) Set Sorting field. PortTimes (number of risky ports)
 */
class DescribeSwitchListsRequest extends AbstractModel
{
    /**
     * @var integer Firewall status. 0: disabled; 1: enabled
     */
    public $Status;

    /**
     * @var string Asset type, e.g. CVM/NAT/VPN/CLB/others
     */
    public $Type;

    /**
     * @var string Region, e.g. Shanghai, Chongqing, Guangzhou, etc.
     */
    public $Area;

    /**
     * @var string Search value, e.g. "{"common":"106.54.189.45"}"
     */
    public $SearchValue;

    /**
     * @var integer Number of entries. Default: 10
     */
    public $Limit;

    /**
     * @var integer Offset. Default: 0
     */
    public $Offset;

    /**
     * @var string Sort order. desc: descending; asc: ascending
     */
    public $Order;

    /**
     * @var string Sorting field. PortTimes (number of risky ports)
     */
    public $By;

    /**
     * @param integer $Status Firewall status. 0: disabled; 1: enabled
     * @param string $Type Asset type, e.g. CVM/NAT/VPN/CLB/others
     * @param string $Area Region, e.g. Shanghai, Chongqing, Guangzhou, etc.
     * @param string $SearchValue Search value, e.g. "{"common":"106.54.189.45"}"
     * @param integer $Limit Number of entries. Default: 10
     * @param integer $Offset Offset. Default: 0
     * @param string $Order Sort order. desc: descending; asc: ascending
     * @param string $By Sorting field. PortTimes (number of risky ports)
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
