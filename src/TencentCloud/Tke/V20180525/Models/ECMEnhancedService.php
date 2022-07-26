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
 * ECM enhanced services
 *
 * @method ECMRunMonitorServiceEnabled getSecurityService() Obtain Whether Cloud Monitoring is enabled
 * @method void setSecurityService(ECMRunMonitorServiceEnabled $SecurityService) Set Whether Cloud Monitoring is enabled
 * @method ECMRunSecurityServiceEnabled getMonitorService() Obtain Whether Cloud Workload Protection is enabled
 * @method void setMonitorService(ECMRunSecurityServiceEnabled $MonitorService) Set Whether Cloud Workload Protection is enabled
 */
class ECMEnhancedService extends AbstractModel
{
    /**
     * @var ECMRunMonitorServiceEnabled Whether Cloud Monitoring is enabled
     */
    public $SecurityService;

    /**
     * @var ECMRunSecurityServiceEnabled Whether Cloud Workload Protection is enabled
     */
    public $MonitorService;

    /**
     * @param ECMRunMonitorServiceEnabled $SecurityService Whether Cloud Monitoring is enabled
     * @param ECMRunSecurityServiceEnabled $MonitorService Whether Cloud Workload Protection is enabled
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
            $this->SecurityService = new ECMRunMonitorServiceEnabled();
            $this->SecurityService->deserialize($param["SecurityService"]);
        }

        if (array_key_exists("MonitorService",$param) and $param["MonitorService"] !== null) {
            $this->MonitorService = new ECMRunSecurityServiceEnabled();
            $this->MonitorService->deserialize($param["MonitorService"]);
        }
    }
}
