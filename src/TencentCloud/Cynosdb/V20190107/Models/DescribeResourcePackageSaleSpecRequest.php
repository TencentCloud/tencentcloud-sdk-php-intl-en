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
 * DescribeResourcePackageSaleSpec request structure.
 *
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getPackageRegion() Obtain Region of resource pack usage
china: universally applicable in the Chinese mainland; overseas: universally applicable in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions.
 * @method void setPackageRegion(string $PackageRegion) Set Region of resource pack usage
china: universally applicable in the Chinese mainland; overseas: universally applicable in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions.
 * @method string getPackageType() Obtain Resource package type
CCU - compute resource package
DISK - storage resource package
 * @method void setPackageType(string $PackageType) Set Resource package type
CCU - compute resource package
DISK - storage resource package
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 */
class DescribeResourcePackageSaleSpecRequest extends AbstractModel
{
    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Region of resource pack usage
china: universally applicable in the Chinese mainland; overseas: universally applicable in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions.
     */
    public $PackageRegion;

    /**
     * @var string Resource package type
CCU - compute resource package
DISK - storage resource package
     */
    public $PackageType;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @param string $InstanceType Instance type
     * @param string $PackageRegion Region of resource pack usage
china: universally applicable in the Chinese mainland; overseas: universally applicable in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions.
     * @param string $PackageType Resource package type
CCU - compute resource package
DISK - storage resource package
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("PackageRegion",$param) and $param["PackageRegion"] !== null) {
            $this->PackageRegion = $param["PackageRegion"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
