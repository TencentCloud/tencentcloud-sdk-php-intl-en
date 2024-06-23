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
 * DescribeFolderWorkflowList request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getParentsFolderId() Obtain Parent Folder ID
 * @method void setParentsFolderId(string $ParentsFolderId) Set Parent Folder ID
 * @method string getKeyWords() Obtain Keyword
 * @method void setKeyWords(string $KeyWords) Set Keyword
 * @method integer getPageNumber() Obtain Page number, default is 1
 * @method void setPageNumber(integer $PageNumber) Set Page number, default is 1
 * @method integer getPageSize() Obtain Page size, default is 10
 * @method void setPageSize(integer $PageSize) Set Page size, default is 10
 */
class DescribeFolderWorkflowListRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Parent Folder ID
     */
    public $ParentsFolderId;

    /**
     * @var string Keyword
     */
    public $KeyWords;

    /**
     * @var integer Page number, default is 1
     */
    public $PageNumber;

    /**
     * @var integer Page size, default is 10
     */
    public $PageSize;

    /**
     * @param string $ProjectId Project ID
     * @param string $ParentsFolderId Parent Folder ID
     * @param string $KeyWords Keyword
     * @param integer $PageNumber Page number, default is 1
     * @param integer $PageSize Page size, default is 10
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

        if (array_key_exists("ParentsFolderId",$param) and $param["ParentsFolderId"] !== null) {
            $this->ParentsFolderId = $param["ParentsFolderId"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
