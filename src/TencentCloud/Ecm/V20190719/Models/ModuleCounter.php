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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node statistics
 *
 * @method array getISPCounterSet() Obtain ISP statistics list
 * @method void setISPCounterSet(array $ISPCounterSet) Set ISP statistics list
 * @method integer getProvinceNum() Obtain Number of provinces/states
 * @method void setProvinceNum(integer $ProvinceNum) Set Number of provinces/states
 * @method integer getCityNum() Obtain Number of cities
 * @method void setCityNum(integer $CityNum) Set Number of cities
 * @method integer getNodeNum() Obtain Number of nodes
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes
 * @method integer getInstanceNum() Obtain Number of instances
 * @method void setInstanceNum(integer $InstanceNum) Set Number of instances
 */
class ModuleCounter extends AbstractModel
{
    /**
     * @var array ISP statistics list
     */
    public $ISPCounterSet;

    /**
     * @var integer Number of provinces/states
     */
    public $ProvinceNum;

    /**
     * @var integer Number of cities
     */
    public $CityNum;

    /**
     * @var integer Number of nodes
     */
    public $NodeNum;

    /**
     * @var integer Number of instances
     */
    public $InstanceNum;

    /**
     * @param array $ISPCounterSet ISP statistics list
     * @param integer $ProvinceNum Number of provinces/states
     * @param integer $CityNum Number of cities
     * @param integer $NodeNum Number of nodes
     * @param integer $InstanceNum Number of instances
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
        if (array_key_exists("ISPCounterSet",$param) and $param["ISPCounterSet"] !== null) {
            $this->ISPCounterSet = [];
            foreach ($param["ISPCounterSet"] as $key => $value){
                $obj = new ISPCounter();
                $obj->deserialize($value);
                array_push($this->ISPCounterSet, $obj);
            }
        }

        if (array_key_exists("ProvinceNum",$param) and $param["ProvinceNum"] !== null) {
            $this->ProvinceNum = $param["ProvinceNum"];
        }

        if (array_key_exists("CityNum",$param) and $param["CityNum"] !== null) {
            $this->CityNum = $param["CityNum"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }
    }
}
