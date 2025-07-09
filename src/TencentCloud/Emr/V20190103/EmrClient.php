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

namespace TencentCloud\Emr\V20190103;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Emr\V20190103\Models as Models;

/**
 * @method Models\AddUsersForUserManagerResponse AddUsersForUserManager(Models\AddUsersForUserManagerRequest $req) This API is available for clusters with OpenLDAP components configured.
This API is used to add user lists (user management).
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) This API is used to create an EMR cluster instance.
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) This API is used to create an EMR cluster instance.
 * @method Models\CreateSLInstanceResponse CreateSLInstance(Models\CreateSLInstanceRequest $req) This API is used to create a Serverless HBase instance.- If the API call is successful, a Serverless HBase instance will be created. If the instance creation request is successful, the InstanceId of the created instance and the RequestID of the request will be returned.- This is an asynchronous API. The operation is not completed immediately when the API call returns. The instance operation result can be viewed by calling DescribeInstancesList to view the StatusDesc status of the current instance.
 * @method Models\DescribeAutoScaleRecordsResponse DescribeAutoScaleRecords(Models\DescribeAutoScaleRecordsRequest $req) This API is used to inquiry detailed records of cluster autoscaling.
 * @method Models\DescribeClusterNodesResponse DescribeClusterNodes(Models\DescribeClusterNodesRequest $req) This API is used to query the information of nodes in a cluster.
 * @method Models\DescribeEmrApplicationStaticsResponse DescribeEmrApplicationStatics(Models\DescribeEmrApplicationStaticsRequest $req)  This API is used to query the Yarn application statistics.
 * @method Models\DescribeHiveQueriesResponse DescribeHiveQueries(Models\DescribeHiveQueriesRequest $req) This API is used to inquiry Hive query data.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the information of instances in a cluster.
 * @method Models\DescribeInstancesListResponse DescribeInstancesList(Models\DescribeInstancesListRequest $req) This API is used to query the cluster list.
 * @method Models\DescribeResourceScheduleResponse DescribeResourceSchedule(Models\DescribeResourceScheduleRequest $req) This API is used to query the data of YARN Resource Scheduling.
 * @method Models\DescribeSLInstanceResponse DescribeSLInstance(Models\DescribeSLInstanceRequest $req) This API is used to query the basic information of Serverless HBase instances.
 * @method Models\DescribeSLInstanceListResponse DescribeSLInstanceList(Models\DescribeSLInstanceListRequest $req) This API is used to query the detailed information of the Serverless HBase instance list.
 * @method Models\DescribeUsersForUserManagerResponse DescribeUsersForUserManager(Models\DescribeUsersForUserManagerRequest $req) This API is available for clusters with OpenLDAP components configured.
This API is used to export users in batches. For a Kerberos cluster, set `NeedKeytabInfo` to `true` to obtain the download link of the Keytab file. If `SupportDownLoadKeyTab` is `true`, but `DownLoadKeyTabUrl` is null, the Keytab file is not ready yet (being generated) in the backend.
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) This API is used to query price of instance creation.
 * @method Models\InquiryPriceRenewInstanceResponse InquiryPriceRenewInstance(Models\InquiryPriceRenewInstanceRequest $req) This API is used to query the price for renewal.
 * @method Models\InquiryPriceScaleOutInstanceResponse InquiryPriceScaleOutInstance(Models\InquiryPriceScaleOutInstanceRequest $req) This API is used to query price of scale-out.
 * @method Models\InquiryPriceUpdateInstanceResponse InquiryPriceUpdateInstance(Models\InquiryPriceUpdateInstanceRequest $req) This API is used to query price of scaling.
 * @method Models\ModifyResourceScheduleConfigResponse ModifyResourceScheduleConfig(Models\ModifyResourceScheduleConfigRequest $req) This API is used to modify the resource configuration of YARN Resource Scheduling.
 * @method Models\ModifyResourceSchedulerResponse ModifyResourceScheduler(Models\ModifyResourceSchedulerRequest $req) This API is used to modify the YARN resource scheduler (the change will take effect after you click Apply).
 * @method Models\ModifyResourcesTagsResponse ModifyResourcesTags(Models\ModifyResourcesTagsRequest $req) This API is used to forcibly modify tags.
 * @method Models\ModifySLInstanceResponse ModifySLInstance(Models\ModifySLInstanceRequest $req) This API is used to resize a Serverless HBase instance.- If the API call is successful, a Serverless HBase instance will be created. If the instance creation request is successful, the RequestID of the request will be returned.- This is an asynchronous API. The operation is not completed immediately when the API call returns. The instance operation result can be viewed by calling DescribeInstancesList to view the StatusDesc status of the current instance.
 * @method Models\ModifySLInstanceBasicResponse ModifySLInstanceBasic(Models\ModifySLInstanceBasicRequest $req) This API is used to modify the Serverless HBase instance name.
 * @method Models\ModifyUserManagerPwdResponse ModifyUserManagerPwd(Models\ModifyUserManagerPwdRequest $req) This API is used to change user password (user management).
 * @method Models\ScaleOutClusterResponse ScaleOutCluster(Models\ScaleOutClusterRequest $req) This API is used to scale out a cluster.
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) This API is used to scale out instances.
 * @method Models\StartStopServiceOrMonitorResponse StartStopServiceOrMonitor(Models\StartStopServiceOrMonitorRequest $req) This API is used to start, stop, or restart services.
 * @method Models\TerminateClusterNodesResponse TerminateClusterNodes(Models\TerminateClusterNodesRequest $req) This API is used to terminate cluster nodes.
 * @method Models\TerminateInstanceResponse TerminateInstance(Models\TerminateInstanceRequest $req) This API is used to terminate EMR instances. It is only supported in the official paid edition of EMR.
 * @method Models\TerminateSLInstanceResponse TerminateSLInstance(Models\TerminateSLInstanceRequest $req) This API is used to terminate a Serverless HBase instance.
 * @method Models\TerminateTasksResponse TerminateTasks(Models\TerminateTasksRequest $req) This API is used to terminate a task node.
 */

class EmrClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "emr.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "emr";

    /**
     * @var string
     */
    protected $version = "2019-01-03";

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
        $respClass = "TencentCloud"."\\".ucfirst("emr")."\\"."V20190103\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
