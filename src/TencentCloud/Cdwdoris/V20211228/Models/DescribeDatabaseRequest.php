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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabase request structure.
 *
 * @method string getInstanceId() Obtain Resource ID, which is the TCHouse-D resource ID used for table creation.
 * @method void setInstanceId(string $InstanceId) Set Resource ID, which is the TCHouse-D resource ID used for table creation.
 * @method string getUserName() Obtain Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setUserName(string $UserName) Set Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getPassWord() Obtain Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setPassWord(string $PassWord) Set Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getCatalogName() Obtain Query the data source where the database is located. If it is not filled in, the internal data source (internal) will be used by default.
 * @method void setCatalogName(string $CatalogName) Set Query the data source where the database is located. If it is not filled in, the internal data source (internal) will be used by default.
 * @method array getDbNames() Obtain The database information to be queried. If this parameter and FilterDbName are not filled in, all database information of the current data source will be queried by default.
 * @method void setDbNames(array $DbNames) Set The database information to be queried. If this parameter and FilterDbName are not filled in, all database information of the current data source will be queried by default.
 * @method string getFilterDbName() Obtain Display the filtered database information. For example, %infor indicates database names ending with infor. This parameter only supports scenarios where CatalogName is internal.
 * @method void setFilterDbName(string $FilterDbName) Set Display the filtered database information. For example, %infor indicates database names ending with infor. This parameter only supports scenarios where CatalogName is internal.
 */
class DescribeDatabaseRequest extends AbstractModel
{
    /**
     * @var string Resource ID, which is the TCHouse-D resource ID used for table creation.
     */
    public $InstanceId;

    /**
     * @var string Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $UserName;

    /**
     * @var string Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $PassWord;

    /**
     * @var string Query the data source where the database is located. If it is not filled in, the internal data source (internal) will be used by default.
     */
    public $CatalogName;

    /**
     * @var array The database information to be queried. If this parameter and FilterDbName are not filled in, all database information of the current data source will be queried by default.
     */
    public $DbNames;

    /**
     * @var string Display the filtered database information. For example, %infor indicates database names ending with infor. This parameter only supports scenarios where CatalogName is internal.
     */
    public $FilterDbName;

    /**
     * @param string $InstanceId Resource ID, which is the TCHouse-D resource ID used for table creation.
     * @param string $UserName Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $PassWord Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $CatalogName Query the data source where the database is located. If it is not filled in, the internal data source (internal) will be used by default.
     * @param array $DbNames The database information to be queried. If this parameter and FilterDbName are not filled in, all database information of the current data source will be queried by default.
     * @param string $FilterDbName Display the filtered database information. For example, %infor indicates database names ending with infor. This parameter only supports scenarios where CatalogName is internal.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("DbNames",$param) and $param["DbNames"] !== null) {
            $this->DbNames = $param["DbNames"];
        }

        if (array_key_exists("FilterDbName",$param) and $param["FilterDbName"] !== null) {
            $this->FilterDbName = $param["FilterDbName"];
        }
    }
}
