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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information of multi-node databases configured for data sync. This data structure is valid for multi-node databases such as TDSQL for MySQL. For single-node databases such as MySQL, use `Endpoint` instead.
 *
 * @method string getRegion() Obtain Database region
 * @method void setRegion(string $Region) Set Database region
 * @method string getAccessType() Obtain Instance network access type. For example: extranet (public network), ipv6 (public network ipv6), cvm (self-built CVM), dcg (DC), vpncloud (instance accessed via VPN), cdb (cloud database), ccn (CCN), intranet (self-developed cloud migration), and vpc (VPC). Note that the specific valid values depend on the current linkage.
 * @method void setAccessType(string $AccessType) Set Instance network access type. For example: extranet (public network), ipv6 (public network ipv6), cvm (self-built CVM), dcg (DC), vpncloud (instance accessed via VPN), cdb (cloud database), ccn (CCN), intranet (self-developed cloud migration), and vpc (VPC). Note that the specific valid values depend on the current linkage.
 * @method string getDatabaseType() Obtain Instance database type. For example: mysql, redis, mongodb, postgresql, mariadb, and percona.
 * @method void setDatabaseType(string $DatabaseType) Set Instance database type. For example: mysql, redis, mongodb, postgresql, mariadb, and percona.
 * @method array getInfo() Obtain Database information. Note: If the database type is tdsqlmysql, the order of the Endpoint array should follow the following rule: proxy nodes are placed before set nodes. If SrcConnectType selects proxy access, only the proxy node needs to be filled. If set access is selected, the first set node in the array should be the shard with a shardkey range starting from 0.
 * @method void setInfo(array $Info) Set Database information. Note: If the database type is tdsqlmysql, the order of the Endpoint array should follow the following rule: proxy nodes are placed before set nodes. If SrcConnectType selects proxy access, only the proxy node needs to be filled. If set access is selected, the first set node in the array should be the shard with a shardkey range starting from 0.
 */
class SyncDBEndpointInfos extends AbstractModel
{
    /**
     * @var string Database region
     */
    public $Region;

    /**
     * @var string Instance network access type. For example: extranet (public network), ipv6 (public network ipv6), cvm (self-built CVM), dcg (DC), vpncloud (instance accessed via VPN), cdb (cloud database), ccn (CCN), intranet (self-developed cloud migration), and vpc (VPC). Note that the specific valid values depend on the current linkage.
     */
    public $AccessType;

    /**
     * @var string Instance database type. For example: mysql, redis, mongodb, postgresql, mariadb, and percona.
     */
    public $DatabaseType;

    /**
     * @var array Database information. Note: If the database type is tdsqlmysql, the order of the Endpoint array should follow the following rule: proxy nodes are placed before set nodes. If SrcConnectType selects proxy access, only the proxy node needs to be filled. If set access is selected, the first set node in the array should be the shard with a shardkey range starting from 0.
     */
    public $Info;

    /**
     * @param string $Region Database region
     * @param string $AccessType Instance network access type. For example: extranet (public network), ipv6 (public network ipv6), cvm (self-built CVM), dcg (DC), vpncloud (instance accessed via VPN), cdb (cloud database), ccn (CCN), intranet (self-developed cloud migration), and vpc (VPC). Note that the specific valid values depend on the current linkage.
     * @param string $DatabaseType Instance database type. For example: mysql, redis, mongodb, postgresql, mariadb, and percona.
     * @param array $Info Database information. Note: If the database type is tdsqlmysql, the order of the Endpoint array should follow the following rule: proxy nodes are placed before set nodes. If SrcConnectType selects proxy access, only the proxy node needs to be filled. If set access is selected, the first set node in the array should be the shard with a shardkey range starting from 0.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = [];
            foreach ($param["Info"] as $key => $value){
                $obj = new Endpoint();
                $obj->deserialize($value);
                array_push($this->Info, $obj);
            }
        }
    }
}
