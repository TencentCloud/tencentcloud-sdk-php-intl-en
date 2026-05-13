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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoSnapshotPolicies request structure.
 *
 * @method array getAutoSnapshotPolicyIds() Obtain List of scheduled snapshot policy IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
 * @method void setAutoSnapshotPolicyIds(array $AutoSnapshotPolicyIds) Set List of scheduled snapshot policy IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
 * @method array getFilters() Obtain Filter criteria. AutoSnapshotPolicyIds and Filters cannot be specified at the same time.
<li>auto-snapshot-policy-id - Array of String - required: no - (filter condition) filter by regular snapshot policy id. regular snapshot policy id such as: `asp-3stvwfxx`.</li>.
<li>AutoSnapshotPolicyState - Array of String - required: no - (filter condition) filters by the status of the regular snapshot policy. regular snapshot policy ID format: `asp-3stvwfxx`. (NORMAL: NORMAL | ISOLATED: ISOLATED).</li>.
<li>AutoSnapshotPolicyName - Array of String - required: no - (filter condition) filters by the name of the regular snapshot policy.</li>.
 * @method void setFilters(array $Filters) Set Filter criteria. AutoSnapshotPolicyIds and Filters cannot be specified at the same time.
<li>auto-snapshot-policy-id - Array of String - required: no - (filter condition) filter by regular snapshot policy id. regular snapshot policy id such as: `asp-3stvwfxx`.</li>.
<li>AutoSnapshotPolicyState - Array of String - required: no - (filter condition) filters by the status of the regular snapshot policy. regular snapshot policy ID format: `asp-3stvwfxx`. (NORMAL: NORMAL | ISOLATED: ISOLATED).</li>.
<li>AutoSnapshotPolicyName - Array of String - required: no - (filter condition) filters by the name of the regular snapshot policy.</li>.
 * @method integer getLimit() Obtain Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method string getOrder() Obtain Specifies the output order of the regular snapshot list. valid values: <br><li>ASC: ascending order<br></li><li>DESC: descending order.</li>.
 * @method void setOrder(string $Order) Set Specifies the output order of the regular snapshot list. valid values: <br><li>ASC: ascending order<br></li><li>DESC: descending order.</li>.
 * @method string getOrderField() Obtain The sorting filter applied to the scheduled snapshot list. Value range: <Sort by creation time of scheduled snapshot. By default, this is sorted by creation time.
 * @method void setOrderField(string $OrderField) Set The sorting filter applied to the scheduled snapshot list. Value range: <Sort by creation time of scheduled snapshot. By default, this is sorted by creation time.
 */
class DescribeAutoSnapshotPoliciesRequest extends AbstractModel
{
    /**
     * @var array List of scheduled snapshot policy IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
     */
    public $AutoSnapshotPolicyIds;

    /**
     * @var array Filter criteria. AutoSnapshotPolicyIds and Filters cannot be specified at the same time.
<li>auto-snapshot-policy-id - Array of String - required: no - (filter condition) filter by regular snapshot policy id. regular snapshot policy id such as: `asp-3stvwfxx`.</li>.
<li>AutoSnapshotPolicyState - Array of String - required: no - (filter condition) filters by the status of the regular snapshot policy. regular snapshot policy ID format: `asp-3stvwfxx`. (NORMAL: NORMAL | ISOLATED: ISOLATED).</li>.
<li>AutoSnapshotPolicyName - Array of String - required: no - (filter condition) filters by the name of the regular snapshot policy.</li>.
     */
    public $Filters;

    /**
     * @var integer Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var integer Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var string Specifies the output order of the regular snapshot list. valid values: <br><li>ASC: ascending order<br></li><li>DESC: descending order.</li>.
     */
    public $Order;

    /**
     * @var string The sorting filter applied to the scheduled snapshot list. Value range: <Sort by creation time of scheduled snapshot. By default, this is sorted by creation time.
     */
    public $OrderField;

    /**
     * @param array $AutoSnapshotPolicyIds List of scheduled snapshot policy IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
     * @param array $Filters Filter criteria. AutoSnapshotPolicyIds and Filters cannot be specified at the same time.
<li>auto-snapshot-policy-id - Array of String - required: no - (filter condition) filter by regular snapshot policy id. regular snapshot policy id such as: `asp-3stvwfxx`.</li>.
<li>AutoSnapshotPolicyState - Array of String - required: no - (filter condition) filters by the status of the regular snapshot policy. regular snapshot policy ID format: `asp-3stvwfxx`. (NORMAL: NORMAL | ISOLATED: ISOLATED).</li>.
<li>AutoSnapshotPolicyName - Array of String - required: no - (filter condition) filters by the name of the regular snapshot policy.</li>.
     * @param integer $Limit Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     * @param integer $Offset Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     * @param string $Order Specifies the output order of the regular snapshot list. valid values: <br><li>ASC: ascending order<br></li><li>DESC: descending order.</li>.
     * @param string $OrderField The sorting filter applied to the scheduled snapshot list. Value range: <Sort by creation time of scheduled snapshot. By default, this is sorted by creation time.
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
        if (array_key_exists("AutoSnapshotPolicyIds",$param) and $param["AutoSnapshotPolicyIds"] !== null) {
            $this->AutoSnapshotPolicyIds = $param["AutoSnapshotPolicyIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
