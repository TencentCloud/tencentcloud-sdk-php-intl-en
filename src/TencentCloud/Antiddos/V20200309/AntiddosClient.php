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

namespace TencentCloud\Antiddos\V20200309;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Antiddos\V20200309\Models as Models;

/**
 * @method Models\AssociateDDoSEipAddressResponse AssociateDDoSEipAddress(Models\AssociateDDoSEipAddressRequest $req) This API is used to bind an EIP to an Anti-DDoS Advanced instance or a specified private IP of an ENI.
 * @method Models\AssociateDDoSEipLoadBalancerResponse AssociateDDoSEipLoadBalancer(Models\AssociateDDoSEipLoadBalancerRequest $req) This API is used to bind an Anti-DDoS EIP to the specified private IP of a CLB instance.
 * @method Models\CreateBlackWhiteIpListResponse CreateBlackWhiteIpList(Models\CreateBlackWhiteIpListRequest $req) This API is used to add an Anti-DDoS IP blocklist/allowlist.
 * @method Models\CreateBoundIPResponse CreateBoundIP(Models\CreateBoundIPRequest $req) This API is used to bind an IP to an Anti-DDoS Pro instance Both single IP instances and multi-IP instances are available. Note that you should wait until the current binding or unbinding completes before using this async API for new operations.
 * @method Models\CreateCCPrecisionPolicyResponse CreateCCPrecisionPolicy(Models\CreateCCPrecisionPolicyRequest $req) This API is used to create a CC precise protection policy.
 * @method Models\CreateCCReqLimitPolicyResponse CreateCCReqLimitPolicy(Models\CreateCCReqLimitPolicyRequest $req) This API is used to create a CC frequency limit policy.
 * @method Models\CreateCcBlackWhiteIpListResponse CreateCcBlackWhiteIpList(Models\CreateCcBlackWhiteIpListRequest $req) This API is used to create a layer 4 access control list to prevent CC attacks.
 * @method Models\CreateCcGeoIPBlockConfigResponse CreateCcGeoIPBlockConfig(Models\CreateCcGeoIPBlockConfigRequest $req) This API is used to create a regional blocking configuration.
 * @method Models\CreateDDoSAIResponse CreateDDoSAI(Models\CreateDDoSAIRequest $req) This API is used to set Anti-DDoS AI protection switches.
 * @method Models\CreateDDoSGeoIPBlockConfigResponse CreateDDoSGeoIPBlockConfig(Models\CreateDDoSGeoIPBlockConfigRequest $req) This API is used to add an Anti-DDoS region blocking configuration.
 * @method Models\CreateDDoSSpeedLimitConfigResponse CreateDDoSSpeedLimitConfig(Models\CreateDDoSSpeedLimitConfigRequest $req) This API is used to add Anti-DDoS access rate limit configurations.
 * @method Models\CreateDefaultAlarmThresholdResponse CreateDefaultAlarmThreshold(Models\CreateDefaultAlarmThresholdRequest $req) This API is used to set the default alarm threshold of an IP.
 * @method Models\CreateIPAlarmThresholdConfigResponse CreateIPAlarmThresholdConfig(Models\CreateIPAlarmThresholdConfigRequest $req) This API is used to set the default alarm threshold of an IP.
 * @method Models\CreateL7RuleCertsResponse CreateL7RuleCerts(Models\CreateL7RuleCertsRequest $req) This API is used to configure certificates with layer-7 forwarding rules in a batch for SSL testing.
 * @method Models\CreateNewL7RulesResponse CreateNewL7Rules(Models\CreateNewL7RulesRequest $req) This API is used to add layer-7 forwarding rules.
 * @method Models\CreatePacketFilterConfigResponse CreatePacketFilterConfig(Models\CreatePacketFilterConfigRequest $req) This API is used to add Anti-DDoS feature filtering rules.
 * @method Models\CreateProtocolBlockConfigResponse CreateProtocolBlockConfig(Models\CreateProtocolBlockConfigRequest $req) This API is used to set Anti-DDoS protocol blocking configurations.
 * @method Models\CreateSchedulingDomainResponse CreateSchedulingDomain(Models\CreateSchedulingDomainRequest $req) This API is used to create a domain name for IP scheduling and switching.
 * @method Models\CreateWaterPrintConfigResponse CreateWaterPrintConfig(Models\CreateWaterPrintConfigRequest $req) This API is used to add Anti-DDoS watermark configurations.
 * @method Models\CreateWaterPrintKeyResponse CreateWaterPrintKey(Models\CreateWaterPrintKeyRequest $req) This API is used to add Anti-DDoS watermark keys.
 * @method Models\DeleteCCLevelPolicyResponse DeleteCCLevelPolicy(Models\DeleteCCLevelPolicyRequest $req) This API is used to delete a level-defining policy of CC attacks. 
 * @method Models\DeleteCCPrecisionPolicyResponse DeleteCCPrecisionPolicy(Models\DeleteCCPrecisionPolicyRequest $req) This API is used to delete a CC precise protection policy.
 * @method Models\DeleteCCThresholdPolicyResponse DeleteCCThresholdPolicy(Models\DeleteCCThresholdPolicyRequest $req) This API is used to delete a CC cleansing threshold policy.
 * @method Models\DeleteCcBlackWhiteIpListResponse DeleteCcBlackWhiteIpList(Models\DeleteCcBlackWhiteIpListRequest $req) This API is used to delete a layer-4 access control list.
 * @method Models\DeleteCcGeoIPBlockConfigResponse DeleteCcGeoIPBlockConfig(Models\DeleteCcGeoIPBlockConfigRequest $req) This API is used to delete a regional blocking configuration.
 * @method Models\DeleteDDoSGeoIPBlockConfigResponse DeleteDDoSGeoIPBlockConfig(Models\DeleteDDoSGeoIPBlockConfigRequest $req) This API is used to delete Anti-DDoS region blocking configurations.
 * @method Models\DeleteDDoSSpeedLimitConfigResponse DeleteDDoSSpeedLimitConfig(Models\DeleteDDoSSpeedLimitConfigRequest $req) This API is used to delete Anti-DDoS access rate limit configurations.
 * @method Models\DeletePacketFilterConfigResponse DeletePacketFilterConfig(Models\DeletePacketFilterConfigRequest $req) This API is used to delete Anti-DDoS feature filtering rules.
 * @method Models\DeleteWaterPrintConfigResponse DeleteWaterPrintConfig(Models\DeleteWaterPrintConfigRequest $req) This API is used to delete Anti-DDoS watermark configurations.
 * @method Models\DeleteWaterPrintKeyResponse DeleteWaterPrintKey(Models\DeleteWaterPrintKeyRequest $req) This API is used to delete Anti-DDoS watermark keys.
 * @method Models\DescribeBasicDeviceStatusResponse DescribeBasicDeviceStatus(Models\DescribeBasicDeviceStatusRequest $req) This API is used to querying the status of Anti-DDoS IP.
 * @method Models\DescribeBgpBizTrendResponse DescribeBgpBizTrend(Models\DescribeBgpBizTrendRequest $req) This API is used to obtain Anti-DDoS Pro traffic data.
 * @method Models\DescribeBizHttpStatusResponse DescribeBizHttpStatus(Models\DescribeBizHttpStatusRequest $req) This API is used to get the statistics on the status codes of business traffic.
 * @method Models\DescribeBizTrendResponse DescribeBizTrend(Models\DescribeBizTrendRequest $req) This API is used to get the traffic flow data collected in the specified period.
 * @method Models\DescribeCCLevelListResponse DescribeCCLevelList(Models\DescribeCCLevelListRequest $req) Gets the list of CC protection levels
 * @method Models\DescribeCCLevelPolicyResponse DescribeCCLevelPolicy(Models\DescribeCCLevelPolicyRequest $req) This API is used the query a level-defining policy of CC attacks
 * @method Models\DescribeCCPrecisionPlyListResponse DescribeCCPrecisionPlyList(Models\DescribeCCPrecisionPlyListRequest $req) This API is used to obtain the list of CC precise protection policies.
 * @method Models\DescribeCCThresholdListResponse DescribeCCThresholdList(Models\DescribeCCThresholdListRequest $req) This API is used to query the list of CC cleansing thresholds.
 * @method Models\DescribeCCTrendResponse DescribeCCTrend(Models\DescribeCCTrendRequest $req) This API is used to get CC attack data, including total QPS peaks, attack QPS, total number of requests and number of attack requests.
 * @method Models\DescribeCcBlackWhiteIpListResponse DescribeCcBlackWhiteIpList(Models\DescribeCcBlackWhiteIpListRequest $req) This API is used to obtain the layer-4 access control list.
 * @method Models\DescribeCcGeoIPBlockConfigListResponse DescribeCcGeoIPBlockConfigList(Models\DescribeCcGeoIPBlockConfigListRequest $req) This API is used to obtain a list of regional blocking configurations.
 * @method Models\DescribeDDoSTrendResponse DescribeDDoSTrend(Models\DescribeDDoSTrendRequest $req) This API is used to get DDoS attack traffic bandwidth and attack packet rate.
 * @method Models\DescribeDefaultAlarmThresholdResponse DescribeDefaultAlarmThreshold(Models\DescribeDefaultAlarmThresholdRequest $req) This API is used to get the default alarm threshold of an IP.
 * @method Models\DescribeIpBlockListResponse DescribeIpBlockList(Models\DescribeIpBlockListRequest $req) 
 * @method Models\DescribeL7RulesBySSLCertIdResponse DescribeL7RulesBySSLCertId(Models\DescribeL7RulesBySSLCertIdRequest $req) This API is used to query layer-7 rules matched with certificate IDs.
 * @method Models\DescribeListBGPIPInstancesResponse DescribeListBGPIPInstances(Models\DescribeListBGPIPInstancesRequest $req) This API is used to get a list of Anti-DDoS Advanced instances.

 * @method Models\DescribeListBGPInstancesResponse DescribeListBGPInstances(Models\DescribeListBGPInstancesRequest $req) This API is used to get the list of Anti-DDoS Pro instances.
 * @method Models\DescribeListBlackWhiteIpListResponse DescribeListBlackWhiteIpList(Models\DescribeListBlackWhiteIpListRequest $req) This API is used to get a list of Anti-DDoS IP blocklists/allowlists.
 * @method Models\DescribeListDDoSAIResponse DescribeListDDoSAI(Models\DescribeListDDoSAIRequest $req) This API is used to get a list of Anti-DDoS AI protection switches.
 * @method Models\DescribeListDDoSGeoIPBlockConfigResponse DescribeListDDoSGeoIPBlockConfig(Models\DescribeListDDoSGeoIPBlockConfigRequest $req) This API is used to get a list of Anti-DDoS region blocking configurations.
 * @method Models\DescribeListDDoSSpeedLimitConfigResponse DescribeListDDoSSpeedLimitConfig(Models\DescribeListDDoSSpeedLimitConfigRequest $req) This API is used to get a list of Anti-DDoS access rate limit configurations.
 * @method Models\DescribeListIPAlarmConfigResponse DescribeListIPAlarmConfig(Models\DescribeListIPAlarmConfigRequest $req) This API is used to get a list of IP alarm threshold configurations.
 * @method Models\DescribeListListenerResponse DescribeListListener(Models\DescribeListListenerRequest $req) This API is used to get a list of forwarding listeners.
 * @method Models\DescribeListPacketFilterConfigResponse DescribeListPacketFilterConfig(Models\DescribeListPacketFilterConfigRequest $req) This API is used to get a list of Anti-DDoS feature filtering rules.
 * @method Models\DescribeListProtocolBlockConfigResponse DescribeListProtocolBlockConfig(Models\DescribeListProtocolBlockConfigRequest $req) This API is used to get a list of Anti-DDoS protocol blocking configurations.
 * @method Models\DescribeListSchedulingDomainResponse DescribeListSchedulingDomain(Models\DescribeListSchedulingDomainRequest $req) This API is used to get a list of intelligent scheduling domain names.
 * @method Models\DescribeListWaterPrintConfigResponse DescribeListWaterPrintConfig(Models\DescribeListWaterPrintConfigRequest $req) This API is used to get a list of Anti-DDoS watermark configurations.
 * @method Models\DescribeNewL7RulesResponse DescribeNewL7Rules(Models\DescribeNewL7RulesRequest $req) This API is used to obtain layer-7 forwarding rules.
 * @method Models\DescribeNewL7RulesErrHealthResponse DescribeNewL7RulesErrHealth(Models\DescribeNewL7RulesErrHealthRequest $req) This API is used to getting the exception results of the health check on layer-7 forwarding rules.
 * @method Models\DescribeOverviewDDoSEventListResponse DescribeOverviewDDoSEventList(Models\DescribeOverviewDDoSEventListRequest $req) This API is used to obtain the list of DDoS attacks.
 * @method Models\DescribePendingRiskInfoResponse DescribePendingRiskInfo(Models\DescribePendingRiskInfoRequest $req) This API is used to query the information of pending risks at the account level.
 * @method Models\DisassociateDDoSEipAddressResponse DisassociateDDoSEipAddress(Models\DisassociateDDoSEipAddressRequest $req) This API is used to unbind an Anti-DDoS EIP.
 * @method Models\ModifyCCPrecisionPolicyResponse ModifyCCPrecisionPolicy(Models\ModifyCCPrecisionPolicyRequest $req) This API is used to modify a CC precise protection policy.
 * @method Models\ModifyCcBlackWhiteIpListResponse ModifyCcBlackWhiteIpList(Models\ModifyCcBlackWhiteIpListRequest $req) This API is used to modify a layer-4 access control list.
 * @method Models\ModifyDDoSGeoIPBlockConfigResponse ModifyDDoSGeoIPBlockConfig(Models\ModifyDDoSGeoIPBlockConfigRequest $req) This API is used to modify Anti-DDoS region blocking configurations.
 * @method Models\ModifyDDoSSpeedLimitConfigResponse ModifyDDoSSpeedLimitConfig(Models\ModifyDDoSSpeedLimitConfigRequest $req) This API is used to modify Anti-DDoS access rate limit configurations.
 * @method Models\ModifyDomainUsrNameResponse ModifyDomainUsrName(Models\ModifyDomainUsrNameRequest $req) This API is used to modify intelligent scheduling domain names.
 * @method Models\ModifyNewDomainRulesResponse ModifyNewDomainRules(Models\ModifyNewDomainRulesRequest $req) This API is used to modify layer-7 forwarding rules.
 * @method Models\ModifyPacketFilterConfigResponse ModifyPacketFilterConfig(Models\ModifyPacketFilterConfigRequest $req) This API is used to modify Anti-DDoS feature filtering rules.
 * @method Models\SwitchWaterPrintConfigResponse SwitchWaterPrintConfig(Models\SwitchWaterPrintConfigRequest $req) This API is used to enable or disable Anti-DDoS watermark configurations.
 */

class AntiddosClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "antiddos.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "antiddos";

    /**
     * @var string
     */
    protected $version = "2020-03-09";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("antiddos")."\\"."V20200309\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
