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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCallInMetrics response structure.
 *
 * @method integer getTimestamp() Obtain Timestamp.
 * @method void setTimestamp(integer $Timestamp) Set Timestamp.
 * @method CallInMetrics getTotalMetrics() Obtain Overall metrics.
 * @method void setTotalMetrics(CallInMetrics $TotalMetrics) Set Overall metrics.
 * @method array getNumberMetrics() Obtain Circuit dimension metrics.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNumberMetrics(array $NumberMetrics) Set Circuit dimension metrics.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSkillGroupMetrics() Obtain Skill group dimension metrics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSkillGroupMetrics(array $SkillGroupMetrics) Set Skill group dimension metrics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeCallInMetricsResponse extends AbstractModel
{
    /**
     * @var integer Timestamp.
     */
    public $Timestamp;

    /**
     * @var CallInMetrics Overall metrics.
     */
    public $TotalMetrics;

    /**
     * @var array Circuit dimension metrics.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NumberMetrics;

    /**
     * @var array Skill group dimension metrics
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SkillGroupMetrics;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Timestamp Timestamp.
     * @param CallInMetrics $TotalMetrics Overall metrics.
     * @param array $NumberMetrics Circuit dimension metrics.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SkillGroupMetrics Skill group dimension metrics
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("TotalMetrics",$param) and $param["TotalMetrics"] !== null) {
            $this->TotalMetrics = new CallInMetrics();
            $this->TotalMetrics->deserialize($param["TotalMetrics"]);
        }

        if (array_key_exists("NumberMetrics",$param) and $param["NumberMetrics"] !== null) {
            $this->NumberMetrics = [];
            foreach ($param["NumberMetrics"] as $key => $value){
                $obj = new CallInNumberMetrics();
                $obj->deserialize($value);
                array_push($this->NumberMetrics, $obj);
            }
        }

        if (array_key_exists("SkillGroupMetrics",$param) and $param["SkillGroupMetrics"] !== null) {
            $this->SkillGroupMetrics = [];
            foreach ($param["SkillGroupMetrics"] as $key => $value){
                $obj = new CallInSkillGroupMetrics();
                $obj->deserialize($value);
                array_push($this->SkillGroupMetrics, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}