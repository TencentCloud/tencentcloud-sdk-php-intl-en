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
 * DeleteSchema request structure.
 *
 * @method string getCatalogName() Obtain Data catalog name
 * @method void setCatalogName(string $CatalogName) Set Data catalog name
 * @method string getSchemaName() Obtain Database name
 * @method void setSchemaName(string $SchemaName) Set Database name
 * @method string getWorkspaceId() Obtain Unique id of the workspace where the call is made
 * @method void setWorkspaceId(string $WorkspaceId) Set Unique id of the workspace where the call is made
 * @method string getConnectionId() Obtain Data source connection ID. Selectable (additional field in Fusion Edition). Schemas in the analytics edition catalog cannot be deleted. If a non-empty value is imported, the server returns the ANA_catalog_NOT_SUPPORTED error.
 * @method void setConnectionId(string $ConnectionId) Set Data source connection ID. Selectable (additional field in Fusion Edition). Schemas in the analytics edition catalog cannot be deleted. If a non-empty value is imported, the server returns the ANA_catalog_NOT_SUPPORTED error.
 * @method string getCatalogSource() Obtain Data catalog source. Optional (additional fields added by Setats fusion). Values: METALAKE (Pro Edition tclake) / CONNECTION (Analytics Edition Linked Catalog) / SETATS (Setats metadata). Routing priority: explicit non-empty CatalogSource > non-empty ConnectionId (deemed as CONNECTION) > default METALAKE. ConnectionId will be ignored when CatalogSource is non-empty.
 * @method void setCatalogSource(string $CatalogSource) Set Data catalog source. Optional (additional fields added by Setats fusion). Values: METALAKE (Pro Edition tclake) / CONNECTION (Analytics Edition Linked Catalog) / SETATS (Setats metadata). Routing priority: explicit non-empty CatalogSource > non-empty ConnectionId (deemed as CONNECTION) > default METALAKE. ConnectionId will be ignored when CatalogSource is non-empty.
 */
class DeleteSchemaRequest extends AbstractModel
{
    /**
     * @var string Data catalog name
     */
    public $CatalogName;

    /**
     * @var string Database name
     */
    public $SchemaName;

    /**
     * @var string Unique id of the workspace where the call is made
     */
    public $WorkspaceId;

    /**
     * @var string Data source connection ID. Selectable (additional field in Fusion Edition). Schemas in the analytics edition catalog cannot be deleted. If a non-empty value is imported, the server returns the ANA_catalog_NOT_SUPPORTED error.
     */
    public $ConnectionId;

    /**
     * @var string Data catalog source. Optional (additional fields added by Setats fusion). Values: METALAKE (Pro Edition tclake) / CONNECTION (Analytics Edition Linked Catalog) / SETATS (Setats metadata). Routing priority: explicit non-empty CatalogSource > non-empty ConnectionId (deemed as CONNECTION) > default METALAKE. ConnectionId will be ignored when CatalogSource is non-empty.
     */
    public $CatalogSource;

    /**
     * @param string $CatalogName Data catalog name
     * @param string $SchemaName Database name
     * @param string $WorkspaceId Unique id of the workspace where the call is made
     * @param string $ConnectionId Data source connection ID. Selectable (additional field in Fusion Edition). Schemas in the analytics edition catalog cannot be deleted. If a non-empty value is imported, the server returns the ANA_catalog_NOT_SUPPORTED error.
     * @param string $CatalogSource Data catalog source. Optional (additional fields added by Setats fusion). Values: METALAKE (Pro Edition tclake) / CONNECTION (Analytics Edition Linked Catalog) / SETATS (Setats metadata). Routing priority: explicit non-empty CatalogSource > non-empty ConnectionId (deemed as CONNECTION) > default METALAKE. ConnectionId will be ignored when CatalogSource is non-empty.
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

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }
    }
}
