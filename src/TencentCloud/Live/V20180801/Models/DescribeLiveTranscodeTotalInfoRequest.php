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
 * DescribeLiveTranscodeTotalInfo request structure.
 *
 * @method string getStartTime() Obtain Start time (Beijing time)
Format: yyyy-mm-dd HH:MM:SS
 * @method void setStartTime(string $StartTime) Set Start time (Beijing time)
Format: yyyy-mm-dd HH:MM:SS
 * @method string getEndTime() Obtain End time (Beijing time)
Format: yyyy-mm-dd HH:MM:SS
 * @method void setEndTime(string $EndTime) Set End time (Beijing time)
Format: yyyy-mm-dd HH:MM:SS
 * @method array getPushDomains() Obtain List of push domains to query. If this parameter is left empty, the data of all domains is queried.
If this parameter is specified, the data returned will be on an hourly basis.
 * @method void setPushDomains(array $PushDomains) Set List of push domains to query. If this parameter is left empty, the data of all domains is queried.
If this parameter is specified, the data returned will be on an hourly basis.
 * @method string getMainlandOrOversea() Obtain Valid values:
`Mainland`: queries transcoding data in the Chinese mainland
`Oversea`: queries transcoding data outside the Chinese mainland
By default, the data both in and outside the Chinese mainland is queried.
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set Valid values:
`Mainland`: queries transcoding data in the Chinese mainland
`Oversea`: queries transcoding data outside the Chinese mainland
By default, the data both in and outside the Chinese mainland is queried.
 */
class DescribeLiveTranscodeTotalInfoRequest extends AbstractModel
{
    /**
     * @var string Start time (Beijing time)
Format: yyyy-mm-dd HH:MM:SS
     */
    public $StartTime;

    /**
     * @var string End time (Beijing time)
Format: yyyy-mm-dd HH:MM:SS
     */
    public $EndTime;

    /**
     * @var array List of push domains to query. If this parameter is left empty, the data of all domains is queried.
If this parameter is specified, the data returned will be on an hourly basis.
     */
    public $PushDomains;

    /**
     * @var string Valid values:
`Mainland`: queries transcoding data in the Chinese mainland
`Oversea`: queries transcoding data outside the Chinese mainland
By default, the data both in and outside the Chinese mainland is queried.
     */
    public $MainlandOrOversea;

    /**
     * @param string $StartTime Start time (Beijing time)
Format: yyyy-mm-dd HH:MM:SS
     * @param string $EndTime End time (Beijing time)
Format: yyyy-mm-dd HH:MM:SS
     * @param array $PushDomains List of push domains to query. If this parameter is left empty, the data of all domains is queried.
If this parameter is specified, the data returned will be on an hourly basis.
     * @param string $MainlandOrOversea Valid values:
`Mainland`: queries transcoding data in the Chinese mainland
`Oversea`: queries transcoding data outside the Chinese mainland
By default, the data both in and outside the Chinese mainland is queried.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }
    }
}
