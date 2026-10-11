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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListWorkflows request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID, which can be obtained through ListWorkspaces. Required</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID, which can be obtained through ListWorkspaces. Required</p>
 * @method integer getPageNumber() Obtain <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
 * @method integer getPageSize() Obtain <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
 * @method string getWorkflowNameKeyword() Obtain <p>Workflow name keyword for fuzzy matching of WorkflowName. Optional, single value</p>
 * @method void setWorkflowNameKeyword(string $WorkflowNameKeyword) Set <p>Workflow name keyword for fuzzy matching of WorkflowName. Optional, single value</p>
 * @method array getWorkflowNames() Obtain <p>Workflow name, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
 * @method void setWorkflowNames(array $WorkflowNames) Set <p>Workflow name, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
 * @method array getWorkflowIds() Obtain <p>Workflow ID. Exact match. Optional. Multiple selection (OR relationship between multiple values)</p>
 * @method void setWorkflowIds(array $WorkflowIds) Set <p>Workflow ID. Exact match. Optional. Multiple selection (OR relationship between multiple values)</p>
 * @method array getRunUserUins() Obtain <p>Workflow runner UIN, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
 * @method void setRunUserUins(array $RunUserUins) Set <p>Workflow runner UIN, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
 * @method array getLabelKeyIds() Obtain <p>Tag name ID. Exact match. You can obtain it via tag-related APIs. Optional. Multiple selection (multiple values are in an OR relationship with each other)</p>
 * @method void setLabelKeyIds(array $LabelKeyIds) Set <p>Tag name ID. Exact match. You can obtain it via tag-related APIs. Optional. Multiple selection (multiple values are in an OR relationship with each other)</p>
 * @method array getLabelValueIds() Obtain <p>Tag value ID, exact match, obtainable through the tag-related API. Optional, multiple selection (multiple values are in an OR relationship with each other)</p>
 * @method void setLabelValueIds(array $LabelValueIds) Set <p>Tag value ID, exact match, obtainable through the tag-related API. Optional, multiple selection (multiple values are in an OR relationship with each other)</p>
 * @method string getQuickSelectionType() Obtain <p>Quick filter type. Optional, single value</p><p>Align with the legacy Cloud API (wedata/2025-10-10) document example values:</p><ul><li>MY_FAVORITE: collected by me</li><li>MY_OWNER: I am responsible</li><li>MY_AUTHORITY: I have permission</li><li>WorkflowId: support filtering by multiple workflow IDs</li></ul><p>Backend implementation status quo: currently only MY_FAVORITE takes effect (set favoriteUserUin to filter the current user's favorites). MY_OWNER / MY_AUTHORITY are not yet implemented at the Service layer, and the input will be ignored (returned as full results).</p>
 * @method void setQuickSelectionType(string $QuickSelectionType) Set <p>Quick filter type. Optional, single value</p><p>Align with the legacy Cloud API (wedata/2025-10-10) document example values:</p><ul><li>MY_FAVORITE: collected by me</li><li>MY_OWNER: I am responsible</li><li>MY_AUTHORITY: I have permission</li><li>WorkflowId: support filtering by multiple workflow IDs</li></ul><p>Backend implementation status quo: currently only MY_FAVORITE takes effect (set favoriteUserUin to filter the current user's favorites). MY_OWNER / MY_AUTHORITY are not yet implemented at the Service layer, and the input will be ignored (returned as full results).</p>
 * @method array getOrderBys() Obtain <p>Sorting criteria. The priority of multiple criteria is indicated by their sequence in the array. Optional.<br>Sortable field allowlist: CreateTime</p>
 * @method void setOrderBys(array $OrderBys) Set <p>Sorting criteria. The priority of multiple criteria is indicated by their sequence in the array. Optional.<br>Sortable field allowlist: CreateTime</p>
 */
class ListWorkflowsRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID, which can be obtained through ListWorkspaces. Required</p>
     */
    public $WorkspaceId;

    /**
     * @var integer <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
     */
    public $PageSize;

    /**
     * @var string <p>Workflow name keyword for fuzzy matching of WorkflowName. Optional, single value</p>
     */
    public $WorkflowNameKeyword;

    /**
     * @var array <p>Workflow name, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
     */
    public $WorkflowNames;

    /**
     * @var array <p>Workflow ID. Exact match. Optional. Multiple selection (OR relationship between multiple values)</p>
     */
    public $WorkflowIds;

    /**
     * @var array <p>Workflow runner UIN, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
     */
    public $RunUserUins;

    /**
     * @var array <p>Tag name ID. Exact match. You can obtain it via tag-related APIs. Optional. Multiple selection (multiple values are in an OR relationship with each other)</p>
     */
    public $LabelKeyIds;

    /**
     * @var array <p>Tag value ID, exact match, obtainable through the tag-related API. Optional, multiple selection (multiple values are in an OR relationship with each other)</p>
     */
    public $LabelValueIds;

    /**
     * @var string <p>Quick filter type. Optional, single value</p><p>Align with the legacy Cloud API (wedata/2025-10-10) document example values:</p><ul><li>MY_FAVORITE: collected by me</li><li>MY_OWNER: I am responsible</li><li>MY_AUTHORITY: I have permission</li><li>WorkflowId: support filtering by multiple workflow IDs</li></ul><p>Backend implementation status quo: currently only MY_FAVORITE takes effect (set favoriteUserUin to filter the current user's favorites). MY_OWNER / MY_AUTHORITY are not yet implemented at the Service layer, and the input will be ignored (returned as full results).</p>
     */
    public $QuickSelectionType;

    /**
     * @var array <p>Sorting criteria. The priority of multiple criteria is indicated by their sequence in the array. Optional.<br>Sortable field allowlist: CreateTime</p>
     */
    public $OrderBys;

    /**
     * @param string $WorkspaceId <p>Workspace ID, which can be obtained through ListWorkspaces. Required</p>
     * @param integer $PageNumber <p>Page number. Value range: starts from 1. Optional. Default value: 1.</p>
     * @param integer $PageSize <p>Size per page. Optional. Default: 10. Value range: [10, 200]</p>
     * @param string $WorkflowNameKeyword <p>Workflow name keyword for fuzzy matching of WorkflowName. Optional, single value</p>
     * @param array $WorkflowNames <p>Workflow name, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
     * @param array $WorkflowIds <p>Workflow ID. Exact match. Optional. Multiple selection (OR relationship between multiple values)</p>
     * @param array $RunUserUins <p>Workflow runner UIN, exact match. Optional, multiple selection (OR relationship between multiple values)</p>
     * @param array $LabelKeyIds <p>Tag name ID. Exact match. You can obtain it via tag-related APIs. Optional. Multiple selection (multiple values are in an OR relationship with each other)</p>
     * @param array $LabelValueIds <p>Tag value ID, exact match, obtainable through the tag-related API. Optional, multiple selection (multiple values are in an OR relationship with each other)</p>
     * @param string $QuickSelectionType <p>Quick filter type. Optional, single value</p><p>Align with the legacy Cloud API (wedata/2025-10-10) document example values:</p><ul><li>MY_FAVORITE: collected by me</li><li>MY_OWNER: I am responsible</li><li>MY_AUTHORITY: I have permission</li><li>WorkflowId: support filtering by multiple workflow IDs</li></ul><p>Backend implementation status quo: currently only MY_FAVORITE takes effect (set favoriteUserUin to filter the current user's favorites). MY_OWNER / MY_AUTHORITY are not yet implemented at the Service layer, and the input will be ignored (returned as full results).</p>
     * @param array $OrderBys <p>Sorting criteria. The priority of multiple criteria is indicated by their sequence in the array. Optional.<br>Sortable field allowlist: CreateTime</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("WorkflowNameKeyword",$param) and $param["WorkflowNameKeyword"] !== null) {
            $this->WorkflowNameKeyword = $param["WorkflowNameKeyword"];
        }

        if (array_key_exists("WorkflowNames",$param) and $param["WorkflowNames"] !== null) {
            $this->WorkflowNames = $param["WorkflowNames"];
        }

        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("RunUserUins",$param) and $param["RunUserUins"] !== null) {
            $this->RunUserUins = $param["RunUserUins"];
        }

        if (array_key_exists("LabelKeyIds",$param) and $param["LabelKeyIds"] !== null) {
            $this->LabelKeyIds = $param["LabelKeyIds"];
        }

        if (array_key_exists("LabelValueIds",$param) and $param["LabelValueIds"] !== null) {
            $this->LabelValueIds = $param["LabelValueIds"];
        }

        if (array_key_exists("QuickSelectionType",$param) and $param["QuickSelectionType"] !== null) {
            $this->QuickSelectionType = $param["QuickSelectionType"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }
    }
}
