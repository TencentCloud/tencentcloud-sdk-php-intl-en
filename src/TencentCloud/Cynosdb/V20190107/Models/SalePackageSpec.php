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
 * @method string getPackageRegion() Obtain Region of the resource pack Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageRegion(string $PackageRegion) Set Region of the resource pack Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPackageType() Obtain Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageType(string $PackageType) Set Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPackageVersion() Obtain Resource pack edition. Valid values: `base` (basic edition), `common` (general edition), `enterprise` (enterprise edition). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageVersion(string $PackageVersion) Set Resource pack edition. Valid values: `base` (basic edition), `common` (general edition), `enterprise` (enterprise edition). Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getMinPackageSpec() Obtain Minimum number of resources for the current edition of the resource pack.  Unit of the compute resources: pcs.  Unit of the storage resources: GB. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinPackageSpec(float $MinPackageSpec) Set Minimum number of resources for the current edition of the resource pack.  Unit of the compute resources: pcs.  Unit of the storage resources: GB. Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getMaxPackageSpec() Obtain Maximum number of resources for the current edition of the resource pack.  Unit of the compute resources: pcs.  Unit of the storage resources: GB. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxPackageSpec(float $MaxPackageSpec) Set Maximum number of resources for the current edition of the resource pack.  Unit of the compute resources: pcs.  Unit of the storage resources: GB. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExpireDay() Obtain Validity period of a resource pack in days Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireDay(integer $ExpireDay) Set Validity period of a resource pack in days Note: This field may return null, indicating that no valid values can be obtained.
 */
class SalePackageSpec extends AbstractModel
{
    /**
     * @var string Region of the resource pack Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageRegion;

    /**
     * @var string Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageType;

    /**
     * @var string Resource pack edition. Valid values: `base` (basic edition), `common` (general edition), `enterprise` (enterprise edition). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageVersion;

    /**
     * @var float Minimum number of resources for the current edition of the resource pack.  Unit of the compute resources: pcs.  Unit of the storage resources: GB. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinPackageSpec;

    /**
     * @var float Maximum number of resources for the current edition of the resource pack.  Unit of the compute resources: pcs.  Unit of the storage resources: GB. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxPackageSpec;

    /**
     * @var integer Validity period of a resource pack in days Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireDay;

    /**
     * @param string $PackageRegion Region of the resource pack Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PackageType Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PackageVersion Resource pack edition. Valid values: `base` (basic edition), `common` (general edition), `enterprise` (enterprise edition). Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $MinPackageSpec Minimum number of resources for the current edition of the resource pack.  Unit of the compute resources: pcs.  Unit of the storage resources: GB. Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $MaxPackageSpec Maximum number of resources for the current edition of the resource pack.  Unit of the compute resources: pcs.  Unit of the storage resources: GB. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExpireDay Validity period of a resource pack in days Note: This field may return null, indicating that no valid values can be obtained.
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
