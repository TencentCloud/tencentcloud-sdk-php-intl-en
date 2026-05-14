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
 * Topology graph edge node
 *
 * @method float getErrRate() Obtain Error rate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrRate(float $ErrRate) Set Error rate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKind() Obtain Node type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKind(string $Kind) Set Node type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Node name
 * @method void setName(string $Name) Set Node name
 * @method float getWeight() Obtain Node weight
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(float $Weight) Set Node weight
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColor() Obtain Node color
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColor(string $Color) Set Node color
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getDuration() Obtain response time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(float $Duration) Set response time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getQps() Obtain throughput
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQps(float $Qps) Set throughput
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Node type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Node type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getId() Obtain Node ID
 * @method void setId(string $Id) Set Node ID
 * @method string getSize() Obtain Node size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSize(string $Size) Set Node size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsModule() Obtain Indicate whether the node is a component
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsModule(boolean $IsModule) Set Indicate whether the node is a component
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Position getPosition() Obtain Node location information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPosition(Position $Position) Set Node location information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Node tags
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Node tags
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCanDrillDown() Obtain Whether the node supports drill-down.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCanDrillDown(boolean $CanDrillDown) Set Whether the node supports drill-down.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Resource getResource() Obtain Resource layer information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResource(Resource $Resource) Set Resource layer information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeView() Obtain Name of the topology node view.
 * @method void setNodeView(string $NodeView) Set Name of the topology node view.
 * @method float getConsumerDuration() Obtain Message consumption time of the MQ consumer, in ms.
 * @method void setConsumerDuration(float $ConsumerDuration) Set Message consumption time of the MQ consumer, in ms.
 * @method float getConsumerErrRate() Obtain Error rate of the MQ consumers, in %.
 * @method void setConsumerErrRate(float $ConsumerErrRate) Set Error rate of the MQ consumers, in %.
 * @method float getConsumerQps() Obtain Throughput of the message queue (MQ) consumer.
 * @method void setConsumerQps(float $ConsumerQps) Set Throughput of the message queue (MQ) consumer.
 * @method string getServiceId() Obtain Application ID.
 * @method void setServiceId(string $ServiceId) Set Application ID.
 */
class TopologyNode extends AbstractModel
{
    /**
     * @var float Error rate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrRate;

    /**
     * @var string Node type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Kind;

    /**
     * @var string Node name
     */
    public $Name;

    /**
     * @var float Node weight
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var string Node color
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Color;

    /**
     * @var float response time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var float throughput
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Qps;

    /**
     * @var string Node type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Node ID
     */
    public $Id;

    /**
     * @var string Node size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var boolean Indicate whether the node is a component
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsModule;

    /**
     * @var Position Node location information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Position;

    /**
     * @var array Node tags
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var boolean Whether the node supports drill-down.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CanDrillDown;

    /**
     * @var Resource Resource layer information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resource;

    /**
     * @var string Name of the topology node view.
     */
    public $NodeView;

    /**
     * @var float Message consumption time of the MQ consumer, in ms.
     */
    public $ConsumerDuration;

    /**
     * @var float Error rate of the MQ consumers, in %.
     */
    public $ConsumerErrRate;

    /**
     * @var float Throughput of the message queue (MQ) consumer.
     */
    public $ConsumerQps;

    /**
     * @var string Application ID.
     */
    public $ServiceId;

    /**
     * @param float $ErrRate Error rate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Kind Node type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Node name
     * @param float $Weight Node weight
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Color Node color
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Duration response time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Qps throughput
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Node type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Id Node ID
     * @param string $Size Node size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsModule Indicate whether the node is a component
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Position $Position Node location information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Node tags
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CanDrillDown Whether the node supports drill-down.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Resource $Resource Resource layer information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeView Name of the topology node view.
     * @param float $ConsumerDuration Message consumption time of the MQ consumer, in ms.
     * @param float $ConsumerErrRate Error rate of the MQ consumers, in %.
     * @param float $ConsumerQps Throughput of the message queue (MQ) consumer.
     * @param string $ServiceId Application ID.
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
        if (array_key_exists("ErrRate",$param) and $param["ErrRate"] !== null) {
            $this->ErrRate = $param["ErrRate"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("IsModule",$param) and $param["IsModule"] !== null) {
            $this->IsModule = $param["IsModule"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = new Position();
            $this->Position->deserialize($param["Position"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CanDrillDown",$param) and $param["CanDrillDown"] !== null) {
            $this->CanDrillDown = $param["CanDrillDown"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("NodeView",$param) and $param["NodeView"] !== null) {
            $this->NodeView = $param["NodeView"];
        }

        if (array_key_exists("ConsumerDuration",$param) and $param["ConsumerDuration"] !== null) {
            $this->ConsumerDuration = $param["ConsumerDuration"];
        }

        if (array_key_exists("ConsumerErrRate",$param) and $param["ConsumerErrRate"] !== null) {
            $this->ConsumerErrRate = $param["ConsumerErrRate"];
        }

        if (array_key_exists("ConsumerQps",$param) and $param["ConsumerQps"] !== null) {
            $this->ConsumerQps = $param["ConsumerQps"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
