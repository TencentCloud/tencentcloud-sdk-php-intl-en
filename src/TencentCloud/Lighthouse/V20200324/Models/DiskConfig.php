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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud disk configuration
 *
 * @method string getZone() Obtain <P>Availability zone.</p>.
 * @method void setZone(string $Zone) Set <P>Availability zone.</p>.
 * @method string getDiskType() Obtain <p>CLOUD disk type. valid values as follows:</p><li>CLOUD_BASIC: ordinary CLOUD disk</li><li>CLOUD_PREMIUM: high-performance CLOUD block storage</li><li>CLOUD_SSD: SSD CLOUD disk</li>.
 * @method void setDiskType(string $DiskType) Set <p>CLOUD disk type. valid values as follows:</p><li>CLOUD_BASIC: ordinary CLOUD disk</li><li>CLOUD_PREMIUM: high-performance CLOUD block storage</li><li>CLOUD_SSD: SSD CLOUD disk</li>.
 * @method string getDiskSalesState() Obtain <P>Cloud block storage (cbs) saleable state.</p>.
 * @method void setDiskSalesState(string $DiskSalesState) Set <P>Cloud block storage (cbs) saleable state.</p>.
 * @method integer getMaxDiskSize() Obtain <p>Maximum CBS size.</p><p>unit: GB</p>.
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set <p>Maximum CBS size.</p><p>unit: GB</p>.
 * @method integer getMinDiskSize() Obtain <p>Minimum CBS disk size.</p><p>unit: GB</p>.
 * @method void setMinDiskSize(integer $MinDiskSize) Set <p>Minimum CBS disk size.</p><p>unit: GB</p>.
 * @method integer getDiskStepSize() Obtain <p>Cloud block storage (cbs) step length.</p><p>unit: GB</p>.
 * @method void setDiskStepSize(integer $DiskStepSize) Set <p>Cloud block storage (cbs) step length.</p><p>unit: GB</p>.
 */
class DiskConfig extends AbstractModel
{
    /**
     * @var string <P>Availability zone.</p>.
     */
    public $Zone;

    /**
     * @var string <p>CLOUD disk type. valid values as follows:</p><li>CLOUD_BASIC: ordinary CLOUD disk</li><li>CLOUD_PREMIUM: high-performance CLOUD block storage</li><li>CLOUD_SSD: SSD CLOUD disk</li>.
     */
    public $DiskType;

    /**
     * @var string <P>Cloud block storage (cbs) saleable state.</p>.
     */
    public $DiskSalesState;

    /**
     * @var integer <p>Maximum CBS size.</p><p>unit: GB</p>.
     */
    public $MaxDiskSize;

    /**
     * @var integer <p>Minimum CBS disk size.</p><p>unit: GB</p>.
     */
    public $MinDiskSize;

    /**
     * @var integer <p>Cloud block storage (cbs) step length.</p><p>unit: GB</p>.
     */
    public $DiskStepSize;

    /**
     * @param string $Zone <P>Availability zone.</p>.
     * @param string $DiskType <p>CLOUD disk type. valid values as follows:</p><li>CLOUD_BASIC: ordinary CLOUD disk</li><li>CLOUD_PREMIUM: high-performance CLOUD block storage</li><li>CLOUD_SSD: SSD CLOUD disk</li>.
     * @param string $DiskSalesState <P>Cloud block storage (cbs) saleable state.</p>.
     * @param integer $MaxDiskSize <p>Maximum CBS size.</p><p>unit: GB</p>.
     * @param integer $MinDiskSize <p>Minimum CBS disk size.</p><p>unit: GB</p>.
     * @param integer $DiskStepSize <p>Cloud block storage (cbs) step length.</p><p>unit: GB</p>.
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
