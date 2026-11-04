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
 * CreatePlugin request structure.
 *
 * @method PluginProfile getProfile() Obtain <p>Basic information of the plug-in.</p>
 * @method void setProfile(PluginProfile $Profile) Set <p>Basic information of the plug-in.</p>
 * @method PluginConfig getConfig() Obtain <p>Plug-in type configuration</p>
 * @method void setConfig(PluginConfig $Config) Set <p>Plug-in type configuration</p>
 * @method string getSpaceId() Obtain <p>Current workspace id</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Current workspace id</p>
 * @method array getToolList() Obtain <p>Tool list of the plug-in</p>
 * @method void setToolList(array $ToolList) Set <p>Tool list of the plug-in</p>
 * @method string getLoginUin() Obtain <p>User Main Account logged in (required in integrator mode)</p>
 * @method void setLoginUin(string $LoginUin) Set <p>User Main Account logged in (required in integrator mode)</p>
 * @method string getLoginSubAccountUin() Obtain <p>User sub-account for login (required in integrator mode)</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set <p>User sub-account for login (required in integrator mode)</p>
 */
class CreatePluginRequest extends AbstractModel
{
    /**
     * @var PluginProfile <p>Basic information of the plug-in.</p>
     */
    public $Profile;

    /**
     * @var PluginConfig <p>Plug-in type configuration</p>
     */
    public $Config;

    /**
     * @var string <p>Current workspace id</p>
     */
    public $SpaceId;

    /**
     * @var array <p>Tool list of the plug-in</p>
     */
    public $ToolList;

    /**
     * @var string <p>User Main Account logged in (required in integrator mode)</p>
     */
    public $LoginUin;

    /**
     * @var string <p>User sub-account for login (required in integrator mode)</p>
     */
    public $LoginSubAccountUin;

    /**
     * @param PluginProfile $Profile <p>Basic information of the plug-in.</p>
     * @param PluginConfig $Config <p>Plug-in type configuration</p>
     * @param string $SpaceId <p>Current workspace id</p>
     * @param array $ToolList <p>Tool list of the plug-in</p>
     * @param string $LoginUin <p>User Main Account logged in (required in integrator mode)</p>
     * @param string $LoginSubAccountUin <p>User sub-account for login (required in integrator mode)</p>
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
        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new PluginProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new PluginConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
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
