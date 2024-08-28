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
 * Software application-related process information
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getStatus() Obtain Process status
 * @method void setStatus(string $Status) Set Process status
 * @method string getVersion() Obtain Process version
 * @method void setVersion(string $Version) Set Process version
 * @method string getPath() Obtain Path
 * @method void setPath(string $Path) Set Path
 * @method string getUser() Obtain User
 * @method void setUser(string $User) Set User
 * @method string getStartTime() Obtain Startup time
 * @method void setStartTime(string $StartTime) Set Startup time
 */
class AssetAppProcessInfo extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Process status
     */
    public $Status;

    /**
     * @var string Process version
     */
    public $Version;

    /**
     * @var string Path
     */
    public $Path;

    /**
     * @var string User
     */
    public $User;

    /**
     * @var string Startup time
     */
    public $StartTime;

    /**
     * @param string $Name Name
     * @param string $Status Process status
     * @param string $Version Process version
     * @param string $Path Path
     * @param string $User User
     * @param string $StartTime Startup time
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
