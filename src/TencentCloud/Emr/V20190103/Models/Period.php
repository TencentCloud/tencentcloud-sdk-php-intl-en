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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Serverless HBase monthly subscription duration
 *
 * @method integer getTimeSpan() Obtain Time span.
 * @method void setTimeSpan(integer $TimeSpan) Set Time span.
 * @method string getTimeUnit() Obtain Time unit, "m" stands for month.
 * @method void setTimeUnit(string $TimeUnit) Set Time unit, "m" stands for month.
 */
class Period extends AbstractModel
{
    /**
     * @var integer Time span.
     */
    public $TimeSpan;

    /**
     * @var string Time unit, "m" stands for month.
     */
    public $TimeUnit;

    /**
     * @param integer $TimeSpan Time span.
     * @param string $TimeUnit Time unit, "m" stands for month.
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }
    }
}
