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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupSummaries request structure.
 *
 * @method string getProduct() Obtain TencentDB product type to be queried. Currently, only `mysql` is supported.
 * @method void setProduct(string $Product) Set TencentDB product type to be queried. Currently, only `mysql` is supported.
 * @method integer getOffset() Obtain Paginated query offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Paginated query offset. Default value: `0`.
 * @method integer getLimit() Obtain Maximum entries returned per page, which ranges from 1 to 100. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Maximum entries returned per page, which ranges from 1 to 100. Default value: `20`.
 * @method string getOrderBy() Obtain Sorting criterion. Valid values: `BackupVolume` (backup capacity), `DataBackupVolume` (data backup capacity), `BinlogBackupVolume` (log backup capacity), `AutoBackupVolume` (automatic backup capacity), `ManualBackupVolume` (manual backup capacity). Default value: `BackupVolume`.
 * @method void setOrderBy(string $OrderBy) Set Sorting criterion. Valid values: `BackupVolume` (backup capacity), `DataBackupVolume` (data backup capacity), `BinlogBackupVolume` (log backup capacity), `AutoBackupVolume` (automatic backup capacity), `ManualBackupVolume` (manual backup capacity). Default value: `BackupVolume`.
 * @method string getOrderDirection() Obtain Sorting order. Valid values: `ASC` (ascending), `DESC` (descending). Default value: `ASC`.
 * @method void setOrderDirection(string $OrderDirection) Set Sorting order. Valid values: `ASC` (ascending), `DESC` (descending). Default value: `ASC`.
 */
class DescribeBackupSummariesRequest extends AbstractModel
{
    /**
     * @var string TencentDB product type to be queried. Currently, only `mysql` is supported.
     */
    public $Product;

    /**
     * @var integer Paginated query offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Maximum entries returned per page, which ranges from 1 to 100. Default value: `20`.
     */
    public $Limit;

    /**
     * @var string Sorting criterion. Valid values: `BackupVolume` (backup capacity), `DataBackupVolume` (data backup capacity), `BinlogBackupVolume` (log backup capacity), `AutoBackupVolume` (automatic backup capacity), `ManualBackupVolume` (manual backup capacity). Default value: `BackupVolume`.
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `ASC` (ascending), `DESC` (descending). Default value: `ASC`.
     */
    public $OrderDirection;

    /**
     * @param string $Product TencentDB product type to be queried. Currently, only `mysql` is supported.
     * @param integer $Offset Paginated query offset. Default value: `0`.
     * @param integer $Limit Maximum entries returned per page, which ranges from 1 to 100. Default value: `20`.
     * @param string $OrderBy Sorting criterion. Valid values: `BackupVolume` (backup capacity), `DataBackupVolume` (data backup capacity), `BinlogBackupVolume` (log backup capacity), `AutoBackupVolume` (automatic backup capacity), `ManualBackupVolume` (manual backup capacity). Default value: `BackupVolume`.
     * @param string $OrderDirection Sorting order. Valid values: `ASC` (ascending), `DESC` (descending). Default value: `ASC`.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
