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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing mode of the instance
 *
 * @method integer getPeriod() Obtain Specifies the duration for purchasing cloud block storage (cbs) in months. default unit: month. valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
 * @method void setPeriod(integer $Period) Set Specifies the duration for purchasing cloud block storage (cbs) in months. default unit: month. valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
 * @method string getRenewFlag() Obtain Automatic renewal flag. valid values:.
<ul>
<Li>NOTIFY_AND_AUTO_RENEW: notifies expiry and renews automatically.</li>.
<Li>NOTIFY_AND_MANUAL_RENEW: notifies expiry but does not renew automatically.</li>.
<Li>DISABLE_NOTIFY_AND_MANUAL_RENEW: no notification is sent upon expiration, and the instance is not renewed automatically.</li>.
</ul>
Default value: NOTIFY_AND_MANUAL_RENEW.
 * @method void setRenewFlag(string $RenewFlag) Set Automatic renewal flag. valid values:.
<ul>
<Li>NOTIFY_AND_AUTO_RENEW: notifies expiry and renews automatically.</li>.
<Li>NOTIFY_AND_MANUAL_RENEW: notifies expiry but does not renew automatically.</li>.
<Li>DISABLE_NOTIFY_AND_MANUAL_RENEW: no notification is sent upon expiration, and the instance is not renewed automatically.</li>.
</ul>
Default value: NOTIFY_AND_MANUAL_RENEW.
 * @method string getCurInstanceDeadline() Obtain Specifies the current expiration time of the child machine when the expiration time of the cloud block storage needs to align with the mounted child machine. you can input this parameter. if Period is input at this time, it indicates the duration of child machine renewal. the cloud disk will automatically renew according to the expiration time after the child machine is renewed.
 * @method void setCurInstanceDeadline(string $CurInstanceDeadline) Set Specifies the current expiration time of the child machine when the expiration time of the cloud block storage needs to align with the mounted child machine. you can input this parameter. if Period is input at this time, it indicates the duration of child machine renewal. the cloud disk will automatically renew according to the expiration time after the child machine is renewed.
 */
class DiskChargePrepaid extends AbstractModel
{
    /**
     * @var integer Specifies the duration for purchasing cloud block storage (cbs) in months. default unit: month. valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
     */
    public $Period;

    /**
     * @var string Automatic renewal flag. valid values:.
<ul>
<Li>NOTIFY_AND_AUTO_RENEW: notifies expiry and renews automatically.</li>.
<Li>NOTIFY_AND_MANUAL_RENEW: notifies expiry but does not renew automatically.</li>.
<Li>DISABLE_NOTIFY_AND_MANUAL_RENEW: no notification is sent upon expiration, and the instance is not renewed automatically.</li>.
</ul>
Default value: NOTIFY_AND_MANUAL_RENEW.
     */
    public $RenewFlag;

    /**
     * @var string Specifies the current expiration time of the child machine when the expiration time of the cloud block storage needs to align with the mounted child machine. you can input this parameter. if Period is input at this time, it indicates the duration of child machine renewal. the cloud disk will automatically renew according to the expiration time after the child machine is renewed.
     */
    public $CurInstanceDeadline;

    /**
     * @param integer $Period Specifies the duration for purchasing cloud block storage (cbs) in months. default unit: month. valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
     * @param string $RenewFlag Automatic renewal flag. valid values:.
<ul>
<Li>NOTIFY_AND_AUTO_RENEW: notifies expiry and renews automatically.</li>.
<Li>NOTIFY_AND_MANUAL_RENEW: notifies expiry but does not renew automatically.</li>.
<Li>DISABLE_NOTIFY_AND_MANUAL_RENEW: no notification is sent upon expiration, and the instance is not renewed automatically.</li>.
</ul>
Default value: NOTIFY_AND_MANUAL_RENEW.
     * @param string $CurInstanceDeadline Specifies the current expiration time of the child machine when the expiration time of the cloud block storage needs to align with the mounted child machine. you can input this parameter. if Period is input at this time, it indicates the duration of child machine renewal. the cloud disk will automatically renew according to the expiration time after the child machine is renewed.
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
