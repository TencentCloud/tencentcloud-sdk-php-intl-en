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

namespace TencentCloud\Dlc\V20210125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dlc\V20210125\Models as Models;

/**
 * @method Models\CancelSparkSessionBatchSQLResponse CancelSparkSessionBatchSQL(Models\CancelSparkSessionBatchSQLRequest $req) This API is used to cancel a Spark SQL batch task.
 * @method Models\CancelTaskResponse CancelTask(Models\CancelTaskRequest $req) This API is used to cancel a task.
 * @method Models\CreateDataEngineResponse CreateDataEngine(Models\CreateDataEngineRequest $req) This API is used to create a data engine.
 * @method Models\CreateInternalTableResponse CreateInternalTable(Models\CreateInternalTableRequest $req) This API is used to create a managed internal table. It has been disused.
 * @method Models\CreateResultDownloadResponse CreateResultDownload(Models\CreateResultDownloadRequest $req) This API is used to create a query result download task.
 * @method Models\CreateSparkAppResponse CreateSparkApp(Models\CreateSparkAppRequest $req) This API is used to create a Spark job.
 * @method Models\CreateSparkAppTaskResponse CreateSparkAppTask(Models\CreateSparkAppTaskRequest $req) This API is used to start a Spark job.
 * @method Models\CreateSparkSessionBatchSQLResponse CreateSparkSessionBatchSQL(Models\CreateSparkSessionBatchSQLRequest $req) This API is used to submit a Spark SQL batch task to the job engine.
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) This API is used to create and execute a SQL task. (`CreateTasks` is recommended.)
 * @method Models\CreateTasksResponse CreateTasks(Models\CreateTasksRequest $req) This API is used to create and execute SQL tasks in batches.
 * @method Models\DeleteSparkAppResponse DeleteSparkApp(Models\DeleteSparkAppRequest $req) This API is used to delete a Spark job.
 * @method Models\DescribeEngineUsageInfoResponse DescribeEngineUsageInfo(Models\DescribeEngineUsageInfoRequest $req) This API is used to query the resource usage of a data engine based on its ID.
 * @method Models\DescribeForbiddenTableProResponse DescribeForbiddenTablePro(Models\DescribeForbiddenTableProRequest $req) This API is used to get the list of disabled table attributes (new).
 * @method Models\DescribeLakeFsDirSummaryResponse DescribeLakeFsDirSummary(Models\DescribeLakeFsDirSummaryRequest $req) This API is used to query the summary of a specified directory in a managed storage.
 * @method Models\DescribeLakeFsInfoResponse DescribeLakeFsInfo(Models\DescribeLakeFsInfoRequest $req) This API is used to query managed storage information.
 * @method Models\DescribeResultDownloadResponse DescribeResultDownload(Models\DescribeResultDownloadRequest $req) This API is used to get a query result download task.
 * @method Models\DescribeSparkAppJobResponse DescribeSparkAppJob(Models\DescribeSparkAppJobRequest $req) u200cThis API is used to query the information of a Spark job.
 * @method Models\DescribeSparkAppJobsResponse DescribeSparkAppJobs(Models\DescribeSparkAppJobsRequest $req) This API is used to query the list of Spark jobs.
 * @method Models\DescribeSparkAppTasksResponse DescribeSparkAppTasks(Models\DescribeSparkAppTasksRequest $req) This API is used to query the list of running task instances of a Spark job.
 * @method Models\DescribeSparkSessionBatchSqlLogResponse DescribeSparkSessionBatchSqlLog(Models\DescribeSparkSessionBatchSqlLogRequest $req) This API is used to obtain the logs of a Spark SQL batch task.
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) This API is used to query the result of a task.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) This API is used to query the list of tasks.
 * @method Models\DescribeUserRolesResponse DescribeUserRoles(Models\DescribeUserRolesRequest $req) This API is used to enumerate user roles.
 * @method Models\GenerateCreateMangedTableSqlResponse GenerateCreateMangedTableSql(Models\GenerateCreateMangedTableSqlRequest $req) This API is used to generate SQL statements for creating a managed table.
 * @method Models\ModifyGovernEventRuleResponse ModifyGovernEventRule(Models\ModifyGovernEventRuleRequest $req) This API is used to change data governance event thresholds.
 * @method Models\ModifySparkAppResponse ModifySparkApp(Models\ModifySparkAppRequest $req) This API is used to update a Spark job.
 * @method Models\ModifySparkAppBatchResponse ModifySparkAppBatch(Models\ModifySparkAppBatchRequest $req) This API is used to modify Spark job parameters in batches.
 * @method Models\SuspendResumeDataEngineResponse SuspendResumeDataEngine(Models\SuspendResumeDataEngineRequest $req) This API is used to suspend or start a data engine.
 * @method Models\SwitchDataEngineResponse SwitchDataEngine(Models\SwitchDataEngineRequest $req) This API is used to switch between the primary and standby clusters.
 * @method Models\UpdateRowFilterResponse UpdateRowFilter(Models\UpdateRowFilterRequest $req) This API is used to update row filters. Please note that it updates filters only but not catalogs, databases, or tables.
 */

class DlcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dlc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dlc";

    /**
     * @var string
     */
    protected $version = "2021-01-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("dlc")."\\"."V20210125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
