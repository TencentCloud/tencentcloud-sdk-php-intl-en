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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchDataEngine request structure.
 *
 * @method string getDataEngineName() Obtain The name of the primary cluster.
 * @method void setDataEngineName(string $DataEngineName) Set The name of the primary cluster.
 * @method boolean getStartStandbyCluster() Obtain Whether to start the standby cluster.
 * @method void setStartStandbyCluster(boolean $StartStandbyCluster) Set Whether to start the standby cluster.
 */
class SwitchDataEngineRequest extends AbstractModel
{
    /**
     * @var string The name of the primary cluster.
     */
    public $DataEngineName;

    /**
     * @var boolean Whether to start the standby cluster.
     */
    public $StartStandbyCluster;

    /**
     * @param string $DataEngineName The name of the primary cluster.
     * @param boolean $StartStandbyCluster Whether to start the standby cluster.
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("StartStandbyCluster",$param) and $param["StartStandbyCluster"] !== null) {
            $this->StartStandbyCluster = $param["StartStandbyCluster"];
        }
    }
}
