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

namespace TencentCloud\Mna\V20210119;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mna\V20210119\Models as Models;

/**
 * @method Models\ActivateHardwareResponse ActivateHardware(Models\ActivateHardwareRequest $req) Activate hardware device
 * @method Models\AddApplicationResponse AddApplication(Models\AddApplicationRequest $req) This API is used to create an application
 * @method Models\AddDeviceResponse AddDevice(Models\AddDeviceRequest $req) Create new device records
 * @method Models\AddGroupResponse AddGroup(Models\AddGroupRequest $req) Create group
 * @method Models\AddHardwareResponse AddHardware(Models\AddHardwareRequest $req) Add hardware devices, generate inactive hardware devices, and support batch addition
 * @method Models\AddL3ConnResponse AddL3Conn(Models\AddL3ConnRequest $req) Create an interconnection rule
 * @method Models\CreateEncryptedKeyResponse CreateEncryptedKey(Models\CreateEncryptedKeyRequest $req) This API is used to configure and refresh preset keys.
 * @method Models\DeleteApplicationResponse DeleteApplication(Models\DeleteApplicationRequest $req) This API is used to delete applications
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) Delete device info
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) Delete group
 * @method Models\DeleteL3ConnResponse DeleteL3Conn(Models\DeleteL3ConnRequest $req) Delete an interconnection rule
 * @method Models\DownloadActiveDeviceCountResponse DownloadActiveDeviceCount(Models\DownloadActiveDeviceCountRequest $req) Download the number of active devices statistics
 * @method Models\GetActiveDeviceCountResponse GetActiveDeviceCount(Models\GetActiveDeviceCountRequest $req) Number of active devices statistics
 * @method Models\GetApplicationResponse GetApplication(Models\GetApplicationRequest $req) This API is used to query applications.
 * @method Models\GetDestIPByNameResponse GetDestIPByName(Models\GetDestIPByNameRequest $req) Statistics of a single device accessing the target IP address
 * @method Models\GetDeviceResponse GetDevice(Models\GetDeviceRequest $req) This API is used to search device details by specified device ID.
 * @method Models\GetDevicePayModeResponse GetDevicePayMode(Models\GetDevicePayModeRequest $req) This API is used to obtain the payment mode of a device.
 * @method Models\GetDevicesResponse GetDevices(Models\GetDevicesRequest $req) This API is used to get device information list.
 * @method Models\GetFlowAlarmInfoResponse GetFlowAlarmInfo(Models\GetFlowAlarmInfoRequest $req) This API is used to query user traffic alarm settings based on AppId, including threshold, callback url and key.
 * @method Models\GetFlowPackagesResponse GetFlowPackages(Models\GetFlowPackagesRequest $req) Retrieve the data transfer plan list
 * @method Models\GetFlowStatisticResponse GetFlowStatistic(Models\GetFlowStatisticRequest $req) Retrieve traffic usage data for a specified device Id at a specified time point.
 * @method Models\GetFlowStatisticByGroupResponse GetFlowStatisticByGroup(Models\GetFlowStatisticByGroupRequest $req) Retrieve traffic usage data for the specified group and time period
 * @method Models\GetFlowStatisticByNameResponse GetFlowStatisticByName(Models\GetFlowStatisticByNameRequest $req) Retrieve traffic usage data for a specified device Id at a specified time point.
 * @method Models\GetFlowStatisticByRegionResponse GetFlowStatisticByRegion(Models\GetFlowStatisticByRegionRequest $req) Retrieve traffic usage data for the specified region and time point
 * @method Models\GetGroupDetailResponse GetGroupDetail(Models\GetGroupDetailRequest $req) View group details
 * @method Models\GetGroupListResponse GetGroupList(Models\GetGroupListRequest $req) This API is used to obtain a group list.
 * @method Models\GetHardwareInfoResponse GetHardwareInfo(Models\GetHardwareInfoRequest $req) This API is used to get hardware device information.
 * @method Models\GetHardwareListResponse GetHardwareList(Models\GetHardwareListRequest $req) This API is used to get the hardware list of the manufacturer.
 * @method Models\GetL3ConnListResponse GetL3ConnList(Models\GetL3ConnListRequest $req) Retrieve the list of interconnection rules
 * @method Models\GetMonitorDataByNameResponse GetMonitorDataByName(Models\GetMonitorDataByNameRequest $req) This API is used to obtain the download file URL for all monitoring metrics of a single device.
 * @method Models\GetMultiFlowStatisticResponse GetMultiFlowStatistic(Models\GetMultiFlowStatisticRequest $req) Obtain batch device traffic statistics curves
 * @method Models\GetNetMonitorResponse GetNetMonitor(Models\GetNetMonitorRequest $req) This API is used to obtain real-time traffic statistics per device.
 * @method Models\GetNetMonitorByNameResponse GetNetMonitorByName(Models\GetNetMonitorByNameRequest $req) This API is used to obtain real-time traffic statistics per device.
 * @method Models\GetPublicKeyResponse GetPublicKey(Models\GetPublicKeyRequest $req) This API is used to access the public key for signature verification.
 * @method Models\GetStatisticDataResponse GetStatisticData(Models\GetStatisticDataRequest $req) Download traffic data on the usage statistics page
 * @method Models\GetStatisticDataByNameResponse GetStatisticDataByName(Models\GetStatisticDataByNameRequest $req) Download traffic data on the usage statistics page
 * @method Models\GetVendorHardwareResponse GetVendorHardware(Models\GetVendorHardwareRequest $req) This API is used to get the hardware device list of the manufacturer.
 * @method Models\GroupAddDeviceResponse GroupAddDevice(Models\GroupAddDeviceRequest $req) Add device to already exist group
 * @method Models\GroupDeleteDeviceResponse GroupDeleteDevice(Models\GroupDeleteDeviceRequest $req) Delete devices in the group
 * @method Models\ModifyPackageRenewFlagResponse ModifyPackageRenewFlag(Models\ModifyPackageRenewFlagRequest $req) Auto renewal of data transfer plans can be enabled or disabled, unaffected by ongoing effective plans in the current cycle.
 * @method Models\OrderFlowPackageResponse OrderFlowPackage(Models\OrderFlowPackageRequest $req) Purchase a Prepaid Traffic Package
 * @method Models\OrderPerLicenseResponse OrderPerLicense(Models\OrderPerLicenseRequest $req) Purchase a single-use License
 * @method Models\ReportOrderResponse ReportOrder(Models\ReportOrderRequest $req) Users report custom order information, and the Multiple Network Acceleration service saves the information related to.
 * @method Models\SetNotifyUrlResponse SetNotifyUrl(Models\SetNotifyUrlRequest $req) This API is used to set user traffic alarm information. Use this API setting to configure the data transfer plan alarm threshold as well as the callback url and key when an alarm is generated.
 * @method Models\UpdateApplicationInfoResponse UpdateApplicationInfo(Models\UpdateApplicationInfoRequest $req) Update application information
 * @method Models\UpdateApplicationKeyResponse UpdateApplicationKey(Models\UpdateApplicationKeyRequest $req) Update application key
 * @method Models\UpdateDeviceResponse UpdateDevice(Models\UpdateDeviceRequest $req) Update device information
 * @method Models\UpdateGroupResponse UpdateGroup(Models\UpdateGroupRequest $req) Update group remark
 * @method Models\UpdateHardwareResponse UpdateHardware(Models\UpdateHardwareRequest $req) Refresh hardware info
 * @method Models\UpdateL3CidrResponse UpdateL3Cidr(Models\UpdateL3CidrRequest $req) Update the interconnection rule CIDR
 * @method Models\UpdateL3ConnResponse UpdateL3Conn(Models\UpdateL3ConnRequest $req) Update the interconnection rule remark
 * @method Models\UpdateL3SwitchResponse UpdateL3Switch(Models\UpdateL3SwitchRequest $req) Update the interconnection rule switch
 */

class MnaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mna.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mna";

    /**
     * @var string
     */
    protected $version = "2021-01-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("mna")."\\"."V20210119\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
