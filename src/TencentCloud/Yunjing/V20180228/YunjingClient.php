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

namespace TencentCloud\Yunjing\V20180228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Yunjing\V20180228\Models as Models;

/**
 * @method Models\AddLoginWhiteListResponse AddLoginWhiteList(Models\AddLoginWhiteListRequest $req) This API is used to add a allowlist rule.
 * @method Models\AddMachineTagResponse AddMachineTag(Models\AddMachineTagRequest $req) This API is used to add a tag to a server.
 * @method Models\CloseProVersionResponse CloseProVersion(Models\CloseProVersionRequest $req) This API is used to deactivate CWP Pro.
 * @method Models\CreateOpenPortTaskResponse CreateOpenPortTask(Models\CreateOpenPortTaskRequest $req) This API is used to create a real-time port acquisition task.
 * @method Models\CreateProcessTaskResponse CreateProcessTask(Models\CreateProcessTaskRequest $req) This API is used to create a real-time process pulling task.
 * @method Models\CreateUsualLoginPlacesResponse CreateUsualLoginPlaces(Models\CreateUsualLoginPlacesRequest $req) This API is used to add one or more usual login locations.
 * @method Models\DeleteBruteAttacksResponse DeleteBruteAttacks(Models\DeleteBruteAttacksRequest $req) This API is used to delete brute force attack records.
 * @method Models\DeleteLoginWhiteListResponse DeleteLoginWhiteList(Models\DeleteLoginWhiteListRequest $req) This API is used to delete a allowlist rule.
 * @method Models\DeleteMachineResponse DeleteMachine(Models\DeleteMachineRequest $req) This API is used to uninstall the CWP agent.
 * @method Models\DeleteMachineTagResponse DeleteMachineTag(Models\DeleteMachineTagRequest $req) This API is used to remove a tag from a server.
 * @method Models\DeleteMaliciousRequestsResponse DeleteMaliciousRequests(Models\DeleteMaliciousRequestsRequest $req) This API is used to delete malicious request records.
 * @method Models\DeleteMalwaresResponse DeleteMalwares(Models\DeleteMalwaresRequest $req) This API is used to delete trojan records.
 * @method Models\DeleteNonlocalLoginPlacesResponse DeleteNonlocalLoginPlaces(Models\DeleteNonlocalLoginPlacesRequest $req) This API is used to delete unusual login location records.
 * @method Models\DeleteUsualLoginPlacesResponse DeleteUsualLoginPlaces(Models\DeleteUsualLoginPlacesRequest $req) This API is used to delete one or more usual login locations.
 * @method Models\DescribeAccountStatisticsResponse DescribeAccountStatistics(Models\DescribeAccountStatisticsRequest $req) This API is used to get the account statistics list.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to get the account list.
 * @method Models\DescribeAgentVulsResponse DescribeAgentVuls(Models\DescribeAgentVulsRequest $req) This API is used to get the list of vulnerabilities on a single server.
 * @method Models\DescribeAlarmAttributeResponse DescribeAlarmAttribute(Models\DescribeAlarmAttributeRequest $req) This API is used to get the alarm settings.
 * @method Models\DescribeBruteAttacksResponse DescribeBruteAttacks(Models\DescribeBruteAttacksRequest $req) This API is used to get the brute force attack event list.
 * @method Models\DescribeComponentInfoResponse DescribeComponentInfo(Models\DescribeComponentInfoRequest $req) This API is used to get the component information.
 * @method Models\DescribeComponentStatisticsResponse DescribeComponentStatistics(Models\DescribeComponentStatisticsRequest $req) This API is used to get the component statistics list.
 * @method Models\DescribeComponentsResponse DescribeComponents(Models\DescribeComponentsRequest $req) This API is used to get the component list.
 * @method Models\DescribeHistoryAccountsResponse DescribeHistoryAccounts(Models\DescribeHistoryAccountsRequest $req) This API is used to get the account change history list.
 * @method Models\DescribeImpactedHostsResponse DescribeImpactedHosts(Models\DescribeImpactedHostsRequest $req) This API is used to get the list of servers affected by a vulnerability.
 * @method Models\DescribeLoginWhiteListResponse DescribeLoginWhiteList(Models\DescribeLoginWhiteListRequest $req) This API is used to get the list of login allowlist entries.
 * @method Models\DescribeMachineInfoResponse DescribeMachineInfo(Models\DescribeMachineInfoRequest $req) This API is used to get server details.
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) This API is used to get the list of servers in a specified region.
 * @method Models\DescribeMaliciousRequestsResponse DescribeMaliciousRequests(Models\DescribeMaliciousRequestsRequest $req) This API is used to get malicious request data.
 * @method Models\DescribeMalwaresResponse DescribeMalwares(Models\DescribeMalwaresRequest $req) This API is used to get the list of trojan events.
 * @method Models\DescribeNonlocalLoginPlacesResponse DescribeNonlocalLoginPlaces(Models\DescribeNonlocalLoginPlacesRequest $req) This API is used to get unusual login events.
 * @method Models\DescribeOpenPortStatisticsResponse DescribeOpenPortStatistics(Models\DescribeOpenPortStatisticsRequest $req) This API is used to get the statistics on port usage
 * @method Models\DescribeOpenPortTaskStatusResponse DescribeOpenPortTaskStatus(Models\DescribeOpenPortTaskStatusRequest $req) This API is used to get the status of a real-time port pulling task.
 * @method Models\DescribeOpenPortsResponse DescribeOpenPorts(Models\DescribeOpenPortsRequest $req) This API is used to get the port list.

 * @method Models\DescribeOverviewStatisticsResponse DescribeOverviewStatistics(Models\DescribeOverviewStatisticsRequest $req) This API is used to get the overview statistics of CWP under the current account.
 * @method Models\DescribeProVersionInfoResponse DescribeProVersionInfo(Models\DescribeProVersionInfoRequest $req) This API is used to get the CWP Pro information.
 * @method Models\DescribeProcessStatisticsResponse DescribeProcessStatistics(Models\DescribeProcessStatisticsRequest $req) This API is used to get the process statistics list.
 * @method Models\DescribeProcessTaskStatusResponse DescribeProcessTaskStatus(Models\DescribeProcessTaskStatusRequest $req) This API is used to get the status of a real-time process pulling task.
 * @method Models\DescribeProcessesResponse DescribeProcesses(Models\DescribeProcessesRequest $req) This API is used to get the process list.
 * @method Models\DescribeSecurityDynamicsResponse DescribeSecurityDynamics(Models\DescribeSecurityDynamicsRequest $req) This API is used to get the security event message data.
 * @method Models\DescribeSecurityTrendsResponse DescribeSecurityTrends(Models\DescribeSecurityTrendsRequest $req) This API is used to get the security event statistics.
 * @method Models\DescribeTagMachinesResponse DescribeTagMachines(Models\DescribeTagMachinesRequest $req) This API is used to get the information of servers associated with a specified tag.
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) This API is used to get all server tags.
 * @method Models\DescribeUsualLoginPlacesResponse DescribeUsualLoginPlaces(Models\DescribeUsualLoginPlacesRequest $req) This API is used to query usual login locations.
 * @method Models\DescribeVulInfoResponse DescribeVulInfo(Models\DescribeVulInfoRequest $req) This API is used to get vulnerability details.
 * @method Models\DescribeVulScanResultResponse DescribeVulScanResult(Models\DescribeVulScanResultRequest $req) This API is used to get the vulnerability detection result.

 * @method Models\DescribeVulsResponse DescribeVuls(Models\DescribeVulsRequest $req) This API is used to get the vulnerability list.
 * @method Models\DescribeWeeklyReportBruteAttacksResponse DescribeWeeklyReportBruteAttacks(Models\DescribeWeeklyReportBruteAttacksRequest $req) This API is used to get the brute force attack data in the weekly CWP Pro report.
 * @method Models\DescribeWeeklyReportInfoResponse DescribeWeeklyReportInfo(Models\DescribeWeeklyReportInfoRequest $req) This API is used to get the details in the weekly CWP Pro report.
 * @method Models\DescribeWeeklyReportMalwaresResponse DescribeWeeklyReportMalwares(Models\DescribeWeeklyReportMalwaresRequest $req) This API is used to get the trojan data in the weekly CWP Pro report.
 * @method Models\DescribeWeeklyReportNonlocalLoginPlacesResponse DescribeWeeklyReportNonlocalLoginPlaces(Models\DescribeWeeklyReportNonlocalLoginPlacesRequest $req) This API is used to get the unusual login location data in the weekly CWP Pro report.
 * @method Models\DescribeWeeklyReportVulsResponse DescribeWeeklyReportVuls(Models\DescribeWeeklyReportVulsRequest $req) This API is used to get the vulnerability data in the weekly CWP Pro report.

 * @method Models\DescribeWeeklyReportsResponse DescribeWeeklyReports(Models\DescribeWeeklyReportsRequest $req) This API is used to get the weekly report list.
 * @method Models\EditTagsResponse EditTags(Models\EditTagsRequest $req) This API is used to add or edit tags.
 * @method Models\ExportBruteAttacksResponse ExportBruteAttacks(Models\ExportBruteAttacksRequest $req) This API is used to export brute force attack records into a CSV file.
 * @method Models\ExportMaliciousRequestsResponse ExportMaliciousRequests(Models\ExportMaliciousRequestsRequest $req) This API is used to export the malicious request file into a CSV file for download.
 * @method Models\ExportMalwaresResponse ExportMalwares(Models\ExportMalwaresRequest $req) This API is used to export trojan records into a CSV file.
 * @method Models\ExportNonlocalLoginPlacesResponse ExportNonlocalLoginPlaces(Models\ExportNonlocalLoginPlacesRequest $req) This API is used to export unusual login location events into a CSV file.
 * @method Models\IgnoreImpactedHostsResponse IgnoreImpactedHosts(Models\IgnoreImpactedHostsRequest $req) This API is used to ignore one or more vulnerabilities.
 * @method Models\MisAlarmNonlocalLoginPlacesResponse MisAlarmNonlocalLoginPlaces(Models\MisAlarmNonlocalLoginPlacesRequest $req) This API is used to set the current location as the usual login location.
 * @method Models\ModifyAlarmAttributeResponse ModifyAlarmAttribute(Models\ModifyAlarmAttributeRequest $req) This API is used to modify alarm settings.
 * @method Models\ModifyAutoOpenProVersionConfigResponse ModifyAutoOpenProVersionConfig(Models\ModifyAutoOpenProVersionConfigRequest $req) This API is used to set whether to automatically activate CWP Pro for newly added servers.
 * @method Models\ModifyLoginWhiteListResponse ModifyLoginWhiteList(Models\ModifyLoginWhiteListRequest $req) This API is used to edit a allowlist rule.
 * @method Models\ModifyProVersionRenewFlagResponse ModifyProVersionRenewFlag(Models\ModifyProVersionRenewFlagRequest $req) This API is used to modify the renewal flag of CWP Pro.
 * @method Models\OpenProVersionResponse OpenProVersion(Models\OpenProVersionRequest $req) This API is used to activate CWP Pro.
 * @method Models\RecoverMalwaresResponse RecoverMalwares(Models\RecoverMalwaresRequest $req) This API is used to recover isolated trojan files in a batch.
 * @method Models\RescanImpactedHostResponse RescanImpactedHost(Models\RescanImpactedHostRequest $req) This API is used to re-scan for vulnerabilities.
 * @method Models\SeparateMalwaresResponse SeparateMalwares(Models\SeparateMalwaresRequest $req) This API is used to isolate trojans.
 * @method Models\TrustMaliciousRequestResponse TrustMaliciousRequest(Models\TrustMaliciousRequestRequest $req) This API is used to trust a malicious request.
 * @method Models\TrustMalwaresResponse TrustMalwares(Models\TrustMalwaresRequest $req) This API is used to trust an identified trojan file.
 * @method Models\UntrustMaliciousRequestResponse UntrustMaliciousRequest(Models\UntrustMaliciousRequestRequest $req) This API is used to untrust a malicious request.
 * @method Models\UntrustMalwaresResponse UntrustMalwares(Models\UntrustMalwaresRequest $req) This API is used to untrust a trojan file.
 */

class YunjingClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "yunjing.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "yunjing";

    /**
     * @var string
     */
    protected $version = "2018-02-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("yunjing")."\\"."V20180228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
