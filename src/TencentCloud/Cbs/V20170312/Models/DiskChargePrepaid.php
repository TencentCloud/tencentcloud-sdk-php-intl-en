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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing mode of the instance
 *
 * @method integer getPeriod() Obtain Subscription period of the cloud disk in months. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
 * @method void setPeriod(integer $Period) Set Subscription period of the cloud disk in months. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
 * @method string getRenewFlag() Obtain Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify upon expiration nor renew automatically <br><br>Default value: NOTIFY_AND_MANUAL_RENEW.
 * @method void setRenewFlag(string $RenewFlag) Set Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify upon expiration nor renew automatically <br><br>Default value: NOTIFY_AND_MANUAL_RENEW.
 * @method string getCurInstanceDeadline() Obtain You can specify this parameter when you need to ensure that a cloud disk and the CVM instance to which it is attached have the same expiration time. This parameter represents the current expiration time of the instance. In this case, if you specify `Period`, `Period` will represent how long you want to renew the instance, and the cloud disk will be renewed based on the new expiration time of the instance. For example, the value of this parameter can be `2018-03-30 20:15:03`.
 * @method void setCurInstanceDeadline(string $CurInstanceDeadline) Set You can specify this parameter when you need to ensure that a cloud disk and the CVM instance to which it is attached have the same expiration time. This parameter represents the current expiration time of the instance. In this case, if you specify `Period`, `Period` will represent how long you want to renew the instance, and the cloud disk will be renewed based on the new expiration time of the instance. For example, the value of this parameter can be `2018-03-30 20:15:03`.
 */
class DiskChargePrepaid extends AbstractModel
{
    /**
     * @var integer Subscription period of the cloud disk in months. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
     */
    public $Period;

    /**
     * @var string Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify upon expiration nor renew automatically <br><br>Default value: NOTIFY_AND_MANUAL_RENEW.
     */
    public $RenewFlag;

    /**
     * @var string You can specify this parameter when you need to ensure that a cloud disk and the CVM instance to which it is attached have the same expiration time. This parameter represents the current expiration time of the instance. In this case, if you specify `Period`, `Period` will represent how long you want to renew the instance, and the cloud disk will be renewed based on the new expiration time of the instance. For example, the value of this parameter can be `2018-03-30 20:15:03`.
     */
    public $CurInstanceDeadline;

    /**
     * @param integer $Period Subscription period of the cloud disk in months. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
     * @param string $RenewFlag Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify upon expiration nor renew automatically <br><br>Default value: NOTIFY_AND_MANUAL_RENEW.
     * @param string $CurInstanceDeadline You can specify this parameter when you need to ensure that a cloud disk and the CVM instance to which it is attached have the same expiration time. This parameter represents the current expiration time of the instance. In this case, if you specify `Period`, `Period` will represent how long you want to renew the instance, and the cloud disk will be renewed based on the new expiration time of the instance. For example, the value of this parameter can be `2018-03-30 20:15:03`.
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CurInstanceDeadline",$param) and $param["CurInstanceDeadline"] !== null) {
            $this->CurInstanceDeadline = $param["CurInstanceDeadline"];
        }
    }
}
