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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoSnapshotPolicies request structure.
 *
 * @method string getAutoSnapshotPolicyId() Obtain Snapshot policy ID
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Snapshot policy ID
 * @method integer getOffset() Obtain Page offset
 * @method void setOffset(integer $Offset) Set Page offset
 * @method integer getLimit() Obtain Page length
 * @method void setLimit(integer $Limit) Set Page length
 * @method array getFilters() Obtain Filters
 * @method void setFilters(array $Filters) Set Filters
 * @method string getOrder() Obtain Ascending or descending order
 * @method void setOrder(string $Order) Set Ascending or descending order
 * @method string getOrderField() Obtain Sorting field
 * @method void setOrderField(string $OrderField) Set Sorting field
 */
class DescribeAutoSnapshotPoliciesRequest extends AbstractModel
{
    /**
     * @var string Snapshot policy ID
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var integer Page offset
     */
    public $Offset;

    /**
     * @var integer Page length
     */
    public $Limit;

    /**
     * @var array Filters
     */
    public $Filters;

    /**
     * @var string Ascending or descending order
     */
    public $Order;

    /**
     * @var string Sorting field
     */
    public $OrderField;

    /**
     * @param string $AutoSnapshotPolicyId Snapshot policy ID
     * @param integer $Offset Page offset
     * @param integer $Limit Page length
     * @param array $Filters Filters
     * @param string $Order Ascending or descending order
     * @param string $OrderField Sorting field
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
