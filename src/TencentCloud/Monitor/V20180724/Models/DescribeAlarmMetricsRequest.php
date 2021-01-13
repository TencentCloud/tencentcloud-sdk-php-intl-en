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
 * DescribeAlarmMetrics request structure.
 *
 * @method string getModule() Obtain Value fixed at "monitor"
 * @method void setModule(string $Module) Set Value fixed at "monitor"
 * @method string getMonitorType() Obtain Monitor type filter. Valid values: MT_QCE (Tencent Cloud service monitoring)
 * @method void setMonitorType(string $MonitorType) Set Monitor type filter. Valid values: MT_QCE (Tencent Cloud service monitoring)
 * @method string getNamespace() Obtain Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
 * @method void setNamespace(string $Namespace) Set Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
 */
class DescribeAlarmMetricsRequest extends AbstractModel
{
    /**
     * @var string Value fixed at "monitor"
     */
    public $Module;

    /**
     * @var string Monitor type filter. Valid values: MT_QCE (Tencent Cloud service monitoring)
     */
    public $MonitorType;

    /**
     * @var string Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
     */
    public $Namespace;

    /**
     * @param string $Module Value fixed at "monitor"
     * @param string $MonitorType Monitor type filter. Valid values: MT_QCE (Tencent Cloud service monitoring)
     * @param string $Namespace Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
