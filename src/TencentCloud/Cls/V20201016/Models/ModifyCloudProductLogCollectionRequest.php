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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudProductLogCollection request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getAssumerName() Obtain Cloud product identifier, support enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS.
 * @method void setAssumerName(string $AssumerName) Set Cloud product identifier, support enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS.
 * @method string getLogType() Obtain Log type, support enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS
 * @method void setLogType(string $LogType) Set Log type, support enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS
 * @method string getCloudProductRegion() Obtain Cloud product region. Data discrepancies exist in the format of region input parameters for different log types (LogType). Refer to the following example:
-All log types of CDS: ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT: gz
- MongoDB-AUDIT: gz
- MongoDB-SlowLog:ap-guangzhou
- MongoDB-ErrorLog:ap-guangzhou
- TDMYSQL-SLOW:gz
-All log types of DCDB: gz
-All log types of MariaDB: gz
-PostgreSQL all log types: gz
-BH all log types: overseas-polaris (Hong Kong (China) and other)/fsi-polaris (financial district)/general-polaris (general zone)/intl-sg-prod (international site)
-All log types of APIS: gz
 * @method void setCloudProductRegion(string $CloudProductRegion) Set Cloud product region. Data discrepancies exist in the format of region input parameters for different log types (LogType). Refer to the following example:
-All log types of CDS: ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT: gz
- MongoDB-AUDIT: gz
- MongoDB-SlowLog:ap-guangzhou
- MongoDB-ErrorLog:ap-guangzhou
- TDMYSQL-SLOW:gz
-All log types of DCDB: gz
-All log types of MariaDB: gz
-PostgreSQL all log types: gz
-BH all log types: overseas-polaris (Hong Kong (China) and other)/fsi-polaris (financial district)/general-polaris (general zone)/intl-sg-prod (international site)
-All log types of APIS: gz
 * @method string getExtend() Obtain Logging configuration extended information, normally used to store additional log shipping configuration
 * @method void setExtend(string $Extend) Set Logging configuration extended information, normally used to store additional log shipping configuration
 */
class ModifyCloudProductLogCollectionRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Cloud product identifier, support enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS.
     */
    public $AssumerName;

    /**
     * @var string Log type, support enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS
     */
    public $LogType;

    /**
     * @var string Cloud product region. Data discrepancies exist in the format of region input parameters for different log types (LogType). Refer to the following example:
-All log types of CDS: ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT: gz
- MongoDB-AUDIT: gz
- MongoDB-SlowLog:ap-guangzhou
- MongoDB-ErrorLog:ap-guangzhou
- TDMYSQL-SLOW:gz
-All log types of DCDB: gz
-All log types of MariaDB: gz
-PostgreSQL all log types: gz
-BH all log types: overseas-polaris (Hong Kong (China) and other)/fsi-polaris (financial district)/general-polaris (general zone)/intl-sg-prod (international site)
-All log types of APIS: gz
     */
    public $CloudProductRegion;

    /**
     * @var string Logging configuration extended information, normally used to store additional log shipping configuration
     */
    public $Extend;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $AssumerName Cloud product identifier, support enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS.
     * @param string $LogType Log type, support enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS
     * @param string $CloudProductRegion Cloud product region. Data discrepancies exist in the format of region input parameters for different log types (LogType). Refer to the following example:
-All log types of CDS: ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT: gz
- MongoDB-AUDIT: gz
- MongoDB-SlowLog:ap-guangzhou
- MongoDB-ErrorLog:ap-guangzhou
- TDMYSQL-SLOW:gz
-All log types of DCDB: gz
-All log types of MariaDB: gz
-PostgreSQL all log types: gz
-BH all log types: overseas-polaris (Hong Kong (China) and other)/fsi-polaris (financial district)/general-polaris (general zone)/intl-sg-prod (international site)
-All log types of APIS: gz
     * @param string $Extend Logging configuration extended information, normally used to store additional log shipping configuration
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

        if (array_key_exists("AssumerName",$param) and $param["AssumerName"] !== null) {
            $this->AssumerName = $param["AssumerName"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("CloudProductRegion",$param) and $param["CloudProductRegion"] !== null) {
            $this->CloudProductRegion = $param["CloudProductRegion"];
        }

        if (array_key_exists("Extend",$param) and $param["Extend"] !== null) {
            $this->Extend = $param["Extend"];
        }
    }
}
