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
 * Data catalog entity structure
 *
 * @method string getId() Obtain <p>Unique id of the data catalog.</p>
 * @method void setId(string $Id) Set <p>Unique id of the data catalog.</p>
 * @method string getName() Obtain <p>Data catalog name.</p>
 * @method void setName(string $Name) Set <p>Data catalog name.</p>
 * @method string getType() Obtain <p>Data catalog type</p>
 * @method void setType(string $Type) Set <p>Data catalog type</p>
 * @method string getComment() Obtain <p>Data catalog description</p>
 * @method void setComment(string $Comment) Set <p>Data catalog description</p>
 * @method string getStatus() Obtain <p>Status info: being registered 0, trial 1, connected successfully 2, connection failure 3, deleting 4, deleted 5</p>
 * @method void setStatus(string $Status) Set <p>Status info: being registered 0, trial 1, connected successfully 2, connection failure 3, deleting 4, deleted 5</p>
 * @method array getProperties() Obtain <p>Data catalog properties</p>
 * @method void setProperties(array $Properties) Set <p>Data catalog properties</p>
 * @method string getOperator() Obtain <p>Operator</p>
 * @method void setOperator(string $Operator) Set <p>Operator</p>
 * @method MetaOwner getMetaOwner() Obtain <p>Responsible person information.</p>
 * @method void setMetaOwner(MetaOwner $MetaOwner) Set <p>Responsible person information.</p>
 * @method Audit getAudit() Obtain <p>Audit information</p>
 * @method void setAudit(Audit $Audit) Set <p>Audit information</p>
 * @method string getAssetGuid() Obtain <p>Globally unique ID of the asset</p>
 * @method void setAssetGuid(string $AssetGuid) Set <p>Globally unique ID of the asset</p>
 * @method integer getCurrentWorkspacePermissionLevel() Obtain <p>Current workspace permission level. The value corresponds to PermissionLevel: 0 - no permission, 1 - read-only, 2 - read-write</p>
 * @method void setCurrentWorkspacePermissionLevel(integer $CurrentWorkspacePermissionLevel) Set <p>Current workspace permission level. The value corresponds to PermissionLevel: 0 - no permission, 1 - read-only, 2 - read-write</p>
 * @method string getIdentifier() Obtain <p>tccatalog.identifier in tccatalog properties</p>
 * @method void setIdentifier(string $Identifier) Set <p>tccatalog.identifier in tccatalog properties</p>
 * @method PermissionDetail getPermissionDetail() Obtain <p>Permission information of the current user for this entity.</p>
 * @method void setPermissionDetail(PermissionDetail $PermissionDetail) Set <p>Permission information of the current user for this entity.</p>
 * @method boolean getIsExternal() Obtain <p>Whether it is an external data Catalog (a Catalog created based on a data source connection, such as MYSQL, EMR_HIVE, TCHOUSE_D, POSTGRESQL, DLC). true: external Catalog, false: built-in Catalog (TABLE/MODEL/VOLUME)</p>
 * @method void setIsExternal(boolean $IsExternal) Set <p>Whether it is an external data Catalog (a Catalog created based on a data source connection, such as MYSQL, EMR_HIVE, TCHOUSE_D, POSTGRESQL, DLC). true: external Catalog, false: built-in Catalog (TABLE/MODEL/VOLUME)</p>
 * @method array getTags() Obtain <p>Tag information list. Note: It is returned only when FetchTags=true in the request. By default, it is not returned.</p>
 * @method void setTags(array $Tags) Set <p>Tag information list. Note: It is returned only when FetchTags=true in the request. By default, it is not returned.</p>
 * @method string getCatalogSource() Obtain <p>Data catalog source</p>
 * @method void setCatalogSource(string $CatalogSource) Set <p>Data catalog source</p>
 * @method string getConnectionCatalogName() Obtain <p>The data catalog name or database name on the connection side (only available for three-segment data sources in the analytics edition; empty string for two-segment data sources). For MySQL-kernel three-segment data sources such as Doris/StarRocks/TChouse-D: external catalog name; for PG-kernel three-segment data sources such as PostgreSQL/Tencent PG/GaussDB/Hologres: databaseName; for two-segment data sources such as MySQL: empty string. Note: This field is only valid for the analytics edition (CatalogSource=CONNECTION) and is not filled for the pro edition (METALAKE).</p>
 * @method void setConnectionCatalogName(string $ConnectionCatalogName) Set <p>The data catalog name or database name on the connection side (only available for three-segment data sources in the analytics edition; empty string for two-segment data sources). For MySQL-kernel three-segment data sources such as Doris/StarRocks/TChouse-D: external catalog name; for PG-kernel three-segment data sources such as PostgreSQL/Tencent PG/GaussDB/Hologres: databaseName; for two-segment data sources such as MySQL: empty string. Note: This field is only valid for the analytics edition (CatalogSource=CONNECTION) and is not filled for the pro edition (METALAKE).</p>
 */
class Catalog extends AbstractModel
{
    /**
     * @var string <p>Unique id of the data catalog.</p>
     */
    public $Id;

    /**
     * @var string <p>Data catalog name.</p>
     */
    public $Name;

    /**
     * @var string <p>Data catalog type</p>
     */
    public $Type;

    /**
     * @var string <p>Data catalog description</p>
     */
    public $Comment;

    /**
     * @var string <p>Status info: being registered 0, trial 1, connected successfully 2, connection failure 3, deleting 4, deleted 5</p>
     */
    public $Status;

