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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfsSnapshots request structure.
 *
 * @method string getFileSystemId() Obtain File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
 * @method void setFileSystemId(string $FileSystemId) Set File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
 * @method string getSnapshotId() Obtain Snapshot ID.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID.
 * @method integer getOffset() Obtain Paging start position, defaults to 0.
 * @method void setOffset(integer $Offset) Set Paging start position, defaults to 0.
 * @method integer getLimit() Obtain Page length. default value 20.
 * @method void setLimit(integer $Limit) Set Page length. default value 20.
 * @method array getFilters() Obtain Filter criteria
SnapshotId - Array of String - required: no - (filter condition) filter by snapshot ID.
<br>SnapshotName - Array of String - required: no - (filter condition) filter by snapshot name.
<br>FileSystemId - Array of String - required: no - (filter condition) filter by file system ID.
<br>FsName - Array of String - required: no - (filtering conditions) filters file system names.
<br>Status - Array of String - required: no - (filter criteria) filter by snapshot Status. Status classification: creating: under creation | available: running | deleting: deleting | rollbacking_new: being created for new file system | create-failed: creation failed.
<br>tag-key - Array of String - required: no - (filter condition) filter by tag key.
<br>tag:tag-key - Array of String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key.
 * @method void setFilters(array $Filters) Set Filter criteria
SnapshotId - Array of String - required: no - (filter condition) filter by snapshot ID.
<br>SnapshotName - Array of String - required: no - (filter condition) filter by snapshot name.
<br>FileSystemId - Array of String - required: no - (filter condition) filter by file system ID.
<br>FsName - Array of String - required: no - (filtering conditions) filters file system names.
<br>Status - Array of String - required: no - (filter criteria) filter by snapshot Status. Status classification: creating: under creation | available: running | deleting: deleting | rollbacking_new: being created for new file system | create-failed: creation failed.
<br>tag-key - Array of String - required: no - (filter condition) filter by tag key.
<br>tag:tag-key - Array of String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key.
 * @method string getOrderField() Obtain Sort by creation time to obtain value.
 * @method void setOrderField(string $OrderField) Set Sort by creation time to obtain value.
 * @method string getOrder() Obtain Sorting order; ascending or descending order.
 * @method void setOrder(string $Order) Set Sorting order; ascending or descending order.
 */
class DescribeCfsSnapshotsRequest extends AbstractModel
{
    /**
     * @var string File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
     */
    public $FileSystemId;

    /**
     * @var string Snapshot ID.
     */
    public $SnapshotId;

    /**
     * @var integer Paging start position, defaults to 0.
     */
    public $Offset;

    /**
     * @var integer Page length. default value 20.
     */
    public $Limit;

    /**
     * @var array Filter criteria
SnapshotId - Array of String - required: no - (filter condition) filter by snapshot ID.
<br>SnapshotName - Array of String - required: no - (filter condition) filter by snapshot name.
<br>FileSystemId - Array of String - required: no - (filter condition) filter by file system ID.
<br>FsName - Array of String - required: no - (filtering conditions) filters file system names.
<br>Status - Array of String - required: no - (filter criteria) filter by snapshot Status. Status classification: creating: under creation | available: running | deleting: deleting | rollbacking_new: being created for new file system | create-failed: creation failed.
<br>tag-key - Array of String - required: no - (filter condition) filter by tag key.
<br>tag:tag-key - Array of String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key.
     */
    public $Filters;

    /**
     * @var string Sort by creation time to obtain value.
     */
    public $OrderField;

    /**
     * @var string Sorting order; ascending or descending order.
     */
    public $Order;

    /**
     * @param string $FileSystemId File system ID, which can be obtained by querying the file system through the [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1) api.
     * @param string $SnapshotId Snapshot ID.
     * @param integer $Offset Paging start position, defaults to 0.
     * @param integer $Limit Page length. default value 20.
     * @param array $Filters Filter criteria
SnapshotId - Array of String - required: no - (filter condition) filter by snapshot ID.
<br>SnapshotName - Array of String - required: no - (filter condition) filter by snapshot name.
<br>FileSystemId - Array of String - required: no - (filter condition) filter by file system ID.
<br>FsName - Array of String - required: no - (filtering conditions) filters file system names.
<br>Status - Array of String - required: no - (filter criteria) filter by snapshot Status. Status classification: creating: under creation | available: running | deleting: deleting | rollbacking_new: being created for new file system | create-failed: creation failed.
<br>tag-key - Array of String - required: no - (filter condition) filter by tag key.
<br>tag:tag-key - Array of String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key.
     * @param string $OrderField Sort by creation time to obtain value.
     * @param string $Order Sorting order; ascending or descending order.
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
