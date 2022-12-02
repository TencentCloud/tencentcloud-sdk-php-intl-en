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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data consistency check details
 *
 * @method DifferenceDetail getDifference() Obtain Details of inconsistent tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDifference(DifferenceDetail $Difference) Set Details of inconsistent tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SkippedDetail getSkipped() Obtain Details of skipped tables
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSkipped(SkippedDetail $Skipped) Set Details of skipped tables
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompareDetailInfo extends AbstractModel
{
    /**
     * @var DifferenceDetail Details of inconsistent tables
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Difference;

    /**
     * @var SkippedDetail Details of skipped tables
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Skipped;

    /**
     * @param DifferenceDetail $Difference Details of inconsistent tables
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SkippedDetail $Skipped Details of skipped tables
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
        if (array_key_exists("Difference",$param) and $param["Difference"] !== null) {
            $this->Difference = new DifferenceDetail();
            $this->Difference->deserialize($param["Difference"]);
        }

        if (array_key_exists("Skipped",$param) and $param["Skipped"] !== null) {
            $this->Skipped = new SkippedDetail();
            $this->Skipped->deserialize($param["Skipped"]);
        }
    }
}
