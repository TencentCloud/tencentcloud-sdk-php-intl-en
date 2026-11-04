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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePluginSummaryList request structure.
 *
 * @method string getSpaceId() Obtain <p>Space ID, used when querying the plug-in list in the space</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID, used when querying the plug-in list in the space</p>
 * @method array getFilterList() Obtain <p>Filter criteria list, supporting PluginKind, CategoryKey, PluginSource, PluginId, PluginClass, BillingType, AuthType, IsShared, IsCreatedByMe</p>
 * @method void setFilterList(array $FilterList) Set <p>Filter criteria list, supporting PluginKind, CategoryKey, PluginSource, PluginId, PluginClass, BillingType, AuthType, IsShared, IsCreatedByMe</p>
 * @method boolean getIsFavoriteOnly() Obtain <p>Whether to only return favorite plug-ins. If set to true, only plug-ins favorited by the current user are returned. If set to false or not specified, no filtering by favorite status is applied.</p>
 * @method void setIsFavoriteOnly(boolean $IsFavoriteOnly) Set <p>Whether to only return favorite plug-ins. If set to true, only plug-ins favorited by the current user are returned. If set to false or not specified, no filtering by favorite status is applied.</p>
 * @method integer getModule() Obtain <p>Plug-in display scenario. If not passed or set to 0, the scenario is not limited.</p><p>Enumeration values:</p><ul><li>0: Not limited</li><li>1: Agent Mode</li><li>2: Workflow</li><li>3: Intelligent workbench</li></ul>
 * @method void setModule(integer $Module) Set <p>Plug-in display scenario. If not passed or set to 0, the scenario is not limited.</p><p>Enumeration values:</p><ul><li>0: Not limited</li><li>1: Agent Mode</li><li>2: Workflow</li><li>3: Intelligent workbench</li></ul>
 * @method integer getPageNumber() Obtain <p>Page number. Starts from 0</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Starts from 0</p>
 * @method integer getPageSize() Obtain <p>Size per page.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page.</p>
 * @method string getQuery() Obtain <p>Query content fuzzy matching: plugin name/plugin description/tool name/tool description</p>
 * @method void setQuery(string $Query) Set <p>Query content fuzzy matching: plugin name/plugin description/tool name/tool description</p>
 * @method integer getSortType() Obtain <p>Sorting method.</p><p>Enumeration values:</p><ul><li>0: not specified, default sorting</li><li>1: relevance ranking</li><li>2: sort by update time</li><li>3: default sorting</li><li>4: sort by popularity</li></ul>
 * @method void setSortType(integer $SortType) Set <p>Sorting method.</p><p>Enumeration values:</p><ul><li>0: not specified, default sorting</li><li>1: relevance ranking</li><li>2: sort by update time</li><li>3: default sorting</li><li>4: sort by popularity</li></ul>
 * @method integer getPluginSpaceRelation() Obtain <p>Filter plug-ins shared by the current space/business</p><p>Value range: [0, 2]</p>
 * @method void setPluginSpaceRelation(integer $PluginSpaceRelation) Set <p>Filter plug-ins shared by the current space/business</p><p>Value range: [0, 2]</p>
 */
class DescribePluginSummaryListRequest extends AbstractModel
{
    /**
     * @var string <p>Space ID, used when querying the plug-in list in the space</p>
     */
    public $SpaceId;

    /**
     * @var array <p>Filter criteria list, supporting PluginKind, CategoryKey, PluginSource, PluginId, PluginClass, BillingType, AuthType, IsShared, IsCreatedByMe</p>
     */
    public $FilterList;

    /**
     * @var boolean <p>Whether to only return favorite plug-ins. If set to true, only plug-ins favorited by the current user are returned. If set to false or not specified, no filtering by favorite status is applied.</p>
     */
    public $IsFavoriteOnly;

    /**
     * @var integer <p>Plug-in display scenario. If not passed or set to 0, the scenario is not limited.</p><p>Enumeration values:</p><ul><li>0: Not limited</li><li>1: Agent Mode</li><li>2: Workflow</li><li>3: Intelligent workbench</li></ul>
     */
    public $Module;

    /**
     * @var integer <p>Page number. Starts from 0</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Size per page.</p>
     */
    public $PageSize;

    /**
     * @var string <p>Query content fuzzy matching: plugin name/plugin description/tool name/tool description</p>
     */
    public $Query;

    /**
     * @var integer <p>Sorting method.</p><p>Enumeration values:</p><ul><li>0: not specified, default sorting</li><li>1: relevance ranking</li><li>2: sort by update time</li><li>3: default sorting</li><li>4: sort by popularity</li></ul>
     */
    public $SortType;

    /**
     * @var integer <p>Filter plug-ins shared by the current space/business</p><p>Value range: [0, 2]</p>
     */
    public $PluginSpaceRelation;

    /**
     * @param string $SpaceId <p>Space ID, used when querying the plug-in list in the space</p>
     * @param array $FilterList <p>Filter criteria list, supporting PluginKind, CategoryKey, PluginSource, PluginId, PluginClass, BillingType, AuthType, IsShared, IsCreatedByMe</p>
     * @param boolean $IsFavoriteOnly <p>Whether to only return favorite plug-ins. If set to true, only plug-ins favorited by the current user are returned. If set to false or not specified, no filtering by favorite status is applied.</p>
     * @param integer $Module <p>Plug-in display scenario. If not passed or set to 0, the scenario is not limited.</p><p>Enumeration values:</p><ul><li>0: Not limited</li><li>1: Agent Mode</li><li>2: Workflow</li><li>3: Intelligent workbench</li></ul>
     * @param integer $PageNumber <p>Page number. Starts from 0</p>
     * @param integer $PageSize <p>Size per page.</p>
     * @param string $Query <p>Query content fuzzy matching: plugin name/plugin description/tool name/tool description</p>
     * @param integer $SortType <p>Sorting method.</p><p>Enumeration values:</p><ul><li>0: not specified, default sorting</li><li>1: relevance ranking</li><li>2: sort by update time</li><li>3: default sorting</li><li>4: sort by popularity</li></ul>
     * @param integer $PluginSpaceRelation <p>Filter plug-ins shared by the current space/business</p><p>Value range: [0, 2]</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("IsFavoriteOnly",$param) and $param["IsFavoriteOnly"] !== null) {
            $this->IsFavoriteOnly = $param["IsFavoriteOnly"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("PluginSpaceRelation",$param) and $param["PluginSpaceRelation"] !== null) {
            $this->PluginSpaceRelation = $param["PluginSpaceRelation"];
        }
    }
}
