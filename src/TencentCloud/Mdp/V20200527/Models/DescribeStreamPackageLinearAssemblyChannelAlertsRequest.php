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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPackageLinearAssemblyChannelAlerts request structure.
 *
 * @method string getChannelId() Obtain Channel ID.
 * @method void setChannelId(string $ChannelId) Set Channel ID.
 * @method integer getStartTime() Obtain Query start time, Unix timestamp, supports queries in the last seven days.
 * @method void setStartTime(integer $StartTime) Set Query start time, Unix timestamp, supports queries in the last seven days.
 * @method integer getEndTime() Obtain Query end time, Unix timestamp, supports queries in the last seven days.
 * @method void setEndTime(integer $EndTime) Set Query end time, Unix timestamp, supports queries in the last seven days.
 */
class DescribeStreamPackageLinearAssemblyChannelAlertsRequest extends AbstractModel
{
    /**
     * @var string Channel ID.
     */
    public $ChannelId;

    /**
     * @var integer Query start time, Unix timestamp, supports queries in the last seven days.
     */
    public $StartTime;

    /**
     * @var integer Query end time, Unix timestamp, supports queries in the last seven days.
     */
    public $EndTime;

    /**
     * @param string $ChannelId Channel ID.
     * @param integer $StartTime Query start time, Unix timestamp, supports queries in the last seven days.
     * @param integer $EndTime Query end time, Unix timestamp, supports queries in the last seven days.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
