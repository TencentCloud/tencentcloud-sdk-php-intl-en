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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmAgent request structure.
 *
 * @method string getInstanceId() Obtain Business system id.
 * @method void setInstanceId(string $InstanceId) Set Business system id.
 * @method string getAgentType() Obtain Access method: currently supports access and reporting via skywalking, ot, and ebpf methods. if not specified, ot is used by default.
 * @method void setAgentType(string $AgentType) Set Access method: currently supports access and reporting via skywalking, ot, and ebpf methods. if not specified, ot is used by default.
 * @method string getNetworkMode() Obtain Reporting environment: currently supports pl (private network reporting), public (public network), and inner (self-developed vpc) environment reporting. if not specified, the default is public.
 * @method void setNetworkMode(string $NetworkMode) Set Reporting environment: currently supports pl (private network reporting), public (public network), and inner (self-developed vpc) environment reporting. if not specified, the default is public.
 * @method string getLanguageEnvironment() Obtain Language reporting is now supported for java, golang, php, python, dotnet, nodejs. if not specified, golang is used by default.
 * @method void setLanguageEnvironment(string $LanguageEnvironment) Set Language reporting is now supported for java, golang, php, python, dotnet, nodejs. if not specified, golang is used by default.
 * @method string getReportMethod() Obtain Reporting method, deprecated.
 * @method void setReportMethod(string $ReportMethod) Set Reporting method, deprecated.
 */
class DescribeApmAgentRequest extends AbstractModel
{
    /**
     * @var string Business system id.
     */
    public $InstanceId;

    /**
     * @var string Access method: currently supports access and reporting via skywalking, ot, and ebpf methods. if not specified, ot is used by default.
     */
    public $AgentType;

    /**
     * @var string Reporting environment: currently supports pl (private network reporting), public (public network), and inner (self-developed vpc) environment reporting. if not specified, the default is public.
     */
    public $NetworkMode;

    /**
     * @var string Language reporting is now supported for java, golang, php, python, dotnet, nodejs. if not specified, golang is used by default.
     */
    public $LanguageEnvironment;

    /**
     * @var string Reporting method, deprecated.
     */
    public $ReportMethod;

    /**
     * @param string $InstanceId Business system id.
     * @param string $AgentType Access method: currently supports access and reporting via skywalking, ot, and ebpf methods. if not specified, ot is used by default.
     * @param string $NetworkMode Reporting environment: currently supports pl (private network reporting), public (public network), and inner (self-developed vpc) environment reporting. if not specified, the default is public.
     * @param string $LanguageEnvironment Language reporting is now supported for java, golang, php, python, dotnet, nodejs. if not specified, golang is used by default.
     * @param string $ReportMethod Reporting method, deprecated.
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

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("NetworkMode",$param) and $param["NetworkMode"] !== null) {
            $this->NetworkMode = $param["NetworkMode"];
        }

        if (array_key_exists("LanguageEnvironment",$param) and $param["LanguageEnvironment"] !== null) {
            $this->LanguageEnvironment = $param["LanguageEnvironment"];
        }

        if (array_key_exists("ReportMethod",$param) and $param["ReportMethod"] !== null) {
            $this->ReportMethod = $param["ReportMethod"];
        }
    }
}
