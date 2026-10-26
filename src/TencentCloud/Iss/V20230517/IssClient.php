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

namespace TencentCloud\Iss\V20230517;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iss\V20230517\Models as Models;

/**
 * @method Models\AddOrganizationResponse AddOrganization(Models\AddOrganizationRequest $req) Used to add an organization.
 * @method Models\AddRecordBackupPlanResponse AddRecordBackupPlan(Models\AddRecordBackupPlanRequest $req) Used to add a recording cloud migration plan (currently applicable only to devices/video channels connected via the GB28181 protocol and gateway).
 * @method Models\AddRecordBackupTemplateResponse AddRecordBackupTemplate(Models\AddRecordBackupTemplateRequest $req) This API is used to create a video recording cloud template.
> The feature essentially pulls local device recording data to the cloud (i.e., recordings stored in the IPC camera memory card or NVR hard disk). When operating, first set the recording time period (i.e., the local device recording you want to upload to the cloud), then set the Cloud Upload Time Period and upload speed. The platform will pull the previous day's Time Period Data from the device at the specified speed during the Cloud Upload Time Period.

> Set the Cloud Upload Time Period to at least meet (Cloud Upload Time Period = previous day's recording time period / cloud upload speed multiplication). It is advisable to set about 10% more time for the Cloud Upload Time Period to avoid incomplete data retrieval due to network fluctuations.
 * @method Models\AddRecordPlanResponse AddRecordPlan(Models\AddRecordPlanRequest $req) This API is used to create a real-time cloud migration plan.
 * @method Models\AddRecordRetrieveTaskResponse AddRecordRetrieveTask(Models\AddRecordRetrieveTaskRequest $req) This API is used to create a retrieval task.
 * @method Models\AddRecordTemplateResponse AddRecordTemplate(Models\AddRecordTemplateRequest $req) Used to add a real-time cloud template.
 * @method Models\AddStreamAuthResponse AddStreamAuth(Models\AddStreamAuthRequest $req) Used to set push/pull stream authentication configuration.
 * @method Models\AddUserDeviceResponse AddUserDevice(Models\AddUserDeviceRequest $req) This API is used to add a single device. After the device is added, configure it based on the returned results, then wait for device registration or stream pushing.
 * @method Models\BatchAddVideoSnapshotConfigChannelResponse BatchAddVideoSnapshotConfigChannel(Models\BatchAddVideoSnapshotConfigChannelRequest $req) Add channels for screenshot configuration in batches.
 * @method Models\BatchAssignVLPlanChannelsResponse BatchAssignVLPlanChannels(Models\BatchAssignVLPlanChannelsRequest $req) Batch associate visual understanding plan channels
 * @method Models\BatchDeleteVideoDownloadTaskResponse BatchDeleteVideoDownloadTask(Models\BatchDeleteVideoDownloadTaskRequest $req) This API is used to delete failed local recording download tasks in batches.
 * @method Models\BatchGetVLPlanSourceFileURLResponse BatchGetVLPlanSourceFileURL(Models\BatchGetVLPlanSourceFileURLRequest $req) This API is used to batch obtain source material URLs for visual understanding plans.
 * @method Models\BatchGetVideoSnapshotImageUrlResponse BatchGetVideoSnapshotImageUrl(Models\BatchGetVideoSnapshotImageUrlRequest $req) Bulk gets screenshot image URLs
 * @method Models\BatchOperateDeviceResponse BatchOperateDevice(Models\BatchOperateDeviceRequest $req) Used for batch operations (enable, disable, delete) on devices.
 * @method Models\CallISAPIResponse CallISAPI(Models\CallISAPIRequest $req) This API can be based on the Hikvision ISUP 5.0 protocol to pass through ISAPI request data. Before calling the API, ensure the device has successfully registered to this platform using the ISUP protocol.
 * @method Models\ControlDevicePTZResponse ControlDevicePTZ(Models\ControlDevicePTZRequest $req) Used for device channel panning control, including turn, zoom scale, zoom, and aperture.
 * @method Models\ControlDevicePresetResponse ControlDevicePreset(Models\ControlDevicePresetRequest $req) Used to operate device preset positions, including settings, deletion, and calls.
 * @method Models\ControlDeviceSnapshotResponse ControlDeviceSnapshot(Models\ControlDeviceSnapshotRequest $req) Control device capture (single). Currently only support national standard devices.
 * @method Models\ControlDeviceStreamResponse ControlDeviceStream(Models\ControlDeviceStreamRequest $req) This API is used to obtain the real-time streaming address of a device.
 * @method Models\ControlRecordTimelineResponse ControlRecordTimeline(Models\ControlRecordTimelineRequest $req) This API is used to query the local recording timeline info of a device, which is stored locally on the NVR/IPC.
 * @method Models\CreateVLPlanResponse CreateVLPlan(Models\CreateVLPlanRequest $req) Creates a vision understanding plan
 * @method Models\CreateVLTemplateResponse CreateVLTemplate(Models\CreateVLTemplateRequest $req) Create a visual understanding template.
 * @method Models\CreateVideoDownloadTaskResponse CreateVideoDownloadTask(Models\CreateVideoDownloadTaskRequest $req) This API is used to create a local recording download task.
 * @method Models\CreateVideoSnapshotConfigResponse CreateVideoSnapshotConfig(Models\CreateVideoSnapshotConfigRequest $req) This API is used to create a screenshot configuration.
 * @method Models\CreateVideoSnapshotTemplateResponse CreateVideoSnapshotTemplate(Models\CreateVideoSnapshotTemplateRequest $req) Create a screenshot template.
 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) This API is used to delete domain names.
 * @method Models\DeleteOrganizationResponse DeleteOrganization(Models\DeleteOrganizationRequest $req) This API is used to delete an organization.
 * @method Models\DeleteRecordBackupPlanResponse DeleteRecordBackupPlan(Models\DeleteRecordBackupPlanRequest $req) Used to delete a video recording cloud template.
 * @method Models\DeleteRecordBackupTemplateResponse DeleteRecordBackupTemplate(Models\DeleteRecordBackupTemplateRequest $req) This API is used to delete a video recording cloud template.
 * @method Models\DeleteRecordPlanResponse DeleteRecordPlan(Models\DeleteRecordPlanRequest $req) This API is used to delete a real-time cloud migration plan.
 * @method Models\DeleteRecordRetrieveTaskResponse DeleteRecordRetrieveTask(Models\DeleteRecordRetrieveTaskRequest $req) This API is used to delete a retrieval task.
 * @method Models\DeleteRecordTemplateResponse DeleteRecordTemplate(Models\DeleteRecordTemplateRequest $req) Used to delete a real-time cloud template.
 * @method Models\DeleteTaskResponse DeleteTask(Models\DeleteTaskRequest $req) Used to delete completed tasks.
 * @method Models\DeleteUserDeviceResponse DeleteUserDevice(Models\DeleteUserDeviceRequest $req) This API is used to delete added devices.
 * @method Models\DeleteVLPlanResponse DeleteVLPlan(Models\DeleteVLPlanRequest $req) Delete a vision understanding plan
 * @method Models\DeleteVLTemplateResponse DeleteVLTemplate(Models\DeleteVLTemplateRequest $req) Delete a visual understanding template.
 * @method Models\DeleteVideoSnapshotConfigResponse DeleteVideoSnapshotConfig(Models\DeleteVideoSnapshotConfigRequest $req) Deletes screenshot configuration
 * @method Models\DeleteVideoSnapshotTemplateResponse DeleteVideoSnapshotTemplate(Models\DeleteVideoSnapshotTemplateRequest $req) This API is used to delete a screenshot template.
 * @method Models\DescribeCNAMEResponse DescribeCNAME(Models\DescribeCNAMERequest $req) This API is used to get the CNAME value based on the service node.
 * @method Models\DescribeDeviceChannelResponse DescribeDeviceChannel(Models\DescribeDeviceChannelRequest $req) This API is used to query the channels of a device.
 * @method Models\DescribeDevicePresetResponse DescribeDevicePreset(Models\DescribeDevicePresetRequest $req) This API is used to query preset position information of device channels.
 * @method Models\DescribeDomainResponse DescribeDomain(Models\DescribeDomainRequest $req) This API is used to query the list of added domains.
 * @method Models\DescribeDomainRegionResponse DescribeDomainRegion(Models\DescribeDomainRegionRequest $req) This API is used to query the service nodes that can be bound when a user adds a domain name. The result is all service nodes supported by the platform. Each service node can only be bound to one domain name.
 * @method Models\DescribeGBDeviceAddrResponse DescribeGBDeviceAddr(Models\DescribeGBDeviceAddrRequest $req) This API is used to obtain the public network address of a national standard device.
 * @method Models\DescribeOrganizationResponse DescribeOrganization(Models\DescribeOrganizationRequest $req) Used for querying organizations.
 * @method Models\DescribeRecordBackupPlanResponse DescribeRecordBackupPlan(Models\DescribeRecordBackupPlanRequest $req) This API is used to query recording cloud migration plan details.
 * @method Models\DescribeRecordBackupTemplateResponse DescribeRecordBackupTemplate(Models\DescribeRecordBackupTemplateRequest $req) This API is used to query video recording cloud template details.
 * @method Models\DescribeRecordFileResponse DescribeRecordFile(Models\DescribeRecordFileRequest $req) This API is used to query the device cloud recording timeline information, which is the cloud storage video recording after setting a recording schedule for video upload to cloud.
 * @method Models\DescribeRecordPlanResponse DescribeRecordPlan(Models\DescribeRecordPlanRequest $req) This API is used to query real-time cloud migration plan details.
 * @method Models\DescribeRecordPlaybackUrlResponse DescribeRecordPlaybackUrl(Models\DescribeRecordPlaybackUrlRequest $req) This API is used to obtain the cloud recording playback url address.
 * @method Models\DescribeRecordRetrieveTaskResponse DescribeRecordRetrieveTask(Models\DescribeRecordRetrieveTaskRequest $req) Used to query the details of a cloud recording retrieval task.
 * @method Models\DescribeRecordTemplateResponse DescribeRecordTemplate(Models\DescribeRecordTemplateRequest $req) This API is used to query real-time cloud migration template details.
 * @method Models\DescribeStreamAuthResponse DescribeStreamAuth(Models\DescribeStreamAuthRequest $req) Used to query push/pull stream authentication configuration.
 * @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) This API is used to query task details.
 * @method Models\DescribeUserDeviceResponse DescribeUserDevice(Models\DescribeUserDeviceRequest $req) This API is used to query detailed information of a device.
 * @method Models\DescribeUserDeviceListResponse DescribeUserDeviceList(Models\DescribeUserDeviceListRequest $req) This API is used to query device details in batches.
 * @method Models\DescribeVLPlanResponse DescribeVLPlan(Models\DescribeVLPlanRequest $req) Query the plan details of visual understanding.
 * @method Models\DescribeVLPlanResultResponse DescribeVLPlanResult(Models\DescribeVLPlanResultRequest $req) Query the result details of a vision understanding plan
 * @method Models\DescribeVLTemplateResponse DescribeVLTemplate(Models\DescribeVLTemplateRequest $req) Query the details of a visual understanding template.
 * @method Models\DescribeVideoBitRateResponse DescribeVideoBitRate(Models\DescribeVideoBitRateRequest $req) This API is used to obtain the bitrate info of a video channel.
 * @method Models\DescribeVideoDownloadUrlResponse DescribeVideoDownloadUrl(Models\DescribeVideoDownloadUrlRequest $req) This API is used to obtain the download url of cloud recordings.
 * @method Models\DescribeVideoSnapshotConfigResponse DescribeVideoSnapshotConfig(Models\DescribeVideoSnapshotConfigRequest $req) Queries screenshot configuration details
 * @method Models\DescribeVideoSnapshotTemplateResponse DescribeVideoSnapshotTemplate(Models\DescribeVideoSnapshotTemplateRequest $req) Get screenshot template details.
 * @method Models\ListDeviceSnapshotsResponse ListDeviceSnapshots(Models\ListDeviceSnapshotsRequest $req) Get device capture result list
 * @method Models\ListDevicesResponse ListDevices(Models\ListDevicesRequest $req) This API is used to obtain the device list under the corresponding organization.
 * @method Models\ListOrganizationChannelsResponse ListOrganizationChannels(Models\ListOrganizationChannelsRequest $req) This API is used to query the channel list under the organizational unit directory.
 * @method Models\ListRecordBackupPlanDevicesResponse ListRecordBackupPlanDevices(Models\ListRecordBackupPlanDevicesRequest $req) This API is used to query the device channel list under a recording cloud migration plan.
 * @method Models\ListRecordBackupPlansResponse ListRecordBackupPlans(Models\ListRecordBackupPlansRequest $req) This API is used to query the recording cloud migration plan list.
 * @method Models\ListRecordBackupTemplatesResponse ListRecordBackupTemplates(Models\ListRecordBackupTemplatesRequest $req) This API is used to query the video recording cloud template list.
 * @method Models\ListRecordPlanDevicesResponse ListRecordPlanDevices(Models\ListRecordPlanDevicesRequest $req) This API is used to query the device channel list under a real-time cloud migration plan.
 * @method Models\ListRecordPlansResponse ListRecordPlans(Models\ListRecordPlansRequest $req) This API is used to query the real-time cloud migration plan list.
 * @method Models\ListRecordRetrieveTasksResponse ListRecordRetrieveTasks(Models\ListRecordRetrieveTasksRequest $req) This API is used to query the retrieval task list.
 * @method Models\ListRecordTemplatesResponse ListRecordTemplates(Models\ListRecordTemplatesRequest $req) This API is used to query the real-time cloud migration template list.
 * @method Models\ListSubTasksResponse ListSubTasks(Models\ListSubTasksRequest $req) This API is used to query the subtask list of a query task.
 * @method Models\ListTasksResponse ListTasks(Models\ListTasksRequest $req) This API is used to query the batch task and simple task list.
 * @method Models\ListVLPlansResponse ListVLPlans(Models\ListVLPlansRequest $req) Get the visual understanding plan list.
 * @method Models\ListVLTemplatesResponse ListVLTemplates(Models\ListVLTemplatesRequest $req) Get a list of visual understanding templates.
 * @method Models\ListVideoDownloadTaskResponse ListVideoDownloadTask(Models\ListVideoDownloadTaskRequest $req) This API is used to query the recording download task list in this store.
 * @method Models\ListVideoSnapshotTemplateResponse ListVideoSnapshotTemplate(Models\ListVideoSnapshotTemplateRequest $req) This API is used to search the screenshot template details list.
 * @method Models\ModifyVLPlanResponse ModifyVLPlan(Models\ModifyVLPlanRequest $req) Modify a vision understanding plan
 * @method Models\ModifyVideoSnapshotConfigResponse ModifyVideoSnapshotConfig(Models\ModifyVideoSnapshotConfigRequest $req) Update screenshot configuration
 * @method Models\PlayRecordResponse PlayRecord(Models\PlayRecordRequest $req) This API is used to obtain the local device recording URL address.
 * @method Models\QueryForbidPlayChannelListResponse QueryForbidPlayChannelList(Models\QueryForbidPlayChannelListRequest $req) Query the disabled channel list
 * @method Models\RefreshDeviceChannelResponse RefreshDeviceChannel(Models\RefreshDeviceChannelRequest $req) This API is used to synchronize channels of national standard devices. After the API is called, a request is triggered to get the channel list from devices. Newly-added channels are stored, and channels deleted on devices need to be deleted manually and are not automatically deleted in the backend.
 * @method Models\SetForbidPlayChannelsResponse SetForbidPlayChannels(Models\SetForbidPlayChannelsRequest $req) Forbid the live preview of video channels for root accounts and sub-accounts.
 * @method Models\UpdateDeviceOrganizationResponse UpdateDeviceOrganization(Models\UpdateDeviceOrganizationRequest $req) Used to change the organization of devices in batches.
 * @method Models\UpdateDeviceStatusResponse UpdateDeviceStatus(Models\UpdateDeviceStatusRequest $req) Used to enable or disable a device. After it is disabled, device registration is denied.
 * @method Models\UpdateOrganizationResponse UpdateOrganization(Models\UpdateOrganizationRequest $req) Used to modify an organization.
 * @method Models\UpdateRecordBackupPlanResponse UpdateRecordBackupPlan(Models\UpdateRecordBackupPlanRequest $req) Used to modify the recording cloud migration plan.
 * @method Models\UpdateRecordBackupTemplateResponse UpdateRecordBackupTemplate(Models\UpdateRecordBackupTemplateRequest $req) Used to modify a video recording cloud template.
 * @method Models\UpdateRecordPlanResponse UpdateRecordPlan(Models\UpdateRecordPlanRequest $req) This API is used to modify a real-time cloud migration plan.
 * @method Models\UpdateRecordTemplateResponse UpdateRecordTemplate(Models\UpdateRecordTemplateRequest $req) Used to modify a real-time cloud template.
 * @method Models\UpdateUserDeviceResponse UpdateUserDevice(Models\UpdateUserDeviceRequest $req) This API is used to modify device configuration information.
 */

class IssClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iss.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iss";

    /**
     * @var string
     */
    protected $version = "2023-05-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("iss")."\\"."V20230517\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
