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

namespace TencentCloud\Pts\V20210728;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Pts\V20210728\Models as Models;

/**
 * @method Models\AbortCronJobsResponse AbortCronJobs(Models\AbortCronJobsRequest $req) This API is used to stop cron jobs.
 * @method Models\AbortJobResponse AbortJob(Models\AbortJobRequest $req) This API is used to stop test job.
 * @method Models\AdjustJobSpeedResponse AdjustJobSpeed(Models\AdjustJobSpeedRequest $req) This API is used to adjust the target RPS of a job.
 * @method Models\CopyScenarioResponse CopyScenario(Models\CopyScenarioRequest $req) This API is used to copy a scenario.
 * @method Models\CreateAlertChannelResponse CreateAlertChannel(Models\CreateAlertChannelRequest $req) This API is used to create an alert recipient group.
 * @method Models\CreateCronJobResponse CreateCronJob(Models\CreateCronJobRequest $req) This API is used to create a cron job.
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) This API is used to create an environment.
 * @method Models\CreateFileResponse CreateFile(Models\CreateFileRequest $req) This API is used to create a file.
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) This API is used to create a project.
 * @method Models\CreateScenarioResponse CreateScenario(Models\CreateScenarioRequest $req) This API is used to create a scenario.
 * @method Models\DeleteAlertChannelResponse DeleteAlertChannel(Models\DeleteAlertChannelRequest $req) This API is used to delete an alert recipient group.
 * @method Models\DeleteCronJobsResponse DeleteCronJobs(Models\DeleteCronJobsRequest $req) This API is used to delete cron jobs.
 * @method Models\DeleteEnvironmentsResponse DeleteEnvironments(Models\DeleteEnvironmentsRequest $req) This API is used to delete environments.
 * @method Models\DeleteFilesResponse DeleteFiles(Models\DeleteFilesRequest $req) This API is used to delete files.
 * @method Models\DeleteJobsResponse DeleteJobs(Models\DeleteJobsRequest $req) This API is used to delete jobs.
 * @method Models\DeleteProjectsResponse DeleteProjects(Models\DeleteProjectsRequest $req) This API is used to delete projects.
 * @method Models\DeleteScenariosResponse DeleteScenarios(Models\DeleteScenariosRequest $req) This API is used to delete scenarios.
 * @method Models\DescribeAlertChannelsResponse DescribeAlertChannels(Models\DescribeAlertChannelsRequest $req) This API is used to query alert recipient groups.
 * @method Models\DescribeAlertRecordsResponse DescribeAlertRecords(Models\DescribeAlertRecordsRequest $req) This API is used to query alert records.
 * @method Models\DescribeAvailableMetricsResponse DescribeAvailableMetrics(Models\DescribeAvailableMetricsRequest $req) This API is used to query all supported metrics.
 * @method Models\DescribeCheckSummaryResponse DescribeCheckSummary(Models\DescribeCheckSummaryRequest $req) This API is used to query checkpoint summary information.
 * @method Models\DescribeCronJobsResponse DescribeCronJobs(Models\DescribeCronJobsRequest $req) This API is used to list cron jobs, selecting all by default if a non-mandatory array parameter is empty.
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) This API is used to query the environment list.
 * @method Models\DescribeErrorSummaryResponse DescribeErrorSummary(Models\DescribeErrorSummaryRequest $req) This API is used to query error summary information.
 * @method Models\DescribeFilesResponse DescribeFiles(Models\DescribeFilesRequest $req) This API is used to query file list.
 * @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) This API is used to query job list.
 * @method Models\DescribeLabelValuesResponse DescribeLabelValues(Models\DescribeLabelValuesRequest $req) This API is used to query label values.
 * @method Models\DescribeMetricLabelWithValuesResponse DescribeMetricLabelWithValues(Models\DescribeMetricLabelWithValuesRequest $req) This API is used to query all labels and values of metrics
 * @method Models\DescribeNormalLogsResponse DescribeNormalLogs(Models\DescribeNormalLogsRequest $req) This API is used to query logs in performance testing, including engine logs and console logs.
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) The API is used to query project list.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query region list.
 * @method Models\DescribeRequestSummaryResponse DescribeRequestSummary(Models\DescribeRequestSummaryRequest $req) This API is used to query request summary information.
 * @method Models\DescribeSampleBatchQueryResponse DescribeSampleBatchQuery(Models\DescribeSampleBatchQueryRequest $req) This API is used to query metrics in batch and return metric content at a specific time point.
 * @method Models\DescribeSampleLogsResponse DescribeSampleLogs(Models\DescribeSampleLogsRequest $req) This API is used to query sampled request logs.
 * @method Models\DescribeSampleMatrixBatchQueryResponse DescribeSampleMatrixBatchQuery(Models\DescribeSampleMatrixBatchQueryRequest $req) This API is used to batch query metric matrices.
 * @method Models\DescribeSampleMatrixQueryResponse DescribeSampleMatrixQuery(Models\DescribeSampleMatrixQueryRequest $req) This API is used to query metric matrix.
 * @method Models\DescribeSampleQueryResponse DescribeSampleQuery(Models\DescribeSampleQueryRequest $req) This API is used to query metrics and return metric content at a specific time point.
 * @method Models\DescribeScenarioWithJobsResponse DescribeScenarioWithJobs(Models\DescribeScenarioWithJobsRequest $req) This API is used to query scenarios with executed jobs.
 * @method Models\DescribeScenariosResponse DescribeScenarios(Models\DescribeScenariosRequest $req) This API is used to query scenario list.
 * @method Models\GenerateTmpKeyResponse GenerateTmpKey(Models\GenerateTmpKeyRequest $req) This API is used to generate temporary COS credentials.
 * @method Models\RestartCronJobsResponse RestartCronJobs(Models\RestartCronJobsRequest $req) This API is used to restart cron jobs that have been aborted.
 * @method Models\StartJobResponse StartJob(Models\StartJobRequest $req) This API is used to create and start test job.
 * @method Models\UpdateCronJobResponse UpdateCronJob(Models\UpdateCronJobRequest $req) This API is used to update a cron job.
 * @method Models\UpdateEnvironmentResponse UpdateEnvironment(Models\UpdateEnvironmentRequest $req) This API is used to update environments.
 * @method Models\UpdateFileScenarioRelationResponse UpdateFileScenarioRelation(Models\UpdateFileScenarioRelationRequest $req) This API is used to update relation between files and scenarios.
 * @method Models\UpdateJobResponse UpdateJob(Models\UpdateJobRequest $req) This API is used to update a job.
 * @method Models\UpdateProjectResponse UpdateProject(Models\UpdateProjectRequest $req) This API is used to update a project.
 * @method Models\UpdateScenarioResponse UpdateScenario(Models\UpdateScenarioRequest $req) This API is used to update a scenario.
 */

class PtsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "pts.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "pts";

    /**
     * @var string
     */
    protected $version = "2021-07-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("pts")."\\"."V20210728\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
