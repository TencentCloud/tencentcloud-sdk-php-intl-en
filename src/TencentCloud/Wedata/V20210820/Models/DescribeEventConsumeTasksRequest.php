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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventConsumeTasks request structure.
 *
 * @method string getEventCaseId() Obtain Event Instance ID
 * @method void setEventCaseId(string $EventCaseId) Set Event Instance ID
 * @method integer getPageNumber() Obtain Page Number
 * @method void setPageNumber(integer $PageNumber) Set Page Number
 * @method integer getPageSize() Obtain Number of items per page
 * @method void setPageSize(integer $PageSize) Set Number of items per page
 */
class DescribeEventConsumeTasksRequest extends AbstractModel
{
    /**
     * @var string Event Instance ID
     */
    public $EventCaseId;

    /**
     * @var integer Page Number
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page
     */
    public $PageSize;

    /**
     * @param string $EventCaseId Event Instance ID
     * @param integer $PageNumber Page Number
     * @param integer $PageSize Number of items per page
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
        if (array_key_exists("EventCaseId",$param) and $param["EventCaseId"] !== null) {
            $this->EventCaseId = $param["EventCaseId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
