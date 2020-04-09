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
 * Video timestamp information
 *
 * @method array getKeyFrameDescSet() Obtain Information array of video timestamps.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeyFrameDescSet(array $KeyFrameDescSet) Set Information array of video timestamps.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaKeyFrameDescInfo extends AbstractModel
{
    /**
     * @var array Information array of video timestamps.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeyFrameDescSet;

    /**
     * @param array $KeyFrameDescSet Information array of video timestamps.
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
        if (array_key_exists("KeyFrameDescSet",$param) and $param["KeyFrameDescSet"] !== null) {
            $this->KeyFrameDescSet = [];
            foreach ($param["KeyFrameDescSet"] as $key => $value){
                $obj = new MediaKeyFrameDescItem();
                $obj->deserialize($value);
                array_push($this->KeyFrameDescSet, $obj);
            }
        }
    }
}
