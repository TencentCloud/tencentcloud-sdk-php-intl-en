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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneLoadBalancer request structure.
 *
 * @method string getLoadBalancerId() Obtain Specifies the clb ID. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Specifies the clb ID. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
 * @method string getLoadBalancerName() Obtain Specifies the name of the cloned load balancing instance. rule: 1-60 english letters, chinese characters, digits, connecting lines "-", or underscores "_".
Note: if the name is identical to that of an existing load balancing instance in the system, the system will automatically generate a name for the created cloud load balancer instance.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set Specifies the name of the cloned load balancing instance. rule: 1-60 english letters, chinese characters, digits, connecting lines "-", or underscores "_".
Note: if the name is identical to that of an existing load balancing instance in the system, the system will automatically generate a name for the created cloud load balancer instance.
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
 * @method string getZoneId() Obtain Applicable only to public network clb. AZ ID, both availability zone ID and name are supported. specify availability zone to create a load balancing instance, for example: 100001 or ap-guangzhou-1. if not passed, queries CVM instances in all azs. if needed, call the API for the query DescribeZones (https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1) to specify availability zone.
 * @method void setZoneId(string $ZoneId) Set Applicable only to public network clb. AZ ID, both availability zone ID and name are supported. specify availability zone to create a load balancing instance, for example: 100001 or ap-guangzhou-1. if not passed, queries CVM instances in all azs. if needed, call the API for the query DescribeZones (https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1) to specify availability zone.
 * @method InternetAccessible getInternetAccessible() Obtain CLB network billing mode, applicable only to public network CLB instances.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set CLB network billing mode, applicable only to public network CLB instances.
 * @method string getVipIsp() Obtain It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
 * @method void setVipIsp(string $VipIsp) Set It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
 * @method string getVip() Obtain Specifies the Vip to apply for cloud load balancer.
 * @method void setVip(string $Vip) Set Specifies the Vip to apply for cloud load balancer.
 * @method array getTags() Obtain Proceed to purchase cloud load balancer and Tag it at the same time.
 * @method void setTags(array $Tags) Set Proceed to purchase cloud load balancer and Tag it at the same time.
 * @method ExclusiveCluster getExclusiveCluster() Obtain Exclusive cluster information.
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set Exclusive cluster information.
 * @method string getBandwidthPackageId() Obtain BANDWIDTH PACKAGE ID, which can be obtained through the [DescribeBandwidthPackages](https://www.tencentcloud.comom/document/api/215/19209?from_cn_redirect=1) api. specifies this parameter indicates the network billing mode (InternetAccessible.InternetChargeType) supports only billing by BANDWIDTH PACKAGE (BANDWIDTH_PACKAGE).
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set BANDWIDTH PACKAGE ID, which can be obtained through the [DescribeBandwidthPackages](https://www.tencentcloud.comom/document/api/215/19209?from_cn_redirect=1) api. specifies this parameter indicates the network billing mode (InternetAccessible.InternetChargeType) supports only billing by BANDWIDTH PACKAGE (BANDWIDTH_PACKAGE).
 * @method boolean getSnatPro() Obtain Specifies whether the cross-regional or cross-Vpc IP binding feature is supported.
 * @method void setSnatPro(boolean $SnatPro) Set Specifies whether the cross-regional or cross-Vpc IP binding feature is supported.
 * @method array getSnatIps() Obtain Enables cross-regional or cross-Vpc IP binding and creates a SnatIp.
 * @method void setSnatIps(array $SnatIps) Set Enables cross-regional or cross-Vpc IP binding and creates a SnatIp.
 * @method array getClusterIds() Obtain Public network exclusive cluster ID or CDCId. can be obtained through the [DescribeExclusiveClusters](https://www.tencentcloud.comom/document/product/214/49278?from_cn_redirect=1) api.
 * @method void setClusterIds(array $ClusterIds) Set Public network exclusive cluster ID or CDCId. can be obtained through the [DescribeExclusiveClusters](https://www.tencentcloud.comom/document/product/214/49278?from_cn_redirect=1) api.
 * @method string getSlaType() Obtain Performance capacity specification. <li>clb.c2.medium (standard type)</li> <li>clb.c3.small (advanced type 1)</li> <li>clb.c3.medium (advanced type 2)</li> <li>clb.c4.small (high-strength type 1)</li> <li>clb.c4.medium (high-strength type 2)</li> <li>clb.c4.large (high-strength type 3)</li> <li>clb.c4.xlarge (high-strength type 4)</li>.
 * @method void setSlaType(string $SlaType) Set Performance capacity specification. <li>clb.c2.medium (standard type)</li> <li>clb.c3.small (advanced type 1)</li> <li>clb.c3.medium (advanced type 2)</li> <li>clb.c4.small (high-strength type 1)</li> <li>clb.c4.medium (high-strength type 2)</li> <li>clb.c4.large (high-strength type 3)</li> <li>clb.c4.xlarge (high-strength type 4)</li>.
 * @method string getClusterTag() Obtain Specifies the Tag of the Stgw exclusive cluster.
 * @method void setClusterTag(string $ClusterTag) Set Specifies the Tag of the Stgw exclusive cluster.
 * @method array getZones() Obtain Applicable only to private network clb. when connected to nearby, select availability zone for deployment. you can call DescribeZones (https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1) to query the availability zone list.
 * @method void setZones(array $Zones) Set Applicable only to private network clb. when connected to nearby, select availability zone for deployment. you can call DescribeZones (https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1) to query the availability zone list.
 * @method string getEipAddressId() Obtain The unique ID of EIP, such as EIP-qhx8udkc, applicable only to private network clb binding EIP, can be queried through the DescribeAddresses API (https://www.tencentcloud.comom/document/product/215/16702?from_cn_redirect=1).
 * @method void setEipAddressId(string $EipAddressId) Set The unique ID of EIP, such as EIP-qhx8udkc, applicable only to private network clb binding EIP, can be queried through the DescribeAddresses API (https://www.tencentcloud.comom/document/product/215/16702?from_cn_redirect=1).
 */
class CloneLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string Specifies the clb ID. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
     */
    public $LoadBalancerId;

    /**
     * @var string Specifies the name of the cloned load balancing instance. rule: 1-60 english letters, chinese characters, digits, connecting lines "-", or underscores "_".
Note: if the name is identical to that of an existing load balancing instance in the system, the system will automatically generate a name for the created cloud load balancer instance.
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
     * @var string Applicable only to public network clb. AZ ID, both availability zone ID and name are supported. specify availability zone to create a load balancing instance, for example: 100001 or ap-guangzhou-1. if not passed, queries CVM instances in all azs. if needed, call the API for the query DescribeZones (https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1) to specify availability zone.
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
     * @var string Specifies the Vip to apply for cloud load balancer.
     */
    public $Vip;

    /**
     * @var array Proceed to purchase cloud load balancer and Tag it at the same time.
     */
    public $Tags;

    /**
     * @var ExclusiveCluster Exclusive cluster information.
     */
    public $ExclusiveCluster;

    /**
     * @var string BANDWIDTH PACKAGE ID, which can be obtained through the [DescribeBandwidthPackages](https://www.tencentcloud.comom/document/api/215/19209?from_cn_redirect=1) api. specifies this parameter indicates the network billing mode (InternetAccessible.InternetChargeType) supports only billing by BANDWIDTH PACKAGE (BANDWIDTH_PACKAGE).
     */
    public $BandwidthPackageId;

    /**
     * @var boolean Specifies whether the cross-regional or cross-Vpc IP binding feature is supported.
     */
    public $SnatPro;

    /**
     * @var array Enables cross-regional or cross-Vpc IP binding and creates a SnatIp.
     */
    public $SnatIps;

    /**
     * @var array Public network exclusive cluster ID or CDCId. can be obtained through the [DescribeExclusiveClusters](https://www.tencentcloud.comom/document/product/214/49278?from_cn_redirect=1) api.
     */
    public $ClusterIds;

    /**
     * @var string Performance capacity specification. <li>clb.c2.medium (standard type)</li> <li>clb.c3.small (advanced type 1)</li> <li>clb.c3.medium (advanced type 2)</li> <li>clb.c4.small (high-strength type 1)</li> <li>clb.c4.medium (high-strength type 2)</li> <li>clb.c4.large (high-strength type 3)</li> <li>clb.c4.xlarge (high-strength type 4)</li>.
     */
    public $SlaType;

    /**
     * @var string Specifies the Tag of the Stgw exclusive cluster.
     */
    public $ClusterTag;

    /**
     * @var array Applicable only to private network clb. when connected to nearby, select availability zone for deployment. you can call DescribeZones (https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1) to query the availability zone list.
     */
    public $Zones;

    /**
     * @var string The unique ID of EIP, such as EIP-qhx8udkc, applicable only to private network clb binding EIP, can be queried through the DescribeAddresses API (https://www.tencentcloud.comom/document/product/215/16702?from_cn_redirect=1).
     */
    public $EipAddressId;

    /**
     * @param string $LoadBalancerId Specifies the clb ID. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
     * @param string $LoadBalancerName Specifies the name of the cloned load balancing instance. rule: 1-60 english letters, chinese characters, digits, connecting lines "-", or underscores "_".
Note: if the name is identical to that of an existing load balancing instance in the system, the system will automatically generate a name for the created cloud load balancer instance.
     * @param integer $ProjectId ID of the project to which a CLB instance belongs, which can be obtained through the `DescribeProject` API. If this parameter is not passed in, the default project will be used.
     * @param string $MasterZoneId Sets the primary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`, which is applicable only to public network CLB.
Note: A primary AZ loads traffic, while a secondary AZ does not load traffic by default and will be used only if the primary AZ becomes unavailable. The platform will automatically select the optimal secondary AZ. You can use the `DescribeResource` API to query the primary AZ list of a region.
     * @param string $SlaveZoneId Specifies the secondary AZ ID for cross-AZ disaster recovery, such as `100001` or `ap-guangzhou-1`. It is applicable only to public network CLB.
Note: A secondary AZ will load traffic if the primary AZ is faulty. You can use the `DescribeMasterZones` API to query the primary and secondary AZ list of a region.
     * @param string $ZoneId Applicable only to public network clb. AZ ID, both availability zone ID and name are supported. specify availability zone to create a load balancing instance, for example: 100001 or ap-guangzhou-1. if not passed, queries CVM instances in all azs. if needed, call the API for the query DescribeZones (https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1) to specify availability zone.
     * @param InternetAccessible $InternetAccessible CLB network billing mode, applicable only to public network CLB instances.
     * @param string $VipIsp It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
     * @param string $Vip Specifies the Vip to apply for cloud load balancer.
     * @param array $Tags Proceed to purchase cloud load balancer and Tag it at the same time.
     * @param ExclusiveCluster $ExclusiveCluster Exclusive cluster information.
     * @param string $BandwidthPackageId BANDWIDTH PACKAGE ID, which can be obtained through the [DescribeBandwidthPackages](https://www.tencentcloud.comom/document/api/215/19209?from_cn_redirect=1) api. specifies this parameter indicates the network billing mode (InternetAccessible.InternetChargeType) supports only billing by BANDWIDTH PACKAGE (BANDWIDTH_PACKAGE).
     * @param boolean $SnatPro Specifies whether the cross-regional or cross-Vpc IP binding feature is supported.
     * @param array $SnatIps Enables cross-regional or cross-Vpc IP binding and creates a SnatIp.
     * @param array $ClusterIds Public network exclusive cluster ID or CDCId. can be obtained through the [DescribeExclusiveClusters](https://www.tencentcloud.comom/document/product/214/49278?from_cn_redirect=1) api.
     * @param string $SlaType Performance capacity specification. <li>clb.c2.medium (standard type)</li> <li>clb.c3.small (advanced type 1)</li> <li>clb.c3.medium (advanced type 2)</li> <li>clb.c4.small (high-strength type 1)</li> <li>clb.c4.medium (high-strength type 2)</li> <li>clb.c4.large (high-strength type 3)</li> <li>clb.c4.xlarge (high-strength type 4)</li>.
     * @param string $ClusterTag Specifies the Tag of the Stgw exclusive cluster.
     * @param array $Zones Applicable only to private network clb. when connected to nearby, select availability zone for deployment. you can call DescribeZones (https://www.tencentcloud.comom/document/product/213/15707?from_cn_redirect=1) to query the availability zone list.
     * @param string $EipAddressId The unique ID of EIP, such as EIP-qhx8udkc, applicable only to private network clb binding EIP, can be queried through the DescribeAddresses API (https://www.tencentcloud.comom/document/product/215/16702?from_cn_redirect=1).
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
