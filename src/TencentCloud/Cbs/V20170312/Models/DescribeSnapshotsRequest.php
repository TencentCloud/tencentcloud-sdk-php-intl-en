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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshots request structure.
 *
 * @method array getSnapshotIds() Obtain List of snapshot IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
 * @method void setSnapshotIds(array $SnapshotIds) Set List of snapshot IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
 * @method array getFilters() Obtain Filter conditions. The specification of both the `SnapshotIds` and `Filters` parameters is not supported. <br><li>snapshot-id - Array of String - Required or not: No - (Filter condition) Filter by the snapshot ID. The format of the snapshot ID is as follows: `snap-11112222`. <br><li>snapshot-name - Array of String - Required or not: No - (Filter condition) Filter by the snapshot name. <br><li>snapshot-state - Array of String - Required or not: No - (Filter condition) Filter by the snapshot status (NORMAL: normal | CREATING: creating | ROLLBACKING: rolling back). <br><li>disk-usage - Array of String - Required or not: No - (Filter condition) Filter by the type of the cloud disk for which the snapshot is created (SYSTEM_DISK: system disk | DATA_DISK: data disk). <br><li>project-id - Array of String - Required or not: No - (Filter condition) Filter by ID of the project to which the cloud disk belongs. <br><li>disk-id - Array of String - Required or not: No - (Filter condition) Filter by the ID of the cloud disk for which the snapshot is created. <br><li>zone - Array of String - Required or not: No - (Filter condition) Filter by [Availability Zone](/document/product/213/15753#ZoneInfo). <br><li>encrypt - Array of String - Required or not: No - (Filter condition) According to whether it is an encrypted disk snapshot. (TRUE: indicates an encrypted disk snapshot | FALSE: indicates that it is not an encrypted disk snapshot.)
 * @method void setFilters(array $Filters) Set Filter conditions. The specification of both the `SnapshotIds` and `Filters` parameters is not supported. <br><li>snapshot-id - Array of String - Required or not: No - (Filter condition) Filter by the snapshot ID. The format of the snapshot ID is as follows: `snap-11112222`. <br><li>snapshot-name - Array of String - Required or not: No - (Filter condition) Filter by the snapshot name. <br><li>snapshot-state - Array of String - Required or not: No - (Filter condition) Filter by the snapshot status (NORMAL: normal | CREATING: creating | ROLLBACKING: rolling back). <br><li>disk-usage - Array of String - Required or not: No - (Filter condition) Filter by the type of the cloud disk for which the snapshot is created (SYSTEM_DISK: system disk | DATA_DISK: data disk). <br><li>project-id - Array of String - Required or not: No - (Filter condition) Filter by ID of the project to which the cloud disk belongs. <br><li>disk-id - Array of String - Required or not: No - (Filter condition) Filter by the ID of the cloud disk for which the snapshot is created. <br><li>zone - Array of String - Required or not: No - (Filter condition) Filter by [Availability Zone](/document/product/213/15753#ZoneInfo). <br><li>encrypt - Array of String - Required or not: No - (Filter condition) According to whether it is an encrypted disk snapshot. (TRUE: indicates an encrypted disk snapshot | FALSE: indicates that it is not an encrypted disk snapshot.)
 * @method integer getOffset() Obtain Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](/document/product/362/15633).
 * @method void setOffset(integer $Offset) Set Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](/document/product/362/15633).
 * @method integer getLimit() Obtain Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](/document/product/362/15633).
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](/document/product/362/15633).
 * @method string getOrder() Obtain Outputs the ordering of the cloud disk list. Value range: <br><li>ASC: Ascending order <br><li>DESC: Descending order.
 * @method void setOrder(string $Order) Set Outputs the ordering of the cloud disk list. Value range: <br><li>ASC: Ascending order <br><li>DESC: Descending order.
 * @method string getOrderField() Obtain The field by which the snapshot list is sorted. Value range: <br><li>CREATE_TIME: sorted by the creation time of the snapshots <br>By default, the snapshot list is sorted by the creation time of snapshots.
 * @method void setOrderField(string $OrderField) Set The field by which the snapshot list is sorted. Value range: <br><li>CREATE_TIME: sorted by the creation time of the snapshots <br>By default, the snapshot list is sorted by the creation time of snapshots.
 */
