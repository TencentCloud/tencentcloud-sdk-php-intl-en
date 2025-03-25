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

namespace TencentCloud\Autoscaling\V20180419;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Autoscaling\V20180419\Models as Models;

/**
 * @method Models\AttachInstancesResponse AttachInstances(Models\AttachInstancesRequest $req) This API is used to add CVM instances to an auto scaling group.
* Only CVM instances in `RUNNING` or `STOPPED` status can be added.
* The added CVM instances must in the same VPC as the scaling group.

 * @method Models\AttachLoadBalancersResponse AttachLoadBalancers(Models\AttachLoadBalancersRequest $req) This API is used to add CLBs to a security group.
 * @method Models\CancelInstanceRefreshResponse CancelInstanceRefresh(Models\CancelInstanceRefreshRequest $req) This API is used to cancel the instance refresh activity of the scaling group.
* The batches that have already been refreshed or are currently being refreshed remain unaffected, but the batches pending refresh will be canceled.
* If a refresh fails, the affected instances will remain in the secondary status, and require manual intervention to exit the secondary status or terminate the instances.
* Rollback operations are not allowed after cancellation, and recovery is also unsupported.
* The instances temporarily scaled out due to the MaxSurge parameter are automatically terminated after cancellation.
* During scale-in, all instances have already been updated and cannot be canceled.
 * @method Models\ClearLaunchConfigurationAttributesResponse ClearLaunchConfigurationAttributes(Models\ClearLaunchConfigurationAttributesRequest $req) This API is used to clear specific attributes of the launch configuration.
 * @method Models\CompleteLifecycleActionResponse CompleteLifecycleAction(Models\CompleteLifecycleActionRequest $req) This API is used to complete a lifecycle action by setting the status of lifecycle hook to `CONTINUE` or `ABANDON`.

* If this API is not called, the lifecycle hook goes to the status specified in `DefaultResult` after the timeout period.
 * @method Models\CreateAutoScalingGroupResponse CreateAutoScalingGroup(Models\CreateAutoScalingGroupRequest $req) This API (CreateAutoScalingGroup) is used to create an auto scaling group.
 * @method Models\CreateAutoScalingGroupFromInstanceResponse CreateAutoScalingGroupFromInstance(Models\CreateAutoScalingGroupFromInstanceRequest $req) This API is used to create launch configurations and scaling groups based on an instance.

Note: for a scaling group that is created based on a monthly-subscribed instance, the instances added for scale-out are pay-as-you-go instance.
 * @method Models\CreateLaunchConfigurationResponse CreateLaunchConfiguration(Models\CreateLaunchConfigurationRequest $req) This API is used to create a launch configuration.

* To modify a launch configuration, please use `ModifyLaunchConfigurationAttributes`.

* Up to 20 launch configurations can be created for each project. For more information, see [Usage Limits](https://intl.cloud.tencent.com/document/product/377/3120?from_cn_redirect=1).
 * @method Models\CreateLifecycleHookResponse CreateLifecycleHook(Models\CreateLifecycleHookRequest $req) This API is used to create a lifecycle hook.

* You can configure notifications or automation commands (TAT) for the lifecycle hook.

If you configured a notification, Auto Scaling will notify the TDMQ queue of the following information:

```
{
	"Service": "Tencent Cloud Auto Scaling",
	"Time": "2019-03-14T10:15:11Z",
	"AppId": "1251783334",
	"ActivityId": "asa-fznnvrja",
	"AutoScalingGroupId": "asg-rrrrtttt",
	"LifecycleHookId": "ash-xxxxyyyy",
	"LifecycleHookName": "my-hook",
	"LifecycleActionToken": "3080e1c9-0efe-4dd7-ad3b-90cd6618298f",
	"InstanceId": "ins-aaaabbbb",
	"LifecycleTransition": "INSTANCE_LAUNCHING",
	"NotificationMetadata": ""
}
```
 * @method Models\CreateNotificationConfigurationResponse CreateNotificationConfiguration(Models\CreateNotificationConfigurationRequest $req) This API is used to create a notification policy.
When the notification is sent to a CMQ topic or queue, the following contents are included:
```
{
    "Service": "Tencent Cloud Auto Scaling",
    "CreatedTime": "2021-10-11T10:15:11Z", // Activity creation time
    "AppId": "100000000",
    "ActivityId": "asa-fznnvrja", // Scaling activity ID
    "AutoScalingGroupId": "asg-pc2oqu2z", // Scaling group ID
    "ActivityType": "SCALE_OUT",  // Scaling activity type
    "StatusCode": "SUCCESSFUL",   // Scaling activity result
    "Description": "Activity was launched in response to a difference between desired capacity and actual capacity,
    scale out 1 instance(s).", // Scaling activity description
    "StartTime": "2021-10-11T10:15:11Z",  // Activity starting time
    "EndTime": "2021-10-11T10:15:32Z",    // Activity ending time
    "DetailedStatusMessageSet": [ // A collection of failed attempts during the scaling process (Failed attempts are allowed in a successful scaling activity)
        {
            "Code": "InvalidInstanceType",
            "Zone": "ap-guangzhou-2",
            "InstanceId": "",
            "InstanceChargeType": "POSTPAID_BY_HOUR",
            "SubnetId": "subnet-4t5mgeuu",
            "Message": "The specified instance type `S5.LARGE8` is invalid in `subnet-4t5mgeuu`, `ap-guangzhou-2`.",
            "InstanceType": "S5.LARGE8",
        }
    ]
}
```
 * @method Models\CreateScalingPolicyResponse CreateScalingPolicy(Models\CreateScalingPolicyRequest $req) This API (CreateScalingPolicy) is used to create an alarm trigger policy.
 * @method Models\CreateScheduledActionResponse CreateScheduledAction(Models\CreateScheduledActionRequest $req) This API (CreateScheduledAction) is used to create a scheduled task.
 * @method Models\DeleteAutoScalingGroupResponse DeleteAutoScalingGroup(Models\DeleteAutoScalingGroupRequest $req) This API is used to delete an auto-scaling group. Make sure that there are no `IN_SERVICE` instances in the group, and there are no ongoing scaling activities. When you delete a scaling group, instances in the status of `CREATION_FAILED`, `TERMINATION_FAILED` and `DETACH_FAILED` are not terminated.
 * @method Models\DeleteLaunchConfigurationResponse DeleteLaunchConfiguration(Models\DeleteLaunchConfigurationRequest $req) This API (DeleteLaunchConfiguration) is used to delete a launch configuration.

* If the launch configuration is active in an auto scaling group, it cannot be deleted.

 * @method Models\DeleteLifecycleHookResponse DeleteLifecycleHook(Models\DeleteLifecycleHookRequest $req) This API (DeleteLifeCycleHook) is used to delete a lifecycle hook.
 * @method Models\DeleteNotificationConfigurationResponse DeleteNotificationConfiguration(Models\DeleteNotificationConfigurationRequest $req) This API (DeleteNotificationConfiguration) is used to delete the specified notification.
 * @method Models\DeleteScalingPolicyResponse DeleteScalingPolicy(Models\DeleteScalingPolicyRequest $req) This API (DeleteScalingPolicy) is used to delete an alarm trigger policy.
 * @method Models\DeleteScheduledActionResponse DeleteScheduledAction(Models\DeleteScheduledActionRequest $req) This API (DeleteScheduledAction) is used to delete the specified scheduled task.
 * @method Models\DescribeAccountLimitsResponse DescribeAccountLimits(Models\DescribeAccountLimitsRequest $req) This API (DescribeAccountLimits) is used to query the limits of user's AS resources.
 * @method Models\DescribeAutoScalingActivitiesResponse DescribeAutoScalingActivities(Models\DescribeAutoScalingActivitiesRequest $req) This API (DescribeAutoScalingActivities) is used to query the activity history of an auto scaling group.
 * @method Models\DescribeAutoScalingAdvicesResponse DescribeAutoScalingAdvices(Models\DescribeAutoScalingAdvicesRequest $req) This API is used to query suggestions for scaling group configurations.
 * @method Models\DescribeAutoScalingGroupLastActivitiesResponse DescribeAutoScalingGroupLastActivities(Models\DescribeAutoScalingGroupLastActivitiesRequest $req) This API is used to query the latest activity history of an auto scaling group.
 * @method Models\DescribeAutoScalingGroupsResponse DescribeAutoScalingGroups(Models\DescribeAutoScalingGroupsRequest $req) This API (DescribeAutoScalingGroups) is used to query the information of auto scaling groups.

* You can query the details of auto scaling groups based on information such as auto scaling group ID, auto scaling group name, or launch configuration ID. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of auto scaling groups of the current user will be returned.
 * @method Models\DescribeAutoScalingInstancesResponse DescribeAutoScalingInstances(Models\DescribeAutoScalingInstancesRequest $req) This API (DescribeAutoScalingInstances) is used to query the information of instances associated with AS.

* You can query the details of instances based on information such as instance ID and auto scaling group ID. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of instances of the current user will be returned.
 * @method Models\DescribeLaunchConfigurationsResponse DescribeLaunchConfigurations(Models\DescribeLaunchConfigurationsRequest $req) This API is used to query the information of launch configurations.

* You can query the launch configuration details based on information such as launch configuration ID and name. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of launch configurations of the current user will be returned.
 * @method Models\DescribeLifecycleHooksResponse DescribeLifecycleHooks(Models\DescribeLifecycleHooksRequest $req) This API (DescribeLifecycleHooks) is used to query the information of lifecycle hooks.

* You can query the details of lifecycle hooks based on information such as auto scaling group ID, lifecycle hook ID, or lifecycle hook name. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of lifecycle hooks of the current user will be returned.
 * @method Models\DescribeNotificationConfigurationsResponse DescribeNotificationConfigurations(Models\DescribeNotificationConfigurationsRequest $req) This API (DescribeNotificationConfigurations) is used to query the information of one or more notifications.

You can query the details of notifications based on information such as notification ID and auto scaling group ID. For more information on filters, see `Filter`.
If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of notifications of the current user will be returned.
 * @method Models\DescribeRefreshActivitiesResponse DescribeRefreshActivities(Models\DescribeRefreshActivitiesRequest $req) This API (DescribeRefreshActivities) is used to query the instance refresh activity records of a scaling group.
 * @method Models\DescribeScalingPoliciesResponse DescribeScalingPolicies(Models\DescribeScalingPoliciesRequest $req) This API (DescribeScalingPolicies) is used to query alarm trigger policies.
 * @method Models\DescribeScheduledActionsResponse DescribeScheduledActions(Models\DescribeScheduledActionsRequest $req) This API (DescribeScheduledActions) is used to query the details of one or more scheduled tasks.

* You can query the details of scheduled tasks based on information such as scheduled task ID, scheduled task name, or auto scaling group ID. For more information on filters, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit` and 20 by default) of scheduled tasks of the current user will be returned.
 * @method Models\DetachInstancesResponse DetachInstances(Models\DetachInstancesRequest $req) This API is used to remove CVM instances from a scaling group. Instances removed via this API will not be terminated.
* If the number of remaining `IN_SERVICE` instances in the scaling group is less than the minimum capacity, this API will return an error.
* However, if the scaling group is in `DISABLED` status, the removal will not verify the relationship between the number of `IN_SERVICE` instances and the minimum capacity.
* This removal will unassociate the CVM from the CLB instance that has been configured for the scaling group.
 * @method Models\DetachLoadBalancersResponse DetachLoadBalancers(Models\DetachLoadBalancersRequest $req) This API is used to unbind one or more CLBs from a scaling group. This API will not terminate CLBs.
 * @method Models\DisableAutoScalingGroupResponse DisableAutoScalingGroup(Models\DisableAutoScalingGroupRequest $req) This API is used to disable the specified auto-scaling group.
* When a scaling group is disabled, the following activities are not triggered automatically:
    - Scaling activities triggered alert policies
    - Scaling activities triggered by desired group capacity
    - Replacement of unhealthy instances
    - Scheduled actions
* When the scaling group is disabled, you can trigger scaling activities manually, including: 
    - Scale out to the specify number of instances (ScaleOutInstances)
    - Scale in to the specify number of instances (ScaleInInstances)
    - Remove instances from the scaling group (DetachInstances)
    - Delete instances from the scaling group (RemoveInstances)
    - Add instances to a scaling group (AttachInstances)
    - Shut down CVM instances in a scaling group (StopAutoScalingInstances)
    - Start up CVM instances in a scaling group (StartAutoScalingInstances)
 * @method Models\EnableAutoScalingGroupResponse EnableAutoScalingGroup(Models\EnableAutoScalingGroupRequest $req) This API (EnableAutoScalingGroup) is used to enable the specified auto scaling group.
 * @method Models\ExecuteScalingPolicyResponse ExecuteScalingPolicy(Models\ExecuteScalingPolicyRequest $req) This API is used to execute a scaling policy.

* The scaling policy can be executed based on the scaling policy ID.
* The policy cannot be executed if there are ongoing scaling actions on the scaling group.
* Executing a target tracking policy is not supported.
 * @method Models\ExitStandbyResponse ExitStandby(Models\ExitStandbyRequest $req) This API is used to exit instances from the standby status in the scaling group.
* When an instance is in standby status, its load balancer weight is set to 0. Upon exiting the standby status, the weight value automatically gets restored.
* Initiating power-on/power-off actions on instances that are in standby status also results in them exiting from the standby status.
 * @method Models\ModifyAutoScalingGroupResponse ModifyAutoScalingGroup(Models\ModifyAutoScalingGroupRequest $req) This API (ModifyAutoScalingGroup) is used to modify an auto scaling group.
 * @method Models\ModifyDesiredCapacityResponse ModifyDesiredCapacity(Models\ModifyDesiredCapacityRequest $req) This API (ModifyDesiredCapacity) is used to modify the desired number of instances in the specified auto scaling group.
 * @method Models\ModifyLaunchConfigurationAttributesResponse ModifyLaunchConfigurationAttributes(Models\ModifyLaunchConfigurationAttributesRequest $req) This API (ModifyLaunchConfigurationAttributes) is used to modify some attributes of a launch configuration.

* The changes of launch configuration do not affect the existing instances. New instances will be created based on the modified configuration.
* This API supports modifying certain simple types of attributes.
 * @method Models\ModifyLifecycleHookResponse ModifyLifecycleHook(Models\ModifyLifecycleHookRequest $req) This API is used to modify the lifecycle hook.
 * @method Models\ModifyLoadBalancerTargetAttributesResponse ModifyLoadBalancerTargetAttributes(Models\ModifyLoadBalancerTargetAttributesRequest $req) This API is used to modify the target rule attributes of the CLB in the scaling group.
 * @method Models\ModifyLoadBalancersResponse ModifyLoadBalancers(Models\ModifyLoadBalancersRequest $req) This API is used to modify the cloud load balancers of a scaling group.

* This API can specify a new cloud load balancer configuration for the scaling group. The new configuration overwrites the original load balancer configuration.
* To clear the cloud load balancer of the scaling group, specify only the scaling group ID but not the specific cloud load balancer.
* This API modifies the cloud load balancer of the scaling group and generate a scaling activity to asynchronously modify the cloud load balancers of existing instances.
 * @method Models\ModifyNotificationConfigurationResponse ModifyNotificationConfiguration(Models\ModifyNotificationConfigurationRequest $req) This API is used to modify a notification policy.
* The receiver type of the notification policy cannot be modified.
 * @method Models\ModifyScalingPolicyResponse ModifyScalingPolicy(Models\ModifyScalingPolicyRequest $req) This API (ModifyScalingPolicy) is used to modify an alarm trigger policy.
 * @method Models\ModifyScheduledActionResponse ModifyScheduledAction(Models\ModifyScheduledActionRequest $req) This API (ModifyScheduledAction) is used to modify a scheduled task.
 * @method Models\RemoveInstancesResponse RemoveInstances(Models\RemoveInstancesRequest $req) This API is used to delete CVM instances from a scaling group. Instances that are automatically created through AS will be terminated, while those manually added to the scaling group will be removed and retained.
* If the number of remaining `IN_SERVICE` instances in the scaling group is less than the minimum capacity, this API will return an error.
* However, if the scaling group is in `DISABLED` status, the removal will not verify the relationship between the number of `IN_SERVICE` instances and the minimum capacity.
* This removal will unassociate the CVM from the CLB instance that has been configured for the scaling group.
 * @method Models\ResumeInstanceRefreshResponse ResumeInstanceRefresh(Models\ResumeInstanceRefreshRequest $req) This API is used to resume the paused instance refresh activity, allowing it to retry failed instances in the current batch or proceed with refreshing subsequent batches. Note that calling this API is ineffective when the activity is not in a paused status.

- When the MaxSurge parameter is used, the activity may be paused due to scale-out or scale-in failures. This API can also be used to retry scaling operations.
 * @method Models\RollbackInstanceRefreshResponse RollbackInstanceRefresh(Models\RollbackInstanceRefreshRequest $req) This API is used to generate a new instance refresh activity, which also supports batch refreshing and operations such as pausing, resuming, and canceling. This API returns RefreshActivityId for the rollback activity.
* The instances pending refresh in the original activity are updated to canceled status. Nonexistent instances are disregarded, while instances in all other statuses proceed to enter the rollback process.
* The instances that are being refreshed in the original activity will not be immediately terminated. Instead, the rollback activity will be executed after their refresh complete.
* Rollback is supported for activities that are in the paused status or those succeeded in refreshing last time. It is not supported for activities in other statuses.
* When the original refresh activity involves reinstalling instances, for the ImageId parameter, it will automatically recover to the image ID before the rollback; for parameters such as UserData, EnhancedService, LoginSettings, and HostName, they will still be read from the launch configuration, requiring users to manually modify the launch configuration before initiating the rollback.
* The rollback activity does not support the MaxSurge parameter currently.
 * @method Models\ScaleInInstancesResponse ScaleInInstances(Models\ScaleInInstancesRequest $req) This API is used to reduce the specified number of instances from the scaling group.
* There is no on going scaling task.
* This API is valid even when the scaling group is disabled. For more details, see [DisableAutoScalingGroup](https://intl.cloud.tencent.com/document/api/377/20435?from_cn_redirect=1).
* You can specify the instances to remove in the scale-in activity by using `TerminationPolicies`. For more information, see [Scaling In Policies](https://intl.cloud.tencent.com/document/product/377/8563?from_cn_redirect=1).
* Only the `IN_SERVICE` instances will be reduced. To reduce instances in other statues, use the [`DetachInstances`](https://intl.cloud.tencent.com/document/api/377/31011?from_cn_redirect=1) or [`RemoveInstances`](https://intl.cloud.tencent.com/document/api/377/31005?from_cn_redirect=1) API.
* The desired capacity will be reduced accordingly. The new desired capacity should be no less than the minimum capacity.
* If the scale-in activity failed or partially succeeded, the final desired capacity only deducts the instances that have been reduced successfully.
 * @method Models\ScaleOutInstancesResponse ScaleOutInstances(Models\ScaleOutInstancesRequest $req) This API is used to add the specified number of instances to a scaling group. It returns the scaling activity ID `ActivityId`.
* Make sure that there are no ongoing scaling tasks.
* This API is valid even when the scaling group is disabled. For more details, see [DisableAutoScalingGroup](https://intl.cloud.tencent.com/document/api/377/20435?from_cn_redirect=1).
* The total number of instances after this action cannot exceed the maximum capacity.
* If a scale-out action failed or partially succeeded, only the number of successfully created instances is added to the number of desired capacity.
* If the allocation policy is `SPOT_MIXED`, there may be multiple scaling activities triggered for one scaling task. In this case, the first activity ID (`ActivityId`) is returned.
 * @method Models\SetInstancesProtectionResponse SetInstancesProtection(Models\SetInstancesProtectionRequest $req) This API is used to enable scale-in protection for an instance.
When scale-in protection is enabled, the instance will not be removed in scale-in activities triggered by replacement of unhealthy instances, alarm threshold reached, change of desired quantity, etc.
 * @method Models\StartAutoScalingInstancesResponse StartAutoScalingInstances(Models\StartAutoScalingInstancesRequest $req) This API is used to start up CVM instances in a scaling group.
* After startup, the instance will be in the `IN_SERVICE` status, which will increase the desired capacity. Please note that the desired capacity cannot exceed the maximum value.
* This API supports batch operation. Up to 100 instances can be started up in each request.
 * @method Models\StartInstanceRefreshResponse StartInstanceRefresh(Models\StartInstanceRefreshRequest $req) This API is used to refresh running CVM instances in the scaling group and return the RefreshActivityId for the instance refresh activity based on parameters in the launch configuration.
* For refresh methods involving reinstallation (currently only reinstallation is supported), during reinstallation, only the ImageId, UserData, EnhancedService, HostName, and LoginSettings parameters will be fetched from the launch configuration for refreshing; other parameters of the instance will not be refreshed.
* During the instance refresh process (including paused status), the scaling group will be disabled. It is not recommended to modify the associated launch configuration during a refresh, as this may impact the refresh parameters, leading to inconsistent instance configurations.
* In rolling update mode, instance refreshes are performed in multiple batches. If there are failed refreshes within a batch, the activity will enter a failed paused status.
* Instances pending refresh that are removed or destroyed will be marked as NOT_FOUND status, but they will not block the instance refresh activity.
* Even if a running instance has parameters consistent with the latest launch configuration, it can still undergo another refresh.
 * @method Models\StopAutoScalingInstancesResponse StopAutoScalingInstances(Models\StopAutoScalingInstancesRequest $req) This API is used to shut down CVM instances in a scaling group.
* Use the `SOFT_FIRST` shutdown, which means the CVM will be forcibly shut down if the soft shutdown fails.
* Shutting down instances in the `IN_SERVICE` status will reduce the desired capacity, but the desired capacity cannot be less than the minimum value.
* To use the `STOP_CHARGING` shutdown, the instances you want to shut down must satisfy the conditions of [no charges when shut down](https://intl.cloud.tencent.com/document/product/213/19918?from_cn_redirect=1).
* This API supports batch operation. Up to 100 instances can be shut down in each request.
 * @method Models\StopInstanceRefreshResponse StopInstanceRefresh(Models\StopInstanceRefreshRequest $req) This API is used to pause the ongoing instance refresh activity.
* In the paused status, the scaling group will also be disabled.
* The instances that are currently being updated or scaled out will not be paused, but instances pending updates will have their updates paused.
* During scale-in, all instances have already been updated and cannot be paused.
 * @method Models\UpgradeLaunchConfigurationResponse UpgradeLaunchConfiguration(Models\UpgradeLaunchConfigurationRequest $req) There is a replacement API: ModifyLaunchConfiguration. This API carries the risk of parameter overwriting, and it has currently been hidden on the official website.
This API (UpgradeLaunchConfiguration) is used to upgrade the launch configuration.
* This API is used to upgrade the launch configuration, adopting an "entirely overwrite" approach. Regardless of previous parameter settings, they will be uniformly replaced with new configurations as specified in the interface parameters. For non-mandatory fields, if not filled in, default values will be assigned.
* After upgrading and modifying the launch configuration, existing instances that have been scaled out using this configuration will not undergo any changes. Subsequently, newly added instances using this upgraded launch configuration will be scaled out according to the new configuration.
 * @method Models\UpgradeLifecycleHookResponse UpgradeLifecycleHook(Models\UpgradeLifecycleHookRequest $req) This API is used to upgrade the lifecycle hook.

* This API is used to upgrade the lifecycle hook, adopting a "comprehensive overwrite" style. Regardless of how the previous parameters were set, it uniformly uses the new configurations for API parameters. For optional fields, if they are not filled in, default values will be used.
 */

class AutoscalingClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "as.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "as";

    /**
     * @var string
     */
    protected $version = "2018-04-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("autoscaling")."\\"."V20180419\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
