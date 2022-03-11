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
 * ModifyModuleConfig request structure.
 *
 * @method string getModuleId() Obtain Module ID.
 * @method void setModuleId(string $ModuleId) Set Module ID.
 * @method string getInstanceType() Obtain Model ID.
 * @method void setInstanceType(string $InstanceType) Set Model ID.
 * @method integer getDefaultDataDiskSize() Obtain Default data disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
 * @method void setDefaultDataDiskSize(integer $DefaultDataDiskSize) Set Default data disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
 * @method integer getDefaultSystemDiskSize() Obtain Default system disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
 * @method void setDefaultSystemDiskSize(integer $DefaultSystemDiskSize) Set Default system disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
 * @method SystemDisk getSystemDisk() Obtain System disk
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk
 * @method array getDataDisks() Obtain Data disk
 * @method void setDataDisks(array $DataDisks) Set Data disk
 */
class ModifyModuleConfigRequest extends AbstractModel
{
    /**
     * @var string Module ID.
     */
    public $ModuleId;

    /**
     * @var string Model ID.
     */
    public $InstanceType;

    /**
     * @var integer Default data disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
     */
    public $DefaultDataDiskSize;

    /**
     * @var integer Default system disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
     */
    public $DefaultSystemDiskSize;

    /**
     * @var SystemDisk System disk
     */
    public $SystemDisk;

    /**
     * @var array Data disk
     */
    public $DataDisks;

    /**
     * @param string $ModuleId Module ID.
     * @param string $InstanceType Model ID.
     * @param integer $DefaultDataDiskSize Default data disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
     * @param integer $DefaultSystemDiskSize Default system disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
     * @param SystemDisk $SystemDisk System disk
     * @param array $DataDisks Data disk
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DefaultDataDiskSize",$param) and $param["DefaultDataDiskSize"] !== null) {
            $this->DefaultDataDiskSize = $param["DefaultDataDiskSize"];
        }

        if (array_key_exists("DefaultSystemDiskSize",$param) and $param["DefaultSystemDiskSize"] !== null) {
            $this->DefaultSystemDiskSize = $param["DefaultSystemDiskSize"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }
    }
}
