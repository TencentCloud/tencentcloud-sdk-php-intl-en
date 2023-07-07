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
 * DescribeResourcePackageSaleSpec request structure.
 *
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getPackageRegion() Obtain Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland).
 * @method void setPackageRegion(string $PackageRegion) Set Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland).
 * @method string getPackageType() Obtain Resource pack type. Valid values: `CCU` (compute resource pack, `DISK` (storage resource pack).
 * @method void setPackageType(string $PackageType) Set Resource pack type. Valid values: `CCU` (compute resource pack, `DISK` (storage resource pack).
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
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
     * @var string Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland).
     */
    public $PackageRegion;

    /**
     * @var string Resource pack type. Valid values: `CCU` (compute resource pack, `DISK` (storage resource pack).
     */
    public $PackageType;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @param string $InstanceType Instance type
     * @param string $PackageRegion Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland).
     * @param string $PackageType Resource pack type. Valid values: `CCU` (compute resource pack, `DISK` (storage resource pack).
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
