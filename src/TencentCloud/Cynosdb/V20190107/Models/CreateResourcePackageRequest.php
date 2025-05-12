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
 * CreateResourcePackage request structure.
 *
 * @method string getInstanceType() Obtain Instance type. currently fixed to cynosdb-serverless.
 * @method void setInstanceType(string $InstanceType) Set Instance type. currently fixed to cynosdb-serverless.
 * @method string getPackageRegion() Obtain Resource package region of use: chineseMainland - common in the chinese mainland. overseas - universally applicable in hong kong (china), macao (china), taiwan (china), and overseas.
 * @method void setPackageRegion(string $PackageRegion) Set Resource package region of use: chineseMainland - common in the chinese mainland. overseas - universally applicable in hong kong (china), macao (china), taiwan (china), and overseas.
 * @method string getPackageType() Obtain Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack).
 * @method void setPackageType(string $PackageType) Set Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack).
 * @method string getPackageVersion() Obtain Resource pack edition. Valid values: `base` (basic edition), `common` (general edition), `enterprise` (enterprise edition).
 * @method void setPackageVersion(string $PackageVersion) Set Resource pack edition. Valid values: `base` (basic edition), `common` (general edition), `enterprise` (enterprise edition).
 * @method float getPackageSpec() Obtain Resource pack size. Unit of the compute resource pack: Ten thousand.  Unit of the storage resource pack:  GB
 * @method void setPackageSpec(float $PackageSpec) Set Resource pack size. Unit of the compute resource pack: Ten thousand.  Unit of the storage resource pack:  GB
 * @method integer getExpireDay() Obtain Validity period of a resource pack in days
 * @method void setExpireDay(integer $ExpireDay) Set Validity period of a resource pack in days
 * @method integer getPackageCount() Obtain Number of the resource packs to be purchased
 * @method void setPackageCount(integer $PackageCount) Set Number of the resource packs to be purchased
 * @method string getPackageName() Obtain Resource pack name
 * @method void setPackageName(string $PackageName) Set Resource pack name
 */
class CreateResourcePackageRequest extends AbstractModel
{
    /**
     * @var string Instance type. currently fixed to cynosdb-serverless.
     */
    public $InstanceType;

    /**
     * @var string Resource package region of use: chineseMainland - common in the chinese mainland. overseas - universally applicable in hong kong (china), macao (china), taiwan (china), and overseas.
     */
    public $PackageRegion;

    /**
     * @var string Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack).
     */
    public $PackageType;

    /**
     * @var string Resource pack edition. Valid values: `base` (basic edition), `common` (general edition), `enterprise` (enterprise edition).
     */
    public $PackageVersion;

    /**
     * @var float Resource pack size. Unit of the compute resource pack: Ten thousand.  Unit of the storage resource pack:  GB
     */
    public $PackageSpec;

    /**
     * @var integer Validity period of a resource pack in days
     */
    public $ExpireDay;

    /**
     * @var integer Number of the resource packs to be purchased
     */
    public $PackageCount;

    /**
     * @var string Resource pack name
     */
    public $PackageName;

    /**
     * @param string $InstanceType Instance type. currently fixed to cynosdb-serverless.
     * @param string $PackageRegion Resource package region of use: chineseMainland - common in the chinese mainland. overseas - universally applicable in hong kong (china), macao (china), taiwan (china), and overseas.
     * @param string $PackageType Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack).
     * @param string $PackageVersion Resource pack edition. Valid values: `base` (basic edition), `common` (general edition), `enterprise` (enterprise edition).
     * @param float $PackageSpec Resource pack size. Unit of the compute resource pack: Ten thousand.  Unit of the storage resource pack:  GB
     * @param integer $ExpireDay Validity period of a resource pack in days
     * @param integer $PackageCount Number of the resource packs to be purchased
     * @param string $PackageName Resource pack name
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
