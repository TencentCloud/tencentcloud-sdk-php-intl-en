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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC resource dashboard (all resource counts)
 *
 * @method string getVpcId() Obtain VPC instance ID, such as `vpc-bq4bzxpj`.
 * @method void setVpcId(string $VpcId) Set VPC instance ID, such as `vpc-bq4bzxpj`.
 * @method string getSubnetId() Obtain Subnet instance ID, such as subnet-bthucmmy.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID, such as subnet-bthucmmy.
 * @method integer getClassiclink() Obtain Classiclink.
 * @method void setClassiclink(integer $Classiclink) Set Classiclink.
 * @method integer getDcg() Obtain Direct Connect gateway.
 * @method void setDcg(integer $Dcg) Set Direct Connect gateway.
 * @method integer getPcx() Obtain Peering connection.
 * @method void setPcx(integer $Pcx) Set Peering connection.
 * @method integer getIp() Obtain Total number of used IPs except for CVM IP, EIP and network probe IP. The three IP types will be independently counted.
 * @method void setIp(integer $Ip) Set Total number of used IPs except for CVM IP, EIP and network probe IP. The three IP types will be independently counted.
 * @method integer getNat() Obtain NAT gateway.
 * @method void setNat(integer $Nat) Set NAT gateway.
 * @method integer getVpngw() Obtain VPN gateway.
 * @method void setVpngw(integer $Vpngw) Set VPN gateway.
 * @method integer getFlowLog() Obtain Flow log.
 * @method void setFlowLog(integer $FlowLog) Set Flow log.
 * @method integer getNetworkDetect() Obtain Network probing.
 * @method void setNetworkDetect(integer $NetworkDetect) Set Network probing.
 * @method integer getNetworkACL() Obtain Network ACL.
 * @method void setNetworkACL(integer $NetworkACL) Set Network ACL.
 * @method integer getCVM() Obtain Cloud Virtual Machine.
 * @method void setCVM(integer $CVM) Set Cloud Virtual Machine.
 * @method integer getLB() Obtain Load balancer.
 * @method void setLB(integer $LB) Set Load balancer.
 * @method integer getCDB() Obtain Relational database.
 * @method void setCDB(integer $CDB) Set Relational database.
 * @method integer getCmem() Obtain TencentDB for Memcached.
 * @method void setCmem(integer $Cmem) Set TencentDB for Memcached.
 * @method integer getCTSDB() Obtain Cloud time series database.
 * @method void setCTSDB(integer $CTSDB) Set Cloud time series database.
 * @method integer getMariaDB() Obtain TencentDB for MariaDB (TDSQL).
 * @method void setMariaDB(integer $MariaDB) Set TencentDB for MariaDB (TDSQL).
 * @method integer getSQLServer() Obtain TencentDB for SQL Server.
 * @method void setSQLServer(integer $SQLServer) Set TencentDB for SQL Server.
 * @method integer getPostgres() Obtain TencentDB for PostgreSQL.
 * @method void setPostgres(integer $Postgres) Set TencentDB for PostgreSQL.
 * @method integer getNAS() Obtain Network attached storage.
 * @method void setNAS(integer $NAS) Set Network attached storage.
 * @method integer getGreenplumn() Obtain Snova data warehouse.
 * @method void setGreenplumn(integer $Greenplumn) Set Snova data warehouse.
 * @method integer getCkafka() Obtain Cloud Kafka (CKafka).
 * @method void setCkafka(integer $Ckafka) Set Cloud Kafka (CKafka).
 * @method integer getGrocery() Obtain Grocery.
 * @method void setGrocery(integer $Grocery) Set Grocery.
 * @method integer getHSM() Obtain Data encryption service.
 * @method void setHSM(integer $HSM) Set Data encryption service.
 * @method integer getTcaplus() Obtain Game storage - Tcaplus.
 * @method void setTcaplus(integer $Tcaplus) Set Game storage - Tcaplus.
 * @method integer getCnas() Obtain Cnas.
 * @method void setCnas(integer $Cnas) Set Cnas.
 * @method integer getTiDB() Obtain HTAP database - TiDB.
 * @method void setTiDB(integer $TiDB) Set HTAP database - TiDB.
 * @method integer getEmr() Obtain EMR cluster.
 * @method void setEmr(integer $Emr) Set EMR cluster.
 * @method integer getSEAL() Obtain SEAL.
 * @method void setSEAL(integer $SEAL) Set SEAL.
 * @method integer getCFS() Obtain Cloud file storage - CFS.
 * @method void setCFS(integer $CFS) Set Cloud file storage - CFS.
 * @method integer getOracle() Obtain Oracle.
 * @method void setOracle(integer $Oracle) Set Oracle.
 * @method integer getElasticSearch() Obtain ElasticSearch Service.
 * @method void setElasticSearch(integer $ElasticSearch) Set ElasticSearch Service.
 * @method integer getTBaaS() Obtain Blockchain service.
 * @method void setTBaaS(integer $TBaaS) Set Blockchain service.
 * @method integer getItop() Obtain Itop.
 * @method void setItop(integer $Itop) Set Itop.
 * @method integer getDBAudit() Obtain Cloud database audit.
 * @method void setDBAudit(integer $DBAudit) Set Cloud database audit.
 * @method integer getCynosDBPostgres() Obtain Enterprise TencentDB - CynosDB for Postgres.
 * @method void setCynosDBPostgres(integer $CynosDBPostgres) Set Enterprise TencentDB - CynosDB for Postgres.
 * @method integer getRedis() Obtain TencentDB for Redis.
 * @method void setRedis(integer $Redis) Set TencentDB for Redis.
 * @method integer getMongoDB() Obtain TencentDB for MongoDB.
 * @method void setMongoDB(integer $MongoDB) Set TencentDB for MongoDB.
 * @method integer getDCDB() Obtain A distributed cloud database - TencentDB for TDSQL.
 * @method void setDCDB(integer $DCDB) Set A distributed cloud database - TencentDB for TDSQL.
 * @method integer getCynosDBMySQL() Obtain An enterprise-grade TencentDB - CynosDB for MySQL.
 * @method void setCynosDBMySQL(integer $CynosDBMySQL) Set An enterprise-grade TencentDB - CynosDB for MySQL.
 * @method integer getSubnet() Obtain Subnets.
 * @method void setSubnet(integer $Subnet) Set Subnets.
 * @method integer getRouteTable() Obtain Route table.
 * @method void setRouteTable(integer $RouteTable) Set Route table.
 */
