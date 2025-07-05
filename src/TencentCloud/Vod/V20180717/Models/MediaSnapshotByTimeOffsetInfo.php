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
 * Information of time point screenshot in VOD file
 *
 * @method array getSnapshotByTimeOffsetSet() Obtain Information set of time point screenshots with a specified specification. Currently, there can be only one set of screenshots for each specification.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotByTimeOffsetSet(array $SnapshotByTimeOffsetSet) Set Information set of time point screenshots with a specified specification. Currently, there can be only one set of screenshots for each specification.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaSnapshotByTimeOffsetInfo extends AbstractModel
{
    /**
     * @var array Information set of time point screenshots with a specified specification. Currently, there can be only one set of screenshots for each specification.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotByTimeOffsetSet;

    /**
     * @param array $SnapshotByTimeOffsetSet Information set of time point screenshots with a specified specification. Currently, there can be only one set of screenshots for each specification.
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
        if (array_key_exists("SnapshotByTimeOffsetSet",$param) and $param["SnapshotByTimeOffsetSet"] !== null) {
            $this->SnapshotByTimeOffsetSet = [];
            foreach ($param["SnapshotByTimeOffsetSet"] as $key => $value){
                $obj = new MediaSnapshotByTimeOffsetItem();
                $obj->deserialize($value);
                array_push($this->SnapshotByTimeOffsetSet, $obj);
            }
        }
    }
}
