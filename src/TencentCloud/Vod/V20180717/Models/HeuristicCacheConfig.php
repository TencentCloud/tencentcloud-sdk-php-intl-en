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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getHeuristicCacheTimeSwitch() Obtain 
 * @method void setHeuristicCacheTimeSwitch(string $HeuristicCacheTimeSwitch) Set 
 * @method integer getHeuristicCacheTime() Obtain 
 * @method void setHeuristicCacheTime(integer $HeuristicCacheTime) Set 
 */
class HeuristicCacheConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $HeuristicCacheTimeSwitch;

    /**
     * @var integer 
     */
    public $HeuristicCacheTime;

    /**
     * @param string $HeuristicCacheTimeSwitch 
     * @param integer $HeuristicCacheTime 
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
        if (array_key_exists("HeuristicCacheTimeSwitch",$param) and $param["HeuristicCacheTimeSwitch"] !== null) {
            $this->HeuristicCacheTimeSwitch = $param["HeuristicCacheTimeSwitch"];
        }

        if (array_key_exists("HeuristicCacheTime",$param) and $param["HeuristicCacheTime"] !== null) {
            $this->HeuristicCacheTime = $param["HeuristicCacheTime"];
        }
    }
}
