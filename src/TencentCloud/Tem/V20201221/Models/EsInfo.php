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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Auto scaling configuration
 *
 * @method integer getMinAliveInstances() Obtain Minimum number of instances
 * @method void setMinAliveInstances(integer $MinAliveInstances) Set Minimum number of instances
 * @method integer getMaxAliveInstances() Obtain Maximum number of instances
 * @method void setMaxAliveInstances(integer $MaxAliveInstances) Set Maximum number of instances
 * @method integer getEsStrategy() Obtain Auto scaling policy. 1: CPU; 2: memory
 * @method void setEsStrategy(integer $EsStrategy) Set Auto scaling policy. 1: CPU; 2: memory
 * @method integer getThreshold() Obtain Auto scaling condition value
 * @method void setThreshold(integer $Threshold) Set Auto scaling condition value
 * @method string getVersionId() Obtain Version ID
 * @method void setVersionId(string $VersionId) Set Version ID
 */
class EsInfo extends AbstractModel
{
    /**
     * @var integer Minimum number of instances
     */
    public $MinAliveInstances;

    /**
     * @var integer Maximum number of instances
     */
    public $MaxAliveInstances;

    /**
     * @var integer Auto scaling policy. 1: CPU; 2: memory
     */
    public $EsStrategy;

    /**
     * @var integer Auto scaling condition value
     */
    public $Threshold;

    /**
     * @var string Version ID
     */
    public $VersionId;

    /**
     * @param integer $MinAliveInstances Minimum number of instances
     * @param integer $MaxAliveInstances Maximum number of instances
     * @param integer $EsStrategy Auto scaling policy. 1: CPU; 2: memory
     * @param integer $Threshold Auto scaling condition value
     * @param string $VersionId Version ID
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
        if (array_key_exists("MinAliveInstances",$param) and $param["MinAliveInstances"] !== null) {
            $this->MinAliveInstances = $param["MinAliveInstances"];
        }

        if (array_key_exists("MaxAliveInstances",$param) and $param["MaxAliveInstances"] !== null) {
            $this->MaxAliveInstances = $param["MaxAliveInstances"];
        }

        if (array_key_exists("EsStrategy",$param) and $param["EsStrategy"] !== null) {
            $this->EsStrategy = $param["EsStrategy"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
