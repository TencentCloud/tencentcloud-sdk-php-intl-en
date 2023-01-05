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
 * Describes the configuration of enhanced services, such as Cloud Security and Cloud Monitor.
 *
 * @method RunSecurityServiceEnabled getSecurityService() Obtain Enables cloud security service. If this parameter is not specified, the cloud security service will be enabled by default.
 * @method void setSecurityService(RunSecurityServiceEnabled $SecurityService) Set Enables cloud security service. If this parameter is not specified, the cloud security service will be enabled by default.
 * @method RunMonitorServiceEnabled getMonitorService() Obtain Enables cloud monitor service. If this parameter is not specified, the cloud monitor service will be enabled by default.
 * @method void setMonitorService(RunMonitorServiceEnabled $MonitorService) Set Enables cloud monitor service. If this parameter is not specified, the cloud monitor service will be enabled by default.
 * @method RunAutomationServiceEnabled getAutomationService() Obtain Whether to enable the TAT service. If this parameter is not specified, the TAT service is enabled for public images and disabled for other images by default.
 * @method void setAutomationService(RunAutomationServiceEnabled $AutomationService) Set Whether to enable the TAT service. If this parameter is not specified, the TAT service is enabled for public images and disabled for other images by default.
 */
class EnhancedService extends AbstractModel
{
    /**
     * @var RunSecurityServiceEnabled Enables cloud security service. If this parameter is not specified, the cloud security service will be enabled by default.
     */
    public $SecurityService;

    /**
     * @var RunMonitorServiceEnabled Enables cloud monitor service. If this parameter is not specified, the cloud monitor service will be enabled by default.
     */
    public $MonitorService;

    /**
     * @var RunAutomationServiceEnabled Whether to enable the TAT service. If this parameter is not specified, the TAT service is enabled for public images and disabled for other images by default.
     */
    public $AutomationService;

    /**
     * @param RunSecurityServiceEnabled $SecurityService Enables cloud security service. If this parameter is not specified, the cloud security service will be enabled by default.
     * @param RunMonitorServiceEnabled $MonitorService Enables cloud monitor service. If this parameter is not specified, the cloud monitor service will be enabled by default.
     * @param RunAutomationServiceEnabled $AutomationService Whether to enable the TAT service. If this parameter is not specified, the TAT service is enabled for public images and disabled for other images by default.
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
        if (array_key_exists("SecurityService",$param) and $param["SecurityService"] !== null) {
            $this->SecurityService = new RunSecurityServiceEnabled();
            $this->SecurityService->deserialize($param["SecurityService"]);
        }

        if (array_key_exists("MonitorService",$param) and $param["MonitorService"] !== null) {
            $this->MonitorService = new RunMonitorServiceEnabled();
            $this->MonitorService->deserialize($param["MonitorService"]);
        }

        if (array_key_exists("AutomationService",$param) and $param["AutomationService"] !== null) {
            $this->AutomationService = new RunAutomationServiceEnabled();
            $this->AutomationService->deserialize($param["AutomationService"]);
        }
    }
}
