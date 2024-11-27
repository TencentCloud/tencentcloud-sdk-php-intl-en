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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ForceQN response structure.
 *
 * @method integer getC() Obtain Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setC(integer $C) Set Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getM() Obtain msg
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setM(string $M) Set msg
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class ForceQNResponse extends AbstractModel
{
    /**
     * @var integer Status
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $C;

    /**
     * @var string msg
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $M;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $C Status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $M msg
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("C",$param) and $param["C"] !== null) {
            $this->C = $param["C"];
        }

        if (array_key_exists("M",$param) and $param["M"] !== null) {
            $this->M = $param["M"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}