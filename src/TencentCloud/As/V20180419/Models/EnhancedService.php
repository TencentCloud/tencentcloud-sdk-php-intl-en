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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * This describes the conditions of enhancement services for the instance and their settings, such as the Agent of Cloud Security or Cloud Monitor.
 *
 * @method RunSecurityServiceEnabled getSecurityService() Obtain Enables the Cloud Security service. If this parameter is not specified, the Cloud Security service will be enabled by default.
 * @method void setSecurityService(RunSecurityServiceEnabled $SecurityService) Set Enables the Cloud Security service. If this parameter is not specified, the Cloud Security service will be enabled by default.
 * @method RunMonitorServiceEnabled getMonitorService() Obtain Enables the Cloud Monitor service. If this parameter is not specified, the Cloud Monitor service will be enabled by default.
 * @method void setMonitorService(RunMonitorServiceEnabled $MonitorService) Set Enables the Cloud Monitor service. If this parameter is not specified, the Cloud Monitor service will be enabled by default.
 */
class EnhancedService extends AbstractModel
{
    /**
     * @var RunSecurityServiceEnabled Enables the Cloud Security service. If this parameter is not specified, the Cloud Security service will be enabled by default.
     */
    public $SecurityService;

    /**
     * @var RunMonitorServiceEnabled Enables the Cloud Monitor service. If this parameter is not specified, the Cloud Monitor service will be enabled by default.
     */
    public $MonitorService;

    /**
     * @param RunSecurityServiceEnabled $SecurityService Enables the Cloud Security service. If this parameter is not specified, the Cloud Security service will be enabled by default.
     * @param RunMonitorServiceEnabled $MonitorService Enables the Cloud Monitor service. If this parameter is not specified, the Cloud Monitor service will be enabled by default.
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
    }
}
