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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDN log information
 *
 * @method string getDate() Obtain Log date in the format of `yyyy-MM-dd`, such as 2018-03-01.
 * @method void setDate(string $Date) Set Log date in the format of `yyyy-MM-dd`, such as 2018-03-01.
 * @method string getName() Obtain Log name in the format of date and time-domain name,
such as 2018120101-test.vod2.mqcloud.com.
 * @method void setName(string $Name) Set Log name in the format of date and time-domain name,
such as 2018120101-test.vod2.mqcloud.com.
 * @method string getUrl() Obtain Log download link, which is valid for 24 hours.
 * @method void setUrl(string $Url) Set Log download link, which is valid for 24 hours.
 * @method string getStartTime() Obtain Log start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=)
 * @method void setStartTime(string $StartTime) Set Log start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=)
 * @method string getEndTime() Obtain Log end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=)
 * @method void setEndTime(string $EndTime) Set Log end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=)
 */
class CdnLogInfo extends AbstractModel
{
    /**
     * @var string Log date in the format of `yyyy-MM-dd`, such as 2018-03-01.
     */
    public $Date;

    /**
     * @var string Log name in the format of date and time-domain name,
such as 2018120101-test.vod2.mqcloud.com.
     */
    public $Name;

    /**
     * @var string Log download link, which is valid for 24 hours.
     */
    public $Url;

    /**
     * @var string Log start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=)
     */
    public $StartTime;

    /**
     * @var string Log end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=)
     */
    public $EndTime;

    /**
     * @param string $Date Log date in the format of `yyyy-MM-dd`, such as 2018-03-01.
     * @param string $Name Log name in the format of date and time-domain name,
such as 2018120101-test.vod2.mqcloud.com.
     * @param string $Url Log download link, which is valid for 24 hours.
     * @param string $StartTime Log start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=)
     * @param string $EndTime Log end time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=)
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
