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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic metadata object
 *
 * @method integer getId() Obtain Primary key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Primary key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGuid() Obtain Object GUID value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGuid(string $Guid) Set Object GUID value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCatalog() Obtain Data directory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalog(string $Catalog) Set Data directory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description information
 * @method void setDescription(string $Description) Set Description information
 * @method string getOwner() Obtain Object owner
 * @method void setOwner(string $Owner) Set Object owner
 * @method string getOwnerAccount() Obtain Object owner account
 * @method void setOwnerAccount(string $OwnerAccount) Set Object owner account
 * @method array getPermValues() Obtain Permission
 * @method void setPermValues(array $PermValues) Set Permission
 * @method array getParams() Obtain Additional attributes
 * @method void setParams(array $Params) Set Additional attributes
 * @method array getBizParams() Obtain Additional business attributes
 * @method void setBizParams(array $BizParams) Set Additional business attributes
 * @method integer getDataVersion() Obtain Data version
 * @method void setDataVersion(integer $DataVersion) Set Data version
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifiedTime() Obtain Modification time
 * @method void setModifiedTime(string $ModifiedTime) Set Modification time
 * @method integer getDatasourceId() Obtain Data source primary key
 * @method void setDatasourceId(integer $DatasourceId) Set Data source primary key
 */
class Asset extends AbstractModel
{
    /**
     * @var integer Primary key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Object GUID value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Guid;

    /**
     * @var string Data directory
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Catalog;

    /**
     * @var string Description information
     */
    public $Description;

    /**
     * @var string Object owner
     */
    public $Owner;

    /**
     * @var string Object owner account
     */
    public $OwnerAccount;

    /**
     * @var array Permission
     */
    public $PermValues;

    /**
     * @var array Additional attributes
     */
    public $Params;

    /**
     * @var array Additional business attributes
     */
    public $BizParams;

    /**
     * @var integer Data version
     */
    public $DataVersion;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifiedTime;

    /**
     * @var integer Data source primary key
     */
    public $DatasourceId;

    /**
     * @param integer $Id Primary key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Guid Object GUID value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Catalog Data directory
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description information
     * @param string $Owner Object owner
     * @param string $OwnerAccount Object owner account
     * @param array $PermValues Permission
     * @param array $Params Additional attributes
     * @param array $BizParams Additional business attributes
     * @param integer $DataVersion Data version
     * @param string $CreateTime Creation time
     * @param string $ModifiedTime Modification time
     * @param integer $DatasourceId Data source primary key
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

        if (array_key_exists("Guid",$param) and $param["Guid"] !== null) {
            $this->Guid = $param["Guid"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
        }

        if (array_key_exists("PermValues",$param) and $param["PermValues"] !== null) {
            $this->PermValues = [];
            foreach ($param["PermValues"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->PermValues, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = [];
            foreach ($param["BizParams"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->BizParams, $obj);
            }
        }

        if (array_key_exists("DataVersion",$param) and $param["DataVersion"] !== null) {
            $this->DataVersion = $param["DataVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }
    }
}