class DescribeSnapshotsRequest extends AbstractModel
{
    /**
     * @var array List of snapshot IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
     */
    public $SnapshotIds;

    /**
     * @var array Filter conditions. The specification of both the `SnapshotIds` and `Filters` parameters is not supported. <br><li>snapshot-id - Array of String - Required or not: No - (Filter condition) Filter by the snapshot ID. The format of the snapshot ID is as follows: `snap-11112222`. <br><li>snapshot-name - Array of String - Required or not: No - (Filter condition) Filter by the snapshot name. <br><li>snapshot-state - Array of String - Required or not: No - (Filter condition) Filter by the snapshot status (NORMAL: normal | CREATING: creating | ROLLBACKING: rolling back). <br><li>disk-usage - Array of String - Required or not: No - (Filter condition) Filter by the type of the cloud disk for which the snapshot is created (SYSTEM_DISK: system disk | DATA_DISK: data disk). <br><li>project-id - Array of String - Required or not: No - (Filter condition) Filter by ID of the project to which the cloud disk belongs. <br><li>disk-id - Array of String - Required or not: No - (Filter condition) Filter by the ID of the cloud disk for which the snapshot is created. <br><li>zone - Array of String - Required or not: No - (Filter condition) Filter by [Availability Zone](/document/product/213/15753#ZoneInfo). <br><li>encrypt - Array of String - Required or not: No - (Filter condition) According to whether it is an encrypted disk snapshot. (TRUE: indicates an encrypted disk snapshot | FALSE: indicates that it is not an encrypted disk snapshot.)
     */
    public $Filters;

    /**
     * @var integer Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](/document/product/362/15633).
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](/document/product/362/15633).
     */
    public $Limit;

    /**
     * @var string Outputs the ordering of the cloud disk list. Value range: <br><li>ASC: Ascending order <br><li>DESC: Descending order.
     */
    public $Order;

    /**
     * @var string The field by which the snapshot list is sorted. Value range: <br><li>CREATE_TIME: sorted by the creation time of the snapshots <br>By default, the snapshot list is sorted by the creation time of snapshots.
     */
    public $OrderField;

    /**
     * @param array $SnapshotIds List of snapshot IDs to be queried. The parameter does not support specifying both `SnapshotIds` and `Filters`.
     * @param array $Filters Filter conditions. The specification of both the `SnapshotIds` and `Filters` parameters is not supported. <br><li>snapshot-id - Array of String - Required or not: No - (Filter condition) Filter by the snapshot ID. The format of the snapshot ID is as follows: `snap-11112222`. <br><li>snapshot-name - Array of String - Required or not: No - (Filter condition) Filter by the snapshot name. <br><li>snapshot-state - Array of String - Required or not: No - (Filter condition) Filter by the snapshot status (NORMAL: normal | CREATING: creating | ROLLBACKING: rolling back). <br><li>disk-usage - Array of String - Required or not: No - (Filter condition) Filter by the type of the cloud disk for which the snapshot is created (SYSTEM_DISK: system disk | DATA_DISK: data disk). <br><li>project-id - Array of String - Required or not: No - (Filter condition) Filter by ID of the project to which the cloud disk belongs. <br><li>disk-id - Array of String - Required or not: No - (Filter condition) Filter by the ID of the cloud disk for which the snapshot is created. <br><li>zone - Array of String - Required or not: No - (Filter condition) Filter by [Availability Zone](/document/product/213/15753#ZoneInfo). <br><li>encrypt - Array of String - Required or not: No - (Filter condition) According to whether it is an encrypted disk snapshot. (TRUE: indicates an encrypted disk snapshot | FALSE: indicates that it is not an encrypted disk snapshot.)
     * @param integer $Offset Offset. Default is 0. For more information on `Offset`, please see relevant sections in API [Introduction](/document/product/362/15633).
     * @param integer $Limit Number of results to be returned. Default is 20. Maximum is 100. For more information on `Limit`, please see relevant sections in API [Introduction](/document/product/362/15633).
     * @param string $Order Outputs the ordering of the cloud disk list. Value range: <br><li>ASC: Ascending order <br><li>DESC: Descending order.
     * @param string $OrderField The field by which the snapshot list is sorted. Value range: <br><li>CREATE_TIME: sorted by the creation time of the snapshots <br>By default, the snapshot list is sorted by the creation time of snapshots.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
