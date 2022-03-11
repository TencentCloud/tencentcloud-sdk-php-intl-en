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
 * Module information
 *
 * @method string getModuleId() Obtain Module ID.
 * @method void setModuleId(string $ModuleId) Set Module ID.
 * @method string getModuleName() Obtain Module name.
 * @method void setModuleName(string $ModuleName) Set Module name.
 * @method string getModuleState() Obtain Module status. Valid values:
NORMAL: normal.
DELETING: deleting 
DELETEFAILED: failed to delete.
 * @method void setModuleState(string $ModuleState) Set Module status. Valid values:
NORMAL: normal.
DELETING: deleting 
DELETEFAILED: failed to delete.
 * @method integer getDefaultSystemDiskSize() Obtain Default system disk size.
 * @method void setDefaultSystemDiskSize(integer $DefaultSystemDiskSize) Set Default system disk size.
 * @method integer getDefaultDataDiskSize() Obtain Default data disk size.
 * @method void setDefaultDataDiskSize(integer $DefaultDataDiskSize) Set Default data disk size.
 * @method InstanceTypeConfig getInstanceTypeConfig() Obtain Default model.
 * @method void setInstanceTypeConfig(InstanceTypeConfig $InstanceTypeConfig) Set Default model.
 * @method Image getDefaultImage() Obtain Default image.
 * @method void setDefaultImage(Image $DefaultImage) Set Default image.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getDefaultBandwidth() Obtain Default outbound bandwidth.
 * @method void setDefaultBandwidth(integer $DefaultBandwidth) Set Default outbound bandwidth.
 * @method array getTagSet() Obtain Tag set.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set Tag set.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCloseIpDirect() Obtain Whether to disable IP direct access.
 * @method void setCloseIpDirect(integer $CloseIpDirect) Set Whether to disable IP direct access.
 * @method array getSecurityGroupIds() Obtain List of default security group IDs.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set List of default security group IDs.
 * @method integer getDefaultBandwidthIn() Obtain Default inbound bandwidth.
 * @method void setDefaultBandwidthIn(integer $DefaultBandwidthIn) Set Default inbound bandwidth.
 * @method string getUserData() Obtain Custom script data
 * @method void setUserData(string $UserData) Set Custom script data
 * @method SystemDisk getSystemDisk() Obtain System disk information.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk information.
 * @method array getDataDisks() Obtain Data disk information.
 * @method void setDataDisks(array $DataDisks) Set Data disk information.
 */
class Module extends AbstractModel
{
    /**
     * @var string Module ID.
     */
    public $ModuleId;

    /**
     * @var string Module name.
     */
    public $ModuleName;

    /**
     * @var string Module status. Valid values:
NORMAL: normal.
DELETING: deleting 
DELETEFAILED: failed to delete.
     */
    public $ModuleState;

    /**
     * @var integer Default system disk size.
     */
    public $DefaultSystemDiskSize;

    /**
     * @var integer Default data disk size.
     */
    public $DefaultDataDiskSize;

    /**
     * @var InstanceTypeConfig Default model.
     */
    public $InstanceTypeConfig;

    /**
     * @var Image Default image.
     */
    public $DefaultImage;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Default outbound bandwidth.
     */
    public $DefaultBandwidth;

    /**
     * @var array Tag set.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var integer Whether to disable IP direct access.
     */
    public $CloseIpDirect;

    /**
     * @var array List of default security group IDs.
     */
    public $SecurityGroupIds;

    /**
     * @var integer Default inbound bandwidth.
     */
    public $DefaultBandwidthIn;

    /**
     * @var string Custom script data
     */
    public $UserData;

    /**
     * @var SystemDisk System disk information.
     */
    public $SystemDisk;

    /**
     * @var array Data disk information.
     */
    public $DataDisks;

    /**
     * @param string $ModuleId Module ID.
     * @param string $ModuleName Module name.
     * @param string $ModuleState Module status. Valid values:
NORMAL: normal.
DELETING: deleting 
DELETEFAILED: failed to delete.
     * @param integer $DefaultSystemDiskSize Default system disk size.
     * @param integer $DefaultDataDiskSize Default data disk size.
     * @param InstanceTypeConfig $InstanceTypeConfig Default model.
     * @param Image $DefaultImage Default image.
     * @param string $CreateTime Creation time.
     * @param integer $DefaultBandwidth Default outbound bandwidth.
     * @param array $TagSet Tag set.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CloseIpDirect Whether to disable IP direct access.
     * @param array $SecurityGroupIds List of default security group IDs.
     * @param integer $DefaultBandwidthIn Default inbound bandwidth.
     * @param string $UserData Custom script data
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("ModuleName",$param) and $param["ModuleName"] !== null) {
            $this->ModuleName = $param["ModuleName"];
        }

        if (array_key_exists("ModuleState",$param) and $param["ModuleState"] !== null) {
            $this->ModuleState = $param["ModuleState"];
        }

        if (array_key_exists("DefaultSystemDiskSize",$param) and $param["DefaultSystemDiskSize"] !== null) {
            $this->DefaultSystemDiskSize = $param["DefaultSystemDiskSize"];
        }

        if (array_key_exists("DefaultDataDiskSize",$param) and $param["DefaultDataDiskSize"] !== null) {
            $this->DefaultDataDiskSize = $param["DefaultDataDiskSize"];
        }

        if (array_key_exists("InstanceTypeConfig",$param) and $param["InstanceTypeConfig"] !== null) {
            $this->InstanceTypeConfig = new InstanceTypeConfig();
            $this->InstanceTypeConfig->deserialize($param["InstanceTypeConfig"]);
        }

        if (array_key_exists("DefaultImage",$param) and $param["DefaultImage"] !== null) {
            $this->DefaultImage = new Image();
            $this->DefaultImage->deserialize($param["DefaultImage"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DefaultBandwidth",$param) and $param["DefaultBandwidth"] !== null) {
            $this->DefaultBandwidth = $param["DefaultBandwidth"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("CloseIpDirect",$param) and $param["CloseIpDirect"] !== null) {
            $this->CloseIpDirect = $param["CloseIpDirect"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("DefaultBandwidthIn",$param) and $param["DefaultBandwidthIn"] !== null) {
            $this->DefaultBandwidthIn = $param["DefaultBandwidthIn"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
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
