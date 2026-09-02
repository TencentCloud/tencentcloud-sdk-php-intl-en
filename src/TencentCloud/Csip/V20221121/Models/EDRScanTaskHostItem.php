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
 * Host asset scan details item
 *
 * @method string getQuuid() Obtain <p>Host unique identifier</p>
 * @method void setQuuid(string $Quuid) Set <p>Host unique identifier</p>
 * @method string getHostName() Obtain <p>Host name.</p>
 * @method void setHostName(string $HostName) Set <p>Host name.</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getPublicIp() Obtain <p>Public IP address</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public IP address</p>
 * @method string getPrivateIp() Obtain <p>Private IP address.</p>
 * @method void setPrivateIp(string $PrivateIp) Set <p>Private IP address.</p>
 * @method string getOsType() Obtain <p>Operating system.</p>
 * @method void setOsType(string $OsType) Set <p>Operating system.</p>
 * @method string getAccountName() Obtain <p>Account name of asset ownership (enriched from the backend)</p>
 * @method void setAccountName(string $AccountName) Set <p>Account name of asset ownership (enriched from the backend)</p>
 * @method integer getAppId() Obtain <p>AppId of the account associated with the asset</p>
 * @method void setAppId(integer $AppId) Set <p>AppId of the account associated with the asset</p>
 * @method integer getCloudType() Obtain <p>Cloud type</p>
 * @method void setCloudType(integer $CloudType) Set <p>Cloud type</p>
 * @method string getStatus() Obtain <p>Scan status: WAIT/SCANNING/FINISHED/FAILED</p>
 * @method void setStatus(string $Status) Set <p>Scan status: WAIT/SCANNING/FINISHED/FAILED</p>
 * @method integer getRiskCount() Obtain <p>Risk count</p>
 * @method void setRiskCount(integer $RiskCount) Set <p>Risk count</p>
 * @method string getFailReason() Obtain <p>Failure reason</p>
 * @method void setFailReason(string $FailReason) Set <p>Failure reason</p>
 * @method string getFixSuggestion() Obtain <p>Solution.</p>
 * @method void setFixSuggestion(string $FixSuggestion) Set <p>Solution.</p>
 */
class EDRScanTaskHostItem extends AbstractModel
{
    /**
     * @var string <p>Host unique identifier</p>
     */
    public $Quuid;

    /**
     * @var string <p>Host name.</p>
     */
    public $HostName;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Public IP address</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>Operating system.</p>
     */
    public $OsType;

    /**
     * @var string <p>Account name of asset ownership (enriched from the backend)</p>
     */
    public $AccountName;

    /**
     * @var integer <p>AppId of the account associated with the asset</p>
     */
    public $AppId;

    /**
     * @var integer <p>Cloud type</p>
     */
    public $CloudType;

    /**
     * @var string <p>Scan status: WAIT/SCANNING/FINISHED/FAILED</p>
     */
    public $Status;

    /**
     * @var integer <p>Risk count</p>
     */
    public $RiskCount;

    /**
     * @var string <p>Failure reason</p>
     */
    public $FailReason;

    /**
     * @var string <p>Solution.</p>
     */
    public $FixSuggestion;

    /**
     * @param string $Quuid <p>Host unique identifier</p>
     * @param string $HostName <p>Host name.</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $PublicIp <p>Public IP address</p>
     * @param string $PrivateIp <p>Private IP address.</p>
     * @param string $OsType <p>Operating system.</p>
     * @param string $AccountName <p>Account name of asset ownership (enriched from the backend)</p>
     * @param integer $AppId <p>AppId of the account associated with the asset</p>
     * @param integer $CloudType <p>Cloud type</p>
     * @param string $Status <p>Scan status: WAIT/SCANNING/FINISHED/FAILED</p>
     * @param integer $RiskCount <p>Risk count</p>
     * @param string $FailReason <p>Failure reason</p>
     * @param string $FixSuggestion <p>Solution.</p>
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("FixSuggestion",$param) and $param["FixSuggestion"] !== null) {
            $this->FixSuggestion = $param["FixSuggestion"];
        }
    }
}
