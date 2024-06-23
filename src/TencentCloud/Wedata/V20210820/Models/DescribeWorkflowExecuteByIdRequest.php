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
 * DescribeWorkflowExecuteById request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkFlowIdList() Obtain Workflow ID
 * @method void setWorkFlowIdList(string $WorkFlowIdList) Set Workflow ID
 * @method integer getPageNumber() Obtain Page size
 * @method void setPageNumber(integer $PageNumber) Set Page size
 * @method integer getPageSize() Obtain Pagination index
 * @method void setPageSize(integer $PageSize) Set Pagination index
 */
class DescribeWorkflowExecuteByIdRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Workflow ID
     */
    public $WorkFlowIdList;

    /**
     * @var integer Page size
     */
    public $PageNumber;

    /**
     * @var integer Pagination index
     */
    public $PageSize;

    /**
     * @param string $ProjectId Project ID
     * @param string $WorkFlowIdList Workflow ID
     * @param integer $PageNumber Page size
     * @param integer $PageSize Pagination index
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

        if (array_key_exists("WorkFlowIdList",$param) and $param["WorkFlowIdList"] !== null) {
            $this->WorkFlowIdList = $param["WorkFlowIdList"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
