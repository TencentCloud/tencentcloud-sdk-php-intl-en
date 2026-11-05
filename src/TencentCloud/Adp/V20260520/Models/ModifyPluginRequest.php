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
 * ModifyPlugin request structure.
 *
 * @method string getPluginId() Obtain <p>Plugin_id</p>
 * @method void setPluginId(string $PluginId) Set <p>Plugin_id</p>
 * @method integer getPluginVersion() Obtain <p>Plugin version number</p>
 * @method void setPluginVersion(integer $PluginVersion) Set <p>Plugin version number</p>
 * @method PluginProfile getProfile() Obtain <p>Plug-in basic information</p>
 * @method void setProfile(PluginProfile $Profile) Set <p>Plug-in basic information</p>
 * @method PluginConfig getConfig() Obtain <p>Plug-in type configuration</p>
 * @method void setConfig(PluginConfig $Config) Set <p>Plug-in type configuration</p>
 * @method FieldMask getUpdateMask() Obtain <p>Specify the fields to update to avoid full coverage</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) Set <p>Specify the fields to update to avoid full coverage</p>
 * @method array getToolList() Obtain <p>Tool list of the plug-in. This parameter is not required for mcp plug-ins.</p>
 * @method void setToolList(array $ToolList) Set <p>Tool list of the plug-in. This parameter is not required for mcp plug-ins.</p>
 * @method string getLoginUin() Obtain <p>User Main Account logged in (required in integrator mode)</p>
 * @method void setLoginUin(string $LoginUin) Set <p>User Main Account logged in (required in integrator mode)</p>
 * @method string getLoginSubAccountUin() Obtain <p>User Sub-account logged in (required in integrator mode)</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set <p>User Sub-account logged in (required in integrator mode)</p>
 */
class ModifyPluginRequest extends AbstractModel
{
    /**
     * @var string <p>Plugin_id</p>
     */
    public $PluginId;

    /**
     * @var integer <p>Plugin version number</p>
     */
    public $PluginVersion;

    /**
     * @var PluginProfile <p>Plug-in basic information</p>
     */
    public $Profile;

    /**
     * @var PluginConfig <p>Plug-in type configuration</p>
     */
    public $Config;

    /**
     * @var FieldMask <p>Specify the fields to update to avoid full coverage</p>
     */
    public $UpdateMask;

    /**
     * @var array <p>Tool list of the plug-in. This parameter is not required for mcp plug-ins.</p>
     */
    public $ToolList;

    /**
     * @var string <p>User Main Account logged in (required in integrator mode)</p>
     */
    public $LoginUin;

    /**
     * @var string <p>User Sub-account logged in (required in integrator mode)</p>
     */
    public $LoginSubAccountUin;

    /**
     * @param string $PluginId <p>Plugin_id</p>
     * @param integer $PluginVersion <p>Plugin version number</p>
     * @param PluginProfile $Profile <p>Plug-in basic information</p>
     * @param PluginConfig $Config <p>Plug-in type configuration</p>
     * @param FieldMask $UpdateMask <p>Specify the fields to update to avoid full coverage</p>
     * @param array $ToolList <p>Tool list of the plug-in. This parameter is not required for mcp plug-ins.</p>
     * @param string $LoginUin <p>User Main Account logged in (required in integrator mode)</p>
     * @param string $LoginSubAccountUin <p>User Sub-account logged in (required in integrator mode)</p>
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new PluginConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }

        if (array_key_exists("ToolList",$param) and $param["ToolList"] !== null) {
            $this->ToolList = [];
            foreach ($param["ToolList"] as $key => $value){
                $obj = new Tool();
                $obj->deserialize($value);
                array_push($this->ToolList, $obj);
            }
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
