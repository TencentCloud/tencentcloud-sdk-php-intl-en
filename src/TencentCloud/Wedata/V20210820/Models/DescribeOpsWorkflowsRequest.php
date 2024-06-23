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
 * DescribeOpsWorkflows request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getProductNameList() Obtain Task Product Type Name List, separated by ','
 * @method void setProductNameList(string $ProductNameList) Set Task Product Type Name List, separated by ','
 * @method string getFolderIdList() Obtain File ID list, separated by ','
 * @method void setFolderIdList(string $FolderIdList) Set File ID list, separated by ','
 * @method string getWorkFlowIdList() Obtain Workflow ID, separated by ','
 * @method void setWorkFlowIdList(string $WorkFlowIdList) Set Workflow ID, separated by ','
 * @method string getWorkFlowNameList() Obtain Workflow Name List, separated by ','
 * @method void setWorkFlowNameList(string $WorkFlowNameList) Set Workflow Name List, separated by ','
 * @method string getTaskNameList() Obtain Task Name List, separated by ','
 * @method void setTaskNameList(string $TaskNameList) Set Task Name List, separated by ','
 * @method string getTaskIdList() Obtain Task ID list, separated by ','
 * @method void setTaskIdList(string $TaskIdList) Set Task ID list, separated by ','
 * @method string getStatusList() Obtain Status List, separated by ','
 * @method void setStatusList(string $StatusList) Set Status List, separated by ','
 * @method string getInChargeList() Obtain Person in Charge List, separated by ','
 * @method void setInChargeList(string $InChargeList) Set Person in Charge List, separated by ','
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Page size
 * @method void setPageSize(integer $PageSize) Set Page size
 * @method string getSortItem() Obtain Sorting Item
 * @method void setSortItem(string $SortItem) Set Sorting Item
 * @method string getSortType() Obtain Sort Method, DESC or ASC
 * @method void setSortType(string $SortType) Set Sort Method, DESC or ASC
 */
class DescribeOpsWorkflowsRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task Product Type Name List, separated by ','
     */
    public $ProductNameList;

    /**
     * @var string File ID list, separated by ','
     */
    public $FolderIdList;

    /**
     * @var string Workflow ID, separated by ','
     */
    public $WorkFlowIdList;

    /**
     * @var string Workflow Name List, separated by ','
     */
    public $WorkFlowNameList;

    /**
     * @var string Task Name List, separated by ','
     */
    public $TaskNameList;

    /**
     * @var string Task ID list, separated by ','
     */
    public $TaskIdList;

    /**
     * @var string Status List, separated by ','
     */
    public $StatusList;

    /**
     * @var string Person in Charge List, separated by ','
     */
    public $InChargeList;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Page size
     */
    public $PageSize;

    /**
     * @var string Sorting Item
     */
    public $SortItem;

    /**
     * @var string Sort Method, DESC or ASC
     */
    public $SortType;

    /**
     * @param string $ProjectId Project ID
     * @param string $ProductNameList Task Product Type Name List, separated by ','
     * @param string $FolderIdList File ID list, separated by ','
     * @param string $WorkFlowIdList Workflow ID, separated by ','
     * @param string $WorkFlowNameList Workflow Name List, separated by ','
     * @param string $TaskNameList Task Name List, separated by ','
     * @param string $TaskIdList Task ID list, separated by ','
     * @param string $StatusList Status List, separated by ','
     * @param string $InChargeList Person in Charge List, separated by ','
     * @param integer $PageNumber Page number
     * @param integer $PageSize Page size
     * @param string $SortItem Sorting Item
     * @param string $SortType Sort Method, DESC or ASC
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

        if (array_key_exists("ProductNameList",$param) and $param["ProductNameList"] !== null) {
            $this->ProductNameList = $param["ProductNameList"];
        }

        if (array_key_exists("FolderIdList",$param) and $param["FolderIdList"] !== null) {
            $this->FolderIdList = $param["FolderIdList"];
        }

        if (array_key_exists("WorkFlowIdList",$param) and $param["WorkFlowIdList"] !== null) {
            $this->WorkFlowIdList = $param["WorkFlowIdList"];
        }

        if (array_key_exists("WorkFlowNameList",$param) and $param["WorkFlowNameList"] !== null) {
            $this->WorkFlowNameList = $param["WorkFlowNameList"];
        }

        if (array_key_exists("TaskNameList",$param) and $param["TaskNameList"] !== null) {
            $this->TaskNameList = $param["TaskNameList"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("InChargeList",$param) and $param["InChargeList"] !== null) {
            $this->InChargeList = $param["InChargeList"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }
    }
}
