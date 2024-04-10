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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExport request structure.
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method integer getCount() Obtain Number of logs to be exported. Maximum value: 50 million
 * @method void setCount(integer $Count) Set Number of logs to be exported. Maximum value: 50 million
 * @method string getQuery() Obtain Search statements for log export. <a href="https://intl.cloud.tencent.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statements]</a> are not supported.
 * @method void setQuery(string $Query) Set Search statements for log export. <a href="https://intl.cloud.tencent.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statements]</a> are not supported.
 * @method integer getFrom() Obtain Start time of the log to be exported, which is a timestamp in milliseconds
 * @method void setFrom(integer $From) Set Start time of the log to be exported, which is a timestamp in milliseconds
 * @method integer getTo() Obtain End time of the log to be exported, which is a timestamp in milliseconds
 * @method void setTo(integer $To) Set End time of the log to be exported, which is a timestamp in milliseconds
 * @method string getOrder() Obtain Exported log sorting order by time. Valid values: `asc`: ascending; `desc`: descending. Default value: `desc`
 * @method void setOrder(string $Order) Set Exported log sorting order by time. Valid values: `asc`: ascending; `desc`: descending. Default value: `desc`
 * @method string getFormat() Obtain Exported log data format. Valid values: `json`, `csv`. Default value: `json`
 * @method void setFormat(string $Format) Set Exported log data format. Valid values: `json`, `csv`. Default value: `json`
 * @method integer getSyntaxRule() Obtain Syntax rules; the default value is 0.0: Lucene syntax; 1: CQL syntax.
 * @method void setSyntaxRule(integer $SyntaxRule) Set Syntax rules; the default value is 0.0: Lucene syntax; 1: CQL syntax.
 */
class CreateExportRequest extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var integer Number of logs to be exported. Maximum value: 50 million
     */
    public $Count;

    /**
     * @var string Search statements for log export. <a href="https://intl.cloud.tencent.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statements]</a> are not supported.
     */
    public $Query;

    /**
     * @var integer Start time of the log to be exported, which is a timestamp in milliseconds
     */
    public $From;

    /**
     * @var integer End time of the log to be exported, which is a timestamp in milliseconds
     */
    public $To;

    /**
     * @var string Exported log sorting order by time. Valid values: `asc`: ascending; `desc`: descending. Default value: `desc`
     */
    public $Order;

    /**
     * @var string Exported log data format. Valid values: `json`, `csv`. Default value: `json`
     */
    public $Format;

    /**
     * @var integer Syntax rules; the default value is 0.0: Lucene syntax; 1: CQL syntax.
     */
    public $SyntaxRule;

    /**
     * @param string $TopicId Log topic ID
     * @param integer $Count Number of logs to be exported. Maximum value: 50 million
     * @param string $Query Search statements for log export. <a href="https://intl.cloud.tencent.com/document/product/614/44061?from_cn_redirect=1" target="_blank">[SQL statements]</a> are not supported.
     * @param integer $From Start time of the log to be exported, which is a timestamp in milliseconds
     * @param integer $To End time of the log to be exported, which is a timestamp in milliseconds
     * @param string $Order Exported log sorting order by time. Valid values: `asc`: ascending; `desc`: descending. Default value: `desc`
     * @param string $Format Exported log data format. Valid values: `json`, `csv`. Default value: `json`
     * @param integer $SyntaxRule Syntax rules; the default value is 0.0: Lucene syntax; 1: CQL syntax.
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }
    }
}
