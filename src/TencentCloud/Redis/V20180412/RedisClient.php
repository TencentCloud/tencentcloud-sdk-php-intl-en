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

namespace TencentCloud\Redis\V20180412;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Redis\V20180412\Models as Models;

/**
* @method Models\CleanUpInstanceResponse CleanUpInstance(Models\CleanUpInstanceRequest $req) This API is used to deactivate an instance in the recycle bin immediately.
* @method Models\ClearInstanceResponse ClearInstance(Models\ClearInstanceRequest $req) This API is used to clear the data of a Redis instance.
* @method Models\CreateInstanceAccountResponse CreateInstanceAccount(Models\CreateInstanceAccountRequest $req) This API is used to create an instance sub-account.
* @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) This API is used to create a Redis instance.
* @method Models\DeleteInstanceAccountResponse DeleteInstanceAccount(Models\DeleteInstanceAccountRequest $req) This API is used to delete an instance sub-account.
* @method Models\DescribeAutoBackupConfigResponse DescribeAutoBackupConfig(Models\DescribeAutoBackupConfigRequest $req) This API is used to get the backup configuration.
* @method Models\DescribeBackupUrlResponse DescribeBackupUrl(Models\DescribeBackupUrlRequest $req) This API is used to query the download address of a backup RDB (it is during beta test and can be used only after you apply for the eligibility).
* @method Models\DescribeInstanceAccountResponse DescribeInstanceAccount(Models\DescribeInstanceAccountRequest $req) This API is used to view instance sub-account information.
* @method Models\DescribeInstanceBackupsResponse DescribeInstanceBackups(Models\DescribeInstanceBackupsRequest $req) This API is used to query the list of Redis instance backups.
* @method Models\DescribeInstanceDealDetailResponse DescribeInstanceDealDetail(Models\DescribeInstanceDealDetailRequest $req) This API is used to query the order information.
* @method Models\DescribeInstanceMonitorBigKeyResponse DescribeInstanceMonitorBigKey(Models\DescribeInstanceMonitorBigKeyRequest $req) This API is used to query the big key of an instance.
* @method Models\DescribeInstanceMonitorBigKeySizeDistResponse DescribeInstanceMonitorBigKeySizeDist(Models\DescribeInstanceMonitorBigKeySizeDistRequest $req) This API is used to query the big key size distribution of an instance.
* @method Models\DescribeInstanceMonitorBigKeyTypeDistResponse DescribeInstanceMonitorBigKeyTypeDist(Models\DescribeInstanceMonitorBigKeyTypeDistRequest $req) This API is used to query the big key type distribution of an instance
* @method Models\DescribeInstanceMonitorHotKeyResponse DescribeInstanceMonitorHotKey(Models\DescribeInstanceMonitorHotKeyRequest $req) This API is used to query the hot key of an instance.
* @method Models\DescribeInstanceMonitorSIPResponse DescribeInstanceMonitorSIP(Models\DescribeInstanceMonitorSIPRequest $req) This API is used to query the access source information of an instance.
* @method Models\DescribeInstanceMonitorTookDistResponse DescribeInstanceMonitorTookDist(Models\DescribeInstanceMonitorTookDistRequest $req) This API is used to query the big key size distribution of an instance
* @method Models\DescribeInstanceMonitorTopNCmdResponse DescribeInstanceMonitorTopNCmd(Models\DescribeInstanceMonitorTopNCmdRequest $req) This API is used to query an instance access command.
* @method Models\DescribeInstanceMonitorTopNCmdTookResponse DescribeInstanceMonitorTopNCmdTook(Models\DescribeInstanceMonitorTopNCmdTookRequest $req) This API is used to query the instance CPU time.
* @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) This API is used to query the list of parameter modifications.
* @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the list of instance parameters.
* @method Models\DescribeInstanceSecurityGroupResponse DescribeInstanceSecurityGroup(Models\DescribeInstanceSecurityGroupRequest $req) This API is used to query the security group information of an instance.
* @method Models\DescribeInstanceShardsResponse DescribeInstanceShards(Models\DescribeInstanceShardsRequest $req) This API is used to get the information of cluster edition instance shards.
* @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the list of Redis instances.
* @method Models\DescribeProductInfoResponse DescribeProductInfo(Models\DescribeProductInfoRequest $req) This API is used to query the purchasable capacity specifications of Redis instances in the specified AZ and instance type. If you are not in the whitelist for the AZ or instance type, you cannot view the details of the capacity specifications. To apply for the eligibility, please submit a ticket.
* @method Models\DescribeProjectSecurityGroupResponse DescribeProjectSecurityGroup(Models\DescribeProjectSecurityGroupRequest $req) This API is used to query the security group information of a project.
* @method Models\DescribeSlowLogResponse DescribeSlowLog(Models\DescribeSlowLogRequest $req) This API is used to query the slow log.
* @method Models\DescribeTaskInfoResponse DescribeTaskInfo(Models\DescribeTaskInfoRequest $req) This API is used to query a task result.
* @method Models\DescribeTaskListResponse DescribeTaskList(Models\DescribeTaskListRequest $req) This API is used to query the list of tasks.
* @method Models\DestroyPostpaidInstanceResponse DestroyPostpaidInstance(Models\DestroyPostpaidInstanceRequest $req) This API is used to terminate a pay-as-you-go instance.
* @method Models\DestroyPrepaidInstanceResponse DestroyPrepaidInstance(Models\DestroyPrepaidInstanceRequest $req) This API is used to return a monthly subscribed instance.
* @method Models\DisableReplicaReadonlyResponse DisableReplicaReadonly(Models\DisableReplicaReadonlyRequest $req) This API is used to disable read/write separation.
* @method Models\EnableReplicaReadonlyResponse EnableReplicaReadonly(Models\EnableReplicaReadonlyRequest $req) This API is used to enable read/write separation.
* @method Models\ManualBackupInstanceResponse ManualBackupInstance(Models\ManualBackupInstanceRequest $req) This API is used to manually back up a Redis instance.
* @method Models\ModfiyInstancePasswordResponse ModfiyInstancePassword(Models\ModfiyInstancePasswordRequest $req) This API is used to change the Redis password.
* @method Models\ModifyAutoBackupConfigResponse ModifyAutoBackupConfig(Models\ModifyAutoBackupConfigRequest $req) This API is used to set an auto-backup schedule.
* @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to modify instance information (renaming an instance is supported currently).
* @method Models\ModifyInstanceAccountResponse ModifyInstanceAccount(Models\ModifyInstanceAccountRequest $req) This API is used to modify an instance sub-account.
* @method Models\ModifyInstanceParamsResponse ModifyInstanceParams(Models\ModifyInstanceParamsRequest $req) This API is used to modify instance parameters.
* @method Models\ModifyNetworkConfigResponse ModifyNetworkConfig(Models\ModifyNetworkConfigRequest $req) This API is used to modify the network configuration of an instance.
* @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) This API is used to renew an instance.
* @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) This API is used to reset a password.
* @method Models\RestoreInstanceResponse RestoreInstance(Models\RestoreInstanceRequest $req) This API is used to restore a Redis instance.
* @method Models\StartupInstanceResponse StartupInstance(Models\StartupInstanceRequest $req) This API is used to deisolate an instance.
* @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) This API is used to upgrade an instance.
 */

class RedisClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "redis.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-12";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("redis")."\\"."V20180412\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
