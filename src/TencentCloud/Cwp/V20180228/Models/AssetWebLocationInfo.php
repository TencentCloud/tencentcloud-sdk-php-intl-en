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
 * Asset management Web site list information
 *
 * @method string getName() Obtain Domain name
 * @method void setName(string $Name) Set Domain name
 * @method string getPort() Obtain Site port
 * @method void setPort(string $Port) Set Site port
 * @method string getProto() Obtain Site protocol
 * @method void setProto(string $Proto) Set Site protocol
 * @method string getServiceType() Obtain Service type
 * @method void setServiceType(string $ServiceType) Set Service type
 * @method integer getSafeStatus() Obtain Security module status. 0: not enabled; 1: enabled; 999: null (nginx only)
 * @method void setSafeStatus(integer $SafeStatus) Set Security module status. 0: not enabled; 1: enabled; 999: null (nginx only)
 * @method string getUser() Obtain Running user
 * @method void setUser(string $User) Set Running user
 * @method string getMainPath() Obtain Home directory
 * @method void setMainPath(string $MainPath) Set Home directory
 * @method string getCommand() Obtain Startup command
 * @method void setCommand(string $Command) Set Startup command
 * @method string getIp() Obtain Bind IP
 * @method void setIp(string $Ip) Set Bind IP
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetWebLocationInfo extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Name;

    /**
     * @var string Site port
     */
    public $Port;

    /**
     * @var string Site protocol
     */
    public $Proto;

    /**
     * @var string Service type
     */
    public $ServiceType;

    /**
     * @var integer Security module status. 0: not enabled; 1: enabled; 999: null (nginx only)
     */
    public $SafeStatus;

    /**
     * @var string Running user
     */
    public $User;

    /**
     * @var string Home directory
     */
    public $MainPath;

    /**
     * @var string Startup command
     */
    public $Command;

    /**
     * @var string Bind IP
     */
    public $Ip;

    /**
     * @var string Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $Name Domain name
     * @param string $Port Site port
     * @param string $Proto Site protocol
     * @param string $ServiceType Service type
     * @param integer $SafeStatus Security module status. 0: not enabled; 1: enabled; 999: null (nginx only)
     * @param string $User Running user
     * @param string $MainPath Home directory
     * @param string $Command Startup command
     * @param string $Ip Bind IP
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("SafeStatus",$param) and $param["SafeStatus"] !== null) {
            $this->SafeStatus = $param["SafeStatus"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("MainPath",$param) and $param["MainPath"] !== null) {
            $this->MainPath = $param["MainPath"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
