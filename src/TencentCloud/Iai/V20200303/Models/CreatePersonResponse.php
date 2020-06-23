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
 * CreatePerson response structure.
 *
 * @method string getFaceId() Obtain Unique ID of face image.
 * @method void setFaceId(string $FaceId) Set Unique ID of face image.
 * @method FaceRect getFaceRect() Obtain Position of detected face frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFaceRect(FaceRect $FaceRect) Set Position of detected face frame.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSimilarPersonId() Obtain `PersonId` of suspected duplicate person. 
This parameter is meaningful only if the `UniquePersonControl` parameter is not 0 and there is a suspected duplicate person in the group.
 * @method void setSimilarPersonId(string $SimilarPersonId) Set `PersonId` of suspected duplicate person. 
This parameter is meaningful only if the `UniquePersonControl` parameter is not 0 and there is a suspected duplicate person in the group.
 * @method string getFaceModelVersion() Obtain Algorithm model version used for face recognition.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used for face recognition.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreatePersonResponse extends AbstractModel
{
    /**
     * @var string Unique ID of face image.
     */
    public $FaceId;

    /**
     * @var FaceRect Position of detected face frame.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FaceRect;

    /**
     * @var string `PersonId` of suspected duplicate person. 
This parameter is meaningful only if the `UniquePersonControl` parameter is not 0 and there is a suspected duplicate person in the group.
     */
    public $SimilarPersonId;

    /**
     * @var string Algorithm model version used for face recognition.
     */
    public $FaceModelVersion;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $FaceId Unique ID of face image.
     * @param FaceRect $FaceRect Position of detected face frame.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SimilarPersonId `PersonId` of suspected duplicate person. 
This parameter is meaningful only if the `UniquePersonControl` parameter is not 0 and there is a suspected duplicate person in the group.
     * @param string $FaceModelVersion Algorithm model version used for face recognition.
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
        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("FaceRect",$param) and $param["FaceRect"] !== null) {
            $this->FaceRect = new FaceRect();
            $this->FaceRect->deserialize($param["FaceRect"]);
        }

        if (array_key_exists("SimilarPersonId",$param) and $param["SimilarPersonId"] !== null) {
            $this->SimilarPersonId = $param["SimilarPersonId"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
