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

namespace TencentCloud\Rum\V20210622;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Rum\V20210622\Models as Models;

/**
 * @method Models\CreateLogExportResponse CreateLogExport(Models\CreateLogExportRequest $req) API domain name: `rum.tencentcloudapi.com`.

This API is used to create a log download task.

Default API request rate limit: 20 requests/sec.
 * @method Models\CreateOfflineLogConfigResponse CreateOfflineLogConfig(Models\CreateOfflineLogConfigRequest $req) This API is used to create an offline log listener to report offline logs of particular users.
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) This API is used to create a RUM application which belongs to a specific team.
 * @method Models\CreateReleaseFileResponse CreateReleaseFile(Models\CreateReleaseFileRequest $req) This API is used to create a file record for the specified project.
 * @method Models\CreateStarProjectResponse CreateStarProject(Models\CreateStarProjectRequest $req) This API is used to add a starred project.
 * @method Models\CreateTawInstanceResponse CreateTawInstance(Models\CreateTawInstanceRequest $req) This API is used to create a RUM business system.
 * @method Models\CreateWhitelistResponse CreateWhitelist(Models\CreateWhitelistRequest $req) This API is used to create an allowlist.
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) This API is used to delete an instance. The deleted instance cannot be recovered.
 * @method Models\DeleteLogExportResponse DeleteLogExport(Models\DeleteLogExportRequest $req) API domain name: `rum.tencentcloudapi.com`.

This API is used to delete a log download task.

Default API request rate limit: 20 requests/sec.
 * @method Models\DeleteOfflineLogConfigResponse DeleteOfflineLogConfig(Models\DeleteOfflineLogConfigRequest $req) This API is used to delete an offline RUM log listener. Then, offline logs of particular users will not be reported.
 * @method Models\DeleteOfflineLogRecordResponse DeleteOfflineLogRecord(Models\DeleteOfflineLogRecordRequest $req) This API is used to delete an offline log record.
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) This API is used to delete the specified RUM project.
 * @method Models\DeleteReleaseFileResponse DeleteReleaseFile(Models\DeleteReleaseFileRequest $req) This API is used to delete the specified sourcemap file.
 * @method Models\DeleteStarProjectResponse DeleteStarProject(Models\DeleteStarProjectRequest $req) This API is used to delete a starred project for the specified user.
 * @method Models\DeleteWhitelistResponse DeleteWhitelist(Models\DeleteWhitelistRequest $req) This API is used to delete an allowlist.
 * @method Models\DescribeDataResponse DescribeData(Models\DescribeDataRequest $req) This API is used to query the forwarding monitor.
 * @method Models\DescribeDataCustomUrlResponse DescribeDataCustomUrl(Models\DescribeDataCustomUrlRequest $req) This API is used to get the DescribeDataCustomUrl information.
 * @method Models\DescribeDataEventUrlResponse DescribeDataEventUrl(Models\DescribeDataEventUrlRequest $req) This API is used to get the DescribeDataEventUrl information.
 * @method Models\DescribeDataFetchProjectResponse DescribeDataFetchProject(Models\DescribeDataFetchProjectRequest $req) This API is used to get the `DescribeDataFetchProject` information and has been deprecated. Use `DescribeDataFetchUrl` instead.
 * @method Models\DescribeDataFetchUrlResponse DescribeDataFetchUrl(Models\DescribeDataFetchUrlRequest $req) This API is used to get the DescribeDataFetchUrl information.
 * @method Models\DescribeDataFetchUrlInfoResponse DescribeDataFetchUrlInfo(Models\DescribeDataFetchUrlInfoRequest $req) This API is used to get the DescribeDataFetchUrlInfo information.
 * @method Models\DescribeDataLogUrlInfoResponse DescribeDataLogUrlInfo(Models\DescribeDataLogUrlInfoRequest $req) This API is used to get the loginfo information.
 * @method Models\DescribeDataLogUrlStatisticsResponse DescribeDataLogUrlStatistics(Models\DescribeDataLogUrlStatisticsRequest $req) This API is used to get the LogUrlStatistics information.
 * @method Models\DescribeDataPerformancePageResponse DescribeDataPerformancePage(Models\DescribeDataPerformancePageRequest $req) This API is used to get the PerformancePage information.
 * @method Models\DescribeDataPerformanceProjectResponse DescribeDataPerformanceProject(Models\DescribeDataPerformanceProjectRequest $req) This API is used to get the PerformanceProject information.
 * @method Models\DescribeDataPvUrlInfoResponse DescribeDataPvUrlInfo(Models\DescribeDataPvUrlInfoRequest $req) This API is used to get the PvUrlInfo information.
 * @method Models\DescribeDataPvUrlStatisticsResponse DescribeDataPvUrlStatistics(Models\DescribeDataPvUrlStatisticsRequest $req) This API is used to get the DescribeDataPvUrlStatistics information.
 * @method Models\DescribeDataReportCountResponse DescribeDataReportCount(Models\DescribeDataReportCountRequest $req) This API is used to get the number of reported data entries for a project.
 * @method Models\DescribeDataSetUrlStatisticsResponse DescribeDataSetUrlStatistics(Models\DescribeDataSetUrlStatisticsRequest $req) This API is used to get the DescribeDataSetUrlStatistics information.
 * @method Models\DescribeDataStaticProjectResponse DescribeDataStaticProject(Models\DescribeDataStaticProjectRequest $req) This API is used to get the DescribeDataStaticProject information.
 * @method Models\DescribeDataStaticResourceResponse DescribeDataStaticResource(Models\DescribeDataStaticResourceRequest $req) This API is used to get the DescribeDataStaticResource information.
 * @method Models\DescribeDataStaticUrlResponse DescribeDataStaticUrl(Models\DescribeDataStaticUrlRequest $req) This API is used to get the DescribeDataStaticUrl information.
 * @method Models\DescribeDataWebVitalsPageResponse DescribeDataWebVitalsPage(Models\DescribeDataWebVitalsPageRequest $req) This API is used to get the DescribeDataWebVitalsPage information, which is about core user activities.
It includes the Web Vitals metric for the page loading performance.
 * @method Models\DescribeErrorResponse DescribeError(Models\DescribeErrorRequest $req) This API is used to get the homepage error information.
 * @method Models\DescribeLogExportsResponse DescribeLogExports(Models\DescribeLogExportsRequest $req) API domain name: `rum.tencentcloudapi.com`.

This API is used to get the list of log download tasks.

Default API request rate limit: 20 requests/sec.
 * @method Models\DescribeLogListResponse DescribeLogList(Models\DescribeLogListRequest $req) This API is used to get the log list. It has been deprecated. Use `DescribeRumLogList` instead.
 * @method Models\DescribeOfflineLogConfigsResponse DescribeOfflineLogConfigs(Models\DescribeOfflineLogConfigsRequest $req) This API is used to get the configuration of the set offline log listener and return the unique user ID.
 * @method Models\DescribeOfflineLogRecordsResponse DescribeOfflineLogRecords(Models\DescribeOfflineLogRecordsRequest $req) This API is used to get all (up to 100) offline log records.
 * @method Models\DescribeOfflineLogsResponse DescribeOfflineLogs(Models\DescribeOfflineLogsRequest $req) This API is used to get the specified offline log.
 * @method Models\DescribeProjectLimitsResponse DescribeProjectLimits(Models\DescribeProjectLimitsRequest $req) This API is used to get the sampling information of an application’s reporting APIs.
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) This API is used to get the list of projects (under teams created by an instance).
 * @method Models\DescribePvListResponse DescribePvList(Models\DescribePvListRequest $req) This API is used to get the list of PVs under a project.
 * @method Models\DescribeReleaseFileSignResponse DescribeReleaseFileSign(Models\DescribeReleaseFileSignRequest $req) This API is used to get the temporary key for uploaded file storage.
 * @method Models\DescribeReleaseFilesResponse DescribeReleaseFiles(Models\DescribeReleaseFilesRequest $req) This API is used to get the list of source maps of an application.
 * @method Models\DescribeRumGroupLogResponse DescribeRumGroupLog(Models\DescribeRumGroupLogRequest $req) This API is used to get the log aggregation information under a project.
 * @method Models\DescribeRumLogExportResponse DescribeRumLogExport(Models\DescribeRumLogExportRequest $req) This API is used to get the list of logs in a project (created by an instance).
 * @method Models\DescribeRumLogExportsResponse DescribeRumLogExports(Models\DescribeRumLogExportsRequest $req) This API is used to get the list of exported logs in a project.
 * @method Models\DescribeRumLogListResponse DescribeRumLogList(Models\DescribeRumLogListRequest $req) This API is used to get the list of logs in a project (created by an instance).
 * @method Models\DescribeRumStatsLogListResponse DescribeRumStatsLogList(Models\DescribeRumStatsLogListRequest $req) This API is used to get the list of logs in a project every minute.
 * @method Models\DescribeScoresResponse DescribeScores(Models\DescribeScoresRequest $req) This API is used to get the list of homepage scores.
 * @method Models\DescribeTawAreasResponse DescribeTawAreas(Models\DescribeTawAreasRequest $req) This API is used to query region information.
 * @method Models\DescribeUvListResponse DescribeUvList(Models\DescribeUvListRequest $req) This API is used to get the list of UVs under a project.
 * @method Models\DescribeWhitelistsResponse DescribeWhitelists(Models\DescribeWhitelistsRequest $req) This API is used to get the list of allowlists.
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to modify a RUM business system.
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) This API is used to modify the RUM application information.
 * @method Models\ModifyProjectLimitResponse ModifyProjectLimit(Models\ModifyProjectLimitRequest $req) This API is used to add or modify data reporting limit.
 * @method Models\ResumeInstanceResponse ResumeInstance(Models\ResumeInstanceRequest $req) This API is used to recover a RUM business system so that you can use the application to report data normally.
 * @method Models\ResumeProjectResponse ResumeProject(Models\ResumeProjectRequest $req) This API is used to recover an application and resume data reporting.
 * @method Models\StopInstanceResponse StopInstance(Models\StopInstanceRequest $req) This API is used to stop an instance.
 * @method Models\StopProjectResponse StopProject(Models\StopProjectRequest $req) This API is used to stop a project from reporting data.
 */

class RumClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "rum.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "rum";

    /**
     * @var string
     */
    protected $version = "2021-06-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("rum")."\\"."V20210622\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
