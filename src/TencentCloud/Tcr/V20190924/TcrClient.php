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

namespace TencentCloud\Tcr\V20190924;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcr\V20190924\Models as Models;

/**
 * @method Models\CheckInstanceResponse CheckInstance(Models\CheckInstanceRequest $req) This API is used to verify the information of the Enterprise Edition instance.
 * @method Models\CreateImmutableTagRulesResponse CreateImmutableTagRules(Models\CreateImmutableTagRulesRequest $req) This API is used to create the tag immutability rule.
 * @method Models\CreateMultipleSecurityPolicyResponse CreateMultipleSecurityPolicy(Models\CreateMultipleSecurityPolicyRequest $req) This API is used to create multiple public network access allowlist policies of the TCR instance.
 * @method Models\CreateReplicationInstanceResponse CreateReplicationInstance(Models\CreateReplicationInstanceRequest $req) This API is used to create a replication instance.
 * @method Models\DeleteImmutableTagRulesResponse DeleteImmutableTagRules(Models\DeleteImmutableTagRulesRequest $req)  This API is used to delete the tag immutability rule.
 * @method Models\DeleteMultipleSecurityPolicyResponse DeleteMultipleSecurityPolicy(Models\DeleteMultipleSecurityPolicyRequest $req) This API is used to delete multiple public network access allowlist policies of the instance.
 * @method Models\DescribeImmutableTagRulesResponse DescribeImmutableTagRules(Models\DescribeImmutableTagRulesRequest $req) This API is used to list the tag immutability rule.
 * @method Models\DescribeReplicationInstanceCreateTasksResponse DescribeReplicationInstanceCreateTasks(Models\DescribeReplicationInstanceCreateTasksRequest $req) This API is used to query the task status of creating a replication instance.
 * @method Models\DescribeReplicationInstanceSyncStatusResponse DescribeReplicationInstanceSyncStatus(Models\DescribeReplicationInstanceSyncStatusRequest $req) This API is used to query the synchronization status of a replication instance.
 * @method Models\DescribeReplicationInstancesResponse DescribeReplicationInstances(Models\DescribeReplicationInstancesRequest $req) This API is used to query the list of replication instances.
 * @method Models\ManageReplicationResponse ManageReplication(Models\ManageReplicationRequest $req) This API is used to manage the instance synchronization rule.
 * @method Models\ModifyImmutableTagRulesResponse ModifyImmutableTagRules(Models\ModifyImmutableTagRulesRequest $req) This API is used to update the tag immutability rule.
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to update instance information.
 */

class TcrClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcr.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcr";

    /**
     * @var string
     */
    protected $version = "2019-09-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcr")."\\"."V20190924\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
