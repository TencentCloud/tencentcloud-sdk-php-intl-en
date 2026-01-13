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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRabbitMQVipInstance request structure.
 *
 * @method array getZoneIds() Obtain AZ
 * @method void setZoneIds(array $ZoneIds) Set AZ
 * @method string getVpcId() Obtain vpc ID, such as vpc-xxx. valid VpcId can be obtained by logging in to the virtual private cloud console (https://console.cloud.tencent.com/vpc/vpc?rid=1) or via api call to DescribeVpcEx (https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1), retrieving the unVpcId field from the api response. if both VpcId and SubnetId are set to DEFAULT when creating an instance, the DEFAULT vpc network will be forcibly used.
 * @method void setVpcId(string $VpcId) Set vpc ID, such as vpc-xxx. valid VpcId can be obtained by logging in to the virtual private cloud console (https://console.cloud.tencent.com/vpc/vpc?rid=1) or via api call to DescribeVpcEx (https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1), retrieving the unVpcId field from the api response. if both VpcId and SubnetId are set to DEFAULT when creating an instance, the DEFAULT vpc network will be forcibly used.
 * @method string getSubnetId() Obtain The subnet ID of the vpc, such as subnet-xxx. valid subnet ids can be queried by logging in to the subnet console (https://console.cloud.tencent.com/vpc/subnet?rid=1) or by calling the api [DescribeSubnets](https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1) and obtaining the unSubnetId field from the api response. if both SubnetId and VpcId are set to DEFAULT when creating an instance, the DEFAULT vpc network will be forcibly used.
 * @method void setSubnetId(string $SubnetId) Set The subnet ID of the vpc, such as subnet-xxx. valid subnet ids can be queried by logging in to the subnet console (https://console.cloud.tencent.com/vpc/subnet?rid=1) or by calling the api [DescribeSubnets](https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1) and obtaining the unSubnetId field from the api response. if both SubnetId and VpcId are set to DEFAULT when creating an instance, the DEFAULT vpc network will be forcibly used.
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getNodeSpec() Obtain Node specification of the cluster. need to enter the corresponding specification flag.
2C8G:rabbit-vip-profession-2c8g
4C16G:rabbit-vip-profession-4c16g
8C32G:rabbit-vip-profession-8c32g
16C32G:rabbit-vip-basic-4
16C64G:rabbit-vip-profession-16c64g
2C4G:rabbit-vip-basic-5
4C8G:rabbit-vip-basic-1
8C16G (sold out): rabbit-vip-basic-2.
Specifies the default value as 4C8G: rabbit-vip-basic-1.
 * @method void setNodeSpec(string $NodeSpec) Set Node specification of the cluster. need to enter the corresponding specification flag.
2C8G:rabbit-vip-profession-2c8g
4C16G:rabbit-vip-profession-4c16g
8C32G:rabbit-vip-profession-8c32g
16C32G:rabbit-vip-basic-4
16C64G:rabbit-vip-profession-16c64g
2C4G:rabbit-vip-basic-5
4C8G:rabbit-vip-basic-1
8C16G (sold out): rabbit-vip-basic-2.
Specifies the default value as 4C8G: rabbit-vip-basic-1.
 * @method integer getNodeNum() Obtain Number of nodes, which is at least three for multi-AZ deployment. If this parameter is left empty, the value will be set to 1 for single-AZ deployment and 3 for multi-AZ deployment by default.
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes, which is at least three for multi-AZ deployment. If this parameter is left empty, the value will be set to 1 for single-AZ deployment and 3 for multi-AZ deployment by default.
 * @method integer getStorageSize() Obtain Storage capacity of a single node, which is 200 GB by default.
 * @method void setStorageSize(integer $StorageSize) Set Storage capacity of a single node, which is 200 GB by default.
 * @method boolean getEnableCreateDefaultHaMirrorQueue() Obtain Whether the default image queue is enabled. true means enabled, false means not enabled. defaults to false if not specified.
 * @method void setEnableCreateDefaultHaMirrorQueue(boolean $EnableCreateDefaultHaMirrorQueue) Set Whether the default image queue is enabled. true means enabled, false means not enabled. defaults to false if not specified.
 * @method boolean getAutoRenewFlag() Obtain Only applies to prepaid clusters (when PayMode parameter is 1). specifies whether the cluster is automatically renewed. true means auto-renewal is enabled. the default is true if not specified.
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) Set Only applies to prepaid clusters (when PayMode parameter is 1). specifies whether the cluster is automatically renewed. true means auto-renewal is enabled. the default is true if not specified.
 * @method integer getTimeSpan() Obtain Validity period, which is one month by default.
 * @method void setTimeSpan(integer $TimeSpan) Set Validity period, which is one month by default.
 * @method integer getPayMode() Obtain Payment mode. 0: postpaid, (pay-as-you-go); 1: prepaid (monthly subscription). Monthly subscription is used by default.
 * @method void setPayMode(integer $PayMode) Set Payment mode. 0: postpaid, (pay-as-you-go); 1: prepaid (monthly subscription). Monthly subscription is used by default.
 * @method string getClusterVersion() Obtain Specifies the cluster edition. defaults to 3.8.30. valid values: 3.8.30, 3.11.8, 3.13.7.
 * @method void setClusterVersion(string $ClusterVersion) Set Specifies the cluster edition. defaults to 3.8.30. valid values: 3.8.30, 3.11.8, 3.13.7.
 * @method boolean getIsIntl() Obtain Whether the request is from the international website. Default value: false.
 * @method void setIsIntl(boolean $IsIntl) Set Whether the request is from the international website. Default value: false.
 * @method array getResourceTags() Obtain Resource tag list.
 * @method void setResourceTags(array $ResourceTags) Set Resource tag list.
 * @method integer getBandwidth() Obtain Specifies the public bandwidth size in Mbps.
 * @method void setBandwidth(integer $Bandwidth) Set Specifies the public bandwidth size in Mbps.
 * @method boolean getEnablePublicAccess() Obtain Whether to enable public network access. If this parameter is not specified, the value is false by default.
 * @method void setEnablePublicAccess(boolean $EnablePublicAccess) Set Whether to enable public network access. If this parameter is not specified, the value is false by default.
 * @method boolean getEnableDeletionProtection() Obtain Whether to enable cluster deletion protection. if this parameter is not specified, the value is false by default.
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) Set Whether to enable cluster deletion protection. if this parameter is not specified, the value is false by default.
 */
class CreateRabbitMQVipInstanceRequest extends AbstractModel
{
    /**
     * @var array AZ
     */
    public $ZoneIds;

    /**
     * @var string vpc ID, such as vpc-xxx. valid VpcId can be obtained by logging in to the virtual private cloud console (https://console.cloud.tencent.com/vpc/vpc?rid=1) or via api call to DescribeVpcEx (https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1), retrieving the unVpcId field from the api response. if both VpcId and SubnetId are set to DEFAULT when creating an instance, the DEFAULT vpc network will be forcibly used.
     */
    public $VpcId;

    /**
     * @var string The subnet ID of the vpc, such as subnet-xxx. valid subnet ids can be queried by logging in to the subnet console (https://console.cloud.tencent.com/vpc/subnet?rid=1) or by calling the api [DescribeSubnets](https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1) and obtaining the unSubnetId field from the api response. if both SubnetId and VpcId are set to DEFAULT when creating an instance, the DEFAULT vpc network will be forcibly used.
     */
    public $SubnetId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Node specification of the cluster. need to enter the corresponding specification flag.
2C8G:rabbit-vip-profession-2c8g
4C16G:rabbit-vip-profession-4c16g
8C32G:rabbit-vip-profession-8c32g
16C32G:rabbit-vip-basic-4
16C64G:rabbit-vip-profession-16c64g
2C4G:rabbit-vip-basic-5
4C8G:rabbit-vip-basic-1
8C16G (sold out): rabbit-vip-basic-2.
Specifies the default value as 4C8G: rabbit-vip-basic-1.
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
     * @var boolean Whether the default image queue is enabled. true means enabled, false means not enabled. defaults to false if not specified.
     */
    public $EnableCreateDefaultHaMirrorQueue;

    /**
     * @var boolean Only applies to prepaid clusters (when PayMode parameter is 1). specifies whether the cluster is automatically renewed. true means auto-renewal is enabled. the default is true if not specified.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Validity period, which is one month by default.
     */
    public $TimeSpan;

    /**
     * @var integer Payment mode. 0: postpaid, (pay-as-you-go); 1: prepaid (monthly subscription). Monthly subscription is used by default.
     */
    public $PayMode;

    /**
     * @var string Specifies the cluster edition. defaults to 3.8.30. valid values: 3.8.30, 3.11.8, 3.13.7.
     */
    public $ClusterVersion;

    /**
     * @var boolean Whether the request is from the international website. Default value: false.
     */
    public $IsIntl;

    /**
     * @var array Resource tag list.
     */
    public $ResourceTags;

    /**
     * @var integer Specifies the public bandwidth size in Mbps.
     */
    public $Bandwidth;

    /**
     * @var boolean Whether to enable public network access. If this parameter is not specified, the value is false by default.
     */
    public $EnablePublicAccess;

    /**
     * @var boolean Whether to enable cluster deletion protection. if this parameter is not specified, the value is false by default.
     */
    public $EnableDeletionProtection;

    /**
     * @param array $ZoneIds AZ
     * @param string $VpcId vpc ID, such as vpc-xxx. valid VpcId can be obtained by logging in to the virtual private cloud console (https://console.cloud.tencent.com/vpc/vpc?rid=1) or via api call to DescribeVpcEx (https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1), retrieving the unVpcId field from the api response. if both VpcId and SubnetId are set to DEFAULT when creating an instance, the DEFAULT vpc network will be forcibly used.
     * @param string $SubnetId The subnet ID of the vpc, such as subnet-xxx. valid subnet ids can be queried by logging in to the subnet console (https://console.cloud.tencent.com/vpc/subnet?rid=1) or by calling the api [DescribeSubnets](https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1) and obtaining the unSubnetId field from the api response. if both SubnetId and VpcId are set to DEFAULT when creating an instance, the DEFAULT vpc network will be forcibly used.
     * @param string $ClusterName Cluster name
     * @param string $NodeSpec Node specification of the cluster. need to enter the corresponding specification flag.
2C8G:rabbit-vip-profession-2c8g
4C16G:rabbit-vip-profession-4c16g
8C32G:rabbit-vip-profession-8c32g
16C32G:rabbit-vip-basic-4
16C64G:rabbit-vip-profession-16c64g
2C4G:rabbit-vip-basic-5
4C8G:rabbit-vip-basic-1
8C16G (sold out): rabbit-vip-basic-2.
Specifies the default value as 4C8G: rabbit-vip-basic-1.
     * @param integer $NodeNum Number of nodes, which is at least three for multi-AZ deployment. If this parameter is left empty, the value will be set to 1 for single-AZ deployment and 3 for multi-AZ deployment by default.
     * @param integer $StorageSize Storage capacity of a single node, which is 200 GB by default.
     * @param boolean $EnableCreateDefaultHaMirrorQueue Whether the default image queue is enabled. true means enabled, false means not enabled. defaults to false if not specified.
     * @param boolean $AutoRenewFlag Only applies to prepaid clusters (when PayMode parameter is 1). specifies whether the cluster is automatically renewed. true means auto-renewal is enabled. the default is true if not specified.
     * @param integer $TimeSpan Validity period, which is one month by default.
     * @param integer $PayMode Payment mode. 0: postpaid, (pay-as-you-go); 1: prepaid (monthly subscription). Monthly subscription is used by default.
     * @param string $ClusterVersion Specifies the cluster edition. defaults to 3.8.30. valid values: 3.8.30, 3.11.8, 3.13.7.
     * @param boolean $IsIntl Whether the request is from the international website. Default value: false.
     * @param array $ResourceTags Resource tag list.
     * @param integer $Bandwidth Specifies the public bandwidth size in Mbps.
     * @param boolean $EnablePublicAccess Whether to enable public network access. If this parameter is not specified, the value is false by default.
     * @param boolean $EnableDeletionProtection Whether to enable cluster deletion protection. if this parameter is not specified, the value is false by default.
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("IsIntl",$param) and $param["IsIntl"] !== null) {
            $this->IsIntl = $param["IsIntl"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("EnablePublicAccess",$param) and $param["EnablePublicAccess"] !== null) {
            $this->EnablePublicAccess = $param["EnablePublicAccess"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }
    }
}
