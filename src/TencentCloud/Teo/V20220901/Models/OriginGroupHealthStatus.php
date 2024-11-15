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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin server group health status.
 *
 * @method string getOriginGroupID() Obtain Origin server group ID.
 * @method void setOriginGroupID(string $OriginGroupID) Set Origin server group ID.
 * @method string getOriginGroupName() Obtain Origin server group name.
 * @method void setOriginGroupName(string $OriginGroupName) Set Origin server group name.
 * @method string getOriginType() Obtain Origin server group type. Valid values:
<li>HTTP: HTTP-specific.</li>
<li>GENERAL: general.</li>
 * @method void setOriginType(string $OriginType) Set Origin server group type. Valid values:
<li>HTTP: HTTP-specific.</li>
<li>GENERAL: general.</li>
 * @method string getPriority() Obtain Priority.
 * @method void setPriority(string $Priority) Set Priority.
 * @method array getOriginHealthStatus() Obtain Health status of each origin server in an origin server group.
 * @method void setOriginHealthStatus(array $OriginHealthStatus) Set Health status of each origin server in an origin server group.
 */
class OriginGroupHealthStatus extends AbstractModel
{
    /**
     * @var string Origin server group ID.
     */
    public $OriginGroupID;

    /**
     * @var string Origin server group name.
     */
    public $OriginGroupName;

    /**
     * @var string Origin server group type. Valid values:
<li>HTTP: HTTP-specific.</li>
<li>GENERAL: general.</li>
     */
    public $OriginType;

    /**
     * @var string Priority.
     */
    public $Priority;

    /**
     * @var array Health status of each origin server in an origin server group.
     */
    public $OriginHealthStatus;

    /**
     * @param string $OriginGroupID Origin server group ID.
     * @param string $OriginGroupName Origin server group name.
     * @param string $OriginType Origin server group type. Valid values:
<li>HTTP: HTTP-specific.</li>
<li>GENERAL: general.</li>
     * @param string $Priority Priority.
     * @param array $OriginHealthStatus Health status of each origin server in an origin server group.
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
        if (array_key_exists("OriginGroupID",$param) and $param["OriginGroupID"] !== null) {
            $this->OriginGroupID = $param["OriginGroupID"];
        }

        if (array_key_exists("OriginGroupName",$param) and $param["OriginGroupName"] !== null) {
            $this->OriginGroupName = $param["OriginGroupName"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("OriginHealthStatus",$param) and $param["OriginHealthStatus"] !== null) {
            $this->OriginHealthStatus = [];
            foreach ($param["OriginHealthStatus"] as $key => $value){
                $obj = new OriginHealthStatus();
                $obj->deserialize($value);
                array_push($this->OriginHealthStatus, $obj);
            }
        }
    }
}
