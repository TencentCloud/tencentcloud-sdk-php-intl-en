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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditInstanceList request structure.
 *
 * @method string getProduct() Obtain <p>Product name: postgres</p>
 * @method void setProduct(string $Product) Set <p>Product name: postgres</p>
 * @method integer getAuditSwitch() Obtain <p>Whether to enable</p><p>Enumeration value:</p><ul><li>0: Not enabled</li><li>1: Enabled</li></ul>
 * @method void setAuditSwitch(integer $AuditSwitch) Set <p>Whether to enable</p><p>Enumeration value:</p><ul><li>0: Not enabled</li><li>1: Enabled</li></ul>
 * @method integer getLimit() Obtain <p>Pagination limit</p>
 * @method void setLimit(integer $Limit) Set <p>Pagination limit</p>
 * @method integer getOffset() Obtain <p>Page offset amount</p>
 * @method void setOffset(integer $Offset) Set <p>Page offset amount</p>
 * @method array getFilters() Obtain <p>Instance filtering parameters</p><p>Input parameter limitation: Supported filter criteria: InstanceId-instance ID, InstanceName-instance name</p>
 * @method void setFilters(array $Filters) Set <p>Instance filtering parameters</p><p>Input parameter limitation: Supported filter criteria: InstanceId-instance ID, InstanceName-instance name</p>
 */
class DescribeAuditInstanceListRequest extends AbstractModel
{
    /**
     * @var string <p>Product name: postgres</p>
     */
    public $Product;

    /**
     * @var integer <p>Whether to enable</p><p>Enumeration value:</p><ul><li>0: Not enabled</li><li>1: Enabled</li></ul>
     */
    public $AuditSwitch;

    /**
     * @var integer <p>Pagination limit</p>
     */
    public $Limit;

    /**
     * @var integer <p>Page offset amount</p>
     */
    public $Offset;

    /**
     * @var array <p>Instance filtering parameters</p><p>Input parameter limitation: Supported filter criteria: InstanceId-instance ID, InstanceName-instance name</p>
     */
    public $Filters;

    /**
     * @param string $Product <p>Product name: postgres</p>
     * @param integer $AuditSwitch <p>Whether to enable</p><p>Enumeration value:</p><ul><li>0: Not enabled</li><li>1: Enabled</li></ul>
     * @param integer $Limit <p>Pagination limit</p>
     * @param integer $Offset <p>Page offset amount</p>
     * @param array $Filters <p>Instance filtering parameters</p><p>Input parameter limitation: Supported filter criteria: InstanceId-instance ID, InstanceName-instance name</p>
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("AuditSwitch",$param) and $param["AuditSwitch"] !== null) {
            $this->AuditSwitch = $param["AuditSwitch"];
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
