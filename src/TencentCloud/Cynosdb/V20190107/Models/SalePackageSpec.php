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
 * Resource pack details
 *
 * @method string getPackageRegion() Obtain Region of use for the resource package
 * @method void setPackageRegion(string $PackageRegion) Set Region of use for the resource package
 * @method string getPackageType() Obtain Resource package type
CCU: compute resource package
DISK: storage resource package.
 * @method void setPackageType(string $PackageType) Set Resource package type
CCU: compute resource package
DISK: storage resource package.
 * @method string getPackageVersion() Obtain Resource pack version
base: basic edition, common: general edition, enterprise: Enterprise Edition
 * @method void setPackageVersion(string $PackageVersion) Set Resource pack version
base: basic edition, common: general edition, enterprise: Enterprise Edition
 * @method float getMinPackageSpec() Obtain Minimum number of resources in the current resource package version. Compute resource unit: count; storage resource: GB.
 * @method void setMinPackageSpec(float $MinPackageSpec) Set Minimum number of resources in the current resource package version. Compute resource unit: count; storage resource: GB.
 * @method float getMaxPackageSpec() Obtain Maximum number of resources in the current resource package version. Compute resource unit: count; storage resource: GB.
 * @method void setMaxPackageSpec(float $MaxPackageSpec) Set Maximum number of resources in the current resource package version. Compute resource unit: count; storage resource: GB.
 * @method integer getExpireDay() Obtain Resource pack validity period. Unit: day.
 * @method void setExpireDay(integer $ExpireDay) Set Resource pack validity period. Unit: day.
 */
class SalePackageSpec extends AbstractModel
{
    /**
     * @var string Region of use for the resource package
     */
    public $PackageRegion;

    /**
     * @var string Resource package type
CCU: compute resource package
DISK: storage resource package.
     */
    public $PackageType;

    /**
     * @var string Resource pack version
base: basic edition, common: general edition, enterprise: Enterprise Edition
     */
    public $PackageVersion;

    /**
     * @var float Minimum number of resources in the current resource package version. Compute resource unit: count; storage resource: GB.
     */
    public $MinPackageSpec;

    /**
     * @var float Maximum number of resources in the current resource package version. Compute resource unit: count; storage resource: GB.
     */
    public $MaxPackageSpec;

    /**
     * @var integer Resource pack validity period. Unit: day.
     */
    public $ExpireDay;

    /**
     * @param string $PackageRegion Region of use for the resource package
     * @param string $PackageType Resource package type
CCU: compute resource package
DISK: storage resource package.
     * @param string $PackageVersion Resource pack version
base: basic edition, common: general edition, enterprise: Enterprise Edition
     * @param float $MinPackageSpec Minimum number of resources in the current resource package version. Compute resource unit: count; storage resource: GB.
     * @param float $MaxPackageSpec Maximum number of resources in the current resource package version. Compute resource unit: count; storage resource: GB.
     * @param integer $ExpireDay Resource pack validity period. Unit: day.
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
        if (array_key_exists("PackageRegion",$param) and $param["PackageRegion"] !== null) {
            $this->PackageRegion = $param["PackageRegion"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("MinPackageSpec",$param) and $param["MinPackageSpec"] !== null) {
            $this->MinPackageSpec = $param["MinPackageSpec"];
        }

        if (array_key_exists("MaxPackageSpec",$param) and $param["MaxPackageSpec"] !== null) {
            $this->MaxPackageSpec = $param["MaxPackageSpec"];
        }

        if (array_key_exists("ExpireDay",$param) and $param["ExpireDay"] !== null) {
            $this->ExpireDay = $param["ExpireDay"];
        }
    }
}
