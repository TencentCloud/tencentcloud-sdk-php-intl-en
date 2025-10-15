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
 * ListResourceFolders request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getParentFolderPath() Obtain Resource folder absolute path. value example.
/wedata/test
 * @method void setParentFolderPath(string $ParentFolderPath) Set Resource folder absolute path. value example.
/wedata/test
 * @method integer getPageNumber() Obtain Data page number, equal to or greater than 1. default 1.
 * @method void setPageNumber(integer $PageNumber) Set Data page number, equal to or greater than 1. default 1.
 * @method integer getPageSize() Obtain Specifies the number of data records displayed per page. valid values: 10 to 200. default: 10.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of data records displayed per page. valid values: 10 to 200. default: 10.
 */
class ListResourceFoldersRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Resource folder absolute path. value example.
/wedata/test
     */
    public $ParentFolderPath;

    /**
     * @var integer Data page number, equal to or greater than 1. default 1.
     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of data records displayed per page. valid values: 10 to 200. default: 10.
     */
    public $PageSize;

    /**
     * @param string $ProjectId Project ID.
     * @param string $ParentFolderPath Resource folder absolute path. value example.
/wedata/test
     * @param integer $PageNumber Data page number, equal to or greater than 1. default 1.
     * @param integer $PageSize Specifies the number of data records displayed per page. valid values: 10 to 200. default: 10.
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

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
