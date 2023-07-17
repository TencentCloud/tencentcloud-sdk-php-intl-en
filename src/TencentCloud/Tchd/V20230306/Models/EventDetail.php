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
namespace TencentCloud\Tchd\V20230306\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes information on an event.
 *
 * @method string getProductId() Obtain Product ID.
 * @method void setProductId(string $ProductId) Set Product ID.
 * @method string getProductName() Obtain Product name.
 * @method void setProductName(string $ProductName) Set Product name.
 * @method string getRegionId() Obtain Region ID.
 * @method void setRegionId(string $RegionId) Set Region ID.
 * @method string getRegionName() Obtain Region name.
 * @method void setRegionName(string $RegionName) Set Region name.
 * @method string getStartTime() Obtain Event start time.
 * @method void setStartTime(string $StartTime) Set Event start time.
 * @method string getEndTime() Obtain Event end time. If the event is still ongoing and has not ended, the end time will be empty.
 * @method void setEndTime(string $EndTime) Set Event end time. If the event is still ongoing and has not ended, the end time will be empty.
 * @method string getCurrentStatus() Obtain Current status: Normally, Informational, Degradation.
 * @method void setCurrentStatus(string $CurrentStatus) Set Current status: Normally, Informational, Degradation.
 */
class EventDetail extends AbstractModel
{
    /**
     * @var string Product ID.
     */
    public $ProductId;

    /**
     * @var string Product name.
     */
    public $ProductName;

    /**
     * @var string Region ID.
     */
    public $RegionId;

    /**
     * @var string Region name.
     */
    public $RegionName;

    /**
     * @var string Event start time.
     */
    public $StartTime;

    /**
     * @var string Event end time. If the event is still ongoing and has not ended, the end time will be empty.
     */
    public $EndTime;

    /**
     * @var string Current status: Normally, Informational, Degradation.
     */
    public $CurrentStatus;

    /**
     * @param string $ProductId Product ID.
     * @param string $ProductName Product name.
     * @param string $RegionId Region ID.
     * @param string $RegionName Region name.
     * @param string $StartTime Event start time.
     * @param string $EndTime Event end time. If the event is still ongoing and has not ended, the end time will be empty.
     * @param string $CurrentStatus Current status: Normally, Informational, Degradation.
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CurrentStatus",$param) and $param["CurrentStatus"] !== null) {
            $this->CurrentStatus = $param["CurrentStatus"];
        }
    }
}
