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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCdnDomainLogs request structure.
 *
 * @method string getDomain() Obtain Specifies a domain name for the query
 * @method void setDomain(string $Domain) Set Specifies a domain name for the query
 * @method string getStartTime() Obtain Starting time, such as `2019-09-04 00:00:00`
 * @method void setStartTime(string $StartTime) Set Starting time, such as `2019-09-04 00:00:00`
 * @method string getEndTime() Obtain End time, such as `2019-09-04 12:00:00`
 * @method void setEndTime(string $EndTime) Set End time, such as `2019-09-04 12:00:00`
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 100. Maximum value: 1,000
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 100. Maximum value: 1,000
 * @method string getArea() Obtain Specifies a region for the query.
`mainland`: specifies to return the download link of logs on acceleration within Mainland China;
`overseas`: specifies to return the download link of logs on acceleration outside Mainland China;
`global`: specifies to return a download link of logs on acceleration within Mainland China and a link of logs on acceleration outside Mainland China.
Default value: `mainland`.
 * @method void setArea(string $Area) Set Specifies a region for the query.
`mainland`: specifies to return the download link of logs on acceleration within Mainland China;
`overseas`: specifies to return the download link of logs on acceleration outside Mainland China;
`global`: specifies to return a download link of logs on acceleration within Mainland China and a link of logs on acceleration outside Mainland China.
Default value: `mainland`.
 * @method string getLogType() Obtain Specifies the type of logs to download (only access logs supported).
`access`: Access logs.
 * @method void setLogType(string $LogType) Set Specifies the type of logs to download (only access logs supported).
`access`: Access logs.
 */
class DescribeCdnDomainLogsRequest extends AbstractModel
{
    /**
     * @var string Specifies a domain name for the query
     */
    public $Domain;

    /**
     * @var string Starting time, such as `2019-09-04 00:00:00`
     */
    public $StartTime;

    /**
     * @var string End time, such as `2019-09-04 12:00:00`
     */
    public $EndTime;

    /**
     * @var integer Offset for paginated queries. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: 100. Maximum value: 1,000
     */
    public $Limit;

    /**
     * @var string Specifies a region for the query.
`mainland`: specifies to return the download link of logs on acceleration within Mainland China;
`overseas`: specifies to return the download link of logs on acceleration outside Mainland China;
`global`: specifies to return a download link of logs on acceleration within Mainland China and a link of logs on acceleration outside Mainland China.
Default value: `mainland`.
     */
    public $Area;

    /**
     * @var string Specifies the type of logs to download (only access logs supported).
`access`: Access logs.
     */
    public $LogType;

    /**
     * @param string $Domain Specifies a domain name for the query
     * @param string $StartTime Starting time, such as `2019-09-04 00:00:00`
     * @param string $EndTime End time, such as `2019-09-04 12:00:00`
     * @param integer $Offset Offset for paginated queries. Default value: 0
     * @param integer $Limit Limit on paginated queries. Default value: 100. Maximum value: 1,000
     * @param string $Area Specifies a region for the query.
`mainland`: specifies to return the download link of logs on acceleration within Mainland China;
`overseas`: specifies to return the download link of logs on acceleration outside Mainland China;
`global`: specifies to return a download link of logs on acceleration within Mainland China and a link of logs on acceleration outside Mainland China.
Default value: `mainland`.
     * @param string $LogType Specifies the type of logs to download (only access logs supported).
`access`: Access logs.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
