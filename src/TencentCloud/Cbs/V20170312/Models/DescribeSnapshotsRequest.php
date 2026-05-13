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
 * DescribeSnapshots request structure.
 *
 * @method array getSnapshotIds() Obtain List of snapshot IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
 * @method void setSnapshotIds(array $SnapshotIds) Set List of snapshot IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
 * @method array getFilters() Obtain Filter criteria. parameters `SnapshotIds` and `Filters` cannot be specified at the same time.<br><ul><li>snapshot-id<ul><li>filter by cloud disk snapshot id</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-name<ul><li>filter by cloud disk snapshot name</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-state<ul><li>filter by cloud disk snapshot status</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>NORMAL</code>: NORMAL</li><li><code>CREATING</code>: CREATING</li><li><code>ROLLBACKING</code>: rolling back</li><li><code>COPYING_FROM_REMOTE</code>: cross geo-replication in progress</li><li><code>CHECKING_COPIED</code>: COPYING check in progress</li><li><code>TORECYCLE</code>: pending recycling</li></ul></li></ul></li><li>disk-usage<ul><li>filter by cloud disk usage purpose</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>SYSTEM_disk</code>: represent SYSTEM disk</li><li><code>DATA_disk</code>: represent DATA disk</li></ul></li></ul></li><li>project-id<ul><li>filter by cloud disk project id</li><li>type: String</li><li>required: no</li></ul></li><li>disk-id<ul><li>filter by cloud disk id. up to 10 values can be specified</li><li>type: String</li><li>required: no</li></ul></li><li>encrypt<ul><li>filter by whether encrypted or not</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-type<ul><li>query by snapshot ownership type</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>SHARED_snapshot</code>: refer to SHARED snapshot</li><li><code>PRIVATE_snapshot</code>: refer to own PRIVATE snapshot</li></ul></li></ul></li></ul>.
 * @method void setFilters(array $Filters) Set Filter criteria. parameters `SnapshotIds` and `Filters` cannot be specified at the same time.<br><ul><li>snapshot-id<ul><li>filter by cloud disk snapshot id</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-name<ul><li>filter by cloud disk snapshot name</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-state<ul><li>filter by cloud disk snapshot status</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>NORMAL</code>: NORMAL</li><li><code>CREATING</code>: CREATING</li><li><code>ROLLBACKING</code>: rolling back</li><li><code>COPYING_FROM_REMOTE</code>: cross geo-replication in progress</li><li><code>CHECKING_COPIED</code>: COPYING check in progress</li><li><code>TORECYCLE</code>: pending recycling</li></ul></li></ul></li><li>disk-usage<ul><li>filter by cloud disk usage purpose</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>SYSTEM_disk</code>: represent SYSTEM disk</li><li><code>DATA_disk</code>: represent DATA disk</li></ul></li></ul></li><li>project-id<ul><li>filter by cloud disk project id</li><li>type: String</li><li>required: no</li></ul></li><li>disk-id<ul><li>filter by cloud disk id. up to 10 values can be specified</li><li>type: String</li><li>required: no</li></ul></li><li>encrypt<ul><li>filter by whether encrypted or not</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-type<ul><li>query by snapshot ownership type</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>SHARED_snapshot</code>: refer to SHARED snapshot</li><li><code>PRIVATE_snapshot</code>: refer to own PRIVATE snapshot</li></ul></li></ul></li></ul>.
 * @method integer getLimit() Obtain Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method string getOrderField() Obtain Field based on which the snapshot list is sorted. valid values:.
<ul>
<Li>CREATE_TIME: specifies to sort by snapshot creation time.</li>.
<Li>Sort by creation time by default.</li>.
</ul>
 * @method void setOrderField(string $OrderField) Set Field based on which the snapshot list is sorted. valid values:.
<ul>
<Li>CREATE_TIME: specifies to sort by snapshot creation time.</li>.
<Li>Sort by creation time by default.</li>.
</ul>
 * @method integer getOffset() Obtain Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method string getOrder() Obtain Outputs the sorting order of the cloud disk list. valid values:.
<ul>
<Li>ASC: specifies ascending order.</li>.
<Li>DESC: specifies sorting in descending order.</li>.
</ul>

 * @method void setOrder(string $Order) Set Outputs the sorting order of the cloud disk list. valid values:.
<ul>
<Li>ASC: specifies ascending order.</li>.
<Li>DESC: specifies sorting in descending order.</li>.
</ul>
 */
