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
 * DescribeCfsSnapshots request structure.
 *
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method string getSnapshotId() Obtain Snapshot ID
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID
 * @method integer getOffset() Obtain The starting position of paging
 * @method void setOffset(integer $Offset) Set The starting position of paging
 * @method integer getLimit() Obtain Page length
 * @method void setLimit(integer $Limit) Set Page length
 * @method array getFilters() Obtain Filters
 * @method void setFilters(array $Filters) Set Filters
 * @method string getOrderField() Obtain Order field
 * @method void setOrderField(string $OrderField) Set Order field
 * @method string getOrder() Obtain Sorting order (ascending or descending)
 * @method void setOrder(string $Order) Set Sorting order (ascending or descending)
 */
class DescribeCfsSnapshotsRequest extends AbstractModel
{
    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var string Snapshot ID
     */
    public $SnapshotId;

    /**
     * @var integer The starting position of paging
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
     * @var string Order field
     */
    public $OrderField;

    /**
     * @var string Sorting order (ascending or descending)
     */
    public $Order;

    /**
     * @param string $FileSystemId File system ID
     * @param string $SnapshotId Snapshot ID
     * @param integer $Offset The starting position of paging
     * @param integer $Limit Page length
     * @param array $Filters Filters
     * @param string $OrderField Order field
     * @param string $Order Sorting order (ascending or descending)
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
