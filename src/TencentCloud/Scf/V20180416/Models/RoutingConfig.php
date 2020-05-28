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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Version routing configuration of alias
 *
 * @method array getAdditionalVersionWeights() Obtain Additional version with random weight-based routing
 * @method void setAdditionalVersionWeights(array $AdditionalVersionWeights) Set Additional version with random weight-based routing
 * @method array getAddtionVersionMatchs() Obtain Additional version with rule-based routing
 * @method void setAddtionVersionMatchs(array $AddtionVersionMatchs) Set Additional version with rule-based routing
 */
class RoutingConfig extends AbstractModel
{
    /**
     * @var array Additional version with random weight-based routing
     */
    public $AdditionalVersionWeights;

    /**
     * @var array Additional version with rule-based routing
     */
    public $AddtionVersionMatchs;

    /**
     * @param array $AdditionalVersionWeights Additional version with random weight-based routing
     * @param array $AddtionVersionMatchs Additional version with rule-based routing
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
        if (array_key_exists("AdditionalVersionWeights",$param) and $param["AdditionalVersionWeights"] !== null) {
            $this->AdditionalVersionWeights = [];
            foreach ($param["AdditionalVersionWeights"] as $key => $value){
                $obj = new VersionWeight();
                $obj->deserialize($value);
                array_push($this->AdditionalVersionWeights, $obj);
            }
        }

        if (array_key_exists("AddtionVersionMatchs",$param) and $param["AddtionVersionMatchs"] !== null) {
            $this->AddtionVersionMatchs = [];
            foreach ($param["AddtionVersionMatchs"] as $key => $value){
                $obj = new VersionMatch();
                $obj->deserialize($value);
                array_push($this->AddtionVersionMatchs, $obj);
            }
        }
    }
}
