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

namespace TencentCloud\Dts\V20211206;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dts\V20211206\Models as Models;

/**
 * @method Models\CompleteMigrateJobResponse CompleteMigrateJob(Models\CompleteMigrateJobRequest $req) This API is used to complete a data migration task.
For tasks in incremental migration mode, you need to call this API before migration gets ready for completion to stop migrating incremental data.
If the task status queried through the `DescribeMigrationJobs` API is ready (`Status` = `readyComplete), you can call this API to complete the migration task.

 * @method Models\ConfigureSyncJobResponse ConfigureSyncJob(Models\ConfigureSyncJobRequest $req) This API is used to configure a sync task.
 * @method Models\ContinueMigrateJobResponse ContinueMigrateJob(Models\ContinueMigrateJobRequest $req) This API is used to resume a paused migration task.
 * @method Models\ContinueSyncJobResponse ContinueSyncJob(Models\ContinueSyncJobRequest $req) This API is used to resume a paused data sync task.
 * @method Models\CreateCheckSyncJobResponse CreateCheckSyncJob(Models\CreateCheckSyncJobRequest $req) This API is used to verify a sync task by checking required parameters and peripheral configuration.
 * @method Models\CreateCompareTaskResponse CreateCompareTask(Models\CreateCompareTaskRequest $req) This API is used to create a data consistency check task. After the task is successfully created, its ID will be returned in the format of `dts-8yv4w2i1-cmp-37skmii9`, and you can call `StartCompare` to start it.
 * @method Models\CreateMigrateCheckJobResponse CreateMigrateCheckJob(Models\CreateMigrateCheckJobRequest $req) This API is used to verify a migration task.
Before migration, you should call this API to create a check task. Migration will start only if the check succeeds. You can view the check result through the `DescribeMigrationCheckJob` API.
After successful check, if the migration task needs to be modified, a new check task should be created, and migration will start only after the new check succeeds.

 * @method Models\CreateMigrationServiceResponse CreateMigrationService(Models\CreateMigrationServiceRequest $req) This API is used to purchase migration tasks. After the tasks are purchased successfully, a randomly generated list of task IDs will be returned. You can also call the `DescribeMigrationJobs` API to query the IDs of the successfully purchased tasks. Note that once a task is purchased successfully, the types and regions of the source and target databases cannot be changed.
 * @method Models\CreateSyncJobResponse CreateSyncJob(Models\CreateSyncJobRequest $req) This API is used to create a sync task.
 * @method Models\DeleteCompareTaskResponse DeleteCompareTask(Models\DeleteCompareTaskRequest $req) This API is used to delete a data consistency check task, which can be called when the task status is `success`, `failed`, or `canceled`.
 * @method Models\DescribeCheckSyncJobResultResponse DescribeCheckSyncJobResult(Models\DescribeCheckSyncJobResultRequest $req) This API is used to query the result of the sync check task and check the required parameters and peripheral configurations.
 * @method Models\DescribeCompareReportResponse DescribeCompareReport(Models\DescribeCompareReportRequest $req) This API is used to query the details of a data consistency check task.
 * @method Models\DescribeCompareTasksResponse DescribeCompareTasks(Models\DescribeCompareTasksRequest $req) This API is used to query the list of data consistency check tasks under the current task.
 * @method Models\DescribeMigrateDBInstancesResponse DescribeMigrateDBInstances(Models\DescribeMigrateDBInstancesRequest $req) This API is used to query migratable database instances.
 * @method Models\DescribeMigrationCheckJobResponse DescribeMigrationCheckJob(Models\DescribeMigrationCheckJobRequest $req) This API is used to get the check result and query the check status and progress after a check is created. 
If the check succeeds, you can call the `StartMigrateJob` API to start migration.
If the check fails, the cause can be queried. Modify the migration configuration or adjust relevant parameters of the source/target instances through the `ModifyMigrationJob` API based on the error message.
 * @method Models\DescribeMigrationDetailResponse DescribeMigrationDetail(Models\DescribeMigrationDetailRequest $req) This API is used to query the details of a migration task.
 * @method Models\DescribeMigrationJobsResponse DescribeMigrationJobs(Models\DescribeMigrationJobsRequest $req) This API is used to query the list of data migration tasks.
 * @method Models\DescribeSyncJobsResponse DescribeSyncJobs(Models\DescribeSyncJobsRequest $req) This API is used to query the information of a sync task.
 * @method Models\DestroyMigrateJobResponse DestroyMigrateJob(Models\DestroyMigrateJobRequest $req) This API is used to delete a data migration task. For a billed task, you must first call the `IsolateMigrateJob` API to isolate it and make sure that it is in **Isolated** status before calling this API to delete it. For a free task, you can directly call the `IsolateMigrateJob` API to delete it.
 * @method Models\DestroySyncJobResponse DestroySyncJob(Models\DestroySyncJobRequest $req) This API is used to delete a sync task. Only tasks in **Isolated** status can be completely deleted. After deletion, you can call the `DescribeSyncJobs` API to get the task list. If the deleted task is not in the list, it is deleted successfully.
 * @method Models\IsolateMigrateJobResponse IsolateMigrateJob(Models\IsolateMigrateJobRequest $req)  This API is used to isolate and return a data migration task. After calling this API, you can call the `DescribeMigrationJobs` API to query the latest task status. For a billed task, after isolating it, you can call `RecoverMigrationJob` to recover it or call `DestroyMigrateJob` to delete it. For a free task, calling this API will directly delete it permanently.
 * @method Models\IsolateSyncJobResponse IsolateSyncJob(Models\IsolateSyncJobRequest $req) This API is used to isolate a sync task. After the task is isolated, you can call the `DescribeSyncJobs` API to query its status, call `RecoverSyncJob` to recover it, or directly delete it. For a free task, calling this API will directly delete it permanently.
 * @method Models\ModifyCompareTaskResponse ModifyCompareTask(Models\ModifyCompareTaskRequest $req) This API is used to modify the parameters of a data consistency check task after it is created and before it starts.
 * @method Models\ModifyCompareTaskNameResponse ModifyCompareTaskName(Models\ModifyCompareTaskNameRequest $req) This API is used to rename a data consistency check task.
 * @method Models\ModifyMigrateJobSpecResponse ModifyMigrateJobSpec(Models\ModifyMigrateJobSpecRequest $req) This API is used to adjust the specification of a pay-as-you-go task. After calling this API, you can call the `DescribeMigrationJobs` API to query the latest task status.
 * @method Models\ModifyMigrateNameResponse ModifyMigrateName(Models\ModifyMigrateNameRequest $req) This API is used to rename a migration task.
 * @method Models\ModifyMigrationJobResponse ModifyMigrationJob(Models\ModifyMigrationJobRequest $req) This API is used to configure a migration task. After it is configured successfully, you can call the `CreateMigrationCheckJob` API to create a check task, and only after it passes the check can it be started.
 * @method Models\PauseMigrateJobResponse PauseMigrateJob(Models\PauseMigrateJobRequest $req) This API is used to pause a migration task.
 * @method Models\PauseSyncJobResponse PauseSyncJob(Models\PauseSyncJobRequest $req) This API is used to pause a data sync task.
 * @method Models\RecoverMigrateJobResponse RecoverMigrateJob(Models\RecoverMigrateJobRequest $req) This API is used to recover a data migration task in **Isolated** status. After calling this API, you can call the `DescribeMigrationJobs` API to query the latest task status.
 * @method Models\RecoverSyncJobResponse RecoverSyncJob(Models\RecoverSyncJobRequest $req) This API is used to recover a sync task in **Isolated** status. After calling this API, you can call the `DescribeSyncJobs` API to query the latest task status.
 * @method Models\ResizeSyncJobResponse ResizeSyncJob(Models\ResizeSyncJobRequest $req) This API is used to adjust the specification of a pay-as-you-go sync task. After this API is called, the backend needs to take about 3-5 minutes to implement the adjustment. You can call the `DescribeSyncJobs` API to query the latest task status.
 * @method Models\ResumeMigrateJobResponse ResumeMigrateJob(Models\ResumeMigrateJobRequest $req) This API is used to retry an abnormal or failed Redis data migration task. Note that this operation will skip the check stage and directly start the task, just like by calling `StartMigrationJob`. After calling this API, you can call the `DescribeMigrationJobs` API to query the latest task status.
 * @method Models\ResumeSyncJobResponse ResumeSyncJob(Models\ResumeSyncJobRequest $req) This API is used to retry a sync task after certain resolvable errors are reported. After calling this API, you can call the `DescribeSyncJobs` API to query the latest task status.
 * @method Models\SkipCheckItemResponse SkipCheckItem(Models\SkipCheckItemRequest $req) This API is used for the backend to skip a failed check item. Theoretically, to execute a migration task normally, any check step cannot be skipped, and the check must be passed. For products or links that support check item skipping, see [Check Item Overview](https://www.tencentcloud.com/document/product/571/42551).
 * @method Models\SkipSyncCheckItemResponse SkipSyncCheckItem(Models\SkipSyncCheckItemRequest $req) This API is used for the backend to skip a failed check item. Theoretically, to execute a sync task normally, any check step cannot be skipped, and the check must be passed. For products or links that support check item skipping, see [Check Item Overview](https://www.tencentcloud.com/document/product/571/42551).
 * @method Models\StartCompareResponse StartCompare(Models\StartCompareRequest $req) This API is used to start a data consistency check task after creating it by calling the `CreateCompareTask` API. After calling this API, you can call the `DescribeCompareTasks` API to query the latest task status.
 * @method Models\StartMigrateJobResponse StartMigrateJob(Models\StartMigrateJobRequest $req) This API (`StartMigrationJob`) is used to start a migration task. After calling this API, you can call the `DescribeMigrationJobs` API to query the latest task status.
 * @method Models\StartSyncJobResponse StartSyncJob(Models\StartSyncJobRequest $req) This API is used to start a sync task.
 * @method Models\StopCompareResponse StopCompare(Models\StopCompareRequest $req) This API is used to stop a data consistency check task.
 * @method Models\StopMigrateJobResponse StopMigrateJob(Models\StopMigrateJobRequest $req) This API is used to stop a data migration task.
After calling this API, you can call the `DescribeMigrationJobs` API to query the latest task status.
 * @method Models\StopSyncJobResponse StopSyncJob(Models\StopSyncJobRequest $req) This API is used to stop a sync task. After calling this API, you can call the `DescribeSyncJobs` API to query the latest task status.
 */

class DtsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dts.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dts";

    /**
     * @var string
     */
    protected $version = "2021-12-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("dts")."\\"."V20211206\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
