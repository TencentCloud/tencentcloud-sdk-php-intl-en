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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host metrics collection configuration
 *
 * @method string getConfigId() Obtain Collection Configuration id
 * @method void setConfigId(string $ConfigId) Set Collection Configuration id
 * @method string getName() Obtain Collection configuration name
 * @method void setName(string $Name) Set Collection configuration name
 * @method integer getInterval() Obtain Collection frequency, in milliseconds
 * @method void setInterval(integer $Interval) Set Collection frequency, in milliseconds
 * @method array getHostMetricItems() Obtain Collection item
 * @method void setHostMetricItems(array $HostMetricItems) Set Collection item
 * @method array getMachineGroupIds() Obtain Machine group id list
 * @method void setMachineGroupIds(array $MachineGroupIds) Set Machine group id list
 * @method integer getCreateTime() Obtain Creation time.
 * @method void setCreateTime(integer $CreateTime) Set Creation time.
 * @method integer getUpdateTime() Obtain Modification time.
 * @method void setUpdateTime(integer $UpdateTime) Set Modification time.
 */
class HostMetricConfig extends AbstractModel
{
    /**
     * @var string Collection Configuration id
     */
    public $ConfigId;

    /**
     * @var string Collection configuration name
     */
    public $Name;

    /**
     * @var integer Collection frequency, in milliseconds
     */
    public $Interval;

    /**
     * @var array Collection item
     */
    public $HostMetricItems;

    /**
     * @var array Machine group id list
     */
    public $MachineGroupIds;

    /**
     * @var integer Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Modification time.
     */
    public $UpdateTime;

    /**
     * @param string $ConfigId Collection Configuration id
     * @param string $Name Collection configuration name
     * @param integer $Interval Collection frequency, in milliseconds
     * @param array $HostMetricItems Collection item
     * @param array $MachineGroupIds Machine group id list
     * @param integer $CreateTime Creation time.
     * @param integer $UpdateTime Modification time.
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("HostMetricItems",$param) and $param["HostMetricItems"] !== null) {
            $this->HostMetricItems = [];
            foreach ($param["HostMetricItems"] as $key => $value){
                $obj = new HostMetricItem();
                $obj->deserialize($value);
                array_push($this->HostMetricItems, $obj);
            }
        }

        if (array_key_exists("MachineGroupIds",$param) and $param["MachineGroupIds"] !== null) {
            $this->MachineGroupIds = $param["MachineGroupIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
