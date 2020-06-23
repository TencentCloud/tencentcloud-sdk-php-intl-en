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
 * GetSimilarPersonResult response structure.
 *
 * @method float getProgress() Obtain Duplicate check task completion progress. Value range: [0.0,100.0]. `SimilarPersons` takes effect only if this parameter value is 100.
 * @method void setProgress(float $Progress) Set Duplicate check task completion progress. Value range: [0.0,100.0]. `SimilarPersons` takes effect only if this parameter value is 100.
 * @method string getSimilarPersonsUrl() Obtain Temporary download link for the information file of the persons suspected to be duplicate. The validity period is 5 minutes, and the result file retention duration is 90 days.
The file content is an array of `SimilarPerson` values.
 * @method void setSimilarPersonsUrl(string $SimilarPersonsUrl) Set Temporary download link for the information file of the persons suspected to be duplicate. The validity period is 5 minutes, and the result file retention duration is 90 days.
The file content is an array of `SimilarPerson` values.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetSimilarPersonResultResponse extends AbstractModel
{
    /**
     * @var float Duplicate check task completion progress. Value range: [0.0,100.0]. `SimilarPersons` takes effect only if this parameter value is 100.
     */
    public $Progress;

    /**
     * @var string Temporary download link for the information file of the persons suspected to be duplicate. The validity period is 5 minutes, and the result file retention duration is 90 days.
The file content is an array of `SimilarPerson` values.
     */
    public $SimilarPersonsUrl;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $Progress Duplicate check task completion progress. Value range: [0.0,100.0]. `SimilarPersons` takes effect only if this parameter value is 100.
     * @param string $SimilarPersonsUrl Temporary download link for the information file of the persons suspected to be duplicate. The validity period is 5 minutes, and the result file retention duration is 90 days.
The file content is an array of `SimilarPerson` values.
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
        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("SimilarPersonsUrl",$param) and $param["SimilarPersonsUrl"] !== null) {
            $this->SimilarPersonsUrl = $param["SimilarPersonsUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
