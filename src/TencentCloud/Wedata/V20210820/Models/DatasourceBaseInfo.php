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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Source Object
 *
 * @method array getDatabaseNames() Obtain If the data source list is bound to a database, then it is the database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseNames(array $DatabaseNames) Set If the data source list is bound to a database, then it is the database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getID() Obtain Data Source ID
 * @method void setID(integer $ID) Set Data Source ID
 * @method string getInstance() Obtain Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstance(string $Instance) Set Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain Data Source Name, cannot be empty under the same SpaceName
 * @method void setName(string $Name) Set Data Source Name, cannot be empty under the same SpaceName
 * @method string getRegion() Obtain Region to which the data source engine belongs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set Region to which the data source engine belongs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain Data Source Type: enumerated valuesNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Data Source Type: enumerated valuesNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterId() Obtain Cluster ID to which the data source belongs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID to which the data source belongs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getVersion() Obtain Version information of the data source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVersion(string $Version) Set Version information of the data source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParamsString() Obtain Attached parameter information of the data source Params JSON string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParamsString(string $ParamsString) Set Attached parameter information of the data source Params JSON string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCategory() Obtain Distinguish whether the data source type is a custom Definition source or a system source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCategory(string $Category) Set Distinguish whether the data source type is a custom Definition source or a system source
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DatasourceBaseInfo extends AbstractModel
{
    /**
     * @var array If the data source list is bound to a database, then it is the database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseNames;

    /**
     * @var string Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var integer Data Source ID
     */
    public $ID;

    /**
     * @var string Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Instance;

    /**
     * @var string Data Source Name, cannot be empty under the same SpaceName
     */
    public $Name;

    /**
     * @var string Region to which the data source engine belongs
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @var string Data Source Type: enumerated valuesNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Cluster ID to which the data source belongs
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Version information of the data source
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Version;

    /**
     * @var string Attached parameter information of the data source Params JSON string
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParamsString;

    /**
     * @var string Distinguish whether the data source type is a custom Definition source or a system source
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Category;

    /**
     * @param array $DatabaseNames If the data source list is bound to a database, then it is the database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ID Data Source ID
     * @param string $Instance Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name Data Source Name, cannot be empty under the same SpaceName
     * @param string $Region Region to which the data source engine belongs
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type Data Source Type: enumerated valuesNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterId Cluster ID to which the data source belongs
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Version Version information of the data source
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParamsString Attached parameter information of the data source Params JSON string
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Category Distinguish whether the data source type is a custom Definition source or a system source
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("DatabaseNames",$param) and $param["DatabaseNames"] !== null) {
            $this->DatabaseNames = $param["DatabaseNames"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ParamsString",$param) and $param["ParamsString"] !== null) {
            $this->ParamsString = $param["ParamsString"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
