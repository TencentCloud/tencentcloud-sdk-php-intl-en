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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadL7Logs response structure.
 *
 * @method array getData() Obtain Layer-7 offline log data
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setData(array $Data) Set Layer-7 offline log data
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPageSize() Obtain Page size
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPageSize(integer $PageSize) Set Page size
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPageNo() Obtain Page number
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPageNo(integer $PageNo) Set Page number
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPages() Obtain Total number of pages
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPages(integer $Pages) Set Total number of pages
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getTotalSize() Obtain Total number of entries
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTotalSize(integer $TotalSize) Set Total number of entries
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DownloadL7LogsResponse extends AbstractModel
{
    /**
     * @var array Layer-7 offline log data
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Data;

    /**
     * @var integer Page size
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PageSize;

    /**
     * @var integer Page number
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PageNo;

    /**
     * @var integer Total number of pages
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Pages;

    /**
     * @var integer Total number of entries
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TotalSize;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data Layer-7 offline log data
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $PageSize Page size
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $PageNo Page number
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Pages Total number of pages
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $TotalSize Total number of entries
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new L7OfflineLog();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
