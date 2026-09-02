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
 * AddImageRegistry request structure.
 *
 * @method string getName() Obtain <p>Mirror repository name</p>
 * @method void setName(string $Name) Set <p>Mirror repository name</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getUsername() Obtain <p>Image repository account</p>
 * @method void setUsername(string $Username) Set <p>Image repository account</p>
 * @method string getPassword() Obtain <p>Image repository password</p>
 * @method void setPassword(string $Password) Set <p>Image repository password</p>
 * @method string getUrl() Obtain <p>Mirror repository url</p>
 * @method void setUrl(string $Url) Set <p>Mirror repository url</p>
 * @method string getRegistryType() Obtain <p>Image repository type</p><p>Enumeration values:</p><ul><li>tcr: TCR repository</li><li>ccr: CCR repository</li><li>harbor: Harbor repository</li><li>jfrog: JFrog repository</li><li>quay: Quay repository</li><li>aws: AWS repository</li><li>azure: Azure repository</li></ul>
 * @method void setRegistryType(string $RegistryType) Set <p>Image repository type</p><p>Enumeration values:</p><ul><li>tcr: TCR repository</li><li>ccr: CCR repository</li><li>harbor: Harbor repository</li><li>jfrog: JFrog repository</li><li>quay: Quay repository</li><li>aws: AWS repository</li><li>azure: Azure repository</li></ul>
 * @method string getNetType() Obtain <p>Network type</p><p>Enumeration values:</p><ul><li>public: public network</li><li>Empty: private network, default value</li></ul>
 * @method void setNetType(string $NetType) Set <p>Network type</p><p>Enumeration values:</p><ul><li>public: public network</li><li>Empty: private network, default value</li></ul>
 * @method string getRegistryVersion() Obtain <p>api version</p>
 * @method void setRegistryVersion(string $RegistryVersion) Set <p>api version</p>
 * @method string getRegistryRegion() Obtain <p>region where the mirror repository is located</p>
 * @method void setRegistryRegion(string $RegistryRegion) Set <p>region where the mirror repository is located</p>
 * @method integer getSpeedLimit() Obtain <p>Access throttling value</p>
 * @method void setSpeedLimit(integer $SpeedLimit) Set <p>Access throttling value</p>
 * @method integer getInsecure() Obtain <p>Whether to ignore the cert</p><p>Enumeration values:</p><ul><li>0: Verify the certificate</li><li>1: Ignore the cert</li></ul>
 * @method void setInsecure(integer $Insecure) Set <p>Whether to ignore the cert</p><p>Enumeration values:</p><ul><li>0: Verify the certificate</li><li>1: Ignore the cert</li></ul>
 * @method boolean getNeedScan() Obtain <p>Sync now or not</p>
 * @method void setNeedScan(boolean $NeedScan) Set <p>Sync now or not</p>
 * @method integer getSyncMode() Obtain <p>Synchronization mode. 0: full synchronization</p>
 * @method void setSyncMode(integer $SyncMode) Set <p>Synchronization mode. 0: full synchronization</p>
 * @method string getInstanceId() Obtain <p>Mirror repository instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Mirror repository instance id</p>
 * @method array getConnectivityDetectConfig() Obtain <p>Scan link configuration used</p>
 * @method void setConnectivityDetectConfig(array $ConnectivityDetectConfig) Set <p>Scan link configuration used</p>
 */
class AddImageRegistryRequest extends AbstractModel
{
    /**
     * @var string <p>Mirror repository name</p>
     */
    public $Name;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Image repository account</p>
     */
    public $Username;

    /**
     * @var string <p>Image repository password</p>
     */
    public $Password;

    /**
     * @var string <p>Mirror repository url</p>
     */
    public $Url;

    /**
     * @var string <p>Image repository type</p><p>Enumeration values:</p><ul><li>tcr: TCR repository</li><li>ccr: CCR repository</li><li>harbor: Harbor repository</li><li>jfrog: JFrog repository</li><li>quay: Quay repository</li><li>aws: AWS repository</li><li>azure: Azure repository</li></ul>
     */
    public $RegistryType;

    /**
     * @var string <p>Network type</p><p>Enumeration values:</p><ul><li>public: public network</li><li>Empty: private network, default value</li></ul>
     */
    public $NetType;

    /**
     * @var string <p>api version</p>
     */
    public $RegistryVersion;

    /**
     * @var string <p>region where the mirror repository is located</p>
     */
    public $RegistryRegion;

    /**
     * @var integer <p>Access throttling value</p>
     */
    public $SpeedLimit;

    /**
     * @var integer <p>Whether to ignore the cert</p><p>Enumeration values:</p><ul><li>0: Verify the certificate</li><li>1: Ignore the cert</li></ul>
     */
    public $Insecure;

    /**
     * @var boolean <p>Sync now or not</p>
     */
    public $NeedScan;

    /**
     * @var integer <p>Synchronization mode. 0: full synchronization</p>
     */
    public $SyncMode;

    /**
     * @var string <p>Mirror repository instance id</p>
     */
    public $InstanceId;

    /**
     * @var array <p>Scan link configuration used</p>
     */
    public $ConnectivityDetectConfig;

    /**
     * @param string $Name <p>Mirror repository name</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Username <p>Image repository account</p>
     * @param string $Password <p>Image repository password</p>
     * @param string $Url <p>Mirror repository url</p>
     * @param string $RegistryType <p>Image repository type</p><p>Enumeration values:</p><ul><li>tcr: TCR repository</li><li>ccr: CCR repository</li><li>harbor: Harbor repository</li><li>jfrog: JFrog repository</li><li>quay: Quay repository</li><li>aws: AWS repository</li><li>azure: Azure repository</li></ul>
     * @param string $NetType <p>Network type</p><p>Enumeration values:</p><ul><li>public: public network</li><li>Empty: private network, default value</li></ul>
     * @param string $RegistryVersion <p>api version</p>
     * @param string $RegistryRegion <p>region where the mirror repository is located</p>
     * @param integer $SpeedLimit <p>Access throttling value</p>
     * @param integer $Insecure <p>Whether to ignore the cert</p><p>Enumeration values:</p><ul><li>0: Verify the certificate</li><li>1: Ignore the cert</li></ul>
     * @param boolean $NeedScan <p>Sync now or not</p>
     * @param integer $SyncMode <p>Synchronization mode. 0: full synchronization</p>
     * @param string $InstanceId <p>Mirror repository instance id</p>
     * @param array $ConnectivityDetectConfig <p>Scan link configuration used</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
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
    }
}
