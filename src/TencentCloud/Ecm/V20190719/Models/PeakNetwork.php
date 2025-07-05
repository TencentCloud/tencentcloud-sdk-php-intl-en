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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Peak network data
 *
 * @method string getRecordTime() Obtain Recording time.
 * @method void setRecordTime(string $RecordTime) Set Recording time.
 * @method string getPeakInNetwork() Obtain Inbound bandwidth data.
 * @method void setPeakInNetwork(string $PeakInNetwork) Set Inbound bandwidth data.
 * @method string getPeakOutNetwork() Obtain Outbound bandwidth data.
 * @method void setPeakOutNetwork(string $PeakOutNetwork) Set Outbound bandwidth data.
 * @method string getChargeNetwork() Obtain Billable bandwidth in bps
 * @method void setChargeNetwork(string $ChargeNetwork) Set Billable bandwidth in bps
 */
class PeakNetwork extends AbstractModel
{
    /**
     * @var string Recording time.
     */
    public $RecordTime;

    /**
     * @var string Inbound bandwidth data.
     */
    public $PeakInNetwork;

    /**
     * @var string Outbound bandwidth data.
     */
    public $PeakOutNetwork;

    /**
     * @var string Billable bandwidth in bps
     */
    public $ChargeNetwork;

    /**
     * @param string $RecordTime Recording time.
     * @param string $PeakInNetwork Inbound bandwidth data.
     * @param string $PeakOutNetwork Outbound bandwidth data.
     * @param string $ChargeNetwork Billable bandwidth in bps
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
        if (array_key_exists("RecordTime",$param) and $param["RecordTime"] !== null) {
            $this->RecordTime = $param["RecordTime"];
        }

        if (array_key_exists("PeakInNetwork",$param) and $param["PeakInNetwork"] !== null) {
            $this->PeakInNetwork = $param["PeakInNetwork"];
        }

        if (array_key_exists("PeakOutNetwork",$param) and $param["PeakOutNetwork"] !== null) {
            $this->PeakOutNetwork = $param["PeakOutNetwork"];
        }

        if (array_key_exists("ChargeNetwork",$param) and $param["ChargeNetwork"] !== null) {
            $this->ChargeNetwork = $param["ChargeNetwork"];
        }
    }
}
