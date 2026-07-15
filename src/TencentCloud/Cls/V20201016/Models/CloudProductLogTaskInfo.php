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
 * Cloud Product log delivery task info
 *
 * @method string getClsRegion() Obtain <p>Log service region</p>
 * @method void setClsRegion(string $ClsRegion) Set <p>Log service region</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getLogsetId() Obtain <p>Logset ID</p>
 * @method void setLogsetId(string $LogsetId) Set <p>Logset ID</p>
 * @method string getTopicId() Obtain <p>Log topic ID.</p>
 * @method void setTopicId(string $TopicId) Set <p>Log topic ID.</p>
 * @method string getExtend() Obtain <p>Extended information for logging configuration, generally used to store additional log delivery configuration</p>
 * @method void setExtend(string $Extend) Set <p>Extended information for logging configuration, generally used to store additional log delivery configuration</p>
 * @method string getLogType() Obtain <p>Log type, supports enumeration: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
 * @method void setLogType(string $LogType) Set <p>Log type, supports enumeration: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
 * @method integer getStatus() Obtain <p>Task status: 0 creating, 1 creation completed, 2 deleting</p>
 * @method void setStatus(integer $Status) Set <p>Task status: 0 creating, 1 creation completed, 2 deleting</p>
 * @method array getTopicTags() Obtain <p>Tag information of the topic associated with the delivery task</p>
 * @method void setTopicTags(array $TopicTags) Set <p>Tag information of the topic associated with the delivery task</p>
 * @method array getLogsetTags() Obtain <p>Tag information of the logset associated with the delivery task</p>
 * @method void setLogsetTags(array $LogsetTags) Set <p>Tag information of the logset associated with the delivery task</p>
 */
class CloudProductLogTaskInfo extends AbstractModel
{
    /**
     * @var string <p>Log service region</p>
     */
    public $ClsRegion;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Logset ID</p>
     */
    public $LogsetId;

    /**
     * @var string <p>Log topic ID.</p>
     */
    public $TopicId;

    /**
     * @var string <p>Extended information for logging configuration, generally used to store additional log delivery configuration</p>
     */
    public $Extend;

    /**
     * @var string <p>Log type, supports enumeration: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
     */
    public $LogType;

    /**
     * @var integer <p>Task status: 0 creating, 1 creation completed, 2 deleting</p>
     */
    public $Status;

    /**
     * @var array <p>Tag information of the topic associated with the delivery task</p>
     */
    public $TopicTags;

    /**
     * @var array <p>Tag information of the logset associated with the delivery task</p>
     */
    public $LogsetTags;

    /**
     * @param string $ClsRegion <p>Log service region</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $LogsetId <p>Logset ID</p>
     * @param string $TopicId <p>Log topic ID.</p>
     * @param string $Extend <p>Extended information for logging configuration, generally used to store additional log delivery configuration</p>
     * @param string $LogType <p>Log type, supports enumeration: CDS-AUDIT, CDS-RISK, CDB-AUDIT, TDSQL-C-AUDIT, MongoDB-AUDIT, MongoDB-SlowLog, MongoDB-ErrorLog, TDMYSQL-SLOW, DCDB-AUDIT, DCDB-SLOW, DCDB-ERROR, MariaDB-AUDIT, MariaDB-SLOW, MariaDB-ERROR, PostgreSQL-SLOW, PostgreSQL-ERROR, PostgreSQL-AUDIT, BH-FILELOG, BH-COMMANDLOG, APIS-ACCESS</p>
     * @param integer $Status <p>Task status: 0 creating, 1 creation completed, 2 deleting</p>
     * @param array $TopicTags <p>Tag information of the topic associated with the delivery task</p>
     * @param array $LogsetTags <p>Tag information of the logset associated with the delivery task</p>
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
        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Extend",$param) and $param["Extend"] !== null) {
            $this->Extend = $param["Extend"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TopicTags",$param) and $param["TopicTags"] !== null) {
            $this->TopicTags = [];
            foreach ($param["TopicTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TopicTags, $obj);
            }
        }

        if (array_key_exists("LogsetTags",$param) and $param["LogsetTags"] !== null) {
            $this->LogsetTags = [];
            foreach ($param["LogsetTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->LogsetTags, $obj);
            }
        }
    }
}
