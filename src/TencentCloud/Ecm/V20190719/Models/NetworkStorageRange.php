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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upper and lower limits of the disk
 *
 * @method integer getMaxBandwidth() Obtain Network bandwidth cap
 * @method void setMaxBandwidth(integer $MaxBandwidth) Set Network bandwidth cap
 * @method integer getMaxSystemDiskSize() Obtain Upper limit of the data disk size
 * @method void setMaxSystemDiskSize(integer $MaxSystemDiskSize) Set Upper limit of the data disk size
 * @method integer getMinBandwidth() Obtain Lower limit of the network bandwidth
 * @method void setMinBandwidth(integer $MinBandwidth) Set Lower limit of the network bandwidth
 * @method integer getMinSystemDiskSize() Obtain Lower limit of the data disk size
 * @method void setMinSystemDiskSize(integer $MinSystemDiskSize) Set Lower limit of the data disk size
 * @method integer getMaxDataDiskSize() Obtain Maximum data disk size
 * @method void setMaxDataDiskSize(integer $MaxDataDiskSize) Set Maximum data disk size
 * @method integer getMinDataDiskSize() Obtain Minimum data disk size
 * @method void setMinDataDiskSize(integer $MinDataDiskSize) Set Minimum data disk size
 * @method integer getSuggestBandwidth() Obtain Suggested bandwidth
 * @method void setSuggestBandwidth(integer $SuggestBandwidth) Set Suggested bandwidth
 * @method integer getSuggestDataDiskSize() Obtain Suggested disk size
 * @method void setSuggestDataDiskSize(integer $SuggestDataDiskSize) Set Suggested disk size
 * @method integer getSuggestSystemDiskSize() Obtain Suggested system disk size
 * @method void setSuggestSystemDiskSize(integer $SuggestSystemDiskSize) Set Suggested system disk size
 * @method integer getMaxVcpu() Obtain Peak number of CPU cores
 * @method void setMaxVcpu(integer $MaxVcpu) Set Peak number of CPU cores
 * @method integer getMinVcpu() Obtain Minimum number of CPU cores
 * @method void setMinVcpu(integer $MinVcpu) Set Minimum number of CPU cores
 * @method integer getMaxVcpuPerReq() Obtain Maximum number of CPU cores per request
 * @method void setMaxVcpuPerReq(integer $MaxVcpuPerReq) Set Maximum number of CPU cores per request
 * @method integer getPerBandwidth() Obtain Bandwidth increment
 * @method void setPerBandwidth(integer $PerBandwidth) Set Bandwidth increment
 * @method integer getPerDataDisk() Obtain Data disk increment
 * @method void setPerDataDisk(integer $PerDataDisk) Set Data disk increment
 * @method integer getMaxModuleNum() Obtain Total number of modules
 * @method void setMaxModuleNum(integer $MaxModuleNum) Set Total number of modules
 */
class NetworkStorageRange extends AbstractModel
{
    /**
     * @var integer Network bandwidth cap
     */
    public $MaxBandwidth;

    /**
     * @var integer Upper limit of the data disk size
     */
    public $MaxSystemDiskSize;

    /**
     * @var integer Lower limit of the network bandwidth
     */
    public $MinBandwidth;

    /**
     * @var integer Lower limit of the data disk size
     */
    public $MinSystemDiskSize;

    /**
     * @var integer Maximum data disk size
     */
    public $MaxDataDiskSize;

    /**
     * @var integer Minimum data disk size
     */
    public $MinDataDiskSize;

    /**
     * @var integer Suggested bandwidth
     */
    public $SuggestBandwidth;

    /**
     * @var integer Suggested disk size
     */
    public $SuggestDataDiskSize;

    /**
     * @var integer Suggested system disk size
     */
    public $SuggestSystemDiskSize;

    /**
     * @var integer Peak number of CPU cores
     */
    public $MaxVcpu;

    /**
     * @var integer Minimum number of CPU cores
     */
    public $MinVcpu;

