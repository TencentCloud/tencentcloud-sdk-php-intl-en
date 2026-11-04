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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Plugin details
 *
 * @method PluginConfig getConfig() Obtain Plug-in configuration
 * @method void setConfig(PluginConfig $Config) Set Plug-in configuration
 * @method string getCreateTime() Obtain Creation time, Unix Timestamp
 * @method void setCreateTime(string $CreateTime) Set Creation time, Unix Timestamp
 * @method PluginOperation getOperation() Obtain Plug-in operation management information
 * @method void setOperation(PluginOperation $Operation) Set Plug-in operation management information
 * @method string getPluginId() Obtain Plugin ID
 * @method void setPluginId(string $PluginId) Set Plugin ID
 * @method integer getPluginVersion() Obtain Plugin version number
 * @method void setPluginVersion(integer $PluginVersion) Set Plugin version number
 * @method PluginProfile getProfile() Obtain Basic plug-in information.
 * @method void setProfile(PluginProfile $Profile) Set Basic plug-in information.
 * @method PluginStatistics getStatistics() Obtain Plug-in statistical information
 * @method void setStatistics(PluginStatistics $Statistics) Set Plug-in statistical information
 * @method integer getStatus() Obtain <p>Plug-in status. 1: available, 2: unavailable </p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li></ul>
 * @method void setStatus(integer $Status) Set <p>Plug-in status. 1: available, 2: unavailable </p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li></ul>
 * @method array getToolList() Obtain Tool list
 * @method void setToolList(array $ToolList) Set Tool list
 * @method string getUpdateTime() Obtain Update time, Unix timestamp
 * @method void setUpdateTime(string $UpdateTime) Set Update time, Unix timestamp
 * @method PluginUserState getUserState() Obtain Plugin status information by user dimension
 * @method void setUserState(PluginUserState $UserState) Set Plugin status information by user dimension
 */
class Plugin extends AbstractModel
{
    /**
     * @var PluginConfig Plug-in configuration
     */
    public $Config;

    /**
     * @var string Creation time, Unix Timestamp
     */
    public $CreateTime;

    /**
     * @var PluginOperation Plug-in operation management information
     */
    public $Operation;

    /**
     * @var string Plugin ID
     */
    public $PluginId;

    /**
     * @var integer Plugin version number
     */
    public $PluginVersion;

    /**
     * @var PluginProfile Basic plug-in information.
     */
    public $Profile;

    /**
     * @var PluginStatistics Plug-in statistical information
     */
    public $Statistics;

    /**
     * @var integer <p>Plug-in status. 1: available, 2: unavailable </p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li></ul>
     */
    public $Status;

    /**
     * @var array Tool list
     */
    public $ToolList;

    /**
     * @var string Update time, Unix timestamp
     */
    public $UpdateTime;

    /**
     * @var PluginUserState Plugin status information by user dimension
     */
    public $UserState;

    /**
     * @param PluginConfig $Config Plug-in configuration
     * @param string $CreateTime Creation time, Unix Timestamp
     * @param PluginOperation $Operation Plug-in operation management information
     * @param string $PluginId Plugin ID
     * @param integer $PluginVersion Plugin version number
     * @param PluginProfile $Profile Basic plug-in information.
     * @param PluginStatistics $Statistics Plug-in statistical information
     * @param integer $Status <p>Plug-in status. 1: available, 2: unavailable </p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li></ul>
     * @param array $ToolList Tool list
     * @param string $UpdateTime Update time, Unix timestamp
     * @param PluginUserState $UserState Plugin status information by user dimension
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new PluginConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = new PluginOperation();
            $this->Operation->deserialize($param["Operation"]);
        }

        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("PluginVersion",$param) and $param["PluginVersion"] !== null) {
            $this->PluginVersion = $param["PluginVersion"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new PluginProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = new PluginStatistics();
            $this->Statistics->deserialize($param["Statistics"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ToolList",$param) and $param["ToolList"] !== null) {
            $this->ToolList = [];
            foreach ($param["ToolList"] as $key => $value){
                $obj = new Tool();
                $obj->deserialize($value);
                array_push($this->ToolList, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UserState",$param) and $param["UserState"] !== null) {
            $this->UserState = new PluginUserState();
            $this->UserState->deserialize($param["UserState"]);
        }
    }
}
