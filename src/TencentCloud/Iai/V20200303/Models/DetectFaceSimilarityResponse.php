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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectFaceSimilarity response structure.
 *
 * @method float getScore() Obtain The value range is [0.00, 100.00]. It is recommended that when the similarity is greater than or equal to 70, the person can be judged to be the same person, and the threshold can be adjusted according to the specific scenario (the false pass rate for a threshold of 70 is one in 1,000, and the false pass rate for a threshold of 80 is one in 10,000).
 * @method void setScore(float $Score) Set The value range is [0.00, 100.00]. It is recommended that when the similarity is greater than or equal to 70, the person can be judged to be the same person, and the threshold can be adjusted according to the specific scenario (the false pass rate for a threshold of 70 is one in 1,000, and the false pass rate for a threshold of 80 is one in 10,000).
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DetectFaceSimilarityResponse extends AbstractModel
{
    /**
     * @var float The value range is [0.00, 100.00]. It is recommended that when the similarity is greater than or equal to 70, the person can be judged to be the same person, and the threshold can be adjusted according to the specific scenario (the false pass rate for a threshold of 70 is one in 1,000, and the false pass rate for a threshold of 80 is one in 10,000).
     */
    public $Score;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $Score The value range is [0.00, 100.00]. It is recommended that when the similarity is greater than or equal to 70, the person can be judged to be the same person, and the threshold can be adjusted according to the specific scenario (the false pass rate for a threshold of 70 is one in 1,000, and the false pass rate for a threshold of 80 is one in 10,000).
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
