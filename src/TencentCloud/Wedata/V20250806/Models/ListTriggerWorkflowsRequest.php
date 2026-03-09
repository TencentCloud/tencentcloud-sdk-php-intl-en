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
 * ListTriggerWorkflows request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method integer getPageNumber() Obtain Request data page number. default value is 1. valid values: at least 1.
 * @method void setPageNumber(integer $PageNumber) Set Request data page number. default value is 1. valid values: at least 1.
 * @method integer getPageSize() Obtain Number of records per page. the default value is `10`. the minimum value is `10`. the maximum value is `200`.
 * @method void setPageSize(integer $PageSize) Set Number of records per page. the default value is `10`. the minimum value is `10`. the maximum value is `200`.
 * @method string getKeyword() Obtain Search keywords.
 * @method void setKeyword(string $Keyword) Set Search keywords.
 * @method string getParentFolderPath() Obtain Workflow folder.
 * @method void setParentFolderPath(string $ParentFolderPath) Set Workflow folder.
 * @method string getBundleId() Obtain bundleId item.
 * @method void setBundleId(string $BundleId) Set bundleId item.
 * @method string getOwnerUin() Obtain Person in Charge ID
 * @method void setOwnerUin(string $OwnerUin) Set Person in Charge ID
 * @method string getCreateUserUin() Obtain Creator ID.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID.
 * @method array getModifyTime() Obtain Modify the time interval yyyy-MM-dd HH:MM:ss. fill in two times in the array.
 * @method void setModifyTime(array $ModifyTime) Set Modify the time interval yyyy-MM-dd HH:MM:ss. fill in two times in the array.
 * @method array getCreateTime() Obtain Creation time range yyyy-MM-dd HH:MM:ss. two times must be filled in the array.
 * @method void setCreateTime(array $CreateTime) Set Creation time range yyyy-MM-dd HH:MM:ss. two times must be filled in the array.
 */
class ListTriggerWorkflowsRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Request data page number. default value is 1. valid values: at least 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of records per page. the default value is `10`. the minimum value is `10`. the maximum value is `200`.
     */
    public $PageSize;

    /**
     * @var string Search keywords.
     */
    public $Keyword;

    /**
     * @var string Workflow folder.
     */
    public $ParentFolderPath;

    /**
     * @var string bundleId item.
     */
    public $BundleId;

    /**
     * @var string Person in Charge ID
     */
    public $OwnerUin;

    /**
     * @var string Creator ID.
     */
    public $CreateUserUin;

    /**
     * @var array Modify the time interval yyyy-MM-dd HH:MM:ss. fill in two times in the array.
     */
    public $ModifyTime;

    /**
     * @var array Creation time range yyyy-MM-dd HH:MM:ss. two times must be filled in the array.
     */
    public $CreateTime;

    /**
     * @param string $ProjectId Project ID.
     * @param integer $PageNumber Request data page number. default value is 1. valid values: at least 1.
     * @param integer $PageSize Number of records per page. the default value is `10`. the minimum value is `10`. the maximum value is `200`.
     * @param string $Keyword Search keywords.
     * @param string $ParentFolderPath Workflow folder.
     * @param string $BundleId bundleId item.
     * @param string $OwnerUin Person in Charge ID
     * @param string $CreateUserUin Creator ID.
     * @param array $ModifyTime Modify the time interval yyyy-MM-dd HH:MM:ss. fill in two times in the array.
     * @param array $CreateTime Creation time range yyyy-MM-dd HH:MM:ss. two times must be filled in the array.
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

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
