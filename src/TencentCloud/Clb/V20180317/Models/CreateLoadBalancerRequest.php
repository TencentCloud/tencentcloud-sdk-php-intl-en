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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoadBalancer request structure.
 *
 * @method string getLoadBalancerType() Obtain CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set CLB instance network type:
OPEN: public network; INTERNAL: private network.
 * @method integer getForward() Obtain CLB instance type. Valid value: 1 (generic CLB instance).
 * @method void setForward(integer $Forward) Set CLB instance type. Valid value: 1 (generic CLB instance).
 * @method string getLoadBalancerName() Obtain CLB instance name, which takes effect only when only one instance is to be created in the request. It can consist 1 to 60 letters, digits, hyphens (-), or underscores (_).
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name, which takes effect only when only one instance is to be created in the request. It can consist 1 to 60 letters, digits, hyphens (-), or underscores (_).
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
 * @method string getVpcId() Obtain Network ID of the backend target server of CLB, which can be obtained through the DescribeVpcEx API. If this parameter is not passed in, it will default to a basic network ("0").
 * @method void setVpcId(string $VpcId) Set Network ID of the backend target server of CLB, which can be obtained through the DescribeVpcEx API. If this parameter is not passed in, it will default to a basic network ("0").
 * @method string getSubnetId() Obtain A subnet ID must be specified when you purchase a private network CLB instance in a VPC, and the VIP of this instance will be generated in this subnet.
 * @method void setSubnetId(string $SubnetId) Set A subnet ID must be specified when you purchase a private network CLB instance in a VPC, and the VIP of this instance will be generated in this subnet.
 * @method integer getProjectId() Obtain ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API. If this parameter is not passed in, the default project will be used.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API. If this parameter is not passed in, the default project will be used.
 * @method string getAddressIPVersion() Obtain IP version. Valid values: IPv4, IPv6, IPv6FullChain. Default value: IPv4. This parameter is applicable only to public network CLB instances.
 * @method void setAddressIPVersion(string $AddressIPVersion) Set IP version. Valid values: IPv4, IPv6, IPv6FullChain. Default value: IPv4. This parameter is applicable only to public network CLB instances.
 * @method integer getNumber() Obtain Number of CLBs to be created. Default value: 1.
 * @method void setNumber(integer $Number) Set Number of CLBs to be created. Default value: 1.
 * @method string getMasterZoneId() Obtain Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1, which is applicable only to public network CLB.
Note: A primary AZ carries traffic, while a secondary AZ does not carry traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. The list of primary AZs in a specific region can be queried through the DescribeMasterZones API.
 * @method void setMasterZoneId(string $MasterZoneId) Set Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1, which is applicable only to public network CLB.
Note: A primary AZ carries traffic, while a secondary AZ does not carry traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. The list of primary AZs in a specific region can be queried through the DescribeMasterZones API.
 * @method string getZoneId() Obtain Specifies an AZ ID for creating a CLB instance, such as `ap-guangzhou-1`, which is applicable only to public network CLB instances.
 * @method void setZoneId(string $ZoneId) Set Specifies an AZ ID for creating a CLB instance, such as `ap-guangzhou-1`, which is applicable only to public network CLB instances.
 * @method InternetAccessible getInternetAccessible() Obtain CLB network billing mode. This parameter is applicable only to public network CLB instances.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set CLB network billing mode. This parameter is applicable only to public network CLB instances.
 * @method string getVipIsp() Obtain This parameter is applicable only to public network CLB instances. Valid values: CMCC (China Mobile), CTCC (China Telecom), CUCC (China Unicom). If this parameter is not specified, BGP will be used by default. ISPs supported in a region can be queried with the `DescribeSingleIsp` API. If an ISP is specified, only bill-by-bandwidth-package (BANDWIDTH_PACKAGE) can be used as the network billing mode.
 * @method void setVipIsp(string $VipIsp) Set This parameter is applicable only to public network CLB instances. Valid values: CMCC (China Mobile), CTCC (China Telecom), CUCC (China Unicom). If this parameter is not specified, BGP will be used by default. ISPs supported in a region can be queried with the `DescribeSingleIsp` API. If an ISP is specified, only bill-by-bandwidth-package (BANDWIDTH_PACKAGE) can be used as the network billing mode.
 * @method array getTags() Obtain Tags a CLB instance when purchasing it
 * @method void setTags(array $Tags) Set Tags a CLB instance when purchasing it
 * @method string getVip() Obtain Applies for CLB instances for a specified VIP
 * @method void setVip(string $Vip) Set Applies for CLB instances for a specified VIP
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID. If this parameter is specified, the network billing mode (`InternetAccessible.InternetChargeType`) will only support bill-by-bandwidth package (`BANDWIDTH_PACKAGE`).
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID. If this parameter is specified, the network billing mode (`InternetAccessible.InternetChargeType`) will only support bill-by-bandwidth package (`BANDWIDTH_PACKAGE`).
 * @method ExclusiveCluster getExclusiveCluster() Obtain Dedicated cluster information
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set Dedicated cluster information
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method boolean getSnatPro() Obtain Whether Binding IPs of other VPCs feature switch
 * @method void setSnatPro(boolean $SnatPro) Set Whether Binding IPs of other VPCs feature switch
 * @method array getSnatIps() Obtain Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
 * @method void setSnatIps(array $SnatIps) Set Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
 * @method string getClusterTag() Obtain Tag for the STGW exclusive cluster.
 * @method void setClusterTag(string $ClusterTag) Set Tag for the STGW exclusive cluster.
 * @method string getSlaveZoneId() Obtain Sets the secondary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`, which is applicable only to public network CLB instances.
Note: A secondary AZ will load traffic if the primary AZ has failures. The API `DescribeMasterZones` is used to query the primary and secondary AZ list of a region.
 * @method void setSlaveZoneId(string $SlaveZoneId) Set Sets the secondary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`, which is applicable only to public network CLB instances.
