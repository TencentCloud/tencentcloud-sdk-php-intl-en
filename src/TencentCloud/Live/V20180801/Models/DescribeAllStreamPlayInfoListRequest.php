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
 * @method string getQueryTime() Obtain Query time accurate down to the minute in the format of `yyyy-mm-dd HH:MM:SS`. Data for the last month can be queried. The data has a delay of about 5 minutes; therefore, if you want to query real-time data, we recommend you pass in a point in time 5 minutes ago.
 * @method void setQueryTime(string $QueryTime) Set Query time accurate down to the minute in the format of `yyyy-mm-dd HH:MM:SS`. Data for the last month can be queried. The data has a delay of about 5 minutes; therefore, if you want to query real-time data, we recommend you pass in a point in time 5 minutes ago.
 */
class DescribeAllStreamPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string Query time accurate down to the minute in the format of `yyyy-mm-dd HH:MM:SS`. Data for the last month can be queried. The data has a delay of about 5 minutes; therefore, if you want to query real-time data, we recommend you pass in a point in time 5 minutes ago.
     */
    public $QueryTime;

    /**
     * @param string $QueryTime Query time accurate down to the minute in the format of `yyyy-mm-dd HH:MM:SS`. Data for the last month can be queried. The data has a delay of about 5 minutes; therefore, if you want to query real-time data, we recommend you pass in a point in time 5 minutes ago.
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
    }
}
