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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePrometheusAlertGroupState request structure.
 *
 * @method string getInstanceId() Obtain TMP instance ID
 * @method void setInstanceId(string $InstanceId) Set TMP instance ID
 * @method array getGroupIds() Obtain Alarm group ID list, such as alert-xxxx.
 * @method void setGroupIds(array $GroupIds) Set Alarm group ID list, such as alert-xxxx.
 * @method integer getGroupState() Obtain Describes the group status of the alarm.
2 - enable.
3 - disabled.
 * @method void setGroupState(integer $GroupState) Set Describes the group status of the alarm.
2 - enable.
3 - disabled.
 */
class UpdatePrometheusAlertGroupStateRequest extends AbstractModel
{
    /**
     * @var string TMP instance ID
     */
    public $InstanceId;

    /**
     * @var array Alarm group ID list, such as alert-xxxx.
     */
    public $GroupIds;

    /**
     * @var integer Describes the group status of the alarm.
2 - enable.
3 - disabled.
     */
    public $GroupState;

    /**
     * @param string $InstanceId TMP instance ID
     * @param array $GroupIds Alarm group ID list, such as alert-xxxx.
     * @param integer $GroupState Describes the group status of the alarm.
2 - enable.
3 - disabled.
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

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("GroupState",$param) and $param["GroupState"] !== null) {
            $this->GroupState = $param["GroupState"];
        }
    }
}
