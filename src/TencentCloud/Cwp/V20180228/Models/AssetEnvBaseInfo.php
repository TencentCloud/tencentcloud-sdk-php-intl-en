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
 * List of asset management environment variables
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getType() Obtain Type:
0: user variable
1: system variable
 * @method void setType(integer $Type) Set Type:
0: user variable
1: system variable
 * @method string getUser() Obtain Startup user
 * @method void setUser(string $User) Set Startup user
 * @method string getValue() Obtain Environment variable value
 * @method void setValue(string $Value) Set Environment variable value
 * @method string getMachineIp() Obtain Server IP
 * @method void setMachineIp(string $MachineIp) Set Server IP
 * @method string getMachineName() Obtain Server name
 * @method void setMachineName(string $MachineName) Set Server name
 * @method string getOsInfo() Obtain Operating system
 * @method void setOsInfo(string $OsInfo) Set Operating system
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether new [0: no|1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether new [0: no|1: yes]
 * @method string getMachineWanIp() Obtain Server Public IP
 * @method void setMachineWanIp(string $MachineWanIp) Set Server Public IP
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information

Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetEnvBaseInfo extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Type:
0: user variable
1: system variable
     */
    public $Type;

    /**
     * @var string Startup user
     */
    public $User;

    /**
     * @var string Environment variable value
     */
    public $Value;

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
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string First collection time
     */
    public $FirstTime;

    /**
     * @var integer Whether new [0: no|1: yes]
     */
    public $IsNew;

    /**
     * @var string Server Public IP
     */
    public $MachineWanIp;

    /**
     * @var MachineExtraInfo Additional information

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $Name Name
     * @param integer $Type Type:
0: user variable
1: system variable
     * @param string $User Startup user
     * @param string $Value Environment variable value
     * @param string $MachineIp Server IP
     * @param string $MachineName Server name
     * @param string $OsInfo Operating system
     * @param string $Quuid Host QUUID
     * @param string $Uuid Host UUID
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether new [0: no|1: yes]
     * @param string $MachineWanIp Server Public IP
     * @param MachineExtraInfo $MachineExtraInfo Additional information

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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
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

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
