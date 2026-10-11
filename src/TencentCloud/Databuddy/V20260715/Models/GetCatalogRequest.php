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
 * GetCatalog request structure.
 *
 * @method string getCatalogName() Obtain <p>Data catalog name.</p>
 * @method void setCatalogName(string $CatalogName) Set <p>Data catalog name.</p>
 * @method string getWorkspaceId() Obtain <p>Unique id of the workspace where the call is made.</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Unique id of the workspace where the call is made.</p>
 * @method string getCatalogId() Obtain <p>Data directory id</p>
 * @method void setCatalogId(string $CatalogId) Set <p>Data directory id</p>
 * @method FetchOption getFetchOption() Obtain <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
 * @method void setFetchOption(FetchOption $FetchOption) Set <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
 * @method string getConnectionId() Obtain <p>Data source connection ID, selectable (additional field in fusion edition). Non-empty → use the analytical path; empty/default → use the professional edition TcLake path</p>
 * @method void setConnectionId(string $ConnectionId) Set <p>Data source connection ID, selectable (additional field in fusion edition). Non-empty → use the analytical path; empty/default → use the professional edition TcLake path</p>
 * @method string getCatalogSource() Obtain <p>Data Catalog source, selectable (additional field for Setats fusion). Value: METALAKE (pro edition tclake) / CONNECTION (analytical edition Linked Catalog) / Setats (Setats metadata). Routing priority: explicit non-empty CatalogSource > non-empty ConnectionId (deem as CONNECTION) > default METALAKE; ConnectionId will be ignored when CatalogSource is non-empty.</p>
 * @method void setCatalogSource(string $CatalogSource) Set <p>Data Catalog source, selectable (additional field for Setats fusion). Value: METALAKE (pro edition tclake) / CONNECTION (analytical edition Linked Catalog) / Setats (Setats metadata). Routing priority: explicit non-empty CatalogSource > non-empty ConnectionId (deem as CONNECTION) > default METALAKE; ConnectionId will be ignored when CatalogSource is non-empty.</p>
 */
class GetCatalogRequest extends AbstractModel
{
    /**
     * @var string <p>Data catalog name.</p>
     */
    public $CatalogName;

    /**
     * @var string <p>Unique id of the workspace where the call is made.</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>Data directory id</p>
     */
    public $CatalogId;

    /**
     * @var FetchOption <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
     */
    public $FetchOption;

    /**
     * @var string <p>Data source connection ID, selectable (additional field in fusion edition). Non-empty → use the analytical path; empty/default → use the professional edition TcLake path</p>
     */
    public $ConnectionId;

    /**
     * @var string <p>Data Catalog source, selectable (additional field for Setats fusion). Value: METALAKE (pro edition tclake) / CONNECTION (analytical edition Linked Catalog) / Setats (Setats metadata). Routing priority: explicit non-empty CatalogSource > non-empty ConnectionId (deem as CONNECTION) > default METALAKE; ConnectionId will be ignored when CatalogSource is non-empty.</p>
     */
    public $CatalogSource;

    /**
     * @param string $CatalogName <p>Data catalog name.</p>
     * @param string $WorkspaceId <p>Unique id of the workspace where the call is made.</p>
     * @param string $CatalogId <p>Data directory id</p>
     * @param FetchOption $FetchOption <p>Data access option. Selectable. Controls whether to return permission information and filter by permission.</p>
     * @param string $ConnectionId <p>Data source connection ID, selectable (additional field in fusion edition). Non-empty → use the analytical path; empty/default → use the professional edition TcLake path</p>
     * @param string $CatalogSource <p>Data Catalog source, selectable (additional field for Setats fusion). Value: METALAKE (pro edition tclake) / CONNECTION (analytical edition Linked Catalog) / Setats (Setats metadata). Routing priority: explicit non-empty CatalogSource > non-empty ConnectionId (deem as CONNECTION) > default METALAKE; ConnectionId will be ignored when CatalogSource is non-empty.</p>
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

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("CatalogId",$param) and $param["CatalogId"] !== null) {
            $this->CatalogId = $param["CatalogId"];
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
