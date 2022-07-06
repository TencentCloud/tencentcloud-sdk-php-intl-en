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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The latest pull information.
 *
 * @method string getFileUrl() Obtain The URL of the file currently pulled.
 * @method void setFileUrl(string $FileUrl) Set The URL of the file currently pulled.
 * @method integer getOffsetTime() Obtain The offset of the file currently pulled.
 * @method void setOffsetTime(integer $OffsetTime) Set The offset of the file currently pulled.
 * @method string getReportTime() Obtain The time when the offset is reported, in UTC format.
Example: 2020-07-23T03:20:39Z
Note: Beijing time is 8 hours ahead of UTC.
 * @method void setReportTime(string $ReportTime) Set The time when the offset is reported, in UTC format.
Example: 2020-07-23T03:20:39Z
Note: Beijing time is 8 hours ahead of UTC.
 * @method integer getLoopedTimes() Obtain The number of times looped.
 * @method void setLoopedTimes(integer $LoopedTimes) Set The number of times looped.
 */
class RecentPullInfo extends AbstractModel
{
    /**
     * @var string The URL of the file currently pulled.
     */
    public $FileUrl;

    /**
     * @var integer The offset of the file currently pulled.
     */
    public $OffsetTime;

    /**
     * @var string The time when the offset is reported, in UTC format.
Example: 2020-07-23T03:20:39Z
Note: Beijing time is 8 hours ahead of UTC.
     */
    public $ReportTime;

    /**
     * @var integer The number of times looped.
     */
    public $LoopedTimes;

    /**
     * @param string $FileUrl The URL of the file currently pulled.
     * @param integer $OffsetTime The offset of the file currently pulled.
     * @param string $ReportTime The time when the offset is reported, in UTC format.
Example: 2020-07-23T03:20:39Z
Note: Beijing time is 8 hours ahead of UTC.
     * @param integer $LoopedTimes The number of times looped.
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
        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("LoopedTimes",$param) and $param["LoopedTimes"] !== null) {
            $this->LoopedTimes = $param["LoopedTimes"];
        }
    }
}
