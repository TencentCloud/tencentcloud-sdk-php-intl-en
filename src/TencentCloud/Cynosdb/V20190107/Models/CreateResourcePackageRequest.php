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
 * CreateResourcePackage request structure.
 *
 * @method string getInstanceType() Obtain Instance type. Currently fixed to cynosdb-serverless.
 * @method void setInstanceType(string $InstanceType) Set Instance type. Currently fixed to cynosdb-serverless.
 * @method string getPackageRegion() Obtain Region of resource package use. chineseMainland: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions.
 * @method void setPackageRegion(string $PackageRegion) Set Region of resource package use. chineseMainland: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions.
 * @method string getPackageType() Obtain Resource package type. CCU: compute resource package. DISK: storage resource package.
 * @method void setPackageType(string $PackageType) Set Resource package type. CCU: compute resource package. DISK: storage resource package.
 * @method string getPackageVersion() Obtain Resource pack version
base: basic version, common: general version, enterprise: Enterprise Edition
 * @method void setPackageVersion(string $PackageVersion) Set Resource pack version
base: basic version, common: general version, enterprise: Enterprise Edition
 * @method float getPackageSpec() Obtain Package size. Compute resource unit: count. Storage resource: GB.
 * @method void setPackageSpec(float $PackageSpec) Set Package size. Compute resource unit: count. Storage resource: GB.
 * @method integer getExpireDay() Obtain Resource pack validity period. Unit: day.
 * @method void setExpireDay(integer $ExpireDay) Set Resource pack validity period. Unit: day.
 * @method integer getPackageCount() Obtain Number of resource packages to purchase
 * @method void setPackageCount(integer $PackageCount) Set Number of resource packages to purchase
 * @method string getPackageName() Obtain Resource package name.
 * @method void setPackageName(string $PackageName) Set Resource package name.
 */
class CreateResourcePackageRequest extends AbstractModel
{
    /**
     * @var string Instance type. Currently fixed to cynosdb-serverless.
     */
    public $InstanceType;

    /**
     * @var string Region of resource package use. chineseMainland: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions.
     */
    public $PackageRegion;

    /**
     * @var string Resource package type. CCU: compute resource package. DISK: storage resource package.
     */
    public $PackageType;

    /**
     * @var string Resource pack version
base: basic version, common: general version, enterprise: Enterprise Edition
     */
    public $PackageVersion;

    /**
     * @var float Package size. Compute resource unit: count. Storage resource: GB.
     */
    public $PackageSpec;

    /**
     * @var integer Resource pack validity period. Unit: day.
     */
    public $ExpireDay;

    /**
     * @var integer Number of resource packages to purchase
     */
    public $PackageCount;

    /**
     * @var string Resource package name.
     */
    public $PackageName;

    /**
     * @param string $InstanceType Instance type. Currently fixed to cynosdb-serverless.
     * @param string $PackageRegion Region of resource package use. chineseMainland: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions.
     * @param string $PackageType Resource package type. CCU: compute resource package. DISK: storage resource package.
     * @param string $PackageVersion Resource pack version
base: basic version, common: general version, enterprise: Enterprise Edition
     * @param float $PackageSpec Package size. Compute resource unit: count. Storage resource: GB.
     * @param integer $ExpireDay Resource pack validity period. Unit: day.
     * @param integer $PackageCount Number of resource packages to purchase
     * @param string $PackageName Resource package name.
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
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

        if (array_key_exists("PackageSpec",$param) and $param["PackageSpec"] !== null) {
            $this->PackageSpec = $param["PackageSpec"];
        }

        if (array_key_exists("ExpireDay",$param) and $param["ExpireDay"] !== null) {
            $this->ExpireDay = $param["ExpireDay"];
        }

        if (array_key_exists("PackageCount",$param) and $param["PackageCount"] !== null) {
            $this->PackageCount = $param["PackageCount"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
