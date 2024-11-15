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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster log switch collection
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method SwitchInfo getAudit() Obtain Details of the audit switch
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAudit(SwitchInfo $Audit) Set Details of the audit switch
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method SwitchInfo getEvent() Obtain Details of the event switch
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setEvent(SwitchInfo $Event) Set Details of the event switch
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method SwitchInfo getLog() Obtain Details of common logs
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setLog(SwitchInfo $Log) Set Details of common logs
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method SwitchInfo getMasterLog() Obtain Details of master log
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMasterLog(SwitchInfo $MasterLog) Set Details of master log
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class Switch extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var SwitchInfo Details of the audit switch
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Audit;

    /**
     * @var SwitchInfo Details of the event switch
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Event;

    /**
     * @var SwitchInfo Details of common logs
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Log;

    /**
     * @var SwitchInfo Details of master log
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $MasterLog;

    /**
     * @param string $ClusterId Cluster ID
     * @param SwitchInfo $Audit Details of the audit switch
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param SwitchInfo $Event Details of the event switch
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param SwitchInfo $Log Details of common logs
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param SwitchInfo $MasterLog Details of master log
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new SwitchInfo();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = new SwitchInfo();
            $this->Event->deserialize($param["Event"]);
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = new SwitchInfo();
            $this->Log->deserialize($param["Log"]);
        }

        if (array_key_exists("MasterLog",$param) and $param["MasterLog"] !== null) {
            $this->MasterLog = new SwitchInfo();
            $this->MasterLog->deserialize($param["MasterLog"]);
        }
    }
}
