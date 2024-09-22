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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectAIFakeFaces response structure.
 *
 * @method string getAttackRiskLevel() Obtain Whether the detected image is an attack: Low: No attack risk Mid: Moderately suspected attack High: Highly suspected attack
 * @method void setAttackRiskLevel(string $AttackRiskLevel) Set Whether the detected image is an attack: Low: No attack risk Mid: Moderately suspected attack High: Highly suspected attack
 * @method array getAttackRiskDetailList() Obtain A list of suspected attack traces detected. Note: When no attack traces are detected, an empty array is returned. This parameter is only used as a reference for result judgment. In actual applications, it is still recommended to use the result of AttackRiskLevel.
 * @method void setAttackRiskDetailList(array $AttackRiskDetailList) Set A list of suspected attack traces detected. Note: When no attack traces are detected, an empty array is returned. This parameter is only used as a reference for result judgment. In actual applications, it is still recommended to use the result of AttackRiskLevel.
 * @method ExtraInfo getExtraInfo() Obtain Additional Information
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) Set Additional Information
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DetectAIFakeFacesResponse extends AbstractModel
{
    /**
     * @var string Whether the detected image is an attack: Low: No attack risk Mid: Moderately suspected attack High: Highly suspected attack
     */
    public $AttackRiskLevel;

    /**
     * @var array A list of suspected attack traces detected. Note: When no attack traces are detected, an empty array is returned. This parameter is only used as a reference for result judgment. In actual applications, it is still recommended to use the result of AttackRiskLevel.
     */
    public $AttackRiskDetailList;

    /**
     * @var ExtraInfo Additional Information
     */
    public $ExtraInfo;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $AttackRiskLevel Whether the detected image is an attack: Low: No attack risk Mid: Moderately suspected attack High: Highly suspected attack
     * @param array $AttackRiskDetailList A list of suspected attack traces detected. Note: When no attack traces are detected, an empty array is returned. This parameter is only used as a reference for result judgment. In actual applications, it is still recommended to use the result of AttackRiskLevel.
     * @param ExtraInfo $ExtraInfo Additional Information
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
        if (array_key_exists("AttackRiskLevel",$param) and $param["AttackRiskLevel"] !== null) {
            $this->AttackRiskLevel = $param["AttackRiskLevel"];
        }

        if (array_key_exists("AttackRiskDetailList",$param) and $param["AttackRiskDetailList"] !== null) {
            $this->AttackRiskDetailList = [];
            foreach ($param["AttackRiskDetailList"] as $key => $value){
                $obj = new AttackRiskDetail();
                $obj->deserialize($value);
                array_push($this->AttackRiskDetailList, $obj);
            }
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new ExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}