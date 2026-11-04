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
 * Plug-in summary information (for the plug-in list)
 *
 * @method PluginConfig getConfig() Obtain <p>Plug-in configuration message.</p>
 * @method void setConfig(PluginConfig $Config) Set <p>Plug-in configuration message.</p>
 * @method boolean getIsShared() Obtain <p>Whether shared is configured</p>
 * @method void setIsShared(boolean $IsShared) Set <p>Whether shared is configured</p>
 * @method PluginOperation getOperation() Obtain <p>Plugin operation management information.</p>
 * @method void setOperation(PluginOperation $Operation) Set <p>Plugin operation management information.</p>
 * @method string getPluginId() Obtain <p>plugin_id</p>
 * @method void setPluginId(string $PluginId) Set <p>plugin_id</p>
 * @method PluginProfile getProfile() Obtain <p>Basic information of the plug-in.</p>
 * @method void setProfile(PluginProfile $Profile) Set <p>Basic information of the plug-in.</p>
 * @method string getSpaceId() Obtain <p>Space ID that the plug-in belongs to; empty for built-in plugins</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID that the plug-in belongs to; empty for built-in plugins</p>
 * @method PluginStatistics getStatistics() Obtain <p>Plugin statistical information.</p>
 * @method void setStatistics(PluginStatistics $Statistics) Set <p>Plugin statistical information.</p>
 * @method integer getStatus() Obtain <p>Plug-in status. 1: available, 2: unavailable </p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li></ul>
 * @method void setStatus(integer $Status) Set <p>Plug-in status. 1: available, 2: unavailable </p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li></ul>
 * @method array getToolList() Obtain <p>Tool information</p>
 * @method void setToolList(array $ToolList) Set <p>Tool information</p>
 * @method PluginUserState getUserState() Obtain <p>Plugin status information by user dimension</p>
 * @method void setUserState(PluginUserState $UserState) Set <p>Plugin status information by user dimension</p>
 * @method string getUpdateTime() Obtain <p>Update time, Unix timestamp</p><p>Unit: seconds</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time, Unix timestamp</p><p>Unit: seconds</p>
 */
class PluginSummary extends AbstractModel
{
    /**
     * @var PluginConfig <p>Plug-in configuration message.</p>
     */
    public $Config;

    /**
     * @var boolean <p>Whether shared is configured</p>
     */
    public $IsShared;

    /**
     * @var PluginOperation <p>Plugin operation management information.</p>
     */
    public $Operation;

    /**
     * @var string <p>plugin_id</p>
     */
    public $PluginId;

    /**
     * @var PluginProfile <p>Basic information of the plug-in.</p>
     */
    public $Profile;

    /**
     * @var string <p>Space ID that the plug-in belongs to; empty for built-in plugins</p>
     */
    public $SpaceId;

    /**
     * @var PluginStatistics <p>Plugin statistical information.</p>
     */
    public $Statistics;

    /**
     * @var integer <p>Plug-in status. 1: available, 2: unavailable </p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li></ul>
     */
    public $Status;

    /**
     * @var array <p>Tool information</p>
     */
    public $ToolList;

    /**
     * @var PluginUserState <p>Plugin status information by user dimension</p>
     */
    public $UserState;

    /**
     * @var string <p>Update time, Unix timestamp</p><p>Unit: seconds</p>
     */
    public $UpdateTime;

    /**
     * @param PluginConfig $Config <p>Plug-in configuration message.</p>
     * @param boolean $IsShared <p>Whether shared is configured</p>
     * @param PluginOperation $Operation <p>Plugin operation management information.</p>
     * @param string $PluginId <p>plugin_id</p>
     * @param PluginProfile $Profile <p>Basic information of the plug-in.</p>
     * @param string $SpaceId <p>Space ID that the plug-in belongs to; empty for built-in plugins</p>
     * @param PluginStatistics $Statistics <p>Plugin statistical information.</p>
     * @param integer $Status <p>Plug-in status. 1: available, 2: unavailable </p><p>Enumeration values:</p><ul><li>1: available</li><li>2: unavailable</li></ul>
     * @param array $ToolList <p>Tool information</p>
     * @param PluginUserState $UserState <p>Plugin status information by user dimension</p>
     * @param string $UpdateTime <p>Update time, Unix timestamp</p><p>Unit: seconds</p>
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

        if (array_key_exists("IsShared",$param) and $param["IsShared"] !== null) {
            $this->IsShared = $param["IsShared"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = new PluginOperation();
            $this->Operation->deserialize($param["Operation"]);
        }

        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new PluginProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
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
                $obj = new ToolSummary();
                $obj->deserialize($value);
                array_push($this->ToolList, $obj);
            }
        }

        if (array_key_exists("UserState",$param) and $param["UserState"] !== null) {
            $this->UserState = new PluginUserState();
            $this->UserState->deserialize($param["UserState"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
