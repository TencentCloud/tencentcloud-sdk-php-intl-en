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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information of multi-node databases configured for data sync. This data structure is valid for multi-node databases such as TDSQL for MySQL. For single-node databases such as MySQL, use `Endpoint` instead.
 *
 * @method string getRegion() Obtain Region of the database
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region of the database
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccessType() Obtain Instance network access type. Valid values: `extranet` (public network); `ipv6` (public IPv6); `cvm` (self-build on CVM); `dcg` (Direct Connect); `vpncloud` (VPN access); `cdb` (database); `ccn` (CCN); `intranet` (intranet); `vpc` (VPC). Note that the valid values are subject to the current link.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessType(string $AccessType) Set Instance network access type. Valid values: `extranet` (public network); `ipv6` (public IPv6); `cvm` (self-build on CVM); `dcg` (Direct Connect); `vpncloud` (VPN access); `cdb` (database); `ccn` (CCN); `intranet` (intranet); `vpc` (VPC). Note that the valid values are subject to the current link.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabaseType() Obtain Database type, such as `mysql`, `redis`, `mongodb`, `postgresql`, `mariadb`, and `percona`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseType(string $DatabaseType) Set Database type, such as `mysql`, `redis`, `mongodb`, `postgresql`, `mariadb`, and `percona`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInfo() Obtain Database information. Note: If the data type is tdsqlmysql, the order of this Endpoint array should correspond to the set order, and the first shard (shardkey range starting from 0) must be entered first.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInfo(array $Info) Set Database information. Note: If the data type is tdsqlmysql, the order of this Endpoint array should correspond to the set order, and the first shard (shardkey range starting from 0) must be entered first.Note: This field may return null, indicating that no valid values can be obtained.
 */
class SyncDBEndpointInfos extends AbstractModel
{
    /**
     * @var string Region of the database
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Instance network access type. Valid values: `extranet` (public network); `ipv6` (public IPv6); `cvm` (self-build on CVM); `dcg` (Direct Connect); `vpncloud` (VPN access); `cdb` (database); `ccn` (CCN); `intranet` (intranet); `vpc` (VPC). Note that the valid values are subject to the current link.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessType;

    /**
     * @var string Database type, such as `mysql`, `redis`, `mongodb`, `postgresql`, `mariadb`, and `percona`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseType;

    /**
     * @var array Database information. Note: If the data type is tdsqlmysql, the order of this Endpoint array should correspond to the set order, and the first shard (shardkey range starting from 0) must be entered first.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Info;

    /**
     * @param string $Region Region of the database
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccessType Instance network access type. Valid values: `extranet` (public network); `ipv6` (public IPv6); `cvm` (self-build on CVM); `dcg` (Direct Connect); `vpncloud` (VPN access); `cdb` (database); `ccn` (CCN); `intranet` (intranet); `vpc` (VPC). Note that the valid values are subject to the current link.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatabaseType Database type, such as `mysql`, `redis`, `mongodb`, `postgresql`, `mariadb`, and `percona`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Info Database information. Note: If the data type is tdsqlmysql, the order of this Endpoint array should correspond to the set order, and the first shard (shardkey range starting from 0) must be entered first.Note: This field may return null, indicating that no valid values can be obtained.
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
