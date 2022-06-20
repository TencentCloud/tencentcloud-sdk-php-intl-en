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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource information of the CDH instance
 *
 * @method integer getCpuTotal() Obtain Total number of CPU cores in the CDH instance
 * @method void setCpuTotal(integer $CpuTotal) Set Total number of CPU cores in the CDH instance
 * @method integer getCpuAvailable() Obtain Number of available CPU cores in the CDH instance
 * @method void setCpuAvailable(integer $CpuAvailable) Set Number of available CPU cores in the CDH instance
 * @method float getMemTotal() Obtain Total memory size of the CDH instance (unit: GiB)
 * @method void setMemTotal(float $MemTotal) Set Total memory size of the CDH instance (unit: GiB)
 * @method float getMemAvailable() Obtain Available memory size of the CDH instance (unit: GiB)
 * @method void setMemAvailable(float $MemAvailable) Set Available memory size of the CDH instance (unit: GiB)
 * @method integer getDiskTotal() Obtain Total disk size of the CDH instance (unit: GiB)
 * @method void setDiskTotal(integer $DiskTotal) Set Total disk size of the CDH instance (unit: GiB)
 * @method integer getDiskAvailable() Obtain Available disk size of the CDH instance (unit: GiB)
 * @method void setDiskAvailable(integer $DiskAvailable) Set Available disk size of the CDH instance (unit: GiB)
 * @method string getDiskType() Obtain Disk type of the CDH instance
 * @method void setDiskType(string $DiskType) Set Disk type of the CDH instance
 * @method integer getGpuTotal() Obtain Total number of GPU cards in the CDH instance
 * @method void setGpuTotal(integer $GpuTotal) Set Total number of GPU cards in the CDH instance
 * @method integer getGpuAvailable() Obtain Number of available GPU cards in the CDH instance
 * @method void setGpuAvailable(integer $GpuAvailable) Set Number of available GPU cards in the CDH instance
 */
class HostResource extends AbstractModel
{
    /**
     * @var integer Total number of CPU cores in the CDH instance
     */
    public $CpuTotal;

    /**
     * @var integer Number of available CPU cores in the CDH instance
     */
    public $CpuAvailable;

    /**
     * @var float Total memory size of the CDH instance (unit: GiB)
     */
    public $MemTotal;

    /**
     * @var float Available memory size of the CDH instance (unit: GiB)
     */
    public $MemAvailable;

    /**
     * @var integer Total disk size of the CDH instance (unit: GiB)
     */
    public $DiskTotal;

    /**
     * @var integer Available disk size of the CDH instance (unit: GiB)
     */
    public $DiskAvailable;

    /**
     * @var string Disk type of the CDH instance
     */
    public $DiskType;

    /**
     * @var integer Total number of GPU cards in the CDH instance
     */
    public $GpuTotal;

    /**
     * @var integer Number of available GPU cards in the CDH instance
     */
    public $GpuAvailable;

    /**
     * @param integer $CpuTotal Total number of CPU cores in the CDH instance
     * @param integer $CpuAvailable Number of available CPU cores in the CDH instance
     * @param float $MemTotal Total memory size of the CDH instance (unit: GiB)
     * @param float $MemAvailable Available memory size of the CDH instance (unit: GiB)
     * @param integer $DiskTotal Total disk size of the CDH instance (unit: GiB)
     * @param integer $DiskAvailable Available disk size of the CDH instance (unit: GiB)
     * @param string $DiskType Disk type of the CDH instance
     * @param integer $GpuTotal Total number of GPU cards in the CDH instance
     * @param integer $GpuAvailable Number of available GPU cards in the CDH instance
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
        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }

        if (array_key_exists("DiskTotal",$param) and $param["DiskTotal"] !== null) {
            $this->DiskTotal = $param["DiskTotal"];
        }

        if (array_key_exists("DiskAvailable",$param) and $param["DiskAvailable"] !== null) {
            $this->DiskAvailable = $param["DiskAvailable"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("GpuTotal",$param) and $param["GpuTotal"] !== null) {
            $this->GpuTotal = $param["GpuTotal"];
        }

        if (array_key_exists("GpuAvailable",$param) and $param["GpuAvailable"] !== null) {
            $this->GpuAvailable = $param["GpuAvailable"];
        }
    }
}
