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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asynchronous Task Information
 *
 * @method string getApiName() Obtain Operation interface name.
 * @method void setApiName(string $ApiName) Set Operation interface name.
 * @method integer getFlowId() Obtain Task flow Id
 * @method void setFlowId(integer $FlowId) Set Task flow Id
 * @method string getRequestId() Obtain Task request Id.
 * @method void setRequestId(string $RequestId) Set Task request Id.
 * @method array getResourceIds() Obtain Resource ID list.
 * @method void setResourceIds(array $ResourceIds) Set Resource ID list.
 * @method string getStatus() Obtain Task status. Valid values: `Processing`, `Succeeded`, `Failed`.
 * @method void setStatus(string $Status) Set Task status. Valid values: `Processing`, `Succeeded`, `Failed`.
 */
class Job extends AbstractModel
{
    /**
     * @var string Operation interface name.
     */
    public $ApiName;

    /**
     * @var integer Task flow Id
     */
    public $FlowId;

    /**
     * @var string Task request Id.
     */
    public $RequestId;

    /**
     * @var array Resource ID list.
     */
    public $ResourceIds;

    /**
     * @var string Task status. Valid values: `Processing`, `Succeeded`, `Failed`.
     */
    public $Status;

    /**
     * @param string $ApiName Operation interface name.
     * @param integer $FlowId Task flow Id
     * @param string $RequestId Task request Id.
     * @param array $ResourceIds Resource ID list.
     * @param string $Status Task status. Valid values: `Processing`, `Succeeded`, `Failed`.
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
        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
