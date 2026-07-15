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
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getAssumerName() Obtain <p>Cloud product identifier, supports enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</p>
 * @method void setAssumerName(string $AssumerName) Set <p>Cloud product identifier, supports enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</p>
 * @method string getLogType() Obtain <p>Log type. Supports enumeration: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB  ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
 * @method void setLogType(string $LogType) Set <p>Log type. Supports enumeration: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB  ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
 * @method string getCloudProductRegion() Obtain <p>Product region. Different log types have different region input formats. Refer to the following example:</p><ul><li>All CDS log types: ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog: ap-guangzhou</li><li>MongoDB-ErrorLog: ap-guangzhou</li><li>TDMYSQL-SLOW: gz</li><li>All DCDB log types: gz</li><li>All MariaDB log types: gz</li><li>All PostgreSQL log types: gz</li><li>All BH log types: overseas-polaris(Hong Kong (China) and other)/fsi-polaris(financial district)/general-polaris(general zone)/intl-sg-prod(international site)</li><li>All APIS log types: gz</li></ul>
 * @method void setCloudProductRegion(string $CloudProductRegion) Set <p>Product region. Different log types have different region input formats. Refer to the following example:</p><ul><li>All CDS log types: ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog: ap-guangzhou</li><li>MongoDB-ErrorLog: ap-guangzhou</li><li>TDMYSQL-SLOW: gz</li><li>All DCDB log types: gz</li><li>All MariaDB log types: gz</li><li>All PostgreSQL log types: gz</li><li>All BH log types: overseas-polaris(Hong Kong (China) and other)/fsi-polaris(financial district)/general-polaris(general zone)/intl-sg-prod(international site)</li><li>All APIS log types: gz</li></ul>
 * @method string getExtend() Obtain <p>Logging configuration extended information, generally used to store additional log delivery configuration</p>
 * @method void setExtend(string $Extend) Set <p>Logging configuration extended information, generally used to store additional log delivery configuration</p>
 * @method array getTags() Obtain <p>Description list of tags. By specifying this parameter, you can simultaneously bind tags to the appropriate logset and topic. Supports a maximum of 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
 * @method void setTags(array $Tags) Set <p>Description list of tags. By specifying this parameter, you can simultaneously bind tags to the appropriate logset and topic. Supports a maximum of 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
 */
class ModifyCloudProductLogCollectionRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Cloud product identifier, supports enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</p>
     */
    public $AssumerName;

    /**
     * @var string <p>Log type. Supports enumeration: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB  ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
     */
    public $LogType;

    /**
     * @var string <p>Product region. Different log types have different region input formats. Refer to the following example:</p><ul><li>All CDS log types: ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog: ap-guangzhou</li><li>MongoDB-ErrorLog: ap-guangzhou</li><li>TDMYSQL-SLOW: gz</li><li>All DCDB log types: gz</li><li>All MariaDB log types: gz</li><li>All PostgreSQL log types: gz</li><li>All BH log types: overseas-polaris(Hong Kong (China) and other)/fsi-polaris(financial district)/general-polaris(general zone)/intl-sg-prod(international site)</li><li>All APIS log types: gz</li></ul>
     */
    public $CloudProductRegion;

    /**
     * @var string <p>Logging configuration extended information, generally used to store additional log delivery configuration</p>
     */
    public $Extend;

    /**
     * @var array <p>Description list of tags. By specifying this parameter, you can simultaneously bind tags to the appropriate logset and topic. Supports a maximum of 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
     */
    public $Tags;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $AssumerName <p>Cloud product identifier, supports enumerate: CDS, CWP, CDB, TDSQL-C, MongoDB, TDStore, DCDB, MariaDB, PostgreSQL, BH, APIS</p>
     * @param string $LogType <p>Log type. Supports enumeration: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB  ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
     * @param string $CloudProductRegion <p>Product region. Different log types have different region input formats. Refer to the following example:</p><ul><li>All CDS log types: ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog: ap-guangzhou</li><li>MongoDB-ErrorLog: ap-guangzhou</li><li>TDMYSQL-SLOW: gz</li><li>All DCDB log types: gz</li><li>All MariaDB log types: gz</li><li>All PostgreSQL log types: gz</li><li>All BH log types: overseas-polaris(Hong Kong (China) and other)/fsi-polaris(financial district)/general-polaris(general zone)/intl-sg-prod(international site)</li><li>All APIS log types: gz</li></ul>
     * @param string $Extend <p>Logging configuration extended information, generally used to store additional log delivery configuration</p>
     * @param array $Tags <p>Description list of tags. By specifying this parameter, you can simultaneously bind tags to the appropriate logset and topic. Supports a maximum of 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
