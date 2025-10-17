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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus Alert custom notification template.
 *
 * @method string getType() Obtain Notification customization type.
Alertmanager - self-built alertmanager in vpc.
webhook - webhook address in the vpc.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Notification customization type.
Alertmanager - self-built alertmanager in vpc.
webhook - webhook address in the vpc.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain alertmanager/webhook url (ip in the same vpc as the prometheus instance).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set alertmanager/webhook url (ip in the same vpc as the prometheus instance).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAllowedTimeRanges() Obtain Specifies the time range for allowing Alert sending.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowedTimeRanges(array $AllowedTimeRanges) Set Specifies the time range for allowing Alert sending.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain alertmanager intranet cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set alertmanager intranet cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterType() Obtain alertmanager resides in the private network cluster type (tke/eks/tdcc).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterType(string $ClusterType) Set alertmanager resides in the private network cluster type (tke/eks/tdcc).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusAlertCustomReceiver extends AbstractModel
{
    /**
     * @var string Notification customization type.
Alertmanager - self-built alertmanager in vpc.
webhook - webhook address in the vpc.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string alertmanager/webhook url (ip in the same vpc as the prometheus instance).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var array Specifies the time range for allowing Alert sending.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllowedTimeRanges;

    /**
     * @var string alertmanager intranet cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string alertmanager resides in the private network cluster type (tke/eks/tdcc).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterType;

    /**
     * @param string $Type Notification customization type.
Alertmanager - self-built alertmanager in vpc.
webhook - webhook address in the vpc.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url alertmanager/webhook url (ip in the same vpc as the prometheus instance).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AllowedTimeRanges Specifies the time range for allowing Alert sending.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId alertmanager intranet cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterType alertmanager resides in the private network cluster type (tke/eks/tdcc).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AllowedTimeRanges",$param) and $param["AllowedTimeRanges"] !== null) {
            $this->AllowedTimeRanges = [];
            foreach ($param["AllowedTimeRanges"] as $key => $value){
                $obj = new PrometheusAlertAllowTimeRange();
                $obj->deserialize($value);
                array_push($this->AllowedTimeRanges, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
