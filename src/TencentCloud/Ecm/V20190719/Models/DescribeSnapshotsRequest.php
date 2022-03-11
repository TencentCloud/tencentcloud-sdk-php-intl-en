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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshots request structure.
 *
 * @method array getSnapshotIds() Obtain List of IDs of the snapshots to be queried. `SnapshotIds` and `Filters` cannot be specified at the same time.
 * @method void setSnapshotIds(array $SnapshotIds) Set List of IDs of the snapshots to be queried. `SnapshotIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter. `SnapshotIds` and `Filters` cannot be specified at the same time.<br><li>snapshot-id - Array of String - Required: no - (Filter) Filter by snapshot ID, such as `snap-11112222`.<br><li>snapshot-name - Array of String - Required: no - (Filter) Filter by snapshot name.<br><li>snapshot-state - Array of String - Required: no - (Filter) Filter by snapshot status. NORMAL: normal; CREATING: creating; ROLLBACKING: rolling back.<br><li>disk-usage - Array of String - Required: no - (Filter) Filter by the type of the cloud disk from which a snapshot is created. SYSTEM_DISK: system disk; DATA_DISK: data disk.<br><li>project-id  - Array of String - Required: no - (Filter) Filter by the project ID of the cloud disk.<br><li>disk-id  - Array of String - Required: no - (Filter) Filter by the ID of the cloud disk from which a snapshot is created.<br><li>zone - Array of String - Required: no - (Filter) Filter by [AZ](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo).<br><li>encrypt - Array of String - Required: no - (Filter) Filter by whether a snapshot is created from an encrypted cloud disk. TRUE: yes; FALSE: no.
<li>snapshot-type- Array of String - Required: no - (Filter) Filter by the snapshot type specified in `snapshot-type`.
(SHARED_SNAPSHOT: shared snapshot | PRIVATE_SNAPSHOT: private snapshot.)
 * @method void setFilters(array $Filters) Set Filter. `SnapshotIds` and `Filters` cannot be specified at the same time.<br><li>snapshot-id - Array of String - Required: no - (Filter) Filter by snapshot ID, such as `snap-11112222`.<br><li>snapshot-name - Array of String - Required: no - (Filter) Filter by snapshot name.<br><li>snapshot-state - Array of String - Required: no - (Filter) Filter by snapshot status. NORMAL: normal; CREATING: creating; ROLLBACKING: rolling back.<br><li>disk-usage - Array of String - Required: no - (Filter) Filter by the type of the cloud disk from which a snapshot is created. SYSTEM_DISK: system disk; DATA_DISK: data disk.<br><li>project-id  - Array of String - Required: no - (Filter) Filter by the project ID of the cloud disk.<br><li>disk-id  - Array of String - Required: no - (Filter) Filter by the ID of the cloud disk from which a snapshot is created.<br><li>zone - Array of String - Required: no - (Filter) Filter by [AZ](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo).<br><li>encrypt - Array of String - Required: no - (Filter) Filter by whether a snapshot is created from an encrypted cloud disk. TRUE: yes; FALSE: no.
<li>snapshot-type- Array of String - Required: no - (Filter) Filter by the snapshot type specified in `snapshot-type`.
(SHARED_SNAPSHOT: shared snapshot | PRIVATE_SNAPSHOT: private snapshot.)
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method string getOrderField() Obtain Field by which snapshots are sorted. Valid values:<br><li>CREATE_TIME: sort by snapshot creation time<br>Snapshots are sorted by creation time by default.
 * @method void setOrderField(string $OrderField) Set Field by which snapshots are sorted. Valid values:<br><li>CREATE_TIME: sort by snapshot creation time<br>Snapshots are sorted by creation time by default.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method string getOrder() Obtain Sorting order of cloud disks. Valid values:<br><li>ASC: ascending<br><li>DESC: descending.
 * @method void setOrder(string $Order) Set Sorting order of cloud disks. Valid values:<br><li>ASC: ascending<br><li>DESC: descending.
 */
class DescribeSnapshotsRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the snapshots to be queried. `SnapshotIds` and `Filters` cannot be specified at the same time.
     */
    public $SnapshotIds;

    /**
     * @var array Filter. `SnapshotIds` and `Filters` cannot be specified at the same time.<br><li>snapshot-id - Array of String - Required: no - (Filter) Filter by snapshot ID, such as `snap-11112222`.<br><li>snapshot-name - Array of String - Required: no - (Filter) Filter by snapshot name.<br><li>snapshot-state - Array of String - Required: no - (Filter) Filter by snapshot status. NORMAL: normal; CREATING: creating; ROLLBACKING: rolling back.<br><li>disk-usage - Array of String - Required: no - (Filter) Filter by the type of the cloud disk from which a snapshot is created. SYSTEM_DISK: system disk; DATA_DISK: data disk.<br><li>project-id  - Array of String - Required: no - (Filter) Filter by the project ID of the cloud disk.<br><li>disk-id  - Array of String - Required: no - (Filter) Filter by the ID of the cloud disk from which a snapshot is created.<br><li>zone - Array of String - Required: no - (Filter) Filter by [AZ](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo).<br><li>encrypt - Array of String - Required: no - (Filter) Filter by whether a snapshot is created from an encrypted cloud disk. TRUE: yes; FALSE: no.
<li>snapshot-type- Array of String - Required: no - (Filter) Filter by the snapshot type specified in `snapshot-type`.
(SHARED_SNAPSHOT: shared snapshot | PRIVATE_SNAPSHOT: private snapshot.)
     */
    public $Filters;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var string Field by which snapshots are sorted. Valid values:<br><li>CREATE_TIME: sort by snapshot creation time<br>Snapshots are sorted by creation time by default.
     */
    public $OrderField;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var string Sorting order of cloud disks. Valid values:<br><li>ASC: ascending<br><li>DESC: descending.
     */
    public $Order;

    /**
     * @param array $SnapshotIds List of IDs of the snapshots to be queried. `SnapshotIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter. `SnapshotIds` and `Filters` cannot be specified at the same time.<br><li>snapshot-id - Array of String - Required: no - (Filter) Filter by snapshot ID, such as `snap-11112222`.<br><li>snapshot-name - Array of String - Required: no - (Filter) Filter by snapshot name.<br><li>snapshot-state - Array of String - Required: no - (Filter) Filter by snapshot status. NORMAL: normal; CREATING: creating; ROLLBACKING: rolling back.<br><li>disk-usage - Array of String - Required: no - (Filter) Filter by the type of the cloud disk from which a snapshot is created. SYSTEM_DISK: system disk; DATA_DISK: data disk.<br><li>project-id  - Array of String - Required: no - (Filter) Filter by the project ID of the cloud disk.<br><li>disk-id  - Array of String - Required: no - (Filter) Filter by the ID of the cloud disk from which a snapshot is created.<br><li>zone - Array of String - Required: no - (Filter) Filter by [AZ](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo).<br><li>encrypt - Array of String - Required: no - (Filter) Filter by whether a snapshot is created from an encrypted cloud disk. TRUE: yes; FALSE: no.
<li>snapshot-type- Array of String - Required: no - (Filter) Filter by the snapshot type specified in `snapshot-type`.
(SHARED_SNAPSHOT: shared snapshot | PRIVATE_SNAPSHOT: private snapshot.)
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     * @param string $OrderField Field by which snapshots are sorted. Valid values:<br><li>CREATE_TIME: sort by snapshot creation time<br>Snapshots are sorted by creation time by default.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     * @param string $Order Sorting order of cloud disks. Valid values:<br><li>ASC: ascending<br><li>DESC: descending.
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
