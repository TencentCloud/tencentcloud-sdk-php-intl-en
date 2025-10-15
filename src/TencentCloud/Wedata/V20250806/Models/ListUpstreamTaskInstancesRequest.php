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
 * ListUpstreamTaskInstances request structure.
 *
 * @method string getProjectId() Obtain Project ID.

 * @method void setProjectId(string $ProjectId) Set Project ID.

 * @method string getInstanceKey() Obtain **Instance unique id**.
 * @method void setInstanceKey(string $InstanceKey) Set **Instance unique id**.
 * @method string getTimeZone() Obtain **Time zone** timeZone, default UTC+8.
 * @method void setTimeZone(string $TimeZone) Set **Time zone** timeZone, default UTC+8.
 * @method integer getPageNumber() Obtain **Page number, int** used in conjunction with pageSize and cannot be less than 1. default value: 1.
 * @method void setPageNumber(integer $PageNumber) Set **Page number, int** used in conjunction with pageSize and cannot be less than 1. default value: 1.
 * @method integer getPageSize() Obtain Specifies the number of items to display per page. default: 10. value range: 1-100.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of items to display per page. default: 10. value range: 1-100.
 */
class ListUpstreamTaskInstancesRequest extends AbstractModel
{
    /**
     * @var string Project ID.

     */
    public $ProjectId;

    /**
     * @var string **Instance unique id**.
     */
    public $InstanceKey;

    /**
     * @var string **Time zone** timeZone, default UTC+8.
     */
    public $TimeZone;

    /**
     * @var integer **Page number, int** used in conjunction with pageSize and cannot be less than 1. default value: 1.
     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of items to display per page. default: 10. value range: 1-100.
     */
    public $PageSize;

    /**
     * @param string $ProjectId Project ID.

     * @param string $InstanceKey **Instance unique id**.
     * @param string $TimeZone **Time zone** timeZone, default UTC+8.
     * @param integer $PageNumber **Page number, int** used in conjunction with pageSize and cannot be less than 1. default value: 1.
     * @param integer $PageSize Specifies the number of items to display per page. default: 10. value range: 1-100.
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
