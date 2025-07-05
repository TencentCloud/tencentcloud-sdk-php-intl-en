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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Adaptive bitrate streaming information
 *
 * @method array getAdaptiveDynamicStreamingSet() Obtain Information array of adaptive bitrate streaming.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAdaptiveDynamicStreamingSet(array $AdaptiveDynamicStreamingSet) Set Information array of adaptive bitrate streaming.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaAdaptiveDynamicStreamingInfo extends AbstractModel
{
    /**
     * @var array Information array of adaptive bitrate streaming.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AdaptiveDynamicStreamingSet;

    /**
     * @param array $AdaptiveDynamicStreamingSet Information array of adaptive bitrate streaming.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AdaptiveDynamicStreamingSet",$param) and $param["AdaptiveDynamicStreamingSet"] !== null) {
            $this->AdaptiveDynamicStreamingSet = [];
            foreach ($param["AdaptiveDynamicStreamingSet"] as $key => $value){
                $obj = new AdaptiveDynamicStreamingInfoItem();
                $obj->deserialize($value);
                array_push($this->AdaptiveDynamicStreamingSet, $obj);
            }
        }
    }
}
