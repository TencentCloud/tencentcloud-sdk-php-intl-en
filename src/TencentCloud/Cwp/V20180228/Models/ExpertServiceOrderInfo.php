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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Expert service order information
 *
 * @method integer getOrderId() Obtain Order ID
 * @method void setOrderId(integer $OrderId) Set Order ID
 * @method integer getInquireType() Obtain Order type. 1: emergency; 2: Ultimate Edition important period guarantee; 3: security manager.
 * @method void setInquireType(integer $InquireType) Set Order type. 1: emergency; 2: Ultimate Edition important period guarantee; 3: security manager.
 * @method integer getInquireNum() Obtain Number of services
 * @method void setInquireNum(integer $InquireNum) Set Number of services
 * @method string getBeginTime() Obtain Service start time
 * @method void setBeginTime(string $BeginTime) Set Service start time
 * @method string getEndTime() Obtain Service end time
 * @method void setEndTime(string $EndTime) Set Service end time
 * @method integer getServiceTime() Obtain Service duration, in months
 * @method void setServiceTime(integer $ServiceTime) Set Service duration, in months
 * @method integer getStatus() Obtain Order status. 0: not started; 1: in service; 2: expired; 3: completed; 4: refunded and terminated.
 * @method void setStatus(integer $Status) Set Order status. 0: not started; 1: in service; 2: expired; 3: completed; 4: refunded and terminated.
 */
class ExpertServiceOrderInfo extends AbstractModel
{
    /**
     * @var integer Order ID
     */
    public $OrderId;

    /**
     * @var integer Order type. 1: emergency; 2: Ultimate Edition important period guarantee; 3: security manager.
     */
    public $InquireType;

    /**
     * @var integer Number of services
     */
    public $InquireNum;

    /**
     * @var string Service start time
     */
    public $BeginTime;

    /**
     * @var string Service end time
     */
    public $EndTime;

    /**
     * @var integer Service duration, in months
     */
    public $ServiceTime;

    /**
     * @var integer Order status. 0: not started; 1: in service; 2: expired; 3: completed; 4: refunded and terminated.
     */
    public $Status;

    /**
     * @param integer $OrderId Order ID
     * @param integer $InquireType Order type. 1: emergency; 2: Ultimate Edition important period guarantee; 3: security manager.
     * @param integer $InquireNum Number of services
     * @param string $BeginTime Service start time
     * @param string $EndTime Service end time
     * @param integer $ServiceTime Service duration, in months
     * @param integer $Status Order status. 0: not started; 1: in service; 2: expired; 3: completed; 4: refunded and terminated.
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("InquireType",$param) and $param["InquireType"] !== null) {
            $this->InquireType = $param["InquireType"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ServiceTime",$param) and $param["ServiceTime"] !== null) {
            $this->ServiceTime = $param["ServiceTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
