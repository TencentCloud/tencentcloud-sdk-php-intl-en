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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response.
 * @method string getImageId() Obtain Specified effective [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways:<br/><li>for IDs of `public images`, `custom images`, and `shared images`, log in to the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE); for IDs of `marketplace images`, go to [Cloud Marketplace](https://market.cloud.tencent.com/list).</li><li>Call the API [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
<br>Default value: current image.
 * @method void setImageId(string $ImageId) Set Specified effective [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways:<br/><li>for IDs of `public images`, `custom images`, and `shared images`, log in to the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE); for IDs of `marketplace images`, go to [Cloud Marketplace](https://market.cloud.tencent.com/list).</li><li>Call the API [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
<br>Default value: current image.
 * @method SystemDisk getSystemDisk() Obtain Configurations of the system disk. For an instance whose system disk is a cloud disk, this parameter can be used to expand the system disk by specifying a new capacity after reinstallation. The system disk capacity can only be expanded but not shrunk. Reinstalling the system can only resize rather than changing the type of the system disk.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Configurations of the system disk. For an instance whose system disk is a cloud disk, this parameter can be used to expand the system disk by specifying a new capacity after reinstallation. The system disk capacity can only be expanded but not shrunk. Reinstalling the system can only resize rather than changing the type of the system disk.
 * @method LoginSettings getLoginSettings() Obtain Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
 * @method EnhancedService getEnhancedService() Obtain Enhanced services. You can specify whether to enable services such as Cloud Security and Cloud Monitor through this parameter. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled for public images by default, but not enabled for custom images and marketplace images by default. Instead, they use services retained in the images.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced services. You can specify whether to enable services such as Cloud Security and Cloud Monitor through this parameter. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled for public images by default, but not enabled for custom images and marketplace images by default. Instead, they use services retained in the images.
 * @method string getHostName() Obtain When reinstalling a system, you can modify an instance's hostname.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>
 * @method void setHostName(string $HostName) Set When reinstalling a system, you can modify an instance's hostname.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>
 * @method string getUserData() Obtain User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16 KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
 * @method void setUserData(string $UserData) Set User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16 KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
 */
class ResetInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response.
     */
    public $InstanceId;

    /**
     * @var string Specified effective [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways:<br/><li>for IDs of `public images`, `custom images`, and `shared images`, log in to the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE); for IDs of `marketplace images`, go to [Cloud Marketplace](https://market.cloud.tencent.com/list).</li><li>Call the API [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
<br>Default value: current image.
     */
    public $ImageId;

    /**
     * @var SystemDisk Configurations of the system disk. For an instance whose system disk is a cloud disk, this parameter can be used to expand the system disk by specifying a new capacity after reinstallation. The system disk capacity can only be expanded but not shrunk. Reinstalling the system can only resize rather than changing the type of the system disk.
     */
    public $SystemDisk;

    /**
     * @var LoginSettings Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
     */
    public $LoginSettings;

    /**
     * @var EnhancedService Enhanced services. You can specify whether to enable services such as Cloud Security and Cloud Monitor through this parameter. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled for public images by default, but not enabled for custom images and marketplace images by default. Instead, they use services retained in the images.
     */
    public $EnhancedService;

    /**
     * @var string When reinstalling a system, you can modify an instance's hostname.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>
     */
    public $HostName;

    /**
     * @var string User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16 KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
     */
    public $UserData;

    /**
     * @param string $InstanceId Instance ID. To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response.
     * @param string $ImageId Specified effective [image](https://intl.cloud.tencent.com/document/product/213/4940?from_cn_redirect=1) ID in the format of `img-xxx`. There are four types of images:<br/><li>Public images</li><li>Custom images</li><li>Shared images</li><li>Marketplace images </li><br/>You can obtain the available image IDs in the following ways:<br/><li>for IDs of `public images`, `custom images`, and `shared images`, log in to the [CVM console](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE); for IDs of `marketplace images`, go to [Cloud Marketplace](https://market.cloud.tencent.com/list).</li><li>Call the API [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response.</li>
<br>Default value: current image.
     * @param SystemDisk $SystemDisk Configurations of the system disk. For an instance whose system disk is a cloud disk, this parameter can be used to expand the system disk by specifying a new capacity after reinstallation. The system disk capacity can only be expanded but not shrunk. Reinstalling the system can only resize rather than changing the type of the system disk.
     * @param LoginSettings $LoginSettings Login settings of the instance. You can use this parameter to set the login method, password, and key of the instance or keep the login settings of the original image. By default, a random password will be generated and sent to you via the Message Center.
     * @param EnhancedService $EnhancedService Enhanced services. You can specify whether to enable services such as Cloud Security and Cloud Monitor through this parameter. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled for public images by default, but not enabled for custom images and marketplace images by default. Instead, they use services retained in the images.
     * @param string $HostName When reinstalling a system, you can modify an instance's hostname.<br><li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><br><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><br><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>
     * @param string $UserData User data provided to the instance. This parameter needs to be encoded in base64 format with the maximum size of 16 KB. For more information on how to get the value of this parameter, see the commands you need to execute on startup for [Windows](https://intl.cloud.tencent.com/document/product/213/17526) or [Linux](https://intl.cloud.tencent.com/document/product/213/17525).
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }
    }
}
