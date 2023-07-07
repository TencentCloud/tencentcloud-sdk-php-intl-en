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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourcePackageList request structure.
 *
 * @method array getPackageId() Obtain The unique ID of a resource pack
 * @method void setPackageId(array $PackageId) Set The unique ID of a resource pack
 * @method array getPackageName() Obtain Resource pack name
 * @method void setPackageName(array $PackageName) Set Resource pack name
 * @method array getPackageType() Obtain Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack).
 * @method void setPackageType(array $PackageType) Set Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack).
 * @method array getPackageRegion() Obtain Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland).
 * @method void setPackageRegion(array $PackageRegion) Set Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland).
 * @method array getStatus() Obtain Resource pack status. Valid values: `using`, `expired`, `normal_finish` (used up), `apply_refund` (requesting a refund), `refund` (refunded).
 * @method void setStatus(array $Status) Set Resource pack status. Valid values: `using`, `expired`, `normal_finish` (used up), `apply_refund` (requesting a refund), `refund` (refunded).
 * @method array getOrderBy() Obtain Sorting conditions. Valid values: `startTime` (effective time), `expireTime` (expiration date), `packageUsedSpec` (used capacity), `packageTotalSpec` (total storage capacity). 
Sorting by array order
 * @method void setOrderBy(array $OrderBy) Set Sorting conditions. Valid values: `startTime` (effective time), `expireTime` (expiration date), `packageUsedSpec` (used capacity), `packageTotalSpec` (total storage capacity). 
Sorting by array order
 * @method string getOrderDirection() Obtain Sorting order. Valid values: `ASC` (ascending), `DESC` (descending).
 * @method void setOrderDirection(string $OrderDirection) Set Sorting order. Valid values: `ASC` (ascending), `DESC` (descending).
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 */
class DescribeResourcePackageListRequest extends AbstractModel
{
    /**
     * @var array The unique ID of a resource pack
     */
    public $PackageId;

    /**
     * @var array Resource pack name
     */
    public $PackageName;

    /**
     * @var array Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack).
     */
    public $PackageType;

    /**
     * @var array Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland).
     */
    public $PackageRegion;

    /**
     * @var array Resource pack status. Valid values: `using`, `expired`, `normal_finish` (used up), `apply_refund` (requesting a refund), `refund` (refunded).
     */
    public $Status;

    /**
     * @var array Sorting conditions. Valid values: `startTime` (effective time), `expireTime` (expiration date), `packageUsedSpec` (used capacity), `packageTotalSpec` (total storage capacity). 
Sorting by array order
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `ASC` (ascending), `DESC` (descending).
     */
    public $OrderDirection;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @param array $PackageId The unique ID of a resource pack
     * @param array $PackageName Resource pack name
     * @param array $PackageType Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack).
     * @param array $PackageRegion Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland).
     * @param array $Status Resource pack status. Valid values: `using`, `expired`, `normal_finish` (used up), `apply_refund` (requesting a refund), `refund` (refunded).
     * @param array $OrderBy Sorting conditions. Valid values: `startTime` (effective time), `expireTime` (expiration date), `packageUsedSpec` (used capacity), `packageTotalSpec` (total storage capacity). 
Sorting by array order
     * @param string $OrderDirection Sorting order. Valid values: `ASC` (ascending), `DESC` (descending).
     * @param integer $Offset Offset
     * @param integer $Limit Limit
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

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("PackageRegion",$param) and $param["PackageRegion"] !== null) {
            $this->PackageRegion = $param["PackageRegion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