    /**
     * @var integer Maximum number of CPU cores per request
     */
    public $MaxVcpuPerReq;

    /**
     * @var integer Bandwidth increment
     */
    public $PerBandwidth;

    /**
     * @var integer Data disk increment
     */
    public $PerDataDisk;

    /**
     * @var integer Total number of modules
     */
    public $MaxModuleNum;

    /**
     * @param integer $MaxBandwidth Network bandwidth cap
     * @param integer $MaxSystemDiskSize Upper limit of the data disk size
     * @param integer $MinBandwidth Lower limit of the network bandwidth
     * @param integer $MinSystemDiskSize Lower limit of the data disk size
     * @param integer $MaxDataDiskSize Maximum data disk size
     * @param integer $MinDataDiskSize Minimum data disk size
     * @param integer $SuggestBandwidth Suggested bandwidth
     * @param integer $SuggestDataDiskSize Suggested disk size
     * @param integer $SuggestSystemDiskSize Suggested system disk size
     * @param integer $MaxVcpu Peak number of CPU cores
     * @param integer $MinVcpu Minimum number of CPU cores
     * @param integer $MaxVcpuPerReq Maximum number of CPU cores per request
     * @param integer $PerBandwidth Bandwidth increment
     * @param integer $PerDataDisk Data disk increment
     * @param integer $MaxModuleNum Total number of modules
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
        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("MaxSystemDiskSize",$param) and $param["MaxSystemDiskSize"] !== null) {
            $this->MaxSystemDiskSize = $param["MaxSystemDiskSize"];
        }

        if (array_key_exists("MinBandwidth",$param) and $param["MinBandwidth"] !== null) {
            $this->MinBandwidth = $param["MinBandwidth"];
        }

        if (array_key_exists("MinSystemDiskSize",$param) and $param["MinSystemDiskSize"] !== null) {
            $this->MinSystemDiskSize = $param["MinSystemDiskSize"];
        }

        if (array_key_exists("MaxDataDiskSize",$param) and $param["MaxDataDiskSize"] !== null) {
            $this->MaxDataDiskSize = $param["MaxDataDiskSize"];
        }

        if (array_key_exists("MinDataDiskSize",$param) and $param["MinDataDiskSize"] !== null) {
            $this->MinDataDiskSize = $param["MinDataDiskSize"];
        }

        if (array_key_exists("SuggestBandwidth",$param) and $param["SuggestBandwidth"] !== null) {
            $this->SuggestBandwidth = $param["SuggestBandwidth"];
        }

        if (array_key_exists("SuggestDataDiskSize",$param) and $param["SuggestDataDiskSize"] !== null) {
            $this->SuggestDataDiskSize = $param["SuggestDataDiskSize"];
        }

        if (array_key_exists("SuggestSystemDiskSize",$param) and $param["SuggestSystemDiskSize"] !== null) {
            $this->SuggestSystemDiskSize = $param["SuggestSystemDiskSize"];
        }

        if (array_key_exists("MaxVcpu",$param) and $param["MaxVcpu"] !== null) {
            $this->MaxVcpu = $param["MaxVcpu"];
        }

        if (array_key_exists("MinVcpu",$param) and $param["MinVcpu"] !== null) {
            $this->MinVcpu = $param["MinVcpu"];
        }

        if (array_key_exists("MaxVcpuPerReq",$param) and $param["MaxVcpuPerReq"] !== null) {
            $this->MaxVcpuPerReq = $param["MaxVcpuPerReq"];
        }

        if (array_key_exists("PerBandwidth",$param) and $param["PerBandwidth"] !== null) {
            $this->PerBandwidth = $param["PerBandwidth"];
        }

        if (array_key_exists("PerDataDisk",$param) and $param["PerDataDisk"] !== null) {
            $this->PerDataDisk = $param["PerDataDisk"];
        }

        if (array_key_exists("MaxModuleNum",$param) and $param["MaxModuleNum"] !== null) {
            $this->MaxModuleNum = $param["MaxModuleNum"];
        }
    }
}
