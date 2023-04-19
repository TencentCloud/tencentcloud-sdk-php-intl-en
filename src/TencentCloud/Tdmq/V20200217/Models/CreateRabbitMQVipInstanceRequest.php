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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRabbitMQVipInstance request structure.
 *
 * @method array getZoneIds() Obtain AZ
 * @method void setZoneIds(array $ZoneIds) Set AZ
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain VPC subnet ID
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getNodeSpec() Obtain Node specification (`rabbit-vip-basic-1`: Basic; `rabbit-vip-basic-2`: Standard; `rabbit-vip-basic-3`: Advanced I; `rabbit-vip-basic-4`: Advanced II). If this parameter is left empty, the default value is `rabbit-vip-basic-1`.
 * @method void setNodeSpec(string $NodeSpec) Set Node specification (`rabbit-vip-basic-1`: Basic; `rabbit-vip-basic-2`: Standard; `rabbit-vip-basic-3`: Advanced I; `rabbit-vip-basic-4`: Advanced II). If this parameter is left empty, the default value is `rabbit-vip-basic-1`.
 * @method integer getNodeNum() Obtain Number of nodes, which is at least three for multi-AZ deployment. If this parameter is left empty, the value will be set to 1 for single-AZ deployment and 3 for multi-AZ deployment by default.
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes, which is at least three for multi-AZ deployment. If this parameter is left empty, the value will be set to 1 for single-AZ deployment and 3 for multi-AZ deployment by default.
 * @method integer getStorageSize() Obtain Storage capacity of a single node, which is 200 GB by default.
 * @method void setStorageSize(integer $StorageSize) Set Storage capacity of a single node, which is 200 GB by default.
 * @method boolean getEnableCreateDefaultHaMirrorQueue() Obtain Whether to enable mirrored queue. Default value: `false`.
 * @method void setEnableCreateDefaultHaMirrorQueue(boolean $EnableCreateDefaultHaMirrorQueue) Set Whether to enable mirrored queue. Default value: `false`.
 * @method boolean getAutoRenewFlag() Obtain Whether to enable auto-renewal. Default value: `true`.
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) Set Whether to enable auto-renewal. Default value: `true`.
 * @method integer getTimeSpan() Obtain Validity period, which is one month by default.
 * @method void setTimeSpan(integer $TimeSpan) Set Validity period, which is one month by default.
 */
class CreateRabbitMQVipInstanceRequest extends AbstractModel
{
    /**
     * @var array AZ
     */
    public $ZoneIds;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID
     */
    public $SubnetId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Node specification (`rabbit-vip-basic-1`: Basic; `rabbit-vip-basic-2`: Standard; `rabbit-vip-basic-3`: Advanced I; `rabbit-vip-basic-4`: Advanced II). If this parameter is left empty, the default value is `rabbit-vip-basic-1`.
     */
    public $NodeSpec;

    /**
     * @var integer Number of nodes, which is at least three for multi-AZ deployment. If this parameter is left empty, the value will be set to 1 for single-AZ deployment and 3 for multi-AZ deployment by default.
     */
    public $NodeNum;

    /**
     * @var integer Storage capacity of a single node, which is 200 GB by default.
     */
    public $StorageSize;

    /**
     * @var boolean Whether to enable mirrored queue. Default value: `false`.
     */
    public $EnableCreateDefaultHaMirrorQueue;

    /**
     * @var boolean Whether to enable auto-renewal. Default value: `true`.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Validity period, which is one month by default.
     */
    public $TimeSpan;

    /**
     * @param array $ZoneIds AZ
     * @param string $VpcId VPC ID
     * @param string $SubnetId VPC subnet ID
     * @param string $ClusterName Cluster name
     * @param string $NodeSpec Node specification (`rabbit-vip-basic-1`: Basic; `rabbit-vip-basic-2`: Standard; `rabbit-vip-basic-3`: Advanced I; `rabbit-vip-basic-4`: Advanced II). If this parameter is left empty, the default value is `rabbit-vip-basic-1`.
     * @param integer $NodeNum Number of nodes, which is at least three for multi-AZ deployment. If this parameter is left empty, the value will be set to 1 for single-AZ deployment and 3 for multi-AZ deployment by default.
     * @param integer $StorageSize Storage capacity of a single node, which is 200 GB by default.
     * @param boolean $EnableCreateDefaultHaMirrorQueue Whether to enable mirrored queue. Default value: `false`.
     * @param boolean $AutoRenewFlag Whether to enable auto-renewal. Default value: `true`.
     * @param integer $TimeSpan Validity period, which is one month by default.
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NodeSpec",$param) and $param["NodeSpec"] !== null) {
            $this->NodeSpec = $param["NodeSpec"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("EnableCreateDefaultHaMirrorQueue",$param) and $param["EnableCreateDefaultHaMirrorQueue"] !== null) {
            $this->EnableCreateDefaultHaMirrorQueue = $param["EnableCreateDefaultHaMirrorQueue"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }
    }
}
