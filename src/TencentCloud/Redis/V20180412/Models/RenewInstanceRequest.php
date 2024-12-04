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
 * RenewInstance request structure.
 *
 * @method integer getPeriod() Obtain Validity period in months
 * @method void setPeriod(integer $Period) Set Validity period in months
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getModifyPayMode() Obtain The parameter used to determine whether to modify the billing mode. <ul><li>If you want to change the billing mode from pay-as-you-go to monthly subscription, specify this parameter as <b>prepaid</b>. </li><li>If the current instance is monthly subscribed, this parameter is not required. </li></ul>
 * @method void setModifyPayMode(string $ModifyPayMode) Set The parameter used to determine whether to modify the billing mode. <ul><li>If you want to change the billing mode from pay-as-you-go to monthly subscription, specify this parameter as <b>prepaid</b>. </li><li>If the current instance is monthly subscribed, this parameter is not required. </li></ul>
 */
class RenewInstanceRequest extends AbstractModel
{
    /**
     * @var integer Validity period in months
     */
    public $Period;

    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string The parameter used to determine whether to modify the billing mode. <ul><li>If you want to change the billing mode from pay-as-you-go to monthly subscription, specify this parameter as <b>prepaid</b>. </li><li>If the current instance is monthly subscribed, this parameter is not required. </li></ul>
     */
    public $ModifyPayMode;

    /**
     * @param integer $Period Validity period in months
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $ModifyPayMode The parameter used to determine whether to modify the billing mode. <ul><li>If you want to change the billing mode from pay-as-you-go to monthly subscription, specify this parameter as <b>prepaid</b>. </li><li>If the current instance is monthly subscribed, this parameter is not required. </li></ul>
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
