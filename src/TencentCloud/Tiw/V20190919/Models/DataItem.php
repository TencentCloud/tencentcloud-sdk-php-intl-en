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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Chart data, including the time, values, and details.
 *
 * @method string getTime() Obtain Time. The following formats are supported:
yyyy-mm
yyyy-mm-dd
yyyy-mm-dd HH:MM:SS
 * @method void setTime(string $Time) Set Time. The following formats are supported:
yyyy-mm
yyyy-mm-dd
yyyy-mm-dd HH:MM:SS
 * @method integer getValue() Obtain Values required for drawing charts.
 * @method void setValue(integer $Value) Set Values required for drawing charts.
 * @method array getDetails() Obtain Details of the values.
 * @method void setDetails(array $Details) Set Details of the values.
 */
class DataItem extends AbstractModel
{
    /**
     * @var string Time. The following formats are supported:
yyyy-mm
yyyy-mm-dd
yyyy-mm-dd HH:MM:SS
     */
    public $Time;

    /**
     * @var integer Values required for drawing charts.
     */
    public $Value;

    /**
     * @var array Details of the values.
     */
    public $Details;

    /**
     * @param string $Time Time. The following formats are supported:
yyyy-mm
yyyy-mm-dd
yyyy-mm-dd HH:MM:SS
     * @param integer $Value Values required for drawing charts.
     * @param array $Details Details of the values.
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new Detail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
