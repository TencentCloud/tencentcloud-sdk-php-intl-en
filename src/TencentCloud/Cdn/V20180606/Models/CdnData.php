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
 * Detailed access data
 *
 * @method string getMetric() Obtain Queries by the specified metric:
`flux`: Traffic (in bytes)
`bandwidth`: Bandwidth (in bps)
`request`: Number of requests
`fluxHitRate`: Traffic hit rate (in %)
`statusCode`: Status code. The aggregate data for 2xx, 3xx, 4xx, and 5xx status codes will be returned (in entries)
`2XX`: Returns the aggregate list of 2xx status codes and the data for status codes starting with 2 (in entries)
`3XX`: Returns the aggregate list of 3xx status codes and the data for status codes starting with 3 (in entries)
`4XX`: Returns the aggregate list of 4xx status codes and the data for status codes starting with 4 (in entries)
`5XX`: Returns the aggregate list of 5xx status codes and the data for status codes starting with 5 (in entries)
You can also specify a status code for querying.
 * @method void setMetric(string $Metric) Set Queries by the specified metric:
`flux`: Traffic (in bytes)
`bandwidth`: Bandwidth (in bps)
`request`: Number of requests
`fluxHitRate`: Traffic hit rate (in %)
`statusCode`: Status code. The aggregate data for 2xx, 3xx, 4xx, and 5xx status codes will be returned (in entries)
`2XX`: Returns the aggregate list of 2xx status codes and the data for status codes starting with 2 (in entries)
`3XX`: Returns the aggregate list of 3xx status codes and the data for status codes starting with 3 (in entries)
`4XX`: Returns the aggregate list of 4xx status codes and the data for status codes starting with 4 (in entries)
`5XX`: Returns the aggregate list of 5xx status codes and the data for status codes starting with 5 (in entries)
You can also specify a status code for querying.
 * @method array getDetailData() Obtain Detailed data combination
 * @method void setDetailData(array $DetailData) Set Detailed data combination
 * @method SummarizedData getSummarizedData() Obtain Aggregate data combination
 * @method void setSummarizedData(SummarizedData $SummarizedData) Set Aggregate data combination
 */
class CdnData extends AbstractModel
{
    /**
     * @var string Queries by the specified metric:
`flux`: Traffic (in bytes)
`bandwidth`: Bandwidth (in bps)
`request`: Number of requests
`fluxHitRate`: Traffic hit rate (in %)
`statusCode`: Status code. The aggregate data for 2xx, 3xx, 4xx, and 5xx status codes will be returned (in entries)
`2XX`: Returns the aggregate list of 2xx status codes and the data for status codes starting with 2 (in entries)
`3XX`: Returns the aggregate list of 3xx status codes and the data for status codes starting with 3 (in entries)
`4XX`: Returns the aggregate list of 4xx status codes and the data for status codes starting with 4 (in entries)
`5XX`: Returns the aggregate list of 5xx status codes and the data for status codes starting with 5 (in entries)
You can also specify a status code for querying.
     */
    public $Metric;

    /**
     * @var array Detailed data combination
     */
    public $DetailData;

    /**
     * @var SummarizedData Aggregate data combination
     */
    public $SummarizedData;

    /**
     * @param string $Metric Queries by the specified metric:
`flux`: Traffic (in bytes)
`bandwidth`: Bandwidth (in bps)
`request`: Number of requests
`fluxHitRate`: Traffic hit rate (in %)
`statusCode`: Status code. The aggregate data for 2xx, 3xx, 4xx, and 5xx status codes will be returned (in entries)
`2XX`: Returns the aggregate list of 2xx status codes and the data for status codes starting with 2 (in entries)
`3XX`: Returns the aggregate list of 3xx status codes and the data for status codes starting with 3 (in entries)
`4XX`: Returns the aggregate list of 4xx status codes and the data for status codes starting with 4 (in entries)
`5XX`: Returns the aggregate list of 5xx status codes and the data for status codes starting with 5 (in entries)
You can also specify a status code for querying.
     * @param array $DetailData Detailed data combination
     * @param SummarizedData $SummarizedData Aggregate data combination
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = [];
            foreach ($param["DetailData"] as $key => $value){
                $obj = new TimestampData();
                $obj->deserialize($value);
                array_push($this->DetailData, $obj);
            }
        }

        if (array_key_exists("SummarizedData",$param) and $param["SummarizedData"] !== null) {
            $this->SummarizedData = new SummarizedData();
            $this->SummarizedData->deserialize($param["SummarizedData"]);
        }
    }
}
