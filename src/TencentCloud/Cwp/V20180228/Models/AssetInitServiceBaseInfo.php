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
 * List of asset management startup services
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getType() Obtain Type:
1: Encoder
2: IE plugin
3: Network provider
4: Mirror hijacking
5: LSA provider
6:KnownDLLs
7: Start execution
8:WMI
9: Scheduled task
10: Winsock provider
11: Print monitor
12: Resource manager
13: Driver service
14: Log-in
 * @method void setType(integer $Type) Set Type:
1: Encoder
2: IE plugin
3: Network provider
4: Mirror hijacking
5: LSA provider
6:KnownDLLs
7: Start execution
8:WMI
9: Scheduled task
10: Winsock provider
11: Print monitor
12: Resource manager
13: Driver service
14: Log-in
 * @method integer getStatus() Obtain Default enabling status: 0 - disabled; 1 - enabled
 * @method void setStatus(integer $Status) Set Default enabling status: 0 - disabled; 1 - enabled
 * @method string getUser() Obtain Startup user
 * @method void setUser(string $User) Set Startup user
 * @method string getPath() Obtain Path
 * @method void setPath(string $Path) Set Path
 * @method string getMachineIp() Obtain Server IP
 * @method void setMachineIp(string $MachineIp) Set Server IP
 * @method string getMachineName() Obtain Name
 * @method void setMachineName(string $MachineName) Set Name
 * @method string getOsInfo() Obtain Operating system
 * @method void setOsInfo(string $OsInfo) Set Operating system
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getUpdateTime() Obtain Data update time
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether newly added [0: no|1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether newly added [0: no|1: yes]
 * @method string getMachineWanIp() Obtain Server Public IP
 * @method void setMachineWanIp(string $MachineWanIp) Set Server Public IP
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsAutoRun() Obtain Start at boot [0: No|1: Yes]
 * @method void setIsAutoRun(integer $IsAutoRun) Set Start at boot [0: No|1: Yes]
 */
class AssetInitServiceBaseInfo extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Type:
1: Encoder
2: IE plugin
3: Network provider
4: Mirror hijacking
5: LSA provider
6:KnownDLLs
7: Start execution
8:WMI
9: Scheduled task
10: Winsock provider
11: Print monitor
12: Resource manager
13: Driver service
14: Log-in
     */
    public $Type;

    /**
     * @var integer Default enabling status: 0 - disabled; 1 - enabled
     */
    public $Status;

    /**
     * @var string Startup user
     */
    public $User;

    /**
     * @var string Path
     */
    public $Path;

    /**
     * @var string Server IP
     */
    public $MachineIp;

    /**
     * @var string Name
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
     */
    public $UpdateTime;

    /**
     * @var string First collection time
     */
    public $FirstTime;

    /**
     * @var integer Whether newly added [0: no|1: yes]
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
     * @var integer Start at boot [0: No|1: Yes]
     */
    public $IsAutoRun;

    /**
     * @param string $Name Name
     * @param integer $Type Type:
1: Encoder
2: IE plugin
3: Network provider
4: Mirror hijacking
5: LSA provider
6:KnownDLLs
7: Start execution
8:WMI
9: Scheduled task
10: Winsock provider
11: Print monitor
12: Resource manager
13: Driver service
14: Log-in
     * @param integer $Status Default enabling status: 0 - disabled; 1 - enabled
     * @param string $User Startup user
     * @param string $Path Path
     * @param string $MachineIp Server IP
     * @param string $MachineName Name
     * @param string $OsInfo Operating system
     * @param string $Quuid Host QUUID
     * @param string $Uuid Host UUID
     * @param string $UpdateTime Data update time
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether newly added [0: no|1: yes]
     * @param string $MachineWanIp Server Public IP
     * @param MachineExtraInfo $MachineExtraInfo Additional information

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsAutoRun Start at boot [0: No|1: Yes]
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
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

        if (array_key_exists("IsAutoRun",$param) and $param["IsAutoRun"] !== null) {
            $this->IsAutoRun = $param["IsAutoRun"];
        }
    }
}
