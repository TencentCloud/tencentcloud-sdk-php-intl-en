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

namespace TencentCloud\Cbs\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cbs\V20170312\Models as Models;

/**
 * @method Models\ApplySnapshotResponse ApplySnapshot(Models\ApplySnapshotRequest $req) This API (ApplySnapshot) is used to roll back a snapshot to the original cloud disk.

* The snapshot can only be rolled back to the original cloud disk. For data disk snapshots, if you need to copy the snapshot data to other cloud disks, use the API [CreateDisks](https://intl.cloud.tencent.com/document/product/362/16312?from_cn_redirect=1) to create an elastic cloud disk and then copy the snapshot data to the created cloud disk. 
* The snapshot for rollback must be in NORMAL status. The snapshot status can be queried in the SnapshotState field in the output parameters through the API [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
* For elastic cloud disks, the cloud disk must be in UNMOUNTED status. The cloud disk status can be queried in the Attached field returned by the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1). For non-elastic cloud disks purchased together with instances, the instance must be in SHUTDOWN status. The instance status can be queried through the API [DescribeInstancesStatus](https://intl.cloud.tencent.com/document/product/213/15738?from_cn_redirect=1).
 * @method Models\AttachDisksResponse AttachDisks(Models\AttachDisksRequest $req) This API (AttachDisks) is used to mount cloud disks.
 
* Batch operations are supported. Multiple cloud disks can be mounted to a CVM. If there is a cloud disk that does not allow this operation, the operation is not performed and a specific error code is returned.
* This API is an asynchronous API. If the request for mounting the cloud disk successfully returns results, the operation of mounting cloud disk has been initiated at the background. You can use the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1) to query the cloud disk status. If the status changes from "ATTACHING" to "ATTACHED", the cloud disk is mounted.
 * @method Models\BindAutoSnapshotPolicyResponse BindAutoSnapshotPolicy(Models\BindAutoSnapshotPolicyRequest $req) This API (BindAutoSnapshotPolicy) is used to bind the cloud disk to the specified scheduled snapshot policy.

* For the scheduled snapshot policy limit of each region, see [Scheduled Snapshots](https://intl.cloud.tencent.com/document/product/362/8191?from_cn_redirect=1).
* When a cloud disk that is bound to a scheduled snapshot policy is in the unused state (that is, an elastic cloud disk has not been mounted or the server of an inelastic disk is powered off) scheduled snapshots are not created.
 * @method Models\CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicy(Models\CreateAutoSnapshotPolicyRequest $req) This API (CreateAutoSnapshotPolicy) is used to create a scheduled snapshot policy.

* For the limits on the number of scheduled snapshot policies that can be created in each region, see [Scheduled Snapshots](https://intl.cloud.tencent.com/document/product/362/8191?from_cn_redirect=1).
* The quantity and capacity of the snapshots that can be created in each region are limited. For more information, see the **Snapshots** page on the Tencent Cloud Console. If the number of snapshots exceeds the quota, the creation of the scheduled snapshots will fail.
 * @method Models\CreateDisksResponse CreateDisks(Models\CreateDisksRequest $req) This API is used to create one or more cloud disks.

* This API supports creating a cloud disk with a data disk snapshot so that the snapshot data can be copied to the purchased cloud disk.
* This API is an async API. A cloud disk ID list will be returned when a request is made successfully, but it does not mean that the creation has been completed. You can call the [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1) API to query cloud disks by `DiskId`. If a new cloud disk can be found and its state is 'UNATTACHED' or 'ATTACHED', it means that the cloud disk has been created successfully.
 * @method Models\CreateSnapshotResponse CreateSnapshot(Models\CreateSnapshotRequest $req) This API (CreateSnapshot) is used to create a snapshot of a specified cloud disk.

* Snapshots can only be created for cloud disks with the snapshot capability. To check whether a cloud disk has the snapshot capability, see the SnapshotAbility field returned by the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
* For the number of snapshots that can be created, please see [Product Usage Restriction](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
 * @method Models\DeleteAutoSnapshotPoliciesResponse DeleteAutoSnapshotPolicies(Models\DeleteAutoSnapshotPoliciesRequest $req) This API (DeleteAutoSnapshotPolicies) is used to delete scheduled snapshot policies.

* Batch operations are supported. If one of the scheduled snapshot policies in a batch cannot be deleted, the operation is not performed and a specific error code is returned.
 * @method Models\DeleteSnapshotsResponse DeleteSnapshots(Models\DeleteSnapshotsRequest $req) This API (DeleteSnapshots) is used to delete snapshots.

* The snapshot must be in NORMAL status. The snapshot status can be queried in the SnapshotState field in the output parameters through the API [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
* Batch operations are supported. If one of the snapshots in a batch cannot be deleted, the operation is not performed and a specific error code is returned.
 * @method Models\DescribeAutoSnapshotPoliciesResponse DescribeAutoSnapshotPolicies(Models\DescribeAutoSnapshotPoliciesRequest $req) This API (DescribeAutoSnapshotPolicies) is used to query scheduled snapshot policies.

* You can query the detailed information of scheduled snapshot policies by ID, name, or status. Insert `AND` between different values. For details on filtering information, see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit`; the default is 20) of the scheduled snapshot policy lists are returned to the current user.

 * @method Models\DescribeDiskAssociatedAutoSnapshotPolicyResponse DescribeDiskAssociatedAutoSnapshotPolicy(Models\DescribeDiskAssociatedAutoSnapshotPolicyRequest $req) This API (DescribeDiskAssociatedAutoSnapshotPolicy) is used to query the scheduled snapshot policy bound to a cloud disk.
 * @method Models\DescribeDiskConfigQuotaResponse DescribeDiskConfigQuota(Models\DescribeDiskConfigQuotaRequest $req) This API (DescribeDiskConfigQuota) is used to query the cloud disk quota.
 * @method Models\DescribeDiskOperationLogsResponse DescribeDiskOperationLogs(Models\DescribeDiskOperationLogsRequest $req) This API (DescribeDiskOperationLogs) is used to query a list of cloud disk operation logs.

This can be filtered according to the cloud disk ID. The format of cloud disk IDs is as follows: disk-a1kmcp13.

 * @method Models\DescribeDisksResponse DescribeDisks(Models\DescribeDisksRequest $req) This API (DescribeDisks) is used to query the list of cloud disks.

* The details of the cloud disk can be queried based on the ID, type or status of the cloud disk. The relationship between different conditions is AND. For more information about filtering, please see the `Filter`.
* If the parameter is empty, a certain number (specified by `Limit`; the default is 20) of cloud disk lists are returned to the current user.
 * @method Models\DescribeInstancesDiskNumResponse DescribeInstancesDiskNum(Models\DescribeInstancesDiskNumRequest $req) This API (DescribeInstancesDiskNum) is used to query the number of cloud disks mounted in the instance.

* Batch operations are supported. If multiple CVM instance IDs are specified, the returned results will list the number of cloud disks mounted on each CVM.
 * @method Models\DescribeSnapshotOperationLogsResponse DescribeSnapshotOperationLogs(Models\DescribeSnapshotOperationLogsRequest $req) This API (DescribeSnapshotOperationLogs) is used to query a list of snapshot operation logs.

You can filter according to the snapshot ID. The snapshot ID format is as follows: snap-a1kmcp13.

 * @method Models\DescribeSnapshotSharePermissionResponse DescribeSnapshotSharePermission(Models\DescribeSnapshotSharePermissionRequest $req) This API is used to query the sharing information of snapshots.
 * @method Models\DescribeSnapshotsResponse DescribeSnapshots(Models\DescribeSnapshotsRequest $req) This API (DescribeSnapshots) is used to query the details of snapshots.

* Filter the results by the snapshot ID, the ID of cloud disk, for which the snapshot is created, and the type of cloud disk, for which the snapshot is created. The relationship between different conditions is AND. For more information about filtering, please see `Filter`.
* If the parameter is empty, a certain number (specified by `Limit`; the default is 20) of snapshot lists are returned to the current user.
 * @method Models\DetachDisksResponse DetachDisks(Models\DetachDisksRequest $req) This API (DetachDisks) is used to unmount cloud disks.

* Batch operations are supported. Multiple cloud disks mounted to the same CVM can be unmounted in batch. If there is a cloud disk that does not allow this operation, the operation is not performed and a specific error code is returned.
* This API is an asynchronous API. When the request successfully returns results, the cloud disk is not unmounted from the CVM immediately. You can use the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1) to query the cloud disk status. If the status changes from "ATTACHED" to "UNATTACHED", the cloud disk is unmounted.
 * @method Models\GetSnapOverviewResponse GetSnapOverview(Models\GetSnapOverviewRequest $req) This API is used to get snapshot overview information.
 * @method Models\InquiryPriceCreateDisksResponse InquiryPriceCreateDisks(Models\InquiryPriceCreateDisksRequest $req) This API (InquiryPriceCreateDisks) is used to inquire the price for cloud disk creation.

* It supports inquiring the price for the creation of multiple cloud disks. The total price for the creation is returned.
 * @method Models\InquiryPriceResizeDiskResponse InquiryPriceResizeDisk(Models\InquiryPriceResizeDiskRequest $req) This API is used to query the price for expanding cloud disks.
 * @method Models\ModifyAutoSnapshotPolicyAttributeResponse ModifyAutoSnapshotPolicyAttribute(Models\ModifyAutoSnapshotPolicyAttributeRequest $req) This API (ModifyAutoSnapshotPolicyAttribute) is used to modify the attributes of an automatic snapshot policy.

* You can use this API to modify the attributes of a scheduled snapshot policy, including the execution policy, name, and activation.
* When modifying the number of days for retention, you must ensure that there is no clash with the permanent retention attribute. Otherwise, the entire operation will fail and a specific error code will be returned.
 * @method Models\ModifyDiskAttributesResponse ModifyDiskAttributes(Models\ModifyDiskAttributesRequest $req) * Only the project ID of elastic cloud disk can be modified. The project ID of the cloud disk created with the CVM is linked with the CVM. The project ID can be can be queried in the Portable field in the output parameters through the API [DescribeDisks](https://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1).
* "Cloud disk name" is only used by users for their management. Tencent Cloud does not use the name as the basis for ticket submission or cloud disk management.
* Batch operations are supported. If multiple cloud disk IDs are specified, all the specified cloud disks must have the same attribute. If there is a cloud disk that does not allow this operation, the operation is not performed and a specific error code is returned.
 * @method Models\ModifySnapshotAttributeResponse ModifySnapshotAttribute(Models\ModifySnapshotAttributeRequest $req) This API (ModifySnapshotAttribute) is used to modify the attributes of a specified snapshot.

* Currently, you can only modify snapshot name and change non-permanent snapshots into permanent snapshots.
* "Snapshot name" is only used by users for their management. Tencent Cloud does not use the name as the basis for ticket submission or snapshot management.
 * @method Models\ModifySnapshotsSharePermissionResponse ModifySnapshotsSharePermission(Models\ModifySnapshotsSharePermissionRequest $req) This API is used to modify snapshot sharing information.

After snapshots are shared, the accounts they are shared to can use the snapshot to create cloud disks.
* Each snapshot can be shared to at most 50 accounts.
* You can use a shared snapshot to create cloud disks, but you cannot change its name or description.
* Snapshots can only be shared with accounts in the same region.
* Only data disk snapshots can be shared.
 * @method Models\ResizeDiskResponse ResizeDisk(Models\ResizeDiskRequest $req) This API (ResizeDisk) is used to expand the capacity of the cloud disk.

* Only elastic cloud disks can be expanded. The cloud disk type can be queried in the Portable field in the output parameters through the API [DescribeDisks](https://intl.cloud.tencent.comhttps://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1?from_cn_redirect=1). For the cloud disk created along with the CVM, the capacity can only be expanded via the API [ResizeInstanceDisks](https://intl.cloud.tencent.com/document/product/213/15731?from_cn_redirect=1).
* This API is an asynchronous API. The cloud disk is not immediately expanded to the specified size as the API successfully returns results. You can use the API [DescribeDisks](https://intl.cloud.tencent.comhttps://intl.cloud.tencent.com/document/product/362/16315?from_cn_redirect=1?from_cn_redirect=1) to query the cloud disk status. The cloud disk in the status of "EXPANDING" is in the process of capacity expansion. When the status changes to "UNATTACHED", the capacity expansion is completed. 
 * @method Models\TerminateDisksResponse TerminateDisks(Models\TerminateDisksRequest $req) This API is used to return cloud disks.

* You can use this API to return cloud disks you no longer need.
* This API can be used to return pay-as-you-go cloud disks billed on hourly basis. 
* Batch operations are supported. The maximum number of cloud disks in each request is 50. If there is any specified cloud disk that cannot be returned, an error code will be returned.
 * @method Models\UnbindAutoSnapshotPolicyResponse UnbindAutoSnapshotPolicy(Models\UnbindAutoSnapshotPolicyRequest $req) This API (UnbindAutoSnapshotPolicy) is used to unbind the cloud disk from the specified scheduled snapshot policy.

* Batch operations are supported. Multiple cloud disks can be unbound from a snapshot policy at one time. 
* If the passed-in cloud disks are not bound to the current scheduled snapshot policy, they will be skipped. Only cloud disks that are bound to the current scheduled snapshot policy are processed.
 */

class CbsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cbs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("cbs")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
