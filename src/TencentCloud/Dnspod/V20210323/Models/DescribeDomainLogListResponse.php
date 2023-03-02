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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainLogList response structure.
 *
 * @method array getLogList() Obtain Domain information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogList(array $LogList) Set Domain information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageSize() Obtain Number of results per page
 * @method void setPageSize(integer $PageSize) Set Number of results per page
 * @method integer getTotalCount() Obtain Total number of logs
 * @method void setTotalCount(integer $TotalCount) Set Total number of logs
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDomainLogListResponse extends AbstractModel
{
    /**
     * @var array Domain information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogList;

    /**
     * @var integer Number of results per page
     */
    public $PageSize;

    /**
     * @var integer Total number of logs
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $LogList Domain information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageSize Number of results per page
     * @param integer $TotalCount Total number of logs
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("LogList",$param) and $param["LogList"] !== null) {
            $this->LogList = $param["LogList"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
