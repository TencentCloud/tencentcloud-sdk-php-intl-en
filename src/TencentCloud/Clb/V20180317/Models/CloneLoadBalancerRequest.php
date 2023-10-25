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
 * CloneLoadBalancer request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getLoadBalancerName() Obtain Clones the name of the CLB instance. The name must be 1-60 characters containing letters, numbers, "-" or "_".
Note: if the name of a new CLB instance already exists, a default name will be generated automatically.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set Clones the name of the CLB instance. The name must be 1-60 characters containing letters, numbers, "-" or "_".
Note: if the name of a new CLB instance already exists, a default name will be generated automatically.
 * @method integer getProjectId() Obtain ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not passed in, the default project will be used.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not passed in, the default project will be used.
 * @method string getMasterZoneId() Obtain Sets the primary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`, which is applicable only to public network CLB.
Note: A primary AZ loads traffic, while a secondary AZ does not load traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. You can use the `DescribeResource` API to query the primary AZ list of a region.
 * @method void setMasterZoneId(string $MasterZoneId) Set Sets the primary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`, which is applicable only to public network CLB.
Note: A primary AZ loads traffic, while a secondary AZ does not load traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. You can use the `DescribeResource` API to query the primary AZ list of a region.
 * @method string getSlaveZoneId() Obtain Specifies the secondary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`. It is applicable only to public network CLB.
Note: A secondary AZ will load traffic if the primary AZ is faulty. You can use the `DescribeMasterZones` API to query the primary and secondary AZ list of a region.
 * @method void setSlaveZoneId(string $SlaveZoneId) Set Specifies the secondary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`. It is applicable only to public network CLB.
