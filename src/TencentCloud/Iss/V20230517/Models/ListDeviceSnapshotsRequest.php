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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDeviceSnapshots request structure.
 *
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method string getDeviceId() Obtain Device ID (this field is not effective yet)
 * @method void setDeviceId(string $DeviceId) Set Device ID (this field is not effective yet)
 * @method integer getStart() Obtain Query start time. Default query: on the day.
 * @method void setStart(integer $Start) Set Query start time. Default query: on the day.
 * @method integer getEnd() Obtain Query end time. Default query: on the day.
 * @method void setEnd(integer $End) Set Query end time. Default query: on the day.
 * @method integer getPageNumber() Obtain Page number, which is 1 by default.
 * @method void setPageNumber(integer $PageNumber) Set Page number, which is 1 by default.
 * @method integer getPageSize() Obtain Pagination size. Default: 200. Maximum: 2000
 * @method void setPageSize(integer $PageSize) Set Pagination size. Default: 200. Maximum: 2000
 */
class ListDeviceSnapshotsRequest extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var string Device ID (this field is not effective yet)
     */
    public $DeviceId;

    /**
     * @var integer Query start time. Default query: on the day.
     */
    public $Start;

    /**
     * @var integer Query end time. Default query: on the day.
     */
    public $End;

    /**
     * @var integer Page number, which is 1 by default.
     */
    public $PageNumber;

    /**
     * @var integer Pagination size. Default: 200. Maximum: 2000
     */
    public $PageSize;

    /**
     * @param string $ChannelId Channel ID
     * @param string $DeviceId Device ID (this field is not effective yet)
     * @param integer $Start Query start time. Default query: on the day.
     * @param integer $End Query end time. Default query: on the day.
     * @param integer $PageNumber Page number, which is 1 by default.
     * @param integer $PageSize Pagination size. Default: 200. Maximum: 2000
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
