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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ClearLaunchConfigurationAttributes request structure.
 *
 * @method string getLaunchConfigurationId() Obtain <p>Launch configuration ID. Obtain it in the following ways:</p><li>Log in to the [console](https://console.cloud.tencent.com/autoscaling/config) and query the launch configuration ID.</li><li>Call the API [DescribeLaunchConfigurations](https://www.tencentcloud.com/document/api/377/20445?from_cn_redirect=1) and obtain the launch configuration ID from the `LaunchConfigurationId` in the returned information.</li>
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set <p>Launch configuration ID. Obtain it in the following ways:</p><li>Log in to the [console](https://console.cloud.tencent.com/autoscaling/config) and query the launch configuration ID.</li><li>Call the API [DescribeLaunchConfigurations](https://www.tencentcloud.com/document/api/377/20445?from_cn_redirect=1) and obtain the launch configuration ID from the `LaunchConfigurationId` in the returned information.</li>
 * @method boolean getClearDataDisks() Obtain <p>Whether to clear data disk information. This parameter is optional and defaults to false.<br>Enter true to clear "data disk" information. After clearing, newly created CVMs will not contain any data disk.</p>
 * @method void setClearDataDisks(boolean $ClearDataDisks) Set <p>Whether to clear data disk information. This parameter is optional and defaults to false.<br>Enter true to clear "data disk" information. After clearing, newly created CVMs will not contain any data disk.</p>
 * @method boolean getClearHostNameSettings() Obtain <p>Whether to clear the MachineName-related settings of the CVM. Optional. It is false by default.<br>Set to true to clear the host name settings. After clearing, newly created CVMs will not have a host name configured.</p>
 * @method void setClearHostNameSettings(boolean $ClearHostNameSettings) Set <p>Whether to clear the MachineName-related settings of the CVM. Optional. It is false by default.<br>Set to true to clear the host name settings. After clearing, newly created CVMs will not have a host name configured.</p>
 * @method boolean getClearInstanceNameSettings() Obtain <p>Whether to clear the CVM instance name related settings. This parameter is optional and is false by default.<br>If set to true, the host name setting information is cleared. After clearing, newly created CVMs will be configured based on "as-{{ scaling group AutoScalingGroupName }}".</p>
 * @method void setClearInstanceNameSettings(boolean $ClearInstanceNameSettings) Set <p>Whether to clear the CVM instance name related settings. This parameter is optional and is false by default.<br>If set to true, the host name setting information is cleared. After clearing, newly created CVMs will be configured based on "as-{{ scaling group AutoScalingGroupName }}".</p>
 * @method boolean getClearDisasterRecoverGroupIds() Obtain <p>Whether to clear the placement group information. This parameter is optional and defaults to false.<br>Set it to true to clear the placement group information. After clearing, newly created hosts will not be assigned to any placement group.</p>
 * @method void setClearDisasterRecoverGroupIds(boolean $ClearDisasterRecoverGroupIds) Set <p>Whether to clear the placement group information. This parameter is optional and defaults to false.<br>Set it to true to clear the placement group information. After clearing, newly created hosts will not be assigned to any placement group.</p>
 * @method boolean getClearInstanceTags() Obtain <p>Whether to clear the instance tag list. This parameter is optional and is false by default.<br>If true is filled in, it indicates that the instance tag list should be cleared. After the list is cleared, the CVMs created based on this will not be bound to the tags in the list.</p>
 * @method void setClearInstanceTags(boolean $ClearInstanceTags) Set <p>Whether to clear the instance tag list. This parameter is optional and is false by default.<br>If true is filled in, it indicates that the instance tag list should be cleared. After the list is cleared, the CVMs created based on this will not be bound to the tags in the list.</p>
 * @method boolean getClearMetadata() Obtain <p>Whether to clear MetaData. This parameter is optional and defaults to false. Enter true to clear MetaData. After clearing, newly created CVMs will not associate custom Metadata.</p>
 * @method void setClearMetadata(boolean $ClearMetadata) Set <p>Whether to clear MetaData. This parameter is optional and defaults to false. Enter true to clear MetaData. After clearing, newly created CVMs will not associate custom Metadata.</p>
 * @method boolean getClearNetworkInterfaces() Obtain <p>Whether to clear the NetworkInterfaces in the launch configuration. If the value is TRUE, clear it; if not passed or FALSE, this field will not be processed.</p>
 * @method void setClearNetworkInterfaces(boolean $ClearNetworkInterfaces) Set <p>Whether to clear the NetworkInterfaces in the launch configuration. If the value is TRUE, clear it; if not passed or FALSE, this field will not be processed.</p>
 */
class ClearLaunchConfigurationAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>Launch configuration ID. Obtain it in the following ways:</p><li>Log in to the [console](https://console.cloud.tencent.com/autoscaling/config) and query the launch configuration ID.</li><li>Call the API [DescribeLaunchConfigurations](https://www.tencentcloud.com/document/api/377/20445?from_cn_redirect=1) and obtain the launch configuration ID from the `LaunchConfigurationId` in the returned information.</li>
     */
    public $LaunchConfigurationId;

    /**
     * @var boolean <p>Whether to clear data disk information. This parameter is optional and defaults to false.<br>Enter true to clear "data disk" information. After clearing, newly created CVMs will not contain any data disk.</p>
     */
    public $ClearDataDisks;

    /**
     * @var boolean <p>Whether to clear the MachineName-related settings of the CVM. Optional. It is false by default.<br>Set to true to clear the host name settings. After clearing, newly created CVMs will not have a host name configured.</p>
     */
    public $ClearHostNameSettings;

    /**
     * @var boolean <p>Whether to clear the CVM instance name related settings. This parameter is optional and is false by default.<br>If set to true, the host name setting information is cleared. After clearing, newly created CVMs will be configured based on "as-{{ scaling group AutoScalingGroupName }}".</p>
     */
    public $ClearInstanceNameSettings;

    /**
     * @var boolean <p>Whether to clear the placement group information. This parameter is optional and defaults to false.<br>Set it to true to clear the placement group information. After clearing, newly created hosts will not be assigned to any placement group.</p>
     */
    public $ClearDisasterRecoverGroupIds;

    /**
     * @var boolean <p>Whether to clear the instance tag list. This parameter is optional and is false by default.<br>If true is filled in, it indicates that the instance tag list should be cleared. After the list is cleared, the CVMs created based on this will not be bound to the tags in the list.</p>
     */
    public $ClearInstanceTags;

    /**
     * @var boolean <p>Whether to clear MetaData. This parameter is optional and defaults to false. Enter true to clear MetaData. After clearing, newly created CVMs will not associate custom Metadata.</p>
     */
    public $ClearMetadata;

    /**
     * @var boolean <p>Whether to clear the NetworkInterfaces in the launch configuration. If the value is TRUE, clear it; if not passed or FALSE, this field will not be processed.</p>
     */
    public $ClearNetworkInterfaces;

    /**
     * @param string $LaunchConfigurationId <p>Launch configuration ID. Obtain it in the following ways:</p><li>Log in to the [console](https://console.cloud.tencent.com/autoscaling/config) and query the launch configuration ID.</li><li>Call the API [DescribeLaunchConfigurations](https://www.tencentcloud.com/document/api/377/20445?from_cn_redirect=1) and obtain the launch configuration ID from the `LaunchConfigurationId` in the returned information.</li>
     * @param boolean $ClearDataDisks <p>Whether to clear data disk information. This parameter is optional and defaults to false.<br>Enter true to clear "data disk" information. After clearing, newly created CVMs will not contain any data disk.</p>
     * @param boolean $ClearHostNameSettings <p>Whether to clear the MachineName-related settings of the CVM. Optional. It is false by default.<br>Set to true to clear the host name settings. After clearing, newly created CVMs will not have a host name configured.</p>
     * @param boolean $ClearInstanceNameSettings <p>Whether to clear the CVM instance name related settings. This parameter is optional and is false by default.<br>If set to true, the host name setting information is cleared. After clearing, newly created CVMs will be configured based on "as-{{ scaling group AutoScalingGroupName }}".</p>
     * @param boolean $ClearDisasterRecoverGroupIds <p>Whether to clear the placement group information. This parameter is optional and defaults to false.<br>Set it to true to clear the placement group information. After clearing, newly created hosts will not be assigned to any placement group.</p>
     * @param boolean $ClearInstanceTags <p>Whether to clear the instance tag list. This parameter is optional and is false by default.<br>If true is filled in, it indicates that the instance tag list should be cleared. After the list is cleared, the CVMs created based on this will not be bound to the tags in the list.</p>
     * @param boolean $ClearMetadata <p>Whether to clear MetaData. This parameter is optional and defaults to false. Enter true to clear MetaData. After clearing, newly created CVMs will not associate custom Metadata.</p>
     * @param boolean $ClearNetworkInterfaces <p>Whether to clear the NetworkInterfaces in the launch configuration. If the value is TRUE, clear it; if not passed or FALSE, this field will not be processed.</p>
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
        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("ClearDataDisks",$param) and $param["ClearDataDisks"] !== null) {
            $this->ClearDataDisks = $param["ClearDataDisks"];
        }

        if (array_key_exists("ClearHostNameSettings",$param) and $param["ClearHostNameSettings"] !== null) {
            $this->ClearHostNameSettings = $param["ClearHostNameSettings"];
        }

        if (array_key_exists("ClearInstanceNameSettings",$param) and $param["ClearInstanceNameSettings"] !== null) {
            $this->ClearInstanceNameSettings = $param["ClearInstanceNameSettings"];
        }

        if (array_key_exists("ClearDisasterRecoverGroupIds",$param) and $param["ClearDisasterRecoverGroupIds"] !== null) {
            $this->ClearDisasterRecoverGroupIds = $param["ClearDisasterRecoverGroupIds"];
        }

        if (array_key_exists("ClearInstanceTags",$param) and $param["ClearInstanceTags"] !== null) {
            $this->ClearInstanceTags = $param["ClearInstanceTags"];
        }

        if (array_key_exists("ClearMetadata",$param) and $param["ClearMetadata"] !== null) {
            $this->ClearMetadata = $param["ClearMetadata"];
        }

        if (array_key_exists("ClearNetworkInterfaces",$param) and $param["ClearNetworkInterfaces"] !== null) {
            $this->ClearNetworkInterfaces = $param["ClearNetworkInterfaces"];
        }
    }
}