Note: A secondary AZ will load traffic if the primary AZ has failures. The API `DescribeMasterZones` is used to query the primary and secondary AZ list of a region.
 * @method string getEipAddressId() Obtain Unique ID of an EIP, which can only be used when binding the EIP of a private network CLB instance. E.g., `eip-11112222`.
 * @method void setEipAddressId(string $EipAddressId) Set Unique ID of an EIP, which can only be used when binding the EIP of a private network CLB instance. E.g., `eip-11112222`.
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string CLB instance network type:
OPEN: public network; INTERNAL: private network.
     */
    public $LoadBalancerType;

    /**
     * @var integer CLB instance type. Valid value: 1 (generic CLB instance).
     */
    public $Forward;

    /**
     * @var string CLB instance name, which takes effect only when only one instance is to be created in the request. It can consist 1 to 60 letters, digits, hyphens (-), or underscores (_).
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
     */
    public $LoadBalancerName;

    /**
     * @var string Network ID of the backend target server of CLB, which can be obtained through the DescribeVpcEx API. If this parameter is not passed in, it will default to a basic network ("0").
     */
    public $VpcId;

    /**
     * @var string A subnet ID must be specified when you purchase a private network CLB instance in a VPC, and the VIP of this instance will be generated in this subnet.
     */
    public $SubnetId;

    /**
     * @var integer ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API. If this parameter is not passed in, the default project will be used.
     */
    public $ProjectId;

    /**
     * @var string IP version. Valid values: IPv4, IPv6, IPv6FullChain. Default value: IPv4. This parameter is applicable only to public network CLB instances.
     */
    public $AddressIPVersion;

    /**
     * @var integer Number of CLBs to be created. Default value: 1.
     */
    public $Number;

    /**
     * @var string Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1, which is applicable only to public network CLB.
Note: A primary AZ carries traffic, while a secondary AZ does not carry traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. The list of primary AZs in a specific region can be queried through the DescribeMasterZones API.
     */
    public $MasterZoneId;

    /**
     * @var string Specifies an AZ ID for creating a CLB instance, such as `ap-guangzhou-1`, which is applicable only to public network CLB instances.
     */
    public $ZoneId;

    /**
     * @var InternetAccessible CLB network billing mode. This parameter is applicable only to public network CLB instances.
     */
    public $InternetAccessible;

    /**
     * @var string This parameter is applicable only to public network CLB instances. Valid values: CMCC (China Mobile), CTCC (China Telecom), CUCC (China Unicom). If this parameter is not specified, BGP will be used by default. ISPs supported in a region can be queried with the `DescribeSingleIsp` API. If an ISP is specified, only bill-by-bandwidth-package (BANDWIDTH_PACKAGE) can be used as the network billing mode.
     */
    public $VipIsp;

    /**
     * @var array Tags a CLB instance when purchasing it
     */
    public $Tags;

    /**
     * @var string Applies for CLB instances for a specified VIP
     */
    public $Vip;

    /**
     * @var string Bandwidth package ID. If this parameter is specified, the network billing mode (`InternetAccessible.InternetChargeType`) will only support bill-by-bandwidth package (`BANDWIDTH_PACKAGE`).
     */
    public $BandwidthPackageId;

    /**
     * @var ExclusiveCluster Dedicated cluster information
     */
    public $ExclusiveCluster;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     */
    public $ClientToken;

    /**
     * @var boolean Whether Binding IPs of other VPCs feature switch
     */
    public $SnatPro;

    /**
     * @var array Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
     */
    public $SnatIps;

    /**
     * @var string Tag for the STGW exclusive cluster.
     */
    public $ClusterTag;

    /**
     * @var string Sets the secondary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`, which is applicable only to public network CLB instances.
Note: A secondary AZ will load traffic if the primary AZ has failures. The API `DescribeMasterZones` is used to query the primary and secondary AZ list of a region.
     */
    public $SlaveZoneId;

    /**
     * @var string Unique ID of an EIP, which can only be used when binding the EIP of a private network CLB instance. E.g., `eip-11112222`.
     */
    public $EipAddressId;

    /**
     * @param string $LoadBalancerType CLB instance network type:
OPEN: public network; INTERNAL: private network.
     * @param integer $Forward CLB instance type. Valid value: 1 (generic CLB instance).
     * @param string $LoadBalancerName CLB instance name, which takes effect only when only one instance is to be created in the request. It can consist 1 to 60 letters, digits, hyphens (-), or underscores (_).
Note: if the name of the new CLB instance already exists, a default name will be generated automatically.
     * @param string $VpcId Network ID of the backend target server of CLB, which can be obtained through the DescribeVpcEx API. If this parameter is not passed in, it will default to a basic network ("0").
     * @param string $SubnetId A subnet ID must be specified when you purchase a private network CLB instance in a VPC, and the VIP of this instance will be generated in this subnet.
     * @param integer $ProjectId ID of the project to which a CLB instance belongs, which can be obtained through the DescribeProject API. If this parameter is not passed in, the default project will be used.
     * @param string $AddressIPVersion IP version. Valid values: IPv4, IPv6, IPv6FullChain. Default value: IPv4. This parameter is applicable only to public network CLB instances.
     * @param integer $Number Number of CLBs to be created. Default value: 1.
     * @param string $MasterZoneId Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1, which is applicable only to public network CLB.
Note: A primary AZ carries traffic, while a secondary AZ does not carry traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. The list of primary AZs in a specific region can be queried through the DescribeMasterZones API.
     * @param string $ZoneId Specifies an AZ ID for creating a CLB instance, such as `ap-guangzhou-1`, which is applicable only to public network CLB instances.
     * @param InternetAccessible $InternetAccessible CLB network billing mode. This parameter is applicable only to public network CLB instances.
     * @param string $VipIsp This parameter is applicable only to public network CLB instances. Valid values: CMCC (China Mobile), CTCC (China Telecom), CUCC (China Unicom). If this parameter is not specified, BGP will be used by default. ISPs supported in a region can be queried with the `DescribeSingleIsp` API. If an ISP is specified, only bill-by-bandwidth-package (BANDWIDTH_PACKAGE) can be used as the network billing mode.
     * @param array $Tags Tags a CLB instance when purchasing it
     * @param string $Vip Applies for CLB instances for a specified VIP
     * @param string $BandwidthPackageId Bandwidth package ID. If this parameter is specified, the network billing mode (`InternetAccessible.InternetChargeType`) will only support bill-by-bandwidth package (`BANDWIDTH_PACKAGE`).
     * @param ExclusiveCluster $ExclusiveCluster Dedicated cluster information
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     * @param boolean $SnatPro Whether Binding IPs of other VPCs feature switch
     * @param array $SnatIps Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
     * @param string $ClusterTag Tag for the STGW exclusive cluster.
     * @param string $SlaveZoneId Sets the secondary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`, which is applicable only to public network CLB instances.
Note: A secondary AZ will load traffic if the primary AZ has failures. The API `DescribeMasterZones` is used to query the primary and secondary AZ list of a region.
     * @param string $EipAddressId Unique ID of an EIP, which can only be used when binding the EIP of a private network CLB instance. E.g., `eip-11112222`.
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
        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("ExclusiveCluster",$param) and $param["ExclusiveCluster"] !== null) {
            $this->ExclusiveCluster = new ExclusiveCluster();
            $this->ExclusiveCluster->deserialize($param["ExclusiveCluster"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("SnatPro",$param) and $param["SnatPro"] !== null) {
            $this->SnatPro = $param["SnatPro"];
        }

        if (array_key_exists("SnatIps",$param) and $param["SnatIps"] !== null) {
            $this->SnatIps = [];
            foreach ($param["SnatIps"] as $key => $value){
                $obj = new SnatIp();
                $obj->deserialize($value);
                array_push($this->SnatIps, $obj);
            }
        }

        if (array_key_exists("ClusterTag",$param) and $param["ClusterTag"] !== null) {
            $this->ClusterTag = $param["ClusterTag"];
        }

        if (array_key_exists("SlaveZoneId",$param) and $param["SlaveZoneId"] !== null) {
            $this->SlaveZoneId = $param["SlaveZoneId"];
        }

        if (array_key_exists("EipAddressId",$param) and $param["EipAddressId"] !== null) {
            $this->EipAddressId = $param["EipAddressId"];
        }
    }
}
