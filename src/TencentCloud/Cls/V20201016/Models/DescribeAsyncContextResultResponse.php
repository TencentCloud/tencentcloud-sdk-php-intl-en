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
 * DescribeAsyncContextResult response structure.
 *
 * @method boolean getPrevOver() Obtain Whether the previous logs have been returned
 * @method void setPrevOver(boolean $PrevOver) Set Whether the previous logs have been returned
 * @method boolean getNextOver() Obtain Whether the next logs have been returned
 * @method void setNextOver(boolean $NextOver) Set Whether the next logs have been returned
 * @method array getResults() Obtain Log content
 * @method void setResults(array $Results) Set Log content
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAsyncContextResultResponse extends AbstractModel
{
    /**
     * @var boolean Whether the previous logs have been returned
     */
    public $PrevOver;

    /**
     * @var boolean Whether the next logs have been returned
     */
    public $NextOver;

    /**
     * @var array Log content
     */
    public $Results;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $PrevOver Whether the previous logs have been returned
     * @param boolean $NextOver Whether the next logs have been returned
     * @param array $Results Log content
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PrevOver",$param) and $param["PrevOver"] !== null) {
            $this->PrevOver = $param["PrevOver"];
        }

        if (array_key_exists("NextOver",$param) and $param["NextOver"] !== null) {
            $this->NextOver = $param["NextOver"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new LogInfo();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