Note: A secondary AZ will load traffic if the primary AZ is faulty. You can use the `DescribeMasterZones` API to query the primary and secondary AZ list of a region.
 * @method string getZoneId() Obtain Specifies an AZ ID for creating a CLB instance, such as `ap-guangzhou-1`, which is applicable only to public network CLB instances.
 * @method void setZoneId(string $ZoneId) Set Specifies an AZ ID for creating a CLB instance, such as `ap-guangzhou-1`, which is applicable only to public network CLB instances.
 * @method InternetAccessible getInternetAccessible() Obtain CLB network billing mode. This parameter is applicable only to public network CLB instances.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set CLB network billing mode. This parameter is applicable only to public network CLB instances.
 * @method string getVipIsp() Obtain ISP of VIP. Values: `CMCC` (China Mobile), `CUCC` (China Unicom) and `CTCC` (China Telecom). You need to activate static single-line IPs. This feature is in beta and is only available in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu and Chongqing regions. To try it out, please contact your sales rep. If it's specified, the network billing mode must be `BANDWIDTH_PACKAGE`. If it's not specified, BGP is used by default. To query ISPs supported in a region, please use [DescribeResources](https://intl.cloud.tencent.com/document/api/214/70213?from_cn_redirect=1). 
 * @method void setVipIsp(string $VipIsp) Set ISP of VIP. Values: `CMCC` (China Mobile), `CUCC` (China Unicom) and `CTCC` (China Telecom). You need to activate static single-line IPs. This feature is in beta and is only available in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu and Chongqing regions. To try it out, please contact your sales rep. If it's specified, the network billing mode must be `BANDWIDTH_PACKAGE`. If it's not specified, BGP is used by default. To query ISPs supported in a region, please use [DescribeResources](https://intl.cloud.tencent.com/document/api/214/70213?from_cn_redirect=1). 
 * @method string getVip() Obtain Applies for CLB instances for a specified VIP
 * @method void setVip(string $Vip) Set Applies for CLB instances for a specified VIP
 * @method array getTags() Obtain Tags a CLB instance when purchasing it
 * @method void setTags(array $Tags) Set Tags a CLB instance when purchasing it
 * @method ExclusiveCluster getExclusiveCluster() Obtain Dedicated cluster information
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set Dedicated cluster information
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID. If this parameter is specified, the network billing mode (`InternetAccessible.InternetChargeType`) will only support bill-by-bandwidth package (`BANDWIDTH_PACKAGE`).
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID. If this parameter is specified, the network billing mode (`InternetAccessible.InternetChargeType`) will only support bill-by-bandwidth package (`BANDWIDTH_PACKAGE`).
 * @method boolean getSnatPro() Obtain Whether to support binding cross-VPC IPs or cross-region IPs
 * @method void setSnatPro(boolean $SnatPro) Set Whether to support binding cross-VPC IPs or cross-region IPs
 * @method array getSnatIps() Obtain Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
 * @method void setSnatIps(array $SnatIps) Set Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
 * @method array getClusterIds() Obtain ID of the public network CLB dedicated cluster
 * @method void setClusterIds(array $ClusterIds) Set ID of the public network CLB dedicated cluster
 * @method string getSlaType() Obtain Specification of the LCU-supported instance.
 * @method void setSlaType(string $SlaType) Set Specification of the LCU-supported instance.
 * @method string getClusterTag() Obtain Tag of the STGW dedicated cluster
 * @method void setClusterTag(string $ClusterTag) Set Tag of the STGW dedicated cluster
 * @method array getZones() Obtain Availability zones for nearby access of private network CLB instances to distribute traffic
 * @method void setZones(array $Zones) Set Availability zones for nearby access of private network CLB instances to distribute traffic
 * @method string getEipAddressId() Obtain Unique ID of an EIP, which can only be used when binding the EIP of a private network CLB instance (e.g., `eip-11112222`)
 * @method void setEipAddressId(string $EipAddressId) Set Unique ID of an EIP, which can only be used when binding the EIP of a private network CLB instance (e.g., `eip-11112222`)
 */
class CloneLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string Clones the name of the CLB instance. The name must be 1-60 characters containing letters, numbers, "-" or "_".
Note: if the name of a new CLB instance already exists, a default name will be generated automatically.
     */
    public $LoadBalancerName;

    /**
     * @var integer ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not passed in, the default project will be used.
     */
    public $ProjectId;

    /**
     * @var string Sets the primary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`, which is applicable only to public network CLB.
Note: A primary AZ loads traffic, while a secondary AZ does not load traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. You can use the `DescribeResource` API to query the primary AZ list of a region.
     */
    public $MasterZoneId;

    /**
     * @var string Specifies the secondary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`. It is applicable only to public network CLB.
Note: A secondary AZ will load traffic if the primary AZ is faulty. You can use the `DescribeMasterZones` API to query the primary and secondary AZ list of a region.
     */
    public $SlaveZoneId;

    /**
     * @var string Specifies an AZ ID for creating a CLB instance, such as `ap-guangzhou-1`, which is applicable only to public network CLB instances.
     */
    public $ZoneId;

    /**
     * @var InternetAccessible CLB network billing mode. This parameter is applicable only to public network CLB instances.
     */
    public $InternetAccessible;

    /**
     * @var string ISP of VIP. Values: `CMCC` (China Mobile), `CUCC` (China Unicom) and `CTCC` (China Telecom). You need to activate static single-line IPs. This feature is in beta and is only available in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu and Chongqing regions. To try it out, please contact your sales rep. If it's specified, the network billing mode must be `BANDWIDTH_PACKAGE`. If it's not specified, BGP is used by default. To query ISPs supported in a region, please use [DescribeResources](https://intl.cloud.tencent.com/document/api/214/70213?from_cn_redirect=1). 
     */
    public $VipIsp;

    /**
     * @var string Applies for CLB instances for a specified VIP
     */
    public $Vip;

    /**
     * @var array Tags a CLB instance when purchasing it
     */
    public $Tags;

    /**
     * @var ExclusiveCluster Dedicated cluster information
     */
    public $ExclusiveCluster;

    /**
     * @var string Bandwidth package ID. If this parameter is specified, the network billing mode (`InternetAccessible.InternetChargeType`) will only support bill-by-bandwidth package (`BANDWIDTH_PACKAGE`).
     */
    public $BandwidthPackageId;

    /**
     * @var boolean Whether to support binding cross-VPC IPs or cross-region IPs
     */
    public $SnatPro;

    /**
     * @var array Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
     */
    public $SnatIps;

    /**
     * @var array ID of the public network CLB dedicated cluster
     */
    public $ClusterIds;

    /**
     * @var string Specification of the LCU-supported instance.
     */
    public $SlaType;

    /**
     * @var string Tag of the STGW dedicated cluster
     */
    public $ClusterTag;

    /**
     * @var array Availability zones for nearby access of private network CLB instances to distribute traffic
     */
    public $Zones;

    /**
     * @var string Unique ID of an EIP, which can only be used when binding the EIP of a private network CLB instance (e.g., `eip-11112222`)
     */
    public $EipAddressId;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $LoadBalancerName Clones the name of the CLB instance. The name must be 1-60 characters containing letters, numbers, "-" or "_".
Note: if the name of a new CLB instance already exists, a default name will be generated automatically.
     * @param integer $ProjectId ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not passed in, the default project will be used.
     * @param string $MasterZoneId Sets the primary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`, which is applicable only to public network CLB.
Note: A primary AZ loads traffic, while a secondary AZ does not load traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. You can use the `DescribeResource` API to query the primary AZ list of a region.
     * @param string $SlaveZoneId Specifies the secondary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`. It is applicable only to public network CLB.
Note: A secondary AZ will load traffic if the primary AZ is faulty. You can use the `DescribeMasterZones` API to query the primary and secondary AZ list of a region.
     * @param string $ZoneId Specifies an AZ ID for creating a CLB instance, such as `ap-guangzhou-1`, which is applicable only to public network CLB instances.
     * @param InternetAccessible $InternetAccessible CLB network billing mode. This parameter is applicable only to public network CLB instances.
     * @param string $VipIsp ISP of VIP. Values: `CMCC` (China Mobile), `CUCC` (China Unicom) and `CTCC` (China Telecom). You need to activate static single-line IPs. This feature is in beta and is only available in Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu and Chongqing regions. To try it out, please contact your sales rep. If it's specified, the network billing mode must be `BANDWIDTH_PACKAGE`. If it's not specified, BGP is used by default. To query ISPs supported in a region, please use [DescribeResources](https://intl.cloud.tencent.com/document/api/214/70213?from_cn_redirect=1). 
     * @param string $Vip Applies for CLB instances for a specified VIP
     * @param array $Tags Tags a CLB instance when purchasing it
     * @param ExclusiveCluster $ExclusiveCluster Dedicated cluster information
     * @param string $BandwidthPackageId Bandwidth package ID. If this parameter is specified, the network billing mode (`InternetAccessible.InternetChargeType`) will only support bill-by-bandwidth package (`BANDWIDTH_PACKAGE`).
     * @param boolean $SnatPro Whether to support binding cross-VPC IPs or cross-region IPs
     * @param array $SnatIps Creates `SnatIp` when the binding IPs of other VPCs feature is enabled
     * @param array $ClusterIds ID of the public network CLB dedicated cluster
     * @param string $SlaType Specification of the LCU-supported instance.
     * @param string $ClusterTag Tag of the STGW dedicated cluster
     * @param array $Zones Availability zones for nearby access of private network CLB instances to distribute traffic
     * @param string $EipAddressId Unique ID of an EIP, which can only be used when binding the EIP of a private network CLB instance (e.g., `eip-11112222`)
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("SlaveZoneId",$param) and $param["SlaveZoneId"] !== null) {
            $this->SlaveZoneId = $param["SlaveZoneId"];
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ExclusiveCluster",$param) and $param["ExclusiveCluster"] !== null) {
            $this->ExclusiveCluster = new ExclusiveCluster();
            $this->ExclusiveCluster->deserialize($param["ExclusiveCluster"]);
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
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

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("ClusterTag",$param) and $param["ClusterTag"] !== null) {
            $this->ClusterTag = $param["ClusterTag"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("EipAddressId",$param) and $param["EipAddressId"] !== null) {
            $this->EipAddressId = $param["EipAddressId"];
        }
    }
}
