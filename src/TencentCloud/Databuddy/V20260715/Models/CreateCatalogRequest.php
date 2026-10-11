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
 * CreateCatalog request structure.
 *
 * @method string getName() Obtain catalog name
 * @method void setName(string $Name) Set catalog name
 * @method string getType() Obtain catalog type. Available values: TABLE, MODEL, VOLUME
 * @method void setType(string $Type) Set catalog type. Available values: TABLE, MODEL, VOLUME
 * @method string getWorkspaceId() Obtain Workspace unique id
 * @method void setWorkspaceId(string $WorkspaceId) Set Workspace unique id
 * @method string getComment() Obtain Description
 * @method void setComment(string $Comment) Set Description
 * @method string getConnectionId() Obtain ID of the connection
 * @method void setConnectionId(string $ConnectionId) Set ID of the connection
 * @method string getCatalogSource() Obtain Data catalog source. Option (additional field in the fusion edition). For values, see CatalogSourceEnum: METALAKE (pro edition) / CONNECTION (analytics edition). If not specified, it is handled as METALAKE by default.
 * @method void setCatalogSource(string $CatalogSource) Set Data catalog source. Option (additional field in the fusion edition). For values, see CatalogSourceEnum: METALAKE (pro edition) / CONNECTION (analytics edition). If not specified, it is handled as METALAKE by default.
 * @method string getConnectionCatalogName() Obtain Catalog name or database name on the connection side. Required for three-segment data sources, not required for two-segment data sources such as MySQL. For three-segment data sources with MySQL kernels such as Doris, StarRocks, and TChouse-D, fill in the external catalog name. For three-segment data sources with PG kernels such as PostgreSQL, Tencent PG, GaussDB, and Hologres, fill in the databaseName. Not required for two-segment data sources such as MySQL.
 * @method void setConnectionCatalogName(string $ConnectionCatalogName) Set Catalog name or database name on the connection side. Required for three-segment data sources, not required for two-segment data sources such as MySQL. For three-segment data sources with MySQL kernels such as Doris, StarRocks, and TChouse-D, fill in the external catalog name. For three-segment data sources with PG kernels such as PostgreSQL, Tencent PG, GaussDB, and Hologres, fill in the databaseName. Not required for two-segment data sources such as MySQL.
 */
class CreateCatalogRequest extends AbstractModel
{
    /**
     * @var string catalog name
     */
    public $Name;

    /**
     * @var string catalog type. Available values: TABLE, MODEL, VOLUME
     */
    public $Type;

    /**
     * @var string Workspace unique id
     */
    public $WorkspaceId;

    /**
     * @var string Description
     */
    public $Comment;

    /**
     * @var string ID of the connection
     */
    public $ConnectionId;

    /**
     * @var string Data catalog source. Option (additional field in the fusion edition). For values, see CatalogSourceEnum: METALAKE (pro edition) / CONNECTION (analytics edition). If not specified, it is handled as METALAKE by default.
     */
    public $CatalogSource;

    /**
     * @var string Catalog name or database name on the connection side. Required for three-segment data sources, not required for two-segment data sources such as MySQL. For three-segment data sources with MySQL kernels such as Doris, StarRocks, and TChouse-D, fill in the external catalog name. For three-segment data sources with PG kernels such as PostgreSQL, Tencent PG, GaussDB, and Hologres, fill in the databaseName. Not required for two-segment data sources such as MySQL.
     */
    public $ConnectionCatalogName;

    /**
     * @param string $Name catalog name
     * @param string $Type catalog type. Available values: TABLE, MODEL, VOLUME
     * @param string $WorkspaceId Workspace unique id
     * @param string $Comment Description
     * @param string $ConnectionId ID of the connection
     * @param string $CatalogSource Data catalog source. Option (additional field in the fusion edition). For values, see CatalogSourceEnum: METALAKE (pro edition) / CONNECTION (analytics edition). If not specified, it is handled as METALAKE by default.
     * @param string $ConnectionCatalogName Catalog name or database name on the connection side. Required for three-segment data sources, not required for two-segment data sources such as MySQL. For three-segment data sources with MySQL kernels such as Doris, StarRocks, and TChouse-D, fill in the external catalog name. For three-segment data sources with PG kernels such as PostgreSQL, Tencent PG, GaussDB, and Hologres, fill in the databaseName. Not required for two-segment data sources such as MySQL.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }

        if (array_key_exists("ConnectionCatalogName",$param) and $param["ConnectionCatalogName"] !== null) {
            $this->ConnectionCatalogName = $param["ConnectionCatalogName"];
        }
    }
}
