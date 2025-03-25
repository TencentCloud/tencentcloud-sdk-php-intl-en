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

namespace TencentCloud\Dayu\V20180709;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dayu\V20180709\Models as Models;

/**
 * @method Models\CreateBasicDDoSAlarmThresholdResponse CreateBasicDDoSAlarmThreshold(Models\CreateBasicDDoSAlarmThresholdRequest $req) This API is used to set the DDoS alarm threshold for Anti-DDoS Basic, which is only supported for Anti-DDoS Basic.
 * @method Models\CreateBoundIPResponse CreateBoundIP(Models\CreateBoundIPRequest $req) This API is used to bind an IP to an Anti-DDoS Pro instance, which supports both single IP instances and multi-IP instances. It should be noted that this API is async; therefore, if a binding/unbinding operation is in progress, new binding/unbinding operations cannot be initiated.
 * @method Models\CreateCCFrequencyRulesResponse CreateCCFrequencyRules(Models\CreateCCFrequencyRulesRequest $req) This API is used to add an access frequency control rule for CC protection.
 * @method Models\CreateCCSelfDefinePolicyResponse CreateCCSelfDefinePolicy(Models\CreateCCSelfDefinePolicyRequest $req) This API is used to create a custom CC policy.
 * @method Models\CreateDDoSPolicyResponse CreateDDoSPolicy(Models\CreateDDoSPolicyRequest $req) This API is used to add an advanced DDoS policy.
 * @method Models\CreateDDoSPolicyCaseResponse CreateDDoSPolicyCase(Models\CreateDDoSPolicyCaseRequest $req) This API is used to add a policy scenario.
 * @method Models\CreateInstanceNameResponse CreateInstanceName(Models\CreateInstanceNameRequest $req) This API is used to rename a resource instance, which supports single IP instances, multi-IP instances, Anti-DDoS Advanced, and Anti-DDoS Ultimate.
 * @method Models\CreateL4HealthConfigResponse CreateL4HealthConfig(Models\CreateL4HealthConfigRequest $req) This API is used to upload layer-4 health check configuration.
 * @method Models\CreateL4RulesResponse CreateL4Rules(Models\CreateL4RulesRequest $req) This API is used to add a layer-4 forwarding rule.
 * @method Models\CreateL7CCRuleResponse CreateL7CCRule(Models\CreateL7CCRuleRequest $req) This API is used to add a custom frequency control rule for layer-7 CC access (it works in the IP + Host dimension and does not support specific URIs). As it has been disused, please call the new `CreateCCFrequencyRules` API, which supports both IP + Host and URI.
 * @method Models\CreateL7HealthConfigResponse CreateL7HealthConfig(Models\CreateL7HealthConfigRequest $req) This API is used to upload layer-7 health check configuration.
 * @method Models\CreateL7RuleCertResponse CreateL7RuleCert(Models\CreateL7RuleCertRequest $req) This API is used to configure a certificate for a layer-7 forwarding rule.
 * @method Models\CreateL7RulesResponse CreateL7Rules(Models\CreateL7RulesRequest $req) This API is used to add a layer-7 (website) forwarding rule.
 * @method Models\CreateL7RulesUploadResponse CreateL7RulesUpload(Models\CreateL7RulesUploadRequest $req) This API is used to upload layer-7 forwarding rules in batches.
 * @method Models\CreateNetReturnResponse CreateNetReturn(Models\CreateNetReturnRequest $req) This API is used to switch to the real server in Anti-DDoS Ultimate.
 * @method Models\CreateNewL7RulesUploadResponse CreateNewL7RulesUpload(Models\CreateNewL7RulesUploadRequest $req) This API is used to batch upload Layer-7 forwarding rules.
 * @method Models\CreateUnblockIpResponse CreateUnblockIp(Models\CreateUnblockIpRequest $req) This API is used to unblock an IP.
 * @method Models\DeleteCCFrequencyRulesResponse DeleteCCFrequencyRules(Models\DeleteCCFrequencyRulesRequest $req) This API is used to delete an access frequency control rule for CC protection.
 * @method Models\DeleteCCSelfDefinePolicyResponse DeleteCCSelfDefinePolicy(Models\DeleteCCSelfDefinePolicyRequest $req) This API is used to delete a custom CC policy.
 * @method Models\DeleteDDoSPolicyResponse DeleteDDoSPolicy(Models\DeleteDDoSPolicyRequest $req) This API is used to delete an advanced DDoS protection policy.
 * @method Models\DeleteDDoSPolicyCaseResponse DeleteDDoSPolicyCase(Models\DeleteDDoSPolicyCaseRequest $req) This API is used to delete a policy scenario.
 * @method Models\DeleteL4RulesResponse DeleteL4Rules(Models\DeleteL4RulesRequest $req) This API is used to delete one or more layer-4 forwarding rules.
 * @method Models\DeleteL7RulesResponse DeleteL7Rules(Models\DeleteL7RulesRequest $req) This API is used to delete one or more layer-7 forwarding rules.
 * @method Models\DescribeActionLogResponse DescribeActionLog(Models\DescribeActionLogRequest $req) This API is used to get operation logs.
 * @method Models\DescribeBGPIPL7RuleMaxCntResponse DescribeBGPIPL7RuleMaxCnt(Models\DescribeBGPIPL7RuleMaxCntRequest $req) This API is used to get the maximum number of layer-7 rules that can be added for Anti-DDoS Advanced.

 * @method Models\DescribeBaradDataResponse DescribeBaradData(Models\DescribeBaradDataRequest $req) This API is used to provide business forwarding metric data of Anti-DDoS services.
 * @method Models\DescribeBasicCCThresholdResponse DescribeBasicCCThreshold(Models\DescribeBasicCCThresholdRequest $req) This API is used to get the CC protection threshold of Anti-DDoS Basic.
 * @method Models\DescribeBasicDeviceThresholdResponse DescribeBasicDeviceThreshold(Models\DescribeBasicDeviceThresholdRequest $req) This API is used to get the blackhole threshold of Anti-DDoS Basic.
 * @method Models\DescribeBizHttpStatusResponse DescribeBizHttpStatus(Models\DescribeBizHttpStatusRequest $req) This API is used to get the statistics on the status codes of business traffic.
 * @method Models\DescribeCCAlarmThresholdResponse DescribeCCAlarmThreshold(Models\DescribeCCAlarmThresholdRequest $req) This API is used to get the alarm notification threshold set for CC attacks in Anti-DDoS Pro, Anti-DDoS Advanced, Anti-DDoS Ultimate, and Chess Shield.
 * @method Models\DescribeCCEvListResponse DescribeCCEvList(Models\DescribeCCEvListRequest $req) This API is used to get the CC attack event list.
 * @method Models\DescribeCCFrequencyRulesResponse DescribeCCFrequencyRules(Models\DescribeCCFrequencyRulesRequest $req) This API is used to get an access frequency control rule for CC protection.
 * @method Models\DescribeCCIpAllowDenyResponse DescribeCCIpAllowDeny(Models\DescribeCCIpAllowDenyRequest $req) This API is used to get the CC IP blocklist/allowlist.
 * @method Models\DescribeCCSelfDefinePolicyResponse DescribeCCSelfDefinePolicy(Models\DescribeCCSelfDefinePolicyRequest $req) This API is used to get a custom CC policy.
 * @method Models\DescribeCCTrendResponse DescribeCCTrend(Models\DescribeCCTrendRequest $req) This API is used to get CC attack metric data, including total requests peak (QPS) and attack requests (QPS).
 * @method Models\DescribeCCUrlAllowResponse DescribeCCUrlAllow(Models\DescribeCCUrlAllowRequest $req) This API is used to get the CC URL allowlist.
 * @method Models\DescribeDDoSAlarmThresholdResponse DescribeDDoSAlarmThreshold(Models\DescribeDDoSAlarmThresholdRequest $req) This API is used to get the alarm notification threshold set for DDoS attacks in Anti-DDoS Pro, Anti-DDoS Advanced, Anti-DDoS Ultimate, and Chess Shield.
 * @method Models\DescribeDDoSAttackIPRegionMapResponse DescribeDDoSAttackIPRegionMap(Models\DescribeDDoSAttackIPRegionMapRequest $req) This API is used to get the geographical distribution map of DDoS attack source IPs. It supports display by global regions and Chinese provinces.
 * @method Models\DescribeDDoSAttackSourceResponse DescribeDDoSAttackSource(Models\DescribeDDoSAttackSourceRequest $req) This API is used to get the DDoS attack source list.
 * @method Models\DescribeDDoSCountResponse DescribeDDoSCount(Models\DescribeDDoSCountRequest $req) This API is used to get the DDoS attack proportion analysis.
 * @method Models\DescribeDDoSDefendStatusResponse DescribeDDoSDefendStatus(Models\DescribeDDoSDefendStatusRequest $req) This API is used to get the DDoS protection status (temporarily disabled status). It is supported for Anti-DDoS Basic, single IP instance, multi-IP instance, Anti-DDoS Advanced, and Anti-DDoS Ultimate. It is used to query whether DDoS protection is temporarily disabled, and if yes, return parameters such as temporary disablement duration.
 * @method Models\DescribeDDoSEvInfoResponse DescribeDDoSEvInfo(Models\DescribeDDoSEvInfoRequest $req) This API is used to get details of a specific DDoS attack.
 * @method Models\DescribeDDoSEvListResponse DescribeDDoSEvList(Models\DescribeDDoSEvListRequest $req) This API is used to get the DDoS attack event list.
 * @method Models\DescribeDDoSIpLogResponse DescribeDDoSIpLog(Models\DescribeDDoSIpLogRequest $req) This API is used to get a DDoS IP attack log.
 * @method Models\DescribeDDoSNetCountResponse DescribeDDoSNetCount(Models\DescribeDDoSNetCountRequest $req) This API is used to get the DDoS attack proportion analysis for an Anti-DDoS Ultimate resource.
 * @method Models\DescribeDDoSNetEvInfoResponse DescribeDDoSNetEvInfo(Models\DescribeDDoSNetEvInfoRequest $req) This API is used to get the DDoS attack event details of an Anti-DDoS Ultimate resource.
 * @method Models\DescribeDDoSNetEvListResponse DescribeDDoSNetEvList(Models\DescribeDDoSNetEvListRequest $req) This API is used to get the DDoS attack event list of an Anti-DDoS Ultimate resource.
 * @method Models\DescribeDDoSNetIpLogResponse DescribeDDoSNetIpLog(Models\DescribeDDoSNetIpLogRequest $req) This API is used to get the DDoS IP attack logs of an Anti-DDoS Ultimate resource.
 * @method Models\DescribeDDoSNetTrendResponse DescribeDDoSNetTrend(Models\DescribeDDoSNetTrendRequest $req) This API is used to get the DDoS attack metric data of an Anti-DDoS Ultimate resource.
 * @method Models\DescribeDDoSPolicyResponse DescribeDDoSPolicy(Models\DescribeDDoSPolicyRequest $req) This API is used to get an advanced DDoS policy.
 * @method Models\DescribeDDoSTrendResponse DescribeDDoSTrend(Models\DescribeDDoSTrendRequest $req) This API is used to get the data of DDoS attack traffic bandwidth and attack packet rate.
 * @method Models\DescribeDDoSUsedStatisResponse DescribeDDoSUsedStatis(Models\DescribeDDoSUsedStatisRequest $req) This API is used to count the number of days of Anti-DDoS resource use and number of DDoS attacks defended against.
 * @method Models\DescribeIPProductInfoResponse DescribeIPProductInfo(Models\DescribeIPProductInfoRequest $req) This API is used to get the Tencent Cloud asset information corresponding to an IP of a single IP instance or multi-IP instance, which is supported only for IPs of single IP instances and multi-IP instances.
 * @method Models\DescribeInsurePacksResponse DescribeInsurePacks(Models\DescribeInsurePacksRequest $req) This API is used to get the guarantee package list.
 * @method Models\DescribeIpBlockListResponse DescribeIpBlockList(Models\DescribeIpBlockListRequest $req) This API is used to get the blocked IP list.
 * @method Models\DescribeIpUnBlockListResponse DescribeIpUnBlockList(Models\DescribeIpUnBlockListRequest $req) This API is used to get the IP unblocking records.
 * @method Models\DescribeL4HealthConfigResponse DescribeL4HealthConfig(Models\DescribeL4HealthConfigRequest $req) This API is used to export the layer-4 health check configuration.
 * @method Models\DescribeL4RulesErrHealthResponse DescribeL4RulesErrHealth(Models\DescribeL4RulesErrHealthRequest $req) This API is used to get the exception result of a layer-4 forwarding rule health check.
 * @method Models\DescribeL7HealthConfigResponse DescribeL7HealthConfig(Models\DescribeL7HealthConfigRequest $req) This API is used to export the layer-7 health check configuration.
 * @method Models\DescribePackIndexResponse DescribePackIndex(Models\DescribePackIndexRequest $req) This API is used to get the product overview statistics. It is supported for Anti-DDoS Pro, Anti-DDoS Advanced, and Anti-DDoS Ultimate.
 * @method Models\DescribePcapResponse DescribePcap(Models\DescribePcapRequest $req) This API is used to download the PCAP packet of an attack event.
 * @method Models\DescribePolicyCaseResponse DescribePolicyCase(Models\DescribePolicyCaseRequest $req) This API is used to get the policy scenario.
 * @method Models\DescribeResIpListResponse DescribeResIpList(Models\DescribeResIpListRequest $req) This API is used to get the IP list of a resource.
 * @method Models\DescribeResourceListResponse DescribeResourceList(Models\DescribeResourceListRequest $req) This API is used to get the resource list.
 * @method Models\DescribeRuleSetsResponse DescribeRuleSets(Models\DescribeRuleSetsRequest $req) This API is used to get the number of rules of a resource.
 * @method Models\DescribeSchedulingDomainListResponse DescribeSchedulingDomainList(Models\DescribeSchedulingDomainListRequest $req) Get scheduling domain name list
 * @method Models\DescribeSecIndexResponse DescribeSecIndex(Models\DescribeSecIndexRequest $req) This API is used to get the security statistics of the current month.
 * @method Models\DescribeSourceIpSegmentResponse DescribeSourceIpSegment(Models\DescribeSourceIpSegmentRequest $req) This API is used to get the intermediate IP range. It is supported for Anti-DDoS Advanced and Anti-DDoS Ultimate.
 * @method Models\DescribeTransmitStatisResponse DescribeTransmitStatis(Models\DescribeTransmitStatisRequest $req) This API is used to get the business forwarding statistics, including forwarded traffic and packet forwarding rate.
 * @method Models\DescribeUnBlockStatisResponse DescribeUnBlockStatis(Models\DescribeUnBlockStatisRequest $req) This API is used to get the number of blackhole unblockings.
 * @method Models\DescribleL4RulesResponse DescribleL4Rules(Models\DescribleL4RulesRequest $req) This API is used to get a layer-4 forwarding rule.
 * @method Models\DescribleL7RulesResponse DescribleL7Rules(Models\DescribleL7RulesRequest $req) This API is used to get a layer-7 forwarding rule.
 * @method Models\DescribleRegionCountResponse DescribleRegionCount(Models\DescribleRegionCountRequest $req) This API is used to get the number of resource instances in a region.
 * @method Models\ModifyCCAlarmThresholdResponse ModifyCCAlarmThreshold(Models\ModifyCCAlarmThresholdRequest $req) This API is used to set the alarm notification threshold for CC attacks in Anti-DDoS Pro, Anti-DDoS Advanced, Anti-DDoS Ultimate, and Chess Shield.
 * @method Models\ModifyCCFrequencyRulesResponse ModifyCCFrequencyRules(Models\ModifyCCFrequencyRulesRequest $req) This API is used to modify an access frequency control rule for CC protection.
 * @method Models\ModifyCCFrequencyRulesStatusResponse ModifyCCFrequencyRulesStatus(Models\ModifyCCFrequencyRulesStatusRequest $req) This API is used to enable or disable an access frequency control rule for CC protection.
 * @method Models\ModifyCCHostProtectionResponse ModifyCCHostProtection(Models\ModifyCCHostProtectionRequest $req) This API is used to enable or disable CC domain name protection.
 * @method Models\ModifyCCIpAllowDenyResponse ModifyCCIpAllowDeny(Models\ModifyCCIpAllowDenyRequest $req) This API is used to add/remove a CC IP to/from the blocklist/allowlist.
 * @method Models\ModifyCCLevelResponse ModifyCCLevel(Models\ModifyCCLevelRequest $req) This API is used to modify CC protection level.
 * @method Models\ModifyCCPolicySwitchResponse ModifyCCPolicySwitch(Models\ModifyCCPolicySwitchRequest $req) This API is used to enable or disable a custom CC policy.
 * @method Models\ModifyCCSelfDefinePolicyResponse ModifyCCSelfDefinePolicy(Models\ModifyCCSelfDefinePolicyRequest $req) This API is used to modify a custom CC policy.
 * @method Models\ModifyCCThresholdResponse ModifyCCThreshold(Models\ModifyCCThresholdRequest $req) This API is used to modify the CC protection threshold.
 * @method Models\ModifyCCUrlAllowResponse ModifyCCUrlAllow(Models\ModifyCCUrlAllowRequest $req) This API is used to add/remove a CC URL to/from the allowlist.
 * @method Models\ModifyDDoSAIStatusResponse ModifyDDoSAIStatus(Models\ModifyDDoSAIStatusRequest $req) This API is used to read or modify DDoS AI protection status.
 * @method Models\ModifyDDoSAlarmThresholdResponse ModifyDDoSAlarmThreshold(Models\ModifyDDoSAlarmThresholdRequest $req) This API is used to set the alarm notification threshold for DDoS attacks in Anti-DDoS Pro, Anti-DDoS Advanced, Anti-DDoS Ultimate, and Chess Shield.
 * @method Models\ModifyDDoSDefendStatusResponse ModifyDDoSDefendStatus(Models\ModifyDDoSDefendStatusRequest $req) This API is used to enable or disable DDoS. It can disable DDoS protection for a period of time, which will be automatically enabled after the period of time elapses.
 * @method Models\ModifyDDoSLevelResponse ModifyDDoSLevel(Models\ModifyDDoSLevelRequest $req) This API is used to read or modify DDoS protection level.
 * @method Models\ModifyDDoSPolicyResponse ModifyDDoSPolicy(Models\ModifyDDoSPolicyRequest $req) This API is used to modify an advanced DDoS policy.
 * @method Models\ModifyDDoSPolicyCaseResponse ModifyDDoSPolicyCase(Models\ModifyDDoSPolicyCaseRequest $req) This API is used to modify a policy scenario.
 * @method Models\ModifyDDoSPolicyNameResponse ModifyDDoSPolicyName(Models\ModifyDDoSPolicyNameRequest $req) This API is used to rename an advanced DDoS policy.
 * @method Models\ModifyDDoSSwitchResponse ModifyDDoSSwitch(Models\ModifyDDoSSwitchRequest $req) This API is used to enable or disable DDoS protection, which is only supported for Anti-DDoS Basic.
 * @method Models\ModifyDDoSThresholdResponse ModifyDDoSThreshold(Models\ModifyDDoSThresholdRequest $req) This API is used to modify the DDoS cleansing threshold.
 * @method Models\ModifyDDoSWaterKeyResponse ModifyDDoSWaterKey(Models\ModifyDDoSWaterKeyRequest $req) This API is used to add, delete, enable, or disable a watermark key.
 * @method Models\ModifyElasticLimitResponse ModifyElasticLimit(Models\ModifyElasticLimitRequest $req) This API is used to modify the elastic protection threshold.
 * @method Models\ModifyL4HealthResponse ModifyL4Health(Models\ModifyL4HealthRequest $req) This API is used to modify the health check parameters of a layer-4 forwarding rule. It is supported for Anti-DDoS Advanced and Anti-DDoS Ultimate.
 * @method Models\ModifyL4KeepTimeResponse ModifyL4KeepTime(Models\ModifyL4KeepTimeRequest $req) This API is used to modify the session persistence of a layer-4 forwarding rule. It is supported for Anti-DDoS Advanced and Anti-DDoS Ultimate.
 * @method Models\ModifyL4RulesResponse ModifyL4Rules(Models\ModifyL4RulesRequest $req) This API is used to modify a layer-4 forwarding rule.
 * @method Models\ModifyL7RulesResponse ModifyL7Rules(Models\ModifyL7RulesRequest $req) This API is used to modify the layer-7 forwarding rules.
 * @method Models\ModifyNetReturnSwitchResponse ModifyNetReturnSwitch(Models\ModifyNetReturnSwitchRequest $req) This API is used to switch a client to the real server and set the switch duration when the client is under attack or blocked.
 * @method Models\ModifyNewDomainRulesResponse ModifyNewDomainRules(Models\ModifyNewDomainRulesRequest $req) This API is used to modify layer-7 forwarding rules.
 * @method Models\ModifyNewL4RuleResponse ModifyNewL4Rule(Models\ModifyNewL4RuleRequest $req) This API is used to modify layer-4 forwarding rules.
 * @method Models\ModifyResBindDDoSPolicyResponse ModifyResBindDDoSPolicy(Models\ModifyResBindDDoSPolicyRequest $req) This API is used to bind an advanced DDoS policy to an instance.
 * @method Models\ModifyResourceRenewFlagResponse ModifyResourceRenewFlag(Models\ModifyResourceRenewFlagRequest $req) This API is used to enable or disable auto-renewal for a resource.
 */

class DayuClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dayu.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dayu";

    /**
     * @var string
     */
    protected $version = "2018-07-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("dayu")."\\"."V20180709\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
