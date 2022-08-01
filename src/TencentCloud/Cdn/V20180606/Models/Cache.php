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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node cache expiration time configuration. There are two types of configuration:
+ Basic cache expiration rules configuration
+ Advanced cache expiration rules configuration
 *
 * @method SimpleCache getSimpleCache() Obtain Basic cache expiration time configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSimpleCache(SimpleCache $SimpleCache) Set Basic cache expiration time configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method AdvancedCache getAdvancedCache() Obtain (Disused) Advanced cache validity configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAdvancedCache(AdvancedCache $AdvancedCache) Set (Disused) Advanced cache validity configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getRuleCache() Obtain Advanced path cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleCache(array $RuleCache) Set Advanced path cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class Cache extends AbstractModel
{
    /**
     * @var SimpleCache Basic cache expiration time configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SimpleCache;

    /**
     * @var AdvancedCache (Disused) Advanced cache validity configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AdvancedCache;

    /**
     * @var array Advanced path cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleCache;

    /**
     * @param SimpleCache $SimpleCache Basic cache expiration time configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param AdvancedCache $AdvancedCache (Disused) Advanced cache validity configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $RuleCache Advanced path cache configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("SimpleCache",$param) and $param["SimpleCache"] !== null) {
            $this->SimpleCache = new SimpleCache();
            $this->SimpleCache->deserialize($param["SimpleCache"]);
        }

        if (array_key_exists("AdvancedCache",$param) and $param["AdvancedCache"] !== null) {
            $this->AdvancedCache = new AdvancedCache();
            $this->AdvancedCache->deserialize($param["AdvancedCache"]);
        }

        if (array_key_exists("RuleCache",$param) and $param["RuleCache"] !== null) {
            $this->RuleCache = [];
            foreach ($param["RuleCache"] as $key => $value){
                $obj = new RuleCache();
                $obj->deserialize($value);
                array_push($this->RuleCache, $obj);
            }
        }
    }
}
