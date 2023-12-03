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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Update record details
 *
 * @method integer getId() Obtain Detail record ID
 * @method void setId(integer $Id) Set Detail record ID
 * @method string getCertId() Obtain New certificate ID
 * @method void setCertId(string $CertId) Set New certificate ID
 * @method string getOldCertId() Obtain Old certificate ID
 * @method void setOldCertId(string $OldCertId) Set Old certificate ID
 * @method array getDomains() Obtain Deployment domain name list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDomains(array $Domains) Set Deployment domain name list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getResourceType() Obtain Deployment resource type
 * @method void setResourceType(string $ResourceType) Set Deployment resource type
 * @method string getRegion() Obtain Deployment region
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set Deployment region
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Deployment status
 * @method void setStatus(integer $Status) Set Deployment status
 * @method string getErrorMsg() Obtain Deployment error message
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setErrorMsg(string $ErrorMsg) Set Deployment error message
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Deployment time
 * @method void setCreateTime(string $CreateTime) Set Deployment time
 * @method string getUpdateTime() Obtain Last update time
 * @method void setUpdateTime(string $UpdateTime) Set Last update time
 * @method string getInstanceId() Obtain Deployment instance ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Deployment instance ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceName() Obtain Deployment instance name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Deployment instance name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getListenerId() Obtain Deployment listener ID (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setListenerId(string $ListenerId) Set Deployment listener ID (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getListenerName() Obtain Deployment listener name (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setListenerName(string $ListenerName) Set Deployment listener name (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProtocol() Obtain Protocol
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProtocol(string $Protocol) Set Protocol
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSniSwitch() Obtain Whether SNI is enabled (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSniSwitch(integer $SniSwitch) Set Whether SNI is enabled (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBucket() Obtain Bucket name (only for COS)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBucket(string $Bucket) Set Bucket name (only for COS)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPort() Obtain Port
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPort(integer $Port) Set Port
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getNamespace() Obtain Namespace (only for TKE)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNamespace(string $Namespace) Set Namespace (only for TKE)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSecretName() Obtain Secret name (only for TKE)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSecretName(string $SecretName) Set Secret name (only for TKE)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEnvId() Obtain Environment ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEnvId(string $EnvId) Set Environment ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTCBType() Obtain TCB deployment type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTCBType(string $TCBType) Set TCB deployment type
Note: This field may return null, indicating that no valid value can be obtained.
 */
class UpdateRecordDetail extends AbstractModel
{
    /**
     * @var integer Detail record ID
     */
    public $Id;

    /**
     * @var string New certificate ID
     */
    public $CertId;

    /**
     * @var string Old certificate ID
     */
    public $OldCertId;

    /**
     * @var array Deployment domain name list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Domains;

    /**
     * @var string Deployment resource type
     */
    public $ResourceType;

    /**
     * @var string Deployment region
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @var integer Deployment status
     */
    public $Status;

    /**
     * @var string Deployment error message
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ErrorMsg;

    /**
     * @var string Deployment time
     */
    public $CreateTime;

    /**
     * @var string Last update time
     */
    public $UpdateTime;

    /**
     * @var string Deployment instance ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Deployment instance name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Deployment listener ID (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ListenerId;

    /**
     * @var string Deployment listener name (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ListenerName;

    /**
     * @var string Protocol
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Protocol;

    /**
     * @var integer Whether SNI is enabled (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SniSwitch;

    /**
     * @var string Bucket name (only for COS)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Bucket;

    /**
     * @var integer Port
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Port;

    /**
     * @var string Namespace (only for TKE)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Namespace;

    /**
     * @var string Secret name (only for TKE)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SecretName;

    /**
     * @var string Environment ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EnvId;

    /**
     * @var string TCB deployment type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TCBType;

    /**
     * @param integer $Id Detail record ID
     * @param string $CertId New certificate ID
     * @param string $OldCertId Old certificate ID
     * @param array $Domains Deployment domain name list
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ResourceType Deployment resource type
     * @param string $Region Deployment region
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Deployment status
     * @param string $ErrorMsg Deployment error message
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Deployment time
     * @param string $UpdateTime Last update time
     * @param string $InstanceId Deployment instance ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceName Deployment instance name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ListenerId Deployment listener ID (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ListenerName Deployment listener name (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Protocol Protocol
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SniSwitch Whether SNI is enabled (only for CLB)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Bucket Bucket name (only for COS)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Port Port
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Namespace Namespace (only for TKE)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SecretName Secret name (only for TKE)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EnvId Environment ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TCBType TCB deployment type
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("OldCertId",$param) and $param["OldCertId"] !== null) {
            $this->OldCertId = $param["OldCertId"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("TCBType",$param) and $param["TCBType"] !== null) {
            $this->TCBType = $param["TCBType"];
        }
    }
}
