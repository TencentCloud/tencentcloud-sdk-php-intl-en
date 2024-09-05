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
 * InquiryPriceCreateLoadBalancer request structure.
 *
 * @method string getLoadBalancerType() Obtain Network type of the CLB to query. `OPEN`: Public network; `INTERNAL`: Private network is intranet type
 * @method void setLoadBalancerType(string $LoadBalancerType) Set Network type of the CLB to query. `OPEN`: Public network; `INTERNAL`: Private network is intranet type
 * @method string getLoadBalancerChargeType() Obtain The billing mode to query. `POSTPAID`:Pay as you go
 * @method void setLoadBalancerChargeType(string $LoadBalancerChargeType) Set The billing mode to query. `POSTPAID`:Pay as you go
 * @method LBChargePrepaid getLoadBalancerChargePrepaid() Obtain Reserved field
 * @method void setLoadBalancerChargePrepaid(LBChargePrepaid $LoadBalancerChargePrepaid) Set Reserved field
 * @method InternetAccessible getInternetAccessible() Obtain The network billing mode to query 
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set The network billing mode to query 
 * @method integer getGoodsNum() Obtain Number of CLB instances to query. Default value: 1.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of CLB instances to query. Default value: 1.
 * @method string getZoneId() Obtain Availability zone in the format of "ap-guangzhou-1"
 * @method void setZoneId(string $ZoneId) Set Availability zone in the format of "ap-guangzhou-1"
 * @method string getSlaType() Obtain Specification of the LCU-supported instance, which is input to query the monthly subscription price. Valid values: <li>clb.c2.medium: Standard</li><li>clb.c3.small: Advanced 1</li><li>clb.c3.medium: Advanced 2</li><li>clb.c4.small: Super Large 1</li><li>clb.c4.medium: Super Large 2</li><li>clb.c4.large: Super Large 3</li><li>clb.c4.xlarge: Super Large 4</li>SLA is input to query the pay-as-you-go price.
 * @method void setSlaType(string $SlaType) Set Specification of the LCU-supported instance, which is input to query the monthly subscription price. Valid values: <li>clb.c2.medium: Standard</li><li>clb.c3.small: Advanced 1</li><li>clb.c3.medium: Advanced 2</li><li>clb.c4.small: Super Large 1</li><li>clb.c4.medium: Super Large 2</li><li>clb.c4.large: Super Large 3</li><li>clb.c4.xlarge: Super Large 4</li>SLA is input to query the pay-as-you-go price.
 * @method string getAddressIPVersion() Obtain IP version. Valid values: `IPV4` (default), `IPV6` (IPV6 NAT64 version) or `IPv6FullChain` (IPv6 version). 
 * @method void setAddressIPVersion(string $AddressIPVersion) Set IP version. Valid values: `IPV4` (default), `IPV6` (IPV6 NAT64 version) or `IPv6FullChain` (IPv6 version). 
 * @method string getVipIsp() Obtain It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
 * @method void setVipIsp(string $VipIsp) Set It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
 */
class InquiryPriceCreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string Network type of the CLB to query. `OPEN`: Public network; `INTERNAL`: Private network is intranet type
     */
    public $LoadBalancerType;

    /**
     * @var string The billing mode to query. `POSTPAID`:Pay as you go
     */
    public $LoadBalancerChargeType;

    /**
     * @var LBChargePrepaid Reserved field
     */
    public $LoadBalancerChargePrepaid;

    /**
     * @var InternetAccessible The network billing mode to query 
     */
    public $InternetAccessible;

    /**
     * @var integer Number of CLB instances to query. Default value: 1.
     */
    public $GoodsNum;

    /**
     * @var string Availability zone in the format of "ap-guangzhou-1"
     */
    public $ZoneId;

    /**
     * @var string Specification of the LCU-supported instance, which is input to query the monthly subscription price. Valid values: <li>clb.c2.medium: Standard</li><li>clb.c3.small: Advanced 1</li><li>clb.c3.medium: Advanced 2</li><li>clb.c4.small: Super Large 1</li><li>clb.c4.medium: Super Large 2</li><li>clb.c4.large: Super Large 3</li><li>clb.c4.xlarge: Super Large 4</li>SLA is input to query the pay-as-you-go price.
     */
    public $SlaType;

    /**
     * @var string IP version. Valid values: `IPV4` (default), `IPV6` (IPV6 NAT64 version) or `IPv6FullChain` (IPv6 version). 
     */
    public $AddressIPVersion;

    /**
     * @var string It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
     */
    public $VipIsp;

    /**
     * @param string $LoadBalancerType Network type of the CLB to query. `OPEN`: Public network; `INTERNAL`: Private network is intranet type
     * @param string $LoadBalancerChargeType The billing mode to query. `POSTPAID`:Pay as you go
     * @param LBChargePrepaid $LoadBalancerChargePrepaid Reserved field
     * @param InternetAccessible $InternetAccessible The network billing mode to query 
     * @param integer $GoodsNum Number of CLB instances to query. Default value: 1.
     * @param string $ZoneId Availability zone in the format of "ap-guangzhou-1"
     * @param string $SlaType Specification of the LCU-supported instance, which is input to query the monthly subscription price. Valid values: <li>clb.c2.medium: Standard</li><li>clb.c3.small: Advanced 1</li><li>clb.c3.medium: Advanced 2</li><li>clb.c4.small: Super Large 1</li><li>clb.c4.medium: Super Large 2</li><li>clb.c4.large: Super Large 3</li><li>clb.c4.xlarge: Super Large 4</li>SLA is input to query the pay-as-you-go price.
     * @param string $AddressIPVersion IP version. Valid values: `IPV4` (default), `IPV6` (IPV6 NAT64 version) or `IPv6FullChain` (IPv6 version). 
     * @param string $VipIsp It only applies to public CLB. Currently, the static single-line IP type is supported only for the regions of Guangzhou, Shanghai, Nanjing, Jinan, Hangzhou, Fuzhou, Beijing, Shijiazhuang, Wuhan, Changsha, Chengdu, and Chongqing. If you need to experience it, contact your business manager. After approval, you can select the ISP type as China Mobile (CMCC), China Unicom (CUCC), or China Telecom (CTCC). The network billing mode should be selected as billing by bandwidth package (BANDWIDTH_PACKAGE). If this parameter is not specified, BGP is used by default. You can use the DescribeResources API to query ISPs supported for a region.
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

        if (array_key_exists("LoadBalancerChargeType",$param) and $param["LoadBalancerChargeType"] !== null) {
            $this->LoadBalancerChargeType = $param["LoadBalancerChargeType"];
        }

        if (array_key_exists("LoadBalancerChargePrepaid",$param) and $param["LoadBalancerChargePrepaid"] !== null) {
            $this->LoadBalancerChargePrepaid = new LBChargePrepaid();
            $this->LoadBalancerChargePrepaid->deserialize($param["LoadBalancerChargePrepaid"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }
    }
}
