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
 * Resource pack details
 *
 * @method string getPackageRegion() Obtain Resource package region of use.
 * @method void setPackageRegion(string $PackageRegion) Set Resource package region of use.
 * @method string getPackageType() Obtain Specifies the resource package type.
CCU - compute resource package.
Storage resource package.
 * @method void setPackageType(string $PackageType) Set Specifies the resource package type.
CCU - compute resource package.
Storage resource package.
 * @method string getPackageVersion() Obtain Resource pack version.
base - basic version; common - general version; enterprise - enterprise edition.
 * @method void setPackageVersion(string $PackageVersion) Set Resource pack version.
base - basic version; common - general version; enterprise - enterprise edition.
 * @method float getMinPackageSpec() Obtain Minimum number of resources in the current version of the resource package. compute resource unit: pieces; storage resource: GB.
 * @method void setMinPackageSpec(float $MinPackageSpec) Set Minimum number of resources in the current version of the resource package. compute resource unit: pieces; storage resource: GB.
 * @method float getMaxPackageSpec() Obtain Specifies the maximum number of resources in the current version of the resource package. valid values: compute resource unit: pieces; storage resource: GB.
 * @method void setMaxPackageSpec(float $MaxPackageSpec) Set Specifies the maximum number of resources in the current version of the resource package. valid values: compute resource unit: pieces; storage resource: GB.
 * @method integer getExpireDay() Obtain Specifies the resource pack validity period. the measurement unit is day.
 * @method void setExpireDay(integer $ExpireDay) Set Specifies the resource pack validity period. the measurement unit is day.
 */
class SalePackageSpec extends AbstractModel
{
    /**
     * @var string Resource package region of use.
     */
    public $PackageRegion;

    /**
     * @var string Specifies the resource package type.
CCU - compute resource package.
Storage resource package.
     */
    public $PackageType;

    /**
     * @var string Resource pack version.
base - basic version; common - general version; enterprise - enterprise edition.
     */
    public $PackageVersion;

    /**
     * @var float Minimum number of resources in the current version of the resource package. compute resource unit: pieces; storage resource: GB.
     */
    public $MinPackageSpec;

    /**
     * @var float Specifies the maximum number of resources in the current version of the resource package. valid values: compute resource unit: pieces; storage resource: GB.
     */
    public $MaxPackageSpec;

    /**
     * @var integer Specifies the resource pack validity period. the measurement unit is day.
     */
    public $ExpireDay;

    /**
     * @param string $PackageRegion Resource package region of use.
     * @param string $PackageType Specifies the resource package type.
CCU - compute resource package.
Storage resource package.
     * @param string $PackageVersion Resource pack version.
base - basic version; common - general version; enterprise - enterprise edition.
     * @param float $MinPackageSpec Minimum number of resources in the current version of the resource package. compute resource unit: pieces; storage resource: GB.
     * @param float $MaxPackageSpec Specifies the maximum number of resources in the current version of the resource package. valid values: compute resource unit: pieces; storage resource: GB.
     * @param integer $ExpireDay Specifies the resource pack validity period. the measurement unit is day.
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
