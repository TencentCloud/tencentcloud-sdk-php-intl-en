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
 * ListTaskVersions request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getTaskVersionType() Obtain SAVE version.
SUBMIT version.
Defaults to SAVE.
 * @method void setTaskVersionType(string $TaskVersionType) Set SAVE version.
SUBMIT version.
Defaults to SAVE.
 * @method integer getPageNumber() Obtain Specifies the data page number of the request. default value is 1. valid values: equal to or greater than 1.
 * @method void setPageNumber(integer $PageNumber) Set Specifies the data page number of the request. default value is 1. valid values: equal to or greater than 1.
 * @method integer getPageSize() Obtain Specifies the number of data records displayed per page. default: 10. value range: 10 to 200.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of data records displayed per page. default: 10. value range: 10 to 200.
 */
class ListTaskVersionsRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string SAVE version.
SUBMIT version.
Defaults to SAVE.
     */
    public $TaskVersionType;

    /**
     * @var integer Specifies the data page number of the request. default value is 1. valid values: equal to or greater than 1.
     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of data records displayed per page. default: 10. value range: 10 to 200.
     */
    public $PageSize;

    /**
     * @param string $ProjectId Project ID.
     * @param string $TaskId Task ID
     * @param string $TaskVersionType SAVE version.
SUBMIT version.
Defaults to SAVE.
     * @param integer $PageNumber Specifies the data page number of the request. default value is 1. valid values: equal to or greater than 1.
     * @param integer $PageSize Specifies the number of data records displayed per page. default: 10. value range: 10 to 200.
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskVersionType",$param) and $param["TaskVersionType"] !== null) {
            $this->TaskVersionType = $param["TaskVersionType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
