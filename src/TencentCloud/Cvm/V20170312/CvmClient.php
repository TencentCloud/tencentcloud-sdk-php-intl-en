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

namespace TencentCloud\Cvm\V20170312;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cvm\V20170312\Models as Models;

/**
* @method Models\AllocateHostsResponse AllocateHosts(Models\AllocateHostsRequest $req) This API is used to create CDH instances with specified configuration.
* When HostChargeType is PREPAID, the HostChargePrepaid parameter must be specified.
* @method Models\AssociateInstancesKeyPairsResponse AssociateInstancesKeyPairs(Models\AssociateInstancesKeyPairsRequest $req) This API is used to associate key pairs with instances.

* If the public key of a key pair is written to the `SSH` configuration of the instance, users will be able to log in to the instance with the private key of the key pair.
* If the instance is already associated with a key, the old key will become invalid.
If you currently use a password to log in, you will no longer be able to do so after you associate the instance with a key.
* Batch operations are supported. The maximum number of instances in each request is 100. If any instance in the request cannot be associated with a key, you will get an error code.
* @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to associate security groups with specified instances.
* @method Models\CreateDisasterRecoverGroupResponse CreateDisasterRecoverGroup(Models\CreateDisasterRecoverGroupRequest $req) This API is used to create a [spread placement group](https://cloud.tencent.com/document/product/213/15486). After you create one, you can specify it for an instance when you [create the instance](https://cloud.tencent.com/document/api/213/15730), 
* @method Models\CreateImageResponse CreateImage(Models\CreateImageRequest $req) This API is used to create a new image with the system disk of an instance. The image can be used to create new instances.
* @method Models\CreateKeyPairResponse CreateKeyPair(Models\CreateKeyPairRequest $req) This API is used to create an `OpenSSH RSA` key pair, which you can use to log in to a `Linux` instance.

* You only need to specify a name, and the system will automatically create a key pair and return its `ID` and the public and private keys.
* The name of the key pair must be unique.
* You can save the private key to a file and use it as an authentication method for `SSH`.
* Tencent Cloud does not save users’ private keys. Be sure to save it yourself.
* @method Models\DeleteDisasterRecoverGroupsResponse DeleteDisasterRecoverGroups(Models\DeleteDisasterRecoverGroupsRequest $req) This API is used to delete a [spread placement group](https://cloud.tencent.com/document/product/213/15486). Only empty placement groups can be deleted. To delete a non-empty group, you need to terminate all the CVM instances in it first. Otherwise, the deletion will fail.
* @method Models\DeleteImagesResponse DeleteImages(Models\DeleteImagesRequest $req) This API is used to delete images.

* If the [ImageState](https://cloud.tencent.com/document/api/213/9452#image_state) of an image is `Creating` or `In Use`, it cannot be deleted. Use [DescribeImages](https://cloud.tencent.com/document/api/213/9418) to query the image state.
* You can only create up to 10 custom images in each region. If you have used up the quota, you can delete images to create new ones.
* A shared image cannot be deleted.
* @method Models\DeleteKeyPairsResponse DeleteKeyPairs(Models\DeleteKeyPairsRequest $req) This API is used to delete the key pairs hosted in Tencent Cloud.

* You can delete multiple key pairs at the same time.
* A key pair used by an instance or image cannot be deleted. Therefore, you need to verify whether all the key pairs have been deleted successfully.
* @method Models\DescribeDisasterRecoverGroupQuotaResponse DescribeDisasterRecoverGroupQuota(Models\DescribeDisasterRecoverGroupQuotaRequest $req) This API is used to query the quota of [spread placement groups](https://cloud.tencent.com/document/product/213/15486).
* @method Models\DescribeDisasterRecoverGroupsResponse DescribeDisasterRecoverGroups(Models\DescribeDisasterRecoverGroupsRequest $req) This API is used to query the information on [spread placement groups](https://cloud.tencent.com/document/product/213/15486).
* @method Models\DescribeHostsResponse DescribeHosts(Models\DescribeHostsRequest $req) This API is used to query the details of CDH instances.
* @method Models\DescribeImageQuotaResponse DescribeImageQuota(Models\DescribeImageQuotaRequest $req) This API is used to query the image quota of an user account.
* @method Models\DescribeImageSharePermissionResponse DescribeImageSharePermission(Models\DescribeImageSharePermissionRequest $req) This API is used to query image sharing information.
* @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) This API is used to view the list of images.

* You specify the image ID or set filters to query the details of certain images.
* You can specify `Offset` and `Limit` to select a certain part of the results. By default, the information on the first 20 matching results is returned.
* @method Models\DescribeImportImageOsResponse DescribeImportImageOs(Models\DescribeImportImageOsRequest $req) This API is used to query the list of supported operating systems of imported images.
* @method Models\DescribeInstanceTypeConfigsResponse DescribeInstanceTypeConfigs(Models\DescribeInstanceTypeConfigsRequest $req) This API is used to query the model configuration of an instance.

* You can filter the query results with `zone` or `instance-family`. For more information on filtering conditions, see `Filter`.
* If no parameter is defined, the model configuration of all the instances in the specified region will be returned.
* @method Models\DescribeInstanceVncUrlResponse DescribeInstanceVncUrl(Models\DescribeInstanceVncUrlRequest $req) This API is used to query the VNC URL of an instance.

* It does not support `STOPPED` CVMs.
* A VNC URL is only valid for 15 sec. If you do not access the URL within 15 seconds, it will become invalid and you will have to query another one.
* Once you access a VNC URL, it will become invalid and you will have to query another one.
* If the connection breaks up, you can make up to 30 requests per minute to reestablish the connection.
* After you get the value of `InstanceVncUrl`, you need to append `InstanceVncUrl=xxxx` to the end of the link <https://img.qcloud.com/qcloud/app/active_vnc/index.html?>.
  - Parameter `InstanceVncUrl`: the value of `InstanceVncUrl` returned after a successful API call.

    The final URLs are in the following format:

```
https://img.qcloud.com/qcloud/app/active_vnc/index.html?InstanceVncUrl=wss%3A%2F%2Fbjvnc.qcloud.com%3A26789%2Fvnc%3Fs%3DaHpjWnRVMFNhYmxKdDM5MjRHNlVTSVQwajNUSW0wb2tBbmFtREFCTmFrcy8vUUNPMG0wSHZNOUUxRm5PMmUzWmFDcWlOdDJIbUJxSTZDL0RXcHZxYnZZMmRkWWZWcEZia2lyb09XMzdKNmM9
```

* @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the details of instances.

* You can filter the query results with the instance `ID`, name, or billing method. See `Filter` for more information.
* If no parameter is defined, a certain number of instances under the current account will be returned. The number is specified by `Limit` and is 20 by default.
* @method Models\DescribeInstancesOperationLimitResponse DescribeInstancesOperationLimit(Models\DescribeInstancesOperationLimitRequest $req) This API is used to query limitations on operations on an instance.

* Currently you can use this API to query the maximum number of times you can modify the configuration of an instance.
* @method Models\DescribeInstancesStatusResponse DescribeInstancesStatus(Models\DescribeInstancesStatusRequest $req) This API is used to query the status of instances.

* You can query the status of an instance with its `ID`.
* If no parameter is defined, the status of a certain number of instances under the current account will be returned. The number is specified by `Limit` and is 20 by default.
* @method Models\DescribeInternetChargeTypeConfigsResponse DescribeInternetChargeTypeConfigs(Models\DescribeInternetChargeTypeConfigsRequest $req) This API is used to query the network billing methods.
* @method Models\DescribeKeyPairsResponse DescribeKeyPairs(Models\DescribeKeyPairsRequest $req) This API is used to query key pairs.

* A key pair is a pair of keys generated by an algorithm in which the public key is available to the public and the private key is available only to the user. You can use this API to query the public key but not the private key.
* @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query regions.
* @method Models\DescribeZoneInstanceConfigInfosResponse DescribeZoneInstanceConfigInfos(Models\DescribeZoneInstanceConfigInfosRequest $req) This API is used to query the configurations of models in an availability zone.
* @method Models\DisassociateInstancesKeyPairsResponse DisassociateInstancesKeyPairs(Models\DisassociateInstancesKeyPairsRequest $req) This API is used to unbind one or more key pairs from one or more instances.

* It only supports [`STOPPED`](https://cloud.tencent.com/document/product/213/15753#InstanceStatus) Linux instances.
* After a key pair is disassociated from an instance, you can log in to the instance with password.
* If you did not set a password for the instance, you will not be able to log in via SSH after the unbinding. In this case, you can call [ResetInstancesPassword](https://cloud.tencent.com/document/api/213/15736) to set a login password.
* Batch operations are supported. The maximum number of instances in each request is 100. If instances not available for the operation are selected, you will get an error code.
* @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to disassociate security groups from instances.
* @method Models\ImportImageResponse ImportImage(Models\ImportImageRequest $req) This API is used to import images. Imported images can be used to create instances. 
* @method Models\ImportKeyPairResponse ImportKeyPair(Models\ImportKeyPairRequest $req) This API is used to import key pairs.

* You can use this API to import key pairs to a user account, but the key pairs will not be automatically associated with any instance. You may use [AssociasteInstancesKeyPair](https://cloud.tencent.com/document/api/213/9404) to associate key pairs with instances.
* You need to specify the names of the key pairs and the content of the public keys.
* If you only have private keys, you can convert them to public keys with the `SSL` tool before importing them.
* @method Models\InquiryPriceResetInstanceResponse InquiryPriceResetInstance(Models\InquiryPriceResetInstanceRequest $req) This API is used to query the price for reinstalling an instance.

* If you have specified the `ImageId` parameter, the price query is performed with the specified image. Otherwise, the image used by the current instance is used.
* You can only query the price for reinstallation caused by switching between Linux and Windows OS. And the [system disk type](https://cloud.tencent.com/document/api/213/15753#SystemDisk) of the instance must be `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`.
* Currently, this API only supports instances in Mainland China regions.
* @method Models\InquiryPriceResetInstancesInternetMaxBandwidthResponse InquiryPriceResetInstancesInternetMaxBandwidth(Models\InquiryPriceResetInstancesInternetMaxBandwidthRequest $req) This API is used to query the price for upgrading the public bandwidth cap of an instance.

* The allowed bandwidth cap varies for different models. For details, see [Purchasing Network Bandwidth](https://cloud.tencent.com/document/product/213/509).
* For bandwidth billed by the `TRAFFIC_POSTPAID_BY_HOUR` method, changing the bandwidth cap through this API takes effect in real time. You can increase or reduce bandwidth within applicable limits.
* @method Models\InquiryPriceResetInstancesTypeResponse InquiryPriceResetInstancesType(Models\InquiryPriceResetInstancesTypeRequest $req) This API is used to query the price for adjusting the instance model.

* Currently, you can only use this API to query the prices of instances whose [system disk type](https://cloud.tencent.com/document/api/213/9452#block_device) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`.
* Currently, you cannot use this API to query the prices of [CDH](https://cloud.tencent.com/document/product/416) instances.
* @method Models\InquiryPriceResizeInstanceDisksResponse InquiryPriceResizeInstanceDisks(Models\InquiryPriceResizeInstanceDisksRequest $req) This API is used to query the price for expanding data disks of an instance.

* Currently, you can only use this API to query the price of non-elastic data disks whose [disk type](/document/api/213/9452#block_device) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`. You can use [`DescribeDisks`](https://cloud.tencent.com/document/api/362/16315) to check whether a disk is elastic. If the `Portable` field in the response is `false`, it means that the disk is non-elastic.
* Currently, you cannot use this API to query the price for [CDH](https://cloud.tencent.com/document/product/416) instances. *Also, you can only query the price of expanding one data disk at a time.
* @method Models\InquiryPriceRunInstancesResponse InquiryPriceRunInstances(Models\InquiryPriceRunInstancesRequest $req) This API is used to query the price of creating instances. You can only use this API for instances whose configuration is within the purchase limit. For more information, see [RunInstances](https://cloud.tencent.com/document/api/213/15730).
* @method Models\ModifyDisasterRecoverGroupAttributeResponse ModifyDisasterRecoverGroupAttribute(Models\ModifyDisasterRecoverGroupAttributeRequest $req) This API is used to modify the attributes of [spread placement groups](https://cloud.tencent.com/document/product/213/15486).
* @method Models\ModifyHostsAttributeResponse ModifyHostsAttribute(Models\ModifyHostsAttributeRequest $req) This API is used to modify the attributes of a CDH instance, such as instance name and renewal flag. One of the two parameters, HostName and RenewFlag, must be set, but you cannot set both of them at the same time.
* @method Models\ModifyImageAttributeResponse ModifyImageAttribute(Models\ModifyImageAttributeRequest $req) This API is used to modify image attributes.

* Attributes of shared images cannot be modified.
* @method Models\ModifyImageSharePermissionResponse ModifyImageSharePermission(Models\ModifyImageSharePermissionRequest $req) This API is used to modify image sharing information.

* The accounts with which an image is shared can use the shared image to create instances.
* Each custom image can be shared with up to 50 accounts.
* You can use a shared image to create instances, but you cannot change its name and description.
* If an image is shared with another account, the shared image will be in the same region as the original image.

* @method Models\ModifyInstancesAttributeResponse ModifyInstancesAttribute(Models\ModifyInstancesAttributeRequest $req) This API is used to modify the attributes of an instance. Currently you can only use the API to modify the name and the associated security groups of the instance.

* Instance names are used only for users’ convenience. Tencent Cloud does not use the name for ticket submission or instance management.
* Batch operations are supported. The maximum number of instances in each request is 100.
* When you change the security groups associated with an instance, the original security groups will be disassociated.
* @method Models\ModifyInstancesProjectResponse ModifyInstancesProject(Models\ModifyInstancesProjectRequest $req) This API is used to change the project to which an instance belongs.

* Project is a virtual concept. Users can create multiple projects under one account, manage different resources in each project, and assign different instances to different projects. You may use [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) to query instances and use the project ID to filter results.
* You cannot modify the project of an instance which is bound to a load balancer. You need to unbind the load balancer from the instance with [`DeregisterInstancesFromLoadBalancer`](https://cloud.tencent.com/document/api/214/1258) before using this API.
* If you modify the project of an instance, security groups associated with the instance will be automatically disassociated. You can use [`ModifySecurityGroupsOfInstance`](https://cloud.tencent.com/document/api/213/1367) to associate the instance with certian security groups again.
* Batch operations are supported. The maximum number of instances in each request is 100.
* @method Models\ModifyInstancesVpcAttributeResponse ModifyInstancesVpcAttribute(Models\ModifyInstancesVpcAttributeRequest $req) This API is used to modify the VPC attributes of an instance, such as the VPC IP address.
* By default, the instances will shut down when you perform this operation and restart upon completion.
* If the specified VPC ID and subnet ID (the subnet must be in the same availability zone as the instance) are different from the VPC where the specified instance resides, the instance will be migrated to a subnet of the specified VPC. Before performing this operation, make sure that the specified instance is not bound with an [ENI](https://cloud.tencent.com/document/product/576) or [CLB](https://cloud.tencent.com/document/product/214).
* @method Models\ModifyKeyPairAttributeResponse ModifyKeyPairAttribute(Models\ModifyKeyPairAttributeRequest $req) This API is used to modify the attributes of key pairs.

* This API modifies the name and description of the key pair identified by the key pair ID.
* The name of the key pair must be unique.
* Key pair ID is the unique identifier of a key pair and cannot be modified.
* @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) This API is used to restart instances.

* You can only perform this operation on instances whose status is `RUNNING`.
* If the API is called successfully, the instance status will become `REBOOTING`. After the instance is restarted, its status will become `RUNNING` again.
* Forced restart is supported. A forced restart is similar to switching off the power of a physical computer and starting it again. It may cause data loss or file system corruption. Be sure to only force start a CVM when it cannot be restarted normally.
* Batch operations are supported. The maximum number of instances in each request is 100.
* @method Models\ResetInstanceResponse ResetInstance(Models\ResetInstanceRequest $req) This API is used to reinstall the operating system of the specified instance.

* If you specify an `ImageId`, the specified image is used. Otherwise, the image used by the current instance is used.
* The system disk will be formatted and reset. Therefore, make sure that no important files are stored on the system disk.
* If the operating system switches between `Linux` and `Windows`, the system disk `ID` of the instance will change, and the snapshots that are associated with the system disk can no longer be used to roll back and restore data.
* If no password is specified, you will get a random password via internal message.
* You can only use this API to switch the operating system between `Linux` and `Windows` for instances whose [system disk type](https://cloud.tencent.com/document/api/213/9452#SystemDisk) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`.
* Currently, this API only supports instances in Mainland China regions.
* @method Models\ResetInstancesInternetMaxBandwidthResponse ResetInstancesInternetMaxBandwidth(Models\ResetInstancesInternetMaxBandwidthRequest $req) This API is used to change the public bandwidth cap of an instance.

* The allowed bandwidth cap varies for different models. For details, see [Purchasing Network Bandwidth](https://cloud.tencent.com/document/product/213/509).
* For bandwidth billed by the `TRAFFIC_POSTPAID_BY_HOUR` method, changing the bandwidth cap through this API takes effect in real time. Users can increase or reduce bandwidth within applicable limits.
* @method Models\ResetInstancesPasswordResponse ResetInstancesPassword(Models\ResetInstancesPasswordRequest $req) This API is used to reset the password of the instance OS to a user-specified password.

* You can only use this API to modify the password of the administrator account. The name of the administrator account varies depending on the operating system. On Windows, it is `Administrator`; `Ubuntu`, `ubuntu`; `Linux`, `root`.)
* To reset the password of a running instance, you need to explicitly specify the force shutdown parameter `ForceStop`. Otherwise, you can only reset passwords of instances that have been shut down.
* Batch operations are supported. You can reset the passwords of multiple instances to the same one. The maximum number of instances in each request is 100.
* @method Models\ResetInstancesTypeResponse ResetInstancesType(Models\ResetInstancesTypeRequest $req) This API is used to change the model of an instance.
* You can only use this API to change the models of instances whose [system disk type](/document/api/213/9452#block_device) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`.
* Currently, you cannot use this API to change the models of [CDH](https://cloud.tencent.com/document/product/416) instances.
* @method Models\ResizeInstanceDisksResponse ResizeInstanceDisks(Models\ResizeInstanceDisksRequest $req) This API (ResizeInstanceDisks) is used to expand the data disks of an instance.

* Currently, you can only use the API to expand non-elastic data disks whose [disk type](/document/api/213/9452#block_device) is `CLOUD_BASIC`, `CLOUD_PREMIUM`, or `CLOUD_SSD`. You can use [`DescribeDisks`](https://cloud.tencent.com/document/api/362/16315) to check whether a disk is elastic. If the `Portable` field in the response is `false`, it means that the disk is non-elastic.
* Currently, this API does not support [CDH](https://cloud.tencent.com/document/product/416) instances.
* Currently, only one data disk can be expanded at a time.
* @method Models\RunInstancesResponse RunInstances(Models\RunInstancesRequest $req) This API is used to create one or more instances with a specified configuration.

* After an instance is created successfully, it will start up automatically, and the [instance state](/document/api/213/9452#instance_state) will become "Running".
* If you create a pay-as-you-go instance billed on an hourly basis, an amount equivalent to the hourly rate will be frozen before the creation. Make sure your account balance is sufficient before calling this API.
* The number of instances you can purchase through this API is subject to the [CVM instance purchase limit](https://cloud.tencent.com/document/product/213/2664). Both the instances created through this API and the console will be counted toward the quota.
* This API is an async API. An instance `ID` list will be returned after you successfully make a creation request. However, it does not mean the creation has been completed. The state of the instance will be `Creating` during the creation. You can use [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) to query the status of the instance. If the status changes from `Creating` to `Running`, it means that the instance has been created successfully.
* @method Models\StartInstancesResponse StartInstances(Models\StartInstancesRequest $req) This API is used to start instances.

* You can only perform this operation on instances whose status is `STOPPED`.
* The instance status will become `STARTING` when the API is called successfully and `RUNNING` when the instance is successfully started.
* Batch operations are supported. The maximum number of instances in each request is 100.
* @method Models\StopInstancesResponse StopInstances(Models\StopInstancesRequest $req) This API is used to shut down instances.

* You can only perform this operation on instances whose status is `RUNNING`.
* The instance status will become `STOPPING` when the API is called successfully and `STOPPED` when the instance is successfully shut down.
* Forced shutdown is supported. A forced shutdown is similar to switching off the power of a physical computer. It may cause data loss or file system corruption. Be sure to only force shut down a CVM when it cannot be sht down normally.
* Batch operations are supported. The maximum number of instances in each request is 100.
* @method Models\SyncImagesResponse SyncImages(Models\SyncImagesRequest $req) This API is used to sync a custom image to other regions.

* Each API call syncs a single image.
* This API supports syncing an image to multiple regions.
* Each account can have up to 10 custom images in each region. 
* @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) This API is used to return instances.

* Use this API to return instances that are no longer required.
* Pay-as-you-go instances can be returned directly through this API.
* When this API is called for the first time, the instance will be moved to the recycle bin. When this API is called for the second time, the instance will be terminated and cannot be recovered.
* Batch operations are supported. The allowed maximum number of instances in each request is 100.
 */

class CvmClient extends AbstractClient
{
    protected $endpoint = "cvm.tencentcloudapi.com";

    protected $version = "2017-03-12";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cvm")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
