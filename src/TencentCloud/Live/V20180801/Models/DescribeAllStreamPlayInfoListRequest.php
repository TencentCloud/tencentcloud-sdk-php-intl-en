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
 * DescribeAllStreamPlayInfoList request structure.
 *
 * @method string getQueryTime() Obtain The time point to query in the format of “yyyy-mm-dd HH:MM:00”(accurate to the minute). You can query data from the last month. Because there is a five-minute delay in the data, if you want to get the latest data, we recommend you pass in a time point five minutes earlier than the current time.
 * @method void setQueryTime(string $QueryTime) Set The time point to query in the format of “yyyy-mm-dd HH:MM:00”(accurate to the minute). You can query data from the last month. Because there is a five-minute delay in the data, if you want to get the latest data, we recommend you pass in a time point five minutes earlier than the current time.
 * @method array getPlayDomains() Obtain The playback domains to query. If you leave this empty, all playback domains will be queried.
 * @method void setPlayDomains(array $PlayDomains) Set The playback domains to query. If you leave this empty, all playback domains will be queried.
 */
class DescribeAllStreamPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string The time point to query in the format of “yyyy-mm-dd HH:MM:00”(accurate to the minute). You can query data from the last month. Because there is a five-minute delay in the data, if you want to get the latest data, we recommend you pass in a time point five minutes earlier than the current time.
     */
    public $QueryTime;

    /**
     * @var array The playback domains to query. If you leave this empty, all playback domains will be queried.
     */
    public $PlayDomains;

    /**
     * @param string $QueryTime The time point to query in the format of “yyyy-mm-dd HH:MM:00”(accurate to the minute). You can query data from the last month. Because there is a five-minute delay in the data, if you want to get the latest data, we recommend you pass in a time point five minutes earlier than the current time.
     * @param array $PlayDomains The playback domains to query. If you leave this empty, all playback domains will be queried.
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
        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }
    }
}
