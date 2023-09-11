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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of TCB instances by environment - data structure of an async task for querying associated cloud resources
 *
 * @method TCBEnvironment getEnvironment() Obtain The TCB environment.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironment(TCBEnvironment $Environment) Set The TCB environment.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TCBAccessService getAccessService() Obtain The access service.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessService(TCBAccessService $AccessService) Set The access service.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TCBHostService getHostService() Obtain Whether static hosting is used.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostService(TCBHostService $HostService) Set Whether static hosting is used.	
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TCBEnvironments extends AbstractModel
{
    /**
     * @var TCBEnvironment The TCB environment.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Environment;

    /**
     * @var TCBAccessService The access service.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessService;

    /**
     * @var TCBHostService Whether static hosting is used.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostService;

    /**
     * @param TCBEnvironment $Environment The TCB environment.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TCBAccessService $AccessService The access service.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TCBHostService $HostService Whether static hosting is used.	
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
        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new TCBEnvironment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("AccessService",$param) and $param["AccessService"] !== null) {
            $this->AccessService = new TCBAccessService();
            $this->AccessService->deserialize($param["AccessService"]);
        }

        if (array_key_exists("HostService",$param) and $param["HostService"] !== null) {
            $this->HostService = new TCBHostService();
            $this->HostService->deserialize($param["HostService"]);
        }
    }
}