class DescribeSnapshotsRequest extends AbstractModel
{
    /**
     * @var array List of snapshot IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
     */
    public $SnapshotIds;

    /**
     * @var array Filter criteria. parameters `SnapshotIds` and `Filters` cannot be specified at the same time.<br><ul><li>snapshot-id<ul><li>filter by cloud disk snapshot id</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-name<ul><li>filter by cloud disk snapshot name</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-state<ul><li>filter by cloud disk snapshot status</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>NORMAL</code>: NORMAL</li><li><code>CREATING</code>: CREATING</li><li><code>ROLLBACKING</code>: rolling back</li><li><code>COPYING_FROM_REMOTE</code>: cross geo-replication in progress</li><li><code>CHECKING_COPIED</code>: COPYING check in progress</li><li><code>TORECYCLE</code>: pending recycling</li></ul></li></ul></li><li>disk-usage<ul><li>filter by cloud disk usage purpose</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>SYSTEM_disk</code>: represent SYSTEM disk</li><li><code>DATA_disk</code>: represent DATA disk</li></ul></li></ul></li><li>project-id<ul><li>filter by cloud disk project id</li><li>type: String</li><li>required: no</li></ul></li><li>disk-id<ul><li>filter by cloud disk id. up to 10 values can be specified</li><li>type: String</li><li>required: no</li></ul></li><li>encrypt<ul><li>filter by whether encrypted or not</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-type<ul><li>query by snapshot ownership type</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>SHARED_snapshot</code>: refer to SHARED snapshot</li><li><code>PRIVATE_snapshot</code>: refer to own PRIVATE snapshot</li></ul></li></ul></li></ul>.
     */
    public $Filters;

    /**
     * @var integer Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var string Field based on which the snapshot list is sorted. valid values:.
<ul>
<Li>CREATE_TIME: specifies to sort by snapshot creation time.</li>.
<Li>Sort by creation time by default.</li>.
</ul>
     */
    public $OrderField;

    /**
     * @var integer Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var string Outputs the sorting order of the cloud disk list. valid values:.
<ul>
<Li>ASC: specifies ascending order.</li>.
<Li>DESC: specifies sorting in descending order.</li>.
</ul>

     */
    public $Order;

    /**
     * @param array $SnapshotIds List of snapshot IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
     * @param array $Filters Filter criteria. parameters `SnapshotIds` and `Filters` cannot be specified at the same time.<br><ul><li>snapshot-id<ul><li>filter by cloud disk snapshot id</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-name<ul><li>filter by cloud disk snapshot name</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-state<ul><li>filter by cloud disk snapshot status</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>NORMAL</code>: NORMAL</li><li><code>CREATING</code>: CREATING</li><li><code>ROLLBACKING</code>: rolling back</li><li><code>COPYING_FROM_REMOTE</code>: cross geo-replication in progress</li><li><code>CHECKING_COPIED</code>: COPYING check in progress</li><li><code>TORECYCLE</code>: pending recycling</li></ul></li></ul></li><li>disk-usage<ul><li>filter by cloud disk usage purpose</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>SYSTEM_disk</code>: represent SYSTEM disk</li><li><code>DATA_disk</code>: represent DATA disk</li></ul></li></ul></li><li>project-id<ul><li>filter by cloud disk project id</li><li>type: String</li><li>required: no</li></ul></li><li>disk-id<ul><li>filter by cloud disk id. up to 10 values can be specified</li><li>type: String</li><li>required: no</li></ul></li><li>encrypt<ul><li>filter by whether encrypted or not</li><li>type: String</li><li>required: no</li></ul></li><li>snapshot-type<ul><li>query by snapshot ownership type</li><li>type: String</li><li>required: no</li><li>value ranges FROM:<ul><li><code>SHARED_snapshot</code>: refer to SHARED snapshot</li><li><code>PRIVATE_snapshot</code>: refer to own PRIVATE snapshot</li></ul></li></ul></li></ul>.
     * @param integer $Limit Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     * @param string $OrderField Field based on which the snapshot list is sorted. valid values:.
<ul>
<Li>CREATE_TIME: specifies to sort by snapshot creation time.</li>.
<Li>Sort by creation time by default.</li>.
</ul>
     * @param integer $Offset Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     * @param string $Order Outputs the sorting order of the cloud disk list. valid values:.
<ul>
<Li>ASC: specifies ascending order.</li>.
<Li>DESC: specifies sorting in descending order.</li>.
</ul>
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
        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
