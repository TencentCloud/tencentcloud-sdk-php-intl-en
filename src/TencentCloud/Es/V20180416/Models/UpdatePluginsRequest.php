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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePlugins request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method array getInstallPluginList() Obtain Name list of plug-ins that needs to be installed
 * @method void setInstallPluginList(array $InstallPluginList) Set Name list of plug-ins that needs to be installed
 * @method array getRemovePluginList() Obtain List of plug-in names to uninstall
 * @method void setRemovePluginList(array $RemovePluginList) Set List of plug-in names to uninstall
 * @method boolean getForceRestart() Obtain Whether to force restart. Default value: false
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to force restart. Default value: false
 * @method boolean getForceUpdate() Obtain Whether to reinstall. Default value: false
 * @method void setForceUpdate(boolean $ForceUpdate) Set Whether to reinstall. Default value: false
 * @method integer getPluginType() Obtain 0: System plugin
 * @method void setPluginType(integer $PluginType) Set 0: System plugin
 */
class UpdatePluginsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var array Name list of plug-ins that needs to be installed
     */
    public $InstallPluginList;

    /**
     * @var array List of plug-in names to uninstall
     */
    public $RemovePluginList;

    /**
     * @var boolean Whether to force restart. Default value: false
     */
    public $ForceRestart;

    /**
     * @var boolean Whether to reinstall. Default value: false
     */
    public $ForceUpdate;

    /**
     * @var integer 0: System plugin
     */
    public $PluginType;

    /**
     * @param string $InstanceId Instance ID
     * @param array $InstallPluginList Name list of plug-ins that needs to be installed
     * @param array $RemovePluginList List of plug-in names to uninstall
     * @param boolean $ForceRestart Whether to force restart. Default value: false
     * @param boolean $ForceUpdate Whether to reinstall. Default value: false
     * @param integer $PluginType 0: System plugin
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstallPluginList",$param) and $param["InstallPluginList"] !== null) {
            $this->InstallPluginList = $param["InstallPluginList"];
        }

        if (array_key_exists("RemovePluginList",$param) and $param["RemovePluginList"] !== null) {
            $this->RemovePluginList = $param["RemovePluginList"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("ForceUpdate",$param) and $param["ForceUpdate"] !== null) {
            $this->ForceUpdate = $param["ForceUpdate"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }
    }
}
