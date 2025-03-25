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
 * @method Models\ActivateSubscribeResponse ActivateSubscribe(Models\ActivateSubscribeRequest $req) This API is used to configure a data subscription, which can be called only for subscription instances in unconfigured status.
 * @method Models\CompleteMigrateJobResponse CompleteMigrateJob(Models\CompleteMigrateJobRequest $req) This API (CompleteMigrateJob) is used to complete a data migration task.
For tasks in incremental migration mode, you need to call this API before migration gets ready, so as to stop migrating incremental data.
If the task status queried through the (DescribeMigrateJobs) API is ready (status=8), you can call this API to complete the migration task.

 * @method Models\CreateMigrateCheckJobResponse CreateMigrateCheckJob(Models\CreateMigrateCheckJobRequest $req) This API is used to create a migration check task.
Before migration, you should call this API to create a check. Migration will start only if the check succeeds. You can view the check result through the `DescribeMigrateCheckJob` API.
After successful check, if the migration task needs to be modified, a new check task should be created and migration will begin only after the new check succeeds.

For a finance zone link, use the domain name https://dts.ap-shenzhen-fsi.tencentcloudapi.com.
 * @method Models\CreateMigrateJobResponse CreateMigrateJob(Models\CreateMigrateJobRequest $req) This API (CreateMigrateJob) is used to create a data migration task.

For a finance zone linkage, please use the domain name dts.ap-shenzhen-fsi.tencentcloudapi.com.
 * @method Models\CreateSubscribeResponse CreateSubscribe(Models\CreateSubscribeRequest $req) This API is used to create a data subscription instance.
 * @method Models\DeleteMigrateJobResponse DeleteMigrateJob(Models\DeleteMigrateJobRequest $req) This API (DeleteMigrationJob) is used to delete a data migration task. If the task status queried through the DescribeMigrateJobs API is checking (status=3), running (status=7), ready (status=8), canceling (status=11), or completing (status=12), the task cannot be deleted.
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) This API is used to query the execution result of a task.
 * @method Models\DescribeMigrateCheckJobResponse DescribeMigrateCheckJob(Models\DescribeMigrateCheckJobRequest $req) This API is used to get the check result and query check status and progress after a check is created. 
If the check succeeds, you can call the StartMigrateJob API to start migration.
If the check fails, the reason can be queried. Please modify the migration configuration or adjust relevant parameters of the source/target instances through the ModifyMigrateJob API based on the error message.
 * @method Models\DescribeMigrateJobsResponse DescribeMigrateJobs(Models\DescribeMigrateJobsRequest $req) This API is used to query data migration tasks.
For a finance zone linkage, please use the domain name https://dts.ap-shenzhen-fsi.tencentcloudapi.com.
 * @method Models\DescribeSubscribeConfResponse DescribeSubscribeConf(Models\DescribeSubscribeConfRequest $req) This API is used to query the subscription instance configuration.
 * @method Models\DescribeSubscribesResponse DescribeSubscribes(Models\DescribeSubscribesRequest $req) This API is used to get the information list of data subscription instances. Pagination is enabled by default with 20 results returned each time.
 * @method Models\IsolateSubscribeResponse IsolateSubscribe(Models\IsolateSubscribeRequest $req) This API is used to isolate an hourly billed subscription instance. After this API is called, the instance will become unavailable and billing will stop for it.
 * @method Models\ModifyMigrateJobResponse ModifyMigrateJob(Models\ModifyMigrateJobRequest $req) This API (ModifyMigrateJob) is used to modify a data migration task.
If the status of a migration task is creating (status=1), check succeeded (status=4), check failed (status=5), or migration failed (status=10), this API can be called to modify the task, but the type of the source and target instances and the region of the target instance cannot be modified.

For a finance zone linkage, please use the domain name dts.ap-shenzhen-fsi.tencentcloudapi.com.
 * @method Models\ModifySubscribeConsumeTimeResponse ModifySubscribeConsumeTime(Models\ModifySubscribeConsumeTimeRequest $req) This API is used to modify the consumption time point of a data subscription channel.
 * @method Models\ModifySubscribeNameResponse ModifySubscribeName(Models\ModifySubscribeNameRequest $req) This API is used to rename a data subscription instance.
 * @method Models\ModifySubscribeObjectsResponse ModifySubscribeObjects(Models\ModifySubscribeObjectsRequest $req) This API is used to modify the subscription rule of a data subscription channel.
 * @method Models\ModifySubscribeVipVportResponse ModifySubscribeVipVport(Models\ModifySubscribeVipVportRequest $req) This API is used to modify the IP and port number of a data subscription instance.
 * @method Models\OfflineIsolatedSubscribeResponse OfflineIsolatedSubscribe(Models\OfflineIsolatedSubscribeRequest $req) This API is used to deactivate an isolated data subscription instance.
 * @method Models\ResetSubscribeResponse ResetSubscribe(Models\ResetSubscribeRequest $req) This API is used to reset a data subscription instance. Once reset, an activated instance can be bound to other database instances through the `ActivateSubscribe` API.
 * @method Models\StartMigrateJobResponse StartMigrateJob(Models\StartMigrateJobRequest $req) This API (StartMigrationJob) is used to start a migration task. After the API is called, non-scheduled migration tasks will start the migration immediately, while scheduled tasks will start the countdown.
Before calling this API, be sure to use the CreateMigrateCheckJob API to check the data migration task, which can be started only if its status queried through the DescribeMigrateJobs API is check succeeded (status=4).
 * @method Models\StopMigrateJobResponse StopMigrateJob(Models\StopMigrateJobRequest $req) This API (StopMigrateJob) is used to cancel a data migration task.
During migration, this API can be used to cancel migration if the task status queried through the DescribeMigrateJobs API is running (status=7) or ready (status=8), and the migration task will fail.
 */

class DtsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dts.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dts";

    /**
     * @var string
     */
    protected $version = "2018-03-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("dts")."\\"."V20180330\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
