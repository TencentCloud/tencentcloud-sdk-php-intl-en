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
 * @method Models\AllocateWanAddressResponse AllocateWanAddress(Models\AllocateWanAddressRequest $req) This API is used to enable public network access.
 * @method Models\ApplyParamsTemplateResponse ApplyParamsTemplate(Models\ApplyParamsTemplateRequest $req) This API is used to apply a parameter template to instances.
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to bind a security group to instances in batches.
 * @method Models\ChangeInstanceRoleResponse ChangeInstanceRole(Models\ChangeInstanceRoleRequest $req) This API is used to modify the role of an instance in a replication group.
 * @method Models\ChangeMasterInstanceResponse ChangeMasterInstance(Models\ChangeMasterInstanceRequest $req) This API is used to switch with master instance in a replication group.
 * @method Models\ChangeReplicaToMasterResponse ChangeReplicaToMaster(Models\ChangeReplicaToMasterRequest $req) This API is used to promote a replica node group to a master node group or a replica node to a master node for an instance.
 * @method Models\CleanUpInstanceResponse CleanUpInstance(Models\CleanUpInstanceRequest $req) This API is used to eliminate an instance in the recycle bin immediately.
 * @method Models\ClearInstanceResponse ClearInstance(Models\ClearInstanceRequest $req) This API is used to clear the data of a Redis instance.
 * @method Models\CloneInstancesResponse CloneInstances(Models\CloneInstancesRequest $req) This API is used to clone a complete new instance based on the current instance backup file.
 * @method Models\CloseSSLResponse CloseSSL(Models\CloseSSLRequest $req) This API is used to disable SSL.
 * @method Models\CreateInstanceAccountResponse CreateInstanceAccount(Models\CreateInstanceAccountRequest $req) This API is used to create an instance sub-account.
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) This API is used to create an TencentDB or Redis instance.
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) This API is used to create a parameter template.
 * @method Models\DeleteInstanceAccountResponse DeleteInstanceAccount(Models\DeleteInstanceAccountRequest $req) This API is used to delete an instance sub-account.
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) This API is used to delete a parameter template.
 * @method Models\DescribeAutoBackupConfigResponse DescribeAutoBackupConfig(Models\DescribeAutoBackupConfigRequest $req) This API is used to get the configuration rules for an automatic backup.
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) This API is used to query the download address for a database backup file in the current region.
 * @method Models\DescribeBackupUrlResponse DescribeBackupUrl(Models\DescribeBackupUrlRequest $req) This API is used to query the download address of a backup RDB file.
 * @method Models\DescribeBandwidthRangeResponse DescribeBandwidthRange(Models\DescribeBandwidthRangeRequest $req) This API is used to query the information of instance bandwidth.
 * @method Models\DescribeCommonDBInstancesResponse DescribeCommonDBInstances(Models\DescribeCommonDBInstancesRequest $req) This API has been disused. It was used to query the list of Redis instance information.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query the security group details of an instance.
 * @method Models\DescribeInstanceAccountResponse DescribeInstanceAccount(Models\DescribeInstanceAccountRequest $req) This API is used to query the information of an instance sub-account.
 * @method Models\DescribeInstanceBackupsResponse DescribeInstanceBackups(Models\DescribeInstanceBackupsRequest $req) This API is used to query the backup list of an instance.
 * @method Models\DescribeInstanceDTSInfoResponse DescribeInstanceDTSInfo(Models\DescribeInstanceDTSInfoRequest $req) This API is used to query the DTS task details of an instance.
 * @method Models\DescribeInstanceDealDetailResponse DescribeInstanceDealDetail(Models\DescribeInstanceDealDetailRequest $req) This API is used to query the order information.
 * @method Models\DescribeInstanceMonitorBigKeyResponse DescribeInstanceMonitorBigKey(Models\DescribeInstanceMonitorBigKeyRequest $req) The API for querying big keys of a TencentDB for Redis instance was disused on October 31, 2022. For more information, see [API for Querying Instance Big Key Will Be Disused](https://intl.cloud.tencent.com/document/product/239/81005?from_cn_redirect=1).
 * @method Models\DescribeInstanceMonitorBigKeySizeDistResponse DescribeInstanceMonitorBigKeySizeDist(Models\DescribeInstanceMonitorBigKeySizeDistRequest $req) The API for querying big keys of a TencentDB for Redis instance was disused on October 31, 2022. For more information, see [API for Querying Instance Big Key Will Be Disused](https://intl.cloud.tencent.com/document/product/239/81005?from_cn_redirect=1).
 * @method Models\DescribeInstanceMonitorBigKeyTypeDistResponse DescribeInstanceMonitorBigKeyTypeDist(Models\DescribeInstanceMonitorBigKeyTypeDistRequest $req) The API for querying big keys of a TencentDB for Redis instance was disused on October 31, 2022. For more information, see [API for Querying Instance Big Key Will Be Disused](https://intl.cloud.tencent.com/document/product/239/81005?from_cn_redirect=1).
 * @method Models\DescribeInstanceMonitorHotKeyResponse DescribeInstanceMonitorHotKey(Models\DescribeInstanceMonitorHotKeyRequest $req) This API is used to query the hot key of an instance.
 * @method Models\DescribeInstanceMonitorSIPResponse DescribeInstanceMonitorSIP(Models\DescribeInstanceMonitorSIPRequest $req) This API is used to query the access source information of an instance.
 * @method Models\DescribeInstanceMonitorTookDistResponse DescribeInstanceMonitorTookDist(Models\DescribeInstanceMonitorTookDistRequest $req) This API is used to query the distribution of instance access duration.
 * @method Models\DescribeInstanceMonitorTopNCmdResponse DescribeInstanceMonitorTopNCmd(Models\DescribeInstanceMonitorTopNCmdRequest $req) This API is used to query an instance access command.
 * @method Models\DescribeInstanceMonitorTopNCmdTookResponse DescribeInstanceMonitorTopNCmdTook(Models\DescribeInstanceMonitorTopNCmdTookRequest $req) This API is used to query the instance CPU time.
 * @method Models\DescribeInstanceNodeInfoResponse DescribeInstanceNodeInfo(Models\DescribeInstanceNodeInfoRequest $req) This API is used to query the information of an instance node.
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) This API is used to query the list of parameter modifications.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the parameter list of an instance.
 * @method Models\DescribeInstanceSecurityGroupResponse DescribeInstanceSecurityGroup(Models\DescribeInstanceSecurityGroupRequest $req) This API is used to query the security group information of an instance.
 * @method Models\DescribeInstanceShardsResponse DescribeInstanceShards(Models\DescribeInstanceShardsRequest $req) This API is used to get the shard information of the instance on cluster architecture.
 * @method Models\DescribeInstanceZoneInfoResponse DescribeInstanceZoneInfo(Models\DescribeInstanceZoneInfoRequest $req) This API is used to query the details of a Redis node.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the list of Redis instances.
 * @method Models\DescribeMaintenanceWindowResponse DescribeMaintenanceWindow(Models\DescribeMaintenanceWindowRequest $req) This API is used to query instance maintenance window. The maintenance window specifies a time period during which compatible version upgrade, architecture upgrade, backend maintenance, and other operations can be performed to avoid affecting business.
 * @method Models\DescribeParamTemplateInfoResponse DescribeParamTemplateInfo(Models\DescribeParamTemplateInfoRequest $req) This API is used to query the details of a parameter template.
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) This API is used to query the list of parameter templates.
 * @method Models\DescribeProductInfoResponse DescribeProductInfo(Models\DescribeProductInfoRequest $req) This API is used to query purchasable TencentDB for Redis specifications in all regions.
 * @method Models\DescribeProjectSecurityGroupResponse DescribeProjectSecurityGroup(Models\DescribeProjectSecurityGroupRequest $req) This API is used to query the security group information of a project.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API is used to query the security group details of a project.
 * @method Models\DescribeProxySlowLogResponse DescribeProxySlowLog(Models\DescribeProxySlowLogRequest $req) This API is used to query the slow queries of the proxy.
 * @method Models\DescribeReplicationGroupResponse DescribeReplicationGroup(Models\DescribeReplicationGroupRequest $req) This API is used to query a replication group.
 * @method Models\DescribeSSLStatusResponse DescribeSSLStatus(Models\DescribeSSLStatusRequest $req) This API is used to query the SSL authentication information of an instance, such as enablement status, configuration status, and certificate address.
 * @method Models\DescribeSlowLogResponse DescribeSlowLog(Models\DescribeSlowLogRequest $req) This API is used to query the records of slow query.
 * @method Models\DescribeTaskInfoResponse DescribeTaskInfo(Models\DescribeTaskInfoRequest $req) This API is used to query the task result.
 * @method Models\DescribeTaskListResponse DescribeTaskList(Models\DescribeTaskListRequest $req) This API is used to query the task list information of a specified instance.
 * @method Models\DescribeTendisSlowLogResponse DescribeTendisSlowLog(Models\DescribeTendisSlowLogRequest $req) This API is used to query slow queries of a Tendis instance.
 * @method Models\DestroyPostpaidInstanceResponse DestroyPostpaidInstance(Models\DestroyPostpaidInstanceRequest $req) This API is used to terminate a pay-as-you-go instance.
 * @method Models\DestroyPrepaidInstanceResponse DestroyPrepaidInstance(Models\DestroyPrepaidInstanceRequest $req) This API is used to return a monthly subscribed instance.
 * @method Models\DisableReplicaReadonlyResponse DisableReplicaReadonly(Models\DisableReplicaReadonlyRequest $req) This API is used to disable read/write separation.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to unbind a security group from instances in batches.
 * @method Models\EnableReplicaReadonlyResponse EnableReplicaReadonly(Models\EnableReplicaReadonlyRequest $req) This API is used to enable read/write separation.
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) This API is used to query the price for purchasing an instance.
 * @method Models\InquiryPriceUpgradeInstanceResponse InquiryPriceUpgradeInstance(Models\InquiryPriceUpgradeInstanceRequest $req) This API is used to query the price for scaling an instance.
 * @method Models\KillMasterGroupResponse KillMasterGroup(Models\KillMasterGroupRequest $req) This API is used to simulate the failure.
 * @method Models\ManualBackupInstanceResponse ManualBackupInstance(Models\ManualBackupInstanceRequest $req) This API is used to manually back up a Redis instance.
 * @method Models\ModfiyInstancePasswordResponse ModfiyInstancePassword(Models\ModfiyInstancePasswordRequest $req) This API is used to modify the access password for an instance.
 * @method Models\ModifyAutoBackupConfigResponse ModifyAutoBackupConfig(Models\ModifyAutoBackupConfigRequest $req) This API is used to set the configuration for an automatic backup.
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) This API is used to modify the network information and address for downloading a backup file.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify the security groups bound to an instance.
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to modify instance information.
 * @method Models\ModifyInstanceAccountResponse ModifyInstanceAccount(Models\ModifyInstanceAccountRequest $req) This API is used to modify an instance sub-account.
 * @method Models\ModifyInstanceParamsResponse ModifyInstanceParams(Models\ModifyInstanceParamsRequest $req) This API is used to modify the parameters of TencentDB for Redis instances
 * @method Models\ModifyInstanceReadOnlyResponse ModifyInstanceReadOnly(Models\ModifyInstanceReadOnlyRequest $req) This API is used to set instance input mode.
 * @method Models\ModifyMaintenanceWindowResponse ModifyMaintenanceWindow(Models\ModifyMaintenanceWindowRequest $req) This API is used to modify the instance maintenance time. The maintenance time specifies a time period during which compatible version upgrade, architecture upgrade, backend maintenance, and other operations can be performed to avoid affecting business. Note: if the compatible version upgrade or architecture upgrade task has been initiated for an instance, its maintenance time cannot be modified.
 * @method Models\ModifyNetworkConfigResponse ModifyNetworkConfig(Models\ModifyNetworkConfigRequest $req) This API is used to modify the network configuration of an instance.
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) This API is used to modify a parameter template.
 * @method Models\OpenSSLResponse OpenSSL(Models\OpenSSLRequest $req) This API is used to enable SSL.
 * @method Models\ReleaseWanAddressResponse ReleaseWanAddress(Models\ReleaseWanAddressRequest $req) This API is used to disable public network access.
 * @method Models\RemoveReplicationInstanceResponse RemoveReplicationInstance(Models\RemoveReplicationInstanceRequest $req) This API is used to remove a member from a replication group.
 * @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) This API is used to renew an instance.
 * @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) This API is used to reset a password.
 * @method Models\RestoreInstanceResponse RestoreInstance(Models\RestoreInstanceRequest $req) This API is used to restore a Redis instance.
 * @method Models\StartupInstanceResponse StartupInstance(Models\StartupInstanceRequest $req) This API is used to deisolate an instance.
 * @method Models\SwitchInstanceVipResponse SwitchInstanceVip(Models\SwitchInstanceVipRequest $req) This API is used to swap the VIPs of instances for instance disaster recovery switch in scenarios where cross-AZ disaster recovery is supported through DTS. After the VIPs of the source and target instances are swapped, the target instance can be written into and the DTS sync task between them will be disconnected.
 * @method Models\SwitchProxyResponse SwitchProxy(Models\SwitchProxyRequest $req) This API is used to simulate the failure of a proxy node.
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) This API is used to modify the instance configuration.
 * @method Models\UpgradeInstanceVersionResponse UpgradeInstanceVersion(Models\UpgradeInstanceVersionRequest $req) This API is used to upgrade compatible instance version (for example, from Redis 2.8 to 4.0), or upgrade instance architecture (for example, from standard architecture to cluster architecture).
 * @method Models\UpgradeProxyVersionResponse UpgradeProxyVersion(Models\UpgradeProxyVersionRequest $req) This API is used to upgrade instance proxy version.
 * @method Models\UpgradeSmallVersionResponse UpgradeSmallVersion(Models\UpgradeSmallVersionRequest $req) This API is used to upgrade instance minor version.
 * @method Models\UpgradeVersionToMultiAvailabilityZonesResponse UpgradeVersionToMultiAvailabilityZones(Models\UpgradeVersionToMultiAvailabilityZonesRequest $req) This API is used to upgrade an instance to support multi-AZ deployment.
 */

class RedisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "redis.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "redis";

    /**
     * @var string
     */
    protected $version = "2018-04-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("redis")."\\"."V20180412\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
