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
 * CreateAsyncSearchTask request structure.
 *
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getTopicId() Obtain Log topic ID. Currently, only log topics whose `StorageType` is `cold` are supported.
 * @method void setTopicId(string $TopicId) Set Log topic ID. Currently, only log topics whose `StorageType` is `cold` are supported.
 * @method string getQuery() Obtain Query statement. Maximum length: 1024
 * @method void setQuery(string $Query) Set Query statement. Maximum length: 1024
 * @method integer getFrom() Obtain Start time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method void setFrom(integer $From) Set Start time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method integer getTo() Obtain End time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method void setTo(integer $To) Set End time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method string getSort() Obtain Log scan order. Valid values: `asc`: ascending; `desc`: descending. Default value: desc
 * @method void setSort(string $Sort) Set Log scan order. Valid values: `asc`: ascending; `desc`: descending. Default value: desc
 */
class CreateAsyncSearchTaskRequest extends AbstractModel
{
    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Log topic ID. Currently, only log topics whose `StorageType` is `cold` are supported.
     */
    public $TopicId;

    /**
     * @var string Query statement. Maximum length: 1024
     */
    public $Query;

    /**
     * @var integer Start time of the log to be queried, which is a Unix timestamp in milliseconds
     */
    public $From;

    /**
     * @var integer End time of the log to be queried, which is a Unix timestamp in milliseconds
     */
    public $To;

    /**
     * @var string Log scan order. Valid values: `asc`: ascending; `desc`: descending. Default value: desc
     */
    public $Sort;

    /**
     * @param string $LogsetId Logset ID
     * @param string $TopicId Log topic ID. Currently, only log topics whose `StorageType` is `cold` are supported.
     * @param string $Query Query statement. Maximum length: 1024
     * @param integer $From Start time of the log to be queried, which is a Unix timestamp in milliseconds
     * @param integer $To End time of the log to be queried, which is a Unix timestamp in milliseconds
     * @param string $Sort Log scan order. Valid values: `asc`: ascending; `desc`: descending. Default value: desc
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
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

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
