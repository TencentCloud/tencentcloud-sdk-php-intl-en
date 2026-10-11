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
 * ListCatalogs request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace unique id</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace unique id</p>
 * @method integer getMaxResults() Obtain <p>Maximum number of result entries</p>
 * @method void setMaxResults(integer $MaxResults) Set <p>Maximum number of result entries</p>
 * @method string getPageToken() Obtain <p>Pagination token</p>
 * @method void setPageToken(string $PageToken) Set <p>Pagination token</p>
 * @method array getTypes() Obtain <p>catalog type. Valid values: TABLE, MODEL, VOLUME</p>
 * @method void setTypes(array $Types) Set <p>catalog type. Valid values: TABLE, MODEL, VOLUME</p>
 * @method boolean getCurrentWorkspaceOnly() Obtain <p>Whether to return only those in the current workspace that are authorized. If false, it additionally returns the catalogs that the current user has permission to manage.</p>
 * @method void setCurrentWorkspaceOnly(boolean $CurrentWorkspaceOnly) Set <p>Whether to return only those in the current workspace that are authorized. If false, it additionally returns the catalogs that the current user has permission to manage.</p>
 * @method FetchOption getFetchOption() Obtain <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
 * @method void setFetchOption(FetchOption $FetchOption) Set <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
 * @method array getCatalogSources() Obtain Data catalog source filter criteria (additional field in Fusion Edition). For values, see CatalogSourceEnum. Empty array or not passed: only tclake is queried. ["METALAKE"]: only tclake is queried. ["CONNECTION"]: only the analytics edition ana_catalog is queried. ["METALAKE","CONNECTION"]: merged and returned.
 * @method void setCatalogSources(array $CatalogSources) Set Data catalog source filter criteria (additional field in Fusion Edition). For values, see CatalogSourceEnum. Empty array or not passed: only tclake is queried. ["METALAKE"]: only tclake is queried. ["CONNECTION"]: only the analytics edition ana_catalog is queried. ["METALAKE","CONNECTION"]: merged and returned.
 */
class ListCatalogsRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace unique id</p>
     */
    public $WorkspaceId;

    /**
     * @var integer <p>Maximum number of result entries</p>
     */
    public $MaxResults;

    /**
     * @var string <p>Pagination token</p>
     */
    public $PageToken;

    /**
     * @var array <p>catalog type. Valid values: TABLE, MODEL, VOLUME</p>
     */
    public $Types;

    /**
     * @var boolean <p>Whether to return only those in the current workspace that are authorized. If false, it additionally returns the catalogs that the current user has permission to manage.</p>
     */
    public $CurrentWorkspaceOnly;

    /**
     * @var FetchOption <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
     */
    public $FetchOption;

    /**
     * @var array Data catalog source filter criteria (additional field in Fusion Edition). For values, see CatalogSourceEnum. Empty array or not passed: only tclake is queried. ["METALAKE"]: only tclake is queried. ["CONNECTION"]: only the analytics edition ana_catalog is queried. ["METALAKE","CONNECTION"]: merged and returned.
     */
    public $CatalogSources;

    /**
     * @param string $WorkspaceId <p>Workspace unique id</p>
     * @param integer $MaxResults <p>Maximum number of result entries</p>
     * @param string $PageToken <p>Pagination token</p>
     * @param array $Types <p>catalog type. Valid values: TABLE, MODEL, VOLUME</p>
     * @param boolean $CurrentWorkspaceOnly <p>Whether to return only those in the current workspace that are authorized. If false, it additionally returns the catalogs that the current user has permission to manage.</p>
     * @param FetchOption $FetchOption <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
     * @param array $CatalogSources Data catalog source filter criteria (additional field in Fusion Edition). For values, see CatalogSourceEnum. Empty array or not passed: only tclake is queried. ["METALAKE"]: only tclake is queried. ["CONNECTION"]: only the analytics edition ana_catalog is queried. ["METALAKE","CONNECTION"]: merged and returned.
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

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("CurrentWorkspaceOnly",$param) and $param["CurrentWorkspaceOnly"] !== null) {
            $this->CurrentWorkspaceOnly = $param["CurrentWorkspaceOnly"];
        }

        if (array_key_exists("FetchOption",$param) and $param["FetchOption"] !== null) {
            $this->FetchOption = new FetchOption();
            $this->FetchOption->deserialize($param["FetchOption"]);
        }

        if (array_key_exists("CatalogSources",$param) and $param["CatalogSources"] !== null) {
            $this->CatalogSources = $param["CatalogSources"];
        }
    }
}
