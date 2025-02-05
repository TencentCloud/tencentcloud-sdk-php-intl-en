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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ClearLaunchConfigurationAttributes request structure.
 *
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID
 * @method boolean getClearDataDisks() Obtain Whether to clear data disk information. This parameter is optional and the default value is `false`.
Setting it to `true` will clear data disks, which means that CVM newly created on this launch configuration will have no data disk.
 * @method void setClearDataDisks(boolean $ClearDataDisks) Set Whether to clear data disk information. This parameter is optional and the default value is `false`.
Setting it to `true` will clear data disks, which means that CVM newly created on this launch configuration will have no data disk.
 * @method boolean getClearHostNameSettings() Obtain Whether to clear the CVM hostname settings. This parameter is optional and the default value is `false`.
Setting it to `true` will clear the hostname settings, which means that CVM newly created on this launch configuration will have no hostname.
 * @method void setClearHostNameSettings(boolean $ClearHostNameSettings) Set Whether to clear the CVM hostname settings. This parameter is optional and the default value is `false`.
Setting it to `true` will clear the hostname settings, which means that CVM newly created on this launch configuration will have no hostname.
 * @method boolean getClearInstanceNameSettings() Obtain Whether to clear the CVM instance name settings. This parameter is optional and the default value is `false`.
Setting it to `true` will clear the instance name settings, which means that CVM newly created on this launch configuration will be named in the as-{{AutoScalingGroupName}} format.
 * @method void setClearInstanceNameSettings(boolean $ClearInstanceNameSettings) Set Whether to clear the CVM instance name settings. This parameter is optional and the default value is `false`.
Setting it to `true` will clear the instance name settings, which means that CVM newly created on this launch configuration will be named in the as-{{AutoScalingGroupName}} format.
 * @method boolean getClearDisasterRecoverGroupIds() Obtain Whether to clear placement group information. This parameter is optional. Default value: `false`.
`True` means clearing placement group information. After that, no placement groups are specified for CVMs created based on the information.
 * @method void setClearDisasterRecoverGroupIds(boolean $ClearDisasterRecoverGroupIds) Set Whether to clear placement group information. This parameter is optional. Default value: `false`.
`True` means clearing placement group information. After that, no placement groups are specified for CVMs created based on the information.
 * @method boolean getClearInstanceTags() Obtain Whether to clear the instance tag list. This parameter is optional, and its default value is false.
If true is filled in, it indicates that the instance tag list should be cleared. After the list is cleared, the CVMs created based on this will not be bound to the tags in the list.
 * @method void setClearInstanceTags(boolean $ClearInstanceTags) Set Whether to clear the instance tag list. This parameter is optional, and its default value is false.
If true is filled in, it indicates that the instance tag list should be cleared. After the list is cleared, the CVMs created based on this will not be bound to the tags in the list.
 * @method boolean getClearMetadata() Obtain Whether to clear metadata, optional, defaults to false. Setting it to true will clear metadata, the CVMs created based on this will not be associated with custom metadata.
 * @method void setClearMetadata(boolean $ClearMetadata) Set Whether to clear metadata, optional, defaults to false. Setting it to true will clear metadata, the CVMs created based on this will not be associated with custom metadata.
 */
class ClearLaunchConfigurationAttributesRequest extends AbstractModel
{
    /**
     * @var string Launch configuration ID
     */
    public $LaunchConfigurationId;

    /**
     * @var boolean Whether to clear data disk information. This parameter is optional and the default value is `false`.
Setting it to `true` will clear data disks, which means that CVM newly created on this launch configuration will have no data disk.
     */
    public $ClearDataDisks;

    /**
     * @var boolean Whether to clear the CVM hostname settings. This parameter is optional and the default value is `false`.
Setting it to `true` will clear the hostname settings, which means that CVM newly created on this launch configuration will have no hostname.
     */
    public $ClearHostNameSettings;

    /**
     * @var boolean Whether to clear the CVM instance name settings. This parameter is optional and the default value is `false`.
Setting it to `true` will clear the instance name settings, which means that CVM newly created on this launch configuration will be named in the as-{{AutoScalingGroupName}} format.
     */
    public $ClearInstanceNameSettings;

    /**
     * @var boolean Whether to clear placement group information. This parameter is optional. Default value: `false`.
`True` means clearing placement group information. After that, no placement groups are specified for CVMs created based on the information.
     */
    public $ClearDisasterRecoverGroupIds;

    /**
     * @var boolean Whether to clear the instance tag list. This parameter is optional, and its default value is false.
If true is filled in, it indicates that the instance tag list should be cleared. After the list is cleared, the CVMs created based on this will not be bound to the tags in the list.
     */
    public $ClearInstanceTags;

    /**
     * @var boolean Whether to clear metadata, optional, defaults to false. Setting it to true will clear metadata, the CVMs created based on this will not be associated with custom metadata.
     */
    public $ClearMetadata;

    /**
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param boolean $ClearDataDisks Whether to clear data disk information. This parameter is optional and the default value is `false`.
Setting it to `true` will clear data disks, which means that CVM newly created on this launch configuration will have no data disk.
     * @param boolean $ClearHostNameSettings Whether to clear the CVM hostname settings. This parameter is optional and the default value is `false`.
Setting it to `true` will clear the hostname settings, which means that CVM newly created on this launch configuration will have no hostname.
     * @param boolean $ClearInstanceNameSettings Whether to clear the CVM instance name settings. This parameter is optional and the default value is `false`.
Setting it to `true` will clear the instance name settings, which means that CVM newly created on this launch configuration will be named in the as-{{AutoScalingGroupName}} format.
     * @param boolean $ClearDisasterRecoverGroupIds Whether to clear placement group information. This parameter is optional. Default value: `false`.
`True` means clearing placement group information. After that, no placement groups are specified for CVMs created based on the information.
     * @param boolean $ClearInstanceTags Whether to clear the instance tag list. This parameter is optional, and its default value is false.
If true is filled in, it indicates that the instance tag list should be cleared. After the list is cleared, the CVMs created based on this will not be bound to the tags in the list.
     * @param boolean $ClearMetadata Whether to clear metadata, optional, defaults to false. Setting it to true will clear metadata, the CVMs created based on this will not be associated with custom metadata.
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
    }
}
