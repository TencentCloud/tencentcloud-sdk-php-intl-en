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

namespace TencentCloud\Lighthouse\V20200324;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lighthouse\V20200324\Models as Models;

/**
 * @method Models\ApplyInstanceSnapshotResponse ApplyInstanceSnapshot(Models\ApplyInstanceSnapshotRequest $req) This API is used to roll back the system disk snapshot of the specified instance.
<li>Only rollback to the original system disk is supported. </li>
<li>Only snapshots in `NORMAL` status can be used for rollback. To query the status of a snapshot, you can call the `DescribeSnapshots` API and see the `SnapshotState` field in the response.</li>
<li>When a snapshot is rolled back, the status of the instance must be `STOPPED` or `RUNNING`. You can call the `DescribeInstances` API to query the instance status. Instances in `RUNNING` status will be forcibly shut down before snapshot rollback. </li>
 * @method Models\AssociateInstancesKeyPairsResponse AssociateInstancesKeyPairs(Models\AssociateInstancesKeyPairsRequest $req) This API is used to bind a user-specified key pair to an instance.
* Only instances on LINUX_UNIX in [RUNNING, STOPPED] status are supported. Instances in `RUNNING` status will be forcibly shut down before binding.
* If the public key of a key pair is written to the SSH configuration of the instance, you will be able to log in to the instance with the private key of the key pair.
* If the instance is already associated with a key, the old key will become invalid.
* If you currently use a password to log in, you will no longer be able to do so after you associate the instance with a key.
* Batch operations are supported. The maximum number of instances in each request is 100. If instances not available for the operation are selected, you will get an error code.
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 * @method Models\AttachCcnResponse AttachCcn(Models\AttachCcnRequest $req) This API is used to associate a CCN instance.
 * @method Models\AttachDisksResponse AttachDisks(Models\AttachDisksRequest $req) This API is used to attach one or more cloud disks.
 * @method Models\CreateBlueprintResponse CreateBlueprint(Models\CreateBlueprintRequest $req) This API is used to create an image.
 * @method Models\CreateDisksResponse CreateDisks(Models\CreateDisksRequest $req) This API is used to create one or more cloud disks.
 * @method Models\CreateFirewallRulesResponse CreateFirewallRules(Models\CreateFirewallRulesRequest $req) This API is used to add a firewall rule on an instance.


* `FirewallVersion` is the firewall version number. Every time you update the firewall rule version, it will be automatically increased by 1 to prevent the updated rule from expiring. If it is left empty, conflicts will not be considered.

In the `FirewallRules` parameter:
* Valid values of the `Protocol` field include `TCP`, `UDP`, `ICMP`, and `ALL`.
* For the `Port` field, you can enter only `ALL`, a single port number, several port numbers separated by commas, or a port range indicated by two port numbers separated by a minus sign. If `Port` is a range, the port number on the left of the minus sign must be smaller than the one on the right. If `Protocol` is not `TCP` or `UDP`, `Port` can only be empty or `ALL`. The length of the `Port` field cannot exceed 64 characters.
* For the `CidrBlock` field, you can enter any string that conforms to the CIDR format standard. Multi-Tenant network isolation rules take precedence over private network rules in the firewall.
* For the `Action` field, you can enter only `ACCEPT` or `DROP`.
* The length of the `FirewallRuleDescription` field cannot exceed 64 characters.
 * @method Models\CreateInstanceSnapshotResponse CreateInstanceSnapshot(Models\CreateInstanceSnapshotRequest $req) This API is used to create a system disk snapshot of the specified instance.
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) This API is used to create one or more Lighthouse instances.
 * @method Models\CreateKeyPairResponse CreateKeyPair(Models\CreateKeyPairRequest $req) This API is used to create a key pair.
 * @method Models\DeleteBlueprintsResponse DeleteBlueprints(Models\DeleteBlueprintsRequest $req) This API is used to delete an image.
 * @method Models\DeleteFirewallRulesResponse DeleteFirewallRules(Models\DeleteFirewallRulesRequest $req) This API is used to delete a firewall rule of an instance.

* `FirewallVersion` is used to specify the version of the firewall to be manipulated. If the `FirewallVersion` value passed in is not equal to the current latest version of the firewall, a failure will be returned. If `FirewallVersion` is not passed in, the specified rule will be deleted directly.

In the `FirewallRules` parameter:
* Valid values of the `Protocol` field include `TCP`, `UDP`, `ICMP`, and `ALL`.
* For the `Port` field, you can enter only `ALL`, a single port number, several port numbers separated by commas, or a port range indicated by two port numbers separated by a minus sign. If `Port` is a range, the port number on the left of the minus sign must be smaller than the one on the right. If `Protocol` is not `TCP` or `UDP`, `Port` can only be empty or `ALL`. The length of the `Port` field cannot exceed 64 characters.
* For the `CidrBlock` field, you can enter any string that conforms to the CIDR format standard. Multi-Tenant network isolation rules take precedence over private network rules in the firewall.
* For the `Action` field, you can enter only `ACCEPT` or `DROP`.
* The length of the `FirewallRuleDescription` field cannot exceed 64 characters.
 * @method Models\DeleteKeyPairsResponse DeleteKeyPairs(Models\DeleteKeyPairsRequest $req) This API is used to delete a key pair.
 * @method Models\DeleteSnapshotsResponse DeleteSnapshots(Models\DeleteSnapshotsRequest $req) This API is used to delete a snapshot.
The snapshot must be in `NORMAL` status. To query the status of a snapshot, you can call the `DescribeSnapshots` API and see the `SnapshotState` field in the response.
 * @method Models\DescribeAllScenesResponse DescribeAllScenes(Models\DescribeAllScenesRequest $req) This API is used to query the list of scenes in all regions.
 * @method Models\DescribeBlueprintInstancesResponse DescribeBlueprintInstances(Models\DescribeBlueprintInstancesRequest $req) This API is used to query the information of an image instance.
 * @method Models\DescribeBlueprintsResponse DescribeBlueprints(Models\DescribeBlueprintsRequest $req) This API is used to query the information of an image.
 * @method Models\DescribeBundleDiscountResponse DescribeBundleDiscount(Models\DescribeBundleDiscountRequest $req) This API is used to query the discount information of a package.
 * @method Models\DescribeBundlesResponse DescribeBundles(Models\DescribeBundlesRequest $req) This API is used to query the information of a package.
 * @method Models\DescribeCcnAttachedInstancesResponse DescribeCcnAttachedInstances(Models\DescribeCcnAttachedInstancesRequest $req) This API is used to query the information of instances associated with CCN.
 * @method Models\DescribeDiskConfigsResponse DescribeDiskConfigs(Models\DescribeDiskConfigsRequest $req) This API is used to query the cloud disk configuration.
 * @method Models\DescribeDiskDiscountResponse DescribeDiskDiscount(Models\DescribeDiskDiscountRequest $req) This API is used to query the discount information of a cloud disk.
 * @method Models\DescribeDisksResponse DescribeDisks(Models\DescribeDisksRequest $req) This API is used to query the information of one or more cloud disks.
 * @method Models\DescribeDisksDeniedActionsResponse DescribeDisksDeniedActions(Models\DescribeDisksDeniedActionsRequest $req) This API is used to query the list of operation limits of one or more cloud disks.
 * @method Models\DescribeDisksReturnableResponse DescribeDisksReturnable(Models\DescribeDisksReturnableRequest $req) This API is used to query whether the specified cloud disk can be returned.
 * @method Models\DescribeFirewallRulesResponse DescribeFirewallRules(Models\DescribeFirewallRulesRequest $req) This API is used to query the firewall rules of an instance.
 * @method Models\DescribeFirewallRulesTemplateResponse DescribeFirewallRulesTemplate(Models\DescribeFirewallRulesTemplateRequest $req) This API is used to query a firewall rule template.
 * @method Models\DescribeGeneralResourceQuotasResponse DescribeGeneralResourceQuotas(Models\DescribeGeneralResourceQuotasRequest $req) This API is used to query the quota information of general resources.
 * @method Models\DescribeInstanceLoginKeyPairAttributeResponse DescribeInstanceLoginKeyPairAttribute(Models\DescribeInstanceLoginKeyPairAttributeRequest $req) This API is used to query the attributes of the default login key of an instance.
 * @method Models\DescribeInstanceVncUrlResponse DescribeInstanceVncUrl(Models\DescribeInstanceVncUrlRequest $req) This API is used to query the URL for VNC login.

* It does not support `STOPPED` CVMs.
* A VNC URL is only valid for 15 seconds. If you do not access the URL within 15 seconds, you will need to query another one.
* The VNC URL can be used once only. You need to query a new one if you want to log in again.
* Up to 30 re-connection attempts allowed in one minute.
* `InstanceVncUrl`: Its value will be returned after the API is successfully called.
After you get the value of `InstanceVncUrl`, you need to append `InstanceVncUrl=xxxx` to the end of the link `https://img.qcloud.com/qcloud/app/active_vnc/index.html?`.
 The final URL can be in the following formats:

```
https://img.qcloud.com/qcloud/app/active_vnc/index.html?InstanceVncUrl=wss%3A%2F%2Fbjvnc.qcloud.com%3A26789%2Fvnc%3Fs%3DaHpjWnRVMFNhYmxKdDM5MjRHNlVTSVQwajNUSW0wb2tBbmFtREFCTmFrcy8vUUNPMG0wSHZNOUUxRm5PMmUzWmFDcWlOdDJIbUJxSTZDL0RXcHZxYnZZMmRkWWZWcEZia2lyb09XMzdKNmM9
```

 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the details of one or multiple instances.

* You can query the details of an instance according to its ID, name, or private IP.
* For more information on filters, please see [Filters](https://intl.cloud.tencent.com/document/product/1207/47576?from_cn_redirect=1#Filter).
* If no parameter is defined, the status of a certain number of instances under the current account will be returned. The number is specified by `Limit` and is 20 by default.
* The latest operation (LatestOperation) and the latest operation status (LatestOperationState) of the instance can be queried.
 * @method Models\DescribeInstancesDeniedActionsResponse DescribeInstancesDeniedActions(Models\DescribeInstancesDeniedActionsRequest $req) This API is used to query the list of operation limits of one or more instances.
 * @method Models\DescribeInstancesDiskNumResponse DescribeInstancesDiskNum(Models\DescribeInstancesDiskNumRequest $req) This API is used to query the number of cloud disks attached to instances.
 * @method Models\DescribeInstancesReturnableResponse DescribeInstancesReturnable(Models\DescribeInstancesReturnableRequest $req) This API is used to query whether the specified instance can be returned.
 * @method Models\DescribeInstancesTrafficPackagesResponse DescribeInstancesTrafficPackages(Models\DescribeInstancesTrafficPackagesRequest $req) This API is used to query the traffic package details of one or more instances.
 * @method Models\DescribeKeyPairsResponse DescribeKeyPairs(Models\DescribeKeyPairsRequest $req) This API is used to query key pairs.
 * @method Models\DescribeModifyInstanceBundlesResponse DescribeModifyInstanceBundles(Models\DescribeModifyInstanceBundlesRequest $req) This API is used to query the list of package options of an instance.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query the information of regions.
 * @method Models\DescribeResetInstanceBlueprintsResponse DescribeResetInstanceBlueprints(Models\DescribeResetInstanceBlueprintsRequest $req) This API is used to query the image information of a reset instance.
 * @method Models\DescribeScenesResponse DescribeScenes(Models\DescribeScenesRequest $req) This API is used to query the list of scenes.
 * @method Models\DescribeSnapshotsResponse DescribeSnapshots(Models\DescribeSnapshotsRequest $req) This API is used to query the list of snapshots.
 * @method Models\DescribeSnapshotsDeniedActionsResponse DescribeSnapshotsDeniedActions(Models\DescribeSnapshotsDeniedActionsRequest $req) This API is used to query the list of operation limits of one or more snapshots.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query the list of AZs in a region.
 * @method Models\DetachCcnResponse DetachCcn(Models\DetachCcnRequest $req) This API is used to disassociate with a CCN instance.
 * @method Models\DetachDisksResponse DetachDisks(Models\DetachDisksRequest $req) This API is used to detach one or more cloud disks.
 * @method Models\DisassociateInstancesKeyPairsResponse DisassociateInstancesKeyPairs(Models\DisassociateInstancesKeyPairsRequest $req) This API is used to unbind an instance from the specified key pair.

* Only instances on LINUX_UNIX in [RUNNING, STOPPED] status are supported. Instances in `RUNNING` status will be forcibly shut down before unbinding.
* After a key pair is unassociated from an instance, you can log in to the instance with password.
* If no password was set, you cannot log in to the instance with SSH after unbinding. You can call the ResetInstancesPassword API to set a login password.
* Batch operations are supported. The maximum number of instances in each request is 100.
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 * @method Models\ImportKeyPairResponse ImportKeyPair(Models\ImportKeyPairRequest $req) This API is used to import the specified key pair.
 * @method Models\InquirePriceCreateBlueprintResponse InquirePriceCreateBlueprint(Models\InquirePriceCreateBlueprintRequest $req) This API is used to query the price of a created image.
 * @method Models\InquirePriceCreateDisksResponse InquirePriceCreateDisks(Models\InquirePriceCreateDisksRequest $req) This API is used to query the price of purchasing cloud disks.
 * @method Models\InquirePriceCreateInstancesResponse InquirePriceCreateInstances(Models\InquirePriceCreateInstancesRequest $req) This API is used to query the price of a created instance.
 * @method Models\InquirePriceRenewDisksResponse InquirePriceRenewDisks(Models\InquirePriceRenewDisksRequest $req) This API is used to query the price of renewing cloud disks.
 * @method Models\InquirePriceRenewInstancesResponse InquirePriceRenewInstances(Models\InquirePriceRenewInstancesRequest $req) This API is used to query the price of renewing one or more instances.
 * @method Models\IsolateDisksResponse IsolateDisks(Models\IsolateDisksRequest $req) This API is used to return one or more Lighthouse cloud disks.

You can only perform this operation on `UNATTACHED` disks.
After the successful call of the API, the cloud disk goes to the SHUTDOWN state.
Up to 20 instances are supported at one time. 
This API is async. After the request is sent, a `RequestId` is returned. At this time, the operation is not completed yet. To check the result, you need to call  [DescribeDisks](https://intl.cloud.tencent.com/document/product/1207/66093?from_cn_redirect=1). If the latest operation status (LatestOperationState) of the disk is `SUCCESS`, the operation is successful.
 * @method Models\IsolateInstancesResponse IsolateInstances(Models\IsolateInstancesRequest $req) This API is used to return one or more Lighthouse instances. 
* Only `RUNNING` and `STOPPED` instances can be returned. 
* The instance status goes to `SHUTDOWN` after the API is called successfully. 
* Batch operations are supported. Up to 20 resources (including instances and data disks) can be returned in each request. 
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 * @method Models\ModifyBlueprintAttributeResponse ModifyBlueprintAttribute(Models\ModifyBlueprintAttributeRequest $req) This API is used to modify an image attribute.
 * @method Models\ModifyDisksAttributeResponse ModifyDisksAttribute(Models\ModifyDisksAttributeRequest $req) This API is used to modify cloud disk attributes.
 * @method Models\ModifyDisksRenewFlagResponse ModifyDisksRenewFlag(Models\ModifyDisksRenewFlagRequest $req) This API is used to modify the configuration of auto-renewal of cloud disks.
 * @method Models\ModifyFirewallRuleDescriptionResponse ModifyFirewallRuleDescription(Models\ModifyFirewallRuleDescriptionRequest $req) This API is used to modify the description of a single firewall rule.

* `FirewallVersion` is used to specify the version of the firewall to be manipulated. If the `FirewallVersion` value passed in is not equal to the current latest version of the firewall, a failure will be returned. If `FirewallVersion` is not passed in, the description of the specified rule will be modified directly.

In the `FirewallRule` parameter:
* Valid values of the `Protocol` field include `TCP`, `UDP`, `ICMP`, and `ALL`.
* For the `Port` field, you can enter only `ALL`, a single port number, several port numbers separated by commas, or a port range indicated by two port numbers separated by a minus sign. If `Port` is a range, the port number on the left of the minus sign must be smaller than the one on the right. If `Protocol` is not `TCP` or `UDP`, `Port` can only be empty or `ALL`. The length of the `Port` field cannot exceed 64 characters.
* For the `CidrBlock` field, you can enter any string that conforms to the CIDR format standard. Multi-Tenant network isolation rules take precedence over private network rules in the firewall.
* For the `Action` field, you can enter only `ACCEPT` or `DROP`.
* The length of the `FirewallRuleDescription` field cannot exceed 64 characters.
 * @method Models\ModifyFirewallRulesResponse ModifyFirewallRules(Models\ModifyFirewallRulesRequest $req) This API is used to reset the firewall rules of an instance.

This API deletes all firewall rules of the current instance first and then adds new rules.

* `FirewallVersion` is used to specify the version of the firewall to be manipulated. If the `FirewallVersion` value passed in is not equal to the current latest version of the firewall, a failure will be returned. If `FirewallVersion` is not passed in, the specified rule will be reset directly.

In the `FirewallRules` parameter:
* Valid values of the `Protocol` field include `TCP`, `UDP`, `ICMP`, and `ALL`.
* For the `Port` field, you can enter only `ALL`, a single port number, several port numbers separated by commas, or a port range indicated by two port numbers separated by a minus sign. If `Port` is a range, the port number on the left of the minus sign must be smaller than the one on the right. If `Protocol` is not `TCP` or `UDP`, `Port` can only be empty or `ALL`. The length of the `Port` field cannot exceed 64 characters.
* For the `CidrBlock` field, you can enter any string that conforms to the CIDR format standard. Multi-Tenant network isolation rules take precedence over private network rules in the firewall.
* For the `Action` field, you can enter only `ACCEPT` or `DROP`.
* The length of the `FirewallRuleDescription` field cannot exceed 64 characters.
 * @method Models\ModifyInstancesAttributeResponse ModifyInstancesAttribute(Models\ModifyInstancesAttributeRequest $req) This API is used to modify an instance attribute. 
* The instance name is used only for users’ convenience. 
* Batch operations are supported. The maximum number of instances in each request is 100.
 * @method Models\ModifyInstancesBundleResponse ModifyInstancesBundle(Models\ModifyInstancesBundleRequest $req) This API is used change one or more Lighthouse instance bundles. 
* Only `RUNNING` and `STOPPED` instances can be changed. 
* Batch operations are supported. The maximum number of instances in each request is 30. 
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 * @method Models\ModifyInstancesLoginKeyPairAttributeResponse ModifyInstancesLoginKeyPairAttribute(Models\ModifyInstancesLoginKeyPairAttributeRequest $req) This API is used to set the attributes of the default login key pair of an instance.


 * @method Models\ModifyInstancesRenewFlagResponse ModifyInstancesRenewFlag(Models\ModifyInstancesRenewFlagRequest $req) This API is used to change the auto-renewal setting of monthly-subscribed instances. 

* Instances with auto-renewal enabled are automatically renewed on a monthly basis upon the expiration. 
* Batch operations are supported. Up to 100 instances per request is allowed.
 * @method Models\ModifySnapshotAttributeResponse ModifySnapshotAttribute(Models\ModifySnapshotAttributeRequest $req) This API is used to modify the attributes of a snapshot.
<li>The snapshot name is used only for users’ convenience.</li>
 * @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) This API is used to restart instances.

* You can only perform this operation on instances whose status is `RUNNING`.
* The instance status will become `REBOOTING` when the API is called successfully and will become `RUNNING` when the instance is successfully restarted.
* Batch operations are supported. The maximum number of instances in each request is 100.
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 * @method Models\RenewDisksResponse RenewDisks(Models\RenewDisksRequest $req) This API is used to renew one or more Lighthouse cloud disks.

This operation can only be performed on data disks with the status of `ATTACHED`, `UNATTACHED` or `SHUTDOWN`.
Up to 50 cloud disks are supported at one time.
This API is async. After the request is sent, a `RequestId` is returned. At this time, the operation is not completed yet. To check the result, you need to call  [DescribeDisks](https://intl.cloud.tencent.com/document/product/1207/66093?from_cn_redirect=1). If the latest operation status (LatestOperationState) of the disk is `SUCCESS`, the operation is successful.
 * @method Models\RenewInstancesResponse RenewInstances(Models\RenewInstancesRequest $req) This API is used to renew one or more Lighthouse instances.
* You can only perform this operation on instances whose status is `RUNNING`, `STOPPED` and `SHUTDOWN`.
* Batch operations are supported. Up to 100 instances are supported in each request.
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 * @method Models\ResetAttachCcnResponse ResetAttachCcn(Models\ResetAttachCcnRequest $req) This API is used to apply for association again after a CCN instance association application expires.
 * @method Models\ResetInstanceResponse ResetInstance(Models\ResetInstanceRequest $req) This API is used to reinstall the image on the specified instance.

* If you specify a `BlueprintId`, the specified image is used; otherwise, the image used by the current instance is used.
* The system disk will be formatted and reset. Therefore, make sure that no important files are stored on the system disk.
* Currently, this API does not support switching the operating system between `LINUX_UNIX` and `WINDOWS` for instances.
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 * @method Models\ResetInstancesPasswordResponse ResetInstancesPassword(Models\ResetInstancesPasswordRequest $req) This API is used to reset the password of the instance OS to a user-specified password.
* You can only use this API to modify the password of the admin account. The name of the admin account varies by OS (on Windows, it is `Administrator`; on Ubuntu, it is `ubuntu`; on other systems, it is `root`).
* Batch operations are supported. You can reset the passwords of multiple instances to the same one. The maximum number of instances in each request is 100.
* It’s recommended to shut down the instance first and then reset the password. If the instance is running, this API will try to shut it down normally. If the attempt fails, it will force to instance to shut down.
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
Note: Just like powering off a physical PC, a forced shutdown may cause data loss or the corruption of file system.
 * @method Models\StartInstancesResponse StartInstances(Models\StartInstancesRequest $req) This API is used to start one or more instances.

* You can only perform this operation on instances whose status is `STOPPED`.
* The instance status will become `STARTING` when the API is called successfully and will become `RUNNING` when the instance is successfully started.
* Batch operations are supported. The maximum number of instances in each request is 100.
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 * @method Models\StopInstancesResponse StopInstances(Models\StopInstancesRequest $req) This API is used to shut down one or more instances.
* You can only perform this operation on instances whose status is `RUNNING`.
* The instance status will become `STOPPING` when the API is called successfully and will become `STOPPED` when the instance is successfully shut down.
* Batch operations are supported. The maximum number of instances in each request is 100.
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 * @method Models\TerminateDisksResponse TerminateDisks(Models\TerminateDisksRequest $req) This API is used to terminate one or more cloud disk.
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) This API is used to terminate one or more instances.

* Instances in `SHUTDOWN` status can be terminated through this API and cannot be recovered.
* Batch operations are supported. The allowed maximum number of instances in each request is 100.
* This API is async. After the request is sent successfully, a `RequestId` will be returned. At this time, the operation is not completed immediately. The result of the instance operation can be queried by calling the `DescribeInstances` API. If the latest operation status (LatestOperationState) of the instance is `SUCCESS`, the operation is successful.
 */

class LighthouseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lighthouse.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lighthouse";

    /**
     * @var string
     */
    protected $version = "2020-03-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("lighthouse")."\\"."V20200324\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
