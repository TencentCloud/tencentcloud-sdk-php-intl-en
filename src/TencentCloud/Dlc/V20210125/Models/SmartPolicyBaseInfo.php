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
 * SmartPolicyBaseInfo
 *
 * @method string getUin() Obtain User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyType() Obtain Catalog/Database/Table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyType(string $PolicyType) Set Catalog/Database/Table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCatalog() Obtain Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalog(string $Catalog) Set Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabase() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabase(string $Database) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTable() Obtain Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTable(string $Table) Set Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppId() Obtain User AppID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(string $AppId) Set User AppID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SmartPolicyBaseInfo extends AbstractModel
{
    /**
     * @var string User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Catalog/Database/Table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyType;

    /**
     * @var string Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Catalog;

    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Database;

    /**
     * @var string Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Table;

    /**
     * @var string User AppID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @param string $Uin User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyType Catalog/Database/Table
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Catalog Catalog name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Database Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Table Table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppId User AppID
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
