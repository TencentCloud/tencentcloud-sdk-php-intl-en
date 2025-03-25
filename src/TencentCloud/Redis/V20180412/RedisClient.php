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
 * @method Models\AddReplicationInstanceResponse AddReplicationInstance(Models\AddReplicationInstanceRequest $req) This API is used to add an instance member to the global replication group.
 * @method Models\AllocateWanAddressResponse AllocateWanAddress(Models\AllocateWanAddressRequest $req) This API is used to enable public network access for instances.
 * @method Models\ApplyParamsTemplateResponse ApplyParamsTemplate(Models\ApplyParamsTemplateRequest $req) This API is used to apply parameter templates to instances.
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to bind a security group to one or more database instances. When you create an instance without configuring a security group, it is recommended to bind a security group through this API.
 * @method Models\ChangeInstanceRoleResponse ChangeInstanceRole(Models\ChangeInstanceRoleRequest $req) This API is used to change the role of an instance in a replication group.
 * @method Models\ChangeMasterInstanceResponse ChangeMasterInstance(Models\ChangeMasterInstanceRequest $req) This API is used to set a read-only instance in a replication group as a master instance.
 * @method Models\ChangeReplicaToMasterResponse ChangeReplicaToMaster(Models\ChangeReplicaToMasterRequest $req) This API is used to promote a replica node group to a master node group or a replica node to a master node for an instance.
 * @method Models\CleanUpInstanceResponse CleanUpInstance(Models\CleanUpInstanceRequest $req) This API is used to immediately terminate instances in the recycle bin.
 * @method Models\ClearInstanceResponse ClearInstance(Models\ClearInstanceRequest $req) This API is used to clear instance data.
 * @method Models\CloneInstancesResponse CloneInstances(Models\CloneInstancesRequest $req) This API is used to clone a complete new instance based on the current instance backup file.
 * @method Models\CloseSSLResponse CloseSSL(Models\CloseSSLRequest $req) This API is used to disable SSL encryption and authentication.
 * @method Models\CreateInstanceAccountResponse CreateInstanceAccount(Models\CreateInstanceAccountRequest $req) This API is used to customize the account for accessing instances.
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) This API is used to create an TencentDB or Redis instance.
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) This API is used to create a parameter template.
 * @method Models\CreateReplicationGroupResponse CreateReplicationGroup(Models\CreateReplicationGroupRequest $req) This API is used to create a replication group.
 * @method Models\DeleteInstanceAccountResponse DeleteInstanceAccount(Models\DeleteInstanceAccountRequest $req) This API is used to delete instance sub-accounts.
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) This API is used to delete a parameter template.
 * @method Models\DeleteReplicationInstanceResponse DeleteReplicationInstance(Models\DeleteReplicationInstanceRequest $req) This API is used to remove a replication group member. Note: This API is being deprecated. Use [RemoveReplicationInstance](https://intl.cloud.tencent.com/document/product/239/90099?from_cn_redirect=1) instead.
 * @method Models\DescribeAutoBackupConfigResponse DescribeAutoBackupConfig(Models\DescribeAutoBackupConfigRequest $req) This API is used to get the configuration rules for an automatic backup.
 * @method Models\DescribeBackupDetailResponse DescribeBackupDetail(Models\DescribeBackupDetailRequest $req) This API is used to query the backup details of an instance.
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) This API is used to query the download address for a database backup file in the current region.
 * @method Models\DescribeBackupUrlResponse DescribeBackupUrl(Models\DescribeBackupUrlRequest $req) This API is used to query the download address of a backup RDB file.
 * @method Models\DescribeBandwidthRangeResponse DescribeBandwidthRange(Models\DescribeBandwidthRangeRequest $req) This API is used to query the information of instance bandwidth.
 * @method Models\DescribeCommonDBInstancesResponse DescribeCommonDBInstances(Models\DescribeCommonDBInstancesRequest $req) This API is used to query the list of Redis instances. It is now deprecated.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query the security group details of an instance.
 * @method Models\DescribeGlobalReplicationAreaResponse DescribeGlobalReplicationArea(Models\DescribeGlobalReplicationAreaRequest $req) This API is used to query the supported regions for global replication.
 * @method Models\DescribeInstanceAccountResponse DescribeInstanceAccount(Models\DescribeInstanceAccountRequest $req) This API is used to query the information of an instance sub-account.
 * @method Models\DescribeInstanceBackupsResponse DescribeInstanceBackups(Models\DescribeInstanceBackupsRequest $req) This API is used to query the backup list of an instance.
 * @method Models\DescribeInstanceDTSInfoResponse DescribeInstanceDTSInfo(Models\DescribeInstanceDTSInfoRequest $req) This API is used to query instance DTS information.
 * @method Models\DescribeInstanceDealDetailResponse DescribeInstanceDealDetail(Models\DescribeInstanceDealDetailRequest $req) This API is used to query the order information.
 * @method Models\DescribeInstanceEventsResponse DescribeInstanceEvents(Models\DescribeInstanceEventsRequest $req) This API is used to query the event information on a TecentDB for Redis instance.
 * @method Models\DescribeInstanceLogDeliveryResponse DescribeInstanceLogDelivery(Models\DescribeInstanceLogDeliveryRequest $req) This API is used to query the instance log shipping configuration.
 * @method Models\DescribeInstanceMonitorBigKeyResponse DescribeInstanceMonitorBigKey(Models\DescribeInstanceMonitorBigKeyRequest $req) The API for querying big keys of a TencentDB for Redis instance was disused on October 31, 2022. For more information, see [API for Querying Instance Big Key Will Be Disused](https://intl.cloud.tencent.com/document/product/239/81005?from_cn_redirect=1).
 * @method Models\DescribeInstanceMonitorBigKeySizeDistResponse DescribeInstanceMonitorBigKeySizeDist(Models\DescribeInstanceMonitorBigKeySizeDistRequest $req) The API for querying big keys of a TencentDB for Redis instance was disused on October 31, 2022. For more information, see [API for Querying Instance Big Key Will Be Disused](https://intl.cloud.tencent.com/document/product/239/81005?from_cn_redirect=1).
 * @method Models\DescribeInstanceMonitorBigKeyTypeDistResponse DescribeInstanceMonitorBigKeyTypeDist(Models\DescribeInstanceMonitorBigKeyTypeDistRequest $req) The API for querying big keys of a TencentDB for Redis instance was disused on October 31, 2022. For more information, see [API for Querying Instance Big Key Will Be Disused](https://intl.cloud.tencent.com/document/product/239/81005?from_cn_redirect=1).
 * @method Models\DescribeInstanceMonitorHotKeyResponse DescribeInstanceMonitorHotKey(Models\DescribeInstanceMonitorHotKeyRequest $req) This API is used to query instance hot keys.
 * @method Models\DescribeInstanceMonitorSIPResponse DescribeInstanceMonitorSIP(Models\DescribeInstanceMonitorSIPRequest $req) This API is used to query the access source information of an instance.
 * @method Models\DescribeInstanceMonitorTookDistResponse DescribeInstanceMonitorTookDist(Models\DescribeInstanceMonitorTookDistRequest $req) This API is used to query the time distribution of instance access.
 * @method Models\DescribeInstanceMonitorTopNCmdResponse DescribeInstanceMonitorTopNCmd(Models\DescribeInstanceMonitorTopNCmdRequest $req) This API is used to query an instance access command.
 * @method Models\DescribeInstanceMonitorTopNCmdTookResponse DescribeInstanceMonitorTopNCmdTook(Models\DescribeInstanceMonitorTopNCmdTookRequest $req) This API is used to query the instance CPU time.
 * @method Models\DescribeInstanceNodeInfoResponse DescribeInstanceNodeInfo(Models\DescribeInstanceNodeInfoRequest $req) This API is used to query the information of an instance node.
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) This API is used to query the list of parameter modifications.
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) This API is used to query the parameter list of an instance.
 * @method Models\DescribeInstanceSecurityGroupResponse DescribeInstanceSecurityGroup(Models\DescribeInstanceSecurityGroupRequest $req) This API is used to query the security group information of an instance.
 * @method Models\DescribeInstanceShardsResponse DescribeInstanceShards(Models\DescribeInstanceShardsRequest $req) This API is used to get the shard information of the instance on cluster architecture.
 * @method Models\DescribeInstanceSpecBandwidthResponse DescribeInstanceSpecBandwidth(Models\DescribeInstanceSpecBandwidthRequest $req) This API is used to query or calculate bandwidth specifications.
 * @method Models\DescribeInstanceSupportFeatureResponse DescribeInstanceSupportFeature(Models\DescribeInstanceSupportFeatureRequest $req) This API (DescribeInstanceSupportFeature) is used to query the supported features of the instance.
 * @method Models\DescribeInstanceZoneInfoResponse DescribeInstanceZoneInfo(Models\DescribeInstanceZoneInfoRequest $req) This API is used to query the details of a Redis node.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the list of Redis instances.
 * @method Models\DescribeMaintenanceWindowResponse DescribeMaintenanceWindow(Models\DescribeMaintenanceWindowRequest $req) This API is used to query the instance maintenance window. Instances that require the version or architecture upgrade will undergo time switching during the maintenance window.
 * @method Models\DescribeParamTemplateInfoResponse DescribeParamTemplateInfo(Models\DescribeParamTemplateInfoRequest $req) This API is used to query the details of a parameter template.
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) This API is used to query the list of parameter templates.
 * @method Models\DescribeProductInfoResponse DescribeProductInfo(Models\DescribeProductInfoRequest $req) This API is used to query purchasable TencentDB for Redis specifications in all regions.
 * @method Models\DescribeProjectSecurityGroupResponse DescribeProjectSecurityGroup(Models\DescribeProjectSecurityGroupRequest $req) This API is used to query project security group information.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API is used to query the security group details of a project.
 * @method Models\DescribeProxySlowLogResponse DescribeProxySlowLog(Models\DescribeProxySlowLogRequest $req) This API is used to query the slow queries of the proxy.
 * @method Models\DescribeRedisClusterOverviewResponse DescribeRedisClusterOverview(Models\DescribeRedisClusterOverviewRequest $req) This API is used to query the overview information of a dedicated Redis cluster.
 * @method Models\DescribeRedisClustersResponse DescribeRedisClusters(Models\DescribeRedisClustersRequest $req) This API is used to query the list of dedicated Redis clusters.
 * @method Models\DescribeReplicationGroupResponse DescribeReplicationGroup(Models\DescribeReplicationGroupRequest $req) This API is used to query a replication group.
 * @method Models\DescribeReplicationGroupInstanceResponse DescribeReplicationGroupInstance(Models\DescribeReplicationGroupInstanceRequest $req) This API is used to query replication group information.
 * @method Models\DescribeSSLStatusResponse DescribeSSLStatus(Models\DescribeSSLStatusRequest $req) This API is used to query the SSL authentication information of an instance, such as enablement status, configuration status, and certificate address.
 * @method Models\DescribeSlowLogResponse DescribeSlowLog(Models\DescribeSlowLogRequest $req) This API is used to query the records of slow query.
 * @method Models\DescribeTaskInfoResponse DescribeTaskInfo(Models\DescribeTaskInfoRequest $req) This API is used to get the execution of a specified task.
 * @method Models\DescribeTaskListResponse DescribeTaskList(Models\DescribeTaskListRequest $req) This API is used to query the task list data for the last 30 days.
 * @method Models\DescribeTendisSlowLogResponse DescribeTendisSlowLog(Models\DescribeTendisSlowLogRequest $req) This API is used to query the slow query logs of a Tendis instance.
 * @method Models\DestroyPostpaidInstanceResponse DestroyPostpaidInstance(Models\DestroyPostpaidInstanceRequest $req) This API is used to terminate pay-as-you-go instances.
 * @method Models\DestroyPrepaidInstanceResponse DestroyPrepaidInstance(Models\DestroyPrepaidInstanceRequest $req) This API is used to return Redis instances with monthly subscription.
 * @method Models\DisableReplicaReadonlyResponse DisableReplicaReadonly(Models\DisableReplicaReadonlyRequest $req) This API is used to disable read/write separation.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to unbind security groups from instances in batches.
 * @method Models\EnableReplicaReadonlyResponse EnableReplicaReadonly(Models\EnableReplicaReadonlyRequest $req) This API is used to enable read/write separation.
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) This API is used to query the price of new instances.
 * @method Models\InquiryPriceUpgradeInstanceResponse InquiryPriceUpgradeInstance(Models\InquiryPriceUpgradeInstanceRequest $req) This API is used to query the price for instance scale-out.
 * @method Models\KillMasterGroupResponse KillMasterGroup(Models\KillMasterGroupRequest $req) This API is used to simulate a fault.
 * @method Models\ManualBackupInstanceResponse ManualBackupInstance(Models\ManualBackupInstanceRequest $req) This API is used to manually back up a Redis instance.
 * @method Models\ModfiyInstancePasswordResponse ModfiyInstancePassword(Models\ModfiyInstancePasswordRequest $req) This API is used to change the instance access password. Due to a spelling error in the original API name, it has been corrected to [ModifyInstancePassword](https://intl.cloud.tencent.com/document/product/239/111555?from_cn_redirect=1). It is recommended to use the corrected API.
 * @method Models\ModifyAutoBackupConfigResponse ModifyAutoBackupConfig(Models\ModifyAutoBackupConfigRequest $req) This API is used to set the configuration for an automatic backup.
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) This API is used to modify the network information and address for downloading a backup file.
 * @method Models\ModifyConnectionConfigResponse ModifyConnectionConfig(Models\ModifyConnectionConfigRequest $req) This API is used to modify the connection configuration of an instance, including the bandwidth and maximum number of connections.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify the original security group list of an instance.
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to modify instance information.
 * @method Models\ModifyInstanceAccountResponse ModifyInstanceAccount(Models\ModifyInstanceAccountRequest $req) This API is used to modify the instance sub-account.
 * @method Models\ModifyInstanceAvailabilityZonesResponse ModifyInstanceAvailabilityZones(Models\ModifyInstanceAvailabilityZonesRequest $req) This API is used to change the availability zone of the instance.
 * @method Models\ModifyInstanceEventResponse ModifyInstanceEvent(Models\ModifyInstanceEventRequest $req) This API is used to modify the operations event execution schedule of an instance.
 * @method Models\ModifyInstanceLogDeliveryResponse ModifyInstanceLogDelivery(Models\ModifyInstanceLogDeliveryRequest $req) This API is used to enable or disable the shipping of instance logs to CLS.
 * @method Models\ModifyInstanceParamsResponse ModifyInstanceParams(Models\ModifyInstanceParamsRequest $req) This API is used to modify the parameter configuration of a Redis instance.
 * @method Models\ModifyInstancePasswordResponse ModifyInstancePassword(Models\ModifyInstancePasswordRequest $req) This API is used to change the instance access password.
 * @method Models\ModifyInstanceReadOnlyResponse ModifyInstanceReadOnly(Models\ModifyInstanceReadOnlyRequest $req) This API is used to set the instance input mode.
 * @method Models\ModifyMaintenanceWindowResponse ModifyMaintenanceWindow(Models\ModifyMaintenanceWindowRequest $req) This API is used to modify the time of instance maintenance window. Instances that require the version or architecture upgrade will undergo time switching during the maintenance window. Note: If the version or architecture upgrade has been initiated for an instance, its maintenance window cannot be modified.
 * @method Models\ModifyNetworkConfigResponse ModifyNetworkConfig(Models\ModifyNetworkConfigRequest $req) This API is used to modify the network configuration of an instance.
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) This API is used to modify the parameter template.
 * @method Models\ModifyReplicationGroupResponse ModifyReplicationGroup(Models\ModifyReplicationGroupRequest $req) This API is used to modify replication group information.
 * @method Models\OpenSSLResponse OpenSSL(Models\OpenSSLRequest $req) This API is used to enable SSL encryption and authentication.
 * @method Models\ReleaseWanAddressResponse ReleaseWanAddress(Models\ReleaseWanAddressRequest $req) This API is used to disable public network access.
 * @method Models\RemoveReplicationInstanceResponse RemoveReplicationInstance(Models\RemoveReplicationInstanceRequest $req) This API is used to remove instances from a replication group.
 * @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) This API is used to renew an instance.
 * @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) This API is used to reset the instance access password.
 * @method Models\RestoreInstanceResponse RestoreInstance(Models\RestoreInstanceRequest $req) This API is used to restore a Redis instance.
 * @method Models\StartupInstanceResponse StartupInstance(Models\StartupInstanceRequest $req) This API is used to deisolate instances.
 * @method Models\SwitchAccessNewInstanceResponse SwitchAccessNewInstance(Models\SwitchAccessNewInstanceRequest $req) This API is used to immediately switch instances that are in the time window pending switch operation. Users can manually initiate this operation.
 * @method Models\SwitchInstanceVipResponse SwitchInstanceVip(Models\SwitchInstanceVipRequest $req) This API is used to swap the VIPs of instances for disaster recovery in DTS-based cross-AZ disaster recovery scenarios. After the swapping, the target instance becomes writable, the VIPs of the source and target instances are swapped, and the DTS synchronization task between the source and target instances is disconnected.
 * @method Models\SwitchProxyResponse SwitchProxy(Models\SwitchProxyRequest $req) This API is used to simulate the fault of a Proxy node.
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) This API is used to change the configuration specifications of an instance.
 * @method Models\UpgradeInstanceVersionResponse UpgradeInstanceVersion(Models\UpgradeInstanceVersionRequest $req) This API is used to upgrade the current instance to a later version or upgrade the current standard architecture to a cluster architecture.
 * @method Models\UpgradeProxyVersionResponse UpgradeProxyVersion(Models\UpgradeProxyVersionRequest $req) This API is used to upgrade the instance Proxy version.
 * @method Models\UpgradeSmallVersionResponse UpgradeSmallVersion(Models\UpgradeSmallVersionRequest $req) This API is used to upgrade the minor version of an instance.
 * @method Models\UpgradeVersionToMultiAvailabilityZonesResponse UpgradeVersionToMultiAvailabilityZones(Models\UpgradeVersionToMultiAvailabilityZonesRequest $req) This API is used to upgrade an instance to support multiple AZs.
 */

class RedisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "redis.intl.tencentcloudapi.com";

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
