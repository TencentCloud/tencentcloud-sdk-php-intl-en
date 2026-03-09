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
 * UpdateDataSource request structure.
 *
 * @method integer getId() Obtain Data source ID.
 * @method void setId(integer $Id) Set Data source ID.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getProdConProperties() Obtain Configuration message of data sources is stored in JSON KV. based on each data source type, the KV storage information varies.

> deployType: 
CONNSTR_PUBLICDB (public network instance). 
CONNSTR_CVMDB (self-built instance).
Cloud INSTANCE.

```
mysql: self-built instance.
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:mysql://1.1.1.1:1111/example#test#123456",
    "username": "root",
    "password": "example#test#123456",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "MYSQL"
}
mysql: cloud instance.
{
    "instanceid": "cdb-12uxdo5e",
    "db": "db",
    "region": "ap-shanghai",
    "username": "msyql",
    "password": "example#test#123456",
    "deployType": "INSTANCE",
    "type": "TENCENT_MYSQL"
}
sql_server: 
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:sqlserver://1.1.1.1:223;example#test#123456",
    "username": "user_1",
    "password": "example#test#123456",
    "type": "SQLSERVER"
}
redis:
    redisType:
-NO_ACCOUNT (account-free).
-SELF_ACCOUNT (custom account).
{
    "deployType": "CONNSTR_PUBLICDB",
    "username":""
    "password": "example#test#123456",
    "ip": "1.1.1.1",
    "port": "6379",
    "redisType": "NO_ACCOUT",
    "type": "REDIS"
}
oracle: 
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:oracle:thin:@1.1.1.1:1521:example#test#123456",
    "username": "oracle",
    "password": "example#test#123456",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "ORACLE"
}
mongodb:
advanceParams (custom parameters, appended to the url).
{
    "advanceParams": [
        {
            "key": "authSource",
            "value": "auth"
        }
    ],
    "db": "admin",
    "deployType": "CONNSTR_PUBLICDB",
    "username": "user",
    "password": "example#test#123456",
    "type": "MONGODB",
    "host": "1.1.1.1:9200"
}
postgresql:
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:postgresql://1.1.1.1:1921/example#test#123456",
    "username": "user",
    "password": "example#test#123456",
    "type": "POSTGRE"
}
kafka:
    authType:
        - sasl
        - jaas
        - sasl_plaintext
        - sasl_ssl
        - GSSAPI
    ssl:
        -PLAIN
        -GSSAPI
{
    "deployType": "CONNSTR_PUBLICDB",
    "host": "1.1.1.1:9092",
    "ssl": "GSSAPI",
    "authType": "sasl",
    "type": "KAFKA",
    "principal": "aaaa",
    "serviceName": "kafka"
}

cos:
{
    "region": "ap-shanghai",
    "deployType": "INSTANCE",
    "secretId": "aaaaa",
    "secretKey": "example#test#123456",
    "bucket": "aaa",
    "type": "COS"
}

```
 * @method void setProdConProperties(string $ProdConProperties) Set Configuration message of data sources is stored in JSON KV. based on each data source type, the KV storage information varies.

> deployType: 
CONNSTR_PUBLICDB (public network instance). 
CONNSTR_CVMDB (self-built instance).
Cloud INSTANCE.

