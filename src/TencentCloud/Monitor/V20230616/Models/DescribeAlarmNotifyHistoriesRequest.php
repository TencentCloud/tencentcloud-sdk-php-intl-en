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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmNotifyHistories request structure.
 *
 * @method string getMonitorType() Obtain Monitoring type
 * @method void setMonitorType(string $MonitorType) Set Monitoring type
 * @method integer getQueryBaseTime() Obtain Start time, used as a Unix timestamp in seconds.
 * @method void setQueryBaseTime(integer $QueryBaseTime) Set Start time, used as a Unix timestamp in seconds.
 * @method integer getQueryBeforeSeconds() Obtain Period to query before QueryBaseTime, in seconds.
 * @method void setQueryBeforeSeconds(integer $QueryBeforeSeconds) Set Period to query before QueryBaseTime, in seconds.
 * @method PageByNoParams getPageParams() Obtain Pagination parameter.
 * @method void setPageParams(PageByNoParams $PageParams) Set Pagination parameter.
 * @method string getNamespace() Obtain Fill in when the monitoring type is MT_QCE. Namespace of the affiliation.
 * @method void setNamespace(string $Namespace) Set Fill in when the monitoring type is MT_QCE. Namespace of the affiliation.
 * @method string getModelName() Obtain Fill in when the monitoring type is MT_QCE. Alarm policy type
 * @method void setModelName(string $ModelName) Set Fill in when the monitoring type is MT_QCE. Alarm policy type
 * @method string getPolicyId() Obtain Query the notification history of a policy
 * @method void setPolicyId(string $PolicyId) Set Query the notification history of a policy
 */
class DescribeAlarmNotifyHistoriesRequest extends AbstractModel
{
    /**
     * @var string Monitoring type
     */
    public $MonitorType;

    /**
     * @var integer Start time, used as a Unix timestamp in seconds.
     */
    public $QueryBaseTime;

    /**
     * @var integer Period to query before QueryBaseTime, in seconds.
     */
    public $QueryBeforeSeconds;

    /**
     * @var PageByNoParams Pagination parameter.
     */
    public $PageParams;

    /**
     * @var string Fill in when the monitoring type is MT_QCE. Namespace of the affiliation.
     */
    public $Namespace;

    /**
     * @var string Fill in when the monitoring type is MT_QCE. Alarm policy type
     */
    public $ModelName;

    /**
     * @var string Query the notification history of a policy
     */
    public $PolicyId;

    /**
     * @param string $MonitorType Monitoring type
     * @param integer $QueryBaseTime Start time, used as a Unix timestamp in seconds.
     * @param integer $QueryBeforeSeconds Period to query before QueryBaseTime, in seconds.
     * @param PageByNoParams $PageParams Pagination parameter.
     * @param string $Namespace Fill in when the monitoring type is MT_QCE. Namespace of the affiliation.
     * @param string $ModelName Fill in when the monitoring type is MT_QCE. Alarm policy type
     * @param string $PolicyId Query the notification history of a policy
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
        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("QueryBaseTime",$param) and $param["QueryBaseTime"] !== null) {
            $this->QueryBaseTime = $param["QueryBaseTime"];
        }

        if (array_key_exists("QueryBeforeSeconds",$param) and $param["QueryBeforeSeconds"] !== null) {
            $this->QueryBeforeSeconds = $param["QueryBeforeSeconds"];
        }

        if (array_key_exists("PageParams",$param) and $param["PageParams"] !== null) {
            $this->PageParams = new PageByNoParams();
            $this->PageParams->deserialize($param["PageParams"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
