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
 * ISP statistics
 *
 * @method string getProviderName() Obtain ISP name
 * @method void setProviderName(string $ProviderName) Set ISP name
 * @method integer getProviderNodeNum() Obtain Number of nodes
 * @method void setProviderNodeNum(integer $ProviderNodeNum) Set Number of nodes
 * @method integer getProvederInstanceNum() Obtain Number of instances
 * @method void setProvederInstanceNum(integer $ProvederInstanceNum) Set Number of instances
 * @method array getZoneInstanceInfoSet() Obtain Zone instance information structure array
 * @method void setZoneInstanceInfoSet(array $ZoneInstanceInfoSet) Set Zone instance information structure array
 */
class ISPCounter extends AbstractModel
{
    /**
     * @var string ISP name
     */
    public $ProviderName;

    /**
     * @var integer Number of nodes
     */
    public $ProviderNodeNum;

    /**
     * @var integer Number of instances
     */
    public $ProvederInstanceNum;

    /**
     * @var array Zone instance information structure array
     */
    public $ZoneInstanceInfoSet;

    /**
     * @param string $ProviderName ISP name
     * @param integer $ProviderNodeNum Number of nodes
     * @param integer $ProvederInstanceNum Number of instances
     * @param array $ZoneInstanceInfoSet Zone instance information structure array
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
        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("ProviderNodeNum",$param) and $param["ProviderNodeNum"] !== null) {
            $this->ProviderNodeNum = $param["ProviderNodeNum"];
        }

        if (array_key_exists("ProvederInstanceNum",$param) and $param["ProvederInstanceNum"] !== null) {
            $this->ProvederInstanceNum = $param["ProvederInstanceNum"];
        }

        if (array_key_exists("ZoneInstanceInfoSet",$param) and $param["ZoneInstanceInfoSet"] !== null) {
            $this->ZoneInstanceInfoSet = [];
            foreach ($param["ZoneInstanceInfoSet"] as $key => $value){
                $obj = new ZoneInstanceInfo();
                $obj->deserialize($value);
                array_push($this->ZoneInstanceInfoSet, $obj);
            }
        }
    }
}
