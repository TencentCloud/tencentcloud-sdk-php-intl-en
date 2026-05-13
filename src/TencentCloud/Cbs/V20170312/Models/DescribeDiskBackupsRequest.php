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
 * DescribeDiskBackups request structure.
 *
 * @method array getDiskBackupIds() Obtain List of IDs of the backup points to be queried. `DiskBackupIds` and `Filters` cannot be specified at the same time.
 * @method void setDiskBackupIds(array $DiskBackupIds) Set List of IDs of the backup points to be queried. `DiskBackupIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter criteria. parameters must not be specified simultaneously for DiskBackupIds and Filters. filter conditions:<br><li>disk-backup-id - Array of String - required: no - (filter condition) Filters by backup point id. backup point id format: dbp-11112222.</li><br><li>disk-id - Array of String - required: no - (filter condition) Filters by cloud disk id where the backup point was created. cloud disk id format: disk-srftydert.</li><br><li>disk-usage - Array of String - required: no - (filter condition) Filters by cloud disk type (SYSTEM_disk: represents SYSTEM disk | DATA_disk: represents DATA disk).</li>.
 * @method void setFilters(array $Filters) Set Filter criteria. parameters must not be specified simultaneously for DiskBackupIds and Filters. filter conditions:<br><li>disk-backup-id - Array of String - required: no - (filter condition) Filters by backup point id. backup point id format: dbp-11112222.</li><br><li>disk-id - Array of String - required: no - (filter condition) Filters by cloud disk id where the backup point was created. cloud disk id format: disk-srftydert.</li><br><li>disk-usage - Array of String - required: no - (filter condition) Filters by cloud disk type (SYSTEM_disk: represents SYSTEM disk | DATA_disk: represents DATA disk).</li>.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
 * @method string getOrder() Obtain Specifies the sorting order of the CBS backup point list. default: ASC. valid values: <br><li>ASC: ascending order</li><br><li>DESC: descending order.</li>.
 * @method void setOrder(string $Order) Set Specifies the sorting order of the CBS backup point list. default: ASC. valid values: <br><li>ASC: ascending order</li><br><li>DESC: descending order.</li>.
 * @method string getOrderField() Obtain Field on which the list of cloud disk backup points is sorted. valid values: <br><li>CREATE_TIME: sort by creation TIME of the cloud disk backup point</li><br>sort by creation TIME by default.
 * @method void setOrderField(string $OrderField) Set Field on which the list of cloud disk backup points is sorted. valid values: <br><li>CREATE_TIME: sort by creation TIME of the cloud disk backup point</li><br>sort by creation TIME by default.
 */
class DescribeDiskBackupsRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the backup points to be queried. `DiskBackupIds` and `Filters` cannot be specified at the same time.
     */
    public $DiskBackupIds;

    /**
     * @var array Filter criteria. parameters must not be specified simultaneously for DiskBackupIds and Filters. filter conditions:<br><li>disk-backup-id - Array of String - required: no - (filter condition) Filters by backup point id. backup point id format: dbp-11112222.</li><br><li>disk-id - Array of String - required: no - (filter condition) Filters by cloud disk id where the backup point was created. cloud disk id format: disk-srftydert.</li><br><li>disk-usage - Array of String - required: no - (filter condition) Filters by cloud disk type (SYSTEM_disk: represents SYSTEM disk | DATA_disk: represents DATA disk).</li>.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var string Specifies the sorting order of the CBS backup point list. default: ASC. valid values: <br><li>ASC: ascending order</li><br><li>DESC: descending order.</li>.
     */
    public $Order;

    /**
     * @var string Field on which the list of cloud disk backup points is sorted. valid values: <br><li>CREATE_TIME: sort by creation TIME of the cloud disk backup point</li><br>sort by creation TIME by default.
     */
    public $OrderField;

    /**
     * @param array $DiskBackupIds List of IDs of the backup points to be queried. `DiskBackupIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter criteria. parameters must not be specified simultaneously for DiskBackupIds and Filters. filter conditions:<br><li>disk-backup-id - Array of String - required: no - (filter condition) Filters by backup point id. backup point id format: dbp-11112222.</li><br><li>disk-id - Array of String - required: no - (filter condition) Filters by cloud disk id where the backup point was created. cloud disk id format: disk-srftydert.</li><br><li>disk-usage - Array of String - required: no - (filter condition) Filters by cloud disk type (SYSTEM_disk: represents SYSTEM disk | DATA_disk: represents DATA disk).</li>.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API [Overview](https://intl.cloud.tencent.com/document/product/362/15633?from_cn_redirect=1).
     * @param string $Order Specifies the sorting order of the CBS backup point list. default: ASC. valid values: <br><li>ASC: ascending order</li><br><li>DESC: descending order.</li>.
     * @param string $OrderField Field on which the list of cloud disk backup points is sorted. valid values: <br><li>CREATE_TIME: sort by creation TIME of the cloud disk backup point</li><br>sort by creation TIME by default.
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
        if (array_key_exists("DiskBackupIds",$param) and $param["DiskBackupIds"] !== null) {
            $this->DiskBackupIds = $param["DiskBackupIds"];
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
