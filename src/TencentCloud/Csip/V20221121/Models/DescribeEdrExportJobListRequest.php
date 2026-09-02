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
 * DescribeEdrExportJobList request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>PolicyType - int - required: no - policy typePolicyName - string - required: no - Policy NameDomain - string - required: no - Domain name (URL-encode the Domain name first, then encode it with base64)PolicyAction- int - required: no - policy actionIsEnabled - int - required: no - whether it takes effect</p>
 * @method void setFilters(array $Filters) Set <p>PolicyType - int - required: no - policy typePolicyName - string - required: no - Policy NameDomain - string - required: no - Domain name (URL-encode the Domain name first, then encode it with base64)PolicyAction- int - required: no - policy actionIsEnabled - int - required: no - whether it takes effect</p>
 * @method integer getLimit() Obtain <p>Limit number. Default value: 10. Maximum value: 100</p>
 * @method void setLimit(integer $Limit) Set <p>Limit number. Default value: 10. Maximum value: 100</p>
 * @method integer getOffset() Obtain <p>Offset. Default: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default: 0</p>
 * @method string getOrder() Obtain <p>Sort direction by task creation time. Only <code>ASC</code> / <code>DESC</code> is supported.</p><p>Enumeration values:</p><ul><li>ASC: ascending order</li><li>DESC: descending order</li></ul>
 * @method void setOrder(string $Order) Set <p>Sort direction by task creation time. Only <code>ASC</code> / <code>DESC</code> is supported.</p><p>Enumeration values:</p><ul><li>ASC: ascending order</li><li>DESC: descending order</li></ul>
 * @method string getBy() Obtain <p>Sorting field. Currently only supports InsertTime (time order by task issuance). Default is InsertTime if not passed. Importing other values will return InvalidParameter.</p>
 * @method void setBy(string $By) Set <p>Sorting field. Currently only supports InsertTime (time order by task issuance). Default is InsertTime if not passed. Importing other values will return InvalidParameter.</p>
 */
class DescribeEdrExportJobListRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>PolicyType - int - required: no - policy typePolicyName - string - required: no - Policy NameDomain - string - required: no - Domain name (URL-encode the Domain name first, then encode it with base64)PolicyAction- int - required: no - policy actionIsEnabled - int - required: no - whether it takes effect</p>
     */
    public $Filters;

    /**
     * @var integer <p>Limit number. Default value: 10. Maximum value: 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default: 0</p>
     */
    public $Offset;

    /**
     * @var string <p>Sort direction by task creation time. Only <code>ASC</code> / <code>DESC</code> is supported.</p><p>Enumeration values:</p><ul><li>ASC: ascending order</li><li>DESC: descending order</li></ul>
     */
    public $Order;

    /**
     * @var string <p>Sorting field. Currently only supports InsertTime (time order by task issuance). Default is InsertTime if not passed. Importing other values will return InvalidParameter.</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>PolicyType - int - required: no - policy typePolicyName - string - required: no - Policy NameDomain - string - required: no - Domain name (URL-encode the Domain name first, then encode it with base64)PolicyAction- int - required: no - policy actionIsEnabled - int - required: no - whether it takes effect</p>
     * @param integer $Limit <p>Limit number. Default value: 10. Maximum value: 100</p>
     * @param integer $Offset <p>Offset. Default: 0</p>
     * @param string $Order <p>Sort direction by task creation time. Only <code>ASC</code> / <code>DESC</code> is supported.</p><p>Enumeration values:</p><ul><li>ASC: ascending order</li><li>DESC: descending order</li></ul>
     * @param string $By <p>Sorting field. Currently only supports InsertTime (time order by task issuance). Default is InsertTime if not passed. Importing other values will return InvalidParameter.</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
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
