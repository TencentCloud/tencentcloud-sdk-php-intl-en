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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllStreamPlayInfoList response structure.
 *
 * @method string getQueryTime() Obtain The time point queried, whose format is the same as that of the corresponding request parameter.
 * @method void setQueryTime(string $QueryTime) Set The time point queried, whose format is the same as that of the corresponding request parameter.
 * @method array getDataInfoList() Obtain The playback data.
 * @method void setDataInfoList(array $DataInfoList) Set The playback data.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAllStreamPlayInfoListResponse extends AbstractModel
{
    /**
     * @var string The time point queried, whose format is the same as that of the corresponding request parameter.
     */
    public $QueryTime;

    /**
     * @var array The playback data.
     */
    public $DataInfoList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $QueryTime The time point queried, whose format is the same as that of the corresponding request parameter.
     * @param array $DataInfoList The playback data.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("DataInfoList",$param) and $param["DataInfoList"] !== null) {
            $this->DataInfoList = [];
            foreach ($param["DataInfoList"] as $key => $value){
                $obj = new MonitorStreamPlayInfo();
                $obj->deserialize($value);
                array_push($this->DataInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
