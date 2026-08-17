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
 * RenewInstance request structure.
 *
 * @method integer getPeriod() Obtain Purchase duration.
-Unit: month.
- Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.
 * @method void setPeriod(integer $Period) Set Purchase duration.
-Unit: month.
- Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list) and copy it from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list) and copy it from the instance list.
 * @method string getModifyPayMode() Obtain Flag whether to change billing mode.
-The billing mode of the current instance is pay-as-you-go. To convert to yearly/monthly subscription and renew, specify this parameter as <b>prepaid</b>.
-The current instance billing mode is yearly/monthly subscription, so this parameter can be left unset.
 * @method void setModifyPayMode(string $ModifyPayMode) Set Flag whether to change billing mode.
-The billing mode of the current instance is pay-as-you-go. To convert to yearly/monthly subscription and renew, specify this parameter as <b>prepaid</b>.
-The current instance billing mode is yearly/monthly subscription, so this parameter can be left unset.
 */
class RenewInstanceRequest extends AbstractModel
{
    /**
     * @var integer Purchase duration.
-Unit: month.
- Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.
     */
    public $Period;

    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list) and copy it from the instance list.
     */
    public $InstanceId;

    /**
     * @var string Flag whether to change billing mode.
-The billing mode of the current instance is pay-as-you-go. To convert to yearly/monthly subscription and renew, specify this parameter as <b>prepaid</b>.
-The current instance billing mode is yearly/monthly subscription, so this parameter can be left unset.
     */
    public $ModifyPayMode;

    /**
     * @param integer $Period Purchase duration.
-Unit: month.
- Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list) and copy it from the instance list.
     * @param string $ModifyPayMode Flag whether to change billing mode.
-The billing mode of the current instance is pay-as-you-go. To convert to yearly/monthly subscription and renew, specify this parameter as <b>prepaid</b>.
-The current instance billing mode is yearly/monthly subscription, so this parameter can be left unset.
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ModifyPayMode",$param) and $param["ModifyPayMode"] !== null) {
            $this->ModifyPayMode = $param["ModifyPayMode"];
        }
    }
}
