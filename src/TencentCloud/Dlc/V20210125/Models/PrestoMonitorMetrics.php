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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Presto monitoring metrics
 *
 * @method float getLocalCacheHitRate() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocalCacheHitRate(float $LocalCacheHitRate) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getFragmentCacheHitRate() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFragmentCacheHitRate(float $FragmentCacheHitRate) Set Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrestoMonitorMetrics extends AbstractModel
{
    /**
     * @var float Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LocalCacheHitRate;

    /**
     * @var float Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FragmentCacheHitRate;

    /**
     * @param float $LocalCacheHitRate Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $FragmentCacheHitRate Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("LocalCacheHitRate",$param) and $param["LocalCacheHitRate"] !== null) {
            $this->LocalCacheHitRate = $param["LocalCacheHitRate"];
        }

        if (array_key_exists("FragmentCacheHitRate",$param) and $param["FragmentCacheHitRate"] !== null) {
            $this->FragmentCacheHitRate = $param["FragmentCacheHitRate"];
        }
    }
}
