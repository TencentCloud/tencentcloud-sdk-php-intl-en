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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel output statistics.
 *
 * @method integer getTimestamp() Obtain Timestamp.
In seconds, indicating data time.
 * @method void setTimestamp(integer $Timestamp) Set Timestamp.
In seconds, indicating data time.
 * @method integer getNetworkOut() Obtain Output bandwidth in bps.
 * @method void setNetworkOut(integer $NetworkOut) Set Output bandwidth in bps.
 * @method integer getNetworkValid() Obtain Is the Network parameter valid? 0 indicates invalid, 1 indicates valid
 * @method void setNetworkValid(integer $NetworkValid) Set Is the Network parameter valid? 0 indicates invalid, 1 indicates valid
 */
class PipelineOutputStatistics extends AbstractModel
{
    /**
     * @var integer Timestamp.
In seconds, indicating data time.
     */
    public $Timestamp;

    /**
     * @var integer Output bandwidth in bps.
     */
    public $NetworkOut;

    /**
     * @var integer Is the Network parameter valid? 0 indicates invalid, 1 indicates valid
     */
    public $NetworkValid;

    /**
     * @param integer $Timestamp Timestamp.
In seconds, indicating data time.
     * @param integer $NetworkOut Output bandwidth in bps.
     * @param integer $NetworkValid Is the Network parameter valid? 0 indicates invalid, 1 indicates valid
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("NetworkOut",$param) and $param["NetworkOut"] !== null) {
            $this->NetworkOut = $param["NetworkOut"];
        }

        if (array_key_exists("NetworkValid",$param) and $param["NetworkValid"] !== null) {
            $this->NetworkValid = $param["NetworkValid"];
        }
    }
}
