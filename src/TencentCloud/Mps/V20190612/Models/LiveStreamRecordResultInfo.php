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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Live stream recording result.
 *
 * @method integer getRecordOver() Obtain Whether recording ends.
0: Recording does not end, returning a single file.
1: Recording ends, returning all recording files.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordOver(integer $RecordOver) Set Whether recording ends.
0: Recording does not end, returning a single file.
1: Recording ends, returning all recording files.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFileResults() Obtain File list.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileResults(array $FileResults) Set File list.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveStreamRecordResultInfo extends AbstractModel
{
    /**
     * @var integer Whether recording ends.
0: Recording does not end, returning a single file.
1: Recording ends, returning all recording files.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordOver;

    /**
     * @var array File list.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileResults;

    /**
     * @param integer $RecordOver Whether recording ends.
0: Recording does not end, returning a single file.
1: Recording ends, returning all recording files.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FileResults File list.

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RecordOver",$param) and $param["RecordOver"] !== null) {
            $this->RecordOver = $param["RecordOver"];
        }

        if (array_key_exists("FileResults",$param) and $param["FileResults"] !== null) {
            $this->FileResults = [];
            foreach ($param["FileResults"] as $key => $value){
                $obj = new LiveRecordFile();
                $obj->deserialize($value);
                array_push($this->FileResults, $obj);
            }
        }
    }
}