```
mysql: self-built instance.
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:mysql://1.1.1.1:1111/example#test#123456",
    "username": "root",
    "password": "example#test#123456",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "MYSQL"
}
mysql: cloud instance.
{
    "instanceid": "cdb-12uxdo5e",
    "db": "db",
    "region": "ap-shanghai",
    "username": "msyql",
    "password": "example#test#123456",
    "deployType": "INSTANCE",
    "type": "TENCENT_MYSQL"
}
sql_server: 
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:sqlserver://1.1.1.1:223;example#test#123456",
    "username": "user_1",
    "password": "example#test#123456",
    "type": "SQLSERVER"
}
redis:
    redisType:
-NO_ACCOUNT (account-free).
-SELF_ACCOUNT (custom account).
{
    "deployType": "CONNSTR_PUBLICDB",
    "username":""
    "password": "example#test#123456",
    "ip": "1.1.1.1",
    "port": "6379",
    "redisType": "NO_ACCOUT",
    "type": "REDIS"
}
oracle: 
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:oracle:thin:@1.1.1.1:1521:example#test#123456",
    "username": "oracle",
    "password": "example#test#123456",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "ORACLE"
}
mongodb:
advanceParams (custom parameters, appended to the url).
{
    "advanceParams": [
        {
            "key": "authSource",
            "value": "auth"
        }
    ],
    "db": "admin",
    "deployType": "CONNSTR_PUBLICDB",
    "username": "user",
    "password": "example#test#123456",
    "type": "MONGODB",
    "host": "1.1.1.1:9200"
}
postgresql:
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:postgresql://1.1.1.1:1921/example#test#123456",
    "username": "user",
    "password": "example#test#123456",
    "type": "POSTGRE"
}
kafka:
    authType:
        - sasl
        - jaas
        - sasl_plaintext
        - sasl_ssl
        - GSSAPI
    ssl:
        -PLAIN
        -GSSAPI
{
    "deployType": "CONNSTR_PUBLICDB",
    "host": "1.1.1.1:9092",
    "ssl": "GSSAPI",
    "authType": "sasl",
    "type": "KAFKA",
    "principal": "aaaa",
    "serviceName": "kafka"
}

cos:
{
    "region": "ap-shanghai",
    "deployType": "INSTANCE",
    "secretId": "aaaaa",
    "secretKey": "example#test#123456",
    "bucket": "aaa",
    "type": "COS"
}

```
 * @method string getDevConProperties() Obtain This field is required if the project is in standard mode.
 * @method void setDevConProperties(string $DevConProperties) Set This field is required if the project is in standard mode.
 * @method DataSourceFileUpload getProdFileUpload() Obtain Upload data source file in live production environment.
 * @method void setProdFileUpload(DataSourceFileUpload $ProdFileUpload) Set Upload data source file in live production environment.
 * @method DataSourceFileUpload getDevFileUpload() Obtain Upload data source file in development environment.
 * @method void setDevFileUpload(DataSourceFileUpload $DevFileUpload) Set Upload data source file in development environment.
 * @method string getDisplayName() Obtain Data source display name for visual inspection.
 * @method void setDisplayName(string $DisplayName) Set Data source display name for visual inspection.
 * @method string getDescription() Obtain Data source description information
 * @method void setDescription(string $Description) Set Data source description information
 */
class UpdateDataSourceRequest extends AbstractModel
{
    /**
     * @var integer Data source ID.
     */
    public $Id;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Configuration message of data sources is stored in JSON KV. based on each data source type, the KV storage information varies.

> deployType: 
CONNSTR_PUBLICDB (public network instance). 
CONNSTR_CVMDB (self-built instance).
Cloud INSTANCE.

```
mysql: self-built instance.
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:mysql://1.1.1.1:1111/example#test#123456",
    "username": "root",
    "password": "example#test#123456",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "MYSQL"
}
mysql: cloud instance.
{
    "instanceid": "cdb-12uxdo5e",
    "db": "db",
    "region": "ap-shanghai",
    "username": "msyql",
    "password": "example#test#123456",
    "deployType": "INSTANCE",
    "type": "TENCENT_MYSQL"
}
sql_server: 
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:sqlserver://1.1.1.1:223;example#test#123456",
    "username": "user_1",
    "password": "example#test#123456",
    "type": "SQLSERVER"
}
redis:
    redisType:
-NO_ACCOUNT (account-free).
-SELF_ACCOUNT (custom account).
{
    "deployType": "CONNSTR_PUBLICDB",
    "username":""
    "password": "example#test#123456",
    "ip": "1.1.1.1",
    "port": "6379",
    "redisType": "NO_ACCOUT",
    "type": "REDIS"
}
oracle: 
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:oracle:thin:@1.1.1.1:1521:example#test#123456",
    "username": "oracle",
    "password": "example#test#123456",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "ORACLE"
}
mongodb:
advanceParams (custom parameters, appended to the url).
{
    "advanceParams": [
        {
            "key": "authSource",
            "value": "auth"
        }
    ],
    "db": "admin",
    "deployType": "CONNSTR_PUBLICDB",
    "username": "user",
    "password": "example#test#123456",
    "type": "MONGODB",
    "host": "1.1.1.1:9200"
}
postgresql:
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:postgresql://1.1.1.1:1921/example#test#123456",
    "username": "user",
    "password": "example#test#123456",
    "type": "POSTGRE"
}
kafka:
    authType:
        - sasl
        - jaas
        - sasl_plaintext
        - sasl_ssl
        - GSSAPI
    ssl:
        -PLAIN
        -GSSAPI
{
    "deployType": "CONNSTR_PUBLICDB",
    "host": "1.1.1.1:9092",
    "ssl": "GSSAPI",
    "authType": "sasl",
    "type": "KAFKA",
    "principal": "aaaa",
    "serviceName": "kafka"
}

cos:
{
    "region": "ap-shanghai",
    "deployType": "INSTANCE",
    "secretId": "aaaaa",
    "secretKey": "example#test#123456",
    "bucket": "aaa",
    "type": "COS"
}

```
     */
    public $ProdConProperties;

