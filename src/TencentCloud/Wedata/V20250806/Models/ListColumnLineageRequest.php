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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListColumnLineage request structure.
 *
 * @method string getTableUniqueId() Obtain Table unique ID.
 * @method void setTableUniqueId(string $TableUniqueId) Set Table unique ID.
 * @method string getDirection() Obtain Lineage direction INPUT｜OUTPUT.
 * @method void setDirection(string $Direction) Set Lineage direction INPUT｜OUTPUT.
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Pagination size.
 * @method void setPageSize(integer $PageSize) Set Pagination size.
 * @method string getColumnName() Obtain Column name.
 * @method void setColumnName(string $ColumnName) Set Column name.
 * @method string getPlatform() Obtain Source: WEDATA|THIRD default WEDATA.
 * @method void setPlatform(string $Platform) Set Source: WEDATA|THIRD default WEDATA.
 */
class ListColumnLineageRequest extends AbstractModel
{
    /**
     * @var string Table unique ID.
     */
    public $TableUniqueId;

    /**
     * @var string Lineage direction INPUT｜OUTPUT.
     */
    public $Direction;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Pagination size.
     */
    public $PageSize;

    /**
     * @var string Column name.
     */
    public $ColumnName;

    /**
     * @var string Source: WEDATA|THIRD default WEDATA.
     */
    public $Platform;

    /**
     * @param string $TableUniqueId Table unique ID.
     * @param string $Direction Lineage direction INPUT｜OUTPUT.
     * @param integer $PageNumber Page number
     * @param integer $PageSize Pagination size.
     * @param string $ColumnName Column name.
     * @param string $Platform Source: WEDATA|THIRD default WEDATA.
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
        if (array_key_exists("TableUniqueId",$param) and $param["TableUniqueId"] !== null) {
            $this->TableUniqueId = $param["TableUniqueId"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }
    }
}
