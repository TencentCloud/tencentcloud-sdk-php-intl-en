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

namespace TencentCloud\Cfw\V20190904;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cfw\V20190904\Models as Models;

/**
 * @method Models\AddAcRuleResponse AddAcRule(Models\AddAcRuleRequest $req) This API is used to add edge firewall rules.
 * @method Models\AddEnterpriseSecurityGroupRulesResponse AddEnterpriseSecurityGroupRules(Models\AddEnterpriseSecurityGroupRulesRequest $req) This API is used to create enterprise security group rules (new).
 * @method Models\AddNatAcRuleResponse AddNatAcRule(Models\AddNatAcRuleRequest $req) This API is used to add NAT access control rules.
 * @method Models\CreateAcRulesResponse CreateAcRules(Models\CreateAcRulesRequest $req) This API is used to create access control rules.
 * @method Models\CreateNatFwInstanceResponse CreateNatFwInstance(Models\CreateNatFwInstanceRequest $req) This API is used to create a NAT firewall instance (The Region parameter is required).
 * @method Models\CreateNatFwInstanceWithDomainResponse CreateNatFwInstanceWithDomain(Models\CreateNatFwInstanceWithDomainRequest $req) This API is used to create a firewall instance with domain name (The Region parameter is required).
 * @method Models\CreateSecurityGroupRulesResponse CreateSecurityGroupRules(Models\CreateSecurityGroupRulesRequest $req) This API is used to create enterprise security group rules.
 * @method Models\DeleteAcRuleResponse DeleteAcRule(Models\DeleteAcRuleRequest $req) This API is used to delete a rule.
 * @method Models\DeleteAllAccessControlRuleResponse DeleteAllAccessControlRule(Models\DeleteAllAccessControlRuleRequest $req) This API is used to delete all rules.
 * @method Models\DeleteResourceGroupResponse DeleteResourceGroup(Models\DeleteResourceGroupRequest $req) This API is used to delete asset groups in Asset Management.
 * @method Models\DeleteSecurityGroupRuleResponse DeleteSecurityGroupRule(Models\DeleteSecurityGroupRuleRequest $req) This API is used to delete security group rules.
 * @method Models\DeleteVpcInstanceResponse DeleteVpcInstance(Models\DeleteVpcInstanceRequest $req) This API is used to delete firewall instance.
 * @method Models\DescribeAcListsResponse DescribeAcLists(Models\DescribeAcListsRequest $req) This API is used to get the access control list.
 * @method Models\DescribeAssociatedInstanceListResponse DescribeAssociatedInstanceList(Models\DescribeAssociatedInstanceListRequest $req) This API is used to get the list of instances associated with a security group.
 * @method Models\DescribeBlockByIpTimesListResponse DescribeBlockByIpTimesList(Models\DescribeBlockByIpTimesListRequest $req) This API is used to get blocked IP data.
 * @method Models\DescribeBlockIgnoreListResponse DescribeBlockIgnoreList(Models\DescribeBlockIgnoreListRequest $req) This API is used to get allowlists or blocklists for intrusion prevention.
 * @method Models\DescribeBlockStaticListResponse DescribeBlockStaticList(Models\DescribeBlockStaticListRequest $req) This API is used to get the most frequent attacker.

 * @method Models\DescribeDefenseSwitchResponse DescribeDefenseSwitch(Models\DescribeDefenseSwitchRequest $req) This API is used to query the list of firewall toggles with Intrusion Defense enabled.
 * @method Models\DescribeEnterpriseSecurityGroupRuleResponse DescribeEnterpriseSecurityGroupRule(Models\DescribeEnterpriseSecurityGroupRuleRequest $req) This API is used to get enterprise security group rules (new).
 * @method Models\DescribeGuideScanInfoResponse DescribeGuideScanInfo(Models\DescribeGuideScanInfoRequest $req) This API is used to get the scan interface information in Get Started.
 * @method Models\DescribeIPStatusListResponse DescribeIPStatusList(Models\DescribeIPStatusListRequest $req) This API is used to get the IP protection status.
 * @method Models\DescribeNatAcRuleResponse DescribeNatAcRule(Models\DescribeNatAcRuleRequest $req) This API is used to get the NAT access control list.
 * @method Models\DescribeNatFwInfoCountResponse DescribeNatFwInfoCount(Models\DescribeNatFwInfoCountRequest $req) This API is used to get the number of a user's subnets connected to NAT firewall and the number of NAT firewall instances.
 * @method Models\DescribeNatFwInstanceResponse DescribeNatFwInstance(Models\DescribeNatFwInstanceRequest $req) This API is used to get all NAT instances of a tenant.
 * @method Models\DescribeNatFwInstanceWithRegionResponse DescribeNatFwInstanceWithRegion(Models\DescribeNatFwInstanceWithRegionRequest $req) This API is used to get the NAT instance with the region that is newly maintained by the tenant.
 * @method Models\DescribeNatFwInstancesInfoResponse DescribeNatFwInstancesInfo(Models\DescribeNatFwInstancesInfoRequest $req) This API is used to get all NAT instances and instance card information of a tenant.
 * @method Models\DescribeNatFwVpcDnsLstResponse DescribeNatFwVpcDnsLst(Models\DescribeNatFwVpcDnsLstRequest $req) This API is used to get the VPC DNS status of NAT firewall instances.
 * @method Models\DescribeResourceGroupNewResponse DescribeResourceGroupNew(Models\DescribeResourceGroupNewRequest $req) This API is used to get the asset tree information in Asset Management.
 * @method Models\DescribeRuleOverviewResponse DescribeRuleOverview(Models\DescribeRuleOverviewRequest $req) This API is used to get the rule list overview.
 * @method Models\DescribeSecurityGroupListResponse DescribeSecurityGroupList(Models\DescribeSecurityGroupListRequest $req) This API is used to get the security group rule list.
 * @method Models\DescribeSourceAssetResponse DescribeSourceAsset(Models\DescribeSourceAssetRequest $req) This API is used to get all asset information of an asset group.

 * @method Models\DescribeSwitchListsResponse DescribeSwitchLists(Models\DescribeSwitchListsRequest $req) This API is used to get the firewall status list.
 * @method Models\DescribeTLogInfoResponse DescribeTLogInfo(Models\DescribeTLogInfoRequest $req) This API is used to get the current alert monitoring data.

 * @method Models\DescribeTLogIpListResponse DescribeTLogIpList(Models\DescribeTLogIpListRequest $req) This API is used to get the most frequent attacker IP.

 * @method Models\DescribeTableStatusResponse DescribeTableStatus(Models\DescribeTableStatusRequest $req) This API is used to get the rule list status.
 * @method Models\DescribeUnHandleEventTabListResponse DescribeUnHandleEventTabList(Models\DescribeUnHandleEventTabListRequest $req) This API is used to get unhandled security events.

 * @method Models\DescribeVpcAcRuleResponse DescribeVpcAcRule(Models\DescribeVpcAcRuleRequest $req) Query Inter-VPC rules
 * @method Models\ExpandCfwVerticalResponse ExpandCfwVertical(Models\ExpandCfwVerticalRequest $req) This API is used to increase the firewall bandwidth.
 * @method Models\ModifyAcRuleResponse ModifyAcRule(Models\ModifyAcRuleRequest $req) This API is used to modify rules.
 * @method Models\ModifyAllPublicIPSwitchStatusResponse ModifyAllPublicIPSwitchStatus(Models\ModifyAllPublicIPSwitchStatusRequest $req) This API is used to enable or disable one or multiple edge firewalls.
 * @method Models\ModifyAllRuleStatusResponse ModifyAllRuleStatus(Models\ModifyAllRuleStatusRequest $req) This API is used to enable or disable all rules.
 * @method Models\ModifyAllVPCSwitchStatusResponse ModifyAllVPCSwitchStatus(Models\ModifyAllVPCSwitchStatusRequest $req) This API is used to enable or disable one or multiple VPC firewalls.
 * @method Models\ModifyAssetScanResponse ModifyAssetScan(Models\ModifyAssetScanRequest $req) This API is used to modify asset scan settings.
 * @method Models\ModifyBlockIgnoreListResponse ModifyBlockIgnoreList(Models\ModifyBlockIgnoreListRequest $req) This API is used to manage blocked/allowed IPs and domains.
Add IPs/domains to the blocked/allowed list
Remove IPs/domains from the blocked/allowed list
Modify events related with the IPs/domains in the blocked/allowed list
 * @method Models\ModifyBlockTopResponse ModifyBlockTop(Models\ModifyBlockTopRequest $req) This API is used to pin or unpin a blocking log.
 * @method Models\ModifyEnterpriseSecurityDispatchStatusResponse ModifyEnterpriseSecurityDispatchStatus(Models\ModifyEnterpriseSecurityDispatchStatusRequest $req) This API is used to modify the publishing status of an enterprise security group.
 * @method Models\ModifyEnterpriseSecurityGroupRuleResponse ModifyEnterpriseSecurityGroupRule(Models\ModifyEnterpriseSecurityGroupRuleRequest $req) This API is used to modify a new enterprise security group rule.
 * @method Models\ModifyNatAcRuleResponse ModifyNatAcRule(Models\ModifyNatAcRuleRequest $req) This API is used to modify NAT access control rules.
 * @method Models\ModifyNatFwReSelectResponse ModifyNatFwReSelect(Models\ModifyNatFwReSelectRequest $req) This API is used to get the VPC or NAT list for changing associated firewall instances.
 * @method Models\ModifyNatFwSwitchResponse ModifyNatFwSwitch(Models\ModifyNatFwSwitchRequest $req) This API is used to enable or disable a NAT firewall.
 * @method Models\ModifyNatFwVpcDnsSwitchResponse ModifyNatFwVpcDnsSwitch(Models\ModifyNatFwVpcDnsSwitchRequest $req) This API is used to modify the VPC DNS status of NAT firewall instances.
 * @method Models\ModifyNatSequenceRulesResponse ModifyNatSequenceRules(Models\ModifyNatSequenceRulesRequest $req) This API is used to change the sequence number of NAT firewall rules.
 * @method Models\ModifyPublicIPSwitchStatusResponse ModifyPublicIPSwitchStatus(Models\ModifyPublicIPSwitchStatusRequest $req) This API is used to enable or disable an edge firewall.
 * @method Models\ModifyResourceGroupResponse ModifyResourceGroup(Models\ModifyResourceGroupRequest $req) This API is used to modify the asset group information in Asset Management.


 * @method Models\ModifyRunSyncAssetResponse ModifyRunSyncAsset(Models\ModifyRunSyncAssetRequest $req) This API is used to sync assets - Internet & VPC (new).
 * @method Models\ModifySecurityGroupItemRuleStatusResponse ModifySecurityGroupItemRuleStatus(Models\ModifySecurityGroupItemRuleStatusRequest $req) This API is used to enable or disable an enterprise security group rule.
 * @method Models\ModifySecurityGroupSequenceRulesResponse ModifySecurityGroupSequenceRules(Models\ModifySecurityGroupSequenceRulesRequest $req) This API is used to sort enterprise security group rules.
 * @method Models\ModifySequenceRulesResponse ModifySequenceRules(Models\ModifySequenceRulesRequest $req) This API is used to modify rule priority.
 * @method Models\ModifyStorageSettingResponse ModifyStorageSetting(Models\ModifyStorageSettingRequest $req) This API is used to modify the log retention period or to clear logs.
 * @method Models\ModifyTableStatusResponse ModifyTableStatus(Models\ModifyTableStatusRequest $req) This API is used to modify rule list status.
 * @method Models\RemoveAcRuleResponse RemoveAcRule(Models\RemoveAcRuleRequest $req) This API is used to delete edge firewall rules.
 * @method Models\RemoveEnterpriseSecurityGroupRuleResponse RemoveEnterpriseSecurityGroupRule(Models\RemoveEnterpriseSecurityGroupRuleRequest $req) This API is used to delete enterprise security group rules (new).
 * @method Models\RemoveNatAcRuleResponse RemoveNatAcRule(Models\RemoveNatAcRuleRequest $req) This API is used to delete NAT access control rules.
 * @method Models\SetNatFwDnatRuleResponse SetNatFwDnatRule(Models\SetNatFwDnatRuleRequest $req) This API is used to configure firewall DNAT rules.
 * @method Models\SetNatFwEipResponse SetNatFwEip(Models\SetNatFwEipRequest $req) This API is used to set the firewall instance EIP. (Available for firewall instances in the "Create new" mode. only)
 * @method Models\StopSecurityGroupRuleDispatchResponse StopSecurityGroupRuleDispatch(Models\StopSecurityGroupRuleDispatchRequest $req) This API is used to stop publishing security group rules.
 */

class CfwClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cfw.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cfw";

    /**
     * @var string
     */
    protected $version = "2019-09-04";

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
        $respClass = "TencentCloud"."\\".ucfirst("cfw")."\\"."V20190904\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
