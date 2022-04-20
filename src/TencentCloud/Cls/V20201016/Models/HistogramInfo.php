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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Histogram details
 *
 * @method integer getCount() Obtain The number of logs within the statistical period
 * @method void setCount(integer $Count) Set The number of logs within the statistical period
 * @method integer getBTime() Obtain Unix timestamp rounded by `period`, in milliseconds
 * @method void setBTime(integer $BTime) Set Unix timestamp rounded by `period`, in milliseconds
 */
class HistogramInfo extends AbstractModel
{
    /**
     * @var integer The number of logs within the statistical period
     */
    public $Count;

    /**
     * @var integer Unix timestamp rounded by `period`, in milliseconds
     */
    public $BTime;

    /**
     * @param integer $Count The number of logs within the statistical period
     * @param integer $BTime Unix timestamp rounded by `period`, in milliseconds
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("BTime",$param) and $param["BTime"] !== null) {
            $this->BTime = $param["BTime"];
        }
    }
}
