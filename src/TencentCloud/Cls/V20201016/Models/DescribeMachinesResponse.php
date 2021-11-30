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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachines response structure.
 *
 * @method array getMachines() Obtain Group of machine status information
 * @method void setMachines(array $Machines) Set Group of machine status information
 * @method integer getAutoUpdate() Obtain Whether to enable the automatic update feature for the machine group
 * @method void setAutoUpdate(integer $AutoUpdate) Set Whether to enable the automatic update feature for the machine group
 * @method string getUpdateStartTime() Obtain Preset start time of automatic update of machine group
 * @method void setUpdateStartTime(string $UpdateStartTime) Set Preset start time of automatic update of machine group
 * @method string getUpdateEndTime() Obtain Preset end time of automatic update of machine group
 * @method void setUpdateEndTime(string $UpdateEndTime) Set Preset end time of automatic update of machine group
 * @method string getLatestAgentVersion() Obtain Latest LogListener version available to the current user
 * @method void setLatestAgentVersion(string $LatestAgentVersion) Set Latest LogListener version available to the current user
 * @method boolean getServiceLogging() Obtain Whether to enable the service log
 * @method void setServiceLogging(boolean $ServiceLogging) Set Whether to enable the service log
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeMachinesResponse extends AbstractModel
{
    /**
     * @var array Group of machine status information
     */
    public $Machines;

    /**
     * @var integer Whether to enable the automatic update feature for the machine group
     */
    public $AutoUpdate;

    /**
     * @var string Preset start time of automatic update of machine group
     */
    public $UpdateStartTime;

    /**
     * @var string Preset end time of automatic update of machine group
     */
    public $UpdateEndTime;

    /**
     * @var string Latest LogListener version available to the current user
     */
    public $LatestAgentVersion;

    /**
     * @var boolean Whether to enable the service log
     */
    public $ServiceLogging;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Machines Group of machine status information
     * @param integer $AutoUpdate Whether to enable the automatic update feature for the machine group
     * @param string $UpdateStartTime Preset start time of automatic update of machine group
     * @param string $UpdateEndTime Preset end time of automatic update of machine group
     * @param string $LatestAgentVersion Latest LogListener version available to the current user
     * @param boolean $ServiceLogging Whether to enable the service log
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Machines",$param) and $param["Machines"] !== null) {
            $this->Machines = [];
            foreach ($param["Machines"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->Machines, $obj);
            }
        }

        if (array_key_exists("AutoUpdate",$param) and $param["AutoUpdate"] !== null) {
            $this->AutoUpdate = $param["AutoUpdate"];
        }

        if (array_key_exists("UpdateStartTime",$param) and $param["UpdateStartTime"] !== null) {
            $this->UpdateStartTime = $param["UpdateStartTime"];
        }

        if (array_key_exists("UpdateEndTime",$param) and $param["UpdateEndTime"] !== null) {
            $this->UpdateEndTime = $param["UpdateEndTime"];
        }

        if (array_key_exists("LatestAgentVersion",$param) and $param["LatestAgentVersion"] !== null) {
            $this->LatestAgentVersion = $param["LatestAgentVersion"];
        }

        if (array_key_exists("ServiceLogging",$param) and $param["ServiceLogging"] !== null) {
            $this->ServiceLogging = $param["ServiceLogging"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}