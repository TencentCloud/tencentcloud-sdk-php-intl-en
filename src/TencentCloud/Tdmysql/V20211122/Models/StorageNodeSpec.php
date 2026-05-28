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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node specification for storage
 *
 * @method string getSpecCode() Obtain <p>Specification code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecCode(string $SpecCode) Set <p>Specification code</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageNodeCpu() Obtain <p>CPU cores of the storage node</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) Set <p>CPU cores of the storage node</p>
 * @method integer getStorageNodeMem() Obtain <p>Storage node memory size</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) Set <p>Storage node memory size</p>
 * @method integer getStorageNodeMaxNum() Obtain <p>Maximum quantity of storage nodes</p>
 * @method void setStorageNodeMaxNum(integer $StorageNodeMaxNum) Set <p>Maximum quantity of storage nodes</p>
 * @method integer getStorageNodeMaxDisk() Obtain <p>Node disk size capacity limit</p>
 * @method void setStorageNodeMaxDisk(integer $StorageNodeMaxDisk) Set <p>Node disk size capacity limit</p>
 * @method integer getStorageNodeMinNum() Obtain <p>Minimum number of storage nodes</p>
 * @method void setStorageNodeMinNum(integer $StorageNodeMinNum) Set <p>Minimum number of storage nodes</p>
 * @method integer getStorageNodeMinDisk() Obtain <p>Node disk size minimum</p>
 * @method void setStorageNodeMinDisk(integer $StorageNodeMinDisk) Set <p>Node disk size minimum</p>
 * @method string getStorageType() Obtain <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(string $StorageType) Set <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageNodeDefaultDisk() Obtain <p>Default disk size of storage node for frontend display</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageNodeDefaultDisk(integer $StorageNodeDefaultDisk) Set <p>Default disk size of storage node for frontend display</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceMode() Obtain <p>Specification support billing mode list</p>
 * @method void setInstanceMode(array $InstanceMode) Set <p>Specification support billing mode list</p>
 * @method string getDiskTypeCategory() Obtain <p>Disk Type CLOUD_DISK: cloud disk LOCAL_DISK: local disk</p>
 * @method void setDiskTypeCategory(string $DiskTypeCategory) Set <p>Disk Type CLOUD_DISK: cloud disk LOCAL_DISK: local disk</p>
 */
class StorageNodeSpec extends AbstractModel
{
    /**
     * @var string <p>Specification code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecCode;

    /**
     * @var integer <p>CPU cores of the storage node</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>Storage node memory size</p>
     */
    public $StorageNodeMem;

    /**
     * @var integer <p>Maximum quantity of storage nodes</p>
     */
    public $StorageNodeMaxNum;

    /**
     * @var integer <p>Node disk size capacity limit</p>
     */
    public $StorageNodeMaxDisk;

    /**
     * @var integer <p>Minimum number of storage nodes</p>
     */
    public $StorageNodeMinNum;

    /**
     * @var integer <p>Node disk size minimum</p>
     */
    public $StorageNodeMinDisk;

    /**
     * @var string <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @var integer <p>Default disk size of storage node for frontend display</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageNodeDefaultDisk;

    /**
     * @var array <p>Specification support billing mode list</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>Disk Type CLOUD_DISK: cloud disk LOCAL_DISK: local disk</p>
     */
    public $DiskTypeCategory;

    /**
     * @param string $SpecCode <p>Specification code</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageNodeCpu <p>CPU cores of the storage node</p>
     * @param integer $StorageNodeMem <p>Storage node memory size</p>
     * @param integer $StorageNodeMaxNum <p>Maximum quantity of storage nodes</p>
     * @param integer $StorageNodeMaxDisk <p>Node disk size capacity limit</p>
     * @param integer $StorageNodeMinNum <p>Minimum number of storage nodes</p>
     * @param integer $StorageNodeMinDisk <p>Node disk size minimum</p>
     * @param string $StorageType <p>Disk Type, CLOUD_HSSD enhanced SSD, CLOUD_TCS local SSD disk</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageNodeDefaultDisk <p>Default disk size of storage node for frontend display</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceMode <p>Specification support billing mode list</p>
     * @param string $DiskTypeCategory <p>Disk Type CLOUD_DISK: cloud disk LOCAL_DISK: local disk</p>
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("StorageNodeMaxNum",$param) and $param["StorageNodeMaxNum"] !== null) {
            $this->StorageNodeMaxNum = $param["StorageNodeMaxNum"];
        }

        if (array_key_exists("StorageNodeMaxDisk",$param) and $param["StorageNodeMaxDisk"] !== null) {
            $this->StorageNodeMaxDisk = $param["StorageNodeMaxDisk"];
        }

        if (array_key_exists("StorageNodeMinNum",$param) and $param["StorageNodeMinNum"] !== null) {
            $this->StorageNodeMinNum = $param["StorageNodeMinNum"];
        }

        if (array_key_exists("StorageNodeMinDisk",$param) and $param["StorageNodeMinDisk"] !== null) {
            $this->StorageNodeMinDisk = $param["StorageNodeMinDisk"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StorageNodeDefaultDisk",$param) and $param["StorageNodeDefaultDisk"] !== null) {
            $this->StorageNodeDefaultDisk = $param["StorageNodeDefaultDisk"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("DiskTypeCategory",$param) and $param["DiskTypeCategory"] !== null) {
            $this->DiskTypeCategory = $param["DiskTypeCategory"];
        }
    }
}
