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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutMonitorData request structure.
 *
 * @method array getMetrics() Obtain A group of metrics and data.
 * @method void setMetrics(array $Metrics) Set A group of metrics and data.
 * @method string getAnnounceIp() Obtain IP address that is automatically specified when monitoring data is reported.
 * @method void setAnnounceIp(string $AnnounceIp) Set IP address that is automatically specified when monitoring data is reported.
 * @method integer getAnnounceTimestamp() Obtain Timestamp that is automatically specified when monitoring data is reported.
 * @method void setAnnounceTimestamp(integer $AnnounceTimestamp) Set Timestamp that is automatically specified when monitoring data is reported.
 * @method string getAnnounceInstance() Obtain IP address or product instance ID that is automatically specified when monitoring data is reported.
 * @method void setAnnounceInstance(string $AnnounceInstance) Set IP address or product instance ID that is automatically specified when monitoring data is reported.
 */
class PutMonitorDataRequest extends AbstractModel
{
    /**
     * @var array A group of metrics and data.
     */
    public $Metrics;

    /**
     * @var string IP address that is automatically specified when monitoring data is reported.
     */
    public $AnnounceIp;

    /**
     * @var integer Timestamp that is automatically specified when monitoring data is reported.
     */
    public $AnnounceTimestamp;

    /**
     * @var string IP address or product instance ID that is automatically specified when monitoring data is reported.
     */
    public $AnnounceInstance;

    /**
     * @param array $Metrics A group of metrics and data.
     * @param string $AnnounceIp IP address that is automatically specified when monitoring data is reported.
     * @param integer $AnnounceTimestamp Timestamp that is automatically specified when monitoring data is reported.
     * @param string $AnnounceInstance IP address or product instance ID that is automatically specified when monitoring data is reported.
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
        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new MetricDatum();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("AnnounceIp",$param) and $param["AnnounceIp"] !== null) {
            $this->AnnounceIp = $param["AnnounceIp"];
        }

        if (array_key_exists("AnnounceTimestamp",$param) and $param["AnnounceTimestamp"] !== null) {
            $this->AnnounceTimestamp = $param["AnnounceTimestamp"];
        }

        if (array_key_exists("AnnounceInstance",$param) and $param["AnnounceInstance"] !== null) {
            $this->AnnounceInstance = $param["AnnounceInstance"];
        }
    }
}
