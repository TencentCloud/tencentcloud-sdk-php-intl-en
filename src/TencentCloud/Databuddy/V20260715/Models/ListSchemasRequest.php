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
 * ListSchemas request structure.
 *
 * @method string getCatalogName() Obtain <p>Data catalog name</p>
 * @method void setCatalogName(string $CatalogName) Set <p>Data catalog name</p>
 * @method integer getMaxResults() Obtain <p>Maximum number of result entries</p>
 * @method void setMaxResults(integer $MaxResults) Set <p>Maximum number of result entries</p>
 * @method string getPageToken() Obtain <p>Pagination token</p>
 * @method void setPageToken(string $PageToken) Set <p>Pagination token</p>
 * @method string getWorkspaceId() Obtain <p>Unique id of the workspace where the call is made</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Unique id of the workspace where the call is made</p>
 * @method FetchOption getFetchOption() Obtain <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
 * @method void setFetchOption(FetchOption $FetchOption) Set <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
 * @method string getConnectionId() Obtain Data source connection ID. Optional (additional field in Fusion Edition). If not empty, the analytics path is used. If empty or default, the Pro Edition TcLake path is used.
 * @method void setConnectionId(string $ConnectionId) Set Data source connection ID. Optional (additional field in Fusion Edition). If not empty, the analytics path is used. If empty or default, the Pro Edition TcLake path is used.
 * @method string getCatalogSource() Obtain Data catalog source. Optional (additional field for Setats fusion). Values: METALAKE (pro edition tclake) / CONNECTION (analytical edition Linked Catalog) / SETATS (Setats metadata). Route priority: explicit non-empty CatalogSource > non-empty ConnectionId (deemed as CONNECTION) > default METALAKE. ConnectionId will be ignored when CatalogSource is non-empty.
 * @method void setCatalogSource(string $CatalogSource) Set Data catalog source. Optional (additional field for Setats fusion). Values: METALAKE (pro edition tclake) / CONNECTION (analytical edition Linked Catalog) / SETATS (Setats metadata). Route priority: explicit non-empty CatalogSource > non-empty ConnectionId (deemed as CONNECTION) > default METALAKE. ConnectionId will be ignored when CatalogSource is non-empty.
 */
class ListSchemasRequest extends AbstractModel
{
    /**
     * @var string <p>Data catalog name</p>
     */
    public $CatalogName;

    /**
     * @var integer <p>Maximum number of result entries</p>
     */
    public $MaxResults;

    /**
     * @var string <p>Pagination token</p>
     */
    public $PageToken;

    /**
     * @var string <p>Unique id of the workspace where the call is made</p>
     */
    public $WorkspaceId;

    /**
     * @var FetchOption <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
     */
    public $FetchOption;

    /**
     * @var string Data source connection ID. Optional (additional field in Fusion Edition). If not empty, the analytics path is used. If empty or default, the Pro Edition TcLake path is used.
     */
    public $ConnectionId;

    /**
     * @var string Data catalog source. Optional (additional field for Setats fusion). Values: METALAKE (pro edition tclake) / CONNECTION (analytical edition Linked Catalog) / SETATS (Setats metadata). Route priority: explicit non-empty CatalogSource > non-empty ConnectionId (deemed as CONNECTION) > default METALAKE. ConnectionId will be ignored when CatalogSource is non-empty.
     */
    public $CatalogSource;

    /**
     * @param string $CatalogName <p>Data catalog name</p>
     * @param integer $MaxResults <p>Maximum number of result entries</p>
     * @param string $PageToken <p>Pagination token</p>
     * @param string $WorkspaceId <p>Unique id of the workspace where the call is made</p>
     * @param FetchOption $FetchOption <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
     * @param string $ConnectionId Data source connection ID. Optional (additional field in Fusion Edition). If not empty, the analytics path is used. If empty or default, the Pro Edition TcLake path is used.
     * @param string $CatalogSource Data catalog source. Optional (additional field for Setats fusion). Values: METALAKE (pro edition tclake) / CONNECTION (analytical edition Linked Catalog) / SETATS (Setats metadata). Route priority: explicit non-empty CatalogSource > non-empty ConnectionId (deemed as CONNECTION) > default METALAKE. ConnectionId will be ignored when CatalogSource is non-empty.
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
        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("FetchOption",$param) and $param["FetchOption"] !== null) {
            $this->FetchOption = new FetchOption();
            $this->FetchOption->deserialize($param["FetchOption"]);
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }
    }
}