    /**
     * @var string This field is required if the project is in standard mode.
     */
    public $DevConProperties;

    /**
     * @var DataSourceFileUpload Upload data source file in live production environment.
     */
    public $ProdFileUpload;

    /**
     * @var DataSourceFileUpload Upload data source file in development environment.
     */
    public $DevFileUpload;

    /**
     * @var string Data source display name for visual inspection.
     */
    public $DisplayName;

    /**
     * @var string Data source description information
     */
    public $Description;

    /**
     * @param integer $Id Data source ID.
     * @param string $ProjectId Project ID.
     * @param string $ProdConProperties Configuration message of data sources is stored in JSON KV. based on each data source type, the KV storage information varies.

> deployType: 
CONNSTR_PUBLICDB (public network instance). 
CONNSTR_CVMDB (self-built instance).
Cloud INSTANCE.

```
mysql: self-built instance.
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:mysql://1.1.1.1:1111/example#test#123456",
    "username": "root",
    "password": "example#test#123456",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "MYSQL"
}
mysql: cloud instance.
{
    "instanceid": "cdb-12uxdo5e",
    "db": "db",
    "region": "ap-shanghai",
    "username": "msyql",
    "password": "example#test#123456",
    "deployType": "INSTANCE",
    "type": "TENCENT_MYSQL"
}
sql_server: 
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:sqlserver://1.1.1.1:223;example#test#123456",
    "username": "user_1",
    "password": "example#test#123456",
    "type": "SQLSERVER"
}
redis:
    redisType:
-NO_ACCOUNT (account-free).
-SELF_ACCOUNT (custom account).
{
    "deployType": "CONNSTR_PUBLICDB",
    "username":""
    "password": "example#test#123456",
    "ip": "1.1.1.1",
    "port": "6379",
    "redisType": "NO_ACCOUT",
    "type": "REDIS"
}
oracle: 
{
    "deployType": "CONNSTR_CVMDB",
    "url": "jdbc:oracle:thin:@1.1.1.1:1521:example#test#123456",
    "username": "oracle",
    "password": "example#test#123456",
    "region": "ap-shanghai",
    "vpcId": "vpc-kprq42yo",
    "type": "ORACLE"
}
mongodb:
advanceParams (custom parameters, appended to the url).
{
    "advanceParams": [
        {
            "key": "authSource",
            "value": "auth"
        }
    ],
    "db": "admin",
    "deployType": "CONNSTR_PUBLICDB",
    "username": "user",
    "password": "example#test#123456",
    "type": "MONGODB",
    "host": "1.1.1.1:9200"
}
postgresql:
{
    "deployType": "CONNSTR_PUBLICDB",
    "url": "jdbc:postgresql://1.1.1.1:1921/example#test#123456",
    "username": "user",
    "password": "example#test#123456",
    "type": "POSTGRE"
}
kafka:
    authType:
        - sasl
        - jaas
        - sasl_plaintext
        - sasl_ssl
        - GSSAPI
    ssl:
        -PLAIN
        -GSSAPI
{
    "deployType": "CONNSTR_PUBLICDB",
    "host": "1.1.1.1:9092",
    "ssl": "GSSAPI",
    "authType": "sasl",
    "type": "KAFKA",
    "principal": "aaaa",
    "serviceName": "kafka"
}

cos:
{
    "region": "ap-shanghai",
    "deployType": "INSTANCE",
    "secretId": "aaaaa",
    "secretKey": "example#test#123456",
    "bucket": "aaa",
    "type": "COS"
}

```
     * @param string $DevConProperties This field is required if the project is in standard mode.
     * @param DataSourceFileUpload $ProdFileUpload Upload data source file in live production environment.
     * @param DataSourceFileUpload $DevFileUpload Upload data source file in development environment.
     * @param string $DisplayName Data source display name for visual inspection.
     * @param string $Description Data source description information
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProdConProperties",$param) and $param["ProdConProperties"] !== null) {
            $this->ProdConProperties = $param["ProdConProperties"];
        }

        if (array_key_exists("DevConProperties",$param) and $param["DevConProperties"] !== null) {
            $this->DevConProperties = $param["DevConProperties"];
        }

        if (array_key_exists("ProdFileUpload",$param) and $param["ProdFileUpload"] !== null) {
            $this->ProdFileUpload = new DataSourceFileUpload();
            $this->ProdFileUpload->deserialize($param["ProdFileUpload"]);
        }

        if (array_key_exists("DevFileUpload",$param) and $param["DevFileUpload"] !== null) {
            $this->DevFileUpload = new DataSourceFileUpload();
            $this->DevFileUpload->deserialize($param["DevFileUpload"]);
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
