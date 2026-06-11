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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogContext request structure.
 *
 * @method string getTopicId() Obtain Log topic Id to query.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic Id to query.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method string getBTime() Obtain Log time, which is the Time in the Results structure in the returned information of the [retrieve and analyze logs](https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1) api, should be converted from the millisecond-level Unix timestamp to a string in the YYYY-mm-dd HH:MM:SS.FFF format according to the UTC+8 time zone.
 * @method void setBTime(string $BTime) Set Log time, which is the Time in the Results structure in the returned information of the [retrieve and analyze logs](https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1) api, should be converted from the millisecond-level Unix timestamp to a string in the YYYY-mm-dd HH:MM:SS.FFF format according to the UTC+8 time zone.
 * @method string getPkgId() Obtain Log package sequence number, which is the PkgId in the Results structure returned by the retrieve and analyze logs api (https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1).
 * @method void setPkgId(string $PkgId) Set Log package sequence number, which is the PkgId in the Results structure returned by the retrieve and analyze logs api (https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1).
 * @method integer getPkgLogId() Obtain Sequence number of a log within the log package, which is the PkgLogId in the Results structure returned by the [retrieve and analyze logs](https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1) api.
 * @method void setPkgLogId(integer $PkgLogId) Set Sequence number of a log within the log package, which is the PkgLogId in the Results structure returned by the [retrieve and analyze logs](https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1) api.
 * @method integer getPrevLogs() Obtain The previous ${PrevLogs} logs. Default value: 10.
 * @method void setPrevLogs(integer $PrevLogs) Set The previous ${PrevLogs} logs. Default value: 10.
 * @method integer getNextLogs() Obtain The next ${NextLogs} logs. Default value: 10.
 * @method void setNextLogs(integer $NextLogs) Set The next ${NextLogs} logs. Default value: 10.
 * @method string getQuery() Obtain Query statement, filtering the log context with a maximum length of 12KB
The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval criteria]</a> and does not support SQL statement.
 * @method void setQuery(string $Query) Set Query statement, filtering the log context with a maximum length of 12KB
The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval criteria]</a> and does not support SQL statement.
 * @method integer getFrom() Obtain Context search start time, unit: millisecond-level timestamp
Note:
-When From is empty, it means no restrictions on the start time of context search.
-From and To are not empty, From < To
-Currently, the system only supports the Shanghai/Virginia/Singapore region.
 * @method void setFrom(integer $From) Set Context search start time, unit: millisecond-level timestamp
Note:
-When From is empty, it means no restrictions on the start time of context search.
-From and To are not empty, From < To
-Currently, the system only supports the Shanghai/Virginia/Singapore region.
 * @method integer getTo() Obtain End time of context search. Measurement unit: millisecond-level timestamp.
Note:
-When To is empty, it means no restrictions on the end time of context search.
-From and To are not empty, From < To
-Currently, the system only supports the Shanghai/Virginia/Singapore region.
 * @method void setTo(integer $To) Set End time of context search. Measurement unit: millisecond-level timestamp.
Note:
-When To is empty, it means no restrictions on the end time of context search.
-From and To are not empty, From < To
-Currently, the system only supports the Shanghai/Virginia/Singapore region.
 */
class DescribeLogContextRequest extends AbstractModel
{
    /**
     * @var string Log topic Id to query.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string Log time, which is the Time in the Results structure in the returned information of the [retrieve and analyze logs](https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1) api, should be converted from the millisecond-level Unix timestamp to a string in the YYYY-mm-dd HH:MM:SS.FFF format according to the UTC+8 time zone.
     */
    public $BTime;

    /**
     * @var string Log package sequence number, which is the PkgId in the Results structure returned by the retrieve and analyze logs api (https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1).
     */
    public $PkgId;

    /**
     * @var integer Sequence number of a log within the log package, which is the PkgLogId in the Results structure returned by the [retrieve and analyze logs](https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1) api.
     */
    public $PkgLogId;

    /**
     * @var integer The previous ${PrevLogs} logs. Default value: 10.
     */
    public $PrevLogs;

    /**
     * @var integer The next ${NextLogs} logs. Default value: 10.
     */
    public $NextLogs;

    /**
     * @var string Query statement, filtering the log context with a maximum length of 12KB
The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval criteria]</a> and does not support SQL statement.
     */
    public $Query;

    /**
     * @var integer Context search start time, unit: millisecond-level timestamp
Note:
-When From is empty, it means no restrictions on the start time of context search.
-From and To are not empty, From < To
-Currently, the system only supports the Shanghai/Virginia/Singapore region.
     */
    public $From;

    /**
     * @var integer End time of context search. Measurement unit: millisecond-level timestamp.
Note:
-When To is empty, it means no restrictions on the end time of context search.
-From and To are not empty, From < To
-Currently, the system only supports the Shanghai/Virginia/Singapore region.
     */
    public $To;

    /**
     * @param string $TopicId Log topic Id to query.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     * @param string $BTime Log time, which is the Time in the Results structure in the returned information of the [retrieve and analyze logs](https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1) api, should be converted from the millisecond-level Unix timestamp to a string in the YYYY-mm-dd HH:MM:SS.FFF format according to the UTC+8 time zone.
     * @param string $PkgId Log package sequence number, which is the PkgId in the Results structure returned by the retrieve and analyze logs api (https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1).
     * @param integer $PkgLogId Sequence number of a log within the log package, which is the PkgLogId in the Results structure returned by the [retrieve and analyze logs](https://www.tencentcloud.com/document/product/614/56447?from_cn_redirect=1) api.
     * @param integer $PrevLogs The previous ${PrevLogs} logs. Default value: 10.
     * @param integer $NextLogs The next ${NextLogs} logs. Default value: 10.
     * @param string $Query Query statement, filtering the log context with a maximum length of 12KB
The statement consists of <a href="https://www.tencentcloud.com/document/product/614/47044?from_cn_redirect=1" target="_blank">[retrieval criteria]</a> and does not support SQL statement.
     * @param integer $From Context search start time, unit: millisecond-level timestamp
Note:
-When From is empty, it means no restrictions on the start time of context search.
-From and To are not empty, From < To
-Currently, the system only supports the Shanghai/Virginia/Singapore region.
     * @param integer $To End time of context search. Measurement unit: millisecond-level timestamp.
Note:
-When To is empty, it means no restrictions on the end time of context search.
-From and To are not empty, From < To
-Currently, the system only supports the Shanghai/Virginia/Singapore region.
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("BTime",$param) and $param["BTime"] !== null) {
            $this->BTime = $param["BTime"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("PrevLogs",$param) and $param["PrevLogs"] !== null) {
            $this->PrevLogs = $param["PrevLogs"];
        }

        if (array_key_exists("NextLogs",$param) and $param["NextLogs"] !== null) {
            $this->NextLogs = $param["NextLogs"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }
    }
}
