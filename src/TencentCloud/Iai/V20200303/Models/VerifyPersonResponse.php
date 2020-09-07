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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyPerson response structure.
 *
 * @method float getScore() Obtain Similarity between given face image and `PersonId`. If there are multiple faces under the `PersonId`, their information will be fused for verification.
 * @method void setScore(float $Score) Set Similarity between given face image and `PersonId`. If there are multiple faces under the `PersonId`, their information will be fused for verification.
 * @method boolean getIsMatch() Obtain Whether the person in the image matches the `PersonId`.
 * @method void setIsMatch(boolean $IsMatch) Set Whether the person in the image matches the `PersonId`.
 * @method string getFaceModelVersion() Obtain Algorithm model version used for face recognition in the group where the `Person` is, which is set when the group is created. For more information, please see [Algorithm Model Version](https://intl.cloud.tencent.com/document/product/867/40042?from_cn_redirect=1)
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used for face recognition in the group where the `Person` is, which is set when the group is created. For more information, please see [Algorithm Model Version](https://intl.cloud.tencent.com/document/product/867/40042?from_cn_redirect=1)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class VerifyPersonResponse extends AbstractModel
{
    /**
     * @var float Similarity between given face image and `PersonId`. If there are multiple faces under the `PersonId`, their information will be fused for verification.
     */
    public $Score;

    /**
     * @var boolean Whether the person in the image matches the `PersonId`.
     */
    public $IsMatch;

    /**
     * @var string Algorithm model version used for face recognition in the group where the `Person` is, which is set when the group is created. For more information, please see [Algorithm Model Version](https://intl.cloud.tencent.com/document/product/867/40042?from_cn_redirect=1)
     */
    public $FaceModelVersion;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $Score Similarity between given face image and `PersonId`. If there are multiple faces under the `PersonId`, their information will be fused for verification.
     * @param boolean $IsMatch Whether the person in the image matches the `PersonId`.
     * @param string $FaceModelVersion Algorithm model version used for face recognition in the group where the `Person` is, which is set when the group is created. For more information, please see [Algorithm Model Version](https://intl.cloud.tencent.com/document/product/867/40042?from_cn_redirect=1)
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("IsMatch",$param) and $param["IsMatch"] !== null) {
            $this->IsMatch = $param["IsMatch"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
