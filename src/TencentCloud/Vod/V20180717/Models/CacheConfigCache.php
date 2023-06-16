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
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method integer getCacheTime() Obtain 
 * @method void setCacheTime(integer $CacheTime) Set 
 * @method string getCompareMaxAge() Obtain 
 * @method void setCompareMaxAge(string $CompareMaxAge) Set 
 * @method string getIgnoreCacheControl() Obtain 
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) Set 
 * @method string getIgnoreSetCookie() Obtain 
 * @method void setIgnoreSetCookie(string $IgnoreSetCookie) Set 
 */
class CacheConfigCache extends AbstractModel
{
    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var integer 
     */
    public $CacheTime;

    /**
     * @var string 
     */
    public $CompareMaxAge;

    /**
     * @var string 
     */
    public $IgnoreCacheControl;

    /**
     * @var string 
     */
    public $IgnoreSetCookie;

    /**
     * @param string $Switch 
     * @param integer $CacheTime 
     * @param string $CompareMaxAge 
     * @param string $IgnoreCacheControl 
     * @param string $IgnoreSetCookie 
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }

        if (array_key_exists("CompareMaxAge",$param) and $param["CompareMaxAge"] !== null) {
            $this->CompareMaxAge = $param["CompareMaxAge"];
        }

        if (array_key_exists("IgnoreCacheControl",$param) and $param["IgnoreCacheControl"] !== null) {
            $this->IgnoreCacheControl = $param["IgnoreCacheControl"];
        }

        if (array_key_exists("IgnoreSetCookie",$param) and $param["IgnoreSetCookie"] !== null) {
            $this->IgnoreSetCookie = $param["IgnoreSetCookie"];
        }
    }
}
