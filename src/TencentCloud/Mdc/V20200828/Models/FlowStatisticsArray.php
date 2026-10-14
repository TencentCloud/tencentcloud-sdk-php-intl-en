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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of the stream's statistical data.
 *
 * @method integer getTimestamp() Obtain Timestamp.
 * @method void setTimestamp(integer $Timestamp) Set Timestamp.
 * @method array getFlowStatistics() Obtain Statistics for each session.
 * @method void setFlowStatistics(array $FlowStatistics) Set Statistics for each session.
 */
class FlowStatisticsArray extends AbstractModel
{
    /**
     * @var integer Timestamp.
     */
    public $Timestamp;

    /**
     * @var array Statistics for each session.
     */
    public $FlowStatistics;

    /**
     * @param integer $Timestamp Timestamp.
     * @param array $FlowStatistics Statistics for each session.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("FlowStatistics",$param) and $param["FlowStatistics"] !== null) {
            $this->FlowStatistics = [];
            foreach ($param["FlowStatistics"] as $key => $value){
                $obj = new FlowStatistics();
                $obj->deserialize($value);
                array_push($this->FlowStatistics, $obj);
            }
        }
    }
}
