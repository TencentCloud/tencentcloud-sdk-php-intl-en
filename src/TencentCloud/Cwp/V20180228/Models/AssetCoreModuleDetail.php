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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the asset management kernel module
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getPath() Obtain Path
 * @method void setPath(string $Path) Set Path
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method integer getSize() Obtain Size
 * @method void setSize(integer $Size) Set Size
 * @method string getProcesses() Obtain Dependent processes
 * @method void setProcesses(string $Processes) Set Dependent processes
 * @method string getModules() Obtain Dependent modules
 * @method void setModules(string $Modules) Set Dependent modules
 * @method array getParams() Obtain Parameter information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParams(array $Params) Set Parameter information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetCoreModuleDetail extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var string Path
     */
    public $Path;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var integer Size
     */
    public $Size;

    /**
     * @var string Dependent processes
     */
    public $Processes;

    /**
     * @var string Dependent modules
     */
    public $Modules;

    /**
     * @var array Parameter information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Params;

    /**
     * @var string Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $Name Name
     * @param string $Desc Description
     * @param string $Path Path
     * @param string $Version Version
     * @param integer $Size Size
     * @param string $Processes Dependent processes
     * @param string $Modules Dependent modules
     * @param array $Params Parameter information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Processes",$param) and $param["Processes"] !== null) {
            $this->Processes = $param["Processes"];
        }

        if (array_key_exists("Modules",$param) and $param["Modules"] !== null) {
            $this->Modules = $param["Modules"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new AssetCoreModuleParam();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
