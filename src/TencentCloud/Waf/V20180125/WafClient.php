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

namespace TencentCloud\Waf\V20180125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Waf\V20180125\Models as Models;

/**
 * @method Models\AddAntiFakeUrlResponse AddAntiFakeUrl(Models\AddAntiFakeUrlRequest $req) Add tamper-proof URL
 * @method Models\AddAntiInfoLeakRulesResponse AddAntiInfoLeakRules(Models\AddAntiInfoLeakRulesRequest $req) Add information leakage prevention rule
 * @method Models\AddCustomRuleResponse AddCustomRule(Models\AddCustomRuleRequest $req) Add access control (from custom policy)
 * @method Models\AddCustomWhiteRuleResponse AddCustomWhiteRule(Models\AddCustomWhiteRuleRequest $req) Add precision allowlist rules
 * @method Models\AddSpartaProtectionResponse AddSpartaProtection(Models\AddSpartaProtectionRequest $req) Add SaaS WAF protection domain
 * @method Models\CreateDealsResponse CreateDeals(Models\CreateDealsRequest $req) Billing Resource Purchase, Renewal Order API
 * @method Models\CreateHostResponse CreateHost(Models\CreateHostRequest $req) Add a protection domain in CLB-WAF
 * @method Models\CreateIpAccessControlResponse CreateIpAccessControl(Models\CreateIpAccessControlRequest $req) This API is used to add WAF IP allowlists/blocklists.
 * @method Models\DeleteAntiFakeUrlResponse DeleteAntiFakeUrl(Models\DeleteAntiFakeUrlRequest $req) Delete tamper-proof URL
 * @method Models\DeleteAntiInfoLeakRuleResponse DeleteAntiInfoLeakRule(Models\DeleteAntiInfoLeakRuleRequest $req) Delete information leakage prevention rule
 * @method Models\DeleteCCRuleResponse DeleteCCRule(Models\DeleteCCRuleRequest $req) WAF CC V2 deletion API
 * @method Models\DeleteCustomRuleResponse DeleteCustomRule(Models\DeleteCustomRuleRequest $req) Delete custom rule
 * @method Models\DeleteCustomWhiteRuleResponse DeleteCustomWhiteRule(Models\DeleteCustomWhiteRuleRequest $req) Delete precision allowlist rules
 * @method Models\DeleteHostResponse DeleteHost(Models\DeleteHostRequest $req) This API is used to delete a domain name protected by CLB WAF. Batch operation is supported.
 * @method Models\DeleteIpAccessControlV2Response DeleteIpAccessControlV2(Models\DeleteIpAccessControlV2Request $req) This API is used to delete latest versions of WAF IP allowlists/blocklists.
 * @method Models\DeleteSessionResponse DeleteSession(Models\DeleteSessionRequest $req) Delete CC attack session settings
 * @method Models\DeleteSpartaProtectionResponse DeleteSpartaProtection(Models\DeleteSpartaProtectionRequest $req) This API is used to delete a domain name protected by SaaS WAF.
 * @method Models\DescribeAntiFakeRulesResponse DescribeAntiFakeRules(Models\DescribeAntiFakeRulesRequest $req) Obtain a tamper-proof URL
 * @method Models\DescribeAntiInfoLeakageRulesResponse DescribeAntiInfoLeakageRules(Models\DescribeAntiInfoLeakageRulesRequest $req) Obtain the information leakage prevention rule list
 * @method Models\DescribeAttackOverviewResponse DescribeAttackOverview(Models\DescribeAttackOverviewRequest $req) This API is used to describe the attack overview.
 * @method Models\DescribeAttackTypeResponse DescribeAttackType(Models\DescribeAttackTypeRequest $req) Query the top N attack types for a specified domain
 * @method Models\DescribeBatchIpAccessControlResponse DescribeBatchIpAccessControl(Models\DescribeBatchIpAccessControlRequest $req) This API is used to query the IP blocklist and allowlist for WAF batch protection.
 * @method Models\DescribeCCRuleResponse DescribeCCRule(Models\DescribeCCRuleRequest $req) WAF CC V2 query API
 * @method Models\DescribeCCRuleListResponse DescribeCCRuleList(Models\DescribeCCRuleListRequest $req) Query CC rules based on multiple conditions
 * @method Models\DescribeCertificateVerifyResultResponse DescribeCertificateVerifyResult(Models\DescribeCertificateVerifyResultRequest $req) Obtain certificate inspection result
 * @method Models\DescribeCiphersDetailResponse DescribeCiphersDetail(Models\DescribeCiphersDetailRequest $req) Query SaaS WAF cipher suite information
 * @method Models\DescribeCustomRuleListResponse DescribeCustomRuleList(Models\DescribeCustomRuleListRequest $req) Obtain the access control policy list in the protection configuration
 * @method Models\DescribeCustomWhiteRuleResponse DescribeCustomWhiteRule(Models\DescribeCustomWhiteRuleRequest $req) Obtain the precision allowlist policy list in the protection configuration
 * @method Models\DescribeDomainCountInfoResponse DescribeDomainCountInfo(Models\DescribeDomainCountInfoRequest $req) Obtain domain overview
 * @method Models\DescribeDomainDetailsClbResponse DescribeDomainDetailsClb(Models\DescribeDomainDetailsClbRequest $req) Obtain CLB WAF domain details
 * @method Models\DescribeDomainDetailsSaasResponse DescribeDomainDetailsSaas(Models\DescribeDomainDetailsSaasRequest $req) Query individual SaaS WAF domain details
 * @method Models\DescribeDomainVerifyResultResponse DescribeDomainVerifyResult(Models\DescribeDomainVerifyResultRequest $req) Obtain the result of adding domain operation
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) Query detailed information of all user domains
 * @method Models\DescribeFindDomainListResponse DescribeFindDomainList(Models\DescribeFindDomainListRequest $req) Obtain discovered domain name list API
 * @method Models\DescribeHistogramResponse DescribeHistogram(Models\DescribeHistogramRequest $req) Query various conditions of cluster analysis
 * @method Models\DescribeHostResponse DescribeHost(Models\DescribeHostRequest $req) Obtain protection domain details in CLB-WAF
 * @method Models\DescribeHostLimitResponse DescribeHostLimit(Models\DescribeHostLimitRequest $req) Firstly verify when adding a domain whether a package has been purchased, whether the limit of purchased package has not been reached, and whether the domain has already been added
 * @method Models\DescribeHostsResponse DescribeHosts(Models\DescribeHostsRequest $req) Obtain protection domain list in CLB-WAF
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) Query detailed information of all user instances
 * @method Models\DescribeIpAccessControlResponse DescribeIpAccessControl(Models\DescribeIpAccessControlRequest $req) WAF IP blocklist/allowlist query
 * @method Models\DescribeModuleStatusResponse DescribeModuleStatus(Models\DescribeModuleStatusRequest $req) Query the switch status of each WAF basic security module, check if each module is enabled
 * @method Models\DescribeObjectsResponse DescribeObjects(Models\DescribeObjectsRequest $req) View protected object list
 * @method Models\DescribePeakPointsResponse DescribePeakPoints(Models\DescribePeakPointsRequest $req) Query business and attack summary trends
 * @method Models\DescribePolicyStatusResponse DescribePolicyStatus(Models\DescribePolicyStatusRequest $req) Obtain protection status and the effective instance ID
 * @method Models\DescribePortsResponse DescribePorts(Models\DescribePortsRequest $req) Obtain the SaaS-type WAF protection port list
 * @method Models\DescribeRuleLimitResponse DescribeRuleLimit(Models\DescribeRuleLimitRequest $req) Obtain specific specification limits for each module
 * @method Models\DescribeSessionResponse DescribeSession(Models\DescribeSessionRequest $req) WAF session definition query API
 * @method Models\DescribeSpartaProtectionInfoResponse DescribeSpartaProtectionInfo(Models\DescribeSpartaProtectionInfoRequest $req) WAF Sparta - Obtain protection domain information
 * @method Models\DescribeTlsVersionResponse DescribeTlsVersion(Models\DescribeTlsVersionRequest $req) This API is used to query TLS versions supported by SaaS WAF.
 * @method Models\DescribeTopAttackDomainResponse DescribeTopAttackDomain(Models\DescribeTopAttackDomainRequest $req) Query top 5 attack domains
 * @method Models\DescribeUserClbWafRegionsResponse DescribeUserClbWafRegions(Models\DescribeUserClbWafRegionsRequest $req) During the addition and modification of Domain Configuration for CLB-type WAF, it is required to display the supported region list for CLB-type WAF (clb-waf) through DescribeUserClbWafRegions to obtain the currently available region list for the customer.
 * @method Models\DescribeUserDomainInfoResponse DescribeUserDomainInfo(Models\DescribeUserDomainInfoRequest $req) Query Domain Information for SaaS and CLB
 * @method Models\DescribeUserLevelResponse DescribeUserLevel(Models\DescribeUserLevelRequest $req) Obtain the user protection rule level
 * @method Models\DescribeVipInfoResponse DescribeVipInfo(Models\DescribeVipInfoRequest $req) Query VIP information based on filter criteria
 * @method Models\DescribeWebshellStatusResponse DescribeWebshellStatus(Models\DescribeWebshellStatusRequest $req) Obtain the webshell status of a domain
 * @method Models\FreshAntiFakeUrlResponse FreshAntiFakeUrl(Models\FreshAntiFakeUrlRequest $req) Refresh a tamper-proof URL
 * @method Models\GenerateDealsAndPayNewResponse GenerateDealsAndPayNew(Models\GenerateDealsAndPayNewRequest $req) Billing Resource Purchase, Renewal Order API
 * @method Models\GetAttackHistogramResponse GetAttackHistogram(Models\GetAttackHistogramRequest $req) This API is used to generate a bar chart for the generation time of attack logs.
 * @method Models\GetAttackTotalCountResponse GetAttackTotalCount(Models\GetAttackTotalCountRequest $req) Display total attack count by querying based on conditions
 * @method Models\GetInstanceQpsLimitResponse GetInstanceQpsLimit(Models\GetInstanceQpsLimitRequest $req) Obtain the elastic QPS limit of package instances
 * @method Models\ImportIpAccessControlResponse ImportIpAccessControl(Models\ImportIpAccessControlRequest $req) This API is used to import IP allowlists/blocklists.
 * @method Models\ModifyAntiFakeUrlResponse ModifyAntiFakeUrl(Models\ModifyAntiFakeUrlRequest $req) Edit a tamper-proof URL
 * @method Models\ModifyAntiFakeUrlStatusResponse ModifyAntiFakeUrlStatus(Models\ModifyAntiFakeUrlStatusRequest $req) Toggle tamper-proof switch
 * @method Models\ModifyAntiInfoLeakRuleStatusResponse ModifyAntiInfoLeakRuleStatus(Models\ModifyAntiInfoLeakRuleStatusRequest $req) Information leakage prevention toggle rule switch
 * @method Models\ModifyAntiInfoLeakRulesResponse ModifyAntiInfoLeakRules(Models\ModifyAntiInfoLeakRulesRequest $req) Edit an information leakage prevention rule
 * @method Models\ModifyApiAnalyzeStatusResponse ModifyApiAnalyzeStatus(Models\ModifyApiAnalyzeStatusRequest $req) API analysis page switch
 * @method Models\ModifyBotStatusResponse ModifyBotStatus(Models\ModifyBotStatusRequest $req) Bot_V2 bot master switch update
 * @method Models\ModifyCustomRuleResponse ModifyCustomRule(Models\ModifyCustomRuleRequest $req) This API is used to edit a custom rule.
 * @method Models\ModifyCustomRuleStatusResponse ModifyCustomRuleStatus(Models\ModifyCustomRuleStatusRequest $req) Enable or disable access control (from custom policy)
 * @method Models\ModifyCustomWhiteRuleResponse ModifyCustomWhiteRule(Models\ModifyCustomWhiteRuleRequest $req) This API is used to edit a precise allowlist.
 * @method Models\ModifyCustomWhiteRuleStatusResponse ModifyCustomWhiteRuleStatus(Models\ModifyCustomWhiteRuleStatusRequest $req) Enable or disable a precision allowlist
 * @method Models\ModifyDomainIpv6StatusResponse ModifyDomainIpv6Status(Models\ModifyDomainIpv6StatusRequest $req) Toggle the IPv6 switch
 * @method Models\ModifyDomainPostActionResponse ModifyDomainPostAction(Models\ModifyDomainPostActionRequest $req) This API is used to modify the domain shipping status.
 * @method Models\ModifyDomainsCLSStatusResponse ModifyDomainsCLSStatus(Models\ModifyDomainsCLSStatusRequest $req) Enable or disable access log for domain list
 * @method Models\ModifyHostResponse ModifyHost(Models\ModifyHostRequest $req) This API is used to edit the configuration of domain names protected by CLB WAF.
 * @method Models\ModifyHostFlowModeResponse ModifyHostFlowMode(Models\ModifyHostFlowModeRequest $req) This API is used to set the traffic mode for domain names protected by CLB WAF. The mode can be mirror mode or cleaning mode.
 * @method Models\ModifyHostModeResponse ModifyHostMode(Models\ModifyHostModeRequest $req) Set CLB WAF protection domain status
 * @method Models\ModifyHostStatusResponse ModifyHostStatus(Models\ModifyHostStatusRequest $req) This API is used to enable or disable CLB WAF for a protected domain name.
Batch operation is supported.
 * @method Models\ModifyInstanceElasticModeResponse ModifyInstanceElasticMode(Models\ModifyInstanceElasticModeRequest $req) Modify the QPS elastic billing switch for an instance
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) Modify instance name
 * @method Models\ModifyInstanceQpsLimitResponse ModifyInstanceQpsLimit(Models\ModifyInstanceQpsLimitRequest $req) Set elastic QPS limit for package instances
 * @method Models\ModifyInstanceRenewFlagResponse ModifyInstanceRenewFlag(Models\ModifyInstanceRenewFlagRequest $req) Enable or disable auto-renewal for instance
 * @method Models\ModifyIpAccessControlResponse ModifyIpAccessControl(Models\ModifyIpAccessControlRequest $req) This API is used to edit WAF IP allowlists/blocklists.
 * @method Models\ModifyModuleStatusResponse ModifyModuleStatus(Models\ModifyModuleStatusRequest $req) Set the switch for the basic security module under a certain domain
 * @method Models\ModifyObjectResponse ModifyObject(Models\ModifyObjectRequest $req) Modify protection object
 * @method Models\ModifyProtectionStatusResponse ModifyProtectionStatus(Models\ModifyProtectionStatusRequest $req) This API is used to obtain the enabling status of the basic security protection module of WAF.
 * @method Models\ModifySpartaProtectionResponse ModifySpartaProtection(Models\ModifySpartaProtectionRequest $req) This API is used to edit the configuration of domain names protected by SaaS WAF.
 * @method Models\ModifySpartaProtectionModeResponse ModifySpartaProtectionMode(Models\ModifySpartaProtectionModeRequest $req) Set WAF protection status
 * @method Models\ModifyUserLevelResponse ModifyUserLevel(Models\ModifyUserLevelRequest $req) Modify the user protection rule level
 * @method Models\ModifyUserSignatureRuleResponse ModifyUserSignatureRule(Models\ModifyUserSignatureRuleRequest $req) Modify user protection rules, turn on/off specific rules
 * @method Models\ModifyWebshellStatusResponse ModifyWebshellStatus(Models\ModifyWebshellStatusRequest $req) Set the Webshell status of a domain.
 * @method Models\RefreshAccessCheckResultResponse RefreshAccessCheckResult(Models\RefreshAccessCheckResultRequest $req) Refresh integration check results. The backend will generate integration check tasks
 * @method Models\SearchAttackLogResponse SearchAttackLog(Models\SearchAttackLogRequest $req) The new version of the CLS API has parameter changes, with query changed to query_string to support Lucene syntax for API search queries.
 * @method Models\SwitchElasticModeResponse SwitchElasticMode(Models\SwitchElasticModeRequest $req) Toggle elasticity switch
 * @method Models\UpsertCCRuleResponse UpsertCCRule(Models\UpsertCCRuleRequest $req) WAF CC V2 upsert API
 * @method Models\UpsertSessionResponse UpsertSession(Models\UpsertSessionRequest $req) WAF session definition upsert API
 */

class WafClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "waf.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "waf";

    /**
     * @var string
     */
    protected $version = "2018-01-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("waf")."\\"."V20180125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
