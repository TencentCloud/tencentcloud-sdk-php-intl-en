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
 * DescribeAlarmEvents request structure.
 *
 * @method string getModule() Obtain Module name, which is fixed at "monitor"
 * @method void setModule(string $Module) Set Module name, which is fixed at "monitor"
 * @method string getNamespace() Obtain Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
 * @method void setNamespace(string $Namespace) Set Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
 * @method string getMonitorType() Obtain Monitoring type, such as `MT_QCE`, which is set to default.
 * @method void setMonitorType(string $MonitorType) Set Monitoring type, such as `MT_QCE`, which is set to default.
 */
class DescribeAlarmEventsRequest extends AbstractModel
{
    /**
     * @var string Module name, which is fixed at "monitor"
     */
    public $Module;

    /**
     * @var string Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
     */
    public $Namespace;

    /**
     * @var string Monitoring type, such as `MT_QCE`, which is set to default.
     */
    public $MonitorType;

    /**
     * @param string $Module Module name, which is fixed at "monitor"
     * @param string $Namespace Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
     * @param string $MonitorType Monitoring type, such as `MT_QCE`, which is set to default.
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }
    }
}
