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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportResourcePackageDeductDetails request structure.
 *
 * @method string getPackageId() Obtain Resource package ID to be exported
 * @method void setPackageId(string $PackageId) Set Resource package ID to be exported
 * @method array getClusterIds() Obtain cynos cluster ID that uses the resource pack capacity
 * @method void setClusterIds(array $ClusterIds) Set cynos cluster ID that uses the resource pack capacity
 * @method string getOrderBy() Obtain Sorting field. Currently supports: createTime (resource package deduction time), successDeductSpec (resource package deduction amount)
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Currently supports: createTime (resource package deduction time), successDeductSpec (resource package deduction amount)
 * @method string getOrderByType() Obtain Sorting type. Supports `ASC`, `DESC`, `asc`, and `desc`.
 * @method void setOrderByType(string $OrderByType) Set Sorting type. Supports `ASC`, `DESC`, `asc`, and `desc`.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method string getLimit() Obtain A maximum of 2000 rows of data can be exported at a time.
 * @method void setLimit(string $Limit) Set A maximum of 2000 rows of data can be exported at a time.
 * @method string getOffset() Obtain Offset and page number
 * @method void setOffset(string $Offset) Set Offset and page number
 * @method string getFileType() Obtain Data export format. Currently only csv format is supported. Reserved for extension.
 * @method void setFileType(string $FileType) Set Data export format. Currently only csv format is supported. Reserved for extension.
 */
class ExportResourcePackageDeductDetailsRequest extends AbstractModel
{
    /**
     * @var string Resource package ID to be exported
     */
    public $PackageId;

    /**
     * @var array cynos cluster ID that uses the resource pack capacity
     */
    public $ClusterIds;

    /**
     * @var string Sorting field. Currently supports: createTime (resource package deduction time), successDeductSpec (resource package deduction amount)
     */
    public $OrderBy;

    /**
     * @var string Sorting type. Supports `ASC`, `DESC`, `asc`, and `desc`.
     */
    public $OrderByType;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var string A maximum of 2000 rows of data can be exported at a time.
     */
    public $Limit;

    /**
     * @var string Offset and page number
     */
    public $Offset;

    /**
     * @var string Data export format. Currently only csv format is supported. Reserved for extension.
     */
    public $FileType;

    /**
     * @param string $PackageId Resource package ID to be exported
     * @param array $ClusterIds cynos cluster ID that uses the resource pack capacity
     * @param string $OrderBy Sorting field. Currently supports: createTime (resource package deduction time), successDeductSpec (resource package deduction amount)
     * @param string $OrderByType Sorting type. Supports `ASC`, `DESC`, `asc`, and `desc`.
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param string $Limit A maximum of 2000 rows of data can be exported at a time.
     * @param string $Offset Offset and page number
     * @param string $FileType Data export format. Currently only csv format is supported. Reserved for extension.
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
