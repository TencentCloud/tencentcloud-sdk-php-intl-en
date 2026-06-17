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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneLoadBalancer request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB ID.
 * @method string getLoadBalancerName() Obtain The name of the cloned CLB instance. Rule: 1-60 English letters, Chinese characters, digits, hyphens "-", or underscores "_".
Note: If the name is the same as an existing Cloud Load Balancer instance in the system, the system will automatically generate the name of the created CLB instance.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set The name of the cloned CLB instance. Rule: 1-60 English letters, Chinese characters, digits, hyphens "-", or underscores "_".
Note: If the name is the same as an existing Cloud Load Balancer instance in the system, the system will automatically generate the name of the created CLB instance.
 * @method integer getProjectId() Obtain The project ID associated with the Cloud Load Balancer instance can be obtained through the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API. If this parameter is not specified, it will be used as the default project.
 * @method void setProjectId(integer $ProjectId) Set The project ID associated with the Cloud Load Balancer instance can be obtained through the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API. If this parameter is not specified, it will be used as the default project.
 * @method string getMasterZoneId() Obtain Applicable only to public network CLB. Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.
Note: The primary AZ loads traffic, while the secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. You can call the [DescribeResources](https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1) API to query the primary AZ list of a region.
 * @method void setMasterZoneId(string $MasterZoneId) Set Applicable only to public network CLB. Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.
Note: The primary AZ loads traffic, while the secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. You can call the [DescribeResources](https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1) API to query the primary AZ list of a region.
 * @method string getSlaveZoneId() Obtain Applicable only to public network CLB. Sets the secondary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.
Note: The secondary AZ sustains traffic when the primary AZ encounters faults. You can call the [DescribeResources](https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1) API to query the list of primary/secondary AZs in a region.
 * @method void setSlaveZoneId(string $SlaveZoneId) Set Applicable only to public network CLB. Sets the secondary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.
Note: The secondary AZ sustains traffic when the primary AZ encounters faults. You can call the [DescribeResources](https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1) API to query the list of primary/secondary AZs in a region.
 * @method string getZoneId() Obtain Applicable only to public network CLB. Availability zone ID. Specify an availability zone to create a Cloud Load Balancer instance, for example, ap-guangzhou-1. If not specified, queries CVM instances in all AZs. If needed, call the DescribeZones API (https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1) to query the availability zone list.
 * @method void setZoneId(string $ZoneId) Set Applicable only to public network CLB. Availability zone ID. Specify an availability zone to create a Cloud Load Balancer instance, for example, ap-guangzhou-1. If not specified, queries CVM instances in all AZs. If needed, call the DescribeZones API (https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1) to query the availability zone list.
 * @method InternetAccessible getInternetAccessible() Obtain CLB network billing mode, applicable only to public network CLB instances.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set CLB network billing mode, applicable only to public network CLB instances.
 * @method string getVipIsp() Obtain It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
 * @method void setVipIsp(string $VipIsp) Set It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
 * @method string getVip() Obtain Designate a Vip to apply for Cloud Load Balancer.
 * @method void setVip(string $Vip) Set Designate a Vip to apply for Cloud Load Balancer.
 * @method array getTags() Obtain When you purchase Cloud Load Balancer (CLB), you can tag it.
 * @method void setTags(array $Tags) Set When you purchase Cloud Load Balancer (CLB), you can tag it.
 * @method ExclusiveCluster getExclusiveCluster() Obtain Exclusive cluster information.
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set Exclusive cluster information.
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID. If this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by bandwidth package (BANDWIDTH_PACKAGE).
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID. If this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by bandwidth package (BANDWIDTH_PACKAGE).
 * @method boolean getSnatPro() Obtain Whether to support the feature of binding IP addresses across regions/VPCs.
 * @method void setSnatPro(boolean $SnatPro) Set Whether to support the feature of binding IP addresses across regions/VPCs.
 * @method array getSnatIps() Obtain SNAT IP addresses to be created when the feature of cross-region/cross-VPC IP address binding is enabled.
 * @method void setSnatIps(array $SnatIps) Set SNAT IP addresses to be created when the feature of cross-region/cross-VPC IP address binding is enabled.
 * @method array getClusterIds() Obtain Public network exclusive cluster ID or CDCId.
 * @method void setClusterIds(array $ClusterIds) Set Public network exclusive cluster ID or CDCId.
 * @method string getSlaType() Obtain Performance capacity specification.<li>clb.c2.medium (standard type)</li><li>clb.c3.small (advanced type 1)</li><li>clb.c3.medium (advanced type 2)</li><li>clb.c4.small (high-strength type 1)</li><li>clb.c4.medium (high-strength type 2)</li><li>clb.c4.large (high-strength type 3)</li><li>clb.c4.xlarge (high-strength type 4)</li>
 * @method void setSlaType(string $SlaType) Set Performance capacity specification.<li>clb.c2.medium (standard type)</li><li>clb.c3.small (advanced type 1)</li><li>clb.c3.medium (advanced type 2)</li><li>clb.c4.small (high-strength type 1)</li><li>clb.c4.medium (high-strength type 2)</li><li>clb.c4.large (high-strength type 3)</li><li>clb.c4.xlarge (high-strength type 4)</li>
 * @method string getClusterTag() Obtain Exclusive STGW cluster tag.
 * @method void setClusterTag(string $ClusterTag) Set Exclusive STGW cluster tag.
 * @method array getZones() Obtain Applicable only to private network CLB. When connected to nearby via private network, select availability zone for deployment. You can call the [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1) API to query the availability zone list.
 * @method void setZones(array $Zones) Set Applicable only to private network CLB. When connected to nearby via private network, select availability zone for deployment. You can call the [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1) API to query the availability zone list.
 * @method string getEipAddressId() Obtain Unique ID of an EIP, in the format of eip-11112222, which is applicable only for binding EIP to private network CLB.
 * @method void setEipAddressId(string $EipAddressId) Set Unique ID of an EIP, in the format of eip-11112222, which is applicable only for binding EIP to private network CLB.
 */
class CloneLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string CLB ID.
     */
    public $LoadBalancerId;

    /**
     * @var string The name of the cloned CLB instance. Rule: 1-60 English letters, Chinese characters, digits, hyphens "-", or underscores "_".
Note: If the name is the same as an existing Cloud Load Balancer instance in the system, the system will automatically generate the name of the created CLB instance.
     */
    public $LoadBalancerName;

    /**
     * @var integer The project ID associated with the Cloud Load Balancer instance can be obtained through the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API. If this parameter is not specified, it will be used as the default project.
     */
    public $ProjectId;

    /**
     * @var string Applicable only to public network CLB. Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.
Note: The primary AZ loads traffic, while the secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. You can call the [DescribeResources](https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1) API to query the primary AZ list of a region.
     */
    public $MasterZoneId;

    /**
     * @var string Applicable only to public network CLB. Sets the secondary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.
Note: The secondary AZ sustains traffic when the primary AZ encounters faults. You can call the [DescribeResources](https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1) API to query the list of primary/secondary AZs in a region.
     */
    public $SlaveZoneId;

    /**
     * @var string Applicable only to public network CLB. Availability zone ID. Specify an availability zone to create a Cloud Load Balancer instance, for example, ap-guangzhou-1. If not specified, queries CVM instances in all AZs. If needed, call the DescribeZones API (https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1) to query the availability zone list.
     */
    public $ZoneId;

    /**
     * @var InternetAccessible CLB network billing mode, applicable only to public network CLB instances.
     */
    public $InternetAccessible;

    /**
     * @var string It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
     */
    public $VipIsp;

    /**
     * @var string Designate a Vip to apply for Cloud Load Balancer.
     */
    public $Vip;

    /**
     * @var array When you purchase Cloud Load Balancer (CLB), you can tag it.
     */
    public $Tags;

    /**
     * @var ExclusiveCluster Exclusive cluster information.
     */
    public $ExclusiveCluster;

    /**
     * @var string Bandwidth package ID. If this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by bandwidth package (BANDWIDTH_PACKAGE).
     */
    public $BandwidthPackageId;

    /**
     * @var boolean Whether to support the feature of binding IP addresses across regions/VPCs.
     */
    public $SnatPro;

    /**
     * @var array SNAT IP addresses to be created when the feature of cross-region/cross-VPC IP address binding is enabled.
     */
    public $SnatIps;

    /**
     * @var array Public network exclusive cluster ID or CDCId.
     */
    public $ClusterIds;

    /**
     * @var string Performance capacity specification.<li>clb.c2.medium (standard type)</li><li>clb.c3.small (advanced type 1)</li><li>clb.c3.medium (advanced type 2)</li><li>clb.c4.small (high-strength type 1)</li><li>clb.c4.medium (high-strength type 2)</li><li>clb.c4.large (high-strength type 3)</li><li>clb.c4.xlarge (high-strength type 4)</li>
     */
    public $SlaType;

    /**
     * @var string Exclusive STGW cluster tag.
     */
    public $ClusterTag;

    /**
     * @var array Applicable only to private network CLB. When connected to nearby via private network, select availability zone for deployment. You can call the [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1) API to query the availability zone list.
     */
    public $Zones;

    /**
     * @var string Unique ID of an EIP, in the format of eip-11112222, which is applicable only for binding EIP to private network CLB.
     */
    public $EipAddressId;

    /**
     * @param string $LoadBalancerId CLB ID.
     * @param string $LoadBalancerName The name of the cloned CLB instance. Rule: 1-60 English letters, Chinese characters, digits, hyphens "-", or underscores "_".
Note: If the name is the same as an existing Cloud Load Balancer instance in the system, the system will automatically generate the name of the created CLB instance.
     * @param integer $ProjectId The project ID associated with the Cloud Load Balancer instance can be obtained through the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API. If this parameter is not specified, it will be used as the default project.
     * @param string $MasterZoneId Applicable only to public network CLB. Sets the primary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.
Note: The primary AZ loads traffic, while the secondary AZ does not load traffic by default and is used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. You can call the [DescribeResources](https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1) API to query the primary AZ list of a region.
     * @param string $SlaveZoneId Applicable only to public network CLB. Sets the secondary AZ ID for cross-AZ disaster recovery, such as 100001 or ap-guangzhou-1.
Note: The secondary AZ sustains traffic when the primary AZ encounters faults. You can call the [DescribeResources](https://www.tencentcloud.com/document/api/214/70213?from_cn_redirect=1) API to query the list of primary/secondary AZs in a region.
     * @param string $ZoneId Applicable only to public network CLB. Availability zone ID. Specify an availability zone to create a Cloud Load Balancer instance, for example, ap-guangzhou-1. If not specified, queries CVM instances in all AZs. If needed, call the DescribeZones API (https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1) to query the availability zone list.
     * @param InternetAccessible $InternetAccessible CLB network billing mode, applicable only to public network CLB instances.
     * @param string $VipIsp It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
     * @param string $Vip Designate a Vip to apply for Cloud Load Balancer.
     * @param array $Tags When you purchase Cloud Load Balancer (CLB), you can tag it.
     * @param ExclusiveCluster $ExclusiveCluster Exclusive cluster information.
     * @param string $BandwidthPackageId Bandwidth package ID. If this parameter is specified, the network billing mode (InternetAccessible.InternetChargeType) supports only billing by bandwidth package (BANDWIDTH_PACKAGE).
     * @param boolean $SnatPro Whether to support the feature of binding IP addresses across regions/VPCs.
     * @param array $SnatIps SNAT IP addresses to be created when the feature of cross-region/cross-VPC IP address binding is enabled.
     * @param array $ClusterIds Public network exclusive cluster ID or CDCId.
     * @param string $SlaType Performance capacity specification.<li>clb.c2.medium (standard type)</li><li>clb.c3.small (advanced type 1)</li><li>clb.c3.medium (advanced type 2)</li><li>clb.c4.small (high-strength type 1)</li><li>clb.c4.medium (high-strength type 2)</li><li>clb.c4.large (high-strength type 3)</li><li>clb.c4.xlarge (high-strength type 4)</li>
     * @param string $ClusterTag Exclusive STGW cluster tag.
     * @param array $Zones Applicable only to private network CLB. When connected to nearby via private network, select availability zone for deployment. You can call the [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1) API to query the availability zone list.
     * @param string $EipAddressId Unique ID of an EIP, in the format of eip-11112222, which is applicable only for binding EIP to private network CLB.
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
