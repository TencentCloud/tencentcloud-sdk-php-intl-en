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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Topology edge definition
 *
 * @method string getSource() Obtain Source node
 * @method void setSource(string $Source) Set Source node
 * @method string getId() Obtain Edge ID
 * @method void setId(string $Id) Set Edge ID
 * @method float getWeight() Obtain Edge weight
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(float $Weight) Set Edge weight
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTarget() Obtain Target node
 * @method void setTarget(string $Target) Set Target node
 * @method float getDuration() Obtain response time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(float $Duration) Set response time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getErrRate() Obtain Error rate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrRate(float $ErrRate) Set Error rate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getQps() Obtain throughput
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQps(float $Qps) Set throughput
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Edge type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Edge type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColor() Obtain Edge color
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColor(string $Color) Set Edge color
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSqlRequestCount() Obtain SQL call count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSqlRequestCount(float $SqlRequestCount) Set SQL call count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSqlErrorRequestCount() Obtain SQL call error count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSqlErrorRequestCount(float $SqlErrorRequestCount) Set SQL call error count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceComp() Obtain Source node type on the edge of the topology diagram. Application/MQ/DB.
 * @method void setSourceComp(string $SourceComp) Set Source node type on the edge of the topology diagram. Application/MQ/DB.
 * @method string getTargetComp() Obtain Target node type on the edge of the topology diagram. Application/MQ/DB.
 * @method void setTargetComp(string $TargetComp) Set Target node type on the edge of the topology diagram. Application/MQ/DB.
 */
class TopologyEdgeNew extends AbstractModel
{
    /**
     * @var string Source node
     */
    public $Source;

    /**
     * @var string Edge ID
     */
    public $Id;

    /**
     * @var float Edge weight
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var string Target node
     */
    public $Target;

    /**
     * @var float response time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var float Error rate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrRate;

    /**
     * @var float throughput
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Qps;

    /**
     * @var string Edge type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Edge color
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Color;

    /**
     * @var float SQL call count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SqlRequestCount;

    /**
     * @var float SQL call error count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SqlErrorRequestCount;

    /**
     * @var string Source node type on the edge of the topology diagram. Application/MQ/DB.
     */
    public $SourceComp;

    /**
     * @var string Target node type on the edge of the topology diagram. Application/MQ/DB.
     */
    public $TargetComp;

    /**
     * @param string $Source Source node
     * @param string $Id Edge ID
     * @param float $Weight Edge weight
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Target Target node
     * @param float $Duration response time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ErrRate Error rate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Qps throughput
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Edge type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Color Edge color
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $SqlRequestCount SQL call count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $SqlErrorRequestCount SQL call error count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceComp Source node type on the edge of the topology diagram. Application/MQ/DB.
     * @param string $TargetComp Target node type on the edge of the topology diagram. Application/MQ/DB.
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ErrRate",$param) and $param["ErrRate"] !== null) {
            $this->ErrRate = $param["ErrRate"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("SqlRequestCount",$param) and $param["SqlRequestCount"] !== null) {
            $this->SqlRequestCount = $param["SqlRequestCount"];
        }

        if (array_key_exists("SqlErrorRequestCount",$param) and $param["SqlErrorRequestCount"] !== null) {
            $this->SqlErrorRequestCount = $param["SqlErrorRequestCount"];
        }

        if (array_key_exists("SourceComp",$param) and $param["SourceComp"] !== null) {
            $this->SourceComp = $param["SourceComp"];
        }

        if (array_key_exists("TargetComp",$param) and $param["TargetComp"] !== null) {
            $this->TargetComp = $param["TargetComp"];
        }
    }
}