    /**
     * @var array <p>Data catalog properties</p>
     */
    public $Properties;

    /**
     * @var string <p>Operator</p>
     */
    public $Operator;

    /**
     * @var MetaOwner <p>Responsible person information.</p>
     */
    public $MetaOwner;

    /**
     * @var Audit <p>Audit information</p>
     */
    public $Audit;

    /**
     * @var string <p>Globally unique ID of the asset</p>
     */
    public $AssetGuid;

    /**
     * @var integer <p>Current workspace permission level. The value corresponds to PermissionLevel: 0 - no permission, 1 - read-only, 2 - read-write</p>
     */
    public $CurrentWorkspacePermissionLevel;

    /**
     * @var string <p>tccatalog.identifier in tccatalog properties</p>
     */
    public $Identifier;

    /**
     * @var PermissionDetail <p>Permission information of the current user for this entity.</p>
     */
    public $PermissionDetail;

    /**
     * @var boolean <p>Whether it is an external data Catalog (a Catalog created based on a data source connection, such as MYSQL, EMR_HIVE, TCHOUSE_D, POSTGRESQL, DLC). true: external Catalog, false: built-in Catalog (TABLE/MODEL/VOLUME)</p>
     */
    public $IsExternal;

    /**
     * @var array <p>Tag information list. Note: It is returned only when FetchTags=true in the request. By default, it is not returned.</p>
     */
    public $Tags;

    /**
     * @var string <p>Data catalog source</p>
     */
    public $CatalogSource;

    /**
     * @var string <p>The data catalog name or database name on the connection side (only available for three-segment data sources in the analytics edition; empty string for two-segment data sources). For MySQL-kernel three-segment data sources such as Doris/StarRocks/TChouse-D: external catalog name; for PG-kernel three-segment data sources such as PostgreSQL/Tencent PG/GaussDB/Hologres: databaseName; for two-segment data sources such as MySQL: empty string. Note: This field is only valid for the analytics edition (CatalogSource=CONNECTION) and is not filled for the pro edition (METALAKE).</p>
     */
    public $ConnectionCatalogName;

    /**
     * @param string $Id <p>Unique id of the data catalog.</p>
     * @param string $Name <p>Data catalog name.</p>
     * @param string $Type <p>Data catalog type</p>
     * @param string $Comment <p>Data catalog description</p>
     * @param string $Status <p>Status info: being registered 0, trial 1, connected successfully 2, connection failure 3, deleting 4, deleted 5</p>
     * @param array $Properties <p>Data catalog properties</p>
     * @param string $Operator <p>Operator</p>
     * @param MetaOwner $MetaOwner <p>Responsible person information.</p>
     * @param Audit $Audit <p>Audit information</p>
     * @param string $AssetGuid <p>Globally unique ID of the asset</p>
     * @param integer $CurrentWorkspacePermissionLevel <p>Current workspace permission level. The value corresponds to PermissionLevel: 0 - no permission, 1 - read-only, 2 - read-write</p>
     * @param string $Identifier <p>tccatalog.identifier in tccatalog properties</p>
     * @param PermissionDetail $PermissionDetail <p>Permission information of the current user for this entity.</p>
     * @param boolean $IsExternal <p>Whether it is an external data Catalog (a Catalog created based on a data source connection, such as MYSQL, EMR_HIVE, TCHOUSE_D, POSTGRESQL, DLC). true: external Catalog, false: built-in Catalog (TABLE/MODEL/VOLUME)</p>
     * @param array $Tags <p>Tag information list. Note: It is returned only when FetchTags=true in the request. By default, it is not returned.</p>
     * @param string $CatalogSource <p>Data catalog source</p>
     * @param string $ConnectionCatalogName <p>The data catalog name or database name on the connection side (only available for three-segment data sources in the analytics edition; empty string for two-segment data sources). For MySQL-kernel three-segment data sources such as Doris/StarRocks/TChouse-D: external catalog name; for PG-kernel three-segment data sources such as PostgreSQL/Tencent PG/GaussDB/Hologres: databaseName; for two-segment data sources such as MySQL: empty string. Note: This field is only valid for the analytics edition (CatalogSource=CONNECTION) and is not filled for the pro edition (METALAKE).</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("MetaOwner",$param) and $param["MetaOwner"] !== null) {
            $this->MetaOwner = new MetaOwner();
            $this->MetaOwner->deserialize($param["MetaOwner"]);
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("AssetGuid",$param) and $param["AssetGuid"] !== null) {
            $this->AssetGuid = $param["AssetGuid"];
        }

        if (array_key_exists("CurrentWorkspacePermissionLevel",$param) and $param["CurrentWorkspacePermissionLevel"] !== null) {
            $this->CurrentWorkspacePermissionLevel = $param["CurrentWorkspacePermissionLevel"];
        }

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("PermissionDetail",$param) and $param["PermissionDetail"] !== null) {
            $this->PermissionDetail = new PermissionDetail();
            $this->PermissionDetail->deserialize($param["PermissionDetail"]);
        }

        if (array_key_exists("IsExternal",$param) and $param["IsExternal"] !== null) {
            $this->IsExternal = $param["IsExternal"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new CommonTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }

        if (array_key_exists("ConnectionCatalogName",$param) and $param["ConnectionCatalogName"] !== null) {
            $this->ConnectionCatalogName = $param["ConnectionCatalogName"];
        }
    }
}
