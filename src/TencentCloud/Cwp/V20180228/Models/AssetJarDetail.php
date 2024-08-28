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
 * Asset management jar package details
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getType() Obtain Type: 1: application; 2: system library; 3: Web service built-in library; 8: other
 * @method void setType(integer $Type) Set Type: 1: application; 2: system library; 3: Web service built-in library; 8: other
 * @method integer getStatus() Obtain Whether executable: 0: unknown; 1: yes; 2: no
 * @method void setStatus(integer $Status) Set Whether executable: 0: unknown; 1: yes; 2: no
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getPath() Obtain Path
 * @method void setPath(string $Path) Set Path
 * @method string getMachineIp() Obtain Server IP
 * @method void setMachineIp(string $MachineIp) Set Server IP
 * @method string getMachineName() Obtain Server name
 * @method void setMachineName(string $MachineName) Set Server name
 * @method string getOsInfo() Obtain Operating system
 * @method void setOsInfo(string $OsInfo) Set Operating system
 * @method array getProcess() Obtain Reference process list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcess(array $Process) Set Reference process list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMd5() Obtain Jar package Md5
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMd5(string $Md5) Set Jar package Md5
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetJarDetail extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Type: 1: application; 2: system library; 3: Web service built-in library; 8: other
     */
    public $Type;

    /**
     * @var integer Whether executable: 0: unknown; 1: yes; 2: no
     */
    public $Status;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Path
     */
    public $Path;

    /**
     * @var string Server IP
     */
    public $MachineIp;

    /**
     * @var string Server name
     */
    public $MachineName;

    /**
     * @var string Operating system
     */
    public $OsInfo;

    /**
     * @var array Reference process list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Process;

    /**
     * @var string Jar package Md5
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Md5;

    /**
     * @var string Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $Name Name
     * @param integer $Type Type: 1: application; 2: system library; 3: Web service built-in library; 8: other
     * @param integer $Status Whether executable: 0: unknown; 1: yes; 2: no
     * @param string $Version Version
     * @param string $Path Path
     * @param string $MachineIp Server IP
     * @param string $MachineName Server name
     * @param string $OsInfo Operating system
     * @param array $Process Reference process list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Md5 Jar package Md5
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = [];
            foreach ($param["Process"] as $key => $value){
                $obj = new AssetAppProcessInfo();
                $obj->deserialize($value);
                array_push($this->Process, $obj);
            }
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
