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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Overview of managed Prometheus agent
 *
 * @method string getClusterType() Obtain Cluster type
 * @method void setClusterType(string $ClusterType) Set Cluster type
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getStatus() Obtain Agent status. Valid values: 
`normal`
`abnormal`
 * @method void setStatus(string $Status) Set Agent status. Valid values: 
`normal`
`abnormal`
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method array getExternalLabels() Obtain External labels
External labels, which will be attached to all metrics in this cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExternalLabels(array $ExternalLabels) Set External labels
External labels, which will be attached to all metrics in this cluster
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Cluster region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Cluster region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain ID of the VPC where the cluster resides
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set ID of the VPC where the cluster resides
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFailedReason() Obtain Recorded information of failed operations, such as association.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailedReason(string $FailedReason) Set Recorded information of failed operations, such as association.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Agent name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Agent name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusAgentOverview extends AbstractModel
{
    /**
     * @var string Cluster type
     */
    public $ClusterType;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Agent status. Valid values: 
`normal`
`abnormal`
     */
    public $Status;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var array External labels
External labels, which will be attached to all metrics in this cluster
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExternalLabels;

    /**
     * @var string Cluster region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string ID of the VPC where the cluster resides
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Recorded information of failed operations, such as association.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailedReason;

    /**
     * @var string Agent name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @param string $ClusterType Cluster type
     * @param string $ClusterId Cluster ID
     * @param string $Status Agent status. Valid values: 
`normal`
`abnormal`
     * @param string $ClusterName Cluster name
     * @param array $ExternalLabels External labels
External labels, which will be attached to all metrics in this cluster
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Cluster region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId ID of the VPC where the cluster resides
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FailedReason Recorded information of failed operations, such as association.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Agent name
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ExternalLabels",$param) and $param["ExternalLabels"] !== null) {
            $this->ExternalLabels = [];
            foreach ($param["ExternalLabels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->ExternalLabels, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
