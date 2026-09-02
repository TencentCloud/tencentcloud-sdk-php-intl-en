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
 * Container asset scan details item
 *
 * @method string getContainerID() Obtain <p>Container ID</p>
 * @method void setContainerID(string $ContainerID) Set <p>Container ID</p>
 * @method string getContainerName() Obtain <p>Container name</p>
 * @method void setContainerName(string $ContainerName) Set <p>Container name</p>
 * @method string getPodName() Obtain <p>Pod Name</p>
 * @method void setPodName(string $PodName) Set <p>Pod Name</p>
 * @method string getClusterID() Obtain <p>Cluster ID.</p>
 * @method void setClusterID(string $ClusterID) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getClusterType() Obtain <p>Cluster type.</p>
 * @method void setClusterType(string $ClusterType) Set <p>Cluster type.</p>
 * @method string getAccountName() Obtain <p>Account name of asset ownership (enriched from the backend)</p>
 * @method void setAccountName(string $AccountName) Set <p>Account name of asset ownership (enriched from the backend)</p>
 * @method integer getAppId() Obtain <p>AppId of the associated account</p>
 * @method void setAppId(integer $AppId) Set <p>AppId of the associated account</p>
 * @method integer getCloudType() Obtain <p>Cloud type</p>
 * @method void setCloudType(integer $CloudType) Set <p>Cloud type</p>
 * @method string getStatus() Obtain <p>Scan status: WAIT/SCANNING/FINISHED/FAILED</p>
 * @method void setStatus(string $Status) Set <p>Scan status: WAIT/SCANNING/FINISHED/FAILED</p>
 * @method integer getRiskCount() Obtain <p>Alarm count</p>
 * @method void setRiskCount(integer $RiskCount) Set <p>Alarm count</p>
 * @method string getFailReason() Obtain <p>Failure reason</p>
 * @method void setFailReason(string $FailReason) Set <p>Failure reason</p>
 * @method string getFixSuggestion() Obtain <p>Solution.</p>
 * @method void setFixSuggestion(string $FixSuggestion) Set <p>Solution.</p>
 */
class EDRScanTaskContainerItem extends AbstractModel
{
    /**
     * @var string <p>Container ID</p>
     */
    public $ContainerID;

    /**
     * @var string <p>Container name</p>
     */
    public $ContainerName;

    /**
     * @var string <p>Pod Name</p>
     */
    public $PodName;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterID;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster type.</p>
     */
    public $ClusterType;

    /**
     * @var string <p>Account name of asset ownership (enriched from the backend)</p>
     */
    public $AccountName;

    /**
     * @var integer <p>AppId of the associated account</p>
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
     * @var integer <p>Alarm count</p>
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
     * @param string $ContainerID <p>Container ID</p>
     * @param string $ContainerName <p>Container name</p>
     * @param string $PodName <p>Pod Name</p>
     * @param string $ClusterID <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $ClusterType <p>Cluster type.</p>
     * @param string $AccountName <p>Account name of asset ownership (enriched from the backend)</p>
     * @param integer $AppId <p>AppId of the associated account</p>
     * @param integer $CloudType <p>Cloud type</p>
     * @param string $Status <p>Scan status: WAIT/SCANNING/FINISHED/FAILED</p>
     * @param integer $RiskCount <p>Alarm count</p>
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
        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
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