class ResourceDashboard extends AbstractModel
{
    /**
     * @var string VPC instance ID, such as `vpc-bq4bzxpj`.
     */
    public $VpcId;

    /**
     * @var string Subnet instance ID, such as subnet-bthucmmy.
     */
    public $SubnetId;

    /**
     * @var integer Classiclink.
     */
    public $Classiclink;

    /**
     * @var integer Direct Connect gateway.
     */
    public $Dcg;

    /**
     * @var integer Peering connection.
     */
    public $Pcx;

    /**
     * @var integer Total number of used IPs except for CVM IP, EIP and network probe IP. The three IP types will be independently counted.
     */
    public $Ip;

    /**
     * @var integer NAT gateway.
     */
    public $Nat;

    /**
     * @var integer VPN gateway.
     */
    public $Vpngw;

    /**
     * @var integer Flow log.
     */
    public $FlowLog;

    /**
     * @var integer Network probing.
     */
    public $NetworkDetect;

    /**
     * @var integer Network ACL.
     */
    public $NetworkACL;

    /**
     * @var integer Cloud Virtual Machine.
     */
    public $CVM;

    /**
     * @var integer Load balancer.
     */
    public $LB;

    /**
     * @var integer Relational database.
     */
    public $CDB;

    /**
     * @var integer TencentDB for Memcached.
     */
    public $Cmem;

    /**
     * @var integer Cloud time series database.
     */
    public $CTSDB;

    /**
     * @var integer TencentDB for MariaDB (TDSQL).
     */
    public $MariaDB;

    /**
     * @var integer TencentDB for SQL Server.
     */
    public $SQLServer;

    /**
     * @var integer TencentDB for PostgreSQL.
     */
    public $Postgres;

    /**
     * @var integer Network attached storage.
     */
    public $NAS;

    /**
     * @var integer Snova data warehouse.
     */
    public $Greenplumn;

    /**
     * @var integer Cloud Kafka (CKafka).
     */
    public $Ckafka;

    /**
     * @var integer Grocery.
     */
    public $Grocery;

    /**
     * @var integer Data encryption service.
     */
    public $HSM;

    /**
     * @var integer Game storage - Tcaplus.
     */
    public $Tcaplus;

    /**
     * @var integer Cnas.
     */
    public $Cnas;

    /**
     * @var integer HTAP database - TiDB.
     */
    public $TiDB;

    /**
     * @var integer EMR cluster.
     */
    public $Emr;

    /**
     * @var integer SEAL.
     */
    public $SEAL;

    /**
     * @var integer Cloud file storage - CFS.
     */
    public $CFS;

