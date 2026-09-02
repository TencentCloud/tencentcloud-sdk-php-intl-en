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
 * ModifyImageRegistry request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getName() Obtain <p>Mirror repository name</p>
 * @method void setName(string $Name) Set <p>Mirror repository name</p>
 * @method string getUsername() Obtain <p>Account</p>
 * @method void setUsername(string $Username) Set <p>Account</p>
 * @method string getPassword() Obtain <p>Password</p>
 * @method void setPassword(string $Password) Set <p>Password</p>
 * @method string getUrl() Obtain <p>Mirror repository url</p>
 * @method void setUrl(string $Url) Set <p>Mirror repository url</p>
 * @method string getRegistryType() Obtain <p>Image repository type</p>
 * @method void setRegistryType(string $RegistryType) Set <p>Image repository type</p>
 * @method string getNetType() Obtain <p>Network type</p>
 * @method void setNetType(string $NetType) Set <p>Network type</p>
 * @method string getRegistryVersion() Obtain <p>Mirror repository version</p>
 * @method void setRegistryVersion(string $RegistryVersion) Set <p>Mirror repository version</p>
 * @method string getRegistryRegion() Obtain <p>region to which the mirror repository belongs</p>
 * @method void setRegistryRegion(string $RegistryRegion) Set <p>region to which the mirror repository belongs</p>
 * @method integer getSpeedLimit() Obtain <p>Speed limit value</p>
 * @method void setSpeedLimit(integer $SpeedLimit) Set <p>Speed limit value</p>
 * @method integer getInsecure() Obtain <p>Security mode (certificate verification)</p><p>Enumeration values:</p><ul><li>0: Security mode</li><li>1: Non-secure mode</li></ul>
 * @method void setInsecure(integer $Insecure) Set <p>Security mode (certificate verification)</p><p>Enumeration values:</p><ul><li>0: Security mode</li><li>1: Non-secure mode</li></ul>
 * @method boolean getNeedScan() Obtain <p>Whether to auto-scan</p>
 * @method void setNeedScan(boolean $NeedScan) Set <p>Whether to auto-scan</p>
 * @method integer getSyncMode() Obtain <p>Synchronization method</p><p>Enumeration values:</p><ul><li>0: full synchronization</li><li>1: incremental synchronization</li></ul>
 * @method void setSyncMode(integer $SyncMode) Set <p>Synchronization method</p><p>Enumeration values:</p><ul><li>0: full synchronization</li><li>1: incremental synchronization</li></ul>
 * @method string getInstanceId() Obtain <p>Mirror repository instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Mirror repository instance id</p>
 * @method array getConnectivityDetectConfig() Obtain <p>Connectivity detection configuration</p>
 * @method void setConnectivityDetectConfig(array $ConnectivityDetectConfig) Set <p>Connectivity detection configuration</p>
 * @method integer getId() Obtain <p>Mirror repository id</p>
 * @method void setId(integer $Id) Set <p>Mirror repository id</p>
 */
class ModifyImageRegistryRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Mirror repository name</p>
     */
    public $Name;

    /**
     * @var string <p>Account</p>
     */
    public $Username;

    /**
     * @var string <p>Password</p>
     */
    public $Password;

    /**
     * @var string <p>Mirror repository url</p>
     */
    public $Url;

    /**
     * @var string <p>Image repository type</p>
     */
    public $RegistryType;

    /**
     * @var string <p>Network type</p>
     */
    public $NetType;

    /**
     * @var string <p>Mirror repository version</p>
     */
    public $RegistryVersion;

    /**
     * @var string <p>region to which the mirror repository belongs</p>
     */
    public $RegistryRegion;

    /**
     * @var integer <p>Speed limit value</p>
     */
    public $SpeedLimit;

    /**
     * @var integer <p>Security mode (certificate verification)</p><p>Enumeration values:</p><ul><li>0: Security mode</li><li>1: Non-secure mode</li></ul>
     */
    public $Insecure;

    /**
     * @var boolean <p>Whether to auto-scan</p>
     */
    public $NeedScan;

    /**
     * @var integer <p>Synchronization method</p><p>Enumeration values:</p><ul><li>0: full synchronization</li><li>1: incremental synchronization</li></ul>
     */
    public $SyncMode;

    /**
     * @var string <p>Mirror repository instance id</p>
     */
    public $InstanceId;

    /**
     * @var array <p>Connectivity detection configuration</p>
     */
    public $ConnectivityDetectConfig;

    /**
     * @var integer <p>Mirror repository id</p>
     */
    public $Id;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Name <p>Mirror repository name</p>
     * @param string $Username <p>Account</p>
     * @param string $Password <p>Password</p>
     * @param string $Url <p>Mirror repository url</p>
     * @param string $RegistryType <p>Image repository type</p>
     * @param string $NetType <p>Network type</p>
     * @param string $RegistryVersion <p>Mirror repository version</p>
     * @param string $RegistryRegion <p>region to which the mirror repository belongs</p>
     * @param integer $SpeedLimit <p>Speed limit value</p>
     * @param integer $Insecure <p>Security mode (certificate verification)</p><p>Enumeration values:</p><ul><li>0: Security mode</li><li>1: Non-secure mode</li></ul>
     * @param boolean $NeedScan <p>Whether to auto-scan</p>
     * @param integer $SyncMode <p>Synchronization method</p><p>Enumeration values:</p><ul><li>0: full synchronization</li><li>1: incremental synchronization</li></ul>
     * @param string $InstanceId <p>Mirror repository instance id</p>
     * @param array $ConnectivityDetectConfig <p>Connectivity detection configuration</p>
     * @param integer $Id <p>Mirror repository id</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegistryVersion",$param) and $param["RegistryVersion"] !== null) {
            $this->RegistryVersion = $param["RegistryVersion"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("SpeedLimit",$param) and $param["SpeedLimit"] !== null) {
            $this->SpeedLimit = $param["SpeedLimit"];
        }

        if (array_key_exists("Insecure",$param) and $param["Insecure"] !== null) {
            $this->Insecure = $param["Insecure"];
        }

        if (array_key_exists("NeedScan",$param) and $param["NeedScan"] !== null) {
            $this->NeedScan = $param["NeedScan"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ConnectivityDetectConfig",$param) and $param["ConnectivityDetectConfig"] !== null) {
            $this->ConnectivityDetectConfig = [];
            foreach ($param["ConnectivityDetectConfig"] as $key => $value){
                $obj = new ConnectivityDetectConfig();
                $obj->deserialize($value);
                array_push($this->ConnectivityDetectConfig, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
