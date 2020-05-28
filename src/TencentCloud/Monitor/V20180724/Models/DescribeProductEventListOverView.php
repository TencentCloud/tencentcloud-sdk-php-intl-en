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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OverView object returned by the DescribeProductEventList API
 *
 * @method integer getStatusChangeAmount() Obtain Number of events whose statuses have changed.
Note: This field may return null, indicating that no valid value was found.
 * @method void setStatusChangeAmount(integer $StatusChangeAmount) Set Number of events whose statuses have changed.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getUnConfigAlarmAmount() Obtain Number of events whose alarm statuses are not configured.
Note: This field may return null, indicating that no valid value was found.
 * @method void setUnConfigAlarmAmount(integer $UnConfigAlarmAmount) Set Number of events whose alarm statuses are not configured.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getUnNormalEventAmount() Obtain Number of events with exceptions.
Note: This field may return null, indicating that no valid value was found.
 * @method void setUnNormalEventAmount(integer $UnNormalEventAmount) Set Number of events with exceptions.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getUnRecoverAmount() Obtain Number of events that have not been recovered.
Note: This field may return null, indicating that no valid value was found.
 * @method void setUnRecoverAmount(integer $UnRecoverAmount) Set Number of events that have not been recovered.
Note: This field may return null, indicating that no valid value was found.
 */
class DescribeProductEventListOverView extends AbstractModel
{
    /**
     * @var integer Number of events whose statuses have changed.
Note: This field may return null, indicating that no valid value was found.
     */
    public $StatusChangeAmount;

    /**
     * @var integer Number of events whose alarm statuses are not configured.
Note: This field may return null, indicating that no valid value was found.
     */
    public $UnConfigAlarmAmount;

    /**
     * @var integer Number of events with exceptions.
Note: This field may return null, indicating that no valid value was found.
     */
    public $UnNormalEventAmount;

    /**
     * @var integer Number of events that have not been recovered.
Note: This field may return null, indicating that no valid value was found.
     */
    public $UnRecoverAmount;

    /**
     * @param integer $StatusChangeAmount Number of events whose statuses have changed.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $UnConfigAlarmAmount Number of events whose alarm statuses are not configured.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $UnNormalEventAmount Number of events with exceptions.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $UnRecoverAmount Number of events that have not been recovered.
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("StatusChangeAmount",$param) and $param["StatusChangeAmount"] !== null) {
            $this->StatusChangeAmount = $param["StatusChangeAmount"];
        }

        if (array_key_exists("UnConfigAlarmAmount",$param) and $param["UnConfigAlarmAmount"] !== null) {
            $this->UnConfigAlarmAmount = $param["UnConfigAlarmAmount"];
        }

        if (array_key_exists("UnNormalEventAmount",$param) and $param["UnNormalEventAmount"] !== null) {
            $this->UnNormalEventAmount = $param["UnNormalEventAmount"];
        }

        if (array_key_exists("UnRecoverAmount",$param) and $param["UnRecoverAmount"] !== null) {
            $this->UnRecoverAmount = $param["UnRecoverAmount"];
        }
    }
}
