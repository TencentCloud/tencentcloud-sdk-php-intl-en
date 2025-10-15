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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTaskInstanceExecutions request structure.
 *
 * @method string getProjectId() Obtain Project id.
 * @method void setProjectId(string $ProjectId) Set Project id.
 * @method string getInstanceKey() Obtain Instance unique id, can be obtained through ListInstances.
 * @method void setInstanceKey(string $InstanceKey) Set Instance unique id, can be obtained through ListInstances.
 * @method string getTimeZone() Obtain **Time zone** timeZone, specifies the time zone of the passed in time string. default UTC+8.
 * @method void setTimeZone(string $TimeZone) Set **Time zone** timeZone, specifies the time zone of the passed in time string. default UTC+8.
 * @method integer getPageSize() Obtain Size per page. default: 10. maximum: 200.
 * @method void setPageSize(integer $PageSize) Set Size per page. default: 10. maximum: 200.
 * @method integer getPageNumber() Obtain Page number, which is 1 by default.
 * @method void setPageNumber(integer $PageNumber) Set Page number, which is 1 by default.
 */
class ListTaskInstanceExecutionsRequest extends AbstractModel
{
    /**
     * @var string Project id.
     */
    public $ProjectId;

    /**
     * @var string Instance unique id, can be obtained through ListInstances.
     */
    public $InstanceKey;

    /**
     * @var string **Time zone** timeZone, specifies the time zone of the passed in time string. default UTC+8.
     */
    public $TimeZone;

    /**
     * @var integer Size per page. default: 10. maximum: 200.
     */
    public $PageSize;

    /**
     * @var integer Page number, which is 1 by default.
     */
    public $PageNumber;

    /**
     * @param string $ProjectId Project id.
     * @param string $InstanceKey Instance unique id, can be obtained through ListInstances.
     * @param string $TimeZone **Time zone** timeZone, specifies the time zone of the passed in time string. default UTC+8.
     * @param integer $PageSize Size per page. default: 10. maximum: 200.
     * @param integer $PageNumber Page number, which is 1 by default.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
