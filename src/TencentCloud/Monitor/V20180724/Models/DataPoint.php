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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring data point
 *
 * @method array getDimensions() Obtain Combination of instance object dimensions
 * @method void setDimensions(array $Dimensions) Set Combination of instance object dimensions
 * @method array getTimestamps() Obtain The array of timestamps indicating at which points in time there is data. Missing timestamps have no data points (i.e., missed)
 * @method void setTimestamps(array $Timestamps) Set The array of timestamps indicating at which points in time there is data. Missing timestamps have no data points (i.e., missed)
 * @method array getValues() Obtain The array of monitoring values, which is in one-to-one correspondence to Timestamps
 * @method void setValues(array $Values) Set The array of monitoring values, which is in one-to-one correspondence to Timestamps
 */
class DataPoint extends AbstractModel
{
    /**
     * @var array Combination of instance object dimensions
     */
    public $Dimensions;

    /**
     * @var array The array of timestamps indicating at which points in time there is data. Missing timestamps have no data points (i.e., missed)
     */
    public $Timestamps;

    /**
     * @var array The array of monitoring values, which is in one-to-one correspondence to Timestamps
     */
    public $Values;

    /**
     * @param array $Dimensions Combination of instance object dimensions
     * @param array $Timestamps The array of timestamps indicating at which points in time there is data. Missing timestamps have no data points (i.e., missed)
     * @param array $Values The array of monitoring values, which is in one-to-one correspondence to Timestamps
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
        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new Dimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
