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
 * ModifyPrometheusInstanceAttributes request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method integer getDataRetentionTime() Obtain <p>Data retention period (in days). The limit value is one of 15, 30, 45, 90, 180, 365, 730</p>
 * @method void setDataRetentionTime(integer $DataRetentionTime) Set <p>Data retention period (in days). The limit value is one of 15, 30, 45, 90, 180, 365, 730</p>
 * @method array getInstanceAttributes() Obtain <p>Flag for special attributes of a prom instance</p><p>Archive storage duration (days):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
 * @method void setInstanceAttributes(array $InstanceAttributes) Set <p>Flag for special attributes of a prom instance</p><p>Archive storage duration (days):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
 */
class ModifyPrometheusInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>Data retention period (in days). The limit value is one of 15, 30, 45, 90, 180, 365, 730</p>
     */
    public $DataRetentionTime;

    /**
     * @var array <p>Flag for special attributes of a prom instance</p><p>Archive storage duration (days):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
     */
    public $InstanceAttributes;

    /**
     * @param string $InstanceId <p>Instance ID</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param integer $DataRetentionTime <p>Data retention period (in days). The limit value is one of 15, 30, 45, 90, 180, 365, 730</p>
     * @param array $InstanceAttributes <p>Flag for special attributes of a prom instance</p><p>Archive storage duration (days):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("InstanceAttributes",$param) and $param["InstanceAttributes"] !== null) {
            $this->InstanceAttributes = [];
            foreach ($param["InstanceAttributes"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->InstanceAttributes, $obj);
            }
        }
    }
}
