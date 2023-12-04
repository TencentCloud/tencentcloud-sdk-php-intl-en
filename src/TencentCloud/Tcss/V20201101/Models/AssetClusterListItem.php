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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of clusters
 *
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getStatus() Obtain Cluster status
`CSR_RUNNING`: Running
`CSR_EXCEPTION`: Abnormal
`CSR_DEL`: Deleted
 * @method void setStatus(string $Status) Set Cluster status
`CSR_RUNNING`: Running
`CSR_EXCEPTION`: Abnormal
`CSR_DEL`: Deleted
 * @method string getBindRuleName() Obtain Bound rule name
 * @method void setBindRuleName(string $BindRuleName) Set Bound rule name
 * @method string getClusterType() Obtain Cluster type:
`CT_TKE`: TKE cluster
`CT_USER_CREATE`: External cluster
`CT_TKE_SERVERLESS`: TKE Serverless cluster
 * @method void setClusterType(string $ClusterType) Set Cluster type:
`CT_TKE`: TKE cluster
`CT_USER_CREATE`: External cluster
`CT_TKE_SERVERLESS`: TKE Serverless cluster
 * @method string getClusterVersion() Obtain Cluster version
 * @method void setClusterVersion(string $ClusterVersion) Set Cluster version
 * @method integer getMemLimit() Obtain MEM usage
 * @method void setMemLimit(integer $MemLimit) Set MEM usage
 * @method integer getCpuLimit() Obtain cpu
 * @method void setCpuLimit(integer $CpuLimit) Set cpu
 */
class AssetClusterListItem extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Cluster status
`CSR_RUNNING`: Running
`CSR_EXCEPTION`: Abnormal
`CSR_DEL`: Deleted
     */
    public $Status;

    /**
     * @var string Bound rule name
     */
    public $BindRuleName;

    /**
     * @var string Cluster type:
`CT_TKE`: TKE cluster
`CT_USER_CREATE`: External cluster
`CT_TKE_SERVERLESS`: TKE Serverless cluster
     */
    public $ClusterType;

    /**
     * @var string Cluster version
     */
    public $ClusterVersion;

    /**
     * @var integer MEM usage
     */
    public $MemLimit;

    /**
     * @var integer cpu
     */
    public $CpuLimit;

    /**
     * @param string $ClusterID Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $Status Cluster status
`CSR_RUNNING`: Running
`CSR_EXCEPTION`: Abnormal
`CSR_DEL`: Deleted
     * @param string $BindRuleName Bound rule name
     * @param string $ClusterType Cluster type:
`CT_TKE`: TKE cluster
`CT_USER_CREATE`: External cluster
`CT_TKE_SERVERLESS`: TKE Serverless cluster
     * @param string $ClusterVersion Cluster version
     * @param integer $MemLimit MEM usage
     * @param integer $CpuLimit cpu
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
    }
}
