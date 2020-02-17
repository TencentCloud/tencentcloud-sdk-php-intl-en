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

namespace TencentCloud\Dts\V20180330;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dts\V20180330\Models as Models;

/**
* @method Models\CompleteMigrateJobResponse CompleteMigrateJob(Models\CompleteMigrateJobRequest $req) This API (CompleteMigrateJob) is used to complete a data migration task.
For tasks in incremental migration mode, you need to call this API before migration gets ready, so as to stop migrating incremental data.
If the task status queried through the (DescribeMigrateJobs) API is ready (status=8), you can call this API to complete the migration task.

* @method Models\CreateMigrateCheckJobResponse CreateMigrateCheckJob(Models\CreateMigrateCheckJobRequest $req) This API is used to create a migration check task.
Before migration, you should call this API to create a check. Migration will start only if the check succeeds. You can view the check result through the DescribeMigrateCheckJob API.
After successful check, if the migration task needs to be modified, a new check task should be created and migration will begin only after the new check succeeds.
* @method Models\CreateMigrateJobResponse CreateMigrateJob(Models\CreateMigrateJobRequest $req) This API (CreateMigrateJob) is used to create a data migration task.

For a finance zone linkage, please use the domain name dts.ap-shenzhen-fsi.tencentcloudapi.com.
* @method Models\CreateSyncCheckJobResponse CreateSyncCheckJob(Models\CreateSyncCheckJobRequest $req) Before the StartSyncJob API is called to start disaster recovery sync, this API should be called first to create a check. Data sync can start only if the check succeeds. You can view the check result through the DescribeSyncCheckJob API.
Sync can begin only if the check succeeds.
* @method Models\CreateSyncJobResponse CreateSyncJob(Models\CreateSyncJobRequest $req) This API (CreateSyncJob) is used to create a disaster recovery sync task.
After successful creation, check can be initiated through the CreateSyncCheckJob API. The sync task can be started through the StartSyncJob API only if the check succeeds.
* @method Models\DeleteMigrateJobResponse DeleteMigrateJob(Models\DeleteMigrateJobRequest $req) This API (DeleteMigrationJob) is used to delete a data migration task. If the task status queried through the DescribeMigrateJobs API is checking (status=3), running (status=7), ready (status=8), canceling (status=11), or completing (status=12), the task cannot be deleted.
* @method Models\DeleteSyncJobResponse DeleteSyncJob(Models\DeleteSyncJobRequest $req) This API is used to delete a disaster recovery sync task. Sync tasks that are running cannot be deleted.
* @method Models\DescribeMigrateCheckJobResponse DescribeMigrateCheckJob(Models\DescribeMigrateCheckJobRequest $req) This API is used to get the check result and query check status and progress after a check is created. 
If the check succeeds, you can call the StartMigrateJob API to start migration.
If the check fails, the reason can be queried. Please modify the migration configuration or adjust relevant parameters of the source/target instances through the ModifyMigrateJob API based on the error message.
* @method Models\DescribeMigrateJobsResponse DescribeMigrateJobs(Models\DescribeMigrateJobsRequest $req) This API is used to query data migration tasks.
For a finance zone linkage, please use the domain name https://dts.ap-shenzhen-fsi.tencentcloudapi.com.
* @method Models\DescribeSyncCheckJobResponse DescribeSyncCheckJob(Models\DescribeSyncCheckJobRequest $req) This API is used to get the check result after a disaster recovery sync check task is created through the CreateSyncCheckJob API. Check status and progress can be queried.
If the check succeeds, you can call the StartSyncJob API to start the sync task.
If the check fails, the reason will be returned. You can modify the configuration through the ModifySyncJob API and initiate check again.
It takes about 30 seconds to complete the check task. If the returned status is not "finished", the check has not been completed, and this API needs to be polled.
If Status=finished and CheckFlag=1, the check succeeds.
If Status=finished and CheckFlag !=1, the check fails.
* @method Models\DescribeSyncJobsResponse DescribeSyncJobs(Models\DescribeSyncJobsRequest $req) This API is used to query disaster recovery sync tasks initiated on the DTS platform.
* @method Models\ModifyMigrateJobResponse ModifyMigrateJob(Models\ModifyMigrateJobRequest $req) This API (ModifyMigrateJob) is used to modify a data migration task.
If the status of a migration task is creating (status=1), check succeeded (status=4), check failed (status=5), or migration failed (status=10), this API can be called to modify the task, but the type of the source and target instances and the region of the target instance cannot be modified.

For a finance zone linkage, please use the domain name dts.ap-shenzhen-fsi.tencentcloudapi.com.
* @method Models\ModifySyncJobResponse ModifySyncJob(Models\ModifySyncJobRequest $req) This API is used to modify a disaster recovery sync task. 
If the status of a sync task is creating, created, check succeeded, or check failed, this API can be called to modify the task. 
The information of the source and target instances cannot be modified, but the task name and the tables to be synced can.
* @method Models\StartMigrateJobResponse StartMigrateJob(Models\StartMigrateJobRequest $req) This API (StartMigrationJob) is used to start a migration task. After the API is called, non-scheduled migration tasks will start the migration immediately, while scheduled tasks will start the countdown.
Before calling this API, be sure to use the CreateMigrateCheckJob API to check the data migration task, which can be started only if its status queried through the DescribeMigrateJobs API is check succeeded (status=4).
* @method Models\StartSyncJobResponse StartSyncJob(Models\StartSyncJobRequest $req) This API is used to start a disaster recovery sync task after it is successfully checked through the CreateSyncCheckJob and DescribeSyncCheckJob APIs.
* @method Models\StopMigrateJobResponse StopMigrateJob(Models\StopMigrateJobRequest $req) This API (StopMigrateJob) is used to cancel a data migration task.
During migration, this API can be used to cancel migration if the task status queried through the DescribeMigrateJobs API is running (status=7) or ready (status=8), and the migration task will fail.
 */

class DtsClient extends AbstractClient
{
    protected $endpoint = "dts.tencentcloudapi.com";

    protected $version = "2018-03-30";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("dts")."\\"."V20180330\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
