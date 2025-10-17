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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstance request structure.
 *
 * @method string getOperation() Obtain Instance modification operation. Valid values:
- rename: rename an instance.
- modifyProject: modify the project to which the instance belongs.
- modifyAutoRenew: modify the instance renewal flag.
- modifyDeleteProtectionSwitch: modify the instance deletion protection switch status.
 * @method void setOperation(string $Operation) Set Instance modification operation. Valid values:
- rename: rename an instance.
- modifyProject: modify the project to which the instance belongs.
- modifyAutoRenew: modify the instance renewal flag.
- modifyDeleteProtectionSwitch: modify the instance deletion protection switch status.
 * @method array getInstanceIds() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list. The maximum number of instances per request is 10.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list. The maximum number of instances per request is 10.
 * @method array getInstanceNames() Obtain New name of the instance. Only Chinese characters, letters, digits, underscores (_), and delimiters (-) are supported. The length can be up to 60 characters.
 * @method void setInstanceNames(array $InstanceNames) Set New name of the instance. Only Chinese characters, letters, digits, underscores (_), and delimiters (-) are supported. The length can be up to 60 characters.
 * @method integer getProjectId() Obtain Project ID. Log in to the [Project Management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
 * @method void setProjectId(integer $ProjectId) Set Project ID. Log in to the [Project Management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
 * @method array getAutoRenews() Obtain Auto-renewal flag.

- 0: default status (manual renewal).
- 1: automatic renewal.
- 2: no automatic renewal.
 * @method void setAutoRenews(array $AutoRenews) Set Auto-renewal flag.

- 0: default status (manual renewal).
- 1: automatic renewal.
- 2: no automatic renewal.
 * @method array getDeleteProtectionSwitches() Obtain Deletion protection switch. - 0: disabled by default; - 1: enabled.
 * @method void setDeleteProtectionSwitches(array $DeleteProtectionSwitches) Set Deletion protection switch. - 0: disabled by default; - 1: enabled.
 * @method string getInstanceId() Obtain This parameter is currently being deprecated and can still be used by existing users. It is recommended that new users use InstanceIds.
 * @method void setInstanceId(string $InstanceId) Set This parameter is currently being deprecated and can still be used by existing users. It is recommended that new users use InstanceIds.
 * @method string getInstanceName() Obtain Disused
 * @method void setInstanceName(string $InstanceName) Set Disused
 * @method integer getAutoRenew() Obtain This parameter has been deprecated.
 * @method void setAutoRenew(integer $AutoRenew) Set This parameter has been deprecated.
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance modification operation. Valid values:
- rename: rename an instance.
- modifyProject: modify the project to which the instance belongs.
- modifyAutoRenew: modify the instance renewal flag.
- modifyDeleteProtectionSwitch: modify the instance deletion protection switch status.
     */
    public $Operation;

    /**
     * @var array Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list. The maximum number of instances per request is 10.
     */
    public $InstanceIds;

    /**
     * @var array New name of the instance. Only Chinese characters, letters, digits, underscores (_), and delimiters (-) are supported. The length can be up to 60 characters.
     */
    public $InstanceNames;

    /**
     * @var integer Project ID. Log in to the [Project Management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
     */
    public $ProjectId;

    /**
     * @var array Auto-renewal flag.

- 0: default status (manual renewal).
- 1: automatic renewal.
- 2: no automatic renewal.
     */
    public $AutoRenews;

    /**
     * @var array Deletion protection switch. - 0: disabled by default; - 1: enabled.
     */
    public $DeleteProtectionSwitches;

    /**
     * @var string This parameter is currently being deprecated and can still be used by existing users. It is recommended that new users use InstanceIds.
     * @deprecated
     */
    public $InstanceId;

    /**
     * @var string Disused
     * @deprecated
     */
    public $InstanceName;

    /**
     * @var integer This parameter has been deprecated.
     * @deprecated
     */
    public $AutoRenew;

    /**
     * @param string $Operation Instance modification operation. Valid values:
- rename: rename an instance.
- modifyProject: modify the project to which the instance belongs.
- modifyAutoRenew: modify the instance renewal flag.
- modifyDeleteProtectionSwitch: modify the instance deletion protection switch status.
     * @param array $InstanceIds Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list. The maximum number of instances per request is 10.
     * @param array $InstanceNames New name of the instance. Only Chinese characters, letters, digits, underscores (_), and delimiters (-) are supported. The length can be up to 60 characters.
     * @param integer $ProjectId Project ID. Log in to the [Project Management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
     * @param array $AutoRenews Auto-renewal flag.

- 0: default status (manual renewal).
- 1: automatic renewal.
- 2: no automatic renewal.
     * @param array $DeleteProtectionSwitches Deletion protection switch. - 0: disabled by default; - 1: enabled.
     * @param string $InstanceId This parameter is currently being deprecated and can still be used by existing users. It is recommended that new users use InstanceIds.
     * @param string $InstanceName Disused
     * @param integer $AutoRenew This parameter has been deprecated.
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenews",$param) and $param["AutoRenews"] !== null) {
            $this->AutoRenews = $param["AutoRenews"];
        }

        if (array_key_exists("DeleteProtectionSwitches",$param) and $param["DeleteProtectionSwitches"] !== null) {
            $this->DeleteProtectionSwitches = $param["DeleteProtectionSwitches"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }
    }
}
