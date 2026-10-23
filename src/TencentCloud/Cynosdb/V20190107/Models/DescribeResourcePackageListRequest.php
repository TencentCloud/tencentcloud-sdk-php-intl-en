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
 * DescribeResourcePackageList request structure.
 *
 * @method array getPackageId() Obtain Unique ID of the resource package
 * @method void setPackageId(array $PackageId) Set Unique ID of the resource package
 * @method array getPackageName() Obtain Resource package name.
 * @method void setPackageName(array $PackageName) Set Resource package name.
 * @method array getPackageType() Obtain Resource package type
CCU: compute resource package. DISK: storage resource package.
 * @method void setPackageType(array $PackageType) Set Resource package type
CCU: compute resource package. DISK: storage resource package.
 * @method array getPackageRegion() Obtain Region of use for the resource package
china: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions
 * @method void setPackageRegion(array $PackageRegion) Set Region of use for the resource package
china: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions
 * @method array getStatus() Obtain Resource pack status
creating
using: in use;
expired
normal_finish: used up;
apply_refund: refund requested.
refund: refunded.
 * @method void setStatus(array $Status) Set Resource pack status
creating
using: in use;
expired
normal_finish: used up;
apply_refund: refund requested.
refund: refunded.
 * @method array getOrderBy() Obtain Sort condition. Supported sort condition: startTime - effective time.
expireTime: expiration time, packageUsedSpec: used capacity, packageTotalSpec: total storage capacity.
Sequential arrangement by array.
 * @method void setOrderBy(array $OrderBy) Set Sort condition. Supported sort condition: startTime - effective time.
expireTime: expiration time, packageUsedSpec: used capacity, packageTotalSpec: total storage capacity.
Sequential arrangement by array.
 * @method string getOrderDirection() Obtain Sorting method. `DESC`: descending order. `ASC`: ascending order.
 * @method void setOrderDirection(string $OrderDirection) Set Sorting method. `DESC`: descending order. `ASC`: ascending order.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 */
class DescribeResourcePackageListRequest extends AbstractModel
{
    /**
     * @var array Unique ID of the resource package
     */
    public $PackageId;

    /**
     * @var array Resource package name.
     */
    public $PackageName;

    /**
     * @var array Resource package type
CCU: compute resource package. DISK: storage resource package.
     */
    public $PackageType;

    /**
     * @var array Region of use for the resource package
china: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions
     */
    public $PackageRegion;

    /**
     * @var array Resource pack status
creating
using: in use;
expired
normal_finish: used up;
apply_refund: refund requested.
refund: refunded.
     */
    public $Status;

    /**
     * @var array Sort condition. Supported sort condition: startTime - effective time.
expireTime: expiration time, packageUsedSpec: used capacity, packageTotalSpec: total storage capacity.
Sequential arrangement by array.
     */
    public $OrderBy;

    /**
     * @var string Sorting method. `DESC`: descending order. `ASC`: ascending order.
     */
    public $OrderDirection;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @param array $PackageId Unique ID of the resource package
     * @param array $PackageName Resource package name.
     * @param array $PackageType Resource package type
CCU: compute resource package. DISK: storage resource package.
     * @param array $PackageRegion Region of use for the resource package
china: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions
     * @param array $Status Resource pack status
creating
using: in use;
expired
normal_finish: used up;
apply_refund: refund requested.
refund: refunded.
     * @param array $OrderBy Sort condition. Supported sort condition: startTime - effective time.
expireTime: expiration time, packageUsedSpec: used capacity, packageTotalSpec: total storage capacity.
Sequential arrangement by array.
     * @param string $OrderDirection Sorting method. `DESC`: descending order. `ASC`: ascending order.
     * @param integer $Offset Offset.
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
