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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstanceVersion request structure.
 *
 * @method string getTargetInstanceType() Obtain Target instance type after the change, which is the same as the `Type` of the [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1) API.
 * @method void setTargetInstanceType(string $TargetInstanceType) Set Target instance type after the change, which is the same as the `Type` of the [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1) API.
 * @method integer getSwitchOption() Obtain Switch mode. Valid values: 1 (switch during the maintenance time), 2 (switch now).
 * @method void setSwitchOption(integer $SwitchOption) Set Switch mode. Valid values: 1 (switch during the maintenance time), 2 (switch now).
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 */
class UpgradeInstanceVersionRequest extends AbstractModel
{
    /**
     * @var string Target instance type after the change, which is the same as the `Type` of the [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1) API.
     */
    public $TargetInstanceType;

    /**
     * @var integer Switch mode. Valid values: 1 (switch during the maintenance time), 2 (switch now).
     */
    public $SwitchOption;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @param string $TargetInstanceType Target instance type after the change, which is the same as the `Type` of the [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1) API.
     * @param integer $SwitchOption Switch mode. Valid values: 1 (switch during the maintenance time), 2 (switch now).
     * @param string $InstanceId Instance ID
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
        if (array_key_exists("TargetInstanceType",$param) and $param["TargetInstanceType"] !== null) {
            $this->TargetInstanceType = $param["TargetInstanceType"];
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
