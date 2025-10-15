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
 * ListResourceFiles request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method integer getPageNumber() Obtain Data page number, equal to or greater than 1. default 1.
 * @method void setPageNumber(integer $PageNumber) Set Data page number, equal to or greater than 1. default 1.
 * @method integer getPageSize() Obtain Specifies the number of data records displayed per page. valid values: 10 to 200. default: 10.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of data records displayed per page. valid values: 10 to 200. default: 10.
 * @method string getResourceName() Obtain Resource file name (fuzzy search keyword).
 * @method void setResourceName(string $ResourceName) Set Resource file name (fuzzy search keyword).
 * @method string getParentFolderPath() Obtain Specifies the path of the file's parent folder (for example /a/b/c, querying resource files under the folder c).
 * @method void setParentFolderPath(string $ParentFolderPath) Set Specifies the path of the file's parent folder (for example /a/b/c, querying resource files under the folder c).
 * @method string getCreateUserUin() Obtain Creator ID. obtain through the DescribeCurrentUserInfo API.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID. obtain through the DescribeCurrentUserInfo API.
 * @method string getModifyTimeStart() Obtain Update time range. specifies the start time in yyyy-MM-dd HH:MM:ss format.
 * @method void setModifyTimeStart(string $ModifyTimeStart) Set Update time range. specifies the start time in yyyy-MM-dd HH:MM:ss format.
 * @method string getModifyTimeEnd() Obtain Update time range. specifies the end time in yyyy-MM-dd HH:MM:ss format.
 * @method void setModifyTimeEnd(string $ModifyTimeEnd) Set Update time range. specifies the end time in yyyy-MM-dd HH:MM:ss format.
 * @method string getCreateTimeStart() Obtain Create time range. specifies the start time in yyyy-MM-dd HH:MM:ss format.
 * @method void setCreateTimeStart(string $CreateTimeStart) Set Create time range. specifies the start time in yyyy-MM-dd HH:MM:ss format.
 * @method string getCreateTimeEnd() Obtain Create time range. specifies the termination time in yyyy-MM-dd HH:MM:ss format.
 * @method void setCreateTimeEnd(string $CreateTimeEnd) Set Create time range. specifies the termination time in yyyy-MM-dd HH:MM:ss format.
 */
class ListResourceFilesRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Data page number, equal to or greater than 1. default 1.
     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of data records displayed per page. valid values: 10 to 200. default: 10.
     */
    public $PageSize;

    /**
     * @var string Resource file name (fuzzy search keyword).
     */
    public $ResourceName;

    /**
     * @var string Specifies the path of the file's parent folder (for example /a/b/c, querying resource files under the folder c).
     */
    public $ParentFolderPath;

    /**
     * @var string Creator ID. obtain through the DescribeCurrentUserInfo API.
     */
    public $CreateUserUin;

    /**
     * @var string Update time range. specifies the start time in yyyy-MM-dd HH:MM:ss format.
     */
    public $ModifyTimeStart;

    /**
     * @var string Update time range. specifies the end time in yyyy-MM-dd HH:MM:ss format.
     */
    public $ModifyTimeEnd;

    /**
     * @var string Create time range. specifies the start time in yyyy-MM-dd HH:MM:ss format.
     */
    public $CreateTimeStart;

    /**
     * @var string Create time range. specifies the termination time in yyyy-MM-dd HH:MM:ss format.
     */
    public $CreateTimeEnd;

    /**
     * @param string $ProjectId Project ID.
     * @param integer $PageNumber Data page number, equal to or greater than 1. default 1.
     * @param integer $PageSize Specifies the number of data records displayed per page. valid values: 10 to 200. default: 10.
     * @param string $ResourceName Resource file name (fuzzy search keyword).
     * @param string $ParentFolderPath Specifies the path of the file's parent folder (for example /a/b/c, querying resource files under the folder c).
     * @param string $CreateUserUin Creator ID. obtain through the DescribeCurrentUserInfo API.
     * @param string $ModifyTimeStart Update time range. specifies the start time in yyyy-MM-dd HH:MM:ss format.
     * @param string $ModifyTimeEnd Update time range. specifies the end time in yyyy-MM-dd HH:MM:ss format.
     * @param string $CreateTimeStart Create time range. specifies the start time in yyyy-MM-dd HH:MM:ss format.
     * @param string $CreateTimeEnd Create time range. specifies the termination time in yyyy-MM-dd HH:MM:ss format.
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ModifyTimeStart",$param) and $param["ModifyTimeStart"] !== null) {
            $this->ModifyTimeStart = $param["ModifyTimeStart"];
        }

        if (array_key_exists("ModifyTimeEnd",$param) and $param["ModifyTimeEnd"] !== null) {
            $this->ModifyTimeEnd = $param["ModifyTimeEnd"];
        }

        if (array_key_exists("CreateTimeStart",$param) and $param["CreateTimeStart"] !== null) {
            $this->CreateTimeStart = $param["CreateTimeStart"];
        }

        if (array_key_exists("CreateTimeEnd",$param) and $param["CreateTimeEnd"] !== null) {
            $this->CreateTimeEnd = $param["CreateTimeEnd"];
        }
    }
}
