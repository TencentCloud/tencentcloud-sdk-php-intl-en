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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Version alias of function
 *
 * @method string getFunctionVersion() Obtain Master version pointed to by the alias
 * @method void setFunctionVersion(string $FunctionVersion) Set Master version pointed to by the alias
 * @method string getName() Obtain Alias name
 * @method void setName(string $Name) Set Alias name
 * @method RoutingConfig getRoutingConfig() Obtain Routing information of alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRoutingConfig(RoutingConfig $RoutingConfig) Set Routing information of alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAddTime() Obtain Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAddTime(string $AddTime) Set Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getModTime() Obtain Update time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModTime(string $ModTime) Set Update time
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Alias extends AbstractModel
{
    /**
     * @var string Master version pointed to by the alias
     */
    public $FunctionVersion;

    /**
     * @var string Alias name
     */
    public $Name;

    /**
     * @var RoutingConfig Routing information of alias
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RoutingConfig;

    /**
     * @var string Description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AddTime;

    /**
     * @var string Update time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModTime;

    /**
     * @param string $FunctionVersion Master version pointed to by the alias
     * @param string $Name Alias name
     * @param RoutingConfig $RoutingConfig Routing information of alias
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AddTime Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ModTime Update time
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RoutingConfig",$param) and $param["RoutingConfig"] !== null) {
            $this->RoutingConfig = new RoutingConfig();
            $this->RoutingConfig->deserialize($param["RoutingConfig"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }
    }
}
