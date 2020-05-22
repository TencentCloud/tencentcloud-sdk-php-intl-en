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
 * DescribeConcurrentRecordStreamNum request structure.
 *
 * @method string getLiveType() Obtain Live streaming type. SlowLive: LCB.
NormalLive: LVB.
 * @method void setLiveType(string $LiveType) Set Live streaming type. SlowLive: LCB.
NormalLive: LVB.
 * @method string getStartTime() Obtain Start time in the format of `yyyy-mm-dd HH:MM:SS`.
Data for the last 180 days can be queried.
 * @method void setStartTime(string $StartTime) Set Start time in the format of `yyyy-mm-dd HH:MM:SS`.
Data for the last 180 days can be queried.
 * @method string getEndTime() Obtain End time in the format of `yyyy-mm-dd HH:MM:SS`.
The maximum time span supported is 31 days.
 * @method void setEndTime(string $EndTime) Set End time in the format of `yyyy-mm-dd HH:MM:SS`.
The maximum time span supported is 31 days.
 * @method string getMainlandOrOversea() Obtain Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China). If this parameter is left empty, data for all regions will be queried.
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China). If this parameter is left empty, data for all regions will be queried.
 * @method array getPushDomains() Obtain Playback domain name list. If this parameter is left empty, full data will be queried.
 * @method void setPushDomains(array $PushDomains) Set Playback domain name list. If this parameter is left empty, full data will be queried.
 */
class DescribeConcurrentRecordStreamNumRequest extends AbstractModel
{
    /**
     * @var string Live streaming type. SlowLive: LCB.
NormalLive: LVB.
     */
    public $LiveType;

    /**
     * @var string Start time in the format of `yyyy-mm-dd HH:MM:SS`.
Data for the last 180 days can be queried.
     */
    public $StartTime;

    /**
     * @var string End time in the format of `yyyy-mm-dd HH:MM:SS`.
The maximum time span supported is 31 days.
     */
    public $EndTime;

    /**
     * @var string Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China). If this parameter is left empty, data for all regions will be queried.
     */
    public $MainlandOrOversea;

    /**
     * @var array Playback domain name list. If this parameter is left empty, full data will be queried.
     */
    public $PushDomains;

    /**
     * @param string $LiveType Live streaming type. SlowLive: LCB.
NormalLive: LVB.
     * @param string $StartTime Start time in the format of `yyyy-mm-dd HH:MM:SS`.
Data for the last 180 days can be queried.
     * @param string $EndTime End time in the format of `yyyy-mm-dd HH:MM:SS`.
The maximum time span supported is 31 days.
     * @param string $MainlandOrOversea Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China). If this parameter is left empty, data for all regions will be queried.
     * @param array $PushDomains Playback domain name list. If this parameter is left empty, full data will be queried.
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
        if (array_key_exists("LiveType",$param) and $param["LiveType"] !== null) {
            $this->LiveType = $param["LiveType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }
    }
}
