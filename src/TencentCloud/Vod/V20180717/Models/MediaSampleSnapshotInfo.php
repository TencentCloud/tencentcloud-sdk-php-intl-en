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
 * Information of sampled screenshot of VOD file
 *
 * @method array getSampleSnapshotSet() Obtain Information set of sampled screenshots with the specified specifications. Each element represents a set of sampled screenshots with the same specification.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSampleSnapshotSet(array $SampleSnapshotSet) Set Information set of sampled screenshots with the specified specifications. Each element represents a set of sampled screenshots with the same specification.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaSampleSnapshotInfo extends AbstractModel
{
    /**
     * @var array Information set of sampled screenshots with the specified specifications. Each element represents a set of sampled screenshots with the same specification.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SampleSnapshotSet;

    /**
     * @param array $SampleSnapshotSet Information set of sampled screenshots with the specified specifications. Each element represents a set of sampled screenshots with the same specification.
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
        if (array_key_exists("SampleSnapshotSet",$param) and $param["SampleSnapshotSet"] !== null) {
            $this->SampleSnapshotSet = [];
            foreach ($param["SampleSnapshotSet"] as $key => $value){
                $obj = new MediaSampleSnapshotItem();
                $obj->deserialize($value);
                array_push($this->SampleSnapshotSet, $obj);
            }
        }
    }
}
