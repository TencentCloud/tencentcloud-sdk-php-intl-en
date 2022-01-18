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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud disk configuration
 *
 * @method string getZone() Obtain Availability zone.
 * @method void setZone(string $Zone) Set Availability zone.
 * @method string getDiskType() Obtain Cloud disk type.
 * @method void setDiskType(string $DiskType) Set Cloud disk type.
 * @method string getDiskSalesState() Obtain Cloud disk sale status.
 * @method void setDiskSalesState(string $DiskSalesState) Set Cloud disk sale status.
 * @method integer getMaxDiskSize() Obtain Maximum cloud disk size.
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set Maximum cloud disk size.
 * @method integer getMinDiskSize() Obtain Minimum cloud disk size.
 * @method void setMinDiskSize(integer $MinDiskSize) Set Minimum cloud disk size.
 * @method integer getDiskStepSize() Obtain Cloud disk increment.
 * @method void setDiskStepSize(integer $DiskStepSize) Set Cloud disk increment.
 */
class DiskConfig extends AbstractModel
{
    /**
     * @var string Availability zone.
     */
    public $Zone;

    /**
     * @var string Cloud disk type.
     */
    public $DiskType;

    /**
     * @var string Cloud disk sale status.
     */
    public $DiskSalesState;

    /**
     * @var integer Maximum cloud disk size.
     */
    public $MaxDiskSize;

    /**
     * @var integer Minimum cloud disk size.
     */
    public $MinDiskSize;

    /**
     * @var integer Cloud disk increment.
     */
    public $DiskStepSize;

    /**
     * @param string $Zone Availability zone.
     * @param string $DiskType Cloud disk type.
     * @param string $DiskSalesState Cloud disk sale status.
     * @param integer $MaxDiskSize Maximum cloud disk size.
     * @param integer $MinDiskSize Minimum cloud disk size.
     * @param integer $DiskStepSize Cloud disk increment.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSalesState",$param) and $param["DiskSalesState"] !== null) {
            $this->DiskSalesState = $param["DiskSalesState"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("MinDiskSize",$param) and $param["MinDiskSize"] !== null) {
            $this->MinDiskSize = $param["MinDiskSize"];
        }

        if (array_key_exists("DiskStepSize",$param) and $param["DiskStepSize"] !== null) {
            $this->DiskStepSize = $param["DiskStepSize"];
        }
    }
}
