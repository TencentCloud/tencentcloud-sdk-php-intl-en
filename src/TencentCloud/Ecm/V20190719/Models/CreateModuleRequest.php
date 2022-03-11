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
 * CreateModule request structure.
 *
 * @method string getModuleName() Obtain Module name, such as video live streaming module name. It cannot start with a space or exceed 60 characters.
 * @method void setModuleName(string $ModuleName) Set Module name, such as video live streaming module name. It cannot start with a space or exceed 60 characters.
 * @method integer getDefaultBandWidth() Obtain Default bandwidth in Mbps. It cannot exceed the bandwidth range. For more information, see `DescribeConfig`.
 * @method void setDefaultBandWidth(integer $DefaultBandWidth) Set Default bandwidth in Mbps. It cannot exceed the bandwidth range. For more information, see `DescribeConfig`.
 * @method string getDefaultImageId() Obtain Default image ID, such as `img-qsdf3ff2`.
 * @method void setDefaultImageId(string $DefaultImageId) Set Default image ID, such as `img-qsdf3ff2`.
 * @method string getInstanceType() Obtain Model ID.
 * @method void setInstanceType(string $InstanceType) Set Model ID.
 * @method integer getDefaultSystemDiskSize() Obtain Default system disk size in GB. It is 50 GB by default and cannot exceed the system disk size range. For more information, see `DescribeConfig`.
 * @method void setDefaultSystemDiskSize(integer $DefaultSystemDiskSize) Set Default system disk size in GB. It is 50 GB by default and cannot exceed the system disk size range. For more information, see `DescribeConfig`.
 * @method integer getDefaultDataDiskSize() Obtain Default data disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
 * @method void setDefaultDataDiskSize(integer $DefaultDataDiskSize) Set Default data disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
 * @method boolean getCloseIpDirect() Obtain Whether to disable IP direct access. Valid values:
true: yes
false: no
 * @method void setCloseIpDirect(boolean $CloseIpDirect) Set Whether to disable IP direct access. Valid values:
true: yes
false: no
 * @method array getTagSpecification() Obtain List of tags.
 * @method void setTagSpecification(array $TagSpecification) Set List of tags.
 * @method array getSecurityGroups() Obtain List of default module security groups
 * @method void setSecurityGroups(array $SecurityGroups) Set List of default module security groups
 * @method integer getDefaultBandWidthIn() Obtain Default inbound bandwidth in Mbps. It cannot exceed the bandwidth range. For more information, see `DescribeConfig`.
 * @method void setDefaultBandWidthIn(integer $DefaultBandWidthIn) Set Default inbound bandwidth in Mbps. It cannot exceed the bandwidth range. For more information, see `DescribeConfig`.
 * @method boolean getDisableWanIp() Obtain Whether to prohibit public IP assignment
 * @method void setDisableWanIp(boolean $DisableWanIp) Set Whether to prohibit public IP assignment
 * @method SystemDisk getSystemDisk() Obtain System disk information.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk information.
 * @method array getDataDisks() Obtain Data disk information.
 * @method void setDataDisks(array $DataDisks) Set Data disk information.
 */
class CreateModuleRequest extends AbstractModel
{
    /**
     * @var string Module name, such as video live streaming module name. It cannot start with a space or exceed 60 characters.
     */
    public $ModuleName;

    /**
     * @var integer Default bandwidth in Mbps. It cannot exceed the bandwidth range. For more information, see `DescribeConfig`.
     */
    public $DefaultBandWidth;

    /**
     * @var string Default image ID, such as `img-qsdf3ff2`.
     */
    public $DefaultImageId;

    /**
     * @var string Model ID.
     */
    public $InstanceType;

    /**
     * @var integer Default system disk size in GB. It is 50 GB by default and cannot exceed the system disk size range. For more information, see `DescribeConfig`.
     */
    public $DefaultSystemDiskSize;

    /**
     * @var integer Default data disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
     */
    public $DefaultDataDiskSize;

    /**
     * @var boolean Whether to disable IP direct access. Valid values:
true: yes
false: no
     */
    public $CloseIpDirect;

    /**
     * @var array List of tags.
     */
    public $TagSpecification;

    /**
     * @var array List of default module security groups
     */
    public $SecurityGroups;

    /**
     * @var integer Default inbound bandwidth in Mbps. It cannot exceed the bandwidth range. For more information, see `DescribeConfig`.
     */
    public $DefaultBandWidthIn;

    /**
     * @var boolean Whether to prohibit public IP assignment
     */
    public $DisableWanIp;

    /**
     * @var SystemDisk System disk information.
     */
    public $SystemDisk;

    /**
     * @var array Data disk information.
     */
    public $DataDisks;

    /**
     * @param string $ModuleName Module name, such as video live streaming module name. It cannot start with a space or exceed 60 characters.
     * @param integer $DefaultBandWidth Default bandwidth in Mbps. It cannot exceed the bandwidth range. For more information, see `DescribeConfig`.
     * @param string $DefaultImageId Default image ID, such as `img-qsdf3ff2`.
     * @param string $InstanceType Model ID.
     * @param integer $DefaultSystemDiskSize Default system disk size in GB. It is 50 GB by default and cannot exceed the system disk size range. For more information, see `DescribeConfig`.
     * @param integer $DefaultDataDiskSize Default data disk size in GB. It cannot exceed the system disk size range. For more information, see `DescribeConfig`.
     * @param boolean $CloseIpDirect Whether to disable IP direct access. Valid values:
true: yes
false: no
     * @param array $TagSpecification List of tags.
     * @param array $SecurityGroups List of default module security groups
     * @param integer $DefaultBandWidthIn Default inbound bandwidth in Mbps. It cannot exceed the bandwidth range. For more information, see `DescribeConfig`.
     * @param boolean $DisableWanIp Whether to prohibit public IP assignment
     * @param SystemDisk $SystemDisk System disk information.
     * @param array $DataDisks Data disk information.
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
        if (array_key_exists("ModuleName",$param) and $param["ModuleName"] !== null) {
            $this->ModuleName = $param["ModuleName"];
        }

        if (array_key_exists("DefaultBandWidth",$param) and $param["DefaultBandWidth"] !== null) {
            $this->DefaultBandWidth = $param["DefaultBandWidth"];
        }

        if (array_key_exists("DefaultImageId",$param) and $param["DefaultImageId"] !== null) {
            $this->DefaultImageId = $param["DefaultImageId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DefaultSystemDiskSize",$param) and $param["DefaultSystemDiskSize"] !== null) {
            $this->DefaultSystemDiskSize = $param["DefaultSystemDiskSize"];
        }

        if (array_key_exists("DefaultDataDiskSize",$param) and $param["DefaultDataDiskSize"] !== null) {
            $this->DefaultDataDiskSize = $param["DefaultDataDiskSize"];
        }

        if (array_key_exists("CloseIpDirect",$param) and $param["CloseIpDirect"] !== null) {
            $this->CloseIpDirect = $param["CloseIpDirect"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("DefaultBandWidthIn",$param) and $param["DefaultBandWidthIn"] !== null) {
            $this->DefaultBandWidthIn = $param["DefaultBandWidthIn"];
        }

        if (array_key_exists("DisableWanIp",$param) and $param["DisableWanIp"] !== null) {
            $this->DisableWanIp = $param["DisableWanIp"];
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
