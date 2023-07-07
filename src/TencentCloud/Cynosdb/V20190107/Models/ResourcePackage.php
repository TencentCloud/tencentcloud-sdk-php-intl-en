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
 * Information of a resource pack
 *
 * @method string getPackageId() Obtain The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageId(string $PackageId) Set The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPackageType() Obtain Resource pack type. Valid values:  `CCU` (compute resource pack),  `DISK`  (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageType(string $PackageType) Set Resource pack type. Valid values:  `CCU` (compute resource pack),  `DISK`  (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourcePackage extends AbstractModel
{
    /**
     * @var string The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageId;

    /**
     * @var string Resource pack type. Valid values:  `CCU` (compute resource pack),  `DISK`  (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageType;

    /**
     * @param string $PackageId The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PackageType Resource pack type. Valid values:  `CCU` (compute resource pack),  `DISK`  (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }
    }
}
