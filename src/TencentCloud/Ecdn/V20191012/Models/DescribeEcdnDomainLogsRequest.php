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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEcdnDomainLogs request structure.
 *
 * @method string getDomain() Obtain Domain name to be queried.
 * @method void setDomain(string $Domain) Set Domain name to be queried.
 * @method string getStartTime() Obtain Log start time, such as 2019-10-01 00:00:00
 * @method void setStartTime(string $StartTime) Set Log start time, such as 2019-10-01 00:00:00
 * @method string getEndTime() Obtain Log end time, such as 2019-10-02 00:00:00. Only logs for the last 30 days can be queried.
 * @method void setEndTime(string $EndTime) Set Log end time, such as 2019-10-02 00:00:00. Only logs for the last 30 days can be queried.
 * @method integer getOffset() Obtain Pagination offset for log link list. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset for log link list. Default value: 0.
 * @method integer getLimit() Obtain Number of log links per page. Default value: 100. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of log links per page. Default value: 100. Maximum value: 1000.
 */
class DescribeEcdnDomainLogsRequest extends AbstractModel
{
    /**
     * @var string Domain name to be queried.
     */
    public $Domain;

    /**
     * @var string Log start time, such as 2019-10-01 00:00:00
     */
    public $StartTime;

    /**
     * @var string Log end time, such as 2019-10-02 00:00:00. Only logs for the last 30 days can be queried.
     */
    public $EndTime;

    /**
     * @var integer Pagination offset for log link list. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of log links per page. Default value: 100. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @param string $Domain Domain name to be queried.
     * @param string $StartTime Log start time, such as 2019-10-01 00:00:00
     * @param string $EndTime Log end time, such as 2019-10-02 00:00:00. Only logs for the last 30 days can be queried.
     * @param integer $Offset Pagination offset for log link list. Default value: 0.
     * @param integer $Limit Number of log links per page. Default value: 100. Maximum value: 1000.
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
    }
}
