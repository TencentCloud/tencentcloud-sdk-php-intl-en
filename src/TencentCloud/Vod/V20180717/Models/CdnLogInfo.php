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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDN log information
 *
 * @method string getDate() Obtain <p>Date the log belongs to, format: yyyy-MM-dd, for example 2018-03-01.</p>
 * @method void setDate(string $Date) Set <p>Date the log belongs to, format: yyyy-MM-dd, for example 2018-03-01.</p>
 * @method string getName() Obtain <p>Log name, format: date hr-domain name<br>For example, example.com.</p>
 * @method void setName(string $Name) Set <p>Log name, format: date hr-domain name<br>For example, example.com.</p>
 * @method string getUrl() Obtain <p>Log download link, valid for 24 hours.</p>
 * @method void setUrl(string $Url) Set <p>Log download link, valid for 24 hours.</p>
 * @method string getStartTime() Obtain <p>Log start time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setStartTime(string $StartTime) Set <p>Log start time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getEndTime() Obtain <p>Log end time. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setEndTime(string $EndTime) Set <p>Log end time. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 */
class CdnLogInfo extends AbstractModel
{
    /**
     * @var string <p>Date the log belongs to, format: yyyy-MM-dd, for example 2018-03-01.</p>
     */
    public $Date;

    /**
     * @var string <p>Log name, format: date hr-domain name<br>For example, example.com.</p>
     */
    public $Name;

    /**
     * @var string <p>Log download link, valid for 24 hours.</p>
     */
    public $Url;

    /**
     * @var string <p>Log start time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Log end time. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $EndTime;

    /**
     * @param string $Date <p>Date the log belongs to, format: yyyy-MM-dd, for example 2018-03-01.</p>
     * @param string $Name <p>Log name, format: date hr-domain name<br>For example, example.com.</p>
     * @param string $Url <p>Log download link, valid for 24 hours.</p>
     * @param string $StartTime <p>Log start time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $EndTime <p>Log end time. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
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
