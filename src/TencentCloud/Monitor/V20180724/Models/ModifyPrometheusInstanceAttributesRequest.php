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
 * ModifyPrometheusInstanceAttributes request structure.
 *
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getDataRetentionTime() Obtain Storage period. Valid values: 15, 30, 45. This parameter is not applicable to monthly subscribed instances.
 * @method void setDataRetentionTime(integer $DataRetentionTime) Set Storage period. Valid values: 15, 30, 45. This parameter is not applicable to monthly subscribed instances.
 */
class ModifyPrometheusInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Storage period. Valid values: 15, 30, 45. This parameter is not applicable to monthly subscribed instances.
     */
    public $DataRetentionTime;

    /**
     * @param string $InstanceName Instance name
     * @param string $InstanceId Instance ID
     * @param integer $DataRetentionTime Storage period. Valid values: 15, 30, 45. This parameter is not applicable to monthly subscribed instances.
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }
    }
}
