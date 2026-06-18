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

namespace TencentCloud\Csip\V20221121;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Csip\V20221121\Models as Models;

/**
 * @method Models\AddNewBindRoleUserResponse AddNewBindRoleUser(Models\AddNewBindRoleUserRequest $req) This API is used to add the CAM role of Cloud Security Center (CSC) to the current account. The name of the CAM role is "csip".
 * @method Models\CreateAccessKeyCheckTaskResponse CreateAccessKeyCheckTask(Models\CreateAccessKeyCheckTaskRequest $req) Detect AK async task.
 * @method Models\CreateAccessKeySyncTaskResponse CreateAccessKeySyncTask(Models\CreateAccessKeySyncTaskRequest $req) Trigger an AK asset sync task.
 * @method Models\CreateDomainAndIpResponse CreateDomainAndIp(Models\CreateDomainAndIpRequest $req) This API is used to create an asset with the specific domain/IP.
 * @method Models\CreateIaCAccessTokenResponse CreateIaCAccessToken(Models\CreateIaCAccessTokenRequest $req) Create an IaC detection integration Token
 * @method Models\CreateIaCFileExportJobResponse CreateIaCFileExportJob(Models\CreateIaCFileExportJobRequest $req) Create an IaC detection file export task
 * @method Models\CreateIaCFileReScanTaskResponse CreateIaCFileReScanTask(Models\CreateIaCFileReScanTaskRequest $req) Create an IaC detection file rescan task
 * @method Models\CreateRiskCenterScanTaskResponse CreateRiskCenterScanTask(Models\CreateRiskCenterScanTaskRequest $req) This API is used to create a risk scan task. 
 * @method Models\CreateSkillScanResponse CreateSkillScan(Models\CreateSkillScanRequest $req) Upload the Skill ZIP file to trigger asynchronous security detection. After a successful upload, use the returned ContentHash and EngineVersion to poll the DescribeSkillScanResult API to obtain the result. The upload API is idempotent, and uploading the same file with an identical hash will not create a repetition task. The detection result is reserved for 90 days. If overdue, reupload the file for detection.
 * @method Models\DeleteDomainAndIpResponse DeleteDomainAndIp(Models\DeleteDomainAndIpRequest $req) This API is used to delete assets.
 * @method Models\DeleteIaCAccessTokenResponse DeleteIaCAccessToken(Models\DeleteIaCAccessTokenRequest $req) Delete an IaC detection integration Token
 * @method Models\DeleteIaCFileResponse DeleteIaCFile(Models\DeleteIaCFileRequest $req) Delete IaC detection file
 * @method Models\DeleteRiskScanTaskResponse DeleteRiskScanTask(Models\DeleteRiskScanTaskRequest $req) This API is used to delete a risk scan task.
 * @method Models\DescribeAIAgentAssetListResponse DescribeAIAgentAssetList(Models\DescribeAIAgentAssetListRequest $req) Retrieve the AI agent asset list
 * @method Models\DescribeAKAnalysisDetailResponse DescribeAKAnalysisDetail(Models\DescribeAKAnalysisDetailRequest $req) Access key alarm record AI analysis result details
 * @method Models\DescribeAbnormalCallRecordResponse DescribeAbnormalCallRecord(Models\DescribeAbnormalCallRecordRequest $req) Retrieve the call record list.
 * @method Models\DescribeAccessKeyAlarmResponse DescribeAccessKeyAlarm(Models\DescribeAccessKeyAlarmRequest $req) List of alarm records for access keys.
 * @method Models\DescribeAccessKeyAlarmDetailResponse DescribeAccessKeyAlarmDetail(Models\DescribeAccessKeyAlarmDetailRequest $req) Alarm Record Details for Access Key.
 * @method Models\DescribeAccessKeyAssetResponse DescribeAccessKeyAsset(Models\DescribeAccessKeyAssetRequest $req) Obtain user access key asset list.
 * @method Models\DescribeAccessKeyRiskResponse DescribeAccessKeyRisk(Models\DescribeAccessKeyRiskRequest $req) Access key risk record list.
 * @method Models\DescribeAccessKeyRiskDetailResponse DescribeAccessKeyRiskDetail(Models\DescribeAccessKeyRiskDetailRequest $req) Access Key Risk Record Details.
 * @method Models\DescribeAccessKeyUserDetailResponse DescribeAccessKeyUserDetail(Models\DescribeAccessKeyUserDetailRequest $req) Query the user's account details.
 * @method Models\DescribeAccessKeyUserListResponse DescribeAccessKeyUserList(Models\DescribeAccessKeyUserListRequest $req) Query the account list of a user.
 * @method Models\DescribeAlertListResponse DescribeAlertList(Models\DescribeAlertListRequest $req) This API is used to list all alarms in the alert center.
 * @method Models\DescribeAssetProcessListResponse DescribeAssetProcessList(Models\DescribeAssetProcessListRequest $req) Query the process list of host nodes under the exposed path in cloud boundary analysis.
 * @method Models\DescribeAssetRiskListResponse DescribeAssetRiskList(Models\DescribeAssetRiskListRequest $req) Cloud resource configuration risk list from asset perspective
 * @method Models\DescribeAssetViewVulRiskListResponse DescribeAssetViewVulRiskList(Models\DescribeAssetViewVulRiskListRequest $req) Obtain Vulnerability Risk List from Asset's Perspective
 * @method Models\DescribeCFWAssetStatisticsResponse DescribeCFWAssetStatistics(Models\DescribeCFWAssetStatisticsRequest $req) Cloud Defense Asset Center Statistics
 * @method Models\DescribeCSIPRiskStatisticsResponse DescribeCSIPRiskStatistics(Models\DescribeCSIPRiskStatisticsRequest $req) Obtain risk center risk overview example.
 * @method Models\DescribeCVMAssetInfoResponse DescribeCVMAssetInfo(Models\DescribeCVMAssetInfoRequest $req) This API is used to query details of CVM assets.
 * @method Models\DescribeCVMAssetsResponse DescribeCVMAssets(Models\DescribeCVMAssetsRequest $req) Retrieve the cvm list.
 * @method Models\DescribeCallRecordResponse DescribeCallRecord(Models\DescribeCallRecordRequest $req) Retrieve the call record list.
 * @method Models\DescribeCheckViewRisksResponse DescribeCheckViewRisks(Models\DescribeCheckViewRisksRequest $req) List of cloud resource configuration risks from a check perspective
 * @method Models\DescribeClusterAssetsResponse DescribeClusterAssets(Models\DescribeClusterAssetsRequest $req) This example shows you how to obtain the cluster list.
 * @method Models\DescribeClusterPodAssetsResponse DescribeClusterPodAssets(Models\DescribeClusterPodAssetsRequest $req) This API is used to list cluster pods.
 * @method Models\DescribeConfigCheckRulesResponse DescribeConfigCheckRules(Models\DescribeConfigCheckRulesRequest $req) Cloud Resource Configuration Risk Rule List Example
 * @method Models\DescribeDbAssetInfoResponse DescribeDbAssetInfo(Models\DescribeDbAssetInfoRequest $req) This API is used to query details of a database asset. 
 * @method Models\DescribeDbAssetsResponse DescribeDbAssets(Models\DescribeDbAssetsRequest $req) This API is used to list database assets.
 * @method Models\DescribeDomainAssetsResponse DescribeDomainAssets(Models\DescribeDomainAssetsRequest $req) This API is used to list domain assets. 
 * @method Models\DescribeExposeAssetCategoryResponse DescribeExposeAssetCategory(Models\DescribeExposeAssetCategoryRequest $req) Cloud boundary analysis asset category.
 * @method Models\DescribeExposePathResponse DescribeExposePath(Models\DescribeExposePathRequest $req) Query the node of the cloud boundary analysis path.
 * @method Models\DescribeExposuresResponse DescribeExposures(Models\DescribeExposuresRequest $req) Cloud Boundary Analysis Asset List.
 * @method Models\DescribeGatewayAssetsResponse DescribeGatewayAssets(Models\DescribeGatewayAssetsRequest $req) Obtain Gateway List
 * @method Models\DescribeHighBaseLineRiskListResponse DescribeHighBaseLineRiskList(Models\DescribeHighBaseLineRiskListRequest $req) Query the high-risk baseline risk list of host nodes under the exposed path in cloud boundary analysis.
 * @method Models\DescribeIaCFileListResponse DescribeIaCFileList(Models\DescribeIaCFileListRequest $req) Retrieve the IaC detection file list
 * @method Models\DescribeIaCFileOverviewResponse DescribeIaCFileOverview(Models\DescribeIaCFileOverviewRequest $req) Retrieve IaC detection file overview
 * @method Models\DescribeIaCFileReportResponse DescribeIaCFileReport(Models\DescribeIaCFileReportRequest $req) Retrieve the IaC detection file report
 * @method Models\DescribeIaCTokenListResponse DescribeIaCTokenList(Models\DescribeIaCTokenListRequest $req) Retrieve the IaC detection integration Token list
 * @method Models\DescribeKeySandboxCredentialResponse DescribeKeySandboxCredential(Models\DescribeKeySandboxCredentialRequest $req) Query credential details and return credential metadata and masked credential data. The access kind returns an Access array (original Key, masked Value), and the sts kind returns an STS object (original System, masked SecretID and SecretKey).
 * @method Models\DescribeKeySandboxCredentialListResponse DescribeKeySandboxCredentialList(Models\DescribeKeySandboxCredentialListRequest $req) Query the voucher list
 * @method Models\DescribeListenerListResponse DescribeListenerList(Models\DescribeListenerListRequest $req) This API is used to query the list of TCP listeners.
 * @method Models\DescribeNICAssetsResponse DescribeNICAssets(Models\DescribeNICAssetsRequest $req) Obtain Network Interface Card List
 * @method Models\DescribeOrganizationInfoResponse DescribeOrganizationInfo(Models\DescribeOrganizationInfoRequest $req) Query Group Account Details
 * @method Models\DescribeOrganizationUserInfoResponse DescribeOrganizationUserInfo(Models\DescribeOrganizationUserInfoRequest $req) Query Group Account User List
 * @method Models\DescribeOtherCloudAssetsResponse DescribeOtherCloudAssets(Models\DescribeOtherCloudAssetsRequest $req) Gets the list of other cloud assets
 * @method Models\DescribePublicIpAssetsResponse DescribePublicIpAssets(Models\DescribePublicIpAssetsRequest $req) This API is used to query the list of public IP assets.
 * @method Models\DescribeRepositoryImageAssetsResponse DescribeRepositoryImageAssets(Models\DescribeRepositoryImageAssetsRequest $req) Repository Image List
 * @method Models\DescribeRiskCallRecordResponse DescribeRiskCallRecord(Models\DescribeRiskCallRecordRequest $req) Retrieve risk call record list.
 * @method Models\DescribeRiskCenterAssetViewCFGRiskListResponse DescribeRiskCenterAssetViewCFGRiskList(Models\DescribeRiskCenterAssetViewCFGRiskListRequest $req) This API is used to query the list of configuration risks by assets.
 * @method Models\DescribeRiskCenterAssetViewPortRiskListResponse DescribeRiskCenterAssetViewPortRiskList(Models\DescribeRiskCenterAssetViewPortRiskListRequest $req) This API is used to query the list of port risks by assets.
 * @method Models\DescribeRiskCenterAssetViewVULRiskListResponse DescribeRiskCenterAssetViewVULRiskList(Models\DescribeRiskCenterAssetViewVULRiskListRequest $req) This API is used to query the list of vulnerabilities by assets.
 * @method Models\DescribeRiskCenterAssetViewWeakPasswordRiskListResponse DescribeRiskCenterAssetViewWeakPasswordRiskList(Models\DescribeRiskCenterAssetViewWeakPasswordRiskListRequest $req) This API is used to query the list of weak passwords by assets.
 * @method Models\DescribeRiskCenterCFGViewCFGRiskListResponse DescribeRiskCenterCFGViewCFGRiskList(Models\DescribeRiskCenterCFGViewCFGRiskListRequest $req) Obtain Configuration Risk List from Configuration's Perspective
 * @method Models\DescribeRiskCenterPortViewPortRiskListResponse DescribeRiskCenterPortViewPortRiskList(Models\DescribeRiskCenterPortViewPortRiskListRequest $req) This API is used to query the list of port risks by ports.
 * @method Models\DescribeRiskCenterServerRiskListResponse DescribeRiskCenterServerRiskList(Models\DescribeRiskCenterServerRiskListRequest $req) This API is used to query the list of services in risk.
 * @method Models\DescribeRiskCenterVULViewVULRiskListResponse DescribeRiskCenterVULViewVULRiskList(Models\DescribeRiskCenterVULViewVULRiskListRequest $req) This API is used to query the list of vulnerabilities by vulnerabilities.
 * @method Models\DescribeRiskCenterWebsiteRiskListResponse DescribeRiskCenterWebsiteRiskList(Models\DescribeRiskCenterWebsiteRiskListRequest $req) Obtain Content Risk List
 * @method Models\DescribeRiskDetailListResponse DescribeRiskDetailList(Models\DescribeRiskDetailListRequest $req) Risk detail list example
 * @method Models\DescribeRiskRuleDetailResponse DescribeRiskRuleDetail(Models\DescribeRiskRuleDetailRequest $req) Query risk rule details example
 * @method Models\DescribeRiskRulesResponse DescribeRiskRules(Models\DescribeRiskRulesRequest $req) Advanced configuration risk rule list illustrative example
 * @method Models\DescribeScanReportListResponse DescribeScanReportList(Models\DescribeScanReportListRequest $req) This API is used to get the list of scan reports.
 * @method Models\DescribeScanStatisticResponse DescribeScanStatistic(Models\DescribeScanStatisticRequest $req) Query the statistical information of cloud boundary analysis scanning results.
 * @method Models\DescribeScanTaskListResponse DescribeScanTaskList(Models\DescribeScanTaskListRequest $req) This API is used to get the list of scan tasks.
 * @method Models\DescribeSearchBugInfoResponse DescribeSearchBugInfo(Models\DescribeSearchBugInfoRequest $req) This API is used to query information of a vulnerability.
 * @method Models\DescribeSkillScanPayInfoResponse DescribeSkillScanPayInfo(Models\DescribeSkillScanPayInfoRequest $req) This API is used to query the billing information of Skill security detection, including order status, total quota, consumed quota, expiry time, and payment mode. It returns zero values (only TimeNow and BetaEndTime included) when no order exists. Trial orders can be claimed via ModifyTrialStatus(Module=9), and official orders are generated by the billing system.
 * @method Models\DescribeSkillScanResultResponse DescribeSkillScanResult(Models\DescribeSkillScanResultRequest $req) Query the security detection result of Skill. After successfully calling CreateSkillScan, use the returned ContentHash + EngineVersion to poll this interface and obtain the result. For the first time, poll 5 minutes after successful upload. If detection is not completed, poll every 1 minute afterward. The response distinguishes four types of status via the Status field: detection complete (SUCCESS), in-progress detection (SCANNING), no record (NOT_FOUND), and detection failed (FAILED). Note: The detection result is retained for 90 days. It will return NOT_FOUND when overdue.
 * @method Models\DescribeSourceIPAssetResponse DescribeSourceIPAsset(Models\DescribeSourceIPAssetRequest $req) This API is used to obtain user access key asset list (source IP perspective).
 * @method Models\DescribeSubUserInfoResponse DescribeSubUserInfo(Models\DescribeSubUserInfoRequest $req) Query the sub-account list of the group
 * @method Models\DescribeSubnetAssetsResponse DescribeSubnetAssets(Models\DescribeSubnetAssetsRequest $req) This API is used to get the list of subnets.
 * @method Models\DescribeTaskLogListResponse DescribeTaskLogList(Models\DescribeTaskLogListRequest $req) This API is used to get the list of scan task reports.
 * @method Models\DescribeTaskLogURLResponse DescribeTaskLogURL(Models\DescribeTaskLogURLRequest $req) This API is used to get the temp download link of a report. 
 * @method Models\DescribeTopAttackInfoResponse DescribeTopAttackInfo(Models\DescribeTopAttackInfoRequest $req) Query TOP attack information
 * @method Models\DescribeUebaRuleResponse DescribeUebaRule(Models\DescribeUebaRuleRequest $req) Query the user behavior analysis policy list
 * @method Models\DescribeUserCallRecordResponse DescribeUserCallRecord(Models\DescribeUserCallRecordRequest $req) Obtain account call record list.
 * @method Models\DescribeVULListResponse DescribeVULList(Models\DescribeVULListRequest $req) Security Center Risk Center - List of Vulnerabilities.
 * @method Models\DescribeVULRiskAdvanceCFGListResponse DescribeVULRiskAdvanceCFGList(Models\DescribeVULRiskAdvanceCFGListRequest $req) This API is used to query the advanced configuration of vulnerability scan.
 * @method Models\DescribeVULRiskDetailResponse DescribeVULRiskDetail(Models\DescribeVULRiskDetailRequest $req) Retrieve vulnerability details.
 * @method Models\DescribeVpcAssetsResponse DescribeVpcAssets(Models\DescribeVpcAssetsRequest $req) This API is used to get the list of VPCs.
 * @method Models\DescribeVulRiskListResponse DescribeVulRiskList(Models\DescribeVulRiskListRequest $req) Query the list of vulnerabilities of host nodes under the exposed path in cloud boundary analysis.
 * @method Models\DescribeVulViewVulRiskListResponse DescribeVulViewVulRiskList(Models\DescribeVulViewVulRiskListRequest $req) Obtain Vulnerability Risk List from Vulnerability's Perspective
 * @method Models\ModifyIaCTokenPeriodResponse ModifyIaCTokenPeriod(Models\ModifyIaCTokenPeriodRequest $req) This API is used to modify the storage cycle of the IaC detection integration Token.
 * @method Models\ModifyOrganizationAccountStatusResponse ModifyOrganizationAccountStatus(Models\ModifyOrganizationAccountStatusRequest $req) Modify group account status
 * @method Models\ModifyRiskCenterRiskStatusResponse ModifyRiskCenterRiskStatus(Models\ModifyRiskCenterRiskStatusRequest $req) This API is used to modify the status of a risk. 
 * @method Models\ModifyRiskCenterScanTaskResponse ModifyRiskCenterScanTask(Models\ModifyRiskCenterScanTaskRequest $req) Modify Risk Center Scan Task
 * @method Models\ModifyUebaRuleSwitchResponse ModifyUebaRuleSwitch(Models\ModifyUebaRuleSwitchRequest $req) Refresh the custom policy switch
 * @method Models\StopRiskCenterTaskResponse StopRiskCenterTask(Models\StopRiskCenterTaskRequest $req) This API is used to stop a scan task. 
 * @method Models\UpdateAccessKeyAlarmStatusResponse UpdateAccessKeyAlarmStatus(Models\UpdateAccessKeyAlarmStatusRequest $req) Tag the risk or Alarm as processed/ignored.
 * @method Models\UpdateAccessKeyRemarkResponse UpdateAccessKeyRemark(Models\UpdateAccessKeyRemarkRequest $req) Edit access key/Source IP remark.
 * @method Models\UpdateAlertStatusListResponse UpdateAlertStatusList(Models\UpdateAlertStatusListRequest $req) Batch alarm status process API
 */

class CsipClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "csip.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "csip";

    /**
     * @var string
     */
    protected $version = "2022-11-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("csip")."\\"."V20221121\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
