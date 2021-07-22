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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Protection threshold configuration information
 *
 * @method string getDDoSLevel() Obtain DDoS protection level:
`low`: loose protection
`middle`: medium protection
`high`: strict protection
]
 * @method void setDDoSLevel(string $DDoSLevel) Set DDoS protection level:
`low`: loose protection
`middle`: medium protection
`high`: strict protection
]
 * @method integer getDDoSThreshold() Obtain DDoS cleansing threshold (in Mbps)
 * @method void setDDoSThreshold(integer $DDoSThreshold) Set DDoS cleansing threshold (in Mbps)
 * @method string getDDoSAI() Obtain DDoS AI protection switch:
`on`: enabled
`off`: disabled
]
 * @method void setDDoSAI(string $DDoSAI) Set DDoS AI protection switch:
`on`: enabled
`off`: disabled
]
 * @method integer getCCEnable() Obtain CC cleansing switch
`0`: disabled
`1`: enabled
]
 * @method void setCCEnable(integer $CCEnable) Set CC cleansing switch
`0`: disabled
`1`: enabled
]
 * @method integer getCCThreshold() Obtain CC cleansing threshold (in QPS)
 * @method void setCCThreshold(integer $CCThreshold) Set CC cleansing threshold (in QPS)
 * @method array getInstanceDetailList() Obtain Anti-DDoS instance configured
 * @method void setInstanceDetailList(array $InstanceDetailList) Set Anti-DDoS instance configured
 * @method array getListenerCcThresholdList() Obtain Domain name and protocol protection thresholds
 * @method void setListenerCcThresholdList(array $ListenerCcThresholdList) Set Domain name and protocol protection thresholds
 */
class ProtectThresholdRelation extends AbstractModel
{
    /**
     * @var string DDoS protection level:
`low`: loose protection
`middle`: medium protection
`high`: strict protection
]
     */
    public $DDoSLevel;

    /**
     * @var integer DDoS cleansing threshold (in Mbps)
     */
    public $DDoSThreshold;

    /**
     * @var string DDoS AI protection switch:
`on`: enabled
`off`: disabled
]
     */
    public $DDoSAI;

    /**
     * @var integer CC cleansing switch
`0`: disabled
`1`: enabled
]
     */
    public $CCEnable;

    /**
     * @var integer CC cleansing threshold (in QPS)
     */
    public $CCThreshold;

    /**
     * @var array Anti-DDoS instance configured
     */
    public $InstanceDetailList;

    /**
     * @var array Domain name and protocol protection thresholds
     */
    public $ListenerCcThresholdList;

    /**
     * @param string $DDoSLevel DDoS protection level:
`low`: loose protection
`middle`: medium protection
`high`: strict protection
]
     * @param integer $DDoSThreshold DDoS cleansing threshold (in Mbps)
     * @param string $DDoSAI DDoS AI protection switch:
`on`: enabled
`off`: disabled
]
     * @param integer $CCEnable CC cleansing switch
`0`: disabled
`1`: enabled
]
     * @param integer $CCThreshold CC cleansing threshold (in QPS)
     * @param array $InstanceDetailList Anti-DDoS instance configured
     * @param array $ListenerCcThresholdList Domain name and protocol protection thresholds
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
        if (array_key_exists("DDoSLevel",$param) and $param["DDoSLevel"] !== null) {
            $this->DDoSLevel = $param["DDoSLevel"];
        }

        if (array_key_exists("DDoSThreshold",$param) and $param["DDoSThreshold"] !== null) {
            $this->DDoSThreshold = $param["DDoSThreshold"];
        }

        if (array_key_exists("DDoSAI",$param) and $param["DDoSAI"] !== null) {
            $this->DDoSAI = $param["DDoSAI"];
        }

        if (array_key_exists("CCEnable",$param) and $param["CCEnable"] !== null) {
            $this->CCEnable = $param["CCEnable"];
        }

        if (array_key_exists("CCThreshold",$param) and $param["CCThreshold"] !== null) {
            $this->CCThreshold = $param["CCThreshold"];
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }

        if (array_key_exists("ListenerCcThresholdList",$param) and $param["ListenerCcThresholdList"] !== null) {
            $this->ListenerCcThresholdList = [];
            foreach ($param["ListenerCcThresholdList"] as $key => $value){
                $obj = new ListenerCcThreholdConfig();
                $obj->deserialize($value);
                array_push($this->ListenerCcThresholdList, $obj);
            }
        }
    }
}
