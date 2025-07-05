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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Deployment record details.
 *
 * @method integer getId() Obtain Deployment record detail ID.
 * @method void setId(integer $Id) Set Deployment record detail ID.
 * @method string getOldCertId() Obtain Bound certificate ID.
 * @method void setOldCertId(string $OldCertId) Set Bound certificate ID.
 * @method string getInstanceId() Obtain Deployment instance ID.
 * @method void setInstanceId(string $InstanceId) Set Deployment instance ID.
 * @method string getInstanceName() Obtain Specifies the deployment instance name.
 * @method void setInstanceName(string $InstanceName) Set Specifies the deployment instance name.
 * @method string getListenerId() Obtain Deploy the listener ID.
 * @method void setListenerId(string $ListenerId) Set Deploy the listener ID.
 * @method array getDomains() Obtain Deployment domain name list.
 * @method void setDomains(array $Domains) Set Deployment domain name list.
 * @method string getProtocol() Obtain Deploy listener protocol.
 * @method void setProtocol(string $Protocol) Set Deploy listener protocol.
 * @method integer getStatus() Obtain Deployment state.
 * @method void setStatus(integer $Status) Set Deployment state.
 * @method string getErrorMsg() Obtain Deployment error information.
 * @method void setErrorMsg(string $ErrorMsg) Set Deployment error information.
 * @method string getCreateTime() Obtain Describes the creation time of the deployment record detail.
 * @method void setCreateTime(string $CreateTime) Set Describes the creation time of the deployment record detail.
 * @method string getUpdateTime() Obtain Specifies the last update time of the deployment record detail.
 * @method void setUpdateTime(string $UpdateTime) Set Specifies the last update time of the deployment record detail.
 * @method string getListenerName() Obtain Deploy listener name.
 * @method void setListenerName(string $ListenerName) Set Deploy listener name.
 * @method integer getSniSwitch() Obtain Whether SNI is enabled.
 * @method void setSniSwitch(integer $SniSwitch) Set Whether SNI is enabled.
 * @method string getBucket() Obtain COS bucket name.
 * @method void setBucket(string $Bucket) Set COS bucket name.
 * @method string getNamespace() Obtain Namespace name.
 * @method void setNamespace(string $Namespace) Set Namespace name.
 * @method string getSecretName() Obtain The secret name.
 * @method void setSecretName(string $SecretName) Set The secret name.
 * @method integer getPort() Obtain Port
 * @method void setPort(integer $Port) Set Port
 * @method string getRegion() Obtain Deployed TCB region.
 * @method void setRegion(string $Region) Set Deployed TCB region.
 * @method integer getForward() Obtain CLB type. valid values: 0 (classic clb); 1 (application clb).
 * @method void setForward(integer $Forward) Set CLB type. valid values: 0 (classic clb); 1 (application clb).
 * @method string getSSLMode() Obtain Certificate authentication mode: UNIDIRECTIONAL for one-way authentication, MUTUAL for MUTUAL authentication.
 * @method void setSSLMode(string $SSLMode) Set Certificate authentication mode: UNIDIRECTIONAL for one-way authentication, MUTUAL for MUTUAL authentication.
 * @method string getResourceType() Obtain Deployment resource type.
 * @method void setResourceType(string $ResourceType) Set Deployment resource type.
 */
class DeployRecordItem extends AbstractModel
{
    /**
     * @var integer Deployment record detail ID.
     */
    public $Id;

    /**
     * @var string Bound certificate ID.
     */
    public $OldCertId;

    /**
     * @var string Deployment instance ID.
     */
    public $InstanceId;

    /**
     * @var string Specifies the deployment instance name.
     */
    public $InstanceName;

    /**
     * @var string Deploy the listener ID.
     */
    public $ListenerId;

    /**
     * @var array Deployment domain name list.
     */
    public $Domains;

    /**
     * @var string Deploy listener protocol.
     */
    public $Protocol;

    /**
     * @var integer Deployment state.
     */
    public $Status;

    /**
     * @var string Deployment error information.
     */
    public $ErrorMsg;

    /**
     * @var string Describes the creation time of the deployment record detail.
     */
    public $CreateTime;

    /**
     * @var string Specifies the last update time of the deployment record detail.
     */
    public $UpdateTime;

    /**
     * @var string Deploy listener name.
     */
    public $ListenerName;

    /**
     * @var integer Whether SNI is enabled.
     */
    public $SniSwitch;

    /**
     * @var string COS bucket name.
     */
    public $Bucket;

    /**
     * @var string Namespace name.
     */
    public $Namespace;

    /**
     * @var string The secret name.
     */
    public $SecretName;

    /**
     * @var integer Port
     */
    public $Port;

    /**
     * @var string Deployed TCB region.
     */
    public $Region;

    /**
     * @var integer CLB type. valid values: 0 (classic clb); 1 (application clb).
     */
    public $Forward;

    /**
     * @var string Certificate authentication mode: UNIDIRECTIONAL for one-way authentication, MUTUAL for MUTUAL authentication.
     */
    public $SSLMode;

    /**
     * @var string Deployment resource type.
     */
    public $ResourceType;

    /**
     * @param integer $Id Deployment record detail ID.
     * @param string $OldCertId Bound certificate ID.
     * @param string $InstanceId Deployment instance ID.
     * @param string $InstanceName Specifies the deployment instance name.
     * @param string $ListenerId Deploy the listener ID.
     * @param array $Domains Deployment domain name list.
     * @param string $Protocol Deploy listener protocol.
     * @param integer $Status Deployment state.
     * @param string $ErrorMsg Deployment error information.
     * @param string $CreateTime Describes the creation time of the deployment record detail.
     * @param string $UpdateTime Specifies the last update time of the deployment record detail.
     * @param string $ListenerName Deploy listener name.
     * @param integer $SniSwitch Whether SNI is enabled.
     * @param string $Bucket COS bucket name.
     * @param string $Namespace Namespace name.
     * @param string $SecretName The secret name.
     * @param integer $Port Port
     * @param string $Region Deployed TCB region.
     * @param integer $Forward CLB type. valid values: 0 (classic clb); 1 (application clb).
     * @param string $SSLMode Certificate authentication mode: UNIDIRECTIONAL for one-way authentication, MUTUAL for MUTUAL authentication.
     * @param string $ResourceType Deployment resource type.
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

        if (array_key_exists("OldCertId",$param) and $param["OldCertId"] !== null) {
            $this->OldCertId = $param["OldCertId"];
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

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
