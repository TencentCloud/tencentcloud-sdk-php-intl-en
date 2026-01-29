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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host process content.
 *
 * @method string getCloudAccountID() Obtain Cloud account ID.
 * @method void setCloudAccountID(string $CloudAccountID) Set Cloud account ID.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getAppID() Obtain Tenant ID.
 * @method void setAppID(integer $AppID) Set Tenant ID.
 * @method string getCloudAccountName() Obtain Account name.
 * @method void setCloudAccountName(string $CloudAccountName) Set Account name.
 * @method string getInstanceID() Obtain Instance ID.
 * @method void setInstanceID(string $InstanceID) Set Instance ID.
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getProcessID() Obtain Process ID
 * @method void setProcessID(string $ProcessID) Set Process ID
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getCmdLine() Obtain Command line
 * @method void setCmdLine(string $CmdLine) Set Command line
 * @method string getPort() Obtain Listening port list.
 * @method void setPort(string $Port) Set Listening port list.
 */
class AssetProcessItem extends AbstractModel
{
    /**
     * @var string Cloud account ID.
     */
    public $CloudAccountID;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Tenant ID.
     */
    public $AppID;

    /**
     * @var string Account name.
     */
    public $CloudAccountName;

    /**
     * @var string Instance ID.
     */
    public $InstanceID;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Process ID
     */
    public $ProcessID;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Command line
     */
    public $CmdLine;

    /**
     * @var string Listening port list.
     */
    public $Port;

    /**
     * @param string $CloudAccountID Cloud account ID.
     * @param string $InstanceName Instance name
     * @param integer $AppID Tenant ID.
     * @param string $CloudAccountName Account name.
     * @param string $InstanceID Instance ID.
     * @param string $PublicIp Public IP address
     * @param string $PrivateIp Private IP address
     * @param string $ProcessID Process ID
     * @param string $ProcessName Process name
     * @param string $CmdLine Command line
     * @param string $Port Listening port list.
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
        if (array_key_exists("CloudAccountID",$param) and $param["CloudAccountID"] !== null) {
            $this->CloudAccountID = $param["CloudAccountID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("ProcessID",$param) and $param["ProcessID"] !== null) {
            $this->ProcessID = $param["ProcessID"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
