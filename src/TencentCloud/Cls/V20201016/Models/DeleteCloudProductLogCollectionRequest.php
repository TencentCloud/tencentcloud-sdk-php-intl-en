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
 * DeleteCloudProductLogCollection request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getAssumerName() Obtain <p>Cloud product identifier, support enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</p>
 * @method void setAssumerName(string $AssumerName) Set <p>Cloud product identifier, support enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</p>
 * @method string getLogType() Obtain <p>Log type, supports enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
 * @method void setLogType(string $LogType) Set <p>Log type, supports enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
 * @method string getCloudProductRegion() Obtain <p>Product region. Input parameter format varies for different log types (LogType). Refer to the following example:</p><ul><li>All log types for CDS: ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog: ap-guangzhou</li><li>MongoDB-ErrorLog: ap-guangzhou</li><li>TDMYSQL-SLOW: gz</li><li>All log types for DCDB: gz</li><li>All log types for MariaDB: gz</li><li>All log types for PostgreSQL: gz</li><li>All log types for BH: overseas-polaris (Hong Kong (China) and other)/fsi-polaris (financial district)/general-polaris (general zone)/intl-sg-prod (international site)</li><li>All log types for APIS: gz</li></ul>
 * @method void setCloudProductRegion(string $CloudProductRegion) Set <p>Product region. Input parameter format varies for different log types (LogType). Refer to the following example:</p><ul><li>All log types for CDS: ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog: ap-guangzhou</li><li>MongoDB-ErrorLog: ap-guangzhou</li><li>TDMYSQL-SLOW: gz</li><li>All log types for DCDB: gz</li><li>All log types for MariaDB: gz</li><li>All log types for PostgreSQL: gz</li><li>All log types for BH: overseas-polaris (Hong Kong (China) and other)/fsi-polaris (financial district)/general-polaris (general zone)/intl-sg-prod (international site)</li><li>All log types for APIS: gz</li></ul>
 * @method boolean getIsDeleteTopic() Obtain <p>Whether to delete the associated topic</p>
 * @method void setIsDeleteTopic(boolean $IsDeleteTopic) Set <p>Whether to delete the associated topic</p>
 * @method boolean getIsDeleteLogset() Obtain <p>Whether to delete the associated logset. If the logset still has topics, deletion will not be performed.</p>
 * @method void setIsDeleteLogset(boolean $IsDeleteLogset) Set <p>Whether to delete the associated logset. If the logset still has topics, deletion will not be performed.</p>
 */
class DeleteCloudProductLogCollectionRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Cloud product identifier, support enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</p>
     */
    public $AssumerName;

    /**
     * @var string <p>Log type, supports enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
     */
    public $LogType;

    /**
     * @var string <p>Product region. Input parameter format varies for different log types (LogType). Refer to the following example:</p><ul><li>All log types for CDS: ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog: ap-guangzhou</li><li>MongoDB-ErrorLog: ap-guangzhou</li><li>TDMYSQL-SLOW: gz</li><li>All log types for DCDB: gz</li><li>All log types for MariaDB: gz</li><li>All log types for PostgreSQL: gz</li><li>All log types for BH: overseas-polaris (Hong Kong (China) and other)/fsi-polaris (financial district)/general-polaris (general zone)/intl-sg-prod (international site)</li><li>All log types for APIS: gz</li></ul>
     */
    public $CloudProductRegion;

    /**
     * @var boolean <p>Whether to delete the associated topic</p>
     */
    public $IsDeleteTopic;

    /**
     * @var boolean <p>Whether to delete the associated logset. If the logset still has topics, deletion will not be performed.</p>
     */
    public $IsDeleteLogset;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $AssumerName <p>Cloud product identifier, support enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</p>
     * @param string $LogType <p>Log type, supports enumerate: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
     * @param string $CloudProductRegion <p>Product region. Input parameter format varies for different log types (LogType). Refer to the following example:</p><ul><li>All log types for CDS: ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog: ap-guangzhou</li><li>MongoDB-ErrorLog: ap-guangzhou</li><li>TDMYSQL-SLOW: gz</li><li>All log types for DCDB: gz</li><li>All log types for MariaDB: gz</li><li>All log types for PostgreSQL: gz</li><li>All log types for BH: overseas-polaris (Hong Kong (China) and other)/fsi-polaris (financial district)/general-polaris (general zone)/intl-sg-prod (international site)</li><li>All log types for APIS: gz</li></ul>
     * @param boolean $IsDeleteTopic <p>Whether to delete the associated topic</p>
     * @param boolean $IsDeleteLogset <p>Whether to delete the associated logset. If the logset still has topics, deletion will not be performed.</p>
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

        if (array_key_exists("IsDeleteTopic",$param) and $param["IsDeleteTopic"] !== null) {
            $this->IsDeleteTopic = $param["IsDeleteTopic"];
        }

        if (array_key_exists("IsDeleteLogset",$param) and $param["IsDeleteLogset"] !== null) {
            $this->IsDeleteLogset = $param["IsDeleteLogset"];
        }
    }
}
