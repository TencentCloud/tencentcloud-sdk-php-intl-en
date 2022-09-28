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

namespace TencentCloud\Dbbrain\V20210527;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dbbrain\V20210527\Models as Models;

/**
 * @method Models\CreateProxySessionKillTaskResponse CreateProxySessionKillTask(Models\CreateProxySessionKillTaskRequest $req) This API is used to create an async task of killing all proxy node connection sessions and is currently supported only for Redis. The async task ID is the returned value, which can be passed to the API `DescribeProxySessionKillTasks` as a parameter to query the execution status of the session killing task.
 * @method Models\DescribeDBDiagEventsResponse DescribeDBDiagEvents(Models\DescribeDBDiagEventsRequest $req) This API is used to obtain the diagnosis event list in a specified time period by risk level, instance ID, etc.
 * @method Models\DescribeDiagDBInstancesResponse DescribeDiagDBInstances(Models\DescribeDiagDBInstancesRequest $req) This API is used to get the instance information list. Please always select Guangzhou for `Region`.
 * @method Models\DescribeMySqlProcessListResponse DescribeMySqlProcessList(Models\DescribeMySqlProcessListRequest $req) This API is used to query the real-time thread list of a relational database.
 * @method Models\DescribeProxySessionKillTasksResponse DescribeProxySessionKillTasks(Models\DescribeProxySessionKillTasksRequest $req) This API is used to query the result of the session killing task executed by the Redis proxy node. The async task ID (an input parameter) is obtained after the API `CreateProxySessionKillTask` is successfully called. Currently, the only valid value of `product` is `redis`.
 * @method Models\DescribeRedisTopKeyPrefixListResponse DescribeRedisTopKeyPrefixList(Models\DescribeRedisTopKeyPrefixListRequest $req) This API is used to query the list of top key prefixes for Redis instances.
 * @method Models\DescribeSlowLogUserHostStatsResponse DescribeSlowLogUserHostStats(Models\DescribeSlowLogUserHostStatsRequest $req) This API is used to get the statistical distribution chart of slow log source addresses.
 * @method Models\DescribeTopSpaceSchemasResponse DescribeTopSpaceSchemas(Models\DescribeTopSpaceSchemasRequest $req) This API is used to get the real-time space statistics of top databases of an instance. The returned results are sorted by size by default.
 * @method Models\DescribeUserSqlAdviceResponse DescribeUserSqlAdvice(Models\DescribeUserSqlAdviceRequest $req) This API is used to get SQL statement optimization suggestions. It is free of charge for a limited time and will be charged after DBbrain is commercialized.
 */

class DbbrainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dbbrain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dbbrain";

    /**
     * @var string
     */
    protected $version = "2021-05-27";

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
        $respClass = "TencentCloud"."\\".ucfirst("dbbrain")."\\"."V20210527\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
