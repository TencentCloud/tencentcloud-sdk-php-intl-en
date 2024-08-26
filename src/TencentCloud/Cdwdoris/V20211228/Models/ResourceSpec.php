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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource specification description information
 *
 * @method string getName() Obtain Specification name, such as SCH1
 * @method void setName(string $Name) Set Specification name, such as SCH1
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method integer getMem() Obtain Memory size, in GB
 * @method void setMem(integer $Mem) Set Memory size, in GB
 * @method string getType() Obtain Classification markers, STANDARD/BIGDATA/HIGHIO respectively represent standard type/big data type/high IO.
 * @method void setType(string $Type) Set Classification markers, STANDARD/BIGDATA/HIGHIO respectively represent standard type/big data type/high IO.
 * @method DiskSpec getSystemDisk() Obtain System disk description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSystemDisk(DiskSpec $SystemDisk) Set System disk description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DiskSpec getDataDisk() Obtain Data disk description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataDisk(DiskSpec $DataDisk) Set Data disk description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxNodeSize() Obtain Limit of the maximum number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxNodeSize(integer $MaxNodeSize) Set Limit of the maximum number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAvailable() Obtain Whether it is available. False indicates sell-out.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailable(boolean $Available) Set Whether it is available. False indicates sell-out.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComputeSpecDesc() Obtain Specification description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComputeSpecDesc(string $ComputeSpecDesc) Set Specification description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceQuota() Obtain CVM inventory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceQuota(integer $InstanceQuota) Set CVM inventory
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceSpec extends AbstractModel
{
    /**
     * @var string Specification name, such as SCH1
     */
    public $Name;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var integer Memory size, in GB
     */
    public $Mem;

    /**
     * @var string Classification markers, STANDARD/BIGDATA/HIGHIO respectively represent standard type/big data type/high IO.
     */
    public $Type;

    /**
     * @var DiskSpec System disk description information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SystemDisk;

    /**
     * @var DiskSpec Data disk description information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataDisk;

    /**
     * @var integer Limit of the maximum number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxNodeSize;

    /**
     * @var boolean Whether it is available. False indicates sell-out.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Available;

    /**
     * @var string Specification description information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComputeSpecDesc;

    /**
     * @var integer CVM inventory
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceQuota;

    /**
     * @param string $Name Specification name, such as SCH1
     * @param integer $Cpu Number of CPU cores
     * @param integer $Mem Memory size, in GB
     * @param string $Type Classification markers, STANDARD/BIGDATA/HIGHIO respectively represent standard type/big data type/high IO.
     * @param DiskSpec $SystemDisk System disk description information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DiskSpec $DataDisk Data disk description information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxNodeSize Limit of the maximum number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Available Whether it is available. False indicates sell-out.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComputeSpecDesc Specification description information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceQuota CVM inventory
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new DiskSpec();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = new DiskSpec();
            $this->DataDisk->deserialize($param["DataDisk"]);
        }

        if (array_key_exists("MaxNodeSize",$param) and $param["MaxNodeSize"] !== null) {
            $this->MaxNodeSize = $param["MaxNodeSize"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("ComputeSpecDesc",$param) and $param["ComputeSpecDesc"] !== null) {
            $this->ComputeSpecDesc = $param["ComputeSpecDesc"];
        }

        if (array_key_exists("InstanceQuota",$param) and $param["InstanceQuota"] !== null) {
            $this->InstanceQuota = $param["InstanceQuota"];
        }
    }
}
