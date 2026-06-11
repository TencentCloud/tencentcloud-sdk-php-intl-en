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
 * List of clusters
 *
 * @method string getClusterID() Obtain <p>Cluster ID.</p>
 * @method void setClusterID(string $ClusterID) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getStatus() Obtain <p>Cluster status<br>CSR_RUNNING: Running<br>CSR_EXCEPTION: Exception<br>CSR_DEL: Deleted</p>
 * @method void setStatus(string $Status) Set <p>Cluster status<br>CSR_RUNNING: Running<br>CSR_EXCEPTION: Exception<br>CSR_DEL: Deleted</p>
 * @method string getBindRuleID() Obtain <p>ID of the bound cluster</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindRuleID(string $BindRuleID) Set <p>ID of the bound cluster</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBindRuleName() Obtain <p>Binding rule name</p>
 * @method void setBindRuleName(string $BindRuleName) Set <p>Binding rule name</p>
 * @method string getClusterType() Obtain <p>ClusterType:<br>CT_TKE: tke cluster;<br>CT_USER_CREATE: user-built cluster;<br>CT_TKE_SERVERLESS: TKE Serverless Cluster;</p>
 * @method void setClusterType(string $ClusterType) Set <p>ClusterType:<br>CT_TKE: tke cluster;<br>CT_USER_CREATE: user-built cluster;<br>CT_TKE_SERVERLESS: TKE Serverless Cluster;</p>
 * @method string getClusterVersion() Obtain <p>Cluster edition</p>
 * @method void setClusterVersion(string $ClusterVersion) Set <p>Cluster edition</p>
 * @method integer getMemLimit() Obtain <p>Memory capacity</p>
 * @method void setMemLimit(integer $MemLimit) Set <p>Memory capacity</p>
 * @method integer getCpuLimit() Obtain <p>cpu</p>
 * @method void setCpuLimit(integer $CpuLimit) Set <p>cpu</p>
 * @method string getClusterAuditStatus() Obtain <p>Cluster audit switch status:<br>Closed/Closing/CloseFailed/Opened/Opening/OpenFailed</p>
 * @method void setClusterAuditStatus(string $ClusterAuditStatus) Set <p>Cluster audit switch status:<br>Closed/Closing/CloseFailed/Opened/Opening/OpenFailed</p>
 * @method string getAccessedStatus() Obtain <p>Access status:<br>Not connected: AccessedNone<br>Defended: AccessedDefended<br>No protection: AccessedInstalled<br>Partial protection: AccessedPartialDefence<br>Access exception: AccessedException<br>Uninstallation exception: AccessedUninstallException<br>Accessing: AccessedInstalling<br>Uninstalling: AccessedUninstalling</p>
 * @method void setAccessedStatus(string $AccessedStatus) Set <p>Access status:<br>Not connected: AccessedNone<br>Defended: AccessedDefended<br>No protection: AccessedInstalled<br>Partial protection: AccessedPartialDefence<br>Access exception: AccessedException<br>Uninstallation exception: AccessedUninstallException<br>Accessing: AccessedInstalling<br>Uninstalling: AccessedUninstalling</p>
 */
class AssetClusterListItem extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterID;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster status<br>CSR_RUNNING: Running<br>CSR_EXCEPTION: Exception<br>CSR_DEL: Deleted</p>
     */
    public $Status;

    /**
     * @var string <p>ID of the bound cluster</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BindRuleID;

    /**
     * @var string <p>Binding rule name</p>
     */
    public $BindRuleName;

    /**
     * @var string <p>ClusterType:<br>CT_TKE: tke cluster;<br>CT_USER_CREATE: user-built cluster;<br>CT_TKE_SERVERLESS: TKE Serverless Cluster;</p>
     */
    public $ClusterType;

    /**
     * @var string <p>Cluster edition</p>
     */
    public $ClusterVersion;

    /**
     * @var integer <p>Memory capacity</p>
     */
    public $MemLimit;

    /**
     * @var integer <p>cpu</p>
     */
    public $CpuLimit;

    /**
     * @var string <p>Cluster audit switch status:<br>Closed/Closing/CloseFailed/Opened/Opening/OpenFailed</p>
     */
    public $ClusterAuditStatus;

    /**
     * @var string <p>Access status:<br>Not connected: AccessedNone<br>Defended: AccessedDefended<br>No protection: AccessedInstalled<br>Partial protection: AccessedPartialDefence<br>Access exception: AccessedException<br>Uninstallation exception: AccessedUninstallException<br>Accessing: AccessedInstalling<br>Uninstalling: AccessedUninstalling</p>
     */
    public $AccessedStatus;

    /**
     * @param string $ClusterID <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $Status <p>Cluster status<br>CSR_RUNNING: Running<br>CSR_EXCEPTION: Exception<br>CSR_DEL: Deleted</p>
     * @param string $BindRuleID <p>ID of the bound cluster</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BindRuleName <p>Binding rule name</p>
     * @param string $ClusterType <p>ClusterType:<br>CT_TKE: tke cluster;<br>CT_USER_CREATE: user-built cluster;<br>CT_TKE_SERVERLESS: TKE Serverless Cluster;</p>
     * @param string $ClusterVersion <p>Cluster edition</p>
     * @param integer $MemLimit <p>Memory capacity</p>
     * @param integer $CpuLimit <p>cpu</p>
     * @param string $ClusterAuditStatus <p>Cluster audit switch status:<br>Closed/Closing/CloseFailed/Opened/Opening/OpenFailed</p>
     * @param string $AccessedStatus <p>Access status:<br>Not connected: AccessedNone<br>Defended: AccessedDefended<br>No protection: AccessedInstalled<br>Partial protection: AccessedPartialDefence<br>Access exception: AccessedException<br>Uninstallation exception: AccessedUninstallException<br>Accessing: AccessedInstalling<br>Uninstalling: AccessedUninstalling</p>
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BindRuleID",$param) and $param["BindRuleID"] !== null) {
            $this->BindRuleID = $param["BindRuleID"];
        }

        if (array_key_exists("BindRuleName",$param) and $param["BindRuleName"] !== null) {
            $this->BindRuleName = $param["BindRuleName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("ClusterAuditStatus",$param) and $param["ClusterAuditStatus"] !== null) {
            $this->ClusterAuditStatus = $param["ClusterAuditStatus"];
        }

        if (array_key_exists("AccessedStatus",$param) and $param["AccessedStatus"] !== null) {
            $this->AccessedStatus = $param["AccessedStatus"];
        }
    }
}
