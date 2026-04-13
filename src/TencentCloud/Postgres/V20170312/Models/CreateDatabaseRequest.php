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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDatabase request structure.
 *
 * @method string getDBInstanceId() Obtain Specifies the instance ID, such as postgres-6fego161. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set Specifies the instance ID, such as postgres-6fego161. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getDatabaseName() Obtain Specifies the user-created database name.
Name specification: consists of letters (a-z, a-z), digits (0-9), and underscores (_), starting with a letter or underscore (_), up to 63 characters. system reserved keywords cannot be used, and 'postgres' is not allowed.
 * @method void setDatabaseName(string $DatabaseName) Set Specifies the user-created database name.
Name specification: consists of letters (a-z, a-z), digits (0-9), and underscores (_), starting with a letter or underscore (_), up to 63 characters. system reserved keywords cannot be used, and 'postgres' is not allowed.
 * @method string getDatabaseOwner() Obtain Owner of the database. obtain through the api [DescribeAccounts](https://www.tencentcloud.com/document/api/409/18109?from_cn_redirect=1).
 * @method void setDatabaseOwner(string $DatabaseOwner) Set Owner of the database. obtain through the api [DescribeAccounts](https://www.tencentcloud.com/document/api/409/18109?from_cn_redirect=1).
 * @method string getEncoding() Obtain Specifies the character encoding of the database.
Supported character sets include UTF8, LATIN1, LATIN2, WIN1250, WIN1251, WIN1252, KOI8R, EUC_JP, and EUC_KR.
Default value: UTF8.
 * @method void setEncoding(string $Encoding) Set Specifies the character encoding of the database.
Supported character sets include UTF8, LATIN1, LATIN2, WIN1250, WIN1251, WIN1252, KOI8R, EUC_JP, and EUC_KR.
Default value: UTF8.
 * @method string getCollate() Obtain Specifies the database sorting rule.
 * @method void setCollate(string $Collate) Set Specifies the database sorting rule.
 * @method string getCtype() Obtain Specifies the character category of the database.
 * @method void setCtype(string $Ctype) Set Specifies the character category of the database.
 */
class CreateDatabaseRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID, such as postgres-6fego161. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     */
    public $DBInstanceId;

    /**
     * @var string Specifies the user-created database name.
Name specification: consists of letters (a-z, a-z), digits (0-9), and underscores (_), starting with a letter or underscore (_), up to 63 characters. system reserved keywords cannot be used, and 'postgres' is not allowed.
     */
    public $DatabaseName;

    /**
     * @var string Owner of the database. obtain through the api [DescribeAccounts](https://www.tencentcloud.com/document/api/409/18109?from_cn_redirect=1).
     */
    public $DatabaseOwner;

    /**
     * @var string Specifies the character encoding of the database.
Supported character sets include UTF8, LATIN1, LATIN2, WIN1250, WIN1251, WIN1252, KOI8R, EUC_JP, and EUC_KR.
Default value: UTF8.
     */
    public $Encoding;

    /**
     * @var string Specifies the database sorting rule.
     */
    public $Collate;

    /**
     * @var string Specifies the character category of the database.
     */
    public $Ctype;

    /**
     * @param string $DBInstanceId Specifies the instance ID, such as postgres-6fego161. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $DatabaseName Specifies the user-created database name.
Name specification: consists of letters (a-z, a-z), digits (0-9), and underscores (_), starting with a letter or underscore (_), up to 63 characters. system reserved keywords cannot be used, and 'postgres' is not allowed.
     * @param string $DatabaseOwner Owner of the database. obtain through the api [DescribeAccounts](https://www.tencentcloud.com/document/api/409/18109?from_cn_redirect=1).
     * @param string $Encoding Specifies the character encoding of the database.
Supported character sets include UTF8, LATIN1, LATIN2, WIN1250, WIN1251, WIN1252, KOI8R, EUC_JP, and EUC_KR.
Default value: UTF8.
     * @param string $Collate Specifies the database sorting rule.
     * @param string $Ctype Specifies the character category of the database.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabaseOwner",$param) and $param["DatabaseOwner"] !== null) {
            $this->DatabaseOwner = $param["DatabaseOwner"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Collate",$param) and $param["Collate"] !== null) {
            $this->Collate = $param["Collate"];
        }

        if (array_key_exists("Ctype",$param) and $param["Ctype"] !== null) {
            $this->Ctype = $param["Ctype"];
        }
    }
}
