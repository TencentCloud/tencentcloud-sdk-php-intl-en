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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getClusterOs() Obtain Cluster operating system. CentOS 7.2x86_64 or Ubuntu 16.04.1 LTSx86_64. Default value: Ubuntu 16.04.1 LTSx86_64
 * @method void setClusterOs(string $ClusterOs) Set Cluster operating system. CentOS 7.2x86_64 or Ubuntu 16.04.1 LTSx86_64. Default value: Ubuntu 16.04.1 LTSx86_64
 * @method string getClusterVersion() Obtain Cluster version. The default value is 1.10.5.
 * @method void setClusterVersion(string $ClusterVersion) Set Cluster version. The default value is 1.10.5.
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getClusterDescription() Obtain Cluster description
 * @method void setClusterDescription(string $ClusterDescription) Set Cluster description
 * @method string getVpcId() Obtain VPC ID, in the format of vpc-xxx, which is required when you create an empty managed cluster.
 * @method void setVpcId(string $VpcId) Set VPC ID, in the format of vpc-xxx, which is required when you create an empty managed cluster.
 * @method integer getProjectId() Obtain ID of the project to which the new resources in the cluster belong.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the new resources in the cluster belong.
 * @method array getTagSpecification() Obtain 
 * @method void setTagSpecification(array $TagSpecification) Set 
 * @method string getOsCustomizeType() Obtain 
 * @method void setOsCustomizeType(string $OsCustomizeType) Set 
 * @method boolean getNeedWorkSecurityGroup() Obtain 
 * @method void setNeedWorkSecurityGroup(boolean $NeedWorkSecurityGroup) Set 
 */

/**
 *Describes the basic configuration information of a cluster
 */
class ClusterBasicSettings extends AbstractModel
{
    /**
     * @var string Cluster operating system. CentOS 7.2x86_64 or Ubuntu 16.04.1 LTSx86_64. Default value: Ubuntu 16.04.1 LTSx86_64
     */
    public $ClusterOs;

    /**
     * @var string Cluster version. The default value is 1.10.5.
     */
    public $ClusterVersion;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Cluster description
     */
    public $ClusterDescription;

    /**
     * @var string VPC ID, in the format of vpc-xxx, which is required when you create an empty managed cluster.
     */
    public $VpcId;

    /**
     * @var integer ID of the project to which the new resources in the cluster belong.
     */
    public $ProjectId;

    /**
     * @var array 
     */
    public $TagSpecification;

    /**
     * @var string 
     */
    public $OsCustomizeType;

    /**
     * @var boolean 
     */
    public $NeedWorkSecurityGroup;
    /**
     * @param string $ClusterOs Cluster operating system. CentOS 7.2x86_64 or Ubuntu 16.04.1 LTSx86_64. Default value: Ubuntu 16.04.1 LTSx86_64
     * @param string $ClusterVersion Cluster version. The default value is 1.10.5.
     * @param string $ClusterName Cluster name
     * @param string $ClusterDescription Cluster description
     * @param string $VpcId VPC ID, in the format of vpc-xxx, which is required when you create an empty managed cluster.
     * @param integer $ProjectId ID of the project to which the new resources in the cluster belong.
     * @param array $TagSpecification 
     * @param string $OsCustomizeType 
     * @param boolean $NeedWorkSecurityGroup 
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
        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("NeedWorkSecurityGroup",$param) and $param["NeedWorkSecurityGroup"] !== null) {
            $this->NeedWorkSecurityGroup = $param["NeedWorkSecurityGroup"];
        }
    }
}
