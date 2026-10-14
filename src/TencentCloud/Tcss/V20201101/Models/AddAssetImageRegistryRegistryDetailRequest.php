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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddAssetImageRegistryRegistryDetail request structure.
 *
 * @method string getName() Obtain Repository Name
 * @method void setName(string $Name) Set Repository Name
 * @method string getUsername() Obtain Username.
 * @method void setUsername(string $Username) Set Username.
 * @method string getPassword() Obtain Password.
 * @method void setPassword(string $Password) Set Password.
 * @method string getUrl() Obtain Warehouse url
 * @method void setUrl(string $Url) Set Warehouse url
 * @method string getRegistryType() Obtain Repository type. Valid values: harbor, quay, jfrog, aws, azure, and other-tcr.
 * @method void setRegistryType(string $RegistryType) Set Repository type. Valid values: harbor, quay, jfrog, aws, azure, and other-tcr.
 * @method string getNetType() Obtain Network type. List: public
 * @method void setNetType(string $NetType) Set Network type. List: public
 * @method string getRegistryVersion() Obtain Warehouse version
 * @method void setRegistryVersion(string $RegistryVersion) Set Warehouse version
 * @method string getRegistryRegion() Obtain Region, list: default.
 * @method void setRegistryRegion(string $RegistryRegion) Set Region, list: default.
 * @method integer getSpeedLimit() Obtain Speed limit
 * @method void setSpeedLimit(integer $SpeedLimit) Set Speed limit
 * @method integer getInsecure() Obtain 0: Secure Mode (Certificate Verification) (Default); 1: Insecure Mode (Skip Certificate Verification)
 * @method void setInsecure(integer $Insecure) Set 0: Secure Mode (Certificate Verification) (Default); 1: Insecure Mode (Skip Certificate Verification)
 * @method array getConnDetectConfig() Obtain Record ID of Connectivity Check
 * @method void setConnDetectConfig(array $ConnDetectConfig) Set Record ID of Connectivity Check
 * @method boolean getNeedScan() Obtain Whether authorization and scanning are performed automatically. For full synchronization, only images of the latest version are involved. For incremental synchronization, all new images are involved.
 * @method void setNeedScan(boolean $NeedScan) Set Whether authorization and scanning are performed automatically. For full synchronization, only images of the latest version are involved. For incremental synchronization, all new images are involved.
 * @method integer getSyncMode() Obtain Synchronization method. 0: full synchronization; 1: incremental synchronization.
 * @method void setSyncMode(integer $SyncMode) Set Synchronization method. 0: full synchronization; 1: incremental synchronization.
 * @method string getWebhookUrl() Obtain Webhook access address.
 * @method void setWebhookUrl(string $WebhookUrl) Set Webhook access address.
 * @method string getWebhookToken() Obtain Webhook access token.
 * @method void setWebhookToken(string $WebhookToken) Set Webhook access token.
 * @method string getInstanceId() Obtain TCR instance ID.
 * @method void setInstanceId(string $InstanceId) Set TCR instance ID.
 */
class AddAssetImageRegistryRegistryDetailRequest extends AbstractModel
{
    /**
     * @var string Repository Name
     */
    public $Name;

    /**
     * @var string Username.
     */
    public $Username;

    /**
     * @var string Password.
     */
    public $Password;

    /**
     * @var string Warehouse url
     */
    public $Url;

    /**
     * @var string Repository type. Valid values: harbor, quay, jfrog, aws, azure, and other-tcr.
     */
    public $RegistryType;

    /**
     * @var string Network type. List: public
     */
    public $NetType;

    /**
     * @var string Warehouse version
     */
    public $RegistryVersion;

    /**
     * @var string Region, list: default.
     */
    public $RegistryRegion;

    /**
     * @var integer Speed limit
     */
    public $SpeedLimit;

    /**
     * @var integer 0: Secure Mode (Certificate Verification) (Default); 1: Insecure Mode (Skip Certificate Verification)
     */
    public $Insecure;

    /**
     * @var array Record ID of Connectivity Check
     */
    public $ConnDetectConfig;

    /**
     * @var boolean Whether authorization and scanning are performed automatically. For full synchronization, only images of the latest version are involved. For incremental synchronization, all new images are involved.
     */
    public $NeedScan;

    /**
     * @var integer Synchronization method. 0: full synchronization; 1: incremental synchronization.
     */
    public $SyncMode;

    /**
     * @var string Webhook access address.
     */
    public $WebhookUrl;

    /**
     * @var string Webhook access token.
     */
    public $WebhookToken;

    /**
     * @var string TCR instance ID.
     */
    public $InstanceId;

    /**
     * @param string $Name Repository Name
     * @param string $Username Username.
     * @param string $Password Password.
     * @param string $Url Warehouse url
     * @param string $RegistryType Repository type. Valid values: harbor, quay, jfrog, aws, azure, and other-tcr.
     * @param string $NetType Network type. List: public
     * @param string $RegistryVersion Warehouse version
     * @param string $RegistryRegion Region, list: default.
     * @param integer $SpeedLimit Speed limit
     * @param integer $Insecure 0: Secure Mode (Certificate Verification) (Default); 1: Insecure Mode (Skip Certificate Verification)
     * @param array $ConnDetectConfig Record ID of Connectivity Check
     * @param boolean $NeedScan Whether authorization and scanning are performed automatically. For full synchronization, only images of the latest version are involved. For incremental synchronization, all new images are involved.
     * @param integer $SyncMode Synchronization method. 0: full synchronization; 1: incremental synchronization.
     * @param string $WebhookUrl Webhook access address.
     * @param string $WebhookToken Webhook access token.
     * @param string $InstanceId TCR instance ID.
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

        if (array_key_exists("ConnDetectConfig",$param) and $param["ConnDetectConfig"] !== null) {
            $this->ConnDetectConfig = [];
            foreach ($param["ConnDetectConfig"] as $key => $value){
                $obj = new ConnDetectConfig();
                $obj->deserialize($value);
                array_push($this->ConnDetectConfig, $obj);
            }
        }

        if (array_key_exists("NeedScan",$param) and $param["NeedScan"] !== null) {
            $this->NeedScan = $param["NeedScan"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("WebhookUrl",$param) and $param["WebhookUrl"] !== null) {
            $this->WebhookUrl = $param["WebhookUrl"];
        }

        if (array_key_exists("WebhookToken",$param) and $param["WebhookToken"] !== null) {
            $this->WebhookToken = $param["WebhookToken"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