    /**
     * @var integer Oracle.
     */
    public $Oracle;

    /**
     * @var integer ElasticSearch Service.
     */
    public $ElasticSearch;

    /**
     * @var integer Blockchain service.
     */
    public $TBaaS;

    /**
     * @var integer Itop.
     */
    public $Itop;

    /**
     * @var integer Cloud database audit.
     */
    public $DBAudit;

    /**
     * @var integer Enterprise TencentDB - CynosDB for Postgres.
     */
    public $CynosDBPostgres;

    /**
     * @var integer TencentDB for Redis.
     */
    public $Redis;

    /**
     * @var integer TencentDB for MongoDB.
     */
    public $MongoDB;

    /**
     * @var integer A distributed cloud database - TencentDB for TDSQL.
     */
    public $DCDB;

    /**
     * @var integer An enterprise-grade TencentDB - CynosDB for MySQL.
     */
    public $CynosDBMySQL;

    /**
     * @var integer Subnets.
     */
    public $Subnet;

    /**
     * @var integer Route table.
     */
    public $RouteTable;

    /**
     * @param string $VpcId VPC instance ID, such as `vpc-bq4bzxpj`.
     * @param string $SubnetId Subnet instance ID, such as subnet-bthucmmy.
     * @param integer $Classiclink Classiclink.
     * @param integer $Dcg Direct Connect gateway.
     * @param integer $Pcx Peering connection.
     * @param integer $Ip Total number of used IPs except for CVM IP, EIP and network probe IP. The three IP types will be independently counted.
     * @param integer $Nat NAT gateway.
     * @param integer $Vpngw VPN gateway.
     * @param integer $FlowLog Flow log.
     * @param integer $NetworkDetect Network probing.
     * @param integer $NetworkACL Network ACL.
     * @param integer $CVM Cloud Virtual Machine.
     * @param integer $LB Load balancer.
     * @param integer $CDB Relational database.
     * @param integer $Cmem TencentDB for Memcached.
     * @param integer $CTSDB Cloud time series database.
     * @param integer $MariaDB TencentDB for MariaDB (TDSQL).
     * @param integer $SQLServer TencentDB for SQL Server.
     * @param integer $Postgres TencentDB for PostgreSQL.
     * @param integer $NAS Network attached storage.
     * @param integer $Greenplumn Snova data warehouse.
     * @param integer $Ckafka Cloud Kafka (CKafka).
     * @param integer $Grocery Grocery.
     * @param integer $HSM Data encryption service.
     * @param integer $Tcaplus Game storage - Tcaplus.
     * @param integer $Cnas Cnas.
     * @param integer $TiDB HTAP database - TiDB.
     * @param integer $Emr EMR cluster.
     * @param integer $SEAL SEAL.
     * @param integer $CFS Cloud file storage - CFS.
     * @param integer $Oracle Oracle.
     * @param integer $ElasticSearch ElasticSearch Service.
     * @param integer $TBaaS Blockchain service.
     * @param integer $Itop Itop.
     * @param integer $DBAudit Cloud database audit.
     * @param integer $CynosDBPostgres Enterprise TencentDB - CynosDB for Postgres.
     * @param integer $Redis TencentDB for Redis.
     * @param integer $MongoDB TencentDB for MongoDB.
     * @param integer $DCDB A distributed cloud database - TencentDB for TDSQL.
     * @param integer $CynosDBMySQL An enterprise-grade TencentDB - CynosDB for MySQL.
     * @param integer $Subnet Subnets.
     * @param integer $RouteTable Route table.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Classiclink",$param) and $param["Classiclink"] !== null) {
            $this->Classiclink = $param["Classiclink"];
        }

        if (array_key_exists("Dcg",$param) and $param["Dcg"] !== null) {
            $this->Dcg = $param["Dcg"];
        }

        if (array_key_exists("Pcx",$param) and $param["Pcx"] !== null) {
            $this->Pcx = $param["Pcx"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Nat",$param) and $param["Nat"] !== null) {
            $this->Nat = $param["Nat"];
        }

        if (array_key_exists("Vpngw",$param) and $param["Vpngw"] !== null) {
            $this->Vpngw = $param["Vpngw"];
        }

        if (array_key_exists("FlowLog",$param) and $param["FlowLog"] !== null) {
            $this->FlowLog = $param["FlowLog"];
        }

        if (array_key_exists("NetworkDetect",$param) and $param["NetworkDetect"] !== null) {
            $this->NetworkDetect = $param["NetworkDetect"];
        }

        if (array_key_exists("NetworkACL",$param) and $param["NetworkACL"] !== null) {
            $this->NetworkACL = $param["NetworkACL"];
        }

        if (array_key_exists("CVM",$param) and $param["CVM"] !== null) {
            $this->CVM = $param["CVM"];
        }

        if (array_key_exists("LB",$param) and $param["LB"] !== null) {
            $this->LB = $param["LB"];
        }

        if (array_key_exists("CDB",$param) and $param["CDB"] !== null) {
            $this->CDB = $param["CDB"];
        }

        if (array_key_exists("Cmem",$param) and $param["Cmem"] !== null) {
            $this->Cmem = $param["Cmem"];
        }

        if (array_key_exists("CTSDB",$param) and $param["CTSDB"] !== null) {
            $this->CTSDB = $param["CTSDB"];
        }

        if (array_key_exists("MariaDB",$param) and $param["MariaDB"] !== null) {
            $this->MariaDB = $param["MariaDB"];
        }

        if (array_key_exists("SQLServer",$param) and $param["SQLServer"] !== null) {
            $this->SQLServer = $param["SQLServer"];
        }

        if (array_key_exists("Postgres",$param) and $param["Postgres"] !== null) {
            $this->Postgres = $param["Postgres"];
        }

        if (array_key_exists("NAS",$param) and $param["NAS"] !== null) {
            $this->NAS = $param["NAS"];
        }

        if (array_key_exists("Greenplumn",$param) and $param["Greenplumn"] !== null) {
            $this->Greenplumn = $param["Greenplumn"];
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = $param["Ckafka"];
        }

        if (array_key_exists("Grocery",$param) and $param["Grocery"] !== null) {
            $this->Grocery = $param["Grocery"];
        }

        if (array_key_exists("HSM",$param) and $param["HSM"] !== null) {
            $this->HSM = $param["HSM"];
        }

        if (array_key_exists("Tcaplus",$param) and $param["Tcaplus"] !== null) {
            $this->Tcaplus = $param["Tcaplus"];
        }

        if (array_key_exists("Cnas",$param) and $param["Cnas"] !== null) {
            $this->Cnas = $param["Cnas"];
        }

        if (array_key_exists("TiDB",$param) and $param["TiDB"] !== null) {
            $this->TiDB = $param["TiDB"];
        }

        if (array_key_exists("Emr",$param) and $param["Emr"] !== null) {
            $this->Emr = $param["Emr"];
        }

        if (array_key_exists("SEAL",$param) and $param["SEAL"] !== null) {
            $this->SEAL = $param["SEAL"];
        }

        if (array_key_exists("CFS",$param) and $param["CFS"] !== null) {
            $this->CFS = $param["CFS"];
        }

        if (array_key_exists("Oracle",$param) and $param["Oracle"] !== null) {
            $this->Oracle = $param["Oracle"];
        }

        if (array_key_exists("ElasticSearch",$param) and $param["ElasticSearch"] !== null) {
            $this->ElasticSearch = $param["ElasticSearch"];
        }

        if (array_key_exists("TBaaS",$param) and $param["TBaaS"] !== null) {
            $this->TBaaS = $param["TBaaS"];
        }

        if (array_key_exists("Itop",$param) and $param["Itop"] !== null) {
            $this->Itop = $param["Itop"];
        }

        if (array_key_exists("DBAudit",$param) and $param["DBAudit"] !== null) {
            $this->DBAudit = $param["DBAudit"];
        }

        if (array_key_exists("CynosDBPostgres",$param) and $param["CynosDBPostgres"] !== null) {
            $this->CynosDBPostgres = $param["CynosDBPostgres"];
        }

        if (array_key_exists("Redis",$param) and $param["Redis"] !== null) {
            $this->Redis = $param["Redis"];
        }

        if (array_key_exists("MongoDB",$param) and $param["MongoDB"] !== null) {
            $this->MongoDB = $param["MongoDB"];
        }

        if (array_key_exists("DCDB",$param) and $param["DCDB"] !== null) {
            $this->DCDB = $param["DCDB"];
        }

        if (array_key_exists("CynosDBMySQL",$param) and $param["CynosDBMySQL"] !== null) {
            $this->CynosDBMySQL = $param["CynosDBMySQL"];
        }

        if (array_key_exists("Subnet",$param) and $param["Subnet"] !== null) {
            $this->Subnet = $param["Subnet"];
        }

        if (array_key_exists("RouteTable",$param) and $param["RouteTable"] !== null) {
            $this->RouteTable = $param["RouteTable"];
        }
    }
}
