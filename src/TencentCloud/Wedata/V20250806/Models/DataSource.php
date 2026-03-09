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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data source object.
 *
 * @method string getProjectId() Obtain Belonging project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Belonging project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Data source type: enumeration value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Data source type: enumeration value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Data source name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Data source name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDisplayName() Obtain Data source display name for visual inspection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Data source display name for visual inspection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Data source description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Data source description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Affiliated project Name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Affiliated project Name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Data source creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Data source creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyUser() Obtain Updater
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyUser(string $ModifyUser) Set Updater
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProdConProperties() Obtain Configuration message of data sources is stored in JSON KV. KV storage information varies based on data source type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProdConProperties(string $ProdConProperties) Set Configuration message of data sources is stored in JSON KV. KV storage information varies based on data source type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDevConProperties() Obtain Same as params content for developing data of data sources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDevConProperties(string $DevConProperties) Set Same as params content for developing data of data sources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCategory() Obtain Data source type.

-DB - custom definition source.
-CLUSTER --- system source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategory(string $Category) Set Data source type.

-DB - custom definition source.
-CLUSTER --- system source.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataSource extends AbstractModel
{
    /**
     * @var string Belonging project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var integer Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Data source type: enumeration value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Data source name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Data source display name for visual inspection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Data source description information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Affiliated project Name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Data source creator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var string Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Updater
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyUser;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Configuration message of data sources is stored in JSON KV. KV storage information varies based on data source type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProdConProperties;

    /**
     * @var string Same as params content for developing data of data sources.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DevConProperties;

    /**
     * @var string Data source type.

-DB - custom definition source.
-CLUSTER --- system source.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Category;

    /**
     * @param string $ProjectId Belonging project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Data source type: enumeration value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Data source name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DisplayName Data source display name for visual inspection.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Data source description information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Affiliated project Name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Data source creator.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyUser Updater
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProdConProperties Configuration message of data sources is stored in JSON KV. KV storage information varies based on data source type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DevConProperties Same as params content for developing data of data sources.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Category Data source type.

-DB - custom definition source.
-CLUSTER --- system source.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyUser",$param) and $param["ModifyUser"] !== null) {
            $this->ModifyUser = $param["ModifyUser"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ProdConProperties",$param) and $param["ProdConProperties"] !== null) {
            $this->ProdConProperties = $param["ProdConProperties"];
        }

        if (array_key_exists("DevConProperties",$param) and $param["DevConProperties"] !== null) {
            $this->DevConProperties = $param["DevConProperties"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
